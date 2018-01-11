<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Registro de Guarderia</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="php" content="proyecto_pws">
    
<link href="../css/bootstrap-responsive.css" rel="stylesheet">
  <!---estilo de colores 
<link href="../css/bootstrap-responsive.css" rel="stylesheet">
  <!---estilo de colores 

    <!--- efectos -->
    <link href="../css/style.css" rel="stylesheet">
  <link href="../color/default.css" rel="stylesheet">
    <!--- efectos -->
    <link href="../css/estilo-guarderia.css" rel="stylesheet">
 
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
            <li><a title ="Login" href="login.php">Login</a>
            </li>
            </ul>
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

  
<div id="bg">

  <div class="module">
    
    <div class="container"><h2>Registrando Guarderia</h2></div>
    <form class="form">
      <input type="text" placeholder="Nombre de guarderia" class="textbox" />
      <input type="text" placeholder="Ciudad" class="textbox" />
      <input type="text" placeholder="Direccion" class="textbox" />
      <input type="text" placeholder="Telefono" class="textbox" />
      <input type="button" value="Guardar" class="button-guarderia" />
    </form>
  </div>
</div>
</body>
</html>