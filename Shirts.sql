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
-- Table structure for table `Shirts`
--

CREATE TABLE IF NOT EXISTS `Shirts` (
  `ShirtID` int(11) NOT NULL,
  `ShirtCode` varchar(10) NOT NULL,
  `ShirtName` varchar(255) NOT NULL,
  `ShirtDescription` text NOT NULL,
  `ShirtSeason` varchar(100) NOT NULL,
  `ShirtSize` varchar(100) NOT NULL,
  `ShirtTypeID` int(11) NOT NULL,
  `ShirtWholesalePrice` decimal(10,2) NOT NULL,
  `ShirtListPrice` decimal(10,2) NOT NULL,
  `DateTimeCreated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `DateTimeUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Shirts`
--

INSERT INTO `Shirts` (`ShirtID`, `ShirtCode`, `ShirtName`, `ShirtDescription`, `ShirtSeason`, `ShirtSize`, `ShirtTypeID`, `ShirtWholesalePrice`, `ShirtListPrice`, `DateTimeCreated`, `DateTimeUpdated`) VALUES
(1000, 'FL100', 'Cotton Flannel', 'Black and Orange Limited Edition', 'Fall', 'Large', 100, 39.99, 69.99, '2025-10-17 22:47:00', '2025-10-30 17:36:35'),
(1001, 'FL101', 'Plaid Flannel', 'A plaid-patterned flannel shirt offering warmth and timeless fall style.', 'Winter', 'Medium', 100, 37.50, 65.00, '2025-10-17 22:47:02', '2025-10-17 22:47:02'),
(1002, 'FL102', 'Heavy Flannel Jacket', 'A heavyweight flannel shirt-jacket hybrid designed for extra warmth.', 'Winter', 'Large', 100, 45.00, 79.99, '2025-10-17 22:47:04', '2025-10-17 22:47:04'),
(1003, 'FL103', 'Soft Brushed Flannel', 'Made from brushed cotton for a soft feel, perfect for cool evenings.', 'Fall', 'Small', 100, 35.00, 59.99, '2025-10-17 22:47:07', '2025-10-17 22:47:07'),
(1004, 'FL104', 'Classic Flannel Shirt', 'A traditional flannel shirt with a button-down design and cozy fabric.', 'All-Season', 'Medium', 100, 33.75, 54.99, '2025-10-17 22:47:11', '2025-10-17 22:47:11'),
(1600, 'LE01', 'Limited Edition', 'A shirt made from cotton, ususally worn to regulate body temp while looking stylish', 'Fall', 'Medium', 200, 18.99, 29.99, '2025-10-30 17:13:45', '2025-11-22 04:27:50'),
(1700, 'LE02', 'NJIT Sleeveless', 'An NJIT merchandise for students and ambassadors', 'Fall', 'Large', 300, 19.99, 29.99, '2025-10-31 19:08:41', '2025-10-31 19:21:17'),
(2000, 'CR200', 'Long Sleeve Crew Neck', 'A timeless long sleeve crew neck for layering or casual wear.', 'All-Season', 'Medium', 200, 25.00, 28.00, '2025-10-17 22:47:13', '2025-10-17 22:47:13'),
(2001, 'CR201', 'Classic Crew Tee', 'A soft, breathable crew neck T-shirt ideal for daily comfort.', 'Summer', 'Large', 200, 15.00, 27.00, '2025-10-17 22:47:15', '2025-10-17 22:47:15'),
(2002, 'CR202', 'Fitted Crew Neck', 'A modern, fitted crew neck shirt made from premium stretch cotton.', 'Spring', 'Small', 200, 18.50, 32.99, '2025-10-17 22:47:18', '2025-10-17 22:47:18'),
(2003, 'CR203', 'Thermal Crew Shirt', 'A thermal-lined crew neck shirt designed for cold-weather comfort.', 'Winter', 'Large', 200, 22.00, 38.99, '2025-10-17 22:47:20', '2025-10-17 22:47:20'),
(2004, 'CR204', 'Relaxed Fit Crew', 'A relaxed-fit crew shirt offering comfort and breathable cotton fabric.', 'All-Season', 'Medium', 200, 17.25, 29.99, '2025-10-17 22:47:25', '2025-10-17 22:47:25'),
(3000, 'PO300', 'Short Sleeve Polo', 'A classic polo shirt with a collar and button placket for a smart casual look.', 'All-Season', 'Large', 300, 20.00, 22.00, '2025-10-17 22:47:28', '2025-10-17 22:47:28'),
(3001, 'PO301', 'Cotton Sport Polo', 'A lightweight sport polo made from breathable cotton fabric for active days.', 'Summer', 'Medium', 300, 21.50, 33.99, '2025-10-17 22:47:30', '2025-10-17 22:47:30'),
(3002, 'PO302', 'Premium Polo Shirt', 'This premium cotton polo features a tailored fit and moisture-wicking comfort.', 'Spring', 'Large', 300, 23.75, 39.99, '2025-10-17 22:47:32', '2025-10-17 22:47:32'),
(3003, 'PO303', 'Striped Polo', 'A stylish striped polo shirt ideal for business-casual or everyday wear.', 'All-Season', 'Small', 300, 19.99, 34.50, '2025-10-17 22:47:34', '2025-10-17 22:47:34'),
(3004, 'PO304', 'Performance Polo', 'A moisture-resistant polo designed for comfort and breathability during sports.', 'Summer', 'Medium', 300, 22.25, 36.99, '2025-10-17 22:47:37', '2025-10-17 22:47:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Shirts`
--
ALTER TABLE `Shirts`
 ADD PRIMARY KEY (`ShirtID`), ADD UNIQUE KEY `ShirtCode` (`ShirtCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
