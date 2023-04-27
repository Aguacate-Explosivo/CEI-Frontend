<?php
    //Conexion con la base de datos
	include("conexion.php");
	$conexion=conectar();
    $id_evento=$_REQUEST['id_evento'];

    //Valores del formulario
    $nombre=$_POST['nombre'];
    $lugar=$_POST['lugar'];
    $descrip=$_POST['evento'];
    $fecha=$_POST['fecha'];
    $hora=$_POST['hora'];
    $imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));          
    $estado=$_POST['estado'];
    
    //igresar la informacion a la tabla de datos
    
    $consulta="UPDATE `eventos` SET `nombreEven`='$nombre',`descripcionEven`='$descrip',`lugar`='$lugar',`fecha`='$fecha',`hora`='$hora',`imagen`='$imagen',`estado`='$estado' WHERE id_evento=$id_evento";
    $resultado=mysqli_query($conexion,$consulta);
    if ($resultado) {
        echo "<script language='JavaScript'>
                  alert(' generada correctamente');
                     location.assign('admineventos.php');
                     </script>";
    }
?>
