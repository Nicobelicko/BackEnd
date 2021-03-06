<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Bike Race A Sports Category Flat Bootstrap Responsive  Website Template | Contact :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bike Race Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Michroma" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
<!-- /fonts -->
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css -->
<script>
    window.onload = init;
    var api;
    var log = false;
    var llave;
    var reg;
    function init(){
    reg = document.getElementById("registro");
    llave = localStorage.getItem("1");
    if(llave != null){
        reg.style.display = 'none';
    }
    }

    
  </script>
</head>
<body>
<!-- navigation -->
<nav class="navbar navbar-default navbar-fixed-top" data-aos="flip-up">
    <div class="container">
        <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html"><h1>NexusBike</h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav slide-nav">
				<li><a id="index" href="/index">Inicio</a></li>
				<li><a id="about" href="/about">Acerca de</a></li>
				
            
            <li><a id="gallery" href="/gallery">Galeria</a></li>
				<li><a id="drivers" href="/drivers">Conductores</a></li>
                <li class="active current"><a id = "contact"  href="/contact">Contacto</a></li>
                <li><a id="registro" href="/registro">Registrarse</a></li>
            <li><a id="login" href="/login">Iniciar Sesi??n</a></li>
			</ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<!-- /navigation --> 
<!-- Page Content -->
<!-- header section -->
<section class="inner-w3ls">
    <div class="container">
		<h3 class="text-center" data-aos="zoom-in">Contactanos</h3>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb" data-aos="zoom-in">
                    <li><a href="index.html">Inicio</a></li>
                    <li class="active">Contacto</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
	</div>
</section>
<!-- /header section -->
<section class="contact-w3layouts">
	<!-- Page Content -->
    <div class="container">
        <!-- Map Column -->
        <div class="col-md-8" data-aos="flip-left">
            <!-- Embedded Google Map -->
			<div class="map-w3ls">
				<iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d22436.552361196274!2d-75.59565073141309!3d6.2294690288250045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sco!4v1619839748719!5m2!1ses-419!2sco" style="border:0" allowfullscreen></iframe>
			</div>
        </div>
        <!-- Contact Details Column -->
        <div class="col-md-4" data-aos="flip-right">
            <h3>Informaci??n</h3>
            <p><i class="fa fa-map-marker"></i>Estamos Ubicados en Medell??n Colombia</p>
            <p><i class="fa fa-phone"></i> ( +57) 3114113938</p>
            <p><i class="fa fa-envelope-o"></i> <a href="mailto:name@example.com">juann.ruiz@upb.edu.co</a></p>
			<ul class="social-icons2">
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
			</ul>
        </div>
    </div>
</section>
<section class="contact-w3ls">	
    <!-- Contact Form -->
	<div class="container">	
		<div class="col-md-12">
			<h3 class="text-center" data-aos="flip-up">Envianos Un Mensaje</h3>
			<form action="" method="post" name="sentMessage" id="contactForm" novalidate>
                <div class="control-group form-group" data-aos="flip-up">
                    <div class="controls">
                        <label>Full Name:</label>
                        <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group" data-aos="flip-up">
                    <div class="controls">
                        <label>Phone Number:</label>
                        <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                    </div>
                </div>
                <div class="control-group form-group" data-aos="flip-up">
                    <div class="controls">
                        <label>Email Address:</label>
                        <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                    </div>
                </div>
				<div class="control-group form-group" data-aos="flip-up">
                    <div class="controls">
						<label>Message:</label>
                        <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                    </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" class="btn btn-primary" data-aos="flip-up">Send Message</button>
            </form>
		</div>
	</div>
</section>	
<section class="last-w3layouts">
	<div class="container">
		<a href="index.html" class="bottom-agile"><h2 class="text-center">NexusBike</h2></a>
		<p class="text-center">Jean Pierre Agudelo & Juan Nicolas Mu??oz<br>
			<a href="mailto:jean.agudelo@upb.edu.co">jean.agudelo@upb.edu.co</a> ||  <a href="mailto:juann.ruiz@upb.edu.co">juann.ruiz@upb.edu.co</a><br>
			&copy; 2017 Bike Race. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank"> W3layouts </a></p>
	</div>	
</section>
<!-- last section -->
<!-- back to top -->
<a href="#0" class="cd-top">Top</a>
<!-- /back to top -->	
<!-- js files -->
<script type="text/javascript" src="js/navbar.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script src="js/top.js"></script> 
<script src="js/modernizr.min.js"></script>
<script src="js/index.js"></script>
<script src='js/aos.js'></script>
<script src="js/aos2.js"></script>
<!-- js for contact form -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>
<!-- //js for contact form -->		
<!-- /js files -->
</body>
</html>		