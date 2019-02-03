<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TeleCaller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    /**
     * Layout of Tele caller
     * 
     */
    public function index() {
        $this->User_model->checkUseLogin();
        
        $data['page']   = 'index';
        $this->load->view('layout', $data);
    }
    
    

}
