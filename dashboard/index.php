<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Admin</title>
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
  <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <?php
  include_once("../php/sesion_validacion.php");
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
    <div id="page-wrapper">
      <div class="container-fluid">
        <div class="row bg-title">
          <div class="col-lg-12">
            <h4 class="page-title">
              Bienvenido Administrador, ¡desde aquí puedes gestionar los módulos!
            </h4>
            <ol class="breadcrumb">
              <li><a href="#">Dashboard</a></li>
            </ol>
          </div>
        </div>
<!-- Graficas para citas -->
    <div class="row">
      <?php require_once("progressBar.php"); ?>
      <div class="col-md-4">
        <div class="white-box">
          <h3 class="text-center">Total de Citas Agendadas</h3>
              <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo $fila["total_citas"]; ?>" aria-valuemin="0" aria-valuemax="1000">
                <div class="progress-bar" style="width: <?php echo $fila["total_citas"]; ?>%"><?php echo $fila["total_citas"]; ?></div>
              </div>
            </div>
          </div>

        <div class="col-md-4">
        <div class="white-box">
          <h3 class="text-center">Total de Inscritos en Cursos</h3>
              <div class="progress" role="progressbar" aria-valuenow="<?php echo $fila2["total_inscritos_cursos"]; ?>" aria-valuemin="0" aria-valuemax="1000">
                <div class="progress-bar bg-success" style="width: <?php echo $fila2["total_inscritos_cursos"]; ?>%"><?php echo $fila2["total_inscritos_cursos"]; ?></div>
              </div>
            </div>
          </div>

        <div class="col-md-4">
        <div class="white-box">
          <h3 class="text-center">Total de Inscritos en Eventos</h3>
              <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo $fila3["total_inscritos_eventos"]; ?>" aria-valuemin="0" aria-valuemax="1000">
                <div class="progress-bar bg-warning" style="width: <?php echo $fila3["total_inscritos_eventos"]; ?>%"><?php echo $fila3["total_inscritos_eventos"]; ?></div>
              </div>
            </div>
          </div>

        </div>
  <!-- Iframe del mapa -->
      <div class="row">
          <div class="col-md-12">
            <div class="white-box">
              <h3 class="text-center">Localizacion</h3>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2574.373678526185!2d-76.64616398764448!3d5.680276366382267!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4932ec47709e37%3A0x5698132ef36d83ae!2sUniversidad%20Tecnol%C3%B3gica%20Del%20Choc%C3%B3!5e0!3m2!1ses-419!2sco!4v1686588550411!5m2!1ses-419!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
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
  <script src="js/myadmin.js"></script>
</body>
</html>
