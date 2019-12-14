-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2019 a las 14:02:00
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
  `Id_Dispositivo` varchar(20) NOT NULL,
  `Id_Prueba` varchar(25) NOT NULL,
  `tiempo` int(11) NOT NULL,
  `distancia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispositivo`
--

CREATE TABLE `dispositivo` (
  `Id_Dispositivo` varchar(11) NOT NULL,
  `Versión` varchar(25) NOT NULL,
  `Descripcion` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dispositivo`
--

INSERT INTO `dispositivo` (`Id_Dispositivo`, `Versión`, `Descripcion`) VALUES
('kimkom', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historialdatos`
--

CREATE TABLE `historialdatos` (
  `Id` int(11) NOT NULL,
  `N_Dato` int(11) NOT NULL,
  `Id_Prueba` varchar(25) NOT NULL,
  `tiempo` int(11) NOT NULL,
  `distancia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historialdatos`
--

INSERT INTO `historialdatos` (`Id`, `N_Dato`, `Id_Prueba`, `tiempo`, `distancia`) VALUES
(1, 1, '4444', 1, 4.12),
(2, 2, '4444', 2, 1.12),
(3, 3, '4444', 1, 4.12),
(4, 4, '4444', 2, 1.12),
(5, 5, '4444', 1, 4.12),
(6, 6, '4444', 2, 1.12),
(7, 7, '4444', 1, 4.12),
(8, 8, '4444', 2, 1.12),
(9, 9, '4444', 1, 4.12),
(10, 10, '4444', 2, 1.12),
(11, 11, '4444', 1, 4.12),
(12, 12, '4444', 2, 1.12),
(13, 13, '4444', 1, 4.12),
(14, 14, '4444', 2, 1.12),
(15, 15, '4444', 1, 4.12),
(16, 16, '4444', 2, 1.12),
(17, 17, '4444', 1, 4.12),
(18, 18, '4444', 2, 1.12),
(19, 19, '4444', 1, 4.12),
(20, 20, '4444', 2, 1.12),
(21, 21, '4444', 1, 4.12),
(22, 22, '4444', 2, 1.12),
(23, 23, '4444', 1, 4.12),
(24, 24, '4444', 2, 1.12),
(25, 25, '4444', 1, 4.12),
(26, 26, '4444', 2, 1.12),
(27, 27, '4444', 1, 4.12),
(28, 28, '4444', 2, 1.12),
(29, 29, '4444', 1, 4.12),
(30, 30, '4444', 2, 1.12),
(31, 31, '4444', 1, 4.12),
(32, 32, '4444', 2, 1.12),
(33, 33, '4444', 1, 4.12),
(34, 34, '4444', 2, 1.12),
(35, 35, '4444', 1, 4.12),
(36, 36, '4444', 2, 1.12),
(37, 37, '4444', 1, 4.12),
(38, 38, '4444', 2, 1.12),
(39, 39, '4444', 1, 4.12),
(40, 40, '4444', 2, 1.12),
(41, 41, '4444', 1, 4.12),
(42, 42, '4444', 2, 1.12),
(43, 43, '4444', 1, 4.12),
(44, 44, '4444', 2, 1.12),
(45, 45, '4444', 1, 4.12),
(46, 46, '4444', 2, 1.12),
(47, 47, '4444', 1, 4.12),
(48, 48, '4444', 2, 1.12),
(49, 49, '4444', 1, 4.12),
(50, 50, '4444', 2, 1.12),
(51, 51, '4444', 1, 4.12),
(52, 52, '4444', 2, 1.12),
(53, 53, '4444', 1, 4.12),
(54, 54, '4444', 2, 1.12),
(55, 55, '4444', 1, 4.12),
(56, 56, '4444', 2, 1.12),
(57, 57, '4444', 1, 4.12),
(58, 58, '4444', 2, 1.12),
(59, 59, '4444', 1, 4.12),
(60, 60, '4444', 2, 1.12),
(61, 61, '4444', 1, 4.12),
(62, 62, '4444', 2, 1.12),
(63, 63, '4444', 1, 4.12),
(64, 64, '4444', 2, 1.12),
(65, 65, '4444', 1, 4.12),
(66, 66, '4444', 2, 1.12),
(67, 67, '4444', 1, 4.12),
(68, 68, '4444', 2, 1.12),
(69, 69, '4444', 1, 4.12),
(70, 70, '4444', 2, 1.12),
(71, 71, '4444', 1, 4.12),
(72, 72, '4444', 2, 1.12),
(73, 73, '4444', 1, 4.12),
(74, 74, '4444', 2, 1.12),
(75, 75, '4444', 1, 4.12),
(76, 76, '4444', 2, 1.12),
(77, 77, '4444', 1, 4.12),
(78, 78, '4444', 2, 1.12),
(79, 79, '4444', 1, 4.12),
(80, 80, '4444', 2, 1.12),
(81, 81, '4444', 1, 4.12),
(82, 82, '4444', 2, 1.12),
(83, 83, '4444', 1, 4.12),
(84, 84, '4444', 2, 1.12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localizacion`
--

CREATE TABLE `localizacion` (
  `Id_Prueba` varchar(11) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `coordenadas` varchar(50) NOT NULL,
  `observaciones` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suelo`
--

CREATE TABLE `suelo` (
  `Id_Prueba` varchar(11) NOT NULL,
  `TipoSuelo` varchar(50) NOT NULL,
  `Observaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id_Usuario` int(11) NOT NULL,
  `Nombre_Usuario` varchar(11) NOT NULL,
  `Correo` varchar(25) NOT NULL,
  `Contraseña` varchar(11) NOT NULL,
  `Id_Dispositivo` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_Usuario`, `Nombre_Usuario`, `Correo`, `Contraseña`, `Id_Dispositivo`) VALUES
(1067935900, 'DANIEL', 'kimberly.gp@hotmail.com', '1234', 'kimkom');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datosprueba`
--
ALTER TABLE `datosprueba`
  ADD PRIMARY KEY (`N_Dato`),
  ADD KEY `Id_Prueba` (`Id_Prueba`),
  ADD KEY `Id_Dispositivo` (`Id_Dispositivo`),
  ADD KEY `Id_Dispositivo_2` (`Id_Dispositivo`);

--
-- Indices de la tabla `dispositivo`
--
ALTER TABLE `dispositivo`
  ADD PRIMARY KEY (`Id_Dispositivo`);

--
-- Indices de la tabla `historialdatos`
--
ALTER TABLE `historialdatos`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Prueba` (`Id_Prueba`);

--
-- Indices de la tabla `localizacion`
--
ALTER TABLE `localizacion`
  ADD PRIMARY KEY (`Id_Prueba`);

--
-- Indices de la tabla `suelo`
--
ALTER TABLE `suelo`
  ADD PRIMARY KEY (`Id_Prueba`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id_Usuario`),
  ADD KEY `Id_Dispositivo` (`Id_Dispositivo`),
  ADD KEY `Id_Dispositivo_2` (`Id_Dispositivo`);

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datosprueba`
--
ALTER TABLE `datosprueba`
  ADD CONSTRAINT `datosprueba_ibfk_1` FOREIGN KEY (`Id_Dispositivo`) REFERENCES `dispositivo` (`Id_Dispositivo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `historialdatos`
--
ALTER TABLE `historialdatos`
  ADD CONSTRAINT `historialdatos_ibfk_1` FOREIGN KEY (`Id_Prueba`) REFERENCES `datosprueba` (`Id_Prueba`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `localizacion`
--
ALTER TABLE `localizacion`
  ADD CONSTRAINT `localizacion_ibfk_1` FOREIGN KEY (`Id_Prueba`) REFERENCES `datosprueba` (`Id_Prueba`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `suelo`
--
ALTER TABLE `suelo`
  ADD CONSTRAINT `suelo_ibfk_1` FOREIGN KEY (`Id_Prueba`) REFERENCES `datosprueba` (`Id_Prueba`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`Id_Dispositivo`) REFERENCES `dispositivo` (`Id_Dispositivo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
