<?php
	defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
	class home extends CI_Controller {

		public $data;

		public function index() {
			$this->data['head'] = $this->load->view('html/head', array(
				'author' => 'MUHAMMAD YUSUF NUR FAJAR',
				'description' => 'Website Resmi Jaya Baru Selular',
				'title' => 'Jaya Baru Selular | Belanja Hemat, Lengkap, dan Nyaman'
			), TRUE);
			$this->load->database();
			$this->db->select(array('NAME', 'PRICE', 'IMAGE', 'BANNER', 'URL', 'CAPTION'));
			$this->db->order_by('ID', 'asc');
			$this->data['product_total'] = $this->db->get('PRODUCT')->num_rows();
			$this->db->limit(2);
			$this->data['new_products'] = $this->db->get('PRODUCT')->result_array();
			$this->load->view('home', $this->data);
		}
	}