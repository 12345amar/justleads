<?php

class User_model extends CI_Model {

    function __construct() {
    parent::__construct();
    }
    /**
     * Check User is exist in storage
     * 
     * @param type $username
     * @param type $password
     * @return boolean
     */
    
    // Caller Section in model..
    
    public function form_insert_caller($data) {
        $insert     = $this->db->insert('users', $data);
        $user_id    = $this->db->insert_id();
        if ($insert) {
            $this->db->insert('user_roles', ['user_id' => $user_id, 'role_id' => 2]);
            
            return TRUE;
        } else {
           
            return False;
        }
     }
     
     public function edit_caller($tb,$where,$set) {
         $this->db->set($set)->where($where)->update($tb);
     }
     
     public function delete_caller($tb,$where) {
         $this->db->delete($tb,$where);
     }
     
     // User Section in model..
     
     function form_insert_user($data) {
       $this->db->insert('users', $data);
     }
     
     public function edit_user($tb,$where,$set) {
         $this->db->set($set)->where($where)->update($tb);
     }
     
     public function delete_user($tb,$where) {
         $this->db->delete($tb,$where);
     }
     
     // Leads Section in model..
     
     public function form_insert_lead($data) {
       $this->db->insert('leads', $data);
     }
     
     public function edit_lead($tb,$where,$set) {
         $this->db->set($set)->where($where)->update($tb);
     }
     
     public function delete_lead($tb,$where) {
         $this->db->delete($tb,$where);
     }
     
     
   //user login model details:
    public function login_valid($userData)
    {       
       $this->db->where('email', $userData['username']);
        $this->db->where('password', $userData['password']);
       $this->db->or_where('mobile', $userData['username']);
        $query      = $this->db->get('users');	
        $userData   = $query->row();
        if (!empty($userData)) {
            $session_data = array(
                        'isLogin'   => TRUE,
                        'id'        => $userData->id,
                        'username'  => $userData->username,
                        'email'     => $userData->email,
                        'mobile'    => $userData->mobile
                    );                    
            $this->session->set_userdata($session_data);  
            return true;	
	    } 
        else { 
            return false;	
	    }        
    }
    
   // public function saverecords($tb, $values) {
	   //$this->db->insert($tb, $values);
   //}
   
    public function checkUseLogin()
    {
        if ($this->session->userdata('isLogin') !== TRUE) {
            
            redirect('logout');
        } 
        
         
    }

    
    public function fetch_pass($session_id) {
        $fetch_pass = $this->db->query("select * from users where id='$session_id'");
        $res = $fetch_pass->result();
    }
    
    public function change_pass($session_id,$new_pass) {
        $update_pass = $this->db->query("UPDATE users set password='$new_pass' where id='$session_id'");
    }
	
	public function get_user($id) {
      $this->db->where('id', $id);
      $query = $this->db->get('users');
      return $query->row();
    }
    
    public function update($user_id, $userdata) {
      $this->db->where('id', $user_id);
      $this->db->update('users', $userdata);
    }
    
    public function getUserRole()
    {
        if ($this->session->userdata('id')) {
        $id = $this->session->userdata('id');        
        $result = $this->db->query("select roles.role from user_roles left
            join roles on user_roles.role_id=roles.id where user_roles.user_id=$id")->row();
        
        return $result->role;
        
        } else {
            
            return false;
        } 
    }
    
    public function profile($tb,$where,$set) {
         $this->db->set($set)->where($where)->update($tb);
     }
     
}    	
?>