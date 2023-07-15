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
    //Conexion con la base de datos
    include("../../conexion.php");
    $conexion = conectar();
    $idcita = $_REQUEST['idcita'];
   
    // Valores del formulario
    $tipodocumento = $_POST['tipodocumento'];
    $documento = $_POST['documento'];
    $categoria = $_POST['categoria'];
    $nombre = $_POST['nombre'];
    $tel = $_POST['tel'];
    $correo = $_POST['correo'];
    $institucion = $_POST['institucion'];
    $direccion = $_POST['direccion'];
    $fecha = $_POST['fecha'];
    $tema = $_POST['tema'];
    $descripcion = $_POST['descripcion'];
    $url = $_POST['url']; // Nuevo campo de URL
  
    // Actualizar la información en la tabla de citas
    $consulta = "UPDATE `citas` SET `tipodocumento`='$tipodocumento', `documento`='$documento', `categoria`='$categoria', `nombre`='$nombre', `telefono`='$tel', `correo`='$correo', `institucion`='$institucion', `direccion`='$direccion', `fecha_hora`='$fecha', `tema`='$tema', `descripcion`='$descripcion', `url`='$url' WHERE `idcita`=$idcita";
  
    $resultado = mysqli_query($conexion, $consulta);
  
    if ($resultado) {
        echo "<script>
            Swal.fire({
              icon: 'success',
              title: 'Dato actualizado...',
              text: 'El dato se ha actualizado correctamente',
              showConfirmButton: false,
            });
            setInterval(() => {
              location.assign('../reprocitas.php');
            }, 1000);
          </script>"; 
     } else {
        echo "<script>
          Swal.fire({
            icon: 'error',
            title: 'Error al actualizar',
            text: 'Ocurrió un error al actualizar la información',
            showConfirmButton: false,
          });
          setInterval(() => {
            location.assign('../reprocitas.php');
          }, 5000);
        </script>";
     }
?>
  <div class="text-center">
    <button style="margin: 2px; border-radius: 5px;" type="submit" class="btn btn-primary">Reprogramar cita</button>
    <a style="margin: 2px; border-radius: 5px;" href="DashEncuestas.php" class="btn btn-info">Regresar</a>
  </div>
</body>
</html>
