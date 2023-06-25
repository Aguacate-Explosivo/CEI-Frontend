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


  
      // Redirecion a la siguiente pagina
      header("location:producto.php");
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
  $precio_venta =  $_SESSION['precio_venta'];
  $gastos_generales =  $_SESSION['gastos_generales'];

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
<body>
  <?php
  include_once("../sesion_validacion.php");
  ?>
  <div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0">
      <div class="navbar-header">
        <a class="navbar-toggle hidden-sm hidden-md hidden-lg" href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse">
          <i class="ti-menu"></i>
        </a>
        <div class="top-left-part">
          <a class="logo" href="index.php">
            <i class="glyphicon glyphicon-fire"></i>
            <span class="hidden-xs">Dashboard</span>
          </a>
        </div>
        <ul class="nav navbar-top-links navbar-left hidden-xs">
          <li>
            <a href="javascript:void(0)" class="open-close hidden-xs hidden-lg waves-effect waves-light">
              <i class="ti-arrow-circle-left ti-menu"></i>
            </a>
          </li>
        </ul>
        <ul class="nav navbar-top-links navbar-right pull-right">
          <li>
            <a class="profile-pic" href="#">
              <i class="ti-user"></i>
              <b class="hidden-xs">Administrador</b>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="navbar-default sidebar nicescroll" role="navigation">
      <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
          <li class="sidebar-search hidden-sm hidden-md hidden-lg">
            <div class="input-group custom-search-form">
              <input type="text" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button class="btn btn-success" type="button">
                  <i class="ti-search"></i>
                </button>
              </span>
            </div>
          </li>
          <li>
            <a href="../index.php" class="waves-effect">
              <i class="glyphicon glyphicon-fire fa-fw"></i>
              Dashboard
            </a>
          </li>
          <li>
            <a href="../DashCitas.php" class="waves-effect">
              <i class="ti-calendar fa-fw"></i>
              Citas
            </a>
          </li>
          <li>
            <a href="../DashEventos.php" class="waves-effect">
              <i class="ti-video-camera fa-fw"></i>
              Eventos
            </a>
          </li>
          <li>
            <a href="../DashCursos.php" class="waves-effect">
              <i class="ti-ink-pen fa-fw"></i>
              Cursos
            </a>
          </li>
          <li>
            <a href="index.php" class="waves-effect active">
              <i class="ti-ink-pen fa-fw"></i>
             Simulaciones
            </a>
          </li>
        </ul>
        <div class="center p-20">
          <span class="hide-menu">
            <a href="../../php/log_out.php" class="btn btn-success btn-block btn-rounded waves-effect waves-light">
              Cerrar sesión
            </a>
          </span>
        </div>
      </div>
    </div>
    <div id="page-wrapper">
      <div class="container-fluid">
       
   
<!-- inicio-->
<hr>
    
<form class="range-form" method="POST" action="producto.php" >
 <div class="inicio">
  <h1 class="text-center">Simulaciones Resultados Empresa</h1>
 <h3 class="text-center"><?php echo $nombre_negocio_plan ; ?></h3>
<br><br>
<div style="float: right;  width: 200px;">

 <a href="agregarproducto.php" class="btn btn-danger btn-block btn-rounded waves-effect waves-light">Agregar Productos</a>
</div>
<div style="float: right;  width: 200px;">

 <a href="agregargastos.php" class="btn btn-warning btn-block btn-rounded waves-effect waves-light">Agregar Gastos</a>
</div>
<div style="float: right;  width: 200px;">

 <a href="productos_reales.php" class="btn btn-info btn-block btn-rounded waves-effect waves-light">Productos</a>
</div>
<div style="float: right;  width: 200px;">

 <a href="gastos_reales.php" class="btn btn-info btn-block btn-rounded waves-effect waves-light">Gastos</a>
