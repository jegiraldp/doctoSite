-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-11-2015 a las 08:50:27
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `giraldoj_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docto_activity`
--

CREATE TABLE IF NOT EXISTS `docto_activity` (
  `id` varchar(100) NOT NULL,
  `idProceso` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `participant` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `gateway` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `docto_activity`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docto_ev`
--

CREATE TABLE IF NOT EXISTS `docto_ev` (
  `codigo` varchar(100) NOT NULL,
  `rm` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `participantes` varchar(100) NOT NULL,
  `actividades` varchar(100) NOT NULL,
  `gateways` varchar(100) NOT NULL,
  `transiciones` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `archivo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `docto_ev`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docto_f2`
--

CREATE TABLE IF NOT EXISTS `docto_f2` (
  `id` int(2) NOT NULL,
  `objetivo` varchar(50) NOT NULL,
  `contexto` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `docto_f2`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docto_participant`
--

CREATE TABLE IF NOT EXISTS `docto_participant` (
  `id` varchar(20) NOT NULL,
  `idProceso` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `docto_participant`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docto_rm`
--

CREATE TABLE IF NOT EXISTS `docto_rm` (
  `codigo` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `participantes` varchar(100) NOT NULL,
  `actividades` varchar(100) NOT NULL,
  `gateways` varchar(100) NOT NULL,
  `transiciones` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `archivo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `docto_rm`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docto_rules`
--

CREATE TABLE IF NOT EXISTS `docto_rules` (
  `id` varchar(100) NOT NULL,
  `idActivity` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `docto_rules`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docto_rv`
--

CREATE TABLE IF NOT EXISTS `docto_rv` (
  `codigo` varchar(100) NOT NULL,
  `rm` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `participantes` varchar(100) NOT NULL,
  `actividades` varchar(100) NOT NULL,
  `gateways` varchar(100) NOT NULL,
  `transiciones` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `archivo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `docto_rv`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docto_transition`
--

CREATE TABLE IF NOT EXISTS `docto_transition` (
  `id` varchar(20) NOT NULL,
  `idProceso` varchar(20) NOT NULL,
  `from` varchar(20) NOT NULL,
  `to` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `prob` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `docto_transition`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
