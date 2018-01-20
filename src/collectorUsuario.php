<?php

include_once('usuario.php');
include_once('database/collector.php');

class UsuarioCollector extends Collector
{
  
  function showUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
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
  

function showUsuario($id) {
    $rows = self::$db->getRows("SELECT * FROM usuario where id_usuario= ? ", array ("{$id}"));        
$ObjUsuario= new Usuario();
$ObjUsuario->setId($rows[0]{'id_usuario'});
$ObjUsuario->setNombre($rows[0]{'nombre'});
$ObjUsuario->setPassword($rows[0]{'password'});
$ObjUsuario->setPerfil($rows[0]{'perfil'});
    
    return $ObjUsuario;        
  }

function consUsuario($usuario, $contrasenia) {
    $rows = self::$db->getRows("SELECT * 
  FROM usuario WHERE nombre=? AND password=?  ", array ("{$usuario}","{$contrasenia}"));        
$ObjUsuario= new Usuario();
$ObjUsuario->setId($rows[0]{'id_usuario'});
$ObjUsuario->setNombre($rows[0]{'nombre'});
$ObjUsuario->setPassword($rows[0]{'password'});
$ObjUsuario->setPerfil($rows[0]{'perfil'});

    
    return $ObjUsuario;        
  }

function updateUsuario($id_usuario,$nombre, $password, $perfil) {
    $insertrow = self::$db->updateRow("UPDATE public.usuario SET nombre = ?, password = ?, perfil = ? where id_usuario= ? ", array ("{$nombre}","{$password}","{$perfil}",$id_usuario));

}
function deleteUsuario($id) {
    $sql="DELETE from informacion_usuario where usuario_id_usuario= ?";
    $deleterow = self::$db->deleteRow($sql, array ("{$id}"));
    $deleterow = self::$db->deleteRow("DELETE FROM public.usuario where id_usuario= ? ", array ("{$id}"));

}
function insertUsuario($usuario, $contrasenia, $tipousuario) {
    $rows = self::$db->insertRow("INSERT INTO public.usuario(nombre, password, perfil) VALUES (?,?,?) returning id_usuario", array ("{$usuario}","{$contrasenia}","{$tipousuario}"));      
    return $rows{"id_usuario"} ;      
  }

//funciones para combobox de denunciantes y autoridades

/*function showUD() {
    $rows = self::$db->getRows("SELECT * FROM usuario where tipousuario = 2");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idusuario'},$c{'usuario'},$c{'contrasenia'},$c{'tipousuario'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
  function showUA() {
    $rows = self::$db->getRows("SELECT * FROM usuario where tipousuario = 3");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idusuario'},$c{'usuario'},$c{'contrasenia'},$c{'tipousuario'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
*/



}
?>