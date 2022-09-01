-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-08-2022 a las 23:17:20
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
(2, 'juan', 'alineintronno@hotmail.com', '54321', 2, '2000-08-11'),
(7, 'sra', 'sisi@test.mail', 'kakaroto99', 1, '2014-12-01'),
(8, 'carla', 'ahora@test.mail', 'limoncoco', 4, '2003-12-09');

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
  MODIFY `codigoAlum` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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

CREATE TABLE emailViejo(
  id_alumno int(10) UNSIGNED,
  email_antiguo varchar(60),
  CONSTRAINT fk_mailviejo_alumnos FOREIGN KEY(id_alumno) REFERENCES alumnos(codigoAlum) ON DELETE CASCADE ON UPDATE CASCADE
  );

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
