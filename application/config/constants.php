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

/*	SENT MAIL */
$value = ($_SERVER['SERVER_NAME'] == 'localhost') ? false : true;
define('SENT_MAIL',								$value);

define('WEBSITE_DOMAIN',						'kedaipedia.com');
define('WEBSITE_TITLE',							'Kedaipedia');
define('WEBSITE_DESC',							'The large market online');
define('SHA_SECRET',							'OraNgerti');
define('USER_TYPE_ADMINISTRATOR',				1);
define('USER_TYPE_EDITOR',						2);
define('USER_TYPE_MEMBER',						3);

define('ADVERT_STATUS_REVIEW',					1);
define('ADVERT_STATUS_RE_REVIEW',				2);
define('ADVERT_STATUS_APPROVE',					3);
define('ADVERT_STATUS_REJECT',					4);
define('ADVERT_STATUS_RE_SUBMIT',				5);

/*	VERIFY ADDRESS */
define('VERIFY_ADDRESS_MAX',					3);

/*	LOGIN ACTIVE TIME */
define('LOGIN_ACTIVE_TIME',						(60 * 60 * 1));

/*	MAXIMUM SENDING MAIL */
define('MAXIMUM_SENDING_MAIL',					5000);

/*	MAXIMUM IP ACCESS PER HOUR */
define('MAXIMUM_IP_ACCESS_PER_HOUR',			250);

/*	IMAGE ADVERT STAMP */
define('IMAGE_ADVERT_STAMP',					'static/img/stamp.png');

/*	EMAIL CC ADMIN */
define('EMAIL_CC_ADMIN',						'ridwanamirsene@yahoo.com');

define('ADVERT',								'advert');
define('ADVERT_PIC',							'advert_pic');
define('ADVERT_STATUS',							'advert_status');
define('ADVERT_TAG',							'advert_tag');
define('ADVERT_TYPE',							'advert_type');
define('ADVERT_TYPE_SUB',						'advert_type_sub');
define('ANNOUNCE',								'announce');
define('CATEGORY',								'category');
define('CATEGORY_INPUT',						'category_input');
define('CATEGORY_PRICE',						'category_price');
define('CATEGORY_SUB',							'category_sub');
define('CITY',									'city');
define('CITY_IP',								'city_ip');
define('CONDITION',								'condition');
define('INPUT_TYPE',							'input_type');
define('IP_BANNED',								'ip_banned');
define('IP_LOG',								'ip_log');
define('IP_PASS',								'ip_pass');
define('MASS_EMAIL',							'mass_email');
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