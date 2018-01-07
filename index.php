<?php
session_start();
?>


<!DOCTYPE HTML>

<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Safe DayCare</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="php" content="proyecto_pws">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">  
	<!---estilo de colores -->
    <link href="css/style.css" rel="stylesheet">
    <!-- efectos -->
	<link href="color/default.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/icono.gif">
	
</head>

<body>
	<!-- navbar -->
	<div class="navbar-wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
			
				<div class="container">
					<!-- Responsive navbar -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>
					<h1 class="brand"><a href="index.html">Safe DayCare</a></h1>
                      <nav class="pull-right nav-collapse collapse personality">
						<ul id="menu-main" class="nav">
						<?php
						if ($_SESSION){
						?>
						<li><a title ="Login" href="pages/logout.php">Logout</a>
						<?php
						}else{
						?>
						<li><a title ="Login" href="pages/login.php">Login</a>
						<?
					}
					?>

						</li>
						</ul>
						</nav>
					<!-- navigation -->
					<nav class="pull-right nav-collapse collapse">
						<ul id="menu-main" class="nav">
						
							<li><a title="acerca de" href="pages/quienes_somos.php">Acerca de</a></li>
							<li><a title="servicios" href="pages/Servicios.php">Servicios</a></li>
							<li><a title="guarderias" href="pages/guarderias.php">Guarderías</a></li>
							<li><a title="blog" href="pages/blog.php">Blog</a></li>
							<li><a title="contactenos" href="pages/contactenos.php">Contáctenos</a></li>
							<?php
						if ($_SESSION["perfil"]=="admin"){
						?>
						<li><a title ="Login" href="admin/index.php">Administrar</a>
						<?php
						}
						?>
						
							<li><a title ="registro" href="pages/registro.php">Regístrate</a></li>
						</ul>
					</nav>
				
			</div>
		</div>
	</div>
	<!-- Header area -->
	<div id="header-wrapper" class="header-slider">
		<header class="clearfix">
			<div class="logo">
				<img src="img/logo_babycare.gif" alt="" />
			</div>
			<div class="container">
				<div class="row">
					<div class="span12">
						<div id="main-flexslider" class="flexslider">
							<ul class="slides">
								<li>
									<p class="home-slide-content">
										<strong>cuidado</strong> y seguridad
									</p>
								</li>
								<li>
									<p class="home-slide-content">
										de tu bebe <strong></strong>
									</p>
								</li>
								<li>
									<p class="home-slide-content">
										Garantizamos <strong>su bienestar</strong>
									</p>
								</li>
							</ul>
						</div>
						<!-- end slider -->
					</div>
				</div>
			</div>
		</header>
	</div>
	<!-- spacer section 
	<section class="spacer green">
		<div class="container">
			<div class="row">
				<div class="span6 alignright flyLeft">
					<blockquote class="large">
						There's huge space beetween creativity and imagination <cite>Mark Simmons, Nett Media</cite>
					</blockquote>
				</div>
				<div class="span6 aligncenter flyRight">
					<i class="icon-coffee icon-10x"></i>
				</div>
			</div>
		</div>
	</section>
	<!-- end spacer section -->
	
	<!-- section: services -->
	
	<!-- end section: services -->
	<!-- section: works -->
	
	<section class="spacer bg3">
		<div class="container">
			<div class="row">
				<div class="span12 aligncenter flyLeft">
					<blockquote class="large">
                        Somos una empresa estabecida en la Ciudad de Guayaquil, con 3 años de experiencia en tecnología de monitoreo y streaming, somos tu mejor opción.
					</blockquote>
				</div>
				<div class="span12 aligncenter flyRight">
					<i class="icon-rocket icon-10x"></i>
				</div>
			</div>
		</div>
	</section>
	<!-- end spacer section -->
	
	<!-- section: contact -->
	
	<footer>
		<div class="container">
			<div class="row">
				<div class="span6 offset3">
					<ul class="social-networks">
						<li><a href="http://www.instagram.com"><i class="icon-circled icon-bgdark icon-instagram icon-2x"></i></a></li>
						<li><a href="http://www.twitter.com"><i class="icon-circled icon-bgdark icon-twitter icon-2x"></i></a></li>
					</ul>
					<p class="copyright">
						&copy; Safe DayCare. Todos los Derechos Reservados.
						<div class="credits">
							<a href="https://bootstrapmade.com/">Monitoreo y Seguridad  </a> 
						</div>
					</p>
				</div>
			</div>
        </div>
		
	</footer>
	<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.nav.js"></script>
	<script src="js/jquery.localScroll.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/isotope.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/inview.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>
	<script src="contactform/contactform.js"></script>

</body>

</html>
