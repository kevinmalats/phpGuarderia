<?php

include_once('Imagen.php');
include_once('database/collector.php');

class ImagenCollector extends Collector
{
  
  function showImagen() {
    $rows = self::$db->getRows("SELECT * FROM Imagen ");        
    $arrayImagen= array();        
    foreach ($rows as $c){
      $aux = new Imagen();
      $aux->setId($c{'id_imagen'});
      $aux->setNombre($c{'nombre'});
      array_push($arrayImagen, $aux);
    }
    return $arrayImagen;        
  }

function showImagen($id) {
    $rows = self::$db->getRows("SELECT * FROM Imagen where id_imagen= ? ", array ("{$id}"));        
$ObjImagen= new Imagen();
$ObjImagen->setId($rows[0]{'id_imagen'});
$ObjImagen->setNombre($rows[0]{'nombre'});
    
    return $ObjImagen;        
  }

function updateImagen($id_imagen,$nombre) {
    $insertrow = self::$db->updateRow("UPDATE public.imagen SET nombre = ? where id_imagen= ? ", array ("{$nombre}",$id_imagen));

}
function deleteImagen($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.imagen where id_imagen= ? ", array ("{$id}"));

}
function insertImagen($nombre) {
    $rows = self::$db->insertRow("INSERT INTO public.imagen(nombre) VALUES (?) returning id_imagen", array ("{$nombre}"));      
    return $rows{"id_imagen"} ;      
  }




}
?>
