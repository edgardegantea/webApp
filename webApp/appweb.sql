-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 09-04-2018 a las 21:44:11
-- Versión del servidor: 5.7.21
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `appweb`
--
CREATE DATABASE IF NOT EXISTS `appweb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `appweb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_facturas`
--

DROP TABLE IF EXISTS `tbl_facturas`;
CREATE TABLE IF NOT EXISTS `tbl_facturas` (
  `id_fact` int(11) NOT NULL AUTO_INCREMENT,
  `fechaHora_fact` datetime NOT NULL,
  `importe_fact` float DEFAULT NULL,
  `observaciones_fact` varchar(255) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `id_vend` int(11) NOT NULL,
  PRIMARY KEY (`id_fact`),
  KEY `id_prod` (`id_prod`),
  KEY `id_vend` (`id_vend`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_productos`
--

DROP TABLE IF EXISTS `tbl_productos`;
CREATE TABLE IF NOT EXISTS `tbl_productos` (
  `id_prod` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_prod` varchar(20) NOT NULL,
  `nombre_prod` varchar(50) NOT NULL,
  `marca_prod` varchar(50) NOT NULL,
  `precio_prod` float NOT NULL,
  `fabricante_prod` varchar(50) NOT NULL,
  `caducidad_prod` datetime NOT NULL,
  `descripcion_prod` text,
  PRIMARY KEY (`id_prod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

DROP TABLE IF EXISTS `tbl_usuarios`;
CREATE TABLE IF NOT EXISTS `tbl_usuarios` (
  `id_us` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_us` varchar(50) NOT NULL,
  `apellidos_us` varchar(100) NOT NULL,
  `email_us` varchar(50) NOT NULL,
  `direccion_us` varchar(200) NOT NULL,
  `usuario_us` varchar(20) NOT NULL,
  `pasworrd_us` varchar(20) NOT NULL,
  PRIMARY KEY (`id_us`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_vendedores`
--

DROP TABLE IF EXISTS `tbl_vendedores`;
CREATE TABLE IF NOT EXISTS `tbl_vendedores` (
  `id_vend` int(11) NOT NULL AUTO_INCREMENT,
  `huella_vend` varchar(10) NOT NULL,
  `nombre_vend` varchar(50) NOT NULL,
  `apellidos_vend` varchar(100) NOT NULL,
  PRIMARY KEY (`id_vend`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_facturas`
--
ALTER TABLE `tbl_facturas`
  ADD CONSTRAINT `tbl_facturas_ibfk_1` FOREIGN KEY (`id_prod`) REFERENCES `tbl_productos` (`id_prod`),
  ADD CONSTRAINT `tbl_facturas_ibfk_2` FOREIGN KEY (`id_vend`) REFERENCES `tbl_vendedores` (`id_vend`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
