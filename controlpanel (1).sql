-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 07:27 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `controlpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `control_panel`
--

CREATE TABLE `control_panel` (
  `Id` int(100) NOT NULL,
  `forward_di` varchar(11) NOT NULL,
  `right_di` varchar(11) NOT NULL,
  `left_di` varchar(11) NOT NULL,
  `stop_di` varchar(11) NOT NULL,
  `backward_di` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `control_panel`
--

INSERT INTO `control_panel` (`Id`, `forward_di`, `right_di`, `left_di`, `stop_di`, `backward_di`) VALUES
(100, 'forward', '', '', '', ''),
(101, '', '', 'left', '', ''),
(102, '', '', '', '', 'backward'),
(103, '', 'right', '', '', ''),
(104, '', 'right', '', '', ''),
(105, '', 'right', '', '', ''),
(106, 'forward', '', '', '', ''),
(107, 'forward', '', '', '', ''),
(108, '', '', 'left', '', ''),
(109, '', 'right', '', '', ''),
(110, '', 'right', '', '', ''),
(111, '', '', '', '', 'backward'),
(112, '', '', '', '', 'backward'),
(113, '', '', '', '', 'backward'),
(114, '', 'right', '', '', ''),
(115, '', 'right', '', '', ''),
(116, 'forward', '', '', '', ''),
(117, 'forward', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `control_panel`
--
ALTER TABLE `control_panel`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `control_panel`
--
ALTER TABLE `control_panel`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
