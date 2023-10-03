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
$route['default_controller'] = 'WebController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Auth routes
// $route['event-join-mail'] = 'WebController/send_event_event_mail';
$route['login'] = 'AuthController';
$route['login_auth'] = 'AuthController/login_authentication';
$route['sign_up'] = 'AuthController/sign_up';
$route['register'] = 'AuthController/register_user';

// Default controller
$route['home'] = 'WebController/home';
$route['tv'] = 'WebController/tv';
$route['event'] = 'WebController/event';


// $route->post('storeevent', 'WebController::StoreEvent');
$route['storeevent'] = 'WebController/StoreEvent';



$route['upcoming_webinar'] = 'WebController/upcoming_webinar';
$route['browse_events'] = 'WebController/browse_events';
$route['speakers'] = 'WebController/speakers';
$route['companie'] = 'WebController/companie';
$route['Conferences'] = 'WebController/Conferences';
$route['chat'] = 'WebController/Chat';
$route['magzine'] = 'WebController/Magzine';
$route['Summits'] = 'WebController/Summits';
$route['Strategy'] = 'WebController/Strategy';

$route['Ixo'] = 'WebController/Ixo';
$route['Ads'] = 'WebController/Ads';
$route['Analytics'] = 'WebController/Analytics';
$route['Web'] = 'WebController/Web';
$route['Creative'] = 'WebController/Creative';
$route['Social'] = 'WebController/Social';
$route['Twitter'] = 'WebController/Twitter';

$route['About'] = 'WebController/About';
$route['Invest'] = 'WebController/Invest';
$route['Raise'] = 'WebController/Raise';
$route['Host'] = 'WebController/Host';
$route['Demo'] = 'WebController/Demo';
$route['Pricing'] = 'WebController/Pricing';
$route['Security'] = 'WebController/Security';
$route['registration'] = 'AuthController/registration';
$route['create_conference'] = 'WebController/create_event';
$route['create_new_conference'] = 'WebController/create_conference';
$route['confirmatioin_mail'] = 'WebController/send_event_confernce_mail';
$route['investor-dashboard'] = 'WebController/investor_dashboard';
$route['issuer-dashboard'] = 'WebController/issuer_dashboard';
$route['logout'] = 'AuthController/logout';
$route['event-join-mail'] = 'WebController/send_event_event_mail';
$route['sponsors'] = 'WebController/sponsors';
$route['chat-with-carl'] = 'WebController/send_email_with_carl';






