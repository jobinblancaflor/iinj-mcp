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
	.overlay {
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	height: 100%;
	width: 100%;
	opacity: 0;
	transition: .5s ease;
	background-color: #006699;
	}

	.con:hover .overlay {
	opacity: 1;
	}

	.text {
	color: white;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	text-align: center;
	font-family: 'Open Sans', sans-serif;
	}
	.mt-5 {
  margin-top: 0 !important;
}
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
			<h2>Local Congregations</h2>
			<hr/>
			<div class="row">
			<?php foreach($congregation as $row){ ?>
			<div class="col-lg-4 con">
			  <img src="<?php echo $includes_dir;?>images/logo.png" alt="congregation" style="margin:15px;" class="img img-responsive center"/>
			  <div class="overlay">
				<div class="text">
				<h1 class="text-center">Local ng <br/><?php echo $row["congregation"];?></h1>	
<?php if ($this->flexi_auth->is_logged_in()){ ?>
				<div class="col-sm- row12 ">
				<a class="btn btn-info text-white" href="<?php echo $base_url;?>auth_admin/congregation_census/<?php echo $row["congregation_id"];?>">View Congregation Census</a><br/><br/>
				<a class="btn btn-success text-white" href="<?php echo $base_url;?>church/attendance/<?php echo $row["congregation_id"];?>">Sunday Attendance</a>			
				</div>
				<?php } ?>				
				</div>
					
			  </div>
			</div>
			<?php }?>
			
			</div>
		</fieldset>
	</div>	
	
	<!-- Footer -->  
	<?php $this->load->view('includes/footer'); ?> 

<!-- Scripts -->  
<?php $this->load->view('includes/scripts'); ?> 
</body>
</html>