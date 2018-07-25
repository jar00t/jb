<?php
    defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
    class visitor extends CI_Model {

        public function count($what) {
            switch ($what) {
                case 'visitor_today':
                    return 100;
                    break;
                case 'visitor_tomorrow':
                    return 90;
                    break;

                default:
                    return 0;
                    break;
            }
        }

    }