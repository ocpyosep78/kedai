<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
$is_website = true;
$is_panel = false;

$string_link_check = (isset($_SERVER['argv']) && isset($_SERVER['argv'][0])) ? $_SERVER['argv'][0] : '';
$string_link_check = (empty($string_link_check) && isset($_SERVER['REDIRECT_QUERY_STRING'])) ? $_SERVER['REDIRECT_QUERY_STRING'] : $string_link_check;
$url_arg = preg_replace('/(^\/|\/$)/i', '', $string_link_check);
$array_arg = explode('/', $url_arg);

if (count($array_arg) >= 1) {
	$key = $array_arg[0];
	
	if (in_array($key, array( 'panel' ))) {
		$is_panel = true;
		$is_website = false;
	}
}

if ($is_website) {
	$route['post'] = "website/post";
	$route['post/(:any)'] = "website/post";
	$route['login'] = "website/login";
	$route['login/(:any)'] = "website/login";
	$route['register'] = "website/register";
	$route['register/(:any)'] = "website/register";
	$route['advert/(:any)'] = "website/advert";
	$route['(:any)/(:any)'] = "website/selector";
} else if ($is_panel) {
	$route['panel'] = "panel/home";
	$route['panel/message'] = "panel/manage/message";
}

$route['default_controller'] = "website/home";
$route['404_override'] = '';