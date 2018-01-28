<?php
/**
* 
*/
class Horario {

private $id_horario;
private $id_actividad;



public function __construct(){
   

}
public function setId($id_horario){
     $this->id_horario=$id_horario;
}
public function getId(){
	return $this->id_horario;
}
public function setIdActividad($var){
     $this->id_actividad=$var;
}
public function getIdActividad(){
	return $this->id_actividad;
}


}

?>
