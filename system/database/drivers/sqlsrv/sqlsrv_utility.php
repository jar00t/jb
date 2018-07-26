<?php
    defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
    class CI_DB_sqlsrv_utility extends CI_DB_utility {
        protected $_list_databases = 'EXEC sp_helpdb';
        protected $_optimize_table = 'ALTER INDEX all ON %s REORGANIZE';
        protected function _backup($params = array()) {
            return $this->db->display_error('db_unsupported_feature');
        }
    }