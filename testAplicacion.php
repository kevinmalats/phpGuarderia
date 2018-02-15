<?php
/*if ($_SESSION){     
        if ($_SESSION["perfil"]=="admin"){                
        }else{
            header("location:index.php"); 
        }                            
    }else{
        header("location:index.php");
    }
*/
final class TestAplicacion extends PHPUnit_Framework_TestCase{

function testAdmin(){
	session_start();
	if ( $_SESSION["perfil"]!= "admin"){
    header("location: ../index.php");
   }
}
      function testSession(){
      	session_start();
      	session_destroy();
      }

?>