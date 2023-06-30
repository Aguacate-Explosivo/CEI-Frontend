<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Procesando Cita</title>
</head>
<body>  
<?php
    //Conexion con la base de datos
    include_once("../conexion.php");
    $conexion = conectar();
    include_once("../log.php");

    //Valores del formulario
    $documento = $_POST['documento'];
    $nombre = $_POST['nombre'];
    $tel = $_POST['tel'];
    $direccion = $_POST['direccion'];
    $fecha = $_POST['fecha'];

    // Verificar si existe una cita con la misma fecha y hora
    $consultaExistente = "SELECT * FROM citas WHERE fecha_hora = '$fecha'";
    $resultadoExistente = mysqli_query($conexion, $consultaExistente);
    
    if (mysqli_num_rows($resultadoExistente) > 0) {
      echo "<script language='JavaScript'>
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'ya hay una cita para esta fecha y hora por favor llena los datos nuevamente!',
        showConfirmButton: false,
      })
      setInterval(()=>{
        location.assign('../citas.php');
      },2500)
  </script>";
  logAction("Agendado de Cita","El usuario intentó agendar una cita pero ya se encontraba un registro");
    } else {
        // Insertar la información en la tabla de datos
        $consulta = "INSERT INTO citas VALUES ('', '$documento', '$nombre', '$tel', '$direccion', '$fecha')";
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado) {
            echo "<script language='JavaScript'>
                        Swal.fire({
                          icon: 'success',
                          title: 'Registro Exitoso...',
                          text: 'Su Cita ha sido guardada de forma correcta',
                          showConfirmButton: false,
                        })
                        setInterval(()=>{
                          location.assign('../citas.php');
                        },2500)
                  </script>";
                  logAction("Agendado de Cita","El usuario agendó una cita");
        } else {
            echo "<script language='JavaScript'>
                      Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'ya hay una cita para esta fecha y hora!',
                        showConfirmButton: false,
                      })
                      setInterval(()=>{
                        location.assign('../citas.php');
                      },2500)
                  </script>";
                  logAction("Agendado de Cita","El usuario intentó agendar una cita pero ya se encontraba un registro");
              }
          }
?>
</body>
</html>
