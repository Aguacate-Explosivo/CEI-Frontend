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
    //Conexion con la base de datos
  require_once('../../conexion.php');
	$conexion=conectar();
  include("../../log.php");

    //Valores del formulario
    $nombre=$_POST['nom_even'];
    $lugar=$_POST['lugar'];
    $descrip=$_POST['desc_even'];
    $fecha=$_POST['fecha'];
    $hora=$_POST['hora'];
    $imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));          
    $estado=$_POST['estado'];
    $fecha_inicio=$_POST['fecha_inicio'];
    $fecha_final=$_POST['fecha_final'];


    //igresar la informacion a la tabla de datos
    $consulta="INSERT INTO eventos VALUES ('','$nombre','$descrip','$lugar','$fecha','$hora',
    '$imagen','$estado','','','','','','', CURRENT_TIMESTAMP, '$fecha_inicio','$fecha_final')";
    $resultado=mysqli_query($conexion,$consulta);
    if ($resultado) {
        echo "<script>
        Swal.fire({
          icon: 'success',
          title: 'Dato agregado con exito...',
          text: 'El dato se ha agregado de forma correcta',
          showConfirmButton: false,
        });
        setInterval(()=>{
        location.assign('../DashEventos.php');
        },3000);
        </script>"; 
        logAction("Creación de Evento","el usuario ha creado un nuevo evento: '$nombre'");
        }
?>
</body>
</html>
