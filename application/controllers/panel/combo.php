<?php

class combo extends CI_Controller {
	function __construct() {
		parent::__construct();
	}
	
	function index() {
		$action = (!empty($_POST['action'])) ? $_POST['action'] : '';
		
		// default id & name
		$id = 'id';
		$title = 'name';
		
		if ($action == 'category_sub') {
			$array = $this->Category_Sub_model->get_array($_POST);
		}
		
		echo ShowOption(array( 'Array' => $array, 'ArrayID' => $id, 'ArrayTitle' => $title ));
		exit;
	}
}                                                