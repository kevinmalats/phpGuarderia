<?php
 class Imagenes{
    private $id_imagen;
    private $descripcion;
    private $guarderia_id_guarderia;

public function __construct(){
   

}
public function setId($id){
	$this->id_imagen=$id;
}	
public function getId(){
	return $this->id_imagen;
}
public function setDescripcion($nombre){
	$this->descripcion=$nombre;

}
public function getDescripcion(){
	return $this->descripcion;
}
public function setGuarderia($nombre){
	$this->$guarderia_id_guarderia=$nombre;

}
public function getGuarderia(){
	return $this->$guarderia_id_guarderia;
}
}
?>