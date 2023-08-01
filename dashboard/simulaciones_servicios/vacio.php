require_once('../../conexion.php');
  $conexion=conectar(); 
  $creartabla ="CREATE TABLE ` $nombre_negocio_plan` (
   `id` int(11) NOT NULL, 
   `nombre` text NOT NULL,
   `cantidad` int(11) NOT NULL,
   `coste_unitario` int(11) NOT NULL,
   `precio_venta` int(11) NOT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci; ";
  $creartabla1=mysqli_query($conexion,$creartabla);

  $creartabla2 =" ALTER TABLE ` $nombre_negocio_plan`
  ADD PRIMARY KEY (`id`); ";
   $creartabla3=mysqli_query($conexion,$creartabla2);
   
   $creartabla3 ="  ALTER TABLE ` $nombre_negocio_plan`
    CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT; ";
    $creartabla4=mysqli_query($conexion,$creartabla3);
  
    //agregar tabla de gastos  a base de datos
    $creartablag ="CREATE TABLE ` $documento` (
      `id` int(11) NOT NULL, 
      `nombre` text NOT NULL,
      `valor` int(11) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci; ";
     $creartabla1g=mysqli_query($conexion,$creartablag);
   
     $creartabla2g =" ALTER TABLE ` $documento`
     ADD PRIMARY KEY (`id`); ";
      $creartabla3=mysqli_query($conexion,$creartabla2g);
      
      $creartabla3g ="  ALTER TABLE ` $documento`
       CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT; ";
       $creartabla4g=mysqli_query($conexion,$creartabla3g);

 
                     
      
   