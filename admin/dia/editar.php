<?php
session_start();
if ( $_SESSION["perfil"]!= "admin"){
    header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset ="utf-8">
<title>Editar Horario del día</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="../assets/css/miestilo.css" rel="stylesheet" >
</head>
<body>

<header>

</header>
<aside>

<?php

echo "<nav class='navbar navbar-default'>";
echo "<div class='container-fluid'>";
echo "<div class='navbar-header'><a class='navbar-brand'>Actualizar Dia</a></div>";
echo "<ul class='nav navbar-nav'>";
echo "<li><a href='index.php'>Atrás</a></li>";
echo "<li><a href='crear.php'>Nuevo</a></li>";
echo "</ul>";
echo "<ul class='nav navbar-nav navbar-right'>";
echo "<li><a href='#'>Hola:(" . $_SESSION ['nombre'] . ")</a></li>";
echo "<li><a href='../../pages/logout.php''><span class='glyphicon glyphicon-log-in'></span> Salir</a></li>";
echo "</ul>";
echo "</div>";
echo "</nav>";

require_once("../../src/collector_dia.php"); 
$objColl= new DiaCollector();
$dia= new Dia ();

$id=$_GET['id'];
    
$dia=$objColl->showDias($id);

?>

<form method= "POST" class="form-horizontal" action= "#" >
    
   <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Día:</label>
         <div class="col-xs-10">
             <input name = "nombre" type="text" id= "nombre" class="form-control misopciones"
                placeholder="<?php echo $dia->getNombre();?>"  required/>
         </div>
     </div>
    
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Hora Inicio:</label>
         <div class="col-xs-10">
             <input name = "hora inicio" type="text" id= "hora_inicio" class="form-control misopciones"
                placeholder="<?php echo $dia->getHoraInicio();?>"  required/>
         </div>
     </div>
    
    <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Hora Fin:</label>
         <div class="col-xs-10">
             <input name = "hora fin" type="text" id= "hora_fin" class="form-control misopciones"
                placeholder="<?php echo $dia->getHoraFin();?>"  required/>
         </div>
     </div>
     
    <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Código de horario:</label>
         <div class="col-xs-10">
             <input name = "codigo horario" type="text" id= "codigo_horario" class="form-control misopciones"
                placeholder="<?php echo $dia->getHorarioIdHorario();?>"  required/>
         </div>
     </div>

     

     <div class="form-group">
    
         <div class="col-xs-offset-2 col-xs-10">
             <button type="submit" class="btn btn-primary">Guardar</button>
         </div>
     </div>
</form>


<?php
if(isset($_POST["nombre"])|| isset($_POST["hora_inicio"]) || isset($_POST["hora_fin"]) || isset($_POST["codigo_horario"])){
   
    $nombrenuevo=$_POST["nombre"];
    $hora_inicionuevo= $_POST["hora_inicio"];
    $hora_finnuevo= $_POST["hora_fin"];
    $horario_id_horario= $_POST["codigo_horario"];
    $objColl->updateDia($id,$hora_inicionuevo, $hora_finnnuevo, $horario_id_horario);
    header("location:index.php?mensaje=Edición correcta");
}
?>
</aside>
</body>
</html>