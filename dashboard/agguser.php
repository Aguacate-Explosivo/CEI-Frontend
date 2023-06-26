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
require_once('../conexion.php');
$conexion=conectar();

//Valores del formulario
$nombre=$_POST['nombreu'];
$correo=$_POST['correou'];
$psswwd=$_POST['psswd'];
$rol=$_POST['rolu'];
     
//igresar la informacion a la tabla de datos
$consulta="INSERT INTO datos VALUES ('','$nombre','$correo','$psswwd','$rol')";
$resultado=mysqli_query($conexion,$consulta);
    if ($resultado) {

                echo "<script>
            Swal.fire({
              icon: 'success',
              title: 'Nuevo usuario registrado',
              text: 'Se ha agregado de forma correcta',
              showConfirmButton: false,
            });
         setInterval(()=>{
         location.assign('DashUsuarios.php');
         },500);
            </script>"; 
          
     }
?>