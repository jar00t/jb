<?php
	defined('BASEPATH') OR exit('Akses skrip langsung tidak diizinkan');
	$route['default_controller'] = 'home';
	$route['jebews'] = 'jebews/dashboard';
	$route['jebews/product'] = 'jebews/product/manage';
	$route['jebews/master/inventory/(:any)'] = 'jebews/master/inventory/index/$1';
	$route['jebews/master/inventory/add/(:any)'] = 'jebews/master/inventory/add/$1';
	$route['jebews/master/inventory/load/(:any)/(:any)'] = 'jebews/master/inventory/load/$1/$2';
	$route['jebews/audit/inventory/(:any)'] = 'jebews/audit/inventory/index/$1';
	$route['jebews/audit/inventory/add/(:any)'] = 'jebews/audit/inventory/add/$1';
	$route['jebews/audit/inventory/report/(:any)'] = 'jebews/audit/inventory/report/$1';
	$route['jebews/audit/inventory/load/(:any)/(:any)'] = 'jebews/audit/inventory/load/$1/$2';
	$route['product'] = 'items/index/all';
	$route['lapor'] = 'lapor';
	$route['(:any)'] = 'details/index/$1';
	$route['product/search'] = 'items/search';
	$route['product/search/(:any)'] = 'items/search/$1';
	$route['product/(:any)'] = 'items/index/$1';
	$route['product/(:any)/(:any)'] = 'items/index/$1/$2';
	$route['404_override'] = '';
	$route['translate_uri_dashes'] = FALSE;