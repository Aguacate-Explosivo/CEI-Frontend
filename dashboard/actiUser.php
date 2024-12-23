<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener el ID del usuario y el nuevo estado desde la petición AJAX
    $id = $_POST['id'];
    $estado = $_POST['estado'];
    
    // Realizar la conexión a la base de datos
    require_once('../conexion.php');
    $conexion = conectar();
    include("../log.php");

  // Preparar la consulta de actualización
  $consulta = "UPDATE datos SET estado = ? WHERE id = ?";
  $stmt = mysqli_prepare($conexion, $consulta);
  mysqli_stmt_bind_param($stmt, "ii", $estado, $id);

  // Ejecutar la consulta
  if (mysqli_stmt_execute($stmt)) {
    // Actualización exitosa
    echo 'Estado actualizado correctamente';
    logAction("Actualizacion de estado de Usuario","Se ha actualizado el estado de un usuario con el id: '$id', estado: '$estado'");
  } else {
    // Error al actualizar
    echo 'Error al actualizar el estado';
    logAction("Actualizacion incorrecta de estado de Usuario","Se ha intentado actualizar el estado de un usuario con el id: '$id', estado: '$estado'");
  }

  // Cerrar la declaración y la conexión
  mysqli_stmt_close($stmt);
  mysqli_close($conexion);
}
?>
