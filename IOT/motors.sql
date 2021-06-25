-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 25, 2021 at 10:32 PM
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
-- Database: `motors`
--

-- --------------------------------------------------------

--
-- Table structure for table `dir`
--

CREATE TABLE `dir` (
  `id` int(11) NOT NULL,
  `direction` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dir`
--

INSERT INTO `dir` (`id`, `direction`) VALUES
(1, 'f'),
(2, 'f'),
(3, 'f'),
(4, 'f'),
(5, 'r'),
(6, 's'),
(7, 'f'),
(8, 'l'),
(9, 'r'),
(10, 'b'),
(11, 'f'),
(12, 'l');

-- --------------------------------------------------------

--
-- Table structure for table `moters`
--

CREATE TABLE `moters` (
  `moter1` int(11) NOT NULL,
  `moter2` int(11) NOT NULL,
  `moter3` int(11) NOT NULL,
  `moter4` int(11) NOT NULL,
  `moter5` int(11) NOT NULL,
  `moter6` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moters`
--

INSERT INTO `moters` (`moter1`, `moter2`, `moter3`, `moter4`, `moter5`, `moter6`) VALUES
(101, 81, 107, 95, 105, 85),
(113, 96, 78, 95, 111, 102),
(111, 71, 102, 62, 101, 56),
(0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0),
(80, 107, 132, 121, 110, 79),
(0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0),
(84, 79, 84, 68, 180, 161),
(0, 0, 0, 0, 0, 0),
(180, 180, 180, 180, 180, 180),
(0, 0, 0, 0, 0, 0),
(89, 96, 94, 89, 89, 89),
(68, 79, 48, 30, 112, 63),
(45, 57, 30, 94, 86, 90),
(135, 59, 67, 90, 90, 82),
(85, 95, 93, 97, 88, 37),
(98, 98, 0, 0, 0, 0),
(45, 55, 72, 98, 51, 64),
(97, 81, 58, 88, 77, 53),
(0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `run`
--

CREATE TABLE `run` (
  `running` int(1) DEFAULT NULL,
  `id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `run`
--

INSERT INTO `run` (`running`, `id`) VALUES
(1, 17),
(1, 18),
(1, 19),
(1, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dir`
--
ALTER TABLE `dir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `run`
--
ALTER TABLE `run`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dir`
--
ALTER TABLE `dir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `run`
--
ALTER TABLE `run`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
