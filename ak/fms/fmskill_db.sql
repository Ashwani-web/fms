-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2019 at 06:14 PM
-- Server version: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 7.2.16-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fmskill_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_information` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `device_information`, `created_at`, `updated_at`) VALUES
(1, 'Dilip', 'abc@gmail.com', '$2y$10$4a61MYhimQYCWs8rATL4Du0xKDrywPYZZvGeMcKEGwp0HfYwfj2rm', 'ehcdjvd', '2019-04-20 01:59:00', '2019-04-20 01:59:00'),
(2, 'dilip', 'dilip.enthuons@gmail.com', 'dilip.enthuons@gmail.com', 'mobail phone', NULL, NULL),
(3, 'dilip', 'dilip.enthuons@gmail.com', 'dilip.enthuons@gmail.com', 'mobail phone', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_information` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `is_delete` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `image`, `slug`, `is_active`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'ART', '', 'art', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(2, 'DANCE', '', 'dance', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(3, 'SPORTS', '', 'sports', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(4, 'MARTIAL ARTS', '', 'martial arts', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(5, 'SINGING', '', 'singing', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(6, 'Music – instrumental', '', 'music – instrumental', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(7, 'Languages', '', 'languages', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(8, 'Computer training', '', 'computer training', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(9, 'Art', '', 'art', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(10, 'Craft and hobbies', '', 'craft and hobbies', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(11, 'Cooking/culinary', '', 'cooking/culinary', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(12, 'Personal care/Beauty', '', 'personal care/beauty', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(13, 'Personality development & theatre', '', 'personality development & theatre', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(14, 'Smart learning', '', 'smart learning', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(15, 'Health', '', 'health', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(16, 'Robotics & coding', '', 'robotics & coding', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(17, 'Play areas', '', 'play areas', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_account_detail` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fms_score` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `write_up` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timing` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_seat` int(11) NOT NULL,
  `seat_enrolled` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_provider`
--

CREATE TABLE `class_provider` (
  `id` int(10) UNSIGNED NOT NULL,
  `lat` bigint(20) NOT NULL,
  `lng` bigint(20) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `write_up` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fms_score` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_account_no` bigint(20) NOT NULL,
  `account_type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ifsc_code` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` int(11) NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_card_number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_card_image` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spouse` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `family` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`, `remember_token`, `phone_number`, `address`, `photo`, `dob`, `facebook_id`, `id_card_number`, `id_card_image`, `spouse`, `family`, `created_at`, `updated_at`) VALUES
(1, 'Diip yadav', 'abc@gmail.com', NULL, NULL, 7878787, 'Noida', 'icons8-pause-button-480.png', '0022-02-22', '23456', '234567', 'icons8-pencil-480.png', 'Dilip', 'dilip', '2019-04-30 18:04:51', '2019-04-30 18:04:51');

-- --------------------------------------------------------

--
-- Table structure for table `family_detail`
--

CREATE TABLE `family_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `fk_custmor_id` int(10) UNSIGNED DEFAULT NULL,
  `cust_type` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `is_delete` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `family_detail`
--

INSERT INTO `family_detail` (`id`, `fk_custmor_id`, `cust_type`, `name`, `photo`, `dob`, `is_active`, `is_delete`, `created_at`, `updated_at`) VALUES
(33, 1, 'spouse', 'Dilip Yadavvvv', '1556877478images.jpeg', '12/22/1111', 1, 1, '2019-05-01 19:00:54', '2019-05-03 04:27:58'),
(35, 1, 'children', 'Maya yadavddd', '1556879218images.jpeg', '12/09/2019', 1, 1, '2019-05-01 20:17:22', '2019-05-03 04:56:58'),
(84, 1, 'children', 'Dilip yadav', '1556868922images.jpeg', '2222-12-22', 1, 1, '2019-05-03 04:09:19', '2019-05-03 04:09:19'),
(88, NULL, NULL, NULL, '15568790134493227-hd-wallpapers-1080p.jpg', NULL, 1, 1, '2019-05-03 04:53:33', '2019-05-03 04:53:33'),
(89, NULL, NULL, NULL, '1556879030download.jpeg', NULL, 1, 1, '2019-05-03 04:53:50', '2019-05-03 04:53:50'),
(90, NULL, NULL, NULL, '1556879064download.jpeg', NULL, 1, 1, '2019-05-03 04:54:24', '2019-05-03 04:54:24'),
(91, NULL, NULL, NULL, '1556879155download.jpeg', NULL, 1, 1, '2019-05-03 04:55:55', '2019-05-03 04:55:55');

-- --------------------------------------------------------

--
-- Table structure for table `further_sub_category`
--

CREATE TABLE `further_sub_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `fk_cat_id` int(10) UNSIGNED NOT NULL,
  `fk_sub_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `is_delete` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `further_sub_category`
--

INSERT INTO `further_sub_category` (`id`, `fk_cat_id`, `fk_sub_id`, `name`, `slug`, `image`, `is_active`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 2, 5, 'Kathak', 'kathak', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(2, 2, 5, 'Bharatnatyam', 'bharatnatyam', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(3, 2, 5, 'Orrisi', 'orrisi', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(4, 2, 5, 'Folk', 'folk', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(5, 2, 6, 'BALLET', 'ballet', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:44:00'),
(6, 2, 6, 'CONTEMPORARY', 'contemporary', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(7, 3, 12, 'Chess', 'chess', '', 1, 1, '2019-04-22 18:37:00', '2019-04-23 01:30:13'),
(8, 3, 12, 'Carrom', 'carrom', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(9, 3, 12, 'Swimming', 'swimming', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(10, 3, 12, 'Table tennis', 'table tennis', '', 1, 1, '2019-04-22 18:46:00', '2019-04-22 18:53:00'),
(11, 3, 12, 'Gymnastics', 'gymnastics', '', 1, 1, '2019-04-22 21:40:20', '2019-04-23 03:45:35'),
(12, 3, 12, 'Boxing', 'boxing', '', 1, 1, '2019-04-22 22:41:26', '2019-04-22 18:30:00'),
(13, 3, 12, 'Skating', 'skating', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(14, 3, 13, 'Cricket', 'cricket', '', 1, 1, '2019-04-22 18:30:00', '2019-04-29 18:30:00'),
(15, 3, 13, 'Football', 'football', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(16, 3, 13, 'Basket ball', 'basket ball', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(17, 3, 13, 'Rugby', 'rugby', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(18, 3, 13, 'Swimming', 'swimming', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(19, 3, 13, 'Badminton', 'badminton', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(20, 3, 13, 'Tennis', 'tennis', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(21, 3, 13, 'Golf', 'golf', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(22, 3, 13, 'Volleyball', 'volleyball', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(23, 3, 13, 'Hockey', 'hockey', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(24, 3, 13, 'Camping', 'camping', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `fk_key_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_url` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('VIDEO','IMAGE') COLLATE utf8mb4_unicode_ci NOT NULL,
  `prmary` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_thumb` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` enum('CLASS_PROVIDER','CLASS','SUB_CLASS') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_05_114339_create_admin_table', 1),
(4, '2019_02_05_114454_create_category_table', 1),
(5, '2019_02_05_114717_create_sub_category_table', 1),
(6, '2019_02_05_114901_create_class_table', 1),
(7, '2019_02_05_115120_create_class_provider_table', 1),
(9, '2019_02_05_120636_create_media_table', 2),
(11, '2019_02_05_115745_create_customer_table', 3),
(12, '2019_04_23_100058_further_sub_category', 4),
(13, '2019_04_27_131527_family_detail', 5),
(14, '2019_02_05_114339_create_admins_table', 6),
(15, '2019_05_01_080040_create_users_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `fk_cat_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `is_delete` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `fk_cat_id`, `name`, `slug`, `image`, `is_active`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 1, 'DRAWING', 'drawing', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(2, 1, 'Sketching', 'sketching', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(3, 1, 'PAINTING', 'painting', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(4, 1, 'CRAFT', 'craft', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(5, 2, 'INDIAN CLASSICAL', 'indian classical', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(6, 2, 'WESTERN CLASSICAL', 'western classical', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(7, 2, 'Freestyle', 'freestyle', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(8, 2, 'BOLLYWOOD', 'bollywood', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(9, 2, 'Hip hop', 'hip hop', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(10, 2, 'B-boying', 'b-boying', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(11, 2, 'Belly', 'belly', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(12, 3, 'Indoor', 'indoor', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(13, 3, 'Outdoors', 'outdoors', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(14, 4, 'Judo', 'judo', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(15, 4, 'Karate', 'karate', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(16, 4, 'Self defence', 'self defence', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(17, 4, 'Kick boxing', 'kick boxing', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(18, 5, 'Indian classical', 'indian classical', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(19, 5, 'Western classical', 'western classical', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(20, 5, 'Sufi', 'sufi', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(21, 5, 'Folk', 'folk', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(22, 5, 'Voice lessons', 'voice lessons', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(23, 6, 'Drum', 'drum', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(24, 6, 'Guitar', 'guitar', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(25, 6, 'Piano', 'piano', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(26, 6, 'Casio', 'casio', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(27, 6, 'Flute', 'flute', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(28, 6, 'Banjo', 'banjo', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(29, 6, 'Table', 'table', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(30, 6, 'Sitar', 'sitar', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(31, 6, 'Zantoor', 'zantoor', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(32, 6, 'Violin', 'violin', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(33, 6, 'Saxophone', 'saxophone', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(34, 6, 'Ukulele', 'ukulele', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(35, 6, 'French horn', 'french horn', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(36, 6, 'Harmonica', 'harmonica', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(37, 7, 'English language', 'english language', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(38, 7, 'English grammar', 'english grammar', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(39, 7, 'Hindi', 'hindi', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(40, 7, 'Sanskrit', 'sanskrit', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(41, 7, 'Spanish', 'spanish', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(42, 7, 'French', 'french', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(43, 7, 'German', 'german', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(44, 7, 'Urdu', 'urdu', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(45, 7, 'Chinese', 'chinese', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(46, 7, 'Japanese', 'japanese', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(47, 7, 'Elocuation', 'elocuation', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(48, 7, 'Sign language', 'sign language', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(49, 8, 'Typing', 'typing', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(50, 8, 'Web', 'web', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(51, 8, 'C++', 'c++', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(52, 8, 'Microsoft Office', 'microsoft office', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(53, 8, 'Autocad', 'autocad', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(54, 8, 'Photoshop', 'photoshop', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(55, 8, 'Gaming development', 'gaming development', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(56, 9, 'Photography', 'photography', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(57, 9, 'Illustrations', 'illustrations', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(58, 9, 'Sculpting', 'sculpting', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(59, 9, 'Cartooning', 'cartooning', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(60, 9, 'Calligraphy', 'calligraphy', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(61, 9, 'Handwriting', 'handwriting', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(62, 10, 'Pottery', 'pottery', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(63, 10, 'Sewing', 'sewing', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(64, 10, 'Woodwork', 'woodwork', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(65, 11, 'Cooking', 'cooking', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(66, 11, 'Baking', 'baking', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(67, 11, 'Cake making', 'cake making', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(68, 11, 'Pasta', 'pasta', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(69, 11, 'Indian', 'indian', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(70, 11, 'Italian', 'italian', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(71, 11, 'Mexican', 'mexican', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(72, 11, 'Chinese', 'chinese', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(73, 11, 'Etiquette classes', 'etiquette classes', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(74, 13, 'Personality development', 'personality development', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(75, 13, 'Drama', 'drama', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(76, 13, 'Hindi theatre', 'hindi theatre', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(77, 13, 'English theare', 'english theare', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(78, 14, 'English', 'english', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(79, 14, 'Maths', 'maths', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(80, 14, 'Toddlers', 'toddlers', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(81, 15, 'Yoga', 'yoga', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(82, 15, 'CPR', 'cpr', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(83, 15, 'Pilates', 'pilates', '', 1, 1, '2019-04-15 18:30:00', '2019-04-22 18:30:00'),
(84, 15, 'Personal trainer', 'personal trainer', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00'),
(85, 15, 'Cross trainer', 'cross trainer', '', 1, 1, '2019-04-22 18:30:00', '2019-04-22 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` bigint(11) NOT NULL,
  `user_type` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_card_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_card_image` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `phone_number`, `user_type`, `address`, `photo`, `dob`, `facebook_id`, `id_card_number`, `id_card_image`, `created_at`, `updated_at`) VALUES
(1, 'Dilp Yadav', 'dilip@gmail.com', '$2y$10$qyH.qTwcThkYP9WgjwjjLOY/947JZ1bVocCksCa9hdvgT6C.TzUsW', 'ZJCjjeeI66jJwUTpCYXQPfqh69EFK7EzCXMmbXk2uezJBynZN30WszehzJk8', 7905854106, 'class provider', 'yes', '1556875537download.jpeg', '3333-12-31', '12345678', '1234567', NULL, '2019-05-01 02:36:09', '2019-05-03 03:55:37'),
(2, 'Dilip yadav', 'abcd@gmail.com', '$2y$10$idearc2iMB6nwkzxBOmygOtoLKxtw4N.gDoJyju3kX7VBcc8YcXk6', NULL, 790585410, 'user', NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-01 07:32:21', '2019-05-01 07:32:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `class_email_unique` (`email`);

--
-- Indexes for table `class_provider`
--
ALTER TABLE `class_provider`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `class_provider_email_unique` (`email`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_email_unique` (`email`);

--
-- Indexes for table `family_detail`
--
ALTER TABLE `family_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `family_detail_fk_custmor_id_foreign` (`fk_custmor_id`);

--
-- Indexes for table `further_sub_category`
--
ALTER TABLE `further_sub_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `further_sub_category_fk_cat_id_foreign` (`fk_cat_id`),
  ADD KEY `further_sub_category_fk_sub_id_foreign` (`fk_sub_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_fk_key_id_foreign` (`fk_key_id`);

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
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_category_fk_cat_id_foreign` (`fk_cat_id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `class_provider`
--
ALTER TABLE `class_provider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `family_detail`
--
ALTER TABLE `family_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `further_sub_category`
--
ALTER TABLE `further_sub_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `family_detail`
--
ALTER TABLE `family_detail`
  ADD CONSTRAINT `family_detail_fk_custmor_id_foreign` FOREIGN KEY (`fk_custmor_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `further_sub_category`
--
ALTER TABLE `further_sub_category`
  ADD CONSTRAINT `further_sub_category_fk_cat_id_foreign` FOREIGN KEY (`fk_cat_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `further_sub_category_fk_sub_id_foreign` FOREIGN KEY (`fk_sub_id`) REFERENCES `sub_category` (`id`);

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_fk_key_id_foreign` FOREIGN KEY (`fk_key_id`) REFERENCES `class` (`id`);

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_fk_cat_id_foreign` FOREIGN KEY (`fk_cat_id`) REFERENCES `category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
