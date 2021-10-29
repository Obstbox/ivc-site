-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 29, 2021 at 02:52 PM
-- Server version: 5.7.35-0ubuntu0.18.04.2
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ivc`
--

-- --------------------------------------------------------

--
-- Table structure for table `computers`
--

CREATE TABLE `computers` (
  `id` int(11) NOT NULL,
  `serial_num` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `inventory_num` int(8) DEFAULT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mother_board` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ram_type` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `ram_size` int(11) NOT NULL,
  `cpu_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `cpu_freq` decimal(10,0) NOT NULL,
  `storage_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `storage_size` int(8) NOT NULL,
  `video_card` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `display` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cd_drive` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `install_date` date NOT NULL,
  `notes` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `computers`
--

INSERT INTO `computers` (`id`, `serial_num`, `inventory_num`, `name`, `location`, `mother_board`, `ram_type`, `ram_size`, `cpu_name`, `cpu_freq`, `storage_name`, `storage_size`, `video_card`, `display`, `cd_drive`, `install_date`, `notes`) VALUES
(2, 'dsg54g33g3g343g', 35353, 'ok-insp', 'специалист отдела кадров', 'foxconn 45gm', 'ddr2', 2048, 'Intel Pentium DualCore', '2700', 'western digital', 120, NULL, 'Benq QW4', NULL, '2013-07-16', 'сломался или сгорел'),
(17, '204028FSV0081', 35014, 'dir-sm', 'приёмная директора', 'Foxconn 45GM', 'ddr2', 4096, 'Intel Pentium DualCore', '2000', 'Maxtor', 250, NULL, 'HP 24y', 'Optiarc DVD RW AD-7190A', '2007-10-12', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computers`
--
ALTER TABLE `computers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
