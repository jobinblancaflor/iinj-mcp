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
	<style>
	ul.tsc_pagination li a
{
border:solid 1px;
border-radius:3px;
-moz-border-radius:3px;
-webkit-border-radius:3px;
padding:6px 9px 6px 9px;
}
ul.tsc_pagination li
{
padding-bottom:1px;
}
ul.tsc_pagination li a:hover,
ul.tsc_pagination li a.current
{
color:#FFFFFF;
box-shadow:0px 1px #EDEDED;
-moz-box-shadow:0px 1px #EDEDED;
-webkit-box-shadow:0px 1px #EDEDED;
}
ul.tsc_pagination
{
margin:4px 0;
padding:0px;
height:100%;
overflow:hidden;
font:12px 'Tahoma';
list-style-type:none;
}
ul.tsc_pagination li
{
float:left;
margin:0px;
padding:0px;
margin-left:5px;
}
ul.tsc_pagination li a
{
color:black;
display:block;
text-decoration:none;
padding:7px 10px 7px 10px;
}
ul.tsc_pagination li a img
{
border:none;
}
ul.tsc_pagination li a
{
color:#0A7EC5;
border-color:#8DC5E6;
background:#F8FCFF;
}
ul.tsc_pagination li a:hover,
ul.tsc_pagination li a.current
{
text-shadow:0px 1px #388DBE;
border-color:#3390CA;
background:#58B0E7;
background:-moz-linear-gradient(top, #B4F6FF 1px, #63D0FE 1px, #58B0E7);
background:-webkit-gradient(linear, 0 0, 0 100%, color-stop(0.02, #B4F6FF), color-stop(0.02, #63D0FE), color-stop(1, #58B0E7));
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
			<ul class="tsc_pagination">
			 <?php if (isset($links)) { ?>
                <?php echo $links ?>
            <?php } ?>
			</ul>
			</fieldset>
	</div>	
	
	<!-- Footer -->  
	<?php $this->load->view('includes/footer'); ?> 

<!-- Scripts -->  
<?php $this->load->view('includes/scripts'); ?> 
</body>
</html>