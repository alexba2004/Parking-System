<?php
include "conexion.php";

$angulo = $_GET["angulo"];

date_default_timezone_set('America/Mexico_City');           
$fecha = date("Y-m-d");
$hora = date("H:i:s");
$query = "INSERT INTO angulo_servomotor (angulo, fecha, hora) VALUES ('$angulo', '$fecha', '$hora')";

if(mysqli_query($conexion, $query)) {
    echo "Datos del ángulo insertados correctamente.";
} else {
    echo "Error al insertar los datos del ángulo: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
