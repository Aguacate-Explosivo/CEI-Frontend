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
  
      // nuevos datos de formulario
      $_SESSION['cantidadmin'] = htmlentities($_POST["cantidadmin"]);
      $_SESSION['cantidadmax'] = htmlentities($_POST["cantidadmax"]);
      $_SESSION['precioumin'] = htmlentities($_POST["precioumin"]);
      $_SESSION['precioumax'] = htmlentities($_POST["precioumax"]);
      $_SESSION['preciovmin'] = htmlentities($_POST["preciovmin"]);
      $_SESSION['preciovmax'] = htmlentities($_POST["preciovmax"]);
      $_SESSION['gastosgmin'] = htmlentities($_POST["gastosgmin"]);
      $_SESSION['gastosgmax'] = htmlentities($_POST["gastosgmax"]);
  
      // Redirecion a la siguiente pagina
      header("location:agregarproducto.php");
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

  <body>
  <?php
      include_once("../administradores/sesion_validacion.php")
      ?>
    <!-- Preloader -->
    <div class="preloader">
      <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
      <!-- Navigation -->
      <nav
        class="navbar navbar-default navbar-static-top"
        style="margin-bottom: 0"
      >
        <div class="navbar-header">
          <a
            class="navbar-toggle hidden-sm hidden-md hidden-lg"
            href="javascript:void(0)"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            ><i class="ti-menu"></i
          ></a>
          <div class="top-left-part">
            <a class="logo" href="../index.php"
              ><i class="glyphicon glyphicon-fire"></i>&nbsp;<span
                class="hidden-xs"
                >Simulaciones</span
              ></a
            >
          </div>
          <ul class="nav navbar-top-links navbar-left hidden-xs">
            <li>
              <a
                href="javascript:void(0)"
                class="open-close hidden-xs hidden-lg waves-effect waves-light"
                ><i class="ti-arrow-circle-left ti-menu"></i
              ></a>
            </li>
          </ul>
          <ul class="nav navbar-top-links navbar-right pull-right">
            <!-- Buscador -->
            <!-- <li>
              <form role="search" class="app-search hidden-xs">
                <input
                  type="text"
                  placeholder="Search..."
                  class="form-control"
                />
                <a href=""><i class="ti-search"></i></a>
              </form>
            </li> -->
            <li>
              <a class="profile-pic" href="#">
                <!-- <img
                  src="images/users/hritik.jpg"
                  alt="user-img"
                  width="36"
                  class="img-circle"
                /> -->
                <i class="ti-user"></i>
                <b class="hidden-xs">Administrador</b>
              </a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
      </nav>
      <div class="navbar-default sidebar nicescroll" role="navigation">
        <div class="sidebar-nav navbar-collapse">
          <ul class="nav" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
              <div class="input-group custom-search-form">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search..."
                />
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">
                    <i class="ti-search"></i>
                  </button>
                </span>
              </div>
            </li>
            <li>
              <a href="../index.php" class="waves-effect"
                ><i class="glyphicon glyphicon-fire fa-fw"></i> Dashboard</a
              >
            </li>
            <li>
              <a href="../DashCitas.php" class="waves-effect"
                ><i class="ti-calendar fa-fw"></i>Citas</a
              >
            </li>
            <li>
              <a href="../DashEventos.php" class="waves-effect "
                ><i class="ti-video-camera fa-fw"></i>Eventos</a
              >
            </li>
            <li>
              <a href="../DashCursos.php" class="waves-effect"
                ><i class="ti-ink-pen fa-fw"></i> Cursos</a
              >
            </li>
            <li>
            <a href="../simulaciones\index.php" class="waves-effect active ">
              <i class="ti-ink-pen fa-fw"></i>
             Simulaciones
            </a>
          </li>
            <!-- <li>
              <a href="blank.html" class="waves-effect"
                ><i class="ti-files fa-fw"></i> Dashboard</a
              >
            </li> -->
            <!-- <li>
              <a href="404.html" class="waves-effect"
                ><i class="ti-info fa-fw"></i> Error 404</a
              >
            </li> -->
          </ul>
          <div class="center p-20">
            <span class="hide-menu"
              ><a
                href="../../php/log_out.php"
                class="
                  btn btn-success btn-block btn-rounded
                  waves-effect waves-light
                "
                >Cerra sesión</a
              ></span
            >
          </div>
        </div>
        <!-- /.sidebar-collapse -->
      </div>
      <!-- Page Content -->
      <div id="page-wrapper">
        <div class="container-fluid">
          <div class="row bg-title">
            <div class="col-lg-12">
              <h4 class="page-title">Paso 5 Agregar Productos</h4>
              <ol class="breadcrumb">
              </ol>
            </div>
            <!-- /.col-lg-12 -->
          </div>
          <!-- row -->
          <!-- inicio-->
