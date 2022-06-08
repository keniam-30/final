-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-06-2022 a las 04:05:05
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formularios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condiciones`
--

DROP TABLE IF EXISTS `condiciones`;
CREATE TABLE IF NOT EXISTS `condiciones` (
  `codigo` int(11) NOT NULL,
  `enfermedad` varchar(100) NOT NULL,
  `tiempo` varchar(50) NOT NULL,
  `detalle` varchar(200) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `condiciones`
--

INSERT INTO `condiciones` (`codigo`, `enfermedad`, `tiempo`, `detalle`) VALUES
(1, 'Leucemia', '2 años', 'Mareos muy severos'),
(2, 'Gripe', 'una semana', 'Mucha flema'),
(3, 'Covid 19', ' 6 meses', 'Perdida del gusto'),
(4, 'Hipertencion alta', '3 años', 'Nauseas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiar`
--

DROP TABLE IF EXISTS `familiar`;
CREATE TABLE IF NOT EXISTS `familiar` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `parentezco` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `familiar`
--

INSERT INTO `familiar` (`codigo`, `nombre`, `parentezco`, `edad`, `telefono`) VALUES
(1, 'Miguel Mato', 'Primo', 25, '809-324-8901'),
(2, 'Ester Cabrera', 'Tia', 30, '809-324-8801'),
(3, 'Victor Estevez', 'Padre', 43, '809-324-8802'),
(4, 'Angelina Pascual', 'Hermana', 37, '809-325-8801');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

DROP TABLE IF EXISTS `formulario`;
CREATE TABLE IF NOT EXISTS `formulario` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`codigo`, `nombre`, `sexo`, `edad`, `direccion`, `telefono`) VALUES
(1, 'Miguel Matos', 'Masculino', 25, 'carr 54 calinas del oriente El brisal', '809-324-8901'),
(2, 'Ester Cabrera', 'Femenino', 30, 'calle 22 amazonas', '809-324-8801'),
(3, 'Victor Estevez', 'Masculino', 43, 'calle 4 El almirante', '809-324-8802'),
(4, 'Angelina Pascual', 'Femenino', 37, 'calle 15 Las Palmas', '809-325-8801');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `internamiento`
--

DROP TABLE IF EXISTS `internamiento`;
CREATE TABLE IF NOT EXISTS `internamiento` (
  `codigo` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `centroM` varchar(100) NOT NULL,
  `diagnostico` varchar(200) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `internamiento`
--

INSERT INTO `internamiento` (`codigo`, `fecha`, `centroM`, `diagnostico`) VALUES
(1, '2022-05-04', 'Oncológico', 'Cancer de mama, se recomienda tratamiento inmediato'),
(2, '2022-06-04', 'El integral', 'Gripe, se indica medicamento'),
(3, '2022-07-04', 'Oriental', 'Miopia, se indica lentes nuevos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('keniaR', 'bhgv1452');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
