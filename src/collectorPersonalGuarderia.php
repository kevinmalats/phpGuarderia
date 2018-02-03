<?php

include_once('personal_guarderia.php');
include_once('database/collector.php');

class PersonalGuarderiaCollector extends Collector
{
  
  function showPersonal() {
    $rows = self::$db->getRows("SELECT * FROM personal_guarderia ");        
    $arrayPersonalGuarderia= array();        
    foreach ($rows as $c){
      $aux = new PersonalGuarderia();
      $aux->setId($c{'id_personal'});
      $aux->setNombres($c{'nombres'});
      $aux->setApellidos($c{'apellidos'});
      $aux->setCargo($c{'cargo'});
      $aux->setGuarderiaIdGuarderia($c{'guarderia_id_guarderia'});    
      array_push($arrayPersonalGuarderia, $aux);
    }
    return $arrayPersonalGuarderia;        
  }
  
function updatePersonalGuarderia($nombres, $apellidos, $cargo, $guarderia_id_guarderia) {
    $insertrow = self::$db->updateRow("UPDATE public.personal_guarderia SET nombres = ?, apellidos = ?, cargo = ?, guarderia_id_guarderia = ?, where id_personal= ? ", array ("{$nombres}","{$apellidos}", "{$cargo}","{$guarderia_id_guarderia}", $id_personal));

}
function deletePersonalGuarderia($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.personal_guarderia where id_personal= ? ", array ("{$id}"));

}
function insertPersonalGuarderia($nombres, $apellidos, $cargo, $guarderia_id_guarderia) {
    $rows = self::$db->insertRow("INSERT INTO public.personal_guarderia(nombres, apellidos, cargo, guarderia_id_guarderia) VALUES (?,?,?,?) returning id_personal", array ("{$nombres}","{$apellidos}", "{$cargo}","{$guarderia_id_guarderia}"));      
    return $rows{"id_personal"};      
  }
}
?>