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
			<h2>Update Census</h2>
		
		<?php if (! empty($message)) { ?>
			<div id="message">
				<?php echo $message; ?>
			</div>
		<?php } ?>
			
		<?php foreach($census_data as $row)?>
			<?php echo form_open_multipart(current_url()); ?>  	
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<ul>
						<li>
						
						
						
						<label for="image">Profile:</label>	
						<img id="image" src="<?php if($row['census_profile']==""){ echo base_url().'includes/images/default.jpg';}else{echo base_url().$row['census_profile'];}?>" alt="Photo Upload" width="200px" height="200px"  class="img-responsive img-circle img-thumbnail"/>
						
						</li>
						<li>
						
						<label for="profile"></label>
						<input type='file' id="profile"  name="profile" class="pull-right" onchange="readURL(this);" />	
						<input type='hidden'  name="old_profile" value="<?php echo $row['census_profile'];?>" />	
						
						<br/>						
						</li>
						<li class="info_req">
							<label for="designation">Designation:</label>
							<input list="designation_list" id="designation" required name="census_designation" value="<?php echo $row['census_designation'];?>"/>
						</li>
						<li class="info_req">
							<label for="first_name">First Name:</label>
							<input type="text" id="first_name" name="census_first_name" required value="<?php echo $row['census_first_name'];?>"/>
						</li>
						<li class="info_req">
							<label for="middle_name">Middle Name:</label>
							<input type="text" id="middle_name" name="census_middle_name" required value="<?php echo $row['census_middle_name'];?>"/>
						</li>
						<li class="info_req">
							<label for="last_name">Last Name:</label>
							<input type="text" id="last_name" name="census_last_name" required value="<?php echo $row['census_last_name'];?>"/>
						</li>	
						<li class="info_req">
							<label for="Gender">Gender:</label>							
							<input list="gender_list" id="Gender" name="census_gender" required value="<?php echo $row['census_gender'];?>"/>
							<datalist id ="gender_list">								
									<option value="Male"/>
									<option value="Female"/>
							</datalist>
						</li>							
						
						<li class="info_req">
							<label for="birthday">Birthday:</label>
							<input type="date" id="census_birthday" name="census_birthday" required value="<?php echo $row['census_birthday'];?>"/>
						</li>
						<li class="info_req">
							<label for="congregation">Congregation :</label>
							<!--<input type="text" id="congregation" name="congregation" value="<?php echo set_value('census_congregation');?>"/>-->
							<input list="congregation_list" id="census_congregation" required name="census_congregation" value="<?php echo $row['census_congregation'];?>"/>
						</li>
						
						
						<li class="info_req">
							<label for="country">Country :</label>
							<input list="country_list" id="census_country" required name="census_country" value="<?php echo $row['census_country'];?>"/>
						</li>
						<li class="info_req">
							<label for="congregation">Active Status :</label>
							<select name="church_status">						 
							  <option  <?php if($row['church_status']==1) echo "selected";?>   value="1">Active</option>
							  <option class="danger" <?php if($row['church_status']==0) echo "selected";?> value="0">Inactive</option>
							</select>
						</li>
						
						<li class="info_req">
							<label for="phone">Phone:</label>
							<input type="phone" id="census_phone" name="census_phone" required value="<?php echo $row['census_phone'];?>"/>
						</li>
						
						<li class="info_req">
							<label for="submit">Update:</label>
							<input type="submit" name="update_census" id="submit" value="Update" class="link_button large"/>
							</li>						
					</ul>
					
					</div>
					<!--<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 center">
					
					<center>
					
					 <input type='file' id="profile" name="profile" onchange="readURL(this);" /><br/>
					<img id="image" src="<?php echo $base_url;?>../includes/images/default.jpg" alt="Photo Upload" width="200px" height="200px"  class="img-responsive img-circle img-thumbnail"/>
                    <br/> 
					 </center>
					 </div>-->
				</fieldset>
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
		
	<datalist id ="country_list">
	<?php 
	foreach($country as $row){
		echo "<option value='".$row['country_name']."'/>";	
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