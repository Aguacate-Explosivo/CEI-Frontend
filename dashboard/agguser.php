<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Procesando Cursos </title>
</head>
<body>  

<?php
require_once('../conexion.php');
$conexion = conectar();

$nombre = $_POST['nombreu'];
$correo = $_POST['correou'];
$psswwd = $_POST['psswd'];
$rol = $_POST['rolu'];

$consulta = "INSERT INTO datos VALUES (NULL, ?, ?, ?, ?, 0)";

if ($stmt = mysqli_prepare($conexion, $consulta)) {
    mysqli_stmt_bind_param($stmt, "ssss", $nombre, $correo, $psswwd, $rol);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>
            console.log('se envió');
            Swal.fire({
                icon: 'success',
                title: 'Nuevo usuario registrado',
                text: 'Se ha agregado de forma correcta',
                showConfirmButton: false,
            });
            setTimeout(() => {
                location.assign('DashUsuarios.php');
            }, 1000);
            </script>";
    } else {
        echo "Error al ejecutar la consulta: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Error al preparar la consulta: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>

</body>
</html>
