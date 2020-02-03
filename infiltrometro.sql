-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-02-2020 a las 22:16:24
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
('InfiUnicor', 'V1.01', 'PRUEBA'),
('kimkom', 'v01', 'prototipo');

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
(27, 1, '5555', 1, 4.12),
(28, 2, '5555', 2, 1.12),
(29, 3, '5555', 1, 4.12),
(30, 4, '5555', 2, 1.12),
(31, 5, '5555', 1, 4.12),
(32, 6, '5555', 2, 1.12),
(33, 7, '5555', 1, 4.12),
(34, 8, '5555', 2, 1.12),
(35, 9, '5555', 1, 4.12),
(36, 10, '5555', 2, 1.12),
(37, 11, '5555', 1, 4.12),
(38, 12, '5555', 2, 1.12),
(39, 13, '5555', 1, 4.12),
(40, 14, '5555', 2, 1.12),
(41, 15, '5555', 1, 4.12),
(42, 16, '5555', 2, 1.12),
(43, 17, '5555', 1, 4.12),
(44, 18, '5555', 2, 1.12),
(45, 19, '5555', 1, 4.12),
(46, 20, '5555', 2, 1.12),
(47, 21, '5555', 1, 4.12),
(48, 22, '5555', 2, 1.12),
(49, 23, '5555', 1, 4.12),
(50, 24, '5555', 2, 1.12),
(51, 25, '5555', 1, 4.12),
(52, 26, '5555', 2, 1.12),
(53, 27, '5555', 1, 4.12),
(54, 28, '5555', 2, 1.12),
(55, 29, '5555', 1, 4.12),
(56, 30, '5555', 2, 1.12),
(57, 31, '5555', 1, 4.12),
(58, 32, '5555', 2, 1.12),
(59, 33, '5555', 1, 4.12),
(60, 34, '5555', 2, 1.12),
(61, 35, '5555', 1, 4.12),
(62, 36, '5555', 2, 1.12),
(63, 1, '5555', 1, 4.12),
(64, 2, '5555', 2, 1.12),
(65, 3, '5555', 1, 4.12),
(66, 4, '5555', 2, 1.12),
(67, 5, '5555', 1, 4.12),
(68, 6, '5555', 2, 1.12),
(69, 7, '5555', 1, 4.12),
(70, 8, '5555', 2, 1.12),
(71, 9, '5555', 1, 4.12),
(72, 10, '5555', 2, 1.12),
(73, 11, '5555', 1, 4.12),
(74, 12, '5555', 2, 1.12),
(75, 13, '5555', 1, 4.12),
(76, 14, '5555', 2, 1.12),
(77, 15, '5555', 1, 4.12),
(78, 16, '5555', 2, 1.12),
(79, 17, '5555', 1, 4.12),
(80, 18, '5555', 2, 1.12),
(81, 19, '5555', 1, 4.12),
(82, 20, '5555', 2, 1.12),
(83, 1, '5555', 1, 4.12),
(84, 2, '5555', 2, 1.12),
(85, 3, '5555', 1, 4.12),
(86, 4, '5555', 2, 1.12),
(87, 5, '5555', 1, 4.12),
(88, 6, '5555', 2, 1.12),
(89, 7, '5555', 1, 4.12),
(90, 8, '5555', 2, 1.12),
(91, 9, '5555', 1, 4.12),
(92, 10, '5555', 2, 1.12),
(93, 11, '5555', 1, 4.12),
(94, 12, '5555', 2, 1.12);

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

--
-- Volcado de datos para la tabla `localizacion`
--

INSERT INTO `localizacion` (`Id_Prueba`, `ciudad`, `coordenadas`, `observaciones`) VALUES
('4444', 'Monteria', '23-12-123', 'bn'),
('5555', 'Cerete', '13-134-143', 'ok');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suelo`
--

CREATE TABLE `suelo` (
  `Id_Prueba` varchar(11) NOT NULL,
  `TipoSuelo` varchar(50) NOT NULL,
  `Observaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `suelo`
--

INSERT INTO `suelo` (`Id_Prueba`, `TipoSuelo`, `Observaciones`) VALUES
('4444', 'arenoso', 'ok'),
('5555', 'arenoso', 'ok');

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
(0, 'KKHJHhg', 'camilo@mail.com', 'll', 'InfiUnicor'),
(1062952567, 'CAMILO', 'camilo@mail.com', '999999', 'kimkom'),
(1067924034, 'DANIEL', 'camilo@mail.com', '999', 'kimkom'),
(1067935900, 'KIMBERLY', 'kimberly.gp@hotmail.com', 'kkk', 'InfiUnicor');

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

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
