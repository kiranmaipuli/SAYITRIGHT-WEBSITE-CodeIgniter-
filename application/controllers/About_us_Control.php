<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us_Control extends CI_Controller {

	
	public function about()
	{
		$this->load->view('aboutus');		
	}
}