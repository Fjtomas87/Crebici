-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2019 a las 19:19:44
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

create database crebici_bd;
use crebici_bd;
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

CREATE TABLE `alquiler` (
  `idA` int(5) NOT NULL,
  `fechaExp` date NOT NULL,
  `idC` int(11) DEFAULT NULL,
  `idBici` int(5) DEFAULT NULL,
  `estado` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alquiler`
--

INSERT INTO `alquiler` (`idA`, `fechaExp`, `idC`, `idBici`, `estado`) VALUES
(1, '2019-04-30', 1, 1, 'Pendiente'),
(2, '2019-04-30', 1, 2, 'Pendiente'),
(3, '2019-04-30', 2, 3, 'Pendiente'),
(4, '2019-04-30', 2, 4, 'Pendiente'),
(5, '2019-04-30', 3, 5, 'Pendiente'),
(6, '2019-04-30', 3, 6, 'Pendiente'),
(7, '2019-04-30', 4, 7, 'Pendiente'),
(8, '2019-04-30', 4, 8, 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bicis`
--

CREATE TABLE `bicis` (
  `idBici` int(5) NOT NULL,
  `marca` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `descrip` varchar(65) COLLATE utf8_spanish_ci DEFAULT NULL,
  `peso` decimal(4,2) NOT NULL,
  `pvp` decimal(8,2) NOT NULL,
  `foto` varchar(35) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idC` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bicis`
--

INSERT INTO `bicis` (`idBici`, `marca`, `tipo`, `modelo`, `descrip`, `peso`, `pvp`, `foto`, `idC`) VALUES
(1, 'marca1', 'carretera', 'modelo1', 'descripcion de la bici.', '1.00', '10.00', 'imagen/Madison_Vintage.jpg', 1),
(2, 'marca2', 'montaña', 'modelo2', 'descripcion de la bici.', '2.00', '20.00', NULL, 1),
(3, 'marca3', 'urbana', 'modelo3', 'descripcion de la bici.', '3.00', '30.00', NULL, 2),
(4, 'marca4', 'electrica', 'modelo4', 'descripcion de la bici.', '4.00', '40.00', NULL, 2),
(5, 'marca5', 'plegable', 'modelo5', 'descripcion de la bici.', '5.00', '50.00', NULL, 3),
(6, 'marca6', 'niños', 'modelo6', 'descripcion de la bici.', '6.00', '60.00', NULL, 3),
(7, 'marca7', 'carretera', 'modelo7', 'descripcion de la bici.', '7.00', '70.00', NULL, 4),
(8, 'marca8', 'montaña', 'modelo8', 'descripcion de la bici.', '8.00', '80.00', NULL, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idC` int(5) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(35) COLLATE utf8_spanish_ci NOT NULL UNIQUE,
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
(1, 'nombre1', 'email1@gmail.com', 'pass1', 'apellido11', 'apellido21', 'dni1', 'direccion1', 'cliente'),
(2, 'Fco J', 'fjtomas87@gmail.com', '1234', 'Tomas', 'Ferrandez', '74242891H', 'Paseo algo calle 2 p', 'admin'),
(3, 'nombre3', 'email3@gmail.com', 'pass3', 'apellido13', 'apellido23', 'dni3', 'direccion3', 'admin'),
(4, 'nombre4', 'email4@gmail.com', 'pass4', 'apellido14', 'apellido24', 'dni4', 'direccion4', 'admin');

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
  ADD PRIMARY KEY (`idC`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  MODIFY `idA` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `bicis`
--
ALTER TABLE `bicis`
  MODIFY `idBici` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idC` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
