<?php
class advert extends KEDAI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    function index() {
		$this->load->view( 'panel/manage/advert' );
    }
	
	function grid() {
		$_POST['is_manage'] = 'admin';
		$_POST['column'] = array( 'category_name', 'category_sub_name', 'name', 'post_time', 'advert_status_name' );
		
		// set previlege
		$user = $this->User_model->get_session();
		if ($user['user_type_id'] == USER_TYPE_MEMBER) {
			$_POST['is_manage'] = 'member';
			$_POST['user_id'] = $user['id'];
		}
		
		$array = $this->Advert_model->get_array($_POST);
		$count = $this->Advert_model->get_count();
		$grid = array( 'sEcho' => $_POST['sEcho'], 'aaData' => $array, 'iTotalRecords' => $count, 'iTotalDisplayRecords' => $count );
		
		echo json_encode($grid);
	}
	
	function action() {
		$action = (isset($_POST['action'])) ? $_POST['action'] : '';
		unset($_POST['action']);
		
		$result = array();
		if ($action == 'update') {
			$result = $this->Advert_model->update($_POST);
		} else if ($action == 'get_by_id') {
			$result = $this->Advert_model->get_by_id(array( 'id' => $_POST['id'] ));
		} else if ($action == 'delete') {
			$_POST['is_delete'] = 1;
			$result = $this->Advert_model->update($_POST);
		}
		
		echo json_encode($result);
	}
}