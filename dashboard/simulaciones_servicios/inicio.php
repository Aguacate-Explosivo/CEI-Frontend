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
      header("location:datos_usuario.php");
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
  
</head>
<body style="background-image: url(img/fondo.png);">
  <?php
  include_once("../simulaciones/menu1.php");
  ?>
  
    <div id="">
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
            <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                              <br>  
                        <h3 class="text-center">Overview</h3>
                            <!-- Container de Formulario -->

                            <div class="container-fluid">
                                    <div class="jumbotron white-box" style="width: 800px; margin: auto; height: 380px;">
                                        <div class="container">
                                            <div class="row">
                                                <main>
                                                      <br>  
                                                    <form required method="POST" enctype="multipart/form-data">
                                                        <div class="input-group">
                                                            <input type="text" id="doc_autor_plan" name="doc_autor_plan" class="form-control" placeholder="Documento del Autor del Plan:" required pattern="[0-9]+"  >
                                                            <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui debes proporcionar el NUMERO DE DOCUMENTO del quien va a realizar el plan de negocio">
                                                            <i class="fas fa-question"></i>
                                                            </button> 
                                                            <label for="doc_autor_plan" class="form__label"></label>
                                                        </div>
                                                            <br>
                                                        <div class="input-group">
                                                            <input type="text" id="autor_plan" name="autor_plan" class="form-control" placeholder="Nombre del Autor del Plan de Negocio:" required pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 !¡?¿.-,]+" >
                                                            <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui debes proporcionar el NOMBRE del quien va a realizar el plan de negocio">
                                                            <i class="fas fa-question"></i>
                                                            </button>
                                                            <label for="autor_plan" class="form__label"></label>
                                                        </div>
                                                            <br>
                                                        <div class="input-group">
                                                            <input type="email" id="autor_email" name="autor_email" class="form-control" placeholder="Correo Electronico del Autor:">
                                                            <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui debes proporcionar el E-MAIL o CORREO del quien va a realizar el plan de negocio">
                                                            <i class="fas fa-question"></i>
                                                            </button>
                                                            <label for="autor_email" class="form__label"></label>
                                                        </div>
                                                            <br>
                                                            <button type="submit" id="Siguiente" name="Siguiente" class="btn btn-success btn-lg btn-rounded">Siguiente</button>     
                                                              <a type="submit" id="atras" name="atras" href="programacion.php" class="btn btn-info btn-lg btn-rounded">Atras</a> 
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
