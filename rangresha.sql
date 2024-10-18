-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2024 at 10:22 AM
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
-- Database: `rangresha`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Office Accessories', 'office-accessories', '1711707211.jpg', '2024-03-20 01:38:29', '2024-03-29 10:13:31'),
(2, 'Bag', 'bag', '1711706129.jpg', '2024-03-20 01:39:22', '2024-03-29 09:55:29'),
(3, 'Purses', 'purses', '1711706069.jpg', '2024-03-20 01:40:51', '2024-03-29 09:54:29'),
(5, 'Gift item', 'gift-item', '1711706506.jpg', '2024-03-20 01:42:52', '2024-03-29 10:01:46'),
(6, 'Home Decor', 'home-decor', '1711707442.jpg', '2024-03-20 01:44:50', '2024-03-29 10:17:22'),
(7, 'Spiritual Accessories', 'spiritual-accessories', '1711706858.jpg', '2024-03-20 01:45:39', '2024-03-29 10:07:38'),
(8, 'Souvenirs', 'souvenirs', '1711708347.jpg', '2024-03-20 01:46:40', '2024-03-29 10:32:27'),
(9, 'Unique Products', 'unique-products', '1711707749.jpg', '2024-03-20 01:47:42', '2024-03-29 10:22:29'),
(10, ' Other Accessories', 'other-accessories', '1711708119.jpg', '2024-03-20 01:48:52', '2024-03-29 10:28:39');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `lastname`, `email`, `phone`, `msg`, `created_at`, `updated_at`) VALUES
(1, 'pranali', 'rahangdale', 'p@gmail.com', 'p@gmail.com', 'swderesr', '2024-03-08 08:08:24', '2024-03-08 08:08:24'),
(2, 'sada', 'ddse', 'dzd@dfd.dff', '12345678963', 'dsdr', '2024-03-08 08:14:17', '2024-03-08 08:14:17'),
(3, 'zdfdx', 'fxg', 'fdxf@fdrgd.fxdgcf', '1234569874', 'sffrf', '2024-03-08 08:16:13', '2024-03-08 08:16:13'),
(4, 'dff', 'dff', 'pranali@gmail.com', '7894561236', 'drgdrrfyf', '2024-03-08 08:35:45', '2024-03-08 08:35:45'),
(5, 'fgfh', 'hjh', 'fu@gma.com', '1234567896', 'gjgfjh', '2024-03-08 23:20:09', '2024-03-08 23:20:09'),
(6, 'dfdf', 'dfxdf', 'fdxf@fdrgd.fxdgcf', '1234567896', 'sfsrgdrg', '2024-03-08 23:25:04', '2024-03-08 23:25:04'),
(7, 'dfdf', 'ddse', 'fdxf@fdrgd.fxdgcf', '1234567896', 'vcghv', '2024-03-08 23:25:56', '2024-03-08 23:25:56'),
(8, 'desr', 'dsfsr', 'fdxf@fdrgd.fxdgcf', '1234567896', 'Ut eget mattis lacus, sit amet accumsan erat. Integer suscipit justo vel iaculis scelerisque. Nam vel porta augue.', '2024-03-08 23:27:12', '2024-03-08 23:27:12'),
(9, 'dff', 'dfxdf', 'fdxf@fdrgd.fxdgcf', '1234567896', 'Ut eget mattis lacus, sit amet accumsan erat. Integer suscipit justo vel iaculis scelerisque. Nam vel porta augue.', '2024-03-08 23:28:01', '2024-03-08 23:28:01'),
(10, 'dff', 'dfxdf', 'fdxf@fdrgd.fxdgcf', '1234567896', 'Ut eget mattis lacus, sit amet accumsan erat. Integer suscipit justo vel iaculis scelerisque. Nam vel porta augue.', '2024-03-08 23:29:02', '2024-03-08 23:29:02'),
(11, 'desr', 'ddse', 'dzd@dfd.dff', '1234567896', 'adwar fsefsrgf ssfsrf', '2024-03-08 23:44:07', '2024-03-08 23:44:07'),
(12, 'dfdf', 'dff', 'dzd@dfd.dff', '1234567896', 'sfsf ffs ff', '2024-03-08 23:46:45', '2024-03-08 23:46:45'),
(13, 'fgfh', 'dff', 'fdxf@fdrgd.fxdgcf', '1234567896', 'sret tete v', '2024-03-08 23:48:55', '2024-03-08 23:48:55'),
(14, 'fgfh', 'dff', 'fdxf@fdrgd.fxdgcf', '1234567896', 'sret tete v', '2024-03-08 23:49:57', '2024-03-08 23:49:57'),
(15, 'sada', 'dsfsr', 'dzd@dfd.dff', '1234567896', 'awdse fsf', '2024-03-08 23:51:45', '2024-03-08 23:51:45'),
(16, 'dfdf', 'dff', 'dzd@dfd.dff', '1234567896', 'gvhkg', '2024-03-08 23:54:02', '2024-03-08 23:54:02'),
(17, 'dff', 'ddse', 'fdxf@fdrgd.fxdgcf', '1234567896', 'fhcgh gcgj', '2024-03-08 23:54:55', '2024-03-08 23:54:55'),
(18, 'dfdf', 'ddse', 'fdxf@fdrgd.fxdgcf', '1234567896', 'ffr gtgrt', '2024-03-08 23:57:00', '2024-03-08 23:57:00'),
(19, 'dff', 'dff', 'fdxf@fdrgd.fxdgcf', '1234567896', 'vhjvhk jgvhj', '2024-03-08 23:57:50', '2024-03-08 23:57:50'),
(20, 'fgfh', 'dfxdf', 'dzd@dfd.dff', '1234567896', 'vjbvhj', '2024-03-09 00:00:24', '2024-03-09 00:00:24'),
(21, 'zdfdx', 'hjh', 'fdxf@fdrgd.fxdgcf', '1234567896', 'sd dfdrg', '2024-03-09 00:03:12', '2024-03-09 00:03:12'),
(22, 'dfdf', 'dff', 'fdxf@fdrgd.fxdgcf', '1234567896', 'jvhj ghvhj', '2024-03-09 00:03:42', '2024-03-09 00:03:42'),
(23, 'dfdf', 'dff', 'fdxf@fdrgd.fxdgcf', '1234567896', 'jvhj ghvhj', '2024-03-09 00:04:50', '2024-03-09 00:04:50'),
(24, 'pranali', 'bhagat', 'pranali@gmail.com', '1234567896', 'good ', '2024-03-09 00:13:43', '2024-03-09 00:13:43'),
(25, 'abhi', 'abhi', 'a@gmail.com', '1234567896', 'best classes', '2024-03-09 00:40:50', '2024-03-09 00:40:50'),
(26, 'sada', 'dfxdf', 'dzd@dfd.dff', '1234567896', 'ghcgjj hvjh', '2024-03-09 01:02:50', '2024-03-09 01:02:50'),
(27, 'pranali', 'rahangdale', 'pranali@gmail.com', '7894561236', 'best classes', '2024-03-09 01:04:09', '2024-03-09 01:04:09'),
(28, 'pranali', 'bhagat', 'pranali@gmail.com', '7894561236', 'best', '2024-03-09 01:10:41', '2024-03-09 01:10:41'),
(29, 'abhi', 'abhi', 'a@gmail.com', '1234567896', 'best chemistry classes', '2024-03-09 01:12:08', '2024-03-09 01:12:08');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `type` enum('fixed','percent') NOT NULL,
  `value` decimal(8,2) NOT NULL,
  `cart_value` decimal(8,2) NOT NULL,
  `expiry_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type`, `value`, `cart_value`, `expiry_date`, `created_at`, `updated_at`) VALUES
