<?php

class Ind_model extends CI_MODEL
{
	public function dynamic_load($user)
	{
		
		$this->db->where('user_id',$user); //total count of events in myevent
		$value = $this->db->get('myevent');
		$id1 = $value->num_rows();
		
		$this->db->where('user_id',$user); //event count of events in myevent
		$this->db->where('event_type','event');
		$value1 = $this->db->get('myevent');
		$id2 = $value1->num_rows();


		$this->db->where('user_id',$user); //conference count of events in myevent
		$this->db->where('event_type','conference');
		$value2 = $this->db->get('myevent');
		$id3 = $value2->num_rows();



		$result1[] = array(
								'id1' => $id1,
								'id2' => $id2,
								'id3' => $id3,
								
							);

		return $result1;

	}
}