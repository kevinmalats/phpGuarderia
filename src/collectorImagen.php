<?php

include_once('imagen.php');
include_once('guarderia.php');
include_once('database/collector.php');

class ImagenCollector extends Collector
{
  
  function showImagen() {
    $rows = self::$db->getRows("SELECT * FROM imagen ");        
    $arrayImagen= array();        
    foreach ($rows as $c){
      $aux = new imagen();
      $aux->setId($c{'id_imagen'});
      $aux->setDescripcion($c{'descripcion'});
      $aux->setGuarderia($c{'guarderia_id_guarderia'});
      array_push($arrayImagen, $aux);
    }
    return $arrayImagen;        
  }
 
function insertImagen($descripcion,$guarderia){
 	  $rows = self::$db->insertRow("INSERT INTO public.imagen(descripcion,guarderia_id_guarderia) VALUES (?,?) returning id_imagen", array ("{$descripcion}","{$guarderia}"));      
    return $rows{"id_imagen"} ;      

}

function guarderiaDisponibles(){
  $rows = self::$db->getRows("SELECT id_guarderia, nombre from guarderia ");        
    $arrayGuarderia= array();        
    foreach ($rows as $c){
      $aux = new Guarderia();
      $aux->setId($c{'id_guarderia'});
      $aux->setNombre($c{'nombre'});
      array_push($arrayGuarderia, $aux);
    }
    return $arrayGuarderia;
}


}
?>
