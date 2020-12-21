<?php

class Buyfromus_model extends CI_MODEL
{

	public function getting_products()
	{
		$fetching = $this->db->get('product');
		$send = $fetching->result();

		$price[] = '';
		$image[] = '';

		for($i=0; $i<count($send);$i++)
		{
			$price[$i] = $send[$i]->unit_price;
			$image[$i] = $send[$i]->image_url;
			$name[$i] = $send[$i]->product_name;

		}

		return array('price' => $price,'image' => $image, 'name' => $name);
	}
}