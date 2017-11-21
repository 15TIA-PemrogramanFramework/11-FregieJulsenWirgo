-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2017 at 07:31 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penerbangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `user`) VALUES
('a', 'a', 'Penumpang'),
('Fregie', 'Fregie', 'Penumpang'),
('oo', 'oo', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `penerbangan`
--

CREATE TABLE `penerbangan` (
  `id_penerbangan` int(255) NOT NULL,
  `id_pesawat` int(11) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `dari` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `waktu_keberangkatan` time NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerbangan`
--

INSERT INTO `penerbangan` (`id_penerbangan`, `id_pesawat`, `tanggal`, `dari`, `tujuan`, `waktu_keberangkatan`, `status`) VALUES
(9, 2, '11/30/2017', 'Pekanbaru', 'Jakarta', '02:35:00', 'Dijadwalkan'),
(10, 1, '12/02/2017', 'Medan', 'Pekanbaru', '14:50:00', 'Dijadwalkan'),
(11, 2, '11/14/2017', 'Pekanbaru', 'Jakarta', '16:30:00', 'Mendarat'),
(12, 3, '11/22/2017', 'Pekanbaru', 'Medan', '15:30:00', 'Ditunda');

-- --------------------------------------------------------

--
-- Table structure for table `penumpang`
--

CREATE TABLE `penumpang` (
  `id_penumpang` int(255) NOT NULL,
  `id_penerbangan` int(255) NOT NULL,
  `nama_penumpang` varchar(255) NOT NULL,
  `alamat_penumpang` varchar(255) NOT NULL,
  `no_hp_penumpang` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penumpang`
--

INSERT INTO `penumpang` (`id_penumpang`, `id_penerbangan`, `nama_penumpang`, `alamat_penumpang`, `no_hp_penumpang`, `username`) VALUES
(15, 9, 'Hendra', 'Jl. Sudirman No. 20', '087798652145', 'Fregie'),
(16, 9, 'Juni', 'Jl. Sudirman No. 20', '08987878451', 'Fregie'),
(17, 10, 'Pucuk', 'Jl Harum', '089865321478', 'a'),
(18, 9, 'Qua', 'Jl Mur', '08764512365', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `pesawat`
--

CREATE TABLE `pesawat` (
  `id_pesawat` int(11) NOT NULL,
  `tipe_pesawat` varchar(255) NOT NULL,
  `id_pilot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesawat`
--

INSERT INTO `pesawat` (`id_pesawat`, `tipe_pesawat`, `id_pilot`) VALUES
(1, 'A32', 1),
(2, 'A98', 2),
(3, 'B89', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pilot`
--

CREATE TABLE `pilot` (
  `id_pilot` int(11) NOT NULL,
  `nama_pilot` varchar(255) NOT NULL,
  `alamat_pilot` varchar(255) NOT NULL,
  `no_hp_pilot` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pilot`
--

INSERT INTO `pilot` (`id_pilot`, `nama_pilot`, `alamat_pilot`, `no_hp_pilot`) VALUES
(1, 'Oo', 'Jl. Darma Bakti No. 15', '082265321548'),
(2, 'Fregie', 'Jl. Durian No. 24', '0811643259'),
(4, 'Ani', 'JL. Riau', '089865324512');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `penerbangan`
--
ALTER TABLE `penerbangan`
  ADD PRIMARY KEY (`id_penerbangan`),
  ADD KEY `id_pesawat` (`id_pesawat`);

--
-- Indexes for table `penumpang`
--
ALTER TABLE `penumpang`
  ADD PRIMARY KEY (`id_penumpang`),
  ADD KEY `id_penerbangan` (`id_penerbangan`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `pesawat`
--
ALTER TABLE `pesawat`
  ADD PRIMARY KEY (`id_pesawat`),
  ADD KEY `id_pilot` (`id_pilot`);

--
-- Indexes for table `pilot`
--
ALTER TABLE `pilot`
  ADD PRIMARY KEY (`id_pilot`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penerbangan`
--
ALTER TABLE `penerbangan`
  MODIFY `id_penerbangan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `penumpang`
--
ALTER TABLE `penumpang`
  MODIFY `id_penumpang` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `pesawat`
--
ALTER TABLE `pesawat`
  MODIFY `id_pesawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pilot`
--
ALTER TABLE `pilot`
  MODIFY `id_pilot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `penerbangan`
--
ALTER TABLE `penerbangan`
  ADD CONSTRAINT `penerbangan_ibfk_1` FOREIGN KEY (`id_pesawat`) REFERENCES `pesawat` (`id_pesawat`);

--
-- Constraints for table `penumpang`
--
ALTER TABLE `penumpang`
  ADD CONSTRAINT `penumpang_ibfk_1` FOREIGN KEY (`username`) REFERENCES `login` (`username`),
  ADD CONSTRAINT `penumpang_ibfk_2` FOREIGN KEY (`id_penerbangan`) REFERENCES `penerbangan` (`id_penerbangan`);

--
-- Constraints for table `pesawat`
--
ALTER TABLE `pesawat`
  ADD CONSTRAINT `pesawat_ibfk_1` FOREIGN KEY (`id_pilot`) REFERENCES `pilot` (`id_pilot`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
