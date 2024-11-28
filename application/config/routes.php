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
$route['default_controller'] = 'homecontroller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['index'] = 'homecontroller';
$route['contact'] = 'homecontroller/contact';
$route['about'] = 'homecontroller/about';
$route['career'] = 'homecontroller/career';

// add 
$route['login'] = 'admincontroller/login';
$route['register'] = 'admincontroller/register';
// $route['aboutDashbord'] = 'admincontroller/aboutDashbord';
// $route['dashbord'] = 'admincontroller/dashbord';
$route['aboutAdmin'] = 'aboutDasCon/index';






$route['admincontroller/add_blog'] = 'admincontroller/add_blog';
$route['admincontroller/edit/(:num)'] = 'admincontroller/edit/$1';
$route['admincontroller/delete/(:num)'] = 'admincontroller/delete/$1';

$route['agent_details'] = 'agentcontroller/agent_details';
$route['agent_grid'] = 'agentcontroller/grid';


$route['blog_details'] = 'blogcontroller/blog_details';
$route['blog_grid'] = 'blogcontroller/blog_grid';
$route['blog_single'] = 'blogcontroller/blog_single';

$route['photo_gallery'] = 'gallerycontroller/photo_gallery';
$route['property_grid'] = 'gallerycontroller/property_grid';
$route['property_single'] = 'gallerycontroller/property_single';


$route['status'] = 'othercontroller/404';
$route['faq'] = 'othercontroller/faq';
$route['services'] = 'othercontroller/our_services';
$route['terms'] = 'othercontroller/terms_and_condition';



$route['form'] = 'registercontroller/form';
$route['form/edit/(:num)'] = 'registercontroller/edit/$1';
$route['form/update/(:num)'] = 'registercontroller/update/$1';
$route['form/delete/(:num)'] = 'registercontroller/delete/$1';


