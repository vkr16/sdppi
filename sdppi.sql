-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2022 at 11:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdppi`
--

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `informations`
--

CREATE TABLE `informations` (
  `id` int(11) NOT NULL,
  `feature` mediumtext NOT NULL,
  `title` mediumtext NOT NULL,
  `content` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informations`
--

INSERT INTO `informations` (`id`, `feature`, `title`, `content`) VALUES
(1, 'regulasi', 'pos', '<ul>\r\n<li><a href=\"https://www.google.com\">Google</a></li>\r\n<li><a href=\"facebook.com\">Facebook</a></li>\r\n</ul>'),
(2, 'regulasi', 'telekomunikasi', ''),
(3, 'regulasi', 'penyiaran', ''),
(4, 'last_update', 'pos', '23-08-2022 14:01 PM'),
(5, 'last_update', 'telekomunikasi', '23-08-2022 14:01 PM'),
(6, 'last_update', 'penyiaran', '23-08-2022 14:01 PM');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyiaran`
--

INSERT INTO `penyiaran` (`id`, `nama`, `jenis_layanan`, `domisili`, `status`, `website`) VALUES
(14, 'Altin Investama Teknologi', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(15, 'Aman Devloop Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(16, 'Andalabs', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(17, 'Aplus Media Interaktif', 'CP', 'Kota Tangerang Selatan, Banten', '-', '-'),
(18, 'Arita Mobile International', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(19, 'Arkadia Media Nusantara', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(20, 'Artha Cipta Solusi', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(21, 'Arthamas Cipta', 'ISP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(22, 'Asia Jaya Sinergi', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(23, 'Asia Multimedia Kreatif', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(24, 'Asia Utama Konsultan / Asia Akses Utama', 'ISP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(25, 'Ayomobile Media International', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(26, 'Bali Towerindo Sentra', 'ISP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(27, 'Benang Komunika Infotama', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(28, 'Berdaya Digital Indokreatif', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(29, 'Berlian Mitra Teknologi Global', 'CP', 'Kota Jakarta Timur, DKI Jakarta', '-', '-'),
(30, 'Bosowa Network Media / Celebes Media Jaringan', 'ISP', 'Kota Makassar, Sulawesi Selatan', '-', '-'),
(31, 'Braincode Solution', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(32, 'BT Communications Indonesia', 'SKD', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(33, 'Buana Intermedia Global (P)', 'PCL', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(34, 'Cargando Bersama Indonesia', 'CP', 'Kota Tangerang, Banten', '-', '-'),
(35, 'Cheese Mobile Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(36, 'Cipta Grafika Promosindo', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(37, 'Cipta Perkasa Mobile', 'CP', 'Jakarta Barat, DKI Jakarta', '-', '-'),
(38, 'Cometa Mobile', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(39, 'Comtronics Systems', 'ISP', 'Kota Bandung, Jawa Barat', '-', '-'),
(40, 'Datakom Wijaya Pratama / Datakom Padma Jaya', 'NAP', 'Kota Surabaya, Jawa Timur', '-', '-'),
(41, 'Dian Nuswantoro Teknologi Dan Informasi (Dinustek)', 'ISP', 'Kota Semarang, Jawa Tengah', '-', '-'),
(42, 'Digital Kreatif Inti', 'CP', 'Kota Jakarta Timur, DKI Jakarta', '-', '-'),
(43, 'Digital Kreatif Teknologi', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(44, 'Digital Music Factory', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(45, 'Digital Network Antanusa', 'ISP', 'Kota Jambi, Jambi', '-', '-'),
(46, 'Digital Perkasa Sukses', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(47, 'Dimensi Generasi Teknologi', 'CP', 'Kota Jakarta Timur, DKI Jakarta', '-', '-'),
(48, 'Distributions Oriented Technologies', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(49, 'Eka Mas Republik / Austin Technology Telematika', 'ISP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(50, 'Elang Megah Sakti', 'CP', 'Kota Tangerang Selatan, Banten', '-', '-'),
(51, 'Electronic Data Interchange Indonesia', 'SKD', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(52, 'E-Motion Entertainment', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(53, 'Era Digital Media', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(54, 'Evangeline Verto Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(55, 'Fajar Surya Teknologi', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(56, 'Falcon', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(57, 'Fargo Intek Media', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(58, 'Festival Digital Nusantara', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(59, 'Forest Indo Niaga', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(60, 'Funtastik Mobile Indonesia', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(61, 'Galactic Multimedia', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(62, 'Gardatha Solusi Digital', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(63, 'Generasi Muda Digital', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(64, 'Generasi Muda Kreatif', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(65, 'Global Akses Multimedia', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(66, 'Global Mandiri Bersama', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(67, 'Global Media Solusi', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(68, 'Global Mobile Content', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(69, 'Global Networks Services', 'PCL', 'Kota Depok, Jawa Barat', '-', '-'),
(70, 'Global Tama Perkasa', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(71, 'Gloria Viva Nusantara', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(72, 'Graha Indisport', 'CP', 'Kota Jakarta Timur, DKI Jakarta', '-', '-'),
(73, 'Graha Persada Telkomindo', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(74, 'Hasil Bersama Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(75, 'Hypermind', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(76, 'Hypernet Indodata', 'ISP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(77, 'Iguana Technology', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(78, 'Imobile Teknologi Indonesia', 'CP', 'Yogyakarta, DI Yogyakarta', '-', '-'),
(79, 'Indigo Digital Utama', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(80, 'Indo Pratama Teleglobal', 'ISP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(81, 'Indointernet', 'ISP', 'Kota Tangerang Selatan, Banten', '-', '-'),
(82, 'Indomobi Kreasi Utama', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(83, 'Indonesia Fantasi Jaya', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(84, 'Indonesia Mudah Bayar', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(85, 'Infinity Air Media', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(86, 'Info Media Solusi Net', 'ISP', 'Batubara, Sumatera Utara', '-', '-'),
(87, 'Infomedia Nusantara (P)', 'CCN', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(88, 'Informasi Teknologi Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(89, 'Integrasi Tunas Muda', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(90, 'Inter Media Lintas Nusa', 'ISP', 'Kota Semarang, Jawa Tengah', '-', '-'),
(91, 'Inzpire', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(92, 'Ionnex Indonesia', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(93, 'Jayadata Indonesia', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(94, 'Jobestindo Usaha Bersama', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(95, 'Kaliba Mobile Nusantara', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(96, 'Karya Integrasi 89', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(97, 'Karya Mega Bersama', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(98, 'Karyaputra Suryagemilang', 'CCN', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(99, 'Khasanah Timur Indonesia / Centrin Online Prima', 'ISP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(100, 'Komunikasi Selaras Sejati', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(101, 'Koneksi Global Tekhnologi', 'CP', 'Kota Tangerang, Banten', '-', '-'),
(102, 'Kreasi Mimpi Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(103, 'Kreasi Pariwara Perdana', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(104, 'Kreasindo Digital Konten', 'CP', 'Kota Bandung, Jawa Barat', '-', '-'),
(105, 'Kreatif Bersama', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(106, 'Kreatif Gang Pegangsaan', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(107, 'Kreatif Media Karya', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(108, 'Kreatifitas Konten Indonesia', 'CP', 'Kota Bandung, Jawa Barat', '-', '-'),
(109, 'Kusuma Dinata Jayabadi', 'ISP', 'Kota Batam, Kepulauan Riau', '-', '-'),
(110, 'Laba Multimedia Sejahtera', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(111, 'Laksana Dewa Satria', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(112, 'Lingkar Alam Semesta', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(113, 'Lingua Asiatic', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(114, 'Linkit', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(115, 'Linktone Indonesia', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(116, 'Mahkota Mas Insan Persada', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(117, 'Makasa Cahaya Energy', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(118, 'Marka Karya Cipta', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(119, 'Massive Digital Media', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(120, 'Max Interactives Technologies', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(121, 'Max Mobile Media', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(122, 'Mayatama Solusindao', 'ISP', 'Kota Dumai, Riau', '-', '-'),
(123, 'Media Kreasindo Utama', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(124, 'Melon Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(125, 'Melvar Lintasnusa', 'ISP', 'Kota Bandung, Jawa Barat', '-', '-'),
(126, 'Metra Digital Media', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(127, 'Metra Net', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(128, 'Milenial Nusantara Citra', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(129, 'Millenia Investama Teknologi', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(130, 'Mitra Konten Indo', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(131, 'Mitra Mobi Indo', 'CP', 'Kota Jakarta Timur, DKI Jakarta', '-', '-'),
(132, 'Mitra Perdana Selaras', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(133, 'Mobilink Komunika Media', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(134, 'Mocoplus Technology', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(135, 'Movitek Kreatif Digital', 'CP', 'Tangerang Selatan, Banten', '-', '-'),
(136, 'Mtouche', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(137, 'Nation Pictures', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(138, 'Neo Dimensi', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(139, 'Net Soft', 'NAP', 'Kota Tangerang Selatan, Banten', '-', '-'),
(140, 'Nexnation Prisma', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(141, 'Ninelives Interactive', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(142, 'Norlec Telekomunikasi', 'ISP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(143, 'Nusa Konten Media Perkasa', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(144, 'Oranye Layanan Digital Indonesia', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(145, 'Pandawa Satria Global', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(146, 'Panen Kita Mandiri', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(147, 'Parimas Hicindo Sentosa', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(148, 'Pass Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(149, 'Pelangi Mobile Media', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(150, 'Permata Cipta Rejeki', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(151, 'Persada Multi Mandiri', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(152, 'Perusahaan Umum (Perum) Pt Kataji Nukami Indonesia', 'ISP', 'Kota Bandung, Jawa Barat', '-', '-'),
(153, 'Pitados Multi Kreasi', 'CP', 'Kota Jakarta Timur, DKI Jakarta', '-', '-'),
(154, 'Poca Jaringan Samadhau', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(155, 'Poguyaman Kreasindo', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(156, 'Primedia Armo Ekadata', 'CCD', 'Kota Tangerang Selatan, Banten', '-', '-'),
(157, 'Proaktif Digital Kreasi', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(158, 'Prolindo Prima Karya(P)', 'CCN', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(159, 'Quatronet Solusindo', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(160, 'Quattro Media Contindo', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(161, 'Raba Komunikatama', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(162, 'Rajawali Digital Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(163, 'Rame Rame Seru Indo', 'CP', 'Kota Jakarta Timur, DKI Jakarta', '-', '-'),
(164, 'Redi Aliansi Jaya', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(165, 'Redision Teknologi Indonesia', 'CP', 'Kota Tangerang Selatan, Banten', '-', '-'),
(166, 'Rekayasa Era Digital', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(167, 'Riyuz Tekno Informa', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(168, 'RTI Infokom', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(169, 'Sahabat Muda Kreatif', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(170, 'Saharjo Enam Sembilan', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(171, 'Sakti Coal Jaya', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(172, 'Sampoerna Telekomunikasi Indonesia', 'ISP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(173, 'Sarana Konten Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(174, 'Sarana Media Selaras Abadi', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(175, 'Sentra Digital Sinergy', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(176, 'Sentra Rejeki Lestari', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(177, 'Sinergi Bestama Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(178, 'Sinergi Insani Primanet', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(179, 'Sintesa Teknologi Indonesia', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(180, 'SMSNet Nusantara Wapindo', 'CP', 'Kota Depok, Jawa Barat', '-', '-'),
(181, 'Solarnet Antar Network', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(182, 'Surya Teknologi Internasional', 'CP', 'Tangerang Selatan, Banten', '-', '-'),
(183, 'Tekno Jaya Centro', 'CP', 'Kota Jakarta Timur, DKI Jakarta', '-', '-'),
(184, 'Tekno Solusindo Mitra Abadi', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(185, 'Telekomunikasi Indonesia Internasional', 'NAP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(186, 'Telesat System Integrator', 'CP', 'Kab. Bekasi, Jawa Barat', '-', '-'),
(187, 'Terminal Kreasi Nusantara', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(188, 'Tiga Macan Multimedia', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(189, 'Tower Bersama', 'ISP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(190, 'Transdata Sejahtera', 'ISP', 'Kab. Banyumas, Jawa Tengah', '-', '-'),
(191, 'Trimitra Kreatif Indo', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(192, 'Trinity Creative Technology', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(193, 'Triple One Global', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(194, 'Triyakom', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(195, 'Tunas Kreatif Media', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(196, 'Ulat Bulu Bersama', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(197, 'Union Routlink Communication', 'ISP', 'Kota Yogyakarta, DI Yogyakarta', '-', '-'),
(198, 'Viva Media Baru', 'CP', 'Kota Jakarta Timur, DKI Jakarta', '-', '-'),
(199, 'Warung Kreasi Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(200, 'Wiken Kreatif Nusantara', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(201, 'Yatta Eracipta Solusi', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(202, 'Yudha Restu Gana', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(203, 'd', '1', '1', '1', '1'),
(204, 'Bakrie Telecom, Tbk', 'ISP, TDS Bergerak Seluler', 'Kota Jakarta Selatan, DKI Jakarta', 'Tidak Aktif', '-'),
(205, 'Indosat, Tbk.', 'CP, ISP, ITKP, NAP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(206, 'Link Net Tbk', 'ISP, NAP, IPTV', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(207, 'Patra Telekomunikasi Indonesia (dh Telkom Satelit Indonesia)', 'NAP, SKD, ISP', 'Kota Depok, Jawa Barat', '-', '-'),
(208, 'Saranainsan Muda Selaras', 'NAP, ISP', 'Kota Yogyakarta, DI Yogyakarta', '-', '-'),
(209, 'Smart Milenium Effisiensi', 'ITKP, CCN', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(210, 'Telekomunikasi Indonesia, Tbk.', 'CP, NAP, ITKP, SKD, ISP, IPTV', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(211, 'XL Axiata, Tbk.', 'CP, ISP, ITKP, NAP, SKD', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(212, 'PD. Sarana Pembangunan Siak', 'ISP', 'Kab. Siak, Riau', '-', '-'),
(214, 'Adithana Mitra Perkasa', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(215, 'Agranet Multicitra Siberkom (dh Trans Digital Media)', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(216, 'Alpha Media Communication', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(217, 'Altin Investama Teknologi', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(218, 'Aman Devloop Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(219, 'Andalabs', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(220, 'Aplus Media Interaktif', 'CP', 'Kota Tangerang Selatan, Banten', '-', '-'),
(221, 'Arita Mobile International', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(222, 'Arkadia Media Nusantara', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(223, 'Artha Cipta Solusi', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(224, 'Arthamas Cipta', 'ISP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(225, 'Asia Jaya Sinergi', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(226, 'Asia Multimedia Kreatif', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(227, 'Asia Utama Konsultan / Asia Akses Utama', 'ISP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(228, 'Ayomobile Media International', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(229, 'Bali Towerindo Sentra', 'ISP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(230, 'Benang Komunika Infotama', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(231, 'Berdaya Digital Indokreatif', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(232, 'Berlian Mitra Teknologi Global', 'CP', 'Kota Jakarta Timur, DKI Jakarta', '-', '-'),
(233, 'Bosowa Network Media / Celebes Media Jaringan', 'ISP', 'Kota Makassar, Sulawesi Selatan', '-', '-'),
(234, 'Braincode Solution', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(235, 'BT Communications Indonesia', 'SKD', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(236, 'Buana Intermedia Global (P)', 'PCL', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(237, 'Cargando Bersama Indonesia', 'CP', 'Kota Tangerang, Banten', '-', '-'),
(238, 'Cheese Mobile Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(239, 'Cipta Grafika Promosindo', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(240, 'Cipta Perkasa Mobile', 'CP', 'Jakarta Barat, DKI Jakarta', '-', '-'),
(241, 'Cometa Mobile', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(242, 'Comtronics Systems', 'ISP', 'Kota Bandung, Jawa Barat', '-', '-'),
(243, 'Datakom Wijaya Pratama / Datakom Padma Jaya', 'NAP', 'Kota Surabaya, Jawa Timur', '-', '-'),
(244, 'Dian Nuswantoro Teknologi Dan Informasi (Dinustek)', 'ISP', 'Kota Semarang, Jawa Tengah', '-', '-'),
(245, 'Digital Kreatif Inti', 'CP', 'Kota Jakarta Timur, DKI Jakarta', '-', '-'),
(246, 'Digital Kreatif Teknologi', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(247, 'Digital Music Factory', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(248, 'Digital Network Antanusa', 'ISP', 'Kota Jambi, Jambi', '-', '-'),
(249, 'Digital Perkasa Sukses', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(250, 'Dimensi Generasi Teknologi', 'CP', 'Kota Jakarta Timur, DKI Jakarta', '-', '-'),
(251, 'Distributions Oriented Technologies', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(252, 'Eka Mas Republik / Austin Technology Telematika', 'ISP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(253, 'Elang Megah Sakti', 'CP', 'Kota Tangerang Selatan, Banten', '-', '-'),
(254, 'Electronic Data Interchange Indonesia', 'SKD', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(255, 'E-Motion Entertainment', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(256, 'Era Digital Media', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(257, 'Evangeline Verto Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(258, 'Fajar Surya Teknologi', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(259, 'Falcon', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(260, 'Fargo Intek Media', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(261, 'Festival Digital Nusantara', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(262, 'Forest Indo Niaga', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(263, 'Funtastik Mobile Indonesia', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(264, 'Galactic Multimedia', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(265, 'Gardatha Solusi Digital', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(266, 'Generasi Muda Digital', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(267, 'Generasi Muda Kreatif', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(268, 'Global Akses Multimedia', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(269, 'Global Mandiri Bersama', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(270, 'Global Media Solusi', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(271, 'Global Mobile Content', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(272, 'Global Networks Services', 'PCL', 'Kota Depok, Jawa Barat', '-', '-'),
(273, 'Global Tama Perkasa', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(274, 'Gloria Viva Nusantara', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(275, 'Graha Indisport', 'CP', 'Kota Jakarta Timur, DKI Jakarta', '-', '-'),
(276, 'Graha Persada Telkomindo', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(277, 'Hasil Bersama Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(278, 'Hypermind', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(279, 'Hypernet Indodata', 'ISP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(280, 'Iguana Technology', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(281, 'Imobile Teknologi Indonesia', 'CP', 'Yogyakarta, DI Yogyakarta', '-', '-'),
(282, 'Indigo Digital Utama', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(283, 'Indo Pratama Teleglobal', 'ISP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(284, 'Indointernet', 'ISP', 'Kota Tangerang Selatan, Banten', '-', '-'),
(285, 'Indomobi Kreasi Utama', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(286, 'Indonesia Fantasi Jaya', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(287, 'Indonesia Mudah Bayar', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(288, 'Infinity Air Media', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(289, 'Info Media Solusi Net', 'ISP', 'Batubara, Sumatera Utara', '-', '-'),
(290, 'Infomedia Nusantara (P)', 'CCN', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(291, 'Informasi Teknologi Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(292, 'Integrasi Tunas Muda', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(293, 'Inter Media Lintas Nusa', 'ISP', 'Kota Semarang, Jawa Tengah', '-', '-'),
(294, 'Inzpire', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(295, 'Ionnex Indonesia', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(296, 'Jayadata Indonesia', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(297, 'Jobestindo Usaha Bersama', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(298, 'Kaliba Mobile Nusantara', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(299, 'Karya Integrasi 89', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(300, 'Karya Mega Bersama', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(301, 'Karyaputra Suryagemilang', 'CCN', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(302, 'Khasanah Timur Indonesia / Centrin Online Prima', 'ISP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(303, 'Komunikasi Selaras Sejati', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(304, 'Koneksi Global Tekhnologi', 'CP', 'Kota Tangerang, Banten', '-', '-'),
(305, 'Kreasi Mimpi Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(306, 'Kreasi Pariwara Perdana', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(307, 'Kreasindo Digital Konten', 'CP', 'Kota Bandung, Jawa Barat', '-', '-'),
(308, 'Kreatif Bersama', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(309, 'Kreatif Gang Pegangsaan', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(310, 'Kreatif Media Karya', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(311, 'Kreatifitas Konten Indonesia', 'CP', 'Kota Bandung, Jawa Barat', '-', '-'),
(312, 'Kusuma Dinata Jayabadi', 'ISP', 'Kota Batam, Kepulauan Riau', '-', '-'),
(313, 'Laba Multimedia Sejahtera', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(314, 'Laksana Dewa Satria', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(315, 'Lingkar Alam Semesta', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(316, 'Lingua Asiatic', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(317, 'Linkit', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(318, 'Linktone Indonesia', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(319, 'Mahkota Mas Insan Persada', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(320, 'Makasa Cahaya Energy', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(321, 'Marka Karya Cipta', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(322, 'Massive Digital Media', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(323, 'Max Interactives Technologies', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(324, 'Max Mobile Media', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(325, 'Mayatama Solusindao', 'ISP', 'Kota Dumai, Riau', '-', '-'),
(326, 'Media Kreasindo Utama', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(327, 'Melon Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(328, 'Melvar Lintasnusa', 'ISP', 'Kota Bandung, Jawa Barat', '-', '-'),
(329, 'Metra Digital Media', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(330, 'Metra Net', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(331, 'Milenial Nusantara Citra', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(332, 'Millenia Investama Teknologi', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(333, 'Mitra Konten Indo', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(334, 'Mitra Mobi Indo', 'CP', 'Kota Jakarta Timur, DKI Jakarta', '-', '-'),
(335, 'Mitra Perdana Selaras', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(336, 'Mobilink Komunika Media', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(337, 'Mocoplus Technology', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(338, 'Movitek Kreatif Digital', 'CP', 'Tangerang Selatan, Banten', '-', '-'),
(339, 'Mtouche', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(340, 'Nation Pictures', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(341, 'Neo Dimensi', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(342, 'Net Soft', 'NAP', 'Kota Tangerang Selatan, Banten', '-', '-'),
(343, 'Nexnation Prisma', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(344, 'Ninelives Interactive', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(345, 'Norlec Telekomunikasi', 'ISP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(346, 'Nusa Konten Media Perkasa', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(347, 'Oranye Layanan Digital Indonesia', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(348, 'Pandawa Satria Global', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(349, 'Panen Kita Mandiri', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(350, 'Parimas Hicindo Sentosa', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(351, 'Pass Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(352, 'Pelangi Mobile Media', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(353, 'Permata Cipta Rejeki', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(354, 'Persada Multi Mandiri', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(355, 'Perusahaan Umum (Perum) Pt Kataji Nukami Indonesia', 'ISP', 'Kota Bandung, Jawa Barat', '-', '-'),
(356, 'Pitados Multi Kreasi', 'CP', 'Kota Jakarta Timur, DKI Jakarta', '-', '-'),
(357, 'Poca Jaringan Samadhau', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(358, 'Poguyaman Kreasindo', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(359, 'Primedia Armo Ekadata', 'CCD', 'Kota Tangerang Selatan, Banten', '-', '-'),
(360, 'Proaktif Digital Kreasi', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(361, 'Prolindo Prima Karya(P)', 'CCN', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(362, 'Quatronet Solusindo', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(363, 'Quattro Media Contindo', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(364, 'Raba Komunikatama', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(365, 'Rajawali Digital Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(366, 'Rame Rame Seru Indo', 'CP', 'Kota Jakarta Timur, DKI Jakarta', '-', '-'),
(367, 'Redi Aliansi Jaya', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(368, 'Redision Teknologi Indonesia', 'CP', 'Kota Tangerang Selatan, Banten', '-', '-'),
(369, 'Rekayasa Era Digital', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(370, 'Riyuz Tekno Informa', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(371, 'RTI Infokom', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(372, 'Sahabat Muda Kreatif', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(373, 'Saharjo Enam Sembilan', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(374, 'Sakti Coal Jaya', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(375, 'Sampoerna Telekomunikasi Indonesia', 'ISP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(376, 'Sarana Konten Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(377, 'Sarana Media Selaras Abadi', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(378, 'Sentra Digital Sinergy', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(379, 'Sentra Rejeki Lestari', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(380, 'Sinergi Bestama Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(381, 'Sinergi Insani Primanet', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(382, 'Sintesa Teknologi Indonesia', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(383, 'SMSNet Nusantara Wapindo', 'CP', 'Kota Depok, Jawa Barat', '-', '-'),
(384, 'Solarnet Antar Network', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(385, 'Surya Teknologi Internasional', 'CP', 'Tangerang Selatan, Banten', '-', '-'),
(386, 'Tekno Jaya Centro', 'CP', 'Kota Jakarta Timur, DKI Jakarta', '-', '-'),
(387, 'Tekno Solusindo Mitra Abadi', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(388, 'Telekomunikasi Indonesia Internasional', 'NAP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(389, 'Telesat System Integrator', 'CP', 'Kab. Bekasi, Jawa Barat', '-', '-'),
(390, 'Terminal Kreasi Nusantara', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(391, 'Tiga Macan Multimedia', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(392, 'Tower Bersama', 'ISP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(393, 'Transdata Sejahtera', 'ISP', 'Kab. Banyumas, Jawa Tengah', '-', '-'),
(394, 'Trimitra Kreatif Indo', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(395, 'Trinity Creative Technology', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(396, 'Triple One Global', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(397, 'Triyakom', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(398, 'Tunas Kreatif Media', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(399, 'Ulat Bulu Bersama', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(400, 'Union Routlink Communication', 'ISP', 'Kota Yogyakarta, DI Yogyakarta', '-', '-'),
(401, 'Viva Media Baru', 'CP', 'Kota Jakarta Timur, DKI Jakarta', '-', '-'),
(402, 'Warung Kreasi Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(403, 'Wiken Kreatif Nusantara', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(404, 'Yatta Eracipta Solusi', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(405, 'Yudha Restu Gana', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pos`
--

