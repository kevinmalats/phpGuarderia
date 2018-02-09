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
  
function updateHorario($id_actividad) {
    $insertrow = self::$db->updateRow("UPDATE public.horario SET id_actividad = ?, where id_horario= ? ", array ("{$id_actividad}",$id_actividad);

}
function deleteHorario($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.horario where id_horario= ? ", array ("{$id}"));

}
function insertHorario($id_actividad) {
    $rows = self::$db->insertRow("INSERT INTO public.horario(id_actividad) VALUES (?) returning id_horario", array ("{$id_horario}","{$hora_inicio}","{$hora_fin}", "{$horario_id_horario}"));      
    return $rows{"id_horario"};      
  }

                                      
function ActividadXHorario($id){
  require_once("actividad.php");
  $sql="SELECT u.id_actividad, u.descripcion FROM actividad u join horario i on u.id_= i.ciudad_id_ciudad where i.id_guarderia= ?";
  $valor=self::$db->getRows($sql, array("{$id}"));

$ciudad= new Ciudad();
$ciudad->SetId($valor[0]{"id_ciudad"});
$ciudad->SetNombre($valor[0]{"descripcion"});

   return$ciudad;
}  

}
?>