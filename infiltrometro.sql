-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-02-2020 a las 23:43:17
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
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(25) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `Id_Dispositivo` varchar(14) NOT NULL,
  `Versión` varchar(25) NOT NULL,
  `Descripcion` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `Id_Prueba` varchar(23) NOT NULL,
  `TipoSuelo` varchar(50) NOT NULL,
  `Observaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id_Usuario` int(23) NOT NULL,
  `Nombre_Usuario` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Contraseña` varchar(64) NOT NULL,
  `Id_Dispositivo` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
