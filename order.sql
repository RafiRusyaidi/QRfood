-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 16, 2024 at 03:35 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `order`
--

-- --------------------------------------------------------

--
-- Table structure for table `incomingorder`
--

CREATE TABLE `incomingorder` (
  `idorder` int NOT NULL,
  `listorder` varchar(9000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `totalprice` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `incomingorder`
--

INSERT INTO `incomingorder` (`idorder`, `listorder`, `totalprice`) VALUES
(9, 'Nasi Goreng Ayam Hatyai, Milo, Set Dinner 1', '0.00'),
(10, 'Nasi Goreng Ayam Hatyai, Kopi', '10.50'),
(11, 'Nasi Goreng Cina Ori, Teh', '8.80'),
(12, 'Nasi Goreng Kampung, Set Dinner 2', '21.50'),
(13, 'Nasi Goreng Ayam Hatyai, Teh', '10.30'),
(14, 'Nasi Goreng Ayam Hatyai, Nasi Goreng Cina Ori', '15.50');

-- --------------------------------------------------------

--
-- Table structure for table `menudrink`
--

CREATE TABLE `menudrink` (
  `iddrink` int NOT NULL,
  `namedrink` varchar(200) NOT NULL,
  `pricedrink` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `menudrink`
--

INSERT INTO `menudrink` (`iddrink`, `namedrink`, `pricedrink`) VALUES
(1, 'Milo', '2.00'),
(2, 'Teh', '2.00'),
(3, 'Kopi', '2.00'),
(4, 'Oren', '3.00'),
(5, 'Tembikai', '3.00');

-- --------------------------------------------------------

--
-- Table structure for table `menufood`
--

CREATE TABLE `menufood` (
  `idfood` int NOT NULL,
  `namefood` varchar(10000) NOT NULL,
  `pricefood` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `menufood`
--

INSERT INTO `menufood` (`idfood`, `namefood`, `pricefood`) VALUES
(1, 'Nasi Goreng Ayam Hatyai', '8.00'),
(2, 'Nasi Goreng Cina Ori', '7.00'),
(3, 'Nasi Goreng Kampung', '7.00'),
(4, 'Nasi Goreng Nenas Udang', '12.00'),
(5, 'Nasi Goreng Thai Udang', '8.00');

-- --------------------------------------------------------

--
-- Table structure for table `menusetdinner`
--

CREATE TABLE `menusetdinner` (
  `iddinner` int NOT NULL,
  `namedinner` varchar(100) NOT NULL,
  `pricedinner` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `menusetdinner`
--

INSERT INTO `menusetdinner` (`iddinner`, `namedinner`, `pricedinner`) VALUES
(1, 'dinner 1', '33.00'),
(2, 'dinner 2', '66.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `incomingorder`
--
ALTER TABLE `incomingorder`
  ADD PRIMARY KEY (`idorder`);

--
-- Indexes for table `menudrink`
--
ALTER TABLE `menudrink`
  ADD PRIMARY KEY (`iddrink`);

--
-- Indexes for table `menufood`
--
ALTER TABLE `menufood`
  ADD PRIMARY KEY (`idfood`);

--
-- Indexes for table `menusetdinner`
--
ALTER TABLE `menusetdinner`
  ADD PRIMARY KEY (`iddinner`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `incomingorder`
--
ALTER TABLE `incomingorder`
  MODIFY `idorder` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `menudrink`
--
ALTER TABLE `menudrink`
  MODIFY `iddrink` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menufood`
--
ALTER TABLE `menufood`
  MODIFY `idfood` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menusetdinner`
--
ALTER TABLE `menusetdinner`
  MODIFY `iddinner` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
