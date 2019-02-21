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

    public function profile() {
        $data['page'] = 'profile';
        $this->load->view('layout', $data);
    }

    // Caller section in Admin Controller

    public function caller() {
        $data['record'] = $this->db->query('select users.* from users 
                left join user_roles on users.id=user_roles.user_id 
                where user_roles.role_id=2 order by id desc')->result_array();

        $data['page'] = 'caller';
        $this->load->view('layout', $data);
    }

    public function insert_caller() {


        if ($this->input->post()) {

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('mobile', 'Mobile Number', 'required|regex_match[/^[0-9]{10}$/]');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run() == FALSE) {

                $data = array(
                    'username'  => $this->input->post('username'),
                    'email'     => $this->input->post('email'),
                    'mobile'    => $this->input->post('mobile'),
                    'password'  => md5($this->input->post('password')),
                );
                $result = $this->User_model->form_insert_caller($data);
                if ($result == TRUE) {

                    $this->session->set_flashdata('success', 'Tele Caller created successfully.');
                    redirect('admin/caller');
                } else {

                    $this->session->set_flashdata('error', 'Unable to create Tele Caller, try again.');
                    redirect('admin/caller');
                }
            }
        } else {
            redirect('admin/caller');
        }
    }

    public function add_caller() {
        $data['page'] = 'add_caller';
        $this->load->view('layout', $data);
    }

    public function view_caller() {
        $id = $this->uri->segment(3);
        $leads = $this->db->query("select * from users where id=" . $id);
        $data['record'] = $leads->result_array();
        $data['page'] = 'view_caller';
        $this->load->view("layout", $data);
    }

    public function edit_caller() {
        $id = $this->uri->segment(3);
        $leads = $this->db->query("select * from users where id=" . $id);
        $data['record'] = $leads->result_array();
        $data['page'] = 'edit_caller';
        $this->load->view("layout", $data);
    }

    public function update_caller() {
        $data = $this->input->post();
        unset($data['update']);
        $this->User_model->edit_caller('users', 'id=' . $data['id'], $data);
        redirect('admin/caller');
    }

    public function delete_caller() {
        $id = $this->uri->segment(3);
        $this->load->model('User_model');
        $this->User_model->delete_caller('users', 'id=' . $id);
        redirect('admin/caller');
    }

    // Users section in Admin Controller


    public function user() {
        $users = $this->db->get('users');
        $data['record'] = $users->result_array();
        $data['page'] = 'user';
        $this->load->view('layout', $data);
    }

    public function insert_user() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('add_user');
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'password' => md5($this->input->post('password')),
            );
            $this->User_model->form_insert_user($data);
            $data['message'] = 'Lead Inserted Successfully';
            redirect('admin/user', $data);
        }
    }

    public function add_user() {
        $data['page'] = 'add_user';
        $this->load->view('layout', $data);
    }

    public function view_user() {
        $id = $this->uri->segment(3);
        $leads = $this->db->query("select * from users where id=" . $id);
        $data['record'] = $leads->result_array();
        $data['page'] = 'view_user';
        $this->load->view("layout", $data);
    }

    public function edit_user() {
        $id = $this->uri->segment(3);
        $leads = $this->db->query("select * from users where id=" . $id);
        $data['record'] = $leads->result_array();
        $data['page'] = 'edit_user';
        $this->load->view("layout", $data);
    }

    public function update_user() {
        $data = $this->input->post();
        unset($data['update']);
        $this->User_model->edit_user('users', 'id=' . $data['id'], $data);
        redirect('admin/user');
    }

    public function delete_user() {
        $id = $this->uri->segment(3);
        $this->load->model('User_model');
        $this->User_model->delete_user('users', 'id=' . $id);
        redirect('admin/user');
    }

    // Leads section in Admin Controller

    public function leads() {
        $leads = $this->db->get('leads');
        $data['record'] = $leads->result_array();
        $data['page'] = 'leads';
        $this->load->view('layout', $data);
    }

    public function add_lead() {
        $data['page'] = 'add_lead';
        $this->load->view('layout', $data);
    }

    public function insert_lead() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('buyer_name', 'Buyer Name', 'required');
        $this->form_validation->set_rules('buyer_budget', 'Buyer Budget', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('location', 'Location', 'required');
        $this->form_validation->set_rules('post_lead', 'Post Lead', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('add_lead');
        } else {
            $data = array(
                'buyer_name' => $this->input->post('buyer_name'),
                'buyer_budget' => $this->input->post('buyer_budget'),
                'mobile' => $this->input->post('mobile'),
                'email' => $this->input->post('email'),
                'location' => $this->input->post('location'),
                'post_lead' => $this->input->post('post_lead')
            );
            $this->User_model->form_insert_lead($data);
            $data['message'] = 'Lead Inserted Successfully';
            redirect('admin/leads', $data);
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
        redirect('admin/leads');
    }

    public function delete_lead() {
        $id = $this->uri->segment(3);
        $this->User_model->delete_lead('leads', 'id=' . $id);
        redirect('admin/leads');
    }

    public function changepassword() {
        $this->load->view('changepassword');
    }

    public function change_Password() {
        $this->User_model->checkUseLogin();
        $this->form_validation->set_rules('old_password', 'Old Password', 'callback_password_check');
        $this->form_validation->set_rules('new_password', 'Old Password', 'required');
        $this->form_validation->set_rules('pass_conf', 'Confirm Password', 'required|matches[new_password]');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/changepassword');
        } else {
            $id = $this->session->userdata('id');
            $newpass = $this->input->post('new_password');
            $this->User_model->update($id, array('password' => md5($newpass)));
            redirect('login');
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
