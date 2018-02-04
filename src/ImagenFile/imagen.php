<?php
/**
* 
*/
class Imagen {

private $id_imagen;
private $nombre ;



public function __construct(){
   

}
public function setId($id_imagen){
     $this->id_imagen=$id_imagen;
}
public function getId(){
	return $this->id_imagen;
}
public function setNombre($var){
     $this->nombre=$var;
}
public function getNombre(){
	return $this->nombre;
}


}

?>
