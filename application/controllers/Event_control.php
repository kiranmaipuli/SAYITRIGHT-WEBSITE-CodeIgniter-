<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Event_control extends CI_Controller
{
	public function event_calling()
	{

		$this->event_table();
		
	}


	/*--------------------------------------DYNAMIC DATA FETCHING----------------------------*/


	public function event_table()
	{
		$this->load->model('Eventtable_model');
		$user = $this->session->userdata('user');		

//		echo $user;
		$value = $this->Eventtable_model->viewing_tables($user);
//		print_r($value);

		
		$this->load->view('event_view',array('events' => $value));
		
	}


	public function adding_to_myevents()
	{

		$this->load->model('Eventtable_model');
		$count = $this->input->post('count');
		$user1 = $this->session->userdata('user');

		for($a=1;$a<=$count;$a++)
		{
	 		if(isset($_POST['add'.$a]))
			{
				$id = $this->input->post('id'.$a); 
				$valuea = $this->Eventtable_model->event_adding($id,$user1);
			}
		}

			return redirect('Event_control/event_calling');
		
	}
}


?>
