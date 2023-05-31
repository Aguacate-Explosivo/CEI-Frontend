<?php
    //Conexion con la base de datos
	include("conexion.php");
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
        echo "<script language='JavaScript'>
                  alert('curso cargado correctamente');
                     location.assign('../DashCursos.php');
                     </script>"; 
          }
?>
