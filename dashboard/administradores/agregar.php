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
        echo "<script language='JavaScript'>
                alert('los datos se actualizaron correctamente');
                   location.assign('encacurso.php');
                   </script>"; 
        } 
?>
