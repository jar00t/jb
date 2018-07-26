<?php
    defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
    class file extends CI_Model {

        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        public function save($filename = '', $token = '') {
            if ($this->db->insert('UPLOAD', array('NAME' => $filename, 'TOKEN' => $token))) {
                return TRUE;
            } else {
                return FALSE;
            }
        }

        public function get($token = '') {
            $file = $this->db->get_where('UPLOAD', array('TOKEN' => $token));
            if($file->num_rows() > 0){
                $result = $file->row();
                return $result->NAME;
            } else {
                return FALSE;
            }
        }

    }