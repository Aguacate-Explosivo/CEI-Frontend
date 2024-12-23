<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validando Inicio de Sesion</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <?php
        // Se llama al archivo de conexión a la base de datos
        include("../conexion.php");
        $conexion = conectar();
        include("../log.php");
        
        // Valores del formulario
        $user = $_POST['user'];
        $passwd = $_POST['password'];
        
        // Consulta la base de datos
        $consulta="SELECT * FROM `datos` WHERE usuario='$user' and contrasena='$passwd' and estado = 1;";
        $resultado = mysqli_query($conexion, $consulta);
        
        // Validación
        $fila = mysqli_fetch_assoc($resultado);
        
        if ($fila) {

            // Depurar el perfil del usuario
            $auth_perfil = $fila['perfil'];
            // Generar un token único
            $token = uniqid();
            
            // Almacenar el token en el Local Storage del navegador
            echo "<script>
            localStorage.setItem('auth_token', '$token');
            localStorage.setItem('auth_perfil', '$auth_perfil');
            Swal.fire({
                icon: 'success',
                title: 'Datos Validos',
                text: 'Inicio de Sesion exitoso',
                showConfirmButton: false,
            })
            setInterval(()=>{
                location.assign('../dashboard/index.php');
            },2500)
            </script>";
            // Registro en el log
            logAction("Inicio de sesión", "El usuario '$user' inició sesión Correctamente.");
        } else {
            echo "<script language='JavaScript'>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Algo salió mal, revise sus credenciales',
                        showConfirmButton: false,
                      })
                      setInterval(()=>{
                          location.assign('../login.php');
                        },2500)
                        </script>";

                        // Registro en el log
                        logAction("Inicio de sesión", "El usuario '$user' Intentó iniciar sesión.");
                    }
            mysqli_free_result($resultado);
        ?>  
</body>
</html>

