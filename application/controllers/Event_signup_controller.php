<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Event_signup_controller extends CI_controller
{
	public function e_home()
	{
		$this->load->view('event_signup_view');
	}


/*-------------------------------------EVENT VALIDATION----------------------------------*/

public function event_validation()
{

	$this->load->library('form_validation');
	$this->form_validation->set_rules('lastname','lastname','required|regex_match[/^[a-zA-Z]+(\s)?[a-zA-Z]*$/]',array('required' => 'lastname is empty'));
	$this->form_validation->set_rules('firstname','firstname','required|regex_match[/^[a-zA-Z]+(\s)?[a-zA-Z]*$/]',array('required' => 'firstname is empty'));
	$this->form_validation->set_rules('email','email','required|valid_email',array('required' => 'email is empty', 'valid_email' => 'invalid email'));
	$this->form_validation->set_rules('password','password','required|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W])[A-Za-z\d\W]{8,}$/]',array('required' => 'password is empty'));

	if($this->form_validation->run() == FALSE)
	{
		$this->load->view('event_signup_view');
	}

	else
	{
	
		$this->load->model('Event_model');
		$data = array(

						'role_id' => 2,
						'first_name' => $this->input->post('firstname'),
						'last_name' => $this->input->post('lastname'),
						'email' => $this->input->post('email'),
						'password' => $this->input->post('password')
					 );

		$value = $this->Event_model->event_insertion($data);
		if($value)
		{
			$this->session->set_flashdata('message','successfully signed up');
		}

		else

		{
			$this->session->set_flashdata('message','unable to sign up');
		}
	}

}
}

?>