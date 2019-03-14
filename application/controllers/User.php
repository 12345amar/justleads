<?php

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->User_model->checkUseLogin();
    }

    public function index() {    
        //$data['record'] = $this->db->query('select users.* from users 
               // left join user_roles on users.id=user_roles.user_id 
               // where user_roles.role_id=3')->result_array();
        $data['page'] = 'index';
        $this->load->view('layout', $data);
    }
    
    //User Profile Section Controller
    public function profile() {
        $userdata['record'] = $this->db->query('select users.* from users 
                left join user_roles on users.id=user_roles.user_id 
                where user_roles.role_id=3 order by id desc')->result_array();
        $userdata['page'] = 'profile';
        $this->load->view('layout', $userdata);
    }
    
    //User Profile Update
    
    public function update_profile() {
        $id = $this->uri->segment(3); 
        $userdata = $this->input->post();
        unset($userdata['update']);
        $this->User_model->profile('users', 'id=' . $userdata['id'], $userdata);
        $this->session->set_flashdata('success', 'User details updated  successfully.');
        redirect('user/profile');
    }
    
    public function view_profile() {
        
        $data['record'] = $this->db->query('select users.* from users 
                left join user_roles on users.id=user_roles.user_id 
                where user_roles.role_id=3')->result_array();
        $data['page'] = 'view_profile';
        $this->load->view('layout', $data);
        
    }
    
    
    //Change Password of User Section
    public function changepassword() {
        $this->load->view('changepassword');
    }
       
       //Change Password Here
      public function change_Password() {
      $data = array();
        if($this->input->post()){
        $this->form_validation->set_rules('old_password', 'Old Password', 'callback_password_check');
        $this->form_validation->set_rules('new_password', 'New Password', 'required');
        $this->form_validation->set_rules('pass_conf', 'Confirm Password', 'required|matches[new_password]');
       if ($this->form_validation->run() == false) {
            $this->load->view('changepassword', $data);
            $this->session->set_flashdata('errror', 'Password not changed please try again.');
        } else {
            $id = $this->session->userdata('id');
            $newpass = $this->input->post('new_password');
            $this->User_model->update($id, array('password' => md5($newpass)));
            $this->session->set_flashdata('success', 'Password changed Successfully.');
            redirect('user');
        }
      }
      //$this->load->view(changepassword);
    }

    public function password_check($old_password) {
        $id = $this->session->userdata('id');
        $user = $this->User_model->get_user($id);
        if ($user->password !== md5($old_password)) {
            $this->form_validation->set_message('password_check', 'The (field) does not match');
            return false;
        }
        return true;
    }

    public function saveNewPass($new_pass) {
        $data = array(
            'password' => $new_pass
        );
        $this->db->where('username', $this->input->post('username'));
        $this->db->update('users', $data);
        return true;
    }
    
    public function myleads() {
        $leads = $this->db->get('leads');
        $data['record'] = $leads->result_array();
        $data['page'] = 'myleads';
        $this->load->view('layout', $data);
    }
    
    /*public function view_lead() {
        $this->User_model->checkUseLogin();
        $data['page'] = 'index';
        $id = $this->uri->segment(3);
        $leads = $this->db->query("select * from leads where id=" . $id);
        $data['record'] = $leads->result_array();
        $this->load->view("view_lead", $data);
    } */
    
        public function view_lead() {
        $lead_id = $this->uri->segment(3);
        $lead_query = $this->db->query("select * from lead_query where lead_id=" .$lead_id);
        $data['record'] = $lead_query->result_array();
        $data['page'] = 'view_lead';
        $this->load->view('layout', $data);
        }
    
    public function todayleads() {
        $data['page'] = 'todayleads';
        $this->load->view('layout', $data);
    }
    
        public function rejectstatus() {
        $data['page'] = 'rejectstatus';
        $this->load->view('layout', $data);
    }
    
    /**
     * 
     * Layout of Model POP UP Follow UP Leads:
     * 
     **/
        public function insert_model(){ 
          
        if($this->input->post()){   
           
            $clientId       = $this->session->userdata('id');
            $leadId         = $this->input->post('lead_id');        
            
            $result = $this->db->query("select * from lead_query where lead_id=$leadId and client_id=$clientId");
            if ($result->num_rows() > 0) {
                $leadQueryOrder = $result->row();
                $order  = (int)$leadQueryOrder->order+1;

            } else {
                $order  = 1;            
            }

            $data = array(
                'client_id' => $clientId,
                'lead_id'   => $leadId,
                'comment'   => $this->input->post('lead_query'),
                'order'     => $order,
                'status'    => $this->input->post('status')      
                );
     
            $insert = $this->db->insert('lead_query', $data);
        
            if ($insert) {
                
                $this->session->set_flashdata('success', 'Query submitted successfully.');
                redirect('user/myleads');
            } else {
             
                $this->session->set_flashdata('error', 'Unable to submit query, try again.');
                redirect('user/myleads');
            }
       } 
       
       redirect('user/myleads');
    }
       
    
    /**
     * 
     * Client Request For Leads Admin:
     * 
     **/
    
    public function request_to_leads(){
        
        if($this->input->post()){
        $clientId       = $this->session->userdata('id');    
         $data = array(
                'client_id' => $clientId,
                'admin_id'   => 1,
                'number_of_leads' => $this->input->post('number_of_leads'),
                'query'   => $this->input->post('lead_query'),     
                );  
              $insert = $this->db->insert('request_to_leads', $data);
        
            if ($insert) {
                
                $this->session->set_flashdata('success', 'Query submitted to Admin.');
                redirect('user/request_to_leads');
            } else {
             
                $this->session->set_flashdata('error', 'Unable to submit query, try again.');
                redirect('user/request_to_leads');
            }
    }
       $data['page'] = 'request_to_leads';
        $this->load->view('layout', $data);
    
    }
    
}

?>