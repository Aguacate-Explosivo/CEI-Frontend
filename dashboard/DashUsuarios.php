<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Admin</title>
  <link rel="icon" type="image/webp" sizes="16x16" href="../img/logo.webp">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/main.ajax"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <?php require_once("menu.php");
        require_once ("../conexion.php");
  ?>

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
                        <li class="page-item active rounded"><a style="margin: 2px; border-radius: 5px;"  class="nav-link" href="regisusuario.php"><i class="fa fa-edit fa-fw"></i> Registrar usuario</a></li>
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
                          <th>Fecha de Creacion</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <?php
                      $conexion = conectar();
                      $consulta2 = "SELECT * FROM `datos` WHERE usuario <> 'admin'";
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
                              <button style="margin: 2px; border-radius: 5px;"  class="btn btn-success btn-xs btnActivar" data-id="<?php echo $id; ?>" data-estado="0">Activado</button>
                            <?php } else { ?>
                              <button style="margin: 2px; border-radius: 5px;"  class="btn btn-danger btn-xs btnActivar" data-id="<?php echo $id; ?>" data-estado="1">Desactivado</button>
                            <?php } ?>
                          </td>
                          <td><?php echo $perfil; ?></td>
                          <td><?php echo $row["timestamp"]; ?></td>
                          <td>
                            <div class="btn-group">
                            <!-- <button style="margin: 2px; border-radius: 5px;"  class="btn btn-warning btnEditar" onclick="editarUsuario('<?php echo $id; ?>', '<?php echo $usuario; ?>', '<?php echo $correo; ?>', '<?php echo $estado; ?>', '<?php echo $perfil; ?>')">
                              <i class="fas fa-edit"></i>
                            </button> -->

                            <div class="btn-group">
                              <a style="margin: 2px; border-radius: 5px; position: relative;" href="editarUsuarioForm.php?Id=<?php echo $id?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                              </div>
                              <!-- <button style="margin: 2px; border-radius: 5px;"  class="btn btn-danger btnEliminar" data-id="<?php echo $id; ?>"><i class="fas fa-trash-alt fa-flip-horizontal"></i></button> -->
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
    <?php require_once("footer.php"); ?>
  </div>
  <script>
      $(document).ready(function() {
        $('.btnActivar').click(function() {
          var id = $(this).data('id');
          var estado = $(this).data('estado'); 

          $.ajax({
            type: 'POST',
            url: 'actiUser.php',
            data: {
              id: id,
              estado: estado
            },
            success: function(response) {
              if (estado == 0) {
                $(this).removeClass('btn-success').addClass('btn-danger').text('Desactivado');
              } else {
                $(this).removeClass('btn-danger').addClass('btn-success').text('Activado');
              }
            },
            error: function() {
              alert('Error al actualizar el estado');
            }
          });
        });
      });
  </script>
</body>
</html>