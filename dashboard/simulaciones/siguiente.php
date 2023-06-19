<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Procesando Producto</title>
</head>
<body>  
<?php
      //Conexion con la base de datos
	include("../administradores/conexion.php");
	$conexion=conectar();

    //Valores del formulario
    $cantidad=$_POST['cantidad'];
    $costeu=$_POST['costeu'];
    $preciov=$_POST['preciov'];
    $gastosg=$_POST['gastosg'];
    //igresar la informacion a la tabla de datos
    $consulta="INSERT INTO inicio VALUES ('','$cantidad','$costeu','$preciov','$gastosg')";
    $resultado=mysqli_query($conexion,$consulta);
    if ($resultado) {
        echo "<script>
        Swal.fire({
          icon: 'success',
          title: 'Datos agregados con exito...',
          text: 'Procesando informacion de forma correcta....... espere un momento',
          showConfirmButton: false,
        });
     setInterval(()=>{
     location.assign('producto.php');
     },2000);
        </script>"; 
        }
?>
</body>
</html>