<hr>
<form class="range-form"  method="POST" enctype="multipart/form-data" >
<div class="inicio">
<h3 class="text-center">Valores MIN y MAX de scroll</h3>
<br><br>
    <div class="scrolle">
    <div class="col-md-9">
    <input type="text" id="cantidadmin" name="cantidadmin" class="form-control"
    placeholder="Cantidad minima en pesos:" required="" pattern="[0-9]+"  >
    <label for="cantidadmin" class="form__label"></label>
    </div>
<br>
<br>
<br>
  <div class="col-md-9">
      <label for="precioumni" class="form__label"></label>
    <input type="text"  class="form-control" id="precioumin" name="precioumin"
    placeholder="Precio unitario minimo en pesos:" required pattern="[0-9]+" >
    </div>
    </div>

    <div class="scrolle">
    <div class="col-md-9">
    <input type="text" id="cantidadmax" name="cantidadmax" class="form-control"
    placeholder="Cantidad maxima en pesos:" required="" pattern="[0-9]+"  >
    <label for="cantidadmax" class="form__label"></label>
    </div>
<br>
<br>
<br>
  <div class="col-md-9">
      <label for="presioumax" class="form__label"></label>
    <input type="text"  class="form-control" id="precioumax" name="precioumax"
    placeholder="Precio unitario maximo en pesos" required pattern="[0-9]+" >
    </div>
    </div>

    <div class="scrolle">
    <div class="col-md-9">
    <input type="text" id="preciovmin" name="preciovmin" class="form-control"
    placeholder="Precio de venta minimo en pesos:" required="" pattern="[0-9]+"  >
    <label for="preciovmin" class="form__label"></label>
    </div>
<br>
<br>
<br>
  <div class="col-md-9">
      <label for="gastosgmin" class="form__label"></label>
    <input type="text"  class="form-control" id="gastosgmin" name="gastosgmin"
    placeholder="Gastos generales minimos en pesos:" required pattern="[0-9]+" >
    </div>
    </div>
    <div class="scrolle">
    <div class="col-md-9">
    <input type="text" id="preciovmax" name="preciovmax" class="form-control"
    placeholder="Precio de venta maximo en pesos:" required="" pattern="[0-9]+"  >
    <label for="preciovmax" class="form__label"></label>
    </div>
<br>
<br>
<br>
  <div class="col-md-9">
      <label for="gastosgmax" class="form__label"></label>
    <input type="text"  class="form-control" id="gastosgmax" name="gastosgmax"
    placeholder="Gastos generales maximos en pesos:" required pattern="[0-9]+" >
    </div>
    </div>

                      <a style="width: 250px;" href="mercado2.php" class="btn btn-info btn-block btn-rounded waves-effect waves-light" > Regresar</a>

                       <button style="width: 250px;" value="Siguiente" name="Siguiente" type="submit" class="btn btn-success btn-block btn-rounded waves-effect waves-light">Siguiente</button>                  
                      
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
                                                        </div>
                    </form>
 

</div>




                                           
</div>
 </div>                     



<!-- inicio -->
          <!-- /.row -->
       
        <!-- /.container-fluid -->
        <br><br><br><br><br><br><br><br>
      
      <!-- /#page-wrapper -->
      
    
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!--Nice scroll JavaScript -->
    <script src="../js/jquery.nicescroll.js"></script>
    <!--Wave Effects -->
    <script src="../js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../js/myadmin.js"></script>
    <script src="../js/slider.js"></script>
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../popper/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- datatables JS -->
    <script type="text/javascript" src="../datatables/datatables.min.js"></script>    
    <!-- para usar botones en datatables JS -->  
    <script src="../datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="../datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="../datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="../datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="../datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
    <!-- código JS propìo-->    
    <script type="text/javascript" src="../js/main.js"></script>  
  