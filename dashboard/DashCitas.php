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
    <title>Dashboard Citas</title>
    <link
      rel="canonical"
      href="https://www.wrappixel.com/templates/myadmin-lite/"
    />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png" />
    <!-- Bootstrap Core CSS -->
    <link
      href="bower_components/bootstrap/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Menu CSS -->
    <link
      href="bower_components/metisMenu/dist/metisMenu.min.css"
      rel="stylesheet"
    />
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
  </head>

  <body>
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
            <a class="logo" href="index.php"
              ><i class="glyphicon glyphicon-fire"></i>&nbsp;<span
                class="hidden-xs"
                >Citas</span
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
              <a href="index.php" class="waves-effect"
                ><i class="glyphicon glyphicon-fire fa-fw"></i> Dashboard</a
              >
            </li>
            <li>
              <a href="DashCitas.php" class="waves-effect"
                ><i class="ti-calendar fa-fw"></i>Citas</a
              >
            </li>
            <li>
              <a href="DashEventos.php" class="waves-effect"
                ><i class="ti-video-camera fa-fw"></i>Eventos</a
              >
            </li>
            <li>
              <a href="DashCursos.php" class="waves-effect"
                ><i class="ti-ink-pen fa-fw"></i> Cursos</a
              >
            </li>
            <li>
              <a href="http://localhost/aguacate%20Explosivo%20Team/CEI2.0/" class="waves-effect"
                ><i class="ti-bar-chart fa-fw"></i> Simulaciones</a
              >
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
                href="../index.php"
                class="
                  btn btn-info btn-block btn-rounded
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
              <h4 class="page-title">Puedes gestionar tus eventos desde este modulo</h4>
              <ol class="breadcrumb">
              </ol>
            </div>
            <!-- /.col-lg-12 -->
          </div>
          <!-- row -->
          <div class="row">
            <div class="col-md-12">
              <div class="white-box">
                <h3>Modulo - Citas</h3>
                <!-- Container de citas(Data Tables) -->
                <div class="container-fluid">
                  <div class="jumbotron white-box">
                    <div class="container">
                        <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">  
                                    <nav aria-label="...">
<ul class="pagination pagination-lg justify-content-center">
                    <li class="page-item active"><a class="page-link" href="DashCitas.php">Citas Disponibles</a></li>
                    <li class="page-item " aria-current="page"><a class="page-link" href="administradores/reprocitas.php">Reprogramar Citas </a></li>

                </ul>
            </nav>
                  
                                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Numero de Documento</th>
                                                <th>Nombre Completo</th>                             
                                                <th>Numero de Telefono</th>
                                                <th>Barrio</th>
                                                <th>Fecha y Hora de Cita</th>
                                            </tr>
                                        </thead>
                                                <?php
                                                  include("../conexion.php");
                                                  $conexion=conectar(); 
                                                  $consulta2 ="SELECT * FROM `citas` ";
                                                  $busqueda=mysqli_query($conexion,$consulta2);

                                            foreach($busqueda as $row){ ?>
                                            <!-- Contenido de la tabla -->
                                            <tr>
                                                <td><?php echo $row["documento"]; ?></td>
                                                <td><?php echo $row["nombre"]; ?></td>
                                                <td><?php echo $row["telefono"]; ?></td>
                                                <td><?php echo $row["direccion"]; ?></td>
                                                <td><?php echo $row["fecha_hora"]; ?></td>
                                            </tr>
                                                <?php } ?>            
                                        </table>                  
                                      </div>
                                    </div>
                                </div>
                              </div>
                        </div>  
                    </div>  
                <!-- Fin data Table -->
              </div>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /#page-wrapper -->
      <footer class="footer text-center">
        FACNET - 2023 &copy; 
      </footer>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!--Nice scroll JavaScript -->
    <script src="js/jquery.nicescroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/myadmin.js"></script>
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
    <!-- para usar botones en datatables JS -->  
    <script src="datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
    <!-- código JS propìo-->    
    <script type="text/javascript" src="js/main.js"></script>  
  </body>
</html>
