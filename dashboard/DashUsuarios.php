<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Admin</title>
  <link rel="icon" type="image/webp" sizes="16x16" href="../img/logo.webp">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/main.ajax"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
<body>
  <?php require_once("menu.php");
        require_once("cambiar_estado.php");?>
  <div class="preloader">
    <div class="cssload-speeding-wheel"></div>
  </div>
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row bg-title">
        <div class="col-lg-auto">
          <h4 class="page-title">Puedes gestionar los usuarios</h4>
          <ol class="breadcrumb">
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="white-box">
          <h3>Modulo - Usuarios</h3>
          <div class="container-fluid">
            <div class="jumbotron white-box">
              <div class="container">
                <div class="col-lg-auto">
                  <div>
                    <nav aria-label="...">
                      <ul class="pagination pagination-lg justify-content-center">
                        <li class="page-item active rounded"><a class="nav-link" href="regisusuario.php"><i class="fa fa-edit fa-fw"></i> Registrar usuario</a></li>
                      </ul>
                      <br>
                    </nav>
                    <table id="noexportar" class="table table-striped table-bordered" cellspacing="0" style="width: 100%;">
                      <thead>
                        <tr>
                          <th>Usuario</th>
                          <th>Correo</th>
                          <th>Estado</th>
                          <th>Perfil</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <?php
                      $conexion = conectar();
                      $consulta2 = "SELECT * FROM `datos` ";
                      $busqueda = mysqli_query($conexion, $consulta2);

                      while ($row = mysqli_fetch_assoc($busqueda)) {
                        $usuario = htmlspecialchars($row["usuario"]);
                        $email = htmlspecialchars($row["email"]);
                        $id = htmlspecialchars($row["id"]);
                        $estado = htmlspecialchars($row["estado"]);
                        $perfil = htmlspecialchars($row["perfil"]);

                        $usuario = mysqli_real_escape_string($conexion, $usuario);
                        $email = mysqli_real_escape_string($conexion, $email);
                        $id = mysqli_real_escape_string($conexion, $id);
                        $estado = mysqli_real_escape_string($conexion, $estado);
                        $perfil = mysqli_real_escape_string($conexion, $perfil);
                        ?>
                        <tr>
                          <td><?php echo $usuario; ?></td>
                          <td><?php echo $email; ?></td>
                          <td>
                            <?php if ($estado != 0) { ?>
                              <button class="btn btn-success btn-xs btnActivar" data-id="<?php echo $estaado; ?>" data-estado="0">Activado</button>
                            <?php } else { ?>
                              <button class="btn btn-danger btn-xs btnActivar" data-id="<?php echo $estaado; ?>" data-estado="1">Desactivado</button>
                            <?php } ?>
                          </td>
                          <td><?php echo $perfil; ?></td>
                          <td>
                            <div class="btn-group">
                            <button class="btn btn-warning btnEditar" data-id="<?php echo $id; ?>" data-usuario="<?php echo $usuario; ?>" data-correo="<?php echo $email; ?>" data-estado="<?php echo $estado; ?>" data-perfil="<?php echo $perfil; ?>">
                              <i class="fas fa-edit"></i>
                            </button>

                              <button class="btn btn-danger btnEliminar" data-id="<?php echo $id; ?>"><i class="fas fa-trash-alt fa-flip-horizontal"></i></button>
                            </div>
                          </td>
                        </tr>
                      <?php } ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require_once("footer.php"); ?>
</body>
</html>