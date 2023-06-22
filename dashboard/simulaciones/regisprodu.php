
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
    $nombre_producto1=$_POST['nombre_producto1'];
    $cantidad_producto1=$_POST['cantidad_producto1'];
    $coste_unidad_producto1=$_POST['coste_unidad_producto1'];
    $precio_venta_producto1=$_POST['precio_venta_producto1'];
    $nombre_negocio_plan=$_POST['nombre_negocio_plan'];
    //igresar la informacion a la tabla de datos
    $consulta="INSERT INTO ` $nombre_negocio_plan` VALUES ('','$nombre_producto1','$cantidad_producto1','$coste_unidad_producto1 ','$precio_venta_producto1')";
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
     location.assign('agregarproducto.php');
     },1000);
        </script>"; 
        }
?>
</body>
</html>
