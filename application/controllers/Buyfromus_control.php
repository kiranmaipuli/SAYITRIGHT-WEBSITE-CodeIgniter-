<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Buyfromus_control extends CI_controller
{
	public function loading_buyfromus()
	{
		$this->getting_images();
	}

	public function getting_images()
	{
		$this->load->model('Buyfromus_model');
		$value = $this->Buyfromus_model->getting_products();

		$this->load->view('buyfromus_views',$value);

	}



	public function the_cart()
	{

		echo $this->input->post('product_id'), $this->input->post('quantity');
		$this->load->library('cart');

		$data = array(
               'id'      => $this->input->post('product_id'),
               'qty'     => $this->input->post('quantity'),
               'price'   => 24.99,
               'name'    => 'x',
        //       'image'   => $this->input->post('image')
            );


$this->load->library('cart');
$this->cart->insert($data);


		foreach($this->cart->contents() as $items)
		{
			echo $items['id'];
			echo $items['qty'];
		}

		return redirect('Buyfromus_control/loading_buyfromus');

	}
}


?>