INSERT INTO `pos` (`id`, `nama`, `jenis_layanan`, `domisili`, `status`, `website`) VALUES
(127, 'Metra Net', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(128, 'Milenial Nusantara Citra', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(129, 'Millenia Investama Teknologi', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(130, 'Mitra Konten Indo', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(131, 'Mitra Mobi Indo', 'CP', 'Kota Jakarta Timur, DKI Jakarta', '-', '-'),
(132, 'Mitra Perdana Selaras', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(133, 'Mobilink Komunika Media', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(134, 'Mocoplus Technology', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(135, 'Movitek Kreatif Digital', 'CP', 'Tangerang Selatan, Banten', '-', '-'),
(136, 'Mtouche', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(137, 'Nation Pictures', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(138, 'Neo Dimensi', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(139, 'Net Soft', 'NAP', 'Kota Tangerang Selatan, Banten', '-', '-'),
(140, 'Nexnation Prisma', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(141, 'Ninelives Interactive', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(142, 'Norlec Telekomunikasi', 'ISP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(143, 'Nusa Konten Media Perkasa', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(144, 'Oranye Layanan Digital Indonesia', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(145, 'Pandawa Satria Global', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(146, 'Panen Kita Mandiri', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(147, 'Parimas Hicindo Sentosa', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(148, 'Pass Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(149, 'Pelangi Mobile Media', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(150, 'Permata Cipta Rejeki', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(151, 'Persada Multi Mandiri', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(152, 'Perusahaan Umum (Perum) Pt Kataji Nukami Indonesia', 'ISP', 'Kota Bandung, Jawa Barat', '-', '-'),
(153, 'Pitados Multi Kreasi', 'CP', 'Kota Jakarta Timur, DKI Jakarta', '-', '-'),
(154, 'Poca Jaringan Samadhau', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(155, 'Poguyaman Kreasindo', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(156, 'Primedia Armo Ekadata', 'CCD', 'Kota Tangerang Selatan, Banten', '-', '-'),
(157, 'Proaktif Digital Kreasi', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(158, 'Prolindo Prima Karya(P)', 'CCN', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(159, 'Quatronet Solusindo', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(160, 'Quattro Media Contindo', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(161, 'Raba Komunikatama', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(162, 'Rajawali Digital Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(163, 'Rame Rame Seru Indo', 'CP', 'Kota Jakarta Timur, DKI Jakarta', '-', '-'),
(164, 'Redi Aliansi Jaya', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(165, 'Redision Teknologi Indonesia', 'CP', 'Kota Tangerang Selatan, Banten', '-', '-'),
(166, 'Rekayasa Era Digital', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(167, 'Riyuz Tekno Informa', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(168, 'RTI Infokom', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(169, 'Sahabat Muda Kreatif', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(170, 'Saharjo Enam Sembilan', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(171, 'Sakti Coal Jaya', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(172, 'Sampoerna Telekomunikasi Indonesia', 'ISP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(173, 'Sarana Konten Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(174, 'Sarana Media Selaras Abadi', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(175, 'Sentra Digital Sinergy', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(176, 'Sentra Rejeki Lestari', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(177, 'Sinergi Bestama Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(178, 'Sinergi Insani Primanet', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(179, 'Sintesa Teknologi Indonesia', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(180, 'SMSNet Nusantara Wapindo', 'CP', 'Kota Depok, Jawa Barat', '-', '-'),
(181, 'Solarnet Antar Network', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(182, 'Surya Teknologi Internasional', 'CP', 'Tangerang Selatan, Banten', '-', '-'),
(183, 'Tekno Jaya Centro', 'CP', 'Kota Jakarta Timur, DKI Jakarta', '-', '-'),
(184, 'Tekno Solusindo Mitra Abadi', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(185, 'Telekomunikasi Indonesia Internasional', 'NAP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(186, 'Telesat System Integrator', 'CP', 'Kab. Bekasi, Jawa Barat', '-', '-'),
(187, 'Terminal Kreasi Nusantara', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(188, 'Tiga Macan Multimedia', 'CP', 'Kota Jakarta Pusat, DKI Jakarta', '-', '-'),
(189, 'Tower Bersama', 'ISP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(190, 'Transdata Sejahtera', 'ISP', 'Kab. Banyumas, Jawa Tengah', '-', '-'),
(191, 'Trimitra Kreatif Indo', 'CP', 'Kota Jakarta Utara, DKI Jakarta', '-', '-'),
(192, 'Trinity Creative Technology', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(193, 'Triple One Global', 'CP', 'Kota Jakarta Barat, DKI Jakarta', '-', '-'),
(194, 'Triyakom', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(195, 'Tunas Kreatif Media', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(196, 'Ulat Bulu Bersama', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(197, 'Union Routlink Communication', 'ISP', 'Kota Yogyakarta, DI Yogyakarta', '-', '-'),
(198, 'Viva Media Baru', 'CP', 'Kota Jakarta Timur, DKI Jakarta', '-', '-'),
(199, 'Warung Kreasi Indonesia', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(200, 'Wiken Kreatif Nusantara', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(201, 'Yatta Eracipta Solusi', 'CP', 'Kota Jakarta Selatan, DKI Jakarta', '-', '-'),
(204, 'QA Check #1', '-', '-', '-', '-'),
(206, 'Batch Input #1', 'QA Check', '-', 'OK', '-'),
(207, 'Batch Input #2', 'QA Check', '-', 'OKS', '-');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('active','suspended') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`) VALUES
(1, 'Administrator', 'sdppi.webclient@gmail.com', '$2y$10$6U/vHxd31xJfmkxA6Ic19uNdC8u/8FQg8iSZX8WH2VziznCIMG4wa', 'active'),
(2, 'dummy', 'dummy@gmail.com', '$2y$10$.LemxKYvD468kyNjFRAVF.Udi4HAa2LrwfqHiD7uRyoAL/t71Yuk2', 'active');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penyiaran`
--
ALTER TABLE `penyiaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=406;

--
-- AUTO_INCREMENT for table `pos`
--
ALTER TABLE `pos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT for table `telekomunikasi`
--
ALTER TABLE `telekomunikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
