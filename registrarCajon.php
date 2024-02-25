<?php
include 'conexion.php';
$numero=$_POST['numero'];
$estatus=$_POST['estatus'];


$con="INSERT INTO cajon (numero,status) VALUES ('".$numero."','".$estatus."')";

if($datos=mysqli_query($conexion,$con)){
    echo "Datos guardados correctamente";
} else {
    echo "Error, no se guardo correctamente";
}
?>