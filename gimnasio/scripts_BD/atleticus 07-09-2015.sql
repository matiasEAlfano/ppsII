-- phpMyAdmin SQL Dump
-- version 4.3.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-07-2015 a las 15:46:07
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
(1, 'Aquadance', 1, 8),
(9, 'Spinning', 1, 8),
(10, 'Acuatica con bandas', 1, 1),
(11, 'Aero local', 2, 10),
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
  `id_profesor_actividad` int(11) NOT NULL,
  `cupo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `calendario-profesor-actividad`
--

INSERT INTO `calendario-profesor-actividad` (`id_calendario_profesor_actividad`, `fecha_profesor_actividad`, `horario_desde_profesor_actividad`, `horario_hasta_profesor_actividad`, `id_profesor_actividad`, `cupo`) VALUES
(6, '2015-07-13', '09:00:00', '10:00:00', 4, 30),
(7, '2015-07-14', '09:00:00', '10:00:00', 5, 20),
(8, '2015-07-17', '09:00:00', '10:00:00', 5, 20),
(12, '2015-07-16', '09:00:00', '10:00:00', 4, 30),
(13, '2015-07-14', '20:30:00', '22:00:00', 8, 25),
(14, '2015-07-16', '20:30:00', '22:00:00', 8, 25),
(15, '2015-07-15', '20:30:00', '22:00:00', 9, 45),
(16, '2015-07-17', '20:30:00', '22:00:00', 9, 45),
(17, '2015-07-14', '10:00:00', '11:00:00', 6, 30),
(18, '2015-07-16', '10:00:00', '11:00:00', 6, 30),
(19, '2015-07-13', '10:00:00', '11:30:00', 7, 35),
(20, '2015-07-15', '10:00:00', '11:30:00', 7, 35),
(21, '2015-07-18', '20:30:00', '22:00:00', 10, 25);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `datos-usuario`
--

INSERT INTO `datos-usuario` (`id_datos_usuario`, `id_usuario`, `datos_usuario_nombre`, `datos_usuario_apellido`, `datos_usuario_dni`, `datos_usuario_direccion`, `datos_usuario_cp`, `datos_usuario_localidad`, `datos_usuario_telefono`) VALUES
(1, 1, 'mauro', 'neagoe', '28000001', 'j b alberdi 1800', '1636', 'mordor', '1560008000'),
(5, 18, 'Patricio', 'Froilan', '30331901', 'Monaco 911', '1429', 'Lanuse', '1530309090'),
(6, 19, 'ivan', 'fernandez', '35777222', 'pte saenz peña 1290', '1688', 'Lomas', '1550501010'),
(7, 20, 'matias', 'fumacoo', '35900009', 'sarmiento 4330', '7031', 'Quilmes', '1570908030');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle-ventas`
--

