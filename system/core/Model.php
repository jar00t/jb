<?php
    defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
    class CI_Model {
        public function __construct() {
        }
        public function __get($key) {
            return get_instance()->$key;
        }
    }