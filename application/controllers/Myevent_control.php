<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Myevent_control extends CI_Controller
{
	public function myevent_calling()
	{

		$this->myevent_table();
		
	}


	/*--------------------------------------DYNAMIC DATA FETCHING----------------------------*/


	public function myevent_table()
	{
		$this->load->model('Myevent_model');
		$user = $this->session->userdata('user');		

//		echo $user;
		$value = $this->Myevent_model->myevent_tables($user);
//		print_r($value);

		
		$this->load->view('myevent_view',array('events1' => $value));
		
	}


	public function myevent_delete()
	{
		$this->load->model('Myevent_model');
		$count = $this->input->post('count');
		$user1 = $this->session->userdata('user');

		for($a=1;$a<=$count;$a++)
		{
	 		if(isset($_POST['delete'.$a]))
			{
				$id = $this->input->post('id'.$a); 
				$valuea = $this->Myevent_model->deleting($id,$user1);
			}
		}

			return redirect('Myevent_control/myevent_calling');
		
	}
}


?>
