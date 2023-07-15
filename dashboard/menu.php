<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AdminLTE Example</title>
  
  <!-- ESTILOS -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/metisMenu/dist/metisMenu.min.css">
  <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css">
  <link rel="stylesheet" type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <?php include_once("sesion_validacion.php"); ?>
  <div class="wrapper">
    <!-- Navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Menú lateral -->
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
            <li class="nav-item">
              <a href="index.php" class="nav-link waves-effect">
                <i class="glyphicon glyphicon-fire fa-fw"></i>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a href="DashUsuarios.php" class="nav-link waves-effect">
                <i class="fa fa-user fa-fw" aria-hidden="true"></i>
                Usuarios
              </a>
            </li>
            <li class="nav-item">
              <a href="DashCitas.php" class="nav-link waves-effect">
                <i class="ti-calendar fa-fw"></i>
                Citas
              </a>
            </li>
            <li class="nav-item">
              <a href="DashEventos.php" class="nav-link waves-effect">
                <i class="ti-video-camera fa-fw"></i>
                Eventos
              </a>
            </li>
            <li class="nav-item">
              <a href="DashCursos.php" class="nav-link waves-effect">
                <i class="ti-ink-pen fa-fw"></i>
                Cursos
              </a>
            </li>
            <li class="nav-item">
              <a href="DashSimulaciones.php" class="nav-link waves-effect">
                <i class="ti-stats-up fa-fw"></i>
                Simulaciones
              </a>
            </li>
            <li class="nav-item">
              <a href="consult_simulaciones.php" class="nav-link waves-effect">
                <i class="ti-search fa-fw"></i>
                Buscar Simulaciones
              </a>
            </li>
            <li class="nav-item">
              <a href="DashMarketing.php" class="nav-link waves-effect">
                <i class="ti-clipboard fa-fw"></i>
                Estrategias de Marketing
              </a>
            </li>
            <li class="nav-item">
              <a href="DashEncuentas.php" class="nav-link waves-effect">
                <i class="ti-comments fa-fw"></i>
                Encuestas de Planes de negocio
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link waves-effect">
                <i class="ti-eye fa-fw"></i>
                Seguimientos a emprendedores
              </a>
            </li>
            <li class="nav-item">
              <a href="DashEstadisticas.php" class="nav-link waves-effect">
                <i class="ti-receipt fa-fw"></i>
                Estadísticas de los emprendedores
              </a>
            </li>
          </ul>
          <div class="center p-20">
            <span class="hide-menu">
              <a href="../php/log_out.php" class="btn btn-success btn-block btn-rounded waves-effect waves-light">
                <i class="ti-shift-right fa-fw"></i>
                Cerrar sesión
              </a>
            </span>
          </div>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
  </div>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <!-- Scripts -->
  <script src="../popper/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
  <script src="js/jquery.nicescroll.js"></script>
  <script src="js/waves.js"></script>
  <script src="js/myadmin.js"></script>
  <script src="datatables/datatables.min.js"></script>
  <script src="datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>
  <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>
  <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
  <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
  <script src="datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../lib/lightbox/js/lightbox.min.js"></script>
  <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <script src="../plugins/chart.js/Chart.min.js"></script>
  <script src="../plugins/sparklines/sparkline.js"></script>
  <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
  <script src="../plugins/moment/moment.min.js"></script>
  <script src="../plugins/daterangepicker/daterangepicker.js"></script>
  <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <script src="../plugins/summernote/summernote-bs4.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
