<?php
    include_once("conexion.php");
    $conexion = conectar();
    function logAction($action, $description) {
        global $conexion;
        $action = mysqli_real_escape_string($conexion, $action);
        $description = mysqli_real_escape_string($conexion, $description);
      
        $query = "INSERT INTO logs (action, description) VALUES ('$action', '$description')";
        mysqli_query($conexion, $query);
      }
?>