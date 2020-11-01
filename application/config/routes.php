<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['admin']                         = 'backend/auth';
$route['validate']                      = 'backend/auth/validate';
$route['validasi']                      = 'backend/auth/validasi';
$route['register']                      = 'backend/auth/register';
$route['store']                         = 'backend/auth/store';
$route['logout']                        = 'backend/auth/logout';

$route['home']                          = 'backend/home';
$route['users']                         = 'backend/master/users';



