<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Procesando Formatos</title>
</head>
<body>  
<?php
// Conexion con la base de datos
require_once('../conexion.php');
$conexion = conectar();

// Verificar si la conexión se realizó correctamente
if ($conexion) {
  // Valores del formulario
  $cedula = $_POST['cedula'];
  $nombre = $_POST['nombre'];

  // Obtener el contenido del archivo PDF
  $pdf_tmp_name = $_FILES['pdf']['tmp_name'];
  $pdf_content = file_get_contents($pdf_tmp_name);
  $pdf_size = $_FILES['pdf']['size'];

  // Verificar que se haya seleccionado un archivo PDF y que los campos estén presentes
  if ($pdf_size > 0 && !empty($cedula) && !empty($nombre)) {
    // Preparar la consulta SQL utilizando una sentencia preparada
    $consulta = "INSERT INTO formatos (nombre, cedula, pdf) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conexion, $consulta);

    // Vincular los parámetros con los valores, utilizando "b" para datos binarios
    mysqli_stmt_bind_param($stmt, "sss", $nombre, $cedula, $pdf_content);

    // Ejecutar la consulta
    $resultado = mysqli_stmt_execute($stmt);

    if ($resultado) {
      echo "<script>
        Swal.fire({
          icon: 'success',
          title: 'Dato agregado con éxito...',
          text: 'El dato se ha agregado correctamente',
          showConfirmButton: false,
        });
        setInterval(() => {
          location.assign('../subida.php');
        }, 3000);
      </script>";
    } else {
      echo "Error al insertar en la base de datos: " . mysqli_error($conexion);
    }

    // Cerrar la sentencia preparada
    mysqli_stmt_close($stmt);
  } else {
    echo "Faltan campos o no se seleccionó un archivo PDF válido.";
  }

  // Cerrar la conexión a la base de datos
  mysqli_close($conexion);
} else {
  echo "Error de conexión a la base de datos.";
}
?>
</body>
</html>