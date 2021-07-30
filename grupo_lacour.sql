-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-07-2021 a las 20:09:39
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `grupo_lacour`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `rif_tip` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `rif` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `marcas` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `contacto` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `tel_contacto` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `email_contacto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `hora` varchar(12) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `rif_tip`, `rif`, `nombre`, `telefono`, `email`, `direccion`, `marcas`, `estado`, `contacto`, `tel_contacto`, `email_contacto`, `fecha`, `hora`) VALUES
(1, 'J', '12123456-7', 'De la fabrica', '(0424) 123-4567', 'fabrica@gmail.com', 'Las delicias Maracay', 'De la Fabrica', '4', 'Perez Jose', '(0424) 444-1234', 'pjose@gmail.com', '29-07-2021', '04:31:47 pm'),
(2, 'E', '76655543-7', 'corotos', '(0998) 888-8888', 'fabrica@gmail.com', 'Las delicias Maracay', 'De la Fabrica', '2', 'Perez Jose', '(0424) 444-1234', 'pjose@gmail.com', '30-07-2021', '08:13:21 am'),
(3, 'E', '76655543-7', 'corotos', '(0998) 888-8888', 'fabrica@gmail.com', 'Las delicias Maracay', 'De la Fabrica', '2', 'Perez Jose', '(0424) 444-1234', 'pjose@gmail.com', '30-07-2021', '08:14:50 am'),
(4, 'E', '76655543-7', 'corotos', '(0998) 888-8888', 'fabrica@gmail.com', 'Las delicias Maracay', 'De la Fabrica', '2', 'Perez Jose', '(0424) 444-1234', 'pjose@gmail.com', '30-07-2021', '08:15:58 am'),
(5, 'E', '76655543-7', 'corotos', '(0998) 888-8888', 'fabrica@gmail.com', 'Las delicias Maracay', 'De la Fabrica', '2', 'Perez Jose', '(0424) 444-1234', 'pjose@gmail.com', '30-07-2021', '08:16:35 am'),
(6, 'E', '76655543-7', 'corotos', '(0998) 888-8888', 'fabrica@gmail.com', 'Las delicias Maracay', 'De la Fabrica', '2', 'Perez Jose', '(0424) 444-1234', 'pjose@gmail.com', '30-07-2021', '08:17:34 am'),
(7, 'E', '07123456-0', 'Mega Boom', '(1256) 789-1233', 'fabrica@gmail.com', 'Las delicias Maracay', 'Mega Boom', '11', 'Perez Jose', '(0412) 123-4567', 'pjose@gmail.com', '30-07-2021', '09:00:30 am'),
(8, 'E', '07123456-0', 'Mega Boom', '(0424) 123-4567', 'fabrica@gmail.com', 'Las delicias Maracay', 'Mega Boom', '11', 'Perez Jose', '(0412) 123-4567', 'pjose@gmail.com', '30-07-2021', '09:02:09 am'),
(9, 'J', '01234567-7', 'Rotulados Roa', '(0424) 123-4567', 'fabrica@gmail.com', 'Las delicias Maracay', 'Rotulados Roa', '7', 'Perez Jose', '(0424) 444-1234', 'pjose@gmail.com', '30-07-2021', '09:12:50 am'),
(10, 'E', '06123456-7', 'Tortas Mariela', '(0424) 123-4567', 'fabrica@gmail.com', 'Las delicias Maracay', 'Tortas', '7', 'Perez Jose', '(0424) 444-1234', 'pjose@gmail.com', '30-07-2021', '09:22:14 am');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(250) NOT NULL,
  `iso_3166-2` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estado`, `estado`, `iso_3166-2`) VALUES
