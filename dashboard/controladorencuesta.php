<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Procesando Curso</title>
</head>
<body>  
<?php
  // Verificar si se recibió una solicitud POST
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar y filtrar la URL ingresada
    $url = filter_input(INPUT_POST, 'link', FILTER_SANITIZE_URL);

    // Verificar si la URL es válida
    if (filter_var($url, FILTER_VALIDATE_URL)) {
      // Incluir el archivo de conexión a la base de datos
      require_once('../conexion.php');
      $conexion = conectar();

      // Preparar la consulta con sentencias preparadas para mayor seguridad
      $consulta = "INSERT INTO encuesta (url) VALUES (?)";
      $stmt = mysqli_prepare($conexion, $consulta);
      mysqli_stmt_bind_param($stmt, 's', $url);

      // Ejecutar la consulta
      if (mysqli_stmt_execute($stmt)) {
        echo "<script>
          Swal.fire({
            icon: 'success',
            title: 'Se ha agregado la encuesta exitosamente',
            showConfirmButton: false,
          });
          setTimeout(function() {
            location.assign('DashEncuentas.php');
          }, 2500);
        </script>";
      } else {
        echo "<script>
          Swal.fire({
            icon: 'error',
            title: 'Error al agregar la encuesta',
            text: 'Por favor, inténtalo de nuevo',
            showConfirmButton: false,
          });
          setTimeout(function() {
            history.back();
          }, 2500);
        </script>";
      }

      // Cerrar la conexión y liberar los recursos
      mysqli_stmt_close($stmt);
    } else {
      echo "<script>
        Swal.fire({
          icon: 'error',
          title: 'URL inválida',
          text: 'Por favor, ingresa una URL válida',
          showConfirmButton: false,
        });
        setTimeout(function() {
          history.back();
        }, 2500);
      </script>";
    }
  } else {
    // Si no se recibió una solicitud POST, redirigir a la página adecuada
    header('Location:DashEncuentas.php');
    exit();
  }
?>
</body>
</html>

