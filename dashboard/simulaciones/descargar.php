
<?php
// Obtener el ID del archivo a descargar desde la consulta o de otra manera
$id = $_GET['id'];

// Realizar la conexión a la base de datos y obtener el archivo LONGBLOB

     require_once('../../conexion.php');
     $conexion=conectar(); 
// Aquí debes implementar tu propia lógica para conectar a la base de datos y obtener el archivo LONGBLOB basado en el ID proporcionado
$sql = "SELECT pdf FROM simulaciones WHERE id = '$id'";
$result = $conexion->query($sql);

// Verificar si se encontró el archivo
if ($result->num_rows > 0) {
    // Obtener la fila del resultado de la consulta
    $row = $result->fetch_assoc();
    
    // Obtener el contenido del archivo LONGBLOB
    $archivoLongblob = $row['pdf'];
// Configurar las cabeceras para la descarga del archivo
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="Resultado_Simulacion.pdf"');
}
// Imprimir el contenido del archivo LONGBLOB
echo $archivoLongblob;
?>
