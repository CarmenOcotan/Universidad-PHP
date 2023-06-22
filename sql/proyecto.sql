-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2023 a las 20:36:09
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
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(160) NOT NULL,
  `dni` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `nacimiento` varchar(150) NOT NULL,
  `contra` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `dni`, `nombre`, `correo`, `direccion`, `nacimiento`, `contra`) VALUES
(1, '', '', 'alumno@alumno', '', '', 'alumno'),
(3, '1234567', 'Carmen', 'liz@gmail.com', 'El Salvador', '2023-06-20', '12345'),
(4, '1233456677', 'Carlos alberto', 'carlos@gmail.com', 'San salvador', '2023-06-24', '123456'),
(5, '1233456677', 'carmen', 'carmen@gmail.com', 'El Salvador', '2023-06-22', '123456'),
(7, '1234567890', 'Harry', 'harry@gmail.com', 'El Salvador', '2023-06-22', '123456'),
(8, '023984894', 'Eliza', 'ele@ele', 'asdljlajsd', '2023-06-17', '12345'),
(12, '1455476', 'Kenvin Gonzalez', 'ken@ken', 'Sonsonate', '2023-06-23', ''),
(13, '123456', 'Enriques', 'enry@enrys', 'San Migue', '2023-06-23', ''),
(15, '123456', 'brayan', 'bryan@brayan', 'La union', '2023-06-06', ''),
(17, '1243', 'Manuela', 'man@man', 'Col. el espino', '2023-06-24', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(160) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
