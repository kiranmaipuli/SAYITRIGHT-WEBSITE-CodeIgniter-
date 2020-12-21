<?php

class Event_admin_model extends CI_MODEL
{
	public function viewing_tables_admin($user)
	{
		$this->db->where('user_id',$user); 
		$this->db->where('event_type','event'); 
		$value = $this->db->get('event');
		
		$sending = $value->result();
		return $sending;
	}

	public function deletion($id)
	{
		$this->db->where('event_id',$id);
		$this->db->delete('myevent');

		$this->db->where('event_id',$id);
		$value1 = $this->db->delete('event');

		return $value1;
	}

	public function updation($update_info)
	{

		
		$this->db->set('event_name',$update_info['event_name']);
		$this->db->set('description',$update_info['description']);
		$this->db->set('date',$update_info['date']);
		$this->db->set('location',$update_info['location']);
		$this->db->where('event_id',$update_info['event_id']);
		$this->db->update('myevent');

		$this->db->set('event_name',$update_info['event_name']);
		$this->db->set('description',$update_info['description']);
		$this->db->set('date',$update_info['date']);
		$this->db->set('location',$update_info['location']);
		$this->db->where('event_id',$update_info['event_id']);
		$value2 = $this->db->update('event');
		
		return $value2;
	}	

	public function insertion($new_event)
	{
		$value3 = $this->db->insert('event',$new_event);
		
		return $value3;
	}


}