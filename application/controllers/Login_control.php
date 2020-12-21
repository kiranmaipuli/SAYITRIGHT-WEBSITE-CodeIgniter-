<?php

class login_control extends CI_controller
{
	public function login_loading()
	{
		$this->load->view('login_view');
	}

/*-----------------------------------LOGIN VALIDATION ----------------------------------*/

	public function login_validation()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email','email','required|valid_email',array('required' => 'email is empty', 'valid_email' => 'invalid email'));
		$this->form_validation->set_rules('password','password','required|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W])[A-Za-z\d\W]{8,}$/]',array('required' => 'password is empty', 'regex_match' => 'invalid password'));

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('login_view');
		}

		else
		{
			
				$email = $this->input->post('email');
				$password = $this->input->post('password');


			$this->load->model('Login_model');
			$value1 = $this->Login_model->login_checking($email,$password);
			
			
			if($value1[0]['count'] == 1)
			{
				$user = $value1[0]['user_id'];
				$email_id = $value1[0]['email'];

				$this->session->user = $user;
				$this->session->email_id = $email_id;


				if($value1[0]['role_id'] == 1)
				{
					return redirect("Ind_home_control/indi_home_loading"); 
				}

				else if ($value1[0]['role_id'] == 2)
				{
					return redirect("Eve_home_control/event_loading"); 
				}

				else
				{
					return redirect("Busi_home_control/busi_loading"); 
				}
			}

			else
			{
				echo "failure";
			}
		}
	}
}