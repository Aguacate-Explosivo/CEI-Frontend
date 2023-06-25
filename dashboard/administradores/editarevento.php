<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Procesando Evento</title>
</head>
<body>  
<?php
    //Conexion con la base de datos
    require_once('../../conexion.php');
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
    $imagen1= addslashes(file_get_contents($_FILES['imagen1']['tmp_name']));          
    $imagen2= addslashes(file_get_contents($_FILES['imagen2']['tmp_name']));          
    $imagen3= addslashes(file_get_contents($_FILES['imagen3']['tmp_name']));          
    $imagen4= addslashes(file_get_contents($_FILES['imagen4']['tmp_name']));          
    $imagen5= addslashes(file_get_contents($_FILES['imagen5']['tmp_name']));          
    $imagen6= addslashes(file_get_contents($_FILES['imagen6']['tmp_name']));          

    
    //igresar la informacion a la tabla de datos
    
    $consulta="UPDATE `eventos` SET `nombreEven`='$nombre',`descripcionEven`='$descrip',`lugar`='$lugar',`fecha`='$fecha',`hora`='$hora',`imagen`='$imagen',`estado`='$estado',
    `imagen1`='$imagen1',`imagen2`='$imagen2',`imagen3`='$imagen3',
    `imagen4`='$imagen4',`imagen5`='$imagen5',`imagen6`='$imagen6' WHERE id_evento=$id_evento";
    $resultado=mysqli_query($conexion,$consulta);
 
    if ($resultado) {

                echo "<script>
            Swal.fire({
              icon: 'success',
              title: 'Dato actualizado...',
              text: 'El dato se ha actualizado de forma correcta',
              showConfirmButton: false,
            });
         setInterval(()=>{
         location.assign('admineventos.php');
         },3000);
            </script>"; 
          
     }
?>
</body>
</html>



  