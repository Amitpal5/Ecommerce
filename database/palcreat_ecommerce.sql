-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 04, 2021 at 10:53 AM
-- Server version: 5.7.35-cll-lve
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `palcreat_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Brand_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `Brand_name`, `Brand_logo`, `created_at`, `updated_at`) VALUES
(2, 'Aarong Dairy', '1630143859.jpg', '2021-08-28 03:44:19', '2021-08-28 03:44:19'),
(3, 'ACI', '1630144008.jpg', '2021-08-28 03:46:48', '2021-08-28 03:46:48'),
(4, 'Ahmed', '1630145161.jpg', '2021-08-28 04:06:01', '2021-08-28 04:06:01'),
(5, 'All Time', '1630145330.jpg', '2021-08-28 04:08:50', '2021-08-28 04:08:50'),
(6, 'American-garden', '1630145487.jpg', '2021-08-28 04:11:27', '2021-08-28 04:11:27'),
(7, 'Arku', '1630145655.jpg', '2021-08-28 04:14:15', '2021-08-28 04:14:15'),
(8, 'Arla', '1630146003.jpg', '2021-08-28 04:20:03', '2021-08-28 04:20:03'),
(9, 'Aarong', '1630146062.jpg', '2021-08-28 04:21:02', '2021-08-28 04:21:02'),
(10, 'Bonoful', '1630146124.jpg', '2021-08-28 04:22:04', '2021-08-28 04:22:04'),
(11, 'Baoma', '1630146295.jpg', '2021-08-28 04:24:55', '2021-08-28 04:24:55'),
(12, 'Bashundhara', '1630146490.jpg', '2021-08-28 04:28:10', '2021-08-28 04:28:10'),
(13, 'Bd Food', '1630146639.jpg', '2021-08-28 04:30:39', '2021-08-28 04:30:39'),
(14, 'BFL', '1630146692.jpg', '2021-08-28 04:31:32', '2021-08-28 04:31:32'),
(15, 'Bisk-club', '1630146972.jpg', '2021-08-28 04:36:12', '2021-08-28 04:36:12'),
(16, 'Bombay-Sweets', '1630147102.jpg', '2021-08-28 04:38:22', '2021-08-28 04:38:22'),
(17, 'Boro plus', '1630147202.jpg', '2021-08-28 04:40:02', '2021-08-28 04:40:02'),
(18, 'Bounty', '1630147258.jpg', '2021-08-28 04:40:58', '2021-08-28 04:40:58'),
(19, 'Cadbury', '1630147327.jpg', '2021-08-28 04:42:07', '2021-08-28 04:42:07'),
(20, 'Canderel', '1630147377.jpg', '2021-08-28 04:42:57', '2021-08-28 04:42:57'),
(21, 'Chashi', '1630147424.jpg', '2021-08-28 04:43:44', '2021-08-28 04:43:44'),
(22, 'Chopstick', '1630147486.jpg', '2021-08-28 04:44:46', '2021-08-28 04:44:46'),
(23, 'Complan', '1630147603.jpg', '2021-08-28 04:46:43', '2021-08-28 04:46:43'),
(24, 'coral', '1630147788.jpg', '2021-08-28 04:49:48', '2021-08-28 04:49:48'),
(25, 'Creme21', '1630147826.jpg', '2021-08-28 04:50:26', '2021-08-28 04:50:26'),
(26, 'Daawat', '1630147872.jpg', '2021-08-28 04:51:12', '2021-08-28 04:51:12'),
(27, 'dan-cake', '1630147938.jpg', '2021-08-28 04:52:18', '2021-08-28 04:52:18'),
(28, 'Danish', '1630148034.jpg', '2021-08-28 04:53:54', '2021-08-28 04:53:54'),
(29, 'Dano', '1630148085.jpg', '2021-08-28 04:54:45', '2021-08-28 04:54:45'),
(30, 'Davidoff', '1630148180.jpg', '2021-08-28 04:56:20', '2021-08-28 04:56:20'),
(31, 'Dekko', '1630148218.jpg', '2021-08-28 04:56:58', '2021-08-28 04:56:58'),
(32, 'Domex', '1630148257.jpg', '2021-08-28 04:57:37', '2021-08-28 04:57:37'),
(33, 'Dove', '1630148295.jpg', '2021-08-28 04:58:15', '2021-08-28 04:58:15'),
(34, 'Ensure', '1630148340.jpg', '2021-08-28 04:59:00', '2021-08-28 04:59:00'),
(36, 'Fitfood', '1630148687.jpg', '2021-08-28 05:04:47', '2021-08-28 05:04:47');

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cata_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `Cat_name`, `Cata_logo`, `created_at`, `updated_at`) VALUES
(1, 'Baby Care', 'Image/1712665404913621.jpg', '2021-10-03 23:23:29', '2021-10-03 23:23:29'),
(2, 'Bakery', 'Image/1712665522719032.jpg', '2021-10-03 23:25:21', '2021-10-03 23:25:21'),
(3, 'Meat and Fish', 'Image/1712665542779194.webp', '2021-10-03 23:25:40', '2021-10-03 23:25:40'),
(4, 'Vegetables & Fruits', 'Image/1712665559907271.jpg', '2021-10-03 23:25:57', '2021-10-03 23:25:57'),
(5, 'Cooking Essentials', 'Image/1712665580922630.jpg', '2021-10-03 23:26:17', '2021-10-03 23:26:17'),
(6, 'Noodles & Instant Food', 'Image/1712665610277299.jpg', '2021-10-03 23:26:45', '2021-10-03 23:26:45'),
(7, 'Tea & Coffee', 'Image/1712665647316524.webp', '2021-10-03 23:27:20', '2021-10-03 23:27:20'),
(8, 'Health & Fitness', 'Image/1712665764727027.webp', '2021-10-03 23:29:12', '2021-10-03 23:29:12'),
(9, 'Dairy', 'Image/1712665783962008.jpg', '2021-10-03 23:29:30', '2021-10-03 23:29:30');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Coupon_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Coupon_Discount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `Coupon_Name`, `Coupon_Discount`, `created_at`, `updated_at`) VALUES
(1, 'flat2021', 20, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_08_26_163531_create_catagories_table', 2),
(6, '2021_08_28_052313_create_sub_catagories_table', 3),
(7, '2021_08_28_084120_create_brands_table', 4),
(8, '2021_08_28_114627_create_coupons_table', 5),
(9, '2021_09_01_130355_create_products_table', 6),
(10, '2021_09_01_162947_create_products_table', 7),
(11, '2016_06_01_000001_create_oauth_auth_codes_table', 8),
(12, '2016_06_01_000002_create_oauth_access_tokens_table', 8),
(13, '2016_06_01_000003_create_oauth_refresh_tokens_table', 8),
(14, '2016_06_01_000004_create_oauth_clients_table', 8),
(15, '2016_06_01_000005_create_oauth_personal_access_clients_table', 8),
(16, '2021_09_20_105251_create_orders_table', 9),
(17, '2021_09_20_105425_create_order_details_table', 9),
(18, '2021_09_20_105459_create_shippings_table', 9),
(19, '2021_09_23_060231_create_seos_table', 10),
(20, '2021_09_24_114705_create_reviews_table', 11),
(21, '2021_09_29_125447_create_sites_table', 12),
(22, '2021_09_29_125856_create_sites_table', 13),
(23, '2021_10_04_051528_create_catagories_table', 14),
(24, '2021_10_04_064757_create_contacts_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
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
  `scopes` text COLLATE utf8mb4_unicode_ci,
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'JwoPB8O1VgbyHJZ1IrnGCUBCtwzbg0qTRdcMaPhD', NULL, 'http://localhost', 1, 0, 0, '2021-09-19 02:26:56', '2021-09-19 02:26:56'),
(2, NULL, 'Laravel Password Grant Client', '6m4KzQgPEoWxnrNjBtDe11o3C7W48anyvnlg87rO', 'users', 'http://localhost', 0, 1, 0, '2021-09-19 02:26:56', '2021-09-19 02:26:56');

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

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-09-19 02:26:56', '2021-09-19 02:26:56');

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
  `User_id` int(11) NOT NULL,
  `Payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_charge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `return_order` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `User_id`, `Payment_method`, `order_id`, `sub_total`, `shipping_charge`, `Status`, `month`, `date`, `year`, `return_order`, `created_at`, `updated_at`) VALUES
