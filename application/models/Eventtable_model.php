<?php

class Eventtable_model extends CI_MODEL
{
	public function viewing_tables($user)
	{
		$this->db->where('event_type','event'); 
		$value = $this->db->get('event');
		
		$sending = $value->result();
		return $sending;
	}

	public function event_adding($id,$user1)
	{
		$this->db->where('event_id',$id);
		$value = $this->db->get('event');
		$trying = $value->result();		

		$this->db->where('event_id',$id);
		$this->db->where('user_id',$user1);
		$duplicates = $this->db->get('myevent');
		$duplicates1 = $duplicates->result();



		if(count($duplicates1) == 0)
		{
			foreach($trying as $rows)
			{
				$arraying = array(
								'event_id' => $rows->event_id,
								'event_name' => $rows->event_name,
								'event_type' => $rows->event_type,
								'description' => $rows->description,
								'date' => $rows->date,
								'location' => $rows->location,
								'user_id' => $user1
							 );
			};

				$valuea = $this->db->insert('myevent',$arraying);
				return $valuea;

		}

		else
		{
			$message1 = 3;
			return $message1;

		}

	}
}

