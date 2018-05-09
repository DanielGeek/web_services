-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-05-2018 a las 06:28:11
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
  `rut` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `user_telefono` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `user_deuda` decimal(10,0) NOT NULL,
  `campana_name` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `campana`
--

INSERT INTO `campana` (`id`, `id_user`, `rut`, `user_name`, `user_telefono`, `user_deuda`, `campana_name`) VALUES
(1, 1, 15434708, 'Luis Ponce', '946922776', '200000', 'Campaña Lunes'),
(2, 3, 16693834, 'Joselin Rodriguez', '965618955', '150000', 'prueba 3'),
(5, 11, 15434708, 'Luis Ponce', '946922776', '200000', 'prueba admin'),
(6, 11, 16693834, 'Joselin Rodriguez', '965618955', '150000', 'prueba admin'),
(9, 3, 15434708, 'Luis Ponce', '946922776', '200000', 'campana noctura 2'),
(10, 3, 16693834, 'Joselin Rodriguez', '965618955', '150000', 'campana noctura 2'),
(11, 3, 15434708, 'Luis Ponce', '946922776', '200000', 'campana nueva 3'),
(13, 3, 15434708, 'Luis Ponce', '946922776', '200000', 'campana viernes 4'),
(14, 3, 16693834, 'Joselin Rodriguez', '965618955', '150000', 'campana viernes 4'),
(15, 3, 15434708, 'Luis Ponce', '946922776', '200000', 'campana viernes 4'),
(16, 3, 16693834, 'Joselin Rodriguez', '965618955', '150000', 'campana viernes 4'),
(17, 3, 15434708, 'Luis Ponce', '946922776', '200000', 'campana viernes 5'),
(18, 3, 16693834, 'Joselin Rodriguez', '965618955', '150000', 'campana viernes 5'),
(19, 3, 15434708, 'Luis Ponce', '946922776', '200000', 'campana viernes 4'),
(20, 3, 16693834, 'Joselin Rodriguez', '965618955', '150000', 'campana viernes 4'),
(21, 3, 15434708, 'Luis Ponce', '946922776', '200000', 'campana viernes 4'),
(22, 3, 16693834, 'Joselin Rodriguez', '965618955', '150000', 'campana viernes 4'),
(23, 3, 15434708, 'Luis Ponce', '946922776', '200000', '123'),
(24, 3, 16693834, 'Joselin Rodriguez', '965618955', '150000', '123'),
(25, 3, 15434708, 'Luis Ponce', '946922776', '200000', 'campana Lun 7'),
(26, 3, 16693834, 'Joselin Rodriguez', '965618955', '150000', 'campana Lun 7'),
(27, 3, 15434708, 'Luis Ponce', '946922776', '200000', 'campana 2 Lun 7'),
(28, 3, 16693834, 'Joselin Rodriguez', '965618955', '150000', 'campana 2 Lun 7'),
(29, 3, 15434708, 'Luis Ponce', '946922776', '200000', 'campana 3 Lunes 7'),
(30, 3, 16693834, 'Joselin Rodriguez', '965618955', '150000', 'campana 3 Lunes 7'),
(31, 3, 15434708, 'Luis Ponce', '946922776', '200000', 'campana 4 Lunes 7'),
(32, 3, 16693834, 'Joselin Rodriguez', '965618955', '150000', 'campana 4 Lunes 7'),
(33, 3, 15434708, 'Luis Ponce', '946922776', '200000', 'campana 5 Lunes 7'),
(34, 3, 16693834, 'Joselin Rodriguez', '965618955', '150000', 'campana 5 Lunes 7'),
(35, 1, 15434708, 'Luis Ponce', '946922776', '200000', 'campana 6 Lunes 7'),
(36, 1, 16693834, 'Joselin Rodriguez', '965618955', '150000', 'campana 6 Lunes 7'),
(37, 1, 15434708, 'Luis Ponce', '946922776', '200000', 'campana 7 Lunes 7'),
(38, 1, 16693834, 'Joselin Rodriguez', '965618955', '150000', 'campana 7 Lunes 7'),
(39, 3, 15434708, 'Luis Ponce', '946922776', '200000', 'campana 8 Lunes 7'),
(40, 3, 16693834, 'Joselin Rodriguez', '965618955', '150000', 'campana 8 Lunes 7'),
(66, 3, 16693834, 'Joselin Rodriguez', '965618955', '150000', 'campana Martes'),
(67, 4, 15434708, 'Luis Ponce', '946922776', '200000', 'campana Jueves '),
(68, 3, 16693834, 'Joselin Rodriguez', '965618955', '150000', 'campana master '),
(69, 20, 2012121212, 'Master usuario', '12312312', '4005021', 'campana admin');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
