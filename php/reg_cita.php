<?php
    //Conexion con la base de datos
	include_once("../conexion.php");
	$conexion=conectar();

    //Valores del formulario
    $documento=$_POST['documento'];
    $nombre=$_POST['nombre'];
    $tel=$_POST['tel'];
    $direccion=$_POST['direccion'];
    $fecha=$_POST['fecha'];
    
    //se Obtiene la longitud del string
    
    //igresar la informacion a la tabla de datos
   $consulta = "INSERT INTO citas VALUES ('','$documento','$nombre','$tel','$direccion','$fecha')";
    $resultado=mysqli_query($conexion,$consulta);
    if ($resultado) {
      echo "<script language='JavaScript'>
                   location.assign('../citas.php');
                   </script>"; 
          
        }else{
          echo "<script language='JavaScript'>
          alert('ya hay una cita para esta fecha y hora ');
             location.assign('../citas.php');
             </script>"; 
        }
?>