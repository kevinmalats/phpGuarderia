<?php

if(isset($_POST)){
	require_once("../../src/collectorTelefono.php"); 
$objColl= new TelefonoCollector();
    
   $telefono=$_POST["descripcion"];
   $usuario=$_POST["usuario"];

  $objColl->insertTelefono($telefono, $usuario);
 
header("location: crear.php?mensaje= Se creó exitosamente");
}  
    
 ?>