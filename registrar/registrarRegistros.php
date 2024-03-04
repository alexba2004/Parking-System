<?php                                    
include '../conexion.php';
session_start();
$id_empleado=$_SESSION['id'];
$id_vehiculo = $_POST['id_vehiculo'];
$id_cajon = $_POST['id_cajon'];
$id_tarifa = $_POST['id_tarifa'];
date_default_timezone_set('America/Mexico_City');           
$fecha_ingreso = date("Y-m-d");
$hora_ingreso = date("H:i:s");
    



$stmt = $conexion->prepare("INSERT INTO registro (id_vehiculo, id_cajon,fecha_ingreso, hora_ingreso, id_empleado, id_tarifa) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $id_vehiculo, $id_cajon, $fecha_ingreso, $hora_ingreso, $id_empleado, $id_tarifa);

$stmt2 = $conexion->prepare("UPDATE cajon SET estatus = 1 WHERE id_cajon = ?");

$stmt2->bind_param("s", $id_cajon);

$result2 = $stmt2->execute();
$result = $stmt->execute();

if ($result && $result2) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conexion->close();
?>
