<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validation extends CI_Controller {

	
	public function validating()
	{
		$this->load->library('form_validation');
                
        

		$this->form_validation->set_rules('newsletter', 'email',  'required|valid_email',array('required' => 'empty','valid_email' => 'invalid email'));


		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('home.php');
		}
		else
		{
			$this->load->model('Insertion_model');
			$data = array(
							'email_address' => $this->input->post('newsletter')
							);

			$value = $this->Insertion_model->newsletter_insertion($data);
			if($value)
			{
				$this->session->set_flashdata('message','subscribed');		
			}

			else
			{
				$this->session->set_flashdata('message','failed to subscribe');			
			}

			return redirect("Home/dashboard");
		}
	}
	}
?>