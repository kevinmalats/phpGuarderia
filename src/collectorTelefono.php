<?php

include_once('telefono.php');
include_once('database/collector.php');

class TelefonoCollector extends Collector
{
  
  function showTelefonos() {
    $rows = self::$db->getRows("SELECT * FROM telefono ");        
    $arrayTelefono= array();        
    foreach ($rows as $c){
      $aux = new Telefono();
      $aux->setId($c{'id_telefono'});
      $aux->setDescripcion($c{'descripcion'});
      array_push($arrayTelefono, $aux);
    }
    return $arrayTelefono;        
  }
  

function showTelefono($id) {
    $rows = self::$db->getRows("SELECT * FROM telefono where id_telefono= ? ", array ("{$id}"));        
$aux = new Telefono();
$aux->setId($c{'id_telefono'});
$aux->setDescripcion($c{'descripcion'});
    
    return $aux;        
  }


function updateTelefono($id_telefono,$descripcion) {
    $insertrow = self::$db->updateRow("UPDATE public.telefono SET descripcion = ? where id_telefono= ? ", array ("{$descripcion}",$id_telefono));

}
function deleteTelefono($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.telefono where id_telefono= ? ", array ("{$id}"));

}
function insertTelefono($descripcion) {
    
    $rows = self::$db->insertRow("INSERT INTO public.telefono(descripcion) VALUES (?) returning id_telefono", array ("{$descripcion}"));  

   return  $rows{"id_telefono"};         
  }

//funciones para combobox de denunciantes y autoridades


}
?>
