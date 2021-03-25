-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 06:01 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `user_admin` varchar(255) NOT NULL,
  `password_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(16, 'a', 'agfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 'a', '994-wsl.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `namalengkap` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `angkatan` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `verified` tinyint(4) NOT NULL,
  `token` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `namalengkap`, `email`, `nim`, `angkatan`, `kelas`, `verified`, `token`, `password`, `usertype`) VALUES
(26, 'mokarya', 'mokaryad4@gmail.com', '123456', '2000', 'Z', 1, 'b009410446f5219f776a11baffeae2a18f5a384e9aa49df06100c76b20b2deda18874611f5ab2b2378310f49ec7c91615c72', '$2y$10$9nOUtszTx9IDD5M5FlnN8uc3VbVBzi0dqw38DjOhyaTX8aSNaoYf2', 'admin'),
(27, 'Muhammad Alif Hidayatullah', 'muhammad.19065@mhs.unesa.ac.id', '19051397065', '2019', 'B', 1, '9f443f50ad665034ea43cf967e4bbc5b9eedb75833c995271a39d457d0c29cac3983f4e09f535d1b3ee809fe3d1b51e3dbb8', '$2y$10$KcifS6vWYJWMeM/DART7AOEiqTEfpYbJT4/55mqb.OV2aHAo1nP0y', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_karya`
--
ALTER TABLE `data_karya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
