<html>
<head>
<link rel="stylesheet" href="<?php echo base_url('CSS/SayItRight.css'); ?>">
<title>login</title>
</head>

<body>
		<div class="wrapper">
		<div class="start">
				<img src="<?php echo base_url();?>CSS\images\logo.jpg" height="50" width="50">
				<div class="onlyforli">
				<li><a href="<?php echo site_url('home_page/dashboard'); ?>">HOME</a></li>
				<li><a href="<?php echo site_url('aboutus_controller/about'); ?>">ABOUT US</a></li>
				<li><a href="http://kiranmaipuli.uta.cloud/">BLOG</a></li>
				<li><a href="<?php echo site_url('buyfromus_control/loading_buyfromus'); ?>">PURCHASE</a></li>
				<li><a href="<?php echo site_url('contact_controller/contact'); ?>">CONTACT</a></li>
				<li><a href="<?php echo site_url('signup_controller/signup'); ?>">SIGN UP</a></li>
				<li><a id="active" href="<?php echo site_url('login_control/login_loading'); ?>">LOGIN</a></li>
				</div>
		</div>

		<div class="aboutusbanner">
					<p id="aboutuspara1">Home &nbsp; &nbsp;&rarr; &nbsp; &nbsp;LOGIN</p>
				</br>
					<p id="aboutuspara2">LOGIN</p>
			
		</div>


		<?php 

		echo form_open('login_control/login_validation');
		?>

		<div class="logincontainer"> 
			<div class="logininnercontainer">

		<?php

		echo form_error('email');
		echo form_input(['type' => 'email', 'name' => 'email', 'value' => set_value('email'), 'placeholder' => 'Enter Email', 'id' => 'email']);

		echo form_error('password');
		echo form_input(['type' => 'password', 'name' => 'password', 'value' => set_value('password'), 'placeholder' => 'Enter password', 'id' => 'password']);

		echo form_submit(['type' => 'submit', 'name' => 'send', 'value' => 'SEND', 'id' => 'inputbutton2', 'class' => 'button']);

		?>
			</div>
		</div>

	<?php echo form_close(); ?>

		<?php include APPPATH.'views\footer.php'; ?>
</body>
</html>