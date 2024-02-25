<?php
include 'conexion.php';
$tarifa=$_POST['tarifa'];
$monto=$_POST['monto'];


$con="INSERT INTO tarifa (tarifa,monto) VALUES ('".$tarifa."','".$monto."')";

if($datos=mysqli_query($conexion,$con)){
    echo "Datos guardados correctamente";
} else {
    echo "Error, no se guardo correctamente";
}
?>