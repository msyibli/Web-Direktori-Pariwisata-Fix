<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

// FUNCTION atau SERVICE API
$route['akomodasi_all'] = 'direktori/get_akomodasi_all';
$route['PMM_all'] = 'direktori/get_PMM_all';
$route['DTW_all'] = 'direktori/get_DTW_all';
$route['akomodasi_filter/(:num)/(:num)/(:any)'] = 'direktori/get_akomodasi_filter/$1/$2/$3';
$route['PMM_filter/(:num)/(:num)/(:any)'] = 'direktori/get_PMM_filter/$1/$2/$3';
$route['DTW_filter/(:num)/(:num)/(:any)'] = 'direktori/get_DTW_filter/$1/$2/$3';
$route['akomodasi_sekitar/(:num)/(:num)'] = 'direktori/get_akomodasi_sekitar/$1/$2';
$route['PMM_sekitar/(:num)/(:num)'] = 'direktori/get_PMM_sekitar/$1/$2';
$route['DTW_sekitar/(:num)/(:num)'] = 'direktori/get_DTW_sekitar/$1/$2';
$route['ringkasan_direktori_akomodasi/(:num)/(:any)'] = 'direktori/get_ringkas_akomodasi/$1/$2';
$route['ringkasan_direktori_PMM/(:num)/(:any)'] = 'direktori/get_ringkas_PMM/$1/$2';
$route['ringkasan_direktori_DTW/(:num)/(:any)'] = 'direktori/get_ringkas_DTW/$1/$2';
$route['ringkasan_direktori/(:num)/(:any)/(:any)'] = 'direktori/get_ringkas_data_direktori/$1/$2/$3';
$route['search/(:num)/(:num)/(:any)/(:any)'] = 'direktori/get_search/$1/$2/$3/$4';

// HALAMAN HOME
$route['default_controller'] = 'page';
$route['home_search_result'] = 'page/home_search_result';

// HALAMAN JASA AKOMODASI
$route['jasa_akomodasi_search_result'] = 'jasa_akomodasi/jasa_akomodasi_search_result';
$route['jasa_akomodasi_search_result_by_provinsi'] = 'jasa_akomodasi/jasa_akomodasi_search_result_by_provinsi';
$route['jasa_akomodasi_detail'] = 'jasa_akomodasi/jasa_akomodasi_detail';
$route['jasa_akomodasi_sekitar'] = 'jasa_akomodasi/jasa_akomodasi_sekitar';

// HALAMAN PENYEDIA MAKAN DAN MINUM
$route['penyedia_makan_dan_minum_search_result'] = 'penyedia_makan_dan_minum/penyedia_makan_dan_minum_search_result';
$route['penyedia_makan_dan_minum_search_result_by_provinsi'] = 'penyedia_makan_dan_minum/penyedia_makan_dan_minum_search_result_by_provinsi';
$route['penyedia_makan_dan_minum_detail'] = 'penyedia_makan_dan_minum/penyedia_makan_dan_minum_detail';
$route['penyedia_makan_dan_minum_sekitar'] = 'penyedia_makan_dan_minum/penyedia_makan_dan_minum_sekitar';

// HALAMAN DAYA TARIK WISATA
$route['daya_tarik_wisata_search_result'] = 'daya_tarik_wisata/daya_tarik_wisata_search_result';
$route['daya_tarik_wisata_search_result_by_provinsi'] = 'daya_tarik_wisata/daya_tarik_wisata_search_result_by_provinsi';
$route['daya_tarik_wisata_detail'] = 'daya_tarik_wisata/daya_tarik_wisata_detail';
$route['daya_tarik_wisata_sekitar'] = 'daya_tarik_wisata/daya_tarik_wisata_sekitar';

// HALAMAN PENUNJANG PARIWISATA


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
