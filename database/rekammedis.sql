-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2019 at 01:06 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekammedis`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `no_reg` varchar(20) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `spesialist` varchar(50) DEFAULT NULL,
  `no_telpon` varchar(15) DEFAULT NULL,
  `jenis_kel` enum('L','P','l','p') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`no_reg`, `nama`, `alamat`, `spesialist`, `no_telpon`, `jenis_kel`) VALUES
('12', 'Doket Baru', 'Kedaton', 'Spesialist Anak', '0721707147', 'L'),
('6767114', 'Dimas Riyadi', 'Jalan Teuku Umar', 'Spesialist Anak', '089677189755', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `umur` varchar(3) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_telpon` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`nik`, `nama`, `umur`, `tgl_lahir`, `alamat`, `no_telpon`) VALUES
('1871052405980001', 'siapa', '17', '1999-05-09', 'Rajabasa', '08154056860'),
('1871052405980003', 'Dimas Riyadi', '24', '1999-03-09', 'Jalan Pangeran Antasari Gg Langgar 1 No 5 Kedamaian , Bandar Lampung', '81377687766'),
('1871052405980005', 'Muhammad Bella Buay Nunyai', '22', '1998-05-24', 'Jalan Pangeran Antasari Gg Langgar 1 No 5 Kedamaian , Bandar Lampun', '89677189744');

-- --------------------------------------------------------

--
-- Table structure for table `rm`
--

CREATE TABLE `rm` (
  `no_rm` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `diagnosa` varchar(150) DEFAULT NULL,
  `obat` varchar(30) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `no_reg` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rm`
--

INSERT INTO `rm` (`no_rm`, `tanggal`, `diagnosa`, `obat`, `nik`, `no_reg`) VALUES
('RM0001', '2019-06-15', 'Pusing Pusing', 'Parasetamol', '1871052405980003', NULL),
('RM0002', '2019-06-15', 'Perut Mulas', 'Magg', '1871052405980005', NULL),
('RM0003', '2019-06-16', 'Demam', 'Parasetamol', '1871052405980003', NULL),
('', '0000-00-00', '', '', '1871052405980003', '6767114'),
('RM0004', '0000-00-00', 'Mata Berair, Mual Mual', 'Paracetamol', '1871052405980005', '6767114'),
('RM0005', '0000-00-00', 'Mata Berair, Mual Mual', 'Paracetamol', '1871052405980005', '6767114'),
('RM0006', '0000-00-00', 'Panas', 'Vitamin c', '1871052405980003', '6767114'),
('RM0007', '2019-06-17', 'Panas', 'Paracetamol', '1871052405980003', '6767114'),
('1', '2019-06-04', 'Mual, Pusing.', 'Paracetamol', '1871052405980001', '12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` enum('dokter','admin','operator','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(10, 'dokter', 'dokter', 'dokter'),
(14, 'operator', 'operator', 'operator'),
(24, 'testlagi', 'coba', 'dokter'),
(26, 'bela', 'bella', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`no_reg`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `rm`
--
ALTER TABLE `rm`
  ADD KEY `nik` (`nik`),
  ADD KEY `no_reg` (`no_reg`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rm`
--
ALTER TABLE `rm`
  ADD CONSTRAINT `rm_ibfk_nik` FOREIGN KEY (`nik`) REFERENCES `pasien` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rm_ibfk_no_reg` FOREIGN KEY (`no_reg`) REFERENCES `dokter` (`no_reg`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
