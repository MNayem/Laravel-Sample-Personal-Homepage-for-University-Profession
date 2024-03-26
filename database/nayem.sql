-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 03, 2023 at 11:59 AM
-- Server version: 8.0.31-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dolphin5_nayem`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int UNSIGNED NOT NULL,
  `product_id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED DEFAULT NULL,
  `order_id` int UNSIGNED DEFAULT NULL,
  `pname` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'product',
  `fname` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'food',
  `amount` float NOT NULL DEFAULT '0',
  `vat` float DEFAULT '0',
  `tamount` float DEFAULT '0',
  `cname` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'customer',
  `date` datetime DEFAULT NULL,
  `cphone` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'phone',
  `caddress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'address',
  `ip_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_quantity` int NOT NULL DEFAULT '1',
  `transaction_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'Transaction ID',
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `name` varchar(55) DEFAULT 'Name',
  `email` varchar(55) DEFAULT NULL,
  `phone` varchar(55) NOT NULL,
  `subject` varchar(55) DEFAULT NULL,
  `message` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `status` varchar(50) DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Md Nayem', 'mdnayem.cse21@gmail.com', '01999791578', 'Test', 'This is a Test Message.', 'Pending', '2022-10-17 20:14:56', '2022-10-17 20:14:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int NOT NULL,
  `fnumber` int NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` varchar(1500) DEFAULT 'Product description',
  `category` varchar(55) DEFAULT NULL,
  `makingcost` float DEFAULT NULL,
  `sellingprice` float NOT NULL,
  `estimatedprofit` float NOT NULL,
  `availability` varchar(55) DEFAULT 'Yes',
  `image` varchar(255) DEFAULT 'Product Image',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `fnumber`, `email`, `name`, `description`, `category`, `makingcost`, `sellingprice`, `estimatedprofit`, `availability`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'mdnayem.cse21@gmail.com', 'Special Fried Wonton (8Pcs)', 'Special Fried Wonton', 'Party', 110, 360, 250, 'Yes', 'images/1.jpg', '2022-06-19 17:16:35', '2022-07-24 14:06:35'),
(2, 2, 'mdnayem.cse21@gmail.com', 'Fried Wonton (8 Pcs)', 'Fried Wonton', 'Party', 160, 320, 160, 'Yes', 'images/2.jpg', '2022-06-19 17:17:50', '2022-07-24 14:09:28'),
(3, 3, 'mdnayem.cse21@gmail.com', 'Spring Rolls (8 Pcs)', 'Spring Rolls (8 Pcs)', 'Dinner', 120, 320, 200, 'Yes', 'images/3.webp', '2022-06-19 21:31:06', '2022-07-24 14:19:27'),
(4, 4, 'mdnayem.cse21@gmail.com', 'Fish Finger (6 Pcs)', 'Fish Finger (6 Pcs)', 'Beverage and Dessert', 180, 480, 300, 'Yes', 'images/4.jpg', '2022-06-21 12:08:04', '2022-07-24 15:13:44'),
(5, 5, 'mdnayem.cse21@gmail.com', 'Special Fried Prawn (6 Pcs)', 'Special Fried Prawn', 'Party', 140, 440, 300, 'Yes', 'images/5.webp', '2022-06-21 12:11:27', '2022-07-24 15:17:00'),
(6, 6, 'mdnayem.cse21@gmail.com', 'Chicken Cake (8 Pcs)', 'Chicken Cake', 'Breakfast', 140, 440, 300, 'Yes', 'images/6.jpg', '2022-06-21 12:12:15', '2022-07-24 15:53:08'),
(7, 7, 'mdnayem.cse21@gmail.com', 'Prawn Cake (8 Pcs)', 'Prawn Cake', 'Breakfast', 140, 440, 300, 'Yes', 'images/7.jpg', '2022-06-21 12:12:53', '2022-07-24 15:35:25'),
(8, 18, 'mdnayem.cse21@gmail.com', 'Kacci Biriyani', 'Jafran Special Kacci Biriyani', 'Launch', 100, 170, 70, 'Yes', 'images/Kacci.jpeg', '2022-06-21 12:14:03', '2022-06-21 12:14:03'),
(9, 19, 'mdnayem.cse21@gmail.com', 'Beef Biriyani', 'Jafran Special Beef biriyani', 'Launch', 120, 190, 70, 'Yes', 'images/Beef Biriyani.jpg', '2022-06-21 12:15:01', '2022-06-21 12:15:01'),
(10, 20, 'mdnayem.cse21@gmail.com', 'Plain Rice', 'Regular Plain Rice', 'Dinner', 30, 50, 20, 'Yes', 'images/rice.webp', '2022-06-21 12:15:38', '2022-06-21 12:15:38'),
(11, 21, 'mdnayem.cse21@gmail.com', 'Fried Rice', 'Jafran Special Fried Rice', 'Dinner', 50, 80, 30, 'Yes', 'images/Fried Rice.jpg', '2022-06-21 12:16:09', '2022-06-21 12:16:09'),
(12, 22, 'mdnayem.cse21@gmail.com', 'Thai Soup', 'Jafran Special Thai Soup', 'Dinner', 50, 120, 70, 'Yes', 'images/Thai Soup.webp', '2022-07-15 22:49:45', '2022-07-15 22:49:45'),
(13, 66, 'mdnayem.cse21@gmail.com', 'Steam Chicken Soup', 'Steam Chicken Soup', 'Chinese Cuisine', 230, 450, 220, 'Yes', 'images/Steam Chicken Soup.jpg', '2022-07-18 14:58:58', '2022-07-18 14:58:58'),
(14, 67, 'mdnayem.cse21@gmail.com', 'Thai Soup', 'Thai Soup', 'Chinese Cuisine', 250, 420, 170, 'Yes', 'images/Thai Soup.jpg', '2022-07-18 15:00:52', '2022-07-18 15:00:52'),
(15, 68, 'mdnayem.cse21@gmail.com', 'Special Thai Soup', 'Special Thai Soup', 'Chinese Cuisine', 400, 510, 110, 'Yes', 'images/Special Thai Soup.jpg', '2022-07-18 15:02:14', '2022-07-18 15:02:14'),
(16, 69, 'mdnayem.cse21@gmail.com', 'Chicken Corn Soup', 'Chicken Corn Soup', 'Chinese Cuisine', 230, 300, 70, 'Yes', 'images/Chicken Corn Soup.jpg', '2022-07-18 15:04:05', '2022-07-18 15:04:05'),
(17, 70, 'mdnayem.cse21@gmail.com', 'Special Corn Soup (Chicken/Prawn/Mixed)', 'Special Corn Soup (Chicken/Prawn/Mixed)', 'Chinese Cuisine', 320, 400, 80, 'Yes', 'images/Chicken Corn Soup.jpg', '2022-07-18 15:06:35', '2022-07-18 15:06:35'),
(18, 71, 'mdnayem.cse21@gmail.com', 'Hot & Sour Soup', 'Hot & Sour Soup', 'Chinese Cuisine', 280, 360, 80, 'Yes', 'images/Hot & Sour Soup.jpg', '2022-07-18 15:07:57', '2022-07-18 15:07:57'),
(19, 72, 'mdnayem.cse21@gmail.com', 'Noodles Soup (Chicken/Prawn/Mixed)', 'Noodles Soup (Chicken/Prawn/Mixed)', 'Chinese Cuisine', 280, 360, 80, 'Yes', 'images/thai-shrimp-ramen2.jpg', '2022-07-18 15:10:47', '2022-07-18 15:10:47'),
(20, 73, 'mdnayem.cse21@gmail.com', 'Wonton Noodles Soup', 'Wonton Noodles Soup', 'Chinese Cuisine', 280, 360, 80, 'Yes', 'images/73.jpg', '2022-07-18 15:11:44', '2022-07-18 15:11:44'),
(21, 74, 'mdnayem.cse21@gmail.com', 'Pure Mixed Vegetable Soup', 'Pure Mixed Vegetable Soup', 'Chinese Cuisine', 230, 300, 70, 'Yes', 'images/74.jpg', '2022-07-18 15:13:07', '2022-07-18 15:13:07'),
(22, 75, 'mdnayem.cse21@gmail.com', 'Chicken Vegetable Soup', 'Chicken Vegetable Soup', 'Chinese Cuisine', 250, 330, 80, 'Yes', 'images/75.jpg', '2022-07-18 15:15:08', '2022-07-18 15:15:08'),
(23, 76, 'mdnayem.cse21@gmail.com', 'Chicken Mushroom vegetable Soup', 'Chicken Mushroom vegetable Soup', 'Chinese Cuisine', 280, 360, 80, 'Yes', 'images/76.jpg', '2022-07-18 15:18:26', '2022-07-18 15:18:26'),
(24, 23, 'mdnayem.cse21@gmail.com', 'SEA FOOD SOUP', 'SEA FOOD SOUP', 'Thai Cuisine', 500, 570, 70, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-20 11:31:23', '2022-07-20 11:31:23'),
(25, 24, 'mdnayem.cse21@gmail.com', 'MIXED CLEAR THAI SOUP', 'MIXED CLEAR THAI SOUP', 'Thai Cuisine', 480, 520, 40, 'Yes', 'images/rainbow-5372892__340.jpg', '2022-07-20 11:33:57', '2022-07-20 11:38:04'),
(26, 25, 'mdnayem.cse21@gmail.com', 'THAI NOODLES WITH WONTON SOUP', 'THAI NOODLES WITH WONTON SOUP', 'Thai Cuisine', 400, 460, 60, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-20 11:42:15', '2022-07-20 11:42:15'),
(27, 26, 'mdnayem.cse21@gmail.com', 'THAI VEGETABLE SOUP CHICKEN OR PRAWN', 'THAI VEGETABLE SOUP CHICKEN OR PRAWN', 'Thai Cuisine', 400, 440, 40, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-20 11:45:05', '2022-07-20 11:45:05'),
(28, 27, 'mdnayem.cse21@gmail.com', 'JAFRAN  SPECIAL FRIED CHICKEN (9 PCS)', 'JAFRAN  SPECIAL FRIED CHICKEN (9 PCS)', 'Thai Cuisine', 500, 550, 50, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-20 12:13:24', '2022-07-20 12:13:24'),
(29, 28, 'mdnayem.cse21@gmail.com', 'THAI FRIED CHICKEN (8 PCS)', 'THAI FRIED CHICKEN (8 PCS)', 'Thai Cuisine', 400, 490, 90, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-20 12:15:55', '2022-07-20 12:15:55'),
(30, 29, 'mdnayem.cse21@gmail.com', 'BONELESS FRIED CHICKEN', 'BONELESS FRIED CHICKEN', 'Thai Cuisine', 500, 550, 50, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-20 12:18:02', '2022-07-20 12:18:02'),
(31, 30, 'mdnayem.cse21@gmail.com', 'SLICED CHICKEN WITH BASIL LEAF', 'SLICED CHICKEN WITH BASIL LEAF', 'Thai Cuisine', 450, 500, 50, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-20 12:19:48', '2022-07-20 12:19:48'),
(32, 31, 'mdnayem.cse21@gmail.com', 'SLICED CHICKEN WITH CASHEW NUT', 'SLICED CHICKEN WITH CASHEW NUT', 'Thai Cuisine', 500, 540, 40, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-20 12:33:11', '2022-07-20 12:33:11'),
(33, 32, 'mdnayem.cse21@gmail.com', 'SLICED CHICKEN WITH GREEN CHILLI ONION', 'SLICED CHICKEN WITH GREEN CHILLI ONION', 'Thai Cuisine', 480, 520, 40, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-20 12:34:52', '2022-07-20 12:34:52'),
(34, 33, 'mdnayem.cse21@gmail.com', 'SLICED CHICKEN WITH GINGER/MUSHROOM', 'SLICED CHICKEN WITH GINGER/MUSHROOM', 'Thai Cuisine', 480, 530, 50, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-20 12:38:09', '2022-07-20 12:38:09'),
(35, 34, 'mdnayem.cse21@gmail.com', 'SLICED CHICKEN WITH GARLIC SAUCE', 'SLICED CHICKEN WITH GARLIC SAUCE', 'Thai Cuisine', 430, 480, 50, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-20 12:40:43', '2022-07-20 12:40:43'),
(36, 35, 'mdnayem.cse21@gmail.com', 'LEMON CHICKEN', 'LEMON CHICKEN', 'Thai Cuisine', 450, 500, 50, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-20 12:41:56', '2022-07-20 12:41:56'),
(37, 36, 'mdnayem.cse21@gmail.com', 'JAFRAN SPECIAL HOT SAUCE PRAWN', 'JAFRAN SPECIAL HOT SAUCE PRAWN', 'Thai Cuisine', 480, 530, 50, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-20 14:48:57', '2022-07-20 14:48:57'),
(38, 37, 'mdnayem.cse21@gmail.com', 'PRAWN WITH GARLIC SAUCE', 'PRAWN WITH GARLIC SAUCE', 'Thai Cuisine', 470, 520, 50, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-20 14:51:09', '2022-07-20 14:51:09'),
(39, 38, 'mdnayem.cse21@gmail.com', 'PRAWN WITH GINGER', 'PRAWN WITH GINGER', 'Thai Cuisine', 470, 520, 50, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-20 14:54:18', '2022-07-20 14:56:33'),
(40, 39, 'mdnayem.cse21@gmail.com', 'PRAWN WITH CAPSICUM', 'PRAWN WITH CAPSICUM', 'Thai Cuisine', 480, 530, 50, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-20 14:55:56', '2022-07-20 14:55:56'),
(41, 40, 'mdnayem.cse21@gmail.com', 'JAFRAN SPECIAL HOT SAUCE RED SNAPPER', 'JAFRAN SPECIAL HOT SAUCE RED SNAPPER', 'Thai Cuisine', 800, 940, 140, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-20 14:59:43', '2022-07-20 14:59:43'),
(42, 41, 'mdnayem.cse21@gmail.com', 'DEEP FRIED RED SNAPPER MASALA OR FRIED', 'DEEP FRIED RED SNAPPER MASALA OR FRIED', 'Thai Cuisine', 800, 950, 150, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-20 15:03:00', '2022-07-20 15:03:00'),
(43, 42, 'mdnayem.cse21@gmail.com', 'BONELESS RED SNAPPER WITH GARLIC SAUCE', 'BONELESS RED SNAPPER WITH GARLIC SAUCE', 'Thai Cuisine', 450, 550, 100, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-20 15:04:55', '2022-07-20 15:04:55'),
(44, 43, 'mdnayem.cse21@gmail.com', 'CUTTLEFISH WITH BASIL LEAF', 'CUTTLEFISH WITH BASIL LEAF', 'Thai Cuisine', 500, 580, 80, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-20 15:07:49', '2022-07-20 15:07:49'),
(45, 44, 'mdnayem.cse21@gmail.com', 'SLICED FISH WITH GINGER OR BASIL LEAF', 'SLICED FISH WITH GINGER OR BASIL LEAF', 'Thai Cuisine', 480, 560, 80, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-20 15:09:53', '2022-07-20 15:09:53'),
(46, 45, 'mdnayem.cse21@gmail.com', 'SWEET & SOUR FISH', 'SWEET & SOUR FISH', 'Thai Cuisine', 500, 590, 90, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-20 15:11:28', '2022-07-20 15:11:28'),
(47, 46, 'mdnayem.cse21@gmail.com', 'POMFRET FISH FRIED OR MASALA', 'POMFRET FISH FRIED OR MASALA', 'Thai Cuisine', 550, 660, 110, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-20 15:13:28', '2022-07-20 15:13:28'),
(48, 47, 'mdnayem.cse21@gmail.com', 'POMFRET FISH HOT SAUCE', 'POMFRET FISH HOT SAUCE', 'Thai Cuisine', 580, 660, 80, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-20 15:14:54', '2022-07-20 15:14:54'),
(49, 48, 'mdnayem.cse21@gmail.com', 'BEEF WITH BASIL LEAF OYSTER SAUCE', 'BEEF WITH BASIL LEAF OYSTER SAUCE', 'Thai Cuisine', 450, 520, 70, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-21 15:27:30', '2022-07-21 15:27:30'),
(50, 49, 'mdnayem.cse21@gmail.com', 'SLICED BEEF WITH CAPSICUM', 'SLICED BEEF WITH CAPSICUM', 'Thai Cuisine', 400, 490, 90, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-21 15:29:17', '2022-07-21 15:29:17'),
(51, 50, 'mdnayem.cse21@gmail.com', 'SLICED BEEF WITH GINGER', 'SLICED BEEF WITH GINGER', 'Thai Cuisine', 400, 490, 90, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-21 15:30:33', '2022-07-21 15:30:33'),
(52, 51, 'mdnayem.cse21@gmail.com', 'SLICED BEEF IN RED CURRY WITH COCONUT MILK', 'SLICED BEEF IN RED CURRY WITH COCONUT MILK', 'Thai Cuisine', 450, 520, 70, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-21 15:33:07', '2022-07-21 15:33:07'),
(53, 52, 'mdnayem.cse21@gmail.com', 'SLICED BEEF WITH SPRING ONION', 'SLICED BEEF WITH SPRING ONION', 'Thai Cuisine', 400, 490, 90, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-21 15:34:26', '2022-07-21 15:34:26'),
(54, 53, 'mdnayem.cse21@gmail.com', 'MIXED VEGETABLE WITH OYSTER SAUCE', 'MIXED VEGETABLE WITH OYSTER SAUCE', 'Thai Cuisine', 350, 400, 50, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-21 15:36:30', '2022-07-21 15:36:30'),
(55, 54, 'mdnayem.cse21@gmail.com', 'VEGETABLE WITH CHICKEN', 'VEGETABLE WITH CHICKEN', 'Thai Cuisine', 320, 420, 100, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-21 15:38:24', '2022-07-21 15:38:24'),
(56, 55, 'mdnayem.cse21@gmail.com', 'VEGETABLE PRAWN OR BEEF', 'VEGETABLE PRAWN OR BEEF', 'Thai Cuisine', 350, 440, 90, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-21 15:40:08', '2022-07-21 15:40:08'),
(57, 56, 'mdnayem.cse21@gmail.com', 'VEGETABLE WITH CUTTLEFISH', 'VEGETABLE WITH CUTTLEFISH', 'Thai Cuisine', 400, 490, 90, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-21 15:41:21', '2022-07-21 15:41:21'),
(58, 57, 'mdnayem.cse21@gmail.com', 'MIXED THAI NOODLES', 'MIXED THAI NOODLES', 'Thai Cuisine', 400, 490, 90, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-21 15:42:47', '2022-07-21 15:42:47'),
(59, 58, 'mdnayem.cse21@gmail.com', 'THAI NOODLES BEEF OR CHICKEN OR PRAWN', 'THAI NOODLES BEEF OR CHICKEN OR PRAWN', 'Thai Cuisine', 380, 460, 80, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-21 15:44:37', '2022-07-21 15:44:37'),
(60, 59, 'mdnayem.cse21@gmail.com', 'MIXED SEA FOOD NOODLES', 'MIXED SEA FOOD NOODLES', 'Thai Cuisine', 450, 530, 80, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-21 15:46:07', '2022-07-21 15:46:07'),
(61, 60, 'mdnayem.cse21@gmail.com', 'MIXED FRIED RICE WITH BASIL LEAF', 'MIXED FRIED RICE WITH BASIL LEAF', 'Thai Cuisine', 400, 490, 90, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-23 14:02:05', '2022-07-23 14:02:05'),
(62, 61, 'mdnayem.cse21@gmail.com', 'FRIED RICE WITH CHICKEN OR PRAWN OR BEEF', 'FRIED RICE WITH CHICKEN OR PRAWN OR BEEF', 'Thai Cuisine', 300, 380, 80, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-23 14:05:03', '2022-07-23 14:05:03'),
(63, 62, 'mdnayem.cse21@gmail.com', 'VEGETABLE FRIED RICE', 'VEGETABLE FRIED RICE', 'Thai Cuisine', 240, 340, 100, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-23 14:06:11', '2022-07-23 14:06:11'),
(64, 63, 'mdnayem.cse21@gmail.com', 'SPECIAL THAI FRIED RICE (MIXED)', 'SPECIAL THAI FRIED RICE (MIXED)', 'Thai Cuisine', 400, 500, 100, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-23 14:08:21', '2022-07-23 14:10:32'),
(65, 64, 'mdnayem.cse21@gmail.com', 'AMERICAN FRIED RICE', 'AMERICAN FRIED RICE', 'Thai Cuisine', 420, 520, 100, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-23 14:09:59', '2022-07-23 14:09:59'),
(66, 65, 'mdnayem.cse21@gmail.com', 'SEA FOOD RICE', 'SEA FOOD RICE', 'Thai Cuisine', 430, 530, 100, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-23 14:11:34', '2022-07-23 14:11:34'),
(67, 66, 'mdnayem.cse21@gmail.com', 'STEAM CHICKEN SOUP', 'STEAM CHICKEN SOUP', 'Chinese Cuisine', 350, 450, 100, 'Yes', 'images/download (2).jfif', '2022-07-23 14:22:57', '2022-07-23 14:22:57'),
(68, 67, 'mdnayem.cse21@gmail.com', 'THAI SOUP', 'THAI SOUP320', 'Chinese Cuisine', 320, 420, 100, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-23 14:25:15', '2022-07-23 14:25:15'),
(69, 68, 'mdnayem.cse21@gmail.com', 'SPECIAL THAI SOUP', 'SPECIAL THAI SOUP', 'Chinese Cuisine', 410, 510, 100, 'Yes', 'images/j0rBoVyb7T7uTzj19np2VrpbZpEQLIw8ijCib6Nm.png', '2022-07-23 14:26:42', '2022-07-23 14:26:42'),
(70, 69, 'mdnayem.cse21@gmail.com', 'CHICKEN CORN SOUP', 'CHICKEN CORN SOUP', 'Chinese Cuisine', 200, 300, 100, 'Yes', 'images/download (3).jfif', '2022-07-23 14:29:36', '2022-07-23 14:29:36'),
(71, 70, 'mdnayem.cse21@gmail.com', 'SPECIAL CORN SOUP (CHICKEN/PRAWN/MIXED)', 'SPECIAL CORN SOUP (CHICKEN/PRAWN/MIXED)', 'Chinese Cuisine', 300, 400, 100, 'Yes', 'images/download (4).jfif', '2022-07-23 14:32:31', '2022-07-23 14:32:31'),
(72, 71, 'mdnayem.cse21@gmail.com', 'HOT & SOUR SOUP', 'HOT & SOUR SOUP', 'Chinese Cuisine', 260, 360, 100, 'Yes', 'images/download (5).jfif', '2022-07-23 14:34:06', '2022-07-23 14:34:06'),
(73, 72, 'mdnayem.cse21@gmail.com', 'NOODLES SOUP (CHICKEN/PRAWN/MIXED)', 'NOODLES SOUP (CHICKEN/PRAWN/MIXED)', 'Chinese Cuisine', 260, 360, 100, 'Yes', 'images/download (6).jfif', '2022-07-23 14:37:39', '2022-07-23 14:37:39'),
(74, 73, 'mdnayem.cse21@gmail.com', 'WONTON NOODLES SOUP', 'WONTON NOODLES SOUP', 'Chinese Cuisine', 260, 360, 100, 'Yes', 'images/download (7).jfif', '2022-07-23 14:39:52', '2022-07-23 14:39:52'),
(75, 74, 'mdnayem.cse21@gmail.com', 'PURE MIXED VEGETABLE SOUP', 'PURE MIXED VEGETABLE SOUP', 'Chinese Cuisine', 200, 300, 100, 'Yes', 'images/download (8).jfif', '2022-07-23 14:42:09', '2022-07-23 14:42:09'),
(76, 75, 'mdnayem.cse21@gmail.com', 'CHICKEN VEGETABLE SOUP', 'CHICKEN VEGETABLE SOUP', 'Chinese Cuisine', 230, 330, 100, 'Yes', 'images/download (9).jfif', '2022-07-23 14:43:56', '2022-07-23 14:43:56'),
(77, 76, 'mdnayem.cse21@gmail.com', 'CHICKEN MUSHROOM VEGETABLE SOUP', 'CHICKEN MUSHROOM VEGETABLE SOUP', 'Chinese Cuisine', 260, 360, 100, 'Yes', 'images/images.jfif', '2022-07-23 14:45:28', '2022-07-23 14:45:28'),
(78, 77, 'mdnayem.cse21@gmail.com', 'CHICKEN ONION SOUP', 'CHICKEN ONION SOUP', 'Chinese Cuisine', 290, 390, 100, 'Yes', 'images/download (10).jfif', '2022-07-23 14:46:51', '2022-07-23 14:46:51'),
(79, 78, 'mdnayem.cse21@gmail.com', 'CHICKEN CORN SOUP REGULAR (1 CUP)', 'CHICKEN CORN SOUP REGULAR (1 CUP)', 'Chinese Cuisine', 50, 100, 50, 'Yes', 'images/download (11).jfif', '2022-07-23 14:48:54', '2022-07-23 14:48:54'),
(80, 79, 'mdnayem.cse21@gmail.com', 'CHICKEN THAI SOUP REGULAR (1 CUP)', 'CHICKEN THAI SOUP REGULAR (1 CUP)', 'Chinese Cuisine', 60, 120, 60, 'Yes', 'images/download (12).jfif', '2022-07-23 14:50:34', '2022-07-23 14:50:34'),
(81, 80, 'mdnayem.cse21@gmail.com', 'MIXED VEGETABLE', 'MIXED VEGETABLE', 'Chinese Cuisine', 170, 270, 100, 'Yes', 'images/download (13).jfif', '2022-07-23 14:52:00', '2022-07-23 14:52:00'),
(82, 82, 'mdnayem.cse21@gmail.com', 'SWEET & SOUR VEGETABLE', 'SWEET & SOUR VEGETABLE', 'Chinese Cuisine', 200, 300, 100, 'Yes', 'images/download 15.jfif', '2022-07-23 15:04:07', '2022-07-23 15:04:07'),
(83, 83, 'mdnayem.cse21@gmail.com', 'JAFRAN SPECIAL MIXED FRIED RICE', 'JAFRAN SPECIAL MIXED FRIED RICE', 'Chinese Cuisine', 380, 480, 100, 'Yes', 'images/download.jfif', '2022-07-23 15:06:50', '2022-07-23 15:06:50'),
(84, 84, 'mdnayem.cse21@gmail.com', 'CHICKEN FRIED RICE', 'CHICKEN FRIED RICE', 'Chinese Cuisine', 260, 360, 100, 'Yes', 'images/download (1).jfif', '2022-07-23 15:08:02', '2022-07-23 15:08:02'),
(85, 85, 'mdnayem.cse21@gmail.com', 'PRAWN FRIED RICE', 'PRAWN FRIED RICE', 'Chinese Cuisine', 280, 380, 100, 'Yes', 'images/download (2).jfif', '2022-07-23 15:10:09', '2022-07-23 15:10:09'),
(86, 86, 'mdnayem.cse21@gmail.com', 'BEEF FRIED RICE', 'BEEF FRIED RICE', 'Chinese Cuisine', 280, 380, 100, 'Yes', 'images/download (3).jfif', '2022-07-23 15:11:17', '2022-07-23 15:11:17'),
(87, 87, 'mdnayem.cse21@gmail.com', 'EGG FRIED RICE', 'EGG FRIED RICE', 'Chinese Cuisine', 230, 330, 100, 'Yes', 'images/download (4).jfif', '2022-07-23 15:12:37', '2022-07-23 15:12:37'),
(88, 88, 'mdnayem.cse21@gmail.com', 'STREAM RICE', 'STREAM RICE', 'Thai Cuisine', 150, 200, 50, 'Yes', 'images/download (5).jfif', '2022-07-23 15:14:01', '2022-07-23 15:14:01'),
(89, 89, 'mdnayem.cse21@gmail.com', 'JAFRAN SPECIAL MIXED CHOW-MEIN', 'JAFRAN SJAFRAN SPECIAL MIXED CHOW-MEINPECIAL MIXED CHOW-MEIN', 'Chinese Cuisine', 340, 440, 100, 'Yes', 'images/download (6).jfif', '2022-07-23 15:16:39', '2022-07-23 15:16:39'),
(90, 90, 'mdnayem.cse21@gmail.com', 'CHOW-MEIN WITH CHICKEN', 'CHOW-MEIN WITH CHICKEN', 'Chinese Cuisine', 280, 380, 100, 'Yes', 'images/download (7).jfif', '2022-07-23 15:18:12', '2022-07-23 15:18:12'),
(91, 91, 'mdnayem.cse21@gmail.com', 'CHOW-MEIN WITH PRAWN', 'CHOWCHOW-MEIN WITH PRAWN-MEIN WITH CHICKEN', 'Chinese Cuisine', 290, 390, 100, 'Yes', 'images/download (8).jfif', '2022-07-23 15:21:32', '2022-07-23 15:21:32'),
(92, 92, 'mdnayem.cse21@gmail.com', 'CHOW-MEIN WITH BEEF', 'CHOW-MEIN WITH BEEF', 'Chinese Cuisine', 290, 390, 100, 'Yes', 'images/download (9).jfif', '2022-07-23 15:22:50', '2022-07-23 15:22:50'),
(93, 93, 'mdnayem.cse21@gmail.com', 'VEGETABLE CHOW-MEIN', 'VEGETABLE CHOW-MEIN', 'Chinese Cuisine', 250, 350, 100, 'Yes', 'images/download (10).jfif', '2022-07-23 15:24:12', '2022-07-23 15:24:12'),
(94, 94, 'mdnayem.cse21@gmail.com', 'JAFRAN SPECIAL CHOPSUEY', 'JAFRAN SPECIAL CHOPSUEY', 'Chinese Cuisine', 370, 470, 100, 'Yes', 'images/download (11).jfif', '2022-07-23 15:26:23', '2022-07-23 15:26:23'),
(95, 95, 'mdnayem.cse21@gmail.com', 'CHOPSUEY WITH CHICKEN', 'CHOPSUEY WITH CHICKEN', 'Chinese Cuisine', 230, 330, 100, 'Yes', 'images/download (12).jfif', '2022-07-23 15:28:23', '2022-07-23 15:28:23'),
(96, 96, 'mdnayem.cse21@gmail.com', 'AMERICAN CHOPSUEY', 'AMERICAN CHOPSUEY', 'Chinese Cuisine', 380, 480, 100, 'Yes', 'images/download (13).jfif', '2022-07-23 15:29:37', '2022-07-23 15:29:37'),
(97, 97, 'mdnayem.cse21@gmail.com', 'MIXED VEGETABLE CHOPSUEY', 'MIXED VEGETABLE CHOPSUEY', 'Chinese Cuisine', 220, 320, 100, 'Yes', 'images/download (14).jfif', '2022-07-23 15:31:05', '2022-07-23 15:31:05'),
(98, 98, 'mdnayem.cse21@gmail.com', 'CHICKEN CHILLI ONION', 'CHICKEN CHILLI ONION', 'Chinese Cuisine', 360, 460, 100, 'Yes', 'images/download (15).jfif', '2022-07-23 15:44:17', '2022-07-23 15:44:17'),
(99, 99, 'mdnayem.cse21@gmail.com', 'FRIED SPRING CHICKEN', 'FRIED SPRING CHICKEN', 'Chinese Cuisine', 320, 420, 100, 'Yes', 'images/download (16).jfif', '2022-07-23 15:45:27', '2022-07-23 15:45:27'),
(100, 100, 'mdnayem.cse21@gmail.com', 'CRUMB-FRIED CHICKEN', 'CRUMB-FRIED CHICKEN', 'Chinese Cuisine', 350, 450, 100, 'Yes', 'images/download (17).jfif', '2022-07-23 15:46:32', '2022-07-23 15:46:32'),
(101, 101, 'mdnayem.cse21@gmail.com', 'CHICKEN CHILL DRY', 'CHICKEN CHILL DRY', 'Chinese Cuisine', 360, 460, 100, 'Yes', 'images/download (18).jfif', '2022-07-23 15:48:01', '2022-07-23 15:48:01'),
(102, 102, 'mdnayem.cse21@gmail.com', 'MASALA CHICKEN CURRY', 'MASALA CHICKEN CURRY', 'Chinese Cuisine', 350, 360, 10, 'Yes', 'images/download (19).jfif', '2022-07-23 15:49:33', '2022-07-23 15:49:33'),
(103, 103, 'mdnayem.cse21@gmail.com', 'SLICED CHICKEN WITH HOT SAUCE', 'SLICED CHICKEN WITH HOT SAUCE', 'Chinese Cuisine', 360, 460, 100, 'Yes', 'images/download (20).jfif', '2022-07-23 15:51:11', '2022-07-23 15:51:11'),
(104, 104, 'mdnayem.cse21@gmail.com', 'SWEET & SOUR CHICKEN', 'SWEET & SOUR CHICKEN', 'Chinese Cuisine', 380, 480, 100, 'Yes', 'images/download (21).jfif', '2022-07-23 15:52:35', '2022-07-23 15:52:35'),
(105, 105, 'mdnayem.cse21@gmail.com', 'CHICKEN SIZZILING', 'CHICKEN SIZZILING', 'Chinese Cuisine', 430, 530, 100, 'Yes', 'images/download (22).jfif', '2022-07-23 15:54:22', '2022-07-23 15:54:22'),
(106, 106, 'mdnayem.cse21@gmail.com', 'FOIL CHICKEN', 'FOIL CHICKEN', 'Chinese Cuisine', 460, 560, 100, 'Yes', 'images/download (23).jfif', '2022-07-23 15:56:01', '2022-07-23 15:56:01'),
(107, 107, 'mdnayem.cse21@gmail.com', 'CHICKEN WITH CASHEW-NUT', 'CHICKEN WITH CASHEW-NUT', 'Chinese Cuisine', 400, 500, 100, 'Yes', 'images/download (24).jfif', '2022-07-23 15:57:09', '2022-07-23 15:57:09'),
(108, 108, 'mdnayem.cse21@gmail.com', 'SZECHUAN FRIED CHICKEN', 'SZECHUAN FRIED CHICKEN', 'Chinese Cuisine', 340, 440, 100, 'Yes', 'images/download (25).jfif', '2022-07-23 15:58:32', '2022-07-23 15:58:32'),
(109, 109, 'mdnayem.cse21@gmail.com', 'PRAWN MASALA', 'PRAWN MASALA', 'Chinese Cuisine', 420, 520, 100, 'Yes', 'images/download (26).jfif', '2022-07-23 15:59:49', '2022-07-23 15:59:49'),
(110, 110, 'mdnayem.cse21@gmail.com', 'SWEET & SOUR PRAWN BALL', 'SWEET & SOUR PRAWN BALL', 'Chinese Cuisine', 430, 530, 100, 'Yes', 'images/download (27).jfif', '2022-07-23 16:01:02', '2022-07-23 16:01:02'),
(111, 111, 'mdnayem.cse21@gmail.com', 'SWEET & SOUR PRAWN', 'SWEET & SOUR PRAWN', 'Chinese Cuisine', 420, 520, 100, 'Yes', 'images/download (28).jfif', '2022-07-23 16:02:10', '2022-07-23 16:02:10'),
(112, 112, 'mdnayem.cse21@gmail.com', 'BAKED PRAWN IN PINEAPPLE', 'BAKED PRAWN IN PINEAPPLE', 'Chinese Cuisine', 450, 550, 100, 'Yes', 'images/download (29).jfif', '2022-07-23 16:03:21', '2022-07-23 16:03:21'),
(113, 113, 'mdnayem.cse21@gmail.com', 'PRAWN SIZZLING', 'PRAWN SIZZLING', 'Chinese Cuisine', 430, 530, 100, 'Yes', 'images/download (30).jfif', '2022-07-23 16:04:25', '2022-07-23 16:04:25'),
(114, 114, 'mdnayem.cse21@gmail.com', 'PRAWN CHILL ONION', 'PRAWN CHILL ONION', 'Chinese Cuisine', 420, 520, 100, 'Yes', 'images/download (31).jfif', '2022-07-23 16:05:28', '2022-07-23 16:05:28'),
(115, 115, 'mdnayem.cse21@gmail.com', 'MANDARIN FISH WITH VINEGAR GRAVY', 'MANDARIN FISH WITH VINEGAR GRAVY', 'Chinese Cuisine', 420, 520, 100, 'Yes', 'images/download (32).jfif', '2022-07-23 16:07:22', '2022-07-23 16:07:22'),
(116, 116, 'mdnayem.cse21@gmail.com', 'SWEET & SOUT FISH', 'SWEET & SOUT FISH', 'Chinese Cuisine', 450, 550, 100, 'Yes', 'images/download (33).jfif', '2022-07-23 16:08:25', '2022-07-23 16:08:25'),
(117, 117, 'mdnayem.cse21@gmail.com', 'BONELESS FISH MASALA', 'BONELESS FISH MASALA', 'Chinese Cuisine', 440, 540, 100, 'Yes', 'images/download (34).jfif', '2022-07-23 16:10:17', '2022-07-23 16:10:17'),
(118, 118, 'mdnayem.cse21@gmail.com', 'BEEF CHILLI ONION', 'BEEF CHILLI ONION', 'Chinese Cuisine', 380, 480, 100, 'Yes', 'images/download (35).jfif', '2022-07-23 16:11:19', '2022-07-23 16:11:19'),
(119, 119, 'mdnayem.cse21@gmail.com', 'BEEF CHILLI DRY', 'BEEF CHILLI DRY', 'Chinese Cuisine', 420, 520, 100, 'Yes', 'images/download (36).jfif', '2022-07-23 16:12:32', '2022-07-23 16:12:32'),
(120, 120, 'mdnayem.cse21@gmail.com', 'BEEF WITH CASHEW-NUT', 'BEEF WITH CASHEW-NUT', 'Chinese Cuisine', 430, 530, 100, 'Yes', 'images/download (37).jfif', '2022-07-23 16:13:41', '2022-07-23 16:13:41'),
(121, 121, 'mdnayem.cse21@gmail.com', 'BEEF WITH MUSHROOM', 'BEEF WITH MUSHROOM', 'Chinese Cuisine', 400, 500, 100, 'Yes', 'images/download (38).jfif', '2022-07-23 16:14:58', '2022-07-23 16:14:58'),
(122, 122, 'mdnayem.cse21@gmail.com', 'BEEF OYSTER SAUCE', 'BEEF OYSTER SAUCE', 'Chinese Cuisine', 400, 500, 100, 'Yes', 'images/download (39).jfif', '2022-07-23 16:16:03', '2022-07-23 16:16:03'),
(123, 123, 'mdnayem.cse21@gmail.com', 'BEEF SIZZLING', 'BEEF SIZZLING', 'Chinese Cuisine', 450, 550, 100, 'Yes', 'images/download (40).jfif', '2022-07-23 16:16:56', '2022-07-23 16:16:56'),
(124, 124, 'mdnayem.cse21@gmail.com', 'BEEF MASALA', 'BEEF MASALA', 'Chinese Cuisine', 390, 490, 100, 'Yes', 'images/download (41).jfif', '2022-07-23 16:17:48', '2022-07-23 16:17:48'),
(125, 125, 'mdnayem.cse21@gmail.com', 'FRESH FRUIT COCKTAIL', 'FRESH FRUIT COCKTAIL', 'Beverage and Dessert', 100, 150, 50, 'Yes', 'images/download (42).jfif', '2022-07-23 16:27:43', '2022-07-23 16:27:43'),
(126, 126, 'mdnayem.cse21@gmail.com', 'FRESH FRUIT JUICE', 'FRESH FRUIT JUICE', 'Beverage and Dessert', 90, 140, 50, 'Yes', 'images/download (43).jfif', '2022-07-23 16:29:04', '2022-07-23 16:29:04'),
(127, 127, 'mdnayem.cse21@gmail.com', 'MILK SHAKE (VANILLA/STRAWBERRY/CHOCOLATE)', 'MILK SHAKE (VANILLA/STRAWBERRY/CHOCOLATE)', 'Beverage and Dessert', 70, 120, 50, 'Yes', 'images/download (44).jfif', '2022-07-23 16:31:13', '2022-07-23 16:31:13'),
(128, 128, 'mdnayem.cse21@gmail.com', 'BANANA MILK SHAKE', 'BANANA MILK SHAKE', 'Beverage and Dessert', 70, 120, 50, 'Yes', 'images/download (45).jfif', '2022-07-23 16:32:20', '2022-07-23 16:32:20'),
(129, 129, 'mdnayem.cse21@gmail.com', 'LEMON/CARROT', 'LEMON/CARROT', 'Beverage and Dessert', 50, 100, 50, 'Yes', 'images/download (46).jfif', '2022-07-23 16:33:45', '2022-07-23 16:33:45'),
(130, 130, 'mdnayem.cse21@gmail.com', 'SWEET CURD', 'SWEET CURD', 'Beverage and Dessert', 70, 120, 50, 'Yes', 'images/download (47).jfif', '2022-07-23 16:34:41', '2022-07-23 16:34:41'),
(136, 81, 'mdnayem.cse21@gmail.com', 'CHICKEN OR PRAWN VEGETABLE', 'CHICKEN OR PRAWN VEGETABLE', 'Chinese Cuisine', 240, 340, 100, 'Yes', 'images/download (12).jfif', '2022-07-23 17:37:22', '2022-07-23 17:37:22'),
(137, 17, 'mdnayem.cse21@gmail.com', 'MIXED CASHEW NUT SALAD', 'MIXED CASHEW NUT SALAD', 'Thai Cuisine', 420, 520, 100, 'Yes', 'images/download (13).jfif', '2022-07-26 18:30:16', '2022-07-26 18:30:16'),
(138, 12, 'mdnayem.cse21@gmail.com', 'pasta', 'ggff', 'Party', 12, 15, 3, 'Yes', 'images/download.jpg', '2022-09-15 17:01:42', '2022-09-15 17:01:42'),
(139, 34, 'mdnayem.cse21@gmail.com', 'Test', 'Analytical Intermediate', 'Launch', 566, 788, 222, 'Yes', 'images/Nike.jpg', '2022-10-02 08:19:45', '2022-10-02 08:19:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mdnayem.cse21@gmail.com', 'LSnOz3w7AkQsHvRzrjy4y75E9TKweHFKpPVzRuwIreBAi6dKqVH2XriZg0a1ilqG', '2022-10-03 18:23:54'),
('mdnayem.cse21@gmail.com', 'dp0NlsF9bXXgMWGyG6BtPgbHPpOyRzZmh8WY9vJkzeCiYOjRq3fYYZJrfS3sp4Z7', '2022-10-03 18:56:43'),
('mdnayem.cse21@gmail.com', 'q46sYW5pNG4k5sr7MQqBEh2AKo7fQRzReTQxfckfUDnBO3MkP4MlfJBAqQUEZ2MF', '2022-10-03 19:21:27'),
('mdnayem.cse21@gmail.com', '6iuCz6HYLu5i0Vdf9aHcRfkVhoY34rcmneBVet3T34FcZMxHNk9PTwGKE7AMevXM', '2022-10-09 11:40:55'),
('mdnayem.cse21@gmail.com', 'g14hqNOmn5ARxU8sGqpBMi3zQxNmcjimZVYGZeeek0P9VpYIytclqyY8dHFMJWM4', '2022-10-09 11:46:20'),
('mdnayem.cse21@gmail.com', 's05CSlH7hN7HE4C3YoMEz3wj9jzmsQmZuOhINStwqmk2wFWJSgQ3jyNwjDc3h1oG', '2022-10-09 11:49:19'),
('mdnayem.cse21@gmail.com', 'OTKf2VUIrcsS8gLeDtlLSG29nH6VIsJG37fM7kplX6PUJKA0UstY0wxSFivRdqFi', '2022-10-09 11:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int NOT NULL,
  `name` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT 'Name',
  `category` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT 'Category',
  `email` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT 'Email',
  `phone` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT 'Phone',
  `address` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT 'Address',
  `educationional_background` text COLLATE utf8mb4_unicode_ci,
  `professional_background` text COLLATE utf8mb4_unicode_ci,
  `research` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT 'Research',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'Image',
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `name`, `category`, `email`, `phone`, `address`, `educationional_background`, `professional_background`, `research`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Md Nayem', 'Professor/Advisor', 'mdnayem.cse21@gmail.com', '+8801999791578', 'Najirghat Cross Road, Hajibari, Nirala, Khulna', '1. MS in Computer Science and Technology, Wuhan University of Technology, China (2022/09-Running).\r\n2. BS in Computer Science and Engineering, North Western University, Bangladesh (2014/05-2019/01).', '1. Computer Science Teacher, South Herald English School and College, Khulna, Bangladesh (2020/02-2022/10).\r\n2. Software Engineer, Plan 2 Career(P2C) IT, Khulna, Bangladesh (2021/09-Running).', 'Security System', '1665653976.jpg', 'I am a self-motivated person. I love to do code. I am a hard-worker and an extremely quick learner.', '2022-10-13 16:39:36', '2022-10-16 18:35:51'),
(2, 'Md. Nayem', 'MS Student', 'nayemmd.cse21@gmail.com', '+8801957254326', 'Khulna, Bangladesh', '1. MS in Computer Engineering, Zhejiang Sci-Tech University (2022-Running).\r\n2. BS in Computer Science and Technology, Hangzhou Dianzi University (2018)', '1. Research Assistant, SSlab, POSTECH, South Korea (2020-21)', 'Blockchain Technologies', '1665912029.jpg', 'I am a self motivated researcher.', '2022-10-16 16:20:29', '2022-10-16 18:36:02'),
(3, 'Ekram Hossain', 'Staff', 'ifti.ekram@gmail.com', '+8801632109022', 'Khulna, Bangladesh', '1. HSC from Bagerhat PC College (2017)- Science Background\r\n2. Diploma from Mangrove Institute of Technology (2022)- Electrical Engineering.', '1. Office Assistant, Plan 2 Career -P2C) IT(2022-Running), Khulna, Bangladesh.', 'Virtualization', '1665917347.jpg', 'I am self-motivated person.', '2022-10-16 17:49:08', '2022-10-20 16:32:39'),
(4, 'Arman Sharif', 'MS Student', 'arman.hub@gmail.com', '+8801632109022', 'Religate, Khulna', '1. BS in Computer Science and Engineering, Humdard University, Bangladesh (2016-2021).\r\n2. HSC in Science, B. N. College, Khulna, Bangladesh (2012)', '1. Front-end Software Engineer, Plan 2 Career (P2C) IT, Khulna, Bangladesh (2021-Running).', 'Storage System', '1665921918.jpg', 'I am a self-motivated Front-end Designer.', '2022-10-16 19:05:18', '2022-10-16 19:05:18');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `id` int NOT NULL,
  `title` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT 'Title',
  `title_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Title Image',
  `sub_title` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT 'Sub Title',
  `sub_title_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Sub Title Image',
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`id`, `title`, `title_image`, `sub_title`, `sub_title_image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Blockchain Technologies', '1665918340.jpg', 'Securing IoT devices with Blockchain, improving Blockchain system and applying it to related area.', '1665051277.jpg', 'Motivation\r\nToday, the Internet of Things(IoT) exists in every corner of our life and provides us with convenience and variety. Everything can make a relationship with each other, exchange data, and create new data.\r\nBut, at the same time, centralized cloud-based IoT architecture presents various problems such as security, scalability, single point of failure, etc.\r\nAs much as we can find IoT devices anywhere in our life, service providers using IoT devices need some secure and convenient mechanism to sell services.\r\nResearch subject\r\nBlockchain [13] is distributed ledger system, it can maintain a secure state without a trusted third party. Inherently resistant to modification of the data, once recorded, the data in a block cannot be altered retroactively.\r\nSmart Contract is an extended blockchain concept. It is a programmable contract, so it can provide various services and make secure transactions with an untrusted peer.', '2022-10-06 15:56:45', '2022-10-16 18:05:40'),
(2, 'Security System', '1665055523.png', 'Leveraging TPM for security.', '1665055523.jpeg', 'Motivation\r\nCurrently, there is no GPU device driver in the RTOS, but the GPU is a very important device in the embedded system, especially for time-critical jobs [12].\r\nLinux with GPU device driver is released by each embedded board manufacturer, so the embedded kernel developer doesn’t have to port the device driver.\r\nResearch subject\r\nVirtualization with GPU sharing model to support running RTOS and Linux simultaneously on a physical machine and GPU aid for computing in RTOS.\r\nDevice driver-level virtualization (Para-virtualization)\r\nHigh performance\r\nExtensibility (General device sharing)\r\nResearch objects\r\nVirtualization with GPU sharing (inter-VM)\r\nData Sharing\r\nEvent notification\r\nGPU Scheduling', '2022-10-06 18:20:32', '2022-10-06 18:25:23'),
(3, 'Storage System', '1665055544.png', 'Ensuring reliability of flash memory and specific performance levels for applications that use the storage.', '1665055544.jpg', 'Motivation\r\nAs the connected car environment spreads, the amount of data generated in the vehicle increases.\r\nWhether the network is online or off-line, data is generated in a secure state.\r\nThe trusted server must be able to verify that the data generated by the vehicle is correct.\r\nResearch subject\r\nDesign a secure logging scheme based on TPM 2.0 for in-vehicle data protection\r\nResearch objects\r\nLog verification mechanism\r\nLog attack scenario\r\nSoftware TPM', '2022-10-06 18:21:35', '2022-10-06 18:25:44'),
(4, 'Virtualization', '1665055568.jpg', 'Supporting Dual Operating Systems, Real-Time Operating System and Linux with (GP)GPU sharing.', '1665055568.jpg', 'Ensures the reliability of flash memory.\r\n\r\nMotivation\r\nCurrent NAND flash products ensure reliability by employing error-correcting codes (ECCs).\r\n\r\nIn recent years, multi-level cell (MLC) and triple-level cell (TLC) flash memories have been developed as effective solutions to reduce the cost of flash devices.\r\nTraditionally, single-level cell (SLC) flash memory uses single-bit ECC. However, MLC and TLC flash memories show a much higher bit-error rate (BER). Therefore, codes with strong error-correction capabilities, like BCH or RS codes, are used. These ECCs require a high hardware complexity and increase the read and write latencies.\r\nAnother approach for reliability is to adopt redundancy in storage level. Previous studies [1][2][3][4] have tried to adapt the Redundant Arrays of Inexpensive Disks (RAID) [5] technique to flash memory.\r\nHowever, these studies did not consider the characteristics of flash memory, such as the characteristics of block/chip failures, the Hybrid FTL of SSD, and multi-channels.\r\nResearch subject\r\nDesigning erasure codes and Hybrid-FTL to increase the reliability of flash memory without considerably sacrificing the performance of SSDs.\r\nResearch objects\r\nFlash-aware erasure codes\r\nRAID-aware Hybrid-FTL', '2022-10-06 18:23:11', '2022-10-06 18:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `id` int NOT NULL,
  `title` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT 'Title',
  `sub_title` varchar(200) DEFAULT 'Sub Title',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`id`, `title`, `sub_title`, `created_at`, `updated_at`) VALUES
