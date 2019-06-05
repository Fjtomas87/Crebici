-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-06-2019 a las 20:34:51
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
(36, '2019-06-04', 2, 1, 'reservado', 3),
(37, '2019-06-04', 0, 7, 'reservado', 1),
(38, '2019-06-04', 0, 1, 'reservado', 1),
(39, '2019-06-04', 0, 1, 'reservado', 1),
(40, '2019-06-04', 0, 1, 'reservado', 1),
(41, '2019-06-04', 2, 1, 'reservado', 1),
(42, '2019-06-04', 6, 1, 'reservado', 1),
(43, '2019-06-04', 26, 3, 'cancelado', 1);

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
  `foto` varchar(35) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bicis`
--

INSERT INTO `bicis` (`idBici`, `marca`, `tipo`, `modelo`, `descrip`, `peso`, `pvp`, `foto`) VALUES
(1, 'Madison', 'carretera', 'Vintage', 'Cuadro de acero-Horquilla de acero-Buje delantero acero 32H-Buje trasero 32H-Puente de freno delantero de acero-Puente de freno trasero (coaster brake)-Puños modelo básico-Neumáticos 28 (x 1,75)', '1.00', '10.00', 'imagen/Madison_Vintage.jpg'),
(2, 'BH', 'montaña', 'Beartrack', 'Cuadro Alloy 28\" Cross-\r\nHorquilla Emotion Suspension 28\"-\r\nPotencia Emotion Alloy-\r\nDireccion Integrated-\r\nManetas Cambio Microshift MS.25-\r\nCambio Trasero Shimano TX35 7sp-\r\nDesviador Shimano TZ31-\r\nPedalier Prowheel A641-\r\nBB SET Integrated-\r\nCassete Emotion 7sp (14_28)-\r\nFreno Delantero V_Brake Alloy-\r\nFreno Trasero V_Brake Alloy-\r\nCubiertas Kenda K193-\r\nLlantas Alloy 28\" Double Wall-\r\nBujes Alloy-\r\nSillin Emotion Sport-\r\nCierre SILLIN Alloy-\r\nTija Emotion Alloy 27,2mm-\r\nManillar Emotion Travel-\r\nPuños Emotionsport-\r\nPedales Antislip', '2.00', '20.00', 'imagen/BH_Beartrack.jpg'),
(3, 'BH', 'urbana', 'BeartrackJet', 'CUADRO Alloy-\r\nHORQUILLA Emotion-\r\nPOTENCIA Emotion Alloy-\r\nDIRECCIÓN Integrated-\r\nMANETAS CAMBIO Microshift-\r\nCAMBIO TRASERO Shimano-\r\nDESVIADOR Shimano-\r\nPEDALIER Prowheel-\r\nBB SET Integrated-\r\nCASSETTE Emotion 7sp-\r\nFRENODELANTERO VBrake Alloy-\r\nFRENO TRASERO VBrake Alloy-\r\nCUBIERTAS Kenda K193-\r\nLLANTAS Alloy Double Wall-\r\nBUJES Alloy-\r\nSILLIN Emotion Sport-\r\nCIERRE SILLIN Alloy-\r\nTIJA Emotion Alloy-\r\nMANILLAR Emotion Travel-\r\nPUÑOS Emotionsport-\r\nPEDALES Antislip', '3.00', '30.00', 'imagen/BH_BeartrakJet.jpg'),
(4, 'BH', 'urbana', 'Bolero', 'CUADRO Emotionwave HITen 26\" 1sp-\r\nHORQUILLA Emotion CrMo 26\"-\r\nPOTENCIA Emotion Steel-\r\nDIRECCIÓN 8 Pieces-\r\nPEDALIER Emotion 36T-\r\nBB SET Integrated-\r\nCASSETTE 16T-\r\nFRENO DELANTERO VBrake Alloy-\r\nFRENOTRASERO VBrake Alloy-\r\nCUBIERTAS Kenda K193-\r\nLLANTAS Alloy 26\"-\r\nBUJES Steel-\r\nSILLIN Emotion Comfort-\r\nCIERRE SILLIN Alloy-\r\nTIJA Emotion Steel 25,4mm-\r\nMANILLAR Emotion Travel Steel-\r\nPUÑOS Confort-\r\nPEDALES Antislip-', '4.00', '40.00', 'imagen/BH_bolero.jpg'),
(5, 'BH', 'carretera', 'Gravel', 'CUADRO Gravel X Alloy 7005 Hydroforming-\r\nHORQUILLA Gravel X Carbon 1.5\"-\r\nPOTENCIA BH SL-\r\nDIRECCIÓN BH SL 1.5\"-\r\nMANETAS CAMBIO Shimano 105-\r\nCAMBIO TRASERO Shimano Ultegra RX-\r\nDESVIADOR Shimano 105-\r\nPEDALIER FSA Omega 50/34-\r\nBB SET FSA Mega Exo-\r\nCASSETTE Shimano 105 11/34-\r\nCADENA FSA 11sp-\r\nFRENO DELANTERO Shimano Hydraulic Flat Mount-\r\nFRENO TRASERO Shimano Hydraulic Flat Mount-\r\nSET RUEDAS Shimano RS370-\r\nCUBIERTAS Hutchinson Overide 700x38-\r\nSILLIN Prologo Kappa RS-\r\nCIERRE SILLIN BH-\r\nTIJA BH Lite 27,2x350-\r\nMANILLAR BH Lite Compact-', '5.00', '50.00', 'imagen/BH_Gravel.jpg'),
(6, 'Cube', 'niños', 'Nature', 'Cuadro Aluminium Superlite-\r\nHorquilla SR Suntour- \r\nDirección CUBE H863-\r\nPotencia CUBE Performance Stem Pro-\r\nManillar CUBE Rise Trail Bar-\r\nPuños Natural Fit Tour-\r\nCambios Shimano Deore RD-M592-\r\nDesviador Shimano FD-T3000-\r\nManetas Shimano SL-M3000-\r\nFrenos Shimano BR-MT200-\r\nBielas Shimano FC-M371-\r\nCadena KMC X9-\r\nPiñón Shimano CS-HG200, 11-34T-\r\nBuje delantero Shimano HB-TX505-\r\nBuje trasero Shimano FH-TX505-\r\nLlantas CUBE ZX20-\r\nNeumáticos Schwalbe Smart-\r\nPedales CUBE PP MTB-\r\nSillín Selle Royal Ariel-\r\nTija CUBE Performance Post-\r\nAbrazadera de sillín CUBE Varioclose-\r\nPeso 13,7 kg-', '6.00', '60.00', 'imagen/Cube_Nature.jpg'),
(7, 'BH', 'carretera', 'Miami', 'CUADRO Emotion Wawe Alloy 26\"-\r\nHORQUILLA Emotion CrMo 26\"-\r\nPOTENCIA Emotion Steel-\r\nDIRECCIÓN 8 Pieces-\r\nMANETAS CAMBIO Microshift MS25-\r\nCAMBIO TRASERO Shimano TY21 6sp-\r\nPEDALIER Emotion 42T-\r\nBB SET Integrated-\r\nCASSETTE Emotion 6sp-\r\nFRENO DELANTERO VBrake Alloy-\r\nFRENO TRASERO VBrake Alloy-\r\nCUBIERTAS Kenda K193-\r\nLLANTAS Alloy 26\"-\r\nBUJES Steel-\r\nSILLIN Emotion Comfort-\r\nCIERRE SILLIN Alloy-\r\nTIJA Emotion Steel-\r\nMANILLAR Emotion Travel Steel-\r\nPUÑOS Confort-\r\nPEDALES Antislip-', '7.00', '70.00', 'imagen/BH_Miami.jpg'),
(8, 'Kross', 'montaña', 'Pulso', 'Cuadro Aluminium SuperLite-\r\nPeso 10 kg-\r\nHorquilla Aluminium-\r\nBuje delantero Joy Tech-\r\nBuje trasero Joy Tech-\r\nCubiertas Shwalbe Kojak Race-\r\nLlantas Alexrims-\r\nDesviador delantero Shimano-\r\nCambio trasero Shimano -\r\nFreno delantero Tektro-\r\nManetas de freno Tektro-\r\nFreno trasero Shimano-\r\nCambio Shimano Claris-\r\nBiela Shimano Altus-\r\nEje de pedalier Shimano-\r\nCadena Shimano CNHG40-\r\nCasette Shimano CSHG50-\r\nManillar KROSS Sport -\r\nSillin Velo VL1489-\r\nPuños Kross-\r\nPedales Aluminio/Nylon-', '8.00', '80.00', 'imagen/Kross_Pulso.jpg'),
(9, 'BH', 'electrica', 'AtomX', '', '30.00', '50.00', 'imagen/BH_AtomX.jpg'),
(10, 'BH', 'electrica', 'Xenion', '', '30.00', '50.00', 'imagen/BH_Xenion.jpg'),
(11, 'Kross', 'plegable', 'Flex', '', '30.00', '50.00', 'imagen/Kross_Flex.jpg');

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
(18, 'asdsssssssssssssssss', 'asd@fdsfs', 'asdf', 'asds', 'asds', '74229793F', 'asdasdasdasdsad', 'admin'),
(26, 'asdsad', 'asd1@asd.com', '1234', 'asdasd', 'asdsad', '74229793F', '1sdsdsdsd sdsdsds', 'Cliente');

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
  MODIFY `idA` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `bicis`
--
ALTER TABLE `bicis`
  MODIFY `idBici` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idC` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
