<?php
	defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
	class items extends CI_Controller {

		public $data = array('price_min' => 0, 'price_max' => 20000000);
		public $title;

		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function search($type = '') {
			$this->data['title'] = ($this->input->get('keyword')? 'Mencari "' . $this->input->get('keyword') . '"' : 'Semua Produk') . ' ' . ucfirst($type);
			if ($type !== '') {
				$this->db->where('TYPE', ucfirst($type));
			}
			$this->filter();
			$this->load();
		}

		public function index($brand = 'all', $type = 'all') {
			if ($brand !== 'all') {
				$this->db->where('BRAND', ucfirst($brand));
				$this->data['title'] = 'Produk ' . ucfirst($brand);
			} else {
				$this->data['title'] = 'Semua Produk';
			}
			if ($type !== 'all') {
				$this->db->where('TYPE', ucfirst($type));
				$this->data['title'] = 'Produk ' . ucfirst($type) . ' ' . ucfirst($brand);
			} else {
				$this->data['title'] .= ' Semua Type';
			}
			$this->filter();
			$this->load();
		}

		public function filter() {
			if ($this->input->get('keyword')) {
				$this->db->like('NAME', $this->input->get('keyword'));
			} 
			if ($this->input->get('price-range')) {
				$keys = explode(' ', $this->input->get('price-range'));
				$this->data['price_min'] = (int) explode('.', $keys[0])[1] * 1000000;
				$this->data['price_max'] = (int) explode('.', $keys[2])[1] * 1000000;
				$this->db->where('PRICE >= ', $this->data['price_min']);
				$this->db->where('PRICE <= ', $this->data['price_max']);
			}
		}

		public function load() {
			$this->data['head'] = $this->load->view('html/head', array(
				'author' => 'MUHAMMAD YUSUF NUR FAJAR',
				'description' => 'Website Resmi Jaya Baru Selular',
				'title' => $this->data['title'] . ' | Jaya Baru Selular | Belanja Hemat, Lengkap, dan Nyaman'
			), TRUE);
			$this->data['url'] = explode('?', current_full_url(), 2);
            $this->data['page'] = str_replace(base_url(), '', $this->data['url'][0]);
			$this->db->select(array('NAME', 'BRAND', 'PRICE', 'IMAGE', 'URL'));
			$this->db->where('STATUS !==', 'DRAFT');
			$this->data['products'] = $this->db->get('PRODUCT')->result_array();
			$this->load->view('items', $this->data);
		}
	}