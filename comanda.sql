-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 07, 2023 at 12:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comanda`
--

-- --------------------------------------------------------

--
-- Table structure for table `empleado`
--

CREATE TABLE `empleado` (
  `id` int(11) NOT NULL,
  `rol` enum('Bartender','Cervecero','Cocinero','Mozo') NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `diponible` tinyint(4) NOT NULL,
  `estado` enum('Presente','Ausente') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `encuesta`
--

CREATE TABLE `encuesta` (
  `idMesa` int(11) NOT NULL,
  `nombreCliente` varchar(100) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `puntuacionMesa` int(11) NOT NULL,
  `puntuacionMozo` int(11) NOT NULL,
  `puntuacionCocinero` int(11) NOT NULL,
  `puntuacionRestaurant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mesa`
--

CREATE TABLE `mesa` (
  `id` int(11) NOT NULL,
  `idPedido` int(11) NOT NULL,
  `idMozo` int(11) NOT NULL,
  `estado` enum('Esperando','Comiendo','Pagando','Cerrado') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pedido`
--

CREATE TABLE `pedido` (
  `id` varchar(5) NOT NULL,
  `nombreCliente` varchar(200) NOT NULL,
  `totalPrecio` decimal(10,0) NOT NULL,
  `estado` enum('Preparacion','Cancelado','Entregado') NOT NULL,
  `tiempoEstimado` int(11) NOT NULL,
  `numeroMesa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pedido`
--

INSERT INTO `pedido` (`id`, `nombreCliente`, `totalPrecio`, `estado`, `tiempoEstimado`, `numeroMesa`) VALUES
('ge9w5', 'Julian', 4545, 'Preparacion', 10, 4),
('q5cps', 'Julian', 4545, 'Preparacion', 10, 4),
('saog5', 'Julian', 4545, 'Preparacion', 10, 4),
('ufb7f', 'Julian', 4545, 'Preparacion', 10, 4),
('w1p6u', 'Julian', 4545, 'Preparacion', 10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` float NOT NULL,
  `tipo` enum('Bartender','Cervecero','Cocinero') NOT NULL,
  `tiempo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `precio`, `tipo`, `tiempo`) VALUES
(1, 'Pizza', 2000, '', 15),
(2, 'Pizza', 2000, 'Cocinero', 15),
(3, 'Pizza', 2000, 'Cocinero', 15),
(4, 'Pizza', 2000, 'Cocinero', 15);

-- --------------------------------------------------------

--
-- Table structure for table `productossolicitados`
--

CREATE TABLE `productossolicitados` (
  `id` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `idPedido` int(11) NOT NULL,
  `estado` enum('Realizado','Pendiente','EnProceso') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`idMesa`);

--
-- Indexes for table `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productossolicitados`
--
ALTER TABLE `productossolicitados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `idMesa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mesa`
--
ALTER TABLE `mesa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `productossolicitados`
--
ALTER TABLE `productossolicitados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
