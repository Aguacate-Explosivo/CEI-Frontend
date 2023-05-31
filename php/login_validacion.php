<?php
    include("../conexion.php");
    $conexion = conectar();

    // Valores del formulario
    $user = $_POST['user'];
    $passwd = $_POST['password'];

    // Evitar inyección de SQL utilizando sentencias preparadas
    $consulta = "SELECT * FROM `datos` WHERE usuario=? AND contraseña=?";
    $stmt = mysqli_prepare($conexion, $consulta);
    mysqli_stmt_bind_param($stmt, "ss", $user, $passwd);
    mysqli_stmt_execute($stmt);

    // Validación
    $resultado = mysqli_stmt_get_result($stmt);
    $fila = mysqli_num_rows($resultado);

    if ($fila) {
        // Se inicia la sesión
        session_start();
        $_SESSION['user'] = $user;

        // Alerta de ingreso
        echo "<script language='JavaScript'>
              alert('Validación exitosa');
              location.href = '../dashboard/index.php';
              </script>";
    } else {
        echo "<script language='JavaScript'>
              alert('Error, verifique sus datos');
              location.href = '../login.php';
              </script>";
    }

    // Liberar recursos
    mysqli_stmt_close($stmt);
    mysqli_close($conexion);
?>
