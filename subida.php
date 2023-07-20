<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/logo.webp">
    <title>CEI | Formatos</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="img/favicon.webp" rel="icon">

</head>

<body>
    <?php require("cabecera.php"); ?>
    <!-- Navbar End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">Sube tus Formatos de Seguimiento AQUI</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="0.1s">
                    <form action="php/reg_formatos.php" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Your Email" required pattern="[a-zA-ZÁÉÍÓÚáéíóúñ ]+">
                                    <label for="nombre">Nombre</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="cedula" name="cedula" placeholder="cedula" required pattern="[0-9]+"  maxlength="12" minlength="7">
                                    <label for="tel">Documento</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-floating">
                            <input class="form-control" type="file" id="pdf" name ="pdf"
                            required=" " accept=".pdf">
                                                       
                            </div>
                        </div>
                       
                            <br>
                            <p>Nota: Debes Registar Tu Ficha de seguimiento diligenciada, si no tienes una ficha da click en DESCARGAR FORMATO</p>
                            <div class="col-6">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit" name="agendar" >Subir Formato</button>
                            </div>
                            <div class="col-6">
                                <a class="btn btn-warning rounded-pill py-3 px-5" href="https://www.utch.edu.co/portal/images/acercade/cei/formatos/FUNDAMENTACION_PARA_EL_EMPRENDIMIENTO.pdf" target="_blank" type="submit" > Descargar Formato</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

<?php require("footer.php"); ?>

</body>

</html>
