<?php
  session_start();
  if(isset($_POST["Siguiente"])){

    //Datos del formulario 1
    $_SESSION['doc_autor_plan'] = htmlentities($_POST["doc_autor_plan"]);
      $_SESSION['autor_plan'] = htmlentities($_POST["autor_plan"]);
      $_SESSION['autor_email'] = htmlentities($_POST["autor_email"]);

      //Datos del formulario 2
      $_SESSION['nombre_negocio_plan'] = htmlentities($_POST["nombre_negocio_plan"]);
      $_SESSION['industria_plan'] = htmlentities($_POST["industria_plan"]);
      $_SESSION['zona_geografica_plan'] = htmlentities($_POST["zona_geografica_plan"]);
      $_SESSION['negocio_nuevo'] = htmlentities($_POST["negocio_nuevo"]);
      $_SESSION['negocio_existente'] = htmlentities($_POST['negocio_existente']);
      $_SESSION['publico_objetivo_plan'] = htmlentities($_POST["publico_objetivo_plan"]);
      $_SESSION['innovacion_negocio_plan'] = htmlentities($_POST["innovacion_negocio_plan"]);
      $_SESSION['Precio_negocio_plan'] = htmlentities($_POST["Precio_negocio_plan"]);
      $_SESSION['Calidad_negocio_plan'] = htmlentities($_POST["Calidad_negocio_plan"]);
      $_SESSION['Rapidez_negocio_plan'] = htmlentities($_POST["Rapidez_negocio_plan"]);

      // datos de formulario 3 
      $_SESSION['clientes_interesados_plan'] = htmlentities($_POST["clientes_interesados_plan"]);
      $_SESSION['cantidadMonetaria_interesados_plan'] = htmlentities($_POST["cantidadMonetaria_interesados_plan"]);
      $_SESSION['socios_productores'] = htmlentities($_POST["socios_productores"]);
      $_SESSION['tipo_marketing_plan'] = htmlentities($_POST["tipo_marketing_plan"]);
      $_SESSION['inversion_publicidad'] = htmlentities($_POST["inversion_publicidad"]);

     
      // datos formulario 5
      $_SESSION['cantidad_producto'] = htmlentities($_POST["cantidad_producto"]);
      $_SESSION['coste_unidad_producto'] = htmlentities($_POST["coste_unidad_producto"]);
      $_SESSION['precio_venta_producto'] = htmlentities($_POST["precio_venta_producto"]);
      // nuevos datos de formulario
      $_SESSION['valor_total_gasto'] = htmlentities($_POST["valor_total_gasto"]);
      $_SESSION['precio_unitario'] = htmlentities($_POST["precio_unitario"]);
      $_SESSION['cantidad_productos'] = htmlentities($_POST["cantidad_productos"]);
      $_SESSION['precio_venta'] = htmlentities($_POST["precio_venta"]);
      $_SESSION['gastos_generales'] = htmlentities($_POST["gastos_generales"]);

      $_SESSION['importe'] = htmlentities($_POST["importe"]);

  
      // Redirecion a la siguiente pagina
      header("location:estudios.php");
  }

  // Variables de los datos anteriores
  $documento = $_SESSION['doc_autor_plan'] ;
  $nombre = $_SESSION['autor_plan'] ;
  $autor_email =  $_SESSION['autor_email'] ;
  $nombre_negocio_plan = $_SESSION['nombre_negocio_plan'];
  $industria_plan = $_SESSION['industria_plan'];
  $zona_geografica_plan = $_SESSION['zona_geografica_plan'];
  $negocio_nuevo = $_SESSION['negocio_nuevo'];
  $negocio_existente = $_SESSION['negocio_existente'];
  $publico_objetivo_plan = $_SESSION['publico_objetivo_plan'];
  $innovacion_negocio_plan = $_SESSION['innovacion_negocio_plan'];
  $Precio_negocio_plan = $_SESSION['Precio_negocio_plan'];
  $Calidad_negocio_plan = $_SESSION['Calidad_negocio_plan'];
  $Rapidez_negocio_plan =  $_SESSION['Rapidez_negocio_plan'];
  $clientes_interesados_plan =  $_SESSION['clientes_interesados_plan'];
  $cantidadMonetaria_interesados_plan =  $_SESSION['cantidadMonetaria_interesados_plan'];
  $socios_productores =  $_SESSION['socios_productores'];
  $tipo_marketing_plan =  $_SESSION['tipo_marketing_plan'];
  $inversion_publicidad =  $_SESSION['inversion_publicidad'];


  

  //agregar tabla a base de datos
?>



  
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Procesando Evento</title>
</head>
<body style="background-image: url(img/fondo.png);">  
<?php
        
       require_once('../../conexion.php');
       $conexion=conectar();
       $insercion="INSERT INTO `Marketing` VALUES ('','$documento','$nombre','$autor_email ','$nombre_negocio_plan','$tipo_marketing_plan', CURRENT_TIMESTAMP);";
       $ejecucion=mysqli_query($conexion,$insercion);
       if ($ejecucion) {
           echo "<script>
           console.log('se insertaron los datos de forma correcta en marketing');
           </script>"; 
           }

      $insercion2="INSERT INTO `categoriasemprendimiento` VALUES ('','$documento','$industria_plan','$cantidadMonetaria_interesados_plan', CURRENT_TIMESTAMP);";
       $ejecucion2=mysqli_query($conexion,$insercion2);
       if ($ejecucion2) {
           echo "<script>
           console.log('se insertaron los datos de forma correcta para las estadisticas');
           </script>"; 
           }

       $tabla=$nombre_negocio_plan;
       $tabla1=$documento;
       $tabla2=$nombre;

       $consulta1 = "DROP TABLE  ` $tabla`";
       $resultado1 = mysqli_query($conexion, $consulta1);
       
       $consulta = "DROP TABLE  ` $tabla1`";
       $resultado = mysqli_query($conexion, $consulta);
       
        $consulta2 = "DROP TABLE  ` $tabla2`";
       $resultado2 = mysqli_query($conexion, $consulta2);

            if ($resultado) {
              echo "<script>
              Swal.fire({
                icon: 'success',
                title: 'Te gusto esta experiencia? ',
                text: ' Te invito a que simules otro de tus GENIALES!! emprendimientos Volvamos a donde todo comenzo VAMOS... ',
                showConfirmButton: false,
              });
           setInterval(()=>{
           location.assign('../DashSimulaciones.php');
           },4000);
              </script>"; 
        }
      
?>

</body>
</html>
