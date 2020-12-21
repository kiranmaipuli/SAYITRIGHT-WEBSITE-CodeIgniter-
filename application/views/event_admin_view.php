<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="<?php echo base_url('CSS/SayItRight.css'); ?>">
	
<title>Event admin</title>
</head>
<body>
	<div class="wrapper">
		<div class="start">
				<img src="<?php echo base_url();?>CSS\images\logo.jpg" height="50" width="50">
				<div class="onlyforli">
				<li><a href="<?php echo site_url('eve_home_control/event_loading'); ?>">HOME</a></li>
				<li><a href="<?php echo site_url('conference_admin_control/conference_admin_calling'); ?>">CONFERENCES</a></li>
				<li><a id="active" href="<?php echo site_url('event_admin_control/event_admin_calling'); ?>">EVENTS</a></li>
				<li><a href="<?php echo site_url('settings_control/settings_loading'); ?>">SETTINGS</a></li>
				</div>
		</div>

<?php echo $this->session->userdata('email_id');
	if($generic_message = $this->session->flashdata('generic_message'))
	{
		echo $generic_message;
				
	}


 ?>



<div class="confercontainer">
	<div class="innerconfercontainer">
		<h1>List of Events</h1>
		<table>
				<tr>
					<th>conferences</th>
					<th>Description</th>
					<th>Date</th>
					<th>sede</th>
					<th>delete</th>
					<th>update</th>
				</tr>



				<?php 

				echo form_open('event_admin_control/updating_info');

				$i = 1;
				foreach($events as $it)
				{
					echo '<tr><td>'.form_input(['type' => 'text', 'name' => 'event_name', 'value' => $it->event_name, 'style' => "border: none; color: grey; font-size: 10px", 'size' => '15']).'</td>
						  	  <td>'.form_input(['type' => 'text', 'name' => 'description', 'value' => $it->description, 'style' => "border: none; color: grey; font-size: 10px", 'size' => '59']).'</td>
						  	  <td>'.form_input(['type' => 'text', 'name' => 'date', 'value' => $it->date, 'style' => "border: none; color: grey; font-size: 10px", 'size' => '6']).'</td>
						  	  <td>'.form_input(['type' => 'text', 'name' => 'location', 'value' => $it->location, 'style' => "border: none; color: grey; font-size: 10px", 'size' => '4']).'</td>
						  	  <td>'.form_submit(['type' => 'submit', 'name' => 'delete'.$i, 'value' => 'DELETE']).'</td>
						  	  <td>'.form_submit(['type' => 'submit', 'name' => 'update'.$i, 'value' => 'UPDATE']).'</td>
						  	  <td>'.form_input(['type' => 'hidden', 'name' => 'id'.$i, 'value' => $it->event_id, 'style' => 'border: 0']).'</td>

						  	</tr>';

						  	$i++;
				}


				echo form_input(['type' => 'hidden', 'name' => 'count', 'value' => $i]);				

				echo form_close();
				?>

			<?php

				echo form_open('event_admin_control/adding_info');
				echo form_input(['type' => 'text', 'name' => 'event_name1', 'placeholder' => 'event name']);
				echo form_input(['type' => 'text', 'name' => 'description1', 'placeholder' => 'description']);
				echo form_input(['type' => 'date', 'name' => 'date1' ]);
				echo form_input(['type' => 'text', 'name' => 'location1', 'placeholder' => 'location']);
				echo form_submit(['type' => 'submit', 'name' => 'add', 'value' => 'add']);

				echo form_close();
		
			?>
		</table>



	</div>
</div>


				<?php include APPPATH.'views\footer.php'; ?>
	</div>
</body>
</html>

