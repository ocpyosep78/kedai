<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
    function __construct() {
        parent::__construct();
		
        $this->field = array(
			'id', 'user_type_id', 'email', 'alias', 'first_name', 'last_name', 'passwd', 'address', 'phone', 'bb_pin', 'register_date', 'membership_date', 'reset_key',
			'verify_profile', 'verify_email', 'verify_address', 'thumbnail_profile', 'thumbnail_banner', 'ic_number', 'is_ic_number', 'is_active', 'is_delete',
			'advert_count', 'city_id', 'user_about', 'user_info', 'postal_code', 'passwd_reset_key'
		);
    }
	
    function update($param) {
        $result = array();
		
		// encript email
		if (isset($param['email'])) {
			$param['email'] = mcrypt_encode($param['email']);
		}
		
        if (empty($param['id'])) {
			// default value
			$param['register_date'] = (isset($param['register_date'])) ? $param['register_date'] : $this->config->item('current_datetime');
			
            $insert_query  = GenerateInsertQuery($this->field, $param, USER);
            $insert_result = mysql_query($insert_query) or die(mysql_error());
           
            $result['id'] = mysql_insert_id();
            $result['status'] = '1';
            $result['message'] = 'Data successfully saved.';
        } else {
            $update_query  = GenerateUpdateQuery($this->field, $param, USER);
            $update_result = mysql_query($update_query) or die(mysql_error());
           
            $result['id'] = $param['id'];
            $result['status'] = '1';
            $result['message'] = 'Data successfully updated.';
        }
       
        return $result;
    }

    function get_by_id($param) {
        $array = array();
		$param['auto_insert'] = (isset($param['auto_insert'])) ? $param['auto_insert'] : false;
       
        if (isset($param['id'])) {
            $select_query  = "
				SELECT User.*, UserType.name user_type_name,
					City.name city_name, City.region_id, Region.name region_name
				FROM ".USER." User
				LEFT JOIN ".USER_TYPE." UserType ON UserType.id = User.user_type_id
				LEFT JOIN ".CITY." City ON City.id = User.city_id
				LEFT JOIN ".REGION." Region ON Region.id = City.region_id
				WHERE User.id = '".$param['id']."'
				LIMIT 1
			";
        } else if (isset($param['alias'])) {
			$select_query  = "SELECT * FROM ".USER." WHERE alias = '".$param['alias']."' LIMIT 1";
        } else if (isset($param['email'])) {
			$param['email'] = mcrypt_encode($param['email']);
            $select_query  = "SELECT * FROM ".USER." WHERE email = '".$param['email']."' LIMIT 1";
        } else if (isset($param['email_key'])) {
			$select_query  = "SELECT * FROM ".USER." WHERE email = '".$param['email_key']."' LIMIT 1";
        } else if (isset($param['passwd_reset_key'])) {
			$select_query  = "SELECT * FROM ".USER." WHERE passwd_reset_key = '".$param['passwd_reset_key']."' LIMIT 1";
        }
		
        $select_result = mysql_query($select_query) or die(mysql_error());
        if (false !== $row = mysql_fetch_assoc($select_result)) {
            $array = $this->sync($row, $param);
        }
		
		if (count($array) == 0 && $param['auto_insert']) {
			$result = $this->update($param);
			$array = $this->get_by_id($result);
		}
		
        return $array;
    }
	
    function get_array($param = array()) {
        $array = array();
		$param['is_delete'] = (isset($param['is_delete'])) ? $param['is_delete'] : '0';
		
		$param['field_replace']['user_type_name'] = 'UserType.name';
		
		$string_namelike = (!empty($param['namelike'])) ? "AND User.email LIKE '%".$param['namelike']."%'" : '';
		$string_delete = "AND (User.is_delete = '".$param['is_delete']."' OR 'x' = '".$param['is_delete']."')";
		$string_filter = GetStringFilter($param, @$param['column']);
		$string_sorting = GetStringSorting($param, @$param['column'], 'name ASC');
		$string_limit = GetStringLimit($param);
		
		$select_query = "
			SELECT SQL_CALC_FOUND_ROWS User.*, UserType.name user_type_name
			FROM ".USER." User
			LEFT JOIN ".USER_TYPE." UserType ON UserType.id = User.user_type_id
			WHERE 1 $string_namelike $string_delete $string_filter
			ORDER BY $string_sorting
			LIMIT $string_limit
		";
        $select_result = mysql_query($select_query) or die(mysql_error());
		while ( $row = mysql_fetch_assoc( $select_result ) ) {
			$array[] = $this->sync($row, $param);
		}
		
        return $array;
    }

    function get_count($param = array()) {
		if (isset($param['total_user'])) {
			$select_query = "SELECT COUNT(*) TotalRecord FROM ".USER;
		} else if (isset($param['total_user_mass_email'])) {
			$select_query = "
				SELECT COUNT(*) TotalRecord
				FROM ".USER." User
				LEFT JOIN ".USER_SETTING." UserSetting ON UserSetting.user_id = User.id
				WHERE
					(UserSetting.email_notify = 1 OR UserSetting.email_notify IS NULL)
					AND User.is_delete = 0
					AND User.is_active = 1
			";
		} else {
			$select_query = "SELECT FOUND_ROWS() TotalRecord";
		}
		
		$select_result = mysql_query($select_query) or die(mysql_error());
		$row = mysql_fetch_assoc($select_result);
		$TotalRecord = $row['TotalRecord'];
		
		return $TotalRecord;
    }
	
    function get_count_mass_email($param = array()) {
		$array = array();
		$param['offset'] = (isset($param['offset'])) ? $param['offset'] : 0;
		$param['limit'] = (isset($param['limit'])) ? $param['limit'] : MAXIMUM_SENDING_MAIL;
		$param['limit'] = ($param['limit'] > MAXIMUM_SENDING_MAIL) ? MAXIMUM_SENDING_MAIL : $param['limit'];
		
		$select_query = "
			SELECT email, first_name, last_name
			FROM ".USER." User
			LEFT JOIN ".USER_SETTING." UserSetting ON UserSetting.user_id = User.id
			WHERE
				(UserSetting.email_notify = 1 OR UserSetting.email_notify IS NULL)
				AND User.is_delete = 0
				AND User.is_active = 1
			LIMIT ".$param['offset'].", ".$param['limit']."
		";
		
        $select_result = mysql_query($select_query) or die(mysql_error());
		while ( $row = mysql_fetch_assoc( $select_result ) ) {
			$array[] = $this->sync($row, $param);
		}
		
        return $array;
    }
	
    function delete($param) {
		$delete_query  = "DELETE FROM ".USER." WHERE id = '".$param['id']."' LIMIT 1";
		$delete_result = mysql_query($delete_query) or die(mysql_error());
		
		$result['status'] = '1';
		$result['message'] = 'Data successfully deleted.';

        return $result;
    }
	
	function sync($row, $param = array()) {
		$row = StripArray($row, array( 'membership_date' ));
		
		// fullname
		if (isset($row['first_name']) && isset($row['last_name'])) {
			$row['fullname'] = $row['first_name'].' '.$row['last_name'];
		}
		
		// delete password
		if (!isset($param['with_passwd']) && isset($row['passwd'])) {
			unset($row['passwd']);
		}
		
		// decript email
		if (isset($row['email'])) {
			$row['email'] = mcrypt_decode($row['email']);
		}
		
		// thumbnail
		$row['thumbnail_profile_link'] = base_url('static/img/avatar.jpg');
		if (isset($row['thumbnail_profile'])) {
			$file_path = $this->config->item('base_path').'/static/upload/'.$row['thumbnail_profile'];
			if (file_exists($file_path) && isset($row['thumbnail_profile']) && !empty($row['thumbnail_profile'])) {
				$row['thumbnail_profile_link'] = base_url('static/upload/'.$row['thumbnail_profile']);
			}
		}
		
		// link
		if (isset($row['alias'])) {
			$row['user_link'] = base_url($row['alias']);
		}
		
		if (count(@$param['column']) > 0) {
			$row = dt_view_set($row, $param);
		}
		
		return $row;
	}
	
	/*	Region Session */
	
	function is_login($param = array()) {
		// default param
		$param['array_user_type_id'] = (isset($param['array_user_type_id']))
			? $param['array_user_type_id']
			: array( USER_TYPE_ADMINISTRATOR, USER_TYPE_EDITOR, USER_TYPE_MEMBER );
		
		// check user
		$user = $this->get_session();
		$result = (count($user) > 0 && isset($user['is_login'])) ? $user['is_login'] : false;
		
		// active time
		$unix_active_time = ConvertToUnixTime(@$user['active_time']);
		$unix_current_limit = ConvertToUnixTime($this->config->item('current_datetime')) - LOGIN_ACTIVE_TIME;
		
		// is login or not ?
		if ($result && !in_array($user['user_type_id'], $param['array_user_type_id'])) {
			$result = false;
		} else if ($unix_active_time < $unix_current_limit) {
			$result = false;
		}
		
		return $result;
	}
	
	// $this->User_model->required_login(array( 'array_user_type_id' => array( USER_TYPE_ADMINISTRATOR ) ));
	function required_login($param = array()) {
		$is_login = $this->is_login($param);
		if (!$is_login) {
			header("Location: ".base_url('panel'));
			exit;
		}
	}
	
	function set_session($user) {
		$user['is_login'] = true;
		$user['active_time'] = $this->config->item('current_datetime');
		
		// add to cookie
		$this->set_cookie($user);
		
		// set session
		$_SESSION['user_login'] = $user;
	}
	
	function get_session() {
		$user = (isset($_SESSION['user_login'])) ? $_SESSION['user_login'] : array();
		if (! is_array($user)) {
			$user = array();
		}
		
		// get from cookie
		if (count($user) == 0) {
			$user = $this->get_cookie();
		}
		
		return $user;
	}
	
	function del_session() {
		if (isset($_SESSION['user_login'])) {
			unset($_SESSION['user_login']);
		}
		
		$this->del_cookie();
	}
	
	function sign_in($param = array()) {
		$user = $this->get_by_id(array( 'email' => $param['email'], 'with_passwd' => true ));
		
		$result = array( 'status' => false, 'message' => '' );
		if (count($user) == 0) {
			$result['message'] = 'Sorry, Email cannot be found.';
		} else if ($user['is_active'] == 0) {
			$result['message'] = 'Sorry, your user is inactive';
		} else if ($user['passwd'] != EncriptPassword($param['passwd'])) {
			$result['message'] = 'Sorry, password did not match.';
		} else if ($user['passwd'] == EncriptPassword($param['passwd'])) {
			// update last login
			$param['user_id'] = $user['id'];
			$param['log_time'] = $this->config->item('current_datetime');
			$param['ip_remote'] = $_SERVER['REMOTE_ADDR'];
			$param['location'] = $this->City_Ip_model->get_location(array( 'ip' => $_SERVER['REMOTE_ADDR'] ));
			$result = $this->User_Log_model->update($param);
			
			// set session
			$result['status'] = true;
			$this->set_session($user);
		}
		
		return $result;
	}
	
	function sign_active($param = array()) {
		$is_login = $this->is_login();
		
		// add time
		if ($is_login) {
			$user = $this->get_session();
			$this->set_session($user);
		}
	}
	
	/*	End Region Session */
	
	/*	Region Cookie */
	
	function set_cookie($user) {
		$cookie_value = mcrypt_encode(json_encode($user));
		setcookie("user_login", $cookie_value, time() + (60 * 60 * 5), '/', '.kedaipedia.com');	
	}
	
	function get_cookie() {
		$user = array( 'is_login' => false );
		if (isset($_COOKIE["user_login"]) && !empty($_COOKIE["user_login"])) {
			$user = json_decode(mcrypt_decode($_COOKIE["user_login"]));
			$user = object_to_array($user);
			$user['is_login'] = true;
		}
		
		return $user;
	}
	
	function del_cookie() {
		// delete cookie
		setcookie("user_login", '', time() + 0, '/', '.kedaipedia.com');
	}
	
	/*	End Region Cookie */
	
	function register($param = array()) {
		// validate password
		if (isset($param['passwd'])) {
			if (empty($param['passwd'])) {
				unset($param['passwd']);
			} else {
				$param['passwd'] = EncriptPassword($param['passwd']);
			}
		}
		
		// validation empty email or alias
		if (empty($param['email'])) {
			$result['status'] = '0';
			$result['message'] = 'Please enter your email.';
			return $result;
		} else if (empty($param['alias'])) {
			$result['status'] = '0';
			$result['message'] = 'Please enter your alias.';
			return $result;
		}
		
		// validation db
		$user_email = $this->User_model->get_by_id(array( 'email' => $param['email'] ));
		$user_alias = $this->User_model->get_by_id(array( 'alias' => $param['alias'] ));
		if (count($user_alias) > 0) {
			$result['status'] = '0';
			$result['message'] = 'Sorry, URL name already taken.';
		}
		else if (count($user_email) > 0) {
			$result['status'] = '0';
			$result['message'] = 'Sorry, your email already has account, please login.';
		}
		else {
			// sent mail validation
			$link_validation = base_url('validation/'.mcrypt_encode($param['email']));
			$param_mail['to'] = $param['email'];
			$param_mail['subject'] = WEBSITE_TITLE.' - Validation Account';
			$param_mail['message'] = 'Please click link below to validation your account :<br />'.$link_validation;
			sent_mail($param_mail);
			
			// update
			$param['register_date'] = $this->config->item('current_datetime');
			$param['user_type_id'] = (isset($param['user_type_id'])) ? $param['user_type_id'] : USER_TYPE_MEMBER;
			$result = $this->User_model->update($param);
			$result['message'] = 'Registration Succesful, please check your email to validate your registration.';
		}
		
		return $result;
	}
}