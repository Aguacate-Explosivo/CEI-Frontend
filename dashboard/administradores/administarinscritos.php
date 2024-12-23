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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="../datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="../datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
  </head>

  <body>
  <?php
      include_once("../sesion_validacion.php");
      require_once("menu.php");
      ?>
    <!-- Preloader -->
    
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
                    <li class="page-item "><a class="page-link" href="encacurso.php">Añadir Encargado de Curso</a></li>
                    <li class="page-item active"><a class="page-link" href="administarinscritos.php">Admin Inscritos a cursos</a></li>

                </ul>
            </nav>
            

                      
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                            <th>Tipo</th>
                                <th style="text-align: center; vertical-align: middle;">Documento</th>
                                <th style="text-align: center; vertical-align: middle;">Categoria</th>
                                <th style="text-align: center; vertical-align: middle;">Nombre</th>
                                <th style="text-align: center; vertical-align: middle;">Sexo</th>
                                <th style="text-align: center; vertical-align: middle;">Telefono</th>     
                                <th style="text-align: center; vertical-align: middle;">Correo</th>
                                <th style="text-align: center; vertical-align: middle;">Institucion</th>
                                <th style="text-align: center; vertical-align: middle;">Programa</th>                        
                                <th style="text-align: center; vertical-align: middle;">Direccion</th>
                                <th style="text-align: center; vertical-align: middle;">Edad</th>
                                <th style="text-align: center; vertical-align: middle;">Curso inscrito</th>
                                <th style="text-align: center; vertical-align: middle;">Acciones</th>

                                
                            </tr>
                        </thead>
                                <?php
                                 require_once('../../conexion.php');
                                 $conexion=conectar(); 
                                 $consulta2 ="SELECT * FROM `inscritos_cursos` ";
                                 $busqueda=mysqli_query($conexion,$consulta2);
                                
                            
                            foreach($busqueda as $elemento){ ?>
                            <!-- Contenido de la tabla -->

                            <tr>
                            <td><?php echo $elemento["tipodocumento"]; ?></td>
                               <td><?php echo $elemento["documento"]; ?></td>
                               <td><?php echo $elemento["categoria"]; ?></td>
                                <td><?php echo $elemento["nombre"]; ?></td>
                                <td><?php echo $elemento["sexo"]; ?></td>
                                <td><?php echo $elemento["telefono"]; ?></td>
                                <td><?php echo $elemento["correo"]; ?></td>
                                <td><?php echo $elemento["institucion"]; ?></td>
                                <td><?php echo $elemento["programa"]; ?></td>
                                <td><?php echo $elemento["direccion"]; ?></td>
                                <td><?php echo $elemento["edad"]; ?></td>
                                <td><?php echo $elemento["curso_inscrito"]; ?></td>
                                <td>
                                   <a style="margin: 2px; border-radius: 5px;"  href="eliminarinscrito.php?id=<?php echo $elemento["id"]?>" class="btn btn-danger" > <i class="fas fa-trash-alt fa-flip-horizontal"></i></a>
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
        <?php require_once ("../footer.php"); ?>  
      </div>
      <!-- /#page-wrapper -->
    </div>
    
  </body>
</html>