(1, 'Amazonas', 'VE-X'),
(2, 'Anzoátegui', 'VE-B'),
(3, 'Apure', 'VE-C'),
(4, 'Aragua', 'VE-D'),
(5, 'Barinas', 'VE-E'),
(6, 'Bolívar', 'VE-F'),
(7, 'Carabobo', 'VE-G'),
(8, 'Cojedes', 'VE-H'),
(9, 'Delta Amacuro', 'VE-Y'),
(10, 'Falcón', 'VE-I'),
(11, 'Guárico', 'VE-J'),
(12, 'La Guaira', 'VE-W'),
(13, 'Lara', 'VE-K'),
(14, 'Mérida', 'VE-L'),
(15, 'Miranda', 'VE-M'),
(16, 'Monagas', 'VE-N'),
(17, 'Nueva Esparta', 'VE-O'),
(18, 'Portuguesa', 'VE-P'),
(19, 'Sucre', 'VE-R'),
(20, 'Táchira', 'VE-S'),
(21, 'Trujillo', 'VE-T'),
(22, 'Yaracuy', 'VE-U'),
(23, 'Zulia', 'VE-V'),
(24, 'Distrito Capital', 'VE-A'),
(25, 'Dependencias Federales', 'VE-Z');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id_msj` int(11) NOT NULL,
  `nombre_msj` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `email_msj` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono_msj` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `mensaje` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `hora` varchar(12) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id_msj`, `nombre_msj`, `email_msj`, `telefono_msj`, `mensaje`, `fecha`, `hora`) VALUES
(1, 'Darry A', 'darry.net@gmail.com', '9878687687', 'Con este nuevo formato probando el envio del formulario con fecha y hora actualizada segun la zona horaria de Venezuela', '29-07-2021', '10:08:38 am'),
(2, 'Darry A', 'darry.net@gmail.com', '9878687687', 'Con este nuevo formato probando el envio del formulario con fecha y hora actualizada segun la zona horaria de Venezuela', '29-07-2021', '10:11:31 am'),
(3, 'Darry A 1', 'darry.net@gmail.com', '9878687687', 'Con este nuevo formato probando el envio del formulario con fecha y hora actualizada segun la zona horaria de Venezuela', '29-07-2021', '12:43:06 pm'),
(4, 'Darry A 2', 'darry.net@gmail.com', '9878687687', 'Con este nuevo formato probando el envio del formulario con fecha y hora actualizada segun la zona horaria de Venezuela', '29-07-2021', '02:09:45 pm'),
(5, 'Darry A 3', 'darry.net@gmail.com', '9878687687', 'Con este nuevo formato probando el envio del formulario con fecha y hora actualizada segun la zona horaria de Venezuela', '29-07-2021', '02:40:42 pm'),
(6, 'Darry y', 'darry.net@gmail.com', '52222225222', 'Fgybcd', '30-07-2021', '11:32:14 am');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `id_ord` int(11) NOT NULL,
  `rif_tip` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `rif` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `codigo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `servicio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `hangtags` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `adhesiva` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `empaque` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `hora` varchar(12) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `orden`
--

INSERT INTO `orden` (`id_ord`, `rif_tip`, `rif`, `nombre`, `codigo`, `servicio`, `hangtags`, `adhesiva`, `empaque`, `fecha`, `hora`) VALUES
(1, 'E', '06123456-7', 'Tortas Mariela', '1564788', 'estampado', 'no', 'no', 'curvas', '30-07-2021', '09:22:33 am');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_temp`
--

