-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2023 a las 07:55:18
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clientes_d`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deudores`
--

CREATE TABLE `deudores` (
  `id` int(200) NOT NULL,
  `N_C` varchar(250) NOT NULL,
  `D_C` varchar(250) NOT NULL,
  `NT` varchar(30) NOT NULL,
  `MONTO` varchar(30) NOT NULL,
  `F_I` date NOT NULL,
  `F_F` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `deudores`
--

INSERT INTO `deudores` (`id`, `N_C`, `D_C`, `NT`, `MONTO`, `F_I`, `F_F`) VALUES
(1, 'JESUS EDELMAR GARCIA DEL ANGEL', 'CALLE 20 DE NOVIEMBRE,#5,VILLA ALTA, TEPETITLA DE LARDIZABAL, TLAXCALA.', '248593695', '34000', '0000-00-00', '0000-00-00'),
(2, 'JESUS ', 'Tlaxcala #27', '2485936952', '34000', '2023-12-12', '2023-12-30'),
(3, 'Hector sambrano ramirez', 'Capula,#10, Tlaxcala', '2467834567', '200', '2023-12-01', '2023-12-15'),
(5, 'Monserrat perez reyes ', 'Huejutla,#24,Tlaxcal', '2485965784', '450', '2023-12-12', '2024-01-02'),
(6, 'Juan Pérez', 'Calle Falsa 123, Ciudad, Tlaxcala', '555-1234', '$50.00', '2023-12-01', '2023-12-15'),
(7, 'YENI ', 'VILLA   ALTA ', '246868682682', '200', '2023-12-15', '2023-12-30'),
(8, 'Erick rosas ', 'VILLA   ALTA ', '2485936952', '300', '2023-12-15', '2023-12-30'),
(9, ' María García', 'Av. Imaginaria 456, Pueblo, Tlaxcala', ' 555-5678', ' $75.00', '2023-12-01', '2023-12-15'),
(10, 'Alejandro Rodríguez', 'Colonia Irreal 789, Villa, Tlaxcala', '555-9012', '$60.00', '2023-12-01', '2023-12-15'),
(11, ' Laura Hernández', 'Calle Inexistente 321, Ciudad, Tlaxcala ', '555-3456', '$45.00', '2023-12-01', '2023-12-15'),
(12, 'Carlos Sánchez', 'Av. Imaginaria 654, Pueblo, Tlaxcala', '555-7890', '$55.00', '2023-12-01', '2023-12-15'),
(13, 'Gabriela Mendoza', 'Calle de los Sueños 789, Ciudad, Tlaxcala', '555-2345', '$70.00', '2023-12-01', '2023-12-15'),
(14, 'Roberto Martínez', ' Av. de la Imaginación 123, Pueblo, Tlaxcala', '555-6789', '$65.00', '2023-12-01', '2023-12-15'),
(15, 'Ana Castro', 'Colonia Irreal 456, Villa, Tlaxcala', '555-0123', '$80.00', '2023-12-01', '2023-12-15'),
(16, 'Javier Ramírez', 'Calle Inexistente 987, Ciudad, Tlaxcala', '555-3456', '$55.00', '2023-12-01', '2023-12-15'),
(17, 'Isabel Ortega', 'Av. de los Sueños 567, Pueblo, Tlaxcala', '555-7890', '$90.00', '2023-12-01', '2023-12-15'),
(18, 'Ricardo González', 'Calle de las Maravillas 234, Ciudad, Tlaxcala', '555-4567', '$75.00', '2023-12-01', '2023-12-15'),
(19, 'Adriana Vargas', 'Av. Irreal 876, Pueblo, Tlaxcala', '555-8901', '$60.00', '2023-12-01', '2023-12-15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `deudores`
--
ALTER TABLE `deudores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `deudores`
--
ALTER TABLE `deudores`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
