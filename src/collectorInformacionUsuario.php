<?php

include_once('inforusuario.php');
include_once('database/collector.php');

class InformacionUsuarioCollector extends Collector
{
  
  function showInfoUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM informacion_usuario ");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Informacion_usuario();
      $aux->setId($c{'id_usuario'});
      $aux->setNombres($c{'nombres'});
      $aux->setApellidos($c{'apellidos'});
      $aux->setCorreo($c{'correo'});
      $aux->setFotoPerfil($c{'foto_perfil'});
      $aux->setUsuario_idUasuario($c{'usuario_id_usuario'});
      $aux->setIdDireccion($c{'id_direccion'});
      $aux->setIdTelefono($c{'id_telefono'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
  

function showInfoUsuario($id) {
    $rows = self::$db->getRows("SELECT * FROM informacion_usuariowhere id_usuario= ? ", array ("{$id}"));        
 $aux = new Informacion_usuario();
      $aux->setId($c{'id_usuario'});
      $aux->setNombres($c{'nombres'});
      $aux->setApellidos($c{'apellidos'});
      $aux->setCorreo($c{'correo'});
      $aux->setFotoPerfil($c{'foto_perfil'});
      $aux->setUsuario_idUasuario($c{'usuario_id_usuario'});
      $aux->setIdDireccion($c{'id_direccion'});
      $aux->setIdTelefono($c{'id_telefono'});
    
    return $aux;        
  }



function updateInfoUsuario($id_usuario,$nombres, $apellidos,$foto_perfil ,$correo, $telefono, $usuario_id_usuario,$direccion) {
    $insertrow = self::$db->updateRow("UPDATE public.informacion_usuario SET nombres = ?, apellidos = ?, foto_perfil = ?, correo = ?, id_telefono = ?, usuario_id_usuario = ?,  id_direccion = ? where id_usuario= ? ", array ("{$nombres}","{$apellidos}","{$foto_perfil}","{$correo}","{$id_telefono}","{$usuario_id_usuario}","{$id_direccion}",$id_usuario));

}
function deleteInfoUsuario($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.informacion_usuario where id_usuario= ? ", array ("{$id}"));

}
function insertInfoUsuario($nombres, $apellidos,$foto_perfil ,$correo, $telefono, $usuario_id_usuario,$direccion) {
    $rows = self::$db->insertRow("INSERT INTO public.informacion_usuario(nombres, apellidos, foto_perfil, correo, id_telefono, usuario_id_usuario, id_direccion) VALUES (?,?,?,?,?,?,?)", array ("{$nombres}","{$apellidos}","{$foto_perfil}","{$correo}","{$telefono}","{$usuario_id_usuario}","{$direccion}"));             
  }



}
?>
