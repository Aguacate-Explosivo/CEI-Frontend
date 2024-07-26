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

</head>

<body>
    <?php require_once("cabecera.php"); ?>

    <!-- Navbar End -->

    <!-- Page Header Start -->
    <?php
        require_once("conexion.php");
        $conexion = conectar();

        $consulta = "SELECT * FROM imagenes";
        $resultado = mysqli_query($conexion, $consulta);
        ?>
            <?php foreach ($resultado as $row): ?>
                <?php
                $imagen = $row["imagen"];
                $imagen1 = $row["imagen1"];
                $imagen2 = $row["imagen2"];
                $imagen3 = $row["imagen3"];
                ?>
                   <?php endforeach; ?>
        <div class="container-xxl py-5" style="position: relative;">
        <div class="row justify-content-start">
        <img src="data:image.webp;base64,<?php echo base64_encode($imagen); ?>" class="card-img-top img-fluid" alt="" style="height: 300px; width:1500px;" />
        <h1 class="display-2 text-white mb-4 animated slideInDown" style="position: absolute; text-align: center; top: 4cm;">Eventos</h1>
       </div>
       </div>
    <!-- Page Header End -->

    <div>
        <div class="container-fluid">
            <!-- Seccion de cursos -->
            <div class="container">
                <h1 class="display-6 mb-4">Eventos Disponibles</h1>
                <br>
                <br>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <!-- Codigo de la base de datos -->
                    <?php
                    require_once("conexion.php");
                    $conexion = conectar();

                    $consulta = "SELECT * FROM eventos";
                    $resultado = mysqli_query($conexion, $consulta);

                    foreach ($resultado as $row) {
                        $id = $row["id_evento"];
                        $fecha_inicio = $row["fecha_inicio"];
                        $fecha_final = $row["fecha_final"];
                        $fecha_actual = date("Y-m-d");
                        ?>
                        <!-- Fin bd -->

                        <?php
                        if (isset($_SESSION['msj'])) {
                            $respuesta = $_SESSION['msj'];
                            ?>
                            <script>
                                alert('hola');
                            </script>
                        <?php
                        }
                        ?>
                            <style>
                                .course-image {
                                    height: 200px; 
                                    object-fit: cover; 
                                }
                            </style>
                        <!-- Estructura de eventos -->
                        
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body h-100 d-flex flex-column justify-content-between">
                                    <div class="project-item mb-5">
                                        <div class="position-relative">
                                            <img class="card-img-top img-fluid course-image" src="data:image.webp;base64,<?php echo base64_encode($row["imagen"]); ?>">
                                                
                                            <div class="project-overlay">
                                                <a class="btn btn-lg-square btn-light rounded-circle m-1"
                                                    href="data:image.webp;base64,<?php echo base64_encode($row["imagen"]); ?>"
                                                    data-lightbox="project"><i class="fa fa-eye"></i></a>
                                                <a class="btn btn-lg-square btn-light rounded-circle m-1"
                                                    href="eventos.php"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="card-title"><?php echo htmlspecialchars($row["nombreEven"]); ?></h5>
                                    
                                    <p class="card-text"><small class="text-muted">Lugar:
                                            <?php echo htmlspecialchars($row["lugar"]); ?></small></p>
                                    <p class="card-text"><small class="text-muted">Fecha:
                                            <?php echo htmlspecialchars($row["fecha"]); ?></small></p>
                                    <p class="card-text"><small class="text-muted">Hora:
                                            <?php echo htmlspecialchars($row["hora"]); ?></small></p>
                                   
                                </div>
                                    <?php 
                                    if ($fecha_actual<=$fecha_final) {
                                        echo '<a style="margin: 2px; border-radius: 5px;" href="inceventos.php?id_evento=' . htmlspecialchars($row["id_evento"]) . '" class="btn btn-primary" id="asistir">Asistir A Evento</a>';
                                    } else {
                                        echo '<p style="color:red; padding-left:1rem;" >Evento Culminado</p>';
                                        }
                                    ?>
                                <a style="margin: 2px; border-radius: 5px;"
                                    href="galeriaeventos.php?id_evento=<?php echo htmlspecialchars($row["id_evento"]); ?>"
                                    class="btn btn-info"> Ver Mas</a>

                                <br>
                               
                            </div>
                        </div>
                    <?php } ?>
                    <!--  Fin estructura de eventos --------------- -->
                </div>
            </div>
        </div>
    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

<?php require("footer.php"); ?>

</html>
