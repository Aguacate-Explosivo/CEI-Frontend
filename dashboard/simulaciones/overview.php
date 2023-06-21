<?php
  session_start();
  if(isset($_POST["Siguiente"])){
    // Envio de la informacion al siguiente formulario
    $_SESSION['doc_autor_plan'] = htmlentities($_POST
      ["doc_autor_plan"]);
      $_SESSION['autor_plan'] = htmlentities($_POST
      ["autor_plan"]);
      $_SESSION['autor_email'] = htmlentities($_POST
      ["autor_email"]);
      header("location:mercado.php");
    }
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
            <span class="hidden-xs">Simuladores</span>
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
        <div class="row bg-title">
          <div class="col-lg-12">
            <h4 class="page-title">
              Primer Paso!
            </h4>
            <ol class="breadcrumb">
            </ol>
          </div>
        </div>
        <!-- inicio-->
            <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                        <h3 class="text-center">Overview</h3>
                            <!-- Container de Formulario -->
                            <div class="container-fluid">
                                    <div class="jumbotron white-box">
                                        <div class="container">
                                            <div class="row">
                                                <main>
                                                    <form required method="POST" enctype="multipart/form-data">
                                                        <div class="form-floating">
                                                            <input type="text" id="doc_autor_plan" name="doc_autor_plan" class="form-control" placeholder="Documento del Autor del Plan:" required pattern="[0-9]+"  >
                                                            <label for="doc_autor_plan" class="form__label"></label>
                                                        </div>
                                                            <br>
                                                        <div class="form-floating">
                                                            <input type="text" id="autor_plan" name="autor_plan" class="form-control" placeholder="Nombre del Autor del Plan de Negocio:" required pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 !¡?¿.-,]+" >
                                                            <label for="autor_plan" class="form__label"></label>
                                                        </div>
                                                            <br>
                                                        <div class="form-floating">
                                                            <input type="email" id="autor_email" name="autor_email" class="form-control" placeholder="Correo Electronico del Autor:">
                                                            <label for="autor_email" class="form__label"></label>
                                                        </div>
                                                            <br>
                                                            <button type="submit" id="Siguiente" name="Siguiente" class="btn btn-success btn-lg btn-rounded">Siguiente</button>     
                                                        </div>
                                                    </form>
                                                </main>
                                            </div>
                                        </div>
                                    </div>  
                                </div>  
                            <!-- Fin Formulario -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- fin -->
        <footer class="footer text-center">
      FACNET - 2023 &copy; 
    </footer>
  </div>
</body>
</html>
