<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->User_model->checkUseLogin();
        //load the excel library
        $this->load->library('excel');
    }

    /**
     * 
     * Upload Excel By Admin
     * function: importLeadsByExcel
     * 
     **/
        public function importLeadsByExcel() {
        
        if ($_FILES['leads']['tmp_name']) {
            
            $path   = $_FILES['leads']['tmp_name'];
            $object = PHPExcel_IOFactory::load($path);
            foreach ($object->getWorksheetIterator() as $worksheet) {
                $highestRow     = $worksheet->getHighestRow();
                $highestColumn  = $worksheet->getHighestColumn();

                for ($row=2; $row<=$highestRow; $row++) {
                    $buyer_name    = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $buyer_budget  = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $mobile        = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $email         = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $location      = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $lead_source   = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $lead_status   = $worksheet->getCellByColumnAndRow(6, $row)->getValue();

                    $data[] = array(
                     'buyer_name'      => $buyer_name,
                     'buyer_budget'    => $buyer_budget,
                     'mobile'          => $mobile,
                     'email'           => $email,
                     'location'        => $location,
                     'lead_source'     => $lead_source,
                     'lead_status'     => $lead_status
                    );
                }
            }
   
            $insert = $this->db->insert_batch('leads', $data);
            if ($insert) {
                
                $this->session->set_flashdata('success', 'File uploaded successfully.');
                redirect('admin/leads');
            } else {
             
                $this->session->set_flashdata('error', 'Unable to upload file, try again.');
                redirect('admin/leads');
            }
            
        } else {
           
            $this->session->set_flashdata('error', 'File is not valid, try again.');
            redirect('admin/leads');
        }
    }
    
    
    /**
     * Layout of Admin
     * 
     */
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
    
    public function view_profile() {
        
        $data['record'] = $this->db->query('select users.* from users 
                left join user_roles on users.id=user_roles.user_id 
                where user_roles.role_id=1 order by id desc')->result_array();
        $data['page'] = 'view_profile';
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

     public function add_caller() {
        $data['page'] = 'add_caller';
        $this->load->view('layout', $data);
         }
         
    public function insert_caller() {
        
        if ($this->input->post()) {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('mobile', 'Mobile',  'required|min_length[10]|max_length[12]|regex_match[/^[0-9]{10}$/]');
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
        $this->session->set_flashdata('success', 'Caller updated successfully.');
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
            $this->form_validation->set_rules('mobile', 'Mobile',  'required|min_length[10]|max_length[12]');
            $this->form_validation->set_rules('password', 'password', 'required');
        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'password' => md5($this->input->post('password')),
            );
            $this->User_model->form_insert_user($data);
            $this->session->set_flashdata('success', 'Caller added successfully.');
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
        $this->session->set_flashdata('success', 'Client updated successfully.');
        redirect('admin/user');
    }

    public function delete_user() {
        $id = $this->uri->segment(3);
        $this->load->model('User_model');
        $this->User_model->delete_user('users', 'id=' . $id);
        $this->session->set_flashdata('success', 'Client deleted successfully.');
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
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('lead_source', 'Lead Source', 'required');
        $this->form_validation->set_rules('buyer_budget', 'Buyer Budget', 'required');
        $this->form_validation->set_rules('location', 'Location', 'required');
        $this->form_validation->set_rules('project', 'Project', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('lead_status', 'Lead Status', 'required');
        $this->form_validation->set_rules('size', 'Size', 'required');
        $this->form_validation->set_rules('priority', 'Priority', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');
        
        $data = array(
                'buyer_name' => $this->input->post('buyer_name'),
                'email' => $this->input->post('email'),
                'lead_source' => $this->input->post('lead_source'),
                'buyer_budget' => $this->input->post('buyer_budget'),
                'location' => $this->input->post('location'),
                'project' => $this->input->post('project'),
                'mobile' => $this->input->post('mobile'),
                'lead_status' => $this->input->post('lead_status'),
                'size' => $this->input->post('size'),
                'priority' => $this->input->post('priority'),
                'message' => $this->input->post('message'),
                
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
        $this->session->set_flashdata('success', 'Update Leads successfully.');
        redirect('admin/leads');
    }

    public function delete_lead() {
        $id = $this->uri->segment(3);
        $this->User_model->delete_lead('leads', 'id=' . $id);
        $this->session->set_flashdata('Lead deleted Successfully.');
        redirect('admin/leads');
    }
    
    /**
     * Layout of Admin Side Filter Leads
     * 
     */
    public function filter_leads() {
        
        $data['record'] = $this->db->query('select leads.* from leads 
                left join admin_telecaller_leads on leads.id=admin_telecaller_leads.lead_id 
                where admin_telecaller_leads.lead_id=leads.id order by id desc')->result_array();
        $data['page'] = 'filter_leads';
        $this->load->view('layout', $data);
    }
    
    /**
     * Layout of Package
     * 
     */
    
    public function credits() {
        $data['record'] = $this->db->query("select * from package order by id desc")->result_array();
        $data['page'] = 'credits';
        $this->load->view('layout', $data);
    }
    
    /**
     * Layout of Create Package
     * 
     **/
    public function add_credits() {
        $data['page'] = 'add_credits';
        $this->load->view('layout', $data);
    } 
    
    
    /**
     * 
     * Layout of Insert Package
     * 
     */
    public function insert_package(){
      
        if($this->input->post()){
        $this->form_validation->set_rules('package_id', 'Package ID', 'required');
        $this->form_validation->set_rules('package_name', 'Package Name', 'required');
        $this->form_validation->set_rules('total_leads', 'Total Lead', 'required');
        $this->form_validation->set_rules('package_price', 'Package Price', 'required');
        
        $data = array(
                'package_id' => $this->input->post('package_id'),
                'package_name' => $this->input->post('package_name'),
                'total_leads' => $this->input->post('total_leads'),
                'package_price' => $this->input->post('package_price')    
            );
        if ($this->form_validation->run() == TRUE) {
            $this->User_model->insert_package($data);
            $this->session->set_flashdata('success', 'Package Created Successfully.');
            redirect('admin/package', $data);
         } else {
            $data['page'] = 'create_package';
            $this->load->view('layout', $data);
           }
         }  
    }
    
    /**
     * Layout of Edit Package
     * 
     */
     public function edit_package() {
        $id = $this->uri->segment(3);
        $packages = $this->db->query("select * from package where id=" . $id);
        $data['record'] = $packages->result_array();
        $data['page'] = 'edit_package';
        $this->load->view("layout", $data);
    }
    
    /**
     * Layout of Update Package
     * 
     */
    
    public function update_package() {
        $data = $this->input->post();
        unset($data['update']);
        $this->User_model->edit_lead('package', 'id=' . $data['id'], $data);
        $this->session->set_flashdata('success', 'Update Package successfully.');
        redirect('admin/package');
    }
    
    /**
     * Layout of Delete Package
     * 
     */
    
        public function delete_package() {
        $id = $this->uri->segment(3);
        $this->User_model->delete_lead('package', 'id=' . $id);
        $this->session->set_flashdata('success', 'Package deleted Successfully.');
        redirect('admin/package');
    }
    
    /**
     * Layout of View Package
     * 
     */
    
    public function view_package() {
        $id = $this->uri->segment(3);
        $leads = $this->db->query("select * from package where id=" . $id);
        $data['record'] = $leads->result_array();
        $data['page'] = 'view_package';
        $this->load->view("layout", $data);
    }
    
    
    /**
     * Layout of Change Password
     * 
     */
    public function changepassword() {
        $this->load->view('changepassword');
    }
    
     /**
     * 
     * Functionality of Change Password:
     * Functions: change_Password, password_check, saveNewPass
     * 
     **/

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
    
    public function client_request() {
        $data['record'] = $this->db->query("select * from request_to_leads order by id desc")->result_array();
        $data['page'] = 'client_request';
        $this->load->view('layout', $data); 
    }
    
    
    public function client_list() {
        //$data['record'] = $this->db->query("select * from request_to_leads order by id desc")->result_array();
        $data['page'] = 'client_list';
        $this->load->view('layout', $data); 
    }

}
