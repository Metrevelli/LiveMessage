-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 02, 2018 at 01:05 AM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.1.23-3+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livemessage`
--

-- --------------------------------------------------------

--
-- Table structure for table `messageData`
--

CREATE TABLE `messageData` (
  `messageID` int(11) NOT NULL,
  `messageCode` varchar(50) NOT NULL,
  `messageBody` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messageData`
--

INSERT INTO `messageData` (`messageID`, `messageCode`, `messageBody`) VALUES
(19, '123', 'dsa'),
(20, '123', 'dsa'),
(21, '123', 'mnmhm'),
(22, '123', 'dsa'),
(23, '123', 'dsa'),
(24, 'Array', 'dsa'),
(25, '1x2O6elvB', 'test'),
(26, '8EKYCCVRm', 'dsa'),
(27, 'Vi8DZozlV', 'dsa'),
(28, 'up8pxpjS0', 'dsaxaxa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messageData`
--
ALTER TABLE `messageData`
  ADD PRIMARY KEY (`messageID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messageData`
--
ALTER TABLE `messageData`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
