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
$route['info/modify'] = 'info/modify';
$route['info'] = 'info';
$route['minedata'] = 'info/minedata';
$route['adddata'] = 'info/adddata';

$route['friend/mine'] = 'friend/my_track';
$route['friend'] = 'friend';

$route['mine/create'] = 'activity/mine_create';
$route['mine/create/(:num)'] = 'activity/view_minecreate/$1';
$route['mine'] = 'activity/mine';
$route['mine/(:num)'] = 'activity/view_mine/$1';

$route['activity/create'] = 'activity/create';
$route['activity/join'] = 'activity/join';
$route['activity/unjoin'] = 'activity/unjoin';
$route['activity/delete'] = 'activity/delete';
$route['activity/filter'] = 'activity/filter';


$route['activity/(:num)'] = 'activity/view/$1';
$route['activity'] = 'activity';
$route['login'] = 'login';
$route['register'] = 'login/register';
$route['register/submit'] = 'login/register_submit';
$route['main'] = 'main';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';


