<?php

if(isset($_POST)){
	require_once("../../src/collectorDireccion.php"); 
$objColl= new DireccionCollector();
    
   $direccion=$_POST["direccion"];
   $guarderia=$_POST["guarderia"];

  $objColl->insertDireccion($direccion, $guarderia);
 
header("location: crear.php?mensaje= Se creó exitosamente");
}  
    
 ?>