<?php
include_once('horario.php');
include_once('database/collector.php');
class HorarioCollector extends Collector
{
  
  function showHorario() {
    $rows = self::$db->getRows("SELECT * FROM horario ");        
    $arrayHorario= array();        
    foreach ($rows as $c){
      $aux = new Horario();
      $aux->setId($c{'id_horario'});
      $aux->setIdActividad($c{'id_actividad'});
      array_push($arrayHorario, $aux);
    }
    return $arrayHorario;        
  }
  
function updateHorario($id_actividad,$id_horario) {
    $insertrow = self::$db->updateRow("UPDATE public.horario SET id_actividad = ?, where id_horario= ? ", array ("{$id_actividad}",$id_horario);
}
function deleteHorario($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.horario where id_horario= ? ", array ("{$id}"));
}
function insertHorario($id_actividad) {
   // $rows = self::$db->insertRow("INSERT INTO public.horario(id_actividad) VALUES (?) returning id_horario", array ("{$id_horario}","{$hora_inicio}","{$hora_fin}", "{$horario_id_horario}"));   
    $rows = self::$db->insertRow("INSERT INTO public.horario(id_actividad) VALUES (?) returning id_horario", array ("{$id_actividad}"));      
    return $rows{"id_horario"};      
  }
}
?>

