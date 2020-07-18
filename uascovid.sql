-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 18, 2020 at 02:06 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uascovid`
--

-- --------------------------------------------------------

--
-- Table structure for table `apd`
--

CREATE TABLE `apd` (
  `id_apd` int(13) NOT NULL,
  `nm_alat` varchar(42) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_donasi` int(11) NOT NULL DEFAULT 0,
  `jml_trans` int(15) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apd`
--

INSERT INTO `apd` (`id_apd`, `nm_alat`, `jml_donasi`, `jml_trans`) VALUES
(11, 'APD', 3000000, 2),
(12, 'APD', 4000000, 3),
(13, 'APD', 7000000, 4),
(14, 'APD', 8000000, 5),
(15, 'APD', 10000000, 6);

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id` int(13) NOT NULL,
  `nama` varchar(42) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(42) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_alokasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_dana` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id`, `nama`, `no_hp`, `email`, `jenis_alokasi`, `jml_dana`) VALUES
(60, 'iyoy', '085891728757', 'iyoy@iyoy.com', 'APD', 1000000),
(61, 'iyoy2', '1231231231', 'iyoy2@iyoy.com', 'APD', 3000000),
(62, 'budi', '1085891728752', 'ibudi@iyoy.com', 'Logistik Mahasiswa', 100000),
(63, 'dada', '123123', 'asdas', 'Logistik Mahasiswa', 20000),
(64, 'Edji', '322', 'asdasd', 'Kuota Mahasiswa', 50000),
(65, 'juju', '12312', 'sdasd', 'Kuota Mahasiswa', 30000),
(66, 'doo', '123123', 'blabla', 'Hand Sanitizer', 1000000),
(67, 'duu', 'asdasd', 'blabla@bla', 'Hand Sanitizer', 100000),
(68, 'hans', '23232', 'badada@dudu', 'Sembako Masyarakat', 4000000),
(69, 'adsuo', '085213', 'blabla@bla', 'APD', 1000000),
(70, 'joska', '12312', 'badada@dudu21', 'Sembako Masyarakat', 6000000),
(71, 'jono', '2323232', 'iyoy@iyoy.com', 'APD', 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `hs`
--

CREATE TABLE `hs` (
  `id_hs` int(13) NOT NULL,
  `nm_alat` varchar(42) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_donasi` int(11) NOT NULL DEFAULT 0,
  `jml_trans` int(15) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hs`
--

INSERT INTO `hs` (`id_hs`, `nm_alat`, `jml_donasi`, `jml_trans`) VALUES
(4, 'Hand Sanitizer', 2000000, 1),
(5, 'Hand Sanitizer', 1000000, 1),
(6, 'Hand Sanitizer', 2000000, 2),
(7, 'Hand Sanitizer', 2100000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `kuota`
--

CREATE TABLE `kuota` (
  `id_kuota` int(13) NOT NULL,
  `nm_alat` varchar(42) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_donasi` int(11) NOT NULL DEFAULT 0,
  `jml_trans` int(15) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kuota`
--

INSERT INTO `kuota` (`id_kuota`, `nm_alat`, `jml_donasi`, `jml_trans`) VALUES
(2, 'Kuota Mahasiswa', 50000, 1),
(3, 'Kuota Mahasiswa', 100000, 2),
(4, 'Kuota Mahasiswa', 130000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `logistik`
--

CREATE TABLE `logistik` (
  `id_logistik` int(13) NOT NULL,
  `nm_alat` varchar(42) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_donasi` int(11) NOT NULL DEFAULT 0,
  `jml_trans` int(15) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logistik`
--

INSERT INTO `logistik` (`id_logistik`, `nm_alat`, `jml_donasi`, `jml_trans`) VALUES
(1, 'Logistik Mahasiswa', 20000, 1),
(2, 'Logistik Mahasiswa', 30000, 2),
(3, 'Logistik Mahasiswa', 130000, 3),
(4, 'Logistik Mahasiswa', 150000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sembako`
--

CREATE TABLE `sembako` (
  `id_sembako` int(13) NOT NULL,
  `nm_alat` varchar(42) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_donasi` int(11) NOT NULL DEFAULT 0,
  `jml_trans` int(15) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sembako`
--

INSERT INTO `sembako` (`id_sembako`, `nm_alat`, `jml_donasi`, `jml_trans`) VALUES
(1, 'Sembako Masyarakat', 4000000, 1),
(2, 'Sembako Masyarakat', 2000000, 1),
(3, 'Sembako Masyarakat', 6000000, 2),
(4, 'Sembako Masyarakat', 12000000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lvl` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `lvl`) VALUES
('admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apd`
--
ALTER TABLE `apd`
  ADD PRIMARY KEY (`id_apd`);

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hs`
--
ALTER TABLE `hs`
  ADD PRIMARY KEY (`id_hs`);

--
-- Indexes for table `kuota`
--
ALTER TABLE `kuota`
  ADD PRIMARY KEY (`id_kuota`);

--
-- Indexes for table `logistik`
--
ALTER TABLE `logistik`
  ADD PRIMARY KEY (`id_logistik`);

--
-- Indexes for table `sembako`
--
ALTER TABLE `sembako`
  ADD PRIMARY KEY (`id_sembako`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apd`
--
ALTER TABLE `apd`
  MODIFY `id_apd` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `hs`
--
ALTER TABLE `hs`
  MODIFY `id_hs` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kuota`
--
ALTER TABLE `kuota`
  MODIFY `id_kuota` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logistik`
--
ALTER TABLE `logistik`
  MODIFY `id_logistik` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sembako`
--
ALTER TABLE `sembako`
  MODIFY `id_sembako` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
