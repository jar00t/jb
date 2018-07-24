<?php
	defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
	class login extends CI_Controller {

		public $data;

		public function __construct() {
			parent::__construct();
			$this->load->library('session');
		}

		public function auth() {
			if (isset($this->session->userdata['logged_in'])) {
				echo "Sudah Login";
			} else {
				$this->data = array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password')
				);

				$this->session->set_userdata('logged_in', $this->data);
				echo "Berhasil Login";
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
			$this->load();
		}
	}