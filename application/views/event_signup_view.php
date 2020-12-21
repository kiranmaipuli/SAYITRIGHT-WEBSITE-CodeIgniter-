<html>
<head>
<link rel="stylesheet" href="<?php echo base_url('CSS/SayItRight.css'); ?>">
<title>sign up</title>
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
				<li><a id="active" href="<?php echo site_url('signup_controller/signup'); ?>">SIGN UP</a></li>
				<li><a href="<?php echo site_url('login_control/login_loading'); ?>">LOGIN</a></li>
				</div>
		</div>

		<div class="aboutusbanner">
					<p id="aboutuspara1">Home &nbsp; &nbsp;&rarr; &nbsp; &nbsp;SIGN UP</p>
				</br>
					<p id="aboutuspara2">SIGN UP</p>
			
		</div>

<?php
 			if($message = $this->session->flashdata('message'))
  			{
  				echo $message;
  			}
?>

		<div class="eventcontainer">
		<div class="shadowevent">
			 <div id="selecting">Select the type of user</div>
				<div id="forflexing">

					<?php 

					echo form_open('individual_signup_controller/i_home'); 
					echo form_submit(['type' => 'submit', 'value' => 'INDIVIDUAL', 'id' => 'individualbutton', 'name' => 'individual', 'class' => 'button']);
					echo form_close();

					 ?>

					 <?php 

					echo form_open('event_signup_controller/e_home'); 
					echo form_submit(['type' => 'submit', 'value' => 'EVENT', 'id' => 'eventbutton', 'name' => 'event', 'class' => 'button']);
					echo form_close();

					 ?>

					 <?php 

					echo form_open('business_signup_controller/b_home'); 
					echo form_submit(['type' => 'submit', 'value' => 'BUSINESS', 'class' => 'button', 'id' => 'businessbutton', 'name' => 'business']);
					echo form_close();

					 ?>

  			</div>

  

  		<?php echo form_open('event_signup_controller/event_validation'); ?>

		<div class="formdivision">
			<hr width="80%" size="0.2" color="#EAE9E8">
				<p>Welcome to the event log</p>

<?php

	echo form_error('lastname');
	echo form_input(['type' => 'text', 'name' => 'lastname', 'value' => set_value('lastname'), 'placeholder' => 'Enter last name', 'id' => 'elementposition']);

	echo form_error('firstname');
	echo form_input(['type' => 'text', 'name' => 'firstname', 'value' => set_value('firstname'), 'placeholder' => 'Enter your name','id' => 'elementposition']);

	echo form_error('email');
	echo form_input(['type' => 'email', 'name' => 'email', 'value' => set_value('email'), 'placeholder' => 'Enter email', 'id' => 'elementposition']);

	echo form_error('password');
	echo form_input(['type' => 'password', 'name' => 'password', 'value' => set_value('password'),'placeholder' => 'Enter password','id' => 'elementposition']);

	echo form_submit(['type' => 'submit', 'name' => 'submit', 'value' => 'SEND', 'class' => 'button', 'id' => 'inputbutton3']);
	?>

		</div>	


	<?php form_close(); ?>

		</div>
		</div>


		<?php include APPPATH.'views\footer.php'; ?>
</body>
</html>