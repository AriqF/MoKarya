-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 08:55 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mokarya`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_karya`
--

CREATE TABLE `data_karya` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `anggota` varchar(255) NOT NULL,
  `foto_karya` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_karya`
--

INSERT INTO `data_karya` (`id`, `judul`, `deskripsi`, `anggota`, `foto_karya`) VALUES
(37, 'wallpaper5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sagittis consequat ipsum, non pulvinar nulla sagittis id.', 'mimi, mumu, momo', '67-1.jpg'),
(38, 'wallpaper012', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sagittis consequat ipsum, non pulvinar nulla sagittis id.', 'mimi, mumu, momo', '541-bgUnesa.jpg'),
(39, 'rokett', 'saya ingin mencoba mendebug program ini apakah berjalan lancar atau tidak. Semoga tidak ada bug atau error lagi.', 'Tyos, Brok, Riri', '792-1.jpg'),
(40, 'rokett', 'saya ingin mencoba mendebug program ini apakah berjalan lancar atau tidak. Semoga tidak ada bug atau error lagi.', 'Tyos, Brok, Riri', '78-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `namalengkap` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `nim` bigint(20) NOT NULL,
  `angkatan` year(4) NOT NULL,
  `kelas` varchar(2) NOT NULL,
  `verified` tinyint(4) NOT NULL,
  `token` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `namalengkap`, `email`, `nim`, `angkatan`, `kelas`, `verified`, `token`, `password`, `usertype`) VALUES
(26, 'mokarya', 'mokaryad4@gmail.com', 123456, 2000, 'Z', 1, 'b009410446f5219f776a11baffeae2a18f5a384e9aa49df06100c76b20b2deda18874611f5ab2b2378310f49ec7c91615c72', '$2y$10$9nOUtszTx9IDD5M5FlnN8uc3VbVBzi0dqw38DjOhyaTX8aSNaoYf2', 'admin'),
(27, 'Muhammad Alif H', 'muhammad.19065@mhs.unesa.ac.id', 2147483647, 2020, 'B', 1, '9f443f50ad665034ea43cf967e4bbc5b9eedb75833c995271a39d457d0c29cac3983f4e09f535d1b3ee809fe3d1b51e3dbb8', '$2y$10$KcifS6vWYJWMeM/DART7AOEiqTEfpYbJT4/55mqb.OV2aHAo1nP0y', 'user'),
(31, 'superuser', 'ariqfachry2611@gmail.com', 666, 2000, 's', 1, '06249e573804e80c841d1b595dd2da5bb2fb158eefe0e63fdf7e4854309421fdfb455af79e093d87e3a5772218504fb4b5a2', '$2y$10$KjGuhBp4yiq4Rm2wUIMeduBy7obLQyU2ITDUgZmpEYJJxo/PryAcG', 'admin'),
(32, 'Ariq Fachry Ramadhan', 'ariq.19047@mhs.unesa.ac.id', 2147483647, 2019, 'b', 0, '6ac1def919d1f75227dd15913bd69ec6462da6609b6b3fe5912d44c953debb7d8412165ab6573a72edb197a2b9651acede1f', '$2y$10$stiHh9l7sU10cJPShYi/NeHUqAGF8qbtHqjNkvOQR8CREpW5fv6/u', 'user'),
(33, 'Abdussalam Faqih Umaro', 'kimimaroooo@gmail.com', 2147483647, 2019, 'a', 0, '9aed0825445ed071c0ba197cf3e7ef5070aeaa980cc45f559b216a57e0f7dbacb2df634244dcc4ceb7282f3652075d0a1f7a', '$2y$10$.gD14CPiA7hTclRulO/yyuyF4KX0PKdnUnuZwIsWdc2e2zYD8FGTK', 'user'),
(34, 'Ariq Fachry Ramadhan', 'rekken26@gmail.com', 19051397088, 2020, 'b', 1, 'c7395a7dc79fa480078028701ee70b7f273aa9bc02daec515948c52408429261e61e56a0473321919a15360e49da795c99b9', '$2y$10$0wDgwjNEuSplHmDaMUN6DeTtZvmxbe2xawjGMteznwjah6y5g1mE6', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_karya`
--
ALTER TABLE `data_karya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_karya`
--
ALTER TABLE `data_karya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
