<?php
include 'conexion.php';
$idcajon = $_POST["id_cajon"];

$sql = "DELETE FROM cajon WHERE id_cajon='".$idcajon."'";

if($datos =mysqli_query($conexion, $sql)){
    echo "Cajon eliminado correctamente";

}else {
    echo "Error al eliminar";
}
?>