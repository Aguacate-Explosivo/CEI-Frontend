<?php
    //Conexion con la base de datos
	include("conexion.php");
	$conexion=conectar();

    //Valores del formulario
    $nombre=$_POST['nom_even'];
    $lugar=$_POST['lugar'];
    $descrip=$_POST['desc_even'];
    $fecha=$_POST['fecha'];
    $hora=$_POST['hora'];
    $imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));          

    
    //igresar la informacion a la tabla de datos
    $consulta="INSERT INTO eventos VALUES ('','$nombre','$descrip','$lugar','$fecha','$hora','$imagen')";
    $resultado=mysqli_query($conexion,$consulta);
    if ($resultado) {
      echo "<script language='JavaScript'>
                alert('evento cargado correctamente');
                   location.assign('../DashEventos.php');
                   </script>"; 
          
        }
    
   

?>
