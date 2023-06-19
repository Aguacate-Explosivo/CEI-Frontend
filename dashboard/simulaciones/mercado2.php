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
              Tercer Paso!
            </h4>
            <ol class="breadcrumb">
            </ol>
          </div>
        </div>
        <!-- inicio-->
            <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                        <h3 class="text-center">Tamaño del Mercado Relevante</h3>
                        <!-- Container de Formulario -->
                        <div class="container-fluid">
                            <div class="jumbotron white-box">
                                        <p>es el ingreso anual que su empresa podría obtener si poseyera el 100% de la cuota de mercado. Responda las preguntas a continuación y lo calcularemos por usted.</p>    
                                        <div class="container">
                                            <div class="row">
                                                <main>
                                                    <form action="estudio_mercado_datos.php" required method="POST" enctype="multipart/form-data">
                                                        <br>
                                                        <div class="form-floating">
                                                            <input type="number" id="clientes_interesados_plan" name="clientes_interesados_plan" class="form-control" placeholder="Ingrese el número de clientes que podrían estar interesados en comprar sus productos y / o servicios:" required pattern="[0-9]+"  >
                                                            <label for="clientes_interesados_plan" class="form__label"></label>
                                                        </div>
                                                        <div class="form-floating">
                                                            <input type="number" id="cantidadMonetaria_interesados_plan" name="cantidadMonetaria_interesados_plan" class="form-control" placeholder="Introducir la cantidad monetaria que estos clientes podrían estar dispuestos a gastar, en sus productos y / o servicios:" required pattern="[0-9]+"  >
                                                            <label for="cantidadMonetaria_interesados_plan" class="form__label"></label>
                                                        </div>
                                                        <div class="form-floating">
                                                            <label for="ganancias_estipuladas_interesados_plan" class="form__label">Su total de Ganancias es de :</label>
                                                            <input type="number" disabled id="ganancias_estipuladas_interesados_plan" name="ganancias_estipuladas_interesados_plan" class="form-control" placeholder="Aqui se mostrará una idea de las ganancias estimadas:" required pattern="[0-9]+"  >
                                                        </div>
                                                        <br>
                                                        <div class="form-floating">
                                                            <input type="number" id="socios_productores" name="socios_productores" class="form-control" placeholder="Socios / Productores:" required pattern="[0-9]+"  >
                                                            <label for="socios_productores" class="form__label"></label>
                                                        </div>
                                                        <div class="form-floating">
                                                            <label for="tipo_marketing_plan" class="form-label">Tipo de Marketing:</label>
                                                            <select required name ="tipo_marketing_plan"  id="tipo_marketing_plan" class="form-control"  >
                                                                <option value="Banners y/o vallas publicitarias">Banners y/o vallas publicitarias</option>
                                                                <option value="Blogs, Podcasts, etc." >Blogs, Podcasts, etc.</option>
                                                                <option value="Catálogos" >Catálogos</option>
                                                                <option value="Concursos" >Concursos</option>
                                                                <option value="Cupones" >Cupones</option>
                                                                <option value="Correo directo" >Correo directo</option>
                                                                <option value="Marketing de Eventos" >Marketing de Eventos</option>
                                                                <option value="Volantes">Volantes</option>
                                                                <option value="Gestión de redes" >Gestión de redes</option>
                                                                <option value="Anuncios en periódicos/revistas" >Anuncios en periódicos/revistas</option>
                                                                <option value="Online Marketing (SEO/SEM/Social Media)" >Online Marketing (SEO/SEM/Social Media)</option>
                                                                <option value="Asociaciones/Joint Ventures" >Asociaciones/Joint Ventures</option>
                                                                <option value="Comunicados de prensa/PR" >Comunicados de prensa/PR</option>
                                                                <option value="Anuncios de radio/Anuncios de TV/Infomerciales" >Anuncios de radio/Anuncios de TV/Infomerciales</option>
                                                                <option value="Ferias" >Ferias</option>
                                                                <option value="Boca a boca / Marketing Viral" >Boca a boca / Marketing Viral</option>
                                                                <option value="Otro" >Otro</option>
                                                            </select>
                                                            <br>
                                                            <div class="form-floating">
                                                                <input type="number" id="inversion_publicidad" name="inversion_publicidad" class="form-control" placeholder="Cantidad de $ a Invertir en Publicidad:" required pattern="[0-9]+"  >
                                                                <label for="inversion_publicidad" class="form__label"></label>
                                                            </div>
                                                            <br>
                                                        </div>
                                                          <button type="submit" class="btn btn-success btn-lg btn-rounded">Siguiente</button>                                             
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
