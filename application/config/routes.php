<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['register'] = 'welcome/register';
$route['login'] = 'welcome/login';
$route['dashboard'] = 'welcome/dashboard';
$route['home'] = 'welcome/index';
$route['logout'] = 'welcome/logout';
$route['aksi_login'] = 'welcome/aksi_login';
$route['aksi_register'] = 'welcome/aksi_register';
$route['setting_alternatif'] = 'welcome/setting_alternatif';
$route['setting_alternatif_tambah'] = 'welcome/setting_alternatif_tambah';
$route['setting_alternatif_edit'] = 'welcome/setting_alternatif_edit';
$route['setting_kriteria'] = 'welcome/setting_kriteria';
$route['setting_kriteria_tambah'] = 'welcome/setting_kriteria_tambah';
$route['setting_kriteria_edit'] = 'welcome/setting_kriteria_edit';
$route['nilai_alternatif'] = 'welcome/nilai_alternatif';
$route['nilai_alternatif_tambah'] = 'welcome/nilai_alternatif_tambah';
$route['nilai_alternatif_edit'] = 'welcome/nilai_alternatif_edit';
$route['normalisasi'] = 'welcome/normalisasi';
$route['export_excel'] = 'welcome/export_excel';
$route['export_pdf'] = 'welcome/export_pdf';
$route['cetak_Data'] = 'welcome/cetak_data';
$route['pembobotan_kriteria'] = 'welcome/pembobotan_kriteria';
$route['pembobotan_kriteria_tambah'] = 'welcome/pembobotan_kriteria_tambah';
$route['pembobotan_kriteria_edit'] = 'welcome/pembobotan_kriteria_edit';
$route['ranking'] = 'welcome/ranking';


