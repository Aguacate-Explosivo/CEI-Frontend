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
      $_SESSION['valor_total_gasto'] = htmlentities($_POST["valor_total_gasto"]);
      $_SESSION['valor_total_costo'] = htmlentities($_POST["valor_total_costo"]);
      $_SESSION['cantidad_producir'] = htmlentities($_POST["cantidad_producir"]);

      $_SESSION['cantidad_productose'] = htmlentities($_POST["cantidad_productose"]);
      $_SESSION['valor_total_gastoe'] = htmlentities($_POST["valor_total_gastoe"]);
      $_SESSION['valor_total_costoe'] = htmlentities($_POST["valor_total_costoe"]);
      $_SESSION['cantidad_producire'] = htmlentities($_POST["cantidad_producire"]);
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

  $nombre_producto =  $_SESSION['nombre_producto'];
  $cantidad_producto =  $_SESSION['cantidad_producto'];
  $coste_unidad_producto =  $_SESSION['coste_unidad_producto'];
  $precio_venta_producto =  $_SESSION['precio_venta_producto'];
  $valor_total_gasto =  $_SESSION['valor_total_gasto'];
  $precio_unitario =  $_SESSION['precio_unitario'];
  $cantidad_productos =  $_SESSION['cantidad_productos'];
  $valor_total_costo =  $_SESSION['valor_total_costo'];
  $valor_total_gasto =  $_SESSION['valor_total_gasto'];
  $cantidad_producir =$_SESSION['cantidad_producir'];

  $cantidad_productose =  $_SESSION['cantidad_productose'];
  $valor_total_costoe =  $_SESSION['valor_total_costoe'];
  $valor_total_gastoe =  $_SESSION['valor_total_gastoe'];
  $cantidad_producire =$_SESSION['cantidad_producire'];
  $importe =  $_SESSION['importe'];

  //agregar tabla a base de datos
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Admin</title>
  <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.png">
  <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/stylese.css" rel="stylesheet">
</head>
<body style="background-image: url(img/fondo.png);">
  <?php
  include_once("../simulaciones/menu1.php");
  ?>
  
      <div class="wrapper" style="background: white; width: 80%; margin: auto;">
        <div class="container-fluid">
          <div class="row bg-title">
            <div class="col-lg-12">
              <h4 class="page-title">Paso 6</h4>
              <div style="float: right;  width: 200px; ">
                             <a href="drop.php" class="btn btn-danger btn-block btn-rounded waves-effect waves-light">Cerrar Sumulacion </a>
                            </div>
              <ol class="breadcrumb">
              </ol>
            </div>
            <!-- /.col-lg-12 -->
          </div>

    
<form class="range-form" method="POST" action="produccion.php" >
 <div class="inicio">
  <h1 class="text-center">Simulaciones Resultados Empresa</h1>
 <h3 class="text-center"><?php echo $nombre_negocio_plan ; ?></h3>
<br><br>
<div style="float: right;  width: 200px;">

 <a href="agregar_cantidad.php" class="btn btn-danger btn-block btn-rounded waves-effect waves-light">Agregar Materia Prima</a>
</div>
<div style="float: right;  width: 200px;">

 <a href="agregargastos.php" class="btn btn-warning btn-block btn-rounded waves-effect waves-light">Agregar Gastos</a>
</div>
<div style="float: right;  width: 200px;">

 <a href="agregar_costos.php" class="btn btn-warning btn-block btn-rounded waves-effect waves-light">Agregar Costos</a>
</div>
<div style="float: right;  width: 200px;">

 <a href="productos_reales.php" class="btn btn-info btn-block btn-rounded waves-effect waves-light">Productos</a>
</div>
<div style="float: right;  width: 200px;">

 <a href="gastos_reales.php" class="btn btn-info btn-block btn-rounded waves-effect waves-light">Gastos</a>
</div>
<br><br>
<?php



$_SESSION['cantidad_productose'] = isset($_POST["cantidad_productose"]) ? htmlentities($_POST["cantidad_productose"]) : 20;
$_SESSION['valor_total_gastoe'] = isset($_POST["valor_total_gastoe"]) ? htmlentities($_POST["valor_total_gastoe"]) :20;
$_SESSION['valor_total_costoe'] = isset($_POST["valor_total_costoe"]) ? htmlentities($_POST["valor_total_costoe"]) : 20;
$_SESSION['cantidad_producire'] = isset($_POST["cantidad_producire"]) ? htmlentities($_POST["cantidad_producire"]) : 20;

$cantidad_productose =  $_SESSION['cantidad_productose'];
$valor_total_costoe =  $_SESSION['valor_total_costoe'];
$valor_total_gastoe =  $_SESSION['valor_total_gastoe'];
$cantidad_producire =$_SESSION['cantidad_producire'];


?>   
    <div class="scroll">
    <div class="col-md-9">
      <label for="formControlRange">Cantidad Productos</label>
    <input type="range" min="1" max="100"  step="1"
     class="form-control-range range-slider" value="<?php echo $cantidad_producire; ?>"  id="cantidad_producire" 
     name="cantidad_producire">
    </div>
    <div class="col-md-3">
      <span id="cantidad_producire_barra">0</span>
  </div>
  <br>
