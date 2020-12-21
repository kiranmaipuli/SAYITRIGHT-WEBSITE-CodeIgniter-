<?php


class Business_model extends CI_MODEL
{
	public function business_insertion($data)
	{
		$value = $this->db->insert('signup',$data);
		return $value;
	}
}