</div>
<br><br>
<?php
 $_SESSION['gastos_generales'] = htmlentities($_POST["gastos_generales"]);
 $_SESSION['precio_unitario'] = htmlentities($_POST["precio_unitario"]);
 $_SESSION['cantidad_productos'] = htmlentities($_POST["cantidad_productos"]);
 $_SESSION['precio_venta'] = htmlentities($_POST["precio_venta"]);
 $precio_unitario =  $_SESSION['precio_unitario'];
 $cantidad_productos =  $_SESSION['cantidad_productos'];
 $precio_venta =  $_SESSION['precio_venta'];
 $gastos_generales =  $_SESSION['gastos_generales']; 
 ?>
    <div class="scroll">
    <div class="col-md-9">
      <label for="formControlRange">Cantidad Prouctos</label>
    <input type="range" min="1" max="100"  step="1"
     class="form-control-range range-slider" value="<?php echo $cantidad_productos; ?>"  id="cantidad_productos" name="cantidad_productos">
    </div>
    <div class="col-md-3">
      <span id="cantidad_productos_barra">0</span>
  </div>
  <br>
<br><br>
<br>
<br>

  <div class="col-md-9">
      <label for="formControlRange">Precio Unitario</label>
    <input type="range" min="1" max="100"  step="1"
     class="form-control-range range-slider" value="<?php echo $precio_unitario; ?>" id="precio_unitario" name="precio_unitario">
    </div>
    <div class="col-md-3">
      <span id="precio_unitario_barra">0</span>
  </div>
  <br>
<br><br>
<br>
<br>

  <div class="col-md-9">
      <label for="formControlRange">Precio Venta</label>
    <input type="range" min="1" max="100" value="<?php echo $precio_venta; ?>"  step="1"
     class="form-control-range range-slider" id="precio_venta"  name="precio_venta">
    </div>
    <div class="col-md-3">
      <span id="precio_venta_barra">0</span>
  </div>
  <br>
<br><br>
 
<br>
<br>
 
  <div class="col-md-9">
      <label for="formControlRange">Gastos Generales</label>
    <input type="range" min="1" max="100" value="<?php echo $gastos_generales; ?>"  step="1"
     class="form-control-range range-slider" id="gastos_generales" name="gastos_generales">
    </div>
    <div class="col-md-3">
      <span id="gastos_generales_barra">0</span>
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
 $consult ="SELECT SUM(cantidad) as cantidad_producto_simulado  FROM ` $nombre_negocio_plan` ";
 $busque=mysqli_query($conexion,$consult);
 $tota= mysqli_fetch_array($busque);
 $cantidad_producto_simulado = $tota['cantidad_producto_simulado'];

 $consult_simulado ="SELECT SUM(coste_unitario) as coste_unitario_simulado  FROM ` $nombre_negocio_plan` ";
 $busque_simulado =mysqli_query($conexion,$consult_simulado);
 $tota_simulado = mysqli_fetch_array($busque_simulado);
 $coste_unitario_simulado = $tota_simulado['coste_unitario_simulado'];

 $consulta_simulado ="SELECT SUM(precio_venta) as precio_venta_simulado  FROM ` $nombre_negocio_plan` ";
 $busqueda_simulado =mysqli_query($conexion,$consulta_simulado);
 $total_simulado= mysqli_fetch_array($busqueda_simulado);
 $precio_venta_simulado = $total_simulado['precio_venta_simulado'];

 $consulta21_simulado ="SELECT SUM(valor) as valor_total_gasto_simulado  FROM ` $documento` ";
 $busqueda1_simulado=mysqli_query($conexion,$consulta21_simulado);
 $total11_simulado= mysqli_fetch_array($busqueda1_simulado);
 $valor_total_gasto_simulado = $total11_simulado['valor_total_gasto_simulado'];


$cantidad_productos_porcentaje= $cantidad_productos/100;
$precio_unitario_porcentaje= $precio_unitario/100 ;
$precio_venta_porcentaje= $precio_venta /100;
$gastos_generales_porcentaje= $gastos_generales /100;


 $cantidad_producto_simulados = ($cantidad_producto_simulado * $cantidad_productos_porcentaje) + $cantidad_producto_simulado ;
 $coste_unitario_simulados =($coste_unitario_simulado * $precio_unitario_porcentaje) + $coste_unitario_simulado ;
 $precio_venta_simulados = ($precio_venta_simulado * $precio_venta_porcentaje) + $precio_venta_simulado ;

