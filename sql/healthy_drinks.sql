-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2025 at 11:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthy_drinks`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password_hash`, `created_at`) VALUES
(1, 'admin', '$2y$10$5GUj2h7q.IFsqkMl1bfa7u4lVPGndp/NFS/6b/V3n/RvpjymW3616', '2025-10-25 15:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `goal` enum('detox','energy','diet','relax') NOT NULL,
  `cal_per_serv` int(11) NOT NULL,
  `serving_desc` varchar(80) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `goal`, `cal_per_serv`, `serving_desc`, `image`, `tags`, `created_at`) VALUES
(3, 'Green Detox Spinach', 'detox', 180, '1 gelas (300 ml)', 'assets/img/img_1761448311_9628d2.png', '', '2025-10-26 02:55:42'),
(4, 'Cucumber Mint Cooler', 'detox', 150, '1 gelas (300 ml)', 'assets/img/img_1761448378_f43e8c.png', '', '2025-10-26 02:55:42'),
(5, 'Apple Celery Flush', 'detox', 165, '1 gelas (300 ml)', 'assets/img/img_1761448432_69f36b.png', '', '2025-10-26 02:55:42'),
(6, 'Banana Oat Energy', 'energy', 320, '1 gelas (350 ml)', 'assets/img/img_1761448468_8db0b9.png', '', '2025-10-26 02:55:42'),
(7, 'Peanut Choco Boost', 'energy', 380, '1 gelas (350 ml)', 'assets/img/img_1761448487_e6499f.png', '', '2025-10-26 02:55:42'),
(8, 'Mango Yogurt Power', 'energy', 300, '1 gelas (300 ml)', 'assets/img/img_1761448501_327fec.png', '', '2025-10-26 02:55:42'),
(9, 'Berry Slim Smoothie', 'diet', 190, '1 gelas (300 ml)', 'assets/img/img_1761448512_87f1b8.png', '', '2025-10-26 02:55:42'),
(10, 'Pineapple Ginger Lean', 'diet', 170, '1 gelas (300 ml)', 'assets/img/img_1761448525_10c771.png', '', '2025-10-26 02:55:42'),
(11, 'Avocado Lite', 'diet', 240, '1 gelas (250 ml)', 'assets/img/img_1761448540_aff914.png', '', '2025-10-26 02:55:42'),
(12, 'Chamomile Honey Calm', 'relax', 140, '1 gelas (300 ml)', 'assets/img/img_1761448642_6e9fb6.png', '', '2025-10-26 02:55:42'),
(13, 'Banana Cinnamon Nightcap', 'relax', 220, '1 gelas (300 ml)', 'assets/img/img_1761448676_03c825.png', '', '2025-10-26 02:55:42'),
(14, 'Lavender Blueberry Soothe', 'relax', 180, '1 gelas (280 ml)', 'assets/img/img_1761448704_cdd648.png', '', '2025-10-26 02:55:42'),
(15, 'Kale Lemon Cleanse', 'detox', 160, '1 gelas (300 ml)', 'assets/img/img_1761461658_c47865.png', '', '2025-10-26 06:51:25'),
(16, 'Aloe Cucumber Fresh', 'detox', 145, '1 gelas (300 ml)', 'assets/img/img_1761461687_2943fa.png', '', '2025-10-26 06:51:25'),
(17, 'Spinach Pine Detox', 'detox', 170, '1 gelas (300 ml)', 'assets/img/img_1761461788_704246.png', '', '2025-10-26 06:51:25'),
(18, 'Dates Espresso Shake', 'energy', 360, '1 gelas (300 ml)', 'assets/img/img_1761461838_718605.png', '', '2025-10-26 06:51:25'),
(19, 'Orange Carrot Zing', 'energy', 230, '1 gelas (320 ml)', 'assets/img/img_1761461938_ceb9c6.png', '', '2025-10-26 06:51:25'),
(20, 'Chocolate Banana Pro', 'energy', 400, '1 gelas (350 ml)', 'assets/img/img_1761462001_69c1d9.png', '', '2025-10-26 06:51:25'),
(21, 'Green Apple Slim', 'diet', 180, '1 gelas (300 ml)', 'assets/img/img_1761462060_4d3d86.png', '', '2025-10-26 06:51:25'),
(22, 'Papaya Lime Breeze', 'diet', 190, '1 gelas (300 ml)', 'assets/img/img_1761462121_9faa84.png', '', '2025-10-26 06:51:25'),
(23, 'Kiwi Spin Lite', 'diet', 200, '1 gelas (280 ml)', 'assets/img/img_1761462187_3e8d02.png', '', '2025-10-26 06:51:25'),
(24, 'Warm Cocoa Oat Calm', 'relax', 210, '1 gelas (300 ml)', 'assets/img/img_1761462253_388d3d.png', '', '2025-10-26 06:51:25'),
(25, 'Mint Lavender Cooler', 'relax', 150, '1 gelas (280 ml)', 'assets/img/img_1761462310_35eeed.png', '', '2025-10-26 06:51:25'),
(26, 'Coconut Banana Lullaby', 'relax', 230, '1 gelas (300 ml)', 'assets/img/img_1761462391_8a9b5d.png', '', '2025-10-26 06:51:25');

