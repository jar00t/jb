<?php
    defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
    function &DB($params = '', $query_builder_override = NULL) {
        if (is_string($params) && strpos($params, '://') === FALSE) {
            if (!file_exists($file_path = APPPATH . 'config/' . ENVIRONMENT . '/database.php') && !file_exists($file_path = APPPATH . 'config/database.php')) {
                show_error('File konfigurasi database.php tidak ada.');
            }
            include($file_path);
            if (class_exists('CI_Controller', FALSE)) {
                foreach (get_instance()->load->get_package_paths() as $path) {
                    if ($path !== APPPATH) {
                        if (file_exists($file_path = $path . 'config/' . ENVIRONMENT . '/database.php')) {
                            include($file_path);
                        } elseif (file_exists($file_path = $path . 'config/database.php')) {
                            include($file_path);
                        }
                    }
                }
            }
            if (!isset($db) OR count($db) === 0) {
                show_error('Tidak ada pengaturan koneksi database yang ditemukan dalam file konfigurasi database.');
            }
            if ($params !== '') {
                $active_group = $params;
            }
            if (!isset($active_group)) {
                show_error('Grup koneksi database belum di set pada $active_group di file config/database.php.');
            } elseif (!isset($db[$active_group])) {
                show_error('Grup koneksi (' . $active_group . ') pada file config/database.php tidak valid.');
            }
            $params = $db[$active_group];
        } elseif (is_string($params)) {
            if (($dsn = @parse_url($params)) === FALSE) {
                show_error('Koneksi DB String tidak valid');
            }
            $params = array(
                'dbdriver' => $dsn['scheme'],
                'hostname' => isset($dsn['host']) ? rawurldecode($dsn['host']) : '',
                'port' => isset($dsn['port']) ? rawurldecode($dsn['port']) : '',
                'username' => isset($dsn['user']) ? rawurldecode($dsn['user']) : '',
                'password' => isset($dsn['pass']) ? rawurldecode($dsn['pass']) : '',
                'database' => isset($dsn['path']) ? rawurldecode(substr($dsn['path'], 1)) : ''
            );
            if (isset($dsn['query'])) {
                parse_str($dsn['query'], $extra);
                foreach ($extra as $key => $val) {
                    if (is_string($val) && in_array(strtoupper($val), array(
                        'TRUE',
                        'FALSE',
                        'NULL'
                    ))) {
                        $val = var_export($val, TRUE);
                    }
                    $params[$key] = $val;
                }
            }
        }
        if (empty($params['dbdriver'])) {
            show_error('Pilih tipe database untuk dihubungkan.');
        }
        if ($query_builder_override !== NULL) {
            $query_builder = $query_builder_override;
        } elseif (!isset($query_builder) && isset($active_record)) {
            $query_builder = $active_record;
        }
        require_once(BASEPATH . 'database/DB_driver.php');
        if (!isset($query_builder) OR $query_builder === TRUE) {
            require_once(BASEPATH . 'database/DB_query_builder.php');
            if (!class_exists('CI_DB', FALSE)) {
                class CI_DB extends CI_DB_query_builder {
                }
            }
        } elseif (!class_exists('CI_DB', FALSE)) {
            class CI_DB extends CI_DB_driver {
            }
        }
        $driver_file = BASEPATH . 'database/drivers/' . $params['dbdriver'] . '/' . $params['dbdriver'] . '_driver.php';
        file_exists($driver_file) OR show_error('Driver DB tidak valid');
        require_once($driver_file);
        $driver = 'CI_DB_' . $params['dbdriver'] . '_driver';
        $DB     = new $driver($params);
        if (!empty($DB->subdriver)) {
            $driver_file = BASEPATH . 'database/drivers/' . $DB->dbdriver . '/subdrivers/' . $DB->dbdriver . '_' . $DB->subdriver . '_driver.php';
            if (file_exists($driver_file)) {
                require_once($driver_file);
                $driver = 'CI_DB_' . $DB->dbdriver . '_' . $DB->subdriver . '_driver';
                $DB     = new $driver($params);
            }
        }
        $DB->initialize();
        return $DB;
    }