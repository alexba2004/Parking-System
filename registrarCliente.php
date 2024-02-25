<?php
include 'conexion.php';
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$numero=$_POST['numero'];
$correo=$_POST['correo'];

$con="INSERT INTO cliente (nombre,direccion,telefono,correo) VALUES ('".$nombre."','".$direccion."','".$numero."','".$correo."')";

if($datos=mysqli_query($conexion,$con)){
    echo "Datos guardados correctamente";
} else {
    echo "Error, no se guardo correctamente";
}
?>