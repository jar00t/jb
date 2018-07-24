<?php
    defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
    class CI_Session_redis_driver extends CI_Session_driver implements SessionHandlerInterface {
        protected $_redis;
        protected $_key_prefix = 'ci_session:';
        protected $_lock_key;
        protected $_key_exists = FALSE;
        public function __construct(&$params) {
            parent::__construct($params);
            if (empty($this->_config['save_path'])) {
                log_message('error', 'Session: Tak ada Redis save path yang terkonfigurasi.');
            } elseif (preg_match('#(?:tcp://)?([^:?]+)(?:\:(\d+))?(\?.+)?#', $this->_config['save_path'], $matches)) {
                isset($matches[3]) OR $matches[3] = '';
                $this->_config['save_path'] = array(
                    'host' => $matches[1],
                    'port' => empty($matches[2]) ? NULL : $matches[2],
                    'password' => preg_match('#auth=([^\s&]+)#', $matches[3], $match) ? $match[1] : NULL,
                    'database' => preg_match('#database=(\d+)#', $matches[3], $match) ? (int) $match[1] : NULL,
                    'timeout' => preg_match('#timeout=(\d+\.\d+)#', $matches[3], $match) ? (float) $match[1] : NULL
                );
                preg_match('#prefix=([^\s&]+)#', $matches[3], $match) && $this->_key_prefix = $match[1];
            } else {
                log_message('error', 'Session: Format Redis save path tidak valid: ' . $this->_config['save_path']);
            }
            if ($this->_config['match_ip'] === TRUE) {
                $this->_key_prefix .= $_SERVER['REMOTE_ADDR'] . ':';
            }
        }
        public function open($save_path, $name) {
            if (empty($this->_config['save_path'])) {
                return $this->_fail();
            }
            $redis = new Redis();
            if (!$redis->connect($this->_config['save_path']['host'], $this->_config['save_path']['port'], $this->_config['save_path']['timeout'])) {
                log_message('error', 'Session: Gagal mengkoneksikan Redis dengan pengaturan.');
            } elseif (isset($this->_config['save_path']['password']) && !$redis->auth($this->_config['save_path']['password'])) {
                log_message('error', 'Session: Gagal mengautektikasi Redis instance.');
            } elseif (isset($this->_config['save_path']['database']) && !$redis->select($this->_config['save_path']['database'])) {
                log_message('error', 'Session: Gagal memilih database Redis dengan index ' . $this->_config['save_path']['database']);
            } else {
                $this->_redis = $redis;
                return $this->_success;
            }
            $this->php5_validate_id();
            return $this->_fail();
        }
        public function read($session_id) {
            if (isset($this->_redis) && $this->_get_lock($session_id)) {
                $this->_session_id = $session_id;
                $session_data      = $this->_redis->get($this->_key_prefix . $session_id);
                is_string($session_data) ? $this->_key_exists = TRUE : $session_data = '';
                $this->_fingerprint = md5($session_data);
                return $session_data;
            }
            return $this->_fail();
        }
        public function write($session_id, $session_data) {
            if (!isset($this->_redis, $this->_lock_key)) {
                return $this->_fail();
            } elseif ($session_id !== $this->_session_id) {
                if (!$this->_release_lock() OR !$this->_get_lock($session_id)) {
                    return $this->_fail();
                }
                $this->_key_exists = FALSE;
                $this->_session_id = $session_id;
            }
            $this->_redis->setTimeout($this->_lock_key, 300);
            if ($this->_fingerprint !== ($fingerprint = md5($session_data)) OR $this->_key_exists === FALSE) {
                if ($this->_redis->set($this->_key_prefix . $session_id, $session_data, $this->_config['expiration'])) {
                    $this->_fingerprint = $fingerprint;
                    $this->_key_exists  = TRUE;
                    return $this->_success;
                }
                return $this->_fail();
            }
            return ($this->_redis->setTimeout($this->_key_prefix . $session_id, $this->_config['expiration'])) ? $this->_success : $this->_fail();
        }
        public function close() {
            if (isset($this->_redis)) {
                try {
                    if ($this->_redis->ping() === '+PONG') {
                        $this->_release_lock();
                        if ($this->_redis->close() === FALSE) {
                            return $this->_fail();
                        }
                    }
                }
                catch (RedisException $e) {
                    log_message('error', 'Session: Ada RedisException pada close(): ' . $e->getMessage());
                }
                $this->_redis = NULL;
                return $this->_success;
            }
            return $this->_success;
        }
        public function destroy($session_id) {
            if (isset($this->_redis, $this->_lock_key)) {
                if (($result = $this->_redis->delete($this->_key_prefix . $session_id)) !== 1) {
                    log_message('debug', 'Session: Redis::delete() ingin kembali ke 1, ambil ' . var_export($result, TRUE) . ' sebagai gantinya.');
                }
                $this->_cookie_destroy();
                return $this->_success;
            }
            return $this->_fail();
        }
        public function gc($maxlifetime) {
            return $this->_success;
        }
        public function validateId($id) {
            return (bool) $this->_redis->exists($this->_key_prefix . $id);
        }
        protected function _get_lock($session_id) {
            if ($this->_lock_key === $this->_key_prefix . $session_id . ':lock') {
                return $this->_redis->setTimeout($this->_lock_key, 300);
            }
            $lock_key = $this->_key_prefix . $session_id . ':lock';
            $attempt  = 0;
            do {
                if (($ttl = $this->_redis->ttl($lock_key)) > 0) {
                    sleep(1);
                    continue;
                }
                $result = ($ttl === -2) ? $this->_redis->set($lock_key, time(), array(
                    'nx',
                    'ex' => 300
                )) : $this->_redis->setex($lock_key, 300, time());
                if (!$result) {
                    log_message('error', 'Session: Error saat mencoba mencari kunci untuk ' . $this->_key_prefix . $session_id);
                    return FALSE;
                }
                $this->_lock_key = $lock_key;
                break;
            } while (++$attempt < 30);
            if ($attempt === 30) {
                log_message('error', 'Session: Gagal mencari kunci untuk ' . $this->_key_prefix . $session_id . ' after 30 attempts, aborting.');
                return FALSE;
            } elseif ($ttl === -1) {
                log_message('debug', 'Session: Kunci untuk ' . $this->_key_prefix . $session_id . ' tidak memiliki TTL, diutamakan.');
            }
            $this->_lock = TRUE;
            return TRUE;
        }
        protected function _release_lock() {
            if (isset($this->_redis, $this->_lock_key) && $this->_lock) {
                if (!$this->_redis->delete($this->_lock_key)) {
                    log_message('error', 'Session: Error saat membuka kunci ' . $this->_lock_key);
                    return FALSE;
                }
                $this->_lock_key = NULL;
                $this->_lock     = FALSE;
            }
            return TRUE;
        }
    }