-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 06:08 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kas_barbershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kas`
--

CREATE TABLE `tb_kas` (
  `kode` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `keluar` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kas`
--

INSERT INTO `tb_kas` (`kode`, `tanggal`, `keterangan`, `jumlah`, `jenis`, `keluar`) VALUES
(1, '2021-05-07', 'cukur', 190000, 'masuk', 0),
(2, '2021-05-08', 'cukur', 30000, 'masuk', 0),
(3, '2021-05-09', 'cukur', 57000, 'masuk', 0),
(4, '2021-05-10', 'cukur', 40000, 'masuk', 0),
(5, '2021-05-11', 'cukur', 42000, 'masuk', 0),
(6, '2021-05-12', 'cukur', 62000, 'masuk', 0),
(7, '2021-05-13', 'cukur', 22000, 'masuk', 0),
(8, '2021-05-14', 'cukur', 20000, 'masuk', 0),
(9, '2021-05-15', 'cukur', 20000, 'masuk', 0),
(11, '2021-05-07', 'bedak dan puff', 0, 'keluar', 17000),
(33, '2021-05-09', 'alat cukur jenggot', 0, 'keluar', 8000),
(44, '2021-05-10', 'laundry', 0, 'keluar', 20000),
(66, '2021-05-12', 'semir dan conditioner', 0, 'keluar', 24000),
(67, '0000-00-00', '', 0, 'keluar', 0),
(68, '0000-00-00', '', 0, 'keluar', 0),
(111, '2021-07-24', 'aaaa', 100, 'masuk', 0),
(222, '2021-07-24', 'ssss', 2000, 'masuk', 0),
(333, '2021-07-24', 'fff', 1000, 'masuk', 0),
(4444, '2021-07-24', 'qqqq', 0, 'keluar', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `nama`, `password`, `level`) VALUES
(1, 'admin', 'Afinan', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kas`
--
ALTER TABLE `tb_kas`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kas`
--
ALTER TABLE `tb_kas`
  MODIFY `kode` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4445;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
