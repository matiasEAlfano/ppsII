-- phpMyAdmin SQL Dump
-- version 4.3.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-06-2015 a las 11:39:10
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
-- Estructura de tabla para la tabla `datos-usuario`
--

CREATE TABLE IF NOT EXISTS `datos-usuario` (
  `id_datos_usuario` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `datos_usuario_nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  `datos_usuario_apellido` varchar(40) COLLATE utf8_bin NOT NULL,
  `datos_usuario_dni` varchar(8) COLLATE utf8_bin NOT NULL,
  `datos_usuario_direccion` varchar(70) COLLATE utf8_bin NOT NULL,
  `datos_usuario_cp` varchar(5) COLLATE utf8_bin NOT NULL,
  `datos_usuario_localidad` varchar(25) COLLATE utf8_bin NOT NULL,
  `datos_usuario_telefono` varchar(12) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos-usuario`
--
ALTER TABLE `datos-usuario`
  ADD PRIMARY KEY (`id_datos_usuario`), ADD UNIQUE KEY `datos_usuario_dni` (`datos_usuario_dni`), ADD KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos-usuario`
--
ALTER TABLE `datos-usuario`
  MODIFY `id_datos_usuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datos-usuario`
--
ALTER TABLE `datos-usuario`
ADD CONSTRAINT `datos-usuario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
