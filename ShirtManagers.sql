--Name: Samuel Olagoke
--Date: October 3, 2025
--Course: IT202-003
--Assignment: Phase01
--Email: sio6@njit,edu

-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Oct 03, 2025 at 06:50 PM
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
-- Table structure for table `ShirtManagers`
--

CREATE TABLE IF NOT EXISTS `ShirtManagers` (
`ShirtManagerID` int(11) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `pronouns` varchar(60) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `DateTimeCreated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `DateTimeUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `ShirtManagers`
--

INSERT INTO `ShirtManagers` (`ShirtManagerID`, `emailAddress`, `password`, `pronouns`, `firstName`, `lastName`, `DateTimeCreated`, `DateTimeUpdated`) VALUES
(1, 'Kev@shirtShop.com', '3cdfa761361762ddedc01ea1428db10a92e327325f490f7f34f1b1b91d994f22', 'he/Him', 'Kevin', 'Fudge', '2025-10-01 20:49:12', '2025-10-01 20:49:12'),
(2, 'ZAZ@shirtShop.com', '3cdfa761361762ddedc01ea1428db10a92e327325f490f7f34f1b1b91d994f22', 'he/Him', 'Zach', 'Zaborenko', '2025-10-01 20:50:22', '2025-10-01 20:50:22'),
(3, 'Demide@shirtShop.com', '3cdfa761361762ddedc01ea1428db10a92e327325f490f7f34f1b1b91d994f22', 'she/Her', 'Ademide', 'Johnson', '2025-10-01 20:51:50', '2025-10-01 20:51:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ShirtManagers`
--
ALTER TABLE `ShirtManagers`
 ADD PRIMARY KEY (`ShirtManagerID`), ADD UNIQUE KEY `emailAddress` (`emailAddress`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ShirtManagers`
--
ALTER TABLE `ShirtManagers`
MODIFY `ShirtManagerID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
