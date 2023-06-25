

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Procesando Cursos </title>
</head>
<body>  
<?php
    //Conexion con la base de datos
    include("../../conexion.php");
    $conexion=conectar();
      $idcita=$_REQUEST['idcita'];
   
      //Valores del formulario
      $documento=$_POST['documento'];
      $nombre=$_POST['nombre'];
      $telefono=$_POST['tel'];
      $direccion=$_POST['direccion'];
      $fecha=$_POST['fecha'];
  
      
  
      
      //igresar la informacion a la tabla de datos
      
      $consulta="UPDATE `citas` SET `documento`=' $documento',`nombre`='$nombre',`telefono`='$telefono',`direccion`='$direccion',`fecha_hora`='$fecha' WHERE  idcita=$idcita";
      $resultado=mysqli_query($conexion,$consulta);
    if ($resultado) {

                echo "<script>
            Swal.fire({
              icon: 'success',
              title: 'Dato actualizado...',
              text: 'El dato se ha actualizado de forma correcta',
              showConfirmButton: false,
            });
         setInterval(()=>{
          location.assign('reprocitas.php');
         },1000);
            </script>"; 
          
     }else{
      
      echo "<script>
      Swal.fire({
        icon: 'success',
        title: 'Ya hay una cita...',
        text: 'ya hay una cita para esa fecha y hora',
        showConfirmButton: false,
      });
   setInterval(()=>{
    location.assign('reprocitas.php');
   },5000);
      </script>"; 
     }
?>
</body>
</html>
