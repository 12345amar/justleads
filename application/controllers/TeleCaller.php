<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class TeleCaller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('User_model');
        $this->User_model->checkUseLogin();
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
                    $post_lead     = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $lead_status   = $worksheet->getCellByColumnAndRow(6, $row)->getValue();

                    $data[] = array(
                     'buyer_name'      => $buyer_name,
                     'buyer_budget'    => $buyer_budget,
                     'mobile'          => $mobile,
                     'email'           => $email,
                     'location'        => $location,
                     'post_lead'       => $post_lead,
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
        $leads = $this->db->get('leads');
        $data['record'] = $leads->result_array();
        $data['page'] = 'leads';
        $this->load->view('layout', $data);
    }
    
    public function filter_leads() {
        $leads = $this->db->get('leads');
        $data['record'] = $leads->result_array();
        $data['page'] = 'filter_leads';
        $this->load->view('layout', $data);
    }

    public function profile() {
        $data['page'] = 'profile';
        $this->load->view('layout', $data);
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
            $this->load->view('telecaller/changepassword');
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

    public function addlead() {
        $data['page'] = 'addlead';
        $this->load->view('layout', $data);
    }

    public function insert() {
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
            //$this->load->view('leads', $data);
            redirect('telecaller/leads', $data);
        }
        //}
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

    public function delete() {
        $id = $this->uri->segment(3);
        $this->load->model('User_model');
        $this->User_model->delete('leads', 'id=' . $id);
        redirect('telecaller/leads');
    }

    public function viewdetails() {


        $id = $this->uri->segment(3);
        $leads = $this->db->query("select * from leads where id=" . $id);
        $data['record'] = $leads->result_array();
        $data['page'] = 'index';
        $this->load->view("viewdetails", $data);
    }
    
    //Getting checkbox value:
    public function submit(){
     $checked_count = count($_POST['check[]']);
     foreach($_POST['check_list'] as $selected) {
     echo "<p>".$selected ."</p>";
     }
    //foreach ($this->input->post('checkbox_name') as $checkbox)
    //{
        //print_r($checkbox); 
    //} 
    }

}
