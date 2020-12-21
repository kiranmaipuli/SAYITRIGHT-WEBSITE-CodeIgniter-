<?php


class Individual_model extends CI_MODEL
{
	public function individual_insertion($data)
	{
		$value = $this->db->insert('signup',$data);
		return $value;
	}
}

