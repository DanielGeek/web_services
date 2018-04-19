-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-04-2018 a las 22:33:29
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Estructura de tabla para la tabla `campana`
--

CREATE TABLE `campana` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `campana_name` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `campana_base` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `campana_saludo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `campana_despedida` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `correo_name` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `user_type` enum('master','user') COLLATE utf8_spanish_ci NOT NULL,
  `user_status` enum('Active','Inactive') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `correo_name`, `user_password`, `user_name`, `user_type`, `user_status`) VALUES
(1, 'daniel@gmail.com', '$2y$10$72Z8JxI90EQ7L0Hu1BUU1.u2RlSgDQfYhmn9X0/iKXCS9JXL6wpEe', 'Daniel Angel', 'user', 'Inactive'),
(3, 'luis@gmail.com', '$2y$10$72Z8JxI90EQ7L0Hu1BUU1.u2RlSgDQfYhmn9X0/iKXCS9JXL6wpEe', 'Luis Ponce', 'master', 'Active'),
(4, 'juan@gmail.com', '$2y$10$72Z8JxI90EQ7L0Hu1BUU1.u2RlSgDQfYhmn9X0/iKXCS9JXL6wpEe', 'Juan Martinez', 'user', 'Active'),
(11, 'admin@gmail.com', '$2y$10$72Z8JxI90EQ7L0Hu1BUU1.u2RlSgDQfYhmn9X0/iKXCS9JXL6wpEe', 'Administrador', 'master', 'Active'),
(14, 'user@gmail.com', '$2y$10$72Z8JxI90EQ7L0Hu1BUU1.u2RlSgDQfYhmn9X0/iKXCS9JXL6wpEe', 'User', 'master', 'Active'),
(15, 'prueba2@gmail.com', '$2y$10$72Z8JxI90EQ7L0Hu1BUU1.u2RlSgDQfYhmn9X0/iKXCS9JXL6wpEe', 'Prueba 2', 'master', 'Active'),
(16, 'prueba10@gmailgmail.com', '$2y$10$72Z8JxI90EQ7L0Hu1BUU1.u2RlSgDQfYhmn9X0/iKXCS9JXL6wpEe', 'Prueba 10', 'master', 'Active'),
(20, 'pruebanueva@gmail.com', '$2y$10$72Z8JxI90EQ7L0Hu1BUU1.u2RlSgDQfYhmn9X0/iKXCS9JXL6wpEe', 'Prueba Nueva', 'master', 'Active');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `campana`
--
ALTER TABLE `campana`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `campana`
--
ALTER TABLE `campana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
