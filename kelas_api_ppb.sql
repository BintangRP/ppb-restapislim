-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 07:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelas_api_ppb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama` text DEFAULT NULL,
  `jk` varchar(10) DEFAULT NULL,
  `umur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jk`, `umur`) VALUES
(210001, 'Sam Kerr', 'P', 24),
(210002, 'Samantha June Mewis', 'P', 20),
(210003, 'Zinedine Zidane', 'L', 20),
(210004, 'Ronaldo', 'L', 25),
(210005, 'Vivianne Miedema', 'P', 20),
(210006, 'Mohamed Salah', 'L', 21),
(210007, 'Dzsenifer Marozsan', 'P', 22);

-- --------------------------------------------------------

--
-- Table structure for table `spp_mahasiswa`
--

CREATE TABLE `spp_mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `spp_mahasiswa`
--

INSERT INTO `spp_mahasiswa` (`id`, `nim`, `jumlah`, `status`, `semester`) VALUES
(1, 210001, 2500000, 1, 2),
(2, 210002, 7500000, 1, 1),
(3, 210003, 9000000, 0, 1),
(4, 210009, 4000000, 1, 2),
(5, 210010, 2200000, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `spp_mahasiswa`
--
ALTER TABLE `spp_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spp_mahasiswa`
--
ALTER TABLE `spp_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;