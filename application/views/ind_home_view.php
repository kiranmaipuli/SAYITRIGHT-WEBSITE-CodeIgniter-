<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="<?php echo base_url('CSS/SayItRight.css'); ?>">
	
<title>Individual users</title>
</head>
<body>
	<div class="wrapper">
		<div class="start">
				<img src="<?php echo base_url();?>CSS\images\logo.jpg" height="50" width="50">
				<div class="onlyforli">
				<li><a id="active" href="<?php echo site_url('ind_home_control/indi_home_loading'); ?>">HOME</a></li>
				<li><a href="<?php echo site_url('conference_control/conference_calling'); ?>">CONFERENCES</a></li>
				<li><a href="<?php echo site_url('event_control/event_calling'); ?>">EVENTS</a></li>
				<li><a href="<?php echo site_url('myconference_control/myconference_calling'); ?>">MY CONFERENCES</a></li>
				<li><a href="<?php echo site_url('myevent_control/myevent_calling'); ?>">MY EVENTS</a></li>
				<li><a href="<?php echo site_url('settings_control/settings_loading'); ?>">SETTINGS</a></li>
				</div>
		</div>



<?php

echo form_open('logout_control/logout_loading');

echo form_submit(['type' => 'submit', 'name' => 'logout', 'value' => 'logout']);

echo form_close();

?>

<?php

	echo $this->session->userdata('email_id');

?>


<div class="usercontainer">
	<div class="userinnercontainer">
		<div class="rows">
			<div class="row1">
				<div class="firstrow1 borderGrey">
					<div class="firstrow1a">
							<i class="fas fa-globe-americas fa-3x"></i>
							<div class="innericon">
								<p id="number"><?php echo $id1; ?></p>
								<p id="number1">activities performed</p>
							</div>

					</div>
					
					<div class="downtext">
						Total Made
					</div>
				</div>
				<div class="firstrow2 borderGrey">
					<div class="firstrow1b">
							<i class="fas fa-users fa-3x"></i>
							<div class="innericon">
								<p id="number"><?php echo $id3; ?></p>
								<p id="number1">Acitivities performed</p>
							</div>

					</div>
					
					<div class="downtext">
						Conferences
					</div>
				</div>

				<div class="firstrow3 borderGrey">
					
					<div class="firstrow1c">
							<i class="fas fa-star fa-3x"></i>
							<div class="innericon">
								<p id="number"><?php echo $id2; ?></p>
								<p id="number1">activities performed</p>
							</div>

					</div>
					<div class="downtext">
						Events
					</div>
				</div>
				<div class="firstrow4 borderGrey">
					
					<div class="firstrow1d">
							<i class="fas fa-trophy fa-3x"></i>
							<div class="innericon">
								<p id="number">14</p>
								<p id="number1">activities performed</p>
							</div>

					</div>
					
					<div class="downtext">
						activities
					</div>
				</div>
			</div>
			<div class="row2">
				<div class="secondrow1">
					<p id="name">Header</p>
					<hr width="100%" size="0.1" color="#aaaaaa">
					<p id="forparaspace">Primary card title</p>
					<p id="belowpara">some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
				<div class="secondrow2">
					<p id="name">Header</p>
					<hr width="100%" size="0.05" color="#aaaaaa">
					<p id="forparaspace">Secondary card title</p>
					<p id="belowpara">some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
				<div class="secondrow3">
					<p id="name">Header</p>
					<hr width="100%" size="0.1" color="#aaaaaa">
					<p id="forparaspace">success card title</p>
					<p id="belowpara">some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
				<div class="secondrow4">
					<p id="name">Header</p>
					<hr width="100%" size="0.1" color="#aaaaaa">
					<p id="forparaspace">success card title</p>
					<p id="belowpara">some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
			<div class="row3">
				<div class="thirdrow1">
					<p id="name">Header</p>
					<hr width="100%" size="0.1" color="#aaaaaa">
					<p id="forparaspace">Wrning card title</p>
					<p id="belowpara">some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
				<div class="thirdrow2">
					<p id="name">Header</p>
					<hr width="100%" size="0.1" color="#aaaaaa">
					<p id="forparaspace">Info card title</p>
					<p id="belowpara">some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
				<div class="thirdrow3 borderGrey">
					<p id="name" class="black">Header</p>
					<hr width="100%" size="0.1" color="#aaaaaa">
					<p class="black" id="forparaspace">Light card title</p>
					<p class="black" id="belowpara">some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
				<div class="thirdrow4">
					<p id="name">Header</p>
					<hr width="100%" size="0.1" color="black">
					<p id="forparaspace">Dark card title</p>
					<p id="belowpara">some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>
	</div>
</div>


				<?php include APPPATH.'views\footer.php'; ?>
	</div>
</body>
</html>


	