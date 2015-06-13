-- phpMyAdmin SQL Dump
-- version 4.3.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-06-2015 a las 16:13:17
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
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(11) NOT NULL,
  `producto_descripcion` varchar(120) NOT NULL,
  `producto_marca` int(11) DEFAULT NULL,
  `producto_precio` float NOT NULL,
  `producto_categoria` int(11) DEFAULT NULL,
  `producto_tipoProducto` int(11) DEFAULT NULL,
  `producto_genero` int(11) DEFAULT NULL,
  `producto_imagen` varchar(64) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `producto_descripcion`, `producto_marca`, `producto_precio`, `producto_categoria`, `producto_tipoProducto`, `producto_genero`, `producto_imagen`) VALUES
(17, 'Ignite', 3, 1859, 1, 20, 1, 'img/productos/puma_ignite.jpg'),
(19, 'N98', 1, 1679, 2, 3, 1, 'img/productos/nike_n98.jpg'),
(20, 'Brasilia 6', 1, 579, 3, 2, 3, 'img/productos/nike_brasilia6.jpg'),
(21, 'Bones', 6, 319, 2, 4, 1, 'img/productos/convers_bones.jpg'),
(22, 'City', 1, 1249, 2, 24, 2, 'img/productos/nike_city.jpg'),
(23, 'Windrunner', 1, 799, 2, 3, 2, 'img/productos/nike_windrunner.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`), ADD KEY `producto_marca` (`producto_marca`), ADD KEY `producto_categoria` (`producto_categoria`), ADD KEY `producto_genero` (`producto_genero`), ADD KEY `producto_tipoProducto` (`producto_tipoProducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`producto_marca`) REFERENCES `marcas` (`id_marca`),
ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`producto_categoria`) REFERENCES `categorias` (`id_categoria`),
ADD CONSTRAINT `productos_ibfk_3` FOREIGN KEY (`producto_genero`) REFERENCES `generos` (`id_genero`),
ADD CONSTRAINT `productos_ibfk_5` FOREIGN KEY (`producto_tipoProducto`) REFERENCES `producto-tipo` (`id_tipo_producto`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
