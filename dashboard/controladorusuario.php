<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Procesando Cursos </title>
</head>
<body>
<?php
require_once('../conexion.php');
$conexion = conectar();
include("../log.php");

  //================= eliminar USUARIO

if (isset($_POST['id'])) {
  // Operación de eliminación
  $id = $_POST['id']; // Obtener el identificador a eliminar

  $consulta = "DELETE FROM datos WHERE id = ?";

  if ($stmt = mysqli_prepare($conexion, $consulta)) {
    mysqli_stmt_bind_param($stmt, "i", $id);

    if (mysqli_stmt_execute($stmt)) {
      $filas_afectadas = mysqli_stmt_affected_rows($stmt);

      if ($filas_afectadas > 0) {
        echo "<script>
          console.log('se eliminó');
          Swal.fire({
            icon: 'success',
            title: 'Usuario eliminado',
            text: 'Se ha eliminado de forma correcta',
            showConfirmButton: false,
          });
          setTimeout(() => {
            location.assign('DashUsuarios.php');
          }, 1000);
        </script>";
      } else {
        echo "<script>
          console.log('no se encontró el registro');
          Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'No se encontró el registro a eliminar',
            showConfirmButton: false,
          });
          setTimeout(() => {
            location.assign('DashUsuarios.php');
          }, 1000);
        </script>";
      }
    } else {
      echo "Error al ejecutar la consulta: " . mysqli_stmt_error($stmt);
      echo "Error de MySQL: " . mysqli_error($conexion);
    }

    mysqli_stmt_close($stmt);
  } else {
    echo "Error al preparar la consulta: " . mysqli_error($conexion);
  }

  //================= AGREGAR USUARIO
} elseif (isset($_POST['nombrel'])) {
  // Operación de inserción
  $nombre = $_POST['nombrel'];
  $correo = $_POST['correol'];
  $psswwd = $_POST['psswdl'];
  $rol = $_POST['roll'];

  $consulta = "INSERT INTO datos VALUES (NULL, ?, ?, ?, ?, 0)";

  if ($stmt = mysqli_prepare($conexion, $consulta)) {
    mysqli_stmt_bind_param($stmt, "ssss", $nombre, $correo, $psswwd, $rol);

    if (mysqli_stmt_execute($stmt)) {
      logAction("Creacion de Usuario","Se ha creado un nuevo usuario: '$nombre'");
      echo "<script>
        console.log('se envió');
        Swal.fire({
          icon: 'success',
          title: 'Nuevo usuario registrado',
          text: 'Se ha agregado de forma correcta',
          showConfirmButton: false,
        });
        setTimeout(() => {
          location.assign('DashUsuarios.php');
        }, 1000);
      </script>";
    } else {
      echo "Error al ejecutar la consulta: " . mysqli_stmt_error($stmt);
      logAction("Fallo al crear Usuario","Se ha intentado crear un nuevo usuario: '$nombre' pero algo falló");
    }

    mysqli_stmt_close($stmt);
  } else {
    echo "Error al preparar la consulta: " . mysqli_error($conexion);
  }

  //============================EDITAR (aun no funciona)
}elseif (isset($_POST['nombreu'])) {
  // Operación de inserción
  $nombre = $_POST['nombreu'];
  $correo = $_POST['correou'];
  $psswwd = $_POST['psswd'];
  $rol = $_POST['rolu'];

  $consulta = "INSERT INTO datos VALUES (NULL, ?, ?, ?, ?, 0)";

  if ($stmt = mysqli_prepare($conexion, $consulta)) {
    mysqli_stmt_bind_param($stmt, "ssss", $nombre, $correo, $psswwd, $rol);

    if (mysqli_stmt_execute($stmt)) {
      echo "<script>
        console.log('se envió');
        Swal.fire({
          icon: 'success',
          title: 'Nuevo usuario registrado',
          text: 'Se ha agregado de forma correcta',
          showConfirmButton: false,
        });
        setTimeout(() => {
          location.assign('../login.php');
        }, 1000);
      </script>";
    } else {
      echo "Error al ejecutar la consulta: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
  } else {
    echo "Error al preparar la consulta: " . mysqli_error($conexion);
  }

  //============================EDITAR (aun no funciona)
} elseif (isset($_POST['nombreu'])) {
  // Operación de inserción
  $nombre = $_POST['nombreu'];
  $correo = $_POST['correou'];
  $psswwd = $_POST['psswd'];
  $rol = $_POST['rolu'];

  $consulta = "INSERT INTO datos VALUES (NULL, ?, ?, ?, ?, 0)";

  if ($stmt = mysqli_prepare($conexion, $consulta)) {
    mysqli_stmt_bind_param($stmt, "ssss", $nombre, $correo, $psswwd, $rol);

    if (mysqli_stmt_execute($stmt)) {
      echo "<script>
        console.log('se envió');
        Swal.fire({
          icon: 'success',
          title: 'Nuevo usuario registrado',
          text: 'Se ha agregado de forma correcta',
          showConfirmButton: false,
        });
        setTimeout(() => {
          location.assign('DashUsuarios.php');
        }, 1000);
      </script>";
    } else {
      echo "Error al ejecutar la consulta: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
  } else {
    echo "Error al preparar la consulta: " . mysqli_error($conexion);
  }

  //============================EDITAR (aun no funciona)
}  elseif (isset($_POST['ideditar'])) {
  // Operación de actualización
  $id = $_POST['ideditar'];
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $estado = $_POST['estado'];
  $perfil = $_POST['perfil'];

  $consulta = "UPDATE datos SET usuario = ?, email = ?, estado = ?, perfil = ? WHERE id = ?";

  if ($stmt = mysqli_prepare($conexion, $consulta)) {
    mysqli_stmt_bind_param($stmt, "ssisi", $nombre, $correo, $estado, $perfil, $id);

    if (mysqli_stmt_execute($stmt)) {
      echo "<script>
        console.log('se envió');
        Swal.fire({
          icon: 'success',
          title: 'Usuario actualizado',
          text: 'Se ha actualizado correctamente',
          showConfirmButton: false,
        });
        setTimeout(() => {
          location.assign('DashUsuarios.php');
        }, 1000);
      </script>";
    } else {
      echo "Error al ejecutar la consulta: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
  } else {
    echo "Error al preparar la consulta: " . mysqli_error($conexion);
  }

  //===========ACTUALIZAR ESTADO DEL BOTON
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Operación de actualización de estado
  $id = $_POST['id'];
  $estado = $_POST['estado'];

  $actualizar = "UPDATE datos SET estado = ? WHERE id = ?";
  $stmt = mysqli_prepare($conexion, $actualizar);
  mysqli_stmt_bind_param($stmt, "si", $estado, $id);

  if (mysqli_stmt_execute($stmt)) {
    echo 'Estado actualizado correctamente';
  } else {
    echo 'Error al actualizar el estado';
  }

  mysqli_stmt_close($stmt);
}

mysqli_close($conexion);
?>

</body>
</html>