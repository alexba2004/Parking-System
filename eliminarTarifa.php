<?php
include 'conexion.php';
$idtarifa = $_POST["id_tarifa"];

$sql = "DELETE FROM tarifa WHERE id_tarifa='".$idtarifa."'";

if($datos =mysqli_query($conexion, $sql)){
    echo "Tarifa eliminado correctamente";

}else {
    echo "Error al eliminar tarifa";
}
?>