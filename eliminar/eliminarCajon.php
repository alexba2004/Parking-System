<?php
include '../conexion.php';

$id_cajon = $_POST['id_cajon'];
$stmt = $conexion->prepare("DELETE FROM cajones WHERE id_cajon='".$id_cajon."'");
// $stmt->bind_param("ss", $tarifa, $monto);
$result = $stmt->execute();
if ($result) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conexion->close();

?>
