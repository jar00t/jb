<?php
	defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
	class home extends CI_Controller {
		public function index() {
			$head = $this->load->view('html/head', array(
				'author' => 'MUHAMMAD YUSUF NUR FAJAR',
				'description' => 'Website Resmi Jaya Baru Selular',
				'title' => 'Jaya Baru Selular | Belanja Hemat, Lengkap, dan Nyaman'
			), TRUE);
			$this->load->view('home', array(
				'head' => $head
			));
		}
	}