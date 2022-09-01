-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-09-2022 a las 14:55:48
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
  `keyword` varchar(10) DEFAULT NULL,
  `codCurso` int(10) UNSIGNED NOT NULL,
  `fechaNac` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`codigoAlum`, `nombre`, `mail`, `keyword`, `codCurso`, `fechaNac`) VALUES
(20, 'admin', 'admin@test.com', 'admin', 1, '2000-08-08'),
(21, 'jaunito', 'juanito@marana.co', '1234', 2, '2001-02-03'),
(22, 'sara', 'sarita@mail.co', 'sara01', 3, '2003-07-03'),
(23, 'carlitos', 'carlossayayin@mail.co', 'supersyayi', 4, '1995-08-01'),
(24, 'robert', 'robertmimail@test.co', '123456', 5, '1995-08-01');

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
(1, 'PHP'),
(2, 'ASP'),
(3, 'JSP'),
(4, 'CSS'),
(5, 'CSS-3.0');

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `codigoAlum` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `codigoCurso` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `fk_codCur` FOREIGN KEY (`codCurso`) REFERENCES `cursos` (`codigoCurso`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
