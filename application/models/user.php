<?php
    defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
    class user extends CI_Model {

        public function auth() {
            $this->load->database();
            $this->db->where('USERNAME', $this->input->post('username'));
            $this->db->where('PASSWORD', $this->input->post('password'));

            if ($this->db->get('USER')->num_rows() == 1) {
                return TRUE;
            } else {
                return FALSE;
            }
        }

        public function data() {
            $this->load->database();
            $this->db->where('USERNAME', $this->session->userdata('jb-user')['username']);
            $this->db->where('PASSWORD', $this->session->userdata('jb-user')['password']);
            $user = $this->db->get('USER');
            if ($user->num_rows() == 1) {
                return $user->row();
            } else {
                return NULL;
            }
        }

        public function password($password = '') {
            $this->load->database();
            $this->db->where('USERNAME', $this->session->userdata['jb-user']['username']);
            $this->db->where('PASSWORD', $password);

            if ($this->db->get('USER')->num_rows() == 1) {
                return TRUE;
            } else {
                return FALSE;
            }
        }

    }