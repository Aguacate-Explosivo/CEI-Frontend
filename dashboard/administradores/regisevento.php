
<?php
    //Conexion con la base de datos
	include("conexion.php");
	$conexion=conectar();

    //Valores del formulario
    $documento=$_POST['documento'];
    $nombre=$_POST['nombre'];
    $tel=$_POST['tel'];
    $direccion=$_POST['direccion'];
    $edad=$_POST['edad'];
    $evento=$_POST['evento_elegido'];
    //se Obtiene la longitud del string
    
    
    //igresar la informacion a la tabla de datos
    $consulta="INSERT INTO inscritos_eventos VALUES ('','$documento','$nombre','$tel','$direccion','$edad','$evento');";
    $resultado=mysqli_query($conexion,$consulta);
    if ($resultado) {
        echo "<script language='JavaScript'>
                    location.assign('../../eventos.php');
                     </script>"; 
    } 
    
?>
