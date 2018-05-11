-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-05-2018 a las 10:41:51
-- Versión del servidor: 5.7.22-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `webservice_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `IVRC_arbol`
--

CREATE TABLE `IVRC_arbol` (
  `id` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `valor` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `seleccion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `espacios` int(11) NOT NULL,
  `id_campana` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `IVRC_arbol`
--

INSERT INTO `IVRC_arbol` (`id`, `id_sub`, `tipo`, `valor`, `seleccion`, `espacios`, `id_campana`) VALUES
(1, 0, 1, 'Hola , Hablo con', 'user_name', 0, 1),
(2, 0, 2, '', 'si', 0, 1),
(3, 0, 3, '', 'No', 0, 1),
(4, 0, 4, '', '', 0, 1),
(5, 2, 1, 'Tiene una Deuda de', 'B', 3, 1),
(6, 2, 2, '', 'Si', 3, 1),
(7, 2, 3, '', '', 3, 1),
(8, 2, 4, '', '', 3, 1),
(9, 6, 1, '', '', 6, 1),
(10, 6, 2, '', '', 6, 1),
(11, 6, 3, '', '', 6, 1),
(12, 6, 4, '', '', 6, 1),
(13, 3, 1, '', '', 3, 1),
(14, 3, 2, '', '', 3, 1),
(15, 3, 3, '', '', 3, 1),
(16, 3, 4, '', '', 3, 1),
(17, 14, 1, '', '', 6, 1),
(18, 14, 2, '', '', 6, 1),
(19, 14, 3, '', '', 6, 1),
(20, 14, 4, '', '', 6, 1),
(21, 10, 1, '', '', 9, 1),
(22, 10, 1, '', '', 9, 1),
(23, 10, 3, '', '', 9, 1),
(24, 10, 4, '', '', 9, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `IVRC_arbol`
--
ALTER TABLE `IVRC_arbol`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `IVRC_arbol`
--
ALTER TABLE `IVRC_arbol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