CREATE TABLE `orden_temp` (
  `id_ord` int(11) NOT NULL,
  `rif_tip` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `rif` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `codigo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `servicio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `hangtags` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `adhesiva` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `empaque` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `hora` varchar(12) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `orden_temp`
--

INSERT INTO `orden_temp` (`id_ord`, `rif_tip`, `rif`, `nombre`, `codigo`, `servicio`, `hangtags`, `adhesiva`, `empaque`, `fecha`, `hora`) VALUES
(1, 'J', '12123456-7', 'De la fabrica', '1564788', 'confeccion', 'si', 'no', 'individual', '30-07-2021', '08:01:01 am'),
(2, 'E', '06123456-7', 'Tortas Mariela', '1564788', 'estampado', 'no', 'no', 'curvas', '30-07-2021', '09:22:33 am');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla_adulto`
--

CREATE TABLE `talla_adulto` (
  `id_ad` int(11) NOT NULL,
  `rif_tip` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `rif` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `cod_diseno` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `ucuad` int(3) NOT NULL,
  `xscuad` int(3) NOT NULL,
  `scuad` int(3) NOT NULL,
  `mcuad` int(3) NOT NULL,
  `lcuad` int(3) NOT NULL,
  `xlcuad` int(3) NOT NULL,
  `xxlcuad` int(3) NOT NULL,
  `3xlcuad` int(3) NOT NULL,
  `4xlcuad` int(3) NOT NULL,
  `ucaad` int(3) NOT NULL,
  `xscaad` int(3) NOT NULL,
  `scaad` int(3) NOT NULL,
  `mcaad` int(3) NOT NULL,
  `lcaad` int(3) NOT NULL,
  `xlcaad` int(3) NOT NULL,
  `xxlcaad` int(3) NOT NULL,
  `3xlcaad` int(3) NOT NULL,
  `4xlcaad` int(3) NOT NULL,
  `total_cant` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `hora` varchar(12) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla_adulto_temp`
--

CREATE TABLE `talla_adulto_temp` (
  `id_ad` int(11) NOT NULL,
  `rif_tip` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `rif` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `cod_diseno` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `ucuad` int(3) NOT NULL,
  `xscuad` int(3) NOT NULL,
  `scuad` int(3) NOT NULL,
  `mcuad` int(3) NOT NULL,
  `lcuad` int(3) NOT NULL,
  `xlcuad` int(3) NOT NULL,
  `xxlcuad` int(3) NOT NULL,
  `3xlcuad` int(3) NOT NULL,
  `4xlcuad` int(3) NOT NULL,
  `ucaad` int(3) NOT NULL,
  `xscaad` int(3) NOT NULL,
  `scaad` int(3) NOT NULL,
  `mcaad` int(3) NOT NULL,
  `lcaad` int(3) NOT NULL,
  `xlcaad` int(3) NOT NULL,
  `xxlcaad` int(3) NOT NULL,
  `3xlcaad` int(3) NOT NULL,
  `4xlcaad` int(3) NOT NULL,
  `total_cant` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `hora` varchar(12) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla_juvenil`
--

CREATE TABLE `talla_juvenil` (
  `id_juv` int(11) NOT NULL,
  `rif_tip` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `rif` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `cod_diseno` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `12cuju` int(3) NOT NULL,
  `14cuju` int(3) NOT NULL,
  `16cuju` int(3) NOT NULL,
  `12caju` int(3) NOT NULL,
  `14caju` int(3) NOT NULL,
  `16aju` int(3) NOT NULL,
  `total_cant` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `hora` varchar(12) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla_juvenil_temp`
--

CREATE TABLE `talla_juvenil_temp` (
  `id_juv` int(11) NOT NULL,
  `rif_tip` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `rif` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `cod_diseno` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `12cuju` int(3) NOT NULL,
  `14cuju` int(3) NOT NULL,
  `16cuju` int(3) NOT NULL,
  `12caju` int(3) NOT NULL,
  `14caju` int(3) NOT NULL,
  `16aju` int(3) NOT NULL,
  `total_cant` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `hora` varchar(12) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tel_contacto` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `email_contacto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `hora` varchar(12) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id_msj`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`id_ord`);

--
-- Indices de la tabla `orden_temp`
--
ALTER TABLE `orden_temp`
  ADD PRIMARY KEY (`id_ord`);

--
-- Indices de la tabla `talla_adulto`
--
ALTER TABLE `talla_adulto`
  ADD PRIMARY KEY (`id_ad`);

--
-- Indices de la tabla `talla_adulto_temp`
--
ALTER TABLE `talla_adulto_temp`
  ADD PRIMARY KEY (`id_ad`);

--
-- Indices de la tabla `talla_juvenil`
--
ALTER TABLE `talla_juvenil`
  ADD PRIMARY KEY (`id_juv`);

--
-- Indices de la tabla `talla_juvenil_temp`
--
ALTER TABLE `talla_juvenil_temp`
  ADD PRIMARY KEY (`id_juv`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id_msj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `id_ord` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `orden_temp`
--
ALTER TABLE `orden_temp`
  MODIFY `id_ord` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `talla_adulto`
--
ALTER TABLE `talla_adulto`
  MODIFY `id_ad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `talla_adulto_temp`
--
ALTER TABLE `talla_adulto_temp`
  MODIFY `id_ad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `talla_juvenil`
--
ALTER TABLE `talla_juvenil`
  MODIFY `id_juv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `talla_juvenil_temp`
--
ALTER TABLE `talla_juvenil_temp`
  MODIFY `id_juv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
