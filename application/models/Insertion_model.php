<?php 

class Insertion_model extends CI_MODEL
{
	public function newsletter_insertion($data)
	{
			$value = $this->db->insert('newsletter_subscription',$data);
			return $value;
	}


}

?>
