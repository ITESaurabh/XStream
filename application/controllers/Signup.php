<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
    $this->load->view('header/head');
    $this->load->view('header/head2');
    $this->load->view('navbar/nav');
    $this->load->view('navbar/nav1');
    $this->load->view('navbar/nav2');
    $this->load->view('navbar/nav3');
    $this->load->view('signup');
    $this->load->view('footer');

        
  }
  public function index1()
	{
        $this->load->view('header');
        $this->load->view('navc');
      $this->load->view('myerror');
       $this->load->view('signup');
      // $this->load->view('aside2');
        $this->load->view('footer');

        
  }
  

  function form_validation(){
    
      if($_POST['password']==$_POST['re_password'])
      {    

        $userid = $_POST['email'];
        $this->load->model('signup_model');
           

          $_POST['password']=md5($_POST['password']);

                if($this->signup_model->cannot_exsist($userid)){
                  
                     $this->load->model('signup_model');
                     $data=array(
                        "usr"=>$this->input->post("email"),
                         "pass"=>$this->input->post("password"),
                             "name"=>$this->input->post("name"),
                             //  "phone"=>$this->input->post("contact")
                              );
                            $this->signup_model->insert_data($data);
                        redirect(base_url()."index.php/Login");
                }
                else{
 
               //   redirect(base_url()."index.php/Signup/already_e");                     
                    }
      }
     else{
         
        // redirect(base_url()."index.php/Signup/index1");
        
        }
      
   

  }


  public function already_e()
  {
    $this->load->view('header');
    $this->load->view('navc');
    $this->load->view('already_e');
    $this->load->view('signup');
     $this->load->view('footer'); 


  }


}

