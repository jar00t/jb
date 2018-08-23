<?php
	defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
	class settings extends CI_Controller {

		public $data;

		public function __construct() {
			parent::__construct();
            $this->load->library('session');
            if (!isset($this->session->userdata['jb-user'])) {
                header("location: " . base_url('jebews/login'));
            }
            $this->load->helper(array('menu', 'form'));
            $this->load->model('user');
		}

        public function save() {
            $data = array(
                'NAME' => $this->input->post('user-fullname'),
                'GENDER' => $this->input->post('user-gender')
            );
            if ($this->input->post('user-oldpass') !== '' && $this->input->post('user-newpass') === '') {
                $this->data['message'] = array('error', 'Password baru harus diisi');
            } elseif ($this->input->post('user-oldpass') === '' && $this->input->post('user-newpass') !== '') {
                $this->data['message'] = array('error', 'Password lama harus diisi');
            } elseif ($this->input->post('user-oldpass') !== '' && $this->input->post('user-newpass') !== '') {
                if ($this->user->password($this->input->post('user-oldpass')) !== TRUE) {
                    $this->data['message'] = array('error', 'Password lama salah');
                } else {
                    $data['PASSWORD'] = $this->input->post('user-newpass');
                    $this->update($data);
                }
            } else {
                $this->update($data);
            }
        }

        public function update($data = array()) {
            $this->load->database();
            $this->db->where('USERNAME', $this->session->userdata('jb-user')['username']);
            $this->db->where('PASSWORD', $this->session->userdata('jb-user')['password']);
            if($this->db->update('USER', $data)) {
                if (array_key_exists('PASSWORD', $data)) {
                    $this->load->helper('cookie');
                    $cookie = array(
                        'name' => 'throw-message',
                        'value' => 'success,Profil dan Password berhasil di perbaharui. Silahkan login kembali',
                        'expire' => '3600',
                    );
                    $this->input->set_cookie($cookie);
                    redirect(base_url('jebews/logout'));
                } else {
                    $this->data['message'] = array('success', 'Profil berhasil di perbaharui');
                }
            } else {
                $this->data['message'] = array('error', 'Profil gagal di perbaharui');
            }
        }

        public function load() {
            $this->data['head'] = $this->load->view('jebews/html/head', array(
                'author' => 'MUHAMMAD YUSUF NUR FAJAR',
                'description' => 'Website Resmi Jaya Baru Selular',
                'title' => 'Pengaturan Profil | Jaya Baru Selular | Belanja Hemat, Lengkap, dan Nyaman'
            ), TRUE);
            $this->data['user'] = $this->user->data();
            $this->data['menu'] = $this->load->view('jebews/html/menu', array('page' => array('profile', 'settings')), TRUE);
            $this->load->view('jebews/profile/settings', $this->data);
        }
        
        public function index() {
            if ($this->input->post('user-fullname') !== NULL) {
                $this->save();
            }
            $this->load();
        }
	}