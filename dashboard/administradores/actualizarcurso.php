<?php
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
        echo "<script language='JavaScript'>
                alert('los datos se actualizaron correctamente');
                   location.assign('admincursos.php');
                   </script>"; 
        }
      
?>
