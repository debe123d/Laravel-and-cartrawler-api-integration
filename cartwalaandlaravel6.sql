-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 06, 2019 at 04:09 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelAuth`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmanus`
--

CREATE TABLE `addmanus` (
  `id` int(10) UNSIGNED NOT NULL,
  `manu_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addmanus`
--

INSERT INTO `addmanus` (`id`, `manu_name`, `created_at`, `updated_at`) VALUES
(1, 'home', '2019-03-05 05:36:47', '2019-03-05 23:36:25');

-- --------------------------------------------------------

--
-- Table structure for table `addpages`
--

CREATE TABLE `addpages` (
  `id` int(10) UNSIGNED NOT NULL,
  `manu_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_page` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addpages`
--

INSERT INTO `addpages` (`id`, `manu_id`, `add_page`, `status`, `created_at`, `updated_at`) VALUES
(2, 'home', '<p>tytrytutyujyjyjyhjmhjhjhjjyghjfyujfyikuy7gituyg<img alt=\"\" src=\"/laravel6/public/editor/kcfinder/upload/images/cheerful-friends-having-fun-in-park-young-people-using-phone-outdoor-at-summer-happy-friends-laughing-together-joyful-people-watching-photos-on-smart-phone-three-friends-laughing_bayqpmhkl_thumbnail-full01.png\" style=\"width: 1920px; height: 1080px;\" /></p>', 0, '2019-03-19 07:17:38', '2019-03-21 00:06:20'),
(3, 'store', '<p>tryry</p>', 0, '2019-03-19 09:12:26', '2019-03-21 00:06:43'),
(4, 'rt', '<p>tre</p>', 0, '2019-03-20 08:07:24', '2019-03-21 00:06:29'),
(5, 'nop', '<p>huytutuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu</p>', 0, '2019-03-21 00:01:08', '2019-03-21 00:06:22'),
(6, 'uuuuuuuuuuuuu', '<p>uuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu</p>', 0, '2019-03-21 00:01:15', '2019-03-21 00:02:57'),
(7, 'not', '<p>i am not a</p>\r\n\r\n<p>&nbsp;</p>', 0, '2019-03-21 00:01:40', '2019-03-21 00:06:27');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `created_at`, `updated_at`) VALUES
(1, 'rojalin palai', 'admin@gmail.com', 'yutyufi', '2019-03-18 05:35:54', '2019-03-18 05:35:54'),
(5, 'rojalin palai', 'admin@microfinet.com', 'hy', '2019-03-18 07:52:45', '2019-03-18 07:52:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2019_02_25_104753_create_users_table', 1),
(5, '2019_03_04_072824_create_addmanus_table', 2),
(6, '2019_03_18_105158_create_contacts_table', 3),
(7, '2019_03_19_073608_create_addpages_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `un_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qstr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_number`, `password`, `type`, `un_id`, `qstr`, `status`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Debnedra Sahu', 'sahu@gmail.com', '969696985', '$2y$10$IBKFACf1SApHuRejvYbsiu9HGkSN8ZeXhQbgDABZ8yrZFBCz4dvg6', 'Admin', 'uuOLR5NP08imEdOg', 'AUWBm4aHlysB8P3Q', '1', 'img.jpg', 'vJvu1I5jEQI32EuG00brXsCDSSPc468qV2lPevppenmIPvZxe8ackKAqXTsO', '2019-03-04 02:55:49', '2019-03-04 02:57:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addmanus`
--
ALTER TABLE `addmanus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addpages`
--
ALTER TABLE `addpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `addmanus`
--
ALTER TABLE `addmanus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `addpages`
--
ALTER TABLE `addpages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
