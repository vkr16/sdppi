-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2023 at 06:06 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;
--
-- Database: `portfolios-sdppi`
--

-- --------------------------------------------------------
--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` mediumtext NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
-- --------------------------------------------------------
--
-- Table structure for table `informations`
--

CREATE TABLE `informations` (
  `id` int(11) NOT NULL,
  `feature` mediumtext NOT NULL,
  `title` mediumtext NOT NULL,
  `content` mediumtext NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Dumping data for table `informations`
--

INSERT INTO `informations` (`id`, `feature`, `title`, `content`)
VALUES (1, 'regulasi', 'pos', ''),
  (2, 'regulasi', 'telekomunikasi', ''),
  (3, 'regulasi', 'penyiaran', ''),
  (4, 'last_update', 'pos', '23-08-2022 14:01 PM'),
  (
    5,
    'last_update',
    'telekomunikasi',
    '23-08-2022 14:01 PM'
  ),
  (
    6,
    'last_update',
    'penyiaran',
    '23-08-2022 14:01 PM'
  );
-- --------------------------------------------------------
--
-- Table structure for table `penyiaran`
--

CREATE TABLE `penyiaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_layanan` varchar(100) NOT NULL,
  `domisili` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
-- --------------------------------------------------------
--
-- Table structure for table `pos`
--

CREATE TABLE `pos` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_layanan` varchar(100) NOT NULL,
  `domisili` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
-- --------------------------------------------------------
--
-- Table structure for table `telekomunikasi`
--

CREATE TABLE `telekomunikasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_layanan` varchar(100) NOT NULL,
  `domisili` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
-- --------------------------------------------------------
--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('active', 'suspended') NOT NULL DEFAULT 'active'
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`)
VALUES (
    1,
    'Administrator',
    'admin@akuonline.my.id',
    '$2y$10$6U/vHxd31xJfmkxA6Ic19uNdC8u/8FQg8iSZX8WH2VziznCIMG4wa',
    'active'
  );
--
-- Indexes for dumped tables
--

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
ADD PRIMARY KEY (`id`);
--
-- Indexes for table `informations`
--
ALTER TABLE `informations`
ADD PRIMARY KEY (`id`);
--
-- Indexes for table `penyiaran`
--
ALTER TABLE `penyiaran`
ADD PRIMARY KEY (`id`);
--
-- Indexes for table `pos`
--
ALTER TABLE `pos`
ADD PRIMARY KEY (`id`);
--
-- Indexes for table `telekomunikasi`
--
ALTER TABLE `telekomunikasi`
ADD PRIMARY KEY (`id`);
--
-- Indexes for table `users`
--
ALTER TABLE `users`
ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `informations`
--
ALTER TABLE `informations`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 7;
--
-- AUTO_INCREMENT for table `penyiaran`
--
ALTER TABLE `penyiaran`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pos`
--
ALTER TABLE `pos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `telekomunikasi`
--
ALTER TABLE `telekomunikasi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 3;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;