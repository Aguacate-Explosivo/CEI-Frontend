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
    include("../conexion.php");
    $conexion=conectar();
      $idencuesta=$_REQUEST['idencuesta'];
   
      //Valores del formulario
      $url = $_POST['url'];
      
      //igresar la informacion a la tabla de datos
      
      $consulta="UPDATE `encuesta` SET `url`=' $url' WHERE  idencuesta=$idencuesta";
      $resultado=mysqli_query($conexion,$consulta);
    if ($resultado) {

                echo "<script>
            Swal.fire({
              icon: 'success',
              title: 'Encuesta actualizado...',
              text: 'La encuesta se ha actualizado de forma correcta',
              showConfirmButton: false,
            });
         setInterval(()=>{
          location.assign('DashEncuestas.php');
         },1000);
            </script>"; 
          // logAction("Modificacion de Cita","el administrador ha modificado la cita de '$nombre'");
     }
?>
</body>
</html>
