<?php
/**
* 
*/
class Direccion {

private $id_direccion;
private $nombre ;



public function __construct(){
   

}
public function setId($id_direccion){
     $this->id_direccion=$id_direccion;
}
public function getId(){
	return $this->id_direccion;
}
public function setNombre($var){
     $this->nombre=$var;
}
public function getNombre(){
	return $this->nombre;
}


}

?>
