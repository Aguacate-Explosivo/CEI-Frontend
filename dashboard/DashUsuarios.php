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
    <!-- Preloader -->
    <div class="preloader">
      <div class="cssload-speeding-wheel"></div>
    </div>
      <!-- Page Content -->
      <div id="page-wrapper">
        <div class="container-fluid">
          <div class="row bg-title">
            <div class="col-lg-auto">
              <h4 class="page-title">Puedes gestionar los usuarios</h4>
              <ol class="breadcrumb">
              </ol>
            </div>
            <!-- /.col-lg-12 -->
          </div>

          <!-- row -->
          <div class="row">
            <div class="white-box">
            <h3>Modulo - Usuarios</h3>
            <div class="container-fluid">
            <div class="jumbotron white-box">
            <div class="container">
            <div class="col-lg-auto">
            <div >  
            <nav aria-label="...">
                <ul class="pagination pagination-lg justify-content-center">
                  <li class="page-item active rounded" class="nav-item"><a class="nav-link" href="regisusuario.php"><i class="fa fa-edit fa-fw"></i> Registrar usuario</a></li>
                </ul>
                <br>
            </nav>
            <!-- /.card -->
            <table id="noexportar" class="table table-striped table-bordered" cellspacing="0" style="width: 100%;">         

            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Perfil</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
                    <?php
                      include("../conexion.php");
                      $conexion=conectar(); 
                      $consulta2 ="SELECT * FROM `citas` ";
                      $busqueda=mysqli_query($conexion,$consulta2);

                foreach($busqueda as $row){ }?>
             
             <tbody>
          
          <tr>
            <td>Usuario Administrador</td>
            <td>admin</td>
            <td>Administrador</td>
            <td><button class="btn btn-success btn-xs">Activado</button></td>

            <td>

              <div class="btn-group">
                  
                <button class="btn btn-warning"><i class="fas fa-edit"></i></button>

                <button class="btn btn-danger"> <i class="fas fa-trash-alt fa-flip-horizontal"></i></button>

              </div>  

            </td>

          </tr>

           <tr>
            <td>Usuario Administrador</td>
            <td>admin</td>
            <td>Administrador</td>
            <td><button class="btn btn-success btn-xs">Activado</button></td>
            <td>

              <div class="btn-group">
                  
              <button class="btn btn-warning"><i class="fas fa-edit"></i></button>

              <button class="btn btn-danger"> <i class="fas fa-trash-alt fa-flip-horizontal"></i></button>

              </div>  

            </td>

          </tr>

           <tr>
            <td>Usuario Administrador</td>
            <td>admin</td>
            <td>Administrador</td>
            <td><button class="btn btn-danger btn-xs">Desactivado</button></td>
            <td>

              <div class="btn-group">
                  
              <button class="btn btn-warning"><i class="fas fa-edit"></i></button>

              <button class="btn btn-danger"> <i class="fas fa-trash-alt fa-flip-horizontal"></i></button>

              </div>  

            </td>

          </tr>

        </tbody>
            </table>                  
            </div>
            </div>
            </div>
            </div>
            </div>  
            </div>  
            <!-- Fin data Table -->
            </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /#page-wrapper -->
      <?php require_once ("footer.php"); ?>
    </div>
    <!-- /#wrapper --> 
  </body>
</html>