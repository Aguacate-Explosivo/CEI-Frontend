
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

    //Valores del formulario
    $nombre=$_POST['nom_curso'];
    $enc=$_POST['encargado'];
    $descrip=$_POST['desc_curso'];
    $imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));          

    
    //igresar la informacion a la tabla de datos
    $consulta="INSERT INTO cursos VALUES ('','$nombre','$descrip','$enc','$imagen')";
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
     location.assign('../DashCursos.php');
     },1000);
        </script>"; 
        }
?>
</body>
</html>
