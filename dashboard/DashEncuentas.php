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
          <h4 class="page-title">Puedes gestionar la Encuesta</h4>
          <ol class="breadcrumb">
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="white-box">
          <h3>Modulo - Encuesta</h3>
          <div class="container-fluid">
            <div class="jumbotron white-box">
              <div class="container">
                <div class="col-lg-auto">
                  <div>
                    <table id="noexportar" class="table table-striped table-bordered" cellspacing="0" style="width: 100%;">
                      <thead>
                        <tr>
                          <th>URL</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $conexion=conectar(); 
                        $consulta2 ="SELECT * FROM `encuesta` ";
                        $busqueda=mysqli_query($conexion,$consulta2);

                        foreach($busqueda as $row) { ?>
                          <tr>
                            <td><?php echo $row["url"]; ?></td>
                            <td>
                              <div class="btn-group">
                              <a style="margin: 2px; border-radius: 5px; position: relative;" href="encuesta.php?Id=<?php echo $row["Id"]?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                              </div>
                            </td>
                          </tr>
                        <?php } ?> 
                      </tbody>
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
