<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard CEI</title>
  <link rel="icon" type="image/webp" sizes="16x16" href="../img/logo.webp">
</head>
<?php require_once ("menu.php"); ?>
<body class="hold-transition sidebar-mini">
    <div id="page-wrapper">
      <div class="container-fluid">
        <div class="row bg-title">
          <div class="col-lg-12">
            <h4 class="page-title">
              Bienvenido Administrador, ¡desde aquí puedes gestionar los módulos!
            </h4>
            <ol class="breadcrumb">
              <li><a href="#">Dashboard</a></li>
            </ol>
          </div>
        </div>
<!-- Graficas para citas -->
    <div class="row">
      <?php require_once("progressBar.php"); ?>
      <div class="col-md-4">
        <div class="white-box">
          <h3 class="text-center">Total de Citas Agendadas</h3>
              <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo $fila["total_citas"]; ?>" aria-valuemin="0" aria-valuemax="1000">
                <div class="progress-bar" style="width: <?php echo $fila["total_citas"]; ?>%"><?php echo $fila["total_citas"]; ?></div>
              </div>
            </div>
          </div>

        <div class="col-md-4">
        <div class="white-box">
          <h3 class="text-center">Total de Inscritos en Cursos</h3>
              <div class="progress" role="progressbar" aria-valuenow="<?php echo $fila2["total_inscritos_cursos"]; ?>" aria-valuemin="0" aria-valuemax="1000">
                <div class="progress-bar bg-success" style="width: <?php echo $fila2["total_inscritos_cursos"]; ?>%"><?php echo $fila2["total_inscritos_cursos"]; ?></div>
              </div>
            </div>
          </div>

        <div class="col-md-4">
        <div class="white-box">
          <h3 class="text-center">Total de Inscritos en Eventos</h3>
              <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo $fila3["total_inscritos_eventos"]; ?>" aria-valuemin="0" aria-valuemax="1000">
                <div class="progress-bar bg-warning" style="width: <?php echo $fila3["total_inscritos_eventos"]; ?>%"><?php echo $fila3["total_inscritos_eventos"]; ?></div>
              </div>
            </div>
          </div>

        </div>
  <!-- Iframe del mapa -->
      <div class="row">
          <div class="col-md-12">
            <div class="white-box">
              <h3 class="text-center">Localizacion</h3>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2574.373678526185!2d-76.64616398764448!3d5.680276366382267!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4932ec47709e37%3A0x5698132ef36d83ae!2sUniversidad%20Tecnol%C3%B3gica%20Del%20Choc%C3%B3!5e0!3m2!1ses-419!2sco!4v1686588550411!5m2!1ses-419!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
      <?php require_once ("footer.php"); ?>
    </div>

</body>
</html>
