-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2023 a las 19:27:09
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
-- Estructura de tabla para la tabla `inscritos_cursos`
--

CREATE TABLE `inscritos_cursos` (
  `id` int(11) NOT NULL,
  `tipodocumento` text NOT NULL,
  `documento` text NOT NULL,
  `categoria` text NOT NULL,
  `nombre` text NOT NULL,
  `telefono` text NOT NULL,
  `correo` text NOT NULL,
  `institucion` text NOT NULL,
  `programa` text NOT NULL,
  `direccion` text NOT NULL,
  `edad` int(11) NOT NULL,
  `curso_inscrito` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inscritos_cursos`
--

INSERT INTO `inscritos_cursos` (`id`, `tipodocumento`, `documento`, `categoria`, `nombre`, `telefono`, `correo`, `institucion`, `programa`, `direccion`, `edad`, `curso_inscrito`) VALUES
(26, 'Cedula de ciudadania', '1129365404', 'Estudiante', 'Phelipe cordoba ', '4444444444', 'admin@gmail.com', 'UTCH', 'Administracion de empresas', 'calle 34 # 0-24', 0, 'vfg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inscritos_cursos`
--
ALTER TABLE `inscritos_cursos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inscritos_cursos`
--
ALTER TABLE `inscritos_cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
