<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->session->unset_userdata('isLogin');
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('mobile');
        $this->session->sess_destroy();
        
        return redirect('login');
    }
}