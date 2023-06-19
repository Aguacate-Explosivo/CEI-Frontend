<?php 
session_start();
if(isset($_POST["Siguiente"])){
  
  $_SESSION['nombre_autor'] = htmlentities($_POST
    ["nombre_autor"]);
    $_SESSION['nombre_negocio'] = htmlentities($_POST
    ["nombre_negocio_plan"]);
    $_SESSION['total4'] = htmlentities($_POST
    ["total4"]);
    $_SESSION['total3'] = htmlentities($_POST
    ["total3"]);
    $_SESSION['total2'] = htmlentities($_POST
    ["total2"]);
    header("location:agregargastos.php");
}
$nombre = $_SESSION['nombre_autor'] ;
$nombren =  $_SESSION['nombre_negocio'] ;
?>

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
    <title>Dashboard Simulaciones</title>
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
    <link href="../css/stylese.css" rel="stylesheet">
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
      include_once("../administradores/sesion_validacion.php")
      ?>
    <!-- Preloader -->
    <div class="preloader">
      <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
      <!-- Navigation -->
      <nav
        class="navbar navbar-default navbar-static-top"
        style="margin-bottom: 0"
      >
        <div class="navbar-header">
          <a
            class="navbar-toggle hidden-sm hidden-md hidden-lg"
            href="javascript:void(0)"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            ><i class="ti-menu"></i
          ></a>
          <div class="top-left-part">
            <a class="logo" href="../index.php"
              ><i class="glyphicon glyphicon-fire"></i>&nbsp;<span
                class="hidden-xs"
                >Simulaciones</span
              ></a
            >
          </div>
          <ul class="nav navbar-top-links navbar-left hidden-xs">
            <li>
              <a
                href="javascript:void(0)"
                class="open-close hidden-xs hidden-lg waves-effect waves-light"
                ><i class="ti-arrow-circle-left ti-menu"></i
              ></a>
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
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
      </nav>
      <div class="navbar-default sidebar nicescroll" role="navigation">
        <div class="sidebar-nav navbar-collapse">
          <ul class="nav" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
              <div class="input-group custom-search-form">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search..."
                />
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">
                    <i class="ti-search"></i>
                  </button>
                </span>
              </div>
            </li>
            <li>
              <a href="../index.php" class="waves-effect"
                ><i class="glyphicon glyphicon-fire fa-fw"></i> Dashboard</a
              >
            </li>
            <li>
              <a href="../DashCitas.php" class="waves-effect"
                ><i class="ti-calendar fa-fw"></i>Citas</a
              >
            </li>
            <li>
              <a href="../DashEventos.php" class="waves-effect "
                ><i class="ti-video-camera fa-fw"></i>Eventos</a
              >
            </li>
            <li>
              <a href="../DashCursos.php" class="waves-effect"
                ><i class="ti-ink-pen fa-fw"></i> Cursos</a
              >
            </li>
            <li>
            <a href="../simulaciones\index.php" class="waves-effect active ">
              <i class="ti-ink-pen fa-fw"></i>
             Simulaciones
            </a>
          </li>
          </ul>
          <div class="center p-20">
            <span class="hide-menu"
              ><a
                href="../../php/log_out.php"
                class="
                  btn btn-success btn-block btn-rounded
                  waves-effect waves-light
                "
                >Cerra sesión</a
              ></span
            >
          </div>
        </div>
        <!-- /.sidebar-collapse -->
      </div>
      <!-- Page Content -->
      <div id="page-wrapper">
        <div class="container-fluid">
          <div class="row bg-title">
            <div class="col-lg-12">
              <h4 class="page-title">Paso 5 Agregar Productos</h4>
              <ol class="breadcrumb">
              </ol>
            </div>
            <!-- /.col-lg-12 -->
          </div>
          <!-- row -->
          <!-- inicio-->
<hr>
<form class="range-form" action="regisprodu.php" required=" " method="POST" enctype="multipart/form-data" >
 <div class="inicio">
    <div class="scroll">
    <div class="col-md-9">
    <input type="text" id="producto" name="producto" class="form-control"
    placeholder="Nombre Producto:" required="" pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9-,.]+"  >
    <label for="producto" class="form__label"></label>
    </div>
<br>
<br>
<br>
  <div class="col-md-9">
      <label for="cantidad" class="form__label"></label>
    <input type="text"  class="form-control" id="cantidad" name="cantidad"
    placeholder="Cantidad producto:" required pattern="[0-9]+" >
    </div>
<br>
<br>
<br>
  <div class="col-md-9">
      <label for="costeu" class="form__label"></label>
    <input type="text"  class="form-control" id="costeu" name="costeu"
    placeholder="Coste Unitario:" required pattern="[0-9]+" >
    </div>
