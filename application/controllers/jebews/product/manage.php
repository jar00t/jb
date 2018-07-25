<?php
    defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
    class manage extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->library('session');
            if (!isset($this->session->userdata['jb-user'])) {
                header("location: " . base_url('jebews/login'));
            }
        }
        
        public function index() {
            $head = $this->load->view('jebews/html/head', array(
                'author' => 'MUHAMMAD YUSUF NUR FAJAR',
                'description' => 'Website Resmi Jaya Baru Selular',
                'title' => 'Manage Produk | Jaya Baru Selular | Belanja Hemat, Lengkap, dan Nyaman'
            ), TRUE);
            $this->load->view('jebews/product/manage', array(
                'head' => $head
            ));
        }
    }