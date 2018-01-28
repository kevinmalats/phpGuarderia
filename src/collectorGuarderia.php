<?php

include_once('guarderia.php');
include_once('database/collector.php');

class GuarderiaCollector extends Collector
{
  
  function showGuarderia() {
    $rows = self::$db->getRows("SELECT * FROM guarderia ");        
    $arrayGuarderia= array();        
    foreach ($rows as $c){
      $aux = new Guarderia();
      $aux->setId($c{'id_guarderia'});
      $aux->setNombre($c{'nombre'});
      $aux->setCiudadIdCiudad($c{'ciudad_id_ciudad'});
      array_push($arrayGuarderia, $aux);
    }
    return $arrayGuarderia;        
  }
  
function updateGuarderia($nombre,$ciudad_id_ciudad) {
    $insertrow = self::$db->updateRow("UPDATE public.guarderia SET nombre = ?, ciudad_id_ciudad = ?, where id_guarderia= ? ", array ("{$nombre}","{$ciudad_id_ciudad}", $id_guarderia));

}
function deleteGuarderia($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.guarderia where id_guarderia= ? ", array ("{$id}"));

}
function insertGuarderia($nombre, $ciudad_id_ciudad) {
    $rows = self::$db->insertRow("INSERT INTO public.guarderia(nombre, ciudad_id_ciudad) VALUES (?,?) returning id_guarderia", array ("{$nombre}","{$ciudad_id_ciudad}"));      
    return $rows{"id_guarderia"};      
  }
}
?>