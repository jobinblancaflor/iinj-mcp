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
		<fieldset class="container py-5">
		<?php foreach($census_data as $row)?>
			
		<div class="row container">
		<div class="col-lg-6" >
			<h2>
			<?php
			if($row['census_designation']=="Pastor"){
				echo "Ptr. ";
			}else if($row['census_designation']== "Diaconesa"){				
				echo "Dsa. ";
			}else{							
				echo "Kap. ";
			}
			?>
			<?php echo $row['census_first_name'].' '.$row['census_middle_name'].' '.$row['census_last_name'];?></h2>	
			<h4>Gender: <?php echo $row['census_gender'];?></h4>
			<h4>Birthday: <?php echo $row['census_birthday'];?></h4>
			<h4>Congregation: <?php echo $row['census_congregation'];?></h4>
			<h4>Phone No: <?php echo $row['census_phone'];?></h4>
			<a href="<?php echo $base_url;?>auth_admin/edit_census/<?php echo $row['census_id']?>" class="btn btn-info text-white" style="border:0; margin-bottom:0; padding:.375rem .75rem;">Edit</a>
			<a href="<?php echo $base_url;?>auth_admin/delete_census/<?php echo $row['census_id']?>" class="btn btn-danger text-white" style="border:0; margin-bottom:0; padding:.375rem .75rem;">Delete</a>
		</div>
		<div class="col-lg-6" >
			
		<img class="img-responsive img-thumbnail pull-right" width="200px" height="200px" src="<?php echo base_url().$row['census_profile'];?>">
		</div>
		</div>
		<br/>
		<hr/>
		<div class="row container">
		
		<div class="col-lg-12" >
			<h2>Attendance</h2>
			<table class="table-striped">
				<tr>
					<td>Date</td>
					<td>Time</td>				
				</tr>
				<?php foreach($attendance as $row){?>					
					<tr>
						<td> <?php echo $row['date']?></td>
						<?php 
						$time = date('H:i:s A',strtotime("09:30 AM"));
						$time_in = date('H:i:s A',strtotime($row['time']));						
						?>
						<td <?php if($time < $time_in){ echo "class='table-danger'"; }?> ><?php echo $row['time']?></td>
					</tr>
				<?php } ?>
			</table>
		</div>
		</div>
		
		</fieldset>
	</div>	
	<?php $this->load->view('includes/footer'); ?> 

<!-- Scripts -->  
<?php $this->load->view('includes/scripts'); ?> 

</body>
</html>