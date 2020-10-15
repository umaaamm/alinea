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
$route['default_controller'] = 'ControllerUtama';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//add router
$route['Admin'] ='ControllerAdmin';

//Admin List Makalah
$route['AdminDivisi/ListMakalah'] ='ControllerAdminDivisi/indexListMakalah';
$route['SuperAdmin/DataJuri'] = 'ControllerAdmin/indexManajemenJuri';
$route['SuperAdmin/Juri'] = 'ControllerAdmin/SimpanJuri';
$route['SuperAdmin/EditDataJuri'] = 'ControllerAdmin/EditDataJuri';

//Admin
$route['Admin/ManajemenAdmin'] = 'ControllerAdmin/indexAdmin';
$route['Admin/SimpanAdmin'] = 'ControllerAdmin/SimpanAdmin';
$route['Admin/EditDataAdmin'] = 'ControllerAdmin/EditDataAdmin';

//List Makalah
$route['Admin/ListMakalah'] = 'ControllerAdmin/ListMakalahAll';

//ListProposal
$route['Admin/ListProposal'] = 'ControllerAdmin/ListProposalAll';


//Divisi
$route['Divisi/ListProposal'] = 'ControllerAdminDivisi/indexListProposal';

//Direktorat
$route['Direktorat/ListProposal'] = 'ControllerDirektorat/indexListProposal';
$route['Direktorat/ListMakalah'] = 'ControllerDirektorat/indexListMakalah';

//Area
$route['Area/ListProposal'] = 'ControllerArea/indexListProposal';
$route['Area/ListMakalah'] = 'ControllerArea/indexListMakalah';

//Kanwil
$route['Kanwil/ListProposal'] = 'ControllerKanwil/indexListProposal';
$route['Kanwil/ListMakalah'] = 'ControllerKanwil/indexListMakalah';

//Juri
$route['Juri/ListProposal'] = 'ControllerJuri/indexListProposal';
$route['Juri/ListMakalah'] = 'ControllerJuri/indexListMakalah';
$route['Juri/Resume'] = 'ControllerJuri/indexListResume';


//Super Admin
$route['SuperAdmin/ManajemenSuperAdmin'] = 'ControllerAdmin/indexSuperAdmin';
$route['SuperAdmin/SimpanAdmin'] = 'ControllerAdmin/SimpanSuperAdmin';
$route['SuperAdmin/EditDataAdmin'] = 'ControllerAdmin/EditDataSuperAdmin';

//Karyawan
$route['Karyawan/UploadMakalah'] ='ControllerKaryawan/indexListMakalahKaryawan';
$route['Karyawan/Upload'] ='ControllerKaryawan/uploadMakalahMethod';
$route['Karyawan/HasilPlagiat'] ='ControllerKaryawan/hasilPlagiat';

$route['Karyawan/UploadProposal'] ='ControllerKaryawan/indexListProposalKaryawan';
$route['Karyawan/SimpanProposal'] ='ControllerKaryawan/uploadProposalMethod';
$route['Karyawan/HasilPlagiatProposal'] ='ControllerKaryawan/hasilPlagiatProposal';

$route['Karyawan/UploadResume'] ='ControllerKaryawan/indexListResumeKaryawan';
$route['Karyawan/SimpanResume'] ='ControllerKaryawan/uploadResumeMethod';


//Treshold
$route['SuperAdmin/Treshold'] ='ControllerAdmin/indexListTreshold';
$route['SuperAdmin/EditTreshold'] ='ControllerAdmin/editTreshold';