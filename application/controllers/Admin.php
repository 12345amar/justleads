<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
    parent::__construct();
    }
	public function index()
	{
		//$this->load->helper('form');
            $this->load->view('login');           
	}
	
	public function login()
	{
	 //print_r($this->input->post());	
	 //if($this->input->post()){
	    $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run()) {
		  $username = $this->input->post('username');
		  $password = md5($this->input->post('password'));
		  //model function
		  $this->load->model('loginmodel');
		  //$login_id = $this->loginmodel->login_valid($username, $password);
          if($this->loginmodel->login_valid($username, $password)) 
		  {
			$session_data = array(
			     'username' => $username
			);
			$this->session->set_userdata($session_data);
			redirect('admin/admin_dashboard');
		  }
			else {
				$this->session->set_flashdata('error', 'Username or Password does not match, try again.');
			    redirect('admin/login');
				}
          
        }
		
         else 
         {
			 //false
			 $this->load->view('login');
		 }	
		 
	}
	
	public function admin_dashboard()
	{
		$this->load->view('admin_dashboard');
	}
	
	public function register()
	{
		$this->load->view('register');
	}
	
	
	
	public function logout() {
		$this->session->unset_userdata('username');
		return redirect('admin/login');
	}
	
	
	
	
	public function profile() {
		$this->load->view('admin/profile');
	}
        
  /*      
       public function insertlead() 
	 {
	  	//$this->load->view('register');
	if($this->input->post()){
	    //Include validation library
        $this->load->library('form_validation');
        $this->form_validation->set_rules('buyer_name', 'Buyer Name', 'required');
        $this->form_validation->set_rules('buyer_budget', 'Buyer Budget', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('location', 'Location', 'required');
	$this->form_validation->set_rules('post_lead', 'Post Lead', 'required');
        
		
        if ($this->form_validation->run()== FALSE) {
		    $this->load->view('addlead');
		} else {
			
		//$data = $this->input->post();buyer_budget
                //unset($data['cpassword']);		
                //unset($data['submit']);
		$data = array(
		    'buyer_name' => $this->input->post("buyer_name"),
                    'buyer_budget' => $this->input->post("buyer_budget"),
                    'mobile' => $this->input->post("mobile"),
		    'email' => $this->input->post("email"),
                    'location' => $this->input->post("location"),
		    'post_lead' => $this->input->post("post_lead")
		    
		);
        $this->load->model('User_model');
		
        $this->User_model->add('leads',$data);	
        redirect('admin/addlead');
		}		
        }
        
	 } */
    
        
        
        

}
