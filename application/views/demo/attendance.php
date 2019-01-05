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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		var url = document.getElementById("url").value;
		//alert(url);
		$("#add").click(function(){
			$.post(url,
			{
			  visitor_name: document.getElementById("visitor_name").value,
			  visitor_congregation: document.getElementById("visitor_congregation").value,
			  visited_congregation: document.getElementById("visited_congregation").value
			},
			function(data,status){
				//alert("You have successfully added a visitor");				
				alert(data);				
			});
			
		});
	});
	</script>
</head>

<body id="register">

	<!-- Header -->  
	<?php $this->load->view('includes/header'); ?> 

	<!-- Demo Navigation -->
	<?php $this->load->view('includes/demo_header'); ?> 
	
	
	<!-- Main Content -->
	<div class="col-lg-12" >
			<?php foreach($congregation as $row)?>
		<fieldset class="container">
			<br/>
			<h2> Attendance for Congregation of <?php echo $row["congregation"]; ?>
				
			</h2>
			<h2> 
			Date:	<?php $datestring = ' %M %d, %Y';
					$time = time();
					echo mdate($datestring, $time);?>					
			</h2>
			<div class="row container">
			<h2>Time: </h2>&nbsp;
			<h2 id="clock"></h2>
			</div>
			
			<hr/>
			
			<h2>Members <a href=""  class="btn btn-success text-white pull-right" data-toggle="modal" data-target="#myModal">Add Visitor</a> 
				
				<!-- Modal -->
			  <div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog modal-lg">
				  <div class="modal-content">
					<div class="modal-header">
					<h4 class="modal-title">Add Visitor</h4>
					  <button type="button" class="close pull-right" data-dismiss="modal">&times;</button>
					  
					</div>
					<div class="modal-body">
						
						<?php 
						$attributes = array('class' => 'form-control', 'id' => 'add_visitor_form');
						echo form_open(current_url(),$attributes); ?>	
							
							<input type="hidden" id="url" value="<?php echo $base_url;?>church/add_visitor"  />
							<input type="hidden" id="visited_congregation" value="<?php echo $row["congregation"]; ?>"  />
						<p>Full Name:</p>
							<input list="census_list" required class="form-control" id="visitor_name" />
						<p>Congregation:</p>
							<input list="congregation_list" required class="form-control" id="visitor_congregation" />					  
					</div>
					<div class="modal-footer">						
						<button class="btn btn-success pull-right" id="add" onclick="clear()"  style="border:0; margin-bottom:0; padding:.375rem .75rem;"  />Submit</button>
						<button type="button" class="btn btn-danger"  data-dismiss="modal">Close</button>
					  <?php echo form_close();?>
					</div>
				  </div>
				</div>
			  </div></h2>
			<table class="table-striped">
				<tr>
					<th width="65%">Full Name</td>
					<th width="20%">Time In</td>
					<th width="15%">Action</td>					
				</tr>
				
				
				<?php foreach ($attendance as $row){ ?>
				<tr>
					<td><?php echo $row["full_name"]; ?></td>
					<td><?php echo $row["time"]; ?></td>
					<td class="text-center">
						<?php if($row["time"]==NULL){?>
							<?php echo form_open(current_url()); ?>
							<input type="hidden" name="census_id" value="<?php echo $row["census_id"];?>" />							
							<input  name="register_attendance" value="Present" type="submit" style="border:0; margin-bottom:0; padding:.375rem .75rem;"  class="btn btn-primary text-white " />					
							<?php echo form_close();?>
						<?php }else{ ?>
						<?php echo form_open(current_url()); ?>
							<input type="hidden" name="attendance_id" value="<?php echo $row["attendance_id"];?>" />							
							<input  name="delete_attendance" value="Cancel" type="submit" style="border:0; margin-bottom:0; padding:.375rem .75rem;"  class="btn btn-danger text-white " />					
						<?php echo form_close();}?>
							
					</td>
				</tr>
				<?php } ?>
			</table>
			
			<?php if(count($visitor_list)>0){?>
			<h2>Visitors</h2>
			<table class="table-striped">
				<tr>
					<th width="80%">Full Name</td>
					<th>Time In</td>
					<th>Action</td>					
				</tr>
				<?php foreach ($visitor_list as $row){ ?>
				<tr>
					<td><?php echo $row["full_name"]; ?></td>
					<td><?php echo $row["time"]; ?></td>
					<td class="text-center">
						<?php if($row["time"]==NULL){?>
							<?php echo form_open(current_url()); ?>
							<input type="hidden" name="visitor_id" value="<?php echo $row["visitor_id"];?>" />							
							<input  name="register_visitor_attendance" value="Present" type="submit" style="border:0; margin-bottom:0; padding:.375rem .75rem;"  class="btn btn-primary text-white " />					
							<?php echo form_close();?>
						<?php }else{ ?>
						<?php echo form_open(current_url()); ?>
							<input type="hidden" name="attendance_id" value="<?php echo $row["attendance_id"];?>" />							
							<input  name="delete_visitor_attendance" value="Cancel" type="submit" style="border:0; margin-bottom:0; padding:.375rem .75rem;"  class="btn btn-danger text-white " />					
						<?php echo form_close();}?>
							
					</td>
				</tr>
				<?php } ?>
			</table>			
			<?php } ?>
		</div>
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