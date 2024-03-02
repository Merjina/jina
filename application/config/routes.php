<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'user';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['user'] = 'user/index';
$route['schedule'] = 'user/schedule';
$route['speaker'] = 'user/speaker';
$route['venue'] = 'user/venue';
$route['register'] = 'user/register';
$route['submitdata'] = 'user/submitdata';
$route['loginpage'] = 'user/loginpage';
$route['profile/(:any)'] = 'Profile/index/$1';
$route['update'] = 'user/update';