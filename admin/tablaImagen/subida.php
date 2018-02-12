<?php
// En versiones de PHP anteriores a la 4.1.0, debería utilizarse $HTTP_POST_FILES en lugar
// de $_FILES.
require_once("../../src/collectorImagen.php");
$dir_subida = "/var/www/html/phpGuarderia/img/";
$fichero_subido = $dir_subida.basename($_FILES['archivo']['name']."");
$descripcion=$_SERVER_DOCUMENT['root']."img/".basename($_FILES['archivo']['name']."");

echo '<pre>';
 if(is_uploaded_file($_FILES['archivo']['tmp_name'])) {
 	copy($_FILES['archivo']['tmp_name'], $fichero_subido);
                             
                                echo "<b>Subida correcta!. Datos:</b><br>"; 
echo $descripcion;                            
  $objColle= new ImagenCollector();
  $objColle->insertImagen($descripcion,4);
  echo "<a href='index.php'>Regresar</a>";

    }else
    print_r($_FILES);
    print_r($_FILES['error']);

//if (is_uploaded_file($_FILES['archivo']['tmp_name'])) {
//copy($_FILES['archivo']['tmp_name'], '/var/www/html/practica/imagenes/'.$_FILES['archivo']['name'].'');
//}
?>
