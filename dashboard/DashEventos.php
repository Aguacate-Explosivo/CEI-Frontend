<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, severny admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, my admin design, my admin dashboard bootstrap 4 dashboard template"
    />

    <meta
      name="description"
      content="My Admin is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Dashboard Eventos</title>
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
    <!-- <link href="../../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../lib/lightbox/css/lightbox.min.css" rel="stylesheet"> -->

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <?php
    include_once("../php/sesion_validacion.php")
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
            <a class="logo" href="index.php"
              ><i class="glyphicon glyphicon-fire"></i>&nbsp;<span
                class="hidden-xs"
                >Eventos</span
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
                href="../php/log_out.php"
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
          <div class="row" >
            <div class="col-md-12">
              <div class="white-box">
                <h3>Modulo - Eventos</h3>
                <!-- Container de citas(Data Tables) -->
                <div class="container-fluid">
                  <div class="jumbotron white-box">
                    <div class="container">
                        <div class="row">
                        <main>
          <!-- Navegacion -->
          <nav aria-label="...">
              <ul class="pagination pagination-lg justify-content-center">
                  <li class="page-item active" aria-current="page"><a class="page-link" href="DashEventos.php">Añadir un nuevo Evento</a></li>
                  <li class="page-item"><a class="page-link" href="administradores/admineventos.php">Administrar Eventos </a></li>
                  <li class="page-item"><a class="page-link" href="administradores/inscritosevento.php">Registro de Eventos </a></li>

              </ul>
          </nav>
          <!-- Fin de navegacion -->
          <form action="administradores/regeventos.php" required=" " method="POST" enctype="multipart/form-data">
              <div class="form-floating">
                  <input type="text" id="nom_even" name="nom_even" class="form-control" placeholder=" Nombre del Evento:" 
                  required=" " pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 ]+" >
                  <label for="nom_even" class="form__label"></label>
                  </div>
                  <br>
                  <div class="form-floating">
                  <input type="text" id="lugar" name="lugar" class="form-control" placeholder=" Lugar del Evento:"
                  required=" " pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 ]+"  >
                  <label for="lugar" class="form__label"></label>
                  </div>
                  <br>
                  <div class="form-floating">
                  <input type="text" id="desc_even" name="desc_even" class="form-control" placeholder=" Descripcion Breve del Evento: "
                  required=" " pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 ]+"  >
                  <label for="desc_even" class="form__label"></label>
                  </div>
                  <br>
                  <div class="form-floating">
                  <label for="fecha" class="form-label">Fecha del Evento:</label>
                  <input name ="fecha" type="date" class="form-control" id="fecha" 
                  required=""  min="2023-03-01 " max="2030-12-31" >
                  </div>
                  <br>
                  <div class="form-floating">
                  <label for="fecha" class="form-label">Hora del Evento:</label>
                  <input name ="hora" type="time" class="form-control" id="hora" required=" "  >
                  </div>
                  <br>
                      <!-- Seccion para cargar la imagen -->
                      <div class="form-floating">
                          <label for="imagen" class="form-label">Cargar Imagen</label>
                          <input class="form-control" type="file" id="imagen" name ="imagen" 
                          required=" " accept="image/*" >
                      </div>
                      <br>
                  <div class="form-floating">
                  <label for="estado" class="form-label">Estado del Evento:</label>
                  <select required=" " name ="estado"  id="estado" class="form-control"  >
                      <option value=" Activo" >Activo</option>
                      <option value=" Terminado">Terminado</option>
                  </select>
                  </div>
                  <br> 
                  <button style="margin: 2px; border-radius: 5px;"  type="submit" class="btn btn-success btn-large">Registrar un Nuevo Evento</button>
              </div>
          </form>
         
  </main>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../lib/wow/wow.min.js"></script>
    <script src="../../lib/easing/easing.min.js"></script>
    <script src="../../lib/waypoints/waypoints.min.js"></script>
    <script src="../../lib/owlcarousel/owl.carousel.min.js"></script>
    
    <script src="../../lib/lightbox/js/lightbox.min.js"></script>
    <!-- Template Javascript -->
    <script src="../../js/main.js"></script>
  </body>
</html>
