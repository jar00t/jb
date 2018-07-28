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
            $this->load->helper('cookie');
            if (get_cookie('throw-message') != NULL) {
                $this->data['message'] = explode(',', get_cookie('throw-message'));
                delete_cookie('throw-message');
            }
        }

        public function load() {
            $this->load->model('datatable');
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
                $row[] = $field->PRICE;
                /*$row[] = '
                    <div class="btn-group">
                        <button type="button" class="btn btn-success"><i class="fa fa-pencil"></i></button>
                        <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                    </div>
                ';*/
     
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
            $this->load->view('jebews/product/manage', $this->data);
        }
    }