<?php

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
        $this->load->model('User_model');
        $this->User_model->checkUseLogin();
    }

    public function index() {
    
        $data['page'] = 'index';
        $this->load->view('layout', $data);
    }
}

?>