<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->view('register');
        $this->load->model('User_model');
        //$this->User_model->checkUseLogin();
    }

    /**
     * User registration here
     * 
     */
    
    public function index()
    {
         $data = array();
        if($this->input->post()){
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('mobile', 'Mobile',  'required|min_length[5]|max_length[12]');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('confirm', 'confirm password', 'required|matches[password]');
            $data = array(
                'username'  => $this->input->post('username'),
                'email'     => $this->input->post('email'),
                'mobile'    => $this->input->post('mobile'),
                'password'  => md5($this->input->post('password')),
            );
            
             if ($this->form_validation->run() == TRUE) {
            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'password' => md5($this->input->post('password')),
            );
            $this->User_model->insert_user($data);
            $this->session->set_flashdata('success', 'Your registration was successfull. Please login to your account.');
            redirect('login');
           } else {
                     $this->session->set_flashdata('error', 'Unable to create account, please try again.');   
                     redirect('register');
                }
            }
                $this->load->view('register');     
            }
        
   

    }