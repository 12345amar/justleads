<?php
class Leads extends CI_Model {
    
    function select() 
    {
        $this->db->order_by('id', 'DESC'); 
        $query = $this->db->get('leads');
        return $query;
    }
    
   // function insert()
    //{
      //  $this->db->insert_batch('leads', $data);
    //}
    
    function insert($tb,$values) {
       $this->db->insert('leads', $data);
    }
    
    	public function add($tb,$values) {
	$this->db->insert($tb,$values);
	}
        /*
        public function add($row, $dateCreated = FALSE) {
        $this->db->insert('tbl_students', $row);
        return $this->db->insert_id();
         } */
    
}



?>