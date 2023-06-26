<?php
  session_start();
  if(isset($_POST["Siguiente"])){

    //Datos del formulario 1
      $_SESSION['doc_autor_plan'] = htmlentities($_POST["doc_autor_plan"]);
      $_SESSION['autor_plan'] = htmlentities($_POST["autor_plan"]);
      $_SESSION['autor_email'] = htmlentities($_POST["autor_email"]);

      // Nuevos datos de este formulario
      $_SESSION['nombre_negocio_plan'] = htmlentities($_POST["nombre_negocio_plan"]);
      $_SESSION['industria_plan'] = htmlentities($_POST["industria_plan"]);
      $_SESSION['zona_geografica_plan'] = htmlentities($_POST["zona_geografica_plan"]);
      $_SESSION['negocio_nuevo'] = htmlentities($_POST["negocio_nuevo"]);
      $_SESSION['negocio_existente'] = htmlentities($_POST["negocio_existente"]);
      $_SESSION['publico_objetivo_plan'] = htmlentities($_POST["publico_objetivo_plan"]);
      $_SESSION['innovacion_negocio_plan'] = htmlentities($_POST["innovacion_negocio_plan"]);
      $_SESSION['Precio_negocio_plan'] = htmlentities($_POST["Precio_negocio_plan"]);
      $_SESSION['Calidad_negocio_plan'] = htmlentities($_POST["Calidad_negocio_plan"]);
      $_SESSION['Rapidez_negocio_plan'] = htmlentities($_POST["Rapidez_negocio_plan"]);

      // Redirecion a la siguiente pagina
      header("location:mercado2.php");
  }

  // Variables de los datos anteriores
  $documento = $_SESSION['doc_autor_plan'] ;
  $nombre = $_SESSION['autor_plan'] ;
  $autor_email =  $_SESSION['autor_email'] ;
  $nombre_negocio_plan = $_SESSION['nombre_negocio_plan'];

 
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
  include_once("../administradores/sesion_validacion.php");
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
            <a href="../DashSimulaciones.php" class="waves-effect active">
              <i class="ti-stats-up fa-fw"></i>
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
              Segundo Paso!
            </h4>
            <ol class="breadcrumb">
            </ol>
          </div>
        </div>
        <!-- inicio-->
            <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                        <h3 class="text-center">Estudio de Mercado</h3>
                            <!-- Container de Formulario -->
                            <div class="container-fluid">
                                    <div class="jumbotron white-box">
                                        <div class="container">
                                            <div class="row">
                                                <main>
                                                    <form required method="POST" enctype="multipart/form-data">
                                                      <div class="form-floating">
                                                        <input type="text" id="nombre_negocio_plan" name="nombre_negocio_plan" class="form-control" placeholder="Nombre del Negocio:" 
                                                        required pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 !¡?¿.-,]+" >
                                                        <label for="nombre_negocio_plan" class="form__label"></label>
                                                      </div>
                                                      <br>
                                                        <br>
                                                        <div class="form-floating">
                                                            <label for="industria_plan" class="form-label">Industria en la que Opera el Negocio:</label>
                                                            <select required name ="industria_plan"  id="industria_plan" class="form-control"  >
                                                                <option value="Agricultura; plantaciones, otros sectores rurales">Agricultura; plantaciones, otros sectores rurales</option>
                                                                <option value="Alimentación; bebidas; tabaco" >Alimentación; bebidas; tabaco</option>
                                                                <option value="Comercio" >Comercio</option>
                                                                <option value="Construcción" >Construcción</option>
                                                                <option value="Educación" >Educación</option>
                                                                <option value="Fabricación de material de transporte" >Fabricación de material de transporte</option>
                                                                <option value="Función pública" >Función pública</option>
                                                                <option value="Hotelería, restauración, turismo" >Hotelería, restauración, turismo </option>
                                                                <option value="Industrias químicas" >Industrias químicas</option>
                                                                <option value="Ingenieria mecánica y eléctrica" >Ingenieria mecánica y eléctrica</option>
                                                                <option value="Medios de comunicación, cultura, gráficos" >Medios de comunicación; cultura; gráficos</option>
                                                                <option value="Minería (carbón, otra minería)" >Minería (carbón, otra minería)</option>
                                                                <option value="Petroleo y producción de gas, refinación de petroleo" >Petroleo y producción de gas, refinación de petroleo</option>
                                                                <option value="Producción de metales básicos" >Producción de metales básicos</option>
                                                                <option value="Servicios de correos y de telecomunicaciones" >Servicios de correos y de telecomunicaciones</option>
                                                                <option value="Servicios de salud" >Servicios de salud</option>
                                                                <option value="Servicios financieros, servicios profesionale" >Servicios financieros, servicios profesionale</option>
                                                                <option value="Servicios públicos (agua, gas, electricidad)" >Servicios públicos (agua, gas, electricidad)</option>
                                                                <option value="Silvicultura, madera, celulosa, papel" >Silvicultura; madera, celulosa, papel</option>
                                                                <option value="Textiles; vestido; cuero; calzado" >Textiles; vestido; cuero; calzado</option>
                                                                <option value="Transporte (inluyendo aviación civil; ferrocarriles; transporte por carretera)" >Transporte (inluyendo aviación civil; ferrocarriles; transporte por carretera)</option>
                                                                <option value="Transporte marítimo; puertos; pesca; transporte interior" >Transporte marítimo; puertos; pesca; transporte interior</option>
                                                                <option value="Otro" >Otro</option>
                                                              </select>
                                                            <br>
                                                        </div>
                                                        <div class="form-floating">
                                                          <label for="negocio_nuevo" class="form__label">El estado del negocio es:</label>
                                                          <label><input type="checkbox" name="negocio_nuevo" value="negocio_nuevo"> Nuevo</label>
                                                          <label><input type="checkbox" name="negocio_existente" value="negocio_existente"> Existen</label><br>
                                                      </div>
                                                      <br>
                                                      <div class="form-floating">
                                                          <input type="text" id="zona_geografica_plan" name="zona_geografica_plan" class="form-control" placeholder="Zona Geográfica:"
                                                          required pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 !¡?¿.-,]+"  >
                                                          <label for="zona_geografica_plan" class="form__label"></label>
                                                      </div>
                                                          <br>
                                                        <div class="form-floating">
                                                            <label for="publico_objetivo_plan" class="form-label">Publico Objetivo:</label>
                                                            <select required name ="publico_objetivo_plan"  id="publico_objetivo_plan" class="form-control"  >
                                                              <option value="edad">Edad</option>
                                                              <option value="identidad de género" >Identidad de género</option>
                                                              <option value="lugar de residencia" >Lugar de residencia</option>
                                                                <option value="poder adquisitivo" >poder adquisitivo</option>
                                                                <option value="profesión u ocupación">profesión u ocupación</option>
                                                                <option value="estudios">Estudios</option>
                                                                <option value="Valores / Creencias">Valores / Creencias</option>
                                                                <option value="Estado civil" >Estado civil</option>
                                                                <option value="Tamaño del negocio" >Tamaño del negocio</option>
                                                                <option value="Tamaño de la familia" >Tamaño de la familia</option>
                                                                <option value="Idioma">Idioma</option>
                                                                <option value="Otro">Otro</option>
                                                            </select>
                                                             <br>
                                                        </div>
                                                        <div class="form-floating">
                                                              <div class="col-md-3">
                                                              <label for="innovacion_negocio_plan" class="form-label">Innovación:</label>
                                                                  <select required name ="innovacion_negocio_plan"  id="innovacion_negocio_plan" class="form-control"  >
                                                                      <option value="Muy alta" >Muy Alta</option>
                                                                      <option value="Alta" >Alta</option>
                                                                      <option value="Media">Media</option>
                                                                      <option value="Baja" >Baja</option>
                                                                      <option value="Muy Baja">Muy Baja</option>
                                                                  </select>
                                                              </div>
                                                              <div class="col-md-3">
                                                              <label for="Precio_negocio_plan" class="form-label">Precio:</label>
                                                                  <select required name ="Precio_negocio_plan"  id="Precio_negocio_plan" class="form-control"  >
                                                                      <option value="Muy alta" >Muy Alta</option>
                                                                      <option value="Alta" >Alta</option>
                                                                      <option value="Media">Media</option>
                                                                      <option value="Baja" >Baja</option>
                                                                      <option value="Muy Baja">Muy Baja</option>
                                                                  </select>
                                                              </div>
                                                              <div class="col-md-3">
                                                              <label for="Calidad_negocio_plan" class="form-label">Calidad:</label>
                                                                  <select required name ="Calidad_negocio_plan"  id="Calidad_negocio_plan" class="form-control"  >
                                                                      <option value="Muy alta" >Muy Alta</option>
                                                                      <option value="Alta" >Alta</option>
                                                                      <option value="Media">Media</option>
                                                                      <option value="Baja" >Baja</option>
                                                                      <option value="Muy Baja">Muy Baja</option>
                                                                  </select>
                                                              </div>
                                                              <div class="col-md-3">
                                                              <label for="Rapidez_negocio_plan" class="form-label">Rapidez:</label>
                                                                  <select required name ="Rapidez_negocio_plan"  id="Rapidez_negocio_plan" class="form-control"  >
                                                                      <option value="Muy alta" >Muy Alta</option>
                                                                      <option value="Alta" >Alta</option>
                                                                      <option value="Media">Media</option>
                                                                      <option value="Baja" >Baja</option>
                                                                      <option value="Muy Baja">Muy Baja</option>
                                                                  </select>
                                                              </div>
                                                             <br>
                                                        </div>
                                                        <br>

                                                        <!-- Inputs para transferir informacion -->
                                                        <div>
                                                            <input hidden type="text" id="doc_autor_plan" name="doc_autor_plan" value="<?php  echo $documento; ?>">
                                                            <label hidden for="doc_autor_plan" class="form__label"></label>
                                                            <input hidden type="text" id="autor_plan" name="autor_plan" value="<?php echo $nombre; ?>">
                                                            <label hidden for="autor_plan" class="form__label"></label>
                                                            <input hidden type="email" id="autor_email" name="autor_email" value="<?php echo $autor_email; ?>">
                                                            <label hidden for="autor_email" class="form__label"></label>
                                                        </div>

                                                      <hr/>
                                                        <div class="form-floating">
                                                        <button type="submit" name="Siguiente" value = "Siguiente" class="btn btn-success btn-lg btn-rounded">Siguiente</button>     
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
