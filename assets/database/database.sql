-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2020 a las 20:26:27
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

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id_articulo`, `imagen`, `descripcion`, `costo`) VALUES
(17, 'assets/img/muestra4.png', 'Capucha', '20.00'),
(19, 'assets/img/rBVaR1vm7b6AGwOGAARAE37rAvc025.jpg', 'Entallado', '28.00'),
(27, 'assets/img/rBVaR1vm7b6AGwOGAARAE37rAvc025.jpg', 'asda', '15.00'),
(29, 'assets/img/51L9jBAqjgL._UX679_.jpg', 'asdas', '81.00'),
(30, 'assets/img/muestra1.png', 'asda', '15.00'),
(31, 'assets/img/muestra1.png', 'assa', '25.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo_genero`
--

CREATE TABLE `articulo_genero` (
  `id_articulo` int(10) NOT NULL,
  `id_genero` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulo_genero`
--

INSERT INTO `articulo_genero` (`id_articulo`, `id_genero`) VALUES
(29, 1),
(30, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo_tipo`
--

CREATE TABLE `articulo_tipo` (
  `id_articulo` int(10) NOT NULL,
  `id_tipo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulo_tipo`
--

INSERT INTO `articulo_tipo` (`id_articulo`, `id_tipo`) VALUES
(29, 1),
(30, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cookie`
--

CREATE TABLE `cookie` (
  `id_cookie` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `server_name` varchar(255) NOT NULL,
  `server_port` varchar(255) NOT NULL,
  `user_cookie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cookie`
--

INSERT INTO `cookie` (`id_cookie`, `ip`, `server_name`, `server_port`, `user_cookie`) VALUES
(1, '1', '1', '1', '1'),
(2, '1', '1', '1', '1'),
(3, '::1', 'localhost', '80', 'GenericUser'),
(4, '::1', 'localhost', '80', 'GenericUser'),
(5, '::1', 'localhost', '80', 'ANGEL'),
(6, '::1', 'localhost', '80', 'JACKSON');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(1) NOT NULL,
  `tipo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_genero`, `tipo`) VALUES
(1, 'Hombre'),
(2, 'Mujer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id_tipo` int(1) NOT NULL,
  `tipo_articulo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id_tipo`, `tipo_articulo`) VALUES
(1, 'Ropa'),
(2, 'Accesorio');

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
-- Volcado de datos para la tabla `usuario_articulo`
--

INSERT INTO `usuario_articulo` (`id_usuario`, `id_articulo`) VALUES
('8888888888', 17),
('8888888888', 19);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id_articulo`);

--
-- Indices de la tabla `articulo_genero`
--
ALTER TABLE `articulo_genero`
  ADD KEY `id_articulo` (`id_articulo`,`id_genero`),
  ADD KEY `id_genero` (`id_genero`);

--
-- Indices de la tabla `articulo_tipo`
--
ALTER TABLE `articulo_tipo`
  ADD KEY `id_articulo` (`id_articulo`,`id_tipo`),
  ADD KEY `id_tipo` (`id_tipo`);

--
-- Indices de la tabla `cookie`
--
ALTER TABLE `cookie`
  ADD PRIMARY KEY (`id_cookie`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD KEY `id_genero` (`id_genero`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD KEY `id_tipo` (`id_tipo`);

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
  MODIFY `id_articulo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `cookie`
--
ALTER TABLE `cookie`
  MODIFY `id_cookie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulo_genero`
--
ALTER TABLE `articulo_genero`
  ADD CONSTRAINT `articulo_genero_ibfk_1` FOREIGN KEY (`id_articulo`) REFERENCES `articulo` (`id_articulo`),
  ADD CONSTRAINT `articulo_genero_ibfk_2` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`);

--
-- Filtros para la tabla `articulo_tipo`
--
ALTER TABLE `articulo_tipo`
  ADD CONSTRAINT `articulo_tipo_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipo` (`id_tipo`),
  ADD CONSTRAINT `articulo_tipo_ibfk_2` FOREIGN KEY (`id_articulo`) REFERENCES `articulo` (`id_articulo`);

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
