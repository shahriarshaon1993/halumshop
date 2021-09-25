-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2021 at 07:05 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `halumshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shahriar', 'shaon@gmail.com', '2021-08-21 12:09:36', '$2y$10$E8P/asdowyIkZDQxPBK7beO6MAuKE8zWSaX28VqjJMLul.zOu/5cG', '8woLSUJxpNic13EvYDiawOCdJe8ALyaPENJJ0fBU51kwdCGDVPufH4PnO8ly', '2021-08-21 12:09:36', '2021-08-21 12:09:36');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Aarong', 'aarong', 'media/brands/brand_612103ac43f369.33280252XrZWnlijDD.png', '2021-08-21 13:46:20', '2021-08-21 13:46:20'),
(2, 'Cats Eye', 'cats-eye', 'media/brands/brand_612104bd378b85.08341018sJLsqbDYpd.png', '2021-08-21 13:50:53', '2021-08-21 13:50:53'),
(3, 'Richman', 'richman', 'media/brands/brand_61210542d4b135.55743170ZobaigGf4k.png', '2021-08-21 13:53:07', '2021-08-21 13:53:07'),
(4, 'Yellow', 'yellow', 'media/brands/brand_612105cd83eb87.657740961a5MvNmVUo.png', '2021-08-21 13:55:25', '2021-08-21 13:55:25'),
(5, 'Ecstasy', 'ecstasy', 'media/brands/brand_6121063af24d36.12510253IOBKAebCSh.png', '2021-08-21 13:57:15', '2021-08-21 13:57:15'),
(6, 'Rang', 'rang', 'media/brands/brand_612106929fd745.49973008ZULXOqYEWz.png', '2021-08-21 13:58:42', '2021-08-21 13:58:42'),
(7, 'Kay Kraft', 'kay-kraft', 'media/brands/brand_612106edf229e7.60961517xWkFCQmagO.png', '2021-08-21 14:00:14', '2021-08-21 14:00:14'),
(8, 'Dorjibari', 'dorjibari', 'media/brands/brand_61210721b3d8f7.20459152ILBwDldlvQ.jpg', '2021-08-21 14:01:05', '2021-08-21 14:01:05'),
(9, 'Anjan’s', 'anjans', 'media/brands/brand_61210761d9ca48.68220762leUZKaU9ht.png', '2021-08-21 14:02:10', '2021-08-21 14:02:10'),
(10, 'Sailor', 'sailor', 'media/brands/brand_612107a1f164f2.58700425NuSRMA6HtU.png', '2021-08-21 14:03:14', '2021-08-21 14:03:14'),
(11, 'Huawei', 'huawei', 'media/brands/brand_6122e288a86cc5.22954648th9c57TPXB.png', '2021-08-22 23:49:29', '2021-08-22 23:49:29'),
(12, 'Oppo', 'oppo', 'media/brands/brand_6122e2985ecab3.62589209SXrnD7YXON.png', '2021-08-22 23:49:45', '2021-08-22 23:49:45'),
(13, 'Samsung', 'samsung', 'media/brands/brand_6122e2ac4e09d7.54527035HSAc0YpVna.png', '2021-08-22 23:50:05', '2021-08-22 23:50:05'),
(14, 'Unnamed', 'unnamed', 'media/brands/brand_6122e2c966f8c4.05103663ZegLBcbg0S.png', '2021-08-22 23:50:33', '2021-08-22 23:50:33'),
(15, 'Vivo', 'vivo', 'media/brands/brand_6122e2d7540cc4.94851471REBIgZ9fVD.png', '2021-08-22 23:50:47', '2021-08-22 23:50:47'),
(16, 'Apple', 'apple', 'media/brands/brand_6122e2e602fe99.02224670YH0YoAr52W.png', '2021-08-22 23:51:02', '2021-08-22 23:51:02'),
(17, 'Lige', 'lige', 'media/brands/brand_6122e4641aeed4.44989011NRw0q7fNnX.png', '2021-08-22 23:57:24', '2021-08-22 23:57:24'),
(18, 'Walton', 'walton', 'media/brands/brand_61245db78bf769.94174387jS8ZU2ZMKl.png', '2021-08-24 02:47:19', '2021-08-24 02:47:19'),
(19, 'A4Tech', 'a4tech', 'media/brands/brand_612472c2eb3844.44991120jVWjakKp8v.png', '2021-08-24 04:17:07', '2021-08-24 04:17:07'),
(20, 'Dell', 'dell', 'media/brands/brand_6124732f386229.73745589VK2QWPDOXx.png', '2021-08-24 04:18:55', '2021-08-24 04:18:55');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Womens Fashion', 'womens-fashion', NULL, '2021-08-21 14:44:24', '2021-08-21 14:44:24'),
(2, 'Sharee', 'sharee', 1, '2021-08-21 14:44:51', '2021-08-21 14:44:51'),
(3, 'Salwar Kameez', 'salwar-kameez', 1, '2021-08-22 12:56:44', '2021-08-22 12:56:44'),
(4, 'Lehenga Choli', 'lehenga-choli', 1, '2021-08-22 19:29:37', '2021-08-22 19:29:37'),
(5, 'Gown', 'gown', 1, '2021-08-22 19:39:33', '2021-08-22 19:39:33'),
(6, 'Blouse', 'blouse', 1, '2021-08-22 19:53:26', '2021-08-22 19:53:26'),
(7, 'Kurtis and Tunic', 'kurtis-and-tunic', 1, '2021-08-22 20:08:12', '2021-08-22 20:08:12'),
(8, 'Western Dress', 'western-dress', 1, '2021-08-22 20:19:48', '2021-08-22 20:19:48'),
(9, 'Mens Shopping', 'mens-shopping', NULL, '2021-08-22 20:30:56', '2021-08-22 20:30:56'),
(10, 'Pants', 'pants', 9, '2021-08-22 20:42:15', '2021-08-22 20:42:15'),
(11, 'T- Shirts', 't-shirts', 9, '2021-08-22 21:01:22', '2021-08-22 21:01:22'),
(12, 'Shirts', 'shirts', 9, '2021-08-22 21:34:47', '2021-08-22 21:34:47'),
(13, 'Polo Shirts', 'polo-shirts', 9, '2021-08-22 23:33:54', '2021-08-22 23:33:54'),
(14, 'Watches', 'watches', 9, '2021-08-22 23:45:50', '2021-08-22 23:45:50'),
(15, 'Household', 'household', NULL, '2021-08-23 00:33:31', '2021-08-23 00:33:31'),
(16, 'Home Appliance', 'home-appliance', 15, '2021-08-23 01:06:05', '2021-08-23 01:06:05'),
(17, 'Furniture', 'furniture', 15, '2021-08-23 18:03:38', '2021-08-23 18:03:38'),
(18, 'Tools & Machinery', 'tools-machinery', 15, '2021-08-24 02:30:32', '2021-08-24 02:30:32'),
(19, 'Kitchen & Dining', 'kitchen-dining', NULL, '2021-08-24 02:44:21', '2021-08-24 02:44:21'),
(20, 'Refrigerator / Freezer', 'refrigerator-freezer', 19, '2021-08-24 02:51:30', '2021-08-24 02:51:30'),
(21, 'Crockeries', 'crockeries', 19, '2021-08-24 03:01:53', '2021-08-24 03:01:53'),
(22, 'Rice Cooker', 'rice-cooker', 19, '2021-08-24 03:15:21', '2021-08-24 03:15:21'),
(23, 'Computer Accessories', 'computer-accessories', NULL, '2021-08-24 03:30:41', '2021-08-24 03:30:41'),
(24, 'Mouse', 'mouse', 23, '2021-08-24 04:14:18', '2021-08-24 04:14:18'),
(25, 'Keybord', 'keybord', 23, '2021-08-24 04:31:04', '2021-08-24 04:31:04'),
(26, 'Headphone', 'headphone', 23, '2021-08-24 04:38:47', '2021-08-24 04:38:47');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `commenter_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commenter_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT 1,
  `child_id` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `commenter_id`, `commenter_type`, `guest_name`, `guest_email`, `commentable_type`, `commentable_id`, `comment`, `approved`, `child_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2', 'App\\Models\\User', NULL, NULL, 'App\\Models\\Product', '31', 'Nice t-shirt', 1, NULL, NULL, '2021-08-30 07:20:38', '2021-08-30 07:20:38');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon`, `discount`, `created_at`, `updated_at`) VALUES
(1, 'DHAKA', 100, '2021-08-30 08:34:13', '2021-08-30 08:34:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2018_06_30_113500_create_comments_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2021_04_22_103731_create_admins_table', 1),
(11, '2021_04_23_102120_create_categories_table', 1),
(12, '2021_04_27_165838_create_brands_table', 1),
(13, '2021_04_28_121303_create_coupons_table', 1),
(14, '2021_04_28_141652_create_newslaters_table', 1),
(15, '2021_04_28_152146_create_products_table', 1),
(16, '2021_04_30_170431_create_post_categories_table', 1),
(17, '2021_05_01_231745_create_posts_table', 1),
(19, '2021_06_16_081735_create_wishlists_table', 1),
(23, '2021_06_24_033414_create_shippings_table', 1),
(24, '2021_06_28_125612_create_seos_table', 1),
(25, '2021_07_02_084201_create_permission_tables', 1),
(26, '2021_07_05_052727_create_site_settings_table', 1),
(27, '2021_06_05_142019_create_sliders_table', 2),
(28, '2021_06_22_005257_create_settings_table', 3),
(34, '2021_06_24_033110_create_order_details_table', 4),
(35, '2021_06_24_014954_create_orders_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newslaters`
--

CREATE TABLE `newslaters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newslaters`
--

INSERT INTO `newslaters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'shahin@gmail.com', '2021-08-30 08:33:39', '2021-08-30 08:33:39');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paying_amount` double DEFAULT NULL,
  `blnc_transection` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_order_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtotal` double DEFAULT NULL,
  `shipping` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat` int(11) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `return_status` tinyint(4) NOT NULL DEFAULT 0,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_op` tinyint(4) NOT NULL DEFAULT 0,
  `status_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `payment_type`, `payment_id`, `paying_amount`, `blnc_transection`, `transaction_id`, `currency`, `stripe_order_id`, `subtotal`, `shipping`, `vat`, `amount`, `return_status`, `status`, `status_op`, `status_code`, `created_at`, `updated_at`) VALUES
