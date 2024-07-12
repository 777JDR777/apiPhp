-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2024 a las 09:30:43
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `apirest`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `state` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `state`) VALUES
(1, 'T.V', 'qweqweqweqweqeqeqweqweqweqweqweqweqweqweqweqweqeqeqeqeqweqweqeqweqweqweqweqweqweqweqweqweqw', 0),
(2, 'Mobile', 'asdasdasdasdasdasdasdasdasdasdasdasdasdasdadasdasdadasdasdasdasdasdasdasdasdasdasdasasdasda', 0),
(3, 'Fridge', 'zxczczxczxczxczxczxczxczxczxczxczxczxczxczxczxczxczxczxczxczxczxczxczxczxczxczxczxczxczxczc', 1),
(4, 'Stove', 'vbnvnvbnvbnvbnvbnvbnvbnvbnvbnvbnvbnvbnbvnvbnvbnvbnvbnvbnvbnvbnvbnvbnvbnvbnvbnvbnvbnvbnvbnvbn', 1),
(5, 'Radio', 'asdasdasdadasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdad', 1),
(6, 'laptop', 'bnmbnmbnmbnmbnmbnmbnmbnmbnmbnnmbnmbmbnmbnmbnmbmbnmbnmbmbmbnmbmbnmbnmbnmbmb', 1),
(7, 'pc', 'ryrtyrtyrtyrtyrtyrtyrtyrtyrtyrtyryrtyrtyrtyrtyrtyrtyrtyrtyrtyrtyrtyrtyrtyrtyrtyrtyrtyrtyrtyrttrtyryrrtyrtr', 1),
(8, 'tablet', 'ryrtyrtyrtyrtyrtyrtyrtyrtyrtyrtyryrtyrtyrtyrtyrtyrtyrtyrtyrtyrtyrtyrtyrtyrtyrtyrtyrtyrtyrtyrttrtyryrrtyrtr', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
