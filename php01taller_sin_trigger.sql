-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2022 a las 03:16:58
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php01taller`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `codigoAlum` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `contraseñas` varchar(255) NOT NULL,
  `codCurso` int(10) UNSIGNED NOT NULL,
  `fechaNac` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`codigoAlum`, `nombre`, `mail`, `contraseñas`, `codCurso`, `fechaNac`) VALUES
(1, 'angie', 'ximega@gmail.com', '12345', 5, '2022-08-11'),
(2, 'Parra GOD', 'admin@admin.com', '54321', 1, '1999-02-02'),
(7, 'sra', 'sisi@test.mail', 'kakaroto99', 1, '2014-12-01'),
(12, 'admin', 'admin@admin.com', 'admin', 2, '1999-10-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `codigoCurso` int(10) UNSIGNED NOT NULL,
  `nombreCurso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`codigoCurso`, `nombreCurso`) VALUES
(1, 'PHP es muy chimba'),
(2, 'ASP'),
(3, 'JSP'),
(5, 'CSS-3.0'),
(7, 'C++');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emailviejo`
--

CREATE TABLE `emailviejo` (
  `id_alumno` int(10) UNSIGNED DEFAULT NULL,
  `email_antiguo` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `officialemployeds`
--

CREATE TABLE `officialemployeds` (
  `id` int(3) UNSIGNED NOT NULL,
  `employedId` int(3) UNSIGNED DEFAULT NULL,
  `rol` varchar(255) NOT NULL,
  `hourValue` decimal(5,2) DEFAULT NULL,
  `workHours` int(3) DEFAULT NULL,
  `salary` double(5,2) DEFAULT NULL,
  `eps` varchar(255) NOT NULL,
  `afp` varchar(255) NOT NULL,
  `arl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`codigoAlum`),
  ADD KEY `fk_codCur` (`codCurso`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`codigoCurso`);

--
-- Indices de la tabla `emailviejo`
--
ALTER TABLE `emailviejo`
  ADD KEY `fk_mailviejo_alumnos` (`id_alumno`);

--
-- Indices de la tabla `officialemployeds`
--
ALTER TABLE `officialemployeds`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `codigoAlum` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `codigoCurso` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `officialemployeds`
--
ALTER TABLE `officialemployeds`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `fk_codCur` FOREIGN KEY (`codCurso`) REFERENCES `cursos` (`codigoCurso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `emailviejo`
--
ALTER TABLE `emailviejo`
  ADD CONSTRAINT `fk_mailviejo_alumnos` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`codigoAlum`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
