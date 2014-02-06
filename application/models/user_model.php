<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
    function __construct() {
        parent::__construct();
		
        $this->field = array(
			'id', 'user_type_id', 'email', 'alias', 'first_name', 'last_name', 'passwd', 'address', 'phone', 'bb_pin', 'register_date', 'membership_date', 'reset_key',
			'verify_profile', 'verify_email', 'verify_address', 'thumbnail_profile', 'thumbnail_banner', 'ic_number', 'is_ic_number', 'is_active', 'is_delete',
			'advert_count', 'city_id', 'user_about', 'user_info', 'postal_code'
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
				FROM ".USER."
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
		$select_query = "SELECT FOUND_ROWS() TotalRecord";
		$select_result = mysql_query($select_query) or die(mysql_error());
		$row = mysql_fetch_assoc($select_result);
		$TotalRecord = $row['TotalRecord'];
		
		return $TotalRecord;
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
		if (isset($row['thumbnail_profile']) && !empty($row['thumbnail_profile'])) {
			$row['thumbnail_profile_link'] = base_url('static/upload/'.$row['thumbnail_profile']);
		} else {
			$row['thumbnail_profile_link'] = base_url('static/img/avatar.jpg');
		}
		
		if (count(@$param['column']) > 0) {
			$row = dt_view_set($row, $param);
		}
		
		return $row;
	}
	
	/*	Region Session */
	
	function is_login($admin_level = false) {
		$user = $this->get_session();
		$result = (count($user) > 0 && @$user['is_login']) ? true : false;
		
		if ($result && $admin_level) {
			if ($user['user_type_id'] != USER_TYPE_ADMINISTRATOR) {
				$result = false;
			}
		}
		
		return $result;
	}
	
	function required_login($admin_level = false) {
		$is_login = $this->is_login($admin_level);
		if (!$is_login) {
			header("Location: ".base_url('panel'));
			exit;
		}
	}
	
	function set_session($user) {
		$user['is_login'] = true;
		
		// set session
		$_SESSION['user_login'] = $user;
		
		// set cookie
		$cookie_value = mcrypt_encode(json_encode($user));
		setcookie("user_login", $cookie_value, time() + (60 * 60 * 5), '/');
	}
	
	function get_session() {
		$user = (isset($_SESSION['user_login'])) ? $_SESSION['user_login'] : array();
		if (! is_array($user)) {
			$user = array();
		}
		
		// check from cookie
		if (count($user) == 0) {
			$user = $this->get_cookies();
		}
		
		// renew session if user already login
		if (count($user) > 0 && isset($user['is_login']) && $user['is_login']) {
			// set session
			$_SESSION['user_login'] = $user;
			
			// set cookie
			$cookie_value = mcrypt_encode(json_encode($user));
			setcookie("user_login", $cookie_value, time() + (60 * 60 * 5), '/');
		}
		
		return $user;
	}
	
	function get_cookies() {
		$user = array( 'is_login' => false );
		if (isset($_COOKIE["user_login"])) {
			$user = json_decode(mcrypt_decode($_COOKIE["user_login"]));
			$user = object_to_array($user);
			$user['is_login'] = true;
		}
		
		return $user;
	}
	
	function del_session() {
		// delete session
		if (isset($_SESSION['user_login'])) {
			unset($_SESSION['user_login']);
		}
		
		// delete cookie
		setcookie("user_login", '', time() + 0, '/');
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
	
	/*	End Region Session */
}