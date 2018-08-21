<?php
	defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
	class lapor extends CI_Controller {

		public $data;

		public function index() {
			$this->data['head'] = $this->load->view('html/head', array(
				'author' => 'MUHAMMAD YUSUF NUR FAJAR',
				'description' => 'Website Resmi Jaya Baru Selular',
				'title' => 'Lapor! | Jaya Baru Selular | Belanja Hemat, Lengkap, dan Nyaman'
			), TRUE);
			$this->load->view('lapor', $this->data);
		}
	}