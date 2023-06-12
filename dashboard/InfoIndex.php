<?php
include("../conexion.php");
$conexion=conectar(); 
$consulta ="SELECT COUNT(nombre) AS total_citas FROM `citas` ";
$busqueda=mysqli_query($conexion,$consulta);
$fila = mysqli_fetch_assoc($busqueda);

$consulta2 ="SELECT COUNT(nombre) AS total_inscritos_cursos FROM `inscritos_cursos` ";
$busqueda2=mysqli_query($conexion,$consulta2);
$fila2 = mysqli_fetch_assoc($busqueda2);

$consulta3 ="SELECT COUNT(nombre) AS total_inscritos_eventos FROM `inscritos_eventos` ";
$busqueda3=mysqli_query($conexion,$consulta3);
$fila3 = mysqli_fetch_assoc($busqueda3);
?>