$valor_total_gasto_simulados = ($valor_total_gasto_simulado * $gastos_generales_porcentaje) + $valor_total_gasto_simulado ;
$valor_total_gasto_simuladoss = $valor_total_gasto_simulados ;
$valor_total_gasto_simuladoss = number_format($valor_total_gasto_simuladoss, 2 ,',', '.');

$ingresos_totales = $cantidad_producto * $coste_unidad_producto;
$ingresos_totaless = $ingresos_totales ;
$ingresos_totaless = number_format($ingresos_totaless, 2 ,',', '.');

$Margen_Total= $ingresos_totales - $valor_total_gasto  ;
$Margen_Totale= $Margen_Total ;
$Margen_Totale = number_format($Margen_Totale, 2 ,',', '.');

$valor_total_gastos=  $valor_total_gasto  ;
$valor_total_gastos = number_format($valor_total_gastos, 2 ,',', '.');


$ingresos_totales_simulado= $cantidad_producto_simulados * $coste_unitario_simulados;
$ingresos_totales_simulados= $ingresos_totales_simulado;
$ingresos_totales_simulados = number_format($ingresos_totales_simulados, 2 ,',', '.');

$Margen_Total_simulado = $ingresos_totales_simulado - $valor_total_gasto_simulados  ;
$Margen_Total_simulados =$Margen_Total_simulado ;
$Margen_Total_simulados = number_format($Margen_Total_simulados, 2 ,',', '.');

 ?>  
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Datos Reales  </th>
                                <th>TOTALES  </th>
                                <th>Datos Simulados</th> 
                                <th>TOTALES  </th>   
                                <?php echo  $valor_total_gasto_simulados ?>
                            </tr>
                        </thead>
                            <!-- Contenido de la tabla -->
                            <tr>
                                <td>Ingresos Totales</td>
                                <td><?php  echo $ingresos_totaless ?></td>
                                <td>Ingresos Totales</td>
                                <td><?php echo  $ingresos_totales_simulados ?></td>
                            </tr>
                            <tr>
                                <td>Costes Totales</td>
                                <td><?php echo  $valor_total_gastos ?></td>
                                <td>Costes Totales</td>
                                <td><?php  echo $valor_total_gasto_simuladoss?></td>
                            </tr>
                            <tr>
                                <td>Margen Total</td>
                                <td>  <?php echo  $Margen_Totale ?> </td>
                                <td>Margen Total</td>
                                <td><?php echo  $Margen_Total_simulados ?></td>
                            </tr> 
                            <tr>
                                <td>Gastos Generales</td>
                                <td><?php  $ingresos_totaless ?> </td>
                                <td>Gastos Generales</td>
                                <td><?php  $ingresos_totaless ?></td>
                            </tr> 
                            <tr>
                                <td>Resultado Total</td>
                                <td><?php  $ingresos_totaless ?> </td>
                                <td>Resultado Total</td>
                                <td><?php  $ingresos_totaless ?></td>
                            </tr> 
                               
                                
                                               
                       </table>
</div>
 </div>                     
</form>
 
<hr>

<br><br><br><br><br><br>

