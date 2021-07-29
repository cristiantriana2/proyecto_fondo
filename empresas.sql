-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-07-2021 a las 19:49:32
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_empresas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `nit_empresa` int(5) NOT NULL,
  `nombre_empresa` varchar(50) NOT NULL,
  `descripcion_empresa` varchar(1000) NOT NULL,
  `numero_contacto` varchar(14) NOT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `id_tipo_empresa` int(8) DEFAULT NULL,
  `estado_produccion` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Disparadores `empresas`
--
DELIMITER $$
CREATE TRIGGER `historial_acciones` BEFORE DELETE ON `empresas` FOR EACH ROW BEGIN 
	INSERT INTO log_empresas(descripcion, fecha) VALUES ('se elimino un registro', NOW());
END
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`nit_empresa`),
  ADD KEY `id_tipo_empresa` (`id_tipo_empresa`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `empresas_ibfk_1` FOREIGN KEY (`id_tipo_empresa`) REFERENCES `tipo_empresa` (`id_tipo_empresa`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
