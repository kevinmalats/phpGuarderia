<?php
session_start();
if ( $_SESSION["perfil"]!= "admin"){
    header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset ="utf-8">
<title>Editar Informacion de Usuario</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="../assets/css/miestilo.css" rel="stylesheet" >
</head>
<body>

<header>

</header>
<aside>

<?php

echo "<nav class='navbar navbar-default'>";
echo "<div class='container-fluid'>";
echo "<div class='navbar-header'><a class='navbar-brand'>Actualizar Usuario</a></div>";
echo "<ul class='nav navbar-nav'>";
echo "<li><a href='index.php'>Menú</a></li>";
echo "<li><a href='crear.php'>Nuevo</a></li>";
echo "</ul>";
echo "<ul class='nav navbar-nav navbar-right'>";
echo "<li><a href='#'>Hola:(" . $_SESSION ['nombre'] . ")</a></li>";
echo "<li><a href='../../pages/logout.php''><span class='glyphicon glyphicon-log-in'></span> Salir</a></li>";
echo "</ul>";
echo "</div>";
echo "</nav>";

require_once("../../src/collectorInformacionUsuario.php"); 
$objColl= new InformacionUsuarioCollector();
$usuario= new Informacion_usuario ();

$id=$_GET['id'];
    
$usuario=$objColl->showInfoUsuario($id);


?>

<form method= "POST" class="form-horizontal" action= "#" >
   
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Nombres:</label>
         <div class="col-xs-10 misopciones">
             <input name = "nombres" type="text" id= "nombres" class="form-control" placeholder="<?php echo $usuario->getNombres();?>" autofocus required/>
         </div>
     </div>
  <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Apellidos:</label>
         <div class="col-xs-10">
             <input name = "apellidos" type="text" id= "apellidos" class="form-control misopciones"
 placeholder="<?php echo $usuario->getApellidos();?>"  required/>
         </div>
     </div>
      <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Correo:</label>
         <div class="col-xs-10">
             <input name = "correo" type="text" id= "correo" class="form-control misopciones"
 placeholder="<?php echo $usuario->getCorreo();?>"  required/>
         </div>
     </div>
      <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Foto Perfil:</label>
         <div class="col-xs-10">
             <input name = "fotoperfil" type="text" id= "fotoperfil" class="form-control misopciones"
 placeholder="<?php echo $usuario->getFotoPerfil();?>"  required/>
         </div>
     </div>
    <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Direccion:</label>
         <div class="col-xs-10">
             <input name = "direccion" type="text" id= "direccion" class="form-control misopciones"
 placeholder="<?php echo $usuario->getIdDireccion();?>"  required/>
         </div>
     </div>

     <div class="form-group">
    
         <div class="col-xs-offset-2 col-xs-10">
             <button type="submit" class="btn btn-primary">Guardar</button>
         </div>
     </div>
</form>


<?php
if(isset($_POST["nombre"])|| isset($_POST["apellidos"]) || isset($_POST["correo"])|| isset($_POST["fotoperfil"])|| isset($_POST["direccion"])){
   
    $nombrenuevo=$_POST["nombre"];
    $passwordnuevo= $_POST["password"];
    $perfilnuevo= $_POST["perfil"];
    $objColl->updateInfoUsuario($id,$nombres, $apellidos,$foto_perfil ,$correo, $usuario_id_usuario,$direccion);
    header("location:index.php?mensaje=Edición correcta");
}
?>
</aside>
</body>
</html>