<br><br>
<br>
<br>

  <div class="col-md-9">
      <label for="formControlRange">Catidad de Materia Prima</label>
    <input type="range" min="1" max="100"  step="1"
     class="form-control-range range-slider" value="<?php echo $cantidad_productose; ?>" 
     id="cantidad_productose" name="cantidad_productose">
    </div>
    <div class="col-md-3">
      <span id="cantidad_productose_barra">0</span>
  </div>
  <br>
<br><br>
<br>
<br>

  <div class="col-md-9">
      <label for="formControlRange">Gastos Generales</label>
    <input type="range" min="1" max="100" value="<?php echo $valor_total_gastoe; ?>"  step="1"
     class="form-control-range range-slider" id="valor_total_gastoe"  name="valor_total_gastoe">
    </div>
    <div class="col-md-3">
      <span id="valor_total_gastoe_barra">0</span>
  </div>
  <br>
<br><br>
 
<br>
<br>
 
  <div class="col-md-9">
      <label for="formControlRange">Costos Generales</label>
    <input type="range" min="1" max="100" value="<?php echo $valor_total_costoe; ?>"  step="1"
     class="form-control-range range-slider" id="valor_total_costoe" name="valor_total_costoe">
    </div>
    <div class="col-md-3">
      <span id="valor_total_costoe_barra">0</span>
  </div>
  <br>
<br><br>

  <br>
 <div>
 <button type="submit" class="btn btn-success btn-block btn-rounded waves-effect waves-light">Calcular Datos</button>     

</div>
</div>
<div class="table">
<?php
 require_once('../../conexion.php');
 $conexion=conectar();

 $producir_porcentaje= $cantidad_producire/100;
 $costos_porcentaje= $valor_total_costoe/100 ;
 $gastos_porcentaje= $valor_total_gastoe /100;
 $materiaprima_porcentaje= $cantidad_productose /100;
 $importe_porcentaje= $importe /100;

 $costos_simuladoss = ($valor_total_costo * $costos_porcentaje) + $valor_total_costo ;
 $costos_simulados = number_format($costos_simuladoss, 2 ,',', '.');

 $gastos_simuladoss = ($valor_total_gasto * $gastos_porcentaje) + $valor_total_gasto ;
 $gastos_simulados = number_format($gastos_simuladoss, 2 ,',', '.');

 $materiaprima_simuladoss = ($cantidad_producto * $materiaprima_porcentaje) + $cantidad_producto ;
 $materiaprima_simulados = number_format($materiaprima_simuladoss, 2 ,',', '.');


?>
  
<table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Datos Reales  </th>
                                <th>TOTALES  </th>
                                <th>Datos Simulados</th> 
                                <th>TOTALES  </th>
                            </tr>
                        </thead>
                            <!-- Contenido de la tabla -->
                            <tr>
                                <td>Total de Costos</td>
                                <td> <?php echo $valor_total_costo; ?></td>
                                <td>Total de Costos</td>
                                <td><?php echo $costos_simulados; ?></td>
                            </tr>
                            <tr>
                                <td>Total de Gastos</td>
                                <td> <?php echo $valor_total_gasto; ?></td>
                                <td>Total de Gastos</td>
                                <td> <?php echo $gastos_simulados; ?></td>
                            </tr>
                            <tr>
                                <td>Total en Materia Prima</td>
                                <td> <?php echo $cantidad_producto; ?> </td>
                                <td>Total en Materia Prima</td>
                                <td> <?php echo $materiaprima_simulados; ?></td>
                            </tr> 
                            <tr>
                                <td>Precio de Venta</td>
                                <td>  </td>
                                <td>Precio de Venta</td>
                                <td></td>
                            </tr> 
                          
                                   
                       </table>
</div>
 </div>                     
</form>
 
<hr>
<form  method="POST" enctype="multipart/form-data" >
<button style="width: 250px; left:300px;" value="Siguiente" name="Siguiente"  type="submit" class="btn btn-success btn-block btn-rounded waves-effect waves-light">Siguiente</button>                  
                      
   <!-- Inputs para transferir informacion -->
   <div>
                                                            <!-- Form 1 -->
                                                            <input type="hidden" id="doc_autor_plan" name="doc_autor_plan" value="<?php  echo $documento; ?>">
                                                            <label for="doc_autor_plan" class="form__label"></label>
                                                            <input type="hidden" id="autor_plan" name="autor_plan" value="<?php echo $nombre; ?>">
                                                            <label for="autor_plan" class="form__label"></label>
                                                            <input type="hidden" id="autor_email" name="autor_email" value="<?php echo $autor_email; ?>">
                                                            <label for="autor_email" class="form__label"></label>

                                                            <!-- Form 2 -->
                                                            <input type="text" id="nombre_negocio_plan" name="nombre_negocio_plan" value="<?php  echo $nombre_negocio_plan; ?>">
                                                            <label for="nombre_negocio_plan" class="form__label"></label>
                                                            <input type="text" id="industria_plan" name="industria_plan" value="<?php echo $industria_plan; ?>">
                                                            <label for="industria_plan" class="form__label"></label>
                                                            <input type="text" id="negocio_nuevo" name="negocio_nuevo" value="<?php echo $negocio_nuevo ?> - <?php echo $negocio_existente ?>">
                                                            <label for="negocio_nuevo" class="form__label"></label>
                                                            <input type="text" id="zona_geografica_plan" name="zona_geografica_plan" value="<?php  echo $zona_geografica_plan; ?>">
                                                            <label for="zona_geografica_plan" class="form__label"></label>
                                                            <input type="text" id="publico_objetivo_plan" name="publico_objetivo_plan" value="<?php echo $publico_objetivo_plan; ?>">
                                                            <label for="publico_objetivo_plan" class="form__label"></label>
                                                            <input type="text" id="innovacion_negocio_plan" name="innovacion_negocio_plan" value="<?php echo $innovacion_negocio_plan ?>">
                                                            <label for="innovacion_negocio_plan" class="form__label"></label>
                                                            <input type="text" id="Precio_negocio_plan" name="Precio_negocio_plan" value="<?php  echo $Precio_negocio_plan; ?>">
                                                            <label for="Precio_negocio_plan" class="form__label"></label>
                                                            <input type="text" id="Calidad_negocio_plan" name="Calidad_negocio_plan" value="<?php echo $Calidad_negocio_plan; ?>">
                                                            <label for="Calidad_negocio_plan" class="form__label"></label>
                                                            <input type="text" id="Rapidez_negocio_plan" name="Rapidez_negocio_plan" value="<?php echo $Rapidez_negocio_plan; ?>">
                                                            <label for="Rapidez_negocio_plan" class="form__label"></label>
                                                            <input type="text" id="clientes_interesados_plan" name="clientes_interesados_plan" value="<?php echo $clientes_interesados_plan; ?>">
                                                            <label for="clientes_interesados_plan" class="form__label"></label>
                                                            <input type="text" id="cantidadMonetaria_interesados_plan" name="cantidadMonetaria_interesados_plan" value="<?php echo $cantidadMonetaria_interesados_plan; ?>">
                                                            <label for="cantidadMonetaria_interesados_plan " class="form__label"></label>
                                                            <input type="text" id="socios_productores" name="socios_productores" value="<?php echo $socios_productores; ?>">
                                                            <label for="socios_productores" class="form__label"></label>
                                                            <input type="text" id="tipo_marketing_plan" name="tipo_marketing_plan" value="<?php echo $tipo_marketing_plan; ?>">
                                                            <label for="tipo_marketing_plan" class="form__label"></label>
                                                            <input type="text" id="inversion_publicidad" name="inversion_publicidad" value="<?php echo $inversion_publicidad; ?>">
                                                            <label for="inversion_publicidad" class="form__label"></label>

                                                            <input type="text" id="cantidad_producto" name="cantidad_producto" value="<?php echo $cantidad_producto; ?>">
                                                            <label for="cantidad_producto" class="form__label"></label>
                                                            <input type="text" id="valor_total_gasto" name="valor_total_gasto" value="<?php echo $valor_total_gasto; ?>">
                                                            <label for="valor_total_gasto" class="form__label"></label>
                                                            <input type="text" id="valor_total_costo" name="valor_total_costo" value="<?php echo $valor_total_costo; ?>">
                                                            <label for="valor_total_costo" class="form__label"></label>
                                                            <input type="text" id="cantidad_producir" name="cantidad_producir" value="<?php echo $cantidad_producir; ?>">
                                                            <label for="cantidad_producir" class="form__label"></label>




                                                            <input type="text" id="cantidad_productose" name="cantidad_productose" value="<?php echo $cantidad_productose; ?>">
                                                            <label for="cantidad_productose" class="form__label"></label>
                                                            

                                                            <input type="text" id="valor_total_gastoe" name="valor_total_gastoe" value="<?php echo $valor_total_gastoe; ?>">
                                                            <label for="valor_total_gastoe" class="form__label"></label>
                                                            
                                                            
                                                            <input type="text" id="valor_total_costoe" name="valor_total_costoe" value="<?php echo $valor_total_costoe; ?>">
                                                            <label for="valor_total_costoe" class="form__label"></label>
                                                            
                                                            <input type="text" id="cantidad_producire" name="cantidad_producire" value="<?php echo $cantidad_producire; ?>">
                                                            <label for="cantidad_producire" class="form__label"></label>
                                                            
                                                            <input type="text" id="importe" name="importe" value="<?php echo $importe; ?>">
                                                            <label for="importe" class="form__label"></label>
                                                            

                                                            
                                                        </div>
                                                        </form>       

<br><br><br>







<!-- inicio -->

  <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
  <script src="js/jquery.nicescroll.js"></script>
  <script src="js/waves.js"></script>
  <script src="../js/slider2.js"></script>
  <script src="js/myadmin.js"></script>
</body>
<footer>
    <?php
  include_once("../footer.php");
  ?>
</footer>
</html>















