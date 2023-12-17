-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 05:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marryme`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `about_heading` varchar(255) NOT NULL,
  `about_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about_heading`, `about_text`) VALUES
(1, 'Tentang Kami', 'Kami adalah tim profesional yang berdedikasi untuk mewujudkan acara istimewa Anda. Dengan pengalaman bertahun-tahun di industri ini, MarryMe telah berhasil menghadirkan momen-momen tak terlupakan bagi klien-klien kami.\r\n\r\nKami memahami betapa pentingnya setiap perayaan dalam hidup Anda, khususnya saat melibatkan momen besar seperti pernikahan. MarryMe hadir untuk mengurangi beban Anda dan menjadikan persiapan acara Anda sebagai pengalaman yang menyenangkan.');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blog_date` datetime DEFAULT NULL,
  `blog_heading` varchar(255) NOT NULL,
  `blog_text` text NOT NULL,
  `blog_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_date`, `blog_heading`, `blog_text`, `blog_image`) VALUES
(1, '2023-12-12 02:02:09', 'Wanita dan Inner Beauty', '<p>Keindahan inner atau kecantikan batin adalah konsep yang menyoroti nilai-nilai positif, kepribadian, dan kualitas emosional seseorang, khususnya pada wanita. Ini menekankan bahwa kecantikan bukan hanya tentang penampilan fisik, tetapi juga tentang bagaimana seseorang membentuk hubungan, menunjukkan empati, dan membawa dampak positif pada dunia sekitarnya.</p>', '138d65585306578f0d3b39e920d3f4f4-WhatsApp Image 2023-12-12 at 13.49.49.jpeg'),
(2, '2023-12-12 02:03:22', 'Kesetiaan Itu Perlu', '<p>Kesetiaan adalah nilai penting dalam berbagai aspek kehidupan, baik dalam hubungan pribadi, persahabatan, maupun lingkungan profesional.</p>', '96549490bb7124c31106cd62d97570c6-WhatsApp Image 2023-12-12 at 13.49.50.jpeg'),
(3, '2023-12-12 02:04:31', 'Dekor Kekinian', '<p>Banyak Ide dekorasi modern saat ini.</p>', '778a4a5c12bb798c9916fea1bc2b954e-WhatsApp Image 2023-12-12 at 13.33.59 (1).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `contact_date` datetime DEFAULT NULL,
  `contact_name` varchar(225) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_subject` varchar(255) NOT NULL,
  `contact_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `features_icon` varchar(255) NOT NULL,
  `features_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `features_icon`, `features_name`) VALUES
(1, 'fa-solid fa-address-book', 'Akomodasi Tamu Undangan'),
(2, 'fa-solid fa-circle-check', ' Wedding Organizer Terpercaya'),
(4, 'fa-solid fa-clock', 'Cepat dan Tepat'),
(5, 'fa-solid fa-house', 'Ruangan yang aman dan nyaman'),
(6, 'fa-solid fa-camera', 'Tersiar di berbagai platforms'),
(7, 'fa-solid fa-shirt', 'Souvenir dan hadiah yang berkesan');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gallery_heading` varchar(255) NOT NULL,
  `gallery_desc` text NOT NULL,
  `gallery_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gallery_heading`, `gallery_desc`, `gallery_image`) VALUES
(1, 'Pernikahan Park Chang-ho dan Ko Mi-ho', 'Mar 14 2023', 'f6ad65323c1aa3a594eb918b5ca612ba-WhatsApp Image 2023-12-12 at 13.49.48.jpeg'),
(2, 'Pernikahan Gu Won dan Cheon Sa-rang', 'Januari 2023', 'ef3fe67c4614cbef7d525c32bacd0f10-WhatsApp Image 2023-12-12 at 13.49.48 (1).jpeg'),
(4, 'Pernikahan Syaprida dan Jaemin', 'Dekorasi Mewah', '48e1a37208a56eaf307f8ed078b1b4f3-WhatsApp Image 2023-12-12 at 13.33.59.jpeg'),
(5, 'Pernikahan Adi dan Sarah', 'Pentas Mewah', '25a0a48a38674340f32e20e270bc0b8f-WhatsApp Image 2023-12-12 at 13.34.01 (1).jpeg'),
(6, 'Prasmanan di pernikahan Mail dan Mei-Mei', 'Februari 2023', '9a0b582c68593adecdf21036cfcd1591-WhatsApp Image 2023-12-12 at 13.34.02 (1).jpeg'),
(7, 'Pernikahan Asep dan Angel', 'Pernikahan Outdoor', 'e61029f12f7b903f565d454be0342566-WhatsApp Image 2023-12-12 at 13.34.00 (1).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `packages_heading` varchar(255) NOT NULL,
  `packages_price` varchar(255) NOT NULL,
  `packages_list` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `packages_heading`, `packages_price`, `packages_list`) VALUES
(1, 'PAKET HEMAT', 'Rp. 5.000.000', '<ul>\r\n<li>Nasi Padang Paket 10 Ribu</li>\r\n<li>Riasan Natural,Baju Polosan</li>\r\n<li>Dekorasi Seadanya</li>\r\n<li>Dokumentasi pake hp masing-masing</li>\r\n<li>Tidak ada Mc-nya</li>\r\n</ul>'),
(2, 'Paket Menghalalkanmu', 'Rp. 50.000.000', '<ul>\r\n<li>Nasi Catering</li>\r\n<li>Make up dan busana glowing</li>\r\n<li>Dekorasi Lengkap</li>\r\n<li>Sedia Photograper</li>\r\n<li>MC Tampan &amp; Rupawan</li>\r\n</ul>'),
(3, 'Paket Wah Banget', 'Rp. 1.000.000.000', '<ul>\r\n<li>Prasmanan yang Mewah</li>\r\n<li>MUA profesional &amp; Busana Glamour</li>\r\n<li>Dekorasi Super Mewah</li>\r\n<li>Photograper Handal</li>\r\n<li>MC yang Tampan &amp; Cantik</li>\r\n<li>Artis Ternama</li>\r\n<li>Souvenir&nbsp;</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `reset_password`
--

CREATE TABLE `reset_password` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `expiration_time` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `testi_text` text NOT NULL,
  `testi_client` varchar(255) NOT NULL,
  `testi_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `testi_text`, `testi_client`, `testi_image`) VALUES
(1, 'Saya sangat merekomendasikan wedding organizer ini', 'Feli dan Hito', '9287c24949e2749fc21a100ae105c0b1-WhatsApp Image 2023-12-12 at 13.49.50.jpeg'),
(2, 'Saya dan istri saya sangat puas dengan pelayanan nya', ' Siti dan Dilan', '53ccdcb34e5882d6dea465918bd772da-WhatsApp Image 2023-12-12 at 13.49.49 (2).jpeg'),
(3, 'Membantu sekali untuk pernikahan saya', 'Jhon & Munaroh', '71d3e1a54452e72ced4e170afef6facd-WhatsApp Image 2023-12-12 at 13.49.49 (1).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `verification_code` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `user_username`, `user_password`, `verification_code`, `status`) VALUES
(133, 'adityafahmi2005@gmail.com', 'admin2', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reset_password`
--
ALTER TABLE `reset_password`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reset_password`
--
ALTER TABLE `reset_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reset_password`
--
ALTER TABLE `reset_password`
  ADD CONSTRAINT `reset_password_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
