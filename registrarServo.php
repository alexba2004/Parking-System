<?php
include 'conexion.php';
$descripcion=$_POST['descripcion'];
$grados=$_POST['grados'];
$status=$_POST['status'];


$con="INSERT INTO servo (descripcion,grados, status) VALUES ('".$descripcion."','".$grados."','".$status."')";

if($datos=mysqli_query($conexion,$con)){
    echo "Datos guardados correctamente";
} else {
    echo "Error, no se guardo correctamente";
}
?>