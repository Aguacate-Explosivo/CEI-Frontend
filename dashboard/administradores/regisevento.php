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
	include("conexion.php");
	$conexion=conectar();

    //Valores del formulario
    $documento=$_POST['documento'];
    $nombre=$_POST['nombre'];
    $tel=$_POST['tel'];
    $direccion=$_POST['direccion'];
    $edad=$_POST['edad'];
    $evento=$_POST['evento_elegido'];
    //se Obtiene la longitud del string
    
    
    //igresar la informacion a la tabla de datos
    $consulta="INSERT INTO inscritos_eventos VALUES ('','$documento','$nombre','$tel','$direccion','$edad','$evento');";
    $resultado=mysqli_query($conexion,$consulta);{
        echo "<script>
        Swal.fire({
          icon: 'success',
          title: 'Dato agregado con exito...',
          text: 'El dato se ha agregado de forma correcta',
          showConfirmButton: false,
        });
     setInterval(()=>{
     location.assign('../../eventos.php');
     },2000);
        </script>"; 
        }
?>
</body>
</html>
