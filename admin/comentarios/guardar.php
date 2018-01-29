<?php

if(isset($_POST)){
	require_once("../../src/collectorComentario.php"); 
$objColl= new ComentarioCollector();
    
   $comentario=$_POST["comentario"];
   $usuario=$_POST["usuario"];
 

  $objColl->insertComentario($comentario, $usuario);
header("location: crear.php?mensaje= Se creó exitosamente");
}  
    
 ?>