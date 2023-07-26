<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Procesando Curso</title>
</head>
<body>  
<?php
  //Conexion con la base de datos
	require_once('../../conexion.php');
	$conexion=conectar();

    //Valores del formulario
    $tipodocumento=$_POST['tipodocumento'];
    $documento=$_POST['documento'];
    $categoria=$_POST['categoria'];
    $nombre=$_POST['nombre'];
    $tel=$_POST['tel'];
    $correo=$_POST['correo'];
    $institucion=$_POST['institucion'];
    $programa=$_POST['programa'];
    $direccion=$_POST['direccion'];
    $edad=$_POST['edad'];
    $curso=$_POST['curso_elegido']; 
    //se Obtiene la longitud del string
    
    //igresar la informacion a la tabla de datos
    $consulta ="INSERT INTO inscritos_cursos VALUES ('','$tipodocumento','$documento','$categoria','$nombre','$tel',
    '$correo','$institucion','$programa','$direccion','$edad','$curso', CURRENT_TIMESTAMP);";
    $busqueda=mysqli_query($conexion,$consulta);
    if ($busqueda) {
        echo "<script>
        Swal.fire({
          icon: 'success',
          title: 'Has sido agregado al curso con exito...',
          text: '${nombre} Te has agregado de forma correcta al curso ${curso}',
          showConfirmButton: false,
        });
     setInterval(()=>{
     location.assign('../../cursos.php');
     },2500);
        </script>"; 
        }
?>
</body>
</html>
