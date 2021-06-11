-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 12:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul6`
--

-- --------------------------------------------------------

--
-- Table structure for table `satelit`
--

CREATE TABLE `satelit` (
  `nama_satelit` varchar(30) NOT NULL,
  `mulai_operasi` date NOT NULL,
  `akhir_operasi` varchar(20) NOT NULL,
  `pengelola` varchar(55) NOT NULL,
  `wahana_luncur` varchar(30) NOT NULL,
  `pembuat` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `satelit`
--

INSERT INTO `satelit` (`nama_satelit`, `mulai_operasi`, `akhir_operasi`, `pengelola`, `wahana_luncur`, `pembuat`, `keterangan`) VALUES
('Palapa A2', '1997-03-10', '1988', 'Perumtel', 'Delta-2914', 'Hughes (HS-333)', 'Diluncurkan dari Kennedy Space Center, Tanjung Canaveral, Amerika Serikat'),
('Palapa B1', '1983-06-18', '1990', 'Perumtel', 'Challanger F2(STS-7)', 'Hughes (HS-376)', 'Diluncurkan menggunakan pesawat ulang-alik.'),
('Palapa B2P', '1987-03-21', '1996', 'Telkom Satelindo', 'Delta-6925', 'Hughes(HS-376)', 'Beralih kepemilikan ke Satelindo pada 1993, dan digantikan oleh Palapa C1.'),
('Palapa B2R', '1990-04-13', '2000', 'Telkom Satelindo', 'Delta-6925', 'Hughes (HS-376)', 'Merupakan Palapa B2 yang diperbaiki oleh Sattel Technologies, dan digantikan oleh Telkom-1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `satelit`
--
ALTER TABLE `satelit`
  ADD PRIMARY KEY (`nama_satelit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
