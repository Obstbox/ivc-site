-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 19, 2021 at 10:40 AM
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
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ram_size` int(11) NOT NULL,
  `cpu_freq` int(11) NOT NULL,
  `install_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `computers`
--

INSERT INTO `computers` (`id`, `name`, `location`, `ram_size`, `cpu_freq`, `install_date`) VALUES
(1, 'apk-gi', 'главный инженер', 4096, 3100, '2021-10-01'),
(2, 'ok-insp', 'специалист отдела кадров', 2048, 2800, '2013-07-16'),
(3, 'apk-gsm-n', 'начальник службы ГСМ', 2048, 3300, '2016-07-07'),
(4, 'sitis-rem', 'ремонтная мастерская', 1516, 2700, '2012-01-28'),
(5, 'apk-iont', 'инженер-нормировщик', 1024, 2400, '2012-02-01'),
(6, 'omts-n', 'начальник ОМТС', 1024, 3000, '2013-10-14'),
(7, 'apk-nas', 'начальник аэродромной службы', 4096, 3400, '2018-07-09'),
(8, 'omts-zamn', 'старший инженер ОМТС', 2048, 3100, '2021-10-22'),
(9, 'sitis-vps', 'ВПС', 1024, 2400, '2014-10-13'),
(10, 'apk-akn1', 'начальник 1й автоколонны ССТ', 2048, 3300, '2017-03-07'),
(11, 'apk-rmmn', 'начальник ремонтных мастерских ССТ', 2048, 2700, '2021-03-11'),
(12, 'sitis-vpsse', 'старший техник ВПС', 4096, 3300, '2016-12-08'),
(13, 'ias-zamn', 'заместитель начальника ИАС', 1024, 2400, '2016-02-05'),
(14, 'otiz-ept', 'начальник ПЭО', 2048, 4000, '2013-06-27'),
(15, 'grzp-econ', 'экономист расчетного отдела', 2048, 2700, '2019-03-15'),
(16, 'ias-n', 'начальник ИАС', 4096, 3300, '2014-02-14');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
