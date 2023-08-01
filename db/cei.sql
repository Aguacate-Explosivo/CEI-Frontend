-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-08-2023 a las 22:39:03
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
-- Estructura de tabla para la tabla `categoriasemprendimiento`
--

CREATE TABLE `categoriasemprendimiento` (
  `id` int(11) NOT NULL,
  `documento` text NOT NULL,
  `categoria` text NOT NULL,
  `ingresos` int(11) NOT NULL,
  `timestamp` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `idcita` int(11) NOT NULL,
  `tipodocumento` text NOT NULL,
  `documento` text NOT NULL,
  `categoria` text NOT NULL,
  `nombre` text NOT NULL,
  `telefono` text NOT NULL,
  `correo` text NOT NULL,
  `institucion` text NOT NULL,
  `direccion` text NOT NULL,
  `fecha_hora` text DEFAULT NULL,
  `tema` text NOT NULL,
  `descripcion` text NOT NULL,
  `timestamp` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `Id_Curso` int(11) NOT NULL,
  `NombreCurso` text NOT NULL,
  `DescripcionCurso` text NOT NULL,
  `EncargadoCurso` text NOT NULL,
  `timestamp` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `imagen` longblob NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_final` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `email` text NOT NULL,
  `contrasena` text NOT NULL,
  `perfil` varchar(15) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `timestamp` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `usuario`, `email`, `contrasena`, `perfil`, `estado`, `timestamp`) VALUES
(2, 'admin', 'admin', 'admin', 'Administrador', 1, NULL),
(14, 'lcchaverra', 'lucas.cordoba1510@gmail.com', '123456', 'Administrador', 0, NULL),
(15, 'docente', 'juansp@gmail.com', '123456', 'Docente', 1, NULL),
(16, 'estudiante', 'juansp@gmail.com', '123456', 'Estudiante', 1, NULL),
(17, 'moderador', 'juansp@gmail.com', '123456', 'Moderador', 1, NULL),
(18, 'funcionario', 'funcionario@gmail.com', '123456', 'Funcionario', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encargado`
--

CREATE TABLE `encargado` (
  `id` int(11) NOT NULL,
  `encargados` varchar(100) NOT NULL,
  `imagen` longblob NOT NULL,
  `timestamp` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE `encuesta` (
  `Id` int(11) NOT NULL,
  `url` varchar(500) NOT NULL,
  `timestamp` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `encuesta`
--

INSERT INTO `encuesta` (`Id`, `url`, `timestamp`) VALUES
(2, 'https://forms.gle/zWhLEqrPbBd6H3Eu8', '2023-07-25 22:18:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL,
  `nombreEven` text NOT NULL,
  `descripcionEven` text NOT NULL,
  `lugar` text NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `imagen` longblob NOT NULL,
  `estado` text NOT NULL,
  `imagen1` longblob NOT NULL,
  `imagen2` longblob NOT NULL,
  `imagen3` longblob NOT NULL,
  `imagen4` longblob NOT NULL,
  `imagen5` longblob NOT NULL,
  `imagen6` longblob NOT NULL,
  `timestamp` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `fecha_inicio` date DEFAULT NULL,
  `fecha_final` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formatos`
--

CREATE TABLE `formatos` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `cedula` text NOT NULL,
  `pdf` longblob NOT NULL,
  `timestamp` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(333) NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `sexo` text NOT NULL,
  `telefono` text NOT NULL,
  `correo` text NOT NULL,
  `institucion` text NOT NULL,
  `programa` text NOT NULL,
  `direccion` text NOT NULL,
  `edad` int(11) NOT NULL,
  `curso_inscrito` varchar(11) NOT NULL,
  `timestamp` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marketing`
--

CREATE TABLE `marketing` (
  `id` int(11) NOT NULL,
  `documento` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `correo` text NOT NULL,
  `plan de negocio` text NOT NULL,
  `tipo de marketing` text NOT NULL,
  `timestamp` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `simulaciones`
--

CREATE TABLE `simulaciones` (
  `id` int(11) NOT NULL,
  `cc` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `pdf` longblob NOT NULL,
  `timestamp` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoriasemprendimiento`
--
ALTER TABLE `categoriasemprendimiento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`idcita`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`Id_Curso`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `encargado`
--
ALTER TABLE `encargado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indices de la tabla `formatos`
--
ALTER TABLE `formatos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inscritos_cursos`
--
ALTER TABLE `inscritos_cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inscritos_eventos`
--
ALTER TABLE `inscritos_eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marketing`
--
ALTER TABLE `marketing`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `simulaciones`
--
ALTER TABLE `simulaciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoriasemprendimiento`
--
ALTER TABLE `categoriasemprendimiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `idcita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `Id_Curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `encargado`
--
ALTER TABLE `encargado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `formatos`
--
ALTER TABLE `formatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `inscritos_cursos`
--
ALTER TABLE `inscritos_cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `inscritos_eventos`
--
ALTER TABLE `inscritos_eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT de la tabla `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT de la tabla `marketing`
--
ALTER TABLE `marketing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `simulaciones`
--
ALTER TABLE `simulaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
