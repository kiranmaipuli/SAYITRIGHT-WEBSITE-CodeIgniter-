<html>
<head>
<link rel="stylesheet" href="<?php echo base_url('CSS/SayItRight.css'); ?>">


<title>Buy From Us</title>
</head>

<body>
					<div class="wrapper">
		<div class="start">
				<img src="<?php echo base_url();?>CSS\images\logo.jpg" height="50" width="50">
				<div class="onlyforli">
				<li><a href="<?php echo site_url('Home_page/dashboard'); ?>">HOME</a></li>
				<li><a href="<?php echo site_url('About_us_controller/about'); ?>">ABOUT US</a></li>
				<li><a href="http://kiranmaipuli.uta.cloud/">BLOG</a></li>
				<li><a id="active" href="<?php echo site_url('Buyfromus_control/loading_buyfromus'); ?>">PURCHASE</a></li>
				<li><a href="<?php echo site_url('Contact_controller/contact'); ?>">CONTACT</a></li>
				<li><a href="<?php echo site_url('Signup_controller/signup'); ?>">SIGN UP</a></li>
				<li><a href="<?php echo site_url('Login_control/login_loading'); ?>">LOGIN</a></li>
				</div>
		</div>

		<div class="aboutusbanner">
					<p id="aboutuspara1">Home &nbsp; &nbsp;&rarr; &nbsp; &nbsp;Buy From Us</p>
				</br>
					<p id="aboutuspara2">BUY FROM US</p>
			
		</div>





				<div class="shopcontainer">
			<div class="shopinnercontainer">
				<h2 id="buyinghead">Buy From Us</h2>
			<div class="rowdivision">
				<div class="columnflex1">
					<div class="borderclass">

						<?php echo form_open('Model_controller/sending_image'); ?>
						<img id="imagesizing" src="<?php echo base_url();?>CSS\images\<?php echo $image[0]; ?>" height="180" width="170">
						<p><?php echo "$".$price[0]; ?></p>
						<p>some quick example text to build on the card title and make up the bulk of the card's content<p>
						<?php echo form_submit(['type' => 'submit', 'name' => 'add1', 'value' => 'ADD TO CART', 'class' => 'button']); 
						echo form_input(['type' => 'hidden', 'name' => 'id1', 'value' => 1]);
						echo form_input(['type' => 'hidden', 'name' => 'image1', 'value' => $image[0]]);
						echo form_input(['type' => 'hidden', 'name' => 'product_name1', 'value' => $name[0]]);
						 echo form_close();
					?>

				</div>
				
					<div class="borderclass">
						<?php echo form_open('Model_controller/sending_image'); ?>
						<img id="imagesizing" src="<?php echo base_url();?>CSS\images\<?php echo $image[1]; ?>" height="180" width="170">
						<p><?php echo "$".$price[1]; ?></p>
						<p>some quick example text to build on the card title and make up the bulk of the card's content<p>
						<?php echo form_submit(['type' => 'submit', 'name' => 'add2', 'value' => 'ADD TO CART', 'class' => 'button']); 
							echo form_input(['type' => 'hidden', 'name' => 'id2', 'value' => 2]);
							echo form_input(['type' => 'hidden', 'name' => 'image2', 'value' => $image[1]]);
							echo form_input(['type' => 'hidden', 'name' => 'product_name2', 'value' => $name[1]]);
							echo form_close();
						?>

					</div>

					<div class="borderclass">
						<?php echo form_open('Model_controller/sending_image'); ?>
						<img id="imagesizing" src="<?php echo base_url();?>CSS\images\<?php echo $image[2]; ?>" height="180" width="170">
						<p><?php echo "$".$price[2]; ?></p>
						<p>some quick example text to build on the card title and make up the bulk of the card's content<p>
						<?php echo form_submit(['type' => 'submit', 'name' => 'add3', 'value' => 'ADD TO CART', 'class' => 'button']); 
						echo form_input(['type' => 'hidden', 'name' => 'id3', 'value' => 3]);
						echo form_input(['type' => 'hidden', 'name' => 'image3', 'value' => $image[2]]);
						echo form_input(['type' => 'hidden', 'name' => 'product_name3', 'value' => $name[2]]);
						echo form_close();
						?>
					</div>
				</div>

				<div class="columnflex2">
					<div class="borderclass">
						<?php echo form_open('Model_controller/sending_image'); ?>
						<img id="imagesizing" src="<?php echo base_url();?>CSS\images\<?php echo $image[3]; ?>" height="180" width="170">
						<p><?php echo "$".$price[3]; ?></p>
						<p>some quick example text to build on the card title and make up the bulk of the card's content<p>
						<?php echo form_submit(['type' => 'submit', 'name' => 'add4', 'value' => 'ADD TO CART', 'class' => 'button']); 
							echo form_input(['type' => 'hidden', 'name' => 'id4', 'value' => 4]);
							echo form_input(['type' => 'hidden', 'name' => 'image4', 'value' => $image[3]]);
							echo form_input(['type' => 'hidden', 'name' => 'product_name4', 'value' => $name[3]]);
							echo form_close();
						?>
					</div>

					<div class="borderclass">
						<?php echo form_open('Model_controller/sending_image'); ?>
						<img id="imagesizing" src="<?php echo base_url();?>CSS\images\<?php echo $image[4]; ?>" height="180" width="170">
						<p><?php echo "$".$price[4]; ?></p>
						<p>some quick example text to build on the card title and make up the bulk of the card's content<p>
						<?php echo form_submit(['type' => 'submit', 'name' => 'add5', 'value' => 'ADD TO CART', 'class' => 'button']); 
							echo form_input(['type' => 'hidden', 'name' => 'id5', 'value' => 5]);
							echo form_input(['type' => 'hidden', 'name' => 'image5', 'value' => $image[4]]);
							echo form_input(['type' => 'hidden', 'name' => 'product_name5', 'value' => $name[4]]);
							echo form_close();
						?>
					</div>

					<div class="borderclass">
						<?php echo form_open('Model_controller/sending_image'); ?>
						<img id="imagesizing" src="<?php echo base_url();?>CSS\images\<?php echo $image[5]; ?>" height="180" width="170">
						<p><?php echo "$".$price[5]; ?></p>
						<p>some quick example text to build on the card title and make up the bulk of the card's content<p>
						<?php echo form_submit(['type' => 'submit', 'name' => 'add6', 'value' => 'ADD TO CART', 'class' => 'button']); 
							echo form_input(['type' => 'hidden', 'name' => 'id6', 'value' => 6]);
							echo form_input(['type' => 'hidden', 'name' => 'image6', 'value' => $image[5]]);
							echo form_input(['type' => 'hidden', 'name' => 'product_name6', 'value' => $name[5]]);
							echo form_close();
						?>
					</div>
				</div>
			</div>
			</div>
		</div>
<?php echo form_close(); ?>

<?php echo form_open('Billing_control/bill_loading'); ?>
		<div class="shoppingcart">	
			<div class="aligning" >
				<p id="viewingpara">View shopping cart</p>
				<p id="viewingproducts">You can see the products that you added to your cart</p>
			</div>
			<div class="inputbutton5">
				<?php 
				echo form_submit(['type' => 'submit', 'name' => 'shop', 'value' => 'SUBMIT']);
				?>
  			</div>
		</div>

		<?php echo form_close(); ?>
	


		<?php include APPPATH.'views\footer.php'; ?>
</body>
</html>
