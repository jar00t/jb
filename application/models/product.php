<?php
    defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
    class product extends CI_Model {

        public function count($what) {
            switch ($what) {
                case 'product_available':
                    return 659;
                    break;
                case 'product_total':
                    return 890;
                    break;

                default:
                    return 0;
                    break;
            }
        }

    }