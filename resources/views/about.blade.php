<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>NexusBike</title>
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
<link href="css/pogo-slider.min.css" rel="stylesheet" type="text/css" media="all" />
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
				<li class="active current"><a id = "about"  href="/about">Acerca de</a></li>
				
            
            <li><a id="gallery" href="/gallery">Galeria</a></li>
            <li><a id="drivers" href="/drivers">Conductores</a></li>
				
				<li><a id="contact" href="/contact">Contact</a></li>
				<li><a id="registro" href="/registro">Registrarse</a></li>
          <li><a id="login" href="/login">Iniciar Sesi??n</a></li>
			</ul>
        </div><!--/.nav-collapse -->
	
			</form>
		</div>	
    </div>
</nav>
<!-- /navigation --> 
<!-- Page Content -->
<!-- header section -->
<section class="inner-w3ls">
    <div class="container">
		<h3 class="text-center" data-aos="zoom-in">Acerca de</h3>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb" data-aos="zoom-in">
                    <li><a href="index.html">Inicio</a>
                    </li>
                    <li class="active">Acerca de</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
	</div>
</section>	
<!-- /header section -->
<section class="about-w3layouts">
	<div class="container">
        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6" data-aos="flip-left">
                <div class="pogoSlider" id="js-main-slider">
					<div class="pogoSlider-slide" data-transition="blocksReveal" data-duration="1000"  style="background-image:url(images/about-pic1.jpg);background-position:center;"></div>
					<div class="pogoSlider-slide " data-transition="blocksReveal" data-duration="1000"  style="background-image:url(images/about-pic2.jpg);background-position:center;"></div>
					<div class="pogoSlider-slide " data-transition="blocksReveal" data-duration="1000"  style="background-image:url(images/about-pic3.jpg);background-position:center;"></div>
				</div>
            </div>
            <div class="col-md-6" data-aos="flip-right">
                <h3>Creaci??n</h3>
                <p>Esta Pag??na fue dise??ada con fines educativos por estudiantes de la Universidad pontificia bolivariana, el objetivo era crear una pagina 
					que sirviera como fuente de informaci??n y recomendaciones para cualquier persona que tenga un veh??culo o piensa adquirirlo. <br>
					
					
				</p>
				<p>Link a los repositorios de github de cada colaborador:</p>
				<a class="a-github" href="https://github.com/Nicobelicko">
				Juan Nicol??s Ruiz Mu??oz
			</a>
			<br>
			<br>
			<a class="a-github" href="https://github.com/Jean-Pierre-A">
				Jean Pierre Agudelo Taborda
			</a>
            </div>
        </div>
		<div>
			
		</div>
        <!-- /.row -->
	</div>
</section>
<section class="team-w3layouts">	
	<div class="container">
        <!-- Team Members -->
        <h3 class="text-center" data-aos="flip-up">Equipo</h3>
        <div class="col-md-4 col-sm-6 col-xs-6 text-center team-wthree" data-aos="zoom-in">
            <div class="grid cs-style-4">
				<div>
					<figure>
						<div><img src="images/team-pic1.jpg" alt="img05"></div>
						<figcaption>
							<h4>Juan Nicolas</h4>
							<p>Programador</p>
							<a data-toggle="modal" href="#team1" class="team-link" title="Click">Read More</a>
						</figcaption>
					</figure>
				</div>
			</div>	
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6 text-center team-wthree" data-aos="zoom-in">
            <div class="grid cs-style-4">
				<div>
					<figure>
						<div><img src="images/team-pic2.jpg.jpeg" alt="img05"></div>
						<figcaption>
							<h4>Jean Pierre</h4>
							<p>Dise??ador</p>
							<a data-toggle="modal" href="#team2" class="team-link" title="Click">Read More</a>
						</figcaption>
					</figure>
				</div>
			</div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6 text-center team-wthree" data-aos="zoom-in">
			<div class="grid cs-style-4">
				<div>
					<figure>
						<div><img src="images/team-pic3.jpg.jfif" alt="img05"></div>
						<figcaption>
							<h4>Compa??eros</h4>
							<p>Animadores</p>
							<a data-toggle="modal" href="#team3" class="team-link" title="Click">Read More</a>
						</figcaption>
					</figure>
				</div>
			</div>
        </div>
      
	<div class="modal fade" id="team1" tabindex="-1" role="dialog" aria-labelledby="team1" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Juan Nicolas Ruiz Mu??oz</h4>
				</div>
				<div class="modal-body">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="hover01 column">
							<div>
								<figure><img class="img-responsive" src="images/team-pic1.jpg" alt="w3layouts"></figure>
								<span>Programador</span>
							</div>
						</div>	
						<ul class="social-icons2">
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<p>Soy un estudiante de ingenieria en sistemas e inform??tica, actualmente cursando el 5to semestre en la Universidad Pontificia Bolivariana de Colombia. Cuando no me dedico al estudio hago ejercicio en un gimnasio y indago sobre temas que me llaman la atenci??n.</p> 
						
					</div>
					<div class="clearfix"></div>					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<div class="modal fade" id="team2" tabindex="-1" role="dialog" aria-labelledby="team2" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Jean Pierre Agudelo</h4>
				</div>
				<div class="modal-body">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="hover01 column">
							<div>
								<figure><img class="img-responsive" src="images/team-pic2.jpg" alt="w3layouts"></figure>
								<span>Director</span>
							</div>
						</div>
						<ul class="social-icons2">
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">

						<p></p> 
						<p>Phasellus ac velit quis nunc tempus iaculis. Etiam ac lectus ullamcorper massa luctus gravida. </p>

						<p>Soy un estudiante de ingenieria en sistemas e inform??tica, actualmente cursando el 5to semestre en la Universidad Pontificia Bolivariana</p> 
						<p>Apasionado por el dise??o y programaci??n mi objetivo es dar valor al trabajo y personas. </p>

					</div>
					<div class="clearfix"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	
</section>	
<!-- last section -->
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
<!-- js for team section -->
<script src="js/toucheffects.js"></script>
<!-- /js for team section -->
<!-- js for about section -->
<script src="js/jquery.pogo-slider.min.js"></script>
<script src="js/main.js"></script>
<!-- /js for about section -->
<!-- /js files -->
</body>
</html>	