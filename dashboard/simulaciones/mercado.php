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
<body style="background-image: url(img/fondo.png);">
  <?php
  include_once("menu1.php");
  ?>
  <script>
  window.alert = function() {};
</script>
         <style>
  .input-group {
    display: flex;
    align-items: center;
  }

  .input-group .form-control {
    flex-grow: 1;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }

  .input-group .input-group-append {
    margin-left: -1px;
    z-index: 10;
  }
</style>
    <div id="">
      <div class="container-fluid">
        <div class="row bg-title">
          <div class="col-lg-12">
            <h4 class="page-title">
              Segundo Paso!
            </h4>
            
            <ol class="breadcrumb"
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
                                    <div class="jumbotron white-box" style="width: 800px; margin: auto; height: 550px;">
                                        <div class="container">
                                            <div class="row">
                                                <main>
                                                    <form required method="POST" enctype="multipart/form-data">
                                                      <div class="input-group">
                                                        <input type="text" id="nombre_negocio_plan" name="nombre_negocio_plan" class="form-control" placeholder="Nombre del Negocio:" 
                                                        required pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 !¡?¿.-,]+" >
                                                        <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui debes proporcionar el NOMBRE de el plan de negocio, recuerda que no debe incluir espacios al final">
                                                            <i class="fas fa-question"></i>
                                                            </button>
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
                                                        <div class="input-group">
                                                          <label for="negocio_nuevo" class="form__label">El estado del negocio es:</label>
                                                          <label><input type="checkbox" name="negocio_nuevo" value="negocio_nuevo"> Nuevo</label>
                                                          <label><input type="checkbox" name="negocio_existente" value="negocio_existente"> Existe</label><br>
                                                          <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui debes seleccionar si tu negocio es nuevo o existente">
                                                            <i class="fas fa-question"></i>
                                                            </button>
                                                      </div>
                                                      <br>
                                                      <div class="input-group">
                                                        <input type="text" id="zona_geografica_plan" name="zona_geografica_plan" class="form-control" placeholder="Zona Geográfica:"
                                                        required pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 !¡?¿.-,]+"  >
                                                        <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui debes proporcionar la zona geografica donde estara ubicado tu negocio">
                                                          <i class="fas fa-question"></i>
                                                            </button>
                                                            <label for="zona_geografica_plan" class="form__label"></label>
                                                      </div>
                                                      <br>
                                                        <div class="form-floating">
                                                            <label for="publico_objetivo_plan" class="form-label">Publico Objetivo:</label>
                                                            <select required name ="publico_objetivo_plan"  id="publico_objetivo_plan" class="form-control">
                                                              <option value="poder adquisitivo">poder adquisitivo</option>
                                                              <option value="identidad de género" >Identidad de género</option>
                                                              <option value="lugar de residencia" >Lugar de residencia</option>
                                                                <option value="edad" >edad</option>
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
                                                            <hr/>
                                                              <div class="form-floating">
                                                              <button type="submit" name="Siguiente" value = "Siguiente" class="btn btn-success btn-lg btn-rounded">Siguiente</button>        <a type="submit" id="atras" name="atras" href="overview.php" class="btn btn-info btn-lg btn-rounded">Atras</a>  
                                                              </div>
                                                                  <select required name ="innovacion_negocio_plan"  id="innovacion_negocio_plan" class="form-control" style="visibility:hidden">
                                                                      <option value="Muy alta" >Muy Alta</option>
                                                                      <option value="Alta" >Alta</option>
                                                                      <option value="Media">Media</option>
                                                                      <option value="Baja" >Baja</option>
                                                                      <option value="Muy Baja">Muy Baja</option>
                                                                  </select>
                                                                  <select required name ="Precio_negocio_plan"  id="Precio_negocio_plan" class="form-control" style="visibility:hidden">
                                                                      <option value="Muy alta" >Muy Alta</option>
                                                                      <option value="Alta" >Alta</option>
                                                                      <option value="Media">Media</option>
                                                                      <option value="Baja" >Baja</option>
                                                                      <option value="Muy Baja">Muy Baja</option>
                                                                  </select>
                                                                  <select required name ="Calidad_negocio_plan"  id="Calidad_negocio_plan" class="form-control" style="visibility:hidden">
                                                                      <option value="Muy alta" >Muy Alta</option>
                                                                      <option value="Alta" >Alta</option>
                                                                      <option value="Media">Media</option>
                                                                      <option value="Baja" >Baja</option>
                                                                      <option value="Muy Baja">Muy Baja</option>
                                                                  </select>
                                                                  <select required name ="Rapidez_negocio_plan"  id="Rapidez_negocio_plan" class="form-control" style="visibility:hidden">
                                                                      <option value="Muy alta" >Muy Alta</option>
                                                                      <option value="Alta" >Alta</option>
                                                                      <option value="Media">Media</option>
                                                                      <option value="Baja" >Baja</option>
                                                                      <option value="Muy Baja">Muy Baja</option>
                                                                  </select>
                                                             <br>
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
        <footer >
       <?php  include_once("../footer.php"); ?>
    </footer>
  </div>
</body>
</html>
