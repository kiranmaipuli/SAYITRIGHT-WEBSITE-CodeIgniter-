<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class settings_control extends CI_Controller
{
	public function settings_loading()
	{
		$a = 1;
		$user = $this->session->userdata('user');		
		$this->load->model('Settings_model');

		$returning = $this->Settings_model->displaying_profile($user);

		foreach($returning as $rows)
		{
			$arr = array(

							'first_name' => $rows->first_name,
							'last_name' => $rows->last_name,
							'workplace' => $rows->workplace,
							'school' => $rows->school,
							'email' => $rows->email,
							'password' => $rows->password,
							'image' => $rows->image,
							'a' => 1
						);
		}


		if(isset($_POST['change_image']))
		{

			$this->session->b = 10;
			
		}

		$this->load->view('settings_view',$arr);

		if(isset($_POST['save_changes']))

		{
			$password = $this->input->post('password');
			if($this->session->b == 10)
			{

				$config = [
							 'upload_path' => './uploads',
							 'allowed_types' => 'gif|png|jpg|jpeg|jppeg' 
						  ];

				$this->load->library('upload',$config);
				
				if($this->upload->do_upload())
				{
					$data = $this->input->post('userfile');
					$c = $this->session->b;

					$info = $this->upload->data();
					$image_name = $info['orig_name'];
					

					$storing = $this->Settings_model->setting_image($image_name,$user,$password);
					if($storing)
					{
						$this->session->set_flashdata('message','all changes are saved successfully');		
						return redirect('Settings_control/settings_loading');
					}

					else
					{
						$this->session->set_flashdata('message','changes was unsuccessful');			
						return redirect('Settings_control/settings_loading');
					}
				}

			}

		
		
		else
		{
			$password_storage = $this->Settings_model->setting_password($user,$password);
			if($password_storage)
			{
				$this->session->set_flashdata('message','password is saved successfully');		
				return redirect('Settings_control/settings_loading');
			}

			else
			{
				$this->session->set_flashdata('message','password change was unsuccessful');			
				return redirect('Settings_control/settings_loading');
			}		
		}	

	}	
	}
		
}

