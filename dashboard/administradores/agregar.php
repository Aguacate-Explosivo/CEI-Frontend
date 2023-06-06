
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
include("conexion.php");
$conexion=conectar();

//Valores del formulario
$nombre=$_POST['nombre'];  
$imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));          



//igresar la informacion a la tabla de datos
$consulta="INSERT INTO encargado VALUES ('','$nombre','$imagen')";
$resultado=mysqli_query($conexion,$consulta);
    if ($resultado) {

                echo "<script>
            Swal.fire({
              icon: 'success',
              title: 'Dato agregado...',
              text: 'El dato se ha agregado de forma correcta',
              showConfirmButton: false,
            });
         setInterval(()=>{
         location.assign('encacurso.php');
         },1000);
            </script>"; 
          
     }
?>
</body>
</html>