<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$temperatura=$_POST['temperatura'];
$peso=$_POST['peso'];
$frecuencia_cardiaca=$_POST['frecuencia_cardiaca'];
$frecuencia_respiratoria=$_POST['frecuencia_respiratoria'];
$fecha_hora=date("d-m-Y h:i a");
$alimentacion=$_POST['alimentacion'];
$habitad=$_POST['habitad'];
$observacion=$_POST['observacion'];

$sql="UPDATE detalle_historia_clinica SET  temperatura='$temperatura',peso='$peso',frecuencia_cardiaca='$frecuencia_cardiaca',frecuencia_respiratoria='$frecuencia_respiratoria',
fecha_hora='$fecha_hora',alimentacion='$alimentacion',habitad='$habitad',observacion='$observacion' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../vistas/admin/index.php");
    }
?>