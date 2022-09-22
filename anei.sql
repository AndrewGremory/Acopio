-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-09-2022 a las 21:20:25
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `anei`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ahorro`
--

CREATE TABLE `ahorro` (
  `cedula_ahorro` bigint(20) NOT NULL,
  `valor_ahorro` bigint(20) NOT NULL,
  `fecha_ahorro` date NOT NULL,
  `hora_ahorro` time NOT NULL,
  `nombre_ahorro` varchar(40) NOT NULL,
  `codigo_ahorro` varchar(40) NOT NULL,
  `kilos_ahorro` bigint(20) NOT NULL,
  `cantidad_ahorro` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ahorro`
--

INSERT INTO `ahorro` (`cedula_ahorro`, `valor_ahorro`, `fecha_ahorro`, `hora_ahorro`, `nombre_ahorro`, `codigo_ahorro`, `kilos_ahorro`, `cantidad_ahorro`) VALUES
(234234, 15000, '2022-09-08', '11:31:08', 'keterine', 'AC 2022-09-08 1', 30, 500),
(34234234, 132500, '2022-09-09', '11:51:55', 'adriana', 'AC 2022-09-09 1', 265, 500),
(34234234, 22500, '2022-09-09', '04:48:40', 'adriana', 'AC 2022-09-09 2', 45, 500),
(234234, 250000, '2022-09-20', '03:57:20', 'keterine', 'AC 2022-09-20 1', 500, 500),
(34234234, 5000000, '2022-09-01', '08:55:58', 'adriana', 'SEC-AC - 2022-08-31 1', 10000, 500),
(34234234, 1500000, '2022-09-04', '11:04:15', 'adriana', 'VP 2022-09-04 1', 3000, 500),
(34234234, 1992000, '2022-09-04', '11:58:18', 'adriana', 'VP 2022-09-04 2', 3984, 500),
(234234, 10000, '2022-09-05', '04:47:12', 'keterine', 'VP 2022-09-05 1', 20, 500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisisfisico`
--

CREATE TABLE `analisisfisico` (
  `codigo_analisisfisico` varchar(40) NOT NULL,
  `fecha_analisisfisico` date NOT NULL,
  `almendra_total` float(10,1) NOT NULL,
  `almendra_sana` float(10,1) NOT NULL,
  `broca` float(10,1) NOT NULL,
  `broca_punto` float(10,1) NOT NULL,
  `negro` float(10,1) NOT NULL,
  `vinagre` float(10,1) NOT NULL,
  `humedad` float(10,1) NOT NULL,
  `factor` float(10,1) NOT NULL,
  `observaciones_analisisfisico` varchar(40) NOT NULL,
  `almendra_sana1` float(10,1) NOT NULL,
  `almendra_total1` float(10,1) NOT NULL,
  `broca1` float(10,1) NOT NULL,
  `broca_punto1` float(10,1) NOT NULL,
  `negro1` float(10,1) NOT NULL,
  `vinagre1` float(10,1) NOT NULL,
  `numero` bigint(20) NOT NULL,
  `nombre_analisisfisico` varchar(40) NOT NULL,
  `destare` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `analisisfisico`
--

INSERT INTO `analisisfisico` (`codigo_analisisfisico`, `fecha_analisisfisico`, `almendra_total`, `almendra_sana`, `broca`, `broca_punto`, `negro`, `vinagre`, `humedad`, `factor`, `observaciones_analisisfisico`, `almendra_sana1`, `almendra_total1`, `broca1`, `broca_punto1`, `negro1`, `vinagre1`, `numero`, `nombre_analisisfisico`, `destare`) VALUES
('AC 2022-09-09 1', '2022-09-09', 250.0, 200.0, 3.0, 3.0, 3.0, 3.0, 3.0, 87.5, '', 80.0, 0.2, 1.2, 1.2, 1.2, 1.2, 27, 'adriana', 0),
('AC 2022-09-20 1', '2022-09-20', 250.0, 200.0, 3.0, 3.0, 33.0, 3.0, 3.0, 87.5, '', 80.0, 0.2, 1.2, 1.2, 1.2, 1.2, 29, 'keterine', 0),
('SEC-AC - 2022-08-31 1', '2022-09-08', 250.0, 200.0, 3.0, 3.0, 3.0, 3.0, 3.0, 87.5, '', 80.0, 0.2, 1.2, 1.2, 1.2, 1.2, 25, 'adriana', 3),
('SEC-AC - 2022-09-08 2', '2022-09-08', 250.0, 200.0, 3.0, 3.0, 3.0, 3.0, 3.0, 87.5, '', 80.0, 0.2, 1.2, 1.2, 1.2, 1.2, 26, 'keterine', 3),
('SEC-AC - 2022-09-09 2', '2022-09-09', 250.0, 200.0, 3.0, 3.0, 3.0, 3.0, 3.0, 87.5, '', 80.0, 0.2, 1.2, 1.2, 1.2, 1.2, 28, 'keterine', 3),
('VP 2022-09-04 1', '2022-09-06', 250.0, 200.0, 3.0, 3.0, 3.0, 3.0, 3.0, 87.5, '', 80.0, 0.2, 1.2, 1.2, 1.2, 1.2, 23, 'adriana', 1000),
('VP 2022-09-04 2', '2022-09-07', 250.0, 200.0, 3.0, 3.0, 3.0, 3.0, 3.0, 87.5, '', 80.0, 0.2, 1.2, 1.2, 1.2, 1.2, 24, 'adriana', 984);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisissensorial`
--

CREATE TABLE `analisissensorial` (
  `codigo_sensorial` varchar(40) NOT NULL,
  `fecha_sensorial` date NOT NULL,
  `puntaje_scaa` float(10,1) NOT NULL,
  `acidez` varchar(40) NOT NULL,
  `notas` varchar(40) NOT NULL,
  `numero` bigint(20) NOT NULL,
  `nombre_sensorial` varchar(40) NOT NULL,
  `cedula_sensorial` bigint(20) NOT NULL,
  `evaluado` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociados`
--

CREATE TABLE `asociados` (
  `nombre_usuario` varchar(40) NOT NULL,
  `municipio` varchar(40) NOT NULL,
  `vereda` varchar(40) NOT NULL,
  `finca` varchar(40) NOT NULL,
  `fecha_registro` date NOT NULL,
  `cedula_usuario` bigint(20) NOT NULL,
  `codigo_up` varchar(40) NOT NULL,
  `estatus` varchar(40) NOT NULL,
  `contacto` bigint(20) NOT NULL,
  `cupo_cafe` bigint(20) NOT NULL,
  `tipo_vinculacion` varchar(40) NOT NULL,
  `cupo_cacao` bigint(20) NOT NULL,
  `numero` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asociados`
--

INSERT INTO `asociados` (`nombre_usuario`, `municipio`, `vereda`, `finca`, `fecha_registro`, `cedula_usuario`, `codigo_up`, `estatus`, `contacto`, `cupo_cafe`, `tipo_vinculacion`, `cupo_cacao`, `numero`) VALUES
('keterine', 'san diego', 'ceiva', 'la esperanza', '2022-09-04', 234234, '234234', 'estandar', 4324, 0, 'estandar', 0, 44),
('adriana', 'valledupar', 'ceiva', 'la esperanza', '2022-08-31', 34234234, '34234234', 'organico', 24123432, 5000, 'estandar', 0, 43);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `cedula` bigint(20) NOT NULL,
  `producto` varchar(40) NOT NULL,
  `unidad` varchar(10) NOT NULL,
  `marca` varchar(40) NOT NULL,
  `numero_estopas` bigint(20) NOT NULL,
  `estado_estopas` varchar(40) NOT NULL,
  `numero_sacos` bigint(20) NOT NULL,
  `estado_sacos` varchar(40) NOT NULL,
  `observaciones` varchar(40) NOT NULL,
  `fecha_compra` date NOT NULL,
  `kilos_brutos` bigint(20) NOT NULL,
  `kilos_netos` bigint(20) NOT NULL,
  `municipio_compra` varchar(40) NOT NULL,
  `tipo_grano` varchar(40) NOT NULL,
  `latas_compra` bigint(20) NOT NULL,
  `numero` bigint(20) NOT NULL,
  `nombre_compra` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`cedula`, `producto`, `unidad`, `marca`, `numero_estopas`, `estado_estopas`, `numero_sacos`, `estado_sacos`, `observaciones`, `fecha_compra`, `kilos_brutos`, `kilos_netos`, `municipio_compra`, `tipo_grano`, `latas_compra`, `numero`, `nombre_compra`) VALUES
(34234234, 'cafe mojado', 'latas	', 'AC 2022-09-09 2', 0, '', 0, '', '', '2022-09-09', 0, 45, 'codazzi', 'organico', 45, 141, 'adriana'),
(234234, 'cafe pergamino seco', 'Kilos', 'AC 2022-09-20 1', 10, 'buena', 15, 'buena', '', '2022-09-20', 600, 500, 'codazzi', 'estandar', 0, 143, 'keterine'),
(34234234, 'cafe pergamino seco', '', 'SEC-AC - 2022-08-31 1', 0, '', 0, '', '', '2022-09-10', 0, 160, 'codazzi', 'organico', 0, 142, 'adriana'),
(234234, 'cafe pergamino seco', '', 'SEC-AC - 2022-09-09 2', 0, '', 0, '', '', '2022-09-09', 300, 360, 'codazzi', 'estandar', 0, 139, 'keterine');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `controlsecadora`
--

CREATE TABLE `controlsecadora` (
  `cod_secadora` bigint(20) NOT NULL,
  `fecha_secadora` date NOT NULL,
  `hora_secadora` time NOT NULL,
  `municipio` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `controlsecadora`
--

INSERT INTO `controlsecadora` (`cod_secadora`, `fecha_secadora`, `hora_secadora`, `municipio`) VALUES
(142, '2022-09-04', '09:56:46', 'valledupar'),
(143, '2022-09-04', '09:57:16', 'valledupar'),
(144, '2022-09-04', '09:58:44', 'valledupar'),
(145, '2022-09-05', '01:00:50', 'valledupar'),
(146, '2022-09-07', '08:33:48', 'valledupar'),
(147, '2022-09-07', '08:43:57', 'valledupar'),
(148, '2022-09-08', '11:27:14', 'codazzi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fijar`
--

CREATE TABLE `fijar` (
  `nombre` varchar(40) NOT NULL,
  `cedula` bigint(20) NOT NULL,
  `cantidad` bigint(20) NOT NULL,
  `fecha` date NOT NULL,
  `anio` year(4) NOT NULL,
  `municipio` varchar(40) NOT NULL,
  `clave` bigint(20) NOT NULL,
  `producto` varchar(40) NOT NULL,
  `estatus` varchar(40) NOT NULL,
  `precio` bigint(20) NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fijar`
--

INSERT INTO `fijar` (`nombre`, `cedula`, `cantidad`, `fecha`, `anio`, `municipio`, `clave`, `producto`, `estatus`, `precio`, `hora`) VALUES
('keterine', 234234, 5000, '2022-09-20', 2022, 'codazzi', 17, 'cafe pergamino seco', 'estandar', 18000, '05:03:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liquidacion`
--

CREATE TABLE `liquidacion` (
  `codigo_liquidacion` varchar(40) NOT NULL,
  `precio_dia` bigint(20) NOT NULL,
  `rendimiento` bigint(20) NOT NULL,
  `bonificacion` bigint(20) NOT NULL,
  `prima` bigint(20) NOT NULL,
  `precio_final` bigint(20) NOT NULL,
  `subtotal` bigint(20) NOT NULL,
  `fecha_liquidacion` date NOT NULL,
  `hora_liquidacion` time NOT NULL,
  `politica` varchar(40) NOT NULL,
  `observaciones_liquidacion` varchar(40) NOT NULL,
  `dian` float(20,1) NOT NULL,
  `asociados` bigint(20) NOT NULL,
  `neto_pagar` bigint(20) NOT NULL,
  `ahorro` bigint(20) NOT NULL,
  `total_ahorro` bigint(20) NOT NULL,
  `kilos_liquidacion` bigint(20) NOT NULL,
  `cedula_liquidacion` bigint(20) NOT NULL,
  `aporte` bigint(20) NOT NULL,
  `numero` bigint(20) NOT NULL,
  `nombre_liquidacion` varchar(40) NOT NULL,
  `producto_liquidacion` varchar(40) NOT NULL,
  `descuento_secado` bigint(20) NOT NULL,
  `municipio_liquidacion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `liquidacion`
--

INSERT INTO `liquidacion` (`codigo_liquidacion`, `precio_dia`, `rendimiento`, `bonificacion`, `prima`, `precio_final`, `subtotal`, `fecha_liquidacion`, `hora_liquidacion`, `politica`, `observaciones_liquidacion`, `dian`, `asociados`, `neto_pagar`, `ahorro`, `total_ahorro`, `kilos_liquidacion`, `cedula_liquidacion`, `aporte`, `numero`, `nombre_liquidacion`, `producto_liquidacion`, `descuento_secado`, `municipio_liquidacion`) VALUES
('VP 2022-09-05 1', 16000, 0, 100, 0, 100, 2000, '2022-09-08', '09:53:28', 'politica1', '', 10.0, 20, -8040, 500, 10000, 20, 234234, 10, 121, 'keterine', 'cafe pergamino seco', 0, 'codazzi'),
('AC 2022-09-08 1', 130000, 0, 100, 0, 130100, 3903000, '2022-09-08', '11:31:08', 'politica1', '', 19515.0, 39030, 3829436, 500, 15000, 30, 234234, 19515, 122, 'keterine', 'cafe mojado', 0, 'codazzi'),
('AC 2022-09-09 1', 16000, 16969, 100, 800, 17869, 4735285, '2022-09-09', '11:51:55', 'politica1', '', 23676.4, 47353, 4531732, 500, 132500, 265, 34234234, 23676, 123, 'adriana', 'cafe pergamino seco', 0, 'codazzi'),
('AC 2022-09-09 2', 130000, 0, 100, 0, 130100, 5854500, '2022-09-09', '04:48:40', 'politica1', '', 29272.5, 58545, 5744153, 500, 22500, 45, 34234234, 29273, 124, 'adriana', 'cafe mojado', 0, 'codazzi'),
('AC 2022-09-20 1', 18000, 19090, 100, 800, 19990, 9995000, '2022-09-20', '05:29:28', 'politica1', '', 49975.0, 99950, 9595026, 500, 250000, 500, 234234, 49975, 126, 'keterine', 'cafe pergamino seco', 0, 'codazzi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noasociados`
--

CREATE TABLE `noasociados` (
  `cedula_noasociados` bigint(20) NOT NULL,
  `centro_acopio` varchar(40) NOT NULL,
  `fecha_noasociado` date NOT NULL,
  `nombres_completos` varchar(60) NOT NULL,
  `contacto_noasociado` bigint(20) NOT NULL,
  `tipo_cliente` varchar(40) NOT NULL,
  `municipio_noasociado` varchar(40) NOT NULL,
  `vereda_noasociado` varchar(40) NOT NULL,
  `finca_noasociado` varchar(40) NOT NULL,
  `producion_noasociado` float(10,1) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `tipo` varchar(40) NOT NULL,
  `precio` bigint(20) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `prima_producto` bigint(20) NOT NULL,
  `politica` varchar(40) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`tipo`, `precio`, `descripcion`, `prima_producto`, `politica`, `nombre`, `numero`) VALUES
('estandar', 18000, 'SAFSGFD', 800, 'politica1', 'cafe pergamino seco', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto2`
--

CREATE TABLE `producto2` (
  `tipo` varchar(40) NOT NULL,
  `precio` bigint(20) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `prima_producto` bigint(20) NOT NULL,
  `politica` varchar(40) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto2`
--

INSERT INTO `producto2` (`tipo`, `precio`, `descripcion`, `prima_producto`, `politica`, `nombre`, `fecha`) VALUES
('estandar', 18000, 'SAFSGFD', 800, 'politica1', 'cafe pergamino seco', '2022-09-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultadosecado`
--

CREATE TABLE `resultadosecado` (
  `codigo_resultado` varchar(40) NOT NULL,
  `fecha_resultado` date NOT NULL,
  `cantidad_resultado` bigint(20) NOT NULL,
  `costo_resultado` bigint(20) NOT NULL,
  `costo_total_resultado` bigint(20) NOT NULL,
  `observaciones_resultado` varchar(40) NOT NULL,
  `tipo_pago` varchar(40) NOT NULL,
  `tipograno_resultado` varchar(40) NOT NULL,
  `numero` bigint(20) NOT NULL,
  `nombre_resultado` varchar(40) NOT NULL,
  `sacos` bigint(20) NOT NULL,
  `kilos_sobrantes` bigint(20) NOT NULL,
  `producto` varchar(40) NOT NULL,
  `latas` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `resultadosecado`
--

INSERT INTO `resultadosecado` (`codigo_resultado`, `fecha_resultado`, `cantidad_resultado`, `costo_resultado`, `costo_total_resultado`, `observaciones_resultado`, `tipo_pago`, `tipograno_resultado`, `numero`, `nombre_resultado`, `sacos`, `kilos_sobrantes`, `producto`, `latas`) VALUES
('SEC-AC - 2022-08-31 1', '2022-09-10', 160, 200, 32000, '', 'cafe', 'organico', 69, 'adriana', 40, 5, 'cafe pergamino seco', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retiro`
--

CREATE TABLE `retiro` (
  `cedula_retiro` bigint(20) NOT NULL,
  `fecha_retiro` date NOT NULL,
  `hora_retiro` time NOT NULL,
  `valor_retiro` bigint(20) NOT NULL,
  `nombre_retiro` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secado`
--

CREATE TABLE `secado` (
  `producto_secado` varchar(40) NOT NULL,
  `numero_latas` bigint(20) NOT NULL,
  `fecha_secado` date NOT NULL,
  `tipo_usuario` varchar(40) NOT NULL,
  `observaciones_secado` varchar(40) NOT NULL,
  `humedad_secado` varchar(40) NOT NULL,
  `codigo_secado` varchar(40) NOT NULL,
  `cedula_secado` bigint(20) NOT NULL,
  `municipio_secado` varchar(40) NOT NULL,
  `tiposecado_resultado` varchar(40) NOT NULL,
  `numero` bigint(20) NOT NULL,
  `nombre_secado` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `secado`
--

INSERT INTO `secado` (`producto_secado`, `numero_latas`, `fecha_secado`, `tipo_usuario`, `observaciones_secado`, `humedad_secado`, `codigo_secado`, `cedula_secado`, `municipio_secado`, `tiposecado_resultado`, `numero`, `nombre_secado`) VALUES
('cafe mojado', 20, '2022-08-31', 'estandar', '', 'mojado', 'SEC-AC - 2022-08-31 1', 34234234, 'codazzi', 'patio', 33, 'adriana'),
('cafe mojado', 35, '2022-09-08', 'estandar', '', 'mojado', 'SEC-AC - 2022-09-08 2', 234234, 'codazzi', 'patio', 34, 'keterine'),
('cafe mojado', 46, '2022-09-09', 'estandar', '', 'mojado', 'SEC-AC - 2022-09-09 2', 234234, 'codazzi', 'patio', 35, 'keterine'),
('cafe mojado', 10, '2022-08-31', 'estandar', '', 'mojado', 'SEC-VP - 2022-08-31 1', 34234234, 'valledupar', 'patio', 32, 'adriana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secadora`
--

CREATE TABLE `secadora` (
  `codigo_secadora` bigint(20) NOT NULL,
  `codigo_producto` varchar(40) NOT NULL,
  `cantidad_secadora` bigint(20) NOT NULL,
  `lote` varchar(40) NOT NULL,
  `producto` varchar(40) NOT NULL,
  `numero` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `secadora`
--

INSERT INTO `secadora` (`codigo_secadora`, `codigo_producto`, `cantidad_secadora`, `lote`, `producto`, `numero`) VALUES
(148, 'AC 2022-09-08 1', 30, 'LOTE - AC - 2022-09-10 - 1', 'cafe mojado', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `cedula_turno` bigint(20) NOT NULL,
  `municipio_turno` varchar(40) NOT NULL,
  `fecha_turno` date NOT NULL,
  `hora_turno` time NOT NULL,
  `turno` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`cedula_turno`, `municipio_turno`, `fecha_turno`, `hora_turno`, `turno`) VALUES
(234234, 'codazzi', '2022-09-10', '08:23:59', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombres` varchar(40) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `municipio` varchar(40) NOT NULL,
  `cedula` bigint(20) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `clave` varchar(40) NOT NULL,
  `rol` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombres`, `correo`, `telefono`, `municipio`, `cedula`, `usuario`, `clave`, `rol`) VALUES
('pedro', 'maria@gmail.com', 25345, 'codazzi', 23432, '123', '123', 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ahorro`
--
ALTER TABLE `ahorro`
  ADD PRIMARY KEY (`codigo_ahorro`);

--
-- Indices de la tabla `analisisfisico`
--
ALTER TABLE `analisisfisico`
  ADD PRIMARY KEY (`codigo_analisisfisico`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `analisissensorial`
--
ALTER TABLE `analisissensorial`
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `asociados`
--
ALTER TABLE `asociados`
  ADD PRIMARY KEY (`codigo_up`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`marca`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `controlsecadora`
--
ALTER TABLE `controlsecadora`
  ADD PRIMARY KEY (`cod_secadora`);

--
-- Indices de la tabla `fijar`
--
ALTER TABLE `fijar`
  ADD UNIQUE KEY `clave` (`clave`);

--
-- Indices de la tabla `liquidacion`
--
ALTER TABLE `liquidacion`
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `noasociados`
--
ALTER TABLE `noasociados`
  ADD PRIMARY KEY (`cedula_noasociados`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`numero`);

--
-- Indices de la tabla `resultadosecado`
--
ALTER TABLE `resultadosecado`
  ADD PRIMARY KEY (`codigo_resultado`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `secado`
--
ALTER TABLE `secado`
  ADD PRIMARY KEY (`codigo_secado`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `secadora`
--
ALTER TABLE `secadora`
  ADD PRIMARY KEY (`codigo_producto`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `analisisfisico`
--
ALTER TABLE `analisisfisico`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `analisissensorial`
--
ALTER TABLE `analisissensorial`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `asociados`
--
ALTER TABLE `asociados`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT de la tabla `controlsecadora`
--
ALTER TABLE `controlsecadora`
  MODIFY `cod_secadora` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT de la tabla `fijar`
--
ALTER TABLE `fijar`
  MODIFY `clave` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `liquidacion`
--
ALTER TABLE `liquidacion`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT de la tabla `noasociados`
--
ALTER TABLE `noasociados`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `resultadosecado`
--
ALTER TABLE `resultadosecado`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `secado`
--
ALTER TABLE `secado`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `secadora`
--
ALTER TABLE `secadora`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
