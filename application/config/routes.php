<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Login
$route['logout'] = 'login/logout';
$route['login'] = 'login/index';
$route['login_submit'] = 'frontend/login';

//Front End
$route['default_controller'] = 'frontend/index';
$route['booking']  = 'frontend/booking';
$route['contact']  = 'frontend/contact';

//Back End
$route['backend'] = 'backend/index';

$route['backend/booking'] = 'backend/booking';
$route['backend/booking/delete/(:num)'] = 'backend/booking_deleted/$1';

$route['backend/contact'] = 'backend/contact';
$route['backend/contact/delete/(:num)'] = 'backend/contact_delete/$1';

$route['backend/menu'] = 'menu_manage/index';
$route['backend/menu_add'] = 'menu_manage/add';
$route['backend/menu_submit'] = 'menu_manage/menu_submit';
$route['backend/menu_edit/(:num)'] = 'menu_manage/edit/$1';
$route['backend/menu_update'] = 'menu_manage/menu_update';
$route['backend/menu_delete/(:num)'] = 'menu_manage/delete/$1';

$route['backend/testimonial'] = 'testimonial_manage/index';
$route['backend/testimonial_add'] = 'testimonial_manage/add';
$route['backend/testimonial_submit'] = 'testimonial_manage/testimonial_submit';
$route['backend/testimonial_edit/(:num)'] = 'testimonial_manage/edit/$1';
$route['backend/testimonial_update'] = 'testimonial_manage/testimonial_update';
$route['backend/testimonial_delete/(:num)'] = 'testimonial_manage/delete/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
