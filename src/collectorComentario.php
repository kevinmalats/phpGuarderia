<?php

include_once('comentario.php');
include_once('database/collector.php');

class ComentarioCollector extends Collector
{
  
  function showComentarios() {
    $rows = self::$db->getRows("SELECT * FROM comentario ");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Comentario();
      $aux->setId($c{'id_comentario'});
      $aux->setDescripcion($c{'descripcion'});
      $aux->setUsuario($c{'informacion_usuario_id_usuario'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
  

function showComentario($id) {
    $rows = self::$db->getRows("SELECT * FROM comentario where id_comentario= ? ", array ("{$id}"));        
$ObjComentario= new Comentario($rows[0]{'id_comentario'},$rows[0]{'descripcion'},$rows[0]{'informacion_usuario_id_usuario'});
    
    return $ObjComentario;        
  }


function ComentarioXUsuario($id){
  require_once("usuario.php");
  $sql="SELECT u.id_usuario, u.nombre, u.password, u.perfil FROM comentario c join informacion_usuario i on c.informacion_usuario_id_usuario= i.id_usuario join 
usuario u on i.usuario_id_usuario= u.id_usuario where c.id_comentario= ?";
  $valor=self::$db->getRows($sql, array("{$id}"));
    $aux= new Usuario();
    $aux->setId($valor[0]{"id_usuario"});
    $aux->setNombre($valor[0]{"nombre"});
     $aux->setPerfil($valor[0]{"perfil"});
    $aux->setPassword($valor[0]{"password"});
    
    
   return$aux;
}
function updateComentario($id_comentario,$descripcion, $usuario) {
    $insertrow = self::$db->updateRow("UPDATE public.comentario SET descripcion = ?, informacion_usuario_id_usuario = ? where id_comentario= ? ", array ("{$descripcion}","{$usuario}",$id_comentario));

}
function deleteComentario($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.comentario where id_comentario= ? ", array ("{$id}"));

}
function insertComentario($descripcion, $usuario) {
    $rows = self::$db->insertRow("INSERT INTO public.comentario(descripcion, informacion_usuario_id_usuario) VALUES (?,?)", array ("{$descripcion}","{$usuario}"));             
  }





}
?>
