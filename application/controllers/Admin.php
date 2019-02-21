<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->User_model->checkUseLogin();
    }

    public function index() {
        $data['page'] = 'index';
        $this->load->view('layout', $data);
    }
    
 // Profile section in Admin Controller
    
    public function profile() {
         $userdata['record'] = $this->db->query('select users.* from users 
                left join user_roles on users.id=user_roles.user_id 
                where user_roles.role_id=1 order by id desc')->result_array();
        $userdata['page'] = 'profile';
        $this->load->view('layout', $userdata);
    }
    
     public function update_profile() {
        $id = $this->uri->segment(3); 
        $userdata = $this->input->post();
        unset($userdata['update']);
        $this->User_model->profile('users', 'id=' . $userdata['id'], $userdata);
        $this->session->set_flashdata('success', 'Admin details updated  successfully.');
        redirect('admin/profile');
    }
    
    // Caller section in Admin Controller

    public function caller() {
        $data['record'] = $this->db->query('select users.* from users 
                left join user_roles on users.id=user_roles.user_id 
                where user_roles.role_id=2 order by id desc')->result_array();
       
        $data['page'] = 'caller';
        $this->load->view('layout', $data);
    }

     public function add_caller() {
        $data['page'] = 'add_caller';
        $this->load->view('layout', $data);
         }
         
    public function insert_caller() {
        
        if ($this->input->post()) {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('mobile', 'Mobile',  'required|min_length[5]|max_length[12]');
            $this->form_validation->set_rules('password', 'password', 'required');
          $data = array(
                    'username'  => $this->input->post('username'),
                    'email'     => $this->input->post('email'),
                    'mobile'    => $this->input->post('mobile'),
                    'password'  => md5($this->input->post('password')),
            );
            if ($this->form_validation->run() == TRUE) {
            $this->User_model->form_insert_caller($data);
            $this->session->set_flashdata('success', ' Inserted Successfully.');
            redirect('admin/caller', $data);
         } else {
            $data['page'] = 'add_caller';
            $this->load->view('layout', $data);
           }  
       }
    }
    
    public function view_caller() {
        $id = $this->uri->segment(3);
        $users = $this->db->query("select * from users where id=" . $id);
        $data['record'] =$users->result_array();
        $data['page'] = 'view_caller';
        $this->load->view("layout", $data);
    }

    public function edit_caller() {
        $id = $this->uri->segment(3);
        $users = $this->db->query("select * from users where id=" . $id);
        $data['record'] = $users->result_array();
        $data['page'] = 'edit_caller';
        $this->load->view("layout", $data);
    }

    public function update_caller() {
        $data = $this->input->post();
        unset($data['update']);
        $this->User_model->edit_caller('users', 'id=' . $data['id'], $data);
        $this->session->set_flashdata('success', 'Caller details updated successfully.');
        redirect('admin/caller');
    }

    public function delete_caller() {
        $id = $this->uri->segment(3);
        $this->load->model('User_model');
        $this->User_model->delete_caller('users', 'id=' . $id);
        $this->session->set_flashdata('success', 'Caller deleted successfully.');
        redirect('admin/caller');
    }

    // Users section in Admin Controller


    public function user() {
         $data['record'] = $this->db->query('select users.* from users 
                left join user_roles on users.id=user_roles.user_id 
                where user_roles.role_id=3 order by id desc')->result_array();
        $data['page'] = 'user';
        $this->load->view('layout', $data);
    }

     public function add_user() {
        $data['page'] = 'add_user';
        $this->load->view('layout', $data);
    }
    
    public function insert_user() {
     
     if($this->input->post()){
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('mobile', 'Mobile',  'required|min_length[5]|max_length[12]');
            $this->form_validation->set_rules('password', 'password', 'required');
        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'password' => md5($this->input->post('password')),
            );
            $this->User_model->form_insert_user($data);
            $this->session->set_flashdata('success', 'User inserted successfully.');
            //$data['message'] = 'User Inserted Successfully';
            redirect('admin/user', $data);
           } else {
             $data['page'] = 'add_user';
             $this->load->view('layout', $data);
             }
    }
    }
    
    public function view_user() {
        $id = $this->uri->segment(3);
        $users = $this->db->query("select * from users where id=" . $id);
        $data['record'] = $users->result_array();
        $data['page'] = 'view_user';
        $this->load->view("layout", $data);
    }

    public function edit_user() {
        $id = $this->uri->segment(3);
        $users = $this->db->query("select * from users where id=" . $id);
        $data['record'] = $users->result_array();
        $data['page'] = 'edit_user';
        $this->load->view("layout", $data);
    }

    public function update_user() {
        $data = $this->input->post();
        unset($data['update']);
        $this->User_model->edit_user('users', 'id=' . $data['id'], $data);
        $this->session->set_flashdata('success', 'User details updated successfully.');
        redirect('admin/user');
    }

    public function delete_user() {
        $id = $this->uri->segment(3);
        $this->load->model('User_model');
        $this->User_model->delete_user('users', 'id=' . $id);
        $this->session->set_flashdata('success', 'User deleted successfully.');
        redirect('admin/user');
    }

    // Leads section in Admin Controller

    public function leads() {
       
        $data['record'] = $this->db->query("select * from leads order by id desc")->result_array();
        $data['page'] = 'leads';
        $this->load->view('layout', $data);
    }

    public function add_lead() {
        $data['page'] = 'add_lead';
        $this->load->view('layout', $data);
    }

    public function insert_lead() {
       
        if($this->input->post()){
        $this->form_validation->set_rules('buyer_name', 'Buyer Name', 'required');
        $this->form_validation->set_rules('buyer_budget', 'Buyer Budget', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('location', 'Location', 'required');
        $this->form_validation->set_rules('post_lead', 'Post Lead', 'required');
        $data = array(
                'buyer_name' => $this->input->post('buyer_name'),
                'buyer_budget' => $this->input->post('buyer_budget'),
                'mobile' => $this->input->post('mobile'),
                'email' => $this->input->post('email'),
                'location' => $this->input->post('location'),
                'post_lead' => $this->input->post('post_lead')
            );
        if ($this->form_validation->run() == TRUE) {
            $this->User_model->form_insert_lead($data);
            $this->session->set_flashdata('success', 'Lead Inserted Successfully.');
            redirect('admin/leads', $data);
         } else {
            $data['page'] = 'add_lead';
            $this->load->view('layout', $data);
           }
         }
    }

    public function view_lead() {
        $id = $this->uri->segment(3);
        $leads = $this->db->query("select * from leads where id=" . $id);
        $data['record'] = $leads->result_array();
        $data['page'] = 'view_lead';
        $this->load->view("layout", $data);
    }

    public function edit_lead() {
        $id = $this->uri->segment(3);
        $leads = $this->db->query("select * from leads where id=" . $id);
        $data['record'] = $leads->result_array();
        $data['page'] = 'edit_lead';
        $this->load->view("layout", $data);
    }

    public function update_lead() {
        $data = $this->input->post();
        unset($data['update']);
        $this->User_model->edit_lead('leads', 'id=' . $data['id'], $data);
        $this->session->set_flashdata('success', 'User details updated successfully.');
        redirect('admin/leads');
    }

    public function delete_lead() {
        $id = $this->uri->segment(3);
        $this->User_model->delete_lead('leads', 'id=' . $id);
        $this->session->set_flashdata('Lead deleted Successfully.');
        redirect('admin/leads');
    }

    public function changepassword() {
        $this->load->view('changepassword');
    }

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
            redirect('login');
        }
      }
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

}