<br>
<br>
<br>
  <div class="col-md-9">
      <label for="preciov" class="form__label"></label>
    <input type="text"  class="form-control" id="preciov" name="preciov"
    placeholder="Precio Venta:" required pattern="[0-9]+" >
    </div>
<br>
<br>
<br>
 <div>
 <br>
<br>
<button type="submit" class="btn btn-success btn-block btn-rounded waves-effect waves-light">Agregar Producto</button>
</div>
<br>
<a  href="mercado2.php" class="btn btn-info btn-block btn-rounded waves-effect waves-light" > Regresar</a>

</form>
</div>


<div class="table">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Producto </th>
                                <th>Cantidad </th>    
                                <th>Coste Unitario</th> 
                                <th>Precio Venta</th> 
                                <th>Acciones</th>                     
                            </tr>
                        </thead>
                                <?php
                                 require_once('../administradores/conexion.php');
                                 $conexion=conectar(); 
                                 $consulta2 ="SELECT * FROM `producto` ";
                                 $busqueda=mysqli_query($conexion,$consulta2);
                                   
                                 $consulta21 ="SELECT SUM(cantidad) as total22  FROM `producto` ";
                                 $busqueda1=mysqli_query($conexion,$consulta21);
                                 $total222= mysqli_fetch_array($busqueda1);
                                 $total22 = $total222['total22'];

                                 $consulta22 ="SELECT SUM(coste_unitario) as total33  FROM `producto` ";
                                 $busqueda2=mysqli_query($conexion,$consulta22);
                                 $total333= mysqli_fetch_array($busqueda2);
                                 $total33 = $total333['total33'];

                                 $consulta23 ="SELECT SUM(precio_venta) as total44  FROM `producto` ";
                                 $busqueda3=mysqli_query($conexion,$consulta23);
                                 $total444= mysqli_fetch_array($busqueda3);
                                 $total44 = $total444['total44']; 
                            foreach($busqueda as $elemento){ ?>
                            <!-- Contenido de la tabla -->
                            <tr>
                                <td><?php echo $elemento["nombre"]; ?></td>
                                <td><?php echo $elemento["cantidad"]; ?></td>
                                <td><?php echo $elemento["coste_unitario"]; ?></td>
                                <td><?php echo $elemento["precio_venta"]; ?></td>
                                <td>
                                <a style="margin: 2px; border-radius: 5px;" href="editarproducto.php?id=<?php echo $elemento["id"]?>" class="btn btn-warning" > Editar</a>
                                <a style="margin: 2px; border-radius: 5px;" href="eliminar.php?id=<?php echo $elemento["id"]?>" class="btn btn-danger" > Eliminar</a>
                                 </td>
                            </tr>
                           
                                 <?php
                                }
                                ?>   
                                
                                <thead>
                                <tr>
                                <th ></th>
                                <th ><?php echo $total22; ?></th>
                                <th ><?php echo $total33; ?></th>
                                <th ><?php echo $total44; ?></th>
                                
                                
                                <th>PORCENTAJES</th>
                            </tr>
                                </thead>
                       </table>
                                      
                       <form  method="POST" enctype="multipart/form-data" >
                      <input type="text" id="total4" name="total4" for="" value="<?php echo $total44; ?>"  >
                      <input type="text" id="total3" name="total3" for="" value="<?php echo $total33; ?>">
                      <input type="text" id="total2" name="total2" for="" value="<?php echo $total22; ?>">
                      <input type="text" id="nombre" name="nombre" for="" value="<?php echo $nombre ; ?> ">
                      <input type="text" id="nombren" name="nombren" for="" value="<?php echo $nombren ; ?>" >
                       <button style="width: 250px;" value="Siguiente" name="Siguiente"  type="submit" class="btn btn-success btn-block btn-rounded waves-effect waves-light">Siguiente</button>                  
                      </form>

                                           
</div>
 </div>                     



<!-- inicio -->
          <!-- /.row -->
       
        <!-- /.container-fluid -->
        <br><br><br><br><br><br><br><br>
      
      <!-- /#page-wrapper -->
      
    
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!--Nice scroll JavaScript -->
    <script src="../js/jquery.nicescroll.js"></script>
    <!--Wave Effects -->
    <script src="../js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../js/myadmin.js"></script>
    <script src="../js/slider.js"></script>
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../popper/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- datatables JS -->
    <script type="text/javascript" src="../datatables/datatables.min.js"></script>    
    <!-- para usar botones en datatables JS -->  
    <script src="../datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="../datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="../datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="../datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="../datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
    <!-- código JS propìo-->    
    <script type="text/javascript" src="../js/main.js"></script>  
  </body>
  
</html>
