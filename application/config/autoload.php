<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$autoload['packages'] = array();
$autoload['libraries'] = array('database', 'session');
$autoload['helper'] = array( 'date', 'common', 'url', 'mcrypt' );
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array(
	'User_model', 'User_Type_model', 'Category_model', 'Page_Static_model', 'Advert_Type_model', 'Advert_Type_Sub_model', 'Category_Input_model',
	'Advert_model', 'Advert_Pic_model', 'Advert_Tag_model', 'Advert_Status_model', 'Category_Sub_model', 'Category_Price_model', 'City_model',
	'User_Contact_model', 'User_Log_model', 'User_Follow_model', 'Tag_model', 'Region_model', 'Membership_model', 'User_Membership_model', 'Input_Type_model',
	'User_Setting_model', 'User_Note_model', 'Verify_Address_model', 'Widget_model', 'Condition_model', 'Vehicle_Brand_model', 'Vehicle_Type_model',
	'Report_model', 'Report_Type_model'
);
