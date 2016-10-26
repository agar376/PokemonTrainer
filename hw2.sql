-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1build0.15.04.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 25, 2016 at 10:37 AM
-- Server version: 5.6.28-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hw2`
--

-- --------------------------------------------------------

--
-- Table structure for table `captured`
--

CREATE TABLE IF NOT EXISTS `captured` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `pokemon_id` int(10) unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `captured`
--

INSERT INTO `captured` (`id`, `user_id`, `pokemon_id`, `created_at`, `updated_at`) VALUES
(2, 1, 2, NULL, NULL),
(4, 1, 4, '2016-09-19 07:23:08', '2016-09-19 07:23:08'),
(10, 2, 2, '2016-09-22 12:26:44', '2016-09-22 12:26:44'),
(11, 2, 4, '2016-09-22 12:27:48', '2016-09-22 12:27:48'),
(12, 2, 3, '2016-09-22 12:28:11', '2016-09-22 12:28:11'),
(14, 1, 3, '2016-09-22 12:38:25', '2016-09-22 12:38:25'),
(20, 1, 1, '2016-09-24 10:39:15', '2016-09-24 10:39:15'),
(21, 1, 7, '2016-09-24 10:42:18', '2016-09-24 10:42:18'),
(27, 4, 1, '2016-09-26 00:25:54', '2016-09-26 00:25:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_09_16_180019_create_trainer_table', 2),
('2016_09_16_180030_create_pokemon_table', 2),
('2016_09_16_180040_create_captured_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pokemon`
--

CREATE TABLE IF NOT EXISTS `pokemon` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pokemon`
--

INSERT INTO `pokemon` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'pikachu', NULL, '2016-09-20 07:23:09'),
(2, 'bulbasaur', NULL, NULL),
(3, 'charizard', '2016-09-19 06:37:49', '2016-09-19 06:37:49'),
(4, 'evee', '2016-09-19 06:48:28', '2016-09-26 00:31:59'),
(7, 'snorlax', '2016-09-24 10:42:12', '2016-09-24 10:42:12');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE IF NOT EXISTS `trainer` (
`id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hometown` varchar(525) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `hometown`, `is_admin`) VALUES
(1, 'Shobhit Agarwal', 'agar376@usc.edu', '$2y$10$/YOBNKOwdbA2mWHx8FS8wufYRck9cbtjlAEtMqp1PxdU9RUZkBrwq', '406eUdPQtuuFLOf76VL4Ywr13DC20B59JrfoqDozasy3wyjQnk2SYueqOE55', '2016-09-18 01:14:25', '2016-09-24 10:52:08', 'delhi', 1),
(2, 'Sandeep Gupta', 'agarwal.shobhit.07@gmail.com', '$2y$10$wbCb2gFFtzMgj.eml/QK3uIpoyO94iYWLVPeb3WVVwusBsHnvkc5i', 'KDcFTaChN0ruKvmd43OxHtEboCUmN0AgKS5PunuV15NSPp23YbZ7vEuUMaUv', '2016-09-18 01:22:26', '2016-09-24 10:39:33', 'new delhi', 0),
(3, 'Tommy Trojan', 'shobhitagarwal0709@gmail.com', '$2y$10$B.0J.M4.SLBuAq0tElyM3uLZKIzHiK1FRLN2P14m6UYU/NXZfOV/q', 'ytho0PgMq522yvfJB9Lcgd1yv6vmQ59lZNE6wy9OvlQqAo1G3wyPzZubrQ8y', '2016-09-24 10:53:38', '2016-09-24 10:55:20', 'los angeles', 0),
(4, 'Mark Richard', 'mark@gmail.com', '$2y$10$0AMTi2E3DyC7fJA7SPEuce6vRTfKP6gmm4rb/m/jO8D0d0JNmTtCS', 'hklrBdYxUBwRQihuJ83Ontbl1LdhR1EhQu77Kp8mIDES1Jdjalrw1MTLGRGc', '2016-09-26 00:20:57', '2016-09-26 00:23:58', 'New York City', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `captured`
--
ALTER TABLE `captured`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `user_pok_unique` (`user_id`,`pokemon_id`), ADD KEY `captured_pokemon_id_foreign` (`pokemon_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pokemon`
--
ALTER TABLE `pokemon`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `captured`
--
ALTER TABLE `captured`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `pokemon`
--
ALTER TABLE `pokemon`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `captured`
--
ALTER TABLE `captured`
ADD CONSTRAINT `captured_pokemon_id_foreign` FOREIGN KEY (`pokemon_id`) REFERENCES `pokemon` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `captured_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
