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
					<h1 class="brand"><a href="../index.html">Safe DayCare</a></h1>
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
					</nav>				</div>
			</div>
		</div>
	</div>
	<!-- Header area -->
	<!-- end spacer section -->
	<!-- section: blog -->
	<section id="blog" class="section">
		<div class="container">
			<h4>Nuestro Blog</h4>
			<!-- Three columns -->
			<div class="row">
				<div class="span3">
					<div class="home-post">
						<div class="post-image">
							<img class="max-img" src="../img/blog/img1.jpg" alt="" />
						</div>
						<div class="post-meta">
							<i class="icon-file icon-2x"></i>
							<span class="date">Junio 19, 2013</span>
							<span class="tags"><a href="#">Design</a>, <a href="#">Blog</a></span>
						</div>
						<div class="entry-content">
							<h5><strong><a href="#">New design trends</a></strong></h5>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
							</p>
							<a href="#" class="more">Read more</a>
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="home-post">
						<div class="post-image">
							<img class="max-img" src="../img/blog/img2.jpg" alt="" />
						</div>
						<div class="post-meta">
							<i class="icon-file icon-2x"></i>
							<span class="date">June 19, 2013</span>
							<span class="tags"><a href="#">Design</a>, <a href="#">News</a></span>
						</div>
						<div class="entry-content">
							<h5><strong><a href="#">Retro is great</a></strong></h5>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
							</p>
							<a href="#" class="more">Read more</a>
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="home-post">
						<div class="post-image">
							<img class="max-img" src="../img/blog/img3.jpg" alt="" />
						</div>
						<div class="post-meta">
							<i class="icon-file icon-2x"></i>
							<span class="date">June 22, 2013</span>
							<span class="tags"><a href="#">Design</a>, <a href="#">Tips</a></span>
						</div>
						<div class="entry-content">
							<h5><strong><a href="#">Isometric mockup</a></strong></h5>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
							</p>
							<a href="#" class="more">Read more</a>
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="home-post">
						<div class="post-image">
							<img class="max-img" src="../img/blog/img4.jpg" alt="" />
						</div>
						<div class="post-meta">
							<i class="icon-file icon-2x"></i>
							<span class="date">June 27, 2013</span>
							<span class="tags"><a href="#">News</a>, <a href="#">Tutorial</a></span>
						</div>
						<div class="entry-content">
							<h5><strong><a href="#">Free icon set</a></strong></h5>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. &hellip;
							</p>
							<a href="#" class="more">Read more</a>
						</div>
					</div>
				</div>
			</div>
			<div class="blankdivider30"></div>
			<div class="aligncenter">
				<a href="#" class="btn btn-large btn-theme">More blog post</a>
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
