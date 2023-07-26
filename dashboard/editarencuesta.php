
 <!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Procesando Evento</title>
</head>
<body>  
<?php
include_once("sesion_validacion.php");
require_once('../conexion.php');
$conexion = conectar();
include("../log.php");

$id = $_POST['Id'];
$urlBaseDatos = $_POST['url'];

// Realizar el procesamiento o actualización en la base de datos según sea necesario
$consulta = "UPDATE encuesta SET url = '$urlBaseDatos', timestamp = CURRENT_TIMESTAMP WHERE Id = $id";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
    // Redirigir al usuario a la página deseada después de realizar la edición
     echo "<script>
   Swal.fire({
     icon: 'success',
     title: 'Dato Actualizado...',
     text: 'El dato se ha actualizado de forma correcta',
     showConfirmButton: false,
   });
    setInterval(()=>{
    location.assign('DashEncuentas.php');
    },1000);
   </script>";
   logAction("Actualizacion de Encuesta","El usuario ha actualizado la encuesta con el id: '$id', url: '$urlBaseDatos'"); 
} else {
    echo "Error al actualizar la encuesta.";
    logAction("Error al Actualizar la Encuesta","El usuario ha intentado actualizar la encuesta con el id: '$id', url: '$urlBaseDatos'"); 
}    
?>
</body>
</html>



