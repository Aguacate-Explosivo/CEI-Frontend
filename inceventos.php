<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/logo.webp">
    <title>CEI | Eventos</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
<!-- Favicon -->
<link href="img/favicon.webp" rel="icon">
<!-- Google Web Fonts -->
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap">
</noscript>
<!-- Icon Font Stylesheet -->
<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</noscript>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" defer>
<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet" async>
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" async>
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" async>
<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" async>
<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet" async>

</head>

<body>
    <?php require_once("cabecera.php"); ?>
    <!-- Navbar End -->
    <!-- Formulario -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">Asistir a Evento</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="0.1s">
                    <form action="dashboard/administradores/regisevento.php" method="POST">
                        <p>En este formulario se le permitirá inscribirse a los Eventos que se realizan en el centro de
                            emprendimiento e innovación</p>
                    <div class="row g-3">
                    <div class="col-md-6">
                            <div class="form-floating">
                            <select  class="form-control" name="tipodocumento" id="tipodocumento">
                                <option value="Cedula de ciudadania">Cedula de ciudadania</option>
                                <option value="Targeta de identidad">Targeta de identidad </option>
                                <option value="Contraseña">Contraseña</option>
                                <option value="Documento extranjero">Documento extranjero</option>
                                <option value="Pasaporte">Pasaporte </option>
                                </select>
                                <label  for="tipodocumento" class="form__label">Tipo de Documento:</label>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" id="documento" name="documento" class="form-control" placeholder="ff"
                                    required  pattern="[0-9]+" maxlength="10" minlength="7">
                                <label  for="documento" >Numero de Documento:</label>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input id="nombre" name="nombre" type="text" class="form-control" placeholder="dd"
                                    required=" "  pattern="[a-zA-ZÁÉÍÓÚáéíóúñ ]+">
                                <label for="nombre" class="form__label">Nombre Completo</label>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-6">
                            <div class="form-floating">
                            <select  class="form-control" name="categoria"  id="categoria">
                                <option value="Estudiante">Estudiante</option>
                                <option value="Docente">Docente</option>
                                <option value="Administrativo">Administrativo</option>
                                <option value="Comunidad general">Comunidad general</option>
                                <option value="Otro">Otro</option>
                                </select>
                                <label  for="categoria" class="form__label">Categoria:</label>

                            </div>
                        </div>
                     
                        <br>
                        <div class="col-md-6">
                            <div class="form-floating">
                            <select  class="form-control" name="sexo" id="sexo">
                                <option value="Hombre">Hombre </option>
                                <option value="Mujer">Mujer </option>
                                <option value="Otro">Otro</option>
                                
                                </select>
                                <label  for="Sexo" class="form__label">Sexo : </label>

                            </div>
                        </div>
                        <br>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" id="tel" name="tel" class="form-control" placeholder="ff" required
                                    pattern="[0-9]+" maxlength="11" minlength="10">
                                <label for="tel" class="form__label">Telefono:</label>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" id="correo" name="correo" class="form-control" placeholder="ff"
                                    required pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9-#.@]+">
                                <label for="correo" class="form__label">Correo:</label>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" id="institucion" name="institucion" class="form-control" placeholder="ff"
                                    required pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9-#.]+" value="UTCH">
                                <label for="institucion" class="form__label">Institucion:</label>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-6">
                            <div class="form-floating">
                            <input type="text" id="programa" name="programa" class="form-control" placeholder="ff"
                                    required pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9-#.]+" >
                                <label  for="programa" class="form__label">Programa al que pertenece:</label>

                            </div>
                        </div>
                        <br>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" id="direccion" name="direccion" class="form-control" placeholder="ff"
                                    required  pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9-#]+">
                                <label for="direccion" class="form__label">Dirección:</label>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" id="edad" name="edad" class="form-control" placeholder="ff"
                                    required  pattern="[ 0-9 ]+">
                                <label for="edad" class="form__label">Edad:</label>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <select  name="evento_elegido" class="form-control">
                                    <!-- Código de la base de datos -->
                                    <?php
                                        require_once 'conexion.php';
                                        $conexion = conectar();
                                        $id_evento = $_GET['id_evento']; // Asegúrate de validar y sanitizar los datos recibidos
                                        $consulta = "SELECT * FROM eventos WHERE id_evento = ?";
                                        $stmt = mysqli_prepare($conexion, $consulta);
                                        mysqli_stmt_bind_param($stmt, 'i', $id_evento);
                                        mysqli_stmt_execute($stmt);
                                        $resultado = mysqli_stmt_get_result($stmt);
                                        while ($row = mysqli_fetch_assoc($resultado)) {
                                            echo '<option value="' . $row["nombreEven"] . '">' . $row["nombreEven"] . '</option>';
                                        }
                                        ?>
                                    <!-- Fin bd -->
                                </select>
                                <label for="evento" class="form__label">Evento escogido:</label>

                            </div>
                        </div>
                        <br>
                        <br><br><br>
                        <button style="margin: 2px; border-radius: 5px;" type="submit" class="btn btn-primary"
                            name="asistir" id="asistir">Confirmar el Registro</button>
                        <a style="display: inline-block; margin: 2px; border-radius: 5px;" href="eventos.php"
                            class="btn btn-info">Regresar</a>
                    </form>
                </div>
            </div>
        </div>
    </div> </div>
    <!-- Fin formulario -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
<script src="js/botones.js" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" defer></script>
<script src="lib/wow/wow.min.js" defer></script>
<script src="lib/easing/easing.min.js" defer></script>
<script src="lib/waypoints/waypoints.min.js" defer></script>
<script src="lib/owlcarousel/owl.carousel.min.js" defer></script>
<?php require("footer.php"); ?>
<script src="lib/lightbox/js/lightbox.min.js" defer></script>
<!-- Template Javascript -->
<script src="js/main.js" defer></script>
<script src="sweet/dist/sweetalert2.all.min.js" defer></script>
</body>

</html>
