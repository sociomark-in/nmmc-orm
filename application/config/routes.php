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

$route['login'] = 'auth/SSOController/login';
$route['logout'] = 'auth/SSOController/logout';

$route['login/otp-verification'] = 'auth/OtpController/otp';

$route['api/v2/auth/login'] = 'api/SSOAuthAPIController/login';
$route['api/v2/auth/register'] = 'api/SSOAuthAPIController/register';
$route['api/v2/auth/verify'] = 'api/SSOAuthAPIController/otp_verification';

$route['api-event-register'] = 'EventsController/api_event_register';
$route['event/(:any)/check-in/(:any)'] = 'EventsController/check_in_verify/$1/$2';

$route["api/v2/tickets/count"] = "api/ComplaintsAPIController/api_complaints_count";
$route["api/v2/complaints/category/add"] = "api/ComplaintsAPIController/api_category_insert";
$route["api/v2/complaints/category/get"] = "api/ComplaintsAPIController/api_category_get";
$route["api/v2/complaints/category/edit"] = "api/ComplaintsAPIController/api_category_update";
$route["api/v2/complaints/category/delete"] = "api/ComplaintsAPIController/api_category_delete";

$route["api/v2/complaints/add"] = "api/ComplaintsAPIController/api_complaints_add";
$route["api/v2/complaints/edit"] = "api/ComplaintsAPIController/api_complaints_update";
$route["api/v2/complaints/tag/get"] = "api/ComplaintsAPIController/api_tag_get";
$route["api/v2/complaints/tag/add"] = "api/ComplaintsAPIController/api_tag_insert";
$route["api/v2/complaints/tag/edit"] = "api/ComplaintsAPIController/api_tag_update";
$route["api/v2/complaints/tag/delete"] = "api/ComplaintsAPIController/api_tag_delete";

$route["api/v2/department/get"] = "api/DepartmentsAPIController/api_department_get_single";
$route['api/v2/department/edit'] = "api/DepartmentsAPIController/api_department_edit";
$route['api/v2/departments/add'] = "org/DepartmentsController/api_department_add";

$route["api/v2/ward/get"] = "api/WardsAPIController/api_ward_get_single";
$route['api/v2/ward/edit'] = "api/WardsAPIController/api_ward_edit";
$route['ward/new'] = "org/WardsController/home";
$route['api/v2/ward/add'] = "api/WardsAPIController/api_ward_add";
$route['wards/edit/(:any)'] = "org/WardsController/edit/$1";

// complaints add edit routes
$route['api/v2/complaint/edit'] = "api/ComplaintsController/api_complaint_edit";
$route['complaint/new'] = "org/ComplaintsController/new";
$route['api/v2/complaint/add'] = "api/ComplaintsController/api_complaint_add";
$route['complaint/edit/(:any)'] = "org/ComplaintsController/edit/$1";

$route['register'] = 'dashboard/register';

$route[''] = 'dashboard/index';
$route['menu'] = 'dashboard/menu_master';
$route['menu/categories'] = 'dashboard/categories_all';
$route['menu/category/(:any)/menu-items'] = 'dashboard/menu_items/$1';

/* Blogs */
$route['complaints/all-tickets'] = 'ComplaintsController/home';
$route['complaints/tickets/new'] = 'ComplaintsController/new_ticket';
$route['complaints/ticket/(:any)'] = 'ComplaintsController/preview/$1';
$route['complaints/ticket/(:any)/edit'] = 'ComplaintsController/edit/$1';
$route['complaints/tickets/all-categories'] = 'ComplaintsController/categories';

$route['complaints/tickets/comments'] = 'ComplaintsController/comments';
$route['complaints/ticket/(:any)/comments'] = 'ComplaintsController/ticket_comments/$1';

$route['departments'] = "org/DepartmentsController";
$route['department/new'] = "org/DepartmentsController/home";
$route['departments/edit/(:any)'] = "org/DepartmentsController/edit/$1";

$route['wards'] = "org/WardsController";
$route['ward/(:any)'] = "org/WardsController/single/$1";

$route['complaints/all-types'] = 'ComplaintsTypeController/home';
$route['complaints/types/new'] = 'ComplaintsTypeController/new';

$route['profile'] = "org/ProfileController";

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
