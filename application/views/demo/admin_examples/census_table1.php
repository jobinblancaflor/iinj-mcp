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
			<h2>Census Table</h2>

		<?php if (! empty($message)) { ?>
			<div id="message">
				<?php echo $message; ?>
			</div>
		<?php } ?>
		
			<table>
				<tr>
					<th>Lastname</th>
					<th>Firstname</th>
					<th>Middlename</th>
					<th>Gender</th>
					<th colspan="3"><center>Action</center></th>
				</tr>
					<?php
					foreach($results as $data) {
						echo "<tr>";
						echo "<td>".$data->census_last_name ."</td>";
						echo "<td>".$data->census_first_name ."</td>";
						echo "<td>".$data->census_middle_name ."</td>";
						echo "<td>".$data->census_gender ."</td>";
						echo "<td><a href='".$base_url."auth_admin/edit_census/".$data->census_id."' >View</a></td>";
						echo "<td><a href='' >Edit</a></td>";
						echo "<td><a href='' >Delete</a></td>";
						echo "</tr>";
					}
					?>
				
			</table>
			
			<?php echo $links; ?>
			</fieldset>
	</div>	
	
	<!-- Footer -->  
	<?php $this->load->view('includes/footer'); ?> 

<!-- Scripts -->  
<?php $this->load->view('includes/scripts'); ?> 
</body>
</html>