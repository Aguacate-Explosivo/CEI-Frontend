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

    //Valores del formulario
    $documento = $_POST['documento'];
    $nombre = $_POST['nombre'];
    $tel = $_POST['tel'];
    $direccion = $_POST['direccion'];
    $fecha = $_POST['fecha'];

    // Verificar si existe una cita con la misma fecha y hora
    $consultaExistente = "SELECT * FROM citas WHERE fecha_hora = '$fecha'";
    $resultadoExistente = mysqli_query($conexion, $consultaExistente);
    
    //se Obtiene la longitud del string
    
    //igresar la informacion a la tabla de datos
   $consulta = "INSERT INTO citas VALUES ('','$documento','$nombre','$tel','$direccion','$fecha')";
    $resultado=mysqli_query($conexion,$consulta);
    if ($resultado) {
      echo "<script language='JavaScript'>
                   location.assign('../citas.php');
                   </script>"; 
          
        }else{
          echo "<script language='JavaScript'>
          alert('ya hay una cita para esta fecha y hora ');
             location.assign('../citas.php');
             </script>"; 
        }
    }
?>
</body>
</html>