<h1 class="text-center">Productos Simulados  </h1>
<div class="bajo">

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Producto </th>
                                <th>Cantidad </th>    
                                <th>Coste Unitario</th> 
                                <th>Precio Venta</th> 
                                <th>Margen unitario</th> 
                                <th>Margen unitario %</th> 
                                <th>Costes totales </th> 
                                <th>Ingresos totales </th> 
                                <th>Margen total </th> 
                                
                            </tr>
                        </thead>
                                <?php
                                
                                 $conexion=conectar(); 
                                 $consulta2 ="SELECT * FROM ` $nombre_negocio_plan` ";
                                 $busqueda=mysqli_query($conexion,$consulta2);

                            foreach($busqueda as $elemento){ 
                                // operaciones
                                $_SESSION['gastos_generales'] = htmlentities($_POST["gastos_generales"]);
                                $_SESSION['precio_unitario'] = htmlentities($_POST["precio_unitario"]);
                                $_SESSION['cantidad_productos'] = htmlentities($_POST["cantidad_productos"]);
                                $_SESSION['precio_venta'] = htmlentities($_POST["precio_venta"]);
                                $precio_unitario =  $_SESSION['precio_unitario'];
                                $cantidad_productos =  $_SESSION['cantidad_productos'];
                                $precio_venta =  $_SESSION['precio_venta'];
                                $gastos_generales =  $_SESSION['gastos_generales']; 
                                
                                $gastos_generales_porcentaje= $gastos_generales /100;
                                $cantidad = ($elemento["cantidad"] * $cantidad_productos_porcentaje) +$elemento["cantidad"];
                                $cantidadd = $cantidad;
                                $cantidadd = number_format($cantidadd, 0 ,',', '.');

                                $coste_unitario =($elemento["coste_unitario" ] *  $precio_unitario_porcentaje )+ $elemento["coste_unitario" ];
                                $coste_unitarioo =$coste_unitario;
                                $coste_unitarioo = number_format($coste_unitarioo, 2 ,',', '.');

                                $precio_venta1 = ($elemento["precio_venta"] *$precio_venta_porcentaje )+ $elemento["precio_venta"] ;
                                $precio_venta11 = $precio_venta1;
                                $precio_venta11 = number_format($precio_venta11, 2 ,',', '.');

                                $margen_unitario = $precio_venta1 - $coste_unitario    ;
                                $margen_unitarioo = $margen_unitario   ;
                                $margen_unitarioo = number_format($margen_unitarioo, 2 ,',', '.');

                                $margen_unitario1 = $margen_unitario / $precio_venta1 *100;
                                $margen_unitario11 = $margen_unitario1 ;
                                $margen_unitario11 = number_format($margen_unitario11, 2);

                                $costes_totales = $cantidad * $coste_unitario ;
                                $costes_totaless = $costes_totales  ;
                                $costes_totaless = number_format($costes_totaless, 2 ,',', '.');

                                $ingresos_totales = $cantidad * $precio_venta1 ;
                                $ingresos_totaless =  $ingresos_totales ;
                                $ingresos_totaless = number_format($ingresos_totaless, 2 ,',', '.');
                                
                                $margenes_total = $ingresos_totales - $costes_totales  ;
                                $margenes_totale = $margenes_total ;
                                $margenes_totale = number_format($margenes_totale, 2 ,',', '.');
                               
                              ?>
                            <!-- Contenido de la tabla -->
                            
                            <tr>
                           
                                <td><?php echo $elemento["nombre"]; ?></td>
                                <td><?php echo $cantidadd ; ?></td>
                                <td><?php echo $coste_unitarioo;?></td>
                                <td><?php echo $precio_venta11;?></td>
                                <td><?php echo $margen_unitarioo; ?></td>
                                <td><?php echo $margen_unitario11; ?> %</td>
                                <td><?php echo $costes_totaless; ?></td>
                                <td><?php echo $ingresos_totaless; ?></td>
                                <td><?php echo $margenes_totale; ?></td>
                     
                            </tr>
                           
                                 <?php
                            } 
                        
                                ?>   
                                
                       </table>
