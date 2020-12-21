<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		echo "hello world";
		//$this->load->view('welcome_message');
	}

	public function dashboard()
	{
		$this->load->view('example_view');
	}
}
