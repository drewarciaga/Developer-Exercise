-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 30, 2018 at 04:34 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homefinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

DROP TABLE IF EXISTS `houses`;
CREATE TABLE IF NOT EXISTS `houses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `bedrooms` int(10) UNSIGNED NOT NULL,
  `bathrooms` int(10) UNSIGNED NOT NULL,
  `storeys` int(10) UNSIGNED NOT NULL,
  `garages` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`id`, `name`, `price`, `bedrooms`, `bathrooms`, `storeys`, `garages`, `created_at`, `updated_at`) VALUES
(1, 'The Victoria', '374662.00', 4, 2, 2, 2, NULL, NULL),
(2, 'The Xavier', '513268.00', 4, 2, 1, 2, NULL, NULL),
(3, 'The Como', '454990.00', 4, 3, 2, 3, NULL, NULL),
(4, 'The Aspen', '384356.00', 4, 2, 2, 2, NULL, NULL),
(5, 'The Lucretia', '572002.00', 4, 3, 2, 2, NULL, NULL),
(6, 'The Toorak', '521951.00', 5, 2, 1, 2, NULL, NULL),
(7, 'The Skyscape', '263604.00', 3, 2, 2, 2, NULL, NULL),
(8, 'The Clifton', '386103.00', 3, 2, 1, 1, NULL, NULL),
(9, 'The Geneva', '390600.00', 4, 3, 2, 2, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
