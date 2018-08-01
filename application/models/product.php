<?php
    defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
    class product extends CI_Model {

        public function count($what) {
            switch ($what) {
                case 'product_available':
                    $this->load->database();
                    $this->db->where('STATUS !=', 'DRAFT');
                    $this->db->where('QUANTITY !=', 0);
                    return $this->db->get('PRODUCT')->num_rows();
                    break;
                case 'product_total':
                    $this->load->database();
                    return $this->db->get('PRODUCT')->num_rows();
                    break;

                default:
                    return 0;
                    break;
            }
        }

    }