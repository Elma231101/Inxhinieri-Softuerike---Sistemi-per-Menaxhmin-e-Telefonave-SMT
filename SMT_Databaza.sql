-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 01:52 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smt`
--

-- --------------------------------------------------------

--
-- Table structure for table `telefonat_smt`
--

CREATE TABLE `telefonat_smt` (
  `ID` int(11) NOT NULL,
  `ModeliTelefonit_SMT` varchar(255) NOT NULL,
  `SistemiOperativTelefonit_SMT` varchar(255) NOT NULL,
  `HapesiraTelefonit_SMT` varchar(255) NOT NULL,
  `NumriModelitTelefonit_SMT` varchar(255) NOT NULL,
  `NumriSerikTelefonit_SMT` varchar(255) NOT NULL,
  `CmimiTelefonit_SMT` varchar(255) NOT NULL,
  `GarancioniTelefonit_SMT` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `telefonat_smt`
--

INSERT INTO `telefonat_smt` (`ID`, `ModeliTelefonit_SMT`, `SistemiOperativTelefonit_SMT`, `HapesiraTelefonit_SMT`, `NumriModelitTelefonit_SMT`, `NumriSerikTelefonit_SMT`, `CmimiTelefonit_SMT`, `GarancioniTelefonit_SMT`) VALUES
(1, 'iPhone', 'IOS', '128GB', 'MGLN3LL/A', 'G6TF8ME0D80', '600', '24 muaj'),
(2, 'Samsung', 'Android', '64GB', 'SLNG5SS/S', 'H8DR56HDSE', '300', '24 muaj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `telefonat_smt`
--
ALTER TABLE `telefonat_smt`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `telefonat_smt`
--
ALTER TABLE `telefonat_smt`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
