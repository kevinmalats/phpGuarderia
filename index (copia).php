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
			
            <div class="navbar-inner">
				<div class="container mihover">
					<!-- Responsive navbar -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>
					<h1 class="brand"><a href="index.php">Safe DayCare</a></h1>
					<!-- navigation -->
					<nav class="pull-right nav-collapse collapse ">

						<ul id="menu-main" class="nav navbar">
							<li><a title="Quienes Somos" href="pages/quienes_somos.php">Acerca de</a></li>
							<li><a title="servicios" href="pages/Servicios.php">Servicios</a></li>
							<li><a title="Guarderías" href="pages/guarderias.php">Guarderías</a></li>
							<li><a title="blog" href="pages/blog.php">Blog</a></li>
							<li><a title="contactenos" href="pages/contactenos.php">Contáctenos</a></li>
						</ul>
						<ul id="menu-main" class="nav navbar-nav navbar-right">	
                       <?php
						
							
						if ($_SESSION){
						?>
						<li><a title ="Logout" href="pages/logout.php">Logout</a></li>
                         <?php
							if ( $_SESSION["perfil"]=="admin"){
								?>
                          <li><a title="Administrar" href="admin/index.php"><strong>Bienvenido:  </strong> <?php echo $_SESSION['nombre'];?></a></li>
						    <?php
					    }else{
					    	?>
					    	 <li class="noHover"><a title="Bienvenido" ><strong>Bienvenido:  </strong> <?php echo $_SESSION['nombre'];?></a></li>
					    	<?php
					    }
						}else{
						?>
						<li><a title ="Login" href="pages/login.php">Login</a></li> 

						<?php
					}
					?>



						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- Header area -->
	<div id="header-wrapper" class="header-slider">
		<header class="clearfix">
			<div class="logo">
				<img src="img/logo_babycare.gif" alt="logotipo" />
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
	
	<section class="spacer bg3">
	<h2>In</h2>
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
</body>	
	<footer>
		<div class="container">
			<div class="row">
				<div class="span6 offset3">
					<ul class="social-networks">
						<li><a href="http://www.instagram.com"><i class="icon-circled icon-bgdark icon-instagram icon-2x"></i></a></li>
						<li><a href="http://www.twitter.com"><i class="icon-circled icon-bgdark icon-twitter icon-2x"></i></a></li>
					</ul>
                    <p class="copyright"></p>
						&copy; Safe DayCare. Todos los Derechos Reservados.
					<p></p>	
                    <div class="credits">
							<p>Monitoreo y Seguridad  </p> 
				    </div>
				</div>
			</div>
        </div>
		
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

	</footer>



</html>