</div>
<br><br><br><br><br>
<h1 class="text-center">Gastos Simulados</h1>
<div class="bajo">
  

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Concepto </th>
                                <th>Importe</th>     
                                             
                            </tr>
                        </thead>
                                <?php
                                
                                 $conexion=conectar(); 
                                 $consulta2 ="SELECT * FROM ` $documento` ";
                                 $busqueda=mysqli_query($conexion,$consulta2);
                                   
                                 

                            foreach($busqueda as $elemento){ 
                              $consulta21 ="SELECT SUM(valor) as valor_total_gasto  FROM ` $documento` ";
                              $busqueda1=mysqli_query($conexion,$consulta21);
                              $total11= mysqli_fetch_array($busqueda1);
                              $valor_total = $total11['valor_total_gasto'];

                              $total= ( $elemento["valor"] * $gastos_generales_porcentaje) + $elemento["valor"]; 
                              $totale= $total ; 
                              $totale= number_format($totale, 0 ,',', '.');

                              $totales =($valor_total * $gastos_generales_porcentaje)  + $valor_total  ;
                              $totaless = $totales ;
                              $totaless = number_format($totaless, 2 ,',', '.');

                              ?>
                            <!-- Contenido de la tabla -->
                            <tr>
                                <td><?php echo $elemento["nombre"]; ?></td>
                                <td><?php echo  $totale; ?></td>
                              
                            </tr>
                           
                                 <?php
                                }  
                                ?>   
                                
                                <thead>
                                <tr><th >TOTAL</th>
                                <th ><?php echo $totaless ; ?></td>
                                
                            
                            </tr>
                                </thead>
                       </table>
</div>

<form  method="POST" enctype="multipart/form-data" >
<button style="width: 250px;" value="Siguiente" name="Siguiente"  type="submit" class="btn btn-success btn-block btn-rounded waves-effect waves-light">Siguiente</button>                  
                      
   <!-- Inputs para transferir informacion -->
   <div>
                                                            <!-- Form 1 -->
                                                            <input type="text" id="doc_autor_plan" name="doc_autor_plan" value="<?php  echo $documento; ?>">
                                                            <label for="doc_autor_plan" class="form__label"></label>
                                                            <input type="text" id="autor_plan" name="autor_plan" value="<?php echo $nombre; ?>">
                                                            <label for="autor_plan" class="form__label"></label>
                                                            <input type="email" id="autor_email" name="autor_email" value="<?php echo $autor_email; ?>">
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


                                                            <input type="text" id="cantidad_producto" name="cantidad_producto" placeholder="4222" value="<?php echo $cantidad_producto; ?>">
                                                            <label for="cantidad_producto" class="form__label"></label>
                                                            <input type="text" id="coste_unidad_producto" name="coste_unidad_producto" value="<?php echo $coste_unidad_producto; ?>">
                                                            <label for="coste_unidad_producto" class="form__label"></label>
                                                            <input type="text" id="precio_venta_producto" name="precio_venta_producto" value="<?php echo $precio_venta_producto; ?>">
                                                            <label for="precio_venta_producto" class="form__label"></label>
                                                            <input type="text" id="valor_total_gasto" name="valor_total_gasto" value="<?php echo $valor_total_gasto; ?>">
                                                            <label for="valor_total_gasto" class="form__label"></label>

                                                            <input type="text" id="cantidad_productos" name="cantidad_productos" value="<?php echo $cantidad_productos; ?>">
                                                            <label for="cantidad_productos" class="form__label"></label>
                                                            <input type="text" id="precio_unitario" name="precio_unitario" value="<?php echo $precio_unitario; ?>">
                                                            <label for="precio_unitario" class="form__label"></label>
                                                            <input type="text" id="precio_venta" name="precio_venta" value="<?php echo $precio_venta; ?>">
                                                            <label for="precio_venta" class="form__label"></label>
                                                            <input type="text" id="gastos_generales" name="gastos_generales" value="<?php echo $gastos_generales; ?>">
                                                            <label for="gastos_generales" class="form__label"></label>

                                                            
                                                        </div>
                                                        </form>       


<!-- inicio -->

        <footer class="footer text-center">
      FACNET - 2023 &copy; 
    </footer>
  </div>
  <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
  <script src="js/jquery.nicescroll.js"></script>
  <script src="js/waves.js"></script>
  <script src="../js/slider.js"></script>
  <script src="js/myadmin.js"></script>
</body>

</html>
