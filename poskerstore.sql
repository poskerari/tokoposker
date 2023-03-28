-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2021 at 12:24 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poskerstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodatapembeli`
--

CREATE TABLE `biodatapembeli` (
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` char(5) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kabupaten/kota` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `no_handphone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodatapembeli`
--

INSERT INTO `biodatapembeli` (`nama`, `alamat`, `kode_pos`, `provinsi`, `kabupaten/kota`, `kecamatan`, `kelurahan`, `no_handphone`) VALUES
('Ari w', 'kebalen', '45366', 'jawa tengah', 'kabupaten', 'kebalen', 'kebalen', '0878567781'),
('Ari wicaksono', 'villa indah permai', '11756', 'jawa barat', 'kota', 'teluk pucung', 'bekasi utara', '087899765433'),
('frozen', 'gunung', '88888', 'jakarta barat', 'kota', 'jakarta', 'pulo gadung', '0897654326'),
('ujang', 'babelan', '77789', 'kebalen', 'kota', 'wisma asri', 'teluk buyung', '0879876526');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `lastlogin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `nama`, `email`, `lastlogin`) VALUES
('posker', '5cef793b473883fa02bf9e751a541e6d', 'Ari w', 'kerupukikan@gmail.com', '2021-07-28 09:44:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodatapembeli`
--
ALTER TABLE `biodatapembeli`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
