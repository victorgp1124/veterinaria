-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 06:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veterinaria`
--

-- --------------------------------------------------------

--
-- Table structure for table `colaborador`
--

CREATE TABLE `colaborador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `especialidad` varchar(255) NOT NULL,
  `tipo_documento` varchar(255) NOT NULL,
  `documento_identificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `colaborador`
--

INSERT INTO `colaborador` (`id`, `nombre`, `apellido`, `cargo`, `especialidad`, `tipo_documento`, `documento_identificacion`) VALUES
(1, 'pedro', 'gomez', 'veterinario jefe', 'pulgas', 'cc', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `detalle_historia_clinica`
--

CREATE TABLE `detalle_historia_clinica` (
  `id` int(11) NOT NULL,
  `temperatura` varchar(255) NOT NULL,
  `peso` int(20) NOT NULL,
  `frecuencia_cardiaca` int(20) NOT NULL,
  `frecuencia_respiratoria` int(11) NOT NULL,
  `fecha_hora` varchar(255) NOT NULL,
  `alimentacion` varchar(255) NOT NULL,
  `habitad` varchar(255) NOT NULL,
  `observacion` varchar(255) NOT NULL,
  `colaboracior_id` int(11) NOT NULL,
  `historia_clinica_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detalle_historia_clinica`
--

INSERT INTO `detalle_historia_clinica` (`id`, `temperatura`, `peso`, `frecuencia_cardiaca`, `frecuencia_respiratoria`, `fecha_hora`, `alimentacion`, `habitad`, `observacion`, `colaboracior_id`, `historia_clinica_id`) VALUES
(17, 'fddsfds', 1, 1, 1, '14-07-2022 02:55 pm', 'asdasd', 'asdads', 'asdasd', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `historia_clinica`
--

CREATE TABLE `historia_clinica` (
  `id` int(11) NOT NULL,
  `mascota_id` int(11) NOT NULL,
  `fecha_creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `historia_clinica`
--

INSERT INTO `historia_clinica` (`id`, `mascota_id`, `fecha_creacion`) VALUES
(1, 21, '2022-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `mascota`
--

CREATE TABLE `mascota` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `raza` varchar(255) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `sexo` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mascota`
--

INSERT INTO `mascota` (`id`, `nombre`, `raza`, `usuario_id`, `sexo`) VALUES
(21, 'kira', 'pug', 3, 'f');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `tipo_documento` char(255) NOT NULL,
  `documento_identificacion` int(12) NOT NULL,
  `estado` char(255) NOT NULL,
  `sexo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `tipo_documento`, `documento_identificacion`, `estado`, `sexo`) VALUES
(3, 'victor', 'fajardo', 'cc', 12123223, 'no se', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colaborador`
--
ALTER TABLE `colaborador`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detalle_historia_clinica`
--
ALTER TABLE `detalle_historia_clinica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `colaboracior_id` (`colaboracior_id`),
  ADD KEY `historia_clinica_id` (`historia_clinica_id`);

--
-- Indexes for table `historia_clinica`
--
ALTER TABLE `historia_clinica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mascota_id` (`mascota_id`);

--
-- Indexes for table `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colaborador`
--
ALTER TABLE `colaborador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detalle_historia_clinica`
--
ALTER TABLE `detalle_historia_clinica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `historia_clinica`
--
ALTER TABLE `historia_clinica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mascota`
--
ALTER TABLE `mascota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detalle_historia_clinica`
--
ALTER TABLE `detalle_historia_clinica`
  ADD CONSTRAINT `detalle_historia_clinica_ibfk_1` FOREIGN KEY (`historia_clinica_id`) REFERENCES `historia_clinica` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_historia_clinica_ibfk_2` FOREIGN KEY (`colaboracior_id`) REFERENCES `colaborador` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `mascota`
--
ALTER TABLE `mascota`
  ADD CONSTRAINT `mascota_ibfk_2` FOREIGN KEY (`id`) REFERENCES `historia_clinica` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `mascota_ibfk_3` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
