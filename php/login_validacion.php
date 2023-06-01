<?php
    // Se llama al archivo de conexión a la base de datos
    include("../conexion.php");
    $conexion = conectar();

    // Valores del formulario
    $user = $_POST['user'];
    $passwd = $_POST['password'];

    // Consulta la base de datos
    $consulta="SELECT * FROM `datos` WHERE usuario='$user' and contrasena='$passwd';";
    $resultado = mysqli_query($conexion, $consulta);

    // Validación
    $fila = mysqli_fetch_assoc($resultado);

    if ($fila) {
        // Generar un token único
        $token = uniqid();

        // Almacenar el token en el Local Storage del navegador
        echo "<script>
                localStorage.setItem('auth_token', '$token');
              </script>";
        echo "<script>
              window.location.href = '../dashboard/index.php';
            </script>";
    } else {
        echo "<script language='JavaScript'>
        alert('Error, verifique sus datos');
        location.assign('../login.php');
        </script>";
    }
    mysqli_free_result($resultado);
?>
