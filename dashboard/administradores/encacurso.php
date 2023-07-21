<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- <script defer src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, severny admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, my admin design, my admin dashboard bootstrap 4 dashboard template"
    />
    <meta
      name="description"
      content="My Admin is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Dashboard Cursos</title>  
  </head>

  <body>
  <?php
      require_once("menu.php");
      include_once("../sesion_validacion.php");
      ?>
    <!-- Preloader -->
    <div class="preloader">
      <div class="cssload-speeding-wheel"></div>
    </div>
    
      <!-- Page Content -->
      <div id="page-wrapper">
        <div class="container-fluid">
          <div class="row bg-title">
            <div class="col-lg-12">
              <h4 class="page-title">Puedes gestionar tus cursos desde este modulo</h4>
              <ol class="breadcrumb">
              </ol>
            </div>
            <!-- /.col-lg-12 -->
          </div>
          <!-- row -->
          <div class="row">
            <div class="col-md-12">
              <div class="white-box">
                <h3>Modulo - Cursos</h3>
                <!-- Container de citas(Data Tables) -->
                <div class="container-fluid">
                  <div class="jumbotron white-box">
                    <div class="container">
                        <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive"> 
                                    <nav aria-label="...">
                <ul class="pagination pagination-lg justify-content-center">
                    <li class="page-item " aria-current="page"s><a class="page-link" href="../DashCursos.php">Añadir un nuevo Curso</a></li>
                    <li class="page-item "><a class="page-link" href="admincursos.php">Admin Cursos</a></li>
                    <li class="page-item active"><a class="page-link" href="encacurso.php">Añadir Encargado de Curso</a></li>
                    <li class="page-item"><a class="page-link" href="administarinscritos.php">Admin Inscritos a cursos</a></li>

                </ul>
            </nav>
            
            <a href="agregarencargado.php" class="btn btn-success" > Agregar Encargado</a>

                      
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                
                                <th>Encargado Del Curso </th>
                                <th>Perfil Del Encargado</th>    
                                <th>Acciones</th>                           
                                
                                
                            </tr>
                        </thead>
                                <?php
                                 require_once('../../conexion.php');
                                 $conexion=conectar(); 
                                 $consulta2 ="SELECT * FROM `encargado` ";
                                 $busqueda=mysqli_query($conexion,$consulta2);
                                    
                            foreach($busqueda as $elemento){ ?>
                            <!-- Contenido de la tabla -->


                       
                            <tr>
                              
                                <td><?php echo $elemento["encargados"]; ?></td>
                                <td><img style="width: 100px; border-radius:50%;" src="data:image/jpg;base64,<?php echo base64_encode($elemento["imagen"]); ?>" class="card-img-top"></td>
                                <td>
                                   <a href="eliminarencargado.php?id=<?php echo $elemento["id"]?>" class="btn btn-danger" > Eliminar</a>
                                </td>
                            </tr>
                                                      
                        
                                 <?php
                                }
                                ?>
                       
                         
                                       
                       </table> 
                                      </div>
                                    </div>
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
      <footer class="footer text-center">
        FACNET - 2023 &copy; 
      </footer>
    </div>
   
  </body>
</html>
