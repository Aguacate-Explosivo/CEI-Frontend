<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/logo.webp">
    <title>CEI | Cursos</title>
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
    <?php require("cabecera.php"); ?>
    <!-- Navbar End -->
    <!-- Formulario -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">Inscribirse a Cursos</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="0.1s">
                    <form action="dashboard/administradores/regiscurso.php" method="POST">
                        <p>En este formulario se le permitirá inscribirse a los cursos que dictamos, por favor llena
                            todos los campos</p>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" id="documento" name="documento" class="form-control" placeholder=" "
                                        required pattern="[0-9]+" maxlength="10" minlength="7">
                                    <label for="documento" class="form__label">Numero de Documento:</label>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="row g-3">
                            <div class="form-floating">
                                <input id="nombre" name="nombre" type="text" class="form-control" placeholder=" "
                                    required pattern="[a-zA-ZÁÉÍÓÚáéíóúñ ]+">
                                <label for="nombre" class="form__label">Nombre Completo</label>
                            </div>
                        </div>
                        <br/>
                        <div class="row g-3">
                            <div class="form-floating">
                                <input type="text" id="tel" name="tel" class="form-control" placeholder=" "
                                    required pattern="[0-9]+" maxlength="11" minlength="10">
                                <label for="tel" class="form__label">Telefono:</label>
                            </div>
                        </div>
                        <br/>
                        <div class="row g-3">
                            <div class="form-floating">
                                <input type="text" id="direccion" name="direccion" class="form-control" placeholder=" "
                                    required pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 ]+">
                                <label for="direccion" class="form__label">Dirección:</label>
                            </div>
                        </div>
                        <br/>
                        <div class="row g-3">
                            <div class="form-floating">
                                <input type="text" id="edad" name="edad" class="form-control" placeholder=" "
                                    required pattern="[0-9]+">
                                <label for="edad" class="form__label">Edad:</label>
                            </div>
                        </div>
                        <br/>
                        <div class="row g-3">
                            <div class="form-floating">
                                <select name="curso_elegido" class="form-control">
                                    <!-- Codigo de la base de datos -->
                                    <?php
                                        require 'conexion.php';
                                        $conexion = conectar();
                                        $Id_Curso = $_GET['Id_Curso'];
                                        $consulta = "select *from cursos where Id_Curso='".$Id_Curso."'";
                                        $resultado = mysqli_query($conexion, $consulta);
                                        foreach ($resultado as $row) { 
                                            echo '<option value="'.$row["NombreCurso"].'">'.$row["NombreCurso"].'</option>';
                                        }
                                    ?>
                                    <!-- Fin bd -->
                                </select>
                            </div>
                        </div>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-primary btn-large" id="registar" name="registar">Confirmar el Registro</button>
                        <a style="margin: 2px; border-radius: 5px;" href="cursos.php" class="btn btn-info">Regresar</a>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- Fin formulario -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
    <script src="js/botones.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js defer"></script>
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
