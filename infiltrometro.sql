-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2019 a las 19:51:13
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `infiltrometro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosprueba`
--

CREATE TABLE `datosprueba` (
  `N_Dato` int(11) NOT NULL,
  `Id_Prueba` int(11) NOT NULL,
  `tiempo` int(11) NOT NULL,
  `distancia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historialdatos`
--

CREATE TABLE `historialdatos` (
  `Id` int(11) NOT NULL,
  `N_Dato` int(11) NOT NULL,
  `Id_Prueba` int(11) NOT NULL,
  `tiempo` int(11) NOT NULL,
  `distancia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historialdatos`
--

INSERT INTO `historialdatos` (`Id`, `N_Dato`, `Id_Prueba`, `tiempo`, `distancia`) VALUES
(1, 1, 7777, 1, 4.12),
(2, 2, 7777, 2, 1.12),
(3, 3, 7777, 1, 4.12),
(4, 4, 7777, 2, 1.12),
(5, 5, 7777, 1, 4.12),
(6, 6, 7777, 2, 1.12),
(7, 7, 7777, 1, 4.12),
(8, 8, 7777, 2, 1.12),
(9, 9, 7777, 1, 4.12),
(10, 10, 7777, 2, 1.12),
(11, 11, 7777, 1, 4.12),
(12, 12, 7777, 2, 1.12),
(13, 13, 7777, 1, 4.12),
(14, 14, 7777, 2, 1.12),
(15, 1, 2222, 1, 4.12),
(16, 2, 2222, 2, 1.12),
(17, 3, 2222, 1, 4.12),
(18, 4, 2222, 2, 1.12),
(19, 5, 2222, 1, 4.12),
(20, 6, 2222, 2, 1.12),
(21, 1, 4444, 1, 4.12),
(22, 2, 4444, 2, 1.12),
(23, 3, 4444, 1, 4.12),
(24, 4, 4444, 2, 1.12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localizacion`
--

CREATE TABLE `localizacion` (
  `Id` int(11) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `coordenadas` varchar(50) NOT NULL,
  `observaciones` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `localizacion`
--

INSERT INTO `localizacion` (`Id`, `ciudad`, `coordenadas`, `observaciones`) VALUES
(7777, 'Monteria', 'asdf', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suelo`
--

CREATE TABLE `suelo` (
  `Id` int(11) NOT NULL,
  `TipoSuelo` varchar(50) NOT NULL,
  `Observaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `suelo`
--

INSERT INTO `suelo` (`Id`, `TipoSuelo`, `Observaciones`) VALUES
(7777, 'arenoso', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datosprueba`
--
ALTER TABLE `datosprueba`
  ADD PRIMARY KEY (`N_Dato`);

--
-- Indices de la tabla `historialdatos`
--
ALTER TABLE `historialdatos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `localizacion`
--
ALTER TABLE `localizacion`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `suelo`
--
ALTER TABLE `suelo`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datosprueba`
--
ALTER TABLE `datosprueba`
  MODIFY `N_Dato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `historialdatos`
--
ALTER TABLE `historialdatos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