(1, 'Blockchain Technologies', 'Securing IoT devices with Blockchain, improving Blockchain system and applying it to related area.', '2022-10-06 13:02:10', '2022-10-06 13:36:44'),
(2, 'Security System', 'Leveraging TPM for security.', '2022-10-06 18:17:58', '2022-10-06 18:17:58'),
(3, 'Storage System', 'Ensuring reliability of flash memory and specific performance levels for applications that use the storage.', '2022-10-06 18:18:55', '2022-10-06 18:18:55'),
(4, 'Virtualization', 'Supporting Dual Operating Systems, Real-Time Operating System and Linux with (GP)GPU sharing.', '2022-10-06 18:19:11', '2022-10-06 18:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'MD. NAYEM', 'mdnayem.cse21@gmail.com', NULL, 1, '$2y$10$aqMA5wlkeNfwhKdMt3irp.wFSRKFVGEFAwGG/ZyssbRGbYIQDwIRC', NULL, '2021-12-28 01:43:28', '2021-12-28 01:43:28'),
(4, 'Nayem', 'nayemmd.cse21@gmail.com', NULL, NULL, '$2y$10$hLfXhTYyb11X7aeKvYRchuNWjzUOvp2PZy08pXhZvu3/i4BmtCGlu', NULL, '2022-07-21 09:46:10', '2022-07-21 09:46:10'),
(5, 'Admin', 'admin@gmail.com', NULL, 1, '$2y$10$nJ1qw4b1C016S9HLQdBLLeqwVG0/hneZFi6vaAM4MOXC30hWP5kie', NULL, '2022-09-18 19:00:15', '2022-09-18 19:00:15'),
(6, 'User', 'user@gmail.com', NULL, NULL, '$2y$10$hlzk3AoM1YU9wSA/1ib08uxGDEQNNdSmt2gKQECtlG0Ow/FUdVr5O', NULL, '2022-09-18 19:00:44', '2022-09-18 19:00:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`),
  ADD KEY `carts_order_id_foreign` (`order_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
