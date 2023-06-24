<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Cursos</title>

    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png" />
  
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
              <h4 class="page-title">Puedes gestionar tus Cursos desde este modulo</h4>
              <ol class="breadcrumb">
              </ol>
            </div>
            <!-- /.col-lg-12 -->
          </div>
          <!-- row -->
          <div class="row" >
            <div class="col-md-12">
              <div class="white-box">
                <h3>Modulo - Cursos</h3>
                <!-- Container de citas(Data Tables) -->
                <div class="container-fluid">
                  <div class="jumbotron white-box">
                    <div class="container">
                        <div class="row">
                        <main>
          <!-- Navegacion -->
          <nav aria-label="...">
                <ul class="pagination pagination-lg justify-content-center">
                    <li class="page-item active" aria-current="page"s><a class="page-link" href="DashCursos.php">Añadir un nuevo Curso</a></li>
                    <li class="page-item"><a class="page-link" href="administradores/admincursos.php">Admin Cursos</a></li>
                    <li class="page-item"><a class="page-link" href="administradores/encacurso.php ">Añadir Encargado de Curso</a></li>
                    <li class="page-item"><a class="page-link" href="administradores/administarinscritos.php ">Admin Inscritos a cursos</a></li>

                </ul>
            </nav>
          <!-- Fin de navegacion -->
          <form action="administradores\registarcursos.php" required=" " method="POST" enctype="multipart/form-data" >
                <div class="form-floating">
                    <input type="text" id="nom_curso" name="nom_curso" class="form-control" placeholder="Nombre del curso: " 
                    required=" " pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 !¡?¿.-,]+">
                    <label for="nom_curso" class="form__label"></label>
                    </div>
                    <br>
                    <div class="form-floating">
                   
                    <select id="encargado" name="encargado" class="form-control" >
                                    <!-- Codigo de la base de datos -->
                                    <?php
                                include("../conexion.php");
                                $conexion=conectar();

                                $query1 = "select *from `encargado` order by encargados";
                                $query2 = mysqli_query($conexion,$query1);

                                while($row = mysqli_fetch_array($query2))
                                {
                                    $id = $row['id'];
                                    $encargado = $row['encargados'];

                                    ?>
                                    <option value="<?php echo $encargado; ?>"><?php echo $encargado; ?></option>
                                    <?php
                                }

                                ?>
                                <option selected>Seleccione el encargado del curso :</option>
                                </select>
                                </div>

                    <br> 
                    <div class="form-floating">
                    <input type="text" id="desc_curso" name="desc_curso" class="form-control" placeholder="Descripcion del Curso:" 
                    required=" " pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 !¡?¿.-,]+">
                    <label for="desc_curso" class="form__label"></label>
                    </div>
                    <br>
                        <!-- Seccion para cargar la imagen -->
                        <div class="form-floating">
                            <label for="formFile" class="form-contro">Cargar Imagen</label>
                            <input class="form-control" required=" " accept="image/*"  name="imagen" id="imagen" type="file" >
                        </div>
                    <br> 
                    <button type="submit" class="btn btn-success btn-large">Registrar un Nuevo Curso</button>
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
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /#page-wrapper -->
      <?php require_once ("footer.php"); ?>                         
    </div>
  </body>
</html>
