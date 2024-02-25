<?php
include 'conexion.php';
$idempleado = $_POST["id_empleado"];

$sql = "DELETE FROM empleados WHERE id_empleado='".$idempleado."'";

if($datos =mysqli_query($conexion, $sql)){
    echo "Encargado eliminado correctamente";

}else {
    echo "Error al eliminar encargado";
}
?>