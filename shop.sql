-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2023 at 11:46 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbusers`
--

CREATE TABLE `tbusers` (
  `id` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('superadmin','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbusers`
--

INSERT INTO `tbusers` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', '1234', 'superadmin'),
(2, 'inventory', 'myrta', 'qwerty', 'operator'),
(5, '', 'alfi', '123', 'operator');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` int(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `kode` varchar(15) NOT NULL,
  `harga` int(25) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `nama`, `kode`, `harga`, `foto`) VALUES
(2, 'Terigu', 'K-016', 30000, ''),
(3, 'Beras', 'K-067', 15000, 'beras.jpg'),
(5, 'susu', 'K-025', 2000, 'susu.jpg'),
(6, 'kopi', 'K-076', 3000, ''),
(7, 'mie', 'K-098', 3000, ''),
(9, 'tisu', 'K-045', 2000, ''),
(13, 'aqua', 'K-018', 5000, ''),
(14, 'parasetamol', 'P-043', 4000, ''),
(15, 'minyak ', 'K-098', 13000, ''),
(17, 'sunlight', 'T-076', 2500, ''),
(18, 'panadol', 'P-023', 4000, ''),
(19, 'lifebuoy', 'T-087', 5000, ''),
(26, 'Gula ', 'K-87', 4000, 'gula.jpg'),
(27, 'ciken', 'K-199', 8000, ''),
(29, 'PopMie', 'K-109', 4500, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_stock`
--

CREATE TABLE `tb_stock` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `kode` varchar(15) NOT NULL,
  `stock` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_stock`
--

INSERT INTO `tb_stock` (`id`, `nama`, `kode`, `stock`) VALUES
(2, 'beras', 'K-067', 2),
(3, 'susu', 'K-025', 300),
(4, 'kopi', 'K-076', 400),
(5, 'mie', 'K-098', 600),
(6, 'tisu', 'K-045', 500),
(7, 'aqua', 'K-018', 250),
(8, 'parasetamol ', 'P-043', 100),
(9, 'minyak', 'K-098', 400),
(10, 'sunlight', 'T-76', 320),
(11, 'panadol', 'P-023', 400),
(15, 'tes', '111', 222),
(18, 'Gula ', 'K-87', 200),
(19, 'kopi', 'K-076', 900),
(20, 'parasetamol', 'P-043', 200),
(21, 'Gula ', 'K-87', 90),
(24, 'PopMie', 'K-109', 200);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `harga` int(25) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `nama`, `harga`, `jumlah`, `tanggal`) VALUES
(1, 'susu', 2000, 3, '2023-01-18'),
(4, 'parasetamol ', 35000, 4, '2023-01-05'),
(6, 'Gula  ', 4000, 3, '2023-01-26'),
(7, 'PopMie ', 5000, 4, '2023-01-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbusers`
--
ALTER TABLE `tbusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_stock`
--
ALTER TABLE `tb_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbusers`
--
ALTER TABLE `tbusers`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_stock`
--
ALTER TABLE `tb_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
