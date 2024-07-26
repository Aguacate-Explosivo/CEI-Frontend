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
        <h1 class="display-2 text-white mb-4 animated slideInDown" style="position: absolute; text-align: center; top: 4cm;">Cursos</h1>
       </div>
       </div>

    <!-- Page Header End -->

    <div class="container-xxl py-5">
        <div class="container-fluid">
            <!-- Seccion de cursos -->
            <div class="container">
                <p class="fs-5 fw-medium text-success">Cursos</p>
                <h1 class="display-6 mb-4">Cursos Que Ofrece el Centro de Emprendimiento e Innovación</h1>
                <br>
                <br>
                <style>
                    .course-image {
                        height: 200px; 
                        object-fit: cover; 
                    }
                </style>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php
                    require_once("conexion.php");
                    $conexion = conectar();

                    $consulta = "SELECT Id_Curso, NombreCurso, DescripcionCurso, EncargadoCurso, imagen, fecha_final,fecha_inicio FROM cursos";
                    $resultado = mysqli_query($conexion, $consulta);

                    foreach ($resultado as $row) {
                        $id = $row["Id_Curso"];
                        $fecha_inicio = $row["fecha_inicio"];
                        $fecha_final = $row["fecha_final"];
                        $fecha_actual = date("Y-m-d");
                    ?>
                        <div class="col">
                            <div class="card h-100">
                                <div class="project-item mb-5">
                                    <div class="position-relative">
                                        <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen"]); ?>" class="card-img-top img-fluid course-image">
                                        <div class="project-overlay">
                                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="data:image/jpg;base64,<?php echo base64_encode($row["imagen"]); ?>" data-lightbox="project"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="cursos.php"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo htmlspecialchars($row["NombreCurso"]); ?></h5>
                                        <p class="card-text">Encargado: <?php echo htmlspecialchars($row["EncargadoCurso"]); ?></p>
                                        <p class="card-text">Descripcion: <?php echo htmlspecialchars($row["DescripcionCurso"]); ?></p>

                                        <span>Fecha de Cierre: 
                                            <?php 
                                            if ($fecha_actual<=$fecha_final) {
                                                echo $fecha_final.'</span>';
                                                echo '<a style="margin: 2px; border-radius: 5px;" href="inscripcursos.php?Id_Curso=' . htmlspecialchars($row["Id_Curso"]) . '" class="btn btn-primary">Unirse a Curso</a>';
                                            } else {
                                                echo '<p style=color:red;>Curso No Disponible</p> </span>';
                                            }
                                        ?>

                                        <!-- </span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

<?php require("footer.php"); ?>


</body>

</html>
