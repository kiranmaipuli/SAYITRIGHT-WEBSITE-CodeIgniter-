<?php

class Conference_model extends CI_MODEL
{
	public function viewing_tables1($user)
	{
		$this->db->where('event_type','conference'); 
		$value1 = $this->db->get('event');
		
		$sending1 = $value1->result();
		return $sending1;
	}

	public function conference_adding($id,$user1)
	{

		echo "succesful entry to model";
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

		
	}
}

