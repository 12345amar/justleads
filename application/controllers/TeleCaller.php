<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TeleCaller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->database();
        //$this->load->library('session');
        //$this->load->helper('url');
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
    
    public function leads() {
        $this->User_model->checkUseLogin();
        $data['page']   = 'index';
        $leads = $this->db->get('leads');
        $data['record'] = $leads->result_array();
        //echo '<pre>';
        //print_r($data); die();
        $this->load->view('leads', $data);
    }
    
    public function profile() {
        $this->User_model->checkUseLogin(); 
        $data['page']   = 'index';
	$this->load->view('profile', $data);
	}
        
    public function changepassword() {
        $this->User_model->checkUseLogin();
        $data['page']   = 'index';
        $this->load->view('changepassword', $data);
    }
    
    public function change_pass() {
        if($this->input->post('change_pass')) {
            $old_pass = md5($this->input->post('old_password'));
            $new_pass = md5($this->input->post('newpassword'));
            $confirm_pass = md5($this->input->post('re_password'));
            $session_id = $this->session->userdata('id');
            $que = $this->db->query("select * from users where id='$session_id'");
            $row = $que->row();
            if((!strcmp($old_pass, $pass))&&(!strcmp($new_pass, $confirm_pass))) {
                $this->User_model->change_pass($session_id,$new_pass);
                echo "Password change successfully";
            }
           else {
                echo "Invalid";
           }
        }
        $this->load->view('changepassword');
    }
    
        public function addlead() {
            $this->load->view('addlead');
        }
    
    public function insert() 
	 {
	//$this->load->view('register');
	//if($this->input->post()){
	//Include validation library
        $this->load->library('form_validation');
        $this->form_validation->set_rules('buyer_name', 'Buyer Name', 'required');
        $this->form_validation->set_rules('buyer_budget', 'Buyer Budget', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('location', 'Location', 'required');
	$this->form_validation->set_rules('post_lead', 'Post Lead', 'required');
        
		
        if ($this->form_validation->run() == FALSE) {
	       $this->load->view('addlead');
            //echo "process is failed";
		} else {
		$data = array(
		    'buyer_name' => $this->input->post('buyer_name'),
                    'buyer_budget' => $this->input->post('buyer_budget'),
                    'mobile' => $this->input->post('mobile'),
		    'email' => $this->input->post('email'),
                    'location' => $this->input->post('location'),
		    'post_lead' => $this->input->post('post_lead')  
		);
                //print_r($data); die();
        //$this->load->model('User_model');	
        $this->User_model->form_insert($data);
        $data['message'] = 'Lead Inserted Successfully';
        $this->load->view('addlead', $data);
        //redirect('telecaller/addlead');
	}	
        //}
	 }
          
         public function viewlead() {
             echo "hello";
         }

}
