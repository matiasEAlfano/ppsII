-- phpMyAdmin SQL Dump
-- version 4.3.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-05-2015 a las 17:15:07
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
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(11) NOT NULL,
  `producto_descripcion` varchar(120) NOT NULL,
  `producto_marca` int(11) DEFAULT NULL,
  `producto_categoria` int(11) DEFAULT NULL,
  `producto_tipoProducto` int(11) DEFAULT NULL,
  `producto_genero` int(11) DEFAULT NULL,
  `producto_talle` int(11) DEFAULT NULL,
  `producto_color` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

ALTER TABLE `productos`
  ADD FOREIGN KEY (producto_marca) REFERENCES marcas(id_marca);

ALTER TABLE `productos`
  ADD FOREIGN KEY (producto_categoria) REFERENCES categorias(id_categoria);

ALTER TABLE `productos`
  ADD FOREIGN KEY (producto_genero) REFERENCES generos(id_genero);

ALTER TABLE `productos`
  ADD FOREIGN KEY (producto_talle) REFERENCES talles(id_talle);

ALTER TABLE `productos`
  ADD FOREIGN KEY (producto_tipoProducto) REFERENCES `producto-tipo`(id_tipo_producto);
