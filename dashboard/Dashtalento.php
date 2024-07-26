<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Talento Humano</title>
  <link rel="icon" type="image/webp" sizes="16x16" href="../img/logo.webp">
</head>

  <body>
    <?php require_once ("menu.php"); ?>

    <!-- Preloader -->
    <div class="preloader">
      <div class="cssload-speeding-wheel"></div>
    </div>
           <!-- Page Content -->
           <div id="page-wrapper">
        <div class="container-fluid">
          <div class="row bg-title">
            <div class="col-lg-12">
              <h4 class="page-title">Puedes gestionar tus Personas desde este modulo</h4>
              <ol class="breadcrumb">
              </ol>
            </div>
            <!-- /.col-lg-12 -->
          </div>
          <!-- row -->
          <div class="row" >
            <div class="col-md-12">
              <div class="white-box">
                <h3>Modulo - Talento Humano</h3>
                <!-- Container de citas(Data Tables) -->
                <div class="container-fluid">
                  <div class="jumbotron white-box">
                    <div class="container">
                        <div class="row">
                        <main>
          <!-- Navegacion -->
          <nav aria-label="...">
              <ul class="pagination pagination-lg justify-content-center">
                  <li class="page-item active" aria-current="page"><a class="page-link" href="Dashtalento.php">Añadir un nuevo Talento</a></li>
                  <li class="page-item"><a class="page-link" href="administradores/admintalentos.php">Administrar Talento Humano </a></li>

              </ul>
          </nav>
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
          <!-- Fin de navegacion -->
          <form action="administradores/regetalento.php" required=" " method="POST" enctype="multipart/form-data">
          <div class="input-group">
                          <label style="width: 170px;" for="imagen" class="form-label">Cargar Imagen</label>
                          <input class="form-control" type="file" id="imagen" name ="imagen" 
                          required=" " accept="image/*" >
                          <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui debes CARGAR UNA IMAGEN ">
                  <i class="fas fa-question"></i>
                  </button>
                      </div>
                      <br>    
          <div class="input-group" >
                  <input type="text" id="nombre" name="nombre" class="form-control" placeholder=" Nombre:" 
                    required=" " pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 !¡?¿.-,]+" >
              
                  <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui debes proporcionar un NOMBRE de la Persona">
                  <i class="fas fa-question"></i>
                  </button>
                  <label for="nombre" class="form__label"></label>
             
              </div>

                  
                  <br>
                  <div class="input-group">
                  <input type="text" id="descripcion" name="descripcion" class="form-control" placeholder=" Descripcion Breve : "
                  required=" " pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 !¡?¿.-,]+ ]+"  >
                  <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui debes proporcionar una DESCRIPCION adecuada para la Persona">
                  <i class="fas fa-question"></i>
                  </button>
                  <label for="descripcion" class="form__label"></label>
                  </div>
             
                  <br>
                  <div class="input-group">
                  <input type="text" id="cargo" name="cargo" class="form-control" placeholder=" Cargo de la Persona:"
                  required=" " pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 !¡?¿.-,]+]+"  >
                  <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui debes proporcionar cargo de la Persona">
                  <i class="fas fa-question"></i>
                  </button>
                  <label for="cargo" class="form__label"></label>
                  </div>
                  <br>
                 
                      <!-- Seccion para cargar la imagen -->

                    
                  <br> 
                  <button style="margin: 2px; border-radius: 5px;"  type="submit" class="btn btn-success btn-large">Registrar un Nuevo Talento</button>
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
          <?php require_once ("footer.php"); ?>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /#page-wrapper -->
      
    </div>
  </body>
</html>