<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Admin</title>
  <title>Dashboard CEI</title>
  <link rel="icon" type="image/webp" sizes="16x16" href="../img/logo.webp">
</head>
<body>
<?php require_once ("menu.php"); ?>

    <div id="page-wrapper">
      <div class="container-fluid">
        <div class="row bg-title">
          <div class="col-lg-12">
            <h4 class="page-title">
              Bienvenido Administrador, ¡desde aquí puedes Consultar simulaciones emprendimientos!
            </h4>
            <ol class="breadcrumb">
              <li><a href="#">Dashboard</a></li>
            </ol>
          </div>
        </div>
   
<!-- inicio-->
            <div class="row">
            <div class="col-md-12">
              <div class="white-box">
                <h3>Modulo - Consultar Emprendimiento</h3>
                <!-- Container de citas(Data Tables) -->
                <div class="container-fluid">
                  <div class="jumbotron white-box">
                    <div class="container">
                        <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive"> 
            
                                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nombre del evento </th>
                                <th>descripcion del evento</th>    
                                <th>Lugar</th> 
                                                           
                               
                            </tr>
                        </thead>
                                <?php
                                 require_once('../conexion.php');
                                 $conexion=conectar(); 
                                 $consulta2 ="SELECT * FROM `simulaciones` ";
                                 $busqueda=mysqli_query($conexion,$consulta2);
                                    
                            foreach($busqueda as $elemento){ ?>
                            <!-- Contenido de la tabla -->
                             


                       
                            <tr>
                                <td><?php echo $elemento["cc"]; ?></td>
                                <td><?php echo $elemento["nombre"]; ?></td>
                                <td>  <a style="margin: 2px; border-radius: 5px;" href="simulaciones/descargar.php?id=<?php echo $elemento["id"]; ?>" class="btn btn-warning" > Descargar</a>
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
                  
          
  </div>
  <?php require_once ("footer.php"); ?>
</body>
</html>