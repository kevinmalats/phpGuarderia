<?php
session_start();
if ( $_SESSION["perfil"]!= "admin"){
	header("location: ../index.php");
}
if(isset($_POST)){
	require_once("../../src/collectorUsuario.php"); 
$objColl= new UsuarioCollector();
    
   $nombre=$_POST["nombre"];
   $password=$_POST["password"];
   $perfil=$_POST["perfil"];
$mensaje="Usuario creado exitosamente";
  $id_usuario=$objColl->insertUsuario($nombre, $password, $perfil);
  if($id_usuario==false){
  	$mensaje= "Usuario ya existente, utlice otro nombre";
  }
header("location: crear.php?mensaje= $mensaje");
}  
    
 ?>