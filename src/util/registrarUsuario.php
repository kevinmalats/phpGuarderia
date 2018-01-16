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
 //$foto_perfil=$_POST["foto_perfil"];
 $foto_perfil="img/perfil/";
 $correo=$_POST["correo"];

 //insert del usuario
 $objeCollectorUsu= new UsuarioCollector();
 $usuario_id_usuario=$objeCollectorUsu->insertUsuario($usuario, $password, $perfil);

//insert del telefono
 $objColleTelefono= new TelefonoCollector();
 $id_telefono=$objColleTelefono->insertTelefono($telefono);

//insert de la direccion
$objeColleDire= new DireccionCollector();
$id_direccion=$objeColleDire->insertDireccion($direccion);



//insert de la infromacion del usuario
 $objCollectorInfo= new InformacionUsuarioCollector();
 $objCollectorInfo->insertInfoUsuario($nombres, $apellidos, $foto_perfil, $correo, $id_telefono, $usuario_id_usuario, $id_direccion);
 
?>