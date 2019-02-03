<?php
 
 class Users extends CI_Controller {
	 
	 public function register() 
	 {
	  	//$this->load->view('register');
		if($this->input->post()){
	    //Include validation library
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'UserName', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required|regex_match[/^[0-9]{10}$/]');
		
        if ($this->form_validation->run()== FALSE) {
		    $this->load->view('register');
		} else {
			
		//$data = $this->input->post();
        //unset($data['cpassword']);		
        //unset($data['submit']);
		$data = array(
		    'username' => $this->input->post("username"),
			'email' => $this->input->post("email"),
			'password' => md5($this->input->post("password")),
			'mobile' => $this->input->post("mobile")
		);
        $this->load->model('register');
		
        $this->register->add('users',$data);	
        redirect('admin/login');
		}		
        
        }		
	 }
 }
?>