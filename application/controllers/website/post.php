<?php

class post extends KEDAI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    function index() {
		if (!empty($this->uri->segments[2]) && method_exists($this, $this->uri->segments[2])) {
			$method_name = $this->uri->segments[2];
			$this->$method_name();
		} else {
			$this->load->view( 'website/post' );
		}
    }
	
	function action() {
		$action = (!empty($_POST['action'])) ? $_POST['action'] : '';
		unset($_POST['action']);
		
		$result = array();
		if ($action == 'update') {
			/*	User Region */
			if (isset($_POST['user_action']) && $_POST['user_action'] == 'member_register') {
				$user_check = $this->User_model->get_by_id(array( 'email' => $_POST['email'] ));
				if (count($user_check) > 0) {
					$user = $user_check;
				} else {
					// insert for new user
					$array_fullname = explode(' ', $_POST['fullname'], 2);
					$param_user['first_name'] = $array_fullname[0];
					$param_user['last_name'] = @$array_fullname[1];
					$param_user['email'] = $_POST['email'];
					$param_user['passwd'] = $_POST['passwd'];
					$param_user['is_ic_number'] = $_POST['is_ic_number'];
					$param_user['ic_number'] = $_POST['ic_number'];
					$param_user['phone'] = $_POST['phone'];
					$param_user['bb_pin'] = $_POST['bb_pin'];
					$result_user = $this->User_model->update($param_user);
					
					// get user data
					$user = $this->User_model->get_by_id(array( 'id' => $result_user['id'] ));
				}
			} else if (isset($_POST['user_action']) && $_POST['user_action'] == 'member_login') {
				$user_login = $this->User_model->sign_in(array( 'email' => $_POST['email'], 'passwd' => $_POST['passwd'] ));
				if (!$user_login['status']) {
					echo json_encode($user_login);
					exit;
				}
				
				// get user
				$user = $this->User_model->get_session();
			}
			/*	End User Region */
			
			/*	Advert Region */
			$advert_update = array();
			$array_form = array( 'id', 'category_id', 'category_sub_id', 'advert_type_id', 'condition_id', 'region_id', 'city_id', 'address', 'name', 'price', 'negotiable', 'content', 'thumbnail' );
			
			// collect param
			foreach ($array_form as $name) {
				$advert_update[$name] = $_POST[$name];
			}
			
			// delete unused param
			foreach ($array_form as $name) {
				if (isset($_POST[$name])) {
					unset($_POST[$name]);
				}
			}
			
			// grouping additional parameter
			$param_metadata = $_POST;
			if (isset($param_metadata['list_thumbnail'])) {
				unset($param_metadata['list_thumbnail']);
			}
			$advert_update['metadata'] = json_encode($param_metadata);
			
			// set default data
			if (empty($advert_update['id'])) {
				$advert_update['advert_status_id'] = ADVERT_STATUS_REVIEW;
			} else {
				$advert_update['advert_status_id'] = ADVERT_STATUS_RE_REVIEW;
			}
			$advert_update['post_time'] = $this->config->item('current_datetime');
			
			// update
			$advert_update['user_id'] = $user['id'];
			$result = $this->Advert_model->update($advert_update);
			
			// thumbnail
			$this->Advert_Pic_model->delete(array( 'advert_id' => $result['id'] ));
			if (isset($_POST['list_thumbnail'])) {
				foreach ($_POST['list_thumbnail'] as $thumbnail) {
					$param_thumbnail = array( 'advert_id' => $result['id'], 'thumbnail' => $thumbnail );
					$result_thumbnail = $this->Advert_Pic_model->update($param_thumbnail);
				}
			}
			/*	End Advert Region */
		}
		else if ($action == 'get_category_input') {
			$result = $this->Category_Input_model->get_tree($_POST);
		}
		else if ($action == 'get_template_input') {
			$alias = $_POST['alias'];
			$library_name = 'input_'.$_POST['alias'];
			$this->load->library($library_name);
			$result = $this->$library_name->get_entry();
			echo $result; exit;
		}
		
		echo json_encode($result);
	}
}