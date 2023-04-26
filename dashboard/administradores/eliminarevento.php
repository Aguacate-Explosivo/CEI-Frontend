<?php 
include_once('conexion.php');
$conexion=conectar(); 
   $id_evento=$_GET['id_evento'];

   $sql="delete from eventos where id_evento='".$id_evento."'";
       $resultado=mysqli_query($conexion,$sql);

   if ($resultado) {
	echo "<script language='JavaScript'>
            alert('los datos se eliminaron correctamente');
               location.assign('admineventos.php');
               </script>"; 
    }

 ?>