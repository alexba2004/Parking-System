<?php
include 'conexion.php';
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$numero=$_POST['numero'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

$con="INSERT INTO empleados (nombre,direccion,telefono,correo,usuario,contrasena) VALUES ('".$nombre."','".$direccion."','".$numero."','".$correo."','".$usuario."','".$contrasena."')";

if($datos=mysqli_query($conexion,$con)){
    echo "Datos guardados correctamente";
} else {
    echo "Error, no se guardo correctamente";
}
?>