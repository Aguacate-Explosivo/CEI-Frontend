<?php
	include("../conexion.php");
	$conexion=conectar();

    //Valores del formulario
    $user=$_POST['user'];
    $passwd=$_POST['password'];

    //consulta la base de datos
    $consulta="SELECT * FROM `datos` WHERE usuario='$user' and contraseña='$passwd';";
    $resultado=mysqli_query($conexion,$consulta);
    
    //validacion
    $fila=mysqli_num_rows($resultado);
    
    if($fila){
        //Se inicia la sesion
        session_start();
        $_SESSION['user']=$user;
        //alerta de ingreso
        echo "<script language='JavaScript'>
        alert('Validacion Exitosa');
           location.assign('../dashboard/index.php');
           </script>"; 
    }
    else{
        echo "<script language='JavaScript'>
        alert('Error, verifique sus datos');
           location.assign('../login.php');
           </script>"; 
    }
    mysqli_free_result($resultado);
?>
