SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `Crebici`
--
create database crebici_bd;
use crebici_bd;
-- --------------------------------------------------------


CREATE TABLE IF NOT EXISTS `clientes` (
  `idC` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido1` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido2` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `dni` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(20) COLLATE utf8_spanish_ci NOT NULL, 
  PRIMARY KEY(idC)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`nombre`, `apellido1`, `apellido2`, `dni`, `direccion`) VALUES
('nombre1', 'apellido11', 'apellido21', 'dni1', 'direccion1'),
('nombre2', 'apellido12', 'apellido22', 'dni2', 'direccion2'),
('nombre3', 'apellido13', 'apellido23', 'dni3', 'direccion3'),
('nombre4', 'apellido14', 'apellido24', 'dni4', 'direccion4');

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `bicicletas`
--


CREATE TABLE IF NOT EXISTS `bicis` (
  `idBici` int(5) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `descrip` varchar(65) COLLATE utf8_spanish_ci,
  `peso` decimal(4,2) NOT NULL,
  `pvp` decimal(8,2) NOT NULL,
  `foto` varchar(35) COLLATE utf8_spanish_ci,
  `idC` int,
  PRIMARY KEY (idBici),
  foreign key fk_Cli(idC) references clientes(idC)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bicicletas`
--

INSERT INTO `bicis` (`modelo`, `peso`, `descrip`, `pvp`, `idc`) VALUES
('modelo1', 1,'descripcion de la bici.', 10, 1),
('modelo2', 2,'descripcion de la bici.', 20, 1),
('modelo3', 3,'descripcion de la bici.', 30, 2),
('modelo4', 4,'descripcion de la bici.', 40, 2),
('modelo5', 5,'descripcion de la bici.', 50, 3),
('modelo6', 6,'descripcion de la bici.', 60, 3),
('modelo7', 7,'descripcion de la bici.', 70, 4),
('modelo8', 8,'descripcion de la bici.', 80, 4);

-- --------------------------------------------------------


--
-- Estructura de tabla para la tabla `alquiler`
--

CREATE TABLE IF NOT EXISTS `alquiler` (
  `idA` int(5) NOT NULL AUTO_INCREMENT,
  `fechaExp` date NOT NULL,
  `idC` int,
  `idBici` int(5),
  PRIMARY KEY (idA),
  foreign key fk_Clie(idC) references clientes(idC),
  foreign key fk_Bici(idBici) references bicis(idBici)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alquiler`
--

INSERT INTO `alquiler` (`fechaExp`, `idC`, `idBici`) VALUES
('2019-04-30', 1, 1),
('2019-04-30', 1, 2),
('2019-04-30', 2, 3),
('2019-04-30', 2, 4),
('2019-04-30', 3, 5),
('2019-04-30', 3, 6),
('2019-04-30', 4, 7),
('2019-04-30', 4, 8);

