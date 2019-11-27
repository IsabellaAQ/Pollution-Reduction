-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2019 a las 16:15:25
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aporte`
--

CREATE TABLE `aporte` (
  `id` int(11) NOT NULL,
  `aporte` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(11) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emisiones`
--

CREATE TABLE `emisiones` (
  `id` int(11) NOT NULL,
  `emision` int(4) NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(11) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `emisiones`
--

INSERT INTO `emisiones` (`id`, `emision`, `fecha`, `hora`) VALUES
(1, 50, '2019-11-21', '08:53:35 am'),
(2, 70, '2019-11-22', '08:53:44 am'),
(3, 75, '2019-11-23', '08:53:54 am'),
(4, 100, '2019-11-24', '08:54:30 am'),
(5, 120, '2019-11-25', '08:54:47 am'),
(6, 140, '2019-11-26', '08:54:57 am'),
(7, 115, '2019-11-27', '08:55:07 am'),
(8, 125, '2019-11-28', '08:55:18 am'),
(9, 100, '2019-11-28', '08:55:30 am'),
(10, 40, '2019-11-29', '10:08:37 am');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `apellido` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `usuario`, `password`) VALUES
(1, 'Isabella', 'Arango', 'IAQ', 'd41d8cd98f00b204e9800998ecf842'),
(3, 'Valentina', 'Arango', 'VAQ', 'd41d8cd98f00b204e9800998ecf842'),
(4, 'Pablo', 'Ledesma', 'PLC', 'd41d8cd98f00b204e9800998ecf842'),
(5, 'Julio', 'Arango', 'JCAR', 'd41d8cd98f00b204e9800998ecf842'),
(7, 'Luz', 'Quintero', 'LEQG', 'd41d8cd98f00b204e9800998ecf842'),
(8, 'Emanuel', 'Vargas', 'EVG', '25f9e794323b453885f5181f1b624d'),
(10, 'Ana1', 'GarcÃ­a', 'AMG', '25f9e794323b453885f5181f1b624d'),
(11, 'Vanesa', 'GuzmÃ¡n', 'VGR', '25f9e794323b453885f5181f1b624d'),
(12, 'Michael', 'GarcÃ­a', 'MCR', '25f9e794323b453885f5181f1b624d'),
(13, 'Fabian', 'Castro', 'FCM', '25f9e794323b453885f5181f1b624d'),
(14, 'Cristin', 'Quintero', 'CDGR', '25f9e794323b453885f5181f1b624d'),
(15, 'Felipe', 'Olaya', 'FOB', '25f9e794323b453885f5181f1b624d'),
(16, 'John', 'Pantoja', 'JSPR', '25f9e794323b453885f5181f1b624d'),
(17, 'Camila', 'Zuluaga', 'MCZS', '25f9e794323b453885f5181f1b624d'),
(18, 'Diego', 'Ledesma', 'DLR', '25f9e794323b453885f5181f1b624d'),
(19, 'SimÃ³n', 'Franco', 'SFS', '25f9e794323b453885f5181f1b624d'),
(20, 'Juan', 'Restrepo', 'JMRS', '25f9e794323b453885f5181f1b624d'),
(21, 'Kelly', 'Palacios', 'KJPR', '25f9e794323b453885f5181f1b624d'),
(22, 'Juan', 'Bustamante', 'JDB', '25f9e794323b453885f5181f1b624d'),
(23, 'Isabella', 'Rivas', 'RIR', '25f9e794323b453885f5181f1b624d'),
(24, 'Claudia', 'Raquejo', 'CMRA', '8fa823c9f54de6b6c59ff9d01b24f1'),
(25, 'Isabella', 'Arango', 'IAQ2', '25f9e794323b453885f5181f1b624d'),
(27, 'Valentina', 'VÃ©lez', 'VVA', 'e10adc3949ba59abbe56e057f20f88'),
(38, 'Ana', 'Gaviria', 'AMG2', 'e10adc3949ba59abbe56e057f20f88'),
(40, 'Isabella', 'Arango', 'NNN', 'e10adc3949ba59abbe56e057f20f88');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `emisiones`
--
ALTER TABLE `emisiones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `emisiones`
--
ALTER TABLE `emisiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
