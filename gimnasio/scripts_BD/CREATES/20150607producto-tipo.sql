-- phpMyAdmin SQL Dump
-- version 4.3.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-06-2015 a las 14:33:42
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
-- Estructura de tabla para la tabla `producto-tipo`
--

CREATE TABLE IF NOT EXISTS `producto-tipo` (
  `id_tipo_producto` int(11) NOT NULL,
  `nombre_tipo_producto` varchar(60) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto-tipo`
--

INSERT INTO `producto-tipo` (`id_tipo_producto`, `nombre_tipo_producto`, `id_categoria`) VALUES
(1, 'Buzos', 2),
(2, 'Deportivas', 1),
(3, 'Camperas', 3),
(4, 'Remeras', 2),
(20, 'Zapatillas', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto-tipo`
--
ALTER TABLE `producto-tipo`
  ADD PRIMARY KEY (`id_tipo_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto-tipo`
--
ALTER TABLE `producto-tipo`
  MODIFY `id_tipo_producto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
