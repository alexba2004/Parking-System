<?php
include '../conexion.php';

$id_registro = $_POST['id_registro'];
date_default_timezone_set('America/Mexico_City');           
$fecha_salida = date("Y-m-d");
$hora_salida = date("H:i:s");

$stmt = $conexion->prepare("UPDATE registro SET fecha_salida = '".$fecha_salida."', hora_salida = '".$hora_salida."' WHERE id_registro ='".$id_registro."'");
// $stmt->bind_param("ss", $tarifa, $monto);
$stmt2 = $conexion->prepare ("UPDATE cajon SET estatus = 0 WHERE id_cajon = (SELECT id_cajon FROM registro WHERE id_registro = '".$id_registro."')");
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

<!-- 
//id, descripcion, grados estatus -FDSBIFSDUHUFDSUH9SFHU9FSDHUFDSHU9FSHUFDSI VFOIOIDSFDNO>