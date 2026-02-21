-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Nov 22, 2025 at 04:33 AM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sio6`
--

-- --------------------------------------------------------

--
-- Table structure for table `ShirtTypes`
--

CREATE TABLE IF NOT EXISTS `ShirtTypes` (
  `ShirtTypeID` int(11) NOT NULL,
  `ShirtTypeCode` varchar(255) NOT NULL,
  `ShirtTypeName` varchar(255) NOT NULL,
  `ShirtAisle` int(11) NOT NULL DEFAULT '0',
  `DateTimeCreated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `DateTimeUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ShirtTypes`
--

INSERT INTO `ShirtTypes` (`ShirtTypeID`, `ShirtTypeCode`, `ShirtTypeName`, `ShirtAisle`, `DateTimeCreated`, `DateTimeUpdated`) VALUES
(4, 'Test Four', 'Test Four', 9, '2025-11-17 16:13:39', '2025-11-17 16:13:39'),
(100, 'FL', 'Flannel Shirt', 2, '2025-10-16 20:44:58', '2025-10-30 18:24:14'),
(120, 'Test', 'Limited Edition', 3, '2025-10-30 16:41:48', '2025-10-30 16:41:48'),
(170, 'CAM', 'Calm', 6, '2025-11-22 03:58:41', '2025-11-22 03:58:41'),
(200, 'CR', 'Crew Neck Shirt', 8, '2025-10-16 20:45:04', '2025-10-30 18:25:46'),
(300, 'PO', 'Polo Shirt', 4, '2025-10-30 18:28:49', '2025-10-30 18:28:49'),
(400, 'TST', 'FItted ', 4, '2025-10-31 19:00:55', '2025-10-31 19:00:55'),
(500, 'SWT', 'Sweater', 5, '2025-10-17 18:09:31', '2025-10-17 18:09:31'),
(600, 'HOW', 'WHYNOT', 7, '2025-11-20 19:04:58', '2025-11-20 19:04:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ShirtTypes`
--
ALTER TABLE `ShirtTypes`
 ADD PRIMARY KEY (`ShirtTypeID`), ADD UNIQUE KEY `ShirtTypeCode` (`ShirtTypeCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
