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
    $curso=$_POST['curso_elegido'];
    //se Obtiene la longitud del string
    
    //igresar la informacion a la tabla de datos
    $consulta ="INSERT INTO inscritos_cursos VALUES ('','$documento','$nombre','$tel','$direccion','$edad','$curso');";
    $busqueda=mysqli_query($conexion,$consulta);
    if ($busqueda) {
        echo "<script language='JavaScript'>
            
                     location.assign('../../cursos.php');
                     </script>"; 
          }
?>
