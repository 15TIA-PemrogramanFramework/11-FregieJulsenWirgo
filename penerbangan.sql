-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2017 at 05:25 PM
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
  `id_pesawat` varchar(255) NOT NULL,
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
(1, '2', '2017-11-08', 'Pekanbaru', 'Jakarta', '07:11:00', 'Dijadwalkan'),
(2, '1', '2017-11-14', 'Medan', 'Bali', '11:43:00', 'Dijadwalkan'),
(3, '1', '03/12/2016', 'Jakarta', 'Jakarta', '08:00:00', 'Dijadwalkan'),
(4, '1', '03/12/2016', 'Jakarta', 'Jakarta', '00:00:00', 'Dijadwalkan'),
(5, '1', '03/12/2016', 'Jakarta', 'Jakarta', '00:00:00', 'Mendarat'),
(6, '1', '03/12/2016', 'Jakarta', 'Jakarta', '00:00:00', 'Ditunda'),
(7, '1', '03/12/2016', 'Pekanbaru', 'Medan', '00:00:00', 'Dijadwalkan'),
(8, '3', '11/30/2017', 'Pekanbaru', 'Medan', '03:30:00', 'Mendarat');

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
(4, 2, 'Fregie', 'jl pemuda', '081232659845', 'Fregie'),
(13, 6, 'qwe', 'qwe', 'qwe', 'Fregie'),
(14, 6, 'Oo', 'asdasd', '1231', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `pesawat`
--

CREATE TABLE `pesawat` (
  `id_pesawat` int(11) NOT NULL,
  `tipe_pesawat` varchar(255) NOT NULL,
  `id_pilot` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesawat`
--

INSERT INTO `pesawat` (`id_pesawat`, `tipe_pesawat`, `id_pilot`) VALUES
(1, 'A32', '1'),
(2, 'A98', '2'),
(3, 'B89', '2');

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
  ADD PRIMARY KEY (`id_penerbangan`);

--
-- Indexes for table `penumpang`
--
ALTER TABLE `penumpang`
  ADD PRIMARY KEY (`id_penumpang`);

--
-- Indexes for table `pesawat`
--
ALTER TABLE `pesawat`
  ADD PRIMARY KEY (`id_pesawat`);

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
  MODIFY `id_penerbangan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `penumpang`
--
ALTER TABLE `penumpang`
  MODIFY `id_penumpang` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `pesawat`
--
ALTER TABLE `pesawat`
  MODIFY `id_pesawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pilot`
--
ALTER TABLE `pilot`
  MODIFY `id_pilot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
