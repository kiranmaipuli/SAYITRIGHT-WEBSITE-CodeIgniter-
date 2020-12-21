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
				<li><a href="<?php echo site_url('Home/dashboard'); ?>">HOME</a></li>
				<li><a id="active" href="<?php echo site_url('About_us_controller/about'); ?>">ABOUT US</a></li>
				<li><a href="http://kiranmaipuli.uta.cloud/">BLOG</a></li>
				<li><a href="<?php echo site_url('Buyfromus_control/loading_buyfromus'); ?>">PURCHASE</a></li>
				<li><a href="<?php echo site_url('Contact_controller/contact'); ?>">CONTACT</a></li>
				<li><a href="<?php echo site_url('Signup_controller/signup'); ?>">SIGN UP</a></li>
				<li><a href="<?php echo site_url('Login_control/login_loading'); ?>">LOGIN</a></li>
				</div>
		</div>


					<div class="aboutusbanner">
					<p id="aboutuspara1">Home &nbsp; &nbsp;&rarr; &nbsp; &nbsp;About</p>
				</br>
					<p id="aboutuspara2">ABOUT US</p>
		</div>

		<div class="aboutusdiv1">
			<div class="aboutusdiv2">
				
				<div id="aboutusparaposition">
					<p id="aboutuspara1" class="para1">ABOUT US</p>
					</br>
					<hr id="forline" width="4%" size="0.2" color="#1E90FF">
					<p id="aboutuspara2" class="para2">Say it Right</p>
					</br>
					<p id="aboutuspara3">Is an application for everyone. It is the first step to a good relationship.</br> It is about identity, about the importance of my name, my culture. If</br>you want to, I will help you to Say it Right, so that you can address me </br>correctly</p>
				</div>
			</div>
					<img id="imageposition" src="<?php echo base_url();?>CSS\images\about.png" height="230" width="320"> 
				
		</div>
	

<?php include APPPATH.'views\footer.php'; ?>
</body>
</html>