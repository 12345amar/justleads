<?php

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->User_model->checkUseLogin();
    }

    public function index() {    
        $data['record'] = $this->db->query('select users.* from users 
                left join user_roles on users.id=user_roles.user_id 
                where user_roles.role_id=3')->result_array();
        $data['page'] = 'index';
        $this->load->view('layout', $data);
    }
    
    //User Profile Section
    public function profile() {
        $userdata['record'] = $this->db->query('select users.* from users 
                left join user_roles on users.id=user_roles.user_id 
                where user_roles.role_id=3 order by id desc')->result_array();
        $userdata['page'] = 'profile';
        $this->load->view('layout', $userdata);
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
            redirect('login');
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
        $data['page'] = 'myleads';
        $this->load->view('layout', $data);
    }
    
    public function todayleads() {
        $data['page'] = 'todayleads';
        $this->load->view('layout', $data);
    }
}

?>