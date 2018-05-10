-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 10-05-2018 a las 06:36:16
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
-- Estructura de tabla para la tabla `IVRC_campana`
--

CREATE TABLE `IVRC_campana` (
  `id` int(11) NOT NULL,
  `campana_name` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `IVRC_campana`
--

INSERT INTO `IVRC_campana` (`id`, `campana_name`) VALUES
(1, 'prueba nocturna 2'),
(10, 'campaña media noche 2'),
(11, 'Campa 5 Mar 8 mayo 2018'),
(12, 'Campa 5 Mar 8 mayo 2018'),
(13, 'campaña media noche 3'),
(14, 'campana daniel tipo user normal'),
(15, 'campaña media noche 3 editada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `IVRC_campana_data`
--

CREATE TABLE `IVRC_campana_data` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `rut` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `user_telefono` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `user_deuda` decimal(10,0) NOT NULL,
  `id_campana` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `IVRC_campana_data`
--

INSERT INTO `IVRC_campana_data` (`id`, `id_user`, `rut`, `user_name`, `user_telefono`, `user_deuda`, `id_campana`) VALUES
(159, 1, 15434708, 'Luis Ponce', '946922776', '200000', 1),
(160, 3, 16693834, 'Joselin Rodriguez', '965618955', '150000', 1),
(164, 3, 15434708, 'Luis Ponce', '946922776', '200000', 10),
(165, 1, 16693834, 'Joselin Rodriguez', '965618955', '150000', 10),
(167, 1, 20147586, 'Daniel Barreto 3', '+50 04246504181', '4005021', 12),
(168, 3, 15434708, 'Luis Ponce', '946922776', '200000', 13),
(169, 3, 16693834, 'Joselin Rodriguez', '965618955', '150000', 13),
(170, 1, 15434708, 'Luis Ponce', '946922776', '200000', 14),
(171, 1, 16693834, 'Joselin Rodriguez', '965618955', '150000', 14),
(172, 3, 15434708, 'Luis Ponce', '946922776', '200000', 15),
(173, 4, 16693834, 'Joselin Rodriguez', '965618955', '150000', 15);

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
  `estatus` enum('Activo','Inactivo') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `correo_name`, `user_password`, `user_name`, `user_type`, `estatus`) VALUES
(1, 'daniel@gmail.com', '$2y$10$72Z8JxI90EQ7L0Hu1BUU1.u2RlSgDQfYhmn9X0/iKXCS9JXL6wpEe', 'Daniel Angel', 'user', 'Activo'),
(3, 'luis@gmail.com', '$2y$10$72Z8JxI90EQ7L0Hu1BUU1.u2RlSgDQfYhmn9X0/iKXCS9JXL6wpEe', 'Luis Ponce', 'master', 'Activo'),
(4, 'juan@gmail.com', '$2y$10$72Z8JxI90EQ7L0Hu1BUU1.u2RlSgDQfYhmn9X0/iKXCS9JXL6wpEe', 'Juan Martinez', 'user', 'Inactivo'),
(11, 'admin@gmail.com', '$2y$10$72Z8JxI90EQ7L0Hu1BUU1.u2RlSgDQfYhmn9X0/iKXCS9JXL6wpEe', 'Administrador', 'master', 'Inactivo'),
(14, 'user@gmail.com', '$2y$10$72Z8JxI90EQ7L0Hu1BUU1.u2RlSgDQfYhmn9X0/iKXCS9JXL6wpEe', 'User', 'user', 'Inactivo'),
(15, 'prueba2@gmail.com', '$2y$10$72Z8JxI90EQ7L0Hu1BUU1.u2RlSgDQfYhmn9X0/iKXCS9JXL6wpEe', 'Rebeca', 'master', 'Inactivo'),
(16, 'prueba10@gmailgmail.com', '$2y$10$72Z8JxI90EQ7L0Hu1BUU1.u2RlSgDQfYhmn9X0/iKXCS9JXL6wpEe', 'Mario', 'master', 'Inactivo'),
(20, 'pruebanueva@gmail.com', '$2y$10$72Z8JxI90EQ7L0Hu1BUU1.u2RlSgDQfYhmn9X0/iKXCS9JXL6wpEe', 'Jessica', 'master', 'Inactivo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `IVRC_campana`
--
ALTER TABLE `IVRC_campana`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `IVRC_campana_data`
--
ALTER TABLE `IVRC_campana_data`
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
-- AUTO_INCREMENT de la tabla `IVRC_campana`
--
ALTER TABLE `IVRC_campana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `IVRC_campana_data`
--
ALTER TABLE `IVRC_campana_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
