<?php 
session_start();

$nombre = $_SESSION['nombre'] ;
$nombren =  $_SESSION['nombren'] ;
$total3 =  $_SESSION['total3'] ;
$total4 =  $_SESSION['total4'] ;
$total2 =  $_SESSION['total2'] ;
$total =  $_SESSION['total'] ;
$cantidadmin =  $_SESSION['cantidadmin'] ;
$cantidadmax =  $_SESSION['cantidadmax'] ;
$precioumin =  $_SESSION['precioumin'] ;
$precioumax =  $_SESSION['precioumax'] ;
$preciovmin =  $_SESSION['preciovmin'] ;
$preciovmax =  $_SESSION['preciovmax'] ;
$gastosgmin =  $_SESSION['gastosgmin'] ;
$gastosgmax =  $_SESSION['gastosgmax'] ;
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
  include_once("../../php/sesion_validacion.php");
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
 <h3 class="text-center"><?php echo $nombre ; ?></h3>
<br><br>
<div style="float: right;  width: 200px;">
 <a href="agregargastos.php" class="btn btn-info btn-block btn-rounded waves-effect waves-light">
  Regresar</a>
</div>
    <div class="scroll">
    <div class="col-md-9">
      <label for="formControlRange">Cantidad</label>
    <input type="range" min="<?php echo $cantidadmin ; ?>" max="<?php echo $cantidadmax ; ?>" value="<?php echo $total2 ; ?>" step="1" class="form-control-range range-slider"
     id="myRange"
    >
    </div>
    <div class="col-md-3">
      <span id="demo">0</span>
  </div>
  <br>
<br><br>

  <label for=""> porsentaje</label>
<br>
<br>
<br>

  <div class="col-md-9">
      <label for="formControlRange">Precio Unitario</label>
    <input type="range" min="<?php echo $precioumin ; ?>" max="<?php echo $precioumax ; ?>" value="<?php echo $total3 ; ?>" step="1" class="form-control-range range-slider" id="myRangee">
    </div>
    <div class="col-md-3">
      <span id="demoe">0</span>
  </div>
  <br>
<br><br>
  <label for="">porcentaje%</label>
<br>
<br>
<br>

  <div class="col-md-9">
      <label for="formControlRange">Precio Venta</label>
    <input type="range" min="<?php echo $preciovmin ; ?>" max="<?php echo $preciovmax ; ?>" value="<?php echo $total4 ; ?>" step="1" class="form-control-range range-slider" id="myRangeeee">
    </div>
    <div class="col-md-3">
      <span id="demoeee">0</span>
  </div>
  <br>
<br><br>
  <label for="">porcentaje%</label>
<br>
<br>
<br>

  <div class="col-md-9">
      <label for="formControlRange">Gastos Generales</label>
    <input type="range" min="<?php echo $gastosgmin ; ?>" max="<?php echo $gastosgmax ; ?>" value="<?php echo $total ; ?>" step="1" class="form-control-range range-slider" id="myRangeee">
    </div>
    <div class="col-md-3">
      <span id="demoee">0</span>
  </div>
  <br>
<br><br>
  <label for="">porcentaje%</label>
  <br>
  <br>
 <div>
 <button type="submit" class="btn btn-success btn-block btn-rounded waves-effect waves-light">Calcular Datos</button>     

</div>
</div>
<div class="table">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Datos Reales  </th>
                                <th>TOTALES  </th>
                                <th>Datos Simulados</th> 
                                <th>TOTALES  </th>   
                                                         
                            </tr>
                        </thead>
                                <?php
                                 require_once('../administradores/conexion.php');
                                 $conexion=conectar(); 
                                 $consulta2 ="SELECT cantidad * coste_unitario tota FROM `producto`";
                                 $busqueda=mysqli_query($conexion,$consulta2);
                                    
                            foreach($busqueda as $elemento){ ?>
                            <!-- Contenido de la tabla -->
                            <tr>
                                <td>Ingresos Totales</td>
                                <td><?php echo $elemento["tota"]; ?></td>
                                <td>Ingresos Totales</td>
                                <td><?php echo $elemento["tota"]; ?></td>
                            </tr>
                            <tr>
                                <td>Costes Totales</td>
                                <td><?php echo $elemento["tota"];  ?> </td>
                                <td>Costes Totales</td>
                                <td><?php echo $elemento["tota"]; ?></td>
                            </tr>
                            <tr>
                                <td>Margen Total</td>
                                <td><?php echo $elemento["tota"];   ?> </td>
                                <td>Margen Total</td>
                                <td><?php echo $elemento["tota"]; ?></td>
                            </tr> 
                            <tr>
                                <td>Gastos Generales</td>
                                <td><?php echo $elemento["tota"];   ?> </td>
                                <td>Gastos Generales</td>
                                <td><?php echo $elemento["tota"]; ?></td>
                            </tr> 
                            <tr>
                                <td>Resultado Total</td>
                                <td><?php echo $elemento["tota"];  ?> </td>
                                <td>Resultado Total</td>
                                <td><?php echo $elemento["tota"]; ?></td>
                            </tr> 
                                 <?php
                                }
                                ?>             
                       </table>
</div>
 </div>                     
</form>
 
<hr>
<div class="bajo">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Datos Reales </th>
                                <th>Análisis datos simulados</th>    
                                                          
                            </tr>
                        </thead>
                            <tr>
                            <td>  Productos: <a style="margin: 2px; border-radius: 5px;" href="#" class="btn btn-info" > Ver Mas</a></td>
                                <td>  Productos: <a style="margin: 2px; border-radius: 5px;" href="#" class="btn btn-info" > Ver Mas</a></td>
                            </tr>
                                
                            <tr>
                            <td> Datos Generales: <a style="margin: 2px; border-radius: 5px;" href="#" class="btn btn-info" > Ver Mas</a></td> 

                                <td> Datos Generales: <a style="margin: 2px; border-radius: 5px;" href="#" class="btn btn-info" > Ver Mas</a></td> 
                            </tr>           
        </table>
</div>
<div>
 <a style="width: 200px; left: 900px;;" href="#" class="btn btn-success btn-block btn-rounded waves-effect waves-light">
  Siguiente</a>
</div>


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
