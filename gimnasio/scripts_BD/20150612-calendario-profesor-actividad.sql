-- phpMyAdmin SQL Dump
-- version 4.3.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-06-2015 a las 00:33:35
-- Versión del servidor: 5.5.41-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.6

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
-- Estructura de tabla para la tabla `calendario-profesor-actividad`
--

CREATE TABLE IF NOT EXISTS `calendario-profesor-actividad` (
  `id_calendario_profesor_actividad` int(11) NOT NULL,
  `fecha_profesor_actividad` date NOT NULL,
  `horario_desde_profesor_actividad` time NOT NULL,
  `horario_hasta_profesor_actividad` time NOT NULL,
  `id_profesor_actividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calendario-profesor-actividad`
--
ALTER TABLE `calendario-profesor-actividad`
  ADD PRIMARY KEY (`id_calendario_profesor_actividad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calendario-profesor-actividad`
--
ALTER TABLE `calendario-profesor-actividad`
  MODIFY `id_calendario_profesor_actividad` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


ALTER TABLE `calendario-profesor-actividad` ADD CONSTRAINT `fk-prof-act` FOREIGN KEY (`id_profesor_actividad`) REFERENCES `profesor-actividad`(`id_profesor_actividad`) ON DELETE NO ACTION ON UPDATE NO ACTION