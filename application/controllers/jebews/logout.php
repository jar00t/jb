<?php
	defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
	class logout extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->library('session');
		}

		public function index() {
			$sess_array = array(
				'username' => ''
			);
			$this->session->unset_userdata('jb-user', $sess_array);
			header("location: " . base_url('jebews/login'));
		}
	}