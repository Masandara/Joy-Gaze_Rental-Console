-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2023 at 08:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewa`
--

-- --------------------------------------------------------

--
-- Table structure for table `consoles`
--

CREATE TABLE `consoles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consoles`
--

INSERT INTO `consoles` (`id`, `name`, `stock`) VALUES
(1, 'PS 3', 10),
(2, 'PS 4', 9),
(3, 'PS 5', 0),
(4, 'XBOX', 0);

-- --------------------------------------------------------

--
-- Table structure for table `penyewaan_ps`
--

CREATE TABLE `penyewaan_ps` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `wa` int(14) NOT NULL,
  `description` varchar(20) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `durasi` int(11) NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penyewaan_ps`
--

INSERT INTO `penyewaan_ps` (`id`, `nama`, `wa`, `description`, `tanggal_pinjam`, `tanggal_kembali`, `durasi`, `harga`) VALUES
(39, 'Mathias Rekyan Arka Nugroho', 0, 'PS 4', '2023-11-17', '2023-11-18', 1, 'Rp 60000'),
(40, 'Mathias Rekyan Arka Nugroho', 0, 'PS 4', '2023-11-17', '2023-11-20', 3, 'Rp 180000'),
(41, 'Mathias Rekyan Arka Nugroho', 3123122, 'PS 4', '2023-11-18', '2023-11-21', 3, 'Rp 180000'),
(42, 'Ars', 3123122, 'XBOX', '2023-11-17', '2023-11-20', 3, 'Rp 270000'),
(43, 'Ars', 1234567, 'XBOX', '2023-12-01', '2023-12-04', 3, 'Rp 270000'),
(44, 'Ars', 1234567, 'XBOX', '2023-12-01', '2023-12-04', 3, 'Rp 270000'),
(45, 'Mathias Rekyan Arka Nugroho', 851, 'PS 3', '2023-11-20', '2023-11-23', 3, 'Rp 150000'),
(46, 'Mathias Rekyan Arka Nugroho', 851, 'XBOX', '2023-11-30', '2023-12-02', 2, 'Rp 180000'),
(47, 'Angeline', 12341234, 'XBOX', '2023-11-18', '2023-11-21', 3, 'Rp 270000'),
(48, 'Ars', 3123122, 'XBOX', '2023-11-21', '2023-11-24', 3, 'Rp 270000'),
(49, 'Ars', 3123122, 'PS 4', '2023-11-20', '2023-11-23', 3, 'Rp 180000');

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `id_ulasan` int(3) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `ulasan` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`id_ulasan`, `nama_pelanggan`, `ulasan`, `waktu`) VALUES
(11389, 'Mathias Rekyan', 'Good', '2023-11-17 18:46:20'),
(11390, 'Arka', 'Its good', '2023-11-17 18:47:29'),
(11391, 'Tania', 'Halo', '2023-11-17 18:47:36'),
(11393, 'Sukro', 'Enak tau', '2023-11-17 19:28:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consoles`
--
ALTER TABLE `consoles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyewaan_ps`
--
ALTER TABLE `penyewaan_ps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id_ulasan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consoles`
--
ALTER TABLE `consoles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penyewaan_ps`
--
ALTER TABLE `penyewaan_ps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_ulasan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11394;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
