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
 include_once('../administradores/conexion.php');
 $conexion=conectar(); 
    $id=$_GET['id'];
 
    $sql="delete from gastos where id='".$id."'";
        $resultado=mysqli_query($conexion,$sql);
 
    if ($resultado) {

                echo "<script>
            Swal.fire({
              icon: 'success',
              title: 'Dato eliminado...',
              text: 'El dato se ha eliminado de forma correcta',
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