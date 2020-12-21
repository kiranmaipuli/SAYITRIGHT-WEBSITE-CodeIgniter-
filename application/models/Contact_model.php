<?php 

class Contact_model extends CI_MODEL
{
	public function contact_table($data)
	{
			$value = $this->db->insert('contact',$data);
			return $value;
	}


}

?>
