<?php
require_once('../conexion.php');
$conexion = conectar();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$estado = $_POST['estado'];
$perfil = $_POST['perfil'];

$consulta = "UPDATE datos SET usuario = ?, email = ?, estado = ?, perfil = ? WHERE id = ?";

if ($stmt = mysqli_prepare($conexion, $consulta)) {
    mysqli_stmt_bind_param($stmt, "ssisi", $nombre, $correo, $estado, $perfil, $id);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>
            console.log('se envió');
            Swal.fire({
                icon: 'success',
                title: 'Usuario actualizado',
                text: 'Se ha actualizado correctamente',
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
