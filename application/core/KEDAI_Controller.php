<?php

class KEDAI_Controller extends CI_Controller {
    function __construct() {
        parent::__construct();
		$this->User_model->sign_active();
    }
}

class PANEL_Controller extends KEDAI_Controller {
    function __construct() {
        parent::__construct();
		$this->User_model->required_login();
    }
}