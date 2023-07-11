<?php
  session_start();
 
  $nombre_negocio_plan = $_SESSION['nombre_negocio_plan'];




  //agregar tabla a base de datos
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

  <body style="background-image: url(img/fondo.png);">
  <?php
      include_once("menu1.php")
      ?>
    
      <!-- Page Content -->
      <div class="wrapper" style="background: white; width: 1200px; margin: auto;">
        <div class="container-fluid">
          <div class="row bg-title">
            <div class="col-lg-12">
              <h4 class="page-title">Datos de Productos Reales</h4>
              <div style="float: right;  width: 200px; ">
                             <a href="drop1.php" class="btn btn-danger btn-block btn-rounded waves-effect waves-light">Cerrar Sumulacion </a>
                            </div>
              <ol class="breadcrumb">
              </ol>
            </div>
            <!-- /.col-lg-12 -->
        
          <!-- row -->
          <!-- inicio-->
<hr>

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Producto </th>
                                <th>Cantidad </th>    
                                <th>Coste Unitario</th> 
                                <th>Precio Venta</th> 
                                <th>Margen unitario</th> 
                                <th>Margen unitario %</th> 
                                <th>Costes totales </th> 
                                <th>Ingresos totales </th> 
                                <th>Margen total </th> 
                                
                            </tr>
                        </thead>
                                <?php
                                 require_once('../../conexion.php');
                                 $conexion=conectar(); 
                                 $consulta2 ="SELECT * FROM ` $nombre_negocio_plan` ";
                                 $busqueda=mysqli_query($conexion,$consulta2);

                            foreach($busqueda as $elemento){ 
                                // operaciones 
                                $cantidad = $elemento["cantidad"];
                                $coste_unitario = $elemento["coste_unitario"];
                               


                                $precio_venta = $elemento["precio_venta"];
                                
            
                                $margen_unitario = $precio_venta - $coste_unitario    ;
                                $margen_unitario1 = $margen_unitario / $precio_venta *100;
                                $margen_unitario1 = number_format($margen_unitario1, 0);

                                $costes_totales = $cantidad * $coste_unitario ;

                                $ingresos_totales = $cantidad * $precio_venta ;

                                $margenes_total = $ingresos_totales - $costes_totales  ;
                                $margenes_total = number_format($margenes_total, 0 ,',', '.');

                              
                              ?>
                            <!-- Contenido de la tabla -->
                            <tr>
                                <td><?php echo $elemento["nombre"]; ?></td>
                                <td><?php echo $elemento["cantidad"]; ?></td>
                                <td><?php echo $elemento["coste_unitario"]; ?></td>
                                <td><?php echo $elemento["precio_venta"]; ?></td>
                                <td><?php echo $margen_unitario; ?></td>
                                <td><?php echo $margen_unitario1; ?> %</td>
                                <td><?php echo $costes_totales; ?></td>
                                <td><?php echo $ingresos_totales; ?></td>
                                <td><?php echo $margenes_total; ?></td>
                     
                            </tr>
                           
                                 <?php
                                }
                                ?>   
                                
                       </table>
                                  
                       <form  method="POST" enctype="multipart/form-data" >
                       <a style="width: 250px;" value="Siguiente" href="producto.php" name="Siguiente"  type="submit" class="btn btn-info btn-block btn-rounded waves-effect waves-light">Atras</a>                  
                      
                        <!-- Inputs para transferir informacion -->
                        <div>
                                                            

                                                            <!-- Form 2 -->
                                                            <input type="hidden" id="nombre_negocio_plan" name="nombre_negocio_plan" value="<?php  echo $nombre_negocio_plan; ?>">
                                                            <label for="nombre_negocio_plan" class="form__label"></label>
                                                           

                                                     
                                                          </div>
                      </form>



                                           
</div>
 </div>                     
 </div>  
 </div>

<!-- inicio -->

  </body>
  <footer>
  <?php
      include_once("../footer.php")
      ?>
  </footer>
</html>
