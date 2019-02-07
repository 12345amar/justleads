<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot extends CI_Controller {

    public function __construct() {
        parent::__construct();
         // $this->load->model('User_model');
    }

    /**
     * User Forgot_password here
     * 
     */
    public function index() {
        if ($this->input->post()) {
            $this->form_validation->set_rules('username', 'Username', 'required');
            if ($this->form_validation->run()) {
                $email      = $this->input->post('username');
                $userData   = $this->db->query("select * from users where email='$email'")->row();
                if (!empty($userData)) {
                    $token  = $this->generateRandomString(64);
                    $data['link']   = base_url().'forgot/resetPassword/'.$token;
                    $forgotPassword = array(
                        'email'     => $email,
                        'token'     => $token,
                    );
                    
                    $this->db->insert('reset_password', $forgotPassword);
                    
                    $this->session->set_flashdata('success', 'Sent reset password to your mail successfully.'.$data['link']);
                    redirect('forgot/index');
                } else {

                    $this->session->set_flashdata('error', 'Email does not exist, try again.');
                    redirect('forgot/index');
                  }
                 }
               }

                 $this->load->view('forgot_password');
               }
    
    public function generateRandomString($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    
    public function resetPassword($token)
    {
        
        $data['token']  = $token;
        $this->load->view('reset_password', $data);
    }
    
  public function changePassword()
  {
        
      if ($this->input->post()) {
       $this->form_validation->set_rules('password', 'password', 'required');
       $this->form_validation->set_rules('confirm', 'confirm password', 'required|matches[password]');
           
       if ($this->form_validation->run() == true) {
           
               $password    = md5($this->input->post('password'));
               $token       = $this->input->post('token');
               $checkUser   = $this->db->query("select * from reset_password where token ='$token'")->row();
               if (!empty($checkUser)) {
                   
                   $this->db->where('email', $checkUser->email);
                   $this->db->update('users', ['password' => $password]);
                   $this->session->set_flashdata('success', 'Password reset successfully.');
                   redirect('login');
               } else {
                  $this->session->set_flashdata('error', 'Token expired, try again.');
                  redirect('login'); 
               }
               
       }
      }
       $data['token']   = $this->input->token;
       $this->load->view('reset_password', $data);
    
  }
}