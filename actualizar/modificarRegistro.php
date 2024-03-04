<?php
include '../conexion.php';
$id_registro= $_POST['id_registro'];
$id_vehiculo = $_POST['id_vehiculo'];
$id_cajon = $_POST['id_cajon'];
$id_tarifa = $_POST['id_tarifa'];
date_default_timezone_set('America/Mexico_City');           
$fecha_ingreso = date("Y-m-d");
$hora_ingreso = date("H:i:s");


$stmt =$conexion->prepare( "UPDATE registro SET id_vehiculo = '".$id_vehiculo."', id_cajon = '".$id_cajon."', fecha_ingreso = '".$fecha_ingreso."', hora_ingreso = '".$hora_ingreso."' ,id_tarifa = '".$id_tarifa."' WHERE id_registro ='".$id_registro."'");

$result = $stmt->execute();
if ($result) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conexion->close();
?>