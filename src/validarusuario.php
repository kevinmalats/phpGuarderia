<?php
  //require_once("usuario.php");
  require_once("collectorUsuario.php");

 $nombre = $_POST["nombre"];
 $password =$_POST["password"];
 //echo "string";
  $objColector= new UsuarioCollector();
 echo $nombre;
 echo $password;
   $usuario=$objColector->consUsuario("$nombre","$password");
   if($usuario->getNombre() and $usuario->getPassword()){
   	echo "aceptado";
   }
  
  ?>