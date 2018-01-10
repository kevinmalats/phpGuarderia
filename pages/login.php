<!DOCTYPE html>
<html>

<head>
 <title>Inicie Sesión</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="php" content="proyecto_pws">
 
  <link href="../css/bootstrap-responsive.css" rel="stylesheet">  
  <!---estilo de colores -->
    <link href="../css/style.css" rel="stylesheet">
    <!-- efectos -->
  <link href="../color/default.css" rel="stylesheet">
  <link rel="shortcut icon" href="../img/icono.gif">
  <link href="../css/login.css" rel="stylesheet">

</head>
<body>
<div class="navbar-wrapper">
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <!-- Responsive navbar -->
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
        </a>
          <a href="../index.html"><img src="../img/logo.gif" class="logotipo" alt=""></a>
           
          <!-- navigation -->
          <nav class="pull-right nav-collapse collapse">
            <ul id="menu-main" class="nav">
              <li><a title="acerca de " href="../pages/quienes_somos.html">Acerca de</a></li>
              <li><a title="servicios" href="../pages/Servicios.html">Servicios</a></li>
              <li><a title="guarderias" href="../pages/guarderias.html">Guarderías</a></li>
              <li><a title="blog" href="../pages/blog.html">Blog</a></li>
              <li><a title="contactenos" href="../pages/contactenos.html">Contáctenos</a></li>
              <li><a title ="Login" href="login.php">Login</a>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
    
<div class="login-pages">
  <div class="forms">
    <form class="register-forms">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      
      <button>create</button>
      <p class="messages">ya estás registrado? <a href="#">Inicia Sesión</a></p>
    </form>
    <form class="login-forms">
      <input type="text" placeholder="username"/>
      <input type="password" placeholder="password"/>
      <button>login</button>
      <p class="messages">No estás registrado? <a href="registro.html">Crea una cuenta</a></p>
    </form>
  </div>
</div>

    <!-- 
    <script type="text/javascript">
        $('.message a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
    </script>
    -->
    
   
    
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