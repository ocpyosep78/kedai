<?php

class register extends KEDAI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    function index() {
		if (!empty($this->uri->segments[2]) && method_exists($this, $this->uri->segments[2])) {
			$method_name = $this->uri->segments[2];
			$this->$method_name();
		} else {
			$this->load->view( 'website/register' );
		}
    }
	
	function action() {
		$action = (!empty($_POST['action'])) ? $_POST['action'] : '';
		unset($_POST['action']);
		
		$result = array();
		if ($action == 'update') {
			if (isset($_POST['passwd'])) {
				if (empty($_POST['passwd'])) {
					unset($_POST['passwd']);
				} else {
					$_POST['passwd'] = EncriptPassword($_POST['passwd']);
				}
			}
			
			// validation
			$user_email = $this->User_model->get_by_id(array( 'email' => $_POST['email'] ));
			$user_alias = $this->User_model->get_by_id(array( 'alias' => $_POST['alias'] ));
			if (count($user_alias) > 0) {
				$result['status'] = '0';
				$result['message'] = 'Sorry, URL name already taken.';
			} else if (count($user_email) > 0) {
				$result['status'] = '0';
				$result['message'] = 'Sorry, your email already has account, please login.';
			}
			
			else {
				// sent mail validation
				$link_validation = base_url('validation/'.mcrypt_encode($_POST['email']));
				$param_mail['to'] = $_POST['email'];
				$param_mail['subject'] = WEBSITE_TITLE.' - Validation Account';
				$param_mail['message'] = 'Please click link below to validation your account :<br />'.$link_validation;
				sent_mail($param_mail);
				
				// update
				$_POST['user_type_id'] = USER_TYPE_MEMBER;
				$_POST['register_date'] = $this->config->item('current_datetime');
				$result = $this->User_model->update($_POST);
				$result['message'] = 'Registration Succesful, please check your email to validate your registration.';
			}
		}
		
		echo json_encode($result);
	}
}