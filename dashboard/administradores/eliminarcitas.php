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
 require_once('../../conexion.php'); 
 $conexion=conectar(); 
 require_once('../../log.php'); 
    $idcita=$_GET['idcita'];
 
    $sql="delete from citas where idcita='".$idcita."'";
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
         location.assign('../reprocitas.php');
         },1000);
            </script>"; 
        logAction("Eliminar Cita","el administrador ha eliminado la cita con el id='$idcita' de forma correcta");
     }
?>
</body>
</html>