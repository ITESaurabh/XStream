<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class signup_model extends CI_Model{
 
  function insert_data($data){
    $this->db->insert("user",$data);
  }


  function cannot_exsist($userid)
  {
    
    $this->db->where('usr',$userid);
    $query = $this->db->get('user');
    
    if($query->num_rows() > 0){
            return false;
    }
    else {
            return true;
    }
    
  }
}
