<?php
	defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
	class add extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->library('session');
			$this->load->helper('file');
			if (!isset($this->session->userdata['jb-user'])) {
	            header("location: " . base_url('jebews/login'));
	        }
		}

		public function upload() {
			$config['upload_path'] = FCPATH . 'uploads/products/';
	        $config['allowed_types'] = 'jpg|png';
	        $this->load->library('upload', $config);

	        if($this->upload->do_upload('productimgfile')){
	        	$token = $this->input->post('img_token');
	        	$filename = $this->upload->data('file_name');
	        	$this->load->model('file');
	        	$this->file->save($filename, $token);
	        }
		}

		public function delete() {
			$this->load->model('file');
			$file = $this->file->get($this->input->post('token'));

			if ($file != FALSE) {
				if(file_exists($file = FCPATH . 'uploads/products/' . $file)){
					unlink($file);
				}
				$this->db->delete('UPLOAD', array('TOKEN' => $this->input->post('token')));
			}

			echo "{}";
		}

		public function save() {
			$data = array(
				'NAME' => $this->input->post('product-name'),
				'BRAND' => $this->input->post('product-brand'),
				'QUANTITY' => $this->input->post('product-quantity'),
				'PRICE' => $this->input->post('product-price'),
				'CAPACITY' => $this->input->post('product-capacity'),
				'COLOR' => $this->input->post('product-color'),
				'DETAIL' => $this->input->post('product-detail'),
				'SPEC' => $this->input->post('product-spec'),
				'IMAGE' => $this->input->post('product-image'),
				'STATUS' => 'ACTIVE'
			);
			$this->load->database();
			$this->load->helper('cookie');
			if($this->db->insert('PRODUCT', $data)) {
				$cookie = array(
		        	'name' => 'throw-message',
		        	'value' => 'success,Produk baru berhasil ditambahkan',
		           	'expire' => '3600',
		       	);
			} else {
				$cookie= array(
		        	'name' => 'throw-message',
		        	'value' => 'failed,Produk baru gagal ditambahkan',
		           	'expire' => '3600',
		       	);
			}
			$this->input->set_cookie($cookie);
			redirect(base_url('jebews/product/manage/'));
		}

		public function load() {
			$head = $this->load->view('jebews/html/head', array(
				'author' => 'MUHAMMAD YUSUF NUR FAJAR',
				'description' => 'Website Resmi Jaya Baru Selular',
				'title' => 'Tambah Produk | Jaya Baru Selular | Belanja Hemat, Lengkap, dan Nyaman'
			), TRUE);
			$this->load->view('jebews/product/add', array(
				'head' => $head
			));
		}
		
		public function index() {
			if ($this->input->post('product-name') !== NULL) {
				$this->save();
			}
			$this->load();
		}
	}