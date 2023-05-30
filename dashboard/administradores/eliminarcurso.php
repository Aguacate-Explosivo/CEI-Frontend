<?php 
include_once('../../conexion.php');
$conexion=conectar(); 
   $Id_Curso=$_GET['Id_Curso'];

   $sql="delete from cursos where Id_Curso='".$Id_Curso."'";
       $resultado=mysqli_query($conexion,$sql);

       if ($resultado) {
        echo "<script language='JavaScript'>
                alert('los datos se eliminaron correctamente');
                   location.assign('admincursos.php');
                   </script>"; 
        }

 ?>