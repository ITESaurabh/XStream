<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	public function index()
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
        


        public function devs() {
                
        }
}



