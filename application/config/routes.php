<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'landing_page/index';

$route['404_override'] = 'my404';
$route['translate_uri_dashes'] = FALSE;

$route['uploads/lessons'] = '../../uploads/lessons/';
$route['uploads/assignments'] = '../../uploads/assignments/';
