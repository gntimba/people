-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2018 at 10:54 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `people`
--

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Birth_date` date NOT NULL,
  `cellphone` varchar(15) NOT NULL,
  `email` varchar(36) NOT NULL,
  `Captured_Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `First_Name`, `Last_Name`, `Birth_date`, `cellphone`, `email`, `Captured_Date`) VALUES
(1, 'godfrey', 'timba', '1993-07-02', '0764687870', 'gntimba@gmail.com', '2018-11-23 20:33:32'),
(2, 'godfrey', 'timba', '1993-07-02', '0764687870', 'gntimba@gmail.com', '2018-11-23 20:34:30'),
(4, 'bngn', 'hjjhjj', '1993-07-02', '+27764687870', 'nbmnmn@gti.com', '2018-11-23 20:43:03'),
(5, 'bngn', 'hjjhjj', '1993-07-02', '+27764687870', 'nbmnmn@gti.com', '2018-11-23 20:45:26'),
(6, 'bngn', 'hjjhjj', '1993-07-02', '+27764687870', 'nbmnmn@gti.com', '2018-11-23 20:47:17'),
(7, 'bngn', 'hjjhjj', '1993-07-02', '+27764687870', 'nbmnmn@gti.com', '2018-11-23 20:48:41'),
(8, 'Thulani', 'Timba', '1993-07-02', '+27764687870', 'gntimba@gmail.com', '2018-11-23 20:49:38'),
(9, 'Thulani', 'Timba', '2018-11-12', '+27764687870', 'gntimba@gmail.com', '2018-11-23 20:51:17'),
(10, 'Thulani', 'Timba', '0000-00-00', '+27764687870', 'gntimba@gmail.com', '2018-11-23 20:52:25'),
(11, 'Thulani', 'Timba', '1993-07-02', '+27764687870', 'gntimba@gmail.com', '2018-11-23 20:53:07'),
(12, 'Thulani', 'Timba', '2018-11-14', '+27764687870', 'gntimba@gmail.com', '2018-11-23 20:54:09'),
(13, 'Thulani', 'Timba', '2018-11-15', '+27764687870', 'gntimba@gmail.com', '2018-11-23 20:54:30'),
(14, 'Thulani', 'Timba', '2018-11-21', '+27764687870', 'gntimba@gmail.com', '2018-11-23 20:55:29'),
(15, 'godfrey', 'timba', '0000-00-00', '0764687870', 'gntimba@gmail.com', '2018-11-23 21:04:14'),
(16, 'Thulani', 'Timba', '2018-11-22', '+27764687870', 'gntimba@gmail.com', '2018-11-23 21:05:08'),
(17, 'Thulani', 'Timba', '2018-11-22', '+27764687870', 'gntimba@gmail.com', '2018-11-23 21:05:54'),
(18, 'Thulani', 'Timba', '2018-11-17', '+27764687870', 'gntimba@gmail.com', '2018-11-23 21:06:24'),
(19, 'Thulani', 'Timba', '2018-11-17', '+27764687870', 'gntimba@gmail.com', '2018-11-23 21:06:52'),
(20, 'Thulani', 'Timba', '2018-11-13', '+27764687870', 'gntimba@gmail.com', '2018-11-23 21:08:37'),
(21, 'Thulani', 'Timba', '2018-11-15', '+27764687870', 'gntimba@gmail.com', '2018-11-23 21:12:36'),
(22, 'godfrey', 'timba', '0000-00-00', '0764687870', 'gntimba@gmail.com', '2018-11-23 21:39:59'),
(23, 'Thulani', 'Timba', '2018-11-15', '+27764687870', 'gntimba@gmail.com', '2018-11-23 21:41:02'),
(24, 'Thulani', 'Timba', '2018-11-15', '+27764687870', 'gntimba@gmail.com', '2018-11-23 21:41:24'),
(25, 'Thulani', 'Timba', '2018-11-15', '+27764687870', 'gntimba@gmail.com', '2018-11-23 21:41:32'),
(26, 'gerro', 'mah', '1992-03-02', '0813526522', 'thwala@gmail.com', '2018-11-24 11:52:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
