<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Procesando Usuario</title>
</head>
<body>  
<?php
require_once('../conexion.php');
$conexion = conectar();
include("../log.php");

$id = $_GET['Id'];
$user = $_POST['nombrel'];
$email = $_POST['correol'];
$pass = $_POST['psswdl'];
$rol = $_POST['roll'];

$actualizacion = "UPDATE datos SET usuario = '$user', email = '$email', contrasena = '$pass', perfil = '$rol' WHERE Id = $id";
$resultado = mysqli_query($conexion, $actualizacion);

if ($resultado) {
     echo "<script>
   Swal.fire({
     icon: 'success',
     title: 'Dato Actualizado...',
     text: 'El dato se ha actualizado de forma correcta',
     showConfirmButton: false,
   });
    setInterval(()=>{
    location.assign('DashUsuarios.php');
    },1000);
   </script>";
   logAction("Actualizacion de Usuario","Se ha modificado al usuario: '$user', con el id: '$id'"); 
} else {
    echo "Error al actualizar la encuesta.";
    logAction("Error al Actualizar un usuario","Se ha intentado actualizar al usuario: '$user', con el id: '$id'"); 
}    
?>
</body>
</html>



