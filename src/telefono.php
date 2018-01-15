<?php
/**
* 
*/
class Telefono {

private $id_telefono;
private $descripcion ;


public function __construct(){
   

}
public function setId($id_usuario){
     $this->id_telefono=$id_usuario;
}
public function getId(){
	return $this-->id_telefono;
}
public function setDescripcion($var){
     $this->descripcion=$var;
}
public function getDescripcion(){
	return $this->descripcion;
}


}

?>