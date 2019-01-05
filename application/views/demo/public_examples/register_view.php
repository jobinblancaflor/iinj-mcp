<!doctype html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>IINJ-MCP Management System</title>
	<meta name="description" content="IINJ-MCP "/> 
	<meta name="keywords" content="IINJ-MCP,Iglesiang Itinayo Ni Jesucristo Mga Cristiano sa Pilipinas, IINJ-MCP Management System, "/>
	<?php $this->load->view('includes/head'); ?> 
</head>

<body id="register">

	<!-- Header -->  
	<?php $this->load->view('includes/header'); ?> 

	<!-- Demo Navigation -->
	<?php $this->load->view('includes/demo_header'); ?> 
	
	
	<!-- Main Content -->
	<!-- Main Content -->
	<div class="col-lg-12">
		<fieldset class="container py-5">
		<h2>Register Account</h2>

		<?php if (! empty($message)) { ?>
			<div id="message">
				<?php echo $message; ?>
			</div>
		<?php } ?>
			
		<div class="row container">
		<div class="col-lg-6" >
			<?php echo form_open(current_url()); ?>  	
			<ul>						
						<li class="info_req">
							<label for="first_name">First Name:</label>
							<input type="text" id="first_name" name="register_first_name" value="<?php echo set_value('register_first_name');?>"/>
						</li>
						<li class="info_req">
							<label for="last_name">Last Name:</label>
							<input type="text" id="last_name" name="register_last_name" value="<?php echo set_value('register_last_name');?>"/>
						</li>							
						<li class="info_req">
							<label for="email_address">Email Address:</label>
							<input type="text" id="email_address" name="register_email_address" value="<?php echo set_value('register_email_address');?>" class="tooltip_trigger"
								title="This demo requires that upon registration, you will need to activate your account via clicking a link that is sent to your email address."
							/>
						</li>
						<li class="info_req">
							<label for="username">Username:</label>
							<input type="text" id="username" name="register_username" value="<?php echo set_value('register_username');?>" class="tooltip_trigger"
								title="Set a username that can be used to login with."
							/>
						</li>
						<li class="info_req">
							<label for="password">Password:</label>
							<input type="password" id="password" name="register_password" value="<?php echo set_value('register_password');?>"/>
						</li>
						
						<li>							
							<small>
								Password length must be more than <?php echo $this->flexi_auth->min_password_length(); ?> characters in length.<br/>Only alpha-numeric, dashes, underscores, periods and comma characters are allowed.
							</small>
						</li>
					</ul>
		</div>
		<div class="col-lg-6" >
		<ul>
			<li class="info_req">
				<label for="designation">Designation:</label>
				<input list="designation_list" id="designation" name="register_designation" value="<?php echo set_value('register_designation');?>" />
			</li>
			<li class="info_req">
				<label for="birthday">Birthday:</label>
				<input type="date" id="register_birthday" name="register_birthday" value="<?php echo set_value('register_birthday');?>"/>
			</li>
			<li class="info_req">
				<label for="congregation">Congregation :</label>
				<!--<input type="text" id="congregation" name="congregation" value="<?php echo set_value('congregation');?>"/>-->
				<input list="congregation_list" id="register_congregation" name="register_congregation" value="<?php echo set_value('register_congregation');?>">
			</li>
			<li class="info_req">
				<label for="phone_number">Phone Number:</label>
				<input type="text" id="phone_number" name="register_phone_number" value="<?php echo set_value('register_phone_number');?>"/>
			</li>
			<li>
				<label for="newsletter">Subscribe to Newsletter:</label>
				<input type="checkbox" id="newsletter" name="register_newsletter" value="1" <?php echo set_checkbox('register_newsletter',1);?>/>
			</li>

			<li class="info_req">
				<label for="confirm_password">Confirm Password:</label>
				<input type="password" id="confirm_password" name="register_confirm_password" value="<?php echo set_value('register_confirm_password');?>"/>
			</li>
			
		</ul>
		</div>
		</div>
		<br/>
		<hr/>
		<div class="row container">
		
		<div class="col-lg-12" >
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<label for="submit">Register:</label>
					<input type="submit" name="register_user" id="submit" value="Submit" class="link_button large"/>				
					</div>
		</div>
		</div>
		<?php echo form_close();?>
		</fieldset>
	</div>	
	<datalist id ="congregation_list">
	<?php 
	foreach($congregation as $row){
		echo "<option value='".$row['congregation']."'/>";
	}
	?>
	</datalist>
	
	<datalist id ="designation_list">
	<?php 
	foreach($designation as $row){
		echo "<option value='".$row['designation']."'/>";	
	}
	?>
	</datalist>
  
	<!-- Footer -->  
	<?php $this->load->view('includes/footer'); ?> 

<!-- Scripts -->  
<?php $this->load->view('includes/scripts'); ?> 

</body>
</html>