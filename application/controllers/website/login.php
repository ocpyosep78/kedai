<?php

class login extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    function index() {
		if (!empty($this->uri->segments[2]) && method_exists($this, $this->uri->segments[2])) {
			$method_name = $this->uri->segments[2];
			$this->$method_name();
		} else {
			$this->load->view( 'website/login' );
		}
    }
	
	function action() {
		$action = (!empty($_POST['action'])) ? $_POST['action'] : '';
		unset($_POST['action']);
		
		$result = array();
		if ($action == 'login') {
			$user = $this->User_model->get_by_id(array( 'email' => $_POST['email'], 'with_passwd' => true ));
			
			$result = array( 'status' => false );
			if (count($user) == 0) {
				$result['message'] = 'Sorry, Email cannot be found.';
			} else if ($user['is_active'] == 0) {
				$result['message'] = 'Sorry, your user is inactive';
			} else if ($user['passwd'] != EncriptPassword($_POST['passwd'])) {
				$result['message'] = 'Sorry, wrong password';
			} else if ($user['passwd'] == EncriptPassword($_POST['passwd'])) {
				$result['status'] = true;
				$result['panel_link'] = base_url('panel');
				$this->User_model->set_session($user);
				
				/*
				// update last login
				$param['id'] = $user['id'];
				$param['login_last_date'] = $this->config->item('current_datetime');
				$this->User_model->update($param);
				/*	*/
			}
			
			echo json_encode($result);
			exit;
		}
		
		echo json_encode($result);
	}
}