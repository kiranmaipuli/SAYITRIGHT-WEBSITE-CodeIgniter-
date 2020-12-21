<?php 

defined('BASEPATH') OR exit('No direct script access is allowed');

class Business_signup_controller extends CI_controller{

	public function b_home()
	{
		$this->load->view('business_signup_view');
	}



/*-----------------------------------BUSINESS VALIDATION--------------------------------*/

public function business_validation()
{
	$this->load->library('form_validation');

	$this->form_validation->set_rules('lastname','lastname','required|regex_match[/^[a-zA-Z]+(\s)?[a-zA-Z]*$/]',array('required' => 'lastname is empty'));	
	$this->form_validation->set_rules('email','email','required|valid_email',array('required' => 'lastname is empty', 'valid_email' => 'invalid email'));	
	$this->form_validation->set_rules('password','password','required|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W])[A-Za-z\d\W]{8,}$/]',array('required' => 'password is empty'));	

	if($this->form_validation->run() == FALSE)
	{
		$this->load->view('business_signup_view');
	}

	else
	{
		$this->load->model('Business_model');


		if($this->input->post('businesstype') == 'university')
		{
			$id = 3;
		}

		else

		{
			$id = 4;
		}

		$data = array(

						'role_id' => $id,
						'last_name' => $this->input->post('lastname'),
						'email' => $this->input->post('email'),
						'password' => $this->input->post('password')
					 );

		$value = $this->Business_model->business_insertion($data);

		if($value)
		{
			$this->session->set_flashdata('message','successfully signed up');
		}

		else
		{
			$this->session->set_flashdata('message','unable to sign up');
		}

		return redirect("Business_signup_controller/b_home"); 
	}

}
}