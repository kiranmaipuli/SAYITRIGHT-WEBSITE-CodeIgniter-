<html>
<head>
<link rel="stylesheet" href="<?php echo base_url('CSS/SayItRight.css'); ?>">
<title>contactusform</title>
</head>

<body>
					<div class="wrapper">
		<div class="start">
				<img src="<?php echo base_url();?>CSS\images\logo.jpg" height="50" width="50">
				<div class="onlyforli">
				<li><a href="<?php echo site_url('Home/dashboard'); ?>">HOME</a></li>
				<li><a href="<?php echo site_url('About_us_controller/about'); ?>">ABOUT US</a></li>
				<li><a href="http://kiranmaipuli.uta.cloud/">BLOG</a></li>
				<li><a href="<?php echo site_url('Buyfromus_control/loading_buyfromus'); ?>">PURCHASE</a></li>
				<li><a id="active" href="<?php echo site_url('Contact_controller/contact'); ?>">CONTACT</a></li>
				<li><a href="<?php echo site_url('Signup_controller/signup'); ?>">SIGN UP</a></li>
				<li><a href="<?php echo site_url('Login_control/login_loading'); ?>">LOGIN</a></li>			</div>
		</div>


		<div class="aboutusbanner">
					<p id="aboutuspara1">Home &nbsp; &nbsp;&rarr; &nbsp; &nbsp;CONTACT</p>
				</br>
					<p id="aboutuspara2">CONTACT US</p>
			
		</div>

				<?php if($message = $this->session->flashdata('message'))
				echo $message;
				?>

			<?php 
			echo form_open('Contact_controller/contact_validation'); ?>

		<div class="contactusform"> 
			<div class="contactinnerbox">
			
				<div class="forforms">
			<?php
					echo form_error('firstname');
					echo form_input(['type' => 'text', 'name' => 'firstname','value' => set_value('firstname') ,'placeholder' => 'Enter your name', 'id' =>'idforhens']);

					echo form_error('lastname');
					echo form_input(['type' => 'text', 'name' => 'lastname','value' => set_value('lastname') ,'placeholder' => 'Enter last name', 'id' =>'idforhens']);
                    
                    echo form_error('telephone');
                    echo form_input(['type' => 'text', 'name' => 'telephone','value' => set_value('telephone') ,'placeholder' => 'Telephone', 'id' =>'idforhens']);

              ?>
				</div>
				<div class="formmessage">
			<?php
					echo form_error('message');
					echo form_textarea(['name' => 'message','value' => set_value('newsletter') ,'placeholder' => 'Enter message','rows' => '4', 'cols' => '40']);
			
					echo form_submit(['type' => 'submit', 'value' => 'SEND MESSAGE', 'class' => 'button', 'id' => 'inputbutton']);

				?>

  				</div>
  			
			</div>

		</div>

					<?php	echo form_close(); ?>

	
	

<?php include APPPATH.'views\footer.php'; ?>
</body>
</html>