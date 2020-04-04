<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Theme extends CI_Controller {

    public function dark()
    {


        $this->load->library('session');
        $this->session->unset_userdata('theme');
        redirect (base_url('index.php/main') );
                 

    }

    public function light()
    {
        
        $theme="light";
        $theme_data=array('theme'=>$theme);
        $this->load->library('session');

                       $this->session->set_userdata($theme_data);
                       redirect (base_url('index.php/main') ); 

    }
    
    

    public function r()
    {


        $this->load->library('session');
        $this->session->unset_userdata('r');
        redirect (base_url('index.php/main') );
                 

    }

    public function nr()
    {
        
        $r="light";
        $r_data=array('r'=>$r);
        $this->load->library('session');

                       $this->session->set_userdata($r_data);
                       redirect (base_url('index.php/main') ); 

    }
	
}
