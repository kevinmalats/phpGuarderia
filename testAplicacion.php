<?php
final class TestAplicacion{
	function testAdmin(){
	session_start();
	if ( $_SESSION["perfil"]!= "admin"){
    header("location: ../index.php");
   }
}
}
?>