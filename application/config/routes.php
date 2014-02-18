<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
$is_website = true;
$is_panel = $is_service = false;

$string_link_check = (isset($_SERVER['argv']) && isset($_SERVER['argv'][0])) ? $_SERVER['argv'][0] : '';
$string_link_check = (empty($string_link_check) && isset($_SERVER['REDIRECT_QUERY_STRING'])) ? $_SERVER['REDIRECT_QUERY_STRING'] : $string_link_check;
$url_arg = preg_replace('/(^\/|\/$)/i', '', $string_link_check);
$array_arg = explode('/', $url_arg);

if (count($array_arg) >= 1) {
	$key = $array_arg[0];
	
	if (in_array($key, array( 'panel' ))) {
		$is_panel = true;
		$is_website = false;
	} else if (in_array($key, array( 'service' ))) {
		$is_service = true;
		$is_website = false;
	}
}

if ($is_website) {
	$route['post'] = "website/post";
	$route['post/(:any)'] = "website/post";
	$route['login'] = "website/login";
	$route['login/(:any)'] = "website/login";
	$route['forget_password'] = "website/forget_password";
	$route['forget_password/(:any)'] = "website/forget_password";
	$route['register'] = "website/register";
	$route['register/(:any)'] = "website/register";
	$route['validation/(:any)'] = "website/validation";
	$route['search'] = "website/search";
	$route['search/(:any)'] = "website/search";
	$route['advert/(:any)'] = "website/advert";
	$route['announce'] = "website/announce";
	$route['announce/(:any)'] = "website/announce";
	$route['user'] = "website/user";
	$route['user/(:any)'] = "website/user";
	$route['reset'] = "website/reset";
	$route['reset/(:any)'] = "website/reset";
	$route['rss'] = "website/rss";
	$route['ajax'] = "website/ajax";
	$route['(:any)'] = "website/selector";
	$route['(:any)/(:any)'] = "website/selector";
} else if ($is_panel) {
	$route['panel'] = "panel/home";
	$route['panel/message'] = "panel/manage/message";
} else if ($is_service) {
}

$route['default_controller'] = "website/home";
$route['404_override'] = '';