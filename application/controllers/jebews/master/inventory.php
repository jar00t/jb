<?php
    defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
    class inventory extends CI_Controller {

        public $data;

        public function __construct() {
            parent::__construct();
            $this->load->library('session');
            if (!isset($this->session->userdata['jb-user'])) {
                header("location: " . base_url('jebews/login'));
            }
            $this->load->helper(array('menu'));
        }

        public function add($location = '') {
            $data = array(
                'NAME' => $this->input->post('inventory-name'),
                'QUANTITY' => $this->input->post('inventory-quantity'),
                'TYPE' => $this->input->post('inventory-type'),
                'LOCATION' => $location
            );
            $this->load->database();
            if($this->db->insert('INVENTORY', $data)) {
                $this->data['message'] = array('success', 'Data berhasil di tambahkan.');
            } else {
                $this->data['message'] = array('failed', 'Data gagal di tambahkan.');
            }
        }

        public function load($table = 'LOCATION', $filter = '') {
            $this->load->model('datatable');

            $this->table($table, $filter);
     
            $output = array(
                'draw' => $_POST['draw'],
                'recordsTotal' => $this->datatable->count_all(),
                'recordsFiltered' => $this->datatable->count_filtered(),
                'data' => $this->data['data'],
            );
            
            echo json_encode($output);
        }
        
        public function table($name = '', $filter = '') {
            $name = strtoupper($name);
            $this->datatable->table = $name;
            switch ($name) {
                case 'LOCATION':
                    $this->datatable->column_order = array(null, 'NAME', 'REGION', 'TYPE');
                    $this->datatable->column_search = array('NAME', 'REGION', 'TYPE');
                    $this->datatable->order = array('ID' => 'ASC');

                    $list = $this->datatable->get_datatables();
                    $this->data['data'] = array();
                    $no = $_POST['start'];
                    foreach ($list as $field) {
                        $no++;
                        $row = array();
                        $row[] = $no;
                        $row[] = '<a href="' . base_url('jebews/master/inventory/' . $field->URL) . '">' . $field->NAME . '</a>';
                        $row[] = $field->REGION;
                        $row[] = $field->TYPE;
             
                        $this->data['data'][] = $row;
                    }
                    break;

                case 'INVENTORY':
                    $this->datatable->column_order = array(null, 'NAME', 'QUANTITY', 'TYPE');
                    $this->datatable->column_search = array('NAME', 'QUANTITY', 'TYPE');
                    $this->datatable->order = array('ID' => 'ASC');
                    $this->datatable->where = array('LOCATION' => $filter);

                    $list = $this->datatable->get_datatables();
                    $this->data['data'] = array();
                    $no = $_POST['start'];
                    foreach ($list as $field) {
                        $no++;
                        $row = array();
                        $row[] = $no;
                        $row[] = $field->NAME;
                        $row[] = $field->QUANTITY;
                        $row[] = $field->TYPE;
             
                        $this->data['data'][] = $row;
                    }
                    break;
                
            }
        }

        public function index($location = '') {
            if ($location !== '') {
                $this->load->database();
                $this->db->select('NAME');
                $this->db->where('URL', $location);
                $loc = $this->db->get('LOCATION');
                if ($loc->num_rows() != 0) {
                    $this->data['table'] = 'inventory';
                    $this->data['table_cols'] = array('No', 'Nama', 'Quantity', 'Tipe');
                    $this->data['page_url'] = '/inventory/' . $location;
                    $this->data['page_name'] = ucwords(strtolower($loc->row()->NAME)) . ' ';
                } else {
                    show_404();
                }
            } else {
                $this->data['table'] = 'location';
                $this->data['table_cols'] = array('No', 'Nama Lokasi', 'Region', 'Tipe');
                $this->data['page_url'] = '/location/';
                $this->data['page_name'] = '';
            }

            if ($this->input->post('inventory-name')) {
                $this->add($location);
            }

            $this->data['head'] = $this->load->view('jebews/html/head', array(
                'author' => 'MUHAMMAD YUSUF NUR FAJAR',
                'description' => 'Website Resmi Jaya Baru Selular',
                'title' => 'Inventaris ' . $this->data['page_name'] . '| Jaya Baru Selular | Belanja Hemat, Lengkap, dan Nyaman'
            ), TRUE);
            $this->data['menu'] = $this->load->view('jebews/html/menu', array('page' => array('master', 'inventory')), TRUE);
            $this->load->view('jebews/master/inventory', $this->data);
        }
    }