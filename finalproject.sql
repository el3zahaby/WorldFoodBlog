-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 11:11 AM
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
-- Database: `finalproject`
--
CREATE DATABASE IF NOT EXISTS `finalproject` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `finalproject`;

-- --------------------------------------------------------

--
-- Table structure for table `username`
--

CREATE TABLE `username` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `typeid` varchar(50) NOT NULL,
  `approval` varchar(50) NOT NULL,
  `create_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `username`
--

INSERT INTO `username` (`id`, `username`, `password`, `email`, `typeid`, `approval`, `create_date`, `update_date`) VALUES
(9, 'Jamie', '$2y$10$ynF1pnUCnvGND34NRB7BEeLduqg/qZDyPFp52i6KFOIfU7wZ3M8gC', 'Jamie@oliver.com', '', '', '2018-04-08 00:38:48', '0000-00-00 00:00:00'),
(10, 'Floyd', '$2y$10$DSUJdZIQlmMo7/WC18blveiiCbak0z76tAwBfNwRohAxhmfcDh.BK', 'Floyd@med.com', '', '', '2018-04-08 00:43:54', '0000-00-00 00:00:00'),
(11, 'Mary', '$2y$10$5MrP4sfKgWATH1uvuwguluV2MqqoQKE8bGCWtjp/qifwhT0eC.Ouq', 'mary.berry@gmail.com', '', '', '2018-04-08 00:47:12', '0000-00-00 00:00:00'),
(12, 'Harry', '$2y$10$qTrWEd6HYuSuPYNblkK3pOTIgj92nGHcd/A3blDto.YPLpl.rHrVe', 'harrymet@sally.com', '', '', '2018-04-08 00:53:03', '0000-00-00 00:00:00'),
(13, 'Nigella', '$2y$10$g8v.yYOv77byr4pSHHkluOi8M7gSbDorQ0rIjtpYgjsDLmo3u5KyS', 'Nigella@lawson.com', '', '', '2018-04-08 00:54:58', '0000-00-00 00:00:00'),
(14, 'ZaZa', '$2y$10$4T1IEt8bcCiljQyw./DALeTYV2pPsnwVr9J8EN.LJM/RmKvBB3TwC', 'Zaza@za.com', '', '', '2018-04-08 10:24:47', '0000-00-00 00:00:00'),
(15, 'Nigel', '$2y$10$HBEKGx9rSKo7jR3NDGrwiOgOAQWRuiGt9rEkMAXQV/jkhSs4i8JSK', 'nigel.slater@cooking.com', '', '', '2018-04-08 10:52:49', '0000-00-00 00:00:00'),
(16, 'Sponge', '$2y$10$m51vqAHA5ZRBbpmCTY2FUOk.dtiyTYRb0PnqZgOrIyXpdCSifNDgG', 'sponge.bob@crusty.com', '', '', '2018-04-08 11:42:03', '0000-00-00 00:00:00'),
(17, 'vic', '$2y$10$bvuA3VY23k1f9.t7zs/LMeCYbNig/MB7Kl6JtsJLHDio5btutZO5S', 'vic@sky.com', '', '', '2018-04-08 12:13:13', '0000-00-00 00:00:00'),
(18, 'Tanya', '$2y$10$3xpS8r0bB31/szdKPobqH.ijl92x2AQACP/pwOzosxVLTE08wfYPa', 'tanya@jut.com', '', '', '2018-04-08 19:26:44', '0000-00-00 00:00:00'),
(19, 'Sall', '$2y$10$TRWuW28DclHPCw2qVzAjjeJka3eM1u0mjIbQY9eMpCGmoRlf3ys7e', 'sall@mall.com', '', '', '2018-04-09 09:41:17', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `username`
--
ALTER TABLE `username`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `username`
--
ALTER TABLE `username`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
