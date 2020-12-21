<?php 

class Logout_control extends CI_controller
{
	public function logout_loading()
	{
		$this->session->unset_userdata('email_id');
		$this->session->unset_userdata('user');
		return redirect("login_control/login_loading"); 
		
	}
}
