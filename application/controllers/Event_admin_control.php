<?php

defined('BASEPATH') OR exit('No direct script access is allowed');

class Event_admin_control extends CI_Controller
{
	public function event_admin_calling()
	{

		$this->event_admin_table();
		
	}


	/*--------------------------------------DYNAMIC DATA FETCHING----------------------------*/


	public function event_admin_table()
	{
		$this->load->model('Event_admin_model');
		$user = $this->session->userdata('user');		

//		echo $user;
		$value = $this->Event_admin_model->viewing_tables_admin($user);
//		print_r($value);

		
		$this->load->view('event_admin_view',array('events' => $value));
		
	}

	public function updating_info()
	{

		$this->load->model('Event_admin_model');
		$count = $this->input->post('count');
		$user1 = $this->session->userdata('user');

		for($a=1;$a<=$count;$a++)
		{
	 		if(isset($_POST['delete'.$a]))
			{
				$id = $this->input->post('id'.$a); 
				$data_deletion = $this->Event_admin_model->deletion($id);

				
				if($data_deletion)
				{
					$this->session->set_flashdata('generic_message','event is deleted successfully');		
				}

				else
				{
					$this->session->set_flashdata('generic_message','event is cannot be deleted');			
				}

				return redirect('Event_admin_control/event_admin_calling');

			}


			if(isset($_POST['update'.$a]))
			{
				$id = $this->input->post('id'.$a); 
				$update_info = array(
									'event_name' => $this->input->post('event_name'),
									'description' => $this->input->post('description'),
									'date' => $this->input->post('date'),
									'location' => $this->input->post('location'),
									'event_id' => $this->input->post('id'.$a)
								  );
				
				
				$data_update = $this->Event_admin_model->updation($update_info);
				if($data_update)
				{
					$this->session->set_flashdata('generic_message','event is updated successfully');		
				}

				else
				{
					$this->session->set_flashdata('generic_message','event is cannot be updated');			
				}

				return redirect('Event_admin_control/event_admin_calling');

			}

		}


	}

	public function adding_info()
	{
				$this->load->model('Event_admin_model');
				$user1 = $this->session->userdata('user');

				$new_event = array(
									'event_name' => $this->input->post('event_name1'),
									'event_type' => 'event',
									'description' => $this->input->post('description1'),
									'date' => $this->input->post('date1'),
									'location' => $this->input->post('location1'),
									'user_id' => $user1
								  );
				
				$data_insert = $this->Event_admin_model->insertion($new_event);
				if($data_insert)
				{
					$this->session->set_flashdata('generic_message','new event is added successfully');		
				}

				else
				{
					$this->session->set_flashdata('generic_message','failed to add new event');			
				}

				return redirect('Event_admin_control/event_admin_calling');

			

			
		
	}
}

