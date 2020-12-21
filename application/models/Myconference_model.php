<?php

class Myconference_model extends CI_MODEL
{
	public function myconference_tables($user)
	{
		$this->db->where('event_type','conference');
		$this->db->where('user_id',$user); 
		$value3 = $this->db->get('myevent');
		
		$sending3 = $value3->result();
		return $sending3;
	}


	public function deleting_conference($id,$user1)
	{
		$this->db->where('event_id',$id);
		$this->db->where('user_id',$user1);
		$deletion = $this->db->delete('myevent');
		return $deletion;
	}
}


