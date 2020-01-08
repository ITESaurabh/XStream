<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_error extends CI_Controller {

	public function index()
	{
        $this->load->view('header');
        $this->load->view('navc');
       $this->load->view('myerror');
     
        $this->load->view('footer');
	}
}
