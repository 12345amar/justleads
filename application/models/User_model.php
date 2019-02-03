<?php

class User_model extends CI_Model {

    /**
     * Check User is exist in storage
     * 
     * @param type $username
     * @param type $password
     * @return boolean
     */
    public function login_valid($userData)
    {       
        $this->db->where('email', $userData['username']);
        $this->db->or_where('mobile', $userData['username']);
        $this->db->where('password', $userData['password']);
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
	} else {
            
            return false;	
	}
        die;
    }
    
    public function checkUseLogin()
    {
        if ($this->session->userdata('isLogin') !== TRUE) {
            
            redirect('logout');
        }
    }
}

?>