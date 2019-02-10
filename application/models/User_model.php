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
    
     function form_insert($data) {
       $this->db->insert('leads', $data);
     }
     
     public function editlead($tb,$where,$set) {
         $this->db->set($set)->where($where)->update($tb);
     }
     
     public function delete($tb,$where) {
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

    
    function fetch_pass($session_id) {
        $fetch_pass = $this->db->query("select * from users where id='$session_id'");
        $res = $fetch_pass->result();
    }
    
    function change_pass($session_id,$new_pass) {
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
      //if($users->)
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
	
}


     

       	
?>