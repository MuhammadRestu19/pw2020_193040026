-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 12:05 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040026`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` char(25) DEFAULT NULL,
  `nrp` char(9) DEFAULT NULL,
  `email` char(30) DEFAULT NULL,
  `jurusan` char(20) DEFAULT NULL,
  `gambar` char(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'joni sutanto', '173040004', 'joni@gmail.com', 'teknik informatika', 'joni.jpg'),
(2, 'sudarmini', '173040020', 'darmini@gmail.com', 'teknik informatika', 'darmini.jpg'),
(3, 'adam', '183040018', 'adam@gmail.com', 'teknik informatika', 'adam.jpg'),
(4, 'bagus', '183040098', 'bagus@gmail.com', 'teknik informatika', 'bagus.jpg'),
(5, 'bagas', '183040099', 'bagas@gmaiol.com', 'teknik informatika', 'bagas.jpg'),
(6, 'alex', '183040056', 'alex@gmail.com', 'teknik informatika', 'alex.jpg'),
(7, 'benny', '193040027', 'benny@gmail.com', 'teknik informatika', 'benny.jpg'),
(8, 'kimi', '183040078', 'kimi@gmail.com', 'teknik informatika', 'kimi.jpg'),
(9, 'erwin', '193040057', 'erwin@gmail.com', 'teknik informatika', 'erwin.jpg'),
(10, 'andre', '193040081', 'andre@gmail.com', 'teknik informatika', 'andre.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
