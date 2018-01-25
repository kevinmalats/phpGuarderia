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
    $rows = self::$db->getRows("SELECT * FROM informacion_usuario where id_usuario= ? ", array ("{$id}"));        
     $aux = new Informacion_usuario();
      $aux->setId($rows[0]{'id_usuario'});
      $aux->setNombres($rows[0]{'nombres'});
      $aux->setApellidos($rows[0]{'apellidos'});
      $aux->setCorreo($rows[0]{'correo'});
      $aux->setFotoPerfil($rows[0]{'foto_perfil'});
      $aux->setUsuario_idUasuario($rows[0]{'usuario_id_usuario'});
      $aux->setIdDireccion($rows[0]{'id_direccion'});
      $aux->setIdTelefono($rows[0]{'id_telefono'});
      
    
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

function telefonoXUsuario($id){
  require_once("telefono.php");
  $sql="SELECT t.id_telefono, t.descripcion FROM telefono t join informacion_usuario i on t.id_telefono= i.id_telefono where i.id_usuario= ?";
  $valor=self::$db->getRows($sql, array("{$id}"));
  $arrayTelefono=array();
  foreach ($valor as $telefono) {
    
    $aux= new Telefono();
    $aux->SetId($telefono{"id_telefono"});
    $aux->SetDescripcion($telefono{"descripcion"});
    echo $aux->getDescripcion();
     array_push($arrayTelefono, $aux);
   } 
   return$arrayTelefono;
}
function direccionXUsuario($id){
  require_once("direccion.php");
  $sql="SELECT d.id_direccion, d.descripcion FROM direccion d join informacion_usuario i on d.id_direccion= i.id_direccion where i.id_usuario= ?";
  $valor=self::$db->getRows($sql, array("{$id}"));
  $arrayDireccion=array();
  foreach ($valor as $direccion) {
    
    $aux= new Direccion();
    $aux->SetId($direccion{"id_direccion"});
    $aux->SetDescripcion($direccion{"descripcion"});
         array_push($arrayDireccion, $aux);
   } 
   return$arrayDireccion;
}

function usXUsuario($id){
  require_once("usuario.php");
  $sql="SELECT u.id_usuario, u.nombre FROM usuario u join informacion_usuario i on u.id_usuario= i.usuario_id_usuario where i.id_usuario= ?";
  $valor=self::$db->getRows($sql, array("{$id}"));
  $arrayUsu=array();
  foreach ($valor as $usuario) {
    
    $aux= new Usuario();
    
    $aux->SetId($usuario{"id_usuario"});
    $aux->SetDescripcion($usuario{"nombre"});
         array_push($arrayUsu, $aux);
   } 
   return$arrayUsu;
}
}
?>
