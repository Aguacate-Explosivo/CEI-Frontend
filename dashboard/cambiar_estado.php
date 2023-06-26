<?php
include("../conexion.php");
$conexion = conectar();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_POST['id'];
  $estado = $_POST['estado'];

  // Actualizar el estado en la base de datos
  $actualizar = "UPDATE `datos` SET `estado` = '$estado' WHERE `id` = '$id'";
  $resultado = mysqli_query($conexion, $actualizar);

  if ($resultado) {
    echo 'Estado actualizado correctamente';
  } else {
    echo 'Error al actualizar el estado';
  }
}
?>
