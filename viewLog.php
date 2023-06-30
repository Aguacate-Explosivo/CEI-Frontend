<?php
// Conexión a la base de datos
include_once("conexion.php");
$conexion = conectar();

// Obtener registros de la base de datos
$query = "SELECT * FROM logs ORDER BY timestamp DESC";
$result = mysqli_query($conexion, $query);

// Mostrar los registros en una tabla HTML
echo "<table>";
echo "<tr><th>ID</th><th>Fecha y Hora</th><th>Acción</th><th>Descripción</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['timestamp']."</td>";
  echo "<td>".$row['action']."</td>";
  echo "<td>".$row['description']."</td>";
  echo "</tr>";
}
echo "</table>";
?>
