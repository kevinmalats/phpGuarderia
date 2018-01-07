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
	<link href="../css/bootstrap-responsive.css" rel="stylesheet">  
	<!---estilo de colores -->
    <link href="../css/style.css" rel="stylesheet">
    <!-- efectos -->
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
					<!-- navigation -->
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
	<section id="about" class="section">
		<div class="container">
			<h4>Quienes Somos</h4>
			<div class="row">
				<div class="span4 offset1">
					<div>
						<h2><strong>Seguridad</strong> <strong>y Monitoreo</strong></h2>
						<p>
							Somos una empresa, radicada en la ciudad de Guayaquil con 3 años de experiencia en diseño de tecnología web, aplicativos móviles y tecnología streaming; que ahora desea aplicar su experiencia en el área de monitoreo y seguridad en Instituciones Educativas para infantes menores a 3 años, tratando de esta manera aumentar los índices de confianza y precaución a la hora de contratar estos servicios por los padres de familia y de disminuir los índices de maltrato y malas prácticas que se suelen dar en estos establecimientos no regulados legalmente.
						</p>
					</div>
				</div>
				<div class="span6">
					<div class="aligncenter">
						<img src="../img/icons/creativity.png" alt="" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span2 offset1 flyIn">
					<div class="people">
						<img class="team-thumb img-circle" src="../img/team/img-1.jpg" alt="" />
						<h3>Kevin M.</h3>
						<p>
							<strong>Gerente</strong>
						</p>
					</div>
				</div>
				<div class="span2 flyIn">
					<div class="people">
						<img class="team-thumb img-circle" src="../img/team/img-2.jpg" alt="" />
						<h3>Darwin V.</h3>
						<p>
							<strong>Director Técnico</strong>
						</p>
					</div>
				</div>
				<div class="span2 flyIn">
					<div class="people">
						<img class="team-thumb img-circle" src="../img/team/img-3.jpg" alt="" />
						<h3>David R.</h3>
						<p>
							<strong>Monitoreo</strong>
						</p>
					</div>
				</div>
				<div class="span2 flyIn">
					<div class="people">
						<img class="team-thumb img-circle" src="../img/team/img-4.jpg" alt="" />
						<h3>Liseth O.</h3>
						<p>
							<strong>Analista</strong>
						</p>
					</div>
				</div>
				<div class="span2 flyIn">
					<div class="people">
						<img class="team-thumb img-circle" src="../img/team/img-5.jpg" alt="" />
						<h3>Diego C.</h3>
						<p>
							<strong>Supervisor de Area</strong>
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->
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
	<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
	<script src="../js/jquery.js"></script>
	<script src="../js/jquery.scrollTo.js"></script>
	<script src="../js/jquery.nav.js"></script>
	<script src="../js/jquery.localScroll.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/jquery.prettyPhoto.js"></script>
	<script src="../js/isotope.js"></script>
	<script src="../js/jquery.flexslider.js"></script>
	<script src="../js/inview.js"></script>
	<script src="../js/animate.js"></script>
	<script src="../js/custom.js"></script>
	<script src="../contactform/contactform.js"></script>

</body>

</html>
