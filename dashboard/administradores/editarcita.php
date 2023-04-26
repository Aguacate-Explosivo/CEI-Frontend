<?php
    //Conexion con la base de datos
	include("conexion.php");
	$conexion=conectar();
    $idcita=$_REQUEST['idcita'];

    //Valores del formulario
    $documento=$_POST['documento'];
    $nombre=$_POST['nombre'];
    $telefono=$_POST['tel'];
    $direccion=$_POST['direccion'];
    $fecha=$_POST['fecha'];

    

    
    //igresar la informacion a la tabla de datos
    
    $consulta="UPDATE `citas` SET `documento`=' $documento',`nombre`='$nombre',`telefono`='$telefono',`direccion`='$direccion',`fecha_hora`='$fecha' WHERE  idcita=$idcita";
    $resultado=mysqli_query($conexion,$consulta);
    if ($resultado) {
      echo "<script language='JavaScript'>
                alert('su cita ha cido generada correctamente');
                   location.assign('reprocitas.php');
                   </script>"; 
          
        }else{
          echo "<script language='JavaScript'>
          alert('ya hay una cita para esta fecha y hora ');
             location.assign('reprocitas.php');
             </script>"; 
        }
?>
