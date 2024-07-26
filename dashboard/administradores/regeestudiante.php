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
    $imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));          
    $nombre=$_POST['nombre'];
    $cargo=$_POST['cargo'];
 


    //igresar la informacion a la tabla de datos
    $consulta="INSERT INTO estudiante VALUES ('','$imagen','$nombre','$cargo', CURRENT_TIMESTAMP)";
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
        location.assign('../Dashestudiante.php');
        },3000);
        </script>"; 
        logAction("Creación de estudiante destacado","el usuario ha creado un nuevo estudiante Destacado: '$nombre'");
        }
?>
</body>
</html>
