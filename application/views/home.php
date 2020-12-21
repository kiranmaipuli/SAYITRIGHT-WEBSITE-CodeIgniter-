<html>
<head>
<link rel="stylesheet" href="<?php echo base_url('CSS/SayItRight.css'); ?>">
<title>home_page</title>
</head>

<body>
		<div class="wrapper">
		<div class="start">
				<img src="<?php echo base_url();?>CSS\images\logo.jpg" height="50" width="50">
				<div class="onlyforli">
				<li><a id="active" href="<?php echo site_url('home_page/dashboard'); ?>">HOME</a></li>
				<li><a href="<?php echo site_url('aboutus_controller/about'); ?>">ABOUT US</a></li>
				<li><a href="http://kiranmaipuli.uta.cloud/">BLOG</a></li>
				<li><a href="<?php echo site_url('buyfromus_control/loading_buyfromus'); ?>">PURCHASE</a></li>
				<li><a href="<?php echo site_url('contact_controller/contact'); ?>">CONTACT</a></li>
				<li><a href="<?php echo site_url('signup_controller/signup'); ?>">SIGN UP</a></li>
				<li><a href="<?php echo site_url('login_control/login_loading'); ?>">LOGIN</a></li>
				</div>
		</div>

			<div class="video">
				<div id="videodiv">
					<h1>For good </br>communication<br><spam>Say it Right</spam> is</br>a tool that</br>you should use</h1>
					</br>
					<p>You can see our video tutorial of use with just pressing this</br> button.</p>
					</br>
					<img src="<?php echo base_url();?>CSS\images\video.jpg" height="50" width="50">
					<spam id="forsizing">WATCH THE VIDEO</spam> 
				</div>

		</div>

		<?php if($message = $this->session->flashdata('message'))
				echo $message;
		?>

		<?php echo validation_errors(); ?>
		<div class="subscription">	
			<div class="forposition forposition1" >
				<p>Subscribe Our Newsletter</p>
				<spam>we won't send any kind of spam</spam>

			</div>


			<?php 
	 		

			echo form_open('Validation/validating',['class' => 'forform']);
			echo form_input(['type' => 'text', 'name' => 'newsletter','value' => set_value('newsletter') ,'placeholder' => 'Enter email address', 'class' =>'idforinputform']);
			echo form_submit(['type' => 'submit', 'value' => 'SUBSCRIBE', 'class' => 'button idforsubmit1']);
			echo form_close();
			?>

		</div>

		<?php include APPPATH.'views\footer.php'; ?>
</body>
</html>