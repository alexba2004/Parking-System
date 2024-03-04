<?php
include "conexion.php"; 

$ldrValue = $_GET["ldrValue"];

date_default_timezone_set('America/Mexico_City');           
$fecha = date("Y-m-d");
$hora = date("H:i:s");

$query = "INSERT INTO luminosidad (valor, fecha, hora) VALUES ('$ldrValue', '$fecha', '$hora')";

if(mysqli_query($conexion, $query)) {
    echo "Datos insertados correctamente.";
} else {
    echo "Error al insertar los datos: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>