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

<body>

<div id="body_wrap">
	<!-- Header -->  
	<?php $this->load->view('includes/header'); ?> 

	<!-- Demo Navigation -->
	<?php $this->load->view('includes/demo_header'); ?> 
	

	<!-- Main Content -->
	<div class="col-lg-12">
		<fieldset class="container py-5">
		<?php if (! empty($message)) { ?>
			<div id="message">
				<?php echo $message; ?>
			</div>
		<?php } ?>
			
			<?php echo form_open(current_url());?>
			
		<div class="row container">
		<div class="col-lg-6" >
			<h2>Registered Users</h2>
					<ul>
						<li>
							<label for="identity">Email or Username:</label>
							<input type="text" id="identity" name="login_identity" value="<?php echo set_value('login_identity', 'admin@admin.com');?>" />
							
						</li>
						<li>
							<label for="password">Password:</label>
							<input type="password" id="password" name="login_password" value="<?php echo set_value('login_password', 'password123');?>"/>
						</li>
					<?php 
						# Below are 2 examples, the first shows how to implement 'reCaptcha' (By Google - http://www.google.com/recaptcha),
						# the second shows 'math_captcha' - a simple math question based captcha that is native to the flexi auth library. 
						# This example is setup to use reCaptcha by default, if using math_captcha, ensure the 'auth' controller and 'demo_auth_model' are updated.
					
						# reCAPTCHA Example
						# To activate reCAPTCHA, ensure the 'if' statement immediately below is uncommented and then comment out the math captcha 'if' statement further below.
						# You will also need to enable the recaptcha examples in 'controllers/auth.php', and 'models/demo_auth_model.php'.
						#/*
						if (isset($captcha)) 
						{ 
							echo "<li>\n";
							echo $captcha;
							echo "</li>\n";
						}
						#*/
						
						/* math_captcha Example
						# To activate math_captcha, ensure the 'if' statement immediately below is uncommented and then comment out the reCAPTCHA 'if' statement just above.
						# You will also need to enable the math_captcha examples in 'controllers/auth.php', and 'models/demo_auth_model.php'.
						if (isset($captcha))
						{
							echo "<li>\n";
							echo "<label for=\"captcha\">Captcha Question:</label>\n";
							echo $captcha.' = <input type="text" id="captcha" name="login_captcha" class="width_50"/>'."\n";
							echo "</li>\n";
						}
						#*/
					?>
						<li>
							<label for="remember_me">Remember Me:</label>
							<input type="checkbox" id="remember_me" name="remember_me" value="1" <?php echo set_checkbox('remember_me', 1); ?>/>
						</li>
						<li>
							<label for="submit">Login:</label>
							<input type="submit" name="login_user" id="submit" value="Submit" class="link_button large"/>
						</li>
						<li>
							<small>Note: On this demo, 3 failed login attempts will raise security on the account, activating a 10 second time limit ban per login attempt (20 secs after 9+ attempts), and activation of a captcha that must be completed to login.</small> 
						</li>
						<li>
							<hr/>
							<a href="<?php echo $base_url;?>auth/forgotten_password">Reset Forgotten Password</a>
						</li>
						<li>
							<a href="<?php echo $base_url;?>auth/resend_activation_token">Resend Account Activation Token</a>
						</li>
					</ul>
		</div>
		<div class="col-lg-6" >
		
			<h2>New User</h2>
					<ul>
						<li>
							New users can register for an account.
						</li>
						<li>
							<hr/>
							<a href="<?php echo $base_url;?>auth/register_account" class="link_button large">Register New Account</a>
						</li>
					</ul>
		</div>
		</div>
		
			<?php echo form_close();?>
		<br/>
		<hr/>
		
		
		</fieldset>
	</div>	
	
	<!-- Footer -->  
	<?php $this->load->view('includes/footer'); ?> 
</div>

<!-- Scripts -->  
<?php $this->load->view('includes/scripts'); ?> 

</body>
</html>