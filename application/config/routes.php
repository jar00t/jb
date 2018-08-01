<?php
	defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
	$route['default_controller'] = 'home';
	$route['jebews'] = 'jebews/dashboard';
	$route['jebews/product'] = 'jebews/product/manage';
	$route['product'] = 'items/index/all';
	$route['(:any)'] = 'details/index/$1';
	$route['product/search'] = 'items/search';
	$route['product/search/(:any)'] = 'items/search/$1';
	$route['product/(:any)'] = 'items/index/$1';
	$route['product/(:any)/(:any)'] = 'items/index/$1/$2';
	$route['404_override'] = '';
	$route['translate_uri_dashes'] = FALSE;