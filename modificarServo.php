<?php
include './conexion.php';
$id_servo = $_POST['id_servo'];
$descripcion = $_POST['descripcion'];
$grados = $_POST['grados'];
$status = $_POST['status'];


$stmt =$conexion->prepare( "UPDATE servo SET descripcion = '".$descripcion."', grados = '".$grados."', status = '".$status."' WHERE id_servo ='".$id_servo."'");

$result = $stmt->execute();
if ($result) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conexion->close();

?>