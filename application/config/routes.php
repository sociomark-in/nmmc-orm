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
$route['default_controller'] = 'Dashboard';

$route['login'] = 'pages/login';
$route['logout'] = 'auth/logout';

$route['api-auth-login'] = 'auth/login';
$route['api-auth-register'] = 'auth/register';

$route['api-event-register'] = 'EventsController/api_event_register';
$route['event/(:any)/check-in/(:any)'] = 'EventsController/check_in_verify/$1/$2';

$route["api/v2/blogs/category/add"] = "BlogsController/api_category_insert";
$route["api/v2/blogs/category/get"] = "BlogsController/api_category_get";
$route["api/v2/blogs/category/edit"] = "BlogsController/api_category_update";
$route["api/v2/blogs/category/delete"] = "BlogsController/api_category_delete";

$route["api/v2/blogs/tag/get"] = "BlogsController/api_tag_get";
$route["api/v2/blogs/tag/add"] = "BlogsController/api_tag_insert";
$route["api/v2/blogs/tag/edit"] = "BlogsController/api_tag_update";
$route["api/v2/blogs/tag/delete"] = "BlogsController/api_tag_delete";

$route['register'] = 'dashboard/register';

$route[''] = 'dashboard/index';
$route['menu'] = 'dashboard/menu_master';
$route['menu/categories'] = 'dashboard/categories_all';
$route['menu/category/(:any)/menu-items'] = 'dashboard/menu_items/$1';

/* Blogs */
$route['posts/all-blogs'] = 'BlogsController/home';
$route['posts/blogs/new'] = 'BlogsController/new_post';
$route['posts/blog/(:any)'] = 'BlogsController/preview/$1';
$route['posts/blog/(:any)/edit'] = 'BlogsController/edit/$1';
$route['posts/blogs/all-categories'] = 'BlogsController/categories';

$route['posts/blogs/comments'] = 'BlogsController/comments';
$route['posts/blog/(:any)/comments'] = 'BlogsController/blog_comments/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
