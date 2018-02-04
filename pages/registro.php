<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Registrate</title>
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

	<!-- links bootstrap para subida de archivos¡-->
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
<link href="../css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../js/fileinput.min.js" type="text/javascript"></script>
 
	
</head>
<body>
	<div class="navbar-wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<!-- Responsive navbar -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>
					<a href="../index.php"><img src="../img/logo.gif" class="logotipo" alt=""></a>
                    
					<!-- navigation -->
					<nav class="pull-right nav-collapse collapse">
						<ul id="menu-main" class="nav">
							<li><a title="Quienes Somos" href="quienes_somos.php">Acerca de</a></li>
							<li><a title="Servicios" href="Servicios.php">Servicios</a></li>
							<li><a title="Guarderías" href="guarderias.php">Guarderías</a></li>
							<li><a title="Blog" href="blog.php">Blog</a></li>
							<li><a title="Contactenos" href="contactenos.php">Contáctenos</a></li>
						<?php
						
									
						if ($_SESSION){
						?>
						<li><a title ="Logout" href="logout.php">Logout</a></li>
						     <?php
							if ( $_SESSION["perfil"]=="admin"){
								?>
                          <li><a title="Administrar" href="../admin/index.php"><strong>Bienvenido:  </strong> <?php echo $_SESSION['nombre'];?></a></li>
						    <?php
					    }else{
					    	?>
					    	 <li class="noHover"><a title="Bienvenido" ><strong>Bienvenido:  </strong> <?php echo $_SESSION['nombre'];?></a></li>
					    	<?php
					    }
						}else{
						?>
						<li><a title ="Login" href="login.php">Login</a></li>
					<?php
                     }
					?>


						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- multistep form -->
<form id="msform" action="../src/util/registrarUsuario.php" method="post" enctype="multipart/form-data">
  <!-- progressbar -->
    
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Crea tu cuenta</h2>
    <input type="text" name="usuario" placeholder="Usuario" />
    <input type="password" name="password" placeholder="Contraseña" />
   <select name="perfil" required  class="form-control selectregistro">
          <option selected="true" disabled="disabled">Seleccione el perfil </option>
         <option value="admin">Admin</option> 
         <option value="padre">Padre</option>
        
         
      </select>
 
    <h2 id="infopersonal" class="fs-title">Información Personal</h2>
     <input type="text" name="correo" placeholder="Correo" />
    <input type="text" name="nombres" placeholder="Nombres" />
    <input type="text" name="apellidos" placeholder="Apellidos" />
    <label>Foto Perfil:</label>
       <input type="file" name="archivo" class="file">
         

    <input type="text" name="telefono" placeholder="Telefono" />
    <textarea name="direccion" placeholder="Dirección"></textarea>
    <input type="submit" name="submit" class="submit action-button" value="Enviar" />
  </fieldset>
</form>
    
	<?php
	if($_GET["mensaje"]){
		if($_GET["mensaje"]== "No deje campos vacios"){
			$color="rojo";
		}else{
			$color= "verde";
		}
		?>
		<div class="col-md-5 text-center"><p <?php echo "class='$color'"?>><?php echo $_GET["mensaje"];?></p></div>
		<?php
	}

?>
   
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
	<script>
$("#file-3").fileinput({
showCaption: false,
browseClass: "btn btn-primary btn-lg",
fileType: "any"
});
</script>
 
&nbsp;
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
					  Safe DayCare. Todos los Derechos Reservados.
					<p></p>	
                    <div class="credits">
							<p>Monitoreo y Seguridad  </p> 
				    </div>
				</div>
			</div>
        </div>
		
	</footer>
</html>
