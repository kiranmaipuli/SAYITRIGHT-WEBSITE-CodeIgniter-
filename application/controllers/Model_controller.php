<?php


class Model_controller extends CI_controller
{
	public function modelling()
	{
		$this->load->view('model_view');
	}


	public function sending_image()
	{
		for($i=1;$i<=6;$i++)
		{
			if(isset($_POST['add'.$i]))
			{
			$image = $this->input->post('image'.$i);
			$product_key = $this->input->post('id'.$i);
			$product_name = $this->input->post('name'.$i);
			$product_image = $this->input->post('image'.$i);
			}
		}

		$arr = array(
						'image' => $image,
						'product' => $product_key,
						'product_name' => $product_name,
						'product_image' => $product_image 
 					);

		

		$this->load->view('model_view',$arr);

	}
}



?>