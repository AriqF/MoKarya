-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 11:38 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
  `foto_karya` varchar(255) NOT NULL,
  `id_pengunggah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_karya`
--

INSERT INTO `data_karya` (`id`, `judul`, `deskripsi`, `anggota`, `foto_karya`, `id_pengunggah`) VALUES
(65, 'The Beautiful In me', 'Texas in 1901, now barren and exhausted. The site is recreated as a digital simulation and placed at its centre a flagpole bearing a flag of perpetually-renewing pressurised black smoke.', 'Salvatore Gannaci', '476-wallpaperflare.com_wallpaper (1).jpg', 27),
(67, 'Mini Mothmeister', 'Texas in 1901, now barren and exhausted. The site is recreated as a digital simulation and placed at its centre a flagpole bearing a flag of perpetually-renewing pressurised black smoke.', 'Matt  Willson', '577-wallpaperflare.com_wallpaper (3).jpg', 35),
(70, 'Just Meaning', 'Abdulrahman Eid @abdulrahman.m.eid - Works (mixed media miniature sculptures/diorama) 2020 #abdulrahmaneid The first photo: @yat_studio Thanks to @modest_ossipoff for introducing the artist', 'Solovey Vadim ', '357-stars-in-the-sky-foggy-season-forest-mountains-4k-ql-1920x1080.jpg', 35),
(71, 'As You Go', 'Carl Dobsky @carl_dobsky “The Argument of the Blind Man and the Lame Man” (oil on linen) 56” x 72” 2021 #carldobsky', 'Carl Dobsky', '491-jacket.jpg', 35),
(72, 'Become A Monster', 'Christoph Schiessl @schiesslchristoph - Frog God (carved limewood/glazed with black lacquered with green and white) 42 x 12 x 11 cm. #christophschiessl', 'Christoph Schiessl ', '811-27.jpg', 35),
(73, 'Compromise ', 'Emir Kobilić (Swedish: [ˈěːmɪr ˈkǔːbɪlɪtɕ];[citation needed] born 29 July 1986), better known as Salvatore Ganacci (Italian: [salvaˈtoːre ɡaˈnattʃi]), is a Bosnian-born Swedish DJ, record producer and a co-founder of the THOR radio show on Sveriges Radio.  \"Salvatore Ganacci\" is a nickname which he is known to receive from his friends, because his \"style of play[ing football] is very Italian\" and the name sounds Italian.[1]', 'Elimar Gennic', '456-eagle-glowing-eyes-5k-7j-1920x1080.jpg', 35),
(74, 'Kibutsuji Muzan', 'Pablo Amoedo @amoedo.pablo - invocación (bronze/iron/aluminum) 60 x 50 x 15 cm. 2021 #pabloamoedo', 'Gronkowski', '661-telephone-booth-drowning-in-sea-out-of-order-pi-1920x1080.jpg', 35),
(75, 'Fata! Room', 'Sebastian Lochmann @hatch_efx - Lumaca [Snail Lady] (scaled 3d print of actress Maria Pia Timo, sculpted on with Plastiline and Monsterclay) 25 x 11 x 27 cm. 2020 [made for Matteo Garrone’s ‘Pinocchio’] #sebastianlochmann #pinocchio', 'Koko Ricos', '576-croatia.jpg', 35),
(76, 'Oh Su Hyang', 'I don’t know any of you guys, but i feel everybody in neotic’s comment section is going through hard times, and I just wanted to say, even I don’t know you, I wish you the best, I’m going through a really rough time, sometimes I feel hopeless, but I will keep trying. I hope you also keep trying with us, you are important, you are worthy. Thank you for being here.', 'Pablo Amoedo', '723-big-sur-5k-px-1920x1080.jpg', 35),
(77, 'Dr Phill', 'Janis Woode @janiswoodemetalsculptor - As You Go (plate steel/wrapped copper wire) 3.5” x 31” x 5.5” 2020 #janiswoode #janiswoodestudio', 'John Doe, Issac', '656-34.jpg', 35),
(78, 'The Last Supper', 'Ilkka Virtanen @virtanen_ilkka - Flos Manus, from \"Plan B\" series (aspen) 35 x 170 x 35 cm. 2021 #ilkkavirtanen', 'Ilkka Virtanen', '165-22.jpg', 35),
(79, 'Lucid Dreams', 'Martin Krammer @martinkrammer_art - Das süsse Geschäft V [Pieta] (oil and acrylic paint on pine) 20 x 25 x 15 cm. 2019/2020 #martinkrammer via @galerietrapp', 'Martin Krammer', '324-4.jpg', 35),
(80, 'Destruction', 'Skink Chen - Oh, My God! The King of Fake Bugs!! (painted cast resin/mixed media) 2020 #skinkchen', 'Skink Xchen', '399-13.jpg', 35);

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
(26, 'mokarya', 'mokaryad4@gmail.com', 123456, 2000, 'Z', 1, 'b009410446f5219f776a11baffeae2a18f5a384e9aa49df06100c76b20b2deda18874611f5ab2b2378310f49ec7c91615c72', '$2y$10$V34M3RBjSNRET58fFIgvT.A1EovB/n4f5fQQVWH/a9LvCoHXYqxWG', 'admin'),
(27, 'Muhammad Alif H', 'muhammad.19065@mhs.unesa.ac.id', 2147483647, 2020, 'B', 1, '9f443f50ad665034ea43cf967e4bbc5b9eedb75833c995271a39d457d0c29cac3983f4e09f535d1b3ee809fe3d1b51e3dbb8', '$2y$10$KcifS6vWYJWMeM/DART7AOEiqTEfpYbJT4/55mqb.OV2aHAo1nP0y', 'admin'),
(31, 'superuser', 'ariqfachry2611@gmail.com', 666, 2000, 's', 1, '06249e573804e80c841d1b595dd2da5bb2fb158eefe0e63fdf7e4854309421fdfb455af79e093d87e3a5772218504fb4b5a2', '$2y$10$KjGuhBp4yiq4Rm2wUIMeduBy7obLQyU2ITDUgZmpEYJJxo/PryAcG', 'admin'),
(32, 'Ariq Fachry Ramadhan', 'ariq.19047@mhs.unesa.ac.id', 2147483647, 2019, 'b', 0, '6ac1def919d1f75227dd15913bd69ec6462da6609b6b3fe5912d44c953debb7d8412165ab6573a72edb197a2b9651acede1f', '$2y$10$stiHh9l7sU10cJPShYi/NeHUqAGF8qbtHqjNkvOQR8CREpW5fv6/u', 'user'),
(33, 'Raihan Faqih Umaro', 'kimimaroooo@gmail.com', 2147483123, 2019, 'a', 0, '9aed0825445ed071c0ba197cf3e7ef5070aeaa980cc45f559b216a57e0f7dbacb2df634244dcc4ceb7282f3652075d0a1f7a', '$2y$10$.gD14CPiA7hTclRulO/yyuyF4KX0PKdnUnuZwIsWdc2e2zYD8FGTK', 'user'),
(34, 'Ariq Fachry Ramadhan', 'rekken26@gmail.com', 19051397088, 2020, 'b', 1, 'c7395a7dc79fa480078028701ee70b7f273aa9bc02daec515948c52408429261e61e56a0473321919a15360e49da795c99b9', '$2y$10$aOqq5UQB.9QJ8mY37/ueOu3NBMukLD0FTKLphtd//jpbKRiULaiPu', 'user'),
(35, 'enviro', 'simpelenviro@gmail.com', 987, 2019, 'A', 1, '36935ae2f1ae62d8ed962dc7963ca6ed727c1dc2926e9b7407d230c590be242ac1e8bdc551f91a1336f93c43c4257063dabc', '$2y$10$Bay8TNmZaHUUOC9jIJIB7es3JZZz3nKGq076CmoVb0QcxiLzVL4QC', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_rating`
--

CREATE TABLE `user_rating` (
  `rating` tinyint(4) NOT NULL,
  `komentar` text NOT NULL,
  `namalengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_rating`
--

INSERT INTO `user_rating` (`rating`, `komentar`, `namalengkap`) VALUES
(5, ' baik', 'guest'),
(5, ' baguss', 'guest'),
(4, 'hahaha', ''),
(4, ' hjahaha', 'guest'),
(5, ' good', 'Han');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_karya`
--
ALTER TABLE `data_karya`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pengunggah` (`id_pengunggah`) USING BTREE;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_karya`
--
ALTER TABLE `data_karya`
  ADD CONSTRAINT `data_karya_ibfk_1` FOREIGN KEY (`id_pengunggah`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