(1, 'save100', 'fixed', 100.00, 500.00, '2024-03-28', '2024-03-21 09:35:20', '2024-03-21 09:35:20'),
(2, 'save', 'fixed', 200.00, 500.00, '2024-03-30', '2024-03-21 11:01:02', '2024-03-21 11:01:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_04_082153_create_categories_table', 2),
(6, '2024_03_04_082211_create_products_table', 2),
(7, '2024_03_08_133108_create_contacts_table', 3),
(8, '2024_03_21_093243_create_coupons_table', 4),
(9, '2024_03_21_125112_create_orders_table', 5),
(10, '2024_03_21_125133_create_order_items_table', 5),
(11, '2024_03_21_125148_create_transactions_table', 5),
(12, '2024_03_23_062037_create_sales_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subtotal` varchar(255) NOT NULL,
  `discount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `tax` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL DEFAULT 0.00,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `status` enum('ordered','delivered','canceled') NOT NULL DEFAULT 'ordered',
  `is_shipping_different` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `subtotal`, `discount`, `tax`, `total`, `firstname`, `lastname`, `phone`, `email`, `address`, `city`, `state`, `zipcode`, `status`, `is_shipping_different`, `created_at`, `updated_at`) VALUES
(1, 5, '1,260.00', 0.00, 264.60, 0.00, 'vedant', 'rahangdale', '9632587412', 'dd@dd.ccfdfg', 'wadi', 'nagpur', 'maharashtra', '440013', 'ordered', 0, '2024-03-22 01:35:36', '2024-03-22 01:35:36'),
(2, 7, '1,260.00', 0.00, 264.60, 0.00, 'abhi', 'rahangdale', '7418529632', 'xzsd@df.dxxchvh', 'wadi', 'efrfrf', 'mh', '440013', 'ordered', 0, '2024-03-22 01:47:05', '2024-03-22 01:47:05'),
(3, 9, '650.00', 0.00, 136.50, 0.00, 'angel', 'nipane', '7418529632', 'dd@dd.cc', 'wadi', 'nagpur', 'mhfgf', '440013', 'ordered', 0, '2024-03-22 02:05:28', '2024-03-22 02:05:28'),
(4, 12, '100.00', 0.00, 21.00, 0.00, 'angel', 'bhagat', '7418529632', 'xzsd@df.dxhh', 'wadi', 'nagpur', 'mhfgf', '440013', 'ordered', 0, '2024-03-22 03:22:09', '2024-03-22 03:22:09'),
(5, 15, '100.00', 0.00, 21.00, 0.00, 'nikita', 'hurde', '07748837122', 'pihu@gmail.com', 'teegaon', 'pandhurna', 'mp', '338480', 'ordered', 0, '2024-06-30 10:26:17', '2024-06-30 10:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `product_id`, `order_id`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 650.00, 1, '2024-03-22 01:35:36', '2024-03-22 01:35:36'),
(2, 10, 1, 120.00, 3, '2024-03-22 01:35:37', '2024-03-22 01:35:37'),
(3, 8, 1, 250.00, 1, '2024-03-22 01:35:37', '2024-03-22 01:35:37'),
(4, 2, 2, 650.00, 1, '2024-03-22 01:47:05', '2024-03-22 01:47:05'),
(5, 10, 2, 120.00, 3, '2024-03-22 01:47:05', '2024-03-22 01:47:05'),
(6, 8, 2, 250.00, 1, '2024-03-22 01:47:06', '2024-03-22 01:47:06'),
(7, 2, 3, 650.00, 1, '2024-03-22 02:05:28', '2024-03-22 02:05:28'),
(8, 1, 4, 100.00, 1, '2024-03-22 03:22:09', '2024-03-22 03:22:09'),
(9, 1, 5, 100.00, 1, '2024-06-30 10:26:17', '2024-06-30 10:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `short_description` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `sale_price` decimal(8,2) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `mrp` decimal(8,2) DEFAULT NULL,
  `sku` varchar(255) NOT NULL,
  `stock_status` enum('instock','outofstock') NOT NULL,
  `featured` varchar(255) DEFAULT NULL,
  `stock` int(10) UNSIGNED NOT NULL DEFAULT 10,
  `popular_pro` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL,
  `images` text DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `short_description`, `description`, `sale_price`, `price`, `mrp`, `sku`, `stock_status`, `featured`, `stock`, `popular_pro`, `image`, `images`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Pen Stand with Fabric Cover', 'pen-stand-with-fabric-cover', 'It is a foldable pen stand made of handmade paper board inside. It is covered with pain handmade paper from inside and with handprinted warli print fabric from outside. It is foldable product which can be shipped in an envelop. Goes great with handmade paper diary.', 'It is a foldable pen stand made of handmade paper board inside. It is covered with pain handmade paper from inside and with handprinted warli print fabric from outside. It is foldable product which can be shipped in an envelop. Goes great with handmade paper diary.', 90.00, 100.00, 100.00, 'RANGRESHA-SS-PS-HXG', 'instock', NULL, 18, 1, '1712231095.png', NULL, 1, '2024-03-20 01:59:44', '2024-06-30 10:26:17'),
(2, 'Handmade Cotton Tote Bags', 'handmade-cotton-tote-bags', 'Meet our new Companion, the everyday tote bag. A step closer to plastic-free environment. This curated handcrafted Rangresha Tote bag is hand-block printed  by Local Artisans with the goal of preserving the environment. Handmade Tote bag is soft and lightweight, yet sturdy, with wide straps and a zip compartment. It is a multifunctional, environment friendly, and a vintage styled beautiful bag.', 'Meet our new Companion, the everyday tote bag. A step closer to plastic-free environment. This curated handcrafted Rangresha Tote bag is hand-block printed  by Local Artisans with the goal of preserving the environment. Handmade Tote bag is soft and lightweight, yet sturdy, with wide straps and a zip compartment. It is a multifunctional, environment friendly, and a vintage styled beautiful bag.', 600.00, 650.00, 650.00, 'RangResha-BB-TB-01', 'instock', NULL, 18, 1, '1712223108.png', NULL, 2, '2024-03-20 02:02:30', '2024-04-04 09:31:48'),
(3, 'Handloom Fabric Utility pouch', 'handloom-fabric-utility-pouch', 'These pouches are stylish, comfortable, compact, easy to carry, lightweight. This pouch could be used to store your belonging and can be used as cosmetic bag, toiletry bag, coin bag, money bag, Mobile bag, pouch or Travel Essentials, etc. Classic and solid bright colour make the bag very trendy & beautiful which adds shining stars to your personality. Made with handloom cotton fabric with precise stitching. Featuring a double compartment and zipper opening which means accessing its contents is always going to be simple and easy.', 'These pouches are stylish, comfortable, compact, easy to carry, lightweight. This pouch could be used to store your belonging and can be used as cosmetic bag, toiletry bag, coin bag, money bag, Mobile bag, pouch or Travel Essentials, etc. Classic and solid bright colour make the bag very trendy & beautiful which adds shining stars to your personality. Made with handloom cotton fabric with precise stitching. Featuring a double compartment and zipper opening which means accessing its contents is always going to be simple and easy.', NULL, 300.00, 300.00, 'HFUP_D008', 'instock', NULL, 20, 0, '1712212136.jpg', NULL, 3, '2024-03-20 02:05:09', '2024-04-04 06:28:56'),
(4, 'Block Printed Toran', 'block-printed-toran', 'Add a traditional touch to your Diwali by Rangresha products. Colourful Silk Toran is made of cotton silk. These Toran hand block printed design. Length: 36”', 'Add a traditional touch to your Diwali by Rangresha products. Colourful Silk Toran is made of cotton silk. These Toran hand block printed design. Length: 36”', NULL, 550.00, 550.00, ' BPT_D18', 'instock', NULL, 20, 0, '1712231138.png', NULL, 6, '2024-03-20 02:06:48', '2024-04-04 11:45:38'),
(5, 'Eco Gifts- (Grey Diary Cover with Diary)', 'eco-gifts-grey-diary-cover-with-diary', 'Ideal Corporate Gift Set A formal gift to appreciate and strengthen relationship. Incredible Packaging All the accessories in this gift set is packed in a box that can be readily presented to your loved on. Get customized combo with personalised diary, wallet and keychain. Diary size 6.5″X9.5″ with 130 pages. Personalised cotton cover with warli motif unisex wallet and a keychain are also included. It is best for gifting to employees, office staff and bosses.', 'Ideal Corporate Gift Set A formal gift to appreciate and strengthen relationship. Incredible Packaging All the accessories in this gift set is packed in a box that can be readily presented to your loved on. Get customized combo with personalised diary, wallet and keychain. Diary size 6.5″X9.5″ with 130 pages. Personalised cotton cover with warli motif unisex wallet and a keychain are also included. It is best for gifting to employees, office staff and bosses.', 700.00, 800.00, 800.00, 'EG_D015', 'instock', NULL, 20, 0, '1712222987.png', NULL, 5, '2024-03-20 02:14:05', '2024-04-04 09:29:47'),
(7, 'FABRIC FOLDING CIRCULAR DURGA LAMP SHADE', 'fabric-folding-circular-durga-lamp-shade', 'Dazzle your display with this ethnic fabric lantern. The lampshade highlights the Warli art form and emphasises the design. What’s more, this lantern is foldable, easy-to-use and ship.  A bulb of 0 to 40 watt will optimise the impact of this work of art. The product can be customized and is best suited for theme decoration purposes.', 'Dazzle your display with this ethnic fabric lantern. The lampshade highlights the Warli art form and emphasises the design. What’s more, this lantern is foldable, easy-to-use and ship.  A bulb of 0 to 40 watt will optimise the impact of this work of art. The product can be customized and is best suited for theme decoration purposes.', NULL, 450.00, 450.00, ' RANGRESHA-HD-LSL-C-Y-DURGA', 'instock', NULL, 20, 0, '1712231176.png', NULL, 7, '2024-03-20 02:19:16', '2024-04-04 11:46:16'),
(8, 'Conference Bags', 'conference-bags', 'The customized conference bags in Canvas, Grey cotton or thick cotton mixed terricot fabric and with a shoulder belt and a zip and/or a cover flap embellished with Warli tribal print or block print can be made as per the order.', 'The customized conference bags in Canvas, Grey cotton or thick cotton mixed terricot fabric and with a shoulder belt and a zip and/or a cover flap embellished with Warli tribal print or block print can be made as per the order.', NULL, 250.00, 250.00, 'RANGRESHA-BB-CB', 'instock', NULL, 9, 0, '1712231195.png', NULL, 8, '2024-03-20 02:21:35', '2024-04-04 11:46:35'),
(9, 'Exclusive Stationery Gift Hamper-Red Block print', 'exclusive-stationery-gift-hamper-red-block-print', 'A stationery gift hamper is an excellent choice for any occasion or age group. These curated, handcrafted, and eco-friendly gifts will make someone feel special. This stationery gift Combo includes a cloth Zip file folder, a document cover for important documents, a diary, and a lovely cloth wallet. Local artisans made these handcrafted items. The combination set’s articles are all beautifully handmade block-printed, making them one-of-a-kind.', 'A stationery gift hamper is an excellent choice for any occasion or age group. These curated, handcrafted, and eco-friendly gifts will make someone feel special. This stationery gift Combo includes a cloth Zip file folder, a document cover for important documents, a diary, and a lovely cloth wallet. Local artisans made these handcrafted items. The combination set’s articles are all beautifully handmade block-printed, making them one-of-a-kind.', NULL, 1000.00, 1000.00, 'ESGH-RBP_D21', 'instock', NULL, 20, 0, '1710921221.png', NULL, 9, '2024-03-20 02:23:41', '2024-03-20 02:23:41'),
(10, 'Mobile Charging Station', 'mobile-charging-station', 'Mobile charging station holds your phone while charging. Typically, charger cords are small and mobile phone keeps hanging while it is charging and can get damaged if it falls. Your mobile is safe while charging. If you use mobile charging station when you are not charging your mobile, ethnic design of mobile charging station/stand adds beautiful element to your wall.', 'Mobile charging station holds your phone while charging. Typically, charger cords are small and mobile phone keeps hanging while it is charging and can get damaged if it falls. Your mobile is safe while charging. If you use mobile charging station when you are not charging your mobile, ethnic design of mobile charging station/stand adds beautiful element to your wall.', NULL, 120.00, 120.00, 'RANGRESHA-OA-MCS-01', 'instock', NULL, 17, 0, '1712231225.png', NULL, 10, '2024-03-20 02:26:42', '2024-04-04 11:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sale_date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `sale_date`, `status`, `created_at`, `updated_at`) VALUES
(1, '2024-03-29 12:27:17', 1, '2024-03-23 06:57:17', '2024-03-23 06:57:17');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `mode` enum('cod','upi') NOT NULL,
  `status` enum('pending','approved','declined','refunded') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `order_id`, `mode`, `status`, `created_at`, `updated_at`) VALUES
(1, 12, 4, 'cod', 'pending', '2024-03-22 03:22:09', '2024-03-22 03:22:09'),
(2, 15, 5, 'cod', 'pending', '2024-06-30 10:26:17', '2024-06-30 10:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `utype` varchar(255) NOT NULL DEFAULT 'USR' COMMENT 'ADM for Admin and USR for user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `utype`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'pranali', 'pranali@gmail.com', NULL, '$2y$12$4TDMR2GtYLVnkK99SAP9J.N4y/iUN/R2NczzfR1LDw6BU060HN4bC', 'USR', NULL, '2024-03-04 02:17:00', '2024-03-04 02:17:00'),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$12$OZjtJbamyRoVxRWmlyqCUOvonHRdWymfFHF3fleaUPPT65spoKu3y', 'ADM', NULL, '2024-03-04 02:45:26', '2024-03-04 02:45:26'),
(3, 'pranali', 'xzsd@df.dx', NULL, '$2y$12$8QM5lervhyKFqC3fY5sMIOvxFSCOYSzVHi5ON7HaulsfA.H6ED9O.', 'USR', NULL, '2024-03-22 01:32:36', '2024-03-22 01:32:36'),
(4, 'pranali', 'daveghosh85@gmail.com', NULL, '$2y$12$gCMJmuE7qr2CSpVDnaxOxOqzZvDkWxV2PCYug3yVJHHG4YmrHk3U2', 'USR', NULL, '2024-03-22 01:34:31', '2024-03-22 01:34:31'),
(5, 'vedant', 'dd@dd.ccfdfg', NULL, '$2y$12$590c8Ojah0feMHRTAQjTy.foE8F0fep/POkNJM9h.EWrztFRz6H2m', 'USR', NULL, '2024-03-22 01:35:36', '2024-03-22 01:35:36'),
(7, 'abhi', 'xzsd@df.dxxchvh', NULL, '$2y$12$65Ox0lp3Eljx9cgLFNVVh.g/wVVzFBvLH1gDVb1USi9ZiTeY0N1ue', 'USR', NULL, '2024-03-22 01:47:05', '2024-03-22 01:47:05'),
(9, 'angel', 'dd@dd.cc', NULL, '$2y$12$Yq.n8uE0slcL5sghaLlOn.asX9b0DjapiVvhivv2pb5VdPK5bcjKG', 'USR', NULL, '2024-03-22 02:05:28', '2024-03-22 02:05:28'),
(12, 'angel', 'xzsd@df.dxhh', NULL, '$2y$12$VJTQ50wGTgiflpWdRzWio.Ohkyv746SpSEnmDmHJiyy6qiEqImIPK', 'USR', NULL, '2024-03-22 03:22:09', '2024-03-22 03:22:09'),
(14, 'admin', 'nikitahurde@gmail.com', NULL, '$2y$12$QcEXItdNEZsgw/eIXDfAVOd5/wNYtO/P1qon9xYrHcNHIpr9PYQ2q', 'ADM', NULL, '2024-06-07 01:22:30', '2024-06-07 01:22:30'),
(15, 'nikita', 'pihu@gmail.com', NULL, '$2y$12$2QVu8My3L3c9DoAQeQO.EOSXRS7qYVLPYpE8B.kJL37UwkAZGxD7.', 'USR', NULL, '2024-06-30 10:26:17', '2024-06-30 10:26:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`category_name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`),
  ADD KEY `transactions_order_id_foreign` (`order_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
