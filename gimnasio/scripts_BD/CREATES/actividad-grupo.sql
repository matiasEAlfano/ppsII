-- phpMyAdmin SQL Dump
-- version 4.3.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-06-2015 a las 22:53:24
-- Versión del servidor: 5.5.41-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `atleticus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad-grupo`
--

CREATE TABLE IF NOT EXISTS `actividad-grupo` (
  `id` int(11) NOT NULL,
  `idTipo` int(11) NOT NULL,
  `descripcion` varchar(25) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `actividad-grupo`
--

INSERT INTO `actividad-grupo` (`id`, `idTipo`, `descripcion`) VALUES
(1, 1, 'Acuatica'),
(7, 1, 'Aerobica'),
(8, 1, 'Spinning'),
(9, 2, 'Bodypump'),
(10, 2, 'Muscular Combinado'),
(11, 3, 'Pilates'),
(12, 3, 'Elongacion'),
(13, 3, 'Yoga'),
(14, 4, 'Megacross'),
(15, 5, 'boxeo'),
(16, 5, 'Danza Arabe'),
(17, 5, 'Karate Do'),
(18, 5, 'Salsa'),
(19, 5, 'Taekwondo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad-grupo`
--
ALTER TABLE `actividad-grupo`
  ADD PRIMARY KEY (`id`), ADD KEY `idTipo` (`idTipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad-grupo`
--
ALTER TABLE `actividad-grupo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad-grupo`
--
ALTER TABLE `actividad-grupo`
ADD CONSTRAINT `actividad-grupo_ibfk_1` FOREIGN KEY (`idTipo`) REFERENCES `actividad-tipo` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
