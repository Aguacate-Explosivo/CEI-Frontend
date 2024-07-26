<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Actividades</title>
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
              <h4 class="page-title">Puedes gestionar tus Actividades desde este modulo</h4>
              <ol class="breadcrumb">
              </ol>
            </div>
            <!-- /.col-lg-12 -->
          </div>
          <!-- row -->
          <div class="row" >
            <div class="col-md-12">
              <div class="white-box">
                <h3>Modulo - Actividades</h3>
                <!-- Container de citas(Data Tables) -->
                <div class="container-fluid">
                  <div class="jumbotron white-box">
                    <div class="container">
                        <div class="row">
                        <main>
          <!-- Navegacion -->
          <nav aria-label="...">
              <ul class="pagination pagination-lg justify-content-center">
                  <li class="page-item active" aria-current="page"><a class="page-link" href="Dashactividades.php">Añadir una nueva Actividades</a></li>
                  <li class="page-item"><a class="page-link" href="administradores/adminactividades.php">Administrar Actividades </a></li>

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
          <form action="administradores/regeactividades.php" required=" " method="POST" enctype="multipart/form-data">
          <div class="row g-3">
                        <div class="col-md-12">
                              <div class="form-floating">
                                     <label for="nombre">Nombre de Actividad:</label>
                                     <input type="text" class="form-control" id="nombre"
                                      name="nombre" placeholder="Ingresar Nombre de la Actividad" 
                                     required pattern="[a-zA-ZÁÉÍÓÚáéíóúñÑ,.\-0-9 ]+">
                              </div>
                         </div>
                         <div class="col-md-4">
                              <div class="form-floating">
                                     <label for="imagen">Imagen de Actividad:</label>
                                     <input type="file" class="form-control"  id="imagen"
                                      name="imagen" required placeholder="Ingresar imagen" 
                                      >
                              </div>
                         </div>
                         <div class="col-md-4">
                              <div class="form-floating">
                                     <label for="imagen1">Imagen de Actividad:</label>
                                     <input type="file" class="form-control" value="null" id="imagen1"
                                      name="imagen1" placeholder="Ingresar imagen" 
                                      >
                              </div>
                         </div>   <div class="col-md-4">
                              <div class="form-floating">
                                     <label for="imagen2">Imagen de Actividad:</label>
                                     <input type="file" class="form-control"  value="null" id="imagen2"
                                      name="imagen2" placeholder="Ingresar imagen" 
                                      >
                              </div>
                         </div>   <div class="col-md-4">
                              <div class="form-floating">
                                     <label for="imagen3">Imagen de Actividad:</label>
                                     <input type="file" class="form-control" value="null" id="imagen3"
                                      name="imagen3" placeholder="Ingresar imagen" 
                                     >
                              </div>
                         </div>   <div class="col-md-4">
                              <div class="form-floating">
                                     <label for="imagen4">Imagen de Actividad:</label>
                                     <input type="file" class="form-control" value="null" id="imagen4"
                                      name="imagen4" placeholder="Ingresar imagen" 
                                      >
                              </div>
                         </div>   <div class="col-md-4">
                              <div class="form-floating">
                                     <label for="imagen5">Imagen de Actividad:</label>
                                     <input type="file" class="form-control" value="null" id="imagen5"
                                      name="imagen5" placeholder="Ingresar imagen" 
                                    >
                              </div>
                         </div>
                         <div class="col-md-12">
                              <div class="form-floating">
                                     <label for="descripcion">Descripcion de Actividad:</label>
                                     <textarea type="text" class="form-control" id="descripcion"
                                      name="descripcion" placeholder="Ingresar Descripcion de la Actividad" 
                                     required pattern="[a-zA-ZÁÉÍÓÚáéíóúñÑ,.\-0-9 ]+" rows="8" cols="50"></textarea>
                              </div>
                         </div>
                 
                      <!-- Seccion para cargar la imagen -->

                    
                  <br> 
                  <button style="margin: 2px; border-radius: 5px;"  type="submit" class="btn btn-success btn-large">Registrar una Nueva Actividades</button>
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