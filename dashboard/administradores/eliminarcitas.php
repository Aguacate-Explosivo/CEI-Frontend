<?php 
include_once('../../conexion.php');
$conexion=conectar(); 
   $idcita=$_GET['idcita'];

   $sql="delete from citas where idcita='".$idcita."'";
       $resultado=mysqli_query($conexion,$sql);

   if ($resultado) {
	echo "<script language='JavaScript'>
            alert('los datos se eliminaron correctamente');
               location.assign('reprocitas.php');
               </script>"; 
    }

 ?>