<?php
include 'conexion.php';
$idvehiculo = $_POST["id_vehiculo"];

$sql = "DELETE FROM vehiculo WHERE id_vehiculo='".$idvehiculo."'";

if($datos =mysqli_query($conexion, $sql)){
    echo "Vehiculo eliminado correctamente";

}else {
    echo "Error al eliminar vehiculo";
}
?>