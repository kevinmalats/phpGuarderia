<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Servicios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="php" content="proyecto_pws">
	  
<link href="../css/bootstrap-responsive.css" rel="stylesheet">
	<!---estilo de colores 

    <!--- efectos -->
    <link href="../css/style.css" rel="stylesheet">
	<link href="../color/default.css" rel="stylesheet">
	<link rel="shortcut icon" href="../img/icono.gif">
	
</head>

<body>
	<!-- navbar -->
	<div class="navbar-wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<!-- Responsive navbar -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>
					<h1 class="brand"><a href="../index.php">Safe DayCare</a></h1>
					 
				 <nav class="pull-right nav-collapse collapse personality">
						<ul id="menu-main" class="nav">
						<?php
						if ($_SESSION){
						?>
						<li><a title ="Logout" href="logout.php">Logout</a>
						<?php
						}else{
						?>
						<li><a title ="Login" href="login.php">Login</a>
						<?
					}
					?>
						</li>
						</ul>
						</nav>
					<!-- navigation -->
					<nav class="pull-right nav-collapse collapse">
						<ul id="menu-main" class="nav">
							<li><a title="acerca de " href="../pages/quienes_somos.php">Acerca de</a></li>
							<li><a title="servicios" href="../pages/Servicios.php">Servicios</a></li>
							<li><a title="guarderias" href="../pages/guarderias.php">Guarderías</a></li>
							<li><a title="blog" href="../pages/blog.php">Blog</a></li>
							<li><a title="contactenos" href="../pages/contactenos.php">Contáctenos</a></li>
							<?php
						if ($_SESSION["perfil"]=="admin"){
						?>
						<li><a title ="Login" href="../admin/index.php">Administrar</a>
						<?php
						}
						?>
							<li><a title="registro" href="registro.php">Regístrate con nosotros</a></li>
	</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- Header area -->
	
	<!-- spacer section -->
	
	<!-- end spacer section -->
	<!-- section: team -->
	<section id="services" class="section orange">
		<div class="container">
			<h4>Servicios</h4>
			<!-- Four columns -->
			<div class="row">
				<div class="span3 animated-fast flyIn">
					<div class="service-box">
						<img src="../img/icons/monitoreo.png" alt="" />
						<h2><strong>Monitoreo</strong></h2>
						<p>
							A través de nuestros servicio de streaming, pueden monitorear las actividades de sus pequeños en las guarderías registradas.
						</p>
					</div>
				</div>
				<div class="span3 animated flyIn">
					<div class="service-box">
						<img src="../img/icons/localizacion.png" alt="" />
						<h2>Localización de Guardería</h2>
						<p>
							Puedes localizar a las guarderías o Instituciones educativas registradas en el sitio que estén cercanas a tu vivienda, trabajo o área de interés.
						</p>
					</div>
				</div>
				<div class="span3 animated-fast flyIn">
					<a href="registro-guarderia.html"><div class="service-box">
						<img src="../img/icons/registro.png" alt="" />
						<h2>Registro de Guarderías</h2>
						<p>
							Para las Instituciones que acceden a utilizar nuestra tecnología, les garantizamos un servicio de calidad el cual tiene como objetivo también mejorar el brindado por las Instituciones.
						</p>
					</div></a>
				</div>
				<div class="span3 animated-slow flyIn">
					<div class="service-box">
						<img src="../img/icons/seguridad.png" alt="" />
						<h2>Seguridad</h2>
						<p>
							Las guarderías e Instituciones registradas en nuestra base, se encuentran en total orden de cumplimiento con todas las normas y reglas para su funcionamiento y prestación de servicios..
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- end spacer section -->
	<!-- section: blog -->
	

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
							<a href="https://bootstrapmade.com/"><strong>Monitoreo y Seguridad</strong>  </a> 
						</div>
					</p>
				</div>
			</div>
        </div>
		
	</footer>
	

	
</body>

</html>
