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
-- Database: `tubes_193040026`
--

-- --------------------------------------------------------

--
-- Table structure for table `elektronik`
--

CREATE TABLE `elektronik` (
  `id` int(11) NOT NULL,
  `nama` char(20) DEFAULT NULL,
  `chipset` char(50) DEFAULT NULL,
  `internal` char(50) DEFAULT NULL,
  `camera` char(50) DEFAULT NULL,
  `sensor` char(50) DEFAULT NULL,
  `gambar` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elektronik`
--

INSERT INTO `elektronik` (`id`, `nama`, `chipset`, `internal`, `camera`, `sensor`, `gambar`) VALUES
(1, 'huawei mate 20 pro', 'hisilicon kirin 980', '256 gb 8 gb ram', '40mp 20mp 8 mp 24mp', 'face id fingerprint', 'mate20pro.JPG'),
(2, 'huawei p30 lite', 'hisilicon kirin 710', '128 gb 6 gb ram', '24mp 8mp 2mp 32mp', 'fingerprint', 'p30lite.JPG'),
(3, 'xiaomi redmi 7', 'snapdragon 632', '64 gb 4 gb ram', '12mp 2mp 8mp', 'fingerprint', 'redmi7.JPG'),
(4, 'samsung galaxy a50', 'exynos 9610', '128 gb 6 gb ram', '25mp 8mp 5mp 25mp', 'fingerprint', 'samsung-galaxy-a50-sm-a505f-ds-1.JPG'),
(5, 'samsung galaxy s10e', 'exynos 9820', '256 gb 8 gb ram', '12mp 16mp 10mp', 'fingerprint', 's10e.JPG'),
(6, 'samsung galaxy s10', 'exynos 9820', '512 gb 8 gb ram', '12mp 12mp 16mp 10mp', 'fingerprint', 's10.JPG'),
(7, 'samsung galaxy s10+', 'exynos 9820', '512 gb 8 gb ram', '12mp 12mp 16mp 10mp 8mp', 'fingerprint', 's10+.JPG'),
(8, 'iphone xs max', 'apple a12 bionic', '512gb 4 gb ram', '12mp 12mp 7mp', 'face id', 'xsmax.JPG'),
(9, 'samsung galaxy fold', 'snapdragon 855', '512gb 12 gb ram', '12mp 12mp 16mp 10mp 8mp', 'fingerprint', 'fold.JPG'),
(10, 'huawei p30 pro', 'hisilicon kirin 980', '512 gb 8 gb ram', '40mp 20mp 32mp', 'fingerprint', 'p30pro.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
