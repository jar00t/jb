<?php
    defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
    class CI_Controller {
        private static $instance;
        public function __construct() {
            self::$instance =& $this;
            foreach (is_loaded() as $var => $class) {
                $this->$var =& load_class($class);
            }
            $this->load =& load_class('Loader', 'core');
            $this->load->initialize();
            log_message('info', 'Controller Class telah di inisialisasi');
        }
        public static function &get_instance() {
            return self::$instance;
        }
    }