<?php
	defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
	class reports extends CI_Controller {

		public $data;

		public function __construct() {
			parent::__construct();
            $this->load->library('session');
            if (!isset($this->session->userdata['jb-user'])) {
                header("location: " . base_url('jebews/login'));
            }
            $this->load->helper(array('menu'));
		}

		public function load() {
            $this->load->model('datatable');

            $this->datatable->table = 'REPORT';
            $this->datatable->column_order = array(null, 'NAME', 'TYPE', 'DATE');
            $this->datatable->column_search = array('NAME', 'TYPE', 'DATE');
            $this->datatable->order = array('ID' => 'ASC');

            $list = $this->datatable->get_datatables();
            $this->data['data'] = array();
            $no = $_POST['start'];
            foreach ($list as $field) {
            	$readers = explode(',', $field->READER);
            	if (in_array($this->session->userdata['jb-user']['username'], $readers)) {
					$report_name = $field->NAME;
				} else {
					$report_name = '<b>' . $field->NAME . '</b>';
				}

                $no++;
                $row = array();
                $row[] = $no;
                $row[] = '<a href="' . base_url('jebews/audit/' . strtolower($field->TYPE) . '/report/' . $field->URL . '_' . $field->ID) . '">' . $report_name . '</a>';
                $row[] = $field->TYPE;
                $row[] = date('d/m/Y', strtotime($field->DATE));
     
                $this->data['data'][] = $row;
            }
     
            $output = array(
                'draw' => $_POST['draw'],
                'recordsTotal' => $this->datatable->count_all(),
                'recordsFiltered' => $this->datatable->count_filtered(),
                'data' => $this->data['data'],
            );
            
            echo json_encode($output);
        }

		public function index() {
			$this->data['head'] = $this->load->view('jebews/html/head', array(
				'author' => 'MUHAMMAD YUSUF NUR FAJAR',
				'description' => 'Website Resmi Jaya Baru Selular',
				'title' => 'Laporan Audit | Jaya Baru Selular | Belanja Hemat, Lengkap, dan Nyaman'
			), TRUE);
			$this->data['menu'] = $this->load->view('jebews/html/menu', array('page' => array('audit', 'reports')), TRUE);
			$this->load->view('jebews/audit/reports', $this->data);
		}
	}