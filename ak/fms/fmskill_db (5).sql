-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 03, 2019 at 11:23 AM
-- Server version: 5.7.27-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-10+ubuntu16.04.1+deb.sury.org+1

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
-- Table structure for table `achievement`
--

CREATE TABLE `achievement` (
  `id` int(10) UNSIGNED NOT NULL,
  `class_id` int(11) NOT NULL,
  `key` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `device_information`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ashwani', 'ashwani.enthuons@gmail.com', '$2y$10$bVWnSuBjWUDRTnHFPC/tm.ye2L4Mkh/EVZB2OIZm6JosRS004F0YO', 'ehcdjvd', '', '2019-04-19 20:29:00', '2019-04-19 20:29:00');

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
(1, 'ART', '', 'art', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(2, 'DANCE', '', 'dance', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(3, 'SPORTS', '', 'sports', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(4, 'MARTIAL ARTS', '', 'martial arts', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(5, 'SINGING', '', 'singing', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(6, 'Music – instrumental', '', 'music – instrumental', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(7, 'Languages', '', 'languages', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(8, 'Computer training', '', 'computer training', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(9, 'Art', '', 'art', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(10, 'Craft and hobbies', '', 'craft and hobbies', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(11, 'Cooking/culinary', '', 'cooking/culinary', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(12, 'Personal care/Beauty', '', 'personal care/beauty', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(13, 'Personality development & theatre', '', 'personality development & theatre', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(14, 'Smart learning', '', 'smart learning', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(15, 'Health', '', 'health', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(16, 'Robotics & coding', '', 'robotics & coding', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(17, 'Play areas', '', 'play areas', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fursubcategory_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_schedule` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_detail` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fms_score` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `write_up` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timing` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endtiming` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_seat` int(11) NOT NULL,
  `seat_enrolled` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `parent_id`, `name`, `slug`, `email`, `address`, `category_name`, `subcategory_name`, `fursubcategory_name`, `class_schedule`, `country`, `city`, `bank_account_detail`, `fms_score`, `write_up`, `timing`, `endtiming`, `price`, `total_seat`, `seat_enrolled`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'TR Dance Classes', 'tr-dance-classes', 'ashwani.enthuons@gmail.com', NULL, 'DANCE', 'INDIAN CLASSICAL', NULL, '2019-06-20', NULL, NULL, NULL, NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '12:30', NULL, '1000', 20, 40, 0, '2019-06-20 00:57:04', '2019-06-24 00:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `class_provider`
--

CREATE TABLE `class_provider` (
  `id` int(10) UNSIGNED NOT NULL,
  `lat` bigint(20) DEFAULT NULL,
  `lng` bigint(20) DEFAULT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otp` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `write_up` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fms_score` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_no` bigint(20) DEFAULT NULL,
  `account_type` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ifsc_code` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_provider`
--

INSERT INTO `class_provider` (`id`, `lat`, `lng`, `name`, `email`, `phone_number`, `password`, `otp`, `location`, `state`, `city`, `address`, `write_up`, `fms_score`, `account_name`, `bank_account_no`, `account_type`, `bank_name`, `branch_name`, `ifsc_code`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Ashwani', 'ashwani.enthuons@gmail.com', '9876543210', NULL, NULL, 'Noida', '27', 'Noida', 'Noida , sector-4', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-20 00:38:21', '2019-06-20 00:44:09');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `family_detail`
--

CREATE TABLE `family_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `fk_custmor_id` int(10) UNSIGNED NOT NULL,
  `cust_type` enum('spuos','children') COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `is_delete` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `family_detail`
--

INSERT INTO `family_detail` (`id`, `fk_custmor_id`, `cust_type`, `name`, `photo`, `dob`, `is_active`, `is_delete`, `created_at`, `updated_at`) VALUES
(33, 1, 'spuos', 'Dilip Yadavvvv', '1556877478images.jpeg', '12/22/1111', 1, 1, '2019-05-01 13:30:54', '2019-05-02 22:57:58'),
(84, 1, 'children', 'Dilip yadav', '1556868922images.jpeg', '2222-12-22', 1, 1, '2019-05-02 22:39:19', '2019-05-02 22:39:19'),
(85, 4, 'children', 'Akash', '1557812855download.jpeg', '2019-05-19', 1, 1, NULL, '2019-05-14 00:17:36');

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
(1, 2, 5, 'Kathak', 'kathak', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(2, 2, 5, 'Bharatnatyam', 'bharatnatyam', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(3, 2, 5, 'Orrisi', 'orrisi', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(4, 2, 5, 'Folk', 'folk', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(5, 2, 6, 'BALLET', 'ballet', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:14:00'),
(6, 2, 6, 'CONTEMPORARY', 'contemporary', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(7, 3, 12, 'Chess', 'chess', '', 1, 1, '2019-04-22 13:07:00', '2019-04-22 20:00:13'),
(8, 3, 12, 'Carrom', 'carrom', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(9, 3, 12, 'Swimming', 'swimming', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(10, 3, 12, 'Table tennis', 'table tennis', '', 1, 1, '2019-04-22 13:16:00', '2019-04-22 13:23:00'),
(11, 3, 12, 'Gymnastics', 'gymnastics', '', 1, 1, '2019-04-22 16:10:20', '2019-04-22 22:15:35'),
(12, 3, 12, 'Boxing', 'boxing', '', 1, 1, '2019-04-22 17:11:26', '2019-04-22 13:00:00'),
(13, 3, 12, 'Skating', 'skating', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(14, 3, 13, 'Cricket', 'cricket', '', 1, 1, '2019-04-22 13:00:00', '2019-04-29 13:00:00'),
(15, 3, 13, 'Football', 'football', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(16, 3, 13, 'Basket ball', 'basket ball', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(17, 3, 13, 'Rugby', 'rugby', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(18, 3, 13, 'Swimming', 'swimming', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(19, 3, 13, 'Badminton', 'badminton', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(20, 3, 13, 'Tennis', 'tennis', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(21, 3, 13, 'Golf', 'golf', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(22, 3, 13, 'Volleyball', 'volleyball', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(23, 3, 13, 'Hockey', 'hockey', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(24, 3, 13, 'Camping', 'camping', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `c_id` int(10) UNSIGNED NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_url` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('VIDEO','IMAGE') COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_thumb` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` enum('CLASS_PROVIDER','CLASS','SUB_CLASS') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `c_id`, `class_id`, `image`, `file_url`, `type`, `primary`, `is_thumb`, `user_type`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '15610109010.jpg', 'http://127.0.0.1:8000/class_provider/images/15610109010.jpg', 'IMAGE', 'null', 'null', 'CLASS_PROVIDER', '2019-06-20 00:38:21', '2019-06-20 00:38:21'),
(2, 1, NULL, '15610109011.jpeg', 'http://127.0.0.1:8000/class_provider/images/15610109011.jpeg', 'IMAGE', 'null', 'null', 'CLASS_PROVIDER', '2019-06-20 00:38:21', '2019-06-20 00:38:21'),
(3, 1, NULL, '15610109012.jpg', 'http://127.0.0.1:8000/class_provider/images/15610109012.jpg', 'IMAGE', 'null', 'null', 'CLASS_PROVIDER', '2019-06-20 00:38:21', '2019-06-20 00:38:21'),
(4, 1, NULL, '15610109023.jpg', 'http://127.0.0.1:8000/class_provider/images/15610109023.jpg', 'IMAGE', 'null', 'null', 'CLASS_PROVIDER', '2019-06-20 00:38:22', '2019-06-20 00:38:22'),
(5, 1, NULL, '15610109024.jpg', 'http://127.0.0.1:8000/class_image/images/15610109024.jpg', 'IMAGE', 'null', 'null', 'CLASS_PROVIDER', '2019-06-20 00:38:22', '2019-06-20 00:38:22'),
(6, 1, NULL, '15610109020.mp4', 'http://127.0.0.1:8000/class_provider/video/15610109020.mp4', 'VIDEO', 'null', 'null', 'CLASS_PROVIDER', '2019-06-20 00:38:22', '2019-06-20 00:38:22'),
(7, 1, 1, '15610120240.jpeg', 'http://127.0.0.1:8000/class_image/images/15610120240.jpeg', 'IMAGE', 'null', 'null', 'CLASS', '2019-06-20 00:57:04', '2019-06-20 00:57:04');

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
(4, '2019_02_05_114454_create_category_table', 1),
(5, '2019_02_05_114717_create_sub_category_table', 1),
(11, '2019_02_05_115745_create_customer_table', 3),
(14, '2019_02_05_114339_create_admins_table', 4),
(15, '2019_02_05_115120_create_class_provider_table', 5),
(20, '2019_02_05_120636_create_media_table', 6),
(22, '2019_05_01_105559_create_state_table', 7),
(24, '2019_04_23_100058_further_sub_category', 8),
(25, '2019_04_27_131527_family_detail', 8),
(26, '2019_05_01_080040_create_users_table', 9),
(27, '2019_05_14_060147_create_rating_table', 10),
(30, '2019_05_14_131620_create_achievement_table', 11),
(32, '2019_02_05_114901_create_class_table', 12),
(33, '2019_05_15_105953_create_safty_table', 13);

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
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `cp_id` int(11) NOT NULL,
  `rating` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviews` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `safty`
--

CREATE TABLE `safty` (
  `id` int(10) UNSIGNED NOT NULL,
  `cp_id` int(11) NOT NULL,
  `key` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_code` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `country_code`, `state_name`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Andhra Pradesh', '2019-05-01 06:23:33', '2019-05-01 06:23:33'),
(2, NULL, 'Arunachal Pradesh', '2019-05-01 06:25:18', '2019-05-01 06:25:18'),
(3, NULL, 'Assam', '2019-05-01 06:25:43', '2019-05-01 06:25:43'),
(4, NULL, 'Bihar', '2019-05-01 06:25:51', '2019-05-01 06:25:51'),
(5, NULL, 'Chhattisgarh', '2019-05-01 06:26:03', '2019-05-01 06:26:03'),
(6, NULL, 'Goa', '2019-05-01 06:26:13', '2019-05-01 06:26:13'),
(7, NULL, 'Gujarat', '2019-05-01 06:26:25', '2019-05-01 06:26:25'),
(8, NULL, 'Haryana', '2019-05-01 06:27:47', '2019-05-01 06:27:47'),
(9, NULL, 'Himachal Pradesh', '2019-05-01 06:27:56', '2019-05-01 06:27:56'),
(10, NULL, 'Jammu and Kashmir', '2019-05-01 06:28:04', '2019-05-01 06:28:04'),
(11, NULL, 'Jharkhand', '2019-05-01 06:28:15', '2019-05-01 06:28:15'),
(12, NULL, 'Karnataka', '2019-05-01 06:28:29', '2019-05-01 06:28:29'),
(13, NULL, 'Kerala', '2019-05-01 06:28:55', '2019-05-01 06:28:55'),
(14, NULL, 'Madhya Pradesh', '2019-05-01 06:29:05', '2019-05-01 06:29:05'),
(15, NULL, 'Maharashtra', '2019-05-01 06:29:19', '2019-05-01 06:29:19'),
(16, NULL, 'Manipur', '2019-05-01 06:29:29', '2019-05-01 06:29:29'),
(17, NULL, 'Meghalaya', '2019-05-01 06:29:38', '2019-05-01 06:29:38'),
(18, NULL, 'Mizoram', '2019-05-01 06:29:51', '2019-05-01 06:29:51'),
(19, NULL, 'Nagaland', '2019-05-01 06:30:00', '2019-05-01 06:30:00'),
(20, NULL, 'Odisha', '2019-05-01 06:30:10', '2019-05-01 06:30:10'),
(21, NULL, 'Punjab', '2019-05-01 06:30:21', '2019-05-01 06:30:21'),
(22, NULL, 'Rajasthan', '2019-05-01 06:30:34', '2019-05-01 06:30:34'),
(23, NULL, 'Sikkim', '2019-05-01 06:30:46', '2019-05-01 06:30:46'),
(24, NULL, 'Tamil Nadu', '2019-05-01 06:30:57', '2019-05-01 06:30:57'),
(25, NULL, 'Telangana', '2019-05-01 06:31:09', '2019-05-01 06:31:09'),
(26, NULL, 'Tripura', '2019-05-01 06:31:19', '2019-05-01 06:31:19'),
(27, NULL, 'Uttar Pradesh', '2019-05-01 06:31:34', '2019-05-01 06:31:34'),
(28, NULL, 'Uttarakhand', '2019-05-01 06:31:45', '2019-05-01 06:31:45'),
(29, NULL, 'West Bengal', '2019-05-01 06:31:59', '2019-05-01 06:31:59'),
(30, NULL, 'Andaman and Nicobar Islands', '2019-05-01 06:32:22', '2019-05-01 06:32:22'),
(31, NULL, 'Chandigarh', '2019-05-01 06:32:50', '2019-05-01 06:32:50'),
(32, NULL, 'Dadar and Nagar Haveli', '2019-05-01 06:33:03', '2019-05-01 06:33:03'),
(33, NULL, 'Daman and Diu', '2019-05-01 06:33:16', '2019-05-01 06:33:16'),
(34, NULL, 'Delhi', '2019-05-01 06:33:27', '2019-05-01 06:33:27'),
(35, NULL, 'Lakshadweep', '2019-05-01 06:33:42', '2019-05-01 06:33:42'),
(36, NULL, 'Puducherry', '2019-05-01 06:34:01', '2019-05-01 06:34:01');

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
(1, 1, 'DRAWING', 'drawing', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(2, 1, 'Sketching', 'sketching', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(3, 1, 'PAINTING', 'painting', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(4, 1, 'CRAFT', 'craft', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(5, 2, 'INDIAN CLASSICAL', 'indian-classical', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(6, 2, 'WESTERN CLASSICAL', 'western classical', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(7, 2, 'Freestyle', 'freestyle', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(8, 2, 'BOLLYWOOD', 'bollywood', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(9, 2, 'Hip hop', 'hip-hop', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(10, 2, 'B-boying', 'b-boying', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(11, 2, 'Belly', 'belly', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(12, 3, 'Indoor', 'indoor', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(13, 3, 'Outdoors', 'outdoors', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(14, 4, 'Judo', 'judo', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(15, 4, 'Karate', 'karate', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(16, 4, 'Self defence', 'self-defence', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(17, 4, 'Kick boxing', 'kick-boxing', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(18, 5, 'Indian classical', 'indian-classical', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(19, 5, 'Western classical', 'western classical', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(20, 5, 'Sufi', 'sufi', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(21, 5, 'Folk', 'folk', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(22, 5, 'Voice lessons', 'voice-lessons', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(23, 6, 'Drum', 'drum', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(24, 6, 'Guitar', 'guitar', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(25, 6, 'Piano', 'piano', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(26, 6, 'Casio', 'casio', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(27, 6, 'Flute', 'flute', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(28, 6, 'Banjo', 'banjo', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(29, 6, 'Table', 'table', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(30, 6, 'Sitar', 'sitar', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(31, 6, 'Zantoor', 'zantoor', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(32, 6, 'Violin', 'violin', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(33, 6, 'Saxophone', 'saxophone', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(34, 6, 'Ukulele', 'ukulele', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(35, 6, 'French horn', 'french horn', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(36, 6, 'Harmonica', 'harmonica', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(37, 7, 'English language', 'english language', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(38, 7, 'English grammar', 'english grammar', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(39, 7, 'Hindi', 'hindi', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(40, 7, 'Sanskrit', 'sanskrit', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(41, 7, 'Spanish', 'spanish', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(42, 7, 'French', 'french', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(43, 7, 'German', 'german', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(44, 7, 'Urdu', 'urdu', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(45, 7, 'Chinese', 'chinese', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(46, 7, 'Japanese', 'japanese', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(47, 7, 'Elocuation', 'elocuation', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(48, 7, 'Sign language', 'sign language', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(49, 8, 'Typing', 'typing', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(50, 8, 'Web', 'web', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(51, 8, 'C++', 'c++', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(52, 8, 'Microsoft Office', 'microsoft office', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(53, 8, 'Autocad', 'autocad', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(54, 8, 'Photoshop', 'photoshop', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(55, 8, 'Gaming development', 'gaming development', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(56, 9, 'Photography', 'photography', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(57, 9, 'Illustrations', 'illustrations', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(58, 9, 'Sculpting', 'sculpting', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(59, 9, 'Cartooning', 'cartooning', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(60, 9, 'Calligraphy', 'calligraphy', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(61, 9, 'Handwriting', 'handwriting', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(62, 10, 'Pottery', 'pottery', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(63, 10, 'Sewing', 'sewing', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(64, 10, 'Woodwork', 'woodwork', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(65, 11, 'Cooking', 'cooking', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(66, 11, 'Baking', 'baking', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(67, 11, 'Cake making', 'cake making', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(68, 11, 'Pasta', 'pasta', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(69, 11, 'Indian', 'indian', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(70, 11, 'Italian', 'italian', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(71, 11, 'Mexican', 'mexican', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(72, 11, 'Chinese', 'chinese', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(73, 11, 'Etiquette classes', 'etiquette classes', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(74, 13, 'Personality development', 'personality development', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(75, 13, 'Drama', 'drama', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(76, 13, 'Hindi theatre', 'hindi theatre', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(77, 13, 'English theare', 'english theare', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(78, 14, 'English', 'english', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(79, 14, 'Maths', 'maths', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(80, 14, 'Toddlers', 'toddlers', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(81, 15, 'Yoga', 'yoga', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(82, 15, 'CPR', 'cpr', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(83, 15, 'Pilates', 'pilates', '', 1, 1, '2019-04-15 13:00:00', '2019-04-22 13:00:00'),
(84, 15, 'Personal trainer', 'personal trainer', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00'),
(85, 15, 'Cross trainer', 'cross trainer', '', 1, 1, '2019-04-22 13:00:00', '2019-04-22 13:00:00');

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
  `user_type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'Dilp Yadav', 'dilip@gmail.com', '$2y$10$qyH.qTwcThkYP9WgjwjjLOY/947JZ1bVocCksCa9hdvgT6C.TzUsW', '7zyyrN0ZOWb1tM1URfby0k1YFctlSbllrclJlaThUPQLagiLqkpXDw0gp6Ze', 7905854106, 'class provider', 'yes', '1556875537download.jpeg', '3333-12-31', '12345678', '1234567', NULL, '2019-04-30 21:06:09', '2019-05-02 22:25:37'),
(2, 'Dilip yadav', 'abcd@gmail.com', '$2y$10$idearc2iMB6nwkzxBOmygOtoLKxtw4N.gDoJyju3kX7VBcc8YcXk6', NULL, 790585410, 'user', NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-01 02:02:21', '2019-05-01 02:02:21'),
(3, 'Dilip', 'avc@gmail.com', '$2y$10$oq8.vGFQd3ZzqQ7FkmKpn.NGqcXO6X3pOBEBFmYp.yNTmDPbluNSG', 'ewN1lfxqAETcOBVh9Lr3TDS7Hh04a4W954Y26AZoDrlBUVVANdItM8wtvdhS', 7905854106, 'user', NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-04 15:47:16', '2019-05-04 15:47:16'),
(4, 'Ashwani', 'akm@gmail.com', '$2y$10$aF9SvVwqYNfT3pWKS6zSS.Rn.TA7Dr.H6CTkTkl5E1JtJlQ22pkv.', 'JNkcSW6MjVAW1d7EIT0gbS2vSEsIlGOViOzaJpRmdU9JrGYeGl1FziN9VZQw', 11111111, 'user', 'Testttt', '1557812641download.jpeg', '2019-05-16', NULL, NULL, NULL, '2019-05-14 00:07:10', '2019-05-14 00:14:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
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
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `safty`
--
ALTER TABLE `safty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `achievement`
--
ALTER TABLE `achievement`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `class_provider`
--
ALTER TABLE `class_provider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `family_detail`
--
ALTER TABLE `family_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `further_sub_category`
--
ALTER TABLE `further_sub_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `safty`
--
ALTER TABLE `safty`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `further_sub_category`
--
ALTER TABLE `further_sub_category`
  ADD CONSTRAINT `further_sub_category_fk_cat_id_foreign` FOREIGN KEY (`fk_cat_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `further_sub_category_fk_sub_id_foreign` FOREIGN KEY (`fk_sub_id`) REFERENCES `sub_category` (`id`);

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_fk_cat_id_foreign` FOREIGN KEY (`fk_cat_id`) REFERENCES `category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
