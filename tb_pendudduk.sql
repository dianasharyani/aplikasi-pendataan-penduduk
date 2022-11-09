-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 07:41 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dian3nov`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendudduk`
--

CREATE TABLE `tb_pendudduk` (
  `id` int(30) NOT NULL,
  `nik` int(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `agama` enum('islam','kristen','katolik','budha','hindu','konghucu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pendudduk`
--

INSERT INTO `tb_pendudduk` (`id`, `nik`, `nama`, `agama`) VALUES
(1, 5644, 'jihan', 'islam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pendudduk`
--
ALTER TABLE `tb_pendudduk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pendudduk`
--
ALTER TABLE `tb_pendudduk`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
