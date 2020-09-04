-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2020 at 05:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lolchamps`
--

-- --------------------------------------------------------

--
-- Table structure for table `champs`
--

CREATE TABLE `champs` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `region` varchar(30) NOT NULL,
  `rol` varchar(15) NOT NULL,
  `clase` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `champs`
--

INSERT INTO `champs` (`id`, `nombre`, `region`, `rol`, `clase`) VALUES
(1, 'Nasus', 'Shurima', 'Peleador', 'Berserker'),
(2, 'Tryndamere', 'Freljord', 'Peleador', 'Espadachin'),
(3, 'Shen', 'Jonia', 'Tanque', 'Espadachin'),
(5, 'Maestro Yi ', 'Jonia', 'Asesino', 'Espadachin'),
(6, 'Sett', 'Jonia', 'Peleador', 'Monje'),
(7, 'Sejuani', 'Freljord', 'Tanque', 'Mangual'),
(8, 'Braum', 'Freljord', 'Soporte', 'Escudero'),
(9, 'Ashe', 'Freljord', 'Tirador', 'Arquera'),
(10, 'Singed', 'Zaun', 'Tanque', 'Mago'),
(12, 'Tristana', 'Bandle', 'Tirador', 'Cañonero');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `champs`
--
ALTER TABLE `champs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `champs`
--
ALTER TABLE `champs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
