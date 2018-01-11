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
<style >
	.logotipo {
		width: 120px;
		height: 110px;
		position: left;
	}
</style>
	<!-- navbar -->
	<div class="navbar-wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<!-- Responsive navbar -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>
					<h1 class="brand"><a href="../index.php"><img src="../img/logo.jpg" class="logotipo"></a></h1>
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
	<!-- end spacer section -->
	<!-- section: blog -->
	
    
    <section id="works" class="section">
		<div class="container clearfix">
			<h4>Nuestras Guarderías</h4>
			<!-- portfolio filter -->
			<div class="row">
				<div id="filters" class="span12">
					<ul class="clearfix">
						<li>
							<a href="#" data-filter="*" class="active">
								<h5>Todas</h5>
							</a>
						</li>
						<li>
							<a href="#" data-filter=".web">
								<h5>Alborada</h5>
							</a>
						</li>
						<li>
							<a href="#" data-filter=".print">
								<h5>Sauces</h5>
							</a>
						</li>
						<li>
							<a href="#" data-filter=".design">
								<h5>Urdesa</h5>
							</a>
						</li>
						<li>
							<a href="#" data-filter=".photography">
								<h5>Via a la Costa</h5>
							</a>
						</li>
					</ul>
				</div>
				<!-- END PORTFOLIO FILTERING -->
			</div>
			<div class="row">
				<div class="span12">
					<div id="portfolio-wrap">
						<!-- portfolio item -->
						<div class="portfolio-item grid print photography">
							<div class="portfolio">
								<a href="../img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="../img/works/1.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Centro de Estimulación Chiquitines</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid print design web">
							<div class="portfolio">
								<a href="../img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="../img/works/2.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Centro de la Tía Laura</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid print design">
							<div class="portfolio">
								<a href="../img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="../img/works/3.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Huellitas del mañana</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid photography web">
							<div class="portfolio">
								<a href="../img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="../img/works/4.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Huellitas del Saber</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid photography web">
							<div class="portfolio">
								<a href="../img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="../img/works/5.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Centro de aprendizaje LOLA</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid photography web">
							<div class="portfolio">
								<a href="../img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="../img/works/6.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Baby Tia Clara</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid photography web">
							<div class="portfolio">
								<a href="../img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="../img/works/7.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Jardin y Guarderia Pequeñines</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid photography">
							<div class="portfolio">
								<a href="../img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="../img/works/8.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Genios del Mañana</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid photography web">
							<div class="portfolio">
								<a href="../img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="../img/works/9.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Cosquillitas de felicidad</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid design web">
							<div class="portfolio">
								<a href="../img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="../img/works/10.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Aprendamos Jugando</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- spacer section -->

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
