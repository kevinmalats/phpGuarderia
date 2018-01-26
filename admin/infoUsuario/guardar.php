<?php

if(isset($_POST)){
	require_once("../../src/collectorUsuario.php"); 
$objColl= new UsuarioCollector();
    
   $nombres=$_POST["nombres"];
   $apellidos=$_POST["apellidos"];
   $correo=$_POST["correo"];
   $id_usuario=$_POST["usuario"];
   

  //$objColl->insertUsuario($nombre, $password, $perfil);
 //header("location: crear.php?mensaje= Se creó exitosamente");
}
    
 ?>