-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2023 a las 16:05:21
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `users_crud_php`
--

-- --------------------------------------------------------
USE users_crud_php;

--
-- Estructura de tabla para la tabla `cars`
--

CREATE TABLE `cars` (
  `id_carro` int(10) NOT NULL,
  `marca` varchar(15) NOT NULL,
  `modelo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_inventario` int(10) NOT NULL,
  `gato` varchar(30) NOT NULL,
  `cruceta` varchar(30) NOT NULL,
  `botiquin` varchar(20) NOT NULL,
  `radio` varchar(30) NOT NULL,
  `observaciones` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reg`
--

CREATE TABLE `reg` (
  `correo` varchar(50) NOT NULL,
  `nombre_usuario` varchar(30) NOT NULL,
  `contrasena` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reg`
--

INSERT INTO `reg` (`correo`, `nombre_usuario`, `contrasena`) VALUES
('alejandrosanchezloaiza@gmail.com', 'Alejo_Loaiza', '1234'),
('alejo5160sanchez@gmail.com', 'Alejo_Loaizaa', '123'),
('alejo5160sanchez@gmail.com', 'sa', 'sa'),
('alejo5160sanchez@gmail.com', 'Alejo_Loaizaaa', '12434'),
('sad@gmail.com', 'aa', '123456'),
('sad@gmail.com', 'sassasas', 'sasasass'),
('sad@gmail.com', 'sassasas', 'sasasass'),
('123', '123', '123'),
('a', 'a', 'a'),
('r', 'r', 'r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revisiones`
--

CREATE TABLE `revisiones` (
  `numero_revision` int(10) NOT NULL,
  `fecha_revision` varchar(15) NOT NULL,
  `descripcion_revision` varchar(50) NOT NULL,
  `tecnico` varchar(50) NOT NULL,
  `tiempo` varchar(20) NOT NULL,
  `valor_revision` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnicos`
--

CREATE TABLE `tecnicos` (
  `cedula_tecnico` int(10) NOT NULL,
  `codigo_tecnico` int(15) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `addres` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `telephone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
