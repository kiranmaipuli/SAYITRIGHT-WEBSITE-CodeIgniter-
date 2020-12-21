<?php

class Myevent_model extends CI_MODEL
{
	public function myevent_tables($user)
	{
		$this->db->where('event_type','event');
		$this->db->where('user_id',$user); 
		$value2 = $this->db->get('myevent');
		
		$sending2 = $value2->result();
		return $sending2;
	}

	public function deleting($id,$user1)
	{
		$this->db->where('event_id',$id);
		$this->db->where('user_id',$user1);
		$deletion = $this->db->delete('myevent');
		if($deletion)
		{
			echo "successful deletion";
		}

		else
		{
			echo "unsuccesful deletion";
		}

	}
}

