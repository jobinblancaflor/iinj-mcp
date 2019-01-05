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
	
	<link rel="stylesheet" href="<?php echo $includes_dir;?>css/pagination.css">
	<style>
	
	</style>
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
			<h2>Census Table</h2>
			
			<?php if (! empty($message)) { ?>
			<div id="message">
				<?php echo $message; ?>
			</div>
		<?php } ?>
			<div class="table-responsive">
			<table class="table table-striped container">				
				<hr/>
				<div class="col-lg-12 text-right">
				
				<?php 
				$attributes = array('id' => 'search_census_form');
				echo form_open($base_url."auth_admin/search_census",$attributes); ?>	
				  <input type="text" placeholder="Search.." name="search"  >
				  <button class="btn btn-success" id="search_census" name="search_census" onclick="search()" type="submit"><i class="fa fa-search"></i></button>				
			<?php echo form_close();?>
			  </div>
				
				<tr>					
					<th>Image</th>
					<th>Lastname</th>
					<th>Firstname</th>
					<th>Middlename</th>
					<th>Congregation</th>
					<th>Gender</th>
					<th colspan="3"><center>Action</center></th>
				</tr>
				 <?php if (isset($results)) { ?>
					<?php
					foreach($results as $data) {
						echo "<tr>";
						echo "<td><img class='img-responsive img-circle img-thumbnail' width='150px'height='150' src='".base_url().$data->census_profile."'/></td>";
						echo "<td>".$data->census_last_name ."</td>";
						echo "<td>".$data->census_first_name ."</td>";
						echo "<td>".$data->census_middle_name ."</td>";
						echo "<td>".$data->census_congregation ."</td>";
						echo "<td>".$data->census_gender ."</td>";
						echo "<td><a class='btn btn-success  text-white' href='".$base_url."auth_admin/edit_census/".$data->census_id."' >Edit</a></td>";
						echo "<td><a class='btn btn-info text-white' href='".$base_url."auth_admin/view_census/".$data->census_id."' >View</a></td>";
						echo "<td><a class='btn btn-danger text-white' href='".$base_url."auth_admin/delete_census/".$data->census_id."' >Delete</a></td>";
						echo "</tr>";
					}
					?>
				
			</table>
			</div>
			
			       <?php } else { ?>
               No user(s) found.
            <?php } ?>
 
            <?php if (isset($links)) { ?>
                <?php echo $links ?>
            <?php } ?>
			
			
			
			
			
			</fieldset>
	</div>	
	<script>
	function search(){
		document.getElementById("search_census_form").submit();
	}
	</script>
	<!-- Footer -->  
	<?php $this->load->view('includes/footer'); ?> 

<!-- Scripts -->  
<?php $this->load->view('includes/scripts'); ?> 
</body>
</html>