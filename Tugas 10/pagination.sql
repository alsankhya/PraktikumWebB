-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2020 at 06:05 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pagination`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `age` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `name`, `nim`, `age`) VALUES
(1, 'Giri Kusuma', '1708561005', 21),
(2, 'Anggita Putra', '1708561007', 21),
(3, 'Agus Wahyu', '1708561008', 21),
(4, 'Dharma Putra', '1708561010', 21),
(5, 'Denny Indra', '1708561013', 21),
(6, 'Aryadi Suputra', '1708561014', 21),
(7, 'Bayu Wira', '1708561018', 21),
(8, 'Yuriko Christian', '1708561022', 21),
(9, 'Gung Rama', '1708561024', 21),
(10, 'Gede Indrayasa', '1708561030', 21),
(11, 'Lanang Ary', '1708561031', 21),
(12, 'Wahyu Tirta', '1708561032', 21),
(13, 'Erwin Winata', '1708561033', 21),
(14, 'Dewi Angreni', '1708561035', 21),
(15, 'Audini Nifira', '1708561036', 21),
(16, 'Sukma Putri', '1708561038', 21),
(17, 'Dinda Pratiwi', '1708561039', 21),
(18, 'Adis Luh', '1708561040', 21),
(19, 'Isthu Canistya', '1708561041', 21),
(20, 'Kenny Kurniadi', '1708561042', 21),
(21, 'Dewa Yudha Ari', '1708561043', 21),
(22, 'Yusha Tresnatama', '1708561044', 21),
(23, 'Rinaldi Owen', '1708561049', 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