(8, 4, 'Cash On Delivery', '1361', '624', '60 TK', '3', '09', '21', '2021', '2', NULL, '2021-09-26 11:24:31'),
(9, 4, 'Cash On Delivery', '5827', '160.00', '60 TK', '3', '09', '21', '2021', '0', NULL, NULL),
(10, 4, 'Cash On Delivery', '9069', '360.00', '60 TK', '1', '09', '21', '2021', '0', NULL, NULL),
(11, 5, 'Cash On Delivery', '8267', '165.00', '60 TK', '3', '09', '26', '2021', '2', NULL, '2021-09-29 04:02:45'),
(12, 5, 'Cash On Delivery', '6687', '230.00', '60 TK', '3', '09', '30', '2021', NULL, NULL, NULL),
(13, 5, 'Cash On Delivery', '2986', '580.00', '60 TK', '0', '09', '30', '2021', NULL, NULL, NULL),
(14, 4, 'Cash On Delivery', '9033', '260.00', '60 TK', '3', '10', '02', '2021', '2', NULL, '2021-10-02 07:50:17');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Single_Price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Totla_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_Name`, `Size`, `Qty`, `Single_Price`, `Totla_price`, `created_at`, `updated_at`) VALUES
(1, '1514', '35', 'Biomil 1 formula milk powder 400g', NULL, '1', '580', '580', NULL, NULL),
(2, '1514', '53', 'Red Grapes (Lal Angur) Per Kg', NULL, '1', '230', '230', NULL, NULL),
(5, '1361', '34', 'GASTRO-FIX Special Formula', NULL, '1', '570', '570', NULL, NULL),
(6, '1361', '51', 'Apple Green 1 Kg', NULL, '1', '210', '210', NULL, NULL),
(7, '5827', '54', 'Sweet Orange Per Kg', NULL, '1', '160', '160', NULL, NULL),
(8, '9069', '52', 'Apple (Gala) Per kg', NULL, '2', '180', '360', NULL, NULL),
(9, '8267', '63', 'Shah Premium Biryani Rice 1kg', NULL, '1', '165', '165', NULL, NULL),
(10, '6687', '53', 'Red Grapes (Lal Angur) Per Kg', NULL, '1', '230', '230', NULL, NULL),
(11, '2986', '35', 'Biomil 1 formula milk powder 400g', NULL, '1', '580', '580', NULL, NULL),
(12, '9033', '88', 'Arla Dano Growth Shakti Powder Milk 200 gm', NULL, '2', '130', '260', NULL, NULL);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catgory_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcatagory_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_details` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_slider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hot_deal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `best_rated` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mid_slider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hot_new` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trend` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `catgory_id`, `subcatagory_id`, `brand_id`, `product_name`, `product_code`, `product_qty`, `product_details`, `product_size`, `price`, `discount_price`, `main_slider`, `hot_deal`, `best_rated`, `mid_slider`, `hot_new`, `trend`, `image_1`, `image_2`, `image_3`, `status`, `created_at`, `updated_at`) VALUES
(27, '1', '2', '3', 'ACI Savlon Twinkle Baby Diaper (11-25kg) 32 pc', '1001', '20', '<p>Savlon Baby Wipes carefully cleans baby’s sensitive skin. It has pre-moisturized thicker sheets that help to protect baby’s skin from dryness. Twinkle Baby Diaper is an unfailing companion in the wonderful journey called motherhood.<br></p>', '1 pc', '950', '880', '1', NULL, NULL, NULL, NULL, '1', 'Image/1710064311674462.jpg', NULL, NULL, '1', '2021-09-05 06:20:14', '2021-09-07 08:03:38'),
(28, '1', '2', '3', 'Aspire Adult Diaper L (91-132cm) 10 pcs', '1002', '20', NULL, '1 pc', '650', NULL, '1', NULL, NULL, NULL, NULL, NULL, 'Image/1710064433973944.jpg', NULL, NULL, '1', '2021-09-05 06:22:10', '2021-09-07 08:04:15'),
(29, '1', '2', '12', 'Bashundhara Baby Wet Wipes Jar 120 pcs', '1003', '20', '<p>100% safe for baby skin.. Chamomile fragrance and chemical free.. Contains vitamin E and aloe vera.. 30% better quality than wipes present in the market.. Much better than other packing styles and drying is very much delayed.<br></p>', '1 pc', '180', NULL, NULL, NULL, NULL, NULL, '1', NULL, 'Image/1710064525693980.jpg', NULL, NULL, '1', '2021-09-05 06:23:37', '2021-09-05 06:23:37'),
(30, '1', '2', '3', 'ACI Savlon Twinkle Baby Lotion 200 ml', '1004', '10', '<p>Savlon Twinkle Baby Lotion gives Smooth &amp; Comfortable feeling for your baby s soft and sensitive skin. It creates a preventive layer on your baby s skin to secure its natural moisture level and helps to protect it from dryness.<br></p>', '200 ml', '250', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710064700080425.jpg', NULL, NULL, '1', '2021-09-05 06:26:23', '2021-09-05 06:26:23'),
(31, '1', '2', '3', 'Johnson’s Baby Bath Milk + Rice 200 ml', '1015', '10', '<p>Cleanse and moisturize your baby s delicate skin with the nourishing milk extracts and vitamins in our baby milk bath and rice..It s soap-free and pH neutral, and its mild and gentle no more tears formula means it won t get in the way of bath time fun.<br></p>', '200 ml', '180', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710065198696218.jpg', NULL, NULL, '1', '2021-09-05 06:34:19', '2021-09-05 06:34:19'),
(32, '1', '1', '21', 'Nestle Lactogen 1 Box 350 gm', '1005', '10', '<p>Infant Formula with Iron BIB Origin: India In most cases, babies have difficulties falling asleep. Sometimes they cry for a prolonged period without being able to communicate the reason. Lactogen 1 Gentle Start contains L. Reuters, a probiotic culture naturally present in breast milk. This helps to reduce colic-related conditions which in turn helps diminish a baby’s excessive crying. Lactogen 1 is a spray dried Infant Formula for infants from birth on wards when they are not breastfed.<br></p>', '350 gm', '500', NULL, NULL, NULL, NULL, NULL, '1', NULL, 'Image/1710065938174660.jpg', NULL, NULL, '1', '2021-09-05 06:46:04', '2021-09-05 06:46:04'),
(33, '1', '1', '5', 'Junior Horlics 500gm pack', '1006', '10', NULL, '500gm', '370', NULL, NULL, '1', NULL, NULL, NULL, NULL, 'Image/1710066165584121.jpg', NULL, NULL, '1', '2021-09-05 06:49:41', '2021-09-05 06:49:41'),
(34, '1', '1', '14', 'GASTRO-FIX Special Formula', '1007', '07', NULL, '500gm', '570', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710066439665924.jpg', NULL, NULL, '1', '2021-09-05 06:54:03', '2021-09-05 06:54:03'),
(35, '1', '1', '10', 'Biomil 1 formula milk powder 400g', '1008', '10', NULL, '400g', '580', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710068355569919.webp', NULL, NULL, '1', '2021-09-05 07:24:30', '2021-09-05 07:24:30'),
(36, '1', '1', '14', 'Biomil-3- Follow up formula milk from 1 to 2 years 350g', '1009', '10', '<p>Features: Brand: Biomil Product Type: Powdered Milk Net Weight: 350gm ISO 22000:2005 certified For: children between 1 to 2 years Country Origin: Belgium<br></p>', '350g', '470', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710068487104049.webp', NULL, NULL, '1', '2021-09-05 07:26:35', '2021-09-05 07:26:35'),
(37, '1', '1', '8', 'Dano Chocolate Milk Powder', '1009', '20', NULL, '150gm', '75', NULL, NULL, NULL, NULL, NULL, '1', NULL, 'Image/1710068870813944.webp', NULL, NULL, '1', '2021-09-05 07:32:41', '2021-09-05 07:32:41'),
(38, '3', '6', NULL, 'Shonalika Chicken Without Skin (Pcs)', '1101', '10', NULL, '(550-600gm) Per Pcs', '240', NULL, NULL, '1', NULL, NULL, NULL, NULL, 'Image/1710069065618298.jpg', NULL, NULL, '1', '2021-09-05 07:35:47', '2021-09-05 07:35:47'),
(39, '3', '6', NULL, 'Beef Premium per Kg (+/- 50gm) 1 Kg', '1102', '10', NULL, '1 Kg', '580', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710069460033281.jpg', NULL, NULL, '1', '2021-09-05 07:42:03', '2021-09-05 07:42:03'),
(40, '3', '6', NULL, 'Broiler Chicken Without Skin Per Kg', '1103', '10', NULL, '1 Kg', '290', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710069563868598.jpg', NULL, NULL, '1', '2021-09-05 07:43:42', '2021-09-05 07:43:42'),
(41, '3', '7', NULL, 'Pabda Fish 500 gm', '1150', '10', NULL, '500 gm', '230', NULL, NULL, '1', NULL, NULL, NULL, NULL, 'Image/1710069658341323.jpg', NULL, NULL, '1', '2021-09-05 07:45:12', '2021-09-05 07:45:12'),
(42, '2', '5', '15', 'Bounty Soft Baked Cookies (180G)', '1201', '10', NULL, '180 gm', '180', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710070032981642.jpg', NULL, NULL, '1', '2021-09-05 07:51:09', '2021-09-05 07:51:09'),
(43, '2', '5', '14', 'Goldmark 6 To 9 Vegetable Crackers 170gm', '1202', '10', NULL, '170gm', '50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710070331859385.webp', NULL, NULL, '1', '2021-09-05 07:55:54', '2021-09-05 07:55:54'),
(44, '2', '5', NULL, 'Kelloggs chocos 700gm', '1203', '20', NULL, '700gm', '590', NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Image/1710070452492301.webp', NULL, NULL, '1', '2021-09-05 07:57:49', '2021-09-05 07:57:49'),
(45, '4', '8', NULL, 'Diamond Alu (Potato) 1 kg', '1301', '10', NULL, '1 kg', '24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710070763596169.jpg', NULL, NULL, '1', '2021-09-05 08:02:46', '2021-09-05 08:02:46'),
(46, '4', '8', NULL, 'Lemon Long (Lomba Lebu) Pcs', '1302', '20', NULL, '1pc', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710070845806827.jpg', NULL, NULL, '1', '2021-09-05 08:04:05', '2021-09-05 08:04:05'),
(47, '4', '8', NULL, 'Cucumber (Shosha) 1 Kg', '1304', '20', NULL, '1 Kg', '40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710070985525266.jpg', NULL, NULL, '1', '2021-09-05 08:06:18', '2021-09-05 08:06:18'),
(49, '4', '8', NULL, 'Pui Shak/ati', '1305', '10', NULL, 'Per ati', '24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710071152030756.jpg', NULL, NULL, '1', '2021-09-05 08:08:57', '2021-09-05 08:08:57'),
(50, '4', '8', NULL, 'Potol Per Kg', '1305', '10', NULL, '1 Kg', '60', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710071570585855.jpg', NULL, NULL, '1', '2021-09-05 08:15:36', '2021-09-05 08:15:36'),
(51, '4', '9', NULL, 'Apple Green 1 Kg', '1401', '20', NULL, '1 Kg', '210', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710071688741676.jpg', NULL, NULL, '1', '2021-09-05 08:17:28', '2021-09-05 08:17:28'),
(52, '4', '9', NULL, 'Apple (Gala) Per kg', '1402', '07', NULL, 'Per Kg', '180', NULL, NULL, NULL, NULL, NULL, '1', 'NULL', 'Image/1710072078231754.jpg', NULL, NULL, '1', '2021-09-05 08:23:40', '2021-09-05 08:23:40'),
(53, '4', '9', NULL, 'Red Grapes (Lal Angur) Per Kg', '1404', '20', NULL, 'Per Kg', '230', NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Image/1710072166766011.jpg', NULL, NULL, '1', '2021-09-05 08:25:04', '2021-09-05 08:25:04'),
(54, '4', '8', NULL, 'Sweet Orange Per Kg', '1405', '10', NULL, 'Per Kg', '160', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710072911568402.jpg', NULL, NULL, '1', '2021-09-05 08:36:55', '2021-09-05 08:36:55'),
(55, '5', '10', '4', 'Soyabean Oil 5 Ltr', '1501', '10', NULL, '5 Ltr', '730', '680', NULL, '1', NULL, NULL, NULL, NULL, 'Image/1710073175280379.jpg', NULL, NULL, '1', '2021-09-05 08:41:06', '2021-09-05 08:41:06'),
(56, '5', '10', '26', 'Fresh Soyabean Oil 5 Ltr', '1502', '10', NULL, '5 Ltr', '728', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710073329839563.jpg', NULL, NULL, '1', '2021-09-05 08:43:33', '2021-09-05 08:43:33'),
(57, '5', '10', '24', 'Soya Chunk 1kg', '1503', '10', NULL, '1kg', '210', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710073410760319.jpg', NULL, NULL, '1', '2021-09-05 08:44:51', '2021-09-05 08:44:51'),
(58, '5', '10', '7', 'Suresh Mustard Oil', '1504', '10', NULL, '500 ml', '130', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710073515977256.jpg', NULL, NULL, '1', '2021-09-05 08:46:31', '2021-09-05 08:46:31'),
(59, '5', '10', '34', 'Radhuni Pure Mustard Oil 250 ml', '1505', '07', NULL, '250 ml', '65', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710073682628829.jpg', NULL, NULL, '1', '2021-09-05 08:49:10', '2021-09-05 08:49:10'),
(60, '5', '11', '14', 'Premium Nazirshail Rice 5 Kg', '1600', '10', NULL, '5 Kg', '325', NULL, NULL, '1', NULL, NULL, NULL, NULL, 'Image/1710073757422814.jpg', NULL, NULL, '1', '2021-09-05 08:50:21', '2021-09-05 08:50:21'),
(61, '5', '11', NULL, 'Premium Miniket Rice 5Kg', '1601', '10', NULL, '5Kg', '330', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710074349114235.jpg', NULL, NULL, '1', '2021-09-05 08:59:46', '2021-09-05 08:59:46'),
(62, '5', '11', '9', 'BTM White Chira (সাদা চিড়া) 250gm', '1602', '10', NULL, '250gm', '50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710137389773665.webp', NULL, NULL, '1', '2021-09-06 01:41:47', '2021-09-06 01:41:47'),
(63, '5', '11', '8', 'Shah Premium Biryani Rice 1kg', '1604', '20', NULL, '1kg', '165', NULL, NULL, 'NULL', '1', NULL, '1', '1', 'Image/1710137499181205.webp', NULL, NULL, '1', '2021-09-06 01:43:30', '2021-09-06 01:43:30'),
(64, '5', '11', '26', 'Daawat Biryani Basmti Rice 5kg', '1605', '07', NULL, '5kg', '1425', '1350', NULL, NULL, NULL, NULL, '1', NULL, 'Image/1710137567099590.jpg', NULL, NULL, '1', '2021-09-06 01:44:35', '2021-09-06 01:44:35'),
(65, '5', '12', '6', 'Brown Sugar (Akher Chini)', '1701', '10', NULL, '1 kg', '75', NULL, NULL, NULL, NULL, NULL, '1', NULL, 'Image/1710137682641766.jpg', NULL, NULL, '1', '2021-09-06 01:46:25', '2021-09-06 01:46:25'),
(66, '5', '12', '34', 'Fresh Refined Sugar 1 Kg', '1702', '10', NULL, '1 Kg', '70', NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Image/1710137746955723.jpg', NULL, NULL, '1', '2021-09-06 01:47:26', '2021-09-06 01:47:26'),
(67, '5', '14', '3', 'ACI Nutrilife Multi Grain Atta Pack 1 kg', '1800', '10', '<p>ACI Pure multigrain Atta is an excellent source of vitamins which are vital in strengthening immunity and extra protein to improve body strength. The extra fiber makes food easier to digest; low content of saturated fat keeps heart smiling and above all, it retains the same great taste.<br></p>', '1 Kg', '55', NULL, NULL, NULL, NULL, NULL, '1', NULL, 'Image/1710137843734748.jpg', NULL, NULL, '1', '2021-09-06 01:48:59', '2021-09-06 01:48:59'),
(68, '5', '14', '3', 'ACI Pure Atta 2 kg', '1801', '07', '<p>ACI Pure Flour Limited is one of the largest flour producing companies in Bangladesh delivering healthiest, purest and most hygienic flour by adopting State of the art technology.Its also contains Vitamin, Mineral and Protein.<br></p>', '2 kg', '75', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710137904948086.jpg', NULL, NULL, '1', '2021-09-06 01:49:57', '2021-09-06 01:49:57'),
(69, '5', '14', '12', 'Bashundhara Brown Atta 1 kg', '1803', '07', '<p>Bashundhara Atta is produced from the finest wheat using European technology perfect for preparing healthy and nutritious food. During production of Bashundara Atta, the wheat goes through many automatic cleaning stages that remove all impurities<br></p>', '1 kg', '45', NULL, NULL, '1', NULL, NULL, NULL, NULL, 'Image/1710137973911439.jpg', NULL, NULL, '1', '2021-09-06 01:51:03', '2021-09-06 01:51:03'),
(70, '6', NULL, '31', 'Kazifarms Kitchen Chicken Nuggets', '1900', '07', NULL, '250 gm', '165', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710138083494531.jpg', NULL, NULL, '1', '2021-09-06 01:52:47', '2021-09-06 01:52:47'),
(71, '6', NULL, '30', 'GOLDEN HARVEST Chicken Nugget 300g', '1902', '10', NULL, '300g', '150', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710138159187220.jpg', NULL, NULL, '1', '2021-09-06 01:54:00', '2021-09-06 01:54:00'),
(72, '6', NULL, '4', 'All Time2 Minute Masala Noodles 8 Pcs Pack', '1903', '10', NULL, '8 pc pack', '180', NULL, NULL, NULL, NULL, NULL, '1', NULL, 'Image/1710138280218503.jpg', NULL, NULL, '1', '2021-09-06 01:55:55', '2021-09-06 01:55:55'),
(73, '6', NULL, '32', 'Mr. Noodles Easy Magic Masala 8 Pack', '1904', '20', NULL, '8 Pack', '90', NULL, NULL, '1', NULL, NULL, NULL, NULL, 'Image/1710138377022412.jpg', NULL, NULL, '1', '2021-09-06 01:57:27', '2021-09-06 01:57:27'),
(74, '7', NULL, '29', 'Brooke Bond Black Tea 200 gm', '2001', '10', NULL, '200 gm', '100', NULL, NULL, NULL, NULL, NULL, '1', '1', 'Image/1710138499725155.jpg', NULL, NULL, '1', '2021-09-06 01:59:24', '2021-09-06 01:59:24'),
(75, '7', NULL, '21', 'Brooke Bond Taaza Danadar Tea 100 gm', '2002', '05', NULL, '100 gm', '56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710138595395413.jpg', NULL, NULL, '1', '2021-09-06 02:00:56', '2021-09-06 02:00:56'),
(76, '7', NULL, '16', 'Bru Original Coffee Jar 200 gm', '2003', '21', NULL, '200 gm', '700', NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Image/1710138671191375.jpg', NULL, NULL, '1', '2021-09-06 02:02:08', '2021-09-06 02:02:08'),
(77, '8', NULL, '4', 'Ahmed Sugar Free Apple Jelly 375 gm', '2100', '15', NULL, '375 gm', '160', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710138826354440.jpg', NULL, NULL, '1', '2021-09-06 02:04:36', '2021-09-06 02:04:36'),
(78, '8', NULL, '2', 'Chia Seeds 500 gm', '2101', '22', NULL, '500 gm', '250', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710138895018033.jpg', NULL, NULL, '1', '2021-09-06 02:05:41', '2021-09-06 02:05:41'),
(79, '8', 'NULL', '14', 'FitFood Quinoa 250 gm', '2102', '10', NULL, '250 gm', '320', '260', NULL, '1', NULL, NULL, NULL, NULL, 'Image/1710138967011690.jpg', NULL, NULL, '1', '2021-09-06 02:06:50', '2021-09-07 08:29:38'),
(80, '9', NULL, '2', 'Aarong Austagram Cheese 100 gm', '2201', '10', NULL, '100 gm', '180', NULL, NULL, NULL, NULL, NULL, '1', NULL, 'Image/1710139069604686.jpg', NULL, NULL, '1', '2021-09-06 02:08:28', '2021-09-06 02:08:28'),
(81, '9', NULL, '2', 'Aarong Dairy Butter 200 gm', '2202', '05', NULL, '200 gm', '185', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710139168959149.jpg', NULL, NULL, '1', '2021-09-06 02:10:03', '2021-09-06 02:10:03'),
(83, '9', NULL, '6', 'Instant Full Cream Powder (Foil Pack)', '2203', '10', NULL, '200 ml', '75', NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Image/1710151425461515.jpg', NULL, NULL, '1', '2021-09-06 05:24:52', '2021-09-06 05:24:52'),
(84, '6', 'Null', '21', 'Pran Hot tomato Sauce', '1905', '10', NULL, '1000 ml', '190', '170', NULL, NULL, NULL, NULL, '1', NULL, 'Image/1710769407721981.jpg', NULL, NULL, '1', '2021-09-13 01:07:26', '2021-09-13 01:08:40'),
(85, '6', NULL, '31', 'Healthy Soup Thai', '1906', '20', NULL, '35 gm', '40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710769672493554.jpg', NULL, NULL, '1', '2021-09-13 01:11:38', '2021-09-13 01:11:38'),
(86, '6', NULL, '7', 'Oats Poly Pack 500 gm', '1907', '05', NULL, '500 gm', '265', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710769745682531.jpg', NULL, NULL, '1', '2021-09-13 01:12:47', '2021-09-13 01:12:47'),
(87, '9', NULL, '2', 'Aarong Dairy Pure Ghee 200 gm', '2204', '10', NULL, '200 gm', '300', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710771165809389.jpg', NULL, NULL, '1', '2021-09-13 01:35:22', '2021-09-13 01:35:22'),
(88, '9', NULL, '8', 'Arla Dano Growth Shakti Powder Milk 200 gm', '2205', '10', NULL, '200 gm', '130', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710771329101788.jpg', NULL, NULL, '1', '2021-09-13 01:37:57', '2021-09-13 01:37:57'),
(89, '9', NULL, '28', 'Danish Condensed Milk 397 gm', '2206', '20', NULL, '397 gm', '70', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710771411779739.jpg', NULL, NULL, '1', '2021-09-13 01:39:16', '2021-09-13 01:39:16'),
(90, '9', NULL, '34', 'Marks Milk Powder Poly 1 kg', '2207', '10', NULL, '1 kg', '690', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Image/1710771580080341.jpg', NULL, NULL, '1', '2021-09-13 01:41:57', '2021-09-13 01:41:57');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `product_id`, `email`, `name`, `review`, `rating`, `status`, `created_at`, `updated_at`) VALUES
(2, '4', '33', 'chondro@gmail.com', 'Amit Paul', 'produce was good', '5', '1', '2021-09-24 07:26:37', '2021-09-24 07:26:37'),
(3, '4', '66', 'chondro@gmail.com', 'Amit Paul', 'product was good', '5', '1', '2021-09-24 07:41:22', '2021-09-24 07:41:22');

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_discription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_analytics` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bing_analytics` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Frist_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Last_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Town` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `District` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `order_id`, `Frist_Name`, `Last_Name`, `Address`, `Town`, `District`, `Zip`, `Phone`, `Email`, `addition`, `created_at`, `updated_at`) VALUES
(2, '8866', 'Amit', 'Paul', 'adfdd', 'Bogura', 'Bogra', '5840', '01712532864', 'chondro@gmail.com', NULL, NULL, NULL),
(3, '1514', 'Amit', 'Paul', 'adfdd', 'Bogura', 'Bogra', '5840', '01712532864', 'chondro@gmail.com', NULL, NULL, NULL),
(5, '1361', 'Amit', 'Paul', 'adfdd', 'Bogura', 'dd', '5840', '01712532864', 'chondro@gmail.com', NULL, NULL, NULL),
(6, '5827', 'Amit', 'Paul', 'adfdd', 'Bogura', 'Bogra', '5840', '01856435678', 'chondro@gmail.com', NULL, NULL, NULL),
(7, '9069', 'Amit', 'Paul', 'adfdd', 'Bogura', 'Bogra', '5840', '01712532864', 'chondro@gmail.com', NULL, NULL, NULL),
(8, '8267', 'Amit', 'Paul', '26/2 Juginagar Len,Wari', 'Wari', 'Dhaka', '1203', '01712532864', 'chondro.pal@gmail.com', NULL, NULL, NULL),
(9, '6687', 'Amit', 'Paul', '26/2 Juginagar Len,Wari', 'Wari', 'Dhaka', '1203', '01712532864', 'amit.pal99991@hotmail.com', NULL, NULL, NULL),
(10, '2986', 'Amit', 'Paul', '26/2 Juginagar Len,Wari', 'Wari', 'Dhaka', '1203', '01712532864', 'amit.pal99991@hotmail.com', NULL, NULL, NULL),
(11, '9033', 'Amit', 'Paul', 'adfdd', 'Bogura', 'Bogra', '5840', '01712532864', 'chondro@gmail.com', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmail_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `site_title`, `hotline`, `address`, `email`, `facebook_id`, `gmail_id`, `created_at`, `updated_at`) VALUES
(1, 'Pal Creative Ltd', '+8801712532864', '26/2 Juginagar Len,Wari,Dhaka-1203', 'info@palcreativeltd.com', 'https://www.facebook.com/profile.php?id=100022113991885', 'chondro.pal@gmail.com', NULL, '2021-09-29 07:48:37');

-- --------------------------------------------------------

--
-- Table structure for table `sub_catagories`
--

CREATE TABLE `sub_catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Catagory_id` int(11) NOT NULL,
  `SubCatagory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_catagories`
--

INSERT INTO `sub_catagories` (`id`, `Catagory_id`, `SubCatagory_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Baby Food', '2021-08-28 00:49:00', '2021-08-28 00:49:00'),
(2, 1, 'Diapers & Wipes', '2021-08-28 00:52:41', '2021-08-28 00:52:41'),
(5, 2, 'Cookies', '2021-08-28 00:53:39', '2021-08-28 00:53:39'),
(6, 3, 'Meat', '2021-08-28 00:53:52', '2021-08-28 00:53:52'),
(7, 3, 'Fish', '2021-08-28 00:54:35', '2021-08-28 00:54:35'),
(8, 4, 'Vegetables', '2021-08-28 01:00:58', '2021-08-28 01:00:58'),
(9, 4, 'Fruits', '2021-08-28 01:01:11', '2021-08-28 01:49:34'),
(10, 5, 'Oil', '2021-08-28 01:01:23', '2021-08-28 01:01:23'),
(11, 5, 'Rice', '2021-08-28 01:01:48', '2021-08-28 01:01:48'),
(12, 5, 'Salt & Sugar', '2021-08-28 01:02:19', '2021-08-28 01:02:19'),
(14, 5, 'Atta & Other Flours', '2021-08-28 01:22:09', '2021-08-28 01:22:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `utype`, `provider`, `provider_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@palcreativeltd.com', '1', NULL, NULL, NULL, '$2y$10$9sGFpvbVmkgSCvQAb7QnLOnFGxAQ8PiTcQqEX54rwmYOWr1Kpf3kS', NULL, '2021-08-26 09:25:43', '2021-08-26 09:25:43'),
(3, 'Amit Paul', 'chondro@gmail.com', '0', NULL, NULL, NULL, '$2y$10$xELRYFoFdela58Tch2VeGO9eWIfG0v9gMggEzvWN1hC8JqpGmktp6', NULL, '2021-09-14 01:18:00', '2021-09-14 01:18:00'),
(4, 'chondro pal', 'chondro.pal@gmail.com', '0', 'google', '103662732995752090518', NULL, '$2y$10$9wAfZeBQB.ASih2uKadeFeb4dhZ5A/vaEVSJ0EHtIXknmwmfQGeqy', NULL, '2021-09-18 23:50:49', '2021-09-25 08:13:54'),
(5, 'Amit Paul', 'amit.pal99991@hotmail.com', '0', NULL, NULL, NULL, '$2y$10$u4DDZRMauQ.Qd0jKXpItKOIeoyoAxYvRBbxOX24ygAY29eOvNujCC', NULL, '2021-09-25 07:55:27', '2021-09-25 08:03:42'),
(6, 'sabuj', 'sabuj@gmail.com', '0', NULL, NULL, NULL, '$2y$10$24QyTUcL/pHuDrTznyzCw.kFM3QHL5xbGQMNU1xD3rMB1UiWhwCTm', NULL, '2021-10-04 03:30:16', '2021-10-04 03:30:16'),
(7, 'Amit Paul', 'chondro.paula@gmail.com', '0', NULL, NULL, NULL, '$2y$10$28AGnMF4SX8cyjaV2taym.FJlHVNREa1z60FA3aL6katHxY8TKXYq', NULL, '2021-11-29 09:11:49', '2021-11-29 09:11:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_catagories`
--
ALTER TABLE `sub_catagories`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_catagories`
--
ALTER TABLE `sub_catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
