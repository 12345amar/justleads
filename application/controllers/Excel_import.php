<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Excel_import extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('Leads');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        //$this->load->library('excel_reader');
    }
    
    function index()
    {
        $this->load->view('admin/leads'); 
    }
    
  function admin_import() {

  if (isset($_REQUEST['upload'])) {
    $ok = true;
    $file = $_FILES['file']['tmp_name'];
    if($_FILES['file']['size'] > 0)
    {
     $handle = fopen($file, "r");
     if ($file == NULL) {
      error(_('Please select a file to import'));
      redirect('excel_import/admin_import');
     }
    else {
      $c = 0;
      while(($importdata = fgetcsv($handle, 1000, ",")) !== false)
        { 
       if ($c>=0) {
          $row = array(
                      'buyer_name' =>  !empty($importdata[0])?$importdata[0]:'',
                      'buyer_budget' =>  !empty($importdata[1])?$importdata[1]:'',
                      'mobile' =>  !empty($importdata[2])?$importdata[2]:'',
                      'email' =>  !empty($importdata[3])?$importdata[3]:'',
                      'location' =>  !empty($importdata[4])?$importdata[4]:'',
                      'post_lead' =>  !empty($importdata[5])?$importdata[5]:'',
                      'lead_status' =>  !empty($importdata[6])?$importdata[6]:''
                       );  
                      $this->load->model('leads');
                      $this->leads->add('leads',$row); 
                      echo 'leads are inserted successfully';
                      //$insert = $this->db->insert('leads', $importdata);
                      redirect('admin/leads');
                      $c = $c + 1;
                    }
                    
       }
                    echo "sucessfully import data !";
    }
    }
  }
}
        
}