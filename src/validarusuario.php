<?php
  //require_once("usuario.php");
  require_once("collectorUsuario.php");
//phpinfo();
 $nombre = $_POST["nombre"];
 $password =$_POST["password"];
 //echo "string";
  $objColector= new UsuarioCollector();

   $usuario=$objColector->consUsuario("$nombre","$password");
   if($usuario->getNombre() and $usuario->getPassword()){
   	echo "aceptado";
   }
  
  ?>