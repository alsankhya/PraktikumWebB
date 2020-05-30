-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2020 at 04:00 PM
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
-- Database: `db_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `meminjam`
--

CREATE TABLE `meminjam` (
  `id_pinjam` int(3) NOT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `id_anggota` int(3) DEFAULT NULL,
  `kd_buku` varchar(5) DEFAULT NULL,
  `kembali` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meminjam`
--

INSERT INTO `meminjam` (`id_pinjam`, `tgl_pinjam`, `id_anggota`, `kd_buku`, `kembali`) VALUES
(2, '2020-05-27', 3, 'BK02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `kode_buku` varchar(10) NOT NULL,
  `judul_buku` varchar(128) NOT NULL,
  `penulis` varchar(128) NOT NULL,
  `tahun_terbit` int(4) NOT NULL,
  `nama_penerbit` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `rak` varchar(128) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`kode_buku`, `judul_buku`, `penulis`, `tahun_terbit`, `nama_penerbit`, `gambar`, `rak`, `stok`) VALUES
('BK01', 'Ke Mana Larinya Harta Bersama Setelah Perceraian?', 'Verlyta Swislyn', 2020, 'Elex Media Komputindo', 'e5bb04fd7fcf3571ee133a6a6ff581e5.jpg', 'R01', 3),
('BK02', 'Sejarah Lengkap Perang Dunia 1: 1914-1918', 'Alfi Arifian', 2017, 'Sociality', '8f12c4874e69fcb01048180d9ce1210f.jpg', 'R02', 1),
('BK03', 'Sejarah Lengkap Dunia Abad Pertengahan 500-1400 M', 'Alfi Arifian', 2017, 'Sociality', '7d63682656bdccb9e31d0a2eaa8f06a5.jpg', 'R02', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `passwords` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan','','') NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `status_user` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `passwords`, `alamat`, `tanggal_lahir`, `jenis_kelamin`, `no_tlp`, `status_user`) VALUES
(1, 'Super Admin', 'superadmin', 'superadmin', 'tangsel', '2000-05-13', 'Perempuan', '082234567890', 'Super Admin'),
(2, 'adis', 'admin', 'admin', 'Denpasar', '1999-11-18', 'Perempuan', '081234567890', 'Admin'),
(3, 'gek adis', 'gekadis', 'gekadis123', 'Bangli', '1999-05-18', 'Perempuan', '081234567890', 'User'),
(4, 'sankhya', 'alsankhya', 'alsankhya', 'jimbaran', '2004-04-04', 'Perempuan', '082134561234', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meminjam`
--
ALTER TABLE `meminjam`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `kd_buku` (`kd_buku`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meminjam`
--
ALTER TABLE `meminjam`
  MODIFY `id_pinjam` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `meminjam`
--
ALTER TABLE `meminjam`
  ADD CONSTRAINT `meminjam_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `tb_user` (`id`),
  ADD CONSTRAINT `meminjam_ibfk_2` FOREIGN KEY (`kd_buku`) REFERENCES `tb_buku` (`kode_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
