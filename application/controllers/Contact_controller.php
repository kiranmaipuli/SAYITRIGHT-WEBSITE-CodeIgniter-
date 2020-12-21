<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_controller extends CI_Controller {

	
	public function contact()
	{
		$this->load->view('contact_view');		
	}

/*-----------------------------------------VALIDATION--------------------------------------*/


	public function contact_validation()
	{

		$this->load->library('form_validation');
                
		$this->form_validation->set_rules('firstname', 'firstname',  'required|regex_match[/^[a-zA-Z]+(\s)?[a-zA-Z]*$/]',array('required' => 'firstname is empty','regex_match[/^[a-zA-Z]+(\s)?[a-zA-Z]*$/]' => 'invalid firstname'));
		$this->form_validation->set_rules('lastname', 'lastname',  'required|regex_match[/^[a-zA-Z]+(\s)?[a-zA-Z]*$/]',array('required' => 'lastname is empty','regex_match[/^[a-zA-Z]+(\s)?[a-zA-Z]*$/]' => 'invalid lastname'));
		$this->form_validation->set_rules('telephone', 'telephone',  'required|regex_match[/^[0-9]{10}$/]',array('required' => 'telephone is empty','regex_match[/^[0-9]{10}$/]' => 'invalid telephone'));
		$this->form_validation->set_rules('message', 'message',  'required',array('required' => 'message is required'));


		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('contact_view');
		}
		else
		{

			
			$this->load->model('Contact_model');
			$data = array(
							'first_name' => $this->input->post('firstname'),
							'last_name' => $this->input->post('lastname'),
							'telephone' => $this->input->post('telephone'),
							'message' => $this->input->post('message')	
							);

			$value = $this->contact_Model->contact_table($data);
			if($value)
			{
				$this->session->set_flashdata('message','message is sent');		
			}

			else
			{
				$this->session->set_flashdata('message','failed to send the message');			
			}

			return redirect("Contact_controller/contact_validation");
		}
	}




}
?>