<?php
	defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
	class details extends CI_Controller {
		public function index() {
			$head = $this->load->view('html/head', array(
				'author' => 'MUHAMMAD YUSUF NUR FAJAR',
				'description' => 'Website Resmi Jaya Baru Selular',
				'title' => 'Apple Iphone 7 | Jaya Baru Selular | Belanja Hemat, Lengkap, dan Nyaman'
			), TRUE);
			$this->load->view('details', array(
				'head' => $head
			));
		}
	}