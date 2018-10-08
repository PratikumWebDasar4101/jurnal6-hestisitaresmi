-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2018 at 06:51 AM
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
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nim` int(10) NOT NULL,
  `nama` text NOT NULL,
  `kelas` text NOT NULL,
  `jeniskelamin` text NOT NULL,
  `hobi` text NOT NULL,
  `fakultas` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nim`, `nama`, `kelas`, `jeniskelamin`, `hobi`, `fakultas`, `alamat`) VALUES
(0, '', '', '', '', '', ''),
(37498322, 'ndsds', 'D3TK', 'Perempuan', 'Browsing', 'Fakultas Ekonomi Bisnis', 'bajksh'),
(123456789, 'hes', 'D3TK', 'Perempuan', 'Menyendiri', 'Fakultas Komunikasi Bisnis', 'DS bandung'),
(670112389, 'Deksa Titah Prasojo', 'D3TT', 'Perempuan', 'Nonton', 'Fakultas Ekonomi Bisnis', 'Buah Batu'),
(670118723, 'nana', 'D3SISMED', 'Laki-Laki', 'Menyendiri', 'Fakultas Ilmu Terapan', 'Bandung'),
(839273622, 'jshjak', 'D3IF', 'Perempuan', 'Menyendiri', 'Fakultas Komunikasi Bisnis', 'DS bandung'),
(2147483647, 'Hesti SItaresmi', 'D3TT', 'Perempuan', 'Browsing', 'Fakultas Ekonomi Bisnis', 'Bandung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
