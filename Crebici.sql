-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2019 a las 20:35:34
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crebici_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquiler`
--
create database crebici_bd;
use crebici_bd;

CREATE TABLE `alquiler` (
  `idA` int(5) NOT NULL,
  `fechaIni` date NOT NULL,
  `idC` int(11) DEFAULT NULL,
  `idBici` int(5) DEFAULT NULL,
  `estado` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `dias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alquiler`
--

INSERT INTO `alquiler` (`idA`, `fechaIni`, `idC`, `idBici`, `estado`, `dias`) VALUES
(1, '2019-04-30', 1, 1, 'reservado', 0),
(2, '2019-04-30', 1, 2, 'nopresentado', 0),
(3, '2019-04-30', 2, 3, 'nodevuelto', 0),
(4, '2019-04-30', 2, 4, 'entregado', 0),
(5, '2019-04-30', 3, 5, 'entregado', 0),
(6, '2019-04-30', 3, 6, 'nopresentado', 0),
(7, '2019-04-30', 4, 7, 'devuelto', 0),
(8, '2019-04-30', 4, 8, 'reservado', 0),
(12, '2019-06-06', 2, 1, 'cancelado', 4),
(13, '2019-06-04', 2, 2, 'cancelado', 1),
(14, '2019-06-04', 2, 6, 'cancelado', 4),
(15, '2019-06-04', 2, 4, 'reservado', 1),
(16, '2019-06-04', 2, 6, 'reservado', 1),
(17, '2019-06-04', 2, 2, 'cancelado', 1),
(18, '2019-06-04', 2, 4, 'reservado', 1),
(19, '2019-06-04', 2, 2, 'reservado', 1),
(20, '2019-06-04', 2, 3, 'reservado', 1),
(21, '2019-06-04', 2, 2, 'reservado', 1),
(22, '2019-06-04', 2, 2, 'reservado', 1),
(23, '2019-06-04', 2, 3, 'reservado', 1),
(24, '2019-06-04', 2, 3, 'reservado', 1),
(25, '2019-06-04', 2, 2, 'reservado', 1),
(26, '2019-06-04', 2, 3, 'reservado', 1),
(27, '2019-06-04', 2, 6, 'reservado', 1),
(28, '2019-06-04', 2, 7, 'reservado', 1),
(29, '2019-06-04', 2, 6, 'reservado', 1),
(30, '2019-06-04', 2, 6, 'reservado', 1),
(31, '2019-06-04', 2, 1, 'reservado', 1),
(32, '2019-06-04', 2, 1, 'reservado', 1),
(33, '2019-06-04', 2, 2, 'reservado', 1),
(34, '2019-06-04', 2, 1, 'reservado', 1),
(35, '2019-06-04', 2, 1, 'reservado', 1),
(36, '2019-06-04', 2, 1, 'reservado', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bicis`
--

CREATE TABLE `bicis` (
  `idBici` int(5) NOT NULL,
  `marca` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `descrip` text COLLATE utf8_spanish_ci,
  `peso` decimal(4,2) NOT NULL,
  `pvp` decimal(8,2) NOT NULL,
  `foto` varchar(35) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idC` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bicis`
--

INSERT INTO `bicis` (`idBici`, `marca`, `tipo`, `modelo`, `descrip`, `peso`, `pvp`, `foto`, `idC`) VALUES
(1, 'Madison', 'carretera', 'Vintage', 'Cuadro de acero\r\nHorquilla de acero\r\nBuje delantero acero 32H\r\nBuje trasero Shimano Nexus 32H\r\nPuente de freno delantero de acero\r\nPuente de freno trasero (coaster brake)\r\nPuños VLG 105\r\nNeumáticos 28 \"× 1,75\"\r\nLuces delantera / trasera con pilas', '1.00', '10.00', 'imagen/Madison_Vintage.jpg', 1),
(2, 'BH', 'montaña', 'Beartrack', 'descripcion de la bici.', '2.00', '20.00', 'imagen/BH_Beartrack.jpg', 1),
(3, 'BH', 'urbana', 'BeartrackJet', 'descripcion de la bici.', '3.00', '30.00', 'imagen/BH_BeartrakJet.jpg', 2),
(4, 'BH', 'electrica', 'Bolero', 'descripcion de la bici.', '4.00', '40.00', 'imagen/BH_bolero.jpg', 2),
(5, 'BH', 'plegable', 'Gravel', 'descripcion de la bici.', '5.00', '50.00', 'imagen/BH_Gravel.jpg', 3),
(6, 'Cube', 'niños', 'Nature', 'descripcion de la bici.', '6.00', '60.00', 'imagen/Cube_Nature.jpg', 3),
(7, 'BH', 'carretera', 'Miami', 'descripcion de la bici.', '7.00', '70.00', 'imagen/BH_Miami.jpg', 4),
(8, 'Kross', 'montaña', 'Pulso', 'descripcion de la bici.', '8.00', '80.00', 'imagen/Kross_Pulso.jpg', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idC` int(5) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `apellido1` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido2` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `dni` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tipoUser` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idC`, `nombre`, `email`, `pass`, `apellido1`, `apellido2`, `dni`, `direccion`, `tipoUser`) VALUES
(2, 'Fco J', 'fjtomas87@gmail.com', '1234', 'Tomasd', 'Ferrandez', '74242891H', 'Paseo algo calle 2 p', 'admin'),
(6, 'Felipe', 'asdasd@qweasd.com', '1234', 'Perezs', 'Oviedo', '74229793F', 'C/ dolar esquina cal', 'cliente'),
(7, 'wfxcvxcv', '123123@qwse', '1234', 'qwe', 'qwe', '74242891H', 'qwsadasdd', 'admin'),
(8, 'qwewqsasdasdasdasd', 'qwe@qweqweqwes2', '1234', 'qweqw', 'eqwes', '74242891h', 'qseaseasdasds', 'admin'),
(18, 'asdsssssssssssssssss', 'asd@fdsfs', 'asdf', 'asds', 'asds', '74229793F', 'asdasdasdasdsad', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  ADD PRIMARY KEY (`idA`);

--
-- Indices de la tabla `bicis`
--
ALTER TABLE `bicis`
  ADD PRIMARY KEY (`idBici`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idC`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  MODIFY `idA` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `bicis`
--
ALTER TABLE `bicis`
  MODIFY `idBici` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idC` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
