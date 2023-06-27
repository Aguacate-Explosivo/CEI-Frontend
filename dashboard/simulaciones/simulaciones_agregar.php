
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
        // Conexion con la base de datos
        require_once('../../conexion.php');
        $conexion = conectar();

        // Valores del formulario
        $documento = $_POST['documento'];
        $nombre = $_POST['nombre'];
        
        // Obtener el contenido del archivo PDF
        $pdf_tmp_name = $_FILES['pdf']['tmp_name'];
        $pdf_content = addslashes(file_get_contents($pdf_tmp_name));
        $pdf_size = $_FILES['pdf']['size'];
        
        // Verificar que se haya seleccionado un archivo PDF
        if ($pdf_size > 0) {
            // Insertar el archivo en la base de datos
            $consulta = "INSERT INTO simulaciones (cc, nombre, pdf) VALUES ('$documento', '$nombre', '$pdf_content')";
            $resultado = mysqli_query($conexion, $consulta);

            if ($resultado) {
              echo "<script>
              Swal.fire({
                icon: 'success',
                title: 'Dato agregado con exito...',
                text: 'El dato se ha agregado de forma correcta',
                showConfirmButton: false,
              });
           setInterval(()=>{
           location.assign('estudios.php');
           },3000);
              </script>"; 
        }
      }
?>

</body>
</html>
