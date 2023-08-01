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

      // datos formulario 4 

      // datos formulario 5
      $_SESSION['cantidad_producto'] = htmlentities($_POST["cantidad_producto"]);
     
      // nuevos datos de formulario
      $_SESSION['valor_total_gasto'] = htmlentities($_POST["valor_total_gasto"]);
      $_SESSION['valor_total_costo'] = htmlentities($_POST["valor_total_costo"]);
      $_SESSION['cantidad_producir'] = htmlentities($_POST["cantidad_producir"]);
      $_SESSION['nombreproducto'] = htmlentities($_POST["nombreproducto"]);

      $_SESSION['importe'] = htmlentities($_POST["importe"]);


  
      // Redirecion a la siguiente pagina
      header("location:produccion.php");
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

  $cantidad_producto =  $_SESSION['cantidad_producto'];
  $valor_total_gasto =  $_SESSION['valor_total_gasto'];
  $cantidad_producir =  $_SESSION['cantidad_producir'];
  $nombreproducto =  $_SESSION['nombreproducto'];

  $importe =  $_SESSION['importe'];

  //agregar tabla a base de datos
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- <script defer src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, severny admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, my admin design, my admin dashboard bootstrap 4 dashboard template"
    />
    <meta
      name="description"
      content="My Admin is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Dashboard Simulaciones</title>
    <link
      rel="canonical"
      href="https://www.wrappixel.com/templates/myadmin-lite/"
    />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.png" />
    <!-- Bootstrap Core CSS -->
    <link
      href="../bower_components/bootstrap/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Menu CSS -->
    <link
      href="../bower_components/metisMenu/dist/metisMenu.min.css"
      rel="stylesheet"
    />
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet" />
    <link href="../css/stylese.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="../datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="../datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
  </head>

  <body style="background-image: url(img/fondo.png);">
  <?php
  include_once("../simulaciones/menu1.php");
  ?>
    <!-- Preloader -->
   <style>
  .input-group {
    display: flex;
    align-items: center;
   
  }

  .input-group .form-control {
    flex-grow: 1;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }

  .input-group .input-group-append {
    margin-left: -1px;
    z-index: 10;
  }
</style>
        <!-- /.sidebar-collapse -->
    
      <!-- Page Content -->
      <div class="wrapper" style="background: white; width: 80%; margin: auto;">
        <div class="container-fluid">
          <div class="row bg-title">
            <div class="col-lg-12">
              <h4 class="page-title">Programacion de Simulacion De Productos </h4>
              
              <ol class="breadcrumb">
              </ol>
            </div>
            <!-- /.col-lg-12 -->
          </div>
          <!-- row -->
          <!-- inicio-->
<hr>
<div style="margin-left:300px; display: flex; align-items: center;">
    <h1 style="margin-right: 10px; font-size: 30px; font-weight: bold;">1. Overview</h1>
    <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui Se ponen los Datos personales del Usuario, en este caso serias TU">
        <i class="fas fa-question"></i>
    </button>
</div>
<div style="margin-left:300px; display: flex; align-items: center;">
    <h1 style="margin-right: 10px; font-size: 30px; font-weight: bold;">2. Estudio de Mercado</h1>
    <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui Se ponen los Datos De tu emprendimiento ">
        <i class="fas fa-question"></i>
    </button>
</div>
<div style="margin-left:300px; display: flex; align-items: center;">
    <h1 style="margin-right: 10px; font-size: 30px; font-weight: bold;">3. Tamaño del Mercado Obgetivo</h1>
    <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui Se ponen Los Datos Del Mercado Obgetivo para asi poder calcular tus alcances ">
        <i class="fas fa-question"></i>
    </button>
</div>

<div style="margin-left:300px; display: flex; align-items: center;">
    <h1 style="margin-right: 10px ; font-size: 30px; font-weight: bold;">4. Informacion sobre Los Productos</h1>
    <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui Se Agregan todos los productos con sus respectivos precios y catidades para ser operados correctamente ">
        <i class="fas fa-question"></i>
    </button>
</div>
<div style="margin-left:300px; display: flex; align-items: center;">
    <h1 style="margin-right: 10px; font-size: 30px; font-weight: bold;">5. Informacion sobre Los Gastos</h1>
    <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui Se Agregan los Gastos que implican los productos y todo lo que se va a gastar para producirlos ">
        <i class="fas fa-question"></i>
    </button>
</div>

<div style="margin-left:300px; display: flex; align-items: center;">
    <h1 style="margin-right: 10px; font-size: 30px; font-weight: bold;">6. Simular Datos</h1>
    <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui se mostraran los resultados de la simulacion y podras jugar con los datos de entrada para lograr tu valor de ganancia estimado">
        <i class="fas fa-question"></i>
    </button>
</div>
<div style="margin-left:300px; display: flex; align-items: center;">
    <h1 style="margin-right: 10px; font-size: 30px; font-weight: bold;">7. Fin de simulcion</h1>
    <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="aqui ya se termina la travecia, recomendamos descargar y guardar la simulacion">
        <i class="fas fa-question"></i>
    </button>
</div>
<h3 style="margin-left:300px; ">Recuerda descargar y guardar tu simulacion para que tus datos esten seguros </h3>
<br><br>
<a style="margin-left:300px;  width:100px; " href="../simulaciones/simulaciones.php" class="btn btn-info  btn-rounded ">Atras</a>
<a style=" width: 300px; " href="overview.php" class="btn btn-success  btn-rounded ">Continuar</a>

<br><br><br><br>
 </div>                     
 </div>   


<!-- inicio -->
          <!-- /.row -->
       
   <footer>
      <?php
      include_once("../footer.php")
      ?>
   </footer>
      
      <!-- /#page-wrapper -->
      
    