CREATE TABLE IF NOT EXISTS `detalle-ventas` (
  `id_detalle` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_talle` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `detalle-ventas`
--

INSERT INTO `detalle-ventas` (`id_detalle`, `id_venta`, `id_producto`, `id_talle`, `cantidad`, `precio`) VALUES
(1, 69, 21, 4, 2, 319),
(2, 69, 20, 30, 1, 579),
(3, 69, 17, 22, 1, 1859),
(4, 70, 23, 3, 1, 799),
(5, 70, 22, 3, 1, 1249),
(6, 71, 19, 2, 1, 1679),
(7, 72, 21, 5, 1, 319),
(8, 72, 20, 30, 1, 579),
(9, 72, 22, 3, 1, 1249),
(10, 72, 17, 21, 1, 1859),
(11, 72, 19, 5, 1, 1679),
(12, 72, 23, 4, 1, 799),
(13, 73, 17, 22, 1, 1859),
(14, 74, 21, 5, 1, 319),
(15, 74, 19, 5, 1, 1679),
(16, 75, 23, 3, 2, 799),
(17, 76, 19, 5, 1, 1679),
(18, 76, 19, 2, 2, 1679),
(19, 77, 21, 5, 1, 319),
(20, 77, 20, 30, 2, 579);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dias`
--

CREATE TABLE IF NOT EXISTS `dias` (
  `id_dia` int(11) NOT NULL,
  `dia_nombre` varchar(15) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `dias`
--

INSERT INTO `dias` (`id_dia`, `dia_nombre`) VALUES
(1, 'Lunes'),
(2, 'Martes'),
(3, 'Miercoles'),
(4, 'Jueves'),
(5, 'Viernes'),
(6, 'Sabado'),
(7, 'Domingo');

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesor-actividad`
--

INSERT INTO `profesor-actividad` (`id_profesor_actividad`, `id_profesor`, `id_actividad`, `duracion`) VALUES
(4, 3, 1, '01:00:00'),
(5, 3, 10, '01:00:00'),
(6, 1, 9, '01:00:00'),
(7, 1, 15, '01:30:00'),
(8, 2, 16, '01:30:00'),
(9, 2, 17, '01:30:00'),
(10, 1, 16, '01:30:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id_profesor`, `profesor_dni`, `profesor_nombre_apellido`, `profesor_direccion`, `profesor_telefono`, `profesor_mail`) VALUES
(1, 35622322, 'Matias Alfano', 'Mitre 750', '1532334455', 'matias@gmail.com'),
(2, 27000111, 'Roco Duro', 'la paz 911', '1588889999', 'rduro@hotmail.com'),
(3, 30123098, 'Marianela Mirra', 'luis maria campos 1234', '1565457788', 'mmirra@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE IF NOT EXISTS `reservas` (
  `id_reserva` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_calendario_profesor_actividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(8, 21, 3, 30),
(9, 21, 4, 31),
(10, 21, 5, 48),
(11, 21, 6, 18),
(12, 21, 7, 10),
(14, 17, 22, 14),
(15, 17, 21, 10),
(16, 17, 24, 6),
(17, 19, 2, 3),
(18, 19, 5, 17),
(19, 19, 4, 15),
(20, 19, 6, 19),
(21, 17, 23, 18),
(22, 17, 25, 4),
(28, 20, 30, 18),
(29, 22, 3, 13),
(30, 23, 3, 21),
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
  `id_usuario_tipo` int(11) NOT NULL,
  `email` varchar(35) COLLATE utf8_bin NOT NULL,
  `clave` varchar(25) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `id_usuario_tipo`, `email`, `clave`) VALUES
(1, 1, 'mauro_ssj@hotmail.com', 'admin'),
(18, 2, 'pf@ao.com', '12345'),
(19, 2, 'ifernandez@gmail.com', 'ferro'),
(20, 2, 'mfumacoo@hotmail.com', 'naruto');

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
-- Estructura de tabla para la tabla `usuarios_tipo`
--

CREATE TABLE IF NOT EXISTS `usuarios_tipo` (
  `id_usuario_tipo` int(11) NOT NULL,
  `usuario_descripcion` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios_tipo`
--

INSERT INTO `usuarios_tipo` (`id_usuario_tipo`, `usuario_descripcion`) VALUES
(1, 'admin'),
(2, 'usuario'),
(3, 'socio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
  `id_venta` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_venta` date NOT NULL,
  `tarjeta_tipo` int(11) NOT NULL,
  `tarjeta_numero` varchar(16) COLLATE utf8_bin NOT NULL,
  `total_venta` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `id_usuario`, `fecha_venta`, `tarjeta_tipo`, `tarjeta_numero`, `total_venta`) VALUES
(69, 18, '2015-07-02', 1, '1111111111111111', 3076),
(70, 18, '2015-07-02', 3, '2222222222222222', 2048),
(71, 18, '2015-07-03', 2, '4444444444446789', 1679),
(72, 18, '2015-07-05', 3, '4444444444446789', 6484),
(73, 1, '2015-07-05', 1, '4512345678901245', 1859),
(74, 1, '2015-07-05', 1, '4512345678901245', 1998),
(75, 18, '2015-07-07', 1, '4444444444446789', 1598),
(76, 18, '2015-07-07', 1, '4444444444446789', 5037),
(77, 18, '2015-07-07', 2, '4444444444446789', 1477);

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
-- Indices de la tabla `dias`
--
ALTER TABLE `dias`
  ADD PRIMARY KEY (`id_dia`);

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
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id_reserva`), ADD KEY `reservas_ibfk_1` (`id_usuario`), ADD KEY `reservas_ibfk_2` (`id_calendario_profesor_actividad`);

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
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`), ADD KEY `usuarios_ibfk_1` (`id_usuario_tipo`);

--
-- Indices de la tabla `usuarios-tarjetas`
--
ALTER TABLE `usuarios-tarjetas`
  ADD PRIMARY KEY (`id_usuarios_tarjetas`), ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuarios_tipo`
--
ALTER TABLE `usuarios_tipo`
  ADD PRIMARY KEY (`id_usuario_tipo`);

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
  MODIFY `id_calendario_profesor_actividad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `datos-usuario`
--
ALTER TABLE `datos-usuario`
  MODIFY `id_datos_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `detalle-ventas`
--
ALTER TABLE `detalle-ventas`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `dias`
--
ALTER TABLE `dias`
  MODIFY `id_dia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
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
  MODIFY `id_profesor_actividad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id_profesor` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `usuarios-tarjetas`
--
ALTER TABLE `usuarios-tarjetas`
  MODIFY `id_usuarios_tarjetas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios_tipo`
--
ALTER TABLE `usuarios_tipo`
  MODIFY `id_usuario_tipo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=78;
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
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
ADD CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`id_calendario_profesor_actividad`) REFERENCES `calendario-profesor-actividad` (`id_calendario_profesor_actividad`);

--
-- Filtros para la tabla `stocks`
--
ALTER TABLE `stocks`
ADD CONSTRAINT `stocks_ibfk_1` FOREIGN KEY (`producto`) REFERENCES `productos` (`id_producto`),
ADD CONSTRAINT `stocks_ibfk_2` FOREIGN KEY (`talle`) REFERENCES `talles` (`id_talle`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_usuario_tipo`) REFERENCES `usuarios_tipo` (`id_usuario_tipo`);

--
-- Filtros para la tabla `usuarios-tarjetas`
--
ALTER TABLE `usuarios-tarjetas`
ADD CONSTRAINT `usuarios-tarjetas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
