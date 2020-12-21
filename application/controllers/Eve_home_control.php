<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Eve_home_control extends CI_Controller
{
	public function event_loading()
	{
		$this->load->view('eve_home_view');
	}
}

?>