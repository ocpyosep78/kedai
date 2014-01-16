<?php

class dropdown extends CI_Controller {
	function __construct() {
		parent::__construct();
	}
	
	function index() {
		$action = (!empty($_POST['action'])) ? $_POST['action'] : '';
		
		if ($action == 'category_sub') {
			$array = $this->Category_Sub_model->get_array($_POST);
		}
		
		$result = '';
		foreach ($array as $row) {
			$result .= '<li><a class="cursor select-category-sub" data-row=\''.json_encode($row).'\'>'.$row['name'].'</a></li>';
		}
		
		echo $result;
		exit;
	}
}