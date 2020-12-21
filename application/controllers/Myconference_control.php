<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Myconference_control extends CI_Controller
{
	public function myconference_calling()
	{

		$this->myconference_table();
		
	}


	/*--------------------------------------DYNAMIC DATA FETCHING----------------------------*/


	public function myconference_table()
	{
		$this->load->model('Myconference_model');
		$user = $this->session->userdata('user');		

//		echo $user;
		$value = $this->Myconference_model->myconference_tables($user);
//		print_r($value);

		
		$this->load->view('myconference_view',array('events1' => $value));
		
	}

	public function myconference_delete()
	{
		$this->load->model('Myconference_model');
		$count = $this->input->post('count');
		$user1 = $this->session->userdata('user');

		for($a=1;$a<=$count;$a++)
		{
	 		if(isset($_POST['delete'.$a]))
			{
				$id = $this->input->post('id'.$a); 
				$valuea = $this->Myconference_model->deleting_conference($id,$user1);
			}
		}

			return redirect('Myconference_control/myconference_calling');
		
	}
}


?>
