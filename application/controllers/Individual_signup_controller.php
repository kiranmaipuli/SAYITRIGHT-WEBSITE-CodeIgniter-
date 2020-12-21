<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Individual_signup_controller extends CI_Controller {

	
	public function i_home()
	{
		$this->load->view('individual_signup_view');		
	}


/*-----------------------------------------VALIDATION--------------------------------------*/


	public function individual_validation()
	{

		$this->load->library('form_validation');
                
		$this->form_validation->set_rules('lastname', 'lastname',  'required|regex_match[/^[a-zA-Z]+(\s)?[a-zA-Z]*$/]',array('required' => 'lastname is empty','regex_match[/^[a-zA-Z]+(\s)?[a-zA-Z]*$/]' => 'invalid lastname'));
		$this->form_validation->set_rules('firstname', 'firstname',  'required|regex_match[/^[a-zA-Z]+(\s)?[a-zA-Z]*$/]',array('required' => 'firstname is empty','regex_match[/^[a-zA-Z]+(\s)?[a-zA-Z]*$/]' => 'invalid firstname'));
		$this->form_validation->set_rules('placework', 'placework',  'required|regex_match[/^[a-zA-Z0-9]+.$/]',array('required' => 'placework is empty','regex_match[/^[0-9]{10}$/]' => 'invalid placework'));
		$this->form_validation->set_rules('school', 'school',  'required|regex_match[/^[a-zA-Z]+(\s)?[a-zA-Z]*$/]',array('required' => 'school is required'));
		$this->form_validation->set_rules('email', 'email',  'required|valid_email',array('required' => 'email is empty','valid_email' => 'invalid email'));
		$this->form_validation->set_rules('password','password','required|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W])[A-Za-z\d\W]{8,}$/]',array('required' => 'password is required'));

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('individual_signup_view');
		}
		else
		{


			$this->load->model('Individual_model');
			$data = array(
						'role_id' => 1,
						'first_name' => $this->input->post('firstname'),
						'last_name' => $this->input->post('lastname'),
						'workplace' => $this->input->post('placework'),
						'school' => $this->input->post('school'),
						'email' => $this->input->post('email'),
						'password' => $this->input->post('password') 
						);

			$value = $this->Individual_model->individual_insertion($data);

			if($value)
			{
				$this->session->set_flashdata('message','signed up successfully');		
			}

			else
			{
				$this->session->set_flashdata('message','unable to sign up!!!');			
			}

			return redirect("Individual_signup_controller/i_home"); 
		}
	}




}
?>