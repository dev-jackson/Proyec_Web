-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 03-03-2020 a las 03:48:39
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_ropa`
--
CREATE DATABASE IF NOT EXISTS `tienda_ropa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tienda_ropa`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id_articulo` int(10) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `costo` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` varchar(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `tipo_usuario` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `clave`, `tipo_usuario`) VALUES
('1111111111', 'JACKSON', 'SNAHCEZ', '$2y$10$i8qMBc376XT1wdPOssx3OeygyrYMY.o0uZyxtylC9DPL6d.JuPvpe', 'A'),
('2222222222', 'ASD', 'SADAS', '$2y$10$Qo./IRrn63NSo2LpxKAFsee/O1v1lEGQzIC11g0TyGZX7zfNlSNfa', 'C'),
('3333333333', 'ASD', 'SADAS', '$2y$10$pWfhup0CZv/cxoc5YF2cfOTncBuF.8nCUPbXxTA0E579/D3DAXVoK', 'C'),
('4444444444', 'ASD', 'SADAS', '$2y$10$TlbXlSLvcTR.HlZ4URNazOtSngY4kVoyHGEMqD9yP90hGjfz9ReNO', 'C'),
('5555555555', 'ASD', 'SADAS', '$2y$10$KgPDVe/o2mdRWuYaNAtb5OizSakfnFnMJb1VSht4uCKwaqiv.LN96', 'C'),
('8777777776', 'SADASD', 'ASSDAS', '$2y$10$4k2yCFiGCbxaMFznfYTzDeDzzFZBjA7Vu9KUdlmPqHUtuwBq3/LS.', 'C'),
('8777777777', 'SADASD', 'ASSDAS', '$2y$10$9h6VtS9uOcSAEVlr5QswVe4R5sLhPUw3Sm8BFAptenSuS377lFEi6', 'C'),
('8888888888', 'ANGEL', 'SANCHEZ', '$2y$10$oND3pcOv8Zt1BXmhIuQb8ewuNBkfJyVjJFWqPIXkEYlC7rj2OShqa', 'C'),
('9999999992', 'ASD', 'SADAS', '$2y$10$I2MgRnNWmdz8xo0fIQMaJuGSSEj59XQ2x.ULsPOSq2I98y4BUUTOy', 'C'),
('9999999994', 'ASD', 'SADAS', '$2y$10$jY0MKQ1YLkhnsFwDEMkO/uWXcxrGO1dQLz4OluPmzFvRkpYwltd2e', 'C'),
('9999999995', 'ASD', 'SADAS', '$2y$10$bn974PYVpapvAZhnGu7n3ekpqG/puNyAz42LsiTkuatyMd5wH8oZ2', 'C'),
('9999999996', 'ASD', 'SADAS', '$2y$10$E70g3sFPLTxg5ntVTLNULOn7Lc8QXe.M7RnhQamLb013eg2VaRCWG', 'C'),
('9999999997', 'ASD', 'SADAS', '$2y$10$cnXOcuRMqi8eKNdq40Ri/eGCMWQATkPtIEaCSGlddPx3KYR64xYYK', 'C'),
('9999999998', 'ASD', 'SADAS', '$2y$10$NTbI8d5blrD1cqpCLgDZZun.ujIjWpBr6mrhYs58Kzn1Ck5V3aPju', 'C'),
('9999999999', 'ASD', 'SADAS', '$2y$10$y1ZRvWr2neewr4ZsNLPSy.gdRqhq./gu5qGx5GaFflF.Sl7c6Zk.G', 'C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_articulo`
--

CREATE TABLE `usuario_articulo` (
  `id_usuario` varchar(10) NOT NULL,
  `id_articulo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id_articulo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `usuario_articulo`
--
ALTER TABLE `usuario_articulo`
  ADD KEY `id_usuario` (`id_usuario`,`id_articulo`),
  ADD KEY `id_articulo` (`id_articulo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id_articulo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario_articulo`
--
ALTER TABLE `usuario_articulo`
  ADD CONSTRAINT `usuario_articulo_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `usuario_articulo_ibfk_2` FOREIGN KEY (`id_articulo`) REFERENCES `articulo` (`id_articulo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;