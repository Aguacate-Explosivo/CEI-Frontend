<?php
include_once("sesion_validacion.php");
require_once('../conexion.php');
$conexion = conectar();

$id = $_POST['Id'];
$urlBaseDatos = $_POST['url'];

// Realizar el procesamiento o actualización en la base de datos según sea necesario
$consulta = "UPDATE encuesta SET url = '$urlBaseDatos' WHERE Id = $id";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
    // Redirigir al usuario a la página deseada después de realizar la edición
    header("Location: DashEncuentas.php");
    exit;
} else {
    echo "Error al actualizar la encuesta.";
}
?>
