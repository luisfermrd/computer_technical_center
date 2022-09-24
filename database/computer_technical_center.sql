-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2022 a las 04:48:00
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `computer_technical_center`
--
CREATE DATABASE IF NOT EXISTS `computer_technical_center` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `computer_technical_center`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `user` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `identificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellido`, `telefono`, `identificacion`) VALUES
(1, 'Luis', 'Miranda', '3002112112', 1002229788),
(2, 'Juan', 'Alvarez', '3002112112', 1002229799),
(3, 'Lucas', 'Martines', '3002112112', 1020288831),
(4, 'Antonio', 'Correa', '3002112112', 1002393992),
(5, 'Jose', 'Herrera', '3002112112', 1002229722);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `danio` varchar(500) DEFAULT NULL,
  `fecha_entrada` date DEFAULT NULL,
  `fecha_salida` date DEFAULT NULL,
  `pago` int(11) DEFAULT 0,
  `garantia` varchar(100) DEFAULT 'Ninguna',
  `id` int(11) DEFAULT NULL,
  `reparando` varchar(2) DEFAULT 'NO',
  `aquipo` varchar(50) DEFAULT NULL,
  `identificador` int(11) NOT NULL,
  `entregado` varchar(2) DEFAULT 'NO',
  `reparado` varchar(2) DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`danio`, `fecha_entrada`, `fecha_salida`, `pago`, `garantia`, `id`, `reparando`, `aquipo`, `identificador`, `entregado`, `reparado`) VALUES
('Se daño, Se daño,Se daño, Se daño,Se daño, Se daño,Se daño,Se daño, Se daño,Se daño, Se daño,Se daño, Se daño,Se daño,Se daño, Se daño,Se daño, Se daño,Se daño, Se daño,Se daño', '2022-07-04', '2022-07-05', 120000, '2 semanas', 1, 'SI', 'Dell vostro 059', 1, 'SI', 'SI'),
('Nada', '2022-07-04', '2022-07-05', 250000, '1 semana', 2, 'SI', 'Dell vostro 058', 2, 'SI', 'SI'),
('Se daño', '2022-07-05', NULL, 0, 'Ninguna', 3, 'SI', 'Dell vostro 059', 3, 'NO', 'SI'),
('Ya valio verga', '2022-07-05', NULL, 0, 'Ninguna', 4, 'SI', 'Dell vostro 058', 4, 'NO', 'NO'),
('No enciende', '2022-07-05', NULL, 0, 'Ninguna', 5, 'NO', 'Dell vostro 059', 5, 'NO', 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `identificacion` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `certificado` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`identificacion`, `nombre`, `telefono`, `certificado`) VALUES
(1002229788, 'Luis', '3002112112', 'Profesional'),
(1002229799, 'Juan', '3017998748', 'Profesional'),
(2147483647, 'Manuel', '3017998748', 'Profesional');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador_tiene_equipo`
--

CREATE TABLE `trabajador_tiene_equipo` (
  `id_equipo` int(11) NOT NULL,
  `id_trabajador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trabajador_tiene_equipo`
--

INSERT INTO `trabajador_tiene_equipo` (`id_equipo`, `id_trabajador`) VALUES
(4, 2147483647);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`identificador`),
  ADD KEY `fk_equipo` (`id`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`identificacion`);

--
-- Indices de la tabla `trabajador_tiene_equipo`
--
ALTER TABLE `trabajador_tiene_equipo`
  ADD KEY `fk_trabajador_tiene_equipo` (`id_equipo`),
  ADD KEY `fk_trabajador_tiene_equipo-2` (`id_trabajador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `identificador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `fk_equipo` FOREIGN KEY (`id`) REFERENCES `cliente` (`id`);

--
-- Filtros para la tabla `trabajador_tiene_equipo`
--
ALTER TABLE `trabajador_tiene_equipo`
  ADD CONSTRAINT `fk_trabajador_tiene_equipo` FOREIGN KEY (`id_equipo`) REFERENCES `equipo` (`identificador`),
  ADD CONSTRAINT `fk_trabajador_tiene_equipo-2` FOREIGN KEY (`id_trabajador`) REFERENCES `trabajador` (`identificacion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