(70, 1, 'bdpayment', NULL, NULL, NULL, '76668501', 'BDT', NULL, 988, '150', 100, 1238, 0, 'processing', 0, NULL, '2021-09-07 19:47:18', '2021-09-07 20:17:53'),
(71, 1, 'stripe', 'card_1JXAujDAuvR6KSdrabYOKjgX', 123800, 'txn_3JXAulDAuvR6KSdr1IeVq4HL', NULL, 'BDT', '6137cb9062c95', 988, '150', 100, 1238, 0, NULL, 0, '1478046', '2021-09-07 20:29:09', '2021-09-07 20:29:09'),
(72, 1, 'cashon', NULL, NULL, NULL, NULL, 'BDT', NULL, 988, '150', 100, 1238, 0, NULL, 0, '49993833', '2021-09-07 20:31:30', '2021-09-07 20:31:30'),
(73, 1, 'bdpayment', NULL, NULL, NULL, '24867891', 'BDT', NULL, 988, '150', 100, 1238, 0, 'Processing', 0, NULL, '2021-09-07 21:04:54', '2021-09-07 21:04:54'),
(74, 1, 'bdpayment', NULL, NULL, NULL, '29307185', 'BDT', NULL, 988, '150', 100, 1238, 0, 'Processing', 0, NULL, '2021-09-07 21:06:43', '2021-09-07 21:06:43'),
(75, 1, 'bdpayment', NULL, NULL, NULL, '99254517', 'BDT', NULL, 988, '150', 100, 1238, 0, 'Pending', 0, NULL, '2021-09-07 21:08:20', '2021-09-07 21:08:20'),
(76, 1, 'bdpayment', NULL, NULL, NULL, '83278323', 'BDT', NULL, 988, '150', 100, 1238, 0, 'Processing', 0, NULL, '2021-09-07 21:16:30', '2021-09-07 21:16:30'),
(77, 1, 'bdpayment', NULL, NULL, NULL, '76706510', 'BDT', NULL, 988, '150', 100, 1238, 0, 'Processing', 0, NULL, '2021-09-07 21:18:05', '2021-09-07 21:18:05'),
(78, 1, 'bdpayment', NULL, NULL, NULL, '86447056', 'BDT', NULL, 560, '150', 100, 810, 0, 'Processing', 0, NULL, '2021-09-07 21:24:11', '2021-09-07 21:24:11'),
(79, 1, 'bdpayment', NULL, NULL, NULL, '61810989', 'BDT', NULL, 31390, '150', 100, 31640, 0, 'Pending', 0, NULL, '2021-09-07 21:40:38', '2021-09-07 21:40:38'),
(80, 1, 'bdpayment', NULL, NULL, NULL, '47274477', 'BDT', NULL, 950, '150', 100, 1200, 0, 'Pending', 0, NULL, '2021-09-07 21:43:41', '2021-09-07 21:43:41'),
(81, 1, 'bdpayment', NULL, NULL, NULL, '95004988', 'BDT', NULL, 780, '150', 100, 1030, 0, 'Pending', 0, NULL, '2021-09-07 21:46:30', '2021-09-07 21:46:30'),
(82, 1, 'bdpayment', NULL, NULL, NULL, '25316389', 'BDT', NULL, 720, '150', 100, 970, 0, 'Pending', 0, NULL, '2021-09-07 21:50:16', '2021-09-07 21:50:16'),
(83, 1, 'bdpayment', NULL, NULL, NULL, '95484619', 'BDT', NULL, 9500, '150', 100, 9750, 0, 'Pending', 0, NULL, '2021-09-07 21:53:30', '2021-09-07 21:53:30'),
(84, 1, 'bdpayment', NULL, NULL, NULL, '29720170', 'BDT', NULL, 988, '150', 100, 1238, 0, 'Pending', 0, NULL, '2021-09-07 21:58:28', '2021-09-07 21:58:28'),
(85, 1, 'bdpayment', NULL, NULL, NULL, '99812638', 'BDT', NULL, 1340, '150', 100, 1590, 0, 'Processing', 0, NULL, '2021-09-07 22:04:50', '2021-09-07 22:04:50'),
(86, 1, 'bdpayment', NULL, NULL, NULL, '48815035', 'BDT', NULL, 1100, '150', 100, 1350, 0, 'Processing', 0, NULL, '2021-09-07 22:17:52', '2021-09-07 22:17:52'),
(87, 1, 'bdpayment', NULL, NULL, NULL, '96921478', 'BDT', NULL, 1500, '150', 100, 1750, 0, 'Processing', 1, NULL, '2021-09-08 20:07:51', '2021-09-08 20:07:51'),
(88, 1, 'cashon', NULL, NULL, NULL, NULL, 'BDT', NULL, 950, '150', 100, 1200, 0, NULL, 1, '80321066', '2021-09-08 20:09:18', '2021-09-08 20:09:18'),
(89, 1, 'bdpayment', NULL, NULL, NULL, '38519418', 'BDT', NULL, 1650, '150', 100, 1900, 0, 'Processing', 0, '9141037', '2021-09-08 20:27:32', '2021-09-08 20:27:32'),
(90, 1, 'stripe', 'card_1JXXSODAuvR6KSdrud2mzU06', 283000, 'txn_3JXXSQDAuvR6KSdr0NRETWIs', NULL, 'BDT', '61391e119418d', 2580, '150', 100, 2830, 0, NULL, 0, '61391e15f2e79', '2021-09-08 20:33:25', '2021-09-08 20:33:25'),
(91, 1, 'bdpayment', NULL, NULL, NULL, '46070958', 'BDT', NULL, 1020, '150', 100, 1270, 0, 'Processing', 0, '61391e3b1bb1a', '2021-09-08 20:34:03', '2021-09-08 20:34:03'),
(92, 1, 'cashon', NULL, NULL, NULL, NULL, 'BDT', NULL, 2580, '150', 100, 2830, 0, NULL, 0, '61391e80b816b', '2021-09-08 20:35:12', '2021-09-08 20:35:12');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `singleprice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalprice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `color`, `size`, `quantity`, `singleprice`, `totalprice`, `created_at`, `updated_at`) VALUES
(27, 70, 63, 'HAVIT H2590BT BLUETOOTH HEADPHONE', NULL, NULL, '1', '988', '1238', '2021-09-07 19:47:18', '2021-09-07 19:47:18'),
(28, 71, 63, 'HAVIT H2590BT BLUETOOTH HEADPHONE', NULL, NULL, '1', '988', '1238', '2021-09-07 20:29:09', '2021-09-07 20:29:09'),
(29, 72, 63, 'HAVIT H2590BT BLUETOOTH HEADPHONE', NULL, NULL, '1', '988', '1238', '2021-09-07 20:31:30', '2021-09-07 20:31:30'),
(30, 73, 63, 'HAVIT H2590BT BLUETOOTH HEADPHONE', NULL, NULL, '1', '988', '1238', '2021-09-07 21:04:54', '2021-09-07 21:04:54'),
(31, 74, 63, 'HAVIT H2590BT BLUETOOTH HEADPHONE', NULL, NULL, '1', '988', '1238', '2021-09-07 21:06:43', '2021-09-07 21:06:43'),
(32, 75, 63, 'HAVIT H2590BT BLUETOOTH HEADPHONE', NULL, NULL, '1', '988', '1238', '2021-09-07 21:08:20', '2021-09-07 21:08:20'),
(33, 76, 63, 'HAVIT H2590BT BLUETOOTH HEADPHONE', NULL, NULL, '1', '988', '1238', '2021-09-07 21:16:30', '2021-09-07 21:16:30'),
(34, 77, 63, 'HAVIT H2590BT BLUETOOTH HEADPHONE', NULL, NULL, '1', '988', '1238', '2021-09-07 21:18:05', '2021-09-07 21:18:05'),
(35, 78, 13, 'Beautiful Navy-Blue Designer Blouse', NULL, '34', '1', '560', '810', '2021-09-07 21:24:11', '2021-09-07 21:24:11'),
(36, 79, 41, '12U mini server rack', NULL, NULL, '1', '31390', '31640', '2021-09-07 21:40:38', '2021-09-07 21:40:38'),
(37, 80, 33, 'Sergio Tacchini New Young Line Polo Shirt White/Navy', NULL, 'M', '1', '950', '1200', '2021-09-07 21:43:41', '2021-09-07 21:43:41'),
(38, 81, 31, 'Navy Printed Polo Shirt', NULL, 'S', '1', '780', '1030', '2021-09-07 21:46:30', '2021-09-07 21:46:30'),
(39, 82, 62, 'FH200U  Conference USB Over-Ear Headphone', 'Gery', NULL, '1', '720', '970', '2021-09-07 21:50:16', '2021-09-07 21:50:16'),
(40, 83, 42, 'Malaysian wood wardrobe', NULL, NULL, '1', '9500', '9750', '2021-09-07 21:53:30', '2021-09-07 21:53:30'),
(41, 84, 63, 'HAVIT H2590BT BLUETOOTH HEADPHONE', NULL, NULL, '1', '988', '1238', '2021-09-07 21:58:28', '2021-09-07 21:58:28'),
(42, 85, 43, 'Tools Storage Box', NULL, NULL, '1', '1340', '1590', '2021-09-07 22:04:50', '2021-09-07 22:04:50'),
(43, 86, 32, 'AUSTRALIAN BY LALPINA LOGO POLO SHIRT DARK NAVY', NULL, 'M', '1', '1100', '1350', '2021-09-07 22:17:52', '2021-09-07 22:17:52'),
(44, 87, 56, 'FG20  2.4G Wireless Mouse', 'White', NULL, '2', '750', '1750', '2021-09-08 20:07:51', '2021-09-08 20:07:51'),
(45, 88, 33, 'Sergio Tacchini New Young Line Polo Shirt White/Navy', NULL, 'M', '1', '950', '1200', '2021-09-08 20:09:19', '2021-09-08 20:09:19'),
(46, 89, 40, 'Melamain Laminate Board H- 6 inch, W-2ft, D-6 inch. WALL SHELVES', NULL, NULL, '1', '1650', '1900', '2021-09-08 20:27:32', '2021-09-08 20:27:32'),
(47, 90, 23, 'Denim Gabardine Cropped Trousers', NULL, '28', '1', '2580', '2830', '2021-09-08 20:33:26', '2021-09-08 20:33:26'),
(48, 91, 21, 'Charming Lightred Western Dress', 'Lightred', '38', '1', '1020', '1270', '2021-09-08 20:34:03', '2021-09-08 20:34:03'),
(49, 92, 23, 'Denim Gabardine Cropped Trousers', NULL, '28', '1', '2580', '2830', '2021-09-08 20:35:12', '2021-09-08 20:35:12');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('shahin@gmail.com', '1630280919612c1cd78924a4.15299535AR0xOvAbzCHraVMIEQ5sP4N99N3nHKIL', '2021-08-29 23:48:39');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'categories section', 'admin', '2021-08-21 12:17:42', '2021-08-21 12:17:42'),
(2, 'tools sections', 'admin', '2021-08-21 12:17:51', '2021-08-21 12:17:51'),
(3, 'products section', 'admin', '2021-08-21 12:18:02', '2021-08-21 12:18:02'),
(4, 'orders section', 'admin', '2021-08-21 12:18:11', '2021-08-21 12:18:11'),
(5, 'posts section', 'admin', '2021-08-21 12:18:21', '2021-08-21 12:18:21'),
(6, 'pandding order', 'admin', '2021-08-21 12:18:33', '2021-08-21 12:18:33'),
(7, 'payment accept', 'admin', '2021-08-21 12:18:57', '2021-08-21 12:18:57'),
(8, 'proccess delivery', 'admin', '2021-08-21 12:19:09', '2021-08-21 12:19:09'),
(9, 'deleverd orders', 'admin', '2021-08-21 12:19:19', '2021-08-21 12:19:19'),
(10, 'cancel orders', 'admin', '2021-08-21 12:19:31', '2021-08-21 12:19:31'),
(11, 'settings sections', 'admin', '2021-08-21 12:19:41', '2021-08-21 12:19:41'),
(12, 'return product', 'admin', '2021-08-21 12:19:58', '2021-08-21 12:19:58');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `postcategory_id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_bn` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_bn` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `postcategory_id`, `admin_id`, `title_en`, `title_bn`, `slug`, `description_en`, `description_bn`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Realm Book Slim', 'রিয়েলমি বুক স্লিম', 'realm-book-slim', '<p>Smartphone maker brand Realmy is meeting all kinds of technological needs of the young generation through Leap Forward technology. According to Canalis, the band is Bangladesh\'s top smartphone maker in the second quarter of 2021. The brand has entered the AIOT 2.0 development phase with advanced \'1 + 5 + T\' strategy and is working to build a wide portfolio of Five-G products. As part of this new strategy, Realm has launched their first laptop \'Realm Book Slim\'. You can login for details: https://cutt.ly/BuyNow_realme_BookSlim .</p><p><b>2K full vision display, with full aluminum alloy body</b></p><p>The Realm Book Slim has a 14-inch 2K full vision display and a 3: 2 screen ratio. This is the only high resolution laptop in this price range. As it has Corning Gorilla and Oliophobic cover, this laptop will not get any kind of scratch. The nano-edge design of the laptop allows users to enjoy great visual effects. Not only that, with its high resolution (2160x1440) capabilities, users will be able to see any picture, scene and color clearly in this laptop perfectly and perfectly. The Realm Book Slim is just 14.9 mm thick and weighs only 1.38 kg. As it is very light in weight, the laptop can be easily carried anywhere. The exterior of the laptop is made with an aluminum alloy body and a mirror logo design. It is very pleasing to see this ultra slim laptop with extraordinary design.<br><br></p>', '<p>লিপ ফরওয়ার্ড প্রযুক্তির মাধ্যমে তরুণ প্রজন্মের সব ধরনের প্রযুক্তিগত চাহিদা পূরণ করে যাচ্ছে স্মার্টফোন নির্মাতা ব্র্যান্ড রিয়েলমি। ক্যানালিসের প্রতিবেদন অনুসারে এই ব্যান্ড ২০২১ সালের দ্বিতীয় প্রান্তিকে বাংলাদেশের শীর্ষ স্মার্টফোন নির্মাতা ব্র্যান্ড। ব্র্যান্ডটি উন্নত ‘১+৫+টি’ কৌশলের সঙ্গে এআইওটি ২.০ বিকাশের পর্যায়ে প্রবেশ করেছে এবং ফাইভ–জি পণ্যের একটি বিস্তৃত পোর্টফলিও তৈরিতে কাজ করছে। নতুন এ কৌশলের অংশ হিসেবে রিয়েলমি এবার বাজারে নিয়ে এসেছে তাদের প্রথম ল্যাপটপ ‘রিয়েলমি বুক স্লিম’। বিস্তারিত জানতে লগইন করতে পারেন: https://cutt.ly/BuyNow_realme_BookSlim –এ।</p><p><b>২কে ফুল ভিশন ডিসপ্লে, সঙ্গে ফুল অ্যালুমিনিয়াম অ্যালয় বডি</b></p><p>রিয়েলমি বুক স্লিমে রয়েছে ১৪ ইঞ্চি ২কে ফুল ভিশন ডিসপ্লে ও ৩: ২ স্ক্রিন রেশিও। এই মূল্যসীমার মধ্যে এটিই একমাত্র উচ্চ রেজল্যুশনসম্পন্ন ল্যাপটপ। কর্নিং গরিলা ও অলিওফোবিক আবরণ থাকায় এ ল্যাপটপে কোনো ধরনের স্ক্র্যাচ পড়বে না। ল্যাপটপটির ন্যানো-এজ ডিজাইনের সাহায্যে ব্যবহারকারীরা দুর্দান্ত ভিজ্যুয়াল ইফেক্ট উপভোগ করতে পারবেন। শুধু তা–ই নয়, এর উচ্চ রেজল্যুশন (২১৬০x১৪৪০) ক্ষমতা থাকায়, ব্যবহারকারীরা এ ল্যাপটপে পরিপূর্ণ ও নিখুঁতভাবে যেকোনো ছবি, দৃশ্য ও রং স্পষ্টভাবে দেখতে পারবেন। ফুল মেটাল বডির চমৎকার দৃষ্টিনন্দন ডিজাইনের রিয়েলমি বুক স্লিম মাত্র ১৪ দশমিক ৯ মিলিমিটার পুরু এবং এর ওজন মাত্র ১ দশমিক ৩৮ কিলোগ্রাম। ওজনে অনেক হালকা হওয়ায় ল্যাপটপটি যেকোনো জায়গায় অনায়াসে বহন করা যাবে। ল্যাপটপের বাইরের অংশ অ্যালুমিনিয়াম অ্যালয় বডি ও মিরর লোগো ডিজাইন দিয়ে তৈরি করা হয়েছে। আলট্রা স্লিম অসাধারণ ডিজাইনের এ ল্যাপটপ দেখতে খুবই দৃষ্টিনন্দন।<br><br></p>', 'media/posts/post_612d0923111100.38717907AaFa3QenvD.jpg', 1, '2021-08-30 16:36:51', '2021-08-30 16:36:51'),
(2, 2, 1, 'Abundance of colors in the house', 'ঘরে রঙের প্রাচুর্য', 'abundance-of-colors-in-the-house', '<p>Even your own tidy interior often feels monotonous. And if the atmosphere of the house is not your choice, it is normal to feel bad. The use of bright colors is needed in the interior to keep the mind well. Because, the relationship of bright colors with the mind is quite deep. It is possible to increase the abundance of colors in the house very easily. In this case, the obstacle is the same. That is, it is not possible to change the color of the whole room if you want. So without changing the color of the walls, different colored accessories can be used in different parts of the house. In this case, you have to be tactful. Advertising * If you think you want six colors of color as soon as you enter the room, then it is important to change the color of the floor of the living room at the beginning. The easiest way to do this is colored carpet. You can get colorful carpets under the table in the living room, bedroom or dining area. Colorful mats can also be used instead of carpets. Colored mats are also available in the market nowadays. This will make the house look brighter.</p><p>* Cushions can be matched with the color of the floor or in contrasting colors with the sofa or chair in the living room. Or if the home sofa gets older, it can be replaced with a colorful throw sofa. Placing a colorful runner on the dining table will also change the color atmosphere, which can change the look of the whole room. * Colorful artificial flowers can be arranged in vases of different sizes on tables, shelves, TV cabinets scattered all over the interior. Or colorful showpieces or decker items can be arranged. This will also increase the color-diversity of the house. * If the color of the walls cannot be changed, colored photo frames can be hung instead. If you don\'t have the right photo frame in the market, you can download your favorite picture from the internet and print it according to your size. It will also reduce the cost.<br></p>', '<p>নিজের সাজানো–গোছানো অন্দরও অনেক সময় একঘেয়ে মনে হয়। আর ঘরের আবহ নিজের পছন্দের না হলে মন খারাপ লাগাটাই স্বাভাবিক। মন ভালো রাখাতে অন্দরসজ্জায় প্রয়োজন উজ্জ্বল রঙের ব্যবহার। কারণ, মনের সঙ্গে উজ্জ্বল রঙের সম্পর্ক বেশ গভীর। খুব সহজেই ঘরে রঙের প্রাচুর্য বাড়ানো সম্ভব। এ ক্ষেত্রে প্রতিবন্ধকতা একটিই। তা হচ্ছে চাইলেই পুরো ঘরের রং পরিবর্তন করা সম্ভব নয়। তাই দেয়ালের রং পরিবর্তন না করে ঘরের বিভিন্ন জায়গায় ব্যবহার করা যেতে পারে রঙিন নানা অনুষঙ্গ। এ ক্ষেত্রে হতে হবে কৌশলী। বিজ্ঞাপন * যদি মনে করেন ঘরে ঢুকেই আপনার চাই রঙের ছটা, তাহলে শুরুতেই বসার ঘরের মেঝের রং পরিবর্তন করা জরুরি। এ জন্য সবচেয়ে সহজ উপায় রঙিন কার্পেট। বসার ঘর, শোয়ার ঘর বা ডাইনিং এরিয়ায় টেবিলের নিচে রঙিন কার্পেট পেতে দিতে পারেন। কার্পেটের পরিবর্তে কালারফুল ম্যাটও ব্যবহার করা যেতে পারে। আজকাল বাজারে রঙিন ম্যাটও পাওয়া যায়। এতে ঘর উজ্জ্বল দেখাবে।</p><p>* মেঝের রঙের সঙ্গে মিলিয়ে বা বিপরীত রঙের কুশন রাখা যেতে পারে বসার ঘরে সোফা বা চেয়ারের সঙ্গে। কিংবা বাসার সোফাটি বেশি পুরোনো হয়ে গেলে এটি বদলে নেওয়া যেতে পারে কালারফুল থ্রো সোফা। ডাইনিং টেবিলে রঙিন রানার রাখলেও রঙের আবহে পরিবর্তন আসবে, যা বদলে দিতে পারে পুরো ঘরের লুক। * অন্দরজুড়ে ছড়িয়ে–ছিটিয়ে থাকা টেবিল, শেলফ, টিভি ক্যাবিনেটের ওপর নানা আকারের ফুলদানিতে রংবেরংয়ের কৃত্রিম ফুল সাজিয়ে রাখা যেতে পারে। অথবা কালারফুল শোপিস বা ডেকর আইটেম সাজানো যায়। এতেও ঘরের রং-বৈচিত্র্য বাড়বে। * দেয়ালের রং পরিবর্তন করা না গেলে এর পরিবর্তে ঝোলানো যেতে পারে রঙিন ফোটোফ্রেম। বাজারে মনের মতো ফোটোফ্রেম না পাওয়া গেলে ইন্টারনেট থেকে পছন্দের ছবি ডাউনলোড করে মাপমতো প্রিন্ট করিয়ে নেওয়া যেতে পারে। এতে খরচও কম হবে।<br></p>', 'media/posts/post_612d0b850b38a3.76251951ohGtz5GVcV.jpg', 1, '2021-08-30 16:47:01', '2021-08-30 16:47:01'),
(3, 3, 1, 'In the illusion of garland sari', 'মালা শাড়ির মায়ায়', 'in-the-illusion-of-garland-sari', '<p>Mala Sari was the first brand of sari in Bangladesh at the peak of popularity in the seventies and eighties. This sari was made by Anwar Silk Mills Limited established by Anwar Hossain. Anwar Hossain died on 19 August. Soon after, many people expressed their love for this sari through social media. Mother-aunt wedding sari is now a collection of love for themselves. Once upon a time, the popular wedding garland sari was highlighted in the current trend.</p><p>Mala sari was famous all over the country in this tagline \'Makes the bride red with sweet dreams\'. Once upon a time in a family with limited income, a wedding ceremony could not be imagined without this sari. In a television ad of 1 minute 54 seconds, a voice at the end of the jingle said, \'You are a beautiful woman in a hundred ways, Mala Sari\'. That is to say, there is so much variety in the garland sari that in each of them a single form of woman becomes visible. That is why he is amazing.</p><p>As can be seen in the advertisement, the same woman is manifested in various forms after wearing a garland of various colors and prints. Like the bride\'s attire, this sari is involved in the beauty of Bengali women in the home environment of Attapur or in the cosmos of rural Bengal.<br></p>', '<p>সত্তর–আশির দশকে জনপ্রিয়তার শীর্ষে ছিল মালা শাড়ি, বাংলাদেশে শাড়ির প্রথম ব্র্যান্ড। আনোয়ার হোসেন প্রতিষ্ঠিত আনোয়ার সিল্ক মিলস লিমিটেড তৈরি করত এই শাড়ি। ১৯ আগস্ট মারা যান আনোয়ার হোসেন। এর পরপরই সামাজিক যোগাযোগমাধ্যমে এই শাড়ির প্রতি ভালোবাসার কথা তুলে ধরেন অনেকেই। মা–খালাদের বিয়ের শাড়ি এখন নিজেদের কাছে ভালোবাসার এক সংগ্রহ। একসময় বিয়ের জনপ্রিয় মালা শাড়িকে চলতি ধারায় একঝলক তুলে ধরা হলো নকশায়।</p><p>‘নববধূকে মধুর স্বপ্নে রাঙিয়ে তোলে’—এই ট্যাগলাইনে মালা শাড়ি প্রসিদ্ধ ছিল দেশজুড়ে। সীমিত আয়ের পরিবারে একসময় এ শাড়ি ছাড়া বিয়ের অনুষ্ঠান কল্পনা করা যেত না। ১ মিনিট ৫৪ সেকেন্ডের একটি টেলিভিশন বিজ্ঞাপনে জিঙ্গেলের শেষে একটা কণ্ঠস্বর, ‘শতরূপে তুমি অপরূপা নারী, মালা শাড়ি’। অর্থাৎ, মালা শাড়ির এত বৈচিত্র্য যে এর প্রতিটিতেই নারীর একেকটি রূপ দৃশ্যমান হয়ে ওঠে। তাতেই সে অপরূপ।</p><p>বিজ্ঞাপনচিত্রে দেখা যায়, নানা রং এবং প্রিন্টের মালা শাড়ি পরে একই নারী বিচিত্র রূপে উদ্ভাসিত। কনের সাজে যেমন, তেমনি আটপৌরে ঘরোয়া পরিবেশে কিংবা গ্রামবাংলার নিসর্গে বাঙালি নারীর সৌন্দর্যে জড়িয়ে আছে এই শাড়ি।<br></p>', 'media/posts/post_612e78f450cb35.56286655FAU6qqTPV0.jpg', 1, '2021-08-31 18:46:12', '2021-08-31 18:46:12');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `name_en`, `name_bn`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Laptop', 'ল্যাপটপ', 'laptop', '2021-08-30 16:31:01', '2021-08-30 16:31:01'),
(2, 'Furnishings', 'গৃহসজ্জা', 'furnishings', '2021-08-30 16:42:40', '2021-08-30 16:42:40'),
(3, 'Design', 'নকশা', 'design', '2021-08-31 18:37:29', '2021-08-31 18:37:29');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selling_price` decimal(8,2) NOT NULL,
  `discount_price` decimal(8,2) DEFAULT NULL,
  `video_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hot_deal` tinyint(4) NOT NULL DEFAULT 0,
  `best_seller` tinyint(4) NOT NULL DEFAULT 0,
  `special_offer` tinyint(4) NOT NULL DEFAULT 0,
  `trand` tinyint(4) NOT NULL DEFAULT 0,
  `new_arrival` tinyint(4) NOT NULL DEFAULT 0,
  `image_one` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `brand_id`, `product_title`, `slug`, `product_code`, `product_quantity`, `product_details`, `product_color`, `product_size`, `selling_price`, `discount_price`, `video_link`, `hot_deal`, `best_seller`, `special_offer`, `trand`, `new_arrival`, `image_one`, `image_two`, `image_three`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 6, 'BISHWO RANG SHAREE COLLECTION', 'bishwo-rang-sharee-collection', 100, 9, '<p><span style=\"color: rgb(99, 99, 99); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 13px;\">BRG-SHR-01325 Fabric- Cotton</span><br></p>', NULL, NULL, '2306.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 0, 0, 'media/products/product_61224561a32e07.67684252Hd3L15pc1R.png', NULL, NULL, 1, '2021-08-22 12:38:58', '2021-08-22 12:58:38'),
(2, 1, 2, 1, 'TANGAIL COTTON SHAREE MT-989', 'tangail-cotton-sharee-mt-989', 101, 12, '<p>Saree is the most common traditional dress in Bangladesh and India.half silk saree is perfect for incorporated into any look. half silk saree is made of half silk fabrics and also including a matching blouse piece.&nbsp;<br></p>', NULL, NULL, '1500.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 0, 0, 'media/products/product_612247471855a9.290784138oYOHdaqg1.png', NULL, NULL, 1, '2021-08-22 12:47:03', '2021-08-22 12:58:52'),
(3, 1, 2, 6, 'BISHWO RANG SHAREE COLLOCATION', 'bishwo-rang-sharee-collocation', 103, 13, '<p><span style=\"color: rgb(99, 99, 99); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 13px;\">NK-SHR-00375 Fabric- Cotton</span><br></p>', NULL, NULL, '2558.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 0, 0, 'media/products/product_612247fa1e9864.4333627728Co4O8cGc.png', NULL, NULL, 1, '2021-08-22 12:50:02', '2021-08-22 12:54:44'),
(4, 1, 3, 1, 'BISHWO RANG KAMIZ COLLECTION', 'bishwo-rang-kamiz-collection', 200, 12, '<p><span style=\"color: rgb(99, 99, 99); font-family: &quot;Helvetica Neue&quot;, Verdana, Arial, sans-serif; font-size: 13px;\">BRG-KMZ-01072 Fabric- Half Silk</span><br></p>', 'red ,green,blue', '28,32,38,42', '4390.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 0, 0, 'media/products/product_61224af5947699.421961247R0fZiaMOb.png', NULL, NULL, 1, '2021-08-22 13:02:45', '2021-08-22 13:02:45'),
(5, 1, 3, 9, 'Beautiful Multi Cotton Salwar Kameez', 'beautiful-multi-cotton-salwar-kameez', 202, 7, '<p>&gt; Buy Beautiful Multi Cotton Salwar Kameez.</p><p>&gt; Salwar Kameez is Designed With Embroidered Work Work.</p><p>&gt; Top Fabric: CHANDERI</p><p>&gt; Bottom Fabric: LYCRA LEGGING</p><p>&gt; Dupatta Fabric: CHIFFON</p><p>&gt; Color: Multi.</p><p>&gt; Bottom Color: Aqua Blue</p><p>&gt; Dupatta Color: Aqua Blue</p>', NULL, NULL, '2500.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 0, 1, 'media/products/product_6122a49b31d343.82650092YFkmvFbew6.jpeg', 'media/products/product_6122a49b7894d8.87533327DWty3wVi6m.jpeg', 'media/products/product_6122a49b982fc8.20837447mxeml39n2j.jpeg', 1, '2021-08-22 19:25:15', '2021-08-29 22:01:30'),
(6, 1, 3, 9, 'Bewitching Black Patiala Salwar Kameez', 'bewitching-black-patiala-salwar-kameez', 203, 4, '<p>Buy Bewitching Black Patiala Salwar Kameez.</p><p>&gt; Salwar Kameez is Designed With Printed Work.</p><p>&gt; Top Fabric: Leon Crepe</p><p>&gt; Bottom Fabric: Leon Crepe</p><p>&gt; Dupatta Fabric: Chiffon</p><p><span style=\"font-size: 0.875rem;\">&gt; Color: Black .</span></p><p>&gt; Bottom Color: White</p><p>&gt; Dupatta Color: White</p>', NULL, NULL, '2290.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 0, 1, 'media/products/product_6122a541a1fbb5.415499438SBovRgF5V.jpeg', 'media/products/product_6122a541ad1951.80093505hAa2RFLl5H.jpeg', 'media/products/product_6122a541ba3ec0.19525870wtKlEQc0hx.jpeg', 1, '2021-08-22 19:28:01', '2021-08-29 22:01:20'),
(7, 1, 4, 1, 'Excellent Mauve Lehenga Choli', 'excellent-mauve-lehenga-choli', 300, 3, '<p>&gt; Buy Excellent Mauve Lehenga Choli online.</p><p>&gt; Lehenga Choli is Designed with Zari,Gota, Mirror, Resham/Sequince Work.</p><p>&gt; Choli Fabric: Georgette.</p><p>&gt; Choli Color: Mauve.</p><p>&gt; Lehenga Color: Mauve.</p><p>&gt; Dupatta Color: Mauve.</p><p>&gt; Lehenga Fabric: Georgette.</p><p>&gt; Dupatta Fabric: Soft Net.</p>', NULL, NULL, '6450.00', NULL, 'https://www.youtube.com/watch?v=nxSDHBdsWqA', 0, 0, 0, 0, 1, 'media/products/product_6122a653dbd138.54009349CfI9NRedsR.jpeg', 'media/products/product_6122a653ed6ed1.49271333n3Rk3TM4q5.jpeg', 'media/products/product_6122a6542172e0.25453523qyXYQSIaTF.jpeg', 1, '2021-08-22 19:32:36', '2021-08-29 22:01:09'),
(8, 1, 4, 1, 'Elegant Mauve Lehenga Choli', 'elegant-mauve-lehenga-choli', 301, 6, '<p>&gt; Buy Elegant Mauve Lehenga Choli online.</p><p>&gt; Lehenga Choli is Designed with Zari, Gota, Mirror, Cut-Work.</p><p>&gt; Choli Fabric: Georgette.</p><p>&gt; Color: Mauve.</p><p>&gt; Lehenga Fabric: Georgette.</p><p>&gt; Dupatta Fabric: Georgette.</p>', NULL, NULL, '7590.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 0, 1, 'media/products/product_6122a6fc41fb37.24912973TQOXmSRGAp.jpeg', 'media/products/product_6122a6fc4c12a6.580953534HLoWiyr6Y.jpeg', 'media/products/product_6122a6fc6eac93.01782407fVVeQIdVZM.jpeg', 1, '2021-08-22 19:35:24', '2021-08-29 22:01:00'),
(9, 1, 4, 10, 'Bewitching Dark Brown Lehenga Choli', 'bewitching-dark-brown-lehenga-choli', 303, 5, '<p>&gt; Buy Bewitching Dark Brown Lehenga Choli online.</p><p>&gt; Lehenga Choli is Designed with Heavy Thread,Sequance Embroidery Work.</p><p>&gt; Choli Fabric: Soft Net.</p><p>&gt; Choli Color: Dark Brown.</p><p>&gt; Lehenga Color: Dark Brown.</p><p>&gt; Dupatta Color: Dark Brown.</p><p>&gt; Lehenga Fabric: Soft Net.</p><p>&gt; Inner fabric: Soft Net.</p><p>&gt; Dupatta Fabric: Soft Net.</p>', NULL, NULL, '4590.00', NULL, 'https://www.youtube.com/watch?v=nxSDHBdsWqA', 0, 0, 0, 0, 1, 'media/products/product_6122a7b613f5d3.12828791nHiidvJ6tn.jpeg', 'media/products/product_6122a7b61c9ee4.543961334hqRJfb5ec.jpeg', 'media/products/product_6122a7b63fb2f8.84688719rQegcnvDy1.jpeg', 1, '2021-08-22 19:38:30', '2021-08-29 22:00:48'),
(10, 1, 5, 9, 'Stunning Taffeta Party Wear Gown', 'stunning-taffeta-party-wear-gown', 400, 11, '<p>&gt; Buy Stunning Taffeta Party Wear Gown online.</p><p>&gt; Gown beautifully designed with Metalic Foil Work.</p><p>&gt; Fabric: Pista Green.</p><p>&gt; Color: Taffeta.</p>', NULL, NULL, '3590.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 0, 1, 'media/products/product_6122a915d7ec86.15773358brVFSllfyw.jpeg', 'media/products/product_6122a915e435e0.09331770QO5vOrflqj.jpeg', 'media/products/product_6122a91610fa67.74550659urMRb0CXEi.jpeg', 1, '2021-08-22 19:44:22', '2021-08-29 22:00:37'),
(11, 1, 5, 7, 'Resplendent Taffeta Party Wear Gown', 'resplendent-taffeta-party-wear-gown', 401, 9, '<p>&gt; Buy Resplendent Taffeta Party Wear Gown online.</p><p>&gt; Gown beautifully designed with Metalic Foil Work.</p><p>&gt; Fabric: Black.</p><p>&gt; Color: Taffeta.</p>', NULL, NULL, '3288.00', NULL, 'https://www.youtube.com/watch?v=nxSDHBdsWqA', 0, 0, 0, 0, 1, 'media/products/product_6122a9a5ccdc71.54343181Rj7hgYQSfV.jpeg', 'media/products/product_6122a9a5d95a45.28514583LJAvJjlrhi.jpeg', 'media/products/product_6122a9a604bc40.66226008kYKIhbVje8.jpeg', 1, '2021-08-22 19:46:46', '2021-08-29 22:00:25'),
(12, 1, 5, NULL, 'Appealing Blue Party Wear Gown', 'appealing-blue-party-wear-gown', 402, 8, '<p>&gt; Buy Appealing Blue Party Wear Gown online.</p><p>&gt; Gown beautifully designed with Heavy Coding,Embroidery Work.</p><p>&gt; Fabric: Butterfly Net.</p><p>&gt; Dupatta Fabric: Butterfly Net</p><p>&gt; Color: Blue.</p><p>&gt; Dupatta Color: Blue</p>', NULL, NULL, '3890.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 0, 1, 'media/products/product_6122aa7f6d0959.84956913HNl8N88bAs.jpeg', 'media/products/product_6122aa7f7c4b38.18264819vnGyv7wEHd.jpeg', 'media/products/product_6122aa7facb919.10894252BSJqj7Dbhq.jpeg', 1, '2021-08-22 19:50:23', '2021-08-29 22:01:47'),
(13, 1, 6, 1, 'Beautiful Navy-Blue Designer Blouse', 'beautiful-navy-blue-designer-blouse', 500, 15, '<p><font color=\"#212121\" face=\"Roboto, sans-serif\"><span style=\"font-size: 13px;\">&gt; Buy Beautiful Navy-Blue Designer Blouse.</span></font></p><p><font color=\"#212121\" face=\"Roboto, sans-serif\"><span style=\"font-size: 13px;\">&gt; Blouse Color: Navy-Blue.</span></font></p><p><font color=\"#212121\" face=\"Roboto, sans-serif\"><span style=\"font-size: 13px;\">&gt; Blouse Fabric: Denim.</span></font></p><p><font color=\"#212121\" face=\"Roboto, sans-serif\"><span style=\"font-size: 13px;\">&gt; Type: Stretchable,Non-Padded.</span></font></p><p><font color=\"#212121\" face=\"Roboto, sans-serif\"><span style=\"font-size: 13px;\">&gt; Neck: Round Neck.</span></font></p><p><font color=\"#212121\" face=\"Roboto, sans-serif\"><span style=\"font-size: 13px;\">&gt; Sleeves: Elbow Length Sleeves.</span></font></p>', NULL, '34,36,38,40,42', '560.00', NULL, 'https://www.youtube.com/watch?v=nxSDHBdsWqA', 0, 0, 0, 0, 1, 'media/products/product_6122ab91e79643.83252012kYecGtWteZ.jpeg', 'media/products/product_6122ab91f138a0.24100504mA1udqMU5C.jpeg', NULL, 1, '2021-08-22 19:54:58', '2021-08-29 22:01:57'),
(14, 1, 6, 10, 'Excellent Gold Designer Blouse', 'excellent-gold-designer-blouse', 501, 25, '<p><font color=\"#212121\" face=\"Roboto, sans-serif\"><span style=\"font-size: 13px;\">&gt; Buy Excellent Gold Designer Blouse.</span></font></p><p><font color=\"#212121\" face=\"Roboto, sans-serif\"><span style=\"font-size: 13px;\">&gt; Blouse Color: Gold.</span></font></p><p><font color=\"#212121\" face=\"Roboto, sans-serif\"><span style=\"font-size: 13px;\">&gt; Blouse Fabric: Shimmer.</span></font></p><p><font color=\"#212121\" face=\"Roboto, sans-serif\"><span style=\"font-size: 13px;\">&gt; Type: Stretchable,Non-Padded.</span></font></p><p><font color=\"#212121\" face=\"Roboto, sans-serif\"><span style=\"font-size: 13px;\">&gt; Neck: Round Neck.</span></font></p><p><font color=\"#212121\" face=\"Roboto, sans-serif\"><span style=\"font-size: 13px;\">&gt; Sleeves: Elbow Length Sleeves.</span></font></p>', NULL, '34,36,38,40,42', '480.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 0, 0, 'media/products/product_6122ac0a3e35d6.41913976zxA2RsLgWr.jpeg', 'media/products/product_6122ac0a46d1f9.52203624mbGKqV1QjJ.jpeg', NULL, 1, '2021-08-22 19:56:58', '2021-08-22 20:17:20'),
(15, 1, 6, 9, 'Beauteous Pista Designer Blouse', 'beauteous-pista-designer-blouse', 502, 12, '<p><font color=\"#212121\" face=\"Roboto, sans-serif\"><span style=\"font-size: 13px;\">&gt; Buy Beauteous Pista Designer Blouse.</span></font></p><p><font color=\"#212121\" face=\"Roboto, sans-serif\"><span style=\"font-size: 13px;\">&gt; Blouse Fabric: Art Silk.</span></font></p><p><font color=\"#212121\" face=\"Roboto, sans-serif\"><span style=\"font-size: 13px;\">&gt; Color: Pista.</span></font></p>', NULL, '34,36,38,40,42', '650.00', NULL, 'https://www.youtube.com/watch?v=nxSDHBdsWqA', 0, 0, 0, 0, 0, 'media/products/product_6122ac6f4568f4.51379077mWIJQxhWkC.jpeg', 'media/products/product_6122ac6f65ebc3.59450643t85P17Qjp8.jpeg', NULL, 1, '2021-08-22 19:58:39', '2021-08-22 20:17:02'),
(16, 1, 7, 9, 'Fascinating Black Kurtis & Tunic', 'fascinating-black-kurtis-tunic', 600, 12, '<p><font color=\"#212121\" face=\"Roboto, sans-serif\"><span style=\"font-size: 13px;\">&gt; Buy Fascinating Black Kurtis &amp; Tunic Online.</span></font></p><p><font color=\"#212121\" face=\"Roboto, sans-serif\"><span style=\"font-size: 13px;\">&gt; Fabric: Rayon.</span></font></p><p><font color=\"#212121\" face=\"Roboto, sans-serif\"><span style=\"font-size: 13px;\">&gt; Color: Black.</span></font></p><p><font color=\"#212121\" face=\"Roboto, sans-serif\"><span style=\"font-size: 13px;\">&gt; Bottom Color: Multi.</span></font></p><p><font color=\"#212121\" face=\"Roboto, sans-serif\"><span style=\"font-size: 13px;\">&gt; The Bottom shown in the image is not the part of the product.</span></font></p>', NULL, '36,38,40,42,44', '1299.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 0, 0, 'media/products/product_6122af070b3371.800913594VkfpVfHSP.jpeg', 'media/products/product_6122af074066c0.55022929OKW4nq2kqr.jpeg', NULL, 1, '2021-08-22 20:09:43', '2021-08-22 20:16:50'),
(17, 1, 7, 9, 'Pretty Red Maroon Kurtis & Tunic', 'pretty-red-maroon-kurtis-tunic', 601, 12, '<p>&gt; Buy Pretty Red Maroon Kurtis &amp; Tunic Online.</p><p>&gt; Fabric: Rayon.</p><p>&gt; Color: Red maroon.</p><p>&gt; Bottom Color: Multi.</p><p>&gt; The Bottom shown in the image is not the part of the product.</p>', NULL, '36,38,40,42,44', '1450.00', NULL, 'https://www.youtube.com/watch?v=nxSDHBdsWqA', 0, 0, 0, 0, 0, 'media/products/product_6122af6eb8ee15.287497121zPHk7LmdN.jpeg', 'media/products/product_6122af6ef04e22.69388988aNb8GbH1IM.jpeg', 'media/products/product_6122af6f18f692.82440614w7oUke5G0n.jpeg', 1, '2021-08-22 20:11:27', '2021-08-24 05:07:05'),
(18, 1, 7, 1, 'Alluring Pink Kurtis & Tunic', 'alluring-pink-kurtis-tunic', 603, 8, '<p>&gt; Buy Alluring Pink Kurtis &amp; Tunic Online.</p><p>&gt; Work:Printed Work.</p><p>&gt; Fabric: Pure Maslin.</p><p>&gt; Color: Pink.</p><p>&gt; The Bottom shown in the image is not the part of the product.</p>', NULL, '36,38,40,42,44', '999.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 0, 0, 'media/products/product_6122afeaea3b69.38306787crwfSCHn88.jpeg', 'media/products/product_6122afeb1a49e5.00973267qihfDtNqwG.jpeg', 'media/products/product_6122afeb3a59d2.899268104O81BxnIPD.jpeg', 1, '2021-08-22 20:13:31', '2021-08-22 20:16:16'),
(19, 1, 8, 1, 'Marvelous Blue Western Dress', 'marvelous-blue-western-dress', 700, 22, '<p>&gt; Buy Marvelous Blue Western Dress Online.</p><p>&gt; Fabric: Polyester.</p><p>&gt; Color: Blue.</p><p>&gt; The Bottom shown in the image is not the part of the product.</p>', NULL, '38,40,42,44', '820.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 1, 0, 0, 0, 0, 'media/products/product_6122b1fdb78837.94361165xRUtlojkuK.jpeg', 'media/products/product_6122b1fde8ee07.63582214oeT2enluZa.jpeg', 'media/products/product_6122b1fe138cb0.18401615hFqv55SbJg.jpeg', 1, '2021-08-22 20:22:22', '2021-08-29 22:11:29'),
(20, 1, 8, 1, 'Pretty Black Western Dress', 'pretty-black-western-dress', 701, 18, '<p>&gt; Buy Pretty Black Western Dress Online.</p><p>&gt; Fabric: Crepe.</p><p>&gt; Color: Black.</p><p>&gt; The Bottom shown in the image is not the part of the product.</p>', NULL, '38,40,42,44', '950.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 1, 0, 0, 0, 0, 'media/products/product_6122b28563fbd8.47224541cxRYpv8Q5K.jpeg', 'media/products/product_6122b285854018.68104725qWDVtWlmDl.jpeg', 'media/products/product_6122b285a6dc43.98096323jLQxV0UtVu.jpeg', 1, '2021-08-22 20:24:37', '2021-08-29 22:11:22'),
(21, 1, 8, 10, 'Charming Lightred Western Dress', 'charming-lightred-western-dress', 702, 12, '<p>Size are available in Select Options</p><p>If you are taking the measurement from body then please 2 inch margin for chest to make the item wearable. For example, if chest size is 34 then 36.5 (M) size will be perfect.</p>', 'Lightred', '38,40,42,44', '1020.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 1, 0, 0, 0, 0, 'media/products/product_6122b2ff26fe28.82034774egno59qaQi.jpeg', 'media/products/product_6122b2ff4f7995.43746374JfRSLJtsfI.jpeg', 'media/products/product_6122b2ff6e86f3.79092630F0wTUvd3v2.jpeg', 1, '2021-08-22 20:26:39', '2021-08-29 22:11:12'),
(22, 9, 10, 3, 'New Good Looking & Denim Jeans Pant For Men', 'new-good-looking-denim-jeans-pant-for-men', 800, 13, '<p>Product details of New Good Looking &amp; Stylish Denim Jeans Pant For Men Product type : New Good Looking &amp; Stylish Denim Jeans Pant Material : Denim Quality : Export Gender : Men Colour : As given picture Fit : Slim Fit Smart &amp; Stylish Made In Bangladesh Available Size :- Size : 28, 30, 32, 34, 36.<br></p>', NULL, '28,30,31,32,33,34,35,36', '580.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 1, 0, 0, 0, 0, 'media/products/product_6122b8097c5382.567789060PWHvoT9fQ.png', 'media/products/product_6122b809ab44e0.93460376QvRSkcRCuj.png', 'media/products/product_6122b809c44797.82367420y2Z60IZKPW.png', 1, '2021-08-22 20:48:09', '2021-08-29 22:10:59'),
(23, 9, 10, 3, 'Denim Gabardine Cropped Trousers', 'denim-gabardine-cropped-trousers', 801, 15, '<p class=\"product-detail-text-block\" style=\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.4; font-size: 15px; white-space: pre-line; color: rgb(51, 51, 51); font-family: &quot;DIN Regular&quot;, &quot;Helvetica Neue&quot;, sans-serif;\">Made with 100% Cotton.</p><p style=\"padding: 10px 0px; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: &quot;DIN Regular&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 15px;\">Please Note: All Bags, Handbags, Jewelry, Beauty Products, Hats, Scarves, and Gloves from this boutique (Ron Herman) are FINAL SALE.</p>', NULL, '28,30,31,32,33,34,35,36', '2580.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 1, 0, 0, 0, 0, 'media/products/product_6122b9954d1699.40910058qhD0nQwcQq.jpg', 'media/products/product_6122b995887c17.009164934MWR5IqjBV.jpg', 'media/products/product_6122b995bccc68.06323247s63Zrbfa74.jpg', 1, '2021-08-22 20:54:45', '2021-08-29 22:10:51'),
(24, 9, 10, 5, 'Adidas Y-3 Classic Light L Ripstop Utility Pants - Shadow Green', 'adidas-y-3-classic-light-l-ripstop-utility-pants-shadow-green', 802, 33, '<ul class=\"list\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-inline-start: 0px; padding: 0px; list-style-position: inside; list-style-type: none; color: rgb(51, 51, 51); font-family: &quot;DIN Regular&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 15px;\"><li class=\"subtext\" style=\"line-height: 16px; font-size: 12px; margin: 0px 0px 10px;\">Estimated delivery dates (when provided) are for orders placed today considering typical order processing and shipping times to&nbsp;Bangladesh. However, weather and other unforeseen circumstances may occasionally cause delays.</li></ul>', NULL, '28,30,31,32,33,34,35,36', '3500.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 1, 0, 0, 0, 'media/products/product_6122bac9d1d607.46817613rfuO2ZrcuE.jpg', 'media/products/product_6122baca0157d0.29314400dpo33tuODT.jpg', 'media/products/product_6122baca271c93.53413527zulsn97Q6X.jpg', 1, '2021-08-22 20:59:54', '2021-08-29 22:16:17'),
(25, 9, 11, 4, 'Men\'s Classic T-Shirts', 'mens-classic-t-shirts', 900, 25, '<p><span style=\"color: rgb(117, 118, 123); font-family: Tahoma, Arial, helvetica, sans-serif;\">Adventure Awaits Men\'s Classic T-Shirt</span><br></p>', 'White,Black,Ash Gray,Baby Blue,Kelly Green', 'S,M,L,XL,XXL', '2064.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 1, 0, 0, 0, 'media/products/product_6122bf4c1d7be0.74293177XvQWQpztQM.jpg', 'media/products/product_6122bfeae67197.04028517iGpuFjsRxP.jpg', NULL, 1, '2021-08-22 21:19:08', '2021-08-29 22:16:08'),
(26, 9, 11, 2, 'Men\'s Long Sleeve T-Shirts', 'mens-long-sleeve-t-shirts', 901, 20, '<p><span style=\"color: rgb(117, 118, 123); font-family: Tahoma, Arial, helvetica, sans-serif;\">Pepsi Can Doodle Women\'s Long Sleeve Dark T-Shirt Men\'s Long Sleeve T-Shirt</span><br></p>', 'Black,White,Charcoal,Ash Gray,Navy', 'S,M,L,XL,XXL,XXXL', '2280.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 1, 0, 0, 0, 'media/products/product_6122c138086b09.87083540iIXNNwzGX4.jpg', 'media/products/product_6122c13817de49.74204329uOsYZIMceU.jpg', 'media/products/product_6122c1382096d2.56457486vu4iASDc5C.jpg', 1, '2021-08-22 21:27:20', '2021-08-29 22:15:53'),
(27, 9, 11, 8, 'Men\'s Comfort Colors® T-Shirts', 'mens-comfort-colors-t-shirts', 902, 23, '<p><span style=\"color: rgb(117, 118, 123); font-family: Tahoma, Arial, helvetica, sans-serif;\">\'Cycologist\' Dark Men\'s Comfort Colors® T-Shirt</span><br></p>', 'Charcoal,Gray,Sea Foam', 'S,M,L,XL,XXL', '1850.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 1, 0, 0, 0, 'media/products/product_6122c1c32eaff7.98557931frxZPBcmhd.jpg', 'media/products/product_6122c1c3417991.698985120Qce5KGHf5.jpg', 'media/products/product_6122c1c34c4a60.13507055XtPZLnIPAj.jpg', 1, '2021-08-22 21:29:39', '2021-08-29 22:15:44'),
(28, 9, 12, 8, 'Men Oxford shirts', 'men-oxford-shirts', 1000, 5, '<p><strong style=\"box-sizing: border-box; font-weight: bold; color: rgb(34, 34, 34); font-family: Verdana, Geneva, sans-serif; font-size: 15px;\">Men</strong><span style=\"color: rgb(34, 34, 34); font-family: Verdana, Geneva, sans-serif; font-size: 15px;\">&nbsp;Oxford shirts are a very versatile piece. They come in a variety of designs and styles, making them perfect to give your outfit a different look every day – and they are one of the only shirt styles that are easy to adapt for a smart-casual look, too.</span><br></p>', 'bright blue', 'S,M,XL,XXL', '4520.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 1, 0, 0, 0, 'media/products/product_6122c4d0031ba6.23228200pNt5T5pWtB.jpg', NULL, NULL, 1, '2021-08-22 21:42:40', '2021-08-29 22:15:34'),
(29, 9, 12, 5, 'Men Washed Demin Shirts', 'men-washed-demin-shirts', 1001, 25, '<h1 class=\"product-title-text\" data-spm-anchor-id=\"a2g0o.detail.1000016.i1.661e2d47otY2CS\" style=\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px; font-size: 14px; line-height: 19px; width: fit-content; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;\">2018 Men Washed Demin Shirts Long Sleeves Slim Fit Jean Shirts For Men Cowboy Tees Tops Classic Casual Hombre Outerwear</h1>', NULL, 'S,M,L,XL,XXL', '2850.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 1, 0, 0, 0, 'media/products/product_6122c5dce96d94.42205034K01pT8zIMo.png', 'media/products/product_6122c5dd0ea2f9.70256888IWyGB5ebhy.png', 'media/products/product_6122c5dd2722c3.78618581FadC6J8NAu.png', 1, '2021-08-22 21:47:09', '2021-08-29 22:15:25'),
(30, 9, 12, 3, 'Men Long Sleeve Shirt', 'men-long-sleeve-shirt', 1002, 13, '<h1 class=\"product-title-text\" data-spm-anchor-id=\"a2g0o.detail.1000016.i3.798679acB2xTEX\" style=\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px; font-size: 14px; line-height: 19px; width: fit-content; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Roboto, Arial, Helvetica, sans-serif, SimSun;\">2021 New Autumn Fashion Brand Men Clothes Slim Fit Men Long Sleeve Shirt Men Polka Dot Casual Men Shirt Social Plus Size M-5XL</h1>', NULL, 'L,XL,2XL,3XL,4XL', '3150.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 1, 0, 0, 0, 'media/products/product_6122c6c36ba971.85800718NvZj2mC3A5.png', 'media/products/product_6122c6c38d7f72.67077627yJp77LiUws.png', NULL, 1, '2021-08-22 21:50:59', '2021-08-29 22:15:12'),
(31, 9, 13, 2, 'Navy Printed Polo Shirt', 'navy-printed-polo-shirt', 1100, 23, '<p>Navy printed polo shirt made with 100% cotton pique fabric. Featuring red &amp; white printed dots &amp; contrasting collar.</p><p>Product Code : BRM-41-370</p><p>100% Cotton.</p><p><span style=\"font-size: 0.875rem;\">This product is currently out of stock and unavailable.</span></p>', NULL, 'S,M,L,XL,2XL', '780.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 1, 0, 0, 0, 'media/products/product_6122dfd584f500.13781768SySkbEQJwB.jpg', 'media/products/product_6122dfd6200536.25741532144ikE74k7.jpg', 'media/products/product_6122dfd69997f7.69645563JOnV93X4GD.jpg', 1, '2021-08-22 23:37:59', '2021-09-06 11:15:14'),
(32, 9, 13, 2, 'AUSTRALIAN BY LALPINA LOGO POLO SHIRT DARK NAVY', 'australian-by-lalpina-logo-polo-shirt-dark-navy', 1101, 21, '<p>Retro sports inspired polo shirt from Australian Australian by L\'alpina,</p><p> a popular 80s brand worn by the UK\'s elite football casuals, produce some classic, retro sports inspired clothing and this release with contrasting collar and cuff detail is a must have piece for any wardrobe. Featuring the Australian kangaroo logo embroidered onto the chest and made from a light, </p><p>pique cotton thats&nbsp;<span style=\"font-size: 0.875rem;\">soft to the touch and extremely comfortable on. Made in Italy.</span></p>', NULL, 'M,L,XL,2XL', '1100.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 1, 0, 0, 0, 'media/products/product_6122e06bcc1146.35725240EYn0C1gOkn.jpg', 'media/products/product_6122e06be236e2.14264471uYJTpLkSzL.jpg', 'media/products/product_6122e06c235fc6.83265793GdSOOzPOKw.jpg', 1, '2021-08-22 23:40:28', '2021-08-29 22:14:39'),
(33, 9, 13, 4, 'Sergio Tacchini New Young Line Polo Shirt White/Navy', 'sergio-tacchini-new-young-line-polo-shirt-whitenavy', 1102, 14, '<p>Sergio Tacchini New Young Line Polo Shirt in White/Navy</p><p>A style worn by Sergio Tacchini sponsored players McEnroe &amp; Cash in the 80s</p><p>Ribbed collar &amp; cuffs</p><p>Contrasting block colour on the shoulders</p><p>Chest stripes</p><p>Embroided Sergio Tacchini logo on chest</p><p>Model is a 39\" chest &amp; is wearing a size Medium</p><p>Made from 100% cotton</p><p>Machine washable</p><p>Code: 00166984</p>', NULL, 'M,L,XL,2XL', '950.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 1, 0, 0, 0, 'media/products/product_6122e104ad9086.63771120IAaYSg4Qoj.jpg', 'media/products/product_6122e104d4d514.21999778Wszg6nbGOF.jpg', 'media/products/product_6122e10500ba49.94891599nfum98IJ9h.jpg', 1, '2021-08-22 23:43:01', '2021-08-29 22:14:29'),
(34, 9, 14, 17, 'New LIGE Watches Men Luxury Brand', 'new-lige-watches-men-luxury-brand', 1200, 4, '<p>Business style &amp; Sports As we all know, there are very few smart watches suitable for business occasions. Imagine if there is a perfect combination of business style and smart watch style? Wonderful things will always happen in this world. We have done it. The prudent qualities can really be...<br></p>', NULL, NULL, '4500.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 1, 0, 'media/products/product_6122e4c2900858.423371243CBLfZgLLX.png', 'media/products/product_6122e4c2cc85f6.17934089vO19UwmzTT.png', 'media/products/product_6122e4c30a8954.62706195vpeeqrdcgp.png', 1, '2021-08-22 23:58:59', '2021-08-29 22:37:27'),
(35, 9, 14, 16, 'Apple Watch Sport - 42 mm, Black - Smart', 'apple-watch-sport-42-mm-black-smart', 1201, 15, '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif;\">Apple Watch Sport - 42mm Black - Smart watch with Black sport band - Gold Refurbished 1 Year Return To Base Warranty</span></p><div class=\"title\" style=\"margin: 0px; outline: none; padding: 0px; box-sizing: border-box; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;\"><span style=\"margin: 0px; outline: none; padding: 0px; box-sizing: border-box; font-weight: 600; font-size: 21px;\">Products specifications</span></div><div class=\"table-wrapper\" style=\"margin: 0px; outline: none; padding: 0px; box-sizing: border-box; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;\"><table class=\"data-table\" style=\"margin: 0px; outline: none; padding: 0px; box-sizing: border-box; width: 700px; border-collapse: separate; border-width: 0px 0px 1px; border-style: solid; border-color: rgb(221, 221, 221); border-radius: 0px; border-spacing: 0px;\"><colgroup style=\"margin: 0px; outline: none; padding: 0px; box-sizing: border-box;\"><col width=\"33.333%\" style=\"margin: 0px; outline: none; padding: 0px; box-sizing: border-box;\"><col style=\"margin: 0px; outline: none; padding: 0px; box-sizing: border-box;\"></colgroup><tbody style=\"margin: 0px; outline: none; padding: 0px; box-sizing: border-box;\"><tr class=\"odd\" style=\"margin: 0px; outline: none; padding: 0px; box-sizing: border-box;\"><td class=\"spec-name\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px; border-style: solid; border-color: rgb(221, 221, 221); background: rgb(246, 246, 246); border-radius: 0px !important;\">Product Type</td><td class=\"spec-value\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px 0px; border-style: solid; border-color: rgb(221, 221, 221); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-radius: 0px !important;\">Smart watch</td></tr><tr class=\"even\" style=\"margin: 0px; outline: none; padding: 0px; box-sizing: border-box;\"><td class=\"spec-name\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px; border-style: solid; border-color: rgb(221, 221, 221); background: rgb(246, 246, 246); border-radius: 0px !important;\">Color</td><td class=\"spec-value\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px 0px; border-style: solid; border-color: rgb(221, 221, 221); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-radius: 0px !important;\">Black</td></tr><tr class=\"odd\" style=\"margin: 0px; outline: none; padding: 0px; box-sizing: border-box;\"><td class=\"spec-name\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px; border-style: solid; border-color: rgb(221, 221, 221); background: rgb(246, 246, 246); border-radius: 0px !important;\">Connectivity</td><td class=\"spec-value\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px 0px; border-style: solid; border-color: rgb(221, 221, 221); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-radius: 0px !important;\">Wi-Fi, Bluetooth</td></tr><tr class=\"even\" style=\"margin: 0px; outline: none; padding: 0px; box-sizing: border-box;\"><td class=\"spec-name\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px; border-style: solid; border-color: rgb(221, 221, 221); background: rgb(246, 246, 246); border-radius: 0px !important;\">Features</td><td class=\"spec-value\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px 0px; border-style: solid; border-color: rgb(221, 221, 221); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-radius: 0px !important;\">Call handling, hands-free, missed calls notification, music remote handling, microphone, calendar notification, SMS notification, Email notification, changeable strap, camera remote control, listening to music, MagSafe technology with inductive charging, Force Touch, Digital Crown, Retina Display technology, Digital Touch , accelerometer, ambient light sensor, gyro sensor, heart rate</td></tr><tr class=\"odd\" style=\"margin: 0px; outline: none; padding: 0px; box-sizing: border-box;\"><td class=\"spec-name\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px; border-style: solid; border-color: rgb(221, 221, 221); background: rgb(246, 246, 246); border-radius: 0px !important;\">Run Time (Up To)</td><td class=\"spec-value\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px 0px; border-style: solid; border-color: rgb(221, 221, 221); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-radius: 0px !important;\">18 hours</td></tr><tr class=\"even\" style=\"margin: 0px; outline: none; padding: 0px; box-sizing: border-box;\"><td class=\"spec-name\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px; border-style: solid; border-color: rgb(221, 221, 221); background: rgb(246, 246, 246); border-radius: 0px !important;\">Recharge Time</td><td class=\"spec-value\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px 0px; border-style: solid; border-color: rgb(221, 221, 221); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-radius: 0px !important;\">2.5 hour(s)</td></tr><tr class=\"odd\" style=\"margin: 0px; outline: none; padding: 0px; box-sizing: border-box;\"><td class=\"spec-name\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px; border-style: solid; border-color: rgb(221, 221, 221); background: rgb(246, 246, 246); border-radius: 0px !important;\">Run Time Details</td><td class=\"spec-value\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px 0px; border-style: solid; border-color: rgb(221, 221, 221); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-radius: 0px !important;\">Talk time - up to 3 hour(s) ¦ Audio playback - up to 6.5 hour(s)</td></tr><tr class=\"even\" style=\"margin: 0px; outline: none; padding: 0px; box-sizing: border-box;\"><td class=\"spec-name\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px; border-style: solid; border-color: rgb(221, 221, 221); background: rgb(246, 246, 246); border-radius: 0px !important;\">Dimensions (WxDxH)</td><td class=\"spec-value\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px 0px; border-style: solid; border-color: rgb(221, 221, 221); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-radius: 0px !important;\">33.3 mm x 10.5 mm x 38.6 mm</td></tr><tr class=\"odd\" style=\"margin: 0px; outline: none; padding: 0px; box-sizing: border-box;\"><td class=\"spec-name\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px; border-style: solid; border-color: rgb(221, 221, 221); background: rgb(246, 246, 246); border-radius: 0px !important;\">Weight</td><td class=\"spec-value\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px 0px; border-style: solid; border-color: rgb(221, 221, 221); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-radius: 0px !important;\">25 g</td></tr><tr class=\"even\" style=\"margin: 0px; outline: none; padding: 0px; box-sizing: border-box;\"><td class=\"spec-name\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px; border-style: solid; border-color: rgb(221, 221, 221); background: rgb(246, 246, 246); border-radius: 0px !important;\">Vibrating Alert</td><td class=\"spec-value\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px 0px; border-style: solid; border-color: rgb(221, 221, 221); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-radius: 0px !important;\">Yes</td></tr><tr class=\"odd\" style=\"margin: 0px; outline: none; padding: 0px; box-sizing: border-box;\"><td class=\"spec-name\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px; border-style: solid; border-color: rgb(221, 221, 221); background: rgb(246, 246, 246); border-radius: 0px !important;\">Min Operating Temperature</td><td class=\"spec-value\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px 0px; border-style: solid; border-color: rgb(221, 221, 221); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-radius: 0px !important;\">0 °C</td></tr><tr class=\"even\" style=\"margin: 0px; outline: none; padding: 0px; box-sizing: border-box;\"><td class=\"spec-name\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px; border-style: solid; border-color: rgb(221, 221, 221); background: rgb(246, 246, 246); border-radius: 0px !important;\">Max Operating Temperature</td><td class=\"spec-value\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px 0px; border-style: solid; border-color: rgb(221, 221, 221); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-radius: 0px !important;\">35 °C</td></tr><tr class=\"odd\" style=\"margin: 0px; outline: none; padding: 0px; box-sizing: border-box;\"><td class=\"spec-name\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px; border-style: solid; border-color: rgb(221, 221, 221); background: rgb(246, 246, 246); border-radius: 0px !important;\">Humidity Range Operating</td><td class=\"spec-value\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px 0px; border-style: solid; border-color: rgb(221, 221, 221); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-radius: 0px !important;\">5 - 95% (non-condensing)</td></tr><tr class=\"even\" style=\"margin: 0px; outline: none; padding: 0px; box-sizing: border-box;\"><td class=\"spec-name\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px; border-style: solid; border-color: rgb(221, 221, 221); background: rgb(246, 246, 246); border-radius: 0px !important;\">Max Altitude Operating</td><td class=\"spec-value\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px 0px; border-style: solid; border-color: rgb(221, 221, 221); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-radius: 0px !important;\">5000 m</td></tr><tr class=\"odd\" style=\"margin: 0px; outline: none; padding: 0px; box-sizing: border-box;\"><td class=\"spec-name\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px; border-style: solid; border-color: rgb(221, 221, 221); background: rgb(246, 246, 246); border-radius: 0px !important;\">Tech Trade Warranty</td><td class=\"spec-value\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; min-width: 50px; border-width: 1px 1px 0px 0px; border-style: solid; border-color: rgb(221, 221, 221); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-radius: 0px !important;\">1 year return to base</td></tr><tr class=\"even\" style=\"margin: 0px; outline: none; padding: 0px; box-sizing: border-box;\"><td class=\"spec-name\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; border-radius: 0px 0px 0px 8px; min-width: 50px; border-width: 1px 1px 0px; border-style: solid; border-color: rgb(221, 221, 221); background: rgb(246, 246, 246);\">Factory Refurbished</td><td class=\"spec-value\" style=\"margin: 0px; outline: none; padding: 10px; box-sizing: border-box; width: auto; border-radius: 0px 0px 8px; min-width: 50px; border-width: 1px 1px 0px 0px; border-style: solid; border-color: rgb(221, 221, 221); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Gold Grade Refrubished</td></tr></tbody></table></div><p><br></p>', NULL, NULL, '14190.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 1, 0, 'media/products/product_6122e58bede650.97541022ofrRGwMakQ.jpeg', NULL, NULL, 1, '2021-08-23 00:02:20', '2021-08-29 22:37:18'),
(36, 9, 14, 12, 'Oppo Watch 41mm Black - Price & Specifications', 'oppo-watch-41mm-black-price-specifications', 1202, 5, '<p><span style=\"color: rgb(102, 102, 102); font-family: Lato, sans-serif; font-size: 15px;\">Keep Up. Keep in Touch.Flexible Dual-Curved Display | Wear OS by Google™ | Up to 21-Day Battery Life Watch VOOC Flash Charging | Workout and Health Tracking.</span><br></p>', NULL, NULL, '45000.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 1, 0, 'media/products/product_6122e62b582dc5.64477300TcgSc4U640.jpg', NULL, NULL, 1, '2021-08-23 00:04:59', '2021-08-29 22:37:09'),
(37, 15, 16, NULL, 'Water Filter Mini', 'water-filter-mini', 1300, 125, '<p><font color=\"#5d5a5a\" face=\"SolaimanLipi, helvetica, verdana\">tem type: water </font></p><p><font color=\"#5d5a5a\" face=\"SolaimanLipi, helvetica, verdana\">filterColor: green, pink, whiteSize: 3.8X7cm</font></p><p><font color=\"#5d5a5a\" face=\"SolaimanLipi, helvetica, verdana\">Applicable objects: kitchen, bathroom, </font></p><p><font color=\"#5d5a5a\" face=\"SolaimanLipi, helvetica, verdana\">etcMaterial: magnet + plastic + medical stone</font><br></p>', NULL, NULL, '158.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 1, 0, 'media/products/product_6122f5ccdb07c6.72778452231pGdCs31.png', NULL, NULL, 1, '2021-08-23 01:11:41', '2021-08-29 22:37:00'),
(38, 15, 16, NULL, 'Charger Light LED', 'charger-light-led', 1301, 80, '<p>High capacity to 2000mAh </p><p>BatteryRun Time : 4 HoursSuper brightness white color LED15-pcs LED lighting on the right sideTotal 30-pcs LED lighting on both side15-pcs LED1.5W and can work 6-HoursTotal 30-pcs LED 3.0W and can work 3-HouesPush the switch is right side lighting,push again is both side lightingWith AV charging 2-pin Cable Charger<br></p>', NULL, NULL, '455.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 1, 0, 'media/products/product_6122f67c36b6d6.32864967Zkr2Hdz1aj.png', NULL, NULL, 1, '2021-08-23 01:14:36', '2021-08-29 22:36:51'),
(39, 15, 16, NULL, 'Portable Hook USB LED Bulb', 'portable-hook-usb-led-bulb', 1302, 160, '<p>Specification:Height 24cm, Width 15cm1. Power: 88W</p><p>2. Charging time: 8h</p><p>3. Discharging time: 8h</p><p>4. Charging input: AC220V-240V 50/60Hz</p><p>5. CCT: 6500K white</p><p>6. Life span: 50000h</p><p>7. Dimmable: 5 stage (Strong/Weak/Sleeping/Flashing/SOS)</p><p>8. Package include: LED bulb with bracket/USB charger<br></p>', NULL, NULL, '176.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 1, 0, 'media/products/product_6122f705dbbfe9.66561201uB7Racm1cM.png', NULL, NULL, 1, '2021-08-23 01:16:53', '2021-08-29 22:36:41'),
(40, 15, 17, 17, 'Melamain Laminate Board H- 6 inch, W-2ft, D-6 inch. WALL SHELVES', 'melamain-laminate-board-h-6-inch-w-2ft-d-6-inch-wall-shelves', 1400, 5, '<p>Brand- AB FURNITUREH</p><p>- 6 inchW</p><p>- 2ftD</p><p>- 6 inch</p>', NULL, NULL, '1650.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 1, 0, 'media/products/product_6123e4c186e5c8.44358890utbpyfsiSd.png', NULL, NULL, 1, '2021-08-23 18:11:13', '2021-08-29 22:36:29'),
(41, 15, 17, 16, '12U mini server rack', '12u-mini-server-rack', 1401, 8, '<p>Glass front door</p><p>Sheet steel rear door</p><p>Detachable side panels</p><p>Bottom and roof panel with ventilation holes</p><p>4 x 19 inch profiles with height indications</p><p>Doors can be installed both left and right handed</p><p>Cable entry at top and bottom</p><p>Front door, rear door and sidepanels with locks</p><p>Supplied ready to use</p><p>Maximum load weight: 500kg</p><p>Completely dismountable</p>', NULL, NULL, '31390.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 1, 0, 'media/products/product_6123e5b8c556a8.64864684qUBUm43nYK.jpg', 'media/products/product_6123e5b8e06080.769021323LRYoxqZPb.jpg', 'media/products/product_6123e5b8f2dea2.29072449Vb4K3eVXCJ.jpg', 1, '2021-08-23 18:15:21', '2021-08-29 22:36:14'),
(42, 15, 17, 7, 'Malaysian wood wardrobe', 'malaysian-wood-wardrobe', 1402, 8, '<p>MATERIAL- Malasiyan boardheight- 48 inches (4feet)weight- 48 inches (4 feet)color- wooden/ chocolate<br></p>', NULL, NULL, '9500.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 1, 0, 'media/products/product_6123e6576f1f79.84650744wDVSIbZEKu.png', NULL, NULL, 1, '2021-08-23 18:17:59', '2021-08-29 22:36:00'),
(43, 15, 18, 13, 'Tools Storage Box', 'tools-storage-box', 1500, 25, '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</span><br></p>', NULL, NULL, '1340.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 1, 0, 'media/products/product_61245ab950bbf5.55915207rk5MBQykKe.png', 'media/products/product_61245ab9aa4f22.19763673tmmL81OUZy.png', 'media/products/product_61245ab9c32069.43653741pwXH7vZGpg.png', 1, '2021-08-24 02:34:33', '2021-08-29 22:35:48'),
(44, 15, 18, 7, 'Adjustable Wrench 8 (210mm)', 'adjustable-wrench-8-210mm', 1501, 25, '<p>Brand: Hark Caput• Model: YT-404008• Size: 210mm, 8\"• Adjustable clamp size:0-30mm• Professional Quality at affordable prices• Chrome finish• Two-component plastic handle• Packing: plastic hanger<br></p>', NULL, NULL, '455.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 0, 0, 'media/products/product_61245b5367b0d0.43875367v7HYHrhyzK.png', 'media/products/product_61245b537705e0.83309133CGop73TEiw.png', NULL, 1, '2021-08-24 02:37:07', '2021-08-24 02:37:07'),
(45, 15, 18, 8, 'TOLSEN 8 in 1 Interchangeable Screwdriver Set with Case 20039', 'tolsen-8-in-1-interchangeable-screwdriver-set-with-case-20039', 1502, 13, '<p>CERTIFIED ORIGINAL TOLSEN BRANDModel:20039Size:SL: 3.0×65, 5.0×65, 6.0x65mmPH: PH0x65, PH1x65, PH2x65mm1pc scratch awl 3x65mm1pc tack remover 5x65mm1pc handlePacking: plastic boxDescriptionProduct Description:TOLSEN 8 in 1 Interchangeable Screwdriver Set w/ Case 20039. Tolsen 20039 8 in 1 Screwdriver Set consists of different tools as the tack remover, handle, scratch awl, etc. All the tools are crafted from the durable materials, so you don’t have to worry about anything at all.Feature &amp; Benefit:Tolsen 20039 8 in 1 Screwdriver Set consists of different tools as the tack remover, handle, scratch awl, etc. All the tools are crafted from the durable materials, so you don’t have to worry about anything at all.Premium quality screwdriver setCrafted from the quality materialContains 8 different sizes and types of screwdriversPortableLightweightPacked in a durable plastic boxSpecification:Brand: TolsenModel:20039Size:SL: 3.0×65, 5.0×65, 6.0x65mmPH: PH0x65, PH1x65, PH2x65mm1pc scratch awl 3x65mm1pc tack remover 5x65mm1pc handlePacking: plastic box<br></p>', NULL, NULL, '550.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 0, 0, 'media/products/product_61245bfee43124.16531046PPDiuq8Qq9.png', 'media/products/product_61245bff0415a7.69995512GiYlfrDzXF.png', 'media/products/product_61245bff13cbe6.88371425VHWNM2AwcH.png', 1, '2021-08-24 02:39:59', '2021-08-24 02:39:59');
INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `brand_id`, `product_title`, `slug`, `product_code`, `product_quantity`, `product_details`, `product_color`, `product_size`, `selling_price`, `discount_price`, `video_link`, `hot_deal`, `best_seller`, `special_offer`, `trand`, `new_arrival`, `image_one`, `image_two`, `image_three`, `status`, `created_at`, `updated_at`) VALUES
(46, 19, 20, 18, 'Walton Refrigerator', 'walton-refrigerator', 1600, 142, '<p><span style=\"color: rgb(34, 34, 34); font-family: Tahoma, Helvetica, Arial, sans-serif; font-size: 13px; text-align: justify;\">Gross Volume: 17cft Gross Volume: 295 Liters Net Volume: 275 Liters Net Weight: 66.4Kg Defrosting: Automatic Condenser: Copper&nbsp;</span><span style=\"box-sizing: border-box; font-weight: 700; color: rgb(34, 34, 34); font-family: Tahoma, Helvetica, Arial, sans-serif; font-size: 13px; text-align: justify;\">Electrical Features</span><span style=\"color: rgb(34, 34, 34); font-family: Tahoma, Helvetica, Arial, sans-serif; font-size: 13px; text-align: justify;\">&nbsp;Volt: 220v~240v Hz: 50&nbsp;</span><span style=\"box-sizing: border-box; font-weight: 700; color: rgb(34, 34, 34); font-family: Tahoma, Helvetica, Arial, sans-serif; font-size: 13px; text-align: justify;\">Special Features</span><span style=\"color: rgb(34, 34, 34); font-family: Tahoma, Helvetica, Arial, sans-serif; font-size: 13px; text-align: justify;\">&nbsp;Wide Climate Design European Class 100% Copper Condenser Magical Nano Silver Technology in Plastic</span><br></p>', NULL, NULL, '35900.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 0, 0, 'media/products/product_61245eff8b81c1.53538706DHacBTX3JZ.jpg', NULL, NULL, 1, '2021-08-24 02:52:47', '2021-08-29 21:35:35'),
(47, 19, 20, 13, 'Samsung RH77H90507F Side by Side 768L (CODE - 490183)', 'samsung-rh77h90507f-side-by-side-768l-code-490183', 1601, 55, '<p>The Samsung Food Showcase Refrigerator’s ShowCase is a “fridge within a fridge”, located at the front, for quick and easy access to all of your family’s favourite and frequently used foods.Different zones allow even faster access to your favouritesShowcase is designed for the way your family Lives &amp; eats, so everyone can easily find what they want from it. It includes 6 generous cases to store specific types of food (cheese, sauces, drinks, snacks, kids, and multi items) and is divided into 3 zones for different family members, so it’s really easy for everyone to find what they want.Capturing cold airThe Samsung Food Showcase Refrigerator’s Metal Cooling guard on the inside of the front door maintains the optimal temperature within the fridge, so food stays fresh, even if you frequently open and close the ShowCase door. The metal retains the cold from the air, and its good thermal conductivity quickly helps to restore any heat loss when the door is shut again, so foods are preserved better.Timeless chic designThe Samsung Food Showcase Refrigerator’s refined, premium style brings refined elegance to any modern kitchen. A timeless solid metal finish incorporates a stainless steel Ice &amp; Water Dispenser and is accentuated with the clear, ice blue text of the display. Its counter-depth design works in harmony with your kitchen and doesn’t stick out, so there’s no need for any special installation.Cools every cornerThe Samsung Food Showcase Refrigerator’s cooling process includes the All-around Cooling system that cools every inch of the fridge evenly from corner to corner. Cold air is blown out through multiple outlets at every shelf level, so it maintains an even and constant temperature from top to bottom and front to back and food stays fresher.o Net Total (Liter)768 ℓ</p><p>Samsung RH77H90507F Side by Side 768L (CODE - 490183) Buy at best price in Bangladesh</p>', NULL, NULL, '325000.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 0, 0, 'media/products/product_61245f891e7c33.79539261CRILugG8cb.jpg', 'media/products/product_61245f89353035.83663834Jc25YDOc75.jpg', 'media/products/product_61245f8949eaa5.77872795XMBURVxO2c.jpg', 1, '2021-08-24 02:55:05', '2021-08-24 02:55:05'),
(48, 19, 20, 13, 'Samsung Upright Freezer RZ92HDASP/SG 277 Ltr. (CODE - 490164)', 'samsung-upright-freezer-rz92hdaspsg-277-ltr-code-490164', 1602, 36, '<p>Bring frost-free freshness into your kitchen You no longer have to empty out the fridge or freezer during a routine defrosting, because there is no more routine defrostingLiters: 277Color: Stainless SteelNo Frost: YesWidth: 595 mmDepth: 600 mmDigital: YesModel: RZ92HDASPHeight: 1800 mmSize: 7 Drawer</p><p>Samsung Upright Freezer RZ92HDASP/SG 277 Ltr. (CODE - 490164) Buy at best price in Bangladesh</p>', NULL, NULL, '115000.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 0, 0, 'media/products/product_6124607d9d6aa9.03053621UhdgsU2AAK.jpg', 'media/products/product_6124607db31364.14861560016zR99M9u.jpg', 'media/products/product_6124607dd01b07.82042748IJsqxreBrW.jpg', 1, '2021-08-24 02:59:09', '2021-08-24 02:59:09'),
(49, 19, 21, NULL, 'Stainless Steel Food Box 5 Pieces With Food', 'stainless-steel-food-box-5-pieces-with-food', 1700, 35, '<p>HIGH QUALITY STAINLESS STEEL WARE.STAINLESS STEEL BOX BODY.FOOD GRADE PLASTIC COVER.ADVANCED TECHNOLOGY.STRONG AND DURABILITY.SAFETY AND GUARANTEE.SUPER QUALITY METARIALS<br></p>', NULL, NULL, '700.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 0, 0, 'media/products/product_612461609fe2e8.6584390527puASkyZD.jpg', NULL, NULL, 1, '2021-08-24 03:02:56', '2021-08-24 03:02:56'),
(50, 19, 21, NULL, 'Acrylic, Jugs & Pitchers', 'acrylic-jugs-pitchers', 1701, 36, '<div class=\"product-details-text-wrapper\" style=\"padding: 0px; margin: 10px 0px 20px; box-sizing: border-box; width: 836.125px; float: left; color: rgb(51, 51, 51); font-family: SolaimanLipi, helvetica, verdana;\"><div class=\"product-details-text\" style=\"padding: 0px; margin: 0px; box-sizing: border-box; width: 836.125px; float: left; line-height: 27px; color: rgb(93, 90, 90);\"><div class=\"product-details-text\" style=\"padding: 0px; margin: 0px; box-sizing: border-box; width: 836.125px; float: left; line-height: 27px;\">Capacity : 2.5 LitHeight : 26 cmWidth : 18 cmWeight : 670 gmDetail : Water jug with ice tube, lid and handleHols : 2.5 quarts with ice tube in placeSolid ice tube : freezer core keeps pre-chilled beverages cold for hours. no dilution from melting ice cubues</div><div class=\"product-details-text\" style=\"padding: 0px; margin: 0px; box-sizing: border-box; width: 836.125px; float: left; line-height: 27px;\">Acrylic, Jugs &amp; Pitchers Buy at best price in Bangladesh</div></div></div>', NULL, NULL, '2100.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 0, 0, 'media/products/product_612461ee163e40.16706800JdS9wx8ggx.png', NULL, NULL, 1, '2021-08-24 03:05:18', '2021-08-24 03:05:18'),
(51, 19, 21, NULL, '32 pc Dinner Set', '32-pc-dinner-set', 1702, 50, '<p>32 pc Dinnerset Nasir Opal Glass &amp; Crockeries Ind.Ltd14 Opal Dish :1 pc10.5\" Deep Coup Opal plate :6 pc7.5\" Meat Opal Plate :6 pc9\" Opal Bowl : 1 pc6\" Opal Bowl :6 pccup :6 pcSaucer :6 pc<br></p>', NULL, NULL, '3800.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 0, 0, 'media/products/product_6124629a28d569.42732250tAvfwXrbb4.png', NULL, NULL, 1, '2021-08-24 03:08:10', '2021-08-24 03:08:10'),
(52, 19, 22, NULL, 'Rice Cooker Panasonic SR3NA', 'rice-cooker-panasonic-sr3na', 1800, 65, '<p>Automatic CookingSmall Quantity Cooking (Apt for cooking baby food)HygienicSee-through glass lidConvenient cookingSaves time &amp; energyLight weight and easy to carry<br></p>', NULL, NULL, '3200.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 0, 0, 'media/products/product_612464b772a519.13794397AZhGaYAJJR.jpg', NULL, NULL, 1, '2021-08-24 03:17:11', '2021-08-24 03:17:11'),
(53, 19, 22, NULL, 'Rice Cooker Panasonic SR-GA421 4.2Ltr/660W', 'rice-cooker-panasonic-sr-ga421-42ltr660w', 1801, 24, '<p>5 to 23 Cup/4.2L CapacityAutomatic Cooking of RiceIdeal for Restaurants and Large FamiliesKeep Warm Function up to 5 HoursAnodized Aluminum Cooking PanBig and Smooth Surface of Cast Heater Conducts Heat EfficientlyThermostat for Precision ControlThermal Fuse to Protect Unit from Burn OutIncluded Accessories: Rice Scoop and Measuring Cup</p><p>Rice Cooker Panasonic SR-GA421 4.2Ltr/660W Buy at best price in Bangladesh</p>', NULL, NULL, '9500.00', NULL, 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 0, 0, 0, 'media/products/product_61246528598eb1.35983758hr3swTesZT.jpg', NULL, NULL, 1, '2021-08-24 03:19:04', '2021-08-24 03:19:04'),
(54, 19, 21, NULL, 'Rice Cooker Tefal RK1013/70', 'rice-cooker-tefal-rk101370', 1802, 45, '<p>Model RK-1013/70Brand TEFALWeight 2.800000Product Features:• Power Consumption: 700W• Capacity: 1.8 Liters• Inner Pot: Exclusive Unique Non-Stick Removable Bowl• Cooking Menu: Automatic Keep Warm for Rice/Steam function• Adjustable Thermostat: Removable Steam Valve• Dew Collection to Avoid Water Vapor Leakage• Auto-Overheat Cut off Protection System</p><p>Rice Cooker Tefal RK1013/70 Buy at best price in Bangladesh</p>', NULL, NULL, '6200.00', '3100.00', 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 1, 0, 0, 'media/products/product_6124673aeb23c4.28081920bYfbXcyIsD.jpg', NULL, NULL, 1, '2021-08-24 03:27:55', '2021-08-29 22:31:03'),
(55, 23, 24, 19, 'FG35  2.4G Wireless Mouse', 'fg35-24g-wireless-mouse', 1900, 25, '<p><span style=\"font-family: Arial;\">2.4 GHz wireless provides a powerful, reliable connectio</span><br></p>', 'Silver,Pink,Grey,Bronze', NULL, '1500.00', '820.00', 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 1, 0, 0, 'media/products/product_612473f7858596.997041012VUjv6p8Hb.jpg', 'media/products/product_612473f796de14.64609426BjrrAXLRoY.jpg', 'media/products/product_612473f7a07444.719686304RCUWMlIjT.jpg', 1, '2021-08-24 04:22:15', '2021-08-29 22:30:36'),
(56, 23, 24, 19, 'FG20  2.4G Wireless Mouse', 'fg20-24g-wireless-mouse', 1901, 25, '<p><span style=\"font-family: Arial;\">2.4 GHz wireless provides a powerful, reliable connectio</span><br></p>', 'White,Grey,Pink,Ash Blue', NULL, '1890.00', '750.00', 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 1, 0, 0, 'media/products/product_6124749ac44324.31018927Pb7g0qipVc.jpg', 'media/products/product_6124749ace02f9.31196789Nx77nAcKg3.jpg', 'media/products/product_6124749ad54612.30587597Sv6MCJaKVX.jpg', 1, '2021-08-24 04:24:58', '2021-08-29 22:30:20'),
(57, 23, 24, 20, 'Dell Wireless Mouse-WM126 – Black', 'dell-wireless-mouse-wm126-black', 1902, 36, '<p><span style=\"font-family: roboto, Arial, Helvetica, sans-serif;\">The WM126 Wireless Optical Mouse from Dell offers you everyday wireless performance with excellent battery life</span><br></p>', NULL, NULL, '1633.00', '790.00', 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 1, 0, 0, 'media/products/product_61247569de4068.29932797Hsv2awkkFT.png', 'media/products/product_61247569e99e78.21039856M80ZGtqXON.png', 'media/products/product_6124756a03d276.18000465iZGOYFkKOy.png', 1, '2021-08-24 04:28:26', '2021-08-29 22:30:05'),
(58, 23, 25, 19, 'FG1010  2.4G Wireless Desktop Set', 'fg1010-24g-wireless-desktop-set', 2000, 55, '<font face=\"Arial\">Stable Connection: 2.4 GHz wireless provides a powerful, reliable connection up to 10-15m. Plug &amp; Play, One small Nano receiver connects both the mouse and keyboard to your computer. Just plug it into a USB port and you’re ready to go.</font>', 'White,Blue,Grey', NULL, '2500.00', '1250.00', 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 1, 0, 0, 'media/products/product_61247676b6e4d7.65751020o5cDKOosJg.jpg', 'media/products/product_61247676c09d07.99436333LqP7DLB7ar.jpg', 'media/products/product_61247676c82a57.89089660zm1cExZvoU.jpg', 1, '2021-08-24 04:32:54', '2021-08-29 22:29:45'),
(59, 23, 25, 19, 'FG1120  2.4G Compact Desktop Set', 'fg1120-24g-compact-desktop-set', 2001, 58, '<p>Stable Connection: 2.4 GHz wireless provides a powerful, reliable connection up to 10-15m. Plug &amp; Play, One small Nano receiver connects both the mouse and keyboard to your computer. Just plug it into a USB port and you’re ready to go.<br></p>', 'white,Blue,Green', NULL, '1280.00', '650.00', 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 1, 0, 0, 'media/products/product_612476da2fc648.3143333034RC2oapeq.jpg', 'media/products/product_612476da382969.76255737xnjyagJtCK.jpg', 'media/products/product_612476da405466.12146954jAeg3FHXYC.jpg', 1, '2021-08-24 04:34:34', '2021-08-29 22:29:33'),
(60, 23, 25, 20, 'Dell KM717 Wireless Keyboard', 'dell-km717-wireless-keyboard', 2002, 65, '<p>Work from your home or office with the gray KM717 Wireless Keyboard and Mouse from Dell. The 1600 dpi laser mouse allows you to navigate on various surfaces such as glass and high-gloss surfaces. The Nano dongle connects both the mouse and keyboard, and up to six compatible<br></p>', 'White,Green', NULL, '5504.00', '3890.00', 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 1, 0, 0, 'media/products/product_6124778a19f772.60300608VSMj3yIOYA.jpg', 'media/products/product_6124778a250ff8.668926563u4wWqeAh0.jpg', 'media/products/product_6124778a2d51a7.21213472NfjJiFqP5B.jpg', 1, '2021-08-24 04:37:30', '2021-08-29 22:29:13'),
(61, 23, 26, 19, 'FH200i  Conference Over-Ear Headphone', 'fh200i-conference-over-ear-headphone', 2100, 65, '<p><font color=\"#e8eaed\" face=\"consolas, lucida console, courier new, monospace\"><span style=\"font-size: 12px; white-space: pre-wrap; background-color: rgb(255, 0, 0);\">Suitable for speaks online , Skype chat, conference calls, webinar presentations, and more.</span></font><br></p>', 'Blue', NULL, '2500.00', '1890.00', 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 1, 0, 0, 'media/products/product_612478bdae5f10.21510587oJT5IifPAi.jpg', 'media/products/product_612478bdb8b838.87628024cbdrthwNeS.jpg', 'media/products/product_612478bdc0cbd3.20906593oJHrfzrRHZ.jpg', 1, '2021-08-24 04:42:37', '2021-08-29 22:28:59'),
(62, 23, 26, 19, 'FH200U  Conference USB Over-Ear Headphone', 'fh200u-conference-usb-over-ear-headphone', 2101, 36, '<p><span style=\"font-family: Arial;\">Suitable&nbsp;for&nbsp;speaks&nbsp;online&nbsp;courses,&nbsp;Skype&nbsp;chat,&nbsp;conference</span><br></p>', 'Gery', NULL, '1420.00', '720.00', 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 1, 0, 0, 'media/products/product_6124794c58b953.95736102KqWwvj6QgW.jpg', 'media/products/product_6124794c6077f6.56116126Gpy0W95Oym.jpg', 'media/products/product_6124794c6854b1.91521169SvOT6hSvwF.jpg', 1, '2021-08-24 04:45:00', '2021-08-29 22:28:42'),
(63, 23, 26, 20, 'HAVIT H2590BT BLUETOOTH HEADPHONE', 'havit-h2590bt-bluetooth-headphone', 2102, 78, '<p>Bluetooth Version: V4.2Range: 10m (no obstruction)Speaker: F40mmFrequency Range: 20hz-20khzBattery: 200mAhPlay time: 4 hoursCharging time: 2-3 hours<br></p>', NULL, NULL, '1288.00', '988.00', 'https://www.youtube.com/embed/nxSDHBdsWqA', 0, 0, 1, 0, 0, 'media/products/product_612479e58f4c15.39874734SsHhFJTts7.png', NULL, NULL, 1, '2021-08-24 04:47:33', '2021-09-07 20:17:53');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super-admin', 'admin', '2021-08-21 12:14:27', '2021-08-21 12:14:27'),
(2, 'manage-orders', 'admin', '2021-08-21 12:14:43', '2021-08-21 12:14:43'),
(3, 'manage-categories', 'admin', '2021-08-21 12:15:02', '2021-08-21 12:15:02'),
(4, 'manage-products', 'admin', '2021-08-21 12:15:21', '2021-08-21 12:15:21'),
(5, 'settings', 'admin', '2021-08-21 12:15:40', '2021-08-21 12:15:40'),
(6, 'manage-tools', 'admin', '2021-08-21 12:15:57', '2021-08-21 12:15:57'),
(7, 'pandding', 'admin', '2021-08-21 12:16:12', '2021-08-21 12:16:12'),
(8, 'payment', 'admin', '2021-08-21 12:16:26', '2021-08-21 12:16:26'),
(9, 'proccess', 'admin', '2021-08-21 12:16:40', '2021-08-21 12:16:40'),
(10, 'return', 'admin', '2021-08-21 12:16:52', '2021-08-21 12:16:52'),
(11, 'manage-posts', 'admin', '2021-08-21 12:45:22', '2021-08-21 12:45:22');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(2, 6),
(3, 1),
(3, 4),
(4, 1),
(4, 2),
(4, 7),
(4, 8),
(4, 9),
(5, 1),
(5, 11),
(6, 1),
(6, 2),
(6, 7),
(7, 1),
(7, 2),
(7, 8),
(8, 1),
(8, 2),
(8, 9),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
(11, 1),
(11, 5),
(12, 1),
(12, 10);

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bing_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `meta_title`, `meta_author`, `meta_tag`, `meta_description`, `meta_analytics`, `bing_analytics`, `created_at`, `updated_at`) VALUES
(1, 'halumshop', 'shaon', 'halumshop', 'lorem ipsum', 'lorem ipsum', 'lorem ipsum', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vat` int(11) DEFAULT NULL,
  `shipping_charge` int(11) DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `vat`, `shipping_charge`, `logo`, `created_at`, `updated_at`) VALUES
