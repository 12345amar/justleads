<?php

class Register extends CI_Model {

   public function add($tb, $values) {
	   $this->db->insert($tb, $values);
   }
}

?>