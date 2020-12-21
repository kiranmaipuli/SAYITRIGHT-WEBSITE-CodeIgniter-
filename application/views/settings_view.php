<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="<?php echo base_url('CSS/SayItRight.css'); ?>">
	
<title>SETTINGS</title>
</head>
<body>
	<div class="wrapper">
		<div class="start">
				<img src="<?php echo base_url();?>CSS\images\logo.jpg" height="50" width="50">
				<div class="onlyforli">
				<li><a href="<?php echo site_url('ind_home_control/indi_home_loading'); ?>">HOME</a></li>
				<li><a href="<?php echo site_url('conference_control/conference_calling'); ?>">CONFERENCES</a></li>
				<li><a href="<?php echo site_url('event_control/event_calling'); ?>">EVENTS</a></li>
				<li><a href="<?php echo site_url('myconference_control/myconference_calling'); ?>">MY CONFERENCES</a></li>
				<li><a href="<?php echo site_url('myevent_control/myevent_calling'); ?>">MY EVENTS</a></li>
				<li><a id="active" href="<?php echo site_url('settings_control/settings_loading'); ?>">SETTINGS</a></li>
				</div>
		</div>

				<?php if($message = $this->session->flashdata('message'))
				echo $message;
				?>


		<div class="settingscontainer">
			<div class="innersettings">
			<p>Welcome to your profile</p>				
			<hr width="80%" size="0.2" color="#EAE9E8">
			<div class="flexusage">
				<div>
					<img src="<?php echo base_url();?>uploads\<?php echo $image;?>" height="140" weight="140">


					<?php
					

						echo form_open_multipart('settings_control/settings_loading');

						echo form_submit(['type' => 'submit', 'name' => 'change_image', 'value' => 'CHANGE IMAGE', 'class' => 'forimage']);

						

						if($this->session->b == 10)
						{
						
							echo form_upload(['type' => 'file', 'value' => 'save', 'name' => 'userfile']);
						}

						
					?>
				</div>
				
			


				<div class="internaldivision">
				<div>
			<?php 
			echo form_open('settings_control/settings_loading'); 
			echo form_input(['type' => 'text', 'name' => 'firstname', 'value' => $first_name, 'id' => 'idfornames', 'readonly' => 'readonly' ]);
			echo form_input(['type' => 'text', 'name' => 'lastname', 'value' => $last_name, 'id' => 'idfornames', 'readonly' => 'readonly' ]);
					?>


			</div>

			<?php
			echo form_input(['type' => 'text', 'name' => 'placework', 'value' => $workplace, 'id' => 'idforinline', 'readonly' => 'readonly' ]);
			echo form_input(['type' => 'text', 'name' => 'school', 'value' => $school, 'id' => 'idforinline', 'readonly' => 'readonly' ]);
			echo form_input(['type' => 'email', 'name' => 'email', 'value' => $email, 'id' => 'idforinline', 'readonly' => 'readonly' ]);
			echo form_input(['type' => 'password', 'name' => 'password', 'value' => $password, 'id' => 'idforinline' ]);


			?>

				<p>Change Password</p>

			<?php

				echo form_submit(['type' => 'submit', 'name' => 'save_changes', 'value' => 'SAVE CHANGES', 'class' => 'button', 'id' => 'inputbutton4' ]);

			echo form_close();

			?>
				</div>
			</div>
			</div>
			

		</div>

				<?php include APPPATH.'views\footer.php'; ?>
	</div>
</body>
</html>
