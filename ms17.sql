-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2018 at 11:47 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ms17`
--

-- --------------------------------------------------------

--
-- Table structure for table `nimekiri`
--

CREATE TABLE `nimekiri` (
  `id` int(3) NOT NULL,
  `EesNimi` varchar(30) NOT NULL,
  `PereNimi` varchar(30) NOT NULL,
  `id_code` char(11) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nimekiri`
--

INSERT INTO `nimekiri` (`id`, `EesNimi`, `PereNimi`, `id_code`, `time`) VALUES
(2, 'Tarmo', 'Teder', '35404211234', '2018-09-11 11:01:26'),
(13, 'Endel', 'EesvÃ¤rav', '32132231234', '2018-09-18 12:01:31'),
(14, 'Endel', 'EesvÃ¤rav', '32132231234', '2018-09-18 12:01:36');

-- --------------------------------------------------------

--
-- Table structure for table `nimekiri1`
--

CREATE TABLE `nimekiri1` (
  `id` int(3) NOT NULL,
  `EesNimi` varchar(30) NOT NULL,
  `PereNimi` varchar(30) NOT NULL,
  `id_code` char(11) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nimekiri`
--
ALTER TABLE `nimekiri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nimekiri1`
--
ALTER TABLE `nimekiri1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nimekiri`
--
ALTER TABLE `nimekiri`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `nimekiri1`
--
ALTER TABLE `nimekiri1`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
