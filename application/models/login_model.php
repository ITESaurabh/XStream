<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login_model extends CI_Model{


function can_login($username , $password)
  {
    
    $this->db->where('usr',$username);
    $this->db->where('pass',$password);
    $query = $this->db->get('user');
    
    if($query->num_rows() > 0){
            return true;
    }
    else {
            return false;
    }
    
  }


}
  
