<?php
	defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
	$active_group = 'default';
	$query_builder = TRUE;
	$db['default'] = array(
		'dsn' => '',
		'hostname' => 'server_retail',
		'username' => 'SA',
		'password' => '',
		'database' => 'JEBEWS',
		'dbdriver' => 'sqlsrv',
		'dbprefix' => '',
		'pconnect' => FALSE,
		'db_debug' => (ENVIRONMENT !== 'production'),
		'cache_on' => FALSE,
		'cachedir' => '',
		'char_set' => 'utf8',
		'dbcollat' => 'utf8_general_ci',
		'swap_pre' => '',
		'encrypt' => FALSE,
		'compress' => FALSE,
		'stricton' => FALSE,
		'failover' => array(),
		'save_queries' => TRUE
	);