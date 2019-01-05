<!doctype html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>IINJ-MCP Management System</title>
	<meta name="description" content="IINJ-MCP,"/> 
	<meta name="keywords" content="IINJ-MCP,Iglesiang Itinayo Ni Jesucristo Mga Cristiano sa Pilipinas, IINJ-MCP Management System, "/>
	<?php $this->load->view('includes/head'); ?>	
</head>

<body>

<!-- Header -->  
<?php $this->load->view('includes/header'); ?> 


	<!-- Demo Navigation -->
	<?php $this->load->view('includes/demo_header'); ?> 

    <!-- Header - set the background image for the header in the line below -->
    <header class="py-5 bg-image-full" style="background-image: url('<?php echo $includes_dir;?>images/slider/qwe.png');">
      <!--<img class="img-fluid d-block mx-auto" src="<?php echo $includes_dir;?>images/logo.png" width="50px" alt="">-->
	  
      <div style="height: 200px;"></div>
    </header>

    <!-- Content section -->
    <section class="py-5">
      <div class="container">
        <h1 class="text-center">Iglesiang Itinayo Ni Jesucristo (Mga Cristiano sa Pilipinas)</h1>
        <p class="lead text-center">Matthew 16:18</p>
        <p class="text-center">At sinasabi ko naman sa iyo, na ikaw ay Pedro, at sa ibabaw ng batong ito ay itatayo ko ang aking iglesia; at ang mga pintuan ng Hades ay hindi magsisipanaig laban sa kaniya.</p>
      </div>
    </section>
	

    <!-- Image Section - set the background image for the header in the line below -->
    <section class="py-5 bg-image-full" style="background-image: url('<?php echo $includes_dir;?>images/slider/asd.png');">
      <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
      <div style="height: 200px;"></div>
    </section>

    <!-- Content section -->
    <section class="py-5">
      <div class="container ">
        <h1 class="text-center">Centennial Anniversary</h1>
        <p class="lead text-center">Matthew 16:18</p>
        <p class="text-center">At sinasabi ko naman sa iyo, na ikaw ay Pedro, at sa ibabaw ng batong ito ay itatayo ko ang aking iglesia; at ang mga pintuan ng Hades ay hindi magsisipanaig laban sa kaniya.</p>
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; IINJ-MCP 2018</p>
      </div>
      <!-- /.container -->
    </footer>
<!-- Footer -->  
<?php $this->load->view('includes/footer'); ?> 

<!-- Scripts -->  
<?php $this->load->view('includes/scripts'); ?> 
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active_slide", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active_slide";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>