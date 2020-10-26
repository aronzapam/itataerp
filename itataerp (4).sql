-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2020 a las 14:45:42
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `itataerp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `fecha`) VALUES
(7, 'productos de aseo', '2020-10-20 14:38:03'),
(8, 'productos lacteos', '2020-10-20 15:17:14'),
(9, 'productos de belleza', '2020-10-22 13:29:58'),
(10, 'productos de cocina', '2020-10-22 18:32:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `documento` int(11) NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `compras` int(11) NOT NULL,
  `ultima_compra` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `documento`, `email`, `telefono`, `direccion`, `fecha_nacimiento`, `compras`, `ultima_compra`, `fecha`) VALUES
(6, 'carlos', 2133123123, 'carlos@gmail.com', '99999999', 'villa eso', '1996-08-08', 2, '2020-10-22 10:15:01', '2020-10-22 13:15:09'),
(9, 'cata', 2131231, 'cata@gmail.com', '66666666', 'villa nose ps', '1996-08-10', 1, '2020-10-22 06:43:01', '2020-10-22 11:43:01'),
(10, 'pedro', 56789098, 'pedro@gmail.com', '956767687', 'villa nose ps2', '1990-08-10', 5, '2020-10-22 10:32:01', '2020-10-22 13:32:01'),
(11, 'juan', 4567890, 'juan@gmail.com', '987878789', 'villa nose ps3', '1990-08-22', 9, '2020-10-22 16:30:59', '2020-10-22 19:30:59'),
(12, 'tomas', 23456789, 'tomas@gmail.com', '956767698', 'villa nose ps4', '1988-08-22', 3, '2020-10-23 17:44:50', '2020-10-23 20:44:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `codigo` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `precio_compra` float NOT NULL,
  `precio_venta` float NOT NULL,
  `ventas` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `id_categoria`, `codigo`, `descripcion`, `imagen`, `stock`, `precio_compra`, `precio_venta`, `ventas`, `fecha`) VALUES
(61, 7, '701', 'jabon', 'vistas/img/productos/default/iconodefault.png', 8, 1000, 1400, 2, '2020-10-22 17:23:35'),
(62, 7, '702', 'quick', 'vistas/img/productos/default/iconodefault.png', 17, 100, 140, 3, '2020-10-22 17:23:35'),
(63, 8, '801', 'yogurt', 'vistas/img/productos/default/iconodefault.png', 8, 200, 280, 2, '2020-10-22 17:23:35'),
(64, 8, '802', 'leche', 'vistas/img/productos/default/iconodefault.png', 13, 2000, 2800, 3, '2020-10-22 17:23:35'),
(65, 9, '901', 'colonia', 'vistas/img/productos/default/iconodefault.png', 17, 2500, 3500, 3, '2020-10-22 19:30:59'),
(66, 9, '902', 'lavial', 'vistas/img/productos/default/iconodefault.png', 15, 1300, 1820, 5, '2020-10-23 20:44:50'),
(67, 10, '1001', 'olla', 'vistas/img/productos/default/iconodefault.png', 28, 3000, 3900, 2, '2020-10-23 20:44:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `perfil`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(1, 'administrador', 'admin', '$2a$07$asxx54ahjppf45sd87a5aunxs9bkpyGmGE/.vekdjFg83yRec789S', 'Administrador', 'vistas/img/usuarios/admin/378.png', 1, '2020-10-26 10:43:07', '2020-10-26 13:43:07'),
(60, 'carlos castro', 'carlos', '$2a$07$asxx54ahjppf45sd87a5auelrdZeBYZ4t33w118t1DE5bSBf9deF2', 'Especial', 'vistas/img/usuarios/carlos/924.png', 1, '2020-10-23 17:46:54', '2020-10-23 20:46:54'),
(61, 'laura nosep', 'laura', '$2a$07$asxx54ahjppf45sd87a5auKsB1ViuL62616ZD1cAVxGRuO21KFfiy', 'Vendedor', 'vistas/img/usuarios/laura/757.png', 1, '2020-10-23 17:47:25', '2020-10-23 20:47:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `productos` text COLLATE utf8_spanish_ci NOT NULL,
  `impuesto` float NOT NULL,
  `neto` float NOT NULL,
  `total` float NOT NULL,
  `metodo_pago` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `codigo`, `id_cliente`, `id_vendedor`, `productos`, `impuesto`, `neto`, `total`, `metodo_pago`, `fecha`) VALUES
(22, 10002, 9, 1, '[{\"id\":\"61\",\"descripcion\":\"jabon\",\"cantidad\":\"1\",\"stock\":\"8\",\"precio\":\"1400\",\"total\":\"1400\"}]', 28, 1400, 1428, 'Efectivo', '2020-10-22 11:43:01'),
(23, 10003, 6, 1, '[{\"id\":\"62\",\"descripcion\":\"quick\",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"140\",\"total\":\"140\"},{\"id\":\"64\",\"descripcion\":\"leche\",\"cantidad\":\"1\",\"stock\":\"15\",\"precio\":\"2800\",\"total\":\"2800\"}]', 352.8, 2940, 3292.8, 'Efectivo', '2020-10-22 13:15:01'),
(24, 10004, 10, 1, '[{\"id\":\"61\",\"descripcion\":\"jabon\",\"cantidad\":\"1\",\"stock\":\"8\",\"precio\":\"1400\",\"total\":\"1400\"},{\"id\":\"62\",\"descripcion\":\"quick\",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"140\",\"total\":\"140\"},{\"id\":\"63\",\"descripcion\":\"yogurt\",\"cantidad\":\"1\",\"stock\":\"9\",\"precio\":\"280\",\"total\":\"280\"},{\"id\":\"64\",\"descripcion\":\"leche\",\"cantidad\":\"1\",\"stock\":\"14\",\"precio\":\"2800\",\"total\":\"2800\"},{\"id\":\"65\",\"descripcion\":\"colonia\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"3500\",\"total\":\"3500\"}]', 812, 8120, 8932, 'TD-456789', '2020-10-22 18:50:38'),
(25, 10005, 11, 1, '[{\"id\":\"66\",\"descripcion\":\"lavial\",\"cantidad\":\"3\",\"stock\":\"17\",\"precio\":\"1820\",\"total\":\"5460\"},{\"id\":\"65\",\"descripcion\":\"colonia\",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"3500\",\"total\":\"3500\"},{\"id\":\"64\",\"descripcion\":\"leche\",\"cantidad\":\"1\",\"stock\":\"13\",\"precio\":\"2800\",\"total\":\"2800\"},{\"id\":\"63\",\"descripcion\":\"yogurt\",\"cantidad\":\"1\",\"stock\":\"8\",\"precio\":\"280\",\"total\":\"280\"},{\"id\":\"62\",\"descripcion\":\"quick\",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"140\",\"total\":\"140\"}]', 1218, 12180, 13398, 'Efectivo', '2020-10-22 17:23:36'),
(26, 10006, 11, 61, '[{\"id\":\"65\",\"descripcion\":\"colonia\",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"3500\",\"total\":\"3500\"},{\"id\":\"66\",\"descripcion\":\"lavial\",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"1820\",\"total\":\"1820\"}]', 532, 5320, 5852, 'TC-987654', '2020-10-22 19:30:59'),
(27, 10007, 12, 1, '[{\"id\":\"67\",\"descripcion\":\"olla\",\"cantidad\":\"2\",\"stock\":\"28\",\"precio\":\"3900\",\"total\":\"7800\"},{\"id\":\"66\",\"descripcion\":\"lavial\",\"cantidad\":\"1\",\"stock\":\"15\",\"precio\":\"1820\",\"total\":\"1820\"}]', 1827.8, 9620, 11447.8, 'Efectivo', '2020-10-23 20:44:50');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
