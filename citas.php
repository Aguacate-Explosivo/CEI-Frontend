<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/logo.webp">
    <title>CEI | Citas</title>
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
                <h1 class="display-5 mb-5">Agenda Tu cita</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-4">Formulario para agendamiento de Citas "CEI"</h3>
                    <p class="mb-4">¡Wow, tenemos una gran noticia para ti! Si deseas programar una cita para poder visitar nuestra oficina y ser atendido por nuestro equipo de profesionales, aquí te damos la solución que necesitas. Simplemente, completa el formulario que hemos preparado para poder separar una cita dentro de nuestros horarios de atención. Así, podrás acercarte a nuestras instalaciones con toda la confianza de ser atendido con eficacia y eficiencia por nuestro equipo experto. ¡No esperes más y programa tu cita ahora mismo!</p>
                    <form action="php/reg_cita.php" method="POST">
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
                                    <input type="text" class="form-control" id="documento" name="documento" placeholder="Your Name" required pattern="[0-9]+" maxlength="10" minlength="7">
                                    <label for="documento">Numero de Documento</label>
                                </div>
                            </div>
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
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Your Email" required pattern="[a-zA-ZÁÉÍÓÚáéíóúñ ]+">
                                    <label for="nombre">Nombre</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="tel" name="tel" placeholder="Your Name" required pattern="[0-9]+"  maxlength="10" minlength="9">
                                    <label for="tel">Telefono</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" id="correo" name="correo" class="form-control" placeholder="your email" required pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9-#.@]+">
                                <label for="correo" >Correo:</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" id="institucion" name="institucion" class="form-control" placeholder="ff"
                                    required pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9-#.]+" value="UTCH">
                                <label for="institucion" class="form__label">Institucion:</label>
                            </div>
                        </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="datetime-local" class="form-control" id="fecha" name="fecha" placeholder="Your Email" min="2023-03-01 " max="2030-12-31" step="1800" required >
                                    <label for="fecha">Fecha y Hora</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="direccion" name="direccion" required pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9-#]+" placeholder="Subject">
                                    <label for="direccion">Dirección</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-floating">
                            <select  class="form-control" name="tema"  id="tema">
                                <option value="Estudiante">Estudiante</option>
                                <option value="Docente">Docente</option>
                                <option value="Administrativo">Administrativo</option>
                                <option value="Comunidad general">Comunidad general</option>
                                <option value="Otro">Otro</option>
                                </select>
                                <label  for="tema" class="form__label">Tema de Cita:</label>

                            </div>
                        </div>
                        <div class="col-12">
                                <div class="form-floating">
                                <textarea maxlength="200" type="text" style="height: 170px;" class="form-control" id="descripcion" name="descripcion" required pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9-#]+" placeholder="Subject"></textarea>
                                    <label for="descripcion">Breve Descripcion de la Cita</label>
                                </div>
                            </div>
                            <br>
                            <p>Nota: Debes Registar Tu Cita Con Intervalos De 30 Minutos</p>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit" name="agendar" >Agendar cita</button>
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
