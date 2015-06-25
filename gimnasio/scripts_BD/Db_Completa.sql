-- phpMyAdmin SQL Dump
-- version 4.3.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-06-2015 a las 15:18:43
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `actividad-grupo`
--

INSERT INTO `actividad-grupo` (`id`, `idTipo`, `descripcion`) VALUES
(1, 1, 'Acuatica'),
(7, 1, 'Aerobica'),
(8, 1, 'Spinning'),
(9, 2, 'Muscular'),
(10, 2, 'Muscular Combinado'),
(11, 3, 'Pilates'),
(12, 3, 'Elongacion'),
(13, 3, 'Yoga'),
(14, 4, 'Funcional'),
(15, 5, 'Tecnicas Especificas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad-tipo`
--

CREATE TABLE IF NOT EXISTS `actividad-tipo` (
  `id` int(11) NOT NULL,
  `Descripcion` varchar(25) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `actividad-tipo`
--

INSERT INTO `actividad-tipo` (`id`, `Descripcion`) VALUES
(1, 'Cardio'),
(2, 'Muscular'),
(3, 'Postural'),
(4, 'Funcional'),
(5, 'Tecnico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE IF NOT EXISTS `actividades` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_bin NOT NULL,
  `idTipo` int(11) NOT NULL,
  `idGrupo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `nombre`, `idTipo`, `idGrupo`) VALUES
(1, 'aquadance', 1, 8),
(2, 'boxeo', 5, 1),
(4, 'localizada 2', 5, 1),
(7, 'boxeo', 2, 1),
(8, 'mondongo', 2, 8),
(9, 'Spinning', 1, 8),
(10, 'acuatica con bandas', 1, 1),
(11, 'aero local', 2, 10),
(12, 'Localizada', 2, 9),
(13, 'Pilates', 3, 11),
(14, 'Ashtanga yoga', 3, 13),
(15, 'Megacross', 4, 14),
(16, 'Boxeo', 5, 15),
(17, 'Karate Do', 5, 15),
(18, 'Salsa', 5, 15),
(19, 'Musical Dancel', 5, 15);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categoria` int(11) NOT NULL,
  `categoria_nombre` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `categoria_nombre`) VALUES
(1, 'Calzado'),
(2, 'Indumentaria'),
(3, 'Accesorios'),
(4, 'Nueva Categoria');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `datos-usuario`
--

INSERT INTO `datos-usuario` (`id_datos_usuario`, `id_usuario`, `datos_usuario_nombre`, `datos_usuario_apellido`, `datos_usuario_dni`, `datos_usuario_direccion`, `datos_usuario_cp`, `datos_usuario_localidad`, `datos_usuario_telefono`) VALUES
(1, 1, 'mauro', 'neagoe', '28000001', 'j b alberdi 1800', '1636', 'mordor', '1560008000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle-ventas`
--

CREATE TABLE IF NOT EXISTS `detalle-ventas` (
  `id_detalle` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_talle` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `detalle-ventas`
--

INSERT INTO `detalle-ventas` (`id_detalle`, `id_venta`, `id_producto`, `id_talle`, `cantidad`) VALUES
(7, 44, 21, 4, 3),
(8, 44, 23, 4, 2),
(9, 44, 23, 3, 1),
(10, 44, 17, 21, 2),
(11, 45, 20, 30, 1),
(12, 45, 21, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE IF NOT EXISTS `generos` (
  `id_genero` int(11) NOT NULL,
  `genero_nombre` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id_genero`, `genero_nombre`) VALUES
(1, 'Hombre'),
(2, 'Mujer'),
(3, 'Unisex');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE IF NOT EXISTS `marcas` (
  `id_marca` int(11) NOT NULL,
  `marca_nombre` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marca`, `marca_nombre`) VALUES
(1, 'Nike'),
(2, 'Adidas'),
(3, 'Puma'),
(4, 'Reebok'),
(5, 'Topper'),
(6, 'Converse'),
(7, 'Speedo'),
(8, 'Crocs'),
(9, 'Salomon'),
(10, 'Asics'),
(11, 'Rider');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto-tipo`
--

CREATE TABLE IF NOT EXISTS `producto-tipo` (
  `id_tipo_producto` int(11) NOT NULL,
  `nombre_tipo_producto` varchar(60) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto-tipo`
--

INSERT INTO `producto-tipo` (`id_tipo_producto`, `nombre_tipo_producto`, `id_categoria`) VALUES
(1, 'Buzos', 2),
(2, 'Mochilas', 3),
(3, 'Camperas', 2),
(4, 'Remeras', 2),
(20, 'Zapatillas', 1),
(21, 'Conjuntos Deportivos', 0),
(22, 'Musculosas', 2),
(23, 'Shorts', 2),
(24, 'Conjuntos Deportivos', 2);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor-actividad`
--

CREATE TABLE IF NOT EXISTS `profesor-actividad` (
  `id_profesor_actividad` int(11) NOT NULL,
  `id_profesor` int(11) NOT NULL,
  `id_actividad` int(11) NOT NULL,
  `duracion` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE IF NOT EXISTS `profesores` (
  `id_profesor` int(4) NOT NULL,
  `profesor_dni` int(15) NOT NULL,
  `profesor_nombre_apellido` varchar(30) NOT NULL,
  `profesor_direccion` varchar(30) NOT NULL,
  `profesor_telefono` varchar(20) NOT NULL,
  `profesor_mail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stocks`
--

CREATE TABLE IF NOT EXISTS `stocks` (
  `id_stock` int(11) NOT NULL,
  `producto` int(11) NOT NULL,
  `talle` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `stocks`
--

INSERT INTO `stocks` (`id_stock`, `producto`, `talle`, `cantidad`) VALUES
(8, 21, 3, 40),
(9, 21, 4, 37),
(10, 21, 5, 55),
(11, 21, 6, 19),
(12, 21, 7, 10),
(14, 17, 22, 17),
(15, 17, 21, 12),
(16, 17, 24, 6),
(17, 19, 2, 6),
(18, 19, 5, 20),
(19, 19, 4, 15),
(20, 19, 6, 19),
(21, 17, 23, 18),
(22, 17, 25, 4),
(28, 20, 30, 30),
(29, 22, 3, 18),
(30, 23, 3, 24),
(31, 23, 4, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talles`
--

CREATE TABLE IF NOT EXISTS `talles` (
  `id_talle` int(11) NOT NULL,
  `talle_nombre` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `talles`
--

INSERT INTO `talles` (`id_talle`, `talle_nombre`) VALUES
(8, '26'),
(9, '27'),
(10, '28'),
(11, '29'),
(12, '30'),
(13, '31'),
(14, '32'),
(15, '33'),
(16, '34'),
(17, '35'),
(18, '36'),
(19, '37'),
(20, '38'),
(21, '39'),
(22, '40'),
(23, '41'),
(24, '42'),
(25, '43'),
(26, '44'),
(27, '45'),
(28, '46'),
(29, '47'),
(5, 'l'),
(4, 'm'),
(32, 'prueba'),
(3, 's'),
(30, 'unico'),
(6, 'xl'),
(2, 'xs'),
(7, 'xxl'),
(1, 'xxs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjetas-tipo`
--

CREATE TABLE IF NOT EXISTS `tarjetas-tipo` (
  `id_tarjetas_tipo` int(11) NOT NULL,
  `tarjetas_tipo` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tarjetas-tipo`
--

INSERT INTO `tarjetas-tipo` (`id_tarjetas_tipo`, `tarjetas_tipo`) VALUES
(1, 'Visa'),
(2, 'MasterCard'),
(3, 'American Express');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(35) COLLATE utf8_bin NOT NULL,
  `clave` varchar(25) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `clave`) VALUES
(1, 'mauro_ssj@hotmail.com', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios-tarjetas`
--

CREATE TABLE IF NOT EXISTS `usuarios-tarjetas` (
  `id_usuarios_tarjetas` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_tarjetas_tipo` int(11) NOT NULL,
  `tarjeta_numero` varchar(16) COLLATE utf8_bin NOT NULL,
  `tarjeta_exp_mes` varchar(2) COLLATE utf8_bin NOT NULL,
  `tarjeta_exp_ano` varchar(4) COLLATE utf8_bin NOT NULL,
  `tarjeta_ccv` varchar(4) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
  `id_venta` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_venta` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `id_usuario`, `fecha_venta`) VALUES
(44, 1, '2015-06-23'),
(45, 1, '2015-06-24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad-grupo`
--
ALTER TABLE `actividad-grupo`
  ADD PRIMARY KEY (`id`), ADD KEY `idTipo` (`idTipo`);

--
-- Indices de la tabla `actividad-tipo`
--
ALTER TABLE `actividad-tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id`), ADD KEY `idTipo` (`idTipo`), ADD KEY `idGrupo` (`idGrupo`);

--
-- Indices de la tabla `calendario-profesor-actividad`
--
ALTER TABLE `calendario-profesor-actividad`
  ADD PRIMARY KEY (`id_calendario_profesor_actividad`), ADD KEY `fk-prof-act` (`id_profesor_actividad`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `datos-usuario`
--
ALTER TABLE `datos-usuario`
  ADD PRIMARY KEY (`id_datos_usuario`), ADD UNIQUE KEY `datos_usuario_dni` (`datos_usuario_dni`), ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `detalle-ventas`
--
ALTER TABLE `detalle-ventas`
  ADD PRIMARY KEY (`id_detalle`), ADD KEY `id_venta` (`id_venta`), ADD KEY `id_producto` (`id_producto`), ADD KEY `detalle-ventas_ibfk_3` (`id_talle`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `producto-tipo`
--
ALTER TABLE `producto-tipo`
  ADD PRIMARY KEY (`id_tipo_producto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`), ADD KEY `producto_marca` (`producto_marca`), ADD KEY `producto_categoria` (`producto_categoria`), ADD KEY `producto_genero` (`producto_genero`), ADD KEY `producto_tipoProducto` (`producto_tipoProducto`);

--
-- Indices de la tabla `profesor-actividad`
--
ALTER TABLE `profesor-actividad`
  ADD PRIMARY KEY (`id_profesor_actividad`), ADD KEY `fk_profesor-actividad` (`id_profesor`), ADD KEY `fk-actividad-profesor` (`id_actividad`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id_profesor`);

--
-- Indices de la tabla `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id_stock`), ADD KEY `producto` (`producto`), ADD KEY `talle` (`talle`);

--
-- Indices de la tabla `talles`
--
ALTER TABLE `talles`
  ADD PRIMARY KEY (`id_talle`), ADD UNIQUE KEY `talle_nombre` (`talle_nombre`);

--
-- Indices de la tabla `tarjetas-tipo`
--
ALTER TABLE `tarjetas-tipo`
  ADD PRIMARY KEY (`id_tarjetas_tipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `usuarios-tarjetas`
--
ALTER TABLE `usuarios-tarjetas`
  ADD PRIMARY KEY (`id_usuarios_tarjetas`), ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad-grupo`
--
ALTER TABLE `actividad-grupo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `actividad-tipo`
--
ALTER TABLE `actividad-tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `calendario-profesor-actividad`
--
ALTER TABLE `calendario-profesor-actividad`
  MODIFY `id_calendario_profesor_actividad` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `datos-usuario`
--
ALTER TABLE `datos-usuario`
  MODIFY `id_datos_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `detalle-ventas`
--
ALTER TABLE `detalle-ventas`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `producto-tipo`
--
ALTER TABLE `producto-tipo`
  MODIFY `id_tipo_producto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `profesor-actividad`
--
ALTER TABLE `profesor-actividad`
  MODIFY `id_profesor_actividad` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id_profesor` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `talles`
--
ALTER TABLE `talles`
  MODIFY `id_talle` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `tarjetas-tipo`
--
ALTER TABLE `tarjetas-tipo`
  MODIFY `id_tarjetas_tipo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios-tarjetas`
--
ALTER TABLE `usuarios-tarjetas`
  MODIFY `id_usuarios_tarjetas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad-grupo`
--
ALTER TABLE `actividad-grupo`
ADD CONSTRAINT `actividad-grupo_ibfk_1` FOREIGN KEY (`idTipo`) REFERENCES `actividad-tipo` (`id`);

--
-- Filtros para la tabla `actividades`
--
ALTER TABLE `actividades`
ADD CONSTRAINT `actividades_ibfk_1` FOREIGN KEY (`idTipo`) REFERENCES `actividad-tipo` (`id`),
ADD CONSTRAINT `actividades_ibfk_2` FOREIGN KEY (`idGrupo`) REFERENCES `actividad-grupo` (`id`);

--
-- Filtros para la tabla `calendario-profesor-actividad`
--
ALTER TABLE `calendario-profesor-actividad`
ADD CONSTRAINT `fk-prof-act` FOREIGN KEY (`id_profesor_actividad`) REFERENCES `profesor-actividad` (`id_profesor_actividad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `datos-usuario`
--
ALTER TABLE `datos-usuario`
ADD CONSTRAINT `datos-usuario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `detalle-ventas`
--
ALTER TABLE `detalle-ventas`
ADD CONSTRAINT `detalle-ventas_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id_venta`),
ADD CONSTRAINT `detalle-ventas_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`),
ADD CONSTRAINT `detalle-ventas_ibfk_3` FOREIGN KEY (`id_talle`) REFERENCES `talles` (`id_talle`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`producto_marca`) REFERENCES `marcas` (`id_marca`),
ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`producto_categoria`) REFERENCES `categorias` (`id_categoria`),
ADD CONSTRAINT `productos_ibfk_3` FOREIGN KEY (`producto_genero`) REFERENCES `generos` (`id_genero`),
ADD CONSTRAINT `productos_ibfk_5` FOREIGN KEY (`producto_tipoProducto`) REFERENCES `producto-tipo` (`id_tipo_producto`);

--
-- Filtros para la tabla `profesor-actividad`
--
ALTER TABLE `profesor-actividad`
ADD CONSTRAINT `fk-actividad-profesor` FOREIGN KEY (`id_actividad`) REFERENCES `actividades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_profesor-actividad` FOREIGN KEY (`id_profesor`) REFERENCES `profesores` (`id_profesor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `stocks`
--
ALTER TABLE `stocks`
ADD CONSTRAINT `stocks_ibfk_1` FOREIGN KEY (`producto`) REFERENCES `productos` (`id_producto`),
ADD CONSTRAINT `stocks_ibfk_2` FOREIGN KEY (`talle`) REFERENCES `talles` (`id_talle`);

--
-- Filtros para la tabla `usuarios-tarjetas`
--
ALTER TABLE `usuarios-tarjetas`
ADD CONSTRAINT `usuarios-tarjetas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
