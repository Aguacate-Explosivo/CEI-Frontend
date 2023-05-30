<?php 
include_once('../../conexion.php');
$conexion=conectar(); 
   $id=$_GET['id'];

   $sql="delete from encargado where id='".$id."'";
       $resultado=mysqli_query($conexion,$sql);

       if ($resultado) {
        echo "<script language='JavaScript'>
                alert('los datos se eliminaron correctamente');
                   location.assign('encacurso.php');
                   </script>"; 
        }


 ?>