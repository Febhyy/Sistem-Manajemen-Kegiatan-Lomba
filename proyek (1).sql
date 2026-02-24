-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2023 at 11:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggotaclub`
--

CREATE TABLE `tb_anggotaclub` (
  `nim_mhs` int(10) NOT NULL,
  `nama_mhs` varchar(255) NOT NULL,
  `kelas_mhs` varchar(255) DEFAULT NULL,
  `alamat_mhs` varchar(255) DEFAULT NULL,
  `club` varchar(255) NOT NULL,
  `foto_mhs` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_anggotaclub`
--

INSERT INTO `tb_anggotaclub` (`nim_mhs`, `nama_mhs`, `kelas_mhs`, `alamat_mhs`, `club`, `foto_mhs`, `status`) VALUES
(176, 'arif', '1 SI D', 'jauh', 'softwareEngineering', 'uploads/1689695080_Laporan BDD_Arif (1).pdf', 'ditolak'),
(1111, 'arif', '1 SI A', 'jauh', 'softwareEngineering', 'uploads/1689703695_Flowchart.png', 'diterima'),
(2132, 'arif', '1 SI D', 'jauh', 'bisnis', 'uploads/1689687463_Screenshot (1).png', 'diterima'),
(2222, 'fadhil parmata', '1 SI A', 'jauh', 'pkm', 'uploads/1689688584_Screenshot (2).png', 'diterima'),
(2765, 'arif', '1 SI D', 'wrgwg', 'softwareEngineering', 'uploads/1689698498_Screenshot (24).png', 'diterima'),
(4411, 'Febhyy', '1 SI D', 'rowosari', 'uiux', 'uploads/1689707794_bg sunset.jpg', 'pending'),
(21345, 'arif', 'wrgeg', 'jauh', 'uiux', 'uploads/1689701581_Screenshot (22).png', 'diterima');

-- --------------------------------------------------------

--
-- Table structure for table `tb_club`
--

