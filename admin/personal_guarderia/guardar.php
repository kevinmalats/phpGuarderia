<?php

if(isset($_POST)){
	require_once("../../src/collectorPersonalGuarderia.php"); 
$objColl= new PersonalGuarderiaCollector();
    
   $nombre=$_POST["nombres"];
   $apellidos=$_POST["apellidos"];
   $cargo=$_POST["cargo"]; 
   $guarderia_id_guarderia=$_POST["guarderia_id_guarderia"];    

  $objColl->insertPersonalGuarderia($nombres, $apellidos$, $cargo, $guarderia_id_guarderia);
 header("location: crear.php?mensaje= Se creó exitosamente");
}
    
 ?>