-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2018 at 05:03 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bukubantu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cpns`
--

CREATE TABLE `tbl_cpns` (
  `id_cpns` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nip` varchar(19) DEFAULT NULL,
  `golongan` varchar(100) DEFAULT NULL,
  `satuan_kerja` varchar(100) DEFAULT NULL,
  `no_surat` varchar(100) DEFAULT NULL,
  `tanggal_surat` date DEFAULT NULL,
  `keterangan` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cpns`
--

INSERT INTO `tbl_cpns` (`id_cpns`, `nama`, `nip`, `golongan`, `satuan_kerja`, `no_surat`, `tanggal_surat`, `keterangan`) VALUES
(1, 'muhammad alizal putra ganteng', '123456789012345678', '2', 'Pengadilan Tinggi Tanjung karang', '23', '2018-08-20', 'okoesda'),
(2, 'muhammad alizal putra ganteng', '123456789012345678', '2', 'Pengadilan Tinggi Tanjung karang', '23', '2018-05-20', 'oke');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pensiun`
--

CREATE TABLE `tbl_pensiun` (
  `id_pensiun` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `no_surat` varchar(100) DEFAULT NULL,
  `tanggal_surat` date DEFAULT NULL,
  `tanggal_kirim` date DEFAULT NULL,
  `unit_kerja` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ukpbkn`
--

CREATE TABLE `tbl_ukpbkn` (
  `id_ukpbkn` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `no_surat_asal` varchar(100) DEFAULT NULL,
  `no_surat_tujuan` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `pangkat_asal` varchar(100) DEFAULT NULL,
  `pangkat_usul` varchar(100) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `satuan_kerja` varchar(100) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ukpma`
--

CREATE TABLE `tbl_ukpma` (
  `id_ukpma` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `no_surat_asal` varchar(100) DEFAULT NULL,
  `no_surat_tujuan` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `pangkat_asal` varchar(100) DEFAULT NULL,
  `pangkat_usul` varchar(100) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `satuan_kerja` varchar(100) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ukpma`
--

INSERT INTO `tbl_ukpma` (`id_ukpma`, `nama`, `nip`, `no_surat_asal`, `no_surat_tujuan`, `tanggal`, `pangkat_asal`, `pangkat_usul`, `jabatan`, `satuan_kerja`, `keterangan`) VALUES
(7, 'muhammad alizal putra ganteng', '123456789012345678', 'gsdj/sjdhiw/12p/8393/12-2', 'gsdj/sjdhiw/12p/8393/12-2', '2018-07-20', 'IV', 'IV/a', 'p\\Panitera ', 'Pengadilan Tinggi Tanjung karang', 'sdawa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cpns`
--
ALTER TABLE `tbl_cpns`
  ADD PRIMARY KEY (`id_cpns`);

--
-- Indexes for table `tbl_pensiun`
--
ALTER TABLE `tbl_pensiun`
  ADD PRIMARY KEY (`id_pensiun`);

--
-- Indexes for table `tbl_ukpma`
--
ALTER TABLE `tbl_ukpma`
  ADD PRIMARY KEY (`id_ukpma`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cpns`
--
ALTER TABLE `tbl_cpns`
  MODIFY `id_cpns` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pensiun`
--
ALTER TABLE `tbl_pensiun`
  MODIFY `id_pensiun` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_ukpma`
--
ALTER TABLE `tbl_ukpma`
  MODIFY `id_ukpma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
