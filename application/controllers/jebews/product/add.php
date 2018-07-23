<?php
	defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
	class add extends CI_Controller {
		public function index() {
			$head = $this->load->view('jebews/html/head', array(
				'author' => 'MUHAMMAD YUSUF NUR FAJAR',
				'description' => 'Website Resmi Jaya Baru Selular',
				'title' => 'Tambah Produk | Jaya Baru Selular | Belanja Hemat, Lengkap, dan Nyaman'
			), TRUE);
			$this->load->view('jebews/product/add', array(
				'head' => $head
			));
		}
	}