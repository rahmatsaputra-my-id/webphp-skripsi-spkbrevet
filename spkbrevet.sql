-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2019 at 05:10 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkbrevet`
--

-- --------------------------------------------------------

--
-- Table structure for table `spkbrevet_alternatif`
--

CREATE TABLE `spkbrevet_alternatif` (
  `id` int(3) NOT NULL,
  `nama_alternatif` varchar(50) NOT NULL,
  `k1` int(3) NOT NULL,
  `k2` int(3) NOT NULL,
  `k3` int(3) NOT NULL,
  `k4` int(3) NOT NULL,
  `k5` int(3) NOT NULL,
  `k6` int(3) NOT NULL,
  `k7` int(3) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spkbrevet_alternatif`
--

INSERT INTO `spkbrevet_alternatif` (`id`, `nama_alternatif`, `k1`, `k2`, `k3`, `k4`, `k5`, `k6`, `k7`, `rating`) VALUES
(2, 'Amalia Nurul Hidayah', 55, 64, 48, 64, 84, 60, 90, 0.7806),
(3, 'Anindah Nurabiyah', 70, 52, 46, 91, 88, 42, 88, 0.841208),
(4, 'Annisa Ayu Budiman', 63, 75, 57, 100, 100, 65, 75, 0.851383),
(5, 'Arsyi Diarina Cahya', 60, 65, 42, 97, 100, 35, 80, 0.781667),
(6, 'Bunga Chintya', 58, 69, 39, 97, 91, 35, 75, 0.754518),
(7, 'Chairunnisa Sekar Kinanti', 62, 78, 41, 97, 96, 35, 75, 0.788368),
(8, 'Cindy Gusnitasar', 71, 62, 47, 100, 100, 70, 80, 0.887181),
(9, 'Citra Ayu Wulansari M', 56, 57, 50, 54, 62, 35, 80, 0.705943),
(10, 'Devina Yusriya Hapsari', 67, 57, 29, 54, 80, 35, 90, 0.772417),
(11, 'Dian Astara Siti Rahayu', 65, 66, 66, 97, 100, 35, 75, 0.823936),
(12, 'Dwi Ratna Prahasty', 70, 52, 50, 82, 88, 60, 75, 0.830746),
(13, 'Fajar Oktavaria Nurzaman', 65, 47, 46, 97, 100, 40, 85, 0.813611),
(14, 'Gusti Andang Galuh', 69, 47, 68, 97, 80, 37, 80, 0.831825),
(15, 'Ira Jessica Rizwana', 62, 65, 41, 97, 96, 35, 75, 0.776701),
(16, 'Ismi Anisa Putri', 69, 43, 55, 97, 84, 37, 80, 0.815778),
(17, 'Johanes Christofer', 52, 51, 40, 100, 92, 60, 75, 0.743025),
(18, 'Laras Dian Qur\'ani', 62, 63, 55, 100, 100, 65, 80, 0.844873),
(19, 'Mutia Fajarriani', 70, 49, 50, 81, 100, 55, 88, 0.858537),
(20, 'Nadia Agya Destari', 45, 28, 31, 57, 100, 40, 80, 0.633311),
(22, 'Nita Rahmah Saidah', 56, 58, 35, 100, 100, 65, 75, 0.775131),
(23, 'Ranny Alfionita Giandari', 54, 62, 41, 90, 100, 40, 80, 0.74775),
(24, 'Revi Dinda Chandra P', 40, 19, 70, 71, 90, 27, 75, 0.621479),
(25, 'Rifdah Wijdaan', 58, 19, 27, 49, 66, 38, 85, 0.669615),
(27, 'Rizky Amalia', 57, 57, 38, 96, 100, 40, 80, 0.76),
(28, 'Selvy Elida Haloho', 82, 69, 49, 95, 100, 46, 80, 0.91809),
(29, 'Utriya Mandasari Harta', 50, 65, 41, 80, 98, 35, 85, 0.726171),
(30, 'Wahyuni Sri Lestari S', 47, 32, 30, 70, 88, 32, 85, 0.650869),
(31, 'Yulia Rosdiana', 63, 62, 34, 100, 100, 65, 80, 0.825098),
(32, 'Zalika Nurul Kamila', 73, 43, 50, 94, 98, 72, 75, 0.868635);

-- --------------------------------------------------------

--
-- Table structure for table `spkbrevet_bobot`
--

CREATE TABLE `spkbrevet_bobot` (
  `id` int(4) NOT NULL,
  `bobot1` float NOT NULL,
  `bobot2` float NOT NULL,
  `bobot3` float NOT NULL,
  `bobot4` float NOT NULL,
  `bobot5` float NOT NULL,
  `bobot6` float NOT NULL,
  `bobot7` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spkbrevet_bobot`
--

INSERT INTO `spkbrevet_bobot` (`id`, `bobot1`, `bobot2`, `bobot3`, `bobot4`, `bobot5`, `bobot6`, `bobot7`) VALUES
(1, 0.4165, 0.0669, 0.0765, 0.0813, 0.0622, 0.0861, 0.2105);

-- --------------------------------------------------------

--
-- Table structure for table `spkbrevet_kriteria`
--

CREATE TABLE `spkbrevet_kriteria` (
  `id` int(4) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `sub_bab` varchar(50) NOT NULL,
  `atribut` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spkbrevet_kriteria`
--

INSERT INTO `spkbrevet_kriteria` (`id`, `nama_kriteria`, `sub_bab`, `atribut`) VALUES
(37, 'KUP', '87', 'Benefit'),
(38, 'PPH OP', '14', 'Benefit'),
(39, 'PPH BADAN', '16', 'Benefit'),
(40, 'AKUNTANSI PAJAK', '17', 'Benefit'),
(41, 'PPN', '13', 'Benefit'),
(42, 'PPH 21', '18', 'Benefit'),
(43, 'POTPUT', '44', 'Benefit');

-- --------------------------------------------------------

--
-- Table structure for table `spkbrevet_users`
--

CREATE TABLE `spkbrevet_users` (
  `id` int(3) NOT NULL,
  `email` varchar(12) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `repassword` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spkbrevet_users`
--

INSERT INTO `spkbrevet_users` (`id`, `email`, `username`, `password`, `repassword`) VALUES
(1, 'admin@gmail.', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `spkbrevet_alternatif`
--
ALTER TABLE `spkbrevet_alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spkbrevet_bobot`
--
ALTER TABLE `spkbrevet_bobot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spkbrevet_kriteria`
--
ALTER TABLE `spkbrevet_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spkbrevet_users`
--
ALTER TABLE `spkbrevet_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spkbrevet_alternatif`
--
ALTER TABLE `spkbrevet_alternatif`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `spkbrevet_bobot`
--
ALTER TABLE `spkbrevet_bobot`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `spkbrevet_kriteria`
--
ALTER TABLE `spkbrevet_kriteria`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `spkbrevet_users`
--
ALTER TABLE `spkbrevet_users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
