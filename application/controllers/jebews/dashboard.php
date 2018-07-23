<?php
	defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
	class dashboard extends CI_Controller {
		public function index() {
			$head = $this->load->view('jebews/html/head', array(
				'author' => 'MUHAMMAD YUSUF NUR FAJAR',
				'description' => 'Website Resmi Jaya Baru Selular',
				'title' => 'Jaya Baru Selular | Belanja Hemat, Lengkap, dan Nyaman'
			), TRUE);
			$this->load->view('jebews/dashboard', array(
				'head' => $head
			));
		}
	}