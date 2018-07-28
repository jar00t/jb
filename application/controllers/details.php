<?php
	defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
	class details extends CI_Controller {

		public $data;

		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function index($url = '') {
			$this->db->where('URL', $url);
			$this->data['product'] = $this->db->get('PRODUCT')->row();
			$this->data['head'] = $this->load->view('html/head', array(
				'author' => 'MUHAMMAD YUSUF NUR FAJAR',
				'description' => 'Website Resmi Jaya Baru Selular',
				'title' => $this->data['product']->NAME . ' | Jaya Baru Selular | Belanja Hemat, Lengkap, dan Nyaman'
			), TRUE);
			$this->load->view('details', $this->data);
		}
	}