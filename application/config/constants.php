<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

define('SHA_SECRET',							'OraNgerti');
define('USER_TYPE_ADMINISTRATOR',				1);
define('USER_TYPE_MEMBER',						3);

define('ADVERT_STATUS_REVIEW',					1);
define('ADVERT_STATUS_RE_REVIEW',				2);
define('ADVERT_STATUS_APPROVE',					3);
define('ADVERT_STATUS_REJECT',					4);

define('ADVERT',								'advert');
define('ADVERT_PIC',							'advert_pic');
define('ADVERT_STATUS',							'advert_status');
define('ADVERT_TAG',							'advert_tag');
define('ADVERT_TYPE',							'advert_type');
define('ADVERT_TYPE_SUB',						'advert_type_sub');
define('CATEGORY',								'category');
define('CATEGORY_INPUT',						'category_input');
define('CATEGORY_PRICE',						'category_price');
define('CATEGORY_SUB',							'category_sub');
define('CITY',									'city');
define('CONDITION',								'condition');
define('INPUT_TYPE',							'input_type');
define('MEMBERSHIP',							'membership');
define('PAGE_STATIC',							'page_static');
define('REGION',								'region');
define('REPORT',								'report');
define('REPORT_TYPE',							'report_type');
define('TAG',									'tag');
define('USER',									'user');
define('USER_CONTACT',							'user_contact');
define('USER_FOLLOW',							'user_follow');
define('USER_LOG',								'user_log');
define('USER_MEMBERSHIP',						'user_membership');
define('USER_NOTE',								'user_note');
define('USER_SETTING',							'user_setting');
define('USER_TYPE',								'user_type');
define('VEHICLE_BRAND',							'vehicle_brand');
define('VEHICLE_TYPE',							'vehicle_type');
define('VERIFY_ADDRESS',						'verify_address');
define('WIDGET',								'widget');