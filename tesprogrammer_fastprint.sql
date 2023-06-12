-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 06:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tesprogrammer_fastprint`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-06-08-114443', 'App\\Database\\Migrations\\Produk', 'default', 'App', 1686227662, 1);

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id_produk` int(5) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `status` enum('bisa dijual','tidak bisa dijual') NOT NULL DEFAULT 'bisa dijual'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id_produk`, `nama_produk`, `harga`, `kategori`, `status`) VALUES
(454, 'ALUMUNIUM FOIL ALL IN ONE SHEET 250mm IM', 12500, 'L MTH AKSESORIS (IM)', 'tidak bisa dijual'),
(455, 'ALUMUNIUM FOIL HDPE/PE BULAT 23mm IM', 12500, 'L MTH AKSESORIS (IM)', 'bisa dijual'),
(456, 'ALUMUNIUM FOIL HDPE/PE BULAT 30mm IM', 1000, 'L MTH AKSESORIS (IM)', 'bisa dijual'),
(457, 'ALUMUNIUM FOIL HDPE/PE SHEET 250mm IM', 13000, 'L MTH AKSESORIS (IM)', 'tidak bisa dijual'),
(458, 'ALUMUNIUM FOIL PET SHEET 250mm IM', 1000, 'L MTH AKSESORIS (IM)', 'tidak bisa dijual'),
(459, 'ARM PENDEK MODEL U', 13000, 'L MTH AKSESORIS (IM)', 'bisa dijual'),
(460, 'ARM SUPPORT KECIL', 13000, 'L MTH TABUNG (LK)', 'tidak bisa dijual'),
(461, 'ARM SUPPORT KOTAK PUTIH', 13000, 'L MTH AKSESORIS (IM)', 'tidak bisa dijual'),
(462, 'ARM SUPPORT PENDEK POLOS', 13000, 'L MTH TABUNG (LK)', 'bisa dijual'),
(463, 'ARM SUPPORT S IM', 1000, 'L MTH AKSESORIS (IM)', 'tidak bisa dijual'),
(464, 'ARM SUPPORT T (IMPORT)', 13000, 'L MTH AKSESORIS (IM)', 'bisa dijual'),
(465, 'ARM SUPPORT T - MODEL 1 ( LOKAL )', 10000, 'L MTH TABUNG (LK)', 'bisa dijual'),
(466, 'BLACK LASER TONER FP-T3 (100gr)', 13000, 'L MTH AKSESORIS (IM)', 'tidak bisa dijual'),
(467, 'BODY PRINTER CANON IP2770', 500, 'SP MTH SPAREPART (LK)', 'bisa dijual'),
(468, 'BODY PRINTER T13X', 15000, 'SP MTH SPAREPART (LK)', 'bisa dijual'),
(469, 'BOTOL 1000ML BLUE KHUSUS UNTUK EPSON R1800/R800 - 4180 IM (T054920)', 10000, 'CI MTH TINTA LAIN (IM)', 'bisa dijual'),
(470, 'BOTOL 1000ML CYAN KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4120 IM (T054220)', 10000, 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual'),
(471, 'BOTOL 1000ML GLOSS OPTIMIZER KHUSUS UNTUK EPSON R1800/R800/R1900/R2000/IX7000/MG6170 - 4100 IM (T054020)', 1500, 'CI MTH TINTA LAIN (IM)', 'bisa dijual'),
(472, 'BOTOL 1000ML L.LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0599 IM', 1500, 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual'),
(473, 'BOTOL 1000ML LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0597 IM', 1500, 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual'),
(474, 'BOTOL 1000ML MAGENTA KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4140 IM (T054320)', 1000, 'CI MTH TINTA LAIN (IM)', 'bisa dijual'),
(475, 'BOTOL 1000ML MATTE BLACK KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 3503 IM (T054820)', 1500, 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual'),
(476, 'BOTOL 1000ML ORANGE KHUSUS UNTUK EPSON R1900/R2000 IM - 4190 (T087920)', 1500, 'CI MTH TINTA LAIN (IM)', 'bisa dijual'),
(477, 'BOTOL 1000ML RED KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4170 IM (T054720)', 1000, 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual'),
(478, 'BOTOL 1000ML YELLOW KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4160 IM (T054420)', 1500, 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual'),
(479, 'BOTOL KOTAK 100ML LK', 1000, 'L MTH AKSESORIS (LK)', 'bisa dijual'),
(480, 'BOTOL 10ML IM', 1000, 'S MTH STEMPEL (IM)', 'tidak bisa dijual'),
(481, 'CBR 250RR 2nd', 28500000, 'L MTH AKSESORIS (IM)', 'bisa dijual'),
(482, 'R25 OLD 2nd', 25500000, 'L MTH AKSESORIS (LK)', 'bisa dijual'),
(483, 'R15M New', 40000000, 'L MTH AKSESORIS (IM)', 'bisa dijual'),
(484, 'GSX R 150', 13000000, 'L MTH AKSESORIS (IM)', 'bisa dijual'),
(485, 'GSX R 150 new ABS', 34000000, 'L MTH AKSESORIS (LK)', 'tidak bisa dijual');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id_produk` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=486;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
