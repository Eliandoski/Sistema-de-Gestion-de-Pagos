-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2024 a las 09:26:27
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro_pagos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admi`
--

CREATE TABLE `admi` (
  `id` int(11) NOT NULL,
  `ADMI_USER` varchar(30) NOT NULL,
  `ADMI_CONT` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `admi`
--

INSERT INTO `admi` (`id`, `ADMI_USER`, `ADMI_CONT`) VALUES
(1, 'ADMIN', 'ADMIN2023');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(11) NOT NULL,
  `RESI_NOMB` varchar(20) NOT NULL,
  `PAGO_MESS` varchar(20) NOT NULL,
  `PAGO_MONT` float(4,2) NOT NULL,
  `PAGO_TIPP` varchar(30) NOT NULL,
  `PAGO_TIPO` varchar(25) NOT NULL,
  `PAGO_DESC` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id`, `RESI_NOMB`, `PAGO_MESS`, `PAGO_MONT`, `PAGO_TIPP`, `PAGO_TIPO`, `PAGO_DESC`) VALUES
(11, 'Elian', '2024-01-12', 20.00, 'Pago Completo', 'Efectivo', 'Pago a guardianía de la Julio Estupiñan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `residentes`
--

CREATE TABLE `residentes` (
  `id` int(11) NOT NULL,
  `RESI_NOMB` varchar(80) NOT NULL,
  `RESI_APEL` varchar(50) NOT NULL,
  `RESI_CEDU` varchar(20) DEFAULT NULL,
  `RESI_TELF` varchar(30) NOT NULL,
  `RESI_CASA` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `residentes`
--

INSERT INTO `residentes` (`id`, `RESI_NOMB`, `RESI_APEL`, `RESI_CEDU`, `RESI_TELF`, `RESI_CASA`) VALUES
(1, 'Elian', 'Cifuentes González', '0850703497', '0997065818', 'R66');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `LOGI_NOMB` varchar(25) NOT NULL,
  `LOGI_USER` varchar(25) NOT NULL,
  `LOGI_CONT` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `LOGI_NOMB`, `LOGI_USER`, `LOGI_CONT`) VALUES
(1, '', 'USUARIO', 'USUARIO2023');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admi`
--
ALTER TABLE `admi`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `residentes`
--
ALTER TABLE `residentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admi`
--
ALTER TABLE `admi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `residentes`
--
ALTER TABLE `residentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
