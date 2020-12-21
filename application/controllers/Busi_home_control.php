<?php 

defined('BASEPATH') OR exit('No direct script access is allowed');

class Busi_home_control extends CI_controller
{
	public function busi_loading()
	{
		$this->load->view('Busi_home_view');
	}
}

?>