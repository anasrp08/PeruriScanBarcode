-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2019 at 04:54 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barcode`
--

-- --------------------------------------------------------

--
-- Table structure for table `doublehu`
--

CREATE TABLE `doublehu` (
  `id` int(11) NOT NULL,
  `NoHU` varchar(20) NOT NULL,
  `Nodoos` int(10) NOT NULL,
  `TglScan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Pecahan` varchar(10) NOT NULL,
  `Pallet` varchar(10) NOT NULL,
  `TglKirim` datetime NOT NULL,
  `Tahun` year(4) NOT NULL,
  `Plant` varchar(10) NOT NULL,
  `Status1` varchar(5) NOT NULL,
  `Status2` varchar(5) NOT NULL,
  `Scannedby` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doublehu`
--

INSERT INTO `doublehu` (`id`, `NoHU`, `Nodoos`, `TglScan`, `Pecahan`, `Pallet`, `TglKirim`, `Tahun`, `Plant`, `Status1`, `Status2`, `Scannedby`) VALUES
(1, '1800005689', 0, '2019-03-14 21:24:23', 'Y', 'undefined', '2019-03-18 00:00:00', 2019, '1100', '1', '', 'KhazProdKhir'),
(2, '1800005689', 123, '2019-03-14 21:34:07', 'Y', '33', '2019-03-18 00:00:00', 2019, '1200', '', '1', 'Tasil'),
(3, '1800005689', 67, '2019-03-14 21:35:03', 'Y', '875', '2019-03-18 00:00:00', 2019, '1200', '', '1', 'Tasil'),
(4, '1800005689', 222, '2019-03-14 21:36:25', 'Y', '2198', '2019-03-13 00:00:00', 2019, '1200', '', '1', 'Tasil'),
(5, '1800005689', 987, '2019-03-14 21:37:36', 'Y', '4544', '2019-03-18 00:00:00', 2019, '1200', '', '1', 'Tasil'),
(6, '1800005689', 654, '2019-03-14 21:39:11', 'Y', '968', '2019-03-30 00:00:00', 2019, '1100', '', '1', 'Tasil'),
(7, '1800005689', 1213, '2019-03-18 08:13:53', 'Y', '2332', '2019-03-02 00:00:00', 2019, '1200', '', '1', 'Tasil'),
(8, '1800005689', 1213, '2019-03-18 08:13:53', 'W', '2332', '2019-03-02 00:00:00', 2019, '1100', '', '1', 'Tasil'),
(9, '1800005689', 1213, '2019-03-18 08:13:53', 'W', '2332', '2019-03-02 00:00:00', 2019, '1100', '', '1', 'Tasil');

-- --------------------------------------------------------

--
-- Table structure for table `scan`
--

CREATE TABLE `scan` (
  `id` int(11) NOT NULL,
  `NoHU` varchar(20) NOT NULL,
  `TglScan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Pecahan` varchar(10) NOT NULL,
  `TglKirim` date NOT NULL,
  `Tahun` year(4) NOT NULL,
  `Plant` varchar(10) NOT NULL,
  `Status1` varchar(10) NOT NULL,
  `Status2` varchar(11) NOT NULL,
  `Scannedby` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scan`
--

INSERT INTO `scan` (`id`, `NoHU`, `TglScan`, `Pecahan`, `TglKirim`, `Tahun`, `Plant`, `Status1`, `Status2`, `Scannedby`) VALUES
(123, '1800005689', '2019-03-14 13:52:17', 'X', '2019-03-14', 0000, '1100', '0', '', 'KhazProdKhir'),
(124, '1800005687', '2019-03-14 13:52:58', 'W', '2019-03-14', 1970, '1100', '1', '1', 'Tasil'),
(125, '1800005686', '2019-03-14 13:54:26', 'T', '2019-03-21', 2019, '1100', '', '1', 'Tasil'),
(126, '1800005689', '2019-03-14 20:10:07', 'W', '2019-03-29', 2019, '1200', '1', '', 'KhazProdKhir'),
(127, '1800005689', '2019-03-14 21:01:29', 'Y', '2019-03-22', 2019, '1100', '', '1', 'Tasil'),
(128, '1800005690', '2019-03-14 21:01:29', 'Y', '2019-03-22', 2019, '1100', '', '1', 'Tasil'),
(129, '1800005691', '2019-03-14 21:01:29', 'Y', '2019-03-22', 2019, '1100', '', '1', 'Tasil'),
(130, '1800005692', '2019-03-14 21:01:29', 'T', '2019-03-22', 2019, '1200', '', '1', 'Tasil'),
(131, '1800005693', '2019-03-14 21:01:29', 'S', '2019-03-22', 2019, '1100', '', '1', 'Tasil'),
(132, '1800005694', '2019-03-14 21:01:29', 'W', '2019-03-22', 2019, '1200', '', '1', 'Tasil'),
(133, '1800005695', '2019-03-14 21:01:29', 'U', '2019-03-22', 2019, '1200', '', '1', 'Tasil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doublehu`
--
ALTER TABLE `doublehu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scan`
--
ALTER TABLE `scan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doublehu`
--
ALTER TABLE `doublehu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `scan`
--
ALTER TABLE `scan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
