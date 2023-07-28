<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Eventos</title>
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
              <h4 class="page-title">Puedes gestionar tus eventos desde este modulo</h4>
              <ol class="breadcrumb">
              </ol>
            </div>
            <!-- /.col-lg-12 -->
          </div>
          <!-- row -->
          <div class="row" >
            <div class="col-md-12">
              <div class="white-box">
                <h3>Modulo - Eventos</h3>
                <!-- Container de citas(Data Tables) -->
                <div class="container-fluid">
                  <div class="jumbotron white-box">
                    <div class="container">
                        <div class="row">
                        <main>
          <!-- Navegacion -->
          <nav aria-label="...">
              <ul class="pagination pagination-lg justify-content-center">
                  <li class="page-item active" aria-current="page"><a class="page-link" href="DashEventos.php">Añadir un nuevo Evento</a></li>
                  <li class="page-item"><a class="page-link" href="administradores/admineventos.php">Administrar Eventos </a></li>
                  <li class="page-item"><a class="page-link" href="administradores/inscritosevento.php">Registro de Eventos </a></li>

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
          <form action="administradores/regeventos.php" required=" " method="POST" enctype="multipart/form-data">
              <div class="input-group" >
                  <input type="text" id="nom_even" name="nom_even" class="form-control" placeholder=" Nombre del Evento:" 
                    required=" " pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 !¡?¿.-,]+" >
              
                  <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui debes proporcionar un NOMBRE adecuado para el evento">
                  <i class="fas fa-question"></i>
                  </button>
                  <label for="nom_even" class="form__label"></label>
             
              </div>

                  
                  <br>
                  <div class="input-group">
                  <input type="text" id="lugar" name="lugar" class="form-control" placeholder=" Lugar del Evento:"
                  required=" " pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9-#]+"  >
                  <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui debes proporcionar el LUGAR en donde se realizara el evento">
                  <i class="fas fa-question"></i>
                  </button>
                  <label for="lugar" class="form__label"></label>
                  </div>
                  <br>
                  <div class="input-group">
                  <input type="text" id="desc_even" name="desc_even" class="form-control" placeholder=" Descripcion Breve del Evento: "
                  required=" " pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 ]+"  >
                  <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui debes proporcionar una DESCRIPCION adecuada para el evento en donde se explique a detalle que se hara en el evento">
                  <i class="fas fa-question"></i>
                  </button>
                  <label for="desc_even" class="form__label"></label>
                  </div>
                  <br>
                  <div class="input-group">
                  <label style="width: 170px;" for="fecha" class="form-label">Fecha del Evento:</label>
                  <input name ="fecha" type="date" class="form-control" id="fecha" 
                  required min="2023-03-01 " max="2030-12-31" >
                  <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui debes proporcionar la FECHA en la que se realizara el evento">
                  <i class="fas fa-question"></i>
                  </button>
                  </div>
                  <br>
                  <div class="input-group">
                  <label style="width: 170px;" for="fecha" class="form-label">Hora del Evento:</label>
                  <input name ="hora" type="time" class="form-control" id="hora" required=" "  >
                  <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui debes proporcionar la HORA en la que se realizara el evento">
                  <i class="fas fa-question"></i>
                  </button>
                  </div>
                  <br>
                      <!-- Seccion para cargar la imagen -->
                      <div class="input-group">
                          <label style="width: 170px;" for="imagen" class="form-label">Cargar Imagen</label>
                          <input class="form-control" type="file" id="imagen" name ="imagen" 
                          required=" " accept="image/*" >
                          <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui debes CARGAR UNA IMAGEN referente a el evento">
                  <i class="fas fa-question"></i>
                  </button>
                      </div>
                      <br>
                    <div class="input-group">
                    <label for="fecha_inicio" class="fecha_inicio">Fecha de Inicio de las Inscripciones</label>
                    <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control" placeholder="Fecha de Inicio de Inscripciones:" required step="1" min="2023-01-01" max="2055-12-31">
                    </div>
                    <br>
                    <div class="input-group">
                    <label for="fecha_final" class="fecha_final">Fecha de cierre de las Inscripciones</label>
                    <input type="date" id="fecha_final" name="fecha_final" class="form-control" placeholder="Fecha de cierre de Inscripciones:" required step="1" min="2023-01-01" max="2055-12-31">
                    </div>
                      <br>
                  <div class="input-group">
                  <label for="estado" style="width: 170px;" class="form-label">Estado del Evento:</label>
                  <select required=" " name ="estado"  id="estado" class="form-control"  >
                      <option value=" Activo" >Activo</option>
                      <option value=" Terminado">Terminado</option>
                  </select>
                  <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui debes marcar el ESTADO del evento">
                  <i class="fas fa-question"></i>
                  </button>
                  </div>
                  <br> 
                  <button style="margin: 2px; border-radius: 5px;"  type="submit" class="btn btn-success btn-large">Registrar un Nuevo Evento</button>
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