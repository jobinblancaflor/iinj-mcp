<script>
	// Hide content onload, prevents JS flicker
	document.body.className += ' js-enabled';
</script>
<!--
<div id="header_wrap">
	<div id="header">
		<h1 id="logo">
			<a href="<?php echo $base_url; ?>" title="flexi auth">
				<img src="<?php echo $includes_dir;?>images/logo.png" alt="IINJ-MCP logo" title="IINJ-MCP logo"/>
				<span class="img_rep">flexi auth</span> 
			</a>
		</h1>
		 
		<ul id="nav">
			<li>
				<a href="<?php echo $base_url;?>">Home</a>
			</li>
			<li>
				<a href="<?php echo $base_url;?>auth_lite/features">Features</a>
			</li>
			<li>
				<a href="<?php echo $base_url;?>auth_lite/demo">Demo</a>
			</li>
			<li>
				<a href="<?php echo $base_url;?>auth_lite/user_guide">User Guide</a>
			</li>
			<li>
				<a href="<?php echo $base_url;?>auth_lite/support">Support</a>
			</li>
			<li>
				<a href="https://github.com/haseydesign/flexi-auth">Download</a>
			</li>
		</ul> 
	</div>
</div>-->


<!--<nav class="navbar navbar-inverse" style="border-radius:0;">
  <div class="container-fluid col-md-offset-1">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">IINJ-MCP Management System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo $base_url;?>">Home</a></li>
      <li ><a href="<?php echo $base_url;?>">Churches</a></li>
      <li ><a href="<?php echo $base_url;?>">About Us</a></li>
      
	 <!--<form class="navbar-form navbar-right" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>->
    </ul>
    <ul class="nav navbar-nav navbar-right">
	<?php if (! $this->flexi_auth->is_logged_in()) { ?>
				<li>
					<li><a href="<?php echo $base_url;?>auth/register_account"><span class="glyphicon glyphicon-user"></span> Register</a></li>
				</li>
			<?php } else { ?>
				<li>
					<a href="<?php echo $base_url;?>auth/logout">Logout</a>
				</li>
			<?php } ?>
     <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>->
	  <?php if (! $this->flexi_auth->is_logged_in_via_password()) { ?>
				<li>
					<a href="<?php echo $base_url;?>auth""><span class="glyphicon glyphicon-log-in"></span> Login</a>
				</li>
				
		<?php } ?>
    </ul>
  </div>
</nav>->






<nav class="navbar navbar-inverse" style="border-radius:0;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      
      <a class="navbar-brand" href="#">IINJ-MCP Management System</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
			<li><a href="<?php echo $base_url;?>">Home</a></li>
			<li><a href="<?php echo $base_url;?>">Churches</a></li>
			<li><a href="<?php echo $base_url;?>">About Us</a></li>
			<?php if ($this->flexi_auth->is_logged_in()) { ?>
			<li><a href="<?php echo $base_url;?>auth_admin/census"><span class="glyphicon glyphicon-user"></span> Census</a></li>
			<?php } ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if (! $this->flexi_auth->is_logged_in()) { ?>
				<li>
					<li><a href="<?php echo $base_url;?>auth/register_account"><span class="glyphicon glyphicon-user"></span> Register</a></li>
				</li>
			<?php } else { ?>
				<li>
					<a href="<?php echo $base_url;?>auth/logout">Logout</a>
				</li>
			<?php } ?>
     <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>->
	  <?php if (! $this->flexi_auth->is_logged_in_via_password()) { ?>
				<li>
					<a href="<?php echo $base_url;?>auth""><span class="glyphicon glyphicon-log-in"></span> Login</a>
				</li>
				
		<?php } ?>
      </ul>
    </div>
  </div>
</nav>
-->


<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo $base_url;?>">IINJ-MCP Management System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo $base_url;?>">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $base_url;?>church">Churches</a>
            </li>
			<?php if ($this->flexi_auth->is_logged_in()) { ?>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Census
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="<?php echo $base_url;?>auth_admin/census"><span class="glyphicon glyphicon-user"></span>Add Census</a></a>
				  <a class="dropdown-item" href="<?php echo $base_url;?>auth_admin/table_census">View Census</a>
				</div>
			  </li>			
			<?php } ?>
            <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  E-Services
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  		    
				  <a class="dropdown-item" href="<?php echo $base_url;?>church/pastoral">Pastoral Academy Registration</a>
				  <a class="dropdown-item" href="#"><span class="glyphicon glyphicon-user"></span>Marriage Registration</a></a>
				  <a class="dropdown-item" href="#">Baptismal Registration</a>
				  <div class="dropdown-divider"></div>
				  <a class="dropdown-item" href="#">Excuse Letter Request</a>		
				  
				</div>
			  </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <?php if ($this->flexi_auth->is_logged_in()) { ?>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Reports
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="<?php echo $base_url;?>report/census_report"><span class="glyphicon glyphicon-user"></span>Census Report</a></a>
				  <a class="dropdown-item" href="#">Attendance Report</a>
				</div>
			  </li>			
			<?php } ?>
			<?php if (! $this->flexi_auth->is_logged_in()) { ?>				
			<li class="nav-item">
				<a class="nav-link" href="<?php echo $base_url;?>auth/register_account"><span class="glyphicon glyphicon-user"></span> Register</a>
			</li>
			<?php } else { ?>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo $base_url;?>auth/logout">Logout</a>
			</li>
			<?php } ?>
     <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
	  <?php if (! $this->flexi_auth->is_logged_in_via_password()) { ?>
				<li>
					<a class="nav-link" href="<?php echo $base_url;?>auth""><span class="glyphicon glyphicon-log-in"></span> Login</a>
				</li>
				
		<?php } ?>
          </ul>
        </div>
      </div>
    </nav>