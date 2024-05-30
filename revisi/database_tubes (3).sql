-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 07:37 PM
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
-- Database: `database_tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_genshin`
--

CREATE TABLE `data_genshin` (
  `id` int(11) NOT NULL,
  `jumlah_primo` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_genshin`
--

INSERT INTO `data_genshin` (`id`, `jumlah_primo`, `harga`) VALUES
(1, '200', '3000'),
(3, '7000', '150000');

-- --------------------------------------------------------

--
-- Table structure for table `data_ml`
--

CREATE TABLE `data_ml` (
  `id` int(11) NOT NULL,
  `jumlah_dm` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_ml`
--

INSERT INTO `data_ml` (`id`, `jumlah_dm`, `harga`) VALUES
(1, '150', '2500'),
(3, '325', '7500'),
(20, '7500', '150000'),
(21, '8500', '15000'),
(23, '7000', '15000');

-- --------------------------------------------------------

--
-- Table structure for table `data_pubg`
--

CREATE TABLE `data_pubg` (
  `id` int(11) NOT NULL,
  `jumlah_uc` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pubg`
--

INSERT INTO `data_pubg` (`id`, `jumlah_uc`, `harga`) VALUES
(3, '300', '7500'),
(4, '525', '25000'),
(5, '700', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `data_valorant`
--

CREATE TABLE `data_valorant` (
  `id` int(11) NOT NULL,
  `jumlah_vp` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_valorant`
--

INSERT INTO `data_valorant` (`id`, `jumlah_vp`, `harga`) VALUES
(1, '5500', '500000'),
(4, '1250', '45000');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id` int(11) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id`, `deskripsi`) VALUES
(1, 'Adalah sebuah website top up Game yang menawarkan harga terjangkau dengan berbagai bonus menarik !!!');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_genshin`
--

CREATE TABLE `transaksi_genshin` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jumlah_primo` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `metode_pembayaran` varchar(255) NOT NULL,
  `tgl_pembelian` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi_genshin`
--

INSERT INTO `transaksi_genshin` (`id`, `nama`, `jumlah_primo`, `harga`, `metode_pembayaran`, `tgl_pembelian`, `status`) VALUES
(1, 'alex', '7000', '150000', 'ShopeePay', '2024-05-29', 'BERHASIL');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_ml`
--

CREATE TABLE `transaksi_ml` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jumlah_dm` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `metode_pembayaran` varchar(255) NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi_ml`
--

INSERT INTO `transaksi_ml` (`id`, `nama`, `jumlah_dm`, `harga`, `metode_pembayaran`, `tgl_pembelian`, `status`) VALUES
(14, 'Maman', '7500', '150000', 'ShopeePay', '2024-05-28', 'BERHASIL'),
(15, 'maman', '7500', '150000', 'Dana', '2024-05-28', 'BERHASIL'),
(16, 'Antonio', '8500', '15000', 'OVO', '2024-05-28', 'BERHASIL'),
(17, 'aling', '7000', '15000', 'Dana', '2024-05-29', 'BERHASIL');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pubg`
--

CREATE TABLE `transaksi_pubg` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jumlah_uc` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `metode_pembayaran` varchar(255) NOT NULL,
  `tgl_pembelian` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi_pubg`
--

INSERT INTO `transaksi_pubg` (`id`, `nama`, `jumlah_uc`, `harga`, `metode_pembayaran`, `tgl_pembelian`, `status`) VALUES
(1, 'okong', '525', '25000', 'OVO', '2024-05-29', 'BERHASIL'),
(2, 'ucup', '525', '25000', 'Dana', '2024-05-29', 'BERHASIL');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_valorant`
--

CREATE TABLE `transaksi_valorant` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jumlah_vp` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `metode_pembayaran` varchar(255) NOT NULL,
  `tgl_pembelian` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi_valorant`
--

INSERT INTO `transaksi_valorant` (`id`, `nama`, `jumlah_vp`, `harga`, `metode_pembayaran`, `tgl_pembelian`, `status`) VALUES
(1, 'bagus', '5500', '500000', 'ShopeePay', '2024-05-29', 'BERHASIL');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `confirm_password`) VALUES
(17, 'M Regi Agustian', 'aling', '123', '123'),
(19, 'Admin', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_genshin`
--
ALTER TABLE `data_genshin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_ml`
--
ALTER TABLE `data_ml`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pubg`
--
ALTER TABLE `data_pubg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_valorant`
--
ALTER TABLE `data_valorant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_genshin`
--
ALTER TABLE `transaksi_genshin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_ml`
--
ALTER TABLE `transaksi_ml`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_pubg`
--
ALTER TABLE `transaksi_pubg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_valorant`
--
ALTER TABLE `transaksi_valorant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_genshin`
--
ALTER TABLE `data_genshin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_ml`
--
ALTER TABLE `data_ml`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `data_pubg`
--
ALTER TABLE `data_pubg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_valorant`
--
ALTER TABLE `data_valorant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi_genshin`
--
ALTER TABLE `transaksi_genshin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi_ml`
--
ALTER TABLE `transaksi_ml`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transaksi_pubg`
--
ALTER TABLE `transaksi_pubg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi_valorant`
--
ALTER TABLE `transaksi_valorant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
