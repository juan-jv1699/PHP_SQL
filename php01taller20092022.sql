-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-09-2022 a las 19:16:28
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
(1, 'angie', 'nuevocorreo@gmail.com', '12345', 1, '2022-08-11'),
(2, 'juan2', 'alineintronno@hotmail.com', '54321', 1, '2000-08-11'),
(7, 'sra', 'sisi@test.mail', 'kakaroto99', 1, '2014-12-01'),
(8, 'carla', 'ahora@test.mail', 'limoncoco', 4, '2003-12-09'),
(9, 'admin', 'admin@admin.com', 'admin', 1, '1999-10-16');

--
-- Disparadores `alumnos`
--
DELIMITER $$
CREATE TRIGGER `actualizar_alumno` BEFORE UPDATE ON `alumnos` FOR EACH ROW begin
  insert into emailviejo values(old.codigoAlum, old.mail); 
end
$$
DELIMITER ;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emailviejo`
--

CREATE TABLE `emailviejo` (
  `id_alumno` int(10) UNSIGNED DEFAULT NULL,
  `email_antiguo` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `emailviejo`
--

INSERT INTO `emailviejo` (`id_alumno`, `email_antiguo`) VALUES
(1, 'ximega@gmail.com'),
(2, 'alineintronno@hotmail.com'),
(2, 'alineintronno@hotmail.com'),
(2, 'alineintronno@hotmail.com'),
(2, 'alineintronno@hotmail.com'),
(2, 'alineintronno@hotmail.com'),
(2, 'alineintronno@hotmail.com'),
(2, 'alineintronno@hotmail.com'),
(2, 'alineintronno@hotmail.com'),
(2, 'alineintronno@hotmail.com'),
(2, 'alineintronno@hotmail.com'),
(2, 'alineintronno@hotmail.com'),
(2, 'alineintronno@hotmail.com'),
(2, 'alineintronno@hotmail.com'),
(2, 'alineintronno@hotmail.com'),
(2, 'alineintronno@hotmail.com'),
(2, 'alineintronno@hotmail.com'),
(2, 'alineintronno@hotmail.com'),
(2, 'alineintronno@hotmail.com'),
(2, 'alineintronno@hotmail.com');

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `codigoAlum` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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

--
-- Filtros para la tabla `emailviejo`
--
ALTER TABLE `emailviejo`
  ADD CONSTRAINT `fk_mailviejo_alumnos` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`codigoAlum`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
