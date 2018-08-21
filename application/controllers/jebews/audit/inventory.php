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
            $this->load->database();
            $this->db->where('LOCATION', $location);
            $this->db->order_by('TYPE', 'ASC');
            $inventories = $this->db->get('INVENTORY');
            if ($inventories->num_rows() != 0) {
                $inventory = array();
                foreach ($inventories->result_array() as $item) {
                    $inventory[$item['TYPE']][] = $item;
                }

                $items = '';
                $qbefore = '';
                $qafter = '';
                $notes = '';
                foreach ($inventory as $key => $inven) {
                    $items .= $key . ':';
                    foreach ($inven as $item) {
                        $items .= $item['NAME'];
                        $qbefore .= $item['QUANTITY'];
                        $qafter .= $this->input->post('inventory-qafter-' . $item['ID']);
                        $notes .= preg_replace('/[ ,]+/' , ' ', $this->input->post('inventory-note-' . $item['ID']));
                        if ($item != end($inven)) {
                            $items .= ',';
                            $qbefore .= ',';
                            $qafter .= ',';
                            $notes .= ',';
                        }
                    }
                    if ($inven != end($inventory)) {
                        $items .= '|';
                        $qbefore .= '|';
                        $qafter .= '|';
                        $notes .= '|';
                    }
                }

                $data = array(
                    'NAME' => $this->input->post('audit-name'),
                    'ITEMS' => $items,
                    'QBEFORE' => $qbefore,
                    'QAFTER' => $qafter,
                    'NOTES' => $notes,
                    'DATE' => date('Y-m-d H:i:s'),
                    'AUTHOR' => $this->session->userdata['jb-user']['username'],
                    'TYPE' => 'INVENTORY',
                    'LOCATION' => $location,
                    'URL' => strtolower(preg_replace('/\W+/' , '-', $this->input->post('audit-name')))
                );

                if($this->db->insert('AUDIT', $data)) {
                    $this->data['message'] = array('success', 'Data Audit berhasil di tambahkan.');
                } else {
                    $this->data['message'] = array('failed', 'Data Audit gagal di tambahkan.');
                }
            } else {
                $this->data['message'] = array('failed', 'Data Audit gagal di tambahkan.');
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
                        $row[] = '<a href="' . base_url('jebews/audit/inventory/' . $field->URL) . '">' . $field->NAME . '</a>';
                        $row[] = $field->REGION;
                        $row[] = $field->TYPE;
             
                        $this->data['data'][] = $row;
                    }
                    break;

                case 'AUDIT':
                    $this->datatable->column_order = array(null, 'NAME', 'DATE', 'AUTHOR');
                    $this->datatable->column_search = array('NAME', 'DATE', 'AUTHOR');
                    $this->datatable->order = array('ID' => 'ASC');
                    $this->datatable->where = array('LOCATION' => $filter, 'TYPE' => 'INVENTORY');

                    $list = $this->datatable->get_datatables();
                    $this->data['data'] = array();
                    $no = $_POST['start'];
                    foreach ($list as $field) {
                        $no++;
                        $row = array();
                        $row[] = $no;
                        $row[] = '<a href="' . base_url('jebews/audit/inventory/report/' . $field->URL . '_' . $field->ID) . '">' . $field->NAME . '</a>';
                        $row[] = date('d/m/Y', strtotime($field->DATE));

                        $this->db->select('NAME');
                        $this->db->where('USERNAME', $field->AUTHOR);
                        $auditor = $this->db->get('USER');
                        if ($auditor->num_rows() != 0) {
                            $row[] = $auditor->row()->NAME;
                        } else {
                            $row[] = 'ANONIM';
                        }
             
                        $this->data['data'][] = $row;
                    }
                    break;
                
            }
        }

        public function report($name = '') {
            $name = explode('_', $name);
            $this->load->database();
            $this->db->where('URL', $name[0]);
            $this->db->where('ID', (int)$name[1]);
            $audit = $this->db->get('AUDIT');
            if ($audit->num_rows() != 0) {
                $this->data['report'] = $audit->row();

                $this->db->where('URL', $this->data['report']->LOCATION);
                $location = $this->db->get('LOCATION');
                if ($location->num_rows() != 0) {
                    $this->data['location'] = $location->row();
                    
                    $this->db->select('NAME');
                    $this->db->where('USERNAME', $this->data['report']->AUTHOR);
                    $auditor = $this->db->get('USER');
                    if ($auditor->num_rows() != 0) {
                        $this->data['auditor'] = $auditor->row()->NAME;
                    } else {
                        $this->data['auditor'] = 'ANONIM';
                    }
                } else {
                    show_404();
                }

                $this->data['head'] = $this->load->view('jebews/html/head', array(
                    'author' => 'MUHAMMAD YUSUF NUR FAJAR',
                    'description' => 'Website Resmi Jaya Baru Selular',
                    'title' => 'Report ' . $this->data['report']->NAME . ' | Jaya Baru Selular | Belanja Hemat, Lengkap, dan Nyaman'
                ), TRUE);
                $this->data['menu'] = $this->load->view('jebews/html/menu', array('page' => array('audit', 'inventory')), TRUE);
                $this->load->view('jebews/audit/report', $this->data);
            } else {
                show_404();
            }
        }

        public function index($location = '') {
            if ($location !== '') {
                $this->load->database();
                $this->db->select('NAME');
                $this->db->where('URL', $location);
                $loc = $this->db->get('LOCATION');
                if ($loc->num_rows() != 0) {
                    $this->db->where('LOCATION', $location);
                    $this->db->order_by('TYPE', 'ASC');
                    $inventories = $this->db->get('INVENTORY');
                    if ($inventories->num_rows() != 0) {
                        $this->data['inventory'] = array();
                        foreach ($inventories->result_array() as $item) {
                            $this->data['inventory'][$item['TYPE']][] = $item;
                        }
                    } else {
                        $this->data['inventory'] = NULL;
                    }
                    $this->data['table'] = 'audit';
                    $this->data['table_cols'] = array('No', 'Nama', 'Tanggal', 'Auditor');
                    $this->data['page_url'] = '/audit/' . $location;
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

            if ($this->input->post('audit-name')) {
                $this->add($location);
            }

            $this->data['head'] = $this->load->view('jebews/html/head', array(
                'author' => 'MUHAMMAD YUSUF NUR FAJAR',
                'description' => 'Website Resmi Jaya Baru Selular',
                'title' => 'Audit Inventaris ' . $this->data['page_name'] . '| Jaya Baru Selular | Belanja Hemat, Lengkap, dan Nyaman'
            ), TRUE);
            $this->data['menu'] = $this->load->view('jebews/html/menu', array('page' => array('audit', 'inventory')), TRUE);
            $this->load->view('jebews/audit/inventory', $this->data);
        }
    }