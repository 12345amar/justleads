<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class TeleCaller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('User_model');
        $this->User_model->checkUseLogin();
        $this->load->helper('url');
        //load the excel library
        $this->load->library('excel');
    }

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
                    $lead_source     = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
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
                redirect('telecaller/leads');
            } else {
             
                $this->session->set_flashdata('error', 'Unable to upload file, try again.');
                redirect('telecaller/leads');
            }
            
        } else {
           
            $this->session->set_flashdata('error', 'File is not valid, try again.');
            redirect('telecaller/leads');
        }
    }

    /**
     * Layout of Tele caller
     * 
     */
    public function index() {
        $data['page'] = 'index';
        $this->load->view('layout', $data);
    }
    
    
    
    

    public function leads() {
        
        $this->db->where('lead_status', '0');
        $leads = $this->db->get('leads');       
        $data['record'] = $leads->result_array();
        $data['page'] = 'leads';
        $this->load->view('layout', $data);
    }
    
    public function filter_leads() {
        
        $userId = $this->session->userdata('id');
        $data['record'] = $this->db->query("select leads.* from leads 
                left join admin_telecaller_leads on leads.id=admin_telecaller_leads.lead_id 
                where leads.lead_status='1' and admin_telecaller_leads.sender_id=$userId order by id desc")->result_array();
        $data['page'] = 'filter_leads';
        $this->load->view('layout', $data);
    }

// Profile section in Telecaller Controller
    
    public function profile() {
         $userdata['record'] = $this->db->query('select users.* from users 
                left join user_roles on users.id=user_roles.user_id 
                where user_roles.role_id=2')->result_array();
        $userdata['page'] = 'profile';
        $this->load->view('layout', $userdata);
    }
    
     public function update_profile() {
        $id = $this->uri->segment(3); 
        $userdata = $this->input->post();
        unset($userdata['update']);
        $this->User_model->profile('users', 'id=' . $userdata['id'], $userdata);
        $this->session->set_flashdata('success', 'Telecaller details updated  successfully.');
        redirect('telecaller/profile');
    }
    
    public function view_profile() {
        
        $data['record'] = $this->db->query('select users.* from users 
                left join user_roles on users.id=user_roles.user_id 
                where user_roles.role_id=2')->result_array();
        $data['page'] = 'view_profile';
        $this->load->view('layout', $data);
        
    }
    
    
    

    public function changepassword() {
        $this->load->view('changepassword');
    }

    public function change_Password() {
        $data = array();
        if($this->input->post()){
        $this->User_model->checkUseLogin();
        $this->form_validation->set_rules('old_password', 'Old Password', 'callback_password_check');
        $this->form_validation->set_rules('new_password', 'Old Password', 'required');
        $this->form_validation->set_rules('pass_conf', 'Confirm Password', 'required|matches[new_password]');
        if ($this->form_validation->run() == false) {
            $this->load->view('changepassword', $data);
            $this->session->set_flashdata('error', 'Password not change plz try again!');
           
            
        } else {
            $id = $this->session->userdata('id');
            $newpass = $this->input->post('new_password');
            $this->User_model->update($id, array('password' => md5($newpass)));
             $this->session->set_flashdata('success', 'Change Password Successfully.');
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

    public function add_lead() {
        $data['page'] = 'add_lead';
        $this->load->view('layout', $data);
    }

 /*   public function insert() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('buyer_name', 'Buyer Name', 'required');
        $this->form_validation->set_rules('buyer_budget', 'Buyer Budget', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('location', 'Location', 'required');
        $this->form_validation->set_rules('post_lead', 'Post Lead', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('addlead');
        } else {
            $data = array(
                'buyer_name' => $this->input->post('buyer_name'),
                'buyer_budget' => $this->input->post('buyer_budget'),
                'mobile' => $this->input->post('mobile'),
                'email' => $this->input->post('email'),
                'location' => $this->input->post('location'),
                'post_lead' => $this->input->post('post_lead')
            );
            $this->User_model->form_insert($data);
            $data['message'] = 'Lead Inserted Successfully';
            redirect('telecaller/leads', $data);
        }
       
    } */
    
    
    /**
     * Insert Lead By Tele caller
     * 
     */
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
            redirect('telecaller/leads', $data);
         } else {
            $data['page'] = 'add_lead';
            $this->load->view('layout', $data);
           }
         }
    }
    
    
    /**
     * Delete Raw Leads By Tele caller
     * 
     */
    public function delete_lead() {
        $id = $this->uri->segment(3);
        $this->User_model->delete_lead('leads', 'id=' . $id);
        $this->session->set_flashdata('success', 'Lead deleted Successfully.');
        redirect('telecaller/leads');
    }
    
    /**
     * Delete Filter Leads By Tele caller
     * 
     */
    public function delete_filter_lead() {
        $id = $this->uri->segment(3);
        $this->User_model->delete_filter_lead('leads', 'id=' . $id);
        $this->session->set_flashdata('success', 'Lead deleted Successfully.');
        redirect('telecaller/filter_leads');
    }
    
    

    public function view_lead() {
        $id = $this->uri->segment(3);
        $leads = $this->db->query("select * from leads where id=" . $id);
        $data['record'] = $leads->result_array();
        $data['page'] = 'view_lead';
        $this->load->view("layout", $data);
    }

    public function update_lead() {
        $data = $this->input->post();
        unset($data['update']);
        $this->load->model('User_model');
        $this->User_model->edit_lead('leads', 'id=' . $data['id'], $data);
        $this->session->set_flashdata('success', 'Lead updated successfully.');
        redirect('telecaller/leads');
    } 
    
    
    public function edit_lead() {
        $id = $this->uri->segment(3);
        $leads = $this->db->query("select * from leads where id=" . $id);
        $data['record'] = $leads->result_array();
        $data['page'] = 'edit_lead';
        $this->load->view("layout", $data);
    }

  /*  public function delete() {
        $id = $this->uri->segment(3);
        $this->load->model('User_model');
        $this->User_model->delete('leads', 'id=' . $id);
        redirect('telecaller/leads');
    } */

    public function viewdetails() {


        $id = $this->uri->segment(3);
        $leads = $this->db->query("select * from leads where id=" . $id);
        $data['record'] = $leads->result_array();
        $data['page'] = 'index';
        $this->load->view("viewdetails", $data);
    }
    
    //Getting Ajax Value:
    public function transfer_admin(){
   
        if($this->input->post()){
        $telecallerId       = $this->session->userdata('id');
        $lead_id = $this->input->post('lead_id');
        
        foreach($lead_id as $leads){
        $data = array(
                'sender_id' => $telecallerId,
                'receiver_id'   => 1,
                'lead_id' => $leads,
                'assign'   => 'admin',     
                );
        
            $insert  = $this->db->insert('admin_telecaller_leads', $data);
                        $this->db->where('id', $leads);
            $update  = $this->db->update('leads', ['lead_status' => '1']);
            
        }
        
         if ($insert) {
                
             echo json_encode(['status' => 'success', 'message' => 'Lead transfer to admin successfully.']);
               // $this->session->set_flashdata('success','Data Send to Admin.');
                //print json_encode(array("status"=>"success","message"=>"Your message here"));
               // redirect('telecaller/leads');
            } else {
             
                echo json_encode(['status' => 'error', 'message' => 'Unable to lead transfer to admin, try again.']);
            }
       }
        $data['page'] = 'leads';
        $this->load->view('layout', $data);
    }
    
}
