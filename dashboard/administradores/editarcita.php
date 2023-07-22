

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
    include("../../log.php");
      $idcita=$_REQUEST['idcita'];
   
      //Valores del formulario
      $tipodocumento = $_POST['tipodocumento'];
      $documento = $_POST['documento'];
      $categoria = $_POST['categoria'];
      $nombre = $_POST['nombre'];
      $tel = $_POST['tel'];
      $correo = $_POST['correo'];
      $institucion = $_POST['institucion'];
      $direccion = $_POST['direccion'];
      $fecha = $_POST['fecha'];
      $tema = $_POST['tema'];
      $descripcion = $_POST['descripcion'];
      
  
      
      //igresar la informacion a la tabla de datos
      
      $consulta="UPDATE `citas` SET `tipodocumento`=' $tipodocumento',`documento`=' $documento',`categoria`=' $categoria',`nombre`='$nombre',
      `telefono`='$tel',`correo`=' $correo', `institucion`=' $institucion',`direccion`='$direccion',`fecha_hora`='$fecha',`tema`=' $tema',`descripcion`=' $descripcion' WHERE  idcita=$idcita";
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
          location.assign('../reprocitas.php');
         },1000);
            </script>"; 
          logAction("Modificacion de Cita","el administrador ha modificado la cita de '$nombre'");
     }else{
      
      echo "<script>
      Swal.fire({
        icon: 'error',
        title: 'Ya hay una cita...',
        text: 'ya hay una cita para esa fecha y hora',
        showConfirmButton: false,
      });
   setInterval(()=>{
    location.assign('../reprocitas.php');
   },5000);
      </script>"; 
      logAction("Modificacion de Cita","el administrador ha intentado modificar la cita de '$nombre' pero no ha tenido exito");
     }
?>
</body>
</html>
