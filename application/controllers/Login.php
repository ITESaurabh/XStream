<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
                $this->load->view('header/head');
                $this->load->view('header/head2');
                $this->load->view('navbar/nav');
                $this->load->view('navbar/nav1');
                $this->load->view('navbar/nav2a');
                $this->load->view('navbar/nav3');
                $this->load->view('login');
                
                $this->load->view('footer');
        }

       public function verify()
        {      
                $username = $_POST['username'];
                 $password = md5($_POST['password']);

                 $this->load->model('Login_model');
                 /// check for condition valid or not 
                if($this->Login_model->can_login($username, $password)){
                         ///creating session
                        $session_data=array('user' => $username);
                         $this->load->library('session');
                          $this->session->set_userdata($session_data);


                          ///sending mail
                          $this->load->config('email');
                          $this->load->library('email');
                          
                          $from = $this->config->item('smtp_user');
                          $to = $this->input->post('username');
                          $subject = "FIRST ACCOUNT LOGIN";
                          $message = "Make sure u log in or not";
                  
                          $this->email->set_newline("\r\n");
                          $this->email->from($from);
                          $this->email->to($to);
                          $this->email->subject($subject);
                          $this->email->message($message);
                         
                          $this->email->send();
                         
                   

                        //session establishment there
                          redirect(base_url().'index.php/Login/success');

                }
                else{

                        redirect(base_url().'index.php/Login/notsuccess');

                }
                
        
        }
        
        public function success()
        {

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

        public function notsuccess()
        {

                $this->load->view('header');
                $this->load->view('navc');
                $this->load->view('notsuccess');
                $this->load->view('login');
                 $this->load->view('footer'); 

        }


        public function logout()
        {
                $this->load->library('session');
                $this->session->unset_userdata('user');
                redirect (base_url('index.php/main') );
        
        }

}
