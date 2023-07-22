-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-07-2023 a las 03:33:11
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
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `logs`
--

INSERT INTO `logs` (`id`, `action`, `description`) VALUES
(1, 'Inicio de sesión', 'El usuario \'admin\' inició sesión Correctamente.'),
(2, 'Inicio de sesión', 'El usuario \'asfasf\' Intentó iniciar sesión.'),
(3, 'Inicio de sesión', 'El usuario \'funcionario\' Intentó iniciar sesión.'),
(4, 'Inicio de sesión', 'El usuario \'admin\' Intentó iniciar sesión.'),
(5, 'Inicio de sesión', 'El usuario \'admin\' inició sesión Correctamente.'),
(6, 'Inicio de sesión', 'El usuario \'lcchaverra\' Intentó iniciar sesión.'),
(7, 'Inicio de sesión', 'El usuario \'admin\' inició sesión Correctamente.'),
(8, 'Inicio de sesión', 'El usuario \'lcchaverra\' inició sesión Correctamente.'),
(9, 'Inicio de sesión', 'El usuario \'admin\' inició sesión Correctamente.'),
(10, 'Inicio de sesión', 'El usuario \'admin\' inició sesión Correctamente.');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
