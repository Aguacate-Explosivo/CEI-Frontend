-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-07-2023 a las 07:05:27
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cei`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `action` text NOT NULL,
  `description` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `logs`
--

INSERT INTO `logs` (`id`, `action`, `description`, `timestamp`) VALUES
(11, 'Inicio de sesión', 'El usuario \'admin\' inició sesión Correctamente.', '2023-07-22 01:43:10'),
(12, 'Inicio de sesión', 'El usuario \'estudiante\' Intentó iniciar sesión.', '2023-07-22 01:56:05'),
(13, 'Inicio de sesión', 'El usuario \'estudiante\' inició sesión Correctamente.', '2023-07-22 01:56:12'),
(14, 'Inicio de sesión', 'El usuario \'docente\' inició sesión Correctamente.', '2023-07-22 01:56:21'),
(15, 'Inicio de sesión', 'El usuario \'moderador\' inició sesión Correctamente.', '2023-07-22 01:56:30'),
(16, 'Inicio de sesión', 'El usuario \'funcionario\' inició sesión Correctamente.', '2023-07-22 01:57:24'),
(17, 'Inicio de sesión', 'El usuario \'admin\' inició sesión Correctamente.', '2023-07-22 01:57:32'),
(18, 'Inicio de sesión', 'El usuario \'admin\' inició sesión Correctamente.', '2023-07-22 02:13:27'),
(19, 'Cerrado de Sesion', 'el usuario ha cerrado la sesión de forma manual', '2023-07-22 02:27:17'),
(20, 'Inicio de sesión', 'El usuario \'admin\' inició sesión Correctamente.', '2023-07-22 02:29:47'),
(21, 'Cerrado de Sesion', 'el usuario ha cerrado la sesión de forma manual', '2023-07-22 02:37:07'),
(22, 'Inicio de sesión', 'El usuario \'admin\' inició sesión Correctamente.', '2023-07-22 02:40:05'),
(23, 'Cerrado de Sesion', 'el usuario ha cerrado la sesión de forma manual', '2023-07-22 02:40:18'),
(24, 'Inicio de sesión', 'El usuario \'admin\' inició sesión Correctamente.', '2023-07-22 02:41:03'),
(25, 'Cerrado de Sesion', 'el usuario ha cerrado la sesión de forma manual', '2023-07-22 02:41:08'),
(26, 'Inicio de sesión', 'El usuario \'admin\' inició sesión Correctamente.', '2023-07-22 02:41:33'),
(27, 'Inicio de sesión', 'El usuario \'admin\' inició sesión Correctamente.', '2023-07-22 02:51:28'),
(28, 'Modificacion de Cita', 'el administrador ha modificado la cita de \'Aguacate legendario\'', '2023-07-22 03:17:45'),
(29, 'Eliminar Cita', 'el administrador ha eliminado la cita con el id=\'62\' de forma correcta', '2023-07-22 03:18:12'),
(30, 'Creación de Evento', 'el usuario ha creado un nuevo evento: \'.Goku dame tu fuerza.\'', '2023-07-22 03:46:26'),
(31, 'Eliminar Usuario inscrito a Evento', 'Se ha eliminado a un usuario inscrito en los Eventos con el id: \'127\'', '2023-07-22 03:48:03'),
(32, 'Edicion de Evento', 'El usuario ha editado el evento : \'Goku dame tu fuerza\'', '2023-07-22 03:55:13'),
(33, 'Eliminar Evento', 'el usuario ha eliminado el evento con el id:\'9\'', '2023-07-22 03:56:28'),
(34, 'Agregar Encargado de Cursos', 'El usuario ha agregado de forma manual un encargado para los cursos llamado: \'Luis Carlos Chaverra Cordoba\'', '2023-07-22 04:36:33'),
(35, 'Agregar Nuevo Curso', 'El usuario ha creado un nuevo curso llamado: \'programación en java\'', '2023-07-22 04:39:11'),
(36, 'Eliminar Usuario inscrito a Curso', 'Se ha eliminado a un usuario inscrito en cursos con el id: \'27\'', '2023-07-22 04:39:57'),
(37, 'Eliminar Encargado de los Cursos', 'El usuario ha eliminado al encargado con indentificacion: \'36\'', '2023-07-22 04:40:31'),
(38, 'Actualizacion de Curso', 'El usuario ha editado el curso : \'programación en java editado\'', '2023-07-22 04:41:12'),
(39, 'Eliminar Curso', 'el usuario ha eliminado el curso con el id:\'93\'', '2023-07-22 04:41:25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
