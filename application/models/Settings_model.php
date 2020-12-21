<?php


class Settings_model extends CI_MODEL
{
	public function displaying_profile($user)
	{
		$this->db->where('user_id',$user);
		$settings = $this->db->get('signup');
		$profile = $settings->result();
		return $profile;

	}

	public function setting_image($image_name,$user,$password)
	{
		
		$this->db->set('image',$image_name);
		$this->db->set('password',$password);
		$this->db->where('user_id',$user);
		$store = $this->db->update('signup');

		$this->session->unset_userdata('b');

		return $store;
		
	}

	public function setting_password($user,$password)
	{
		$this->db->set('password',$password);
		$this->db->where('user_id',$user);
		$store1 = $this->db->update('signup');

		return $store1;
			
	}

}