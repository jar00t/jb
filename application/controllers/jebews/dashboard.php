<?php
	defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
	class dashboard extends CI_Controller {

		public $data;

		public function __construct() {
			parent::__construct();
			$this->load->library('session');
			$this->load->model(array('product', 'visitor'));
			$this->load->helper(array('tools', 'menu'));
			if (!isset($this->session->userdata['jb-user'])) {
	            header("location: " . base_url('jebews/login'));
	        }
		}

		public function index() {
			$this->data['head'] = $this->load->view('jebews/html/head', array(
				'author' => 'MUHAMMAD YUSUF NUR FAJAR',
				'description' => 'Website Resmi Jaya Baru Selular',
				'title' => 'Jaya Baru Selular | Belanja Hemat, Lengkap, dan Nyaman'
			), TRUE);
			$this->data['menu'] = $this->load->view('jebews/html/menu', array('page' => array('dashboard')), TRUE);
			$this->data['product_available'] = $this->product->count('product_available');
			$this->data['product_total'] = $this->product->count('product_total');
			$this->data['product_percentage'] = ($this->data['product_available'] / $this->data['product_total']) * 100;

			$this->data['visitor_today'] = $this->visitor->count('visitor_today');
			$this->data['visitor_tomorrow'] = $this->visitor->count('visitor_tomorrow');
			$this->data['visitor_percentage'] = (abs($this->data['visitor_tomorrow'] - $this->data['visitor_today']) / $this->data['visitor_tomorrow']) * 100;
			$this->data['visitor_howmuach'] = howmuach($this->data['visitor_today'], $this->data['visitor_tomorrow']);

			$this->reports();

			$this->load->view('jebews/dashboard', $this->data);
		}

		public function reports() {
			$this->load->database();
			$this->db->select(array('ID', 'NAME', 'URL', 'DATE', 'READER', 'TYPE'));
			$this->db->order_by('ID', 'DESC');
			$this->db->limit(15);
			$this->data['reports'] = $this->db->get('REPORT')->result();

			$this->data['reports_total'] = $this->db->get('REPORT')->num_rows();

			$this->db->like('READER', $this->session->userdata['jb-user']['username']);
			$this->data['reports_noread'] = $this->data['reports_total'] - $this->db->get('REPORT')->num_rows();
		}
	}