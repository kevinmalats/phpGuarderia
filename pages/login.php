<!DOCTYPE html>
<html>


<head>
 <title>Login</title>
  
 
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
          <h1 class="brand"><a href="../index.html"><img src="../img/logo.jpg" class="logotipo">
           <nav class="pull-right nav-collapse collapse personality">
            <ul id="menu-main" class="nav">
            <li><a title ="Login" href="login.php">Login</a>
            </li>
            </ul>
            </nav>
          <!-- navigation -->
          <nav class="pull-right nav-collapse collapse">
            <ul id="menu-main" class="nav">
              <li><a title="acerca de " href="../pages/quienes_somos.html">Acerca de</a></li>
              <li><a title="servicios" href="../pages/Servicios.html">Servicios</a></li>
              <li><a title="guarderias" href="../pages/guarderias.html">Guarderías</a></li>
              <li><a title="blog" href="../pages/blog.html">Blog</a></li>
              <li><a title="contactenos" href="../pages/contactenos.html">Contáctenos</a></li>
              <li><a title="registro" href="registro.html">Regístrate con nosotros</a></li>
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
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="messages">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-forms">
      <input type="text" placeholder="username"/>
      <input type="password" placeholder="password"/>
      <button>login</button>
      <p class="messages">Not registered? <a href="registro.html">Create an account</a></p>
    </form>
  </div>
</div>
<script type="text/javascript">
  $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
</body>
</html>