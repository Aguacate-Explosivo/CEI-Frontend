<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Procesando Cursos</title>
</head>
<body>  

<?php
require_once('../conexion.php');
$conexion = conectar();
$id = $_POST['id']; // Obtener el identificador a eliminar

$consulta = "DELETE FROM datos WHERE id = ?";

if ($stmt = mysqli_prepare($conexion, $consulta)) {
    mysqli_stmt_bind_param($stmt, "i", $id);

    if (mysqli_stmt_execute($stmt)) {
        $filas_afectadas = mysqli_stmt_affected_rows($stmt);

        if ($filas_afectadas > 0) {
            echo "<script>
                console.log('se eliminó');
                Swal.fire({
                    icon: 'success',
                    title: 'Usuario eliminado',
                    text: 'Se ha eliminado de forma correcta',
                    showConfirmButton: false,
                });
                setTimeout(() => {
                    location.assign('DashUsuarios.php');
                }, 1000);
                </script>";
        } else {
            echo "<script>
                console.log('no se encontró el registro');
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'No se encontró el registro a eliminar',
                    showConfirmButton: false,
                });
                setTimeout(() => {
                    location.assign('DashUsuarios.php');
                }, 1000);
                </script>";
        }
    } else {
        echo "Error al ejecutar la consulta: " . mysqli_stmt_error($stmt);
        echo "Error de MySQL: " . mysqli_error($conexion);
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Error al preparar la consulta: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>

</body>
</html>
