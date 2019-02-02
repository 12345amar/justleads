<?php

class LoginModel extends CI_Model {

    public function login_valid( $username, $password )

    {
        //$q = $this->db->where(['fname'=>$username,'pswrd'=>$password])
                     // ->get('users');

                  //if ( $q->num_rows() ) {
                    //  return $q->row()->id;
                     //return TRUE;
                 // } else {
                      //return FALSE;
                 // }
		
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('users');	
        if($query->num_rows() > 0)
		{
		 return true;	
		}		
		else
		{
		return false;	
		}
    }
}

?>