<?php
include 'conexion.php';
$idcliente = $_POST["id_cliente"];

$sql = "DELETE FROM cliente WHERE id_cliente='".$idcliente."'";

if($datos =mysqli_query($conexion, $sql)){
    echo "Cliente eliminado correctamente";
}else {
    echo "Error al eliminar cliente";
}
?>