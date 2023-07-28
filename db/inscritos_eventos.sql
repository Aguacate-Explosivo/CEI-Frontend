-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2023 a las 04:19:17
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
-- Estructura de tabla para la tabla `inscritos_eventos`
--

CREATE TABLE `inscritos_eventos` (
  `id` int(11) NOT NULL,
  `tipodocumento` text NOT NULL,
  `documento` text NOT NULL,
  `categoria` text NOT NULL,
  `nombre` text NOT NULL,
  `sexo` text NOT NULL,
  `telefono` text NOT NULL,
  `correo` text NOT NULL,
  `institucion` text NOT NULL,
  `programa` text NOT NULL,
  `direccion` text NOT NULL,
  `edad` int(11) NOT NULL,
  `evento_inscrito` varchar(1100) NOT NULL,
  `timestamp` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inscritos_eventos`
--

INSERT INTO `inscritos_eventos` (`id`, `tipodocumento`, `documento`, `categoria`, `nombre`, `sexo`, `telefono`, `correo`, `institucion`, `programa`, `direccion`, `edad`, `evento_inscrito`, `timestamp`) VALUES
(124, 'Documento extranjero', '1004012752', 'Otro', 'wsjakjs', '', '3124554444', 'admin@gmail.com', 'UTCH', 'Contaduria publica', 'calle 34 # 0-24', 13, 'fsf', NULL),
(125, 'Cedula de ciudadania', '1129365404', 'Docente', 'phelipe prueba hoy', '', '3124554444', 'admin@gmail.com', 'FUCLA', 'Contaduria publica', 'calle 34 # 0-24', 44, 'fsf', NULL),
(126, 'Cedula de ciudadania', '2222222', 'Estudiante', 'wsjakjs', '', '3124554444', 'admin@gmail.com', 'UTCH', 'Contaduria publica', 'calle 34 # 0-24', 13, 'fsf pruebadsdds', NULL),
(128, 'Cedula de ciudadania', '1129365408', 'Estudiante', 'Aguacate legendario', '', '3136221640', 'aguacate@conaguapanela.com', 'UTCH', 'Administracion de empresas', 'Quibdo-choco', 49, 'Evento de Prueba', '2023-07-26 00:57:50'),
(129, 'Targeta de identidad', '1129365404', 'Docente', 'Phelipe cordoba ', 'Hombre', '3124554444', 'admin@gmail.com', 'UTCH', 'Contaduria publica', 'calle 34 # 0-24', 13, 'fsf', '2023-07-27 02:01:23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inscritos_eventos`
--
ALTER TABLE `inscritos_eventos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inscritos_eventos`
--
ALTER TABLE `inscritos_eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
