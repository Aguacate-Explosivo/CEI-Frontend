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
    
     $nombre=$_POST['nombre'];
     $imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));          
     $imagen1 = !empty($_FILES['imagen1']['tmp_name']) ? addslashes(file_get_contents($_FILES['imagen1']['tmp_name'])) : null;
     $imagen2 = !empty($_FILES['imagen2']['tmp_name']) ? addslashes(file_get_contents($_FILES['imagen2']['tmp_name'])) : null;
     $imagen3 = !empty($_FILES['imagen3']['tmp_name']) ? addslashes(file_get_contents($_FILES['imagen3']['tmp_name'])) : null;
     $imagen4 = !empty($_FILES['imagen4']['tmp_name']) ? addslashes(file_get_contents($_FILES['imagen4']['tmp_name'])) : null;
     $imagen5 = !empty($_FILES['imagen5']['tmp_name']) ? addslashes(file_get_contents($_FILES['imagen5']['tmp_name'])) : null;
     $descripcion=$_POST['descripcion'];
 
       
     //igresar la informacion a la tabla de datos
     $consulta="INSERT INTO actividades VALUES ('','$nombre' ,'$imagen','$imagen1','$imagen2'
     ,'$imagen3','$imagen4','$imagen5','$descripcion', NOW())";
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
        location.assign('../Dashactividades.php');
        },3000);
        </script>"; 
        logAction("Creación de actividad ","el usuario ha creado una nueva actividades : '$nombre'");
        }
?>
</body>
</html>
