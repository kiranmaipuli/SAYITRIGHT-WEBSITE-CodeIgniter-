<html>
<head>

<title>quantity</title>
</head>

<body>

<p>Add to cart<p>
<img src="<?php echo base_url();?>CSS\images\<?php echo $image; ?>" height="180" width="170">

<p>product quantity</p>
<?php

echo form_open('buyfromus_control/the_cart');	
echo form_input(['type' => 'hidden', 'name' => 'product_id', 'value' => $product]);
echo form_input(['type' => 'hidden', 'name' => 'image', 'value' => $product_image]);
echo form_input(['type' => 'hidden', 'name' => 'product_name', 'value' => $product_name]);
echo form_input(['type' => 'text', 'name' => 'quantity']);
echo form_submit(['type' => 'submit', 'name' => 'adding' , 'value' => 'ADD TO CARD']);
echo form_close();
?>
</body>

</html>