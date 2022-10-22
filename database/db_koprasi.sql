-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 22, 2022 at 07:18 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_koprasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `singkatan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `singkatan`) VALUES
(1, 'Skincare', 'SKCE'),
(4, 'Elektronik', 'ELTNK');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `stok` int(5) NOT NULL,
  `harga` int(10) NOT NULL,
  `type` int(5) NOT NULL,
  `kode_produk` varchar(12) NOT NULL,
  `deskripsi` text NOT NULL,
  `waktu_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `stok`, `harga`, `type`, `kode_produk`, `deskripsi`, `waktu_dibuat`) VALUES
(16, 'Ustraa Indian Skincare', 43, 50000, 1, 'FF5654', 'Skincare adalah serangkaian perawatan kulit yang dapat merawat kesehatan dan kecantikan kulit Anda. Tak cukup dari dalam dengan makanan yang Anda konsumsi', '2022-10-22 06:34:46'),
(17, 'Komputer Core i5', 5, 14000000, 4, 'BB2970', 'Komputer atau PC adalah alat yang dipakai untuk mengolah data menurut prosedur yang telah dirumuskan. komputer adalah suatu perangkat keras yang sangat berkaitan dengan teknologi.', '2022-10-22 06:36:37'),
(18, 'Skincare Ramah Lingkungan Terlaris', 15, 70000, 1, 'E721C3', 'Avoskin juga termasuk skincare ramah lingkungan yang berkomitmen menciptakan produk dari bahan â€“ bahan alami dan dikemas secara eco-friendly. Salah satu produknya, yaitu Perfect Hydrating Treatment Essence pernah terjual habis hanya dalam 24 jam. Produknya memang recommended untuk membersihkan, mencerahkan, dan mengatasi masalah beruntusan.', '2022-10-22 06:54:01'),
(19, 'Skincare Halal Yang Inovatif', 65, 50000, 1, '33F588', 'Wardah pertama kali mencuri perhatian banyak orang karena mengusung label halal. Brand skincare ini juga aktif berinovasi dalam menghadirkan produk â€“ produk skincare terbaik. Mulai dari jenis, kandungan, dan teknologi yang digunakan', '2022-10-22 06:56:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `relasi_kategori` (`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `relasi_kategori` FOREIGN KEY (`type`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
