<?php 

class Login_model extends CI_MODEL
{
	public function login_checking($email,$password)
	{
		$this->db->select('role_id,email,password,user_id');
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$value = $this->db->get('signup');
		$id = $value->num_rows();
		/*$result = $value->result();*/
		foreach($value->result() as $rows)
		{
		

			$result[] = array(
								'count' => $id,
								'email' => $rows->email,
								'role_id' => $rows->role_id,
								'password' => $rows->password,
								'user_id' => $rows->user_id
							);

		};

		return $result;
	}
}

?>