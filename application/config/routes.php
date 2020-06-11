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
$route['default_controller'] = 'home';
$route['about-us'] = 'home/about';
$route['contact'] = 'contact/index';
$route['services'] = 'services/index';
$route['explore'] = 'explore/index';
$route['register'] = 'home/register';
$route['login'] = 'home/login';
$route['agents'] = 'agents/index';
$route['agents_register'] = 'agents/register';
$route['agents_listing/(:any)'] = 'agents/showall/$1';
$route['agents_login'] = 'agents/login';
$route['agent_logout'] = 'agents/logout';
$route['agents_doc'] = 'agents/doc';
$route['create_doc'] = 'agents/add_doc';
$route['create_listing'] = 'agents/create';
$route['edit_listing/(:any)'] = 'agents/edit_listing/$1';
$route['upload_listing/(:any)'] = 'agents/upload/$1';
$route['dashboard'] = 'agents/dashboard';
$route['home'] = 'home/index';


// admin routes
$route['admin_home'] = 'admin/index';
$route['admin_dashboard'] = 'admin/dashboard';
$route['all_agents'] = 'admin/show_agents';
$route['all_doc'] = 'admin/doc';
$route['admin_create'] = 'admin/create';
$route['admin_show_listing'] = 'admin/showall';
$route['admin_upload_listing/(:any)'] = 'admin/upload/$1';
$route['admin_agent_listing/(:any)'] = 'admin/show_my_all/$1';
$route['send_message'] = 'admin/smsbank';
$route['create_sms'] = 'admin/add_sms';
$route['create_docs'] = 'admin/add_doc';
//end of admin route

// users routes
$route['user-register'] = 'users/register';
$route['user_login'] = 'users/login';

//end of admin route

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
