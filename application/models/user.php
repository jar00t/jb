<?php
    defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
    class user extends CI_Model {

        public function auth() {
            $username = 'jar00t';
            $password = 'P@ssw0rd';

            if ($this->input->post('username') === $username && $this->input->post('password') === $password) {
                return TRUE;
            } else {
                return FALSE;
            }
        }

    }