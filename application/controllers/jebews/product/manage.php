<?php
    defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
    class manage extends CI_Controller {

        public $data;

        public function __construct() {
            parent::__construct();
            $this->load->library('session');
            if (!isset($this->session->userdata['jb-user'])) {
                header("location: " . base_url('jebews/login'));
            }
            $this->load->helper(array('menu', 'cookie'));
            if (get_cookie('throw-message') != NULL) {
                $this->data['message'] = explode(',', get_cookie('throw-message'));
                delete_cookie('throw-message');
            }
        }

        public function load() {
            $this->load->model('datatable');

            $this->datatable->table = 'PRODUCT';
            $this->datatable->column_order = array(null, 'NAME','BRAND','QUANTITY', 'PRICE');
            $this->datatable->column_search = array('NAME','BRAND','QUANTITY', 'PRICE');
            $this->datatable->order = array('ID' => 'ASC');

            $list = $this->datatable->get_datatables();
            $data = array();
            $no = $_POST['start'];
            foreach ($list as $field) {
                $no++;
                $row = array();
                $row[] = $no;
                $row[] = '<a href="' . base_url($field->URL) . '" target="_blank">' . $field->NAME . '</a>';
                $row[] = $field->BRAND;
                $row[] = $field->QUANTITY;
                $row[] = 'Rp. ' . number_format($field->PRICE, NULL, '.', '.') . ',-';
     
                $data[] = $row;
            }
     
            $output = array(
                'draw' => $_POST['draw'],
                'recordsTotal' => $this->datatable->count_all(),
                'recordsFiltered' => $this->datatable->count_filtered(),
                'data' => $data,
            );
            
            echo json_encode($output);
        }
        
        public function index() {
            $this->data['head'] = $this->load->view('jebews/html/head', array(
                'author' => 'MUHAMMAD YUSUF NUR FAJAR',
                'description' => 'Website Resmi Jaya Baru Selular',
                'title' => 'Manage Produk | Jaya Baru Selular | Belanja Hemat, Lengkap, dan Nyaman'
            ), TRUE);
            $this->data['menu'] = $this->load->view('jebews/html/menu', array('page' => array('product', 'manage')), TRUE);
            $this->load->view('jebews/product/manage', $this->data);
        }
    }