<?php

include_once('direccion.php');
include_once('database/collector.php');

class DireccionCollector extends Collector
{
  
  function showDireccion() {
    $rows = self::$db->getRows("SELECT * FROM direccion ");        
    $arrayDireccion= array();        
    foreach ($rows as $c){
      $aux = new Direccion();
      $aux->setId($c{'id_direccion'});
      $aux->setNombre($c{'nombre'});
      array_push($arrayDireccion, $aux);
    }
    return $arrayDireccion;        
  }

function showDireccion($id) {
    $rows = self::$db->getRows("SELECT * FROM direccion where id_direccion= ? ", array ("{$id}"));        
$ObjDireccion= new Direccion();
$ObjDireccion->setId($rows[0]{'id_direccion'});
$ObjDireccion->setNombre($rows[0]{'nombre'});
    
    return $ObjDireccion;        
  }

function updateDireccion($id_direccion,$nombre) {
    $insertrow = self::$db->updateRow("UPDATE public.direccion SET nombre = ? where id_direccion= ? ", array ("{$nombre}",$id_direccion));

}
function deleteDireccion($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.direccion where id_direccion= ? ", array ("{$id}"));

}
function insertDireccion($nombre) {
    $rows = self::$db->insertRow("INSERT INTO public.direccion(nombre) VALUES (?) returning id_direccion", array ("{$nombre}"));      
    return $rows{"id_direccion"} ;      
  }




}
?>
