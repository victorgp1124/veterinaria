<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM detalle_historia_clinica  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../vistas/admin/index.php");
    }
?>
