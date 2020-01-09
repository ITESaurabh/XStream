<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{

                $query=$this->db->query("SELECT * from image where id = (select max(id) from image)");
                          
                foreach ($query->result_array() as $row)
                {
                        $count=$row['id'];
                
                    }
                for($i=1; $i<=10; $i=$i+1){
                   $query = $this->db->query("SELECT * FROM image where id=$count");
                       $count=$count-1;
                                        
                    foreach ($query->result_array() as $row)
                    {
                             $row['file_name'];
                             $_SESSION["img_".$i] = $row['file_name'];
                             $_SESSION["dis_".$i] = $row['dis'];
                    }         
                                 
                 }                 
   
            


        $this->load->view('header/head');
        $this->load->view('header/head2');
       // $this->load->view('nav_theme');
        $this->load->view('navbar/nav');
        $this->load->view('navbar/nav1a');
        $this->load->view('navbar/nav2');
        $this->load->view('navbar/nav3');
        $this->load->view('main');
        $this->load->view('footer');
        }
        


        function devs() {
        
                $this->load->view('header/head');
                $this->load->view('header/head2');
                $this->load->view('navbar/nav');
                $this->load->view('navbar/nav1');
                $this->load->view('navbar/nav2a');
                $this->load->view('navbar/nav3');
                $this->load->view('devs');
                $this->load->view('footer');


        }
}



