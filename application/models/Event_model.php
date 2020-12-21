<?php


class Event_model extends CI_MODEL
{
	public function event_insertion($data)
	{
			$value = $this->db->insert('signup',$data);
			return $value;
	}

}