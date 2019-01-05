<!doctype html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>IINJ-MCP Management System</title>
	<meta name="description" content="This web application for IINJ-MCP generates census reports base on the preferences. "/> 
	<meta name="keywords" content="IINJ-MCP,Iglesiang Itinayo Ni Jesucristo Mga Cristiano sa Pilipinas, IINJ-MCP Management System, Census report"/>
	<?php $this->load->view('includes/head'); ?> 

</head>

<body id="register">

	<!-- Header -->  
	<?php $this->load->view('includes/header'); ?> 

	<!-- Demo Navigation -->
	<?php $this->load->view('includes/demo_header'); ?> 
	
	
	<!-- Main Content -->
	<div class="col-lg-12" >
		<fieldset class="container">
			<br/>
			<h2> Census Report</h2>						
			<hr/>
		
		<div class="row container">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">	
				<h2 class="text-center">Census Report</h2>
				<small class="text-center">Generate census report of all congregation or base on the selected congregation.</small>
				
				<?php 
						$attributes = array('class' => 'form-group text-center', 'id' => 'generate_census_report_form');
						echo form_open(current_url(),$attributes); ?>
					<input list="congregation_list" placeholder="Select Congregation" name="congregation_condition" class="form-control mt-2"/>
					<input list="order_list" name="order_condition" placeholder="Select Order" class="form-control mt-2"/>
					<input type="submit" class="btn btn-success mt-2 form-control" name="generate_census_report" style="border:0; margin-bottom:0; padding:.375rem .75rem;" value="Generate Report" />
				 <?php echo form_close();?>
			</div>			
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">	
				<h2 class="text-center">Census Report2</h2>
				<small class="text-center">Generate census report of all congregation or base on the selected congregation.</small>
				
				<?php 
						$attributes = array('class' => 'form-group', 'id' => 'generate_census_report_form');
						echo form_open(current_url(),$attributes); ?>
					<input list="congregation_list" placeholder="Select Congregation" name="congregation_condition" class="form-control mt-2"/>					
					<input list="country_list" name="country_condition" placeholder="Select Country" class="form-control mt-2"/>
					<input list="status_list" name="status_condition" placeholder="Select Status" class="form-control mt-2"/>
					<label for="from" class="mt-2" >Birthday</label>
					<input type="date" id="from" name="birthdate_condition" class="form-control" placeholder="Membership by Year:" />
					<input list="designation_list" placeholder="Select Designation" name="designation_condition" class="form-control mt-2"/>
					<label for="from" class="mt-2" >Membership by Year:</label>
					<input type="date" id="from" name="date_condition" class="form-control" placeholder="Membership by Year:" />
					<input list="order_list" name="order_condition" placeholder="Select Order" class="form-control mt-2"/>
					<input type="submit" class="btn btn-success mt-2 form-control" name="generate_census_report" style="border:0; margin-bottom:0; padding:.375rem .75rem;" value="Generate Report" />
				 <?php echo form_close();?>
			</div>			
			
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">	
				<h2 class="text-center">Attendance Report</h2>
				<small class="text-center">Generate attendance report of members of all congregation or base on the selected congregation.</small>
				<form class="form-group">
					<input list="congregation_list" placeholder="Select Congregation" name="congregation_condition" class="form-control mt-2"/>
					<label for="from" class="mt-2" >Date From:</label>
					<input type="date" id="from" name="from" class="form-control" placeholder="Date From:" />
					<label for="from" >Date To:</label>
					<input type="date" id="to" name="to" class="form-control" placeholder="Date To:" />
					<input list="order_list" name="order_condition" placeholder="Select Order" class="form-control mt-2"/>
					<input type="submit" class="btn btn-success mt-2 form-control"  style="border:0; margin-bottom:0; padding:.375rem .75rem;" value="Generate Report" />
				</form>
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">	
				<h2 class="text-center">Visitor Report</h2>
				<small class="text-center">Generate visitor report of all congregation or base on the selected congregation.</small>
				<form class="form-group text-center">
					<input list="congregation_list" placeholder="Select Congregation" name="congregation_condition" class="form-control mt-2"/>
					<input list="order_list" name="order_condition" placeholder="Select Order" class="form-control mt-2"/>
					<input type="submit" class="btn btn-success mt-2 form-control"  style="border:0; margin-bottom:0; padding:.375rem .75rem;" value="Generate Report" />
				</form>
			</div>
		</div>
			
			
			
		</div>
		<datalist id ="congregation_list">
		
		<option selected value="All Congregation" />
		<?php 
		foreach($congregation_list as $row){
			echo "<option value='".$row['congregation']."'/>";
		}
		?>
		</datalist>
		
		<datalist id ="designation_list">
		<?php 
		foreach($designation_list as $row){
			echo "<option value='".$row['designation']."'/>";
		}
		?>
		</datalist>
		<datalist id ="country_list">
		<?php 
		foreach($country_list as $row){
			echo "<option value='".$row['country_name']."'/>";
		}
		?>
		</datalist>
		<datalist id ="order_list">
			<option value="Ascending" />
			<option value="Descending" />
		</datalist>
		<datalist id ="status_list">
			<option value="Active" />
			<option value="Inactive" />
		</datalist>
		
		</fieldset>
	</div>	
	

<script>
function clear() {
    document.getElementById("add_visitor_form").reset();
}
</script>
<script>
var myTimer = setInterval(myClock, 1000);
function myClock() {
    document.getElementById("clock").innerHTML =
    new Date().toLocaleTimeString();
}
</script>
	<!-- Footer -->  
	<?php $this->load->view('includes/footer'); ?> 

<!-- Scripts -->  
<?php $this->load->view('includes/scripts'); ?> 
</body>
</html>