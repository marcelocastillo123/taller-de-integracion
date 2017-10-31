-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2017 a las 16:53:37
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `integracion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_empresa`
--

CREATE TABLE `perfil_empresa` (
  `ID` int(3) NOT NULL,
  `Foto` blob,
  `Nombre` char(20) DEFAULT NULL,
  `Ubicacion` char(20) DEFAULT NULL,
  `Rubro` char(25) DEFAULT NULL,
  `Telefono` int(15) DEFAULT NULL,
  `Correo` char(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfil_empresa`
--

INSERT INTO `perfil_empresa` (`ID`, `Foto`, `Nombre`, `Ubicacion`, `Rubro`, `Telefono`, `Correo`) VALUES
(1, '', 'Lider', 'Temuco', 'Ventas mercaderia', 947535547, 'Lider@gmail.com'),
(2, '', 'Microsoft', 'Santiago', 'Programadores', 912345678, 'Microsoft@gmail.com'),
(3, '', 'Nvidia', 'Concepcion', 'Tarjetas graficas', 912345643, 'Nvidia@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfil_empresa`
--
ALTER TABLE `perfil_empresa`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfil_empresa`
--
ALTER TABLE `perfil_empresa`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