CREATE TABLE `tb_club` (
  `informasiclub` varchar(255) DEFAULT NULL,
  `namaclub` varchar(255) DEFAULT NULL,
  `anggotaclub` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_lomba`
--

CREATE TABLE `tb_lomba` (
  `id_lomba` int(20) NOT NULL,
  `namalomba` varchar(255) NOT NULL,
  `tingkatlomba` enum('None','Kota','Provinsi','Kabupaten','Nasional','Internasional') NOT NULL,
  `syaratlomba` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_lomba`
--

INSERT INTO `tb_lomba` (`id_lomba`, `namalomba`, `tingkatlomba`, `syaratlomba`) VALUES
(8, 'Gemastik', 'Nasional', 'bisa anu\r\n'),
(12, 'valooo', 'Nasional', 'harus jago');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengajuanlomba`
--

CREATE TABLE `tb_pengajuanlomba` (
  `id_pengajuan` int(20) NOT NULL,
  `nim_mhs` int(10) NOT NULL,
  `nama_mhs` varchar(255) DEFAULT NULL,
  `dospem` varchar(255) NOT NULL,
  `kategorilomba` varchar(255) DEFAULT NULL,
  `namatim` varchar(255) DEFAULT NULL,
  `namaanggota` varchar(255) DEFAULT NULL,
  `namalomba` varchar(255) DEFAULT NULL,
  `proposal` varchar(255) DEFAULT NULL,
  `keterangan` enum('PENDING','DITERIMA','DITOLAK') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pengajuanlomba`
--

INSERT INTO `tb_pengajuanlomba` (`id_pengajuan`, `nim_mhs`, `nama_mhs`, `dospem`, `kategorilomba`, `namatim`, `namaanggota`, `namalomba`, `proposal`, `keterangan`) VALUES
(29, 213, 'arif', 'nina', 'Tim', '-', '-', 'Gemastik', 'Flowchart.png', 'DITOLAK'),
(30, 12312, 'arif', 'nina', 'kwefjb', 'nqwjefnwq', 'jwebkwejgb', 'Gemastik', 'Screenshot (1).png', 'DITERIMA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `id_prestasi` int(255) NOT NULL,
  `nim_mhs` int(10) NOT NULL,
  `namaprestasi` varchar(255) DEFAULT NULL,
  `tingkatprestasi` varchar(255) DEFAULT NULL,
  `dokumentasi` varchar(255) NOT NULL,
  `keteranganprestasi` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_prestasi`
--

INSERT INTO `tb_prestasi` (`id_prestasi`, `nim_mhs`, `namaprestasi`, `tingkatprestasi`, `dokumentasi`, `keteranganprestasi`, `status`) VALUES
(30, 123123, 'JENIUS', 'internasional', '', 'sabar', 'Ditolak'),
(36, 1111, 'ngoding', 'internasional', 'Screenshot (5).png', 'asdfasf', 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `level` enum('admin','mahasiswa','kemahasiswaan','') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin@gmail.com', '123', 'admin', 'admin'),
(2, 'mahasiswa@gmail.com', '123', 'mahasiswa', 'mahasiswa'),
(3, 'kemahasiswaaan@gmail.com', '123', 'kemahasiswaan', 'kemahasiswaan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_validasiclub`
--

CREATE TABLE `tb_validasiclub` (
  `nim_mhs` int(10) NOT NULL,
  `nama_mhs` varchar(255) NOT NULL,
  `kelas_mhs` varchar(255) DEFAULT NULL,
  `alamat_mhs` varchar(255) DEFAULT NULL,
  `club` varchar(255) NOT NULL,
  `foto_mhs` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_validasiclub`
--

INSERT INTO `tb_validasiclub` (`nim_mhs`, `nama_mhs`, `kelas_mhs`, `alamat_mhs`, `club`, `foto_mhs`, `status`) VALUES
(4411, 'Febhyy', '1 SI D', 'rowosari', 'uiux', 'uploads/1689707794_bg sunset.jpg', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tb_validasilomba`
--

CREATE TABLE `tb_validasilomba` (
  `id_pengajuan` int(20) NOT NULL,
  `nim_mhs` int(10) NOT NULL,
  `nama_mhs` varchar(255) DEFAULT NULL,
  `dospem` varchar(255) NOT NULL,
  `kategorilomba` varchar(255) DEFAULT NULL,
  `namatim` varchar(255) DEFAULT NULL,
  `namaanggota` varchar(255) DEFAULT NULL,
  `namalomba` varchar(255) DEFAULT NULL,
  `proposal` varchar(255) DEFAULT NULL,
  `keterangan` enum('PENDING','DITERIMA','DITOLAK') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_validasilomba`
--

INSERT INTO `tb_validasilomba` (`id_pengajuan`, `nim_mhs`, `nama_mhs`, `dospem`, `kategorilomba`, `namatim`, `namaanggota`, `namalomba`, `proposal`, `keterangan`) VALUES
(9, 1111, 'tesa', 'KUS', 'individu', '', 'tesalonika', 'CUXION 2023', 'bg sunset.jpg', ''),
(10, 1111, 'Tesa', 'KUS', 'individu', '', 'Tesalonika', 'CUXION 2023', 'bg sunset.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_validasiprestasi`
--

CREATE TABLE `tb_validasiprestasi` (
  `id_prestasi` int(255) NOT NULL,
  `nim_mhs` int(10) NOT NULL,
  `namaprestasi` varchar(255) DEFAULT NULL,
  `tingkatprestasi` varchar(255) DEFAULT NULL,
  `dokumentasi` varchar(255) NOT NULL,
  `keteranganprestasi` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_validasiprestasi`
--

INSERT INTO `tb_validasiprestasi` (`id_prestasi`, `nim_mhs`, `namaprestasi`, `tingkatprestasi`, `dokumentasi`, `keteranganprestasi`, `status`) VALUES
(34, 1111, 'ngoding', 'internasional', 'Screenshot (5).png', 'asdfasf', ''),
(35, 5555, 'lomba ini', 'provinsi', 'logo-pcr.png', 'juara 1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggotaclub`
--
ALTER TABLE `tb_anggotaclub`
  ADD PRIMARY KEY (`nim_mhs`);

--
-- Indexes for table `tb_lomba`
--
ALTER TABLE `tb_lomba`
  ADD PRIMARY KEY (`id_lomba`);

--
-- Indexes for table `tb_pengajuanlomba`
--
ALTER TABLE `tb_pengajuanlomba`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_validasiclub`
--
ALTER TABLE `tb_validasiclub`
  ADD PRIMARY KEY (`nim_mhs`);

--
-- Indexes for table `tb_validasilomba`
--
ALTER TABLE `tb_validasilomba`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `tb_validasiprestasi`
--
ALTER TABLE `tb_validasiprestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_lomba`
--
ALTER TABLE `tb_lomba`
  MODIFY `id_lomba` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_pengajuanlomba`
--
ALTER TABLE `tb_pengajuanlomba`
  MODIFY `id_pengajuan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  MODIFY `id_prestasi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_validasilomba`
--
ALTER TABLE `tb_validasilomba`
  MODIFY `id_pengajuan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_validasiprestasi`
--
ALTER TABLE `tb_validasiprestasi`
  MODIFY `id_prestasi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