(1, 100, 150, 'nfdgbghdfgdf.jpg', '2021-08-30 06:26:06', '2021-08-30 06:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `ship_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `order_id`, `ship_name`, `ship_phone`, `ship_email`, `ship_address`, `ship_city`, `post_code`, `created_at`, `updated_at`) VALUES
(77, 70, 'Shaon Shahriar', '01723771209', 'shaon@gmail.com', 'Dhaka,Mohammadpur', 'Dhaka', '1207', '2021-09-07 19:47:18', '2021-09-07 19:47:18'),
(78, 71, 'Shahin Shahriar', '01723771209', 'shaon@gmail.com', 'Dhaka,Mohammadpur', 'dhaka', '1207', '2021-09-07 20:29:09', '2021-09-07 20:29:09'),
(79, 72, 'Proccess Delivery', '01723771209', 'shaon@gmail.com', 'Dhaka,Mohammadpur', 'dhaka', '1207', '2021-09-07 20:31:30', '2021-09-07 20:31:30'),
(80, 73, 'Proccess Delivery', '01723771209', 'shaon@gmail.com', 'Dhaka,Mohammadpur', 'Dhaka', '1207', '2021-09-07 21:04:54', '2021-09-07 21:04:54'),
(81, 74, 'Proccess Delivery', '01723771209', 'shaon@gmail.com', 'Dhaka,Mohammadpur', 'Dhaka', '1207', '2021-09-07 21:06:43', '2021-09-07 21:06:43'),
(82, 75, 'Pandding Order', '01723771209', 'shaon@gmail.com', 'Dhaka,Mohammadpur', 'Dhaka', '1207', '2021-09-07 21:08:20', '2021-09-07 21:08:20'),
(83, 76, 'Shahin Shahriar', '01723771209', 'shaon@gmail.com', 'Dhaka,Mohammadpur', 'Dhaka', '1207', '2021-09-07 21:16:30', '2021-09-07 21:16:30'),
(84, 77, 'Proccess Delivery', '01723771209', 'shahriarshaon5@gmail.com', 'Dhaka,Mohammadpur', 'Dhaka', '1207', '2021-09-07 21:18:05', '2021-09-07 21:18:05'),
(85, 78, 'Shahin Shahriar', '01723771209', 'shaon@gmail.com', 'Dhaka,Mohammadpur', 'Dhaka', '1207', '2021-09-07 21:24:11', '2021-09-07 21:24:11'),
(86, 79, 'Shahin Shahriar', '01723771209', 'shaon@gmail.com', 'Dhaka,Mohammadpur', 'Dhaka', '1207', '2021-09-07 21:40:38', '2021-09-07 21:40:38'),
(87, 80, 'Shahin Shahriar', '01723771209', 'shaon@gmail.com', 'Dhaka,Mohammadpur', 'Dhaka', '1207', '2021-09-07 21:43:41', '2021-09-07 21:43:41'),
(88, 81, 'Shahin Shahriar', '01723771209', 'proccess@gmail.com', 'Dhaka,Mohammadpur', 'Dhaka', '1207', '2021-09-07 21:46:30', '2021-09-07 21:46:30'),
(89, 82, 'Shahin Shahriar', '01723771209', 'shaon@gmail.com', 'Dhaka,Mohammadpur', 'Dhaka', '1207', '2021-09-07 21:50:16', '2021-09-07 21:50:16'),
(90, 83, 'Shahin Shahriar', '01723771209', 'shaon@gmail.com', 'Dhaka,Mohammadpur', 'Dhaka', '1207', '2021-09-07 21:53:30', '2021-09-07 21:53:30'),
(91, 84, 'Proccess Delivery', '01723771209', 'shahriarshaon5@gmail.com', 'Dhaka,Mohammadpur', 'Dhaka', '1207', '2021-09-07 21:58:28', '2021-09-07 21:58:28'),
(92, 85, 'Shahin Shahriar', '01723771209', 'shaon@gmail.com', 'Dhaka,Mohammadpur', 'Dhaka', '1207', '2021-09-07 22:04:50', '2021-09-07 22:04:50'),
(93, 86, 'Proccess Delivery', '01723771209', 'shaon@gmail.com', 'Dhaka,Mohammadpur', 'Dhaka', '1207', '2021-09-07 22:17:52', '2021-09-07 22:17:52'),
(94, 87, 'Shahin Shahriar', '01723771209', 'shaon@gmail.com', 'Dhaka,Mohammadpur', 'Dhaka', '1207', '2021-09-08 20:07:51', '2021-09-08 20:07:51'),
(95, 88, 'Shahin Shahriar', '01723771209', 'shaon@gmail.com', 'Dhaka,Mohammadpur', 'dhaka', '1207', '2021-09-08 20:09:19', '2021-09-08 20:09:19'),
(96, 89, 'Shahin Shahriar', '01723771209', 'shaon@gmail.com', 'Dhaka,Mohammadpur', 'Dhaka', '1207', '2021-09-08 20:27:32', '2021-09-08 20:27:32'),
(97, 90, 'Shahin Shahriar', '01723771209', 'shaon@gmail.com', 'Dhaka,Mohammadpur', 'dhaka', '1207', '2021-09-08 20:33:26', '2021-09-08 20:33:26'),
(98, 91, 'Shahin Shahriar', '01723771209', 'shaon@gmail.com', 'Dhaka,Mohammadpur', 'Dhaka', '1207', '2021-09-08 20:34:03', '2021-09-08 20:34:03'),
(99, 92, 'Shahin Shahriar', '01723771209', 'shaon@gmail.com', 'Dhaka,Mohammadpur', 'dhaka', '1207', '2021-09-08 20:35:12', '2021-09-08 20:35:12');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `phone`, `email`, `company_name`, `company_address`, `facebook`, `youtube`, `instagram`, `pinterest`, `created_at`, `updated_at`) VALUES
(1, '+880 1723771208', 'info@haluumshop.com', 'HalumShop', 'Katashur Mohammadpur, Dhaka-1207', 'https://www.facebook.com/', 'https://www.youtube.com/channel/UC_pDY4JZnlvzT-wHCJEqpOw', 'https://www.instagram.com/', 'https://www.pinterest.com/', '2021-08-21 12:50:04', '2021-08-21 12:50:04');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'media/sliders/slider_61210db0c9c825.43139790psP3ea7tc5.jpg', 1, '2021-08-21 14:29:05', '2021-08-21 14:29:05'),
(2, NULL, NULL, 'media/sliders/slider_61210e2283b7d9.18384766ttaYVi4IQK.jpg', 0, '2021-08-21 14:30:59', '2021-08-21 14:42:05'),
(3, NULL, NULL, 'media/sliders/slider_61210e38cd5e63.07851655wGFSJtKSEx.jpg', 0, '2021-08-21 14:31:21', '2021-08-21 14:42:39'),
(4, NULL, NULL, 'media/sliders/slider_61210e41e79a37.709598506DerzfsHIP.jpg', 0, '2021-08-21 14:31:30', '2021-08-21 14:42:11'),
(5, NULL, NULL, 'media/sliders/slider_61210e4a14c545.57252679V934xxXZpr.jpg', 1, '2021-08-21 14:31:38', '2021-08-21 14:31:38'),
(6, NULL, NULL, 'media/sliders/slider_61210e51b35fb2.67579495o68Y8VcaK4.jpg', 1, '2021-08-21 14:31:46', '2021-08-21 14:31:46'),
(7, NULL, NULL, 'media/sliders/slider_61210e589052c8.55788208Vjv19Ck7GL.jpg', 1, '2021-08-21 14:31:53', '2021-08-21 14:31:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `email_verification_token` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `slug`, `email`, `phone_number`, `email_verified_at`, `email_verification_token`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shahriar Shaon', 'shahriar-shaon', 'shaon@gmail.com', '01723771208', '2021-08-21 12:07:51', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '2021-08-21 12:07:51', '2021-08-21 12:07:51'),
(2, 'Shahin Zaman', 'shahin-zaman', 'shahin@gmail.com', '01723771209', '2021-08-29 23:43:46', NULL, '$2y$10$ty9HSxVvGngDC.rLMfIz9uSRssOV3.Wr6bKMteqbWvkWt5KT2LV1G', NULL, '2021-08-29 23:38:08', '2021-08-29 23:47:10');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_name_unique` (`name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD KEY `categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_commenter_id_commenter_type_index` (`commenter_id`,`commenter_type`),
  ADD KEY `comments_commentable_type_commentable_id_index` (`commentable_type`,`commentable_id`),
  ADD KEY `comments_child_id_foreign` (`child_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_coupon_unique` (`coupon`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `newslaters`
--
ALTER TABLE `newslaters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `newslaters_email_unique` (`email`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_title_en_unique` (`title_en`),
  ADD UNIQUE KEY `posts_title_bn_unique` (`title_bn`),
  ADD KEY `posts_postcategory_id_foreign` (`postcategory_id`),
  ADD KEY `posts_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_product_title_unique` (`product_title`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_subcategory_id_foreign` (`subcategory_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shippings_order_id_foreign` (`order_id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`),
  ADD KEY `wishlists_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `newslaters`
--
ALTER TABLE `newslaters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_postcategory_id_foreign` FOREIGN KEY (`postcategory_id`) REFERENCES `post_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shippings`
--
ALTER TABLE `shippings`
  ADD CONSTRAINT `shippings_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
