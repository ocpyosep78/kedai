<?php

class search extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    function index() {
		$this->load->view( 'website/search_list' );
    }
}