<?php

class KEDAI_Controller extends CI_Controller {
    function __construct() {
        parent::__construct();
		$this->User_model->sign_active();
		$this->Ip_Log_model->check_request();
    }
}

class PANEL_Controller extends KEDAI_Controller {
    function __construct() {
        parent::__construct();
		$this->User_model->required_login();
    }
}