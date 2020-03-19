-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 19, 2020 at 01:17 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Lenovo', 'Lenovo Brand Description', 1, '2020-03-05 15:17:32', '2020-03-05 15:46:27'),
(3, 'WALTON', 'WALTON Brand Description', 1, '2020-03-05 15:57:41', '2020-03-05 15:57:41'),
(4, 'SAMSUNG', 'SAMSUNG Brand Description', 1, '2020-03-05 15:57:50', '2020-03-05 15:57:50'),
(5, 'LG', 'LG Brand Description', 1, '2020-03-05 15:58:01', '2020-03-05 15:58:01'),
(6, 'OTOBI', 'OTOBI Brand Description', 1, '2020-03-05 15:58:10', '2020-03-05 15:58:10'),
(7, 'HP', 'HP Brand Description', 1, '2020-03-06 13:03:32', '2020-03-06 13:03:32'),
(8, 'Adidas', 'Adidas Brand Description', 1, '2020-03-06 13:46:25', '2020-03-06 13:46:25'),
(9, 'Fila', 'Fila Brand', 1, '2020-03-06 15:54:00', '2020-03-06 15:54:00'),
(10, 'Hero', 'Hero Brad', 1, '2020-03-06 15:54:27', '2020-03-06 15:54:27'),
(11, 'Regal Emporium', 'Regal Emporium Brand', 1, '2020-03-06 16:24:09', '2020-03-06 16:24:09'),
(12, 'Navana Furniture', 'Navana Furniture', 1, '2020-03-06 16:24:28', '2020-03-06 16:24:28'),
(13, 'Tepantor Furniture', 'Tepantor Furniture', 1, '2020-03-06 16:24:37', '2020-03-06 16:24:37'),
(14, 'HATIL Furniture', 'HATIL Furniture', 1, '2020-03-06 16:24:53', '2020-03-06 16:24:53'),
(15, 'ASUS', 'ASUS BRAND', 1, '2020-03-06 16:34:57', '2020-03-06 16:34:57'),
(16, 'ROG ZEPHYRUS', 'ROG ZEPHYRUS Brand', 1, '2020-03-06 16:36:59', '2020-03-06 16:36:59'),
(17, 'DELL', 'DELL Brand', 1, '2020-03-06 16:39:00', '2020-03-06 16:39:00'),
(18, 'CA', 'CA brand', 1, '2020-03-06 16:47:58', '2020-03-06 16:47:58'),
(19, 'HOT DOT', 'HOT DOT brand', 1, '2020-03-06 16:48:21', '2020-03-06 16:48:21'),
(20, 'Phonix', 'Phonix Brand', 1, '2020-03-06 16:48:56', '2020-03-06 16:48:56');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Computer', 'Computer Area', 1, '2020-02-11 02:50:42', '2020-02-11 02:51:35'),
(2, 'Furniture', 'Furniture Area', 1, '2020-02-11 02:51:00', '2020-02-11 02:51:00'),
(3, 'Menz Clothing', 'Menz Clothing Area', 1, '2020-02-11 02:51:13', '2020-03-06 09:38:41'),
(4, 'Women Clothing', 'Women Clothing Area', 1, '2020-03-06 09:38:59', '2020-03-06 09:38:59'),
(5, 'Books', 'Books Area', 1, '2020-03-06 09:39:15', '2020-03-06 09:39:15'),
(6, 'Utensils', 'Utensils Description', 0, '2020-03-06 09:40:37', '2020-03-06 09:40:37'),
(7, 'Sports', 'Sports Description', 1, '2020-03-06 13:45:48', '2020-03-06 13:45:48');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email_address`, `password`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(9, 'Tamim', 'AIqbal', 'baratahmed12303@gmail.com', '$2y$10$uLsgPTYvMZRCWXv/ibdVi.8CAwG8ujGM8MT9Zg8QuuDTnwbgEgkdm', '01706351202', '1 no police gate, Dampara, WASA, Chittagong.', '2020-03-08 03:35:43', '2020-03-08 03:35:43'),
(10, 'Sakib', 'Al Hasan', 'baratahmed12302@gmail.com', '$2y$10$rNZ1/hSDN/AqRCoWCQ0O7epAd3nzRCH9Chns.pnVF2o3LpA.dQVAS', '01706351202', '1 no police gate, Dampara, WASA, Chittagong.', '2020-03-09 10:21:40', '2020-03-09 10:21:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(4, '2020_02_11_120306_create_categories_table', 2),
(5, '2020_02_11_173708_create_brands_table', 3),
(6, '2020_02_12_084818_create_products_table', 4),
(7, '2020_03_08_073826_create_customers_table', 5),
(8, '2020_03_08_075344_create_shippings_table', 5),
(9, '2020_03_08_075423_create_payments_table', 5),
(10, '2020_03_08_075506_create_orders_table', 5),
(11, '2020_03_08_075521_create_order_details_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` double(10,2) NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `shipping_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 9, 1, 13000.00, 'pending', '2020-03-08 03:49:32', '2020-03-08 03:49:32'),
(2, 10, 2, 13000.00, 'pending', '2020-03-09 10:22:00', '2020-03-09 10:22:00'),
(3, 9, 3, 5000.00, 'pending', '2020-03-09 17:19:25', '2020-03-09 17:19:25');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 21, 'Phonix Cycle', 13000.00, 1, '2020-03-08 03:49:32', '2020-03-08 03:49:32'),
(2, 2, 21, 'Phonix Cycle', 13000.00, 1, '2020-03-09 10:22:00', '2020-03-09 10:22:00'),
(3, 3, 23, 'The Surfleash', 500.00, 4, '2020-03-09 17:19:25', '2020-03-09 17:19:25'),
(4, 3, 22, 'BADMINTON', 2000.00, 1, '2020-03-09 17:19:25', '2020-03-09 17:19:25'),
(5, 3, 20, 'CA BAT', 1000.00, 1, '2020-03-09 17:19:25', '2020-03-09 17:19:25');

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `payment_type`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cash', 'pending', '2020-03-08 03:49:32', '2020-03-08 03:49:32'),
(2, 2, 'Cash', 'pending', '2020-03-09 10:22:00', '2020-03-09 10:22:00'),
(3, 3, 'Cash', 'pending', '2020-03-09 17:19:25', '2020-03-09 17:19:25');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `product_name`, `product_price`, `product_quantity`, `short_description`, `long_description`, `product_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(3, 1, 1, 'Lenovo-Ideapad', 49000.00, 23, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'product-images/IMG1583521697Lenovo-Ideapad.png', 1, '2020-03-06 13:08:17', '2020-03-06 13:08:17'),
(4, 1, 7, 'HP Ideapad', 39000.00, 21, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'product-images/IMG1583521763HP Ideapad.jpg', 1, '2020-03-06 13:09:23', '2020-03-06 13:09:23'),
(5, 2, 6, 'Chair', 5000.00, 20, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'product-images/IMG1583522731Chair.jpeg', 1, '2020-03-06 13:25:31', '2020-03-07 09:44:50'),
(6, 2, 6, 'Table', 10000.00, 15, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'product-images/IMG1583522759Table.jpg', 1, '2020-03-06 13:25:59', '2020-03-06 14:04:14'),
(7, 3, 9, 'T-Shirt', 2000.00, 78, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'product-images/IMG1583532736T-Shirt.jpg', 1, '2020-03-06 15:56:21', '2020-03-06 16:12:16'),
(8, 2, 11, 'Bernhardt Calista', 59000.00, 25, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'product-images/IMG1583533597Bernhardt Calista.jpg', 1, '2020-03-06 16:26:37', '2020-03-06 16:26:37'),
(9, 2, 12, 'Dining Sets', 60000.00, 12, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'product-images/IMG1583533648Dining Sets.jpg', 1, '2020-03-06 16:27:28', '2020-03-06 16:27:28'),
(10, 2, 13, 'Chair Table', 45000.00, 3, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'product-images/IMG1583533734Chair Table.jpg', 1, '2020-03-06 16:28:55', '2020-03-06 16:28:55'),
(11, 2, 14, 'Hero Thoroughbred', 40000.00, 5, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'product-images/IMG1583533785Hero Thoroughbred.jpg', 1, '2020-03-06 16:29:45', '2020-03-06 16:29:45'),
(12, 2, 11, 'Normal Sofa', 25000.00, 6, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'product-images/IMG1583533834Normal Sofa.jpeg', 1, '2020-03-06 16:30:34', '2020-03-06 16:30:34'),
(13, 2, 12, 'Presidio Reclining', 70000.00, 5, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', '`Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'product-images/IMG1583533929Presidio Reclining.jpg', 1, '2020-03-06 16:32:09', '2020-03-06 16:32:09'),
(14, 1, 5, 'LG Notebook', 25000.00, 12, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'product-images/IMG1583534010LG Notebook.jpg', 1, '2020-03-06 16:33:31', '2020-03-06 16:33:31'),
(15, 1, 7, 'HP Expectre Pro', 80000.00, 16, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'product-images/IMG1583534062HP Expectre Pro.jpg', 1, '2020-03-06 16:34:22', '2020-03-06 16:34:22'),
(16, 1, 15, 'ASUS NOTEBOOK', 22000.00, 20, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'product-images/IMG1583534133ASUS NOTEBOOK.jpg', 1, '2020-03-06 16:35:33', '2020-03-06 16:35:33'),
(17, 1, 1, 'Gaming PC', 85000.00, 13, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'product-images/IMG1583534172Gaming PC.jpg', 1, '2020-03-06 16:36:13', '2020-03-06 16:36:13'),
(18, 1, 16, 'Gaming PC two', 75000.00, 13, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'product-images/IMG1583534322Gaming PC two.jpg', 1, '2020-03-06 16:38:43', '2020-03-06 16:38:43'),
(19, 1, 17, 'Dell Ideapad', 33000.00, 15, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'product-images/IMG1583534376Dell Ideapad.jpg', 1, '2020-03-06 16:39:36', '2020-03-06 16:39:36'),
(20, 7, 18, 'CA BAT', 1000.00, 12, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'product-images/IMG1583535019CA BAT.jpg', 1, '2020-03-06 16:50:19', '2020-03-06 16:50:19'),
(21, 7, 20, 'Phonix Cycle', 13000.00, 25, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'product-images/IMG1583535048Phonix Cycle.jpg', 1, '2020-03-06 16:50:48', '2020-03-06 16:50:48'),
(22, 7, 19, 'BADMINTON', 2000.00, 19, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'product-images/IMG1583535101BADMINTON.jpg', 1, '2020-03-06 16:51:41', '2020-03-06 16:51:41'),
(23, 7, 19, 'The Surfleash', 500.00, 25, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, nihil unde. Eligendi, fuga perspiciatis incidunt exercitationem in sequi quam ut mollitia ex molestiae accusamus veritatis non. Rem id quam aliquam?', 'product-images/IMG1583535169The Surfleash.jpg', 1, '2020-03-06 16:52:49', '2020-03-06 16:52:49');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `full_name`, `email_address`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Barat Ahmed', 'baratahmed12303@gmail.com', '01706351202', '1 no police gate, Dampara, WASA, Chittagong.', '2020-03-08 03:41:00', '2020-03-08 03:41:00'),
(2, 'Barat Ahmed 2', 'baratahmed12302@gmail.com', '01706351202', '1 no police gate, Dampara, WASA, Chittagong.', '2020-03-09 10:21:55', '2020-03-09 10:21:55'),
(3, 'Barat Ahmed', 'baratahmed12303@gmail.com', '01706351202', '1 no police gate, Dampara, WASA, Chittagong.', '2020-03-09 17:19:21', '2020-03-09 17:19:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$PSzUt.nj8lZdQ/rvES71zeXfq3TxzE6uVUJeih.owPnjmojDZcKoS', '0cHWZch5GryBCam4sZUBEbvJhcMoOAcpnk7NaUmmad9drITrZdwbOFygylLd', '2020-02-11 05:56:54', '2020-02-11 05:56:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_address_unique` (`email_address`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
