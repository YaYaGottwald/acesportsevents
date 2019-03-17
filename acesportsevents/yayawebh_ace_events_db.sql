-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 17, 2019 at 12:00 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yayawebh_ace_events_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `myCName` varchar(50) NOT NULL,
  `myCEmail` varchar(50) NOT NULL,
  `myParticipant` varchar(50) NOT NULL,
  `myQuestion` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `date`, `myCName`, `myCEmail`, `myParticipant`, `myQuestion`) VALUES
(1, '2019-02-21 03:15:07', 'Arlana Gottwald', 'rockygottwald@gmail.com', '', 'hi'),
(2, '2019-02-21 03:18:58', 'Arlana Gottwald', 'rockygottwald@gmail.com', '', 'hi'),
(3, '2019-02-21 05:53:06', 'Arlana Gottwald', 'rockygottwald@gmail.com', '', 'hi'),
(4, '2019-02-21 21:12:37', 'Susan Watson', 'stwatson@pcc.edu', '', 'Can I camp on site?'),
(5, '2019-03-04 20:12:34', 'Arlana Gottwald', 'rockygottwald@gmail.com', 'volunteer', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `myFirstName` varchar(50) NOT NULL,
  `myLastName` varchar(50) NOT NULL,
  `myREmail` varchar(50) NOT NULL,
  `optIn` varchar(50) NOT NULL,
  `validateAge` varchar(50) NOT NULL,
  `myAge` int(11) NOT NULL,
  `myGender` varchar(50) NOT NULL,
  `myShirt` varchar(50) NOT NULL,
  `myEName` varchar(50) NOT NULL,
  `myENumber` varchar(50) NOT NULL,
  `Saturday` varchar(50) DEFAULT NULL,
  `Sunday` varchar(50) DEFAULT NULL,
  `splashOptIn` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `date`, `myFirstName`, `myLastName`, `myREmail`, `optIn`, `validateAge`, `myAge`, `myGender`, `myShirt`, `myEName`, `myENumber`, `Saturday`, `Sunday`, `splashOptIn`) VALUES
(1, '2019-02-21 03:12:48', 'Arlana', 'Gottwald', 'rockygottwald@gmail.com', 'yes', 'yes', 1997, 'Female', 'large', 'John Gottwald', '5053159172', '10k', NULL, 'no'),
(2, '2019-02-21 03:13:19', 'Arlana', 'Gottwald', 'rockygottwald@gmail.com', 'yes', 'yes', 1997, 'Female', 'large', 'John Gottwald', '5053159172', '10k', NULL, 'yes'),
(3, '2019-02-21 03:18:39', 'Arlana', 'Gottwald', 'rockygottwald@gmail.com', 'yes', 'yes', 1876, 'Female', 'large', 'John Gottwald', '5053159172', '10k', NULL, 'yes'),
(4, '2019-02-21 03:46:17', 'Arlana', 'Gottwald', 'rockygottwald@gmail.com', 'yes', 'yes', 1987, 'Female', 'large', 'John Gottwald', '5053159172', NULL, 'Volunteer Sunday', 'yes'),
(5, '2019-02-21 21:11:41', 'Susan', 'Watson', 'stwatson@pcc.edu', 'yes', 'yes', 1999, 'Female', 'S', 'Joe Small', '503-555-5555', NULL, 'Volunteer Sunday', 'yes'),
(6, '2019-03-04 20:14:48', 'Arlana', 'Gottwald', 'rockygottwald@gmail.com', 'yes', 'yes', 1987, 'Female', 'x-large', 'John Gottwald', '5053159172', 'Half Marathon', ' ', 'yes'),
(7, '2019-03-14 01:00:17', 'McClane', 'Gottwald', 'rockygottwald@gmail.com', 'yes', 'yes', 1989, 'Non-Binary', 'small', 'John Gottwald', '5052353019', 'Long Triathlon', 'Sunday Volunteer', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `splash`
--

CREATE TABLE `splash` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mySplashFName` varchar(50) NOT NULL,
  `mySplashLName` varchar(50) NOT NULL,
  `mySAge` int(11) NOT NULL,
  `mySplashShirt` varchar(50) NOT NULL,
  `myPName` varchar(50) NOT NULL,
  `myPEmail` varchar(50) NOT NULL,
  `myPNumber` varchar(50) NOT NULL,
  `myPEvent` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `splash`
--

INSERT INTO `splash` (`id`, `date`, `mySplashFName`, `mySplashLName`, `mySAge`, `mySplashShirt`, `myPName`, `myPEmail`, `myPNumber`, `myPEvent`) VALUES
(1, '2019-02-21 03:13:38', 'Arlana', 'Gottwald', 13, 'small', 'Arlana Gottwald', 'rockygottwald@gmail.com', '5053159172', 'yes'),
(2, '2019-02-21 03:14:06', 'Arlana', 'Gottwald', 13, 'small', 'Arlana Gottwald', 'rockygottwald@gmail.com', '5053159172', 'yes'),
(3, '2019-02-21 03:19:20', 'Arlana', 'Gottwald', 13, 'small', 'Arlana Gottwald', 'rockygottwald@gmail.com', '5053159172', 'yes'),
(4, '2019-02-21 03:45:45', 'Arlana', 'Gottwald', 13, 'small', 'Arlana Gottwald', 'rockygottwald@gmail.com', '5053159172', 'yes'),
(5, '2019-02-21 05:52:49', 'Arlana', 'Gottwald', 13, 'small', 'Arlana Gottwald', 'rockygottwald@gmail.com', '5053159172', 'yes'),
(6, '2019-02-21 21:12:07', 'Susan', 'Watson', 6, 'M', 'Susan Watson', 'stwatson@pcc.edu', '503-555-5555', 'yes'),
(7, '2019-03-04 20:15:38', 'Arlana', 'Gottwald', 13, '2x', 'Arlana Gottwald', 'rockygottwald@gmail.com', '5053159172', 'yes'),
(8, '2019-03-06 20:31:02', 'John', 'Gottwald', 13, '4x', 'John Gottwald', 'rockygottwald@gmail.com', '5052353019', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `splash`
--
ALTER TABLE `splash`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `splash`
--
ALTER TABLE `splash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
