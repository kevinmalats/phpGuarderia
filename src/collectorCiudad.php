<?php

include_once('ciudad.php');
include_once('database/collector.php');

class CiudadCollector extends Collector
{
  
  function showCiudades() {
    $rows = self::$db->getRows("SELECT * FROM ciudad ");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Ciudad();
      $aux->setId($c{'id_ciudad'});
      $aux->setNombre($c{'descripcion'});
     
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
  
function showCiudad($id) {
    $rows = self::$db->getRows("SELECT * FROM ciudad where id_ciudad= ? ", array ("{$id}"));        
$ObjUsuario= new Ciudad();
$ObjUsuario->setId($rows[0]{'id_ciudad'});
$ObjUsuario->setNombre($rows[0]{'descripcion'});

    
    return $ObjUsuario;        
  }


function CiudadesDisponibles(){
  $rows = self::$db->getRows("SELECT u.id_usuario, u.nombre, u.password, u.perfil from usuario u  where NOT u.id_usuario in (select i.usuario_id_usuario from informacion_usuario i) ");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario();
      $aux->setId($c{'id_usuario'});
      $aux->setNombre($c{'nombre'});
      $aux->setPassword($c{'password'});
      $aux->setPerfil($c{'perfil'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;
}    
    
function updateCiudad($id_ciudad,$descripcion) {

      $insertrow = self::$db->updateRow("UPDATE public.ciudad SET descripcion = ? where id_ciudad= ? ", array ("{$descripcion}",$id_ciudad));

}

function deleteCiudad($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.ciudad where id_ciudad= ? ", array ("{$id}"));

}
function insertCiudad($descripcion) {
  
  $rows = self::$db->insertRow("INSERT INTO public.ciudad(descripcion) VALUES (?) returning id_ciudad", array ("{$descripcion}"));      
    return $rows{"id_ciudad"} ;      
    
  
  }




}
?>
