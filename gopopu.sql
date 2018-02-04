-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2017 at 05:06 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gopopu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level` int(1) NOT NULL,
  `nik` bigint(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `level`, `nik`) VALUES
('xmodx', 'xmodx123', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nik` bigint(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `kota_asal` varchar(100) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `status` enum('kawin','belum kawin') DEFAULT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `kewarganegaran` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nik`, `nama`, `email`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `kota_asal`, `agama`, `jenis_kelamin`, `status`, `pekerjaan`, `kewarganegaran`, `deskripsi`, `foto`) VALUES
(1234554321675432, 'XmodxHunter', 'xmodx@lussa.net', 'Bandung', '2010-02-03', 'Cijerah gg pelita', 'Bandung', 'Islam', 'L', 'belum kawin', 'Karyawan', 'Indonesia', 'wowowowowo', ''),
(2736454645364536, 'Siti', 'siti@mail.com', 'Bandung', '1996-05-15', 'Margaasih', 'Ciamis', '0', 'P', 'belum kawin', 'Karyawan', 'Indonesia', 'lalalla', 'wow2.png'),
(3273150405950007, 'Saefuly', 'Saeful@lussa.net', 'Bandung', '1995-05-04', 'Jl. Cijerah GG. Pelita RT.06 RW.02', 'Bandung', 'Islam', 'L', 'belum kawin', 'Karyawan Swasta', 'Indonesia', 'HAHAHAHAHAHA\"', 'wow.png'),
(8758475847575847, 'Bobby', 'bobby@mail.com', 'Bandung', '2001-02-08', 'Melong Asih', 'Bandung', '0', 'P', 'belum kawin', 'Pelajar', 'Indonesia', 'lalalalala', 'wow.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
