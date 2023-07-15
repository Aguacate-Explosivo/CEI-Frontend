<?php
// Obtener el ID del archivo a descargar desde la consulta o de otra manera
$id = $_GET['id'];

// Validar y sanitizar el valor de $id
$id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

// Verificar si se proporcionó un ID válido
if (!empty($id)) {
    // Realizar la conexión a la base de datos
    require_once('../../conexion.php');
    $conexion = conectar();
    
    // Verificar si la conexión se realizó correctamente
    if ($conexion) {
        // Escapar el valor de $id para evitar inyección de SQL (opcional si se utiliza una sentencia preparada)
        $id = $conexion->real_escape_string($id);
        
        // Consulta SQL para obtener el archivo LONGBLOB
        $sql = "SELECT pdf FROM simulaciones WHERE id = '$id'";
        $result = $conexion->query($sql);
        
        // Verificar si se encontró el archivo
        if ($result && $result->num_rows > 0) {
            // Obtener la fila del resultado de la consulta
            $row = $result->fetch_assoc();
            
            // Obtener el contenido del archivo LONGBLOB
            $archivoLongblob = $row['pdf'];
            
            // Limpiar el búfer de salida 
            ob_clean();
            
            // Configurar las cabeceras para la descarga del archivo
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="Resultado_Simulacion.pdf"');
            
            // Imprimir el contenido del archivo LONGBLOB
            echo $archivoLongblob;
            exit; // Terminar la ejecución del script después de enviar el archivo
        } else {
            echo "El archivo no existe.";
        }
        
        // Cerrar la conexión a la base de datos
        $conexion->close();
    } else {
        echo "Error de conexión a la base de datos.";
    }
} else {
    echo "ID de archivo no válido.";
}
?>