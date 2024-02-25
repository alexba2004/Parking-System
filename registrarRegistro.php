<?php
include 'conexion.php';
$idVehiculo=$_POST['id_vehiculo'];
$idCajon=$_POST['id_Cajon'];
$idtarifa=$_POST['idtarifa'];
$idencargado=$_POST['id'];
date_default_timezone_set("America/Mexico_city");
$fechaini= date("Y-m-d");
$horaini = date("H:i:s");


$sql = "INSERT INTO registro(id_vehiculo, id_cajon, fechaIngreso, horaIngreso, id_tarifa, id_encargado) VALUES ('".$idVehiculo."','".$idCajon."','".$fechaini."','".$horaini."','".$idtarifa."','".$idencargado."')";
if($datos = mysqli_query($conexion,$sql)){
    $query="UPDATE";
}


?>