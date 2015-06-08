<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//======================LOAD FILES=====================

$route['default_controller'] = 'LoadC/load_home';
$route['signin'] = 'LoadC/load_signin';
$route['register'] = 'LoadC/load_register';
$route['dashboardadmin'] = 'LoadC/load_dashboardadmin';
$route['newuser'] = 'LoadC/load_usernew';
$route['showuser'] = 'LoadC/load_showuser';
$route['edituser'] = 'LoadC/load_edituser';
$route['dashboard'] = 'LoadC/load_dashboard';
$route['editprofile'] = 'LoadC/load_edit_profile';




//=================================================
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;