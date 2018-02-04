<?php
require_once("../collectorUsuario.php");
require_once("../collectorInformacionUsuario.php");
require_once("../collectorTelefono.php");
$dir_subida = "/var/www/html/phpGuarderia/img/perfil/";
$fichero_subido = $dir_subida.basename($_FILES['archivo']['name']."");
$foto_perfil=$_SERVER_DOCUMENT['root']."img/perfil/".basename($_FILES['archivo']['name']."");

echo '<pre>';
 if(is_uploaded_file($_FILES['archivo']['tmp_name'])) {
 	copy($_FILES['archivo']['tmp_name'], $fichero_subido);
                             
 $usuario=$_POST["usuario"];
 $password=$_POST["password"];
 $nombres=$_POST["nombres"];
 $apellidos=$_POST["apellidos"];
 $telefono=$_POST["telefono"];
 $perfil=$_POST["perfil"];
 $direccion=$_POST["direccion"];
 $correo=$_POST["correo"];
 if($usuario == "" || $password == "" || $perfil== "" || $nombres == "" || $apellidos == "" || $telefono== "" || $direccion == ""){
 	
 	$mensaje= "No deje campos vacios";
 	
 	 echo "<meta http-equiv='refresh' content='0;URL= ../../pages/registro.php?mensaje=$mensaje'>";

 }else{

 //insert del usuario
 $objeCollectorUsu= new UsuarioCollector();
 $usuario_id_usuario=$objeCollectorUsu->insertUsuario($usuario, $password, $perfil);

echo $usuario_id_usuario;
//insert de la informacion del usuario
 $objCollectorInfo= new InformacionUsuarioCollector();
 $id_usuario=$objCollectorInfo->insertInfoUsuario($nombres, $apellidos, $foto_perfil, $correo, $usuario_id_usuario, $direccion);
 //insert del telefono
 $objColleTelefono= new TelefonoCollector();
 $objColleTelefono->insertTelefono($telefono,$id_usuario);

 
 $mensaje= "Registro exitoso";
 echo "<meta http-equiv='refresh' content='0;URL= ../../pages/registro.php?mensaje=$mensaje'>";


//header("Location: ../../pages/registro.php?mensaje=$mensaje");
}

  
    }else
    print_r($_FILES);
 

?>