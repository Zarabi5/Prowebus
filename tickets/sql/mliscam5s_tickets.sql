-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 02-09-2023 a las 16:52:41
-- Versión del servidor: 5.7.39
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mliscam5s_tickets`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
    `id_administrador` int(11) NOT NULL,
    `nombre_administrador` varchar(255) DEFAULT NULL,
    `email` varchar(255) DEFAULT NULL,
    `password` varchar(255) DEFAULT NULL,
    `id_area` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
    `id_area` int(11) NOT NULL,
    `nombre_area` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id_area`, `nombre_area`) VALUES
(1, 'Soporte tecnico'),
(2, 'Desarrollo software'),
(3, 'Telecomunicaciones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
    `id_cliente` int(11) NOT NULL,
    `nombre_cliente` varchar(255) DEFAULT NULL,
    `email` varchar(255) DEFAULT NULL,
    `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
    `id_comentario` int(11) NOT NULL,
    `id_ticket` int(11) DEFAULT NULL,
    `comentario` text,
    `fecha_creacion` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE `estatus` (
    `id_estatus` int(11) NOT NULL,
    `nombre_estatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estatus`
--

INSERT INTO `estatus` (`id_estatus`, `nombre_estatus`) VALUES
(1, 'Abierto'),
(2, 'Proceso'),
(3, 'Pausado'),
(4, 'Cerrado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE `nivel` (
    `id_nivel` int(11) NOT NULL,
    `nombre_nivel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`id_nivel`, `nombre_nivel`) VALUES
(1, 'Bajo'),
(2, 'Medio'),
(3, 'Alto'),
(4, 'Urgente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE `ticket` (
    `id_ticket` int(11) NOT NULL,
    `id_cliente` int(11) DEFAULT NULL,
    `id_administrador` int(11) DEFAULT NULL,
    `id_area` int(11) DEFAULT NULL,
    `incidencia` text,
    `id_nivel` int(11) DEFAULT NULL,
    `id_estatus` int(11) DEFAULT NULL,
    `fecha_creacion` datetime DEFAULT CURRENT_TIMESTAMP,
    `fecha_cerrado` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
    ADD PRIMARY KEY (`id_administrador`),
    ADD UNIQUE KEY `email` (`email`),
    ADD KEY `id_area` (`id_area`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
    ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
    ADD PRIMARY KEY (`id_cliente`),
    ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
    ADD PRIMARY KEY (`id_comentario`),
    ADD KEY `id_ticket` (`id_ticket`);

--
-- Indices de la tabla `estatus`
--
ALTER TABLE `estatus`
    ADD PRIMARY KEY (`id_estatus`);

--
-- Indices de la tabla `nivel`
--
ALTER TABLE `nivel`
    ADD PRIMARY KEY (`id_nivel`);

--
-- Indices de la tabla `ticket`
--
ALTER TABLE `ticket`
    ADD PRIMARY KEY (`id_ticket`),
    ADD KEY `id_cliente` (`id_cliente`),
    ADD KEY `id_administrador` (`id_administrador`),
    ADD KEY `id_area` (`id_area`),
    ADD KEY `id_nivel` (`id_nivel`),
    ADD KEY `id_estatus` (`id_estatus`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
    MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
    MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
    MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
    MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estatus`
--
ALTER TABLE `estatus`
    MODIFY `id_estatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `nivel`
--
ALTER TABLE `nivel`
    MODIFY `id_nivel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ticket`
--
ALTER TABLE `ticket`
    MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
    ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`);

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
    ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_ticket`) REFERENCES `ticket` (`id_ticket`);

--
-- Filtros para la tabla `ticket`
--
ALTER TABLE `ticket`
    ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
    ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`id_administrador`) REFERENCES `administrador` (`id_administrador`),
    ADD CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`),
    ADD CONSTRAINT `ticket_ibfk_4` FOREIGN KEY (`id_nivel`) REFERENCES `nivel` (`id_nivel`),
    ADD CONSTRAINT `ticket_ibfk_5` FOREIGN KEY (`id_estatus`) REFERENCES `estatus` (`id_estatus`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;