<head>
<!--ESTILOS-->
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bower_components/metisMenu/dist/metisMenu.min.css">
<link rel="stylesheet" type="text/css" href="datatables/datatables.min.css">
<link rel="stylesheet" type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/stylese.css">


<!--SCRIPTS-->
<link rel="preload" href="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js" as="script">
<link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" as="script">
<link rel="preload" href="bower_components/metisMenu/dist/metisMenu.min.js" as="script">
<link rel="preload" href="js/jquery.nicescroll.js" as="script">
<link rel="preload" href="js/waves.js" as="script">
<link rel="preload" href="js/myadmin.js" as="script">
<link rel="preload" href="../popper/popper.min.js" as="script">
<link rel="preload" href="datatables/datatables.min.js" as="script">
<link rel="preload" href="datatables/Buttons-1.5.6/js/dataTables.buttons.min.js" as="script">
<link rel="preload" href="datatables/JSZip-2.5.0/jszip.min.js" as="script">
<link rel="preload" href="datatables/pdfmake-0.1.36/pdfmake.min.js" as="script">
<link rel="preload" href="datatables/pdfmake-0.1.36/vfs_fonts.js" as="script">
<link rel="preload" href="datatables/Buttons-1.5.6/js/buttons.html5.min.js" as="script">
<link rel="preload" href="../lib/wow/wow.min.js" as="script">
<link rel="preload" href="../lib/easing/easing.min.js" as="script">
<link rel="preload" href="../lib/waypoints/waypoints.min.js" as="script">
<link rel="preload" href="../lib/owlcarousel/owl.carousel.min.js" as="script">
<link rel="preload" href="../lib/lightbox/js/lightbox.min.js" as="script">
<link rel="preload" href="js/main.js" as="script">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" defer></script>
<script src="bower_components/metisMenu/dist/metisMenu.min.js" defer></script>
<script src="js/jquery.nicescroll.js" defer></script>
<script src="js/waves.js" defer></script>
<script src="js/myadmin.js" defer></script>
<script src="../popper/popper.min.js" defer></script>
<script type="text/javascript" src="datatables/datatables.min.js" defer></script>
<script src="datatables/Buttons-1.5.6/js/dataTables.buttons.min.js" defer></script>
<script src="datatables/JSZip-2.5.0/jszip.min.js" defer></script>
<script src="datatables/pdfmake-0.1.36/pdfmake.min.js" defer></script>
<script src="datatables/pdfmake-0.1.36/vfs_fonts.js" defer></script>
<script src="datatables/Buttons-1.5.6/js/buttons.html5.min.js" defer></script>
<script src="../lib/wow/wow.min.js" defer></script>
<script src="../lib/easing/easing.min.js" defer></script>
<script src="../lib/waypoints/waypoints.min.js" defer></script>
<script src="../lib/owlcarousel/owl.carousel.min.js" defer></script>
<script src="../lib/lightbox/js/lightbox.min.js" defer></script>
<script src="js/main.js" defer></script>
</head>

<?php include_once("sesion_validacion.php"); ?>

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
            <a href="index.php" class="waves-effect">
              <i class="glyphicon glyphicon-fire fa-fw"></i>
              Dashboard
            </a>
          </li>
          <li>
            <a href="DashCitas.php" class="waves-effect">
              <i class="ti-calendar fa-fw"></i>
              Citas
            </a>
          </li>
          <li>
            <a href="DashEventos.php" class="waves-effect">
              <i class="ti-video-camera fa-fw"></i>
              Eventos
            </a>
          </li>
          <li>
            <a href="DashCursos.php" class="waves-effect">
              <i class="ti-ink-pen fa-fw"></i>
              Cursos
            </a>
          </li>
          <li>
            <a href="DashSimulaciones.php" class="waves-effect">
              <i class="ti-stats-up fa-fw"></i>
             Simulaciones
            </a>
          </li>
        </ul>
        <div class="center p-20">
          <span class="hide-menu">
            <a href="../php/log_out.php" class="btn btn-success btn-block btn-rounded waves-effect waves-light">
              Cerrar sesión
            </a>
          </span>
        </div>
      </div>
    </div>