-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 07:58 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mfc`
--

-- --------------------------------------------------------

--
-- Table structure for table `kwitansi`
--

CREATE TABLE `kwitansi` (
  `id_kwitansi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `tgl_pesan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kwitansi`
--

INSERT INTO `kwitansi` (`id_kwitansi`, `id_user`, `id_status`, `tgl_pesan`) VALUES
(52, 15, 1, '2018-10-21 07:28:46'),
(53, 15, 1, '2018-10-21 08:28:05'),
(54, 15, 1, '2018-10-29 12:50:12');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_kwitansi` int(11) NOT NULL,
  `total_biaya` int(20) NOT NULL,
  `uang_muka` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_kwitansi`, `total_biaya`, `uang_muka`) VALUES
(35, 52, 0, 0),
(36, 53, 0, 0),
(37, 54, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `nama_status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `nama_status`) VALUES
(1, 'Booking'),
(2, 'Boked'),
(3, 'Finish');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_lapangan1`
--

CREATE TABLE `tb_jadwal_lapangan1` (
  `id_jadwal_lapangan1` int(11) NOT NULL,
  `id_kwitansi` int(11) NOT NULL,
  `id_lapangan` int(11) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_slesai` time NOT NULL,
  `tanggal_main` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal_lapangan1`
--

INSERT INTO `tb_jadwal_lapangan1` (`id_jadwal_lapangan1`, `id_kwitansi`, `id_lapangan`, `jam_mulai`, `jam_slesai`, `tanggal_main`) VALUES
(1, 52, 1, '12:12:00', '12:01:00', '2018-10-03'),
(2, 53, 2, '13:00:00', '14:00:00', '2018-10-21'),
(3, 54, 1, '12:22:00', '22:33:00', '2018-10-29');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lapangan`
--

CREATE TABLE `tb_lapangan` (
  `id_lapangan` int(11) NOT NULL,
  `nama_lapangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lapangan`
--

INSERT INTO `tb_lapangan` (`id_lapangan`, `nama_lapangan`) VALUES
(1, 'Lapangan 1'),
(2, 'Lapangan 2'),
(3, 'Lapangan 3'),
(4, 'Lapangan 4'),
(5, 'Lapangan 5 '),
(6, 'Lapangan 6');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_kwitansi` int(11) NOT NULL,
  `nama_pemesan` varchar(11) NOT NULL,
  `nama_tim` varchar(25) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `tlp` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id_pemesanan`, `id_kwitansi`, `nama_pemesan`, `nama_tim`, `alamat`, `tlp`) VALUES
(36, 52, 'bangdan', 'uika fc', 'bogor', '078676275732'),
(37, 53, 'bangdan', 'uika fc', 'bogor', '078676275732'),
(38, 54, 'bangdan', 'uika fc', 'bogor', '078676275732');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `nama_tim` varchar(25) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` char(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','user','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `nama_tim`, `alamat`, `no_hp`, `password`, `level`) VALUES
(13, 'zen', 'zen12', 'bintar', 'bogor', '078676275732', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(14, 'bangdan', 'bangdan', 'bintar', 'bogor', '078676275732', 'a2a1cd4ba373cdeefab5c1daae682035', 'admin'),
(15, 'bangdan', 'bangdan12', 'uika fc', 'bogor', '078676275732', 'e10adc3949ba59abbe56e057f20f883e', 'user'),
(16, 'dani', 'bangdan12', 'bintar', 'citeureup', '078676275732', '827ccb0eea8a706c4c34a16891f84e7b', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kwitansi`
--
ALTER TABLE `kwitansi`
  ADD PRIMARY KEY (`id_kwitansi`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_kwitansi` (`id_kwitansi`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tb_jadwal_lapangan1`
--
ALTER TABLE `tb_jadwal_lapangan1`
  ADD PRIMARY KEY (`id_jadwal_lapangan1`),
  ADD KEY `id_kwitansi` (`id_kwitansi`);

--
-- Indexes for table `tb_lapangan`
--
ALTER TABLE `tb_lapangan`
  ADD PRIMARY KEY (`id_lapangan`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_kwitansi` (`id_kwitansi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kwitansi`
--
ALTER TABLE `kwitansi`
  MODIFY `id_kwitansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_jadwal_lapangan1`
--
ALTER TABLE `tb_jadwal_lapangan1`
  MODIFY `id_jadwal_lapangan1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_lapangan`
--
ALTER TABLE `tb_lapangan`
  MODIFY `id_lapangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_kwitansi`) REFERENCES `kwitansi` (`id_kwitansi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_jadwal_lapangan1`
--
ALTER TABLE `tb_jadwal_lapangan1`
  ADD CONSTRAINT `tb_jadwal_lapangan1_ibfk_1` FOREIGN KEY (`id_kwitansi`) REFERENCES `kwitansi` (`id_kwitansi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD CONSTRAINT `tb_pemesanan_ibfk_1` FOREIGN KEY (`id_kwitansi`) REFERENCES `kwitansi` (`id_kwitansi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
