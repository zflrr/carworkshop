-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 11:55 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carworkshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `custId` int(6) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `icNo` varchar(15) NOT NULL,
  `telNo` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custId`, `firstName`, `lastname`, `icNo`, `telNo`, `address`) VALUES
(37, 'danial', 'aqil', '', '2121212', 'USA'),
(41, 'zafrie', 'heykal', '010209101531', '0135263424', '118, Jalan Seruling 26, Taman Klang Jaya, 41200 Klang'),
(43, 'ain', 'anuar', '01212121', '1122334455', 'kedah, malaysia'),
(45, 'john', 'doe', '01212121', '112233445566', 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `mainproject`
--

CREATE TABLE `mainproject` (
  `projNo` int(6) NOT NULL,
  `regNum` int(6) NOT NULL,
  `custId` int(6) NOT NULL,
  `mechanicId` int(6) NOT NULL,
  `dateReceive` date NOT NULL,
  `timeReceive` time NOT NULL,
  `dateReturn` date NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mainproject`
--

INSERT INTO `mainproject` (`projNo`, `regNum`, `custId`, `mechanicId`, `dateReceive`, `timeReceive`, `dateReturn`, `comment`) VALUES
(17, 15, 18, 0, '2021-07-06', '08:11:00', '0000-00-00', 'successfull'),
(36, 34, 37, 202102, '2021-07-12', '02:57:00', '2021-07-15', 'successfull'),
(40, 38, 41, 202102, '2021-07-12', '09:36:00', '2021-07-13', 'successful'),
(42, 40, 43, 202109, '2021-07-13', '14:02:00', '2021-07-13', ''),
(44, 42, 45, 202109, '2021-07-14', '14:34:00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `mainservice`
--

CREATE TABLE `mainservice` (
  `maintenanceId` int(6) NOT NULL,
  `projNo` int(6) NOT NULL,
  `serviceId` int(6) NOT NULL,
  `description` varchar(255) NOT NULL,
  `addCost` decimal(10,2) NOT NULL,
  `serviceTotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mainservice`
--

INSERT INTO `mainservice` (`maintenanceId`, `projNo`, `serviceId`, `description`, `addCost`, `serviceTotal`) VALUES
(34, 36, 3, 'add wire', '300.00', '480.00'),
(38, 40, 5, 'Change Oil', '60.00', '60.00'),
(40, 42, 3, 'sparepart tak cukup', '70.00', '250.00'),
(42, 44, 2, 'Change Oil, Add some repair inside car compartment', '212.00', '372.00');

-- --------------------------------------------------------

--
-- Table structure for table `mechanic`
--

CREATE TABLE `mechanic` (
  `mechanicId` int(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `telNo` varchar(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mechanic`
--

INSERT INTO `mechanic` (`mechanicId`, `name`, `telNo`, `username`, `password`) VALUES
(202101, 'admin', '0112345678', 'admin', 'admin'),
(202102, 'zafrie', ' 01122233333', 'zafflurrie', 'z'),
(202109, 'safi', '01122334455', 'safi', 'saf'),
(202112, 'danial', '0135555555', 'danial', 'danial'),
(202114, 'amir', '5544332211', 'amir', 'amir');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serviceId` int(6) NOT NULL,
  `serviceName` varchar(255) NOT NULL,
  `serviceCharges` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceId`, `serviceName`, `serviceCharges`) VALUES
(1, 'Tyre Services', '150.00'),
(2, 'Oil Changing', '160.00'),
(3, 'Engine Services', '180.00'),
(4, 'Monthly Services', '300.00'),
(5, 'Other Services', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `regNum` int(6) NOT NULL,
  `custId` int(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`regNum`, `custId`, `model`, `year`) VALUES
(34, 37, 'proton', 2012),
(38, 41, 'proton', 2021),
(40, 43, 'Proton X70', 2020),
(42, 45, 'ford', 2012);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`custId`);

--
-- Indexes for table `mainproject`
--
ALTER TABLE `mainproject`
  ADD PRIMARY KEY (`projNo`);

--
-- Indexes for table `mainservice`
--
ALTER TABLE `mainservice`
  ADD PRIMARY KEY (`maintenanceId`);

--
-- Indexes for table `mechanic`
--
ALTER TABLE `mechanic`
  ADD PRIMARY KEY (`mechanicId`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serviceId`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`regNum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `custId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `mainproject`
--
ALTER TABLE `mainproject`
  MODIFY `projNo` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `mainservice`
--
ALTER TABLE `mainservice`
  MODIFY `maintenanceId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `mechanic`
--
ALTER TABLE `mechanic`
  MODIFY `mechanicId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202121;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serviceId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `regNum` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
