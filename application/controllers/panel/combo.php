<?php

class combo extends CI_Controller {
	function __construct() {
		parent::__construct();
	}
	
	function index() {
		$action = (!empty($_POST['action'])) ? $_POST['action'] : '';
		
		if ($action == 'category') {
			$array = $this->Category_model->get_array(array( ));
		} else if ($action == 'user_type') {
			$array = $this->User_Type_model->get_array(array( ));
		}
		
		echo json_encode($array);
		exit;
	}
}                                                