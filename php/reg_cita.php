<?php
    //Conexion con la base de datos
    include_once("../conexion.php");
    $conexion = conectar();

    //Valores del formulario
    $documento = $_POST['documento'];
    $nombre = $_POST['nombre'];
    $tel = $_POST['tel'];
    $direccion = $_POST['direccion'];
    $fecha = $_POST['fecha'];

    // Verificar si existe una cita con la misma fecha y hora
    $consultaExistente = "SELECT * FROM citas WHERE fecha_hora = '$fecha'";
    $resultadoExistente = mysqli_query($conexion, $consultaExistente);
    
    if (mysqli_num_rows($resultadoExistente) > 0) {
        echo "<script language='JavaScript'>
                alert('Ya hay una cita para esta fecha y hora');
                location.assign('../citas.php');
              </script>";
    } else {
        // Insertar la información en la tabla de datos
        $consulta = "INSERT INTO citas VALUES ('', '$documento', '$nombre', '$tel', '$direccion', '$fecha')";
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado) {
            echo "<script language='JavaScript'>
                    location.assign('../citas.php');
                  </script>";
        } else {
            echo "<script language='JavaScript'>
                    alert('Error al insertar la cita');
                    location.assign('../citas.php');
                  </script>";
        }
    }
?>