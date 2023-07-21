<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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
    <link
      rel="canonical"
      href="https://www.wrappixel.com/templates/myadmin-lite/"
    />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.png" />
    <!-- Bootstrap Core CSS -->
    <link
      href="../bower_components/bootstrap/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Menu CSS -->
    <link
      href="../bower_components/metisMenu/dist/metisMenu.min.css"
      rel="stylesheet"
    />
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet" />

    
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="../datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="../datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
  </head>

  <body>
      <?php
      require_once("menu.php");
      include_once("../sesion_validacion.php")
      ?>
    <!-- Preloader -->
    <div class="preloader">
      <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
      <!-- Navigation -->

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
                    <li class="page-item active"><a class="page-link" href="admincursos.php">Admin Cursos</a></li>
                    <li class="page-item"><a class="page-link" href="encacurso.php">Añadir Encargado de Curso</a></li>
                    <li class="page-item"><a class="page-link" href="administarinscritos.php">Admin Inscritos a cursos</a></li>

                </ul>
            </nav>
            
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                               
                                <th>Nombre Curso</th>
                                <th>Descripcion curso</th>                             
                                <th>Encargado</th>
                                <th>Imagen</th>
                                <th>Acciones</th>
                                
                            </tr>
                        </thead>
                                <?php
                                 require_once('../../conexion.php');
                                 $conexion=conectar(); 
                                 $consulta2 ="SELECT * FROM `cursos` ";
                                 $busqueda=mysqli_query($conexion,$consulta2);
                                    
                            foreach($busqueda as $elemento){ ?>
                            <!-- Contenido de la tabla -->

                            <tr>
                                <td><?php echo $elemento["NombreCurso"]; ?></td>
                                <td><?php echo $elemento["DescripcionCurso"]; ?></td>
                                <td><?php echo $elemento["EncargadoCurso"]; ?></td>
                                <td><img style="width: 100px;" src="data:image/jpg;base64,<?php echo base64_encode($elemento["imagen"]); ?>" class="card-img-top"></td>
                                <td>
                                   <a href="editarcurso.php?Id_Curso=<?php echo $elemento["Id_Curso"]?>" class="btn btn-warning" > editar</a>
                                   <a href="eliminarcurso.php?Id_Curso=<?php echo $elemento["Id_Curso"]?>" class="btn btn-danger" > eliminar</a>
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
