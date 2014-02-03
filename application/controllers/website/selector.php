<?php

class selector extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    function index() {
		$array_segment = $this->uri->segments;
		$category = $category_sub = array();
		
		// cheking
		foreach ($array_segment as $alias) {
			// category
			$check = $this->Category_model->get_by_id(array( 'alias' => $alias ));
			if (count($check) > 0) {
				$category = $check;
				continue;
			}
			
			// category sub
			if ($category > 0) {
				$check = $this->Category_Sub_model->get_by_id(array( 'category_id' => $category['id'], 'alias' => $alias ));
				if (count($check) > 0) {
					$category_sub = $check;
					continue;
				}
			}
		}
		
		if (count($category) > 0 && count($category_sub) > 0) {
			$array_view['category'] = $category;
			$array_view['category_sub'] = $category_sub;
			$this->load->view( 'website/category_sub_list', $array_view );
		} else {
			$this->load->view( 'website/home' );
		}
    }
}