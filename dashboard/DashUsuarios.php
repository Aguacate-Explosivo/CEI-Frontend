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

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          Start creating your amazing application!
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<!--antiguo-->
<section>

<div class="box">

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
            <!-- Fin data Table -->
            </div>
   
  </div>
  <?php require_once ("footer.php"); ?>
</body>
</html>