-- --------------------------------------------------------

--
-- Table structure for table `recipe_ingredients`
--

CREATE TABLE `recipe_ingredients` (
  `id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `content` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipe_ingredients`
--

INSERT INTO `recipe_ingredients` (`id`, `recipe_id`, `content`) VALUES
(66, 3, 'Bayam 1 genggam'),
(67, 3, 'Apel hijau 1'),
(68, 3, 'Jeruk nipis 1/2'),
(69, 3, 'Air 200 ml'),
(70, 3, 'Madu 1 sdt'),
(71, 4, 'Mentimun 1/2'),
(72, 4, 'Daun mint segenggam'),
(73, 4, 'Jeruk nipis 1/2'),
(74, 4, 'Air 200 ml'),
(75, 4, 'Es batu'),
(76, 5, 'Apel 1'),
(77, 5, 'Seledri 2 batang'),
(78, 5, 'Jahe 1 cm'),
(79, 5, 'Air 200 ml'),
(80, 6, 'Pisang 1'),
(81, 6, 'Oat 3 sdm'),
(82, 6, 'Susu 200 ml'),
(83, 6, 'Madu 1 sdt'),
(84, 7, 'Pisang 1'),
(85, 7, 'Selai kacang 1 sdm'),
(86, 7, 'Kakao bubuk 1 sdt'),
(87, 7, 'Susu 200 ml'),
(88, 7, 'Madu 1 sdt'),
(89, 8, 'Mangga 1/2'),
(90, 8, 'Yogurt 150 ml'),
(91, 8, 'Madu 1 sdt'),
(92, 8, 'Air 100 ml'),
(93, 9, 'Strawberry 5-6'),
(94, 9, 'Blueberry 2 sdm'),
(95, 9, 'Yogurt rendah lemak 100 ml'),
(96, 9, 'Air 150 ml'),
(97, 9, 'Stevia secukupnya'),
(98, 10, 'Nanas 4 iris'),
(99, 10, 'Jahe 1 cm'),
(100, 10, 'Air 200 ml'),
(101, 10, 'Jeruk nipis 1/2'),
(102, 11, 'Alpukat 1/2'),
(103, 11, 'Susu rendah lemak 150 ml'),
(104, 11, 'Air 50 ml'),
(105, 11, 'Stevia/Madu sedikit'),
(106, 12, 'Teh chamomile seduh 200 ml'),
(107, 12, 'Madu 1 sdt'),
(108, 12, 'Lemon 1-2 iris'),
(109, 13, 'Pisang 1/2'),
(110, 13, 'Susu hangat 200 ml'),
(111, 13, 'Kayu manis bubuk 1/4 sdt'),
(112, 13, 'Madu 1 sdt'),
(113, 14, 'Blueberry 3 sdm'),
(114, 14, 'Seduhan lavender 150 ml'),
(115, 14, 'Yogurt 80 ml'),
(116, 14, 'Madu 1 sdt'),
(170, 15, 'Kale 1 genggam'),
(171, 15, 'Lemon 1/2'),
(172, 15, 'Apel 1/2'),
(173, 15, 'Air 200 ml'),
(174, 15, 'Madu 1 sdt'),
(175, 16, 'Lidah buaya (gel) 2 sdm'),
(176, 16, 'Mentimun 1/2'),
(177, 16, 'Jeruk nipis 1/2'),
(178, 16, 'Air 220 ml'),
(179, 17, 'Bayam 1 genggam'),
(180, 17, 'Nanas 3 iris'),
(181, 17, 'Jahe 1 cm'),
(182, 17, 'Air 200 ml'),
(183, 18, 'Kopi espresso 1 shot'),
(184, 18, 'Kurma 3 buah'),
(185, 18, 'Susu 200 ml'),
(186, 18, 'Oat 2 sdm'),
(187, 19, 'Jeruk 1'),
(188, 19, 'Wortel 1'),
(189, 19, 'Jahe 1 cm'),
(190, 19, 'Air 150 ml'),
(191, 19, 'Madu 1 sdt'),
(192, 20, 'Pisang 1'),
(193, 20, 'Susu 200 ml'),
(194, 20, 'Whey/Skim bubuk 1 scoop (opsional)'),
(195, 20, 'Kakao 1 sdt'),
(196, 20, 'Madu 1 sdt'),
(197, 21, 'Apel hijau 1'),
(198, 21, 'Seledri 1 batang'),
(199, 21, 'Timun 1/4'),
(200, 21, 'Air 200 ml'),
(201, 22, 'Pepaya 4 kotak'),
(202, 22, 'Jeruk nipis 1/2'),
(203, 22, 'Yogurt rendah lemak 80 ml'),
(204, 22, 'Air 120 ml'),
(205, 23, 'Kiwi 1'),
(206, 23, 'Bayam 1 genggam'),
(207, 23, 'Air 200 ml'),
(208, 23, 'Stevia secukupnya'),
(209, 24, 'Susu 200 ml'),
(210, 24, 'Oat 2 sdm'),
(211, 24, 'Kakao 1 sdt'),
(212, 24, 'Madu 1 sdt'),
(213, 24, 'Kayu manis sejumput'),
(214, 25, 'Seduhan lavender 150 ml'),
(215, 25, 'Daun mint 5-6 helai'),
(216, 25, 'Madu 1 sdt'),
(217, 25, 'Lemon 1 iris'),
(218, 25, 'Es batu'),
(219, 26, 'Santan encer 150 ml'),
(220, 26, 'Pisang 1/2'),
(221, 26, 'Madu 1 sdt'),
(222, 26, 'Air hangat 100 ml');

-- --------------------------------------------------------

--
-- Table structure for table `recipe_steps`
--

CREATE TABLE `recipe_steps` (
  `id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `step_no` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipe_steps`
--

INSERT INTO `recipe_steps` (`id`, `recipe_id`, `step_no`, `content`) VALUES
(37, 3, 1, 'Cuci bahan'),
(38, 3, 2, 'Blender halus'),
(39, 3, 3, 'Sajikan dingin'),
(40, 4, 1, 'Cuci & potong'),
(41, 4, 2, 'Blender'),
(42, 4, 3, 'Tambahkan es'),
(43, 5, 1, 'Potong bahan'),
(44, 5, 2, 'Blender'),
(45, 5, 3, 'Saring bila perlu'),
(46, 6, 1, 'Blender semua bahan'),
(47, 6, 2, 'Sajikan segera'),
(48, 7, 1, 'Blender halus'),
(49, 7, 2, 'Tambahkan es bila suka'),
(50, 8, 1, 'Blender hingga creamy'),
(51, 8, 2, 'Sajikan dingin'),
(52, 9, 1, 'Blender'),
(53, 9, 2, 'Cicipi manisnya'),
(54, 10, 1, 'Blender halus'),
(55, 10, 2, 'Sajikan tanpa gula'),
(56, 11, 1, 'Blender creamy'),
(57, 11, 2, 'Sajikan segera'),
(58, 12, 1, 'Seduh chamomile'),
(59, 12, 2, 'Campur madu & lemon'),
(60, 12, 3, 'Nikmati hangat'),
(61, 13, 1, 'Blender ringan'),
(62, 13, 2, 'Hangatkan sebentar'),
(63, 14, 1, 'Seduh lavender'),
(64, 14, 2, 'Blender semua bahan'),
(94, 15, 1, 'Cuci & potong'),
(95, 15, 2, 'Blender halus'),
(96, 15, 3, 'Sajikan dengan es'),
(97, 16, 1, 'Kupas gel lidah buaya'),
(98, 16, 2, 'Blender semua bahan'),
(99, 16, 3, 'Minum segera'),
(100, 17, 1, 'Blender halus'),
(101, 17, 2, 'Tambahkan es jika suka'),
(102, 18, 1, 'Rendam kurma sebentar'),
(103, 18, 2, 'Blender semua bahan'),
(104, 18, 3, 'Sajikan dingin'),
(105, 19, 1, 'Blender halus'),
(106, 19, 2, 'Saring bila perlu'),
(107, 20, 1, 'Blender creamy'),
(108, 20, 2, 'Tambahkan es bila suka'),
(109, 21, 1, 'Blender'),
(110, 21, 2, 'Sajikan dingin'),
(111, 22, 1, 'Blender halus'),
(112, 22, 2, 'Minum segera'),
(113, 23, 1, 'Blender'),
(114, 23, 2, 'Cicipi manisnya'),
(115, 24, 1, 'Hangatkan susu + oat'),
(116, 24, 2, 'Aduk kakao & madu'),
(117, 24, 3, 'Nikmati hangat'),
(118, 25, 1, 'Seduh lavender'),
(119, 25, 2, 'Campur semua bahan'),
(120, 25, 3, 'Sajikan dingin'),
(121, 26, 1, 'Blender singkat'),
(122, 26, 2, 'Hangatkan sebentar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipe_ingredients`
--
ALTER TABLE `recipe_ingredients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipe_id` (`recipe_id`);

--
-- Indexes for table `recipe_steps`
--
ALTER TABLE `recipe_steps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipe_id` (`recipe_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `recipe_ingredients`
--
ALTER TABLE `recipe_ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT for table `recipe_steps`
--
ALTER TABLE `recipe_steps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recipe_ingredients`
--
ALTER TABLE `recipe_ingredients`
  ADD CONSTRAINT `recipe_ingredients_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `recipe_steps`
--
ALTER TABLE `recipe_steps`
  ADD CONSTRAINT `recipe_steps_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
