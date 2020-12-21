<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Ind_home_control extends CI_Controller
{
	public function indi_home_loading()
	{

		$this->table_data();
		
	}


	/*--------------------------------------DYNAMIC DATA FETCHING----------------------------*/


	public function table_data()
	{
		$this->load->model('Ind_model');
		$user = $this->session->userdata('user');		


		$value = $this->Ind_model->dynamic_load($user);
		

		$data['id1'] = $value[0]['id1'];
		$data['id2'] = $value[0]['id2'];
		$data['id3'] = $value[0]['id3'];

		$this->load->view('ind_home_view',$data);
		
	}
}


?>
	