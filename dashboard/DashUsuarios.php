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
              Bienvenido Administrador, ¡desde aquí puedes gestionar los usuarios!
            </h4>
            <ol class="breadcrumb">
              <li><a href="#">Dashboard</a></li>
            </ol>
          </div>
        </div>
   
<!-- inicio-->
            <div>
            <div class="row">
            
            <div class="white-box">
            <h3>Modulo - Citas</h3>
            <!-- Container de citas(Data Tables) -->
            <div class="container-fluid">
            <div class="jumbotron white-box">
            <div class="container">
            <div class="row">
            <div class="col-lg-18">
            <div class="table-responsive">  
            <nav aria-label="...">
                <ul class="pagination pagination-lg justify-content-center">
                  <li class="page-item active rounded" class="nav-item"><a class="nav-link" href="DashCitas.php">Citas Disponibles</a></li>
                  <li class="page-item rounded" aria-current="page"><a class="page-link" href="reprocitas.php">Reprogramar Citas</a></li>
                </ul>
                <br>
            </nav>
            <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
          
          Agregar usuario

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Nombre</th>
           <th>Usuario</th>
           <th>Foto</th>
           <th>Perfil</th>
           <th>Estado</th>
           <th>Último login</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>
          
          <tr>
            <td>1</td>
            <td>Usuario Administrador</td>
            <td>admin</td>
            <td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>
            <td>Administrador</td>
            <td><button class="btn btn-success btn-xs">Activado</button></td>
            <td>2017-12-11 12:05:32</td>
            <td>

              <div class="btn-group">
                  
                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                <button class="btn btn-danger"><i class="fa fa-times"></i></button>

              </div>  

            </td>

          </tr>

           <tr>
            <td>1</td>
            <td>Usuario Administrador</td>
            <td>admin</td>
            <td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>
            <td>Administrador</td>
            <td><button class="btn btn-success btn-xs">Activado</button></td>
            <td>2017-12-11 12:05:32</td>
            <td>

              <div class="btn-group">
                  
                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                <button class="btn btn-danger"><i class="fa fa-times"></i></button>

              </div>  

            </td>

          </tr>

           <tr>
            <td>1</td>
            <td>Usuario Administrador</td>
            <td>admin</td>
            <td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>
            <td>Administrador</td>
            <td><button class="btn btn-danger btn-xs">Desactivado</button></td>
            <td>2017-12-11 12:05:32</td>
            <td>

              <div class="btn-group">
                  
                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                <button class="btn btn-danger"><i class="fa fa-times"></i></button>

              </div>  

            </td>

          </tr>

        </tbody>

       </table>

      </div>

    </div>

  </section>      
                          
            </div>
            </div>
            </div>
            </div>
            </div>  
            </div>  
            <!-- Fin data Table -->
            </div>
            
          </div>
          <!-- /.row -->
        </div>

            </div>
  </div>
  <?php require_once ("footer.php"); ?>
</body>
</html>
</html>