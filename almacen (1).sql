-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2024 a las 17:23:00
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `almacen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compania`
--

CREATE TABLE `compania` (
  `id` int(30) NOT NULL,
  `nombre` varchar(75) DEFAULT NULL,
  `Edad` int(100) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `VIP` text DEFAULT NULL,
  `Provincia` varchar(20) DEFAULT NULL,
  `Direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `compania`
--

INSERT INTO `compania` (`id`, `nombre`, `Edad`, `Fecha`, `VIP`, `Provincia`, `Direccion`) VALUES
(1, 'andres', 18, '2024-11-05', 'no', 'Madrid', 'dg12828'),
(2, 'VALENTINA', 18, '2024-11-05', 'si', 'Madrid', 'dg12828'),
(3, 'VALENTINA', 18, '2024-11-05', 'si', 'Bilbao', 'dg12828'),
(4, 'duvan', 17, '2024-11-11', 'si', 'Sevilla', 'sdsds'),
(5, 'duvan', 17, '2024-11-11', 'si', 'Sevilla', 'sdsds'),
(9, 'Davidr', 12, '2024-11-04', '', 'Sevilla', 'dsdsd'),
(10, 'Davidrr', 14, '2024-11-04', 'si', 'Sevilla', 'dsdsd'),
(11, 'duvan', 12, '2112-02-12', 'si', 'Sevilla', 'dg17#1212'),
(12, 'duvan', 12, '2112-02-12', 'si', 'Sevilla', 'dg17#1212'),
(13, 'duvan', 12, '2112-02-12', 'si', 'Sevilla', 'dg17#1212');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'andres', '$2y$10$wMsIzcJmng6Y3kldmPYbqep5xurhk2JoMaxR9x9KQ9rEeFXrsfxfC'),
(2, 'duvan', '$2y$10$DM1tcJuqIgP9pvp2h7rp0uVLIhrpZEBmHpfmlC6zrfhxHxv3ge/rm'),
(3, 'anrex', '$2y$10$0CfG5q2mNPE/LDRDKC1Dgu1MuLtO4tM1/yu1Uu6Q.mLxWxnEevT4.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compania`
--
ALTER TABLE `compania`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compania`
--
ALTER TABLE `compania`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
