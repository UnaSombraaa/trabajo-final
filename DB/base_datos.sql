-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2022 a las 23:55:07
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base_datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alta_usuarios`
--

CREATE TABLE `alta_usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contrasena` varchar(32) NOT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alta_usuarios`
--

INSERT INTO `alta_usuarios` (`id_usuarios`, `nombre`, `email`, `contrasena`, `create_time`) VALUES
(133, 'Melisa', 'melisa@gmail.com', '1234', '2022-11-18 03:00:00'),
(134, 'agustin', 'agustin@gmail.com', 'hola', '2022-11-18 03:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_tag`
--

CREATE TABLE `usuario_tag` (
  `id_tag` int(11) NOT NULL,
  `id_usuarios` int(11) NOT NULL,
  `tag` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario_tag`
--

INSERT INTO `usuario_tag` (`id_tag`, `id_usuarios`, `tag`) VALUES
(1, 0, '0'),
(2, 133, '#dfhgdg4545'),
(3, 133, '#63780c2e489ab'),
(4, 133, '#63780c2ef1309'),
(5, 133, '#63780c353720f'),
(6, 134, '#63780cc709bbc');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alta_usuarios`
--
ALTER TABLE `alta_usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- Indices de la tabla `usuario_tag`
--
ALTER TABLE `usuario_tag`
  ADD PRIMARY KEY (`id_tag`,`id_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alta_usuarios`
--
ALTER TABLE `alta_usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT de la tabla `usuario_tag`
--
ALTER TABLE `usuario_tag`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
