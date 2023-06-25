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
      require_once('../../conexion.php');
	$conexion=conectar();

    //Valores del formulario
    $nombre=$_POST['nombre'];
    $valor=$_POST['valor'];
    $documento=$_POST['documento'];

    //igresar la informacion a la tabla de datos
    $consulta="INSERT INTO  ` $documento` VALUES ('','$nombre','$valor')";
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
     location.assign('agregargastos.php');
     },1000);
        </script>"; 
        } 
?>
</body>
</html>
