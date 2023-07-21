<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="../img/logo.webp">
    <title>CEI | citas</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Formulario -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">Registrar Usuario</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="0.1s">

                    <form action="controladorusuario.php" required method="POST" enctype="multipart/form-data">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">REGISTRO DE USUARIO</h3>
                            </div>

                            <div class="card-body">
                                <label>Seleccione Nombre de Usuario</label>
                                <div class="input-group mb-auto">
                                    <span class="input-group-text"><i class="fa fa-user"
                                            aria-hidden="false"></i></span>
                                    <input type="text" id="nombrel" name="nombrel" required
                                        pattern="[a-zA-ZÁÉÍÓÚáéíóúñ ]+" class="form-control" placeholder="Username">
                                </div>

                                <br>

                                <div>
                                    <label>Seleccione Correo</label>
                                    <div class="input-group mb-auto">
                                        <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                        <input type="text" id="correol" name="correol" required class="form-control"
                                            placeholder="correo">
                                    </div>

                                    <br>

                                    <div>
                                        <label>Seleccione Contraseña</label>
                                        <div class="input-group mb-auto">
                                            <span class="input-group-text"><i class="fas fa-unlock"></i></span>
                                            <input type="password" id="psswdl" name="psswdl" required
                                                pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 !¡?¿.-,]+" class="form-control"
                                                placeholder="Contraseña">
                                        </div>

                                        <br>

                                        <div class="row">
                                            <div class="form-group">
                                                <label>Seleccione Rol</label>
                                                <select class="form-control select2bs4" id="roll" name="roll"
                                                    style="width: 100%;">
                                                    <option selected="selected">Administrador</option>
                                                    <option>Moderador</option>
                                                    <option>Funcionario</option>
                                                    <option>Docente</option>
                                                    <option>Estudiante</option>
                                                </select>
                                            </div>
                                        </div>

                                        <br>
                                        <br>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Registrar</button>

                                            <a style="margin: 2px; border-radius: 5px;" href="DashUsuarios.php"
                                                class="btn btn-info"> Regresar</a>
                                        </div>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin formulario -->
    <?php require_once("footer.php"); ?>
    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/lightbox/js/lightbox.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>
