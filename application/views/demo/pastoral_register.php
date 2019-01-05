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
	<div class="col-lg-12">
		<fieldset class="container">
			<br/>
			<h2>Pastoral Academy Registration</h2>
			<hr/>
		<?php if (! empty($message)) { ?>
			<div id="message">
				<?php echo $message; ?>
			</div>
		<?php } ?>
			
			<?php echo form_open_multipart(current_url()); ?>  	
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<ul>
						
						<li class="info_req">
							<label for="first_name">Full Name:</label>
							<input list="census_list" id="first_name" name="full_name" required />
						</li>
						
						<li class="info_req">
							<label for="congregation">Congregation :</label>
							<input list="congregation_list" id="congregation" required name="census_congregation" value="<?php echo set_value('census_designation');?>"/>
						</li>
						<li class="info_req">
							<label for="phone_number">Phone Number:</label>
							<input type="text" id="phone_number" name="phone" required />
						</li>
						<li class="info_req">
							<label for="submit">Register:</label>
							<input type="submit" name="register_pastoral" id="submit" value="Submit" style="border:0; margin-bottom:0; padding:.375rem .75rem;" class="btn btn-success"/>
							</li>						
					</ul>
					
					</div>
			<?php echo form_close();?>
			<datalist id ="congregation_list">
		<?php 
		foreach($congregation_list as $row){
			echo "<option value='".$row['congregation']."'/>";
		}
		?>
		</datalist>
		<datalist id ="census_list">
		<?php 
		foreach($census_list as $row){
			echo "<option value='".$row['census_first_name'].' '.$row['census_middle_name'].' '.$row['census_last_name']."'/>";
		}
		?>
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

<script>
    //Upload Display Image
    function readURL(input) {
  if (input.files && input.files[0]) {
  var reader = new FileReader();
  reader.onload = function (e) {
   $('#image')
    .attr('src', e.target.result)
    .width(200)
    .height(200);
  };
  reader.readAsDataURL(input.files[0]);
  }
 }
    </script>

</body>
</html>