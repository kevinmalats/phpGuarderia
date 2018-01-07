<?php
session_start();
?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Safe DayCare</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="php" content="proyecto_pws">
	<link href="../css/miestilo.css" rel="stylesheet">
	<link href="../css/bootstrap-responsive.css" rel="stylesheet">  
	<!---estilo de colores -->
    <link href="../css/style.css" rel="stylesheet">
    <!-- efectos -->
	<link href="../color/default.css" rel="stylesheet">
	<link rel="shortcut icon" href="../img/icono.gif">
	
</head>
<body>
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
	<!-- multistep form -->
<form id="msform">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Información Personal</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Crea tu cuenta</h2>
      <input type="text" name="email" placeholder="Email" />
    <input type="password" name="pass" placeholder="Password" />
    <input type="password" name="cpass" placeholder="Confirm Password" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  
  <fieldset>
    <h2 class="fs-title">Información Personal</h2>
    
    <input type="text" name="twitter" placeholder="Nombres" />
    <input type="text" name="facebook" placeholder="Apellidos" />
    <input type="text" name="gplus" placeholder="Telefono" />
    <textarea name="address" placeholder="Dirección"></textarea>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="submit action-button" value="Submit" />
  </fieldset>
</form>
<script  src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script  src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="../js/registro.js"></script>
	
</body>

</html>