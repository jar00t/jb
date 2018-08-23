<?php
	defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
	class login extends CI_Controller {

		public $data;

		public function __construct() {
			parent::__construct();
			$this->load->library('session');
			if (isset($this->session->userdata['jb-user'])) {
	            header('location: ' . base_url('jebews/dashboard'));
	        }
	        $this->load->helper('cookie');
            if (get_cookie('throw-message') != NULL) {
                $this->data['message'] = explode(',', get_cookie('throw-message'));
                delete_cookie('throw-message');
            }
		}

		public function auth() {
			$this->load->model('user');
			if ($this->user->auth() == FALSE) {
				$this->data['message'] = array('error', 'Username & Password salah');
			} else {
				$this->data = array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password')
				);

				$this->session->set_userdata('jb-user', $this->data);
				header('location: ' . base_url('jebews/dashboard'));
			}
		}

		public function load() {
			$this->data['head'] = $this->load->view('jebews/html/head', array(
				'author' => 'MUHAMMAD YUSUF NUR FAJAR',
				'description' => 'Website Resmi Jaya Baru Selular',
				'title' => 'Login | Jaya Baru Selular | Belanja Hemat, Lengkap, dan Nyaman'
			), TRUE);
			$this->load->view('jebews/login', $this->data);
		}

		public function index() {
			if ($this->input->post('username') !== NULL) {
				$this->auth();
			}
			$this->load();
		}
	}