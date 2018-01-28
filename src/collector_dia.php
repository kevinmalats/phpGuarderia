<?php

include_once('dia.php');
include_once('database/collector.php');

class DiaCollector extends Collector
{
  
  function showDias() {
    $rows = self::$db->getRows("SELECT * FROM dia_horario ");        
    $arrayDia= array();        
    foreach ($rows as $c){
      $aux = new Dia();
      $aux->setId($c{'id_dia'});
      $aux->setNombre($c{'nombre'});
      $aux->setHoraInicio($c{'hora_inicio'});
      $aux->setHoraFIn($c{'hora_fin'});
      $aux->setHorarioIdHorario($c{'horario_id_horario'});
      array_push($arrayDia, $aux);
    }
    return $arrayDia;        
  }
  
function updateDia($id_dia,$nombre, $horario_inicio, $horario_fin, $horario_id_horario) {
    $insertrow = self::$db->updateRow("UPDATE public.dia_horario SET nombre = ?, horario_inicio = ?, horario_fin = ? , horario_id_horario = ?, where id_dia= ? ", array ("{$nombre}","{$hora_inicio}","{$hora_fin}","{$hora_id_horario}",$id_dia));

}
function deleteDia($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.dia_horario where id_dia= ? ", array ("{$id}"));

}
function insertDia($nombre, $hora_inicio, $hora_fin, $horario_id_horario) {
    $rows = self::$db->insertRow("INSERT INTO public.dia_horario(nombre, horario_inicio, hora_fin, horario_id_horario) VALUES (?,?,?,?) returning id_dia", array ("{$nombre}","{$hora_inicio}","{$hora_fin}", "{$horario_id_horario}"));      
    return $rows{"id_dia"};      
  }


}
?>