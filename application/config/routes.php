<?php
	defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
	$route['default_controller'] = 'home';
	$route['jebews'] = 'jebews/dashboard';
	$route['jebews/product'] = 'jebews/product/manage';
	$route['404_override'] = '';
	$route['translate_uri_dashes'] = FALSE;