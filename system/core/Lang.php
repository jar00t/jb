<?php
    defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
    class CI_Lang {
        public $language = array();
        public $is_loaded = array();
        public function __construct() {
            log_message('info', 'Language Class telah di inisialisasi');
        }
        public function load($langfile, $idiom = '', $return = FALSE, $add_suffix = TRUE, $alt_path = '') {
            if (is_array($langfile)) {
                foreach ($langfile as $value) {
                    $this->load($value, $idiom, $return, $add_suffix, $alt_path);
                }
                return;
            }
            $langfile = str_replace('.php', '', $langfile);
            if ($add_suffix === TRUE) {
                $langfile = preg_replace('/_lang$/', '', $langfile) . '_lang';
            }
            $langfile .= '.php';
            if (empty($idiom) OR !preg_match('/^[a-z_-]+$/i', $idiom)) {
                $config =& get_config();
                $idiom = empty($config['language']) ? 'indonesia' : $config['language'];
            }
            if ($return === FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) {
                return;
            }
            $basepath = BASEPATH . 'language/' . $idiom . '/' . $langfile;
            if (($found = file_exists($basepath)) === TRUE) {
                include($basepath);
            }
            if ($alt_path !== '') {
                $alt_path .= 'language/' . $idiom . '/' . $langfile;
                if (file_exists($alt_path)) {
                    include($alt_path);
                    $found = TRUE;
                }
            } else {
                foreach (get_instance()->load->get_package_paths(TRUE) as $package_path) {
                    $package_path .= 'language/' . $idiom . '/' . $langfile;
                    if ($basepath !== $package_path && file_exists($package_path)) {
                        include($package_path);
                        $found = TRUE;
                        break;
                    }
                }
            }
            if ($found !== TRUE) {
                show_error('Tidak dapat memuat file bahasa yang diminta: language/' . $idiom . '/' . $langfile);
            }
            if (!isset($lang) OR !is_array($lang)) {
                log_message('error', 'File bahasa tidak berisi data: language/' . $idiom . '/' . $langfile);
                if ($return === TRUE) {
                    return array();
                }
                return;
            }
            if ($return === TRUE) {
                return $lang;
            }
            $this->is_loaded[$langfile] = $idiom;
            $this->language             = array_merge($this->language, $lang);
            log_message('info', 'File bahasa dimuat: language/' . $idiom . '/' . $langfile);
            return TRUE;
        }
        public function line($line, $log_errors = TRUE) {
            $value = isset($this->language[$line]) ? $this->language[$line] : FALSE;
            if ($value === FALSE && $log_errors === TRUE) {
                log_message('error', 'Tidak dapat menemukan baris "' . $line . '"');
            }
            return $value;
        }
    }