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
      
      // nuevos datos de formulario
      $_SESSION['valor_total_gasto'] = htmlentities($_POST["valor_total_gasto"]);
      $_SESSION['precio_unitario'] = htmlentities($_POST["precio_unitario"]);
      $_SESSION['cantidad_producto'] = htmlentities($_POST["cantidad_producto"]);
      $_SESSION['valor_total_gasto'] = htmlentities($_POST["valor_total_gasto"]);
      $_SESSION['valor_total_costo'] = htmlentities($_POST["valor_total_costo"]);
      $_SESSION['cantidad_producir'] = htmlentities($_POST["cantidad_producir"]);

      $_SESSION['cantidad_productose'] = htmlentities($_POST["cantidad_productose"]);
      $_SESSION['valor_total_gastoe'] = htmlentities($_POST["valor_total_gastoe"]);
      $_SESSION['valor_total_costoe'] = htmlentities($_POST["valor_total_costoe"]);
      $_SESSION['cantidad_producire'] = htmlentities($_POST["cantidad_producire"]);
      $_SESSION['importe'] = htmlentities($_POST["importe"]);
      $_SESSION['nombreproducto'] = htmlentities($_POST["nombreproducto"]);

  
      // Redirecion a la siguiente pagina
      header("location:soluciones.php");
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
  $valor_total_gasto =  $_SESSION['valor_total_gasto'];
  $valor_total_costo =  $_SESSION['valor_total_costo'];
  $valor_total_gasto =  $_SESSION['valor_total_gasto'];
  $cantidad_producir =$_SESSION['cantidad_producir'];

  $cantidad_productose =  $_SESSION['cantidad_productose'];
  $valor_total_costoe =  $_SESSION['valor_total_costoe'];
  $valor_total_gastoe =  $_SESSION['valor_total_gastoe'];
  $cantidad_producire =$_SESSION['cantidad_producire'];
  $nombreproducto =  $_SESSION['nombreproducto'];
  $porcentaje_ganancia =  $_SESSION['porcentaje_ganancia'];
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
       
    
<form class="range-form" method="POST" action="producto.php" >
 <div class="inicio">
  <h1 class="text-center">Simulaciones Resultados Empresa</h1>
 <h3 class="text-center"><?php echo $nombre_negocio_plan ; ?></h3>


<div style="float: right;  width: 200px;">

 <a href="drop1.php" class="btn btn-danger btn-block btn-rounded waves-effect waves-light">Cerrar Simulación </a>
</div>
<div style="float: right;  width: 200px;">

 <a href="pdf.php" target="_blank"  class="btn btn-warning btn-block btn-rounded waves-effect waves-light">Descargar PDF</a>
</div>
<div style="float: right;  width: 200px;">

 <a href="guardar_simulacion.php" class="btn btn-success btn-block btn-rounded waves-effect waves-light">Guarda Tus Simulaciones </a>
</div>
<div style="float: right;  width: 200px;">

 <a href="produccion.php" class="btn btn-info btn-block btn-rounded waves-effect waves-light">Continuar Simulando</a>
</div>

</form>

<div class="table">
<?php
 require_once('../../conexion.php');
 $conexion=conectar();

 $producir_porcentaje= $cantidad_producire/100;
 $costos_porcentaje= $valor_total_costoe/100 ;
 $gastos_porcentaje= $valor_total_gastoe /100;
 $materiaprima_porcentaje= $cantidad_productose /100;
 $porcentaje_ganancias= $porcentaje_ganancia /100;
 $importe_porcentaje= $importe /100;

 $costos_simuladoss = ($valor_total_costo * $costos_porcentaje) + $valor_total_costo ;
 $costos_simulados = number_format($costos_simuladoss, 2 ,',', '.');

 $gastos_simuladoss = ($valor_total_gasto * $gastos_porcentaje) + $valor_total_gasto ;
 $gastos_simulados = number_format($gastos_simuladoss, 2 ,',', '.');

 $materiaprima_simuladoss = ($cantidad_producto * $materiaprima_porcentaje) + $cantidad_producto ;
 $materiaprima_simulados = number_format($materiaprima_simuladoss, 2 ,',', '.');

 $valor_total_costos = number_format($valor_total_costo, 2 ,',', '.');
 $valor_total_gastos = number_format($valor_total_gasto, 2 ,',', '.');
 $cantidad_productos = number_format($cantidad_producto, 2 ,',', '.');
 
 $precio_unidade = $valor_total_costo + $valor_total_gasto + $cantidad_producto;
 $precio_unidades=$precio_unidade/$cantidad_producir;
 $precio_unidad = number_format($precio_unidades, 0 ,',', '.');

 $precio_unidade_simulados = $costos_simuladoss + $gastos_simuladoss + $materiaprima_simuladoss;
 $cantida =($cantidad_producir * $producir_porcentaje)+ $cantidad_producir ;
 $precio_unidades_simulados = ($cantidad_producir + $cantida);
 $precio_unidade_simuladoss= $precio_unidade_simulados /  $cantida ;
 $precio_unidad_simulados = number_format($precio_unidade_simuladoss, 0 ,',', '.');

 $precio_unidade_simuladosss = number_format($precio_unidade_simulados, 2 ,',', '.');
 $precio_unida = number_format($precio_unidade, 2 ,',', '.');

 $porcentaje= ($precio_unidade_simuladoss * $porcentaje_ganancias) + $precio_unidade_simuladoss ;
$porcentajes = number_format($porcentaje, 0 ,',', '.');

$total_ganancia=($cantida*$porcentaje_ganancias) + $cantida;
$total_ganancias=$total_ganancia*$porcentaje;
$total_gananciass = number_format($total_ganancias, 2 ,',', '.');

$ganancia_neta=$total_ganancias-$precio_unidade_simulados;
$ganancias_neta = number_format($ganancia_neta, 2 ,',', '.');

?>
  
<table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>

                            <tr>
                           
                                <th style="text-align: center; vertical-align: middle;">Datos Reales  </th>
                                <th style="text-align: center; vertical-align: middle;">TOTALES  </th>
                                <th style="text-align: center; vertical-align: middle;">Datos Simulados</th> 
                                <th style="text-align: center; vertical-align: middle;">TOTALES  </th>
                            </tr>
                        </thead>
                            <!-- Contenido de la tabla -->
                            <tr>
                                <td style="text-align: center; vertical-align: middle;">Total de Costos</td>
                                <td style="text-align: center; vertical-align: middle;"> <?php echo $valor_total_costos; ?></td>
                                <td style="text-align: center; vertical-align: middle;">Total de Costos</td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $costos_simulados; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align: center; vertical-align: middle;">Total de Gastos</td>
                                <td style="text-align: center; vertical-align: middle;"> <?php echo $valor_total_gastos; ?></td>
                                <td style="text-align: center; vertical-align: middle;">Total de Gastos</td>
                                <td style="text-align: center; vertical-align: middle;"> <?php echo $gastos_simulados; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align: center; vertical-align: middle;">Total en Materia Prima</td>
                                <td style="text-align: center; vertical-align: middle;"> <?php echo $cantidad_productos; ?> </td>
                                <td style="text-align: center; vertical-align: middle;">Total en Materia Prima</td>
                                <td style="text-align: center; vertical-align: middle;"> <?php echo $materiaprima_simulados; ?></td>
                            </tr> 
                              <tr>
                                <td style="text-align: center; vertical-align: middle;">Invercion Total</td>
                                <td style="text-align: center; vertical-align: middle;"> <?php echo $precio_unida; ?> </td>
                                <td style="text-align: center; vertical-align: middle;">Invercion Total</td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $precio_unidade_simuladosss; ?> </td>
                            </tr> 
                            <tr>
                                <td style="text-align: center; vertical-align: middle;">Precio de Venta Unidad</td>
                                <td style="text-align: center; vertical-align: middle;"> <?php echo $precio_unidad; ?> Pesos Und </td>
                                <td style="text-align: center; vertical-align: middle;">Precio de Venta Unidad</td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $precio_unidad_simulados; ?> Pesos Und</td>
                            </tr> 
                          
                                <tr>
                                <td style="text-align: center; vertical-align: middle;">Precio de Venta Unidad + Porcentaje</td>
                                <td style="text-align: center; vertical-align: middle;"> 0 Pesos </td>
                                <td style="text-align: center; vertical-align: middle;">Precio de Venta Unidad  + Porcentaje</td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $porcentajes; ?> Pesos Und</td>
                            </tr> 
                                 <tr>
                                <td style="text-align: center; vertical-align: middle;">Total Ganancias</td>
                                <td style="text-align: center; vertical-align: middle;"> 0 Pesos </td>
                                <td style="text-align: center; vertical-align: middle;">Total Ganancias</td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $total_gananciass; ?> </td>
                            </tr> 

                             <tr>
                                <td style="text-align: center; vertical-align: middle;">Ganancia Neta</td>
                                <td style="text-align: center; vertical-align: middle;"> 0 Pesos </td>
                                <td style="text-align: center; vertical-align: middle;">Ganancia Neta</td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $ganancias_neta; ?> </td>
                            </tr> 
                                   
                       </table>
</div>
</div>

<form  method="POST" enctype="multipart/form-data" >
         <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
             
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
                                                            
                                                             <input type="text" id="porcentaje_ganancia" name="porcentaje_ganancia" value="<?php echo $porcentaje_ganancia; ?>">
                                                            <label for="porcentaje_ganancia" class="form__label"></label>

                                                            <input type="text" id="nombreproducto" name="nombreproducto" value="<?php echo $nombreproducto; ?>">
                                                            <label for="nombreproducto" class="form__label"></label>
                                                            <input type="text" id="importe" name="importe" value="<?php echo $importe; ?>">
                                                            <label for="importe" class="form__label"></label>
                                                            

                                                            
                                                        </div>
                                                        </form>       


<!-- inicio -->


</body>
<footer>
      <?php
      include_once("../footer.php")
      ?>
   </footer>
</html>
