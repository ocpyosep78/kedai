<?php

class home extends CI_Controller {
	function __construct() {
		parent::__construct();
	}
	
	function index() {
		$is_login = $this->User_model->is_login();
		if ($is_login) {
			$this->load->view( 'panel/home');
		} else {
			$this->load->view( 'panel/login');
		}
	}
	
	function action() {
		$action = (isset($_POST['action'])) ? $_POST['action'] : '';
		unset($_POST['action']);
		
		$result = array();
		if ($action == 'login') {
			$user = $this->User_model->get_by_id(array( 'email' => $_POST['email'], 'with_passwd' => true ));
			
			$result = array( 'status' => false, 'message' => '' );
			if (count($user) == 0) {
				$result['message'] = 'Maaf, user anda tidak ditemukan';
			} else if ($user['is_active'] == 0) {
				$result['message'] = 'Maaf, user anda tidak aktif';
			} else if ($user['passwd'] != EncriptPassword($_POST['passwd'])) {
				$result['message'] = 'Maaf, password anda tidak sesuai.';
			} else if ($user['passwd'] == EncriptPassword($_POST['passwd'])) {
				$result['status'] = true;
				$this->User_model->set_session($user);
				
				/*
				// update last login
				$param['id'] = $user['id'];
				$param['login_last_date'] = $this->config->item('current_datetime');
				$this->User_model->update($param);
				/*	*/
			}
		} else if ($action == 'get_notify') {
			$user = $this->User_model->get_session();
			$result['count'] = $this->User_Contact_model->get_unread_count(array( 'user_id' => $user['id'] ));
			$result['array_user_contact'] = $this->User_Contact_model->get_array(array( 'user_id' => $user['id'], 'is_read' => 0, 'limit' => 5 ));
		}
		
		echo json_encode($result);
		exit;
	}
	
	function logout() {
		$this->User_model->del_session();
		header("Location: ".base_url());
		exit;
	}
}