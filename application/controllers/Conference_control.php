<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Conference_control extends CI_Controller
{
	public function conference_calling()
	{

		$this->conference_table();
		
	}


	/*--------------------------------------DYNAMIC DATA FETCHING----------------------------*/


	public function conference_table()
	{
		$this->load->model('Conference_model');
		$user = $this->session->userdata('user');		

//		echo $user;
		$value1 = $this->Conference_model->viewing_tables1($user);
//		print_r($value);

		
		$this->load->view('conference_view',array('conferences' => $value1));
		
	}


	public function adding_to_myconference()
	{

		$this->load->model('Conference_model');
		$count = $this->input->post('count');
	

		$user1 = $this->session->userdata('user');
	

		for($a=1;$a<=$count;$a++)
		{
	 		if(isset($_POST['add'.$a]))
			{
				$id = $this->input->post('id'.$a); 

				$valuea = $this->Conference_model->conference_adding($id,$user1);

			}
		}

			return redirect('Conference_control/conference_calling');
		
	}
}


?>
