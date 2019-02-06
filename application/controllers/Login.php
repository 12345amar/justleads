<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    /**
     * User login here
     * 
     */
    public function index() {
        if ($this->input->post()) {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run()) {
                $userData   = array(
                    'username'   => $this->input->post('username'),
                    'password'   => md5($this->input->post('password'))
                );  
                if ($this->User_model->login_valid($userData)) {
                   
                    $this->session->set_flashdata('success', 'User logged in successfully.');  
                    redirect('telecaller');
                } else {
                    
                    $this->session->set_flashdata('error', 'Username or Password does not match, try again.');                    
                    redirect('login');
                }
            }
        }
        
        $this->load->view('login');
    } 

}
