
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
   //Conexion con la base de datos
   include("conexion.php");
   $conexion=conectar();
   $Id_Curso=$_REQUEST['Id_Curso'];

   //Valores del formulario
   $nombre=$_POST['nom_curso'];
   $enc=$_POST['encargado'];
   $descrip=$_POST['desc_curso'];
   $imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));          

   
   //igresar la informacion a la tabla de datos
   
   $consulta="UPDATE `cursos` SET `NombreCurso`='$nombre',`DescripcionCurso`='$descrip',`EncargadoCurso`='$enc',`imagen`='$imagen' WHERE Id_Curso=$Id_Curso";
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
         location.assign('admincursos.php');
         },1000);
            </script>"; 
          
     }
?>
</body>
</html>
