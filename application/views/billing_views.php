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
				<li><a id="active" href="<?php echo site_url('Home/dashboard'); ?>">HOME</a></li>
				<li><a href="<?php echo site_url('About_us_controller/about'); ?>">ABOUT US</a></li>
				<li><a href="http://kiranmaipuli.uta.cloud/">BLOG</a></li>
				<li><a href="<?php echo site_url('Buyfromus_control/loading_buyfromus'); ?>">PURCHASE</a></li>
				<li><a href="<?php echo site_url('Contact_controller/contact'); ?>">CONTACT</a></li>
				<li><a href="<?php echo site_url('Signup_controller/signup'); ?>">SIGN UP</a></li>
				<li><a href="<?php echo site_url('Login_control/login_loading'); ?>">LOGIN</a></li>
				</div>
		</div>

		<div class="cartcontainer">
			<div class="innercart">
				<h1 id="idforbuying">Buy From Us</h1>
				<div class="anotherinnercart">
				<div class="bisecting">
				<div class="bisection1">
					<p>Contact information</p>
					<?php echo form_open('Billing_control/bill_loading'); 
						echo form_error('email');
						echo form_input(['type' => 'email', 'name' => 'email', 'placeholder' => 'enter email', 'class' => 'margingofelements']);

					?>
					<p>Shipping address</p>				
					<div>
						<?php
						echo form_error('firstname');
						echo form_input(['type' => 'text', 'name' => 'firstname', 'placeholder' => 'enter first name', 'class' => 'makinginline3']);

						echo form_error('lastname');
						echo form_input(['type' => 'text', 'name' => 'lastname', 'placeholder' => 'enter last name', 'class' => 'makinginline4']);


							?>
						
					</div>

					<?php

						echo form_error('address');
						echo form_input(['type' => 'text', 'name' => 'address', 'placeholder' => 'enter address', 'class' => 'makingblock margingofelements']);

						echo form_error('address2');
						echo form_input(['type' => 'text', 'name' => 'address2', 'placeholder' => 'enter apartment,suite, etc', 'class' => 'makingblock margingofelements']);

						echo form_error('city');
						echo form_input(['type' => 'text', 'name' => 'city', 'placeholder' => 'enter city', 'class' => 'makingblock margingofelements']);


					?>
					<div>
						<select class="makinginline1" data-placeholder="Choose a Language...">
  							<option value="Afrikanns">Afrikanns</option>
  							<option value="Albanian">Albanian</option>
  							<option value="Arabic">Arabic</option>
  							<option value="Armenian">Armenian</option>
  							<option value="Basque">Basque</option>
  							<option value="Bengali">Bengali</option>
  							<option value="Bulgarian">Bulgarian</option>
  							<option value="Catalan">Catalan</option>
  							<option value="Cambodian">Cambodian</option>
  							<option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
  							<option value="Croation">Croation</option>
  							<option value="Czech">Czech</option>
  							<option value="Danish">Danish</option>
  							<option value="Dutch">Dutch</option>
  							<option value="English">English</option>
  							<option value="Estonian">Estonian</option>
  							<option value="Fiji">Fiji</option>
  							<option value="Finnish">Finnish</option>
  							<option value="French">French</option>
  							<option value="Georgian">Georgian</option>
  							<option value="German">German</option>
  							<option value="Greek">Greek</option>
  							<option value="Gujarati">Gujarati</option>
  							<option value="Hebrew">Hebrew</option>
  							<option value="Hindi">Hindi</option>
  							<option value="Hungarian">Hungarian</option>
  							<option value="Icelandic">Icelandic</option>
  							<option value="Indonesian">Indonesian</option>
  							<option value="Irish">Irish</option>
  							<option value="Italian">Italian</option>
  							<option value="Japanese">Japanese</option>
  							<option value="Javanese">Javanese</option>
  							<option value="Korean">Korean</option>
  							<option value="Latin">Latin</option>
  							<option value="Latvian">Latvian</option>
  							<option value="Lithuanian">Lithuanian</option>
  							<option value="Macedonian">Macedonian</option>
  							<option value="Malay">Malay</option>
  							<option value="Malayalam">Malayalam</option>
  							<option value="Maltese">Maltese</option>
  							<option value="Maori">Maori</option>
  							<option value="Marathi">Marathi</option>
  							<option value="Mongolian">Mongolian</option>
  							<option value="Nepali">Nepali</option>
  							<option value="Norwegian">Norwegian</option>
  							<option value="Persian">Persian</option>
  							<option value="Polish">Polish</option>
  							<option value="Portuguese">Portuguese</option>
  							<option value="Punjabi">Punjabi</option>
  							<option value="Quechua">Quechua</option>
  							<option value="Romanian">Romanian</option>
  							<option value="Russian">Russian</option>
  							<option value="Samoan">Samoan</option>
  							<option value="Serbian">Serbian</option>
  							<option value="Slovak">Slovak</option>
  							<option value="Slovenian">Slovenian</option>
  							<option value="Spanish">Spanish</option>
  							<option value="Swahili">Swahili</option>
  							<option value="Swedish ">Swedish </option>
  							<option value="Tamil">Tamil</option>
  							<option value="Tatar">Tatar</option>
  							<option value="Telugu">Telugu</option>
  							<option value="Thai">Thai</option>
  							<option value="Tibetan">Tibetan</option>
  							<option value="Tonga">Tonga</option>
  							<option value="Turkish">Turkish</option>
  							<option value="Ukranian">Ukranian</option>
  							<option value="Urdu">Urdu</option>
  							<option value="Uzbek">Uzbek</option>
  							<option value="Vietnamese">Vietnamese</option>
  							<option value="Welsh">Welsh</option>
  							<option value="Xhosa">Xhosa</option>
				</select>

				<?php
					echo form_error('postalcode');
					echo form_input(['type' => 'text', 'name' => 'postalcode', 'placeholder' => 'enter Postal code', 'class' => 'makinginline2']);

				?>
				</div>

				<?php

						echo form_submit(['type' => 'submit', 'name' => 'send_message', 'value' => 'SEND MESSAGE', 'class' => 'button', 'id' => 'inputbutton6']);
				?>
				</div>

				<?php echo form_close(); ?>
				<div class="bisection2">
					<table class="tabledesign">
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Units</th>
							<th>Price</th>
						</tr>

						
						<?php

						$i = count($quan);
						$j = 0;

							$sum_total = 0;

						while($j < $i)
						{
							?>
							<tr>
								<td><img src="<?php echo base_url();?>CSS\images\<?php echo $image[$j]; ?>" height="50" width="50"></td>
								<td><?php echo $name[$j]; ?></td>
								<td><?php echo $quan[$j]; ?></td>
								<td><?php echo "$".$total[$j]; ?></td>
							</tr>

							<?php
									$sum_total = $sum_total + $total[$j];
							$j++;
						}

						?>
					</table>

						<hr width="100%" size="0.2" color="#F6F3EE">				
						<table>
						<tr>
							<th id="onlyfortable">Total</th>
							<th> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
							<th id="spacing">USD</th>
							<th id="spacing2"><?php echo "$".$sum_total; ?></th>
						</tr>	
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include APPPATH.'views\footer.php'; ?>
</body>
</html>