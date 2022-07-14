<?php
include("conexion.php");
$con=conectar();

date_default_timezone_set("America/Bogota");

$temperatura=$_POST['temperatura'];
$peso=$_POST['peso'];
$frecuencia_cardiaca=$_POST['frecuencia_cardiaca'];
$frecuencia_respiratoria=$_POST['frecuencia_respiratoria'];
$fecha_hora=date("d-m-Y h:i a");
$alimentacion=$_POST['alimentacion'];
$habitad=$_POST['habitad'];
$observacion=$_POST['observacion'];

echo $observacion;

$sql="INSERT INTO detalle_historia_clinica VALUES('null','$temperatura','$peso','$frecuencia_cardiaca','$frecuencia_respiratoria',
'$fecha_hora','$alimentacion','$habitad','$observacion','null','null')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ../vistas/admin/index.php");
    
}else {
}
?>