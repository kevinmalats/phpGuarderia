<?php
require_once("../collectorUsuario.php");
require_once("../collectorInformacionUsuario.php");
require_once("../collectorTelefono.php");
require_once("../collectorDireccion.php");
 
 $usuario=$_POST["usuario"];
 $password=$_POST["password"];
 $perfil=$_POST["perfil"];
 $nombres=$_POST["nombres"];
 $apellidos=$_POST["apellidos"];
 $telefono=$_POST["telefono"];
 $direccion=$_POST["direccion"];
 $foto_perfil=$_POST["foto_perfil"];
 $correo=$_POST["correo"];

 //insert del usuario
 $objeCollectorUsu= new UsuarioCollector();
 $objeCollectorUsu->insertUsuario($usuario, $password, $perfil);

//insert del telefono
 $objColleTelefono= new TelefonoCollector();
 $objColleTelefono->insertTelefono($telefono);

//insert de la direccion
$objeColleDire= new DireccionCollector();
$objeColleDire->insertDireccion($direccion);



//insert de la infromacion del usuario
 $objCollectorInfo= new InformacionUsuarioCollector();
 $objCollectorInfo->insertInfoUsuario();
 
?>