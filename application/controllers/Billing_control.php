<?php

defined('BASEPATH') OR exit('No direct script access is allowed');

class Billing_control extends CI_controller
{
	public function bill_loading()
	{
		$this->displaying_contents();
	}

	public function displaying_contents()
	{

		$this->load->model('Billing_models');
		$product_info = $this->Billing_models->grid_cart();

		
				$this->load->library('cart');

		foreach($this->cart->contents() as $items)
		{
			
			$quantity[] = $items['qty'];
			$sub[] = $items['subtotal'];

		}
		

			$product_info['quan'] = $quantity;
			$product_info['total'] = $sub;

		if(isset($_POST['send_message']))
		{
			$this->load->library('form_validation');

			
		
			$this->form_validation->set_rules('email','email','required|valid_email',array('required' => 'email is required', 'valid_email' => 'invalid email'));	
			$this->form_validation->set_rules('firstname','firstname','required|regex_match[/^[a-zA-Z]+(\s)?[a-zA-Z]*$/]',array('required' => 'firstname is required'));	
			$this->form_validation->set_rules('lastname','lastname','required|regex_match[/^[a-zA-Z]+(\s)?[a-zA-Z]*$/]',array('required' => 'lastname is required'));	
			$this->form_validation->set_rules('address','address','required|regex_match[/^[a-zA-Z]+(\s)?[a-zA-Z]*$/]',array('required' => 'address is required',));	
			$this->form_validation->set_rules('address2','address2','required|regex_match[/^[0-9]+$/]',array('required' => 'apartment is required'));
			$this->form_validation->set_rules('city','city','required|regex_match[/^[a-zA-Z]{2,}$/]',array('required' => 'city is required',));	
			$this->form_validation->set_rules('postalcode','postalcode','required|regex_match[/^[0-9]{5}$/]',array('required' => 'postalcode is required'));	

			if($this->form_validation->run() == FALSE)
			{
			
				$this->load->view('billing_views',$product_info);							
			}

			else
			{
				$data = array(
								'email' => $this->input->post('email'),
								'first_name' => $this->input->post('firstname'),
								'last_name' => $this->input->post('lastname'),
								'address' => $this->input->post('address'),
								'apartment' => $this->input->post('address2'),
								'city' => $this->input->post('city'),
								'postal_code' => $this->input->post('postalcode')
								);

				$this->load->model('Billing_models');
				$this->Billing_models->customer_insertion($data,$product_info);
				$this->cart->destroy();
				return redirect('Home/dashboard');
				
			}
		}

		else
		{
			$this->load->view('billing_views',$product_info);
		}
	}


}


