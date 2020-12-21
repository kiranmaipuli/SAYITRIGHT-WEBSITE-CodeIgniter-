<?php


class Billing_models extends CI_MODEL
{
	public function grid_cart()
	{
		$this->load->library('cart');

		
		foreach($this->cart->contents() as $items)
		{
	
				$products[] = $items['id'];
	
		}

			$this->db->where_in('product_id',$products);
			$value = $this->db->get('product');

			$values = $value->result();
	



		for($i=0; $i<count($this->cart->contents());$i++)
		{
			$id[$i] = $values[$i]->product_id;
			$price[$i] = $values[$i]->unit_price;
			$image[$i] = $values[$i]->image_url;
			$name[$i] = $values[$i]->product_name;

		}

		return array('price' => $price,'image' => $image, 'name' => $name, 'id' => $id);


	}


	public function customer_insertion($data,$product_info)

	{
		$value = $this->db->insert('customer',$data);
		 $insert_id = $this->db->insert_id();

		 for($i=0;$i<count($product_info['id']);$i++)
		{
			$things[] = $product_info['quan'][$i];
			$cost[] = $product_info['price'][$i];
			$image[] = $product_info['image'][$i];
			$name[] = $product_info['name'][$i];
			$customer_id[] = $insert_id;
		}

		if($value)
		{
			for($i=0;$i<count($product_info['id']);$i++)
			{
				$data1 = array(
								'customer_id' => $customer_id[$i],
								'quantity' => $things[$i],
								'price' => $cost[$i],
								'name' => $name[$i],
								'image' => $image[$i]
							);

				$value1 = $this->db->insert('new_orders',$data1);

			}

			return;	
		}

		//echo $things[0];

		//echo $product_info['price'][0];



				/*foreach($rows as $columns)
			print_r($columns);
			/*$a = array(
							'quantity' => ,
						);

			print_r($a);
		*/


	}
}