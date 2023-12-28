-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 26, 2023 at 12:52 PM
-- Server version: 10.6.15-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u856343279_wayin`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_processes`
--

CREATE TABLE `account_processes` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account_processes`
--

INSERT INTO `account_processes` (`id`, `icon`, `title`, `details`, `created_at`, `updated_at`) VALUES
(1, 'fas fa-phone', 'Make a Reservation', '<br>', '2022-02-21 04:29:32', '2023-10-14 14:54:49'),
(2, 'fas fa-mail-bulk', 'Review Listings', '<br>', '2022-02-21 04:29:57', '2023-10-14 14:55:06'),
(3, 'fas fa-globe', 'Find Businesses', '<br>', '2022-02-21 04:30:19', '2023-10-14 14:55:15');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `role_id` tinyint(4) NOT NULL DEFAULT 0,
  `photo` varchar(191) DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `direction` varchar(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `role_id`, `photo`, `password`, `address`, `website`, `direction`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '01629552892', 0, 'YnyBQHaX1696853280.jpeg', '$2y$10$NSxBfIBeDdxRjisT83p/0uN4GN4LcbYvKzuazAfyekwPffExwBUpO', 'California, USA', 'https://www.xyz.com/', '2919 N Flores St San Antonio, TX 78212', 1, 'drl3NZw3vkds6EZMNhIvhdysWD6KeBgjaSIjii8ZVP3jqD8EVMtabJIJQsjK', '2018-02-28 23:27:08', '2023-10-09 12:08:00'),
(10, 'Feroz', 'feroz.zeenath@gmail.com', '0545073099', 13, 'bVkA57jP1690010226.jpg', '$2y$10$9o69m3vz0hAkIapB9eAJqeMyn3m6lVX4shRFvh9Y0uhwZsW3kHJBq', NULL, NULL, NULL, 1, NULL, '2023-07-22 07:17:06', '2023-10-02 07:15:28'),
(12, 'Amina', 'virtualworldforcomputersystems@gmail.com', '0522021088', 13, '6hlGHwq21696935492.jpg', '$2y$10$9hJ6jiLeIvfME63o7.JXueGbZKApEzvDWSrqgI9cb2Rb.jw6NVmBC', NULL, NULL, NULL, 1, NULL, '2023-10-10 10:58:12', '2023-10-10 10:58:12');

-- --------------------------------------------------------

--
-- Table structure for table `admin_languages`
--

CREATE TABLE `admin_languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `language` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rtl` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_languages`
--

INSERT INTO `admin_languages` (`id`, `is_default`, `language`, `file`, `name`, `rtl`, `created_at`, `updated_at`) VALUES
(1, 1, 'En', '1603880510hWH6gk7S.json', '1603880510hWH6gk7S', 0, NULL, NULL),
(25, 0, 'Arabic', '1696853181Mw1YGQvZ.json', '1696853181Mw1YGQvZ', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_user_conversations`
--

CREATE TABLE `admin_user_conversations` (
  `id` int(191) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ticket_number` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_user_conversations`
--

INSERT INTO `admin_user_conversations` (`id`, `user_id`, `ticket_number`, `subject`, `message`, `attachment`, `created_at`, `updated_at`) VALUES
(25, 86, '#TKT822753', 'Deposit Problem', 'Please check my issue', 'ba7M6OiB1669785241.jpg', '2022-11-30 05:14:01', '2022-11-30 05:14:01'),
(26, 86, '#TKT755107', 'New Ticket', 'I am here for new ticket.', 'PeTPP15r1672735237.png', '2023-01-03 08:40:37', '2023-01-03 08:40:37'),
(27, 86, '#TKT753947', 'hello', 'here', 'BcZsXsix1674619571.png', '2023-01-25 04:06:11', '2023-01-25 04:06:11'),
(28, 86, '#TKT574309', 'hola', 'Could you please check the issue', NULL, '2023-03-26 10:03:12', '2023-03-26 10:03:12'),
(29, 108, NULL, 'please', 'please', NULL, '2023-07-19 11:40:32', '2023-07-19 11:40:32'),
(30, 121, NULL, 'Please verify', 'vrify', NULL, '2023-10-09 12:02:52', '2023-10-09 12:02:52');

-- --------------------------------------------------------

--
-- Table structure for table `admin_user_messages`
--

CREATE TABLE `admin_user_messages` (
  `id` int(191) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `conversation_id` int(191) NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_user_messages`
--

INSERT INTO `admin_user_messages` (`id`, `user_id`, `conversation_id`, `message`, `photo`, `created_at`, `updated_at`) VALUES
(48, 86, 25, 'dfgdfg', 'ba7M6OiB1669785241.jpg', '2022-11-30 05:14:01', '2022-11-30 05:14:01'),
(49, 0, 25, 'utyuty', 's8AsRglY1669785735.jpg', '2022-11-30 05:22:15', '2022-11-30 05:22:15'),
(50, 86, 25, 'drfgdfgd', 'MM8rLFDb1672723012.jpg', '2023-01-03 05:16:52', '2023-01-03 05:16:52'),
(51, 86, 25, 'hello', 'FqoXfxoX1672723030.jpg', '2023-01-03 05:17:10', '2023-01-03 05:17:10'),
(52, 86, 26, 'I am here for new ticket.', 'PeTPP15r1672735237.png', '2023-01-03 08:40:37', '2023-01-03 08:40:37'),
(53, 86, 27, 'here', 'BcZsXsix1674619571.png', '2023-01-25 04:06:11', '2023-01-25 04:06:11'),
(54, 86, 25, 'fgdfgdfg', 'b0vWQuWF1679824191.jpg', '2023-03-26 09:49:51', '2023-03-26 09:49:51'),
(55, 86, 28, 'Could you please check the issue', NULL, '2023-03-26 10:03:12', '2023-03-26 10:03:12'),
(56, 108, 29, 'please', NULL, '2023-07-19 11:40:32', '2023-07-19 11:40:32'),
(57, 121, 30, 'vrify', NULL, '2023-10-09 12:02:52', '2023-10-09 12:02:52'),
(58, 121, 30, 'please test', 'P02njCRi1696853028.png', '2023-10-09 12:03:48', '2023-10-09 12:03:48');

-- --------------------------------------------------------

--
-- Table structure for table `advertise_with_us`
--

CREATE TABLE `advertise_with_us` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT '',
  `email` varchar(200) NOT NULL DEFAULT '',
  `subject` varchar(255) NOT NULL DEFAULT '',
  `message` varchar(1200) NOT NULL DEFAULT '',
  `phone_number` varchar(15) NOT NULL DEFAULT '',
  `timestamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertise_with_us`
--

INSERT INTO `advertise_with_us` (`id`, `name`, `email`, `subject`, `message`, `phone_number`, `timestamp`) VALUES
(11, 'cxsdf', 'sd', '', '', '', '0000-00-00 00:00:00'),
(12, 'dsfsdf', 'dsf', '', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `name`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Cafe', NULL, 1, '2022-11-22 05:44:53', '2022-11-22 05:44:53'),
(7, 'Office', 'fas fa-warehouse', 1, '2022-11-22 05:45:18', '2023-05-21 11:04:34'),
(10, 'Breakfast', 'fas fa-wine-glass-alt', 1, '2022-11-22 05:46:44', '2023-05-21 11:02:44'),
(12, 'Parking', 'fas fa-parking', 1, '2022-11-22 05:47:01', '2023-05-21 11:02:09'),
(14, 'Wi-Fi Internet', 'fas fa-wifi', 1, '2022-11-22 05:47:16', '2023-05-21 11:01:25'),
(19, 'Insurance', 'fas fa-moon', 1, '2023-10-31 06:39:55', '2023-10-31 06:39:55'),
(20, 'Prayer Room', 'fas fa-moon', 1, '2023-10-31 06:41:27', '2023-10-31 06:41:27'),
(21, 'Wheelchair-Accessible', 'fas fa-moon', 1, '2023-10-31 07:08:56', '2023-10-31 07:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `appadds`
--

CREATE TABLE `appadds` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `appadds_url` varchar(255) NOT NULL,
  `appadds_img` varchar(255) NOT NULL,
  `photo` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appadds`
--

INSERT INTO `appadds` (`id`, `category_id`, `name`, `appadds_url`, `appadds_img`, `photo`, `created_at`, `updated_at`) VALUES
(1, 32, NULL, '#', 'E15tub4I1702056629.jpg', 'WoORWPCZ1702056427.jpg', '2023-12-08 17:27:07', '2023-12-08 18:48:36');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bartners`
--

CREATE TABLE `bartners` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bartners`
--

INSERT INTO `bartners` (`id`, `photo`, `created_at`, `updated_at`) VALUES
(2, 'C3vIsyDV1702902839.jpg', '2023-07-28 07:02:41', '2023-12-18 12:33:59'),
(3, 'nDIMJEuu1691004176.jpg', '2023-07-28 07:08:50', '2023-08-02 19:22:56'),
(4, 'Q8SKnPJ11691002479.jpg', '2023-07-28 07:09:35', '2023-08-02 18:54:40');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(191) NOT NULL,
  `title` varchar(191) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `photo` varchar(191) DEFAULT NULL,
  `source` varchar(191) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `meta_tag` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `title`, `slug`, `details`, `photo`, `source`, `views`, `status`, `meta_tag`, `meta_description`, `tags`, `created_at`, `updated_at`) VALUES
(24, 6, 'Top places in your town and city', 'top-places-in-your-town-and-citye', '<h2 class=\"post-title\" style=\"outline: none; margin: 5px 0px 0px; font-weight: 600; font-size: 28px; color: rgb(32, 40, 56); font-family: Jost, sans-serif;\"><span style=\"color: rgb(110, 124, 144); font-size: 15px; font-weight: 400;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem.</span><br></h2><p style=\"outline: none; margin: 25px 0px 0px; line-height: 1.8; color: rgb(110, 124, 144); font-size: 15px; font-family: Jost, sans-serif;\"><br style=\"outline: none;\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p><blockquote style=\"outline: none; margin-bottom: 10px; color: rgb(105, 105, 105); font-family: Jost, sans-serif; font-size: 14px;\"><span class=\"icon\" style=\"outline: none; line-height: 1em; font-size: 3.14286em;\"><span class=\"fas fa-quote-left\" style=\"outline: none;\"></span></span><p class=\"text\" style=\"outline: none; margin: 25px 0px 0px; line-height: 1.8; color: rgb(110, 124, 144); font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ullamco laboris nisi ut aliquip ex ea commodo onsequat.</p><h5 class=\"name\" style=\"outline: none; line-height: 22px; font-size: 18px; color: rgb(32, 40, 56);\">- Litha K. Mortin</h5></blockquote><p style=\"outline: none; margin: 25px 0px 0px; line-height: 1.8; color: rgb(110, 124, 144); font-size: 15px; font-family: Jost, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem.<br style=\"outline: none;\"><br style=\"outline: none;\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>', '5YMCaL051678875139.jpg', 'www.geniusocean.com', 104, 1, 'Ethereum', NULL, 'DEX,exchanges,Ethereum', '2019-01-03 06:03:37', '2023-12-26 10:11:35'),
(29, 7, 'Can we get refund our money?', 'can-we-get-refund-our-money-crypto', '<h2 class=\"post-title\" style=\"outline: none; margin: 5px 0px 0px; font-weight: 600; font-size: 28px; color: rgb(32, 40, 56); font-family: Jost, sans-serif;\"><span style=\"color: rgb(110, 124, 144); font-size: 15px; font-weight: 400;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem.</span><br></h2><p style=\"outline: none; margin: 25px 0px 0px; line-height: 1.8; color: rgb(110, 124, 144); font-size: 15px; font-family: Jost, sans-serif;\"><br style=\"outline: none;\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p><blockquote style=\"outline: none; margin-bottom: 10px; color: rgb(105, 105, 105); font-family: Jost, sans-serif; font-size: 14px;\"><span class=\"icon\" style=\"outline: none; line-height: 1em; font-size: 3.14286em;\"><span class=\"fas fa-quote-left\" style=\"outline: none;\"></span></span><p class=\"text\" style=\"outline: none; margin: 25px 0px 0px; line-height: 1.8; color: rgb(110, 124, 144); font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ullamco laboris nisi ut aliquip ex ea commodo onsequat.</p><h5 class=\"name\" style=\"outline: none; line-height: 22px; font-size: 18px; color: rgb(32, 40, 56);\">- Litha K. Mortin</h5></blockquote><p style=\"outline: none; margin: 25px 0px 0px; line-height: 1.8; color: rgb(110, 124, 144); font-size: 15px; font-family: Jost, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem.<br style=\"outline: none;\"><br style=\"outline: none;\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>', 'cd2L8ZwW1678875101.jpg', 'winners agree to the Privacy Notice of Crypto.com', 47, 1, NULL, NULL, 'verification,Crypto', '2022-03-16 03:58:54', '2023-12-20 15:38:57'),
(30, 5, 'How we can submit our website?', 'how-we-can-submit-our-website-server', '<h2 class=\"post-title\" style=\"outline: none; margin: 5px 0px 0px; font-weight: 600; font-size: 28px; color: rgb(32, 40, 56); font-family: Jost, sans-serif;\"><span style=\"color: rgb(110, 124, 144); font-size: 15px; font-weight: 400;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem.</span><br></h2><p style=\"outline: none; margin: 25px 0px 0px; line-height: 1.8; color: rgb(110, 124, 144); font-size: 15px; font-family: Jost, sans-serif;\"><br style=\"outline: none;\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p><blockquote style=\"outline: none; margin-bottom: 10px; color: rgb(105, 105, 105); font-family: Jost, sans-serif; font-size: 14px;\"><span class=\"icon\" style=\"outline: none; line-height: 1em; font-size: 3.14286em;\"><span class=\"fas fa-quote-left\" style=\"outline: none;\"></span></span><p class=\"text\" style=\"outline: none; margin: 25px 0px 0px; line-height: 1.8; color: rgb(110, 124, 144); font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ullamco laboris nisi ut aliquip ex ea commodo onsequat.</p><h5 class=\"name\" style=\"outline: none; line-height: 22px; font-size: 18px; color: rgb(32, 40, 56);\">- Litha K. Mortin</h5></blockquote><p style=\"outline: none; margin: 25px 0px 0px; line-height: 1.8; color: rgb(110, 124, 144); font-size: 15px; font-family: Jost, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem.<br style=\"outline: none;\"><br style=\"outline: none;\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>', 'DQAiRhsO1678875059.jpg', 'genius', 81, 1, NULL, NULL, NULL, '2022-03-16 04:01:58', '2023-12-21 22:02:16'),
(31, 5, 'Top places in your town and city', 'top-places-in-your-town-korea-and-city', '<h2 class=\"post-title\" style=\"outline: none; margin: 5px 0px 0px; font-weight: 600; font-size: 28px; color: rgb(32, 40, 56); font-family: Jost, sans-serif;\"><span style=\"color: rgb(110, 124, 144); font-size: 15px; font-weight: 400;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem.</span><br></h2><p style=\"outline: none; margin: 25px 0px 0px; line-height: 1.8; color: rgb(110, 124, 144); font-size: 15px; font-family: Jost, sans-serif;\"><br style=\"outline: none;\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p><blockquote style=\"outline: none; margin-bottom: 10px; color: rgb(105, 105, 105); font-family: Jost, sans-serif; font-size: 14px;\"><span class=\"icon\" style=\"outline: none; line-height: 1em; font-size: 3.14286em;\"><span class=\"fas fa-quote-left\" style=\"outline: none;\"></span></span><p class=\"text\" style=\"outline: none; margin: 25px 0px 0px; line-height: 1.8; color: rgb(110, 124, 144); font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ullamco laboris nisi ut aliquip ex ea commodo onsequat.</p><h5 class=\"name\" style=\"outline: none; line-height: 22px; font-size: 18px; color: rgb(32, 40, 56);\">- Litha K. Mortin</h5></blockquote><p style=\"outline: none; margin: 25px 0px 0px; line-height: 1.8; color: rgb(110, 124, 144); font-size: 15px; font-family: Jost, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem.<br style=\"outline: none;\"><br style=\"outline: none;\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>', 'QGZidykU1678875020.jpg', 'genius', 70, 1, NULL, NULL, NULL, '2022-03-16 04:01:58', '2023-12-20 15:31:29'),
(32, 7, 'Can we get refund our money?', 'can-we-get-refund-our-money-1', '<h2 class=\"post-title\" style=\"outline: none; margin: 5px 0px 0px; font-weight: 600; font-size: 28px; color: rgb(32, 40, 56); font-family: Jost, sans-serif;\"><span style=\"color: rgb(110, 124, 144); font-size: 15px; font-weight: 400;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem.</span><br></h2><p style=\"outline: none; margin: 25px 0px 0px; line-height: 1.8; color: rgb(110, 124, 144); font-size: 15px; font-family: Jost, sans-serif;\"><br style=\"outline: none;\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p><blockquote style=\"outline: none; margin-bottom: 10px; color: rgb(105, 105, 105); font-family: Jost, sans-serif; font-size: 14px;\"><span class=\"icon\" style=\"outline: none; line-height: 1em; font-size: 3.14286em;\"><span class=\"fas fa-quote-left\" style=\"outline: none;\"></span></span><p class=\"text\" style=\"outline: none; margin: 25px 0px 0px; line-height: 1.8; color: rgb(110, 124, 144); font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ullamco laboris nisi ut aliquip ex ea commodo onsequat.</p><h5 class=\"name\" style=\"outline: none; line-height: 22px; font-size: 18px; color: rgb(32, 40, 56);\">- Litha K. Mortin</h5></blockquote><p style=\"outline: none; margin: 25px 0px 0px; line-height: 1.8; color: rgb(110, 124, 144); font-size: 15px; font-family: Jost, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem.<br style=\"outline: none;\"><br style=\"outline: none;\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>', 'HeV0HmyE1678874980.jpg', 'winners agree to the Privacy Notice of Crypto.com', 53, 1, NULL, NULL, 'verification,Crypto', '2022-03-16 03:58:54', '2023-12-20 14:33:57'),
(33, 6, 'How we can submit our website?', 'how-we-can-submit-our-websitee', '<h2 class=\"post-title\" style=\"outline: none; margin: 5px 0px 0px; font-weight: 600; font-size: 28px; color: rgb(32, 40, 56); font-family: Jost, sans-serif;\"><span style=\"color: rgb(110, 124, 144); font-size: 15px; font-weight: 400;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem.</span><br></h2><p style=\"outline: none; margin: 25px 0px 0px; line-height: 1.8; color: rgb(110, 124, 144); font-size: 15px; font-family: Jost, sans-serif;\"><br style=\"outline: none;\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p><blockquote style=\"outline: none; margin-bottom: 10px; color: rgb(105, 105, 105); font-family: Jost, sans-serif; font-size: 14px;\"><span class=\"icon\" style=\"outline: none; line-height: 1em; font-size: 3.14286em;\"><span class=\"fas fa-quote-left\" style=\"outline: none;\"></span></span><p class=\"text\" style=\"outline: none; margin: 25px 0px 0px; line-height: 1.8; color: rgb(110, 124, 144); font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ullamco laboris nisi ut aliquip ex ea commodo onsequat.</p><h5 class=\"name\" style=\"outline: none; line-height: 22px; font-size: 18px; color: rgb(32, 40, 56);\">- Litha K. Mortin</h5></blockquote><p style=\"outline: none; margin: 25px 0px 0px; line-height: 1.8; color: rgb(110, 124, 144); font-size: 15px; font-family: Jost, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem.<br style=\"outline: none;\"><br style=\"outline: none;\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>', 'rgZz9Sei1678874945.jpg', 'www.geniusocean.com', 106, 1, 'Ethereum', NULL, 'DEX,exchanges,Ethereum', '2019-01-03 06:03:37', '2023-12-21 00:17:11');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(191) NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `slug`) VALUES
(2, 'Support', 'support'),
(3, 'Music', 'Music'),
(4, 'Branding', 'Branding'),
(5, 'Fashion', 'Fashion'),
(6, 'Travel', 'Travel'),
(7, 'Lifestyle', 'Lifestyle');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `listing_owner_id` int(11) DEFAULT NULL,
  `owner_type` varchar(100) DEFAULT NULL,
  `listing_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `adults` int(11) DEFAULT NULL,
  `kids` int(11) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  `room_type` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `checkin_date` timestamp NULL DEFAULT NULL,
  `checkout_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking_conversations`
--

CREATE TABLE `booking_conversations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `owner_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_conversations`
--

INSERT INTO `booking_conversations` (`id`, `user_id`, `owner_id`, `admin_id`, `booking_id`, `message`, `photo`, `created_at`, `updated_at`) VALUES
(1, 0, 86, NULL, 5, 'please contact with me via email.', 'jdckSsZC1681373154.jpg', '2023-04-13 08:05:54', '2023-04-13 08:05:54'),
(4, 0, 0, 1, 5, 'We will contact you soon', '15xnhPY71681578476.jpg', '2023-04-15 17:07:56', '2023-04-15 17:07:56');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo_banner` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `pop_cat` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `parent_id` int(11) DEFAULT NULL,
  `is_top` tinyint(4) NOT NULL DEFAULT 0,
  `pop_home_cat` int(11) DEFAULT NULL,
  `bg_color` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `icon`, `photo`, `photo1`, `photo_banner`, `photo3`, `pop_cat`, `status`, `parent_id`, `is_top`, `pop_home_cat`, `bg_color`, `created_at`, `updated_at`) VALUES
(18, 'Deals', 'deals', 'empty', 'gI58U7jq1701752350.gif', '', '0zwHdjsW1701248573.webp', 'vykM6IxU1701433422.gif', 0, 1, NULL, 1, 0, '#000000', '2023-07-28 07:01:39', '2023-12-05 04:59:10'),
(19, 'Restaurants & Cafe', 'restaurants-cafe', 'fas fa-bed', '20AbKVxo1696525346.png', '7RY5sycg1700999871.jpg', '3QyeqWwz1701172444.webp', '', 0, 1, NULL, 1, 1, '#000000', '2023-07-28 07:04:03', '2023-11-28 11:54:04'),
(20, 'Home Startup', 'home-startup', 'fas fa-moon', 'fKtumizx1696765083.png', 'Z1vr2uu91700998788.jpg', 'bDqS71uZ1701258775.webp', '', 1, 1, NULL, 1, 1, '#000000', '2023-07-28 07:04:59', '2023-11-29 11:52:55'),
(21, 'Car Rentals', 'car-rentals', 'fas fa-archive', 'aCFhFIAI1696765503.png', 'Kodzb4mL1692255288.jpg', 'jJqQqGIs1701262097.webp', '', 0, 1, NULL, 1, 0, '#000000', '2023-07-28 07:06:58', '2023-11-29 12:48:17'),
(22, 'Beauty', 'beauty', 'fas fa-monument', 'f1TVH4uD1696527636.png', '', 'FutVt3U81701331364.webp', '', 0, 1, NULL, 1, 0, '#000000', '2023-07-28 07:08:07', '2023-11-30 08:02:44'),
(24, 'Clinics', 'clinics', 'fas fa-moon', 'iQHCtjAd1696527817.png', '', 'eq5rCm7O1701263404.webp', '', 0, 1, NULL, 1, 0, '#000000', '2023-07-28 07:28:45', '2023-11-29 13:10:04'),
(25, 'Massage', 'massage', 'fas fa-moon', 'wojCwkyu1696767286.png', '', 'kbkh1h5u1701338471.webp', '', 0, 1, NULL, 1, 0, '#000000', '2023-07-28 07:29:51', '2023-11-30 10:01:11'),
(26, 'Hospitals', 'hospitals', 'fas fa-moon', 'l6Hg61811696767376.png', 'IME0Y9Fw1700994995.jpg', 'pHgUu3Cg1698431460.webp', '', 1, 1, NULL, 1, 1, '#000000', '2023-07-28 07:30:39', '2023-11-26 10:36:35'),
(27, 'Pet Shops', 'petshops', 'fas fa-moon', 'hC5uDJoA1696755295.png', '', 'U0zps6G51701413927.webp', '', 0, 1, NULL, 1, 0, '#000000', '2023-07-28 07:32:15', '2023-12-01 06:58:47'),
(28, 'Consulting', 'consulting', 'fas fa-moon', '25rszwk91696756442.png', '', 'ZbBDW8U91701418450.webp', '', 0, 1, NULL, 1, 0, '#000000', '2023-07-28 07:48:00', '2023-12-01 08:14:10'),
(31, 'Business Services', 'business-services', 'fas fa-moon', 'U3ak76y71696758758.png', '', 'msms6frT1701686869.webp', '', 0, 1, NULL, 1, 0, '#000000', '2023-07-28 07:50:28', '2023-12-04 10:47:49'),
(32, 'Car Workshops', 'cars-workshops', 'fas fa-moon', 'maqs9zH61696756614.png', '', 'u1IJbrrg1701690981.webp', '', 0, 1, NULL, 1, 0, '#000000', '2023-07-28 07:51:07', '2023-12-04 11:56:21'),
(33, 'Occasions', 'occasions', 'fas fa-moon', 'w59Ygw5N1696756648.png', '', 'z7KVj1kw1701758484.webp', '', 0, 1, NULL, 1, 0, '#ff0000', '2023-07-28 07:51:38', '2023-12-05 06:41:24'),
(34, 'Tours & Travels', 'tourstravels', 'fas fa-moon', 'WBZgxZWA1701753697.png', 'OGXUmc1A1698424891.webp', 'AZlaluO71701760007.webp', 'tmXJMqQK1701753697.png', 1, 1, NULL, 1, 0, '#000000', '2023-07-28 07:52:39', '2023-12-05 07:06:47'),
(35, 'Entertainment', 'entertainment', 'fas fa-moon', 'yIL1HrDP1696943455.png', '', 'oiyKWNpA1701762985.webp', '', 0, 1, NULL, 1, 0, '#000000', '2023-07-28 07:54:15', '2023-12-05 07:56:25'),
(36, 'Home Services', 'home-services', 'fas fa-moon', 'YzI1pM361696943695.png', '', 'jntviNmT1701764637.webp', '', 0, 1, NULL, 1, 0, '#000000', '2023-07-28 07:55:25', '2023-12-05 08:23:57'),
(37, 'Decor & furniture', 'decorfurniture', 'fas fa-moon', 'VYnfCZ9n1696943748.png', '', 'Zbjo1t011701766227.webp', '', 0, 1, NULL, 1, 0, '#000000', '2023-07-28 07:56:40', '2023-12-05 08:50:27'),
(38, 'Education', 'education', 'fas fa-moon', 'wVFG4zpX1696943803.png', '', 'oP5WYYUX1701773742.webp', '', 0, 1, NULL, 1, 0, '#000000', '2023-07-28 08:19:58', '2023-12-05 10:55:42'),
(39, 'Real Estate', 'realestate', 'fas fa-moon', 'JxcQZQ9u1697618177.png', 'CaSKISBO1697618177.png', 'vsGu1MmL1701778721.webp', '', 1, 1, NULL, 0, 0, '#000000', '2023-07-28 08:24:16', '2023-12-05 12:18:41'),
(53, 'Hotels', 'hotels', 'fas fa-moon', 'rzwYeoZM1696943914.png', 'utkfjLuu1691410458.png', 'lH6uoNRs1702471758.webp', '', 0, 1, NULL, 1, 0, '#000000', '2023-08-07 12:14:18', '2023-12-13 12:49:18'),
(54, 'Contractors', 'contractors', 'fas fa-moon', 'GicilkF11696943999.png', 'AO9sewCW1691410544.png', 'iUcgAeXj1702531144.webp', '', 0, 1, NULL, 1, 0, '#000000', '2023-08-07 12:15:44', '2023-12-14 05:19:04'),
(55, 'Events', 'events', 'fas fa-moon', 'CIgEBykw1696944032.png', 'oFunLWin1691410927.png', 't4rngASv1702531561.webp', '', 0, 1, NULL, 1, 0, '#000000', '2023-08-07 12:22:07', '2023-12-14 05:26:01'),
(56, 'Packers & Movers', 'packersmovers', 'fas fa-moon', 'Ont4Zupn1696944098.png', 'I8gNMS8y1691411117.png', 'RVPv3YM21702536437.webp', '', 0, 1, NULL, 1, 0, '#000000', '2023-08-07 12:24:32', '2023-12-14 06:47:17'),
(57, 'Courier Service', 'courierservice', 'fas fa-moon', 'LwFGRvcg1691498065.png', 'ChKwxGpV1691436565.jpg', 'Pdqej9T81702537988.webp', '', 0, 1, NULL, 0, 0, '#000000', '2023-08-07 12:27:13', '2023-12-14 07:13:08'),
(58, 'Training Centers', 'trainingcenters', 'fas fa-moon', 'SVUlakri1691498146.png', 's1tNTVkl1691411381.png', 'xXVzNf9h1702539125.webp', '', 0, 1, NULL, 0, 0, '#000000', '2023-08-07 12:29:41', '2023-12-14 07:32:05'),
(60, 'Arabic Restaurants', 'arabic-restaurants', 'fas fa-moon', 'sQXIZfEb1691484182.png', 'aPLNhxGR1698738922.png', '', 'cYfF041G1698738922.png', 1, 1, 19, 0, 0, '#000000', '2023-08-08 08:43:02', '2023-10-31 07:55:22'),
(61, 'Indian Restaurants', 'indian-restaurants', 'fas fa-moon', 'HLa5aFTA1698739537.png', 'q9k7iUlN1698739537.png', 'f8agZsla1701177670.webp', 'Ho23JfoY1698739537.png', 0, 1, 19, 0, 0, '#000000', '2023-08-08 08:47:05', '2023-11-30 09:48:49'),
(62, 'Chinese Restaurants', 'chinese-restaurants', 'fas fa-moon', '301L0cW61691485198.png', 'pBoj0zpJ1698740100.png', '', 'gLv1Smqd1698740100.png', 0, 1, 19, 0, 0, '#000000', '2023-08-08 08:59:58', '2023-10-31 08:15:00'),
(63, 'Turkish Restaurant', 'turkish-restaurant', 'fas fa-moon', '4O9IiCMJ1691485542.png', 'pxopip1e1698740406.png', '', 'ZwgFZqBV1698740406.png', 0, 1, 19, 0, 0, '#000000', '2023-08-08 09:05:42', '2023-10-31 08:20:06'),
(64, 'Moroccan Restaurants', 'moroccan-restaurants', 'fas fa-moon', 'yiDgi4s81691488568.png', 'pn6DrT4x1698740919.png', '', 'Fp3ewJcC1698740919.png', 0, 1, 19, 0, 0, '#000000', '2023-08-08 09:56:08', '2023-10-31 08:28:39'),
(65, 'Asian Food', 'asian-food', 'fas fa-moon', '47m05iWd1691489268.png', 'u2tjSjxf1698741403.png', '', 'cruNk2951698741403.png', 0, 1, 19, 0, 0, '#000000', '2023-08-08 10:07:48', '2023-10-31 08:36:43'),
(66, 'International Restaurants', 'international-restaurants', 'fas fa-moon', 'VGEfpBIx1691489421.png', 'Ualyifmz1698741834.png', '', 'dBVJrGEn1698741834.png', 0, 1, 19, 0, 0, '#000000', '2023-08-08 10:10:21', '2023-10-31 08:43:54'),
(67, 'Pure Vegetarian Restaurants', 'pure-vegetarian-restaurants', 'fas fa-moon', 'aSBGRxCO1691489743.png', 'nf5Rgzeh1698748281.png', '', 'a9uy1LdN1698748281.png', 0, 1, 19, 0, 0, '#000000', '2023-08-08 10:15:43', '2023-10-31 10:31:21'),
(68, 'Healthy Food Restaurants', 'healthy-food-restaurants', 'fas fa-moon', 'vJvn0axM1691489894.png', '4eeZUxDh1698748690.png', '', 'gjzEwVDD1698748690.png', 0, 1, 19, 0, 0, '#000000', '2023-08-08 10:18:14', '2023-10-31 10:38:10'),
(69, 'Restaurants with Shisha', 'restaurants-with-shisha', 'fas fa-moon', 'wlQd9ce71691490058.png', 'JzY4vbVH1698749744.png', '', 'Q0sQp6Vb1698749744.png', 0, 1, 19, 0, 0, '#000000', '2023-08-08 10:20:58', '2023-10-31 10:55:44'),
(70, 'Seafood Restaurants', 'seafood-restaurants', 'fas fa-moon', 'RSc5CC751691490169.png', 'GyfEvduQ1698996107.png', '', 'jQfAUjT31701240106.png', 1, 1, 19, 0, 0, '#000000', '2023-08-08 10:22:49', '2023-11-29 06:41:46'),
(71, 'Shisha Cafes', 'shisha-cafes', 'fas fa-moon', 'Uw2jQMh61691490438.png', 'e1jw2RHL1698996453.png', '', 'LEuBZv0j1698996453.png', 1, 1, 19, 0, 0, '#000000', '2023-08-08 10:27:18', '2023-11-03 07:27:33'),
(73, 'Finance', 'finance', 'fas fa-moon', 'VWuyRWLo1691498259.png', '4ELO6DAB1691498259.png', 'hC6kMtjx1702540862.webp', '', 0, 1, NULL, 0, 0, '#000000', '2023-08-08 12:37:39', '2023-12-14 08:01:02'),
(74, 'Tailors', 'tailors', 'fas fa-moon', 'HVEzXnGo1691554904.png', 'PM13GoLO1691554904.png', 'Ri4VNswH1702557818.webp', '', 0, 1, NULL, 0, 0, '#000000', '2023-08-09 04:21:44', '2023-12-14 12:43:38'),
(75, 'Graphic & Website Designers', 'graphic-websitedesigners', 'fas fa-moon', 'e4mTYJDW1691555126.png', '3UfHpn4s1691555126.png', 'YOMX8PX31702558533.webp', '', 0, 1, NULL, 0, 0, '#000000', '2023-08-09 04:25:26', '2023-12-14 12:55:33'),
(76, 'Printing & Publishing', 'printingpublishing', 'fas fa-moon', '3PFgESYi1691555226.png', 'XGNBn5Mh1691555226.png', 'HEYYh3141702628707.webp', '', 0, 1, NULL, 0, 0, '#000000', '2023-08-09 04:27:06', '2023-12-15 08:25:07'),
(77, 'Pest Control Services', 'pestcontrolservices', 'fas fa-moon', 'oJ7eJpyG1691556544.png', '8tctRhU01691556544.png', 'AG6fCDqf1702637957.webp', '', 0, 1, NULL, 0, 0, '#000000', '2023-08-09 04:49:04', '2023-12-15 10:59:17'),
(78, 'Computer & Laptop Repair', 'computer-laptoprepair', 'fas fa-moon', 'cCWZCFg01691559932.png', 'Cx9UXQY91691559932.png', 'ZmbOXDTQ1702707411.webp', '', 0, 1, NULL, 0, 0, '#000000', '2023-08-09 05:45:32', '2023-12-16 06:16:51'),
(79, 'Jewellery Showrooms', 'jewelleryshowrooms', 'fas fa-moon', '92SC4Dc91691560099.png', 'c2WFq1GL1691560099.png', 'vVnHjKAZ1702708710.webp', '', 0, 1, NULL, 0, 0, '#000000', '2023-08-09 05:48:19', '2023-12-16 06:38:30'),
(80, 'Security System', 'securitysystem', 'fas fa-moon', 'c9kjLHVy1691560639.png', 'blnlf19I1691560639.png', 'Be4wjQ3p1702725794.webp', '', 0, 1, NULL, 1, 0, '#000000', '2023-08-09 05:57:19', '2023-12-16 11:23:14'),
(81, 'AC Service', 'ac-service', 'fas fa-moon', 'fIQ6fGNA1691560995.png', 'Z7rJhybS1691560995.png', '3xOdNJDy1702813619.webp', '', 0, 1, NULL, 0, 0, '#000000', '2023-08-09 06:03:15', '2023-12-17 11:46:59'),
(82, 'Mobile Shops', 'mobile-shops', 'fas fa-moon', 'UUHlflQ51691561151.png', 'UIZbjPq51691561151.png', 'vZKa7gy31702815305.webp', '', 0, 1, NULL, 0, 0, '#000000', '2023-08-09 06:05:51', '2023-12-17 12:15:05'),
(83, 'Leisure', 'leisure', 'fas fa-moon', 'p5XWcaqd1691562992.png', 'zQt6WA9o1691562992.png', 'JMdZS9vR1702816963.webp', '', 0, 1, NULL, 0, 0, '#000000', '2023-08-09 06:36:32', '2023-12-17 12:42:43'),
(84, 'Photographers', 'photographers', 'fas fa-moon', 'Q6AWEka01691563606.png', 'a3YuNDNS1691563606.png', '', '', 0, 1, NULL, 0, 0, '#000000', '2023-08-09 06:46:46', '2023-08-09 06:46:46'),
(85, 'Nursing Services', 'nursing-services', 'fas fa-moon', 'VtwW9irl1691563738.png', 'bXmMCZtW1691563738.png', '', '', 0, 1, NULL, 0, 0, '#000000', '2023-08-09 06:48:58', '2023-08-09 06:48:58'),
(86, 'Rooms Rent', 'rooms-rent', 'fas fa-moon', 'rzRIq4Zm1691565391.png', 'ItxWHnSA1691565391.png', '', '', 0, 1, NULL, 0, 0, '#000000', '2023-08-09 07:16:31', '2023-08-09 07:16:31'),
(87, 'Caterers', 'caterers', 'fas fa-moon', 'Qs6omRwU1691565660.png', '7RPkCIwS1691565660.png', '', '', 0, 1, NULL, 0, 0, '#000000', '2023-08-09 07:21:00', '2023-08-09 07:21:00'),
(88, 'Job/Career', 'job-career', 'fas fa-moon', '2nu1QsYV1691565887.png', 'uGXdfcXU1691565887.png', '', '', 0, 1, NULL, 0, 0, '#000000', '2023-08-09 07:24:47', '2023-08-09 07:24:47'),
(89, 'Repairs & Services', 'repairs-services', 'fas fa-moon', 'pWS8CW0S1691566139.png', 'fI71Tyle1700990081.jpg', '', '', 0, 1, NULL, 0, 1, '#000000', '2023-08-09 07:28:59', '2023-11-26 09:14:41'),
(90, 'Coffee Shops', 'coffee-shops', 'fas fa-moon', 'Jw6Kg5Vq1691566777.png', 'Zr2n5LnW1698997643.png', '', 'cOCeWpz01698997643.png', 0, 1, 19, 0, 0, '#000000', '2023-08-09 07:39:37', '2023-11-03 07:47:23'),
(91, 'Bakeries', 'bakeries', 'fas fa-moon', '5P6YpTZb1691566953.png', '3l9HfWck1698997879.png', '', '4tz8IK0n1698997879.png', 0, 1, 19, 0, 0, '#000000', '2023-08-09 07:42:33', '2023-11-03 07:51:19'),
(92, 'Night Life', 'nightlife', 'fas fa-moon', 'PzfysWN81691567408.png', '2LRwPvln1698999542.png', '', '2P8XOBFH1698999542.png', 0, 1, 19, 0, 0, '#000000', '2023-08-09 07:50:08', '2023-11-03 08:19:02'),
(93, 'Fast Foods', 'fastfoods', 'fas fa-moon', 'R6gHFo1n1691567574.png', 'W63Nz8Tg1698999812.png', '', 'vWCXmjq51698999812.png', 0, 1, 19, 0, 0, '#000000', '2023-08-09 07:52:54', '2023-11-03 08:23:32'),
(94, 'Beauty Parlours', 'beauty-parlours', 'fas fa-moon', 'elUqEx831691569100.png', '7b4O5ZEZ1699362657.png', 'tDI7ivgu1701191201.webp', '3oL63h7u1699362657.png', 0, 1, 22, 0, 0, '#000000', '2023-08-09 08:17:22', '2023-11-28 17:06:41'),
(96, 'Salon', 'salon', 'fas fa-moon', '8AMRRr2l1691569735.png', 'TeuBGuHY1699363108.png', '', 'bQcaf3sA1699363108.png', 0, 1, 22, 0, 0, '#000000', '2023-08-09 08:28:55', '2023-11-07 13:18:28'),
(97, 'Bridal Makeup', 'bridal-makeup', 'fas fa-moon', 'FFpqjqtN1691569926.png', 'Q1V3X2lb1699363378.png', '', 'b0q7b2CD1699363378.png', 0, 1, 22, 0, 0, '#000000', '2023-08-09 08:32:06', '2023-11-07 13:22:58'),
(98, 'Beauty Clinics', 'beauty-clinics', 'fas fa-moon', 'JImlyVrn1691570294.png', 'KSoNtPwX1699363666.png', '', 'a4grx3CK1699363666.png', 0, 1, 22, 0, 0, '#000000', '2023-08-09 08:38:14', '2023-11-07 13:27:46'),
(99, 'Spa', 'spa', 'fas fa-moon', 'cxQ7DG751691570389.png', 'YkC9q6C51699363823.png', '', 'FugCtIHg1699363823.png', 0, 1, 22, 0, 0, '#000000', '2023-08-09 08:39:49', '2023-11-07 13:30:23'),
(101, 'Private Hospitals', 'private-hospitals', 'fas fa-moon', 'Ts9wp3tn1691578716.png', 'wWbAOs3s1698438966.png', '', 'mYTuE1pL1698438966.png', 1, 1, 26, 0, 0, '#000000', '2023-08-09 10:58:36', '2023-10-27 20:36:06'),
(102, 'Children Hospitals', 'children-hospitals', 'fas fa-moon', 'mWUoglAa1691579053.png', 'AE6qdzto1698432693.png', '', '', 0, 1, 26, 0, 0, '#000000', '2023-08-09 11:01:24', '2023-10-27 18:51:33'),
(103, 'Maternity Hospitals', 'maternity-hospitals', 'fas fa-moon', 'cIzND6AL1691579310.png', 'omc6CHG21698433840.png', '', '', 0, 1, 26, 0, 0, '#000000', '2023-08-09 11:08:30', '2023-10-27 19:10:40'),
(104, 'Emergency Hospitals', 'emergencyhospitals', 'fas fa-moon', 'a9WOjln91691579414.png', 'vPZCQZ011698434674.png', '', '', 0, 1, 26, 0, 0, '#000000', '2023-08-09 11:10:14', '2023-10-27 19:24:34'),
(105, 'Public Hospitals', 'public-hospitals', 'fas fa-moon', 'D6nOMfRT1691579812.png', '4xQenqKo1698435125.png', '', '', 0, 1, 26, 0, 0, '#000000', '2023-08-09 11:16:52', '2023-10-27 19:32:05'),
(106, 'Eye Hospitals', 'eyehospitals', 'fas fa-moon', 'B26uLx3y1691580485.png', 'd10Ba4rp1698435998.png', '', 'x0iy2Un11698435998.png', 1, 1, 26, 0, 0, '#000000', '2023-08-09 11:28:05', '2023-10-27 19:46:38'),
(107, 'ENT Hospitals', 'ent-hospitals', 'fas fa-moon', 'CBLEa9GN1691580639.png', 'PEoIUNcn1698436987.png', '', 'I8O6Qygd1698436987.png', 0, 1, 26, 0, 0, '#000000', '2023-08-09 11:30:39', '2023-10-27 20:03:07'),
(108, 'Veterinary Hospitals', 'veterinary-hospitals', 'fas fa-moon', '8Er3PQNN1691580759.png', '9XHfsEkV1698437412.png', '', 'ABpi6hYG1698437412.png', 1, 1, 26, 0, 0, '#000000', '2023-08-09 11:32:39', '2023-10-27 20:10:12'),
(111, 'General Clinics', 'general-clinics', 'fas fa-moon', 'D1WXOVdJ1691657943.png', 'hmjzL31x1699377135.png', '', 'KiZoF8Mt1699377135.png', 0, 1, 24, 0, 0, '#000000', '2023-08-10 08:59:03', '2023-11-07 17:12:15'),
(112, 'Dental Clinics', 'dental-clinics', 'fas fa-moon', 'wGzh8ysJ1691658152.png', 'q4FbHz5Z1699377050.png', '', 'Wh08pbj31699377050.png', 1, 1, 24, 0, 0, '#000000', '2023-08-10 09:02:32', '2023-11-07 17:10:50'),
(113, 'Rehabilitation Clinics', 'rehabilitation-clinics', 'fas fa-moon', 'dP3IHQek1691658329.png', '7XxPsVs21699377245.png', '', 'iJJHhUBF1699377245.png', 0, 1, 24, 0, 0, '#000000', '2023-08-10 09:05:29', '2023-11-07 17:14:05'),
(114, 'Diagnostic Clinics', 'diagnostic-clinics', 'fas fa-moon', 'YJG6RUOE1691658642.png', 'QnTEKvlu1699377368.png', '', 'mHzeEfcV1699377368.png', 0, 1, 24, 0, 0, '#000000', '2023-08-10 09:10:42', '2023-11-07 17:16:08'),
(115, 'Veterinary Clinics', 'veterinary-clinics', 'fas fa-moon', 'cQMdKyEB1691658859.png', '6Va19RK81699377498.png', '', '8uA8KVgC1699377498.png', 0, 1, 24, 0, 0, '#000000', '2023-08-10 09:14:19', '2023-11-07 17:18:18'),
(116, 'Optical Clinics', 'optical-clinics', 'fas fa-moon', 'Gj6jUajv1691659353.png', 'vPqWlL6H1699380291.png', '', 'OottjuUj1699380291.png', 0, 1, 24, 0, 0, '#000000', '2023-08-10 09:22:33', '2023-11-07 18:04:51'),
(117, 'Cosmetic and Aesthetic Clinics', 'cosmetic-aesthetic-clinics', 'fas fa-moon', '0wFV1O9F1691664069.png', '7iNDSVFE1699380721.png', '', 'lEWbwZE01699380721.png', 0, 1, 24, 0, 0, '#000000', '2023-08-10 10:41:09', '2023-11-07 18:12:01'),
(118, 'Wellness Clinics', 'wellness-clinics', 'fas fa-moon', 'c9NeRT5a1691664370.png', 'zo9gwSDr1699381104.png', '', 'VSTV7PXa1699381104.png', 0, 1, 24, 0, 0, '#000000', '2023-08-10 10:46:10', '2023-11-07 18:18:24'),
(119, 'Skin Clinics', 'skin-clinics', 'fas fa-moon', '6nS5rL9W1691664607.png', '3yY13lgk1699381128.png', '', 'bMrD9sT31699381128.png', 0, 1, 24, 0, 0, '#000000', '2023-08-10 10:50:07', '2023-11-07 18:18:48'),
(120, 'Automotive Dealers', 'automotivedealers', 'fas fa-moon', 'GlyE2Jfx1691667724.png', 'dHYyn0uj1691667724.png', '', 'gK5a01jp1701108500.png', 0, 1, 152, 0, 0, '#000000', '2023-08-10 11:42:04', '2023-11-27 18:08:20'),
(121, 'Electronics Dealers', 'electronics-dealers', 'fas fa-moon', 'EOBlhdmp1691738473.png', 'Z1hXuGnG1691738473.png', '', 'wKWSSR6m1701108692.png', 0, 1, 152, 0, 0, '#000000', '2023-08-11 07:21:13', '2023-11-27 18:11:32'),
(122, 'Apparel Dealers', 'appareldealers', 'fas fa-moon', '5GS4Qc6N1691738596.png', 'oSTEHv4r1691738596.png', '', 'FFBBvxh21701108796.png', 0, 1, 152, 0, 0, '#000000', '2023-08-11 07:23:16', '2023-11-27 18:13:16'),
(123, 'Industrial Equipment Dealers', 'industrial-equipment-dealers', 'fas fa-moon', '8GOiP63w1691738871.png', 'L1b2OSMP1691738871.png', '', 'AMDKz7jk1701108985.png', 0, 1, 152, 0, 0, '#000000', '2023-08-11 07:27:51', '2023-11-27 18:16:25'),
(124, 'Electronic and Technology Dealers', 'electronic-technology-dealer', 'fas fa-moon', 'TArx8lyh1691739460.png', 'NH0hdYsR1691739460.png', '', 'gNV4agDR1701109048.png', 0, 1, 152, 0, 0, '#000000', '2023-08-11 07:37:40', '2023-11-27 18:17:28'),
(125, 'Office Supply Dealers', 'office-supply-dealers', 'fas fa-moon', 'fGCc6Y7h1691739826.png', 'vTcbjhma1691739826.png', '', 'ruLV57Q61701109138.png', 0, 1, 152, 0, 0, '#000000', '2023-08-11 07:43:46', '2023-11-27 18:18:58'),
(126, 'Management Consulting', 'management-consulting', 'fas fa-moon', 'IYpkFcEZ1691740371.png', '3HEtqEze1699433003.png', '', 'GtnzJfrI1699433003.png', 0, 1, 28, 0, 0, '#000000', '2023-08-11 07:52:51', '2023-11-08 08:43:23'),
(127, 'Financial Consulting', 'financial-consulting', 'fas fa-moon', '69U9OhJ31691740724.png', 'SBSRSiHm1699431820.png', '', 'LmGyucZr1699431820.png', 0, 1, 28, 0, 0, '#000000', '2023-08-11 07:58:44', '2023-11-08 08:23:40'),
(128, 'Human Resources Consulting', 'human-resources-consulting', 'fas fa-moon', '339SPK1A1691740831.png', 'MEOjz7vh1699432000.png', '', 'M4ElQRob1699432000.png', 0, 1, 28, 0, 0, '#000000', '2023-08-11 08:00:31', '2023-11-08 08:26:40'),
(129, 'IT Consulting', 'it-consulting', 'fas fa-moon', 'iscGLNqr1691741072.png', 'aBkZXxo31699432161.png', '', 'Qdha8WIR1699432161.png', 0, 1, 28, 0, 0, '#000000', '2023-08-11 08:04:32', '2023-11-08 08:29:21'),
(130, 'Legal Consulting', 'legal-consulting', 'fas fa-moon', 'Dwese2po1691741161.png', 'zaWI6Oxd1699432362.png', '', 'EgepOOUK1699432362.png', 0, 1, 28, 0, 0, '#000000', '2023-08-11 08:06:01', '2023-11-08 08:32:42'),
(132, 'Car Services', 'car-srvices', 'fas fa-moon', 'pqqE6BYb1692943248.png', 'IZHvpZUO1692943248.jpg', 'NfvjDPGq1692941934.jpg', '6Baqx8Qb1701169149.png', 1, 1, 89, 0, 0, '#000000', '2023-08-25 05:38:54', '2023-11-28 10:59:09'),
(133, 'AC Services', 'ac-services', 'fas fa-moon', 'gGh71PW01692942516.png', 'TaScBubM1692942860.jpg', 'rz1rccCO1692942516.png', 's3eTxVlb1701169082.png', 1, 1, 89, 0, 0, '#000000', '2023-08-25 05:48:36', '2023-11-28 10:58:02'),
(136, 'Home Repairs', 'home-repairs', 'fas fa-moon', 'E7FUGQZN1693029007.png', 'tmlEplQS1693029007.jpg', NULL, 'bPAHejpi1701169014.png', 1, 1, 89, 0, 0, '#000000', '2023-08-26 05:50:07', '2023-11-28 10:56:54'),
(137, 'Abaya & Dresses', 'abayadresses', 'fas fa-moon', '5HLDrNh21693029448.png', 'mgbJkpaO1699193571.png', NULL, 'rZKr3AOd1699097473.png', 1, 1, 20, 0, 0, '#000000', '2023-08-26 05:57:28', '2023-11-05 14:12:51'),
(138, 'Perfumes & Boukhour', 'perfumes-boukhour', 'fas fa-moon', 'Wo1t9hwc1693030636.png', 'wSg22EdN1699193662.png', NULL, 'rwE12wym1699193662.png', 1, 1, 20, 0, 0, '#000000', '2023-08-26 06:17:16', '2023-11-05 14:14:22'),
(139, 'Home Made Sweets', 'home-made-sweets', 'fas fa-moon', '8Diqu8nF1693031039.png', 'uhSdglWd1699197135.png', NULL, '4TnyjVzI1699197135.png', 1, 1, 20, 0, 0, '#000000', '2023-08-26 06:23:59', '2023-11-05 15:12:15'),
(143, 'EMS training', 'ems-training', 'fas fa-moon', 'txIWbMft1697109847.png', NULL, NULL, 'nsYMT3lT1701148096.png', 1, 1, 144, 0, 0, '#000000', '2023-10-12 11:24:07', '2023-11-28 05:08:16'),
(144, 'Gym', 'gym', 'fas fa-moon', '5zdxj8641697109975.png', NULL, 'wd5Gw0o61697110234.jpg', '', 1, 1, NULL, 0, 0, '#000000', '2023-10-12 11:26:15', '2023-10-12 11:30:34'),
(145, 'Body Building', 'body-building', 'fas fa-moon', 'rhA7M0Rj1697110099.png', NULL, NULL, 'as34Yk1W1701148433.png', 1, 1, 144, 0, 0, '#000000', '2023-10-12 11:28:19', '2023-11-28 05:13:53'),
(146, 'Crossfit', 'crossfit', 'fas fa-moon', 'nlh405OL1697110362.png', NULL, NULL, 'JgdC0BDp1701149520.png', 1, 1, 144, 0, 0, '#000000', '2023-10-12 11:32:42', '2023-11-28 05:32:00'),
(147, 'Martial Sport', 'martial-sport', 'fas fa-moon', 'k3V5tbnL1697110603.png', NULL, NULL, 'tzXMDWUq1701150425.png', 1, 1, 144, 0, 0, '#000000', '2023-10-12 11:36:43', '2023-11-28 05:47:05'),
(148, 'Ladies Gym', 'ladies-gym', 'fas fa-moon', 'rpvzrAC81697110735.png', NULL, NULL, 'nJMg4HmB1701150669.png', 1, 1, 144, 0, 0, '#000000', '2023-10-12 11:38:55', '2023-11-28 05:51:09'),
(149, 'Yoga', 'yoga', 'fas fa-moon', 'ZL8rIIgC1697110835.png', NULL, NULL, 'LdhFdk9y1701150782.png', 1, 1, 144, 0, 0, '#000000', '2023-10-12 11:40:35', '2023-11-28 05:53:02'),
(150, 'Paddle Club', 'paddle-club', 'fas fa-moon', '3ZwOjp441697111004.png', NULL, NULL, 'NPQDkdKA1701157138.png', 1, 1, 144, 0, 0, '#000000', '2023-10-12 11:43:24', '2023-11-28 07:38:58'),
(151, 'Therapy Massage', 'therapy-massage', 'fas fa-moon', 'vO5IuV831697111120.png', 'jchmnDQe1699426294.png', NULL, 'mDuUPXtt1699426294.png', 1, 1, 25, 0, 0, '#000000', '2023-10-12 11:45:20', '2023-11-08 06:51:34'),
(152, 'Dealers', 'dealers', 'fas fa-moon', 'zQSEa10B1697116575.png', 'PojRA1Yd1697263147.webp', '1RqSV2fv1697117036.jpg', '0KwxhIWH1697264497.jpg', 1, 1, NULL, 0, 0, '#000000', '2023-10-12 13:16:15', '2023-10-14 06:21:37'),
(154, 'Accessories', 'accessories', 'fas fa-moon', 'NZUQ9D481699198331.png', 'aK7z6DxB1699198331.png', NULL, '2eW3Fwy61699198331.png', 0, 1, 20, 1, 0, '#000000', '2023-10-17 12:07:05', '2023-11-05 15:32:11'),
(156, 'Shoes and Bags', 'shoes-and-bags', 'fas fa-moon', 'qEt0kOlO1697544778.png', '21bseiZq1699201305.png', NULL, 'CzNdhKxT1699201305.png', 0, 1, 20, 0, 1, '#000000', '2023-10-17 12:12:58', '2023-11-05 16:21:45'),
(157, 'Beauty Products', 'beauty-products', 'fas fa-moon', 'NiupzFqh1697545941.png', 'lqCVo4ef1699208614.png', NULL, 'hcinnqpb1699208614.png', 0, 1, 20, 1, 0, '#000000', '2023-10-17 12:32:21', '2023-11-05 18:23:34'),
(158, 'Personal Shopper', 'personal-shopper', 'fas fa-moon', 'pnbL0eww1697546169.png', 'oLFZ7tEI1699361725.png', NULL, 'Lt18BzdC1699361725.png', 0, 1, 20, 1, 0, '#000000', '2023-10-17 12:36:09', '2023-11-07 12:55:25'),
(159, 'Thai Massage', 'thai-massage', 'fas fa-moon', 'sBO1HShf1697547258.png', '1G6nq8qZ1699426413.png', NULL, 'u9XtdxUi1699426413.png', 0, 1, 25, 1, 0, '#000000', '2023-10-17 12:54:18', '2023-11-08 06:53:33'),
(160, 'Relaxing massage', 'relaxing-massage', 'fas fa-moon', 'OMUQTVxq1697547332.png', '2jObUpPA1699426667.png', NULL, 'ns2qul0r1699426667.png', 0, 1, 25, 1, 0, '#000000', '2023-10-17 12:55:32', '2023-11-08 06:57:47'),
(161, 'Ayurvedic Massage', 'ayurvedic-massage', 'fas fa-moon', 'kTmGz2R21697547485.png', 'MqV9RRAc1699426270.png', NULL, 'Z1aRZDDT1699426270.png', 0, 1, 25, 1, 0, '#000000', '2023-10-17 12:58:05', '2023-11-08 06:51:10'),
(162, 'Car Mechanic', 'car-mechanic', 'fas fa-moon', 'mASaDj6o1697547712.png', 'Wf7FQ9ov1699437161.png', NULL, '2HcP5qFs1701022031.png', 0, 1, 32, 1, 0, '#000000', '2023-10-17 13:01:52', '2023-11-26 18:07:11'),
(163, 'Car Decors', 'car-decors', 'fas fa-moon', '2m715n7w1697547882.png', NULL, NULL, 'RmNfeyyZ1701022301.png', 0, 1, 32, 1, 0, '#000000', '2023-10-17 13:04:42', '2023-11-26 18:11:41'),
(164, 'Car Spare Parts', 'car-spare-parts', 'fas fa-moon', '1kOEOoen1697547999.png', NULL, NULL, 'tcLdt7wg1701022454.png', 0, 1, 32, 1, 0, '#000000', '2023-10-17 13:06:39', '2023-11-26 18:14:14'),
(165, 'Road Help', 'road-help', 'fas fa-moon', 'rw3aFE341697548133.png', NULL, NULL, 'D6fsn8Br1701023129.png', 0, 1, 32, 1, 0, '#000000', '2023-10-17 13:08:53', '2023-11-26 18:25:29'),
(166, 'Car Wash', 'car-wash', 'fas fa-moon', 'O7vOmRXR1697548223.png', NULL, NULL, 'pX7mPJLw1701084100.png', 0, 1, 32, 1, 0, '#000000', '2023-10-17 13:10:23', '2023-11-27 11:21:40'),
(167, 'Event Organisation', 'event-organisation', 'fas fa-moon', 'COuomyaA1697548375.png', NULL, NULL, 'v12brhBA1701089290.png', 0, 1, 33, 1, 0, '#000000', '2023-10-17 13:12:55', '2023-11-27 12:48:10'),
(168, 'Wedding Organisation', 'wedding-organisation', 'fas fa-moon', '3dfAq8Rj1697548486.png', NULL, NULL, 'sPXgPYmu1701089522.png', 0, 1, 33, 1, 0, '#000000', '2023-10-17 13:14:46', '2023-11-27 12:52:02'),
(169, 'Flowers and Chocolates', 'flowers-and-chocolates', 'fas fa-moon', 'Tio1d1UB1697548598.png', NULL, NULL, '2SIwBcUc1701089623.png', 0, 1, 33, 1, 0, '#000000', '2023-10-17 13:16:38', '2023-11-27 12:53:43'),
(170, 'Musical Bands', 'musical-bands', 'fas fa-moon', 'jBo0gn2g1697548685.png', NULL, NULL, 'DMrzmjGf1701104370.png', 0, 1, 33, 1, 0, '#000000', '2023-10-17 13:18:05', '2023-11-27 16:59:30'),
(171, 'Hospitality', 'hospitality', 'fas fa-moon', 'hXLfEvr71697548743.png', NULL, NULL, '3nhbXBON1701106198.png', 0, 1, 33, 1, 0, '#000000', '2023-10-17 13:19:03', '2023-11-27 17:29:58'),
(172, 'Wedding Dress Rental', 'wedding-dress-rental', 'fas fa-moon', 'xqKvIRnw1697548821.png', NULL, NULL, '28iMqZgR1701107349.png', 0, 1, 33, 1, 0, '#000000', '2023-10-17 13:20:21', '2023-11-27 17:49:09'),
(174, 'Restaurants', 'restaurants', 'fas fa-moon', NULL, NULL, NULL, '1ZBNloL61701248895.jpg', 0, 1, 18, 0, 0, '#000000', '2023-11-29 09:08:15', '2023-11-29 09:08:28');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `country_id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 19, 'Dhaka', 1, '2022-09-22 04:30:00', '2022-09-22 04:30:00'),
(2, 105, 'New Delhi', 1, '2022-09-22 04:32:56', '2022-09-22 04:32:56'),
(5, 19, 'Chittagong', 1, '2023-02-27 09:27:18', '2023-02-27 09:27:18');

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `count` varchar(255) DEFAULT NULL,
  `messurement` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `title`, `count`, `messurement`, `created_at`, `updated_at`) VALUES
(1, 'Countries', '200', '+', '2022-02-20 22:56:47', '2023-05-18 07:53:03'),
(3, 'Popular Authors', '6', 'k+', '2022-02-20 23:15:03', '2023-05-18 07:52:41'),
(4, 'Business Listing', '7', '+', '2022-02-20 23:16:18', '2023-05-18 07:52:03');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `iso2` varchar(191) NOT NULL,
  `iso3` varchar(191) NOT NULL,
  `phone_code` int(11) NOT NULL,
  `postcode_required` tinyint(4) NOT NULL DEFAULT 0,
  `is_eu` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `iso2`, `iso3`, `phone_code`, `postcode_required`, `is_eu`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Andorra', 'AD', 'AND', 376, 0, 0, 0, NULL, NULL),
(2, 'United Arab Emirates', 'AE', 'ARE', 971, 0, 0, 0, NULL, NULL),
(3, 'Afghanistan', 'AF', 'AFG', 93, 0, 0, 0, NULL, NULL),
(4, 'Antigua and Barbuda', 'AG', 'ATG', 1268, 0, 0, 0, NULL, NULL),
(5, 'Anguilla', 'AI', 'AIA', 1264, 0, 0, 0, NULL, NULL),
(6, 'Albania', 'AL', 'ALB', 355, 0, 0, 0, NULL, NULL),
(7, 'Armenia', 'AM', 'ARM', 374, 0, 0, 0, NULL, NULL),
(8, 'Angola', 'AO', 'AGO', 244, 0, 0, 0, NULL, NULL),
(9, 'Antarctica', 'AQ', 'ATA', 672, 0, 0, 0, NULL, NULL),
(10, 'Argentina', 'AR', 'ARG', 54, 0, 0, 0, NULL, NULL),
(11, 'American Samoa', 'AS', 'ASM', 1684, 0, 0, 0, NULL, NULL),
(12, 'Austria', 'AT', 'AUT', 43, 0, 0, 0, NULL, NULL),
(13, 'Australia', 'AU', 'AUS', 61, 0, 0, 0, NULL, NULL),
(14, 'Aruba', 'AW', 'ABW', 297, 0, 0, 0, NULL, NULL),
(15, 'Åland Islands', 'AX', 'ALA', 0, 0, 0, 0, NULL, NULL),
(16, 'Azerbaijan', 'AZ', 'AZE', 994, 0, 0, 0, NULL, NULL),
(17, 'Bosnia and Herzegovina', 'BA', 'BIH', 387, 0, 0, 0, NULL, NULL),
(18, 'Barbados', 'BB', 'BRB', 1246, 0, 0, 0, NULL, NULL),
(19, 'Bangladesh', 'BD', 'BGD', 880, 0, 0, 1, NULL, '2022-06-01 10:25:09'),
(20, 'Belgium', 'BE', 'BEL', 32, 0, 0, 0, NULL, NULL),
(21, 'Burkina Faso', 'BF', 'BFA', 226, 0, 0, 0, NULL, NULL),
(22, 'Bulgaria', 'BG', 'BGR', 359, 0, 0, 0, NULL, NULL),
(23, 'Bahrain', 'BH', 'BHR', 973, 0, 0, 0, NULL, NULL),
(24, 'Burundi', 'BI', 'BDI', 257, 0, 0, 0, NULL, NULL),
(25, 'Benin', 'BJ', 'BEN', 229, 0, 0, 0, NULL, NULL),
(26, 'Saint Barthélemy', 'BL', 'BLM', 0, 0, 0, 0, NULL, NULL),
(27, 'Bermuda', 'BM', 'BMU', 1441, 0, 0, 0, NULL, NULL),
(28, 'Brunei Darussalam', 'BN', 'BRN', 673, 0, 0, 0, NULL, NULL),
(29, 'Bolivia', 'BO', 'BOL', 591, 0, 0, 0, NULL, NULL),
(30, 'Bonaire, Sint Eustatius and Saba', 'BQ', 'BES', 0, 0, 0, 0, NULL, NULL),
(31, 'Brazil', 'BR', 'BRA', 55, 0, 0, 0, NULL, NULL),
(32, 'Bahamas', 'BS', 'BHS', 1242, 0, 0, 0, NULL, NULL),
(33, 'Bhutan', 'BT', 'BTN', 975, 0, 0, 1, NULL, '2022-09-22 04:04:53'),
(34, 'Bouvet Island', 'BV', 'BVT', 44, 0, 0, 0, NULL, NULL),
(35, 'Botswana', 'BW', 'BWA', 267, 0, 0, 0, NULL, NULL),
(36, 'Belarus', 'BY', 'BLR', 375, 0, 0, 0, NULL, NULL),
(37, 'Belize', 'BZ', 'BLZ', 501, 0, 0, 0, NULL, NULL),
(38, 'Canada', 'CA', 'CAN', 1, 0, 0, 0, NULL, NULL),
(39, 'Cocos (Keeling) Islands', 'CC', 'CCK', 61, 0, 0, 0, NULL, NULL),
(40, 'Congo (Democratic Republic of the)', 'CD', 'COD', 243, 0, 0, 0, NULL, NULL),
(41, 'Central African Republic', 'CF', 'CAF', 236, 0, 0, 0, NULL, NULL),
(42, 'Congo', 'CG', 'COG', 242, 0, 0, 0, NULL, NULL),
(43, 'Switzerland', 'CH', 'CHE', 41, 0, 0, 0, NULL, NULL),
(44, 'Ivory Coast', 'CI', 'CIV', 225, 0, 0, 0, NULL, NULL),
(45, 'Cook Islands', 'CK', 'COK', 682, 0, 0, 0, NULL, NULL),
(46, 'Chile', 'CL', 'CHL', 56, 0, 0, 0, NULL, NULL),
(47, 'Cameroon', 'CM', 'CMR', 237, 0, 0, 0, NULL, NULL),
(48, 'China', 'CN', 'CHN', 86, 0, 0, 0, NULL, NULL),
(49, 'Colombia', 'CO', 'COL', 57, 0, 0, 0, NULL, NULL),
(50, 'Costa Rica', 'CR', 'CRI', 506, 0, 0, 0, NULL, NULL),
(51, 'Cuba', 'CU', 'CUB', 53, 0, 0, 0, NULL, NULL),
(52, 'Cape Verde', 'CV', 'CPV', 238, 0, 0, 0, NULL, NULL),
(53, 'Curaçao', 'CW', 'CUW', 0, 0, 0, 0, NULL, NULL),
(54, 'Christmas Island', 'CX', 'CXR', 61, 0, 0, 0, NULL, NULL),
(55, 'Cyprus', 'CY', 'CYP', 357, 0, 0, 0, NULL, NULL),
(56, 'Czech Republic', 'CZ', 'CZE', 420, 0, 0, 0, NULL, NULL),
(57, 'Germany', 'DE', 'DEU', 49, 0, 0, 0, NULL, NULL),
(58, 'Djibouti', 'DJ', 'DJI', 253, 0, 0, 0, NULL, NULL),
(59, 'Denmark', 'DK', 'DNK', 45, 0, 0, 0, NULL, NULL),
(60, 'Dominica', 'DM', 'DMA', 1767, 0, 0, 0, NULL, NULL),
(61, 'Dominican Republic', 'DO', 'DOM', 1809, 0, 0, 0, NULL, NULL),
(62, 'Algeria', 'DZ', 'DZA', 213, 0, 0, 0, NULL, NULL),
(63, 'Ecuador', 'EC', 'ECU', 593, 0, 0, 0, NULL, NULL),
(64, 'Estonia', 'EE', 'EST', 372, 0, 0, 0, NULL, NULL),
(65, 'Egypt', 'EG', 'EGY', 20, 0, 0, 0, NULL, NULL),
(66, 'Western Sahara', 'EH', 'ESH', 0, 0, 0, 0, NULL, NULL),
(67, 'Eritrea', 'ER', 'ERI', 291, 0, 0, 0, NULL, NULL),
(68, 'Spain', 'ES', 'ESP', 34, 0, 0, 0, NULL, NULL),
(69, 'Ethiopia', 'ET', 'ETH', 251, 0, 0, 0, NULL, NULL),
(70, 'Finland', 'FI', 'FIN', 358, 0, 0, 0, NULL, NULL),
(71, 'Fiji', 'FJ', 'FJI', 679, 0, 0, 0, NULL, NULL),
(72, 'Falkland Islands (Malvinas)', 'FK', 'FLK', 500, 0, 0, 0, NULL, NULL),
(73, 'Micronesia (Federated States of)', 'FM', 'FSM', 691, 0, 0, 0, NULL, NULL),
(74, 'Faroe Islands', 'FO', 'FRO', 298, 0, 0, 0, NULL, NULL),
(75, 'France', 'FR', 'FRA', 33, 0, 0, 0, NULL, NULL),
(76, 'Gabon', 'GA', 'GAB', 241, 0, 0, 0, NULL, NULL),
(77, 'United Kingdom', 'GB', 'GBR', 44, 1, 0, 0, NULL, NULL),
(78, 'Grenada', 'GD', 'GRD', 1473, 0, 0, 0, NULL, NULL),
(79, 'Georgia', 'GE', 'GEO', 995, 0, 0, 0, NULL, NULL),
(80, 'French Guiana', 'GF', 'GUF', 594, 0, 0, 0, NULL, NULL),
(81, 'Guernsey', 'GG', 'GGY', 0, 0, 0, 0, NULL, NULL),
(82, 'Ghana', 'GH', 'GHA', 233, 0, 0, 0, NULL, NULL),
(83, 'Gibraltar', 'GI', 'GIB', 350, 0, 0, 0, NULL, NULL),
(84, 'Greenland', 'GL', 'GRL', 299, 0, 0, 0, NULL, NULL),
(85, 'Gambia', 'GM', 'GMB', 220, 0, 0, 0, NULL, NULL),
(86, 'Guinea', 'GN', 'GIN', 224, 0, 0, 0, NULL, NULL),
(87, 'Guadeloupe', 'GP', 'GLP', 590, 0, 0, 0, NULL, NULL),
(88, 'Equatorial Guinea', 'GQ', 'GNQ', 240, 0, 0, 0, NULL, NULL),
(89, 'Greece', 'GR', 'GRC', 30, 0, 0, 0, NULL, NULL),
(90, 'South Georgia and the South Sandwich Islands', 'GS', 'SGS', 44, 0, 0, 0, NULL, NULL),
(91, 'Guatemala', 'GT', 'GTM', 502, 0, 0, 0, NULL, NULL),
(92, 'Guam', 'GU', 'GUM', 1671, 0, 0, 0, NULL, NULL),
(93, 'Guinea-Bissau', 'GW', 'GNB', 245, 0, 0, 0, NULL, NULL),
(94, 'Guyana', 'GY', 'GUY', 592, 0, 0, 0, NULL, NULL),
(95, 'Hong Kong', 'HK', 'HKG', 852, 0, 0, 0, NULL, NULL),
(96, 'Heard Island and McDonald Islands', 'HM', 'HMD', 44, 0, 0, 0, NULL, NULL),
(97, 'Honduras', 'HN', 'HND', 504, 0, 0, 0, NULL, NULL),
(98, 'Croatia (Hrvatska)', 'HR', 'HRV', 385, 0, 0, 0, NULL, NULL),
(99, 'Haiti', 'HT', 'HTI', 509, 0, 0, 0, NULL, NULL),
(100, 'Hungary', 'HU', 'HUN', 36, 0, 0, 0, NULL, NULL),
(101, 'Indonesia', 'ID', 'IDN', 62, 0, 0, 0, NULL, NULL),
(102, 'Ireland', 'IE', 'IRL', 353, 0, 0, 0, NULL, NULL),
(103, 'Israel', 'IL', 'ISR', 972, 0, 0, 0, NULL, NULL),
(104, 'Isle of Man', 'IM', 'IMN', 0, 0, 0, 0, NULL, NULL),
(105, 'India', 'IN', 'IND', 91, 0, 0, 1, NULL, '2022-09-22 04:04:19'),
(106, 'British Indian Ocean Territory', 'IO', 'IOT', 0, 0, 0, 0, NULL, NULL),
(107, 'Iraq', 'IQ', 'IRQ', 964, 0, 0, 0, NULL, NULL),
(108, 'Iran (Islamic Republic of)', 'IR', 'IRN', 98, 0, 0, 0, NULL, NULL),
(109, 'Iceland', 'IS', 'ISL', 354, 0, 0, 0, NULL, NULL),
(110, 'Italy', 'IT', 'ITA', 39, 0, 0, 0, NULL, NULL),
(111, 'Jersey', 'JE', 'JEY', 0, 0, 0, 0, NULL, NULL),
(112, 'Jamaica', 'JM', 'JAM', 1876, 0, 0, 0, NULL, NULL),
(113, 'Jordan', 'JO', 'JOR', 962, 0, 0, 0, NULL, NULL),
(114, 'Japan', 'JP', 'JPN', 81, 0, 0, 0, NULL, NULL),
(115, 'Kenya', 'KE', 'KEN', 254, 0, 0, 0, NULL, NULL),
(116, 'Kyrgyzstan', 'KG', 'KGZ', 996, 0, 0, 0, NULL, NULL),
(117, 'Cambodia', 'KH', 'KHM', 855, 0, 0, 0, NULL, NULL),
(118, 'Kiribati', 'KI', 'KIR', 686, 0, 0, 0, NULL, NULL),
(119, 'Comoros', 'KM', 'COM', 269, 0, 0, 0, NULL, NULL),
(120, 'Saint Kitts and Nevis', 'KN', 'KNA', 1869, 0, 0, 0, NULL, NULL),
(121, 'Korea (Democratic People\'s Republic of)', 'KP', 'PRK', 850, 0, 0, 0, NULL, NULL),
(122, 'Korea (Republic of)', 'KR', 'KOR', 82, 0, 0, 0, NULL, NULL),
(123, 'Kuwait', 'KW', 'KWT', 965, 0, 0, 0, NULL, NULL),
(124, 'Cayman Islands', 'KY', 'CYM', 1345, 0, 0, 0, NULL, NULL),
(125, 'Kazakhstan', 'KZ', 'KAZ', 7, 0, 0, 0, NULL, NULL),
(126, 'Lao People\'s Democratic Republic', 'LA', 'LAO', 856, 0, 0, 0, NULL, NULL),
(127, 'Lebanon', 'LB', 'LBN', 961, 0, 0, 0, NULL, NULL),
(128, 'Saint Lucia', 'LC', 'LCA', 1758, 0, 0, 0, NULL, NULL),
(129, 'Liechtenstein', 'LI', 'LIE', 423, 0, 0, 0, NULL, NULL),
(130, 'Sri Lanka', 'LK', 'LKA', 94, 0, 0, 0, NULL, NULL),
(131, 'Liberia', 'LR', 'LBR', 231, 0, 0, 0, NULL, NULL),
(132, 'Lesotho', 'LS', 'LSO', 266, 0, 0, 0, NULL, NULL),
(133, 'Lithuania', 'LT', 'LTU', 370, 0, 0, 0, NULL, NULL),
(134, 'Luxembourg', 'LU', 'LUX', 352, 0, 0, 0, NULL, NULL),
(135, 'Latvia', 'LV', 'LVA', 371, 0, 0, 0, NULL, NULL),
(136, 'Libya', 'LY', 'LBY', 218, 0, 0, 0, NULL, NULL),
(137, 'Morocco', 'MA', 'MAR', 212, 0, 0, 0, NULL, NULL),
(138, 'Monaco', 'MC', 'MCO', 377, 0, 0, 0, NULL, NULL),
(139, 'Moldova (Republic of)', 'MD', 'MDA', 373, 0, 0, 0, NULL, NULL),
(140, 'Montenegro', 'ME', 'MNE', 382, 0, 0, 0, NULL, NULL),
(141, 'Saint Martin (French part)', 'MF', 'MAF', 0, 0, 0, 0, NULL, NULL),
(142, 'Madagascar', 'MG', 'MDG', 261, 0, 0, 0, NULL, NULL),
(143, 'Marshall Islands', 'MH', 'MHL', 692, 0, 0, 0, NULL, NULL),
(144, 'Macedonia', 'MK', 'MKD', 389, 0, 0, 0, NULL, NULL),
(145, 'Mali', 'ML', 'MLI', 223, 0, 0, 0, NULL, NULL),
(146, 'Myanmar', 'MM', 'MMR', 95, 0, 0, 0, NULL, NULL),
(147, 'Mongolia', 'MN', 'MNG', 976, 0, 0, 0, NULL, NULL),
(148, 'Macau', 'MO', 'MAC', 853, 0, 0, 0, NULL, NULL),
(149, 'Northern Mariana Islands', 'MP', 'MNP', 1670, 0, 0, 0, NULL, NULL),
(150, 'Martinique', 'MQ', 'MTQ', 596, 0, 0, 0, NULL, NULL),
(151, 'Mauritania', 'MR', 'MRT', 222, 0, 0, 0, NULL, NULL),
(152, 'Montserrat', 'MS', 'MSR', 1664, 0, 0, 0, NULL, NULL),
(153, 'Malta', 'MT', 'MLT', 356, 0, 0, 0, NULL, NULL),
(154, 'Mauritius', 'MU', 'MUS', 230, 0, 0, 0, NULL, NULL),
(155, 'Maldives', 'MV', 'MDV', 960, 0, 0, 0, NULL, NULL),
(156, 'Malawi', 'MW', 'MWI', 265, 0, 0, 0, NULL, NULL),
(157, 'Mexico', 'MX', 'MEX', 52, 0, 0, 0, NULL, NULL),
(158, 'Malaysia', 'MY', 'MYS', 60, 0, 0, 1, NULL, '2022-09-22 04:05:14'),
(159, 'Mozambique', 'MZ', 'MOZ', 258, 0, 0, 0, NULL, NULL),
(160, 'Namibia', 'NA', 'NAM', 264, 0, 0, 0, NULL, NULL),
(161, 'New Caledonia', 'NC', 'NCL', 687, 0, 0, 0, NULL, NULL),
(162, 'Niger', 'NE', 'NER', 227, 0, 0, 0, NULL, NULL),
(163, 'Norfolk Island', 'NF', 'NFK', 672, 0, 0, 0, NULL, NULL),
(164, 'Nigeria', 'NG', 'NGA', 234, 0, 0, 0, NULL, NULL),
(165, 'Nicaragua', 'NI', 'NIC', 505, 0, 0, 0, NULL, NULL),
(166, 'Netherlands', 'NL', 'NLD', 31, 0, 0, 0, NULL, NULL),
(167, 'Norway', 'NO', 'NOR', 47, 0, 0, 0, NULL, NULL),
(168, 'Nepal', 'NP', 'NPL', 977, 0, 0, 1, NULL, '2022-09-22 04:04:35'),
(169, 'Nauru', 'NR', 'NRU', 674, 0, 0, 0, NULL, NULL),
(170, 'Niue', 'NU', 'NIU', 683, 0, 0, 0, NULL, NULL),
(171, 'New Zealand', 'NZ', 'NZL', 64, 0, 0, 0, NULL, NULL),
(172, 'Oman', 'OM', 'OMN', 968, 0, 0, 0, NULL, NULL),
(173, 'Panama', 'PA', 'PAN', 507, 0, 0, 0, NULL, NULL),
(174, 'Peru', 'PE', 'PER', 51, 0, 0, 0, NULL, NULL),
(175, 'French Polynesia', 'PF', 'PYF', 689, 0, 0, 0, NULL, NULL),
(176, 'Papua New Guinea', 'PG', 'PNG', 675, 0, 0, 0, NULL, NULL),
(177, 'Philippines', 'PH', 'PHL', 63, 0, 0, 0, NULL, NULL),
(178, 'Pakistan', 'PK', 'PAK', 92, 0, 0, 1, NULL, '2022-09-22 04:04:27'),
(179, 'Poland', 'PL', 'POL', 48, 0, 0, 0, NULL, NULL),
(180, 'Saint Pierre and Miquelon', 'PM', 'SPM', 508, 0, 0, 0, NULL, NULL),
(181, 'Pitcairn', 'PN', 'PCN', 870, 0, 0, 0, NULL, NULL),
(182, 'Puerto Rico', 'PR', 'PRI', 1, 0, 0, 0, NULL, NULL),
(183, 'Palestine, State of', 'PS', 'PSE', 0, 0, 0, 0, NULL, NULL),
(184, 'Portugal', 'PT', 'PRT', 351, 0, 0, 1, NULL, '2022-09-22 04:05:22'),
(185, 'Palau', 'PW', 'PLW', 680, 0, 0, 0, NULL, NULL),
(186, 'Paraguay', 'PY', 'PRY', 595, 0, 0, 0, NULL, NULL),
(187, 'Qatar', 'QA', 'QAT', 974, 0, 0, 0, NULL, NULL),
(188, 'Reunion', 'RE', 'REU', 262, 0, 0, 0, NULL, NULL),
(189, 'Romania', 'RO', 'ROU', 40, 0, 0, 0, NULL, NULL),
(190, 'Serbia', 'RS', 'SRB', 381, 0, 0, 0, NULL, NULL),
(191, 'Russian Federation', 'RU', 'RUS', 7, 0, 0, 0, NULL, NULL),
(192, 'Rwanda', 'RW', 'RWA', 250, 0, 0, 0, NULL, NULL),
(193, 'Saudi Arabia', 'SA', 'SAU', 966, 0, 0, 0, NULL, NULL),
(194, 'Solomon Islands', 'SB', 'SLB', 677, 0, 0, 0, NULL, NULL),
(195, 'Seychelles', 'SC', 'SYC', 248, 0, 0, 0, NULL, NULL),
(196, 'Sudan', 'SD', 'SDN', 249, 0, 0, 0, NULL, NULL),
(197, 'Sweden', 'SE', 'SWE', 46, 0, 0, 0, NULL, NULL),
(198, 'Singapore', 'SG', 'SGP', 65, 0, 0, 1, NULL, '2022-09-22 04:05:29'),
(199, 'Saint Helena, Ascension and Tristan da Cunha', 'SH', 'SHN', 290, 0, 0, 0, NULL, NULL),
(200, 'Slovenia', 'SI', 'SVN', 386, 0, 0, 0, NULL, NULL),
(201, 'Svalbard and Jan Mayen', 'SJ', 'SJM', 0, 0, 0, 0, NULL, NULL),
(202, 'Slovakia', 'SK', 'SVK', 421, 0, 0, 0, NULL, NULL),
(203, 'Sierra Leone', 'SL', 'SLE', 232, 0, 0, 0, NULL, NULL),
(204, 'San Marino', 'SM', 'SMR', 378, 0, 0, 0, NULL, NULL),
(205, 'Senegal', 'SN', 'SEN', 221, 0, 0, 0, NULL, NULL),
(206, 'Somalia', 'SO', 'SOM', 252, 0, 0, 0, NULL, NULL),
(207, 'Suriname', 'SR', 'SUR', 597, 0, 0, 0, NULL, NULL),
(208, 'South Sudan', 'SS', 'SSD', 0, 0, 0, 0, NULL, NULL),
(209, 'Sao Tome and Principe', 'ST', 'STP', 239, 0, 0, 0, NULL, NULL),
(210, 'El Salvador', 'SV', 'SLV', 503, 0, 0, 0, NULL, NULL),
(211, 'Sint Maarten (Dutch part)', 'SX', 'SXM', 0, 0, 0, 0, NULL, NULL),
(212, 'Syrian Arab Republic', 'SY', 'SYR', 963, 0, 0, 0, NULL, NULL),
(213, 'Swaziland', 'SZ', 'SWZ', 268, 0, 0, 0, NULL, NULL),
(214, 'Turks and Caicos Islands', 'TC', 'TCA', 1649, 0, 0, 0, NULL, NULL),
(215, 'Chad', 'TD', 'TCD', 235, 0, 0, 0, NULL, NULL),
(216, 'French Southern Territories', 'TF', 'ATF', 44, 0, 0, 0, NULL, NULL),
(217, 'Togo', 'TG', 'TGO', 228, 0, 0, 0, NULL, NULL),
(218, 'Thailand', 'TH', 'THA', 66, 0, 0, 0, NULL, NULL),
(219, 'Tajikistan', 'TJ', 'TJK', 992, 0, 0, 0, NULL, NULL),
(220, 'Tokelau', 'TK', 'TKL', 690, 0, 0, 0, NULL, NULL),
(221, 'Timor-Leste', 'TL', 'TLS', 670, 0, 0, 0, NULL, NULL),
(222, 'Turkmenistan', 'TM', 'TKM', 993, 0, 0, 0, NULL, NULL),
(223, 'Tunisia', 'TN', 'TUN', 216, 0, 0, 0, NULL, NULL),
(224, 'Tonga', 'TO', 'TON', 676, 0, 0, 0, NULL, NULL),
(225, 'Turkey', 'TR', 'TUR', 90, 0, 0, 0, NULL, NULL),
(226, 'Trinidad and Tobago', 'TT', 'TTO', 1868, 0, 0, 0, NULL, NULL),
(227, 'Tuvalu', 'TV', 'TUV', 688, 0, 0, 0, NULL, NULL),
(228, 'Taiwan', 'TW', 'TWN', 886, 0, 0, 1, NULL, '2022-06-29 22:06:59'),
(229, 'Tanzania, United Republic of', 'TZ', 'TZA', 255, 0, 0, 0, NULL, NULL),
(230, 'Ukraine', 'UA', 'UKR', 380, 0, 0, 0, NULL, NULL),
(231, 'Uganda', 'UG', 'UGA', 256, 0, 0, 0, NULL, NULL),
(232, 'United States Minor Outlying Islands', 'UM', 'UMI', 44, 0, 0, 0, NULL, NULL),
(233, 'United States of America', 'US', 'USA', 1, 0, 0, 0, NULL, NULL),
(234, 'Uruguay', 'UY', 'URY', 598, 0, 0, 0, NULL, NULL),
(235, 'Uzbekistan', 'UZ', 'UZB', 998, 0, 0, 0, NULL, NULL),
(236, 'Vatican City State', 'VA', 'VAT', 39, 0, 0, 0, NULL, NULL),
(237, 'Saint Vincent and the Grenadines', 'VC', 'VCT', 1784, 0, 0, 0, NULL, NULL),
(238, 'Venezuela', 'VE', 'VEN', 58, 0, 0, 0, NULL, NULL),
(239, 'Virgin Islands (British)', 'VG', 'VGB', 1284, 0, 0, 0, NULL, NULL),
(240, 'Virgin Islands (U.S.)', 'VI', 'VIR', 1340, 0, 0, 0, NULL, NULL),
(241, 'Viet Nam', 'VN', 'VNM', 84, 0, 0, 0, NULL, NULL),
(242, 'Vanuatu', 'VU', 'VUT', 678, 0, 0, 0, NULL, NULL),
(243, 'Wallis and Futuna', 'WF', 'WLF', 681, 0, 0, 0, NULL, NULL),
(244, 'Samoa', 'WS', 'WSM', 685, 0, 0, 0, NULL, NULL),
(245, 'Yemen', 'YE', 'YEM', 967, 0, 0, 1, NULL, '2022-06-29 22:07:02'),
(246, 'Mayotte', 'YT', 'MYT', 262, 0, 0, 0, NULL, NULL),
(247, 'South Africa', 'ZA', 'ZAF', 27, 0, 0, 0, NULL, NULL),
(248, 'Zambia', 'ZM', 'ZMB', 260, 0, 0, 0, NULL, '2022-06-29 22:06:19'),
(249, 'Zimbabwe', 'ZW', 'ZWE', 263, 0, 0, 0, NULL, '2022-06-01 10:25:27');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(191) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` double NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `sign`, `value`, `is_default`) VALUES
(1, 'USD', '$', 1, 0),
(4, 'BDT', '৳', 82.92649841308594, 0),
(6, 'EUR', '€', 0.864870011806488, 0),
(8, 'NGN', '₦', 410.94, 0),
(9, 'INR', '₹', 74, 0),
(11, 'AED', 'AED', 3.68, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dynamic_forms`
--

CREATE TABLE `dynamic_forms` (
  `id` int(11) NOT NULL,
  `user_type` tinyint(4) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `form_type` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `label` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `required` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dynamic_forms`
--

INSERT INTO `dynamic_forms` (`id`, `user_type`, `user_id`, `form_type`, `type`, `label`, `name`, `required`, `created_at`, `updated_at`) VALUES
(9, 1, NULL, 'kyc', 1, 'Full Name', 'full_name', 1, '2022-03-06 06:08:28', '2022-03-06 06:08:28'),
(10, 1, NULL, 'kyc', 2, 'NID', 'nid', 1, '2022-03-06 06:08:38', '2022-03-06 06:08:38'),
(11, 1, NULL, 'kyc', 3, 'Present Address', 'present_address', 1, '2022-03-06 06:08:51', '2022-03-06 06:08:51'),
(12, 1, NULL, 'kyc', 3, 'Parmanent Address', 'parmanent_address', 1, '2022-03-06 06:09:04', '2022-03-06 06:09:04'),
(22, 1, 86, 'buy_sell', 1, 'Full Name', 'full_name', 1, '2022-12-22 10:46:29', '2022-12-22 10:46:29'),
(23, 1, 86, 'buy_sell', 2, 'NID Front Side', 'nid_front_side', 1, '2022-12-22 10:51:27', '2022-12-22 10:51:27'),
(24, 1, 86, 'buy_sell', 2, 'NID Back Side', 'nid_back_side', 1, '2022-12-22 10:52:24', '2022-12-22 10:52:24'),
(25, 1, 86, 'buy_sell', 3, 'Financial Statement', 'financial_statement', 1, '2022-12-22 10:53:11', '2022-12-22 10:53:11');

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` int(11) NOT NULL,
  `email_type` varchar(255) DEFAULT NULL,
  `email_subject` mediumtext DEFAULT NULL,
  `email_body` longtext DEFAULT NULL,
  `sms` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `email_type`, `email_subject`, `email_body`, `sms`, `status`) VALUES
(1, 'welcome', 'Welcome to our website.', '<p>Hello {customer_name},<br>Your registration successfully completed.</p><p>Thank You<br></p>', '<p>Hello {customer_name},<br>Your registration successfully completed.</p><p>Thank You<br></p>', 1),
(2, 'password changed', 'Your password has been changed', '<p>Hello {customer_name},<br>Your password has been changed successfully.</p><p>Thank You<br></p>', '<p>Hello {customer_name},<br>Your password has been changed successfully.</p><p>Thank You<br></p>', 1),
(3, 'profile update', 'Your profile has been update', '<p>Hello {customer_name},<br>Your profile has been updated successfully.</p><p>Thank You<br></p>', '<p>Hello {customer_name},<br>Your profile has been updated successfully.</p><p>Thank You<br></p>', 1),
(4, 'balance transfer', 'Balance Transfer', '<p>Hello {customer_name},</p><p>You got amount from your friend.</p><p>Thank You<br></p>', '<p>Hello {customer_name},<br>You got amount from your friend.</p><p>Thank You<br></p>', 1),
(5, 'subscription', 'Subscription', '<p>Hello {customer_name},</p><p>You got amount from your friend.</p><p>Thank You<br></p>', '<p>Hello {customer_name},<br>You got amount from your friend.</p><p>Thank You<br></p>', 1),
(6, 'booking approved', 'booking approved', '<p>Hello {customer_name},</p><p>Your booking request approved.</p><p>Thank You<br></p>', '<p>Hello {customer_name},</p><p>Your booking request approved.</p><p>Thank You<br></p>', 1),
(15, 'booking rejected', 'booking rejected', '<p>Hello {customer_name},</p><p>Your booking request rejected.</p><p>Thank You<br></p>', '<p>Hello {customer_name},</p><p>Your booking request rejected.</p><p>Thank You<br></p>', 1),
(16, 'directory approved', 'directory approved', '<p>Hello {customer_name},</p><p>Your directory approved.</p><p>Thank You<br></p>', '<p>Hello {customer_name},</p><p>Your directory approved.</p><p>Thank You<br></p>', 1),
(17, 'directory rejected', 'directory rejected', '<p>Hello {customer_name},</p><p>Your directory rejected.</p><p>Thank You<br></p>', '<p>Hello {customer_name},</p><p>Your directory rejected.</p><p>Thank You<br></p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `details` text NOT NULL,
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `details`, `status`) VALUES
(3, 'Do Rego provide fully customer support?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1),
(4, 'How Rego work and what is advance features?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(5, 'Can we remove our website when we want?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(6, 'How Rego work and what is advance features?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `follower_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`id`, `user_id`, `follower_id`, `created_at`, `updated_at`) VALUES
(3, NULL, 86, '2023-04-17 08:01:00', '2023-04-17 08:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `fonts`
--

CREATE TABLE `fonts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `font_family` varchar(255) DEFAULT NULL,
  `font_value` varchar(255) DEFAULT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fonts`
--

INSERT INTO `fonts` (`id`, `font_family`, `font_value`, `is_default`, `created_at`, `updated_at`) VALUES
(1, 'Rubik', 'Rubik', 0, '2021-09-07 22:34:28', '2023-04-16 08:51:54'),
(2, 'Roboto', 'Roboto', 0, '2021-09-07 22:35:10', '2023-04-16 08:51:54'),
(3, 'New Tegomin', 'New+Tegomin', 0, '2021-09-07 22:35:23', '2023-04-16 08:51:54'),
(5, 'Open Sans', 'Open+Sans', 0, '2021-09-07 22:44:49', '2023-04-16 08:51:54'),
(11, 'Manrope', 'Manrope', 0, '2022-03-03 09:24:26', '2023-04-16 08:51:54'),
(12, 'Jost', 'Jost', 1, '2023-04-16 08:51:49', '2023-04-16 08:51:54');

-- --------------------------------------------------------

--
-- Table structure for table `foodtypes`
--

CREATE TABLE `foodtypes` (
  `id` int(11) NOT NULL,
  `service_type` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foodtypes`
--

INSERT INTO `foodtypes` (`id`, `service_type`, `name`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, '', 'India', 'fas fa-moon', 1, '2023-10-26 17:30:43', '2023-10-26 17:30:43'),
(2, '', 'North Indian', 'fas fa-moon', 1, '2023-10-26 17:44:24', '2023-10-26 17:44:47');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `listing_id` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `listing_id`, `photo`, `created_at`, `updated_at`) VALUES
(59, 28, '1871427141678007278.png', '2023-03-05 09:07:58', '2023-03-05 09:07:58'),
(60, 28, '5811132791678007278.png', '2023-03-05 09:07:59', '2023-03-05 09:07:59'),
(61, 28, '2467957661678007279.png', '2023-03-05 09:07:59', '2023-03-05 09:07:59'),
(62, 28, '14657391711678007279.png', '2023-03-05 09:07:59', '2023-03-05 09:07:59'),
(63, 29, '10981308991678078715.png', '2023-03-06 04:58:36', '2023-03-06 04:58:36'),
(64, 29, '5508806771678078716.png', '2023-03-06 04:58:36', '2023-03-06 04:58:36'),
(65, 29, '16276021811678078716.png', '2023-03-06 04:58:36', '2023-03-06 04:58:36'),
(73, 33, '8077733131679810998.jpg', '2023-03-26 06:09:58', '2023-03-26 06:09:58'),
(74, 33, '17555293961679810998.jpg', '2023-03-26 06:09:58', '2023-03-26 06:09:58'),
(75, 33, '14051328891679810998.jpg', '2023-03-26 06:09:58', '2023-03-26 06:09:58'),
(76, 34, '5246728461679819227.jpg', '2023-03-26 08:27:07', '2023-03-26 08:27:07'),
(77, 34, '19182901941679819227.jpg', '2023-03-26 08:27:07', '2023-03-26 08:27:07'),
(78, 34, '6694712551679819227.jpg', '2023-03-26 08:27:07', '2023-03-26 08:27:07'),
(81, 36, '8455787181679983044.jpg', '2023-03-28 05:57:24', '2023-03-28 05:57:24'),
(82, 36, '18743616931679983044.jpg', '2023-03-28 05:57:24', '2023-03-28 05:57:24'),
(83, 36, '16601741741679983044.jpg', '2023-03-28 05:57:24', '2023-03-28 05:57:24'),
(84, 36, '14871959421679983044.jpg', '2023-03-28 05:57:24', '2023-03-28 05:57:24'),
(93, 29, '1680516754lg-4.png', '2023-04-03 10:12:34', '2023-04-03 10:12:34'),
(94, 29, '1680516754lg-3.png', '2023-04-03 10:12:34', '2023-04-03 10:12:34'),
(95, 29, '1680516754lg-2.png', '2023-04-03 10:12:34', '2023-04-03 10:12:34'),
(108, 42, '15306002451681363438.jpg', '2023-04-13 05:23:58', '2023-04-13 05:23:58'),
(119, 37, '16887092302.jpg', '2023-07-07 05:53:50', '2023-07-07 05:53:50'),
(128, 68, '2874020341697021649.png', '2023-10-11 10:54:10', '2023-10-11 10:54:10'),
(136, 65, '9996146581697622867.jpg', '2023-10-18 09:54:27', '2023-10-18 09:54:27'),
(137, 65, '11869529891697622867.jpg', '2023-10-18 09:54:27', '2023-10-18 09:54:27'),
(142, 78, '17034567841701167875.jpg', '2023-11-28 10:37:55', '2023-11-28 10:37:55'),
(143, 78, '18951127001701167875.jpg', '2023-11-28 10:37:55', '2023-11-28 10:37:55'),
(150, 84, '1834763261701197475.jpg', '2023-11-28 18:51:15', '2023-11-28 18:51:15'),
(151, 84, '5879446741701197475.jpg', '2023-11-28 18:51:15', '2023-11-28 18:51:15'),
(152, 84, '6803498971701197475.png', '2023-11-28 18:51:15', '2023-11-28 18:51:15'),
(153, 85, '17528996351701238662.jpg', '2023-11-29 06:17:42', '2023-11-29 06:17:42'),
(154, 85, '5497886241701238662.jpg', '2023-11-29 06:17:42', '2023-11-29 06:17:42'),
(155, 85, '6025760411701238662.jpg', '2023-11-29 06:17:42', '2023-11-29 06:17:42'),
(156, 85, '18747768671701238662.jpg', '2023-11-29 06:17:43', '2023-11-29 06:17:43'),
(157, 86, '3433068991701239246.jpg', '2023-11-29 06:27:26', '2023-11-29 06:27:26'),
(158, 86, '14455978061701239246.jpg', '2023-11-29 06:27:26', '2023-11-29 06:27:26'),
(159, 86, '20392495481701239246.jpg', '2023-11-29 06:27:26', '2023-11-29 06:27:26'),
(160, 86, '20039817101701239246.jpg', '2023-11-29 06:27:26', '2023-11-29 06:27:26'),
(161, 86, '18679164311701239246.jpg', '2023-11-29 06:27:26', '2023-11-29 06:27:26'),
(162, 86, '9133018861701239246.jpg', '2023-11-29 06:27:26', '2023-11-29 06:27:26'),
(163, 87, '4050879651701240520.jpg', '2023-11-29 06:48:40', '2023-11-29 06:48:40'),
(164, 87, '17254121351701240520.jpg', '2023-11-29 06:48:40', '2023-11-29 06:48:40'),
(165, 87, '15318716051701240520.jpg', '2023-11-29 06:48:40', '2023-11-29 06:48:40'),
(166, 87, '1154692461701240520.jpg', '2023-11-29 06:48:40', '2023-11-29 06:48:40'),
(167, 88, '19393171651701242170.jpg', '2023-11-29 07:16:10', '2023-11-29 07:16:10'),
(168, 88, '19925882431701242170.jpg', '2023-11-29 07:16:10', '2023-11-29 07:16:10'),
(169, 88, '4730232151701242170.jpg', '2023-11-29 07:16:10', '2023-11-29 07:16:10'),
(170, 88, '19533877961701242170.jpg', '2023-11-29 07:16:10', '2023-11-29 07:16:10'),
(171, 88, '14641438941701242170.jpg', '2023-11-29 07:16:10', '2023-11-29 07:16:10'),
(172, 89, '11137309271701243896.jpg', '2023-11-29 07:44:56', '2023-11-29 07:44:56'),
(173, 89, '14306963381701243896.jpg', '2023-11-29 07:44:56', '2023-11-29 07:44:56'),
(174, 89, '14731710871701243896.jpg', '2023-11-29 07:44:56', '2023-11-29 07:44:56'),
(175, 89, '13666136471701243896.jpg', '2023-11-29 07:44:56', '2023-11-29 07:44:56'),
(176, 89, '20107169641701243896.jpg', '2023-11-29 07:44:56', '2023-11-29 07:44:56'),
(177, 90, '14920202671701244622.jpg', '2023-11-29 07:57:02', '2023-11-29 07:57:02'),
(178, 90, '3226299061701244622.jpg', '2023-11-29 07:57:02', '2023-11-29 07:57:02'),
(179, 90, '11363871981701244622.jpg', '2023-11-29 07:57:02', '2023-11-29 07:57:02'),
(180, 90, '20065721601701244622.jpg', '2023-11-29 07:57:02', '2023-11-29 07:57:02'),
(181, 90, '2293504791701244622.jpg', '2023-11-29 07:57:02', '2023-11-29 07:57:02'),
(182, 91, '16286836281701245530.jpg', '2023-11-29 08:12:10', '2023-11-29 08:12:10'),
(183, 91, '2412126931701245530.jpg', '2023-11-29 08:12:10', '2023-11-29 08:12:10'),
(184, 91, '19246087071701245530.jpg', '2023-11-29 08:12:10', '2023-11-29 08:12:10'),
(185, 91, '3336124841701245530.jpg', '2023-11-29 08:12:10', '2023-11-29 08:12:10'),
(186, 92, '17830988981701245913.jpg', '2023-11-29 08:18:33', '2023-11-29 08:18:33'),
(187, 92, '16434358001701245913.png', '2023-11-29 08:18:34', '2023-11-29 08:18:34'),
(188, 92, '11071669011701245914.jpg', '2023-11-29 08:18:34', '2023-11-29 08:18:34'),
(189, 92, '18341977351701245914.jpg', '2023-11-29 08:18:34', '2023-11-29 08:18:34'),
(190, 92, '8068927801701245914.jpg', '2023-11-29 08:18:34', '2023-11-29 08:18:34'),
(191, 93, '9314961911701246558.jpg', '2023-11-29 08:29:18', '2023-11-29 08:29:18'),
(192, 93, '4363325381701246558.jpg', '2023-11-29 08:29:18', '2023-11-29 08:29:18'),
(193, 93, '2197156271701246558.jpg', '2023-11-29 08:29:18', '2023-11-29 08:29:18'),
(194, 93, '13040461411701246558.jpg', '2023-11-29 08:29:18', '2023-11-29 08:29:18'),
(195, 94, '16393692321701247239.jpeg', '2023-11-29 08:40:39', '2023-11-29 08:40:39'),
(196, 94, '13596245461701247239.jpeg', '2023-11-29 08:40:39', '2023-11-29 08:40:39'),
(197, 94, '16496545311701247239.jpg', '2023-11-29 08:40:39', '2023-11-29 08:40:39'),
(198, 94, '843044321701247239.jpg', '2023-11-29 08:40:39', '2023-11-29 08:40:39'),
(199, 94, '723495311701247239.jpg', '2023-11-29 08:40:39', '2023-11-29 08:40:39'),
(200, 94, '1276242321701247239.jpg', '2023-11-29 08:40:39', '2023-11-29 08:40:39'),
(201, 95, '5248866901701248319.jpg', '2023-11-29 08:58:39', '2023-11-29 08:58:39'),
(202, 95, '16213172361701248319.jpg', '2023-11-29 08:58:39', '2023-11-29 08:58:39'),
(203, 95, '6368372001701248319.jpg', '2023-11-29 08:58:39', '2023-11-29 08:58:39'),
(204, 95, '17893426631701248319.jpg', '2023-11-29 08:58:39', '2023-11-29 08:58:39'),
(205, 96, '2563096901701248680.jpg', '2023-11-29 09:04:40', '2023-11-29 09:04:40'),
(206, 96, '2883603981701248680.jpeg', '2023-11-29 09:04:40', '2023-11-29 09:04:40'),
(207, 96, '5561265111701248680.jpeg', '2023-11-29 09:04:40', '2023-11-29 09:04:40'),
(208, 97, '14160246791701249000.jpg', '2023-11-29 09:10:00', '2023-11-29 09:10:00'),
(209, 97, '12371940301701249000.jpg', '2023-11-29 09:10:00', '2023-11-29 09:10:00'),
(210, 97, '21042179621701249000.jpg', '2023-11-29 09:10:00', '2023-11-29 09:10:00'),
(211, 97, '12727918281701249000.jpg', '2023-11-29 09:10:00', '2023-11-29 09:10:00'),
(212, 98, '20159169111701257117.webp', '2023-11-29 11:25:17', '2023-11-29 11:25:17'),
(213, 98, '20932163781701257117.webp', '2023-11-29 11:25:18', '2023-11-29 11:25:18'),
(214, 98, '1093704711701257118.webp', '2023-11-29 11:25:18', '2023-11-29 11:25:18'),
(215, 98, '7534636411701257118.webp', '2023-11-29 11:25:18', '2023-11-29 11:25:18'),
(216, 99, '18386883721701257503.webp', '2023-11-29 11:31:43', '2023-11-29 11:31:43'),
(217, 99, '16155838931701257503.webp', '2023-11-29 11:31:43', '2023-11-29 11:31:43'),
(218, 99, '18858472861701257503.webp', '2023-11-29 11:31:43', '2023-11-29 11:31:43'),
(219, 99, '8482195331701257503.webp', '2023-11-29 11:31:44', '2023-11-29 11:31:44'),
(220, 100, '2266359261701258003.webp', '2023-11-29 11:40:04', '2023-11-29 11:40:04'),
(221, 100, '12859328911701258004.webp', '2023-11-29 11:40:04', '2023-11-29 11:40:04'),
(222, 100, '16560892501701258004.webp', '2023-11-29 11:40:04', '2023-11-29 11:40:04'),
(223, 100, '748434611701258004.webp', '2023-11-29 11:40:05', '2023-11-29 11:40:05'),
(224, 100, '1817680661701258005.webp', '2023-11-29 11:40:05', '2023-11-29 11:40:05'),
(225, 100, '9618468131701258005.webp', '2023-11-29 11:40:05', '2023-11-29 11:40:05'),
(226, 101, '3733467181701258750.webp', '2023-11-29 11:52:30', '2023-11-29 11:52:30'),
(227, 101, '7232393531701258750.webp', '2023-11-29 11:52:30', '2023-11-29 11:52:30'),
(228, 101, '8181841291701258750.webp', '2023-11-29 11:52:30', '2023-11-29 11:52:30'),
(229, 101, '6980616161701258750.webp', '2023-11-29 11:52:31', '2023-11-29 11:52:31'),
(230, 101, '20903746541701258751.webp', '2023-11-29 11:52:31', '2023-11-29 11:52:31'),
(231, 101, '1967512401701258751.webp', '2023-11-29 11:52:31', '2023-11-29 11:52:31'),
(232, 102, '12997216901701259415.webp', '2023-11-29 12:03:36', '2023-11-29 12:03:36'),
(233, 102, '3007053841701259416.webp', '2023-11-29 12:03:36', '2023-11-29 12:03:36'),
(234, 102, '557169281701259416.webp', '2023-11-29 12:03:36', '2023-11-29 12:03:36'),
(235, 102, '16914107211701259416.webp', '2023-11-29 12:03:37', '2023-11-29 12:03:37'),
(236, 103, '15696668841701260530.jpg', '2023-11-29 12:22:10', '2023-11-29 12:22:10'),
(237, 103, '17371109621701260530.jpg', '2023-11-29 12:22:10', '2023-11-29 12:22:10'),
(238, 103, '17405013401701260530.jpg', '2023-11-29 12:22:10', '2023-11-29 12:22:10'),
(239, 103, '3536370591701260530.jpg', '2023-11-29 12:22:10', '2023-11-29 12:22:10'),
(240, 104, '4422085991701261127.jpg', '2023-11-29 12:32:07', '2023-11-29 12:32:07'),
(241, 104, '14696654121701261127.jpg', '2023-11-29 12:32:07', '2023-11-29 12:32:07'),
(242, 104, '13418060211701261127.jpg', '2023-11-29 12:32:07', '2023-11-29 12:32:07'),
(243, 104, '16593277641701261127.jpg', '2023-11-29 12:32:07', '2023-11-29 12:32:07'),
(244, 105, '12266209431701261717.jpeg', '2023-11-29 12:41:57', '2023-11-29 12:41:57'),
(245, 105, '14963282841701261717.jpg', '2023-11-29 12:41:57', '2023-11-29 12:41:57'),
(246, 105, '9178419471701261717.jpg', '2023-11-29 12:41:57', '2023-11-29 12:41:57'),
(247, 107, '6541315511701262285.webp', '2023-11-29 12:51:25', '2023-11-29 12:51:25'),
(248, 107, '15136385761701262285.webp', '2023-11-29 12:51:25', '2023-11-29 12:51:25'),
(249, 107, '11381189841701262285.webp', '2023-11-29 12:51:26', '2023-11-29 12:51:26'),
(250, 107, '5368141881701262286.webp', '2023-11-29 12:51:26', '2023-11-29 12:51:26'),
(251, 109, '1224944211701262903.jpg', '2023-11-29 13:01:43', '2023-11-29 13:01:43'),
(252, 109, '21023293551701262903.jpg', '2023-11-29 13:01:43', '2023-11-29 13:01:43'),
(253, 109, '5730285481701262903.jpg', '2023-11-29 13:01:43', '2023-11-29 13:01:43'),
(254, 109, '6032545591701262903.jpg', '2023-11-29 13:01:43', '2023-11-29 13:01:43'),
(255, 109, '11842488221701262903.png', '2023-11-29 13:01:44', '2023-11-29 13:01:44'),
(256, 110, '9065917101701263425.jpg', '2023-11-29 13:10:25', '2023-11-29 13:10:25'),
(257, 110, '8323839741701263425.jpg', '2023-11-29 13:10:25', '2023-11-29 13:10:25'),
(258, 110, '8727731601701263425.jpg', '2023-11-29 13:10:25', '2023-11-29 13:10:25'),
(259, 110, '8047218271701263425.jpg', '2023-11-29 13:10:25', '2023-11-29 13:10:25'),
(260, 112, '15980522801701265390.webp', '2023-11-29 13:43:10', '2023-11-29 13:43:10'),
(261, 112, '9732161701265390.webp', '2023-11-29 13:43:10', '2023-11-29 13:43:10'),
(262, 113, '10877468721701265612.jpeg', '2023-11-29 13:46:52', '2023-11-29 13:46:52'),
(263, 113, '11359051841701265612.jpeg', '2023-11-29 13:46:52', '2023-11-29 13:46:52'),
(264, 114, '16444293141701265909.webp', '2023-11-29 13:51:49', '2023-11-29 13:51:49'),
(265, 114, '19431428491701265909.webp', '2023-11-29 13:51:49', '2023-11-29 13:51:49'),
(266, 114, '13730682571701265909.webp', '2023-11-29 13:51:50', '2023-11-29 13:51:50'),
(267, 115, '11555707891701266269.jpg', '2023-11-29 13:57:49', '2023-11-29 13:57:49'),
(268, 115, '8982096511701266269.jpg', '2023-11-29 13:57:49', '2023-11-29 13:57:49'),
(269, 115, '9264715481701266269.jpg', '2023-11-29 13:57:49', '2023-11-29 13:57:49'),
(270, 116, '18116755301701329442.jpg', '2023-11-30 07:30:42', '2023-11-30 07:30:42'),
(271, 116, '4038270741701329442.jpg', '2023-11-30 07:30:42', '2023-11-30 07:30:42'),
(272, 116, '14669472311701329442.jpg', '2023-11-30 07:30:42', '2023-11-30 07:30:42'),
(273, 116, '7913896261701329442.jpg', '2023-11-30 07:30:42', '2023-11-30 07:30:42'),
(274, 117, '5591871721701329898.jpg', '2023-11-30 07:38:18', '2023-11-30 07:38:18'),
(275, 117, '17519075311701329898.jpg', '2023-11-30 07:38:18', '2023-11-30 07:38:18'),
(276, 117, '9281706811701329898.jpg', '2023-11-30 07:38:18', '2023-11-30 07:38:18'),
(277, 117, '4125966621701329898.jpg', '2023-11-30 07:38:18', '2023-11-30 07:38:18'),
(278, 118, '8330448551701330616.jpg', '2023-11-30 07:50:16', '2023-11-30 07:50:16'),
(279, 118, '171290691701330616.jpeg', '2023-11-30 07:50:16', '2023-11-30 07:50:16'),
(280, 118, '4711603841701330616.jpg', '2023-11-30 07:50:16', '2023-11-30 07:50:16'),
(281, 118, '18599188631701330616.jpg', '2023-11-30 07:50:16', '2023-11-30 07:50:16'),
(282, 118, '17403645941701330616.jpg', '2023-11-30 07:50:16', '2023-11-30 07:50:16'),
(283, 119, '278868211701334542.jpg', '2023-11-30 08:55:42', '2023-11-30 08:55:42'),
(284, 119, '19089917651701334542.jpg', '2023-11-30 08:55:42', '2023-11-30 08:55:42'),
(285, 119, '10716125191701334542.jpg', '2023-11-30 08:55:42', '2023-11-30 08:55:42'),
(286, 119, '14876375321701334542.jpg', '2023-11-30 08:55:42', '2023-11-30 08:55:42'),
(287, 119, '16958401451701334542.jpg', '2023-11-30 08:55:42', '2023-11-30 08:55:42'),
(288, 120, '3174713301701335590.jpg', '2023-11-30 09:13:10', '2023-11-30 09:13:10'),
(289, 120, '18167555151701335590.jpg', '2023-11-30 09:13:10', '2023-11-30 09:13:10'),
(290, 120, '46496431701335590.jpg', '2023-11-30 09:13:10', '2023-11-30 09:13:10'),
(291, 120, '8290001721701335590.jpg', '2023-11-30 09:13:10', '2023-11-30 09:13:10'),
(292, 120, '449088921701335590.jpg', '2023-11-30 09:13:10', '2023-11-30 09:13:10'),
(293, 120, '3997322961701335590.jpg', '2023-11-30 09:13:10', '2023-11-30 09:13:10'),
(294, 121, '14832457831701336163.jpg', '2023-11-30 09:22:43', '2023-11-30 09:22:43'),
(295, 121, '5700502861701336163.jpg', '2023-11-30 09:22:43', '2023-11-30 09:22:43'),
(296, 121, '5009225691701336163.jpg', '2023-11-30 09:22:43', '2023-11-30 09:22:43'),
(297, 121, '5678574571701336163.jpg', '2023-11-30 09:22:43', '2023-11-30 09:22:43'),
(298, 121, '9639004621701336163.jpg', '2023-11-30 09:22:43', '2023-11-30 09:22:43'),
(299, 122, '7324312141701336817.jpg', '2023-11-30 09:33:37', '2023-11-30 09:33:37'),
(300, 123, '16711931701337424.jpg', '2023-11-30 09:43:44', '2023-11-30 09:43:44'),
(301, 123, '12498573781701337424.png', '2023-11-30 09:43:44', '2023-11-30 09:43:44'),
(302, 123, '19682500591701337424.jpg', '2023-11-30 09:43:44', '2023-11-30 09:43:44'),
(303, 123, '8198568681701337424.jpg', '2023-11-30 09:43:44', '2023-11-30 09:43:44'),
(304, 124, '3322302091701338114.jpg', '2023-11-30 09:55:14', '2023-11-30 09:55:14'),
(305, 124, '5232087051701338114.jpg', '2023-11-30 09:55:14', '2023-11-30 09:55:14'),
(306, 124, '9383257601701338114.jpg', '2023-11-30 09:55:14', '2023-11-30 09:55:14'),
(307, 125, '12789985071701338726.webp', '2023-11-30 10:05:26', '2023-11-30 10:05:26'),
(308, 125, '17360614201701338726.webp', '2023-11-30 10:05:27', '2023-11-30 10:05:27'),
(309, 126, '11236786491701344435.webp', '2023-11-30 11:40:35', '2023-11-30 11:40:35'),
(310, 126, '16699684941701344435.webp', '2023-11-30 11:40:35', '2023-11-30 11:40:35'),
(311, 126, '5274993801701344435.webp', '2023-11-30 11:40:36', '2023-11-30 11:40:36'),
(312, 126, '12812277511701344436.webp', '2023-11-30 11:40:37', '2023-11-30 11:40:37'),
(313, 126, '6340439561701344437.webp', '2023-11-30 11:40:37', '2023-11-30 11:40:37'),
(314, 126, '20794479901701344437.webp', '2023-11-30 11:40:38', '2023-11-30 11:40:38'),
(315, 127, '8440356161701344912.jpg', '2023-11-30 11:48:32', '2023-11-30 11:48:32'),
(316, 127, '7987856381701344912.jpeg', '2023-11-30 11:48:32', '2023-11-30 11:48:32'),
(317, 127, '15188438331701344912.jpg', '2023-11-30 11:48:32', '2023-11-30 11:48:32'),
(318, 128, '17623444861701345125.jpg', '2023-11-30 11:52:05', '2023-11-30 11:52:05'),
(319, 128, '9584901441701345125.jpg', '2023-11-30 11:52:05', '2023-11-30 11:52:05'),
(320, 129, '9219177501701345338.jpg', '2023-11-30 11:55:38', '2023-11-30 11:55:38'),
(321, 129, '13283818201701345338.jpg', '2023-11-30 11:55:38', '2023-11-30 11:55:38'),
(322, 129, '20571612081701345338.jpg', '2023-11-30 11:55:38', '2023-11-30 11:55:38'),
(323, 130, '12652912551701347002.jpg', '2023-11-30 12:23:22', '2023-11-30 12:23:22'),
(324, 130, '14627777041701347002.jpg', '2023-11-30 12:23:22', '2023-11-30 12:23:22'),
(325, 130, '13830851931701347002.jpg', '2023-11-30 12:23:22', '2023-11-30 12:23:22'),
(326, 130, '12257212421701347002.jpg', '2023-11-30 12:23:22', '2023-11-30 12:23:22'),
(327, 131, '19082506231701347315.jpg', '2023-11-30 12:28:35', '2023-11-30 12:28:35'),
(328, 131, '5494882281701347315.jpg', '2023-11-30 12:28:35', '2023-11-30 12:28:35'),
(329, 133, '7623781001701348016.jpg', '2023-11-30 12:40:16', '2023-11-30 12:40:16'),
(330, 133, '16633190681701348016.jpg', '2023-11-30 12:40:16', '2023-11-30 12:40:16'),
(331, 133, '899394401701348016.jpg', '2023-11-30 12:40:16', '2023-11-30 12:40:16'),
(334, 135, '875596961701349169.jpg', '2023-11-30 12:59:29', '2023-11-30 12:59:29'),
(335, 135, '21141359061701349169.jpg', '2023-11-30 12:59:29', '2023-11-30 12:59:29'),
(338, 137, '21138017881701417409.jpg', '2023-12-01 07:56:49', '2023-12-01 07:56:49'),
(339, 137, '6024610911701417409.jpg', '2023-12-01 07:56:49', '2023-12-01 07:56:49'),
(340, 137, '684763581701417409.jpg', '2023-12-01 07:56:49', '2023-12-01 07:56:49'),
(341, 138, '2734822771701417896.jpg', '2023-12-01 08:04:56', '2023-12-01 08:04:56'),
(342, 138, '12506808201701417896.jpg', '2023-12-01 08:04:56', '2023-12-01 08:04:56'),
(343, 138, '14121044051701417896.jpg', '2023-12-01 08:04:56', '2023-12-01 08:04:56'),
(344, 141, '4945174791701419849.jpg', '2023-12-01 08:37:29', '2023-12-01 08:37:29'),
(345, 141, '1751353921701419849.jpg', '2023-12-01 08:37:29', '2023-12-01 08:37:29'),
(346, 141, '19445553651701419849.jpg', '2023-12-01 08:37:29', '2023-12-01 08:37:29'),
(347, 141, '69104831701419849.jpg', '2023-12-01 08:37:29', '2023-12-01 08:37:29'),
(348, 143, '7766948881701421204.jpeg', '2023-12-01 09:00:04', '2023-12-01 09:00:04'),
(349, 143, '9194621071701421204.jpeg', '2023-12-01 09:00:04', '2023-12-01 09:00:04'),
(350, 144, '3157989881701421764.jpg', '2023-12-01 09:09:24', '2023-12-01 09:09:24'),
(351, 144, '10381377191701421764.jpg', '2023-12-01 09:09:24', '2023-12-01 09:09:24'),
(352, 144, '14854268791701421764.jpg', '2023-12-01 09:09:24', '2023-12-01 09:09:24'),
(353, 145, '4433603151701422037.jpg', '2023-12-01 09:13:57', '2023-12-01 09:13:57'),
(354, 145, '2762743981701422037.jpg', '2023-12-01 09:13:57', '2023-12-01 09:13:57'),
(355, 145, '1959510511701422037.jpg', '2023-12-01 09:13:57', '2023-12-01 09:13:57'),
(356, 146, '4102692701701426964.jpg', '2023-12-01 10:36:04', '2023-12-01 10:36:04'),
(357, 146, '11906604451701426964.jpeg', '2023-12-01 10:36:05', '2023-12-01 10:36:05'),
(358, 146, '11261873721701426965.jpg', '2023-12-01 10:36:05', '2023-12-01 10:36:05'),
(359, 146, '13324543191701426965.jpg', '2023-12-01 10:36:05', '2023-12-01 10:36:05'),
(360, 147, '8005230361701427414.jpeg', '2023-12-01 10:43:34', '2023-12-01 10:43:34'),
(361, 147, '13921409931701427414.png', '2023-12-01 10:43:34', '2023-12-01 10:43:34'),
(362, 147, '12618605871701427414.jpg', '2023-12-01 10:43:34', '2023-12-01 10:43:34'),
(363, 151, '10719770221701687773.jpg', '2023-12-04 11:02:53', '2023-12-04 11:02:53'),
(364, 153, '11970705231701689112.jpg', '2023-12-04 11:25:12', '2023-12-04 11:25:12'),
(365, 153, '18359711501701689112.jpg', '2023-12-04 11:25:12', '2023-12-04 11:25:12'),
(366, 155, '3343465371701690989.jpeg', '2023-12-04 11:56:29', '2023-12-04 11:56:29'),
(368, 158, '14560692041702017552.png', '2023-12-08 06:39:12', '2023-12-08 06:39:12'),
(369, 158, '5745730431702017552.jpg', '2023-12-08 06:39:12', '2023-12-08 06:39:12'),
(370, 158, '18430736321702017552.jpg', '2023-12-08 06:39:12', '2023-12-08 06:39:12'),
(371, 158, '5669249531702017552.png', '2023-12-08 06:39:12', '2023-12-08 06:39:12'),
(372, 159, '19484988981702018517.jpg', '2023-12-08 06:55:17', '2023-12-08 06:55:17'),
(373, 159, '15349733321702018517.jpg', '2023-12-08 06:55:17', '2023-12-08 06:55:17'),
(374, 159, '18511668741702018517.jpg', '2023-12-08 06:55:17', '2023-12-08 06:55:17'),
(375, 160, '1797412841702018771.jpeg', '2023-12-08 06:59:31', '2023-12-08 06:59:31'),
(376, 160, '7306987661702018771.jpeg', '2023-12-08 06:59:31', '2023-12-08 06:59:31'),
(377, 161, '9041310861702020754.jpg', '2023-12-08 07:32:34', '2023-12-08 07:32:34'),
(378, 161, '19397880991702020754.jpg', '2023-12-08 07:32:34', '2023-12-08 07:32:34'),
(379, 162, '7530747061702021024.jpg', '2023-12-08 07:37:04', '2023-12-08 07:37:04'),
(380, 162, '8549777711702021024.jpg', '2023-12-08 07:37:04', '2023-12-08 07:37:04'),
(381, 162, '9043909781702021024.jpg', '2023-12-08 07:37:04', '2023-12-08 07:37:04'),
(382, 162, '6729731541702021024.jpg', '2023-12-08 07:37:04', '2023-12-08 07:37:04'),
(383, 162, '17266976841702021024.jpg', '2023-12-08 07:37:04', '2023-12-08 07:37:04'),
(384, 163, '13654055201702021263.jpg', '2023-12-08 07:41:03', '2023-12-08 07:41:03'),
(385, 163, '11926519481702021263.jpg', '2023-12-08 07:41:03', '2023-12-08 07:41:03'),
(386, 163, '5910967531702021263.jpg', '2023-12-08 07:41:03', '2023-12-08 07:41:03'),
(387, 163, '11016975131702021263.png', '2023-12-08 07:41:03', '2023-12-08 07:41:03'),
(388, 164, '4992083151702021447.jpeg', '2023-12-08 07:44:07', '2023-12-08 07:44:07'),
(389, 164, '13960774701702021447.jpg', '2023-12-08 07:44:07', '2023-12-08 07:44:07'),
(390, 164, '6173308321702021447.jpg', '2023-12-08 07:44:07', '2023-12-08 07:44:07'),
(391, 165, '9560352421702021794.jpg', '2023-12-08 07:49:54', '2023-12-08 07:49:54'),
(392, 166, '16162303641702022819.jpg', '2023-12-08 08:06:59', '2023-12-08 08:06:59'),
(393, 166, '18977191221702022819.jpg', '2023-12-08 08:06:59', '2023-12-08 08:06:59'),
(394, 166, '16377460071702022819.jpeg', '2023-12-08 08:06:59', '2023-12-08 08:06:59'),
(395, 166, '3869134911702022819.jpg', '2023-12-08 08:06:59', '2023-12-08 08:06:59'),
(396, 166, '20384428331702022819.jpg', '2023-12-08 08:06:59', '2023-12-08 08:06:59'),
(397, 167, '6886168441702023424.jpg', '2023-12-08 08:17:04', '2023-12-08 08:17:04'),
(398, 167, '12794398101702023424.jpg', '2023-12-08 08:17:04', '2023-12-08 08:17:04'),
(399, 167, '13159091741702023424.jpg', '2023-12-08 08:17:04', '2023-12-08 08:17:04'),
(400, 167, '4079434491702023424.jpg', '2023-12-08 08:17:04', '2023-12-08 08:17:04'),
(401, 168, '7107169451702024099.jpg', '2023-12-08 08:28:19', '2023-12-08 08:28:19'),
(402, 168, '14992865041702024099.jpg', '2023-12-08 08:28:19', '2023-12-08 08:28:19'),
(403, 168, '4066378301702024099.jpg', '2023-12-08 08:28:19', '2023-12-08 08:28:19'),
(404, 168, '12562221021702024099.jpg', '2023-12-08 08:28:19', '2023-12-08 08:28:19'),
(405, 168, '15144524591702024099.jpg', '2023-12-08 08:28:19', '2023-12-08 08:28:19'),
(406, 169, '19922436651702025544.jpg', '2023-12-08 08:52:24', '2023-12-08 08:52:24'),
(407, 169, '5204176651702025544.jpg', '2023-12-08 08:52:24', '2023-12-08 08:52:24'),
(408, 169, '18832165741702025544.jpg', '2023-12-08 08:52:24', '2023-12-08 08:52:24'),
(409, 169, '16965853131702025544.jpg', '2023-12-08 08:52:24', '2023-12-08 08:52:24'),
(410, 170, '16737473761702026373.jpg', '2023-12-08 09:06:13', '2023-12-08 09:06:13'),
(411, 170, '2277923301702026373.jpg', '2023-12-08 09:06:13', '2023-12-08 09:06:13'),
(412, 171, '17793279601702031176.jpg', '2023-12-08 10:26:16', '2023-12-08 10:26:16'),
(413, 171, '14647061561702031176.jpg', '2023-12-08 10:26:16', '2023-12-08 10:26:16'),
(414, 172, '2276700831702031551.jpg', '2023-12-08 10:32:31', '2023-12-08 10:32:31'),
(415, 172, '3701029481702031551.jpg', '2023-12-08 10:32:31', '2023-12-08 10:32:31'),
(416, 172, '7090289441702031551.jpeg', '2023-12-08 10:32:31', '2023-12-08 10:32:31'),
(417, 172, '5187224201702031551.jpg', '2023-12-08 10:32:31', '2023-12-08 10:32:31'),
(418, 173, '12018323101702033708.jpg', '2023-12-08 11:08:28', '2023-12-08 11:08:28'),
(419, 173, '16397629561702033708.jpg', '2023-12-08 11:08:28', '2023-12-08 11:08:28'),
(420, 173, '18033669181702033708.jpg', '2023-12-08 11:08:28', '2023-12-08 11:08:28'),
(421, 173, '12030968741702033708.jpg', '2023-12-08 11:08:28', '2023-12-08 11:08:28'),
(422, 175, '1955877771702034301.jpg', '2023-12-08 11:18:21', '2023-12-08 11:18:21'),
(423, 175, '7562654261702034301.jpg', '2023-12-08 11:18:21', '2023-12-08 11:18:21'),
(424, 175, '2650674151702034301.jpg', '2023-12-08 11:18:21', '2023-12-08 11:18:21'),
(425, 177, '16152924521702035296.jpg', '2023-12-08 11:34:56', '2023-12-08 11:34:56'),
(426, 177, '18024078961702035296.jpg', '2023-12-08 11:34:56', '2023-12-08 11:34:56'),
(427, 177, '1631358061702035296.jpg', '2023-12-08 11:34:56', '2023-12-08 11:34:56'),
(428, 177, '7063006261702035296.jpg', '2023-12-08 11:34:56', '2023-12-08 11:34:56'),
(429, 178, '13618569411702035500.jpg', '2023-12-08 11:38:20', '2023-12-08 11:38:20'),
(430, 178, '11417198641702035500.jpg', '2023-12-08 11:38:20', '2023-12-08 11:38:20'),
(431, 178, '2531985401702035500.jpeg', '2023-12-08 11:38:20', '2023-12-08 11:38:20'),
(432, 179, '15453376201702037661.jpg', '2023-12-08 12:14:21', '2023-12-08 12:14:21'),
(433, 179, '202895431702037661.jpg', '2023-12-08 12:14:21', '2023-12-08 12:14:21'),
(434, 179, '1279235891702037661.jpg', '2023-12-08 12:14:21', '2023-12-08 12:14:21'),
(435, 180, '10093740451702038319.jpg', '2023-12-08 12:25:19', '2023-12-08 12:25:19'),
(436, 180, '2724260101702038319.jpg', '2023-12-08 12:25:19', '2023-12-08 12:25:19'),
(437, 180, '7841577441702038319.jpg', '2023-12-08 12:25:19', '2023-12-08 12:25:19'),
(438, 180, '5637303391702038319.jpg', '2023-12-08 12:25:19', '2023-12-08 12:25:19'),
(439, 181, '8256478981702039138.jpg', '2023-12-08 12:38:58', '2023-12-08 12:38:58'),
(440, 181, '18695444631702039138.jpg', '2023-12-08 12:38:58', '2023-12-08 12:38:58'),
(441, 181, '9255883071702039138.jpg', '2023-12-08 12:38:58', '2023-12-08 12:38:58'),
(442, 182, '20289882341702039618.jpg', '2023-12-08 12:46:58', '2023-12-08 12:46:58'),
(443, 182, '390146151702039618.jpg', '2023-12-08 12:46:58', '2023-12-08 12:46:58'),
(444, 182, '17602973791702039618.jpg', '2023-12-08 12:46:58', '2023-12-08 12:46:58'),
(445, 183, '7638022111702299126.jpg', '2023-12-11 12:52:06', '2023-12-11 12:52:06'),
(446, 183, '12796845981702299126.jpg', '2023-12-11 12:52:06', '2023-12-11 12:52:06'),
(447, 183, '20268643411702299126.jpg', '2023-12-11 12:52:06', '2023-12-11 12:52:06'),
(448, 183, '4983474691702299126.jpg', '2023-12-11 12:52:06', '2023-12-11 12:52:06'),
(449, 184, '17524649331702299341.jpg', '2023-12-11 12:55:41', '2023-12-11 12:55:41'),
(450, 184, '2926912471702299341.jpg', '2023-12-11 12:55:41', '2023-12-11 12:55:41'),
(451, 184, '10560468861702299341.jpg', '2023-12-11 12:55:41', '2023-12-11 12:55:41'),
(452, 185, '9705226291702299545.jpg', '2023-12-11 12:59:05', '2023-12-11 12:59:05'),
(453, 185, '12336287181702299545.jpg', '2023-12-11 12:59:05', '2023-12-11 12:59:05'),
(454, 185, '5857853391702299545.jpg', '2023-12-11 12:59:05', '2023-12-11 12:59:05'),
(455, 185, '613620351702299545.jpg', '2023-12-11 12:59:05', '2023-12-11 12:59:05'),
(456, 187, '9970690021702299913.jpg', '2023-12-11 13:05:13', '2023-12-11 13:05:13'),
(457, 187, '12534337261702299913.jpg', '2023-12-11 13:05:13', '2023-12-11 13:05:13'),
(458, 187, '21231126041702299913.jpg', '2023-12-11 13:05:13', '2023-12-11 13:05:13'),
(459, 189, '4656766461702365212.jpg', '2023-12-12 07:13:32', '2023-12-12 07:13:32'),
(460, 189, '6117145811702365212.png', '2023-12-12 07:13:32', '2023-12-12 07:13:32'),
(461, 189, '11779077911702365212.jpg', '2023-12-12 07:13:32', '2023-12-12 07:13:32'),
(462, 189, '13299258121702365212.jpg', '2023-12-12 07:13:32', '2023-12-12 07:13:32'),
(463, 189, '5714473721702365212.jpg', '2023-12-12 07:13:32', '2023-12-12 07:13:32'),
(464, 189, '16356673381702365212.jpg', '2023-12-12 07:13:32', '2023-12-12 07:13:32'),
(465, 190, '7471615261702365531.jpg', '2023-12-12 07:18:51', '2023-12-12 07:18:51'),
(466, 190, '10560414041702365531.jpg', '2023-12-12 07:18:51', '2023-12-12 07:18:51'),
(467, 190, '2744103961702365531.jpg', '2023-12-12 07:18:51', '2023-12-12 07:18:51'),
(468, 190, '18112720401702365531.jpg', '2023-12-12 07:18:51', '2023-12-12 07:18:51'),
(469, 190, '10214134401702365531.jpg', '2023-12-12 07:18:51', '2023-12-12 07:18:51'),
(470, 191, '7786768571702365948.jpg', '2023-12-12 07:25:48', '2023-12-12 07:25:48'),
(471, 191, '20045523771702365948.jpg', '2023-12-12 07:25:48', '2023-12-12 07:25:48'),
(472, 191, '20956243881702365948.png', '2023-12-12 07:25:48', '2023-12-12 07:25:48'),
(473, 191, '3158938451702365948.png', '2023-12-12 07:25:48', '2023-12-12 07:25:48'),
(474, 191, '10751657961702365948.jpg', '2023-12-12 07:25:48', '2023-12-12 07:25:48'),
(475, 191, '21400334051702365948.jpg', '2023-12-12 07:25:48', '2023-12-12 07:25:48'),
(476, 191, '1920083891702365948.jpg', '2023-12-12 07:25:48', '2023-12-12 07:25:48'),
(477, 192, '12120615411702366347.jpg', '2023-12-12 07:32:27', '2023-12-12 07:32:27'),
(478, 192, '10786447711702366347.jpg', '2023-12-12 07:32:27', '2023-12-12 07:32:27'),
(479, 192, '1885313721702366347.jpg', '2023-12-12 07:32:27', '2023-12-12 07:32:27'),
(480, 192, '11994557871702366347.jpg', '2023-12-12 07:32:27', '2023-12-12 07:32:27'),
(481, 192, '19078633241702366347.jpg', '2023-12-12 07:32:27', '2023-12-12 07:32:27'),
(482, 193, '6154090051702368602.jpg', '2023-12-12 08:10:02', '2023-12-12 08:10:02'),
(483, 193, '20621661271702368602.jpg', '2023-12-12 08:10:02', '2023-12-12 08:10:02'),
(484, 193, '7696586791702368602.jpg', '2023-12-12 08:10:02', '2023-12-12 08:10:02'),
(485, 193, '17270815831702368602.jpg', '2023-12-12 08:10:02', '2023-12-12 08:10:02'),
(486, 194, '16723717691702368839.jpeg', '2023-12-12 08:13:59', '2023-12-12 08:13:59'),
(487, 194, '11494781481702368839.jpeg', '2023-12-12 08:13:59', '2023-12-12 08:13:59'),
(488, 194, '14464692161702368839.jpg', '2023-12-12 08:13:59', '2023-12-12 08:13:59'),
(489, 194, '1175465341702368839.jpg', '2023-12-12 08:13:59', '2023-12-12 08:13:59'),
(490, 194, '7743508161702368839.jpg', '2023-12-12 08:13:59', '2023-12-12 08:13:59'),
(491, 195, '6019722431702369056.jpg', '2023-12-12 08:17:36', '2023-12-12 08:17:36'),
(492, 195, '9739675171702369056.jpeg', '2023-12-12 08:17:36', '2023-12-12 08:17:36'),
(493, 195, '14360058051702369056.jpg', '2023-12-12 08:17:36', '2023-12-12 08:17:36'),
(494, 195, '4797938191702369056.jpg', '2023-12-12 08:17:36', '2023-12-12 08:17:36'),
(495, 195, '14649386431702369056.jpg', '2023-12-12 08:17:36', '2023-12-12 08:17:36'),
(496, 196, '18676621491702369436.jpg', '2023-12-12 08:23:56', '2023-12-12 08:23:56'),
(497, 196, '6930999301702369436.jpg', '2023-12-12 08:23:56', '2023-12-12 08:23:56'),
(498, 196, '1529671721702369436.jpg', '2023-12-12 08:23:56', '2023-12-12 08:23:56'),
(499, 196, '9826541141702369436.jpg', '2023-12-12 08:23:56', '2023-12-12 08:23:56'),
(500, 196, '14687519811702369436.jpg', '2023-12-12 08:23:56', '2023-12-12 08:23:56'),
(501, 196, '14935156631702369436.jpg', '2023-12-12 08:23:56', '2023-12-12 08:23:56'),
(502, 197, '4720104341702371862.jpg', '2023-12-12 09:04:22', '2023-12-12 09:04:22'),
(503, 197, '8764819781702371862.jpg', '2023-12-12 09:04:22', '2023-12-12 09:04:22'),
(504, 197, '16095794561702371862.jpeg', '2023-12-12 09:04:22', '2023-12-12 09:04:22'),
(505, 197, '21226396181702371862.jpg', '2023-12-12 09:04:22', '2023-12-12 09:04:22'),
(506, 197, '6684626191702371862.jpg', '2023-12-12 09:04:22', '2023-12-12 09:04:22'),
(512, 199, '20410634651702372581.jpg', '2023-12-12 09:16:21', '2023-12-12 09:16:21'),
(513, 199, '5682354781702372581.jpg', '2023-12-12 09:16:21', '2023-12-12 09:16:21'),
(514, 199, '1533000731702372581.jpg', '2023-12-12 09:16:21', '2023-12-12 09:16:21'),
(515, 199, '15849227061702372581.jpg', '2023-12-12 09:16:21', '2023-12-12 09:16:21'),
(516, 199, '2309624621702372581.jpg', '2023-12-12 09:16:21', '2023-12-12 09:16:21'),
(517, 200, '11663121731702372867.jpg', '2023-12-12 09:21:07', '2023-12-12 09:21:07'),
(518, 200, '3487425121702372867.jpg', '2023-12-12 09:21:07', '2023-12-12 09:21:07'),
(519, 200, '16288928511702372867.jpg', '2023-12-12 09:21:07', '2023-12-12 09:21:07'),
(520, 200, '14762524721702372867.jpg', '2023-12-12 09:21:07', '2023-12-12 09:21:07'),
(521, 201, '5410415821702373058.jpg', '2023-12-12 09:24:18', '2023-12-12 09:24:18'),
(522, 201, '2084792621702373058.jpg', '2023-12-12 09:24:18', '2023-12-12 09:24:18'),
(523, 201, '15379118421702373058.jpg', '2023-12-12 09:24:18', '2023-12-12 09:24:18'),
(524, 201, '2614602861702373058.jpg', '2023-12-12 09:24:18', '2023-12-12 09:24:18'),
(525, 201, '17857337521702373058.jpg', '2023-12-12 09:24:18', '2023-12-12 09:24:18'),
(526, 202, '8926061041702379265.jpg', '2023-12-12 11:07:45', '2023-12-12 11:07:45'),
(527, 202, '2603091221702379265.jpg', '2023-12-12 11:07:45', '2023-12-12 11:07:45'),
(528, 202, '7191248741702379265.jpg', '2023-12-12 11:07:45', '2023-12-12 11:07:45'),
(529, 202, '6885830081702379265.jpg', '2023-12-12 11:07:45', '2023-12-12 11:07:45'),
(530, 203, '3353824931702380400.jpg', '2023-12-12 11:26:40', '2023-12-12 11:26:40'),
(531, 203, '15217351791702380400.jpg', '2023-12-12 11:26:40', '2023-12-12 11:26:40'),
(532, 203, '14370467531702380400.jpg', '2023-12-12 11:26:40', '2023-12-12 11:26:40'),
(533, 204, '13540735321702380763.jpg', '2023-12-12 11:32:43', '2023-12-12 11:32:43'),
(534, 204, '16951918181702380763.jpg', '2023-12-12 11:32:43', '2023-12-12 11:32:43'),
(535, 204, '13854797161702380763.jpg', '2023-12-12 11:32:43', '2023-12-12 11:32:43'),
(536, 204, '14349524421702380763.jpg', '2023-12-12 11:32:43', '2023-12-12 11:32:43'),
(537, 206, '2369432401702381346.jpg', '2023-12-12 11:42:26', '2023-12-12 11:42:26'),
(538, 206, '15167243261702381346.jpg', '2023-12-12 11:42:26', '2023-12-12 11:42:26'),
(539, 206, '16149688051702381346.jpg', '2023-12-12 11:42:26', '2023-12-12 11:42:26'),
(540, 206, '7532725941702381346.jpg', '2023-12-12 11:42:26', '2023-12-12 11:42:26'),
(541, 206, '9868616031702381346.jpg', '2023-12-12 11:42:26', '2023-12-12 11:42:26'),
(542, 207, '5371690551702382676.jpg', '2023-12-12 12:04:36', '2023-12-12 12:04:36'),
(543, 207, '15109719301702382676.jpg', '2023-12-12 12:04:36', '2023-12-12 12:04:36'),
(544, 207, '6128617651702382676.jpg', '2023-12-12 12:04:36', '2023-12-12 12:04:36'),
(545, 207, '1920583071702382676.jpg', '2023-12-12 12:04:36', '2023-12-12 12:04:36'),
(546, 207, '20112558461702382676.jpg', '2023-12-12 12:04:36', '2023-12-12 12:04:36'),
(547, 208, '5644995201702383426.jpg', '2023-12-12 12:17:06', '2023-12-12 12:17:06'),
(548, 208, '13906359461702383426.jpg', '2023-12-12 12:17:06', '2023-12-12 12:17:06'),
(549, 209, '14822382991702383683.jpg', '2023-12-12 12:21:23', '2023-12-12 12:21:23'),
(550, 209, '6978084891702383683.jpg', '2023-12-12 12:21:23', '2023-12-12 12:21:23'),
(551, 209, '16593596741702383683.jpg', '2023-12-12 12:21:23', '2023-12-12 12:21:23'),
(552, 209, '12776653871702383683.jpg', '2023-12-12 12:21:23', '2023-12-12 12:21:23'),
(553, 209, '4659040981702383683.jpg', '2023-12-12 12:21:23', '2023-12-12 12:21:23'),
(554, 209, '13754727081702383683.jpg', '2023-12-12 12:21:23', '2023-12-12 12:21:23'),
(555, 210, '14018186691702385950.jpg', '2023-12-12 12:59:10', '2023-12-12 12:59:10'),
(556, 210, '20537690741702385950.jpg', '2023-12-12 12:59:10', '2023-12-12 12:59:10'),
(557, 210, '9160378161702385950.jpg', '2023-12-12 12:59:10', '2023-12-12 12:59:10'),
(558, 210, '17837957821702385950.jpg', '2023-12-12 12:59:10', '2023-12-12 12:59:10'),
(559, 211, '2845835051702387322.jpg', '2023-12-12 13:22:02', '2023-12-12 13:22:02'),
(560, 211, '11952625971702387322.jpg', '2023-12-12 13:22:02', '2023-12-12 13:22:02'),
(561, 211, '7241700641702387322.jpg', '2023-12-12 13:22:02', '2023-12-12 13:22:02'),
(562, 211, '14356003221702387322.jpg', '2023-12-12 13:22:02', '2023-12-12 13:22:02'),
(563, 211, '368406271702387322.jpg', '2023-12-12 13:22:02', '2023-12-12 13:22:02'),
(564, 211, '7041584761702387322.jpg', '2023-12-12 13:22:02', '2023-12-12 13:22:02'),
(565, 212, '18781621991702387508.jpg', '2023-12-12 13:25:08', '2023-12-12 13:25:08'),
(566, 212, '4852113421702387508.jpg', '2023-12-12 13:25:08', '2023-12-12 13:25:08'),
(567, 212, '7268134411702387508.png', '2023-12-12 13:25:08', '2023-12-12 13:25:08'),
(568, 212, '4937896721702387508.jpg', '2023-12-12 13:25:08', '2023-12-12 13:25:08'),
(569, 213, '13271879631702388321.jpg', '2023-12-12 13:38:41', '2023-12-12 13:38:41'),
(570, 213, '12951506121702388321.jpg', '2023-12-12 13:38:41', '2023-12-12 13:38:41'),
(571, 213, '10386810221702388321.jpg', '2023-12-12 13:38:41', '2023-12-12 13:38:41'),
(572, 213, '21143069571702388321.jpg', '2023-12-12 13:38:41', '2023-12-12 13:38:41'),
(573, 213, '21262066161702388321.jpg', '2023-12-12 13:38:41', '2023-12-12 13:38:41'),
(574, 213, '11064774681702388321.jpg', '2023-12-12 13:38:41', '2023-12-12 13:38:41'),
(575, 214, '7530069651702388834.jpg', '2023-12-12 13:47:14', '2023-12-12 13:47:14'),
(576, 214, '12738126781702388834.jpg', '2023-12-12 13:47:14', '2023-12-12 13:47:14'),
(577, 214, '10033323821702388834.jpg', '2023-12-12 13:47:14', '2023-12-12 13:47:14'),
(578, 214, '18088349701702388834.jpg', '2023-12-12 13:47:14', '2023-12-12 13:47:14'),
(579, 214, '1496716421702388834.jpg', '2023-12-12 13:47:14', '2023-12-12 13:47:14'),
(580, 214, '4147198681702388834.jpg', '2023-12-12 13:47:14', '2023-12-12 13:47:14'),
(581, 215, '12634454141702452387.jpg', '2023-12-13 07:26:27', '2023-12-13 07:26:27'),
(582, 215, '19026020441702452387.jpg', '2023-12-13 07:26:27', '2023-12-13 07:26:27'),
(583, 215, '11819238471702452387.jpg', '2023-12-13 07:26:27', '2023-12-13 07:26:27'),
(584, 216, '20233480981702452663.png', '2023-12-13 07:31:03', '2023-12-13 07:31:03'),
(585, 217, '2233886271702453103.jpg', '2023-12-13 07:38:23', '2023-12-13 07:38:23'),
(586, 217, '13395734231702453103.jpg', '2023-12-13 07:38:23', '2023-12-13 07:38:23'),
(587, 217, '13347372031702453103.jpg', '2023-12-13 07:38:23', '2023-12-13 07:38:23'),
(588, 217, '4800055411702453103.jpg', '2023-12-13 07:38:23', '2023-12-13 07:38:23'),
(589, 217, '5271380541702453103.jpg', '2023-12-13 07:38:23', '2023-12-13 07:38:23'),
(590, 217, '17899639211702453103.jpg', '2023-12-13 07:38:23', '2023-12-13 07:38:23'),
(591, 218, '13581930611702453338.jpeg', '2023-12-13 07:42:18', '2023-12-13 07:42:18'),
(592, 218, '3966327081702453338.jpeg', '2023-12-13 07:42:18', '2023-12-13 07:42:18'),
(593, 218, '1548469241702453338.jpeg', '2023-12-13 07:42:18', '2023-12-13 07:42:18'),
(594, 218, '20229445671702453338.jpeg', '2023-12-13 07:42:18', '2023-12-13 07:42:18'),
(595, 218, '4737147671702453338.jpeg', '2023-12-13 07:42:18', '2023-12-13 07:42:18'),
(596, 218, '21338619531702453338.jpeg', '2023-12-13 07:42:18', '2023-12-13 07:42:18'),
(597, 218, '11264849741702453338.jpg', '2023-12-13 07:42:18', '2023-12-13 07:42:18'),
(598, 218, '17741238651702453338.jpeg', '2023-12-13 07:42:18', '2023-12-13 07:42:18'),
(599, 218, '16633177891702453338.jpeg', '2023-12-13 07:42:18', '2023-12-13 07:42:18'),
(600, 219, '14371523431702455439.jpg', '2023-12-13 08:17:19', '2023-12-13 08:17:19'),
(601, 219, '8187863011702455439.jpg', '2023-12-13 08:17:19', '2023-12-13 08:17:19'),
(602, 219, '18511887121702455439.jpg', '2023-12-13 08:17:19', '2023-12-13 08:17:19'),
(603, 219, '20348462861702455439.jpg', '2023-12-13 08:17:19', '2023-12-13 08:17:19'),
(604, 219, '11702332291702455439.jpg', '2023-12-13 08:17:19', '2023-12-13 08:17:19'),
(605, 219, '11740570671702455439.jpg', '2023-12-13 08:17:19', '2023-12-13 08:17:19'),
(606, 219, '14538650741702455439.jpg', '2023-12-13 08:17:19', '2023-12-13 08:17:19'),
(607, 220, '19336192011702455727.jpg', '2023-12-13 08:22:07', '2023-12-13 08:22:07'),
(608, 220, '14363721971702455727.jpg', '2023-12-13 08:22:07', '2023-12-13 08:22:07'),
(609, 220, '15074399381702455727.jpg', '2023-12-13 08:22:07', '2023-12-13 08:22:07'),
(610, 220, '19439978321702455727.jpg', '2023-12-13 08:22:07', '2023-12-13 08:22:07'),
(633, 227, '3904623161702456920.jpg', '2023-12-13 08:42:00', '2023-12-13 08:42:00'),
(634, 230, '14480575271702458432.jpg', '2023-12-13 09:07:12', '2023-12-13 09:07:12'),
(635, 230, '1761228231702458432.jpg', '2023-12-13 09:07:12', '2023-12-13 09:07:12'),
(636, 230, '7430912621702458432.jpg', '2023-12-13 09:07:12', '2023-12-13 09:07:12'),
(637, 230, '3437521361702458432.jpg', '2023-12-13 09:07:12', '2023-12-13 09:07:12'),
(638, 230, '6999632771702458432.jpg', '2023-12-13 09:07:12', '2023-12-13 09:07:12'),
(639, 231, '6189009581702458778.jpg', '2023-12-13 09:12:58', '2023-12-13 09:12:58'),
(640, 231, '21233690131702458778.jpg', '2023-12-13 09:12:58', '2023-12-13 09:12:58'),
(641, 231, '3544605451702458778.jpg', '2023-12-13 09:12:58', '2023-12-13 09:12:58'),
(642, 231, '1849678001702458778.jpg', '2023-12-13 09:12:58', '2023-12-13 09:12:58'),
(643, 231, '6855333771702458778.jpg', '2023-12-13 09:12:58', '2023-12-13 09:12:58'),
(644, 231, '6917721371702458778.jpg', '2023-12-13 09:12:58', '2023-12-13 09:12:58'),
(645, 231, '16327828731702458778.jpeg', '2023-12-13 09:12:58', '2023-12-13 09:12:58'),
(646, 232, '15356397101702459660.jpg', '2023-12-13 09:27:40', '2023-12-13 09:27:40'),
(647, 232, '12213609431702459660.jpg', '2023-12-13 09:27:40', '2023-12-13 09:27:40'),
(648, 232, '5054026611702459660.jpg', '2023-12-13 09:27:40', '2023-12-13 09:27:40'),
(649, 232, '4200738811702459660.jpg', '2023-12-13 09:27:40', '2023-12-13 09:27:40'),
(650, 233, '19282294621702460198.jpg', '2023-12-13 09:36:38', '2023-12-13 09:36:38'),
(651, 233, '4771933461702460198.jpg', '2023-12-13 09:36:38', '2023-12-13 09:36:38'),
(652, 233, '16086176691702460198.jpg', '2023-12-13 09:36:38', '2023-12-13 09:36:38'),
(653, 233, '6319167621702460198.jpg', '2023-12-13 09:36:38', '2023-12-13 09:36:38'),
(654, 233, '126191721702460198.jpg', '2023-12-13 09:36:38', '2023-12-13 09:36:38'),
(655, 233, '13473879991702460198.jpg', '2023-12-13 09:36:38', '2023-12-13 09:36:38'),
(656, 234, '6961489091702467198.jpg', '2023-12-13 11:33:18', '2023-12-13 11:33:18'),
(657, 234, '1575970621702467198.jpg', '2023-12-13 11:33:18', '2023-12-13 11:33:18'),
(658, 234, '12140927541702467198.jpg', '2023-12-13 11:33:18', '2023-12-13 11:33:18'),
(659, 234, '1758107241702467198.jpg', '2023-12-13 11:33:18', '2023-12-13 11:33:18'),
(660, 234, '15246937881702467198.jpg', '2023-12-13 11:33:18', '2023-12-13 11:33:18'),
(661, 234, '17531766771702467198.png', '2023-12-13 11:33:18', '2023-12-13 11:33:18'),
(662, 235, '3343809891702467990.png', '2023-12-13 11:46:30', '2023-12-13 11:46:30'),
(663, 235, '11620322061702467990.png', '2023-12-13 11:46:30', '2023-12-13 11:46:30'),
(664, 235, '14687464901702467990.jpg', '2023-12-13 11:46:30', '2023-12-13 11:46:30'),
(665, 235, '10985059661702467990.jpg', '2023-12-13 11:46:30', '2023-12-13 11:46:30'),
(666, 235, '7783765981702467990.png', '2023-12-13 11:46:30', '2023-12-13 11:46:30'),
(667, 236, '19096913891702470515.jpg', '2023-12-13 12:28:35', '2023-12-13 12:28:35'),
(668, 236, '14603961901702470515.jpg', '2023-12-13 12:28:35', '2023-12-13 12:28:35'),
(669, 236, '10369810771702470515.jpg', '2023-12-13 12:28:35', '2023-12-13 12:28:35'),
(670, 236, '15568497311702470515.jpg', '2023-12-13 12:28:35', '2023-12-13 12:28:35'),
(671, 237, '9517787401702470748.jpg', '2023-12-13 12:32:28', '2023-12-13 12:32:28'),
(672, 237, '3718666111702470748.jpg', '2023-12-13 12:32:28', '2023-12-13 12:32:28'),
(673, 237, '16916607931702470748.jpg', '2023-12-13 12:32:28', '2023-12-13 12:32:28'),
(674, 237, '10891676341702470748.jpg', '2023-12-13 12:32:28', '2023-12-13 12:32:28'),
(675, 237, '10548812031702470748.jpg', '2023-12-13 12:32:28', '2023-12-13 12:32:28'),
(676, 238, '5033145671702471401.jpg', '2023-12-13 12:43:21', '2023-12-13 12:43:21'),
(677, 238, '19639402041702471401.jpg', '2023-12-13 12:43:21', '2023-12-13 12:43:21'),
(678, 238, '13730938011702471401.jpg', '2023-12-13 12:43:21', '2023-12-13 12:43:21'),
(679, 238, '17205533281702471401.jpg', '2023-12-13 12:43:21', '2023-12-13 12:43:21'),
(680, 238, '4060710961702471401.jpg', '2023-12-13 12:43:21', '2023-12-13 12:43:21'),
(681, 239, '2691926131702471939.jpg', '2023-12-13 12:52:19', '2023-12-13 12:52:19'),
(682, 240, '3623578761702473327.jpg', '2023-12-13 13:15:27', '2023-12-13 13:15:27'),
(683, 240, '58678211702473327.jpg', '2023-12-13 13:15:27', '2023-12-13 13:15:27'),
(684, 240, '14514042801702473327.jpg', '2023-12-13 13:15:27', '2023-12-13 13:15:27'),
(685, 240, '21129068661702473327.jpg', '2023-12-13 13:15:27', '2023-12-13 13:15:27'),
(686, 240, '17595476641702473327.jpg', '2023-12-13 13:15:27', '2023-12-13 13:15:27'),
(687, 241, '3856994211702473616.jpg', '2023-12-13 13:20:16', '2023-12-13 13:20:16'),
(688, 241, '14453892641702473616.jpg', '2023-12-13 13:20:16', '2023-12-13 13:20:16'),
(689, 241, '16824396811702473616.jpg', '2023-12-13 13:20:16', '2023-12-13 13:20:16'),
(690, 241, '14247414401702473616.jpg', '2023-12-13 13:20:16', '2023-12-13 13:20:16'),
(691, 241, '2731330031702473616.jpg', '2023-12-13 13:20:16', '2023-12-13 13:20:16'),
(692, 242, '4414141441702474021.jpg', '2023-12-13 13:27:01', '2023-12-13 13:27:01'),
(694, 244, '6722736931702474399.png', '2023-12-13 13:33:19', '2023-12-13 13:33:19'),
(695, 244, '4733545511702474399.png', '2023-12-13 13:33:20', '2023-12-13 13:33:20'),
(696, 244, '10226053831702474400.jpeg', '2023-12-13 13:33:20', '2023-12-13 13:33:20'),
(697, 244, '7352957851702474400.jpeg', '2023-12-13 13:33:20', '2023-12-13 13:33:20'),
(698, 245, '2484105391702540488.jpg', '2023-12-14 07:54:48', '2023-12-14 07:54:48'),
(699, 245, '4792065291702540488.jpg', '2023-12-14 07:54:48', '2023-12-14 07:54:48'),
(700, 246, '15739726881702540839.jpg', '2023-12-14 08:00:39', '2023-12-14 08:00:39'),
(701, 246, '11486064471702540839.jpg', '2023-12-14 08:00:39', '2023-12-14 08:00:39'),
(702, 246, '9686111951702540839.jpg', '2023-12-14 08:00:39', '2023-12-14 08:00:39'),
(703, 246, '6955061151702540839.jpg', '2023-12-14 08:00:39', '2023-12-14 08:00:39'),
(704, 247, '20436332291702541352.jpg', '2023-12-14 08:09:12', '2023-12-14 08:09:12'),
(705, 247, '8293308911702541352.jpg', '2023-12-14 08:09:12', '2023-12-14 08:09:12'),
(706, 247, '9308400701702541352.jpg', '2023-12-14 08:09:12', '2023-12-14 08:09:12'),
(707, 247, '3610001711702541352.jpg', '2023-12-14 08:09:12', '2023-12-14 08:09:12'),
(708, 248, '4359479321702541608.jpg', '2023-12-14 08:13:28', '2023-12-14 08:13:28'),
(709, 248, '28065561702541608.jpg', '2023-12-14 08:13:28', '2023-12-14 08:13:28'),
(710, 248, '14128623331702541608.jpg', '2023-12-14 08:13:28', '2023-12-14 08:13:28'),
(711, 248, '12671884971702541608.jpg', '2023-12-14 08:13:28', '2023-12-14 08:13:28'),
(712, 248, '17055666651702541608.jpg', '2023-12-14 08:13:28', '2023-12-14 08:13:28'),
(713, 249, '8448855301702542682.jpeg', '2023-12-14 08:31:22', '2023-12-14 08:31:22'),
(714, 249, '19721869641702542682.jpg', '2023-12-14 08:31:22', '2023-12-14 08:31:22'),
(715, 250, '19971025961702542947.jpg', '2023-12-14 08:35:47', '2023-12-14 08:35:47'),
(716, 250, '3724763801702542947.jpg', '2023-12-14 08:35:47', '2023-12-14 08:35:47'),
(717, 250, '18969327661702542947.jpg', '2023-12-14 08:35:47', '2023-12-14 08:35:47'),
(718, 250, '8407117931702542947.jpg', '2023-12-14 08:35:47', '2023-12-14 08:35:47'),
(719, 250, '3458118931702542947.jpg', '2023-12-14 08:35:47', '2023-12-14 08:35:47'),
(720, 251, '8647863701702543178.jpg', '2023-12-14 08:39:38', '2023-12-14 08:39:38'),
(721, 251, '14008193051702543178.jpg', '2023-12-14 08:39:38', '2023-12-14 08:39:38'),
(722, 251, '4599391021702543178.jpeg', '2023-12-14 08:39:39', '2023-12-14 08:39:39'),
(723, 251, '13323691711702543179.jpeg', '2023-12-14 08:39:39', '2023-12-14 08:39:39'),
(724, 251, '8999412701702543179.jpg', '2023-12-14 08:39:39', '2023-12-14 08:39:39'),
(725, 252, '5352665591702553087.png', '2023-12-14 11:24:47', '2023-12-14 11:24:47'),
(726, 252, '14615654311702553087.jpg', '2023-12-14 11:24:47', '2023-12-14 11:24:47'),
(727, 252, '3468148311702553087.jpg', '2023-12-14 11:24:47', '2023-12-14 11:24:47'),
(728, 252, '17948997571702553087.jpg', '2023-12-14 11:24:47', '2023-12-14 11:24:47'),
(729, 253, '10270016171702555210.jpg', '2023-12-14 12:00:10', '2023-12-14 12:00:10'),
(730, 253, '522049191702555210.jpg', '2023-12-14 12:00:10', '2023-12-14 12:00:10'),
(731, 254, '3855719201702557125.jpg', '2023-12-14 12:32:05', '2023-12-14 12:32:05'),
(732, 254, '21457467581702557125.jpg', '2023-12-14 12:32:05', '2023-12-14 12:32:05'),
(733, 254, '2686467391702557125.jpg', '2023-12-14 12:32:05', '2023-12-14 12:32:05'),
(734, 255, '15501051511702557910.jpg', '2023-12-14 12:45:10', '2023-12-14 12:45:10'),
(735, 255, '10452902101702557910.jpg', '2023-12-14 12:45:10', '2023-12-14 12:45:10'),
(736, 255, '11793313111702557910.jpg', '2023-12-14 12:45:10', '2023-12-14 12:45:10'),
(737, 255, '10251387881702557910.jpg', '2023-12-14 12:45:10', '2023-12-14 12:45:10'),
(738, 256, '21254468931702558153.jpg', '2023-12-14 12:49:13', '2023-12-14 12:49:13'),
(739, 256, '6547036111702558153.jpg', '2023-12-14 12:49:13', '2023-12-14 12:49:13'),
(740, 256, '17848577021702558153.jpg', '2023-12-14 12:49:13', '2023-12-14 12:49:13'),
(741, 257, '12003914681702626989.jpg', '2023-12-15 07:56:29', '2023-12-15 07:56:29'),
(742, 257, '17285989141702626989.jpg', '2023-12-15 07:56:29', '2023-12-15 07:56:29'),
(743, 257, '6742362151702626989.jpg', '2023-12-15 07:56:29', '2023-12-15 07:56:29'),
(744, 257, '16796559641702626989.jpg', '2023-12-15 07:56:29', '2023-12-15 07:56:29'),
(745, 258, '4593880681702627207.jpg', '2023-12-15 08:00:07', '2023-12-15 08:00:07'),
(746, 258, '3990370701702627207.jpg', '2023-12-15 08:00:07', '2023-12-15 08:00:07'),
(747, 258, '9047885661702627207.jpg', '2023-12-15 08:00:07', '2023-12-15 08:00:07'),
(748, 259, '12343509781702627712.jpg', '2023-12-15 08:08:32', '2023-12-15 08:08:32'),
(749, 259, '14423111041702627712.jpg', '2023-12-15 08:08:32', '2023-12-15 08:08:32'),
(750, 259, '3407119371702627712.jpg', '2023-12-15 08:08:32', '2023-12-15 08:08:32'),
(751, 259, '10681238931702627712.jpg', '2023-12-15 08:08:32', '2023-12-15 08:08:32'),
(752, 260, '469538051702627934.jpg', '2023-12-15 08:12:14', '2023-12-15 08:12:14'),
(753, 260, '13209599931702627934.jpg', '2023-12-15 08:12:14', '2023-12-15 08:12:14');
INSERT INTO `galleries` (`id`, `listing_id`, `photo`, `created_at`, `updated_at`) VALUES
(754, 261, '13395316451702628233.jpg', '2023-12-15 08:17:13', '2023-12-15 08:17:13'),
(755, 261, '3527202031702628233.jpeg', '2023-12-15 08:17:13', '2023-12-15 08:17:13'),
(756, 261, '7900087241702628233.jpeg', '2023-12-15 08:17:13', '2023-12-15 08:17:13'),
(757, 261, '15652311581702628233.jpeg', '2023-12-15 08:17:13', '2023-12-15 08:17:13'),
(758, 262, '10241067931702628683.jpg', '2023-12-15 08:24:43', '2023-12-15 08:24:43'),
(759, 262, '2598235021702628683.jpg', '2023-12-15 08:24:43', '2023-12-15 08:24:43'),
(760, 262, '15322161621702628683.jpg', '2023-12-15 08:24:43', '2023-12-15 08:24:43'),
(761, 263, '13083466981702628972.jpg', '2023-12-15 08:29:32', '2023-12-15 08:29:32'),
(762, 263, '691321371702628972.jpg', '2023-12-15 08:29:32', '2023-12-15 08:29:32'),
(763, 263, '4088561781702628972.jpg', '2023-12-15 08:29:32', '2023-12-15 08:29:32'),
(764, 263, '12904268831702628972.jpg', '2023-12-15 08:29:32', '2023-12-15 08:29:32'),
(765, 264, '6907138751702629262.jpg', '2023-12-15 08:34:22', '2023-12-15 08:34:22'),
(766, 264, '3359277231702629262.jpg', '2023-12-15 08:34:22', '2023-12-15 08:34:22'),
(767, 264, '4179247591702629262.jpg', '2023-12-15 08:34:22', '2023-12-15 08:34:22'),
(768, 265, '12833239341702629504.jpg', '2023-12-15 08:38:24', '2023-12-15 08:38:24'),
(769, 265, '15667622721702629504.jpg', '2023-12-15 08:38:24', '2023-12-15 08:38:24'),
(770, 265, '17744512441702629504.jpg', '2023-12-15 08:38:24', '2023-12-15 08:38:24'),
(771, 265, '18894068091702629504.jpg', '2023-12-15 08:38:24', '2023-12-15 08:38:24'),
(772, 265, '8470844651702629504.jpg', '2023-12-15 08:38:24', '2023-12-15 08:38:24'),
(773, 265, '3123871481702629504.jpg', '2023-12-15 08:38:24', '2023-12-15 08:38:24'),
(774, 267, '21312144451702629754.jpg', '2023-12-15 08:42:34', '2023-12-15 08:42:34'),
(775, 267, '5643673811702629754.jpg', '2023-12-15 08:42:34', '2023-12-15 08:42:34'),
(776, 267, '1325192991702629754.jpg', '2023-12-15 08:42:34', '2023-12-15 08:42:34'),
(777, 268, '7567099481702630601.jpg', '2023-12-15 08:56:41', '2023-12-15 08:56:41'),
(778, 268, '6325086921702630601.jpg', '2023-12-15 08:56:41', '2023-12-15 08:56:41'),
(779, 268, '15301811061702630601.jpg', '2023-12-15 08:56:41', '2023-12-15 08:56:41'),
(780, 268, '15134346181702630601.jpg', '2023-12-15 08:56:41', '2023-12-15 08:56:41'),
(781, 268, '16832460461702630601.jpg', '2023-12-15 08:56:41', '2023-12-15 08:56:41'),
(782, 269, '17708017721702640209.jpg', '2023-12-15 11:36:49', '2023-12-15 11:36:49'),
(783, 269, '21466374101702640209.jpg', '2023-12-15 11:36:49', '2023-12-15 11:36:49'),
(784, 270, '13640492371702641387.jpg', '2023-12-15 11:56:27', '2023-12-15 11:56:27'),
(785, 271, '16368082781702641903.jpeg', '2023-12-15 12:05:03', '2023-12-15 12:05:03'),
(786, 271, '4215229071702641903.jpg', '2023-12-15 12:05:03', '2023-12-15 12:05:03'),
(787, 271, '9298380991702641903.jpeg', '2023-12-15 12:05:03', '2023-12-15 12:05:03'),
(788, 271, '10795799381702641903.jpg', '2023-12-15 12:05:03', '2023-12-15 12:05:03'),
(789, 272, '5413633001702644075.jpg', '2023-12-15 12:41:15', '2023-12-15 12:41:15'),
(790, 272, '11634863671702644075.jpg', '2023-12-15 12:41:15', '2023-12-15 12:41:15'),
(791, 272, '1837208281702644075.jpg', '2023-12-15 12:41:15', '2023-12-15 12:41:15'),
(792, 272, '16403123501702644075.jpg', '2023-12-15 12:41:15', '2023-12-15 12:41:15'),
(793, 273, '20016652181702644272.jpeg', '2023-12-15 12:44:32', '2023-12-15 12:44:32'),
(794, 273, '8283237351702644272.jpeg', '2023-12-15 12:44:32', '2023-12-15 12:44:32'),
(795, 273, '11552169071702644272.jpeg', '2023-12-15 12:44:32', '2023-12-15 12:44:32'),
(796, 273, '5933166951702644272.jpeg', '2023-12-15 12:44:32', '2023-12-15 12:44:32'),
(797, 275, '14194851251702644894.jpg', '2023-12-15 12:54:54', '2023-12-15 12:54:54'),
(798, 275, '5300516041702644894.jpg', '2023-12-15 12:54:54', '2023-12-15 12:54:54'),
(799, 275, '12353646871702644894.jpg', '2023-12-15 12:54:54', '2023-12-15 12:54:54'),
(800, 275, '3972803771702644894.jpg', '2023-12-15 12:54:54', '2023-12-15 12:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `generalsettings`
--

CREATE TABLE `generalsettings` (
  `id` int(191) NOT NULL,
  `logo` varchar(191) DEFAULT NULL,
  `light_logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(191) NOT NULL,
  `loader` varchar(191) NOT NULL,
  `admin_loader` varchar(191) DEFAULT NULL,
  `banner` varchar(191) DEFAULT NULL,
  `title` varchar(191) NOT NULL,
  `header_email` text DEFAULT NULL,
  `header_phone` text DEFAULT NULL,
  `footer` text NOT NULL,
  `copyright` text NOT NULL,
  `colors` varchar(191) DEFAULT NULL,
  `is_talkto` tinyint(1) NOT NULL DEFAULT 1,
  `talkto` text DEFAULT NULL,
  `is_language` tinyint(1) NOT NULL DEFAULT 1,
  `is_loader` tinyint(1) NOT NULL DEFAULT 1,
  `map_key` text DEFAULT NULL,
  `is_disqus` tinyint(1) NOT NULL DEFAULT 0,
  `disqus` longtext DEFAULT NULL,
  `is_contact` tinyint(1) NOT NULL DEFAULT 0,
  `is_faq` tinyint(1) NOT NULL DEFAULT 0,
  `is_maintain` tinyint(4) NOT NULL DEFAULT 0,
  `maintain_text` text DEFAULT NULL,
  `day_of` longtext DEFAULT NULL,
  `withdraw_status` tinyint(4) NOT NULL DEFAULT 0,
  `smtp_host` varchar(191) NOT NULL,
  `smtp_port` varchar(191) NOT NULL,
  `smtp_encryption` varchar(255) DEFAULT NULL,
  `smtp_user` varchar(191) NOT NULL,
  `smtp_pass` varchar(191) NOT NULL,
  `from_email` varchar(191) NOT NULL,
  `from_name` varchar(191) NOT NULL,
  `is_smtp` tinyint(1) NOT NULL DEFAULT 0,
  `is_currency` tinyint(1) NOT NULL DEFAULT 0,
  `currency_format` tinyint(1) NOT NULL DEFAULT 0,
  `subscribe_success` text DEFAULT NULL,
  `subscribe_error` text DEFAULT NULL,
  `error_title` text DEFAULT NULL,
  `error_text` text DEFAULT NULL,
  `error_photo` varchar(191) DEFAULT NULL,
  `breadcumb_banner` varchar(191) DEFAULT NULL,
  `is_admin_loader` tinyint(1) NOT NULL DEFAULT 0,
  `currency_code` varchar(191) DEFAULT NULL,
  `currency_sign` varchar(191) DEFAULT NULL,
  `is_verification_email` tinyint(1) NOT NULL DEFAULT 0,
  `withdraw_fee` double NOT NULL DEFAULT 0,
  `withdraw_charge` double NOT NULL DEFAULT 0,
  `is_affilate` tinyint(1) NOT NULL DEFAULT 1,
  `secret_string` varchar(255) DEFAULT NULL,
  `gap_limit` int(11) NOT NULL DEFAULT 300,
  `isWallet` tinyint(4) NOT NULL DEFAULT 0,
  `affilate_new_user` int(11) NOT NULL DEFAULT 0,
  `affilate_user` int(11) NOT NULL DEFAULT 0,
  `footer_logo` varchar(191) DEFAULT NULL,
  `pm_account` varchar(191) DEFAULT NULL,
  `is_pm` tinyint(4) DEFAULT 0,
  `cc_api_key` varchar(191) DEFAULT NULL,
  `balance_transfer` tinyint(4) NOT NULL DEFAULT 0,
  `twilio_account_sid` varchar(255) DEFAULT NULL,
  `twilio_auth_token` varchar(255) DEFAULT NULL,
  `twilio_default_number` varchar(255) DEFAULT NULL,
  `twilio_status` tinyint(4) NOT NULL DEFAULT 0,
  `nexmo_key` varchar(255) DEFAULT NULL,
  `nexmo_secret` varchar(255) DEFAULT NULL,
  `nexmo_default_number` varchar(255) DEFAULT NULL,
  `nexmo_status` tinyint(4) NOT NULL DEFAULT 0,
  `send_sms` tinyint(4) NOT NULL DEFAULT 1,
  `two_factor` tinyint(4) NOT NULL DEFAULT 0,
  `kyc` tinyint(4) NOT NULL DEFAULT 0,
  `menu` text DEFAULT NULL,
  `is_ssl` tinyint(4) NOT NULL DEFAULT 1,
  `is_cookie` tinyint(4) NOT NULL DEFAULT 1,
  `cookie_text` text DEFAULT NULL,
  `cookie_button` varchar(255) DEFAULT NULL,
  `module_section` longtext DEFAULT NULL,
  `phone_code` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `version` varchar(255) DEFAULT NULL,
  `time_zone` varchar(50) DEFAULT NULL,
  `theme` varchar(100) DEFAULT NULL,
  `theme1_hero` varchar(255) DEFAULT NULL,
  `theme2_hero` varchar(255) DEFAULT NULL,
  `theme3_hero` varchar(255) DEFAULT NULL,
  `theme4_hero` varchar(255) DEFAULT NULL,
  `theme5_hero` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generalsettings`
--

INSERT INTO `generalsettings` (`id`, `logo`, `light_logo`, `favicon`, `loader`, `admin_loader`, `banner`, `title`, `header_email`, `header_phone`, `footer`, `copyright`, `colors`, `is_talkto`, `talkto`, `is_language`, `is_loader`, `map_key`, `is_disqus`, `disqus`, `is_contact`, `is_faq`, `is_maintain`, `maintain_text`, `day_of`, `withdraw_status`, `smtp_host`, `smtp_port`, `smtp_encryption`, `smtp_user`, `smtp_pass`, `from_email`, `from_name`, `is_smtp`, `is_currency`, `currency_format`, `subscribe_success`, `subscribe_error`, `error_title`, `error_text`, `error_photo`, `breadcumb_banner`, `is_admin_loader`, `currency_code`, `currency_sign`, `is_verification_email`, `withdraw_fee`, `withdraw_charge`, `is_affilate`, `secret_string`, `gap_limit`, `isWallet`, `affilate_new_user`, `affilate_user`, `footer_logo`, `pm_account`, `is_pm`, `cc_api_key`, `balance_transfer`, `twilio_account_sid`, `twilio_auth_token`, `twilio_default_number`, `twilio_status`, `nexmo_key`, `nexmo_secret`, `nexmo_default_number`, `nexmo_status`, `send_sms`, `two_factor`, `kyc`, `menu`, `is_ssl`, `is_cookie`, `cookie_text`, `cookie_button`, `module_section`, `phone_code`, `latitude`, `longitude`, `version`, `time_zone`, `theme`, `theme1_hero`, `theme2_hero`, `theme3_hero`, `theme4_hero`, `theme5_hero`) VALUES
(1, '764mTdFT1691058346.png', 'KJuqxHA81691058319.png', 'Yo7c3v0R1650180806.png', 'cgGVsmmg1701432953.gif', '33CiUFaI1641808748.gif', '1563350277herobg.jpg', 'Wayin- All in One Business Directory', 'Info@example.com', '0123 456789', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae', 'COPYRIGHT © 2023. All Rights Reserved By Wayin.com<br>', '#f41b3b', 1, '1fv7b1dso', 1, 1, 'AIzaSyB1GpE4qeoJ__70UZxvX9CTMUTZRZNHcu8', 1, 'Wayin', 1, 1, 0, 'Website under Maintenance<br>', NULL, 1, 'smtp.gmail.com', '465', 'ssl', 'negiharender.websutility@gmail.com', 'zywfbierinyqfedl', 'negiharender.websutility@gmail.com', 'Websutility.com', 1, 1, 0, 'You are subscribed Successfully.', 'This email has already been taken.', 'Whoops! That page doesn’t exist.', 'The page you requested could not be found<br>', 'qghSZ1Wy1678955732.png', 'bz7UDSRk1659607876.png', 1, 'AED', 'AED', 1, 5, 5, 1, 'ZzsMLGKe162CfA5EcG6j', 3000, 1, 5, 5, 'LD5H7NS61676288338.png', 'U36807958', 1, 'cdb2163c-91cc-4fa6-b3fc-7de11bdcdf1a', 1, 'ACd265bfb214658e0a059aad4df96a9543', '0df1506100f991f8c9b144c745e9b133', '19793786208', 0, 'ba9111b8', 'cgxbAg4KnE80bcKx', '01976814812', 1, 1, 0, 0, '{\"Home\":{\"title\":\"Home\",\"dropdown\":\"no\",\"href\":\"\\/\",\"target\":\"self\"},\"Listing\":{\"title\":\"Listing\",\"dropdown\":\"no\",\"href\":\"\\/listing\",\"target\":\"self\"},\"Pricing\":{\"title\":\"Pricing\",\"dropdown\":\"no\",\"href\":\"\\/pricing-plans\",\"target\":\"self\"},\"Contact\":{\"title\":\"Contact\",\"dropdown\":\"no\",\"href\":\"\\/contact\",\"target\":\"self\"}}', 1, 1, '<p>Your experience on this site will be improved by allowing cookies.<br></p>', 'Allow Cookies', NULL, '+880', '23.8759', '90.3795', '2.0', 'Asia/Dhaka', 'theme-5', 'banner.jpg', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_banner_advertisement`
--

CREATE TABLE `home_banner_advertisement` (
  `id` int(11) NOT NULL,
  `photo` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rtl` tinyint(4) NOT NULL DEFAULT 0,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `language` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `rtl`, `is_default`, `language`, `name`, `file`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'EN', '1636017050KyjRNauw', '1636017050KyjRNauw.json', NULL, NULL),
(18, 1, 0, 'Arabic', '1688299864oqIjFrT6', '1688299864oqIjFrT6.json', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `admin_id` int(11) NOT NULL DEFAULT 0,
  `category_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `real_address` varchar(100) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `gmap_address` varchar(800) NOT NULL DEFAULT '',
  `amenities` text DEFAULT NULL,
  `amenity_icons` text DEFAULT NULL,
  `distance` varchar(255) DEFAULT NULL,
  `schedules` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `is_feature` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0 == ''pending''\r\n1 == ''approved''\r\n2 == ''reject''',
  `expire_date` timestamp NULL DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_number` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `linkedin` varchar(100) DEFAULT NULL,
  `listing_video_provider` varchar(100) DEFAULT NULL,
  `listing_video` varchar(255) DEFAULT NULL,
  `r_price` double DEFAULT NULL,
  `r_bed` int(11) DEFAULT NULL,
  `r_baths` int(11) DEFAULT NULL,
  `r_square` double DEFAULT NULL,
  `r_property_type` varchar(50) DEFAULT NULL,
  `car_price` double DEFAULT NULL,
  `car_fuel_type` varchar(100) DEFAULT NULL,
  `car_manufacture_year` varchar(100) DEFAULT NULL,
  `car_engine_capacity` varchar(100) DEFAULT NULL,
  `car_mileage` varchar(100) DEFAULT NULL,
  `is_verify` int(11) DEFAULT NULL,
  `is_toprated` int(11) DEFAULT NULL,
  `food_type` varchar(255) DEFAULT NULL,
  `highlight_type` varchar(255) NOT NULL,
  `views` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `user_id`, `admin_id`, `category_id`, `name`, `slug`, `designation`, `description`, `location_id`, `real_address`, `latitude`, `longitude`, `gmap_address`, `amenities`, `amenity_icons`, `distance`, `schedules`, `photo`, `type`, `is_feature`, `status`, `expire_date`, `website`, `email`, `phone_number`, `facebook`, `twitter`, `linkedin`, `listing_video_provider`, `listing_video`, `r_price`, `r_bed`, `r_baths`, `r_square`, `r_property_type`, `car_price`, `car_fuel_type`, `car_manufacture_year`, `car_engine_capacity`, `car_mileage`, `is_verify`, `is_toprated`, `food_type`, `highlight_type`, `views`, `created_at`, `updated_at`) VALUES
(65, 0, 0, 94, 'Wyatt Beauty Salon', 'wyatt-beauty-salon', NULL, 'Our expert nail technicians are fabulous at free hand nail art for Only AED 5-10 per nail.', 6, 'DAMAC XL Tower - Business Bay - Dubai', '25.0657', '55.17128', '', '[\"Wi-Fi Internet\",\"Parking\",\"Office\"]', '[\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-warehouse\"]', NULL, '{\"sat_open\":\"07 am\",\"sat_close\":\"07 am\",\"sun_open\":\"03 am\",\"sun_close\":\"04 pm\",\"mon_open\":\"05 am\",\"mon_close\":\"08 am\",\"tue_open\":\"06 am\",\"tue_close\":\"01 pm\",\"wed_open\":\"10 am\",\"wed_close\":\"02 pm\",\"thu_open\":\"07 am\",\"thu_close\":\"06 am\",\"fri_open\":\"02 pm\",\"fri_close\":\"closed\"}', '9767455271697622867.jpg', 'beauty', 0, 1, NULL, 'http://wyattbeautysalon.com/', NULL, '0543773099', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'North Indian', 'Trending', 0, '2023-10-18 09:54:27', '2023-10-26 15:52:57'),
(78, 0, 0, 21, 'Masterkey Luxury Car Rental Dubai', 'masterkey-luxury-car-rental-dubai', NULL, '39 Al Rasaas Rd - Al Quoz - Dubai', 5, '39 Al Rasaas Rd - Al Quoz - Dubai', '25.1347326', '55.22588639999999', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\"]', '[\"fas fa-moon\",\"fas fa-wifi\"]', NULL, '{\"sat_open\":\"02 am\",\"sat_close\":\"01 am\",\"sun_open\":\"12 am\",\"sun_close\":\"01 am\",\"mon_open\":\"01 am\",\"mon_close\":\"01 am\",\"tue_open\":\"12 am\",\"tue_close\":\"01 am\",\"wed_open\":\"02 am\",\"wed_close\":\"01 am\",\"thu_open\":\"02 am\",\"thu_close\":\"01 am\",\"fri_open\":\"01 am\",\"fri_close\":\"12 am\"}', '5394603231701167875.jpeg', 'car-rentals', 1, 1, NULL, 'https://mkrentacar.com/', NULL, '055 800 9990', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '1', 'Tranding', 0, '2023-11-28 10:37:55', '2023-11-28 10:37:55'),
(84, 0, 0, 63, 'Turkish Village', 'turkish-village', NULL, '\"Turkish Village Restaurant - DFC MALL BRANCH After having spent four years reviewing and growing and evolving at our Flagship branch and with demand on the rise for our unique offering we began the long and arduous process of expansion in late 2015 culminating in the opening of our second Turkish Village restaurant at Dubai Festival City Mall in 2017.\"', 6, 'Dubai Festival City - Dubai', '25.2205625', '55.35118749999999', '', '[\"Prayer Room\",\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"08 am\",\"sat_close\":\"11 pm\",\"sun_open\":\"08 am\",\"sun_close\":\"11 pm\",\"mon_open\":\"08 am\",\"mon_close\":\"11 pm\",\"tue_open\":\"08 am\",\"tue_close\":\"11 pm\",\"wed_open\":\"08 am\",\"wed_close\":\"11 pm\",\"thu_open\":\"08 am\",\"thu_close\":\"11 pm\",\"fri_open\":\"08 am\",\"fri_close\":\"11 pm\"}', '8391207121701197475.jpg', 'restaurants-cafe', 0, 1, NULL, 'http://www.turkishvillagedubai.com/', NULL, '043449955', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-28 18:51:15', '2023-11-28 18:51:15'),
(85, 0, 0, 62, 'New Shanghai Restaurant', 'new-shanghai-restaurant', NULL, '\"At New Shanghai, we offer guests a taste of modern Shanghai-style cuisine, in an ambient setting inspired by the bustling, colourful streets of the city we’re named after.', 6, 'Unit LG - 126 - 4 Financial Center Rd - Downtown Dubai', '25.1959375', '55.27906249999999', '', '[\"Wi-Fi Internet\",\"Parking\",\"Cafe\"]', '[\"fas fa-wifi\",\"fas fa-parking\",0]', NULL, '{\"sat_open\":\"10 am\",\"sat_close\":\"12 am\",\"sun_open\":\"10 am\",\"sun_close\":\"12 am\",\"mon_open\":\"10 am\",\"mon_close\":\"12 am\",\"tue_open\":\"10 am\",\"tue_close\":\"12 am\",\"wed_open\":\"10 am\",\"wed_close\":\"12 am\",\"thu_open\":\"10 am\",\"thu_close\":\"12 am\",\"fri_open\":\"10 am\",\"fri_close\":\"12 am\"}', '1073433251701238662.jpg', 'restaurants-cafe', 0, 1, NULL, 'http://www.newshanghaime.com/?y_source=1_ODEwNTY2MzYtNzE1LWxvY2F0aW9uLndlYnNpdGU%3D', NULL, '04 224 6819', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 06:17:42', '2023-11-29 06:17:42'),
(86, 0, 0, 64, 'Bab Al Mansour', 'bab-al-mansour', NULL, '\"Bab Al Mansour’s heritage and magnificence are created in reflection of its namesake, the Arab world’s most significant historical landmark built in the city of Meknes. Just as the structure has withstood the tests of time by maintaining its original design since its construction during the time of Sultan Moulay Abdullah in 1732; the food at Bab Al Mansour maintains the use of traditional recipes using over 70 organic Morocco sourced ingredients.', 6, 'The Loft Emaar ,Sheikh Mohammed bin Rashid Blvd - Downtown Dubai', '25.1973125', '55.27006249999999', '', '[\"Prayer Room\",\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"10 am\",\"sat_close\":\"02 am\",\"sun_open\":\"10 am\",\"sun_close\":\"02 am\",\"mon_open\":\"10 am\",\"mon_close\":\"02 am\",\"tue_open\":\"10 am\",\"tue_close\":\"02 am\",\"wed_open\":\"10 am\",\"wed_close\":\"02 am\",\"thu_open\":\"10 am\",\"thu_close\":\"02 am\",\"fri_open\":\"10 am\",\"fri_close\":\"02 am\"}', '1421771501701239246.jpg', 'restaurants-cafe', 0, 1, NULL, 'http://babalmansour.ae/', NULL, '04 350 9440', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 06:27:26', '2023-11-29 06:27:26'),
(87, 0, 0, 65, 'Tan Cha Dubai', 'tan-cha-dubai', NULL, 'Tàn Chá is reminiscent of the urban side of downtown Hong Kong mixed with a touch of Dubai opulence. An energetic, cross-cultural environment that offers a different take on authentic Chinese cuisine with the use of modern techniques and presentation. The stylish ambiance and electrifying character allow it to be a space designed for long leisurely evenings.\r\n\r\nThere’s a distinct sense of arrival and discovery from the moment the guests step inside. Walkthrough an immersive portal entrance and Tàn Chá restaurant is spread across two floors, and a first-floor terrace overlooking the canal with exceptional views of Business Bay, Dubai. The space is brought to life with a vibrant color palette and linear forms inspired by Hong Kong’s architectural density, vibrant wallpaper depicting influences of Chinese culture, and contrasting raw materials. Each space is adaptable to cater for parties or events with the clever use of sliding partitions & curtains.\r\n\r\nAn iconic nod to tradition, the private dining space has the famous Chinese birdcage known for its fine materials and beautiful workmanship, used as a window into the kitchen and dim sum pass and theatrical tea service point.\r\n\r\nOur guests are given the opportunity to explore dishes that show mastery of the Asian cuisine by the industry’s leading culinary experts. With a menu that’s shaped by traditional influences and a contemporary take on Chinese interiors, the experience provides a contrast that creates intrigue and reflects our love for the unexpected.\r\n\r\nCarrying forward our adventurous spirit are cunningly curated cocktails and a beverages program that elevates traditional flavours, pairing perfectly with the dining or lounge experience. And to complete their meal, our immersive after-hours programme will take guests on a journey for all the senses, giving them a night to remember.', 6, 'JW Marriott Marquis Hotel, Business Bay, Dubai,  UAE', '25.1854375', '55.25806249999999', '', '[\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"12 pm\",\"sat_close\":\"03 am\",\"sun_open\":\"12 pm\",\"sun_close\":\"03 am\",\"mon_open\":\"12 pm\",\"mon_close\":\"02 am\",\"tue_open\":\"12 pm\",\"tue_close\":\"02 am\",\"wed_open\":\"12 pm\",\"wed_close\":\"02 am\",\"thu_open\":\"12 pm\",\"thu_close\":\"02 am\",\"fri_open\":\"12 pm\",\"fri_close\":\"03 am\"}', '9341811831701240520.jpg', 'restaurants-cafe', 0, 1, NULL, 'https://tanchadubai.com/', NULL, '+971 56 681 8881', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 06:48:40', '2023-11-29 06:48:40'),
(88, 0, 0, 67, 'Kamat Restaurant', 'kamat-restaurant', NULL, '\"At Kamat, you\'ll be spoilt for choice with over 360 scrumptious vegetarian delicacies. Whether you\'re craving North Indian, South Indian, Chinese or some fantastic fusion, you are bound to find all the veggie delights you are looking for. Come, tantalize your taste buds and awaken your senses with a burst of flavours. There\'s no better way to satiate your appetite.\"', 5, 'Near E Max, King Faisal Street, Opp. Safeer Market, Abu Shagara', '25.3333125', '55.3926875', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"11 am\",\"sat_close\":\"12 am\",\"sun_open\":\"11 am\",\"sun_close\":\"12 am\",\"mon_open\":\"11 am\",\"mon_close\":\"12 am\",\"tue_open\":\"11 am\",\"tue_close\":\"12 am\",\"wed_open\":\"11 am\",\"wed_close\":\"12 am\",\"thu_open\":\"11 am\",\"thu_close\":\"12 am\",\"fri_open\":\"11 am\",\"fri_close\":\"12 am\"}', '8620106841701242170.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '06 559 9044', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 07:16:10', '2023-11-29 07:16:10'),
(89, 0, 0, 66, 'Nihal Multi Cuisine Restaurant', 'nihal-multi-cuisine-restaurant', NULL, 'When it comes to relaxation Nihal Hotel Dubai features a variety of rooms and suites boasting 66 rooms with modern in-room facilities .', 6, 'Nihal Hotel 18 41c Street - Deira - Dubai', '25.2604375', '55.32443749999999', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"12 am\",\"sat_close\":\"11 pm\",\"sun_open\":\"12 am\",\"sun_close\":\"11 pm\",\"mon_open\":\"12 am\",\"mon_close\":\"11 pm\",\"tue_open\":\"12 am\",\"tue_close\":\"11 pm\",\"wed_open\":\"12 am\",\"wed_close\":\"11 pm\",\"thu_open\":\"12 am\",\"thu_close\":\"11 pm\",\"fri_open\":\"12 am\",\"fri_close\":\"11 pm\"}', '1399098391701243896.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '056 404 7524', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 07:44:56', '2023-11-29 07:44:56'),
(90, 0, 0, 68, 'Healthy Roots', 'healthy-roots', NULL, '🍽 Healthy Meals 🇦🇪\r\n👥 Free Nutrition Consultation\r\n🚗 Free Delivery\r\n\r\nHEALTHYCLUB HEALTHY AND DIET FOOD AJMAN Ajman 06 745 5099 https://goo.gl/maps/tg21TKrxKFEVDeY36, Al Ajman', 4, 'Al Jerf 2 - Ajman', '25.4051875', '55.4990625', '', '[\"Wi-Fi Internet\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-wifi\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"12 am\",\"sun_open\":\"09 am\",\"sun_close\":\"12 am\",\"mon_open\":\"09 am\",\"mon_close\":\"12 am\",\"tue_open\":\"09 am\",\"tue_close\":\"12 am\",\"wed_open\":\"09 am\",\"wed_close\":\"12 am\",\"thu_open\":\"09 am\",\"thu_close\":\"12 am\",\"fri_open\":\"09 am\",\"fri_close\":\"12 am\"}', '18445772371701244622.jpeg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '06 546 6049', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 07:57:02', '2023-11-29 08:06:32'),
(91, 0, 0, 69, 'Restaurant & Cafe at Mughal Suites', 'restaurant-cafe-at-mughal-suites', NULL, 'Restaurant & Cafe at Mughal Suites', 3, 'Al Mareed Street - Ras al Khaimah', '25.8138125', '55.9594375', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"07 am\",\"sat_close\":\"01 am\",\"sun_open\":\"07 am\",\"sun_close\":\"01 am\",\"mon_open\":\"07 am\",\"mon_close\":\"01 am\",\"tue_open\":\"07 am\",\"tue_close\":\"01 am\",\"wed_open\":\"07 am\",\"wed_close\":\"01 am\",\"thu_open\":\"07 am\",\"thu_close\":\"01 am\",\"fri_open\":\"07 am\",\"fri_close\":\"01 am\"}', '12677971331701245530.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '07 204 4566', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 08:12:10', '2023-11-29 08:12:10'),
(92, 0, 0, 70, 'Emirates Sea Restaurant - Fujairah', 'emirates-sea-restaurant-fujairah', NULL, '\"Emirates Sea Restaurant is the best seafood restaurant in Fujairah that offers an extensive menu catering to various seafood dishes such as Persian Kebabs, Salmon, Indian Tandoori items, Platters, Thai, Chinese, Salads, etc. along with an array of beverages to choose from.\"', 1, 'Al Corniche St - Al Fujayrah - Fujairah', '25.1248125', '56.3569375', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"12 pm\",\"sat_close\":\"12 am\",\"sun_open\":\"12 pm\",\"sun_close\":\"12 am\",\"mon_open\":\"12 pm\",\"mon_close\":\"12 am\",\"tue_open\":\"12 pm\",\"tue_close\":\"12 am\",\"wed_open\":\"12 pm\",\"wed_close\":\"12 am\",\"thu_open\":\"12 pm\",\"thu_close\":\"12 am\",\"fri_open\":\"12 pm\",\"fri_close\":\"12 am\"}', '10245153471701245913.jpg', 'restaurants-cafe', 0, 1, NULL, 'https://www.emiratessea.ae/', NULL, '09 222 2785', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 08:18:33', '2023-11-29 08:18:33'),
(93, 0, 0, 71, 'Kite cafe', 'kite-cafe', NULL, 'Kite Beach Center is a first-ever certified kitesurfing school in the UAQ . We offer lessons for all levels to enjoy the experience of this incredible water.', 12, 'kite beach center GGWP+VQV - Al Raas - Al Medan - Umm Al Quawain', '25.5472375', '55.5369219', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"09 pm\",\"sun_open\":\"09 am\",\"sun_close\":\"09 pm\",\"mon_open\":\"09 am\",\"mon_close\":\"09 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"09 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"09 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"09 pm\",\"fri_open\":\"09 am\",\"fri_close\":\"09 pm\"}', '17920575101701246558.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '055 507 3060', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 08:29:18', '2023-11-29 08:29:18'),
(94, 0, 0, 90, 'Steed cafe', 'steed-cafe', NULL, 'Steed Cafe is a restaurant located in UAE, serving a selection of Cafe that delivers across Halefaath and Khor Fakkan.\r\n\r\nThey have been reviewed 97 times by talabat users, with a rating of 4.', 13, 'alsafeer roud - Khorfakkan - Sharjah', '25.3554375', '56.3479375', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"01 am\",\"sun_open\":\"09 am\",\"sun_close\":\"01 am\",\"mon_open\":\"07 am\",\"mon_close\":\"11 pm\",\"tue_open\":\"07 am\",\"tue_close\":\"11 pm\",\"wed_open\":\"07 am\",\"wed_close\":\"11 pm\",\"thu_open\":\"07 am\",\"thu_close\":\"11 pm\",\"fri_open\":\"09 am\",\"fri_close\":\"01 am\"}', '15777397431701247239.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '971 52 552 2909', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 08:40:39', '2023-11-29 08:40:39'),
(95, 0, 0, 91, 'Gulf Flower Bakery', 'gulf-flower-bakery', NULL, 'Deals in fresh bakery products line, croissants, egyptian bread, lebanani bread, samoon, slice bread, fresh sandwich, pizza, and other fresh rich in taste baked products. you can also find soft drinks, juices, milks, and other more product are deals in our bakery.', 1, '48HV+4VR - Al ‘Uwaid - Fujairah', '25.1278625', '56.3446406', '', '[\"Breakfast\",\"Cafe\"]', '[\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"10 pm\",\"sun_open\":\"09 am\",\"sun_close\":\"10 pm\",\"mon_open\":\"09 am\",\"mon_close\":\"10 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"10 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"10 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"10 pm\",\"fri_open\":\"09 am\",\"fri_close\":\"10 pm\"}', '6565369921701248319.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '+971563085773', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 08:58:39', '2023-11-29 08:58:39'),
(96, 0, 0, 92, 'My Table Dubai', 'my-table-dubai', NULL, '\"As our world has become eventful and entertainment-oriented, the need for professional and experienced event creation and planning has surged. My Table answers this need perfectly, for it is an event planning and reservation agency that understands the true nature of Dubai’s social life and is experienced in high-end entertainment services. Get inside the most glamorous venues, be part of the most stunning parties and make sure you have a VIP table reserved in every massive event taking place in Dubai. My Table is the only platform with which you are sure to have a part of every facet of entertainment happening in Dubai. It is also the first choice for every type of event or party to be planned professionally and glamorously!\"', 6, 'Shangri-La Hotel - Trade Centre - Trade Centre 1 - Dubai', '25.2081875', '55.2719375', '', '[\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"12 am\",\"sat_close\":\"12 am\",\"sun_open\":\"12 am\",\"sun_close\":\"12 am\",\"mon_open\":\"12 am\",\"mon_close\":\"12 am\",\"tue_open\":\"12 am\",\"tue_close\":\"12 am\",\"wed_open\":\"12 am\",\"wed_close\":\"12 am\",\"thu_open\":\"12 am\",\"thu_close\":\"12 am\",\"fri_open\":\"12 am\",\"fri_close\":\"12 am\"}', '1247575681701248680.jpeg', 'restaurants-cafe', 0, 1, NULL, 'https://mytable.world/', NULL, '052 299 8855', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 09:04:40', '2023-11-29 09:04:40'),
(97, 0, 0, 93, 'Hardee\'s', 'hardees', NULL, 'Visit The Official Hardees Website and Find Excellent Deals On Our Scrumptious Burgers. See Our Range Of Chargrilled Beef Burgers and Chicken Sandwiches.', 1, 'Hamad Bin Abdullah Street - Fujairah', '25.1224375', '56.3304375', '', '[\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"10 am\",\"sat_close\":\"04 am\",\"sun_open\":\"10 am\",\"sun_close\":\"04 am\",\"mon_open\":\"10 am\",\"mon_close\":\"04 am\",\"tue_open\":\"10 am\",\"tue_close\":\"04 am\",\"wed_open\":\"10 am\",\"wed_close\":\"04 am\",\"thu_open\":\"10 am\",\"thu_close\":\"04 am\",\"fri_open\":\"10 am\",\"fri_close\":\"04 am\"}', '20333586571701249000.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '600569000', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 09:10:00', '2023-11-29 09:10:00'),
(98, 0, 0, 94, 'Manhattan Ladies Salon', 'manhattan-ladies-salon', NULL, 'Me & my daughter got a few services done today including haircuts & a pedicure. Erum was our lovely hair dresser, she gave us a wonderful cut. I’m a 100% satisfied with her and then the other sweet lady who did my pedicure was just as good. Didn’t ask her name though, my bad!', 5, 'Shop No 3, N Building, Next to Sahara Center, Sharjah - Al Nahda St - Sharjah', '25.2986875', '55.37718750000001', '', '[]', '[]', NULL, '{\"sat_open\":\"10 am\",\"sat_close\":\"10 pm\",\"sun_open\":\"10 am\",\"sun_close\":\"10 pm\",\"mon_open\":\"10 am\",\"mon_close\":\"10 pm\",\"tue_open\":\"10 am\",\"tue_close\":\"10 pm\",\"wed_open\":\"10 am\",\"wed_close\":\"10 pm\",\"thu_open\":\"10 am\",\"thu_close\":\"10 pm\",\"fri_open\":\"02 pm\",\"fri_close\":\"10 pm\"}', '7625277551701257117.webp', 'beauty-services', 0, 1, NULL, NULL, NULL, '065251100', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 11:25:17', '2023-11-29 11:25:17'),
(99, 0, 0, 96, 'Beauty Icon ladies salon', 'beauty-icon-ladies-salon', NULL, '\"🧚‍♀️Beauty icon salon 🛀📹💄💅🧖‍♀️🧚‍♀️ All services are very special, there is no like our services in the UAE. I will not talk much, but I invite you to try it. You will feel that you are in another world of service and treatment, and we give guarantees of its quality with a skilled and certified team\"', 3, 'Ithaid street - Al Dhait - Ras al Khaimah', '25.7439375', '55.8999375', '', '[\"Parking\"]', '[\"fas fa-parking\"]', NULL, '{\"sat_open\":\"10 am\",\"sat_close\":\"11 pm\",\"sun_open\":\"10 am\",\"sun_close\":\"11 pm\",\"mon_open\":\"10 am\",\"mon_close\":\"11 pm\",\"tue_open\":\"10 am\",\"tue_close\":\"11 pm\",\"wed_open\":\"10 am\",\"wed_close\":\"11 pm\",\"thu_open\":\"10 am\",\"thu_close\":\"11 pm\",\"fri_open\":\"10 am\",\"fri_close\":\"11 pm\"}', '10505522001701257503.webp', 'beauty-services', 0, 1, NULL, 'http://www.beautyiconsalons.com/', NULL, '0588448848', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 11:31:43', '2023-11-29 11:31:43'),
(100, 0, 0, 97, 'Haneena - Dubai Makeup Artist | Bridal Makeup', 'haneena-dubai-makeup-artist-bridal-makeup', NULL, '\"I am a licensed Professional Dubai Makeup Artist with over 7 years of makeup artistry experience. Ive undergone training and professional courses and look to stay updated about latest trends & techniques. I\'m a Bridal Makeup Specialist and experienced with different nationalities. View my work on my website as well as my Insta page @hanee_baker [22K++ Followers] You may also contact me for Destination Wedding Makeup, Party Makeup in Dubai, Photoshoot Makeup, Any Event Makeup. I have listed myself as Dubai Makeup artist, Bridal makeup artist dubai. Being a freelance Dubai Makeup Artist, I have had the pleasure of working with a diverse range of clients, each with their unique skin tones, textures and facial features.\"', 6, 'Bay avenue mall - Al A\'amal St - Business Bay - Dubai', '25.1901875', '55.2659375', '', '[\"Parking\"]', '[\"fas fa-parking\"]', NULL, '{\"sat_open\":\"07 am\",\"sat_close\":\"09 pm\",\"sun_open\":\"07 am\",\"sun_close\":\"09 pm\",\"mon_open\":\"07 am\",\"mon_close\":\"09 pm\",\"tue_open\":\"07 am\",\"tue_close\":\"09 pm\",\"wed_open\":\"07 am\",\"wed_close\":\"09 pm\",\"thu_open\":\"07 am\",\"thu_close\":\"09 pm\",\"fri_open\":\"07 am\",\"fri_close\":\"09 pm\"}', '20591685951701258003.webp', 'beauty-services', 0, 1, NULL, 'https://haneena.com/', NULL, '0581824676', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 11:40:03', '2023-11-29 11:40:03'),
(101, 0, 0, 98, 'Kaya Skin Clinic - Abu Dhabi Mall, Abu Dhabi', 'kaya-skin-clinic-abu-dhabi-mall-abu-dhabi', NULL, '\"Kaya Skin Clinic, located near you in Abu Dhabi Mall, specialises in advanced dermatological solutions for women and men. Kaya with a mission to deliver world class skin and hair care aims to make every stage of life feel more beautiful. An expert team of dermatologists at the clinic offer consultation and treatment solution for hair loss, anti-ageing, laser hair removal, dark circles under eyes, skin pigmentation, acne and acne scars, warts, stretch marks and more. Kaya also employs surgeons for plastic surgeries including liposuction, tummy tuck, rhinoplasty etc. To book an appointment with any of our doctors or surgeons, you can visit the nearby clinic or call or go onto our website. Nearest parking before Tim Hortons\"', 7, 'Shop No. B65b–B66, First Floor - Abu Dhabi Mall - Abu Dhabi', '24.4965625', '54.3835625', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\"]', NULL, '{\"sat_open\":\"10 am\",\"sat_close\":\"09 pm\",\"sun_open\":\"10 am\",\"sun_close\":\"09 pm\",\"mon_open\":\"10 am\",\"mon_close\":\"09 pm\",\"tue_open\":\"10 am\",\"tue_close\":\"09 pm\",\"wed_open\":\"10 am\",\"wed_close\":\"09 pm\",\"thu_open\":\"10 am\",\"thu_close\":\"09 pm\",\"fri_open\":\"10 am\",\"fri_close\":\"09 pm\"}', '2880900181701258749.webp', 'beauty-services', 0, 1, NULL, 'https://www.kayaskinclinic.com/uae/en/', NULL, '600562620', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 11:52:30', '2023-11-29 11:52:30'),
(102, 0, 0, 99, 'Royal Crown Spa & Massage Center in Ajman', 'royal-crown-spa-massage-center-in-ajman', NULL, 'Royal Crown Spa & Massage centre in Ajman is one of the best spa in Ajman. We provide all types of massage services and body treatment. Our understanding and cooperative staffs from Kerala, Mumbai, Delhi, Bangalore, Pakistan, Morocco, Thailand, Philippians and Sri Lanka. Our welcoming and openminded staffs will give you Full Body Massage and Deep Tissue Massage. Further details please contact Royal Crown Spa & Massage Centre in Ajman.\"', 4, 'near Amina Hospital - Al Rashidiya 3 - Ajman', '25.4024375', '55.4443125', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\"]', NULL, '{\"sat_open\":\"12 am\",\"sat_close\":\"12 am\",\"sun_open\":\"12 am\",\"sun_close\":\"12 am\",\"mon_open\":\"12 am\",\"mon_close\":\"12 am\",\"tue_open\":\"12 am\",\"tue_close\":\"12 am\",\"wed_open\":\"01 am\",\"wed_close\":\"12 am\",\"thu_open\":\"12 am\",\"thu_close\":\"12 am\",\"fri_open\":\"12 am\",\"fri_close\":\"12 am\"}', '12019791221701259415.webp', 'beauty-services', 0, 1, NULL, 'https://royalcrownspas.com/', NULL, '0503925363', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 12:03:35', '2023-11-29 12:03:35'),
(103, 0, 0, 111, 'Aster Clinic, Ras Al Khaimah- Consultation, X-ray, Health Check-up, Diabetes Care, Vaccinations', 'aster-clinic-ras-al-khaimah-consultation-x-ray-health-check-up-diabetes-care-vaccinations', NULL, '\"The Aster Clinic Ras Al Khaimah is the first ever branch of Aster Clinics to open it’s doors to the residents of Ras Al Khaimah. The clinic provides high quality healthcare, at affordable prices in the following specialisations – Internal Medicine, Dentistry, Obstetrics and Gynaecology, Orthopaedics and Paediatrics. Along with state of the art laboratory and X-ray facilities.\"', 3, 'opposite Mashreq Bank Muntasir Road - Al Nakheel - Ras al Khaimah', '25.7996875', '55.97381249999999', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\"]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"10 pm\",\"sun_open\":\"09 am\",\"sun_close\":\"09 pm\",\"mon_open\":\"09 am\",\"mon_close\":\"10 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"10 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"10 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"10 pm\",\"fri_open\":\"09 am\",\"fri_close\":\"09 pm\"}', '8456620101701260530.jpg', 'clinics', 0, 1, NULL, NULL, NULL, '044400500', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 12:22:10', '2023-11-29 12:22:10'),
(104, 0, 0, 112, 'Oval Dental Clinic', 'oval-dental-clinic', NULL, 'Oval Dental Clinic is posted with well experienced doctors who are working expertly with new state of the art technologies in the field of Dentistry. These highly trained doctors are giving the patients the best care possible in dentistry. Our goal is to provide high end level of expertise and service in a claiming professional atmosphere combined with latest technologies. Committed in rendering compassionate and preventive dental care and treatment to all patients and their families.\"', 6, 'Floor 14 / Unit 1405 - 1406 -1407 - 1408 - 1409 - Dubai', '25.1883125', '55.2716875', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\"]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"09 pm\",\"sun_open\":\"09 am\",\"sun_close\":\"09 pm\",\"mon_open\":\"09 am\",\"mon_close\":\"09 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"09 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"09 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"09 pm\",\"fri_open\":\"closed\",\"fri_close\":\"closed\"}', '12784438851701261127.jpg', 'clinics', 0, 1, NULL, NULL, NULL, '043400900', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 12:32:07', '2023-11-29 12:32:07'),
(105, 0, 0, 113, 'Al Hawas Al Khams Rehabilitation Centre', 'al-hawas-al-khams-rehabilitation-centre', NULL, 'The HK Rehab – A Pediatric Milestone Centre for treating children with Neurological challenges and help them to participate effectively and efficiently in the society.', 5, '298 Sheikh Zayed St - Dasman - Halwan Suburb - Sharjah', '25.3505625', '55.4161875', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\"]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"06 pm\",\"sun_open\":\"closed\",\"sun_close\":\"closed\",\"mon_open\":\"08 am\",\"mon_close\":\"05 pm\",\"tue_open\":\"08 am\",\"tue_close\":\"05 pm\",\"wed_open\":\"08 am\",\"wed_close\":\"05 pm\",\"thu_open\":\"08 am\",\"thu_close\":\"05 pm\",\"fri_open\":\"08 am\",\"fri_close\":\"05 pm\"}', '5336185581701261717.jpg', 'clinics', 0, 1, NULL, NULL, NULL, '065733847', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 12:41:57', '2023-11-29 12:41:57'),
(106, 0, 0, 114, 'Mediplus Diagnostic Centre', 'mediplus-diagnostic-centre', NULL, 'Sharjah. MEDIPLUS DIAGNOSTIC CENTER. P.O. Box: 46052 Al Mubarak Center Suite 303, Rolla, Sharjah, U.A.E. Tel: +971 6 563 4347. Fax: +971 6 563 4311. Email .', 5, 'Office 303,Al Mubarak Cente, Rolla, Sharjah - Sharjah', '25.3645625', '55.3929375', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\"]', NULL, '{\"sat_open\":\"08 am\",\"sat_close\":\"10 pm\",\"sun_open\":\"08 am\",\"sun_close\":\"10 pm\",\"mon_open\":\"08 am\",\"mon_close\":\"10 pm\",\"tue_open\":\"08 am\",\"tue_close\":\"10 pm\",\"wed_open\":\"08 am\",\"wed_close\":\"10 pm\",\"thu_open\":\"08 am\",\"thu_close\":\"10 pm\",\"fri_open\":\"08 am\",\"fri_close\":\"10 pm\"}', '6315123911701262006.jpg', 'clinics', 0, 1, NULL, NULL, NULL, '065634347', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 12:46:46', '2023-11-29 12:46:46'),
(107, 0, 0, 115, 'Modern Vet Downtown', 'modern-vet-downtown', NULL, '\"Modern Vet Downtown clinic is the newest addition to our network of veterinary clinics and hospitals in the city. We have made our services even more accessible to our clients residing in this part of Dubai. Dubai Downtown residents can now have access to unparalleled, international-standard veterinary practice. Our seasoned veterinarians and pet technicians are ready and equipped to serve you.\"', 6, 'tower Downtown - South Ridge - Dubai', '25.1878125', '55.2788125', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\"]', NULL, '{\"sat_open\":\"07 am\",\"sat_close\":\"10 pm\",\"sun_open\":\"07 am\",\"sun_close\":\"10 pm\",\"mon_open\":\"07 am\",\"mon_close\":\"10 pm\",\"tue_open\":\"07 am\",\"tue_close\":\"10 pm\",\"wed_open\":\"07 am\",\"wed_close\":\"10 am\",\"thu_open\":\"07 am\",\"thu_close\":\"10 pm\",\"fri_open\":\"07 am\",\"fri_close\":\"10 pm\"}', '1378039891701262285.webp', 'clinics', 0, 1, NULL, NULL, NULL, '80082', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 12:51:25', '2023-11-29 12:51:25'),
(108, 0, 0, 116, 'Al majlis optics LLC RAK', 'al-majlis-optics-llc-rak', NULL, 'Medical centers in UAE · Medical centers in Ras Al Khaimah; Al majlis optics llc rak. Provider Bio. Write A Review. Al majlis optics llc rak. Eye care center.', 3, 'Julphar Towers - Al Hisn Rd - Dafan Al Nakheel - Ras al Khaimah', '25.7915625', '55.95881250000001', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\"]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"10 pm\",\"sun_open\":\"09 am\",\"sun_close\":\"10 pm\",\"mon_open\":\"09 am\",\"mon_close\":\"10 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"10 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"10 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"10 pm\",\"fri_open\":\"04 pm\",\"fri_close\":\"10 pm\"}', '2892675991701262581.jpg', 'clinics', 0, 1, NULL, NULL, NULL, '0527822872', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 12:56:21', '2023-11-29 12:56:21'),
(109, 0, 0, 117, 'Eden Aesthetics Clinic', 'eden-aesthetics-clinic', NULL, '\"At EDEN AESTHETICS you will get an exceptional service in a cozy atmosphere from Expert Aestheticians you can trust! Our clinic located in Dubai builds a reputation for treating and providing beautiful, natural-looking results with excellence and mastery to restore and refine your beauty. The major focus of treatments we offer is non-surgical innovative methods for facial and body rejuvenation, including aesthetic procedures Cosmetic Injections Botox Fillers Facial Contouring Profile and Jawline Balancing Threading PRP and Mesotherapy Non-surgical Rhinoplasty Dermal Fillers Wrinkle Facelift Nose Correction Microneedling PRP for Hair loss HydraFacial Laser Hair Removal Laser Therapy for Skin Treatments IV Therapy DNA Genetic Test\"', 6, 'Bay View Tower - 20th Floor - Business Bay - Dubai', '25.1811875', '55.2701875', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\",\"Office\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-warehouse\",0]', NULL, '{\"sat_open\":\"10 am\",\"sat_close\":\"07 pm\",\"sun_open\":\"10 am\",\"sun_close\":\"07 pm\",\"mon_open\":\"10 am\",\"mon_close\":\"07 pm\",\"tue_open\":\"10 am\",\"tue_close\":\"07 pm\",\"wed_open\":\"10 am\",\"wed_close\":\"07 pm\",\"thu_open\":\"10 am\",\"thu_close\":\"07 pm\",\"fri_open\":\"10 am\",\"fri_close\":\"07 pm\"}', '1528261001701262903.jpg', 'clinics', 0, 1, NULL, 'https://www.edenderma.com/', NULL, '045774796', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 13:01:43', '2023-11-29 13:01:43'),
(110, 0, 0, 118, 'Irish Wellness Medical Center', 'irish-wellness-medical-center', NULL, '\"Welcome to Irish Wellness Medical Center in Abu Dhabi, UAE. Our services include mental health, dermatology, laser hair removal, dentistry, orthodontics, periodontics/implantology, prosthodontics, skin care/beauty therapy, and general practice. With personalized care from experienced professionals, prioritize mental well-being, enhance appearance, bid farewell to unwanted hair, trust in oral health and orthodontics, restore smile beauty and functionality, indulge in rejuvenating skin care, and rely on comprehensive general practice services. Your health and well-being are our top priority. Experience the highest standard of care at Irish Wellness Medical Center in Abu Dhabi, UAE.\"', 7, 'Villa 283 - Al Khaleej Al Arabi St - next to Al Khalidiya park - Al Khalidiyah - W9 - Abu Dhabi', '24.4659375', '54.3469375', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\",0]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"09 pm\",\"sun_open\":\"09 am\",\"sun_close\":\"09 pm\",\"mon_open\":\"09 am\",\"mon_close\":\"09 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"09 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"09 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"09 pm\",\"fri_open\":\"09 am\",\"fri_close\":\"09 pm\"}', '21101822901701263425.jpg', 'clinics', 0, 1, NULL, 'https://irishwellnesscenter.ae/', NULL, '026655357', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 13:10:25', '2023-11-29 13:10:25'),
(111, 0, 0, 119, 'My Skin Clinic', 'my-skin-clinic', NULL, 'MySkinClinic, Mazaya center Office Entrance C, Al Wasl Road 58 A., Dubai, United Arab Emirates · Laser\'s profile picture. Laser · Highlights\'s profile picture.', 6, '3005, Office Entrance C, Mazaya Center Al Wasl Road - 58a St - Dubai', '25.1994375', '55.26556249999999', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\"]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"09 pm\",\"sun_open\":\"11 am\",\"sun_close\":\"05 pm\",\"mon_open\":\"09 am\",\"mon_close\":\"09 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"09 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"09 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"09 pm\",\"fri_open\":\"09 am\",\"fri_close\":\"09 pm\"}', '12670821251701264854.jpg', 'clinics', 0, 1, NULL, 'http://www.myskinclinic.ae/', NULL, '0559727944', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 13:34:14', '2023-11-29 13:34:14'),
(112, 0, 0, 25, 'Kerala Spa Sharjah - Massage Centre & Relaxation', 'kerala-spa-sharjah-massage-centre-relaxation', NULL, '\"Kerala Spa Massage Centre & Relaxation Sharjah is one of the leading spa and massage centres in Sharjah, offering a wide range of therapeutic treatments to its clients. With a focus on traditional Kerala-style massages, the spa has become a go-to destination for people looking to unwind and rejuvenate in the city. The Sharjah Spa Massage & Reoffers a range of services such as Ayurvedic massage, Swedish massage, Thai massage, and hot stone massage, among others. All the therapists at the centre are highly trained and experienced, ensuring that each client receives the best possible treatment. The spa uses only natural and organic products for their treatments, making it a safe and healthy option for those seeking relief from stress and pain.\"', 5, '3 Al Nuaimia - Ajman', '25.3861875', '55.44193749999999', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\"]', NULL, '{\"sat_open\":\"12 am\",\"sat_close\":\"12 am\",\"sun_open\":\"12 am\",\"sun_close\":\"12 am\",\"mon_open\":\"12 am\",\"mon_close\":\"12 am\",\"tue_open\":\"12 am\",\"tue_close\":\"12 am\",\"wed_open\":\"12 am\",\"wed_close\":\"12 am\",\"thu_open\":\"12 am\",\"thu_close\":\"12 am\",\"fri_open\":\"12 am\",\"fri_close\":\"12 am\"}', '18396547341701265390.webp', 'massage', 0, 1, NULL, 'https://keralaspasharjah.com/', NULL, '0543676023', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 13:43:10', '2023-11-29 13:43:10'),
(113, 0, 0, 159, 'Thailand Massage Center', 'thailand-massage-center', NULL, '\"Authentic Thai massage at a fair price, we bring Thailand to Sharjah\"', 5, '371 Al Muntazah St - Al Rifaah - Al Heerah Suburb - Sharjah', '25.3918125', '55.4190625', '', '[\"Wi-Fi Internet\",\"Parking\"]', '[\"fas fa-wifi\",\"fas fa-parking\"]', NULL, '{\"sat_open\":\"10 am\",\"sat_close\":\"11 pm\",\"sun_open\":\"10 am\",\"sun_close\":\"11 pm\",\"mon_open\":\"10 am\",\"mon_close\":\"11 pm\",\"tue_open\":\"10 am\",\"tue_close\":\"11 pm\",\"wed_open\":\"10 am\",\"wed_close\":\"11 pm\",\"thu_open\":\"10 am\",\"thu_close\":\"11 pm\",\"fri_open\":\"10 am\",\"fri_close\":\"11 pm\"}', '15855083391701265612.jpeg', 'massage', 0, 1, NULL, 'https://www.instagram.com/thailand_massage_center', NULL, '065221515', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 13:46:52', '2023-11-29 13:46:52'),
(114, 0, 0, 160, 'TCM Massage & Relaxation Center Bay Square', 'tcm-massage-relaxation-center-bay-square', NULL, '\"PLEASE KINDLY CONTACT US IN OUR SHOP AND WHATSAPP NUMBER\"', 6, 'Level P, Shop 03, Building 6 - Dubai bay square', '25.1854375', '55.2800625', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\"]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"12 am\",\"sun_open\":\"09 am\",\"sun_close\":\"12 am\",\"mon_open\":\"09 am\",\"mon_close\":\"12 am\",\"tue_open\":\"09 am\",\"tue_close\":\"12 am\",\"wed_open\":\"09 am\",\"wed_close\":\"12 am\",\"thu_open\":\"09 am\",\"thu_close\":\"12 am\",\"fri_open\":\"09 am\",\"fri_close\":\"12 am\"}', '4821796051701265909.webp', 'massage', 0, 1, NULL, NULL, NULL, '045547303', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 13:51:49', '2023-11-29 13:51:49'),
(115, 0, 0, 161, 'Ayurway Ayurveda Centre | Ayurvedic Clinic Dubai', 'ayurway-ayurveda-centre-ayurvedic-clinic-dubai', NULL, '\"Ayurway Ayurvedic Centre is a well-known Ayurvedic clinic in Dubai that offers a variety of high-quality Ayurvedic treatments and massages. By combining the ideas of Ayurveda traditions with modern therapies, we hope to deliver natural and organic healing for your mind and body. Our team of Ayurvedic specialists and professional staff provide Ayurvedic treatments that detoxifying your body and strengthening your immunity. We are known for providing world-class Ayurvedic therapies to our patients at the most inexpensive prices, and we have helped countless customers enhance their quality of life over the years.\"', 6, 'Al Habbai Building - No 06 - 20B St - near Karama Park - Al Karama - Dubai', '25.2405625', '55.3053125', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\"]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"09 pm\",\"sun_open\":\"09 am\",\"sun_close\":\"09 pm\",\"mon_open\":\"09 am\",\"mon_close\":\"09 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"09 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"09 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"09 pm\",\"fri_open\":\"09 am\",\"fri_close\":\"09 pm\"}', '10277225371701266269.png', 'massage', 0, 1, NULL, NULL, NULL, '0507696013', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-29 13:57:49', '2023-11-29 13:57:49'),
(116, 0, 0, 101, 'PRIME Hospital - Multi Specialty Private Hospital Dubai', 'prime-hospital-multi-specialty-private-hospital-dubai', NULL, '\"PRIME Hospital is one of the most trusted Private Hospital in Dubai with a workforce that makes sure healthcare medical services are delivered properly, patients are provided with proper care and treatment and are extremely cordial. Covering the major medical services like Cardiology, Gynecology & Maternity, Dental treatment, ENT, Dermatology, Endocrinology, and more.\"', 6, 'Airport Rd - next to Le Meridian Hotel - Garhoud - Dubai', '25.2499375', '55.3455625', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\"]', NULL, '{\"sat_open\":\"12 am\",\"sat_close\":\"12 am\",\"sun_open\":\"12 am\",\"sun_close\":\"12 am\",\"mon_open\":\"12 am\",\"mon_close\":\"12 am\",\"tue_open\":\"12 am\",\"tue_close\":\"12 am\",\"wed_open\":\"12 am\",\"wed_close\":\"12 am\",\"thu_open\":\"12 am\",\"thu_close\":\"12 am\",\"fri_open\":\"12 am\",\"fri_close\":\"12 am\"}', '14966156521701329442.jpg', 'hospitals', 0, 1, NULL, 'https://www.primehealth.ae/', NULL, '042929777', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-30 07:30:42', '2023-11-30 07:30:42'),
(117, 0, 0, 102, 'Medcare Women & Children Hospital', 'medcare-women-children-hospital', NULL, '\"Medcare\'s Women & Children Hospital has the best women & child specialist in Dubai Manned almost entirely by women, Medcare is proud to present its Women & Children Hospital in Dubai that offers comprehensive range of services ranging from preventative health checks to uro-gynaecological and advanced gynaecological surgery. At Medcare we offer wide range of specialties including gynaecology, neonatal, foetal medicine and paediatric care, with a holistic approach.\"', 6, 'Beside Manara Services Centre، Sheikh Zayed Road - Dubai', '25.1611875', '55.2305625', '', '[\"Wheelchair-Accessible\",\"Parking\"]', '[\"fas fa-moon\",\"fas fa-parking\"]', NULL, '{\"sat_open\":\"12 am\",\"sat_close\":\"12 am\",\"sun_open\":\"12 am\",\"sun_close\":\"12 am\",\"mon_open\":\"12 am\",\"mon_close\":\"12 am\",\"tue_open\":\"12 am\",\"tue_close\":\"12 am\",\"wed_open\":\"12 am\",\"wed_close\":\"12 am\",\"thu_open\":\"12 am\",\"thu_close\":\"12 am\",\"fri_open\":\"12 am\",\"fri_close\":\"12 am\"}', '14782367341701329898.jpg', 'hospitals', 0, 1, NULL, 'https://www.medcare.ae/en', NULL, '8006332273', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-30 07:38:18', '2023-11-30 07:38:18'),
(118, 0, 0, 103, 'Feto Maternal & GenetYX Center', 'feto-maternal-genetyx-center', NULL, '\"FMGC one of the leading providers of prenatal care and genetic testing for pregnant women and specialist Gynaecological services in the UAE\"', 6, 'Beside Manara Services Centre، Sheikh Zayed Road - Dubai', '25.1611875', '55.2305625', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\"]', NULL, '{\"sat_open\":\"08 am\",\"sat_close\":\"06 pm\",\"sun_open\":\"08 am\",\"sun_close\":\"06 pm\",\"mon_open\":\"08 am\",\"mon_close\":\"06 pm\",\"tue_open\":\"08 am\",\"tue_close\":\"06 pm\",\"wed_open\":\"08 am\",\"wed_close\":\"06 pm\",\"thu_open\":\"08 am\",\"thu_close\":\"06 pm\",\"fri_open\":\"08 am\",\"fri_close\":\"06 pm\"}', '3230953501701330616.jpg', 'hospitals', 0, 1, NULL, 'https://www.medcare.ae/en', NULL, '8006332273', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-30 07:50:16', '2023-11-30 07:50:16'),
(119, 0, 0, 104, 'Dubai London Clinic and Speciality Hospital', 'dubai-london-clinic-and-speciality-hospital', NULL, '\"Situated in the heart of the upscale Jumeirah neighbourhood, the impressive Dubai London Clinic and Speciality Hospital combines Outpatient and Inpatient medical care supported by the latest medical technology and provides unparalleled patient care. The Hospital features an in-house Diagnostic and Imaging facility, plus a fully equipped Laboratory performing highly specialised tests and incorporating the very latest in hi-tech equipment. The Dermatology and Aesthetic Medicine Department offers a range of services from diagnostics and prevention of Dermatological Diseases to Aesthetic Medical procedures and Laser Therapy.\"', 6, 'Jumeirah St - Umm Suqeim - Jumeirah 3 - إمارة دبيّ', '25.1529375', '55.2014375', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\"]', NULL, '{\"sat_open\":\"12 am\",\"sat_close\":\"12 am\",\"sun_open\":\"12 am\",\"sun_close\":\"12 am\",\"mon_open\":\"12 am\",\"mon_close\":\"12 am\",\"tue_open\":\"12 am\",\"tue_close\":\"12 am\",\"wed_open\":\"12 am\",\"wed_close\":\"12 am\",\"thu_open\":\"12 am\",\"thu_close\":\"12 am\",\"fri_open\":\"12 am\",\"fri_close\":\"12 am\"}', '12763995511701334542.jpg', 'hospitals', 0, 1, NULL, 'https://dubailondonclinic.com/branch/speciality-hospital-umm-suqueim-2/', NULL, '800352', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-30 08:55:42', '2023-11-30 08:55:42');
INSERT INTO `listings` (`id`, `user_id`, `admin_id`, `category_id`, `name`, `slug`, `designation`, `description`, `location_id`, `real_address`, `latitude`, `longitude`, `gmap_address`, `amenities`, `amenity_icons`, `distance`, `schedules`, `photo`, `type`, `is_feature`, `status`, `expire_date`, `website`, `email`, `phone_number`, `facebook`, `twitter`, `linkedin`, `listing_video_provider`, `listing_video`, `r_price`, `r_bed`, `r_baths`, `r_square`, `r_property_type`, `car_price`, `car_fuel_type`, `car_manufacture_year`, `car_engine_capacity`, `car_mileage`, `is_verify`, `is_toprated`, `food_type`, `highlight_type`, `views`, `created_at`, `updated_at`) VALUES
(120, 0, 0, 105, 'AL Barsha Health Centre', 'al-barsha-health-centre', NULL, 'This clinic provides a dietary assessment and advice for patients with specific medical conditions or requiring special dietary regime', 6, '36X2+2W8 - 329th Rd - Al Barsha - Al Barsha 3 - Dubai', '25.0975375', '55.2023281', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\"]', NULL, '{\"sat_open\":\"12 am\",\"sat_close\":\"12 am\",\"sun_open\":\"12 am\",\"sun_close\":\"12 am\",\"mon_open\":\"12 am\",\"mon_close\":\"12 am\",\"tue_open\":\"12 am\",\"tue_close\":\"12 am\",\"wed_open\":\"12 am\",\"wed_close\":\"12 am\",\"thu_open\":\"12 am\",\"thu_close\":\"12 am\",\"fri_open\":\"12 am\",\"fri_close\":\"12 am\"}', '19485204831701335590.jpg', 'hospitals', 0, 1, NULL, NULL, NULL, '800342', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-30 09:13:10', '2023-11-30 09:13:10'),
(121, 0, 0, 106, 'Medcare Eye Centre', 'medcare-eye-centre', NULL, 'DEDICATED EYE CLINIC IN DUBAI – GET TREATED BY THE BEST EYE SPECIALIST IN DUBAI Medcare Eye Centre is a dedicated facility for comprehensive eye care. We offer highly specialised treatment for refractory errors, congenital disorders, diseases and injuries of the eye in both adults and children. Backed by state-of-the-art diagnostic and therapeutic technology including laser, our world-class team of Ophthalmologists offers high-precision, guideline-based treatment to patients of all ages, ranging from neonates to senior citizens. At Medcare, our philosophy is to provide unparalleled care for each patient and to create warm, patient-friendly environments where they can heal better and faster.\"', 6, 'Matloob Building F, Sheikh Zayed Road - Dubai', '25.1788125', '55.24693749999999', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\"]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"09 pm\",\"sun_open\":\"09 am\",\"sun_close\":\"09 pm\",\"mon_open\":\"09 am\",\"mon_close\":\"09 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"09 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"09 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"09 pm\",\"fri_open\":\"10 am\",\"fri_close\":\"04 pm\"}', '2939974181701336163.jpg', 'hospitals', 0, 1, NULL, NULL, NULL, '8006332273', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-30 09:22:43', '2023-11-30 09:22:43'),
(122, 0, 0, 107, 'DR VISHNU ENT SPECIALIST', 'dr-vishnu-ent-specialist', NULL, 'Dr. Vishnu Kumar is Specialist ENT, Head & Neck Surgeon with over 7 years of experience at renowned hospitals in India. He is highly competent in handling ENT outpatient and inpatient care and emergency and elective surgeries. He follows strong evidence-based methodology in treatment and adheres to strict protocols and guidelines in patient care. SPECIAL INTEREST Screening, diagnosis & treatment of hearing loss Diagnosis and treatment of dizziness ( Vertigo ) Management of mastoidities Diagnosis and treatment of ear inflammation Management of perforated ear drum Management of sinusitis Rhinitis and tonsillitis Management of obstructive sleep apnea Management of hoarseness of voice\"', 6, 'Aster Jubilee Medical Centre - Khalid Bin Al Waleed Rd - Bur Dubai - Al Fahidi - Dubai', '25.2598125', '55.2939375', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\"]', NULL, '{\"sat_open\":\"11 am\",\"sat_close\":\"07 pm\",\"sun_open\":\"08 am\",\"sun_close\":\"03 pm\",\"mon_open\":\"08 am\",\"mon_close\":\"03 pm\",\"tue_open\":\"closed\",\"tue_close\":\"closed\",\"wed_open\":\"03 pm\",\"wed_close\":\"11 pm\",\"thu_open\":\"03 pm\",\"thu_close\":\"11 pm\",\"fri_open\":\"03 pm\",\"fri_close\":\"11 pm\"}', '9908030141701336817.jpg', 'hospitals', 0, 1, NULL, NULL, NULL, '0585508289', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-30 09:33:37', '2023-11-30 09:33:37'),
(123, 0, 0, 108, 'Super Vet Pet Clinic LLC', 'super-vet-pet-clinic-llc', NULL, '\"We are a 5 star pet clinic in Dubai working 24 hours a day to keep our furry friends healthy and happy At Super Vet Pet Clinic, we are committed to providing high-quality veterinary care and treatment to pets in Dubai. Our experienced and trained veterinarians and skilled professional staff are dedicated to keeping your furry and cute friend healthy, fresh, and happy. Click here to learn more about our services and book an appointment today!\"', 6, 'dubailand, La Fontana - resortz by danube building - shop number 12 - Dubai', '25.0614375', '55.2333125', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\"]', NULL, '{\"sat_open\":\"12 am\",\"sat_close\":\"12 am\",\"sun_open\":\"12 am\",\"sun_close\":\"12 am\",\"mon_open\":\"12 am\",\"mon_close\":\"12 am\",\"tue_open\":\"12 am\",\"tue_close\":\"12 am\",\"wed_open\":\"12 am\",\"wed_close\":\"12 am\",\"thu_open\":\"12 am\",\"thu_close\":\"12 am\",\"fri_open\":\"12 am\",\"fri_close\":\"12 am\"}', '3450149781701337424.png', 'hospitals', 0, 1, NULL, NULL, NULL, '044516872', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-30 09:43:44', '2023-11-30 09:47:18'),
(124, 0, 0, 27, 'The Pets Club Fulfillment Center', 'the-pets-club-fulfillment-center', NULL, '\"Welcome to The Pets Club, your trusted Online Pet Store UAE. We provide top-notch Pet Food Delivery service and a wide variety of Pet Accessories Online. Get your Premium Pet Food and Pet Care Products from us today. Visit our website now and start your pet\'s journey to great health.\"', 6, 'Rouhani building - Office 13 - Al Ittihad Rd - nr. DNATA HQ - Deira - Dubai', '25.2604375', '55.3324375', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\"]', NULL, '{\"sat_open\":\"08 am\",\"sat_close\":\"05 pm\",\"sun_open\":\"closed\",\"sun_close\":\"closed\",\"mon_open\":\"08 am\",\"mon_close\":\"05 pm\",\"tue_open\":\"08 am\",\"tue_close\":\"05 pm\",\"wed_open\":\"08 am\",\"wed_close\":\"05 pm\",\"thu_open\":\"08 am\",\"thu_close\":\"05 pm\",\"fri_open\":\"08 am\",\"fri_close\":\"05 pm\"}', '16497887941701338114.jpg', 'petshops', 0, 1, NULL, NULL, NULL, '0502974489', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-30 09:55:14', '2023-11-30 09:55:14'),
(125, 0, 0, 126, 'Gazelles Management Consultancy', 'gazelles-management-consultancy', NULL, '\"We at Gazelles act as a partner and catalyst in the cultural transformation of an individual/organisation towards the journey of excellence. GAZELLES MANAGEMENT CONSULTANCY is a team of highly motivated individuals with a combined experience of more than 150 years in Operational excellence, strategic management and Process re-engineering. As a team, we have been consistently delivering innovative and customized solutions to our clients to improve their business processes and people. We partner with our clients to achieve operational excellence through cultural transformation. we are Specialized lean in Six sigma for Service/manufacturing , lean project management, PROFESSIONAL SCRUM MASTER™, ISO compliance, PMI AGILE CERTIFIED PRACTITIONER\"', 6, '605 Saeed Tower - 2 Sheikh Zayed Rd - Dubai', '25.2145625', '55.2758125', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\",\"Office\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-warehouse\"]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"08 pm\",\"sun_open\":\"closed\",\"sun_close\":\"closed\",\"mon_open\":\"09 am\",\"mon_close\":\"08 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"08 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"08 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"08 pm\",\"fri_open\":\"closed\",\"fri_close\":\"closed\"}', '15839865571701338725.webp', 'petshops', 0, 1, NULL, NULL, NULL, '0557244748', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-30 10:05:26', '2023-11-30 10:05:26'),
(126, 0, 0, 127, 'AIX Investment Group', 'aix-investment-group', NULL, '\"We are a global top-tier awards winning investment advisory firm, distinguished by the integrity of our offering, our transparency and our exceptional performance. Our investments are driven by the extensive expertise of our teams and we adopt the highest standards of risk management and both fundamental and technical analysis.\"', 6, 'Burj Khalifa 144th & 146th Floor - Sheikh Mohammed bin Rashid Blvd - Downtown Dubai - Dubai', '25.1975625', '55.2740625', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\",\"Office\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-warehouse\"]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"06 pm\",\"sun_open\":\"closed\",\"sun_close\":\"closed\",\"mon_open\":\"09 am\",\"mon_close\":\"06 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"06 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"06 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"06 pm\",\"fri_open\":\"09 am\",\"fri_close\":\"06 pm\"}', '2172531031701344434.webp', 'petshops', 0, 1, NULL, 'www.aixinvestment.com', NULL, '045460000', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-30 11:40:35', '2023-11-30 11:40:35'),
(127, 0, 0, 128, 'Tuscan Consulting - HR Consultancy', 'tuscan-consulting-hr-consultancy', NULL, '\"Tuscan Consulting is a bespoke human resources consultancy based in Dubai, UAE. We provide strategic HR consultancy services to clients across the middle east. We provide practical solutions to clients on their most critical “people & organization” issues that result in improved business results. We focus our services on four key areas of HR Consulting, HR Technology (HRMS Software Applications & Digital HR Transformation), HR Outsourcing & Organizational Transformation. Our specialities include HR Strategy, HR Policy, Compensation & Benefits and Talent Management. We have extensive regional experience in successfully completing HR projects across the GCC including government & private organizations in Saudi Arabia, Qatar, Oman & Kuwait.\"', 6, 'Office 812, B-Block, Business Village, Opp - Clock Tower Roundabout - Dubai', '25.2570625', '55.3266875', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\",\"Office\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-warehouse\"]', NULL, '{\"sat_open\":null,\"sat_close\":null,\"sun_open\":null,\"sun_close\":null,\"mon_open\":null,\"mon_close\":null,\"tue_open\":null,\"tue_close\":null,\"wed_open\":null,\"wed_close\":null,\"thu_open\":null,\"thu_close\":null,\"fri_open\":null,\"fri_close\":null}', '17457891241701344912.jpg', 'petshops', 0, 1, NULL, 'https://www.tuscan-me.com/', NULL, '045583158', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-30 11:48:32', '2023-11-30 11:48:32'),
(128, 0, 0, 129, 'TechCloud IT Services L.L.C.', 'techcloud-it-services-llc', NULL, 'IT Consulting Services for your business provided by experienced and certified engineers.', 6, 'B2B Office Tower - Office 2006 - Marasi Dr - Business Bay - Dubai', '25.1910625', '55.2850625', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\",\"Office\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-warehouse\"]', NULL, '{\"sat_open\":\"closed\",\"sat_close\":\"closed\",\"sun_open\":\"closed\",\"sun_close\":\"closed\",\"mon_open\":\"08 am\",\"mon_close\":\"08 pm\",\"tue_open\":\"08 am\",\"tue_close\":\"08 pm\",\"wed_open\":\"08 am\",\"wed_close\":\"08 pm\",\"thu_open\":\"08 am\",\"thu_close\":\"08 pm\",\"fri_open\":\"08 am\",\"fri_close\":\"08 pm\"}', '10687941241701345125.jpg', 'petshops', 0, 1, NULL, 'https://www.cloudtechnologies.ae/', NULL, '043685885', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-30 11:52:05', '2023-11-30 11:52:05'),
(129, 0, 0, 130, 'HHS Lawyers And Legal Consultants', 'hhs-lawyers-and-legal-consultants', NULL, '\"An experienced, full-service law firm, HHS Lawyers addresses legal matters related to Criminal Law, Tax/VAT Law, Corporate and Commercial Law, Family Law, and Banking and Islamic Finance Law. The senior partners and legal consultants of the firm provide expert advice and their full attention to clients. With HHS Lawyers, clients obtain representation that’s tailored to their specific needs. Our experienced lawyers fully understand the nature of state laws and guidelines. We help ensure every aspect of a case is covered and handled accordingly in order to preserve our clients’ best interests. In a span of two decades, HHS Lawyers has become a trusted name in the UAE when it comes to handling legal matters.\"', 6, 'IBIS Hotel Building Office Entrance 5th Floor, Office No.: 5008 - Al Rigga Rd - Dubai', '25.2654375', '55.3216875', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\",\"Office\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-warehouse\"]', NULL, '{\"sat_open\":\"closed\",\"sat_close\":\"closed\",\"sun_open\":\"closed\",\"sun_close\":\"closed\",\"mon_open\":\"09 am\",\"mon_close\":\"07 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"07 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"07 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"07 pm\",\"fri_open\":\"09 am\",\"fri_close\":\"07 pm\"}', '20941124811701345338.jpg', 'petshops', 0, 1, NULL, NULL, NULL, '042555496', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-30 11:55:38', '2023-11-30 11:55:38'),
(130, 0, 0, 31, '360 Audit & Business Consultants LLC', '360-audit-business-consultants-llc', NULL, '\"360 Audit & Business Consultants LLC one of the leading Business Consultants in UAE, our desire is to work with entrepreneurs that want to bring their ideas and organizations in a way that will maximize their potential and the results achieved. Energizing you or an organization toward new heights is what brings joy to our work. That is why we carefully select our clients. Our business group includes the most professional team of experts that will help you to get your business setup, Bank Account Services and Accounting & Bookkeeping in the most authentic way possible. Business Setup Services Sharjah Media City (SHAMS) Dubai Free Zone Dubai Mainland DED License PRO services Bank Account Assistance #Freezonelincese #360bizconsultants.com\"', 6, 'City Tower 2 - Suite 2, Level 13 - Sheikh Zayed Rd - Dubai', '25.2193125', '55.27968749999999', '', '[\"Wi-Fi Internet\",\"Parking\",\"Office\"]', '[\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-warehouse\"]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"06 pm\",\"sun_open\":\"closed\",\"sun_close\":\"closed\",\"mon_open\":\"09 am\",\"mon_close\":\"06 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"06 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"06 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"06 pm\",\"fri_open\":\"09 am\",\"fri_close\":\"06 pm\"}', '11987554931701347001.webp', 'business-services', 0, 1, NULL, NULL, NULL, '0585831243', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-30 12:23:22', '2023-11-30 12:23:22'),
(131, 0, 0, 162, 'HEADTURNERS CUSTOM WORKX', 'headturners-custom-workx', NULL, 'Custom Modified Fiido Q1 by Head Turner Custom Worx Dubai ... Archived post. New comments cannot be posted and votes cannot be cast.', 6, '788C+W62 - Al Muraqqabat - Dubai', '25.2672625', '55.3205156', '', '[\"Parking\"]', '[\"fas fa-parking\"]', NULL, '{\"sat_open\":\"12 am\",\"sat_close\":\"12 am\",\"sun_open\":\"12 am\",\"sun_close\":\"12 am\",\"mon_open\":\"12 am\",\"mon_close\":\"12 am\",\"tue_open\":\"12 am\",\"tue_close\":\"12 am\",\"wed_open\":\"12 am\",\"wed_close\":\"12 am\",\"thu_open\":\"12 am\",\"thu_close\":\"12 am\",\"fri_open\":\"12 am\",\"fri_close\":\"12 am\"}', '6927655441701347315.jpg', 'business-services', 0, 1, NULL, NULL, NULL, '0557161089', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-30 12:28:35', '2023-11-30 12:28:35'),
(132, 0, 0, 163, 'A To Z Car Accessories', 'a-to-z-car-accessories', NULL, 'A To Z Car Accessories ⭐ Naif, Dubai | Auto Spare Parts Dubai | All details in one click. | ⏰hours, ☎️phone number, address and map', 6, '78C5+J32 - Al Musalla Rd - Naif - Dubai', '25.2715125', '55.3076406', '', '[\"Wi-Fi Internet\",\"Parking\"]', '[\"fas fa-wifi\",\"fas fa-parking\"]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"10 pm\",\"sun_open\":\"09 am\",\"sun_close\":\"10 pm\",\"mon_open\":\"09 am\",\"mon_close\":\"10 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"10 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"10 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"10 pm\",\"fri_open\":\"closed\",\"fri_close\":\"closed\"}', '12440200441701347782.jpg', 'business-services', 0, 1, NULL, NULL, NULL, '042283578', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-30 12:36:22', '2023-11-30 12:36:22'),
(133, 0, 0, 164, 'AL RUTBAH AL AULIA AUTO SPARE PARTS TR LLC', 'al-rutbah-al-aulia-auto-spare-parts-tr-llc', NULL, 'Al Rutbah Auto is one of the leading importers, retailers and wholesalers of auto parts in Sharjah UAE.', 5, 'INDUSTRIAL AREA 6 AL MOZON BUILDING NO.3 SHOP NO.2 - opposite SHARJAH CRICKET STADIUM - Sharjah', '25.3290625', '55.4225625', '', '[\"Parking\"]', '[\"fas fa-parking\"]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"07 pm\",\"sun_open\":\"09 am\",\"sun_close\":\"07 pm\",\"mon_open\":\"09 am\",\"mon_close\":\"07 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"07 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"07 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"07 pm\",\"fri_open\":\"09 am\",\"fri_close\":\"07 pm\"}', '9821157141701348016.jpg', 'business-services', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-30 12:40:16', '2023-11-30 12:40:16'),
(135, 0, 0, 165, 'Car Recovery Service Dubai', 'car-recovery-service-dubai', NULL, '\"We are providing professional Car Recovery Services in Dubai and all parts of UAE. Specialized in the fields of Professional Vehicle Towing, roadside assistance, breakdown recovery, battery change and replacement, battery jump start and tire replacement Services. Our staff\'s are highly experienced and well cleaned & disciplined. Prices are affordable for any one and services very quick on time. Please visit our website for any further reference or Call us @ 056 9380222\"', 6, 'Al Qusais - Al Qusais 2 - Dubai', '25.2694375', '55.3876875', '', '[]', '[]', NULL, '{\"sat_open\":\"12 am\",\"sat_close\":\"12 am\",\"sun_open\":\"12 am\",\"sun_close\":\"12 am\",\"mon_open\":\"12 am\",\"mon_close\":\"12 am\",\"tue_open\":\"12 am\",\"tue_close\":\"12 am\",\"wed_open\":\"12 am\",\"wed_close\":\"12 am\",\"thu_open\":\"12 am\",\"thu_close\":\"12 am\",\"fri_open\":\"12 am\",\"fri_close\":\"12 am\"}', '18802655131701349169.jpg', 'business-services', 0, 1, NULL, NULL, NULL, '0551515721', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-11-30 12:59:29', '2023-11-30 12:59:29'),
(137, 0, 0, 166, 'Clock Tower Car Wash', 'clock-tower-car-wash', NULL, 'Clock Tower Car Wash, Deira - Dubai', 6, 'Clock Tower Car Wash, Deira - Dubai', '25.2596875', '55.3246875', '', '[\"Parking\"]', '[\"fas fa-parking\"]', NULL, '{\"sat_open\":\"08 am\",\"sat_close\":\"11 pm\",\"sun_open\":\"08 am\",\"sun_close\":\"11 pm\",\"mon_open\":\"08 am\",\"mon_close\":\"11 pm\",\"tue_open\":\"08 am\",\"tue_close\":\"11 pm\",\"wed_open\":\"08 am\",\"wed_close\":\"11 pm\",\"thu_open\":\"08 am\",\"thu_close\":\"11 pm\",\"fri_open\":\"08 am\",\"fri_close\":\"11 pm\"}', '15588547671701417409.jpg', 'cars-workshops', 0, 1, NULL, NULL, NULL, '0569697393', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-01 07:56:49', '2023-12-01 07:56:49'),
(138, 0, 0, 34, 'Holidays Tours LLC', 'holidays-tours-llc', NULL, 'First trip jitters were smoothened by the ever-helpful Holidays Tours as they answered every query diligently. theholidaystours. Abdul Malik. Dubai, United Arab .', 6, 'B2B Office Tower - 106 Marasi Drive Street - Business Bay - Dubai', '25.1913125', '55.2854375', '', '[\"Wi-Fi Internet\"]', '[\"fas fa-wifi\"]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"06 pm\",\"sun_open\":\"closed\",\"sun_close\":\"closed\",\"mon_open\":\"09 am\",\"mon_close\":\"06 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"06 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"06 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"06 pm\",\"fri_open\":\"09 am\",\"fri_close\":\"06 pm\"}', '10751712431701417896.jpg', 'cars-workshops', 0, 1, NULL, NULL, NULL, '0555202244', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-01 08:04:56', '2023-12-01 08:04:56'),
(139, 0, 0, 167, 'Black & White Events Management', 'black-white-events-management', NULL, 'From Black & White Events Management\r\n\"We are a UAE-based and award-winning Event company having 15 years of experience and successfully completed more than 300+ Weddings, Fashion, Corporate Events, and many more... We have a well-experienced and qualified team to ensure world-class services. We believe in exceptional creation with our experience and we have our Happiest customer list and it keeps going. We heist Your Precious Moment.\"', 5, 'Damas Towers (Burj 2000 Al Musalla Sharjah Central post office Office 1849, 18th Floor - Sharjah', '25.3539375', '55.3901875', '', '[\"Wi-Fi Internet\",\"Parking\",\"Office\"]', '[\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-warehouse\"]', NULL, '{\"sat_open\":\"12 am\",\"sat_close\":\"12 am\",\"sun_open\":\"12 am\",\"sun_close\":\"12 am\",\"mon_open\":\"12 am\",\"mon_close\":\"12 am\",\"tue_open\":\"12 am\",\"tue_close\":\"12 am\",\"wed_open\":\"12 am\",\"wed_close\":\"12 am\",\"thu_open\":\"12 am\",\"thu_close\":\"12 am\",\"fri_open\":\"12 am\",\"fri_close\":\"12 am\"}', '17198287351701418429.jpg', 'cars-workshops', 0, 1, NULL, NULL, NULL, '0508003545', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-01 08:13:49', '2023-12-01 08:13:49'),
(141, 0, 0, 168, 'Future Vision Weddings & Events', 'future-vision-weddings-events', NULL, '\"Event Management Company and Wedding Planners in Dubai and Uae. Providing Lights, Sound, Stage Decor, DJ, Dancers, Live Bands, Led Screens & Full Event Production\"', 6, '308 – Oud Metha Building, Oud Metha, Near Lamcy plaza, Dubai - Dubai', '25.2391875', '55.3129375', '', '[]', '[]', NULL, '{\"sat_open\":\"11 am\",\"sat_close\":\"11 pm\",\"sun_open\":\"11 am\",\"sun_close\":\"11 pm\",\"mon_open\":\"11 am\",\"mon_close\":\"11 pm\",\"tue_open\":\"11 am\",\"tue_close\":\"11 pm\",\"wed_open\":\"11 am\",\"wed_close\":\"11 pm\",\"thu_open\":\"11 am\",\"thu_close\":\"11 pm\",\"fri_open\":\"11 am\",\"fri_close\":\"11 pm\"}', '17353150061701419849.jpeg', 'occasions', 0, 1, NULL, NULL, NULL, '0503576449', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-01 08:37:29', '2023-12-01 08:37:29'),
(142, 0, 0, 169, 'Laroch Flower & Chocolate', 'laroch-flower-chocolate', NULL, 'Our passion in delivering the best of the culinary world to meet the refined taste of our clients kept on growing since year 2004.', 6, 'Satwa, Nr Iranian Hospital - Dubai', '25.2294375', '55.2731875', '', '[]', '[]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"11 pm\",\"sun_open\":null,\"sun_close\":null,\"mon_open\":null,\"mon_close\":null,\"tue_open\":null,\"tue_close\":null,\"wed_open\":null,\"wed_close\":null,\"thu_open\":null,\"thu_close\":null,\"fri_open\":null,\"fri_close\":null}', '3103090391701420573.jpg', 'occasions', 0, 1, NULL, NULL, NULL, '0504512834', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-01 08:49:33', '2023-12-01 08:49:33'),
(143, 0, 0, 170, 'ROOH Band', 'rooh-band', NULL, 'ROOH is a Dubai based band with Anupam Nair in lead vocals. Best live music band for Indian weddings, ROOH can create magic with their scintillating music.', 6, '105 Sheikh Zayed Rd - Trade Centre - DIFC - Dubai', '25.2118125', '55.2765625', '', '[\"Wi-Fi Internet\",\"Office\"]', '[\"fas fa-wifi\",\"fas fa-warehouse\"]', NULL, '{\"sat_open\":null,\"sat_close\":null,\"sun_open\":null,\"sun_close\":null,\"mon_open\":null,\"mon_close\":null,\"tue_open\":null,\"tue_close\":null,\"wed_open\":null,\"wed_close\":null,\"thu_open\":null,\"thu_close\":null,\"fri_open\":null,\"fri_close\":null}', '2826850451701421204.png', 'occasions', 0, 1, NULL, NULL, NULL, '0508535440', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-01 09:00:04', '2023-12-01 09:00:04'),
(144, 0, 0, 171, 'Emirates Hospitality Center Ajman', 'emirates-hospitality-center-ajman', NULL, 'Gallery · Wedding Events. Ajman Wedding hall · Golden Set up. Ajman Wedding Hall · Ajman Hall. Wedding Celebration · Bride show. Adnec , Aloft · Ajman Events.', 4, 'Ajman Equestrian Club', '25.4034125', '55.4857656', '', '[]', '[]', NULL, '{\"sat_open\":\"12 am\",\"sat_close\":\"12 am\",\"sun_open\":\"12 am\",\"sun_close\":\"12 am\",\"mon_open\":\"12 am\",\"mon_close\":\"12 am\",\"tue_open\":\"12 am\",\"tue_close\":\"12 am\",\"wed_open\":\"12 am\",\"wed_close\":\"12 am\",\"thu_open\":\"12 am\",\"thu_close\":\"12 am\",\"fri_open\":\"12 am\",\"fri_close\":\"12 am\"}', '20587930701701421764.jpg', 'occasions', 0, 1, NULL, NULL, NULL, '067487625', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-01 09:09:24', '2023-12-01 09:09:24'),
(145, 0, 0, 172, 'BRIDAL HOUSE COUTURE', 'bridal-house-couture', NULL, '\"We provide all services related to wedding dress rental and wedding dress accessories like crowns, shoes, Hijab wedding dresses, etc. نقدم جميع الخدمات المتعلقة بتأجير فساتين الزفاف الراقية، التاج، حذاء الزفاف، فساتين الزفاف للمحجبات، و غيرها.\"', 5, 'Al Nahda St - Al Nahda - Al Nahda 1 - Sharjah', '25.2985625', '55.3665625', '', '[]', '[]', NULL, '{\"sat_open\":\"12 pm\",\"sat_close\":\"10 pm\",\"sun_open\":\"12 pm\",\"sun_close\":\"10 pm\",\"mon_open\":\"12 pm\",\"mon_close\":\"10 pm\",\"tue_open\":\"12 pm\",\"tue_close\":\"10 pm\",\"wed_open\":\"12 pm\",\"wed_close\":\"10 pm\",\"thu_open\":\"12 pm\",\"thu_close\":\"10 pm\",\"fri_open\":\"04 pm\",\"fri_close\":\"11 pm\"}', '18606401001701422037.jpg', 'occasions', 0, 1, NULL, NULL, 'https://instagram.com/bridalhouseofficial', '0503501990', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-01 09:13:57', '2023-12-01 09:13:57'),
(146, 0, 0, 35, 'VOX Cinemas City Centre Ajman', 'vox-cinemas-city-centre-ajman', NULL, 'From VOX Cinemas City Centre Ajman\r\n\"VOX Cinemas, A Majid Al Futtaim company is the Middle East’s largest and most rapidly growing exhibitor. Tailoring every cinema location to the surrounding marketplace and customer preferences, VOX Cinemas offers a mix of experiences including luxury concepts, THEATRE and GOLD. Another signature VOX Cinemas concept, MAX is the mega-screen designed for the biggest blockbusters and features Dolby Atmos™ surround sound technology. The company also offers a multisensory movie-watching concept, 4DX. For young movie fans and families, VOX Cinemas offers the only cinema dedicated to children, KIDS.\"', 4, 'City center Ajman ,AL JURF - Al Ittihad St - Al Jerf 2 - Ajman', '25.3983125', '55.4781875', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"11 am\",\"sat_close\":\"11 pm\",\"sun_open\":\"11 am\",\"sun_close\":\"11 pm\",\"mon_open\":\"11 am\",\"mon_close\":\"11 pm\",\"tue_open\":\"11 am\",\"tue_close\":\"11 pm\",\"wed_open\":\"11 am\",\"wed_close\":\"11 pm\",\"thu_open\":\"11 am\",\"thu_close\":\"11 pm\",\"fri_open\":\"11 am\",\"fri_close\":\"11 pm\"}', '11494901201701426964.jpg', 'occasions', 0, 1, NULL, NULL, NULL, '600599905', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-01 10:36:04', '2023-12-01 10:36:04'),
(147, 0, 0, 36, 'B-A-H Cleaning Services', 'b-a-h-cleaning-services', NULL, '\"Upholstery Deep Cleaning/ Shampooing/ Steam Cleaning/Disinfection and Sanitization Services.\"', 6, '21 Street Sultan Business Center - Dubai', '25.2048125', '55.2708125', '', '[]', '[]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"06 pm\",\"sun_open\":\"09 am\",\"sun_close\":\"06 pm\",\"mon_open\":\"09 am\",\"mon_close\":\"06 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"06 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"06 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"06 pm\",\"fri_open\":\"closed\",\"fri_close\":\"closed\"}', '2161525201701427414.jpeg', 'occasions', 0, 1, NULL, NULL, NULL, '042398114', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-01 10:43:34', '2023-12-01 10:43:34'),
(148, 0, 0, 53, 'DoubleTree by Hilton Sharjah Waterfront Hotel & Residences', 'doubletree-by-hilton-sharjah-waterfront-hotel-residences', NULL, 'Overlooking Al Majaz Park and Khalid Lake, this upscale hotel is 2 km from the grand Al Noor Mosque and 5 km from the Sharjah Museum of Islamic Civilization. Dubai International Airport is 12 km away', 5, 'Jamal Abdul Naser St - Al Majaz 2 - Al Majaz - Sharjah', '25.3261875', '55.3911875', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":null,\"sat_close\":null,\"sun_open\":null,\"sun_close\":null,\"mon_open\":null,\"mon_close\":null,\"tue_open\":null,\"tue_close\":null,\"wed_open\":null,\"wed_close\":null,\"thu_open\":null,\"thu_close\":null,\"fri_open\":null,\"fri_close\":null}', '16098821421701685799.jpg', 'hotels', 0, 1, NULL, NULL, NULL, '065111900', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-04 10:29:59', '2023-12-04 10:29:59'),
(151, 0, 0, 54, 'Construction and Building Engineering LLC', 'construction-and-building-engineering-llc', NULL, 'Having our roots deeply dug in the United Arab Emirates, Construction & Building Engineering (CBE) was founded in 1969 .', 6, 'Qusais Industrial Estate - 3 Amman St - Al Qusais Industrial Area 3 - Dubai', '25.2986875', '55.3853125', '', '[\"Parking\"]', '[\"fas fa-parking\"]', NULL, '{\"sat_open\":\"closed\",\"sat_close\":\"closed\",\"sun_open\":\"closed\",\"sun_close\":\"closed\",\"mon_open\":\"08 am\",\"mon_close\":\"05 pm\",\"tue_open\":\"08 am\",\"tue_close\":\"05 pm\",\"wed_open\":\"08 am\",\"wed_close\":\"05 pm\",\"thu_open\":\"08 am\",\"thu_close\":\"05 pm\",\"fri_open\":\"08 am\",\"fri_close\":\"05 pm\"}', '2581583721701687773.jpg', 'contractors', 0, 1, NULL, NULL, NULL, '042670670', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-04 11:02:53', '2023-12-04 11:02:53'),
(152, 0, 0, 55, 'Pro Live Events', 'pro-live-events', NULL, '\"One stop event’s solutions.From AV rentals to full event production , cooperate to weddings.We got you covered! 📩 Hello@proliveme.com 📞 +971505420288\"', 6, 'D3 - Dubai Design District - Dubai', '25.1875625', '55.30431249999999', '', '[]', '[]', NULL, '{\"sat_open\":null,\"sat_close\":null,\"sun_open\":null,\"sun_close\":null,\"mon_open\":null,\"mon_close\":null,\"tue_open\":null,\"tue_close\":null,\"wed_open\":null,\"wed_close\":null,\"thu_open\":null,\"thu_close\":null,\"fri_open\":null,\"fri_close\":null}', '20046944521701688350.jpg', 'contractors', 0, 1, NULL, NULL, NULL, '0505420288', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-04 11:12:30', '2023-12-04 11:12:30'),
(153, 0, 0, 56, 'Abu Dhabi House Movers And Packers', 'abu-dhabi-house-movers-and-packers', NULL, '\"We provide movers and packers services all over UAE our team is available all across the country and if you need movers in Abu Dhabi then contact us through this page. You can get a lot of benefits from our services if you are planning to shift your accommodation. If you are not yet aware of what are those benefits then let me explain them to you! why? our professional company has passed all the standards as the best movers in Dubai. As a professional moving company, we use high-quality packing materials to pack all of your furniture and appliances. Packing with the best materials will make it all safe throughout the move. With the help of the well-trained staff from our company, they will plan your smooth move from your old location to\"', 7, 'Khalifa City - Al Raha Gardens - Abu Dhabi', '24.4341875', '54.5731875', '', '[]', '[]', NULL, '{\"sat_open\":null,\"sat_close\":null,\"sun_open\":null,\"sun_close\":null,\"mon_open\":null,\"mon_close\":null,\"tue_open\":null,\"tue_close\":null,\"wed_open\":null,\"wed_close\":null,\"thu_open\":null,\"thu_close\":null,\"fri_open\":null,\"fri_close\":null}', '4515310011701689112.jpg', 'contractors', 0, 1, NULL, NULL, NULL, '0508377414', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-04 11:25:12', '2023-12-04 11:25:12'),
(154, 0, 0, 80, 'AVS SECURITY SYSTEMS LLC', 'avs-security-systems-llc', NULL, 'From AVS SECURITY SYSTEMS LLC\r\n\"AVS Security Systems LLC is a leading system integrator and turnkey solution provider in UAE, based in Dubai and branch office in Abudhabi. We facilitate honest and quality services for all ELV, Security, Audio Visual and Automatic doors system for our customers. We uphold a standard of exceptional service, unyielding integrity and continues to strive for overall excellence. Over the past ten years, we have earned our reputation of being a services provider and distributer with high integrity, quality, safety, best practices and prompt responsiveness to customer needs. We offer a comprehensive solution to fulfill and satisfy the customer requirements.\"', 6, '38 4B St - Al Qusais Industrial Area - Al Qusais Industrial Area 1 - Dubai', '25.2928125', '55.3886875', '', '[]', '[]', NULL, '{\"sat_open\":\"08 am\",\"sat_close\":\"03 pm\",\"sun_open\":\"closed\",\"sun_close\":\"closed\",\"mon_open\":\"08 am\",\"mon_close\":\"05 pm\",\"tue_open\":\"08 am\",\"tue_close\":\"05 pm\",\"wed_open\":\"08 am\",\"wed_close\":\"05 pm\",\"thu_open\":\"08 am\",\"thu_close\":\"05 pm\",\"fri_open\":\"08 am\",\"fri_close\":\"05 pm\"}', '13155089991701689738.jpg', 'contractors', 0, 1, NULL, NULL, NULL, '042717143', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-04 11:35:38', '2023-12-04 11:35:38'),
(155, 0, 0, 39, 'Titanium Properties. Ajman', 'titanium-properties-ajman', NULL, 'From Titanium Properties. Ajman\r\n\"Titanium Properties: Titanium Properties is a real estate brokerage and property management company, with a particular focus on Industrial and Commercial properties. It consists of a team of experienced professionals, possessing decades of in-depth knowledge and capability to identify and match the exact requirements of the clients and provide the optimum solution.\"', 4, 'behind China Mall and Ajman outlet - Jurf Industrial 3 - Ajman', '25.4238125', '55.5339375', '', '[\"Parking\"]', '[\"fas fa-parking\"]', NULL, '{\"sat_open\":\"closed\",\"sat_close\":\"closed\",\"sun_open\":\"09 am\",\"sun_close\":\"09 pm\",\"mon_open\":\"09 am\",\"mon_close\":\"09 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"09 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"09 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"09 pm\",\"fri_open\":\"09 am\",\"fri_close\":\"07 pm\"}', '20545654151701690989.jpg', 'contractors', 0, 1, NULL, NULL, NULL, '0569311396', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-04 11:56:29', '2023-12-04 11:56:29'),
(157, 0, 0, 57, 'ABC Cargo & Courier, Lulu Hypermarket Al Nahda', 'abc-cargo-courier-lulu-hypermarket-al-nahda', NULL, 'You can trust us with your shipment as we deliver quality service.\"', 5, 'Sharjah 3 Street (Al Nahda 2 Lulu Hypermarket - Sharjah', '25.3031875', '55.3744375', '', '[]', '[]', NULL, '{\"sat_open\":\"08 am\",\"sat_close\":\"12 am\",\"sun_open\":\"08 am\",\"sun_close\":\"12 am\",\"mon_open\":\"08 am\",\"mon_close\":\"12 am\",\"tue_open\":\"08 am\",\"tue_close\":\"12 am\",\"wed_open\":\"08 am\",\"wed_close\":\"12 am\",\"thu_open\":\"08 am\",\"thu_close\":\"12 am\",\"fri_open\":\"08 am\",\"fri_close\":\"12 am\"}', '3203025751701691850.jpg', 'courierservice', 0, 1, NULL, NULL, NULL, '067311800', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-04 12:10:50', '2023-12-04 12:10:50'),
(158, 0, 0, 75, 'Tequila Branding & Web Design Company', 'tequila-branding-web-design-company', NULL, 'From Tequila Branding & Web Design Company\r\n\"We are the best web design company in Dubai,UAE offers all kinds of web design & development services across the globe\"', 6, 'Tamani Arts Offices - Business Bay - Dubai', '25.1871875', '55.2806875', '', '[\"Wheelchair-Accessible\"]', '[\"fas fa-moon\"]', NULL, '{\"sat_open\":\"closed\",\"sat_close\":\"closed\",\"sun_open\":\"closed\",\"sun_close\":\"closed\",\"mon_open\":\"09 am\",\"mon_close\":\"06 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"06 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"06 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"06 pm\",\"fri_open\":\"09 am\",\"fri_close\":\"06 pm\"}', '15684095121702017552.jpeg', 'graphic-websitedesigners', 0, 1, NULL, NULL, NULL, '0509372493', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-08 06:39:12', '2023-12-08 06:39:12'),
(159, 0, 0, 76, 'Dar Al Andalus Printing Pub. & Dist. LLC.', 'dar-al-andalus-printing-pub-dist-llc', NULL, 'Welcome to Dar Al Andalus Printing Pub. & Dist. LLC. Base in Sharjah – U.A.E, Dar Al Andalus Printing Press is a professionally managed printing company', 5, 'No. 2 - near Sharjah College - Industrial Area 2 - Industrial Area - Sharjah', '25.3093125', '55.3931875', '', '[]', '[]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"08 pm\",\"sun_open\":\"closed\",\"sun_close\":\"closed\",\"mon_open\":\"09 am\",\"mon_close\":\"08 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"08 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"08 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"08 pm\",\"fri_open\":\"09 am\",\"fri_close\":\"08 pm\"}', '13898421341702018517.jpg', 'printingpublishing', 0, 1, NULL, NULL, NULL, '0553368411', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-08 06:55:17', '2023-12-08 06:55:17'),
(160, 0, 0, 58, 'Bright Future Training Institute', 'bright-future-training-institute', NULL, 'From Bright Future Training Institute\r\n\"Bright Future Training Institute - IELTS Training & Exam Preparation, OET, PTE, CELPIP, Accounting (Tally,Quick books) Courses, Digital Marketing Courses, Web Designing Course, Wordpress Training,PhotoShop, illustrator Networking Courses,CCTV Course,CCNA Course,Hotel Management Courses, HR Courses From Our Years of Experience as Educators,We earned much-valued feedback, attained prestigious image in GCC as well as from the international sectors.we are an affiliate partner of British Council and consistently generating 7-9 Bands of both ielts academic and ielts general modules.We are Happy to always be at your service and continue to grow as inspired by many students who continually refer our training Center as one of the best in UAE.\"', 6, 'NBQ Bank Building - Suite 404, fourth floor - Khalid Bin Al Waleed Rd - Bur Dubai', '25.2561875', '55.3016875', '', '[]', '[]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"09 pm\",\"sun_open\":\"09 am\",\"sun_close\":\"09 pm\",\"mon_open\":\"09 am\",\"mon_close\":\"09 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"09 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"09 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"09 pm\",\"fri_open\":\"09 am\",\"fri_close\":\"09 pm\"}', '3860720011702018771.jpg', 'printingpublishing', 0, 1, NULL, 'https://bftraining.ae/', NULL, '0559234565', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-08 06:59:31', '2023-12-08 06:59:31'),
(161, 0, 0, 73, 'Finance House Securities', 'finance-house-securities', NULL, 'From Finance House Securities\r\n\"Finance House Securities (FHS) LLC is incorporated in the Emirate of Abu Dhabi, United Arab Emirates, and operates out of its offices in Abu Dhabi and Dubai. Licensed and regulated by the Securities & Commodities Authority (SCA) of the UAE, FHS provides secure and efficient brokerage services through a team of highly experienced professionals. FHS also offers customized and user-friendly online trading services that easily enable clients to monitor share prices as well as their own portfolios.\"', 6, 'Dubai World - Sheikh Zayed Rd - Trade Centre - Trade Centre 2 - Dubai', '25.2278125', '55.28868749999999', '', '[\"Wheelchair-Accessible\"]', '[\"fas fa-moon\"]', NULL, '{\"sat_open\":\"closed\",\"sat_close\":\"closed\",\"sun_open\":\"closed\",\"sun_close\":\"closed\",\"mon_open\":\"08 am\",\"mon_close\":\"04 pm\",\"tue_open\":\"08 am\",\"tue_close\":\"04 pm\",\"wed_open\":\"08 am\",\"wed_close\":\"04 pm\",\"thu_open\":\"08 am\",\"thu_close\":\"04 pm\",\"fri_open\":\"08 am\",\"fri_close\":\"01 pm\"}', '20221005561702020754.jpg', 'finance', 0, 1, NULL, 'http://www.fhs.ae/', NULL, '043592478', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-08 07:32:34', '2023-12-08 07:32:34'),
(162, 0, 0, 74, '8th Lining - Made to Measure Suits', '8th-lining-made-to-measure-suits', NULL, 'From 8th Lining - Made to Measure Suits\r\n\"Located in the heart of Dubai, 8th Lining is a regional Made to Measure suits store that offers customers a place to find unique and timeless suits. Our made to measure shirts and suits are accessible to everyone, thanks to a unique 3D body scanning technology. 8th Lining offers a selection of made to measure suits. From wedding suits to tuxedos and a wide range of 3-piece made to measure suits in a selection of over 1800 fabrics: Prince of Wales, stripes, squares, plain... 8th Lining will be your leading reference for made to measure suits.\"', 4, 'Millennium Atria Hotel - Marasi Dr - Business Bay - Dubai', '25.1799375', '55.26406249999999', '', '[]', '[]', NULL, '{\"sat_open\":\"10 am\",\"sat_close\":\"09 pm\",\"sun_open\":\"10 am\",\"sun_close\":\"09 pm\",\"mon_open\":\"10 am\",\"mon_close\":\"09 pm\",\"tue_open\":\"10 am\",\"tue_close\":\"09 pm\",\"wed_open\":\"10 am\",\"wed_close\":\"09 pm\",\"thu_open\":\"10 am\",\"thu_close\":\"09 pm\",\"fri_open\":\"10 am\",\"fri_close\":\"09 pm\"}', '632700861702021024.jpg', 'finance', 0, 1, NULL, NULL, NULL, '045774615', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-08 07:37:04', '2023-12-08 07:37:04'),
(163, 0, 0, 77, 'American bite pest control and cleaning services', 'american-bite-pest-control-and-cleaning-services', NULL, 'From American bite pest control and cleaning services\r\n\"American Bite Pest Control and Cleaning Services is a leading provider of pest control and cleaning services in Abu Dhabi. We offer a wide range of services to protect your home or business from pests, including cockroaches, bedbugs, termites, and rodents. Our team of experienced and certified technicians is dedicated to providing you with the highest quality service possible.\"', 7, 'Musaffah 10 Plot Num 7, ²floor, office Num 3 - M-10 - Abu Dhabi', '24.3726875', '54.5053125', '', '[]', '[]', NULL, '{\"sat_open\":\"08 am\",\"sat_close\":\"09 pm\",\"sun_open\":\"08 am\",\"sun_close\":\"09 pm\",\"mon_open\":\"08 am\",\"mon_close\":\"09 pm\",\"tue_open\":\"08 am\",\"tue_close\":\"09 pm\",\"wed_open\":\"08 am\",\"wed_close\":\"09 pm\",\"thu_open\":\"08 am\",\"thu_close\":\"09 pm\",\"fri_open\":\"08 am\",\"fri_close\":\"09 pm\"}', '15528109331702021263.png', 'finance', 0, 1, NULL, 'https://bitepestcontrol.com/', NULL, '0562582461', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-08 07:41:03', '2023-12-08 07:41:03'),
(164, 0, 0, 78, 'Al Eman Computer Repairing LLC', 'al-eman-computer-repairing-llc', NULL, 'Computer repair service , Networking, Internet setup in both home and office. printer and other IT service. Ajman Ring Road - Sharjah.', 4, 'Ajman Ring Road - 2 Al Nuaimia - Ajman', '25.3828125', '55.4460625', '', '[]', '[]', NULL, '{\"sat_open\":null,\"sat_close\":null,\"sun_open\":null,\"sun_close\":null,\"mon_open\":null,\"mon_close\":null,\"tue_open\":null,\"tue_close\":null,\"wed_open\":null,\"wed_close\":null,\"thu_open\":null,\"thu_close\":null,\"fri_open\":null,\"fri_close\":null}', '9270544631702021447.jpg', 'finance', 0, 1, NULL, NULL, NULL, '0563991213', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-08 07:44:07', '2023-12-08 07:44:07'),
(165, 0, 0, 79, 'Jawhara Jewellery - Khorfakkan', 'jawhara-jewellery-khorfakkan', NULL, 'From Jawhara Jewellery - Khorfakkan\r\n\"Jawhara Jewellery® – Jewellers since 1907 With extensive knowledge and decades of jewellery business experience. Made for the modern young woman, Jawhara epitomizes the youth, while celebrating the different nuances of the region. All the collections are conceived, created and developed by a team of skilled in-house and international jewellers known for their exceptional craftsmanship. Our designs are manufactured and responsibly sourced from the best international alliances Jawhara travels the world to offer unconventional, trendy and stylish jewellery that complements the youth as a leading jewellery wholesaler, retailer and manufacturer of 18k, 21k and 22k supported by a network of over 185 outlets in the region.\"', 13, 'Al Bardi 2 - Sharjah', '25.3446875', '56.3486875', '', '[]', '[]', NULL, '{\"sat_open\":\"10 am\",\"sat_close\":\"09 pm\",\"sun_open\":\"10 am\",\"sun_close\":\"09 pm\",\"mon_open\":\"10 am\",\"mon_close\":\"09 pm\",\"tue_open\":\"10 am\",\"tue_close\":\"09 pm\",\"wed_open\":\"10 am\",\"wed_close\":\"09 pm\",\"thu_open\":\"10 am\",\"thu_close\":\"09 pm\",\"fri_open\":\"10 am\",\"fri_close\":\"09 pm\"}', '19995394531702021794.jpg', 'finance', 0, 1, NULL, NULL, NULL, '092380299', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-08 07:49:54', '2023-12-08 07:49:54');
INSERT INTO `listings` (`id`, `user_id`, `admin_id`, `category_id`, `name`, `slug`, `designation`, `description`, `location_id`, `real_address`, `latitude`, `longitude`, `gmap_address`, `amenities`, `amenity_icons`, `distance`, `schedules`, `photo`, `type`, `is_feature`, `status`, `expire_date`, `website`, `email`, `phone_number`, `facebook`, `twitter`, `linkedin`, `listing_video_provider`, `listing_video`, `r_price`, `r_bed`, `r_baths`, `r_square`, `r_property_type`, `car_price`, `car_fuel_type`, `car_manufacture_year`, `car_engine_capacity`, `car_mileage`, `is_verify`, `is_toprated`, `food_type`, `highlight_type`, `views`, `created_at`, `updated_at`) VALUES
(166, 0, 0, 133, 'Al Hadi Ac Repair & Maintenance Services', 'al-hadi-ac-repair-maintenance-services', NULL, 'From Al Hadi Ac Repair & Maintenance Services\r\n\"Al Hadi AC Repair & Maintenance Services provides AC Installation, AC Repair Services in Dubai, AC Cleaning, AC Gas Refilling, AC Maintenance, Split AC Repairing, AC Advanced Piping Services, AC Mounting and Dismounting, Hygienic Ductless Cleaning, and Emergency AC Repair Services in Sharjah and Dubai. We provide our services in Dubai with a history of excellence for an optimal customer experience. At Al Hadi AC Repairing Services, we’ve built our entire business around the idea that our customers deserve the best possible treatment, starting with friendly, highly-trained engineers and technicians for air conditioning repair, installation, and AC services. Call or visit our storefront today!\"', 5, 'Shop # 2 King Halima Jumaa behind the inner Streets Industrial area 3 37532 - Sharjah', '25.3053125', '55.41431249999999', '', '[]', '[]', NULL, '{\"sat_open\":null,\"sat_close\":null,\"sun_open\":null,\"sun_close\":null,\"mon_open\":null,\"mon_close\":null,\"tue_open\":null,\"tue_close\":null,\"wed_open\":null,\"wed_close\":null,\"thu_open\":null,\"thu_close\":null,\"fri_open\":null,\"fri_close\":null}', '6556713141702022819.jpeg', 'ac-service', 0, 1, NULL, 'https://alhadiacrepair.ae/', NULL, '0509460730', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-08 08:06:59', '2023-12-08 08:06:59'),
(167, 0, 0, 82, 'Golden Crown Mobile', 'golden-crown-mobile', NULL, 'Golden Crown Mobile: details with ⭐ 55 reviews, phone number, work hours, location on map. Find similar shops and markets in Abu Dhabi.', 7, 'Al Nahyan - Abu Dhabi', '24.4749375', '54.3784375', '', '[]', '[]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"12 am\",\"sun_open\":\"09 am\",\"sun_close\":\"12 am\",\"mon_open\":\"09 am\",\"mon_close\":\"12 am\",\"tue_open\":\"09 am\",\"tue_close\":\"12 am\",\"wed_open\":\"09 am\",\"wed_close\":\"12 am\",\"thu_open\":\"09 am\",\"thu_close\":\"12 am\",\"fri_open\":\"09 am\",\"fri_close\":\"12 am\"}', '5745518741702023424.jpg', 'ac-service', 0, 1, NULL, NULL, NULL, '026415541', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-08 08:17:04', '2023-12-08 08:17:04'),
(168, 0, 0, 83, 'IMG Worlds of Adventure', 'img-worlds-of-adventure', NULL, 'From IMG Worlds of Adventure\r\n\"IMG Worlds of Adventure is Dubai’s first mega themed entertainment destination promising visitors from around the world the excitement of four epic adventure zones in one location. Two of the four zones represent renowned global brands Cartoon Network and MARVEL, while IMG Boulevard and the Lost Valley –Dinosaur Adventure zones are original concepts of the IMG Group. The park is featuring a unique array of adrenaline-pumping roller coasters, thrill rides, and spine-tingling attractions based on popular Cartoon Network characters, iconic MARVEL Super Heroes and hair-raising dinosaurs. Additionally, the destination is the home to a number of world-firsts, a variety of themed retail stores & more. It is the World\'s Coolest Theme Park to visit.\"', 6, 'City of Arabia - Dubai', '25.0824375', '55.3196875', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\"]', '[\"fas fa-moon\",\"fas fa-wifi\"]', NULL, '{\"sat_open\":\"12 pm\",\"sat_close\":\"11 pm\",\"sun_open\":\"12 pm\",\"sun_close\":\"10 pm\",\"mon_open\":\"12 pm\",\"mon_close\":\"10 pm\",\"tue_open\":\"12 pm\",\"tue_close\":\"10 pm\",\"wed_open\":\"12 pm\",\"wed_close\":\"10 pm\",\"thu_open\":\"12 pm\",\"thu_close\":\"10 pm\",\"fri_open\":\"12 pm\",\"fri_close\":\"11 pm\"}', '12427034251702024099.jpg', 'ac-service', 0, 1, NULL, 'https://www.imgworlds.com/', NULL, '044038888', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-08 08:28:19', '2023-12-08 08:28:19'),
(169, 0, 0, 84, 'Foto Art UAE', 'foto-art-uae', NULL, 'From Foto Art UAE\r\n\"Professional Female Photographer. We have all Wedding Photography services, Wedding Videography, Newborn, maternity photoshoot, Birthday Photoshoot all over the UAE. Also including Photo Album Making, Photo Books, Photo Studio Services.\"', 5, 'Al Shamsi Building No 2 - Al Wahda St - Al Majaz 2 - Sharjah', '25.3274375', '55.3939375', '', '[]', '[]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"08 pm\",\"sun_open\":\"closed\",\"sun_close\":\"closed\",\"mon_open\":\"09 am\",\"mon_close\":\"08 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"08 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"08 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"08 pm\",\"fri_open\":\"09 am\",\"fri_close\":\"08 pm\"}', '3636303991702025544.png', 'ac-service', 0, 1, NULL, 'https://www.fotoartuae.com/', NULL, '065756750', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-08 08:52:24', '2023-12-08 08:52:24'),
(170, 0, 0, 85, 'Your Choice Healthcare LLC', 'your-choice-healthcare-llc', NULL, 'From Your Choice Healthcare LLC\r\n\"YOUR CHOICE HEALTHCARE is a homecare service provider located at Mankool, Dubai. We are providing wide range of services like Doctors on Call, Nurses at home, long term nurse care, Physiotherapy at home, speech therapy at home and many more with experienced and well qualified healthcare professionals.\"', 6, 'Your Choice Healthcare LLC', '25.2525625', '55.28693750000001', '', '[]', '[]', NULL, '{\"sat_open\":null,\"sat_close\":null,\"sun_open\":null,\"sun_close\":null,\"mon_open\":null,\"mon_close\":null,\"tue_open\":null,\"tue_close\":null,\"wed_open\":null,\"wed_close\":null,\"thu_open\":null,\"thu_close\":null,\"fri_open\":null,\"fri_close\":null}', '13025314981702026373.jpg', 'ac-service', 0, 1, NULL, NULL, NULL, '0586896770', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-08 09:06:13', '2023-12-08 09:06:13'),
(171, 0, 0, 87, 'Abela & Co - Fujairah Branch & Central Kitchen', 'abela-co-fujairah-branch-central-kitchen', NULL, 'Culinary & Catering Centre. Sanas Street, Industrial 2. Ras Al Khor, Al Aweer Dubai, United Arab Emirates Tel: +971 4 333 4922, Fax: +971 4 333 4901 · Fujairah ...', 1, '477J+GX8 - Fujairah', '25.1137875', '56.2824531', '', '[]', '[]', NULL, '{\"sat_open\":null,\"sat_close\":null,\"sun_open\":null,\"sun_close\":null,\"mon_open\":null,\"mon_close\":null,\"tue_open\":null,\"tue_close\":null,\"wed_open\":null,\"wed_close\":null,\"thu_open\":null,\"thu_close\":null,\"fri_open\":null,\"fri_close\":null}', '8082154691702031176.jpg', 'ac-service', 0, 1, NULL, NULL, NULL, '092239040', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-08 10:26:16', '2023-12-08 10:26:16'),
(172, 0, 0, 145, 'Infinity fitness Club & Bodybuilding Gym', 'infinity-fitness-club-bodybuilding-gym', NULL, 'From Infinity fitness Club & Bodybuilding Gym\r\n\"Infinity Fitness is one of the finest gym in Ajman which enables the people to work on the health. There are various exercises and fitness regimes that can be practiced in the gym with the mentoring of a competent instructor. Swimming and gymnastics can be learned and perfected in this world-class fitness center.\"', 4, '9CVQ+4F4 Grand Mall - Sheikh Khalifa Bin Zayed St - Al Rashidiya 3 - Ajman', '25.3927625', '55.4387031', '', '[\"Wheelchair-Accessible\"]', '[\"fas fa-moon\"]', NULL, '{\"sat_open\":\"07 am\",\"sat_close\":\"01 am\",\"sun_open\":\"07 am\",\"sun_close\":\"01 am\",\"mon_open\":\"07 am\",\"mon_close\":\"01 am\",\"tue_open\":\"07 am\",\"tue_close\":\"01 am\",\"wed_open\":\"07 am\",\"wed_close\":\"01 am\",\"thu_open\":\"07 am\",\"thu_close\":\"01 am\",\"fri_open\":\"07 am\",\"fri_close\":\"01 am\"}', '9887615661702031551.jpg', 'ac-service', 0, 1, NULL, 'https://www.infinityfitness.ae/', NULL, '0503180202', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-08 10:32:31', '2023-12-08 10:32:31'),
(173, 0, 0, 146, 'Business Bay Cross Fit', 'business-bay-cross-fit', NULL, 'BUSINESS BAY CROSSFIT · HOME. ABOUT US. WHO WE ... Business Bay CrossFit , Shop 6, Windsor Manor, Dubai, United Arab Emirates(00971) 585863271fabulousades@gmail.', 6, 'Windsor Manor Tower SHOP 6 - Dubai', '25.1919375', '55.2910625', '', '[\"Wheelchair-Accessible\"]', '[\"fas fa-moon\"]', NULL, '{\"sat_open\":\"closed\",\"sat_close\":\"closed\",\"sun_open\":\"closed\",\"sun_close\":\"closed\",\"mon_open\":\"06 am\",\"mon_close\":\"08 pm\",\"tue_open\":\"06 am\",\"tue_close\":\"08 pm\",\"wed_open\":\"06 am\",\"wed_close\":\"08 pm\",\"thu_open\":\"06 am\",\"thu_close\":\"08 pm\",\"fri_open\":\"06 am\",\"fri_close\":\"08 pm\"}', '18712723131702033708.jpg', 'gym', 0, 1, NULL, NULL, NULL, '0585863271', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-08 11:08:28', '2023-12-08 11:08:28'),
(174, 0, 0, 147, 'World Black Belts Centre', 'world-black-belts-centre', NULL, 'The oldest Martial Arts school in Dubai in the same location since 2002 on Sheikh Zayed Rd. ... World Black Belts Center where Champions are born … . . #champions ...', 6, 'Sheikh Zayed Rd - Al Wasl - Dubai', '25.1924375', '55.2594375', '', '[\"Wheelchair-Accessible\"]', '[\"fas fa-moon\"]', NULL, '{\"sat_open\":null,\"sat_close\":null,\"sun_open\":null,\"sun_close\":null,\"mon_open\":null,\"mon_close\":null,\"tue_open\":null,\"tue_close\":null,\"wed_open\":null,\"wed_close\":null,\"thu_open\":null,\"thu_close\":null,\"fri_open\":null,\"fri_close\":null}', '10890999361702033952.jpg', 'gym', 0, 1, NULL, NULL, NULL, '043434397', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-08 11:12:32', '2023-12-08 11:12:32'),
(175, 0, 0, 143, 'Easy Fit EMS Training Downtown // Business Bay', 'easy-fit-ems-training-downtown-business-bay', NULL, 'From Easy Fit EMS Training Downtown // Business Bay\r\n\"We are a Fitness studio specialized in EMS training, we provide EMS training starting December 2015, We are experts in losing weight, shape up, post pregnancy workout, tackle back pain, reduce cellulite, increase the overall fitness level. One training it’s 20 minutes and it’s 18 times more effective than the regular workout in the gym. Every training is conducted by a professional Personal Trainer. . Our Team in Dubai Business Bay // Downtown is excited to show you the EMS training!\"', 6, 'Bay Square Building 2 Shop 3 - Dubai', '25.1851875', '55.2793125', '', '[\"Wheelchair-Accessible\"]', '[\"fas fa-moon\"]', NULL, '{\"sat_open\":\"08 am\",\"sat_close\":\"09 pm\",\"sun_open\":\"08 am\",\"sun_close\":\"06 pm\",\"mon_open\":\"08 am\",\"mon_close\":\"09 pm\",\"tue_open\":\"08 am\",\"tue_close\":\"09 pm\",\"wed_open\":\"08 am\",\"wed_close\":\"09 pm\",\"thu_open\":\"08 am\",\"thu_close\":\"09 pm\",\"fri_open\":\"08 am\",\"fri_close\":\"06 pm\"}', '20483593981702034301.jpg', 'gym', 0, 1, NULL, NULL, NULL, '0544568833', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-08 11:18:21', '2023-12-08 11:18:21'),
(176, 0, 0, 148, 'Hourglass Ladies Club', 'hourglass-ladies-club', NULL, 'From Hourglass Ladies Club\r\n⌛First ladies only hourglass body-shaped⁣ 💥 Strength training studio in Dubai 🇦🇪.⁣', 6, 'Al Meraikhi Tower - 111 308th Rd - Trade Centre - Dubai', '25.2089375', '55.2716875', '', '[]', '[]', NULL, '{\"sat_open\":\"07 am\",\"sat_close\":\"07 pm\",\"sun_open\":\"07 am\",\"sun_close\":\"08 pm\",\"mon_open\":\"07 am\",\"mon_close\":\"09 pm\",\"tue_open\":\"07 am\",\"tue_close\":\"09 pm\",\"wed_open\":\"07 am\",\"wed_close\":\"09 pm\",\"thu_open\":\"07 am\",\"thu_close\":\"09 pm\",\"fri_open\":\"07 am\",\"fri_close\":\"09 pm\"}', '9696834371702034987.jpg', 'gym', 0, 1, NULL, NULL, NULL, '043397707', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-08 11:29:47', '2023-12-08 11:29:47'),
(177, 0, 0, 149, 'Sujana Power Yoga', 'sujana-power-yoga', NULL, '\"Very good and highly skilled instructor.Mam Sujana is very approachable.I highly recommend her center,it really helps and her way of teaching is very relaxing.Thank you v …\"', 5, 'Al Nahda St - Al Nahda - Sharjah', '25.3018125', '55.3724375', '', '[]', '[]', NULL, '{\"sat_open\":\"closed\",\"sat_close\":\"closed\",\"sun_open\":\"closed\",\"sun_close\":\"closed\",\"mon_open\":\"06 am\",\"mon_close\":\"09 pm\",\"tue_open\":\"06 am\",\"tue_close\":\"09 pm\",\"wed_open\":\"06 am\",\"wed_close\":\"09 pm\",\"thu_open\":\"06 am\",\"thu_close\":\"09 pm\",\"fri_open\":\"06 am\",\"fri_close\":\"09 pm\"}', '20180705711702035296.jpg', 'gym', 0, 1, NULL, NULL, NULL, '0554294539', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-08 11:34:56', '2023-12-08 11:34:56'),
(178, 0, 0, 150, 'Premier Padel', 'premier-padel', NULL, 'From Premier Padel\r\n\"Premier Padel is more than just a padel club; we are part of a community of like-minded individuals who love to play, socialize and have fun. We offer premium courts for bookings of private or group coaching, partner-pairing services, tournaments, group and junior trainings for experienced or new padel players of all ages.\"', 6, '13 Al Asayel St - Al Quoz - Al Quoz Industrial Area 2 - Dubai', '25.1661875', '55.2586875', '', '[\"Wheelchair-Accessible\"]', '[\"fas fa-moon\"]', NULL, '{\"sat_open\":\"06 am\",\"sat_close\":\"12 am\",\"sun_open\":\"06 am\",\"sun_close\":\"12 am\",\"mon_open\":\"04 pm\",\"mon_close\":\"12 am\",\"tue_open\":\"04 pm\",\"tue_close\":\"12 am\",\"wed_open\":\"04 pm\",\"wed_close\":\"12 am\",\"thu_open\":\"04 pm\",\"thu_close\":\"12 am\",\"fri_open\":\"04 pm\",\"fri_close\":\"12 am\"}', '2524717341702035500.jpg', 'gym', 0, 1, NULL, NULL, NULL, '0566992282', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-08 11:38:20', '2023-12-08 11:38:20'),
(179, 0, 0, 120, 'Milan Motors', 'milan-motors', NULL, 'Milan Motors Dubai: Home\r\nABOUT US. Milan Motors Dubai is a prominent & reliable car dealer Showroom in Dubai UAE. We\'re here to serve as your ultimate vehicle consultant, and have been ...', 6, 'Marasi Dr - Business Bay - Dubai', '25.1808125', '55.2636875', '', '[]', '[]', NULL, '{\"sat_open\":\"10 am\",\"sat_close\":\"08 pm\",\"sun_open\":\"10 am\",\"sun_close\":\"08 pm\",\"mon_open\":\"10 am\",\"mon_close\":\"08 pm\",\"tue_open\":\"10 am\",\"tue_close\":\"08 pm\",\"wed_open\":\"10 am\",\"wed_close\":\"08 pm\",\"thu_open\":\"10 am\",\"thu_close\":\"08 pm\",\"fri_open\":\"closed\",\"fri_close\":\"closed\"}', '706380951702037661.jpg', 'gym', 0, 1, NULL, NULL, NULL, '0558558222', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-08 12:14:21', '2023-12-08 12:14:21'),
(180, 0, 0, 121, 'Galaxy Electrical Devices TR.', 'galaxy-electrical-devices-tr', NULL, 'From Galaxy Electrical Devices TR.\r\n\"come here and also Installation avalabile\"', 5, 'Sharjah, Maliha Road, 2nd Industrial Junction A 1 - Sharjah - Sharjah', '25.3155625', '55.4125625', '', '[]', '[]', NULL, '{\"sat_open\":\"10 am\",\"sat_close\":\"11 pm\",\"sun_open\":\"10 am\",\"sun_close\":\"11 pm\",\"mon_open\":\"10 am\",\"mon_close\":\"11 pm\",\"tue_open\":\"10 am\",\"tue_close\":\"11 pm\",\"wed_open\":\"10 am\",\"wed_close\":\"11 pm\",\"thu_open\":\"10 am\",\"thu_close\":\"11 pm\",\"fri_open\":\"04 pm\",\"fri_close\":\"11 pm\"}', '20602004681702038319.jpg', 'gym', 0, 1, NULL, NULL, NULL, '0552813369', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-08 12:25:19', '2023-12-08 12:25:19'),
(181, 0, 0, 122, 'SK Export - Secondhand & New Clothes Supplier', 'sk-export-secondhand-new-clothes-supplier', NULL, 'From SK Export - Secondhand & New Clothes Supplier\r\n\"SK Export specializes in the import and export of European sorted used clothing, new clothing stock lot & shoes in the UAE and Worldwide\"', 5, 'T6-18 Sharjah Airport International Free Zone - Sharjah', '25.3404375', '55.5068125', '', '[]', '[]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"06 pm\",\"sun_open\":\"09 am\",\"sun_close\":\"06 pm\",\"mon_open\":\"09 am\",\"mon_close\":\"06 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"06 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"06 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"06 pm\",\"fri_open\":\"09 am\",\"fri_close\":\"06 pm\"}', '9458413661702039138.jpg', 'gym', 0, 1, NULL, NULL, NULL, '065388904', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-08 12:38:58', '2023-12-08 12:38:58'),
(182, 0, 0, 123, 'Al Qubtaan Heavy Equip. Trading Co. LLC', 'al-qubtaan-heavy-equip-trading-co-llc', NULL, 'Al Qubtaan Heavy Equipment Trading Company LLC Is Trader Of Construction & Earth Moving Equipment, Cranes, Forklifts, Road Rollers, Finishers, Sweepers, .', 5, 'Industrial Area 3, Post Box No. 22452 - Sharjah', '25.2963125', '55.4075625', '', '[]', '[]', NULL, '{\"sat_open\":\"08 am\",\"sat_close\":\"08 pm\",\"sun_open\":\"08 am\",\"sun_close\":\"08 pm\",\"mon_open\":\"08 am\",\"mon_close\":\"08 pm\",\"tue_open\":\"08 am\",\"tue_close\":\"08 pm\",\"wed_open\":\"08 am\",\"wed_close\":\"08 pm\",\"thu_open\":\"08 am\",\"thu_close\":\"08 pm\",\"fri_open\":\"08 am\",\"fri_close\":\"08 pm\"}', '2149404001702039618.jpg', 'gym', 0, 1, NULL, NULL, NULL, '065439912', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-08 12:46:58', '2023-12-08 12:46:58'),
(183, 0, 0, 132, 'Carmate By Red Fox Auto Care Abu Dhabi - كراج كار مايت', 'carmate-by-red-fox-auto-care-abu-dhabi-krag-kar-mayt', NULL, 'From Carmate By Red Fox Auto Care Abu Dhabi - كراج كار مايت\r\n\"We\'re Car Mate, we maintain your car in mint condition with prompt repair and maintenance solutions. We work with all makes and models. Carmate Auto Workshop LLC is Redfox Car Garage based in Abu Dhabi city catering all the requirements of automotive repairs, mechanical works, electrical works, body Denting & painting, accidental repairs, car insurance repairs and annual service maintenance packages with latest equipment\'s and an expert staff that is very well experienced and trained in their own respective fields. Call us or Book Appointment for your next service.\"', 7, 'Car Mate Auto Workshop ADNOC Vehicle Inspection Center - Muroor Rd - Al Sa\'adah - Zone 1 - Abu Dhabi', '24.4366875', '54.4168125', '', '[]', '[]', NULL, '{\"sat_open\":\"08 am\",\"sat_close\":\"02 am\",\"sun_open\":\"09 am\",\"sun_close\":\"07 pm\",\"mon_open\":\"08 am\",\"mon_close\":\"02 am\",\"tue_open\":\"08 am\",\"tue_close\":\"02 am\",\"wed_open\":\"08 am\",\"wed_close\":\"02 am\",\"thu_open\":\"08 am\",\"thu_close\":\"02 am\",\"fri_open\":\"08 am\",\"fri_close\":\"02 am\"}', '7552280521702299126.jpg', 'repairs-services', 0, 1, NULL, NULL, NULL, '0561098206', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-11 12:52:06', '2023-12-11 12:52:06'),
(184, 0, 0, 133, 'Special Air Condition General Maintenance | AC Repair in Abu Dhabi | تصليح مكيفات | AC Maintenance in Abu Dhabi', 'special-air-condition-general-maintenance-ac-repair-in-abu-dhabi-tslyh-mkyfat-ac-maintenance-in-abu-dhabi', NULL, 'From Special Air Condition General Maintenance | AC Repair in Abu Dhabi | تصليح مكيفات | AC Maintenance in Abu Dhabi\r\n\"Special Air Condition General Maintenance provides AC Repair in Abu Dhabi. All our services are available inside Abu Dhabi. We provide AC maintenance as well as AC installation, AC Servicing, HVAC repair, Central AC repair, Ductless heating & AC services and many more. Aside from AC repair we also provide Washing Machine Repair, Refrigerator Repair, Plumbing Service, CCTV Camera, Smart Control, TV Repair, Water Heater, Kitchen Equipment Repair, Water Pressure Pump, Garden Lighting, Artificial Grass, Wallpaper work, Gas cooker, Microwave ovens, Tiles, Electronics Equipment Repair, Exhaust fan and hood, Gypsum work, Home Decor. Best thing about us is we are very fast and provide high quality service.\"', 7, 'Musaffah M/6 Building No: 78 Sector No: 06 - Abu Dhabi', '24.3708125', '54.5143125', '', '[]', '[]', NULL, '{\"sat_open\":\"07 am\",\"sat_close\":\"11 pm\",\"sun_open\":\"07 am\",\"sun_close\":\"11 pm\",\"mon_open\":\"07 am\",\"mon_close\":\"11 pm\",\"tue_open\":\"07 am\",\"tue_close\":\"11 pm\",\"wed_open\":\"07 am\",\"wed_close\":\"11 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"11 pm\",\"fri_open\":\"07 am\",\"fri_close\":\"11 pm\"}', '20213292541702299341.jpg', 'repairs-services', 0, 1, NULL, NULL, NULL, '0523476261', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-11 12:55:41', '2023-12-11 12:55:41'),
(185, 0, 0, 136, 'GIJO Handyman & Maintenance Dubai', 'gijo-handyman-maintenance-dubai', NULL, 'From GIJO Handyman & Maintenance Dubai\r\n\"Elevate your living spaces with GIJO Handyman and Maintenance! 🏡 Our skilled team specializes in plumbing, A/C, electrical solutions, carpentry, and beyond. We\'re more than just handymen; we\'re your partners in creating a home you love. With clear communication, transparent pricing, and a commitment to timely excellence, we ensure every task is a seamless experience. Connect with us at 600 55 GIJO (600 55 4456) – where your home\'s potential meets our expertise! 👨‍🔧✨\"', 6, 'The Marina Torch - Al Sufouh - Dubai Marina - Dubai', '25.0879375', '55.1475625', '', '[]', '[]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"06 pm\",\"sun_open\":\"closed\",\"sun_close\":\"closed\",\"mon_open\":\"09 am\",\"mon_close\":\"06 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"06 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"06 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"06 pm\",\"fri_open\":\"09 am\",\"fri_close\":\"06 pm\"}', '1897000771702299545.jpg', 'repairs-services', 0, 1, NULL, NULL, NULL, '600554456', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-11 12:59:05', '2023-12-11 12:59:05'),
(186, 0, 0, 124, 'Tech Distributor', 'tech-distributor', NULL, 'From Tech Distributor\r\n\"We are one of the leading Dell, HP, Fortinet, Lenovo, Apple and Cisco distributors in Dubai, UAE with an immense workforce experienced to deal with international markets.\"', 6, 'Clover Bay Tower - Office No 505 - Business Bay - Dubai', '25.1888125', '55.2696875', '', '[]', '[]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"09 pm\",\"sun_open\":\"closed\",\"sun_close\":\"closed\",\"mon_open\":\"09 am\",\"mon_close\":\"09 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"09 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"09 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"09 pm\",\"fri_open\":\"09 am\",\"fri_close\":\"09 pm\"}', '2505185091702299722.jpeg', 'repairs-services', 0, 1, NULL, NULL, NULL, '0508622402', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-11 13:02:02', '2023-12-11 13:02:02'),
(187, 0, 0, 125, 'Najm Al Madinah Office Equipment & Stationery', 'najm-al-madinah-office-equipment-stationery', NULL, 'From Najm Al Madinah Office Equipment & Stationery\r\n\"Najm Al Madinah is a single port of call for business solutions, office equipments and stationery supplies that support and inspire minds in UAE. Through a combination of personal service, insights and expertise, what we do is help our customers take their thinking and ideas from vision to reality. We are dedicated to offering you just a little more in the way of service and competitive pricing, on all your day to day office essentials.\"', 5, 'Shop # 1 - Al Soor Street - behind Sharjah Central Post Office - Al Soor - Sharjah', '25.3515625', '55.3896875', '', '[]', '[]', NULL, '{\"sat_open\":\"08 am\",\"sat_close\":\"10 pm\",\"sun_open\":\"closed\",\"sun_close\":\"closed\",\"mon_open\":\"08 am\",\"mon_close\":\"10 pm\",\"tue_open\":\"08 am\",\"tue_close\":\"10 pm\",\"wed_open\":\"08 am\",\"wed_close\":\"10 pm\",\"thu_open\":\"08 am\",\"thu_close\":\"10 pm\",\"fri_open\":\"08 am\",\"fri_close\":\"10 pm\"}', '7057710261702299913.jpg', 'repairs-services', 0, 1, NULL, NULL, NULL, '0557216007', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-11 13:05:13', '2023-12-11 13:05:13'),
(188, 0, 0, 88, 'Fast HR Solutions', 'fast-hr-solutions', NULL, 'Browse 1,000+ Jobs. Choose City, Abudhabi, Ajman, Ajman, Dubai, Sharjah. Choose ... We\'ll quickly match you with the right freelancers find place best. 02. Search ...', 5, 'Rolla - Sharjah', '25.3650625', '55.39143749999999', '', '[]', '[]', NULL, '{\"sat_open\":\"08 am\",\"sat_close\":\"06 pm\",\"sun_open\":\"08 am\",\"sun_close\":\"06 pm\",\"mon_open\":\"08 am\",\"mon_close\":\"06 pm\",\"tue_open\":\"08 am\",\"tue_close\":\"06 pm\",\"wed_open\":\"08 am\",\"wed_close\":\"06 pm\",\"thu_open\":\"08 am\",\"thu_close\":\"06 pm\",\"fri_open\":\"closed\",\"fri_close\":\"closed\"}', '17487604381702300131.jpg', 'repairs-services', 0, 1, NULL, NULL, NULL, '0558876331', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-11 13:08:51', '2023-12-11 13:08:51'),
(189, 0, 0, 60, 'Shababeek Restaurant', 'shababeek-restaurant', NULL, 'From Shababeek Restaurant\r\n\"Shababeek Lebanese restaurant\"', 5, 'Block ‘B’, Big Wheel Side - Al Qasba - Sharjah', '25.3224375', '55.3760625', '', '[\"Wheelchair-Accessible\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"08 am\",\"sat_close\":\"11 pm\",\"sun_open\":\"08 am\",\"sun_close\":\"11 pm\",\"mon_open\":\"08 am\",\"mon_close\":\"11 pm\",\"tue_open\":\"08 am\",\"tue_close\":\"11 pm\",\"wed_open\":\"08 am\",\"wed_close\":\"11 pm\",\"thu_open\":\"08 am\",\"thu_close\":\"11 pm\",\"fri_open\":\"08 am\",\"fri_close\":\"11 pm\"}', '10220452291702365212.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '065540444', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-12 07:13:32', '2023-12-12 07:13:32'),
(190, 0, 0, 60, 'Mama\'s Bites Lebanese Restaurant in Dubai, United Arab Emirates', 'mamas-bites-lebanese-restaurant-in-dubai-united-arab-emirates', NULL, 'From Mama\'s Bites Lebanese Restaurant in Dubai, United Arab Emirates\r\n\"Welcome to Mama’s Bite home. its an extension of your dining room, where you, your family and friends gather to build unforgettable memories. As you step in, you’ll be sharing my family’s memories that made Mama’s Bite concept possible.\"', 6, 'Central Park DIFC - Dubai', '25.2068125', '55.2750625', '', '[\"Wheelchair-Accessible\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"08 am\",\"sat_close\":\"12 am\",\"sun_open\":\"08 am\",\"sun_close\":\"12 am\",\"mon_open\":\"08 am\",\"mon_close\":\"12 am\",\"tue_open\":\"08 am\",\"tue_close\":\"12 am\",\"wed_open\":\"08 am\",\"wed_close\":\"12 am\",\"thu_open\":\"08 am\",\"thu_close\":\"12 am\",\"fri_open\":\"08 am\",\"fri_close\":\"12 am\"}', '8368463441702365531.jpg', 'restaurants-cafe', 0, 1, NULL, 'https://www.mamasbites.ae/menu/', NULL, '042666262', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-12 07:18:51', '2023-12-12 07:18:51'),
(191, 0, 0, 60, 'Mosaic Restaurant', 'mosaic-restaurant', NULL, 'From Mosaic Restaurant\r\n\"Lebanese Restaurant and Catering Services in Abu Dhabi. Mosaic Restaurant recognizes that people expect the best in Abu Dhabi, so that\'s what we offer. Our Lebanese food is award-winning and delicious. Come enjoy breakfast, lunch, or dinner at our beautiful terrace at the best Lebanese Restaurant around.\"', 7, 'Vision Towers, Al-Najda Street Facing Al-Sultan Bakery, Al-Najda - Abu Dhabi', '24.4889375', '54.3739375', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"07 am\",\"sat_close\":\"11 pm\",\"sun_open\":\"07 am\",\"sun_close\":\"11 pm\",\"mon_open\":\"07 am\",\"mon_close\":\"11 pm\",\"tue_open\":\"07 am\",\"tue_close\":\"11 pm\",\"wed_open\":\"07 am\",\"wed_close\":\"11 pm\",\"thu_open\":\"07 am\",\"thu_close\":\"11 pm\",\"fri_open\":\"07 am\",\"fri_close\":\"11 pm\"}', '5771729391702365948.jpg', 'restaurants-cafe', 0, 1, NULL, 'https://mosaicrestaurant.com/', NULL, '026226122', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-12 07:25:48', '2023-12-12 07:25:48'),
(192, 0, 0, 60, 'Al Terrase Restaurant & Coffee Shop', 'al-terrase-restaurant-coffee-shop', NULL, 'Menu - Check out the Menu of Al Terrace Restaurant & Cafe Ajman Corniche, Ajman at Zomato for Delivery, Dine-out or Takeaway.', 4, 'Al Rumailah 3 - Ajman Corniche', '25.4003125', '55.4259375', '', '[\"Wheelchair-Accessible\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"08 am\",\"sat_close\":\"02 am\",\"sun_open\":\"08 am\",\"sun_close\":\"02 am\",\"mon_open\":\"08 am\",\"mon_close\":\"02 am\",\"tue_open\":\"08 am\",\"tue_close\":\"02 am\",\"wed_open\":\"08 am\",\"wed_close\":\"02 am\",\"thu_open\":\"08 am\",\"thu_close\":\"02 am\",\"fri_open\":\"08 am\",\"fri_close\":\"02 am\"}', '1840910961702366347.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '0555841098', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-12 07:32:27', '2023-12-12 07:32:27'),
(193, 0, 0, 61, 'Gazebo Restaurant', 'gazebo-restaurant', NULL, 'From Gazebo Restaurant\r\n\"The pioneers of \'Dum Pukht\' biryani in the UAE, and home of the finest Indian fare, Gazebo is acclaimed for exquisite delicacies, authentically prepared using age-old recipes from the Mughal era. With an impressively extensive menu of luscious kababs, sumptuous curries, aromatic biryanis and more, there\'s something to satisfy every gourmand.\"', 6, 'G Tower - Business Bay, Ground Level, Bay Avenue, Executive - Dubai', '25.1913125', '55.2669375', '', '[\"Wheelchair-Accessible\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"11 am\",\"sat_close\":\"12 am\",\"sun_open\":\"11 am\",\"sun_close\":\"12 am\",\"mon_open\":\"11 am\",\"mon_close\":\"12 am\",\"tue_open\":\"11 am\",\"tue_close\":\"12 am\",\"wed_open\":\"11 am\",\"wed_close\":\"12 am\",\"thu_open\":\"11 am\",\"thu_close\":\"12 am\",\"fri_open\":\"11 am\",\"fri_close\":\"12 am\"}', '6845476231702368602.jpg', 'restaurants-cafe', 0, 1, NULL, 'https://www.gazebo.ae/', NULL, '043444088', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-12 08:10:02', '2023-12-12 08:10:02'),
(194, 0, 0, 61, 'Kulcha King Restaurant', 'kulcha-king-restaurant', NULL, 'From Kulcha King Restaurant\r\n\"Welcome to the home of the world’s best Kulcha. A true explosion of flavours! Our yeast free home made dough, layered with the goodness of butter, our house blend of herbs and spices, stuffed with a choice of scrumptious fillings, all made by hand...  More', 5, 'Next to Nesto Sharjah, King Faisal Road Near Suzuki Car Showroom - Al Qasimia - Sharjah', '25.3379375', '55.3896875', '', '[\"Wheelchair-Accessible\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"11 am\",\"sat_close\":\"11 pm\",\"sun_open\":\"11 am\",\"sun_close\":\"11 pm\",\"mon_open\":\"11 am\",\"mon_close\":\"11 pm\",\"tue_open\":\"11 am\",\"tue_close\":\"11 pm\",\"wed_open\":\"11 am\",\"wed_close\":\"11 pm\",\"thu_open\":\"11 am\",\"thu_close\":\"11 pm\",\"fri_open\":\"11 am\",\"fri_close\":\"11 pm\"}', '21145274421702368839.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '0565333781', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-12 08:13:59', '2023-12-12 08:13:59'),
(195, 0, 0, 61, 'Curry Chatti Restaurant Ajman', 'curry-chatti-restaurant-ajman', NULL, 'From Curry Chatti Restaurant Ajman\r\n\"Curry Chatti Restaurants Ajman are well known with a substantial gathering of people including families, kids, seniors and business experts. Our benevolent condition is perfect for praising unique events, facilitating a business lunch or assembling for a flavorful dinner with loved ones.The Best Biryani in Town We are best known for the following: Top restaurants in Ajman, best indian restaurants in Ajman, the indian restaurant near me, with flovaour of south indian restaurants near me, you may also call best south indian restaurants Dubai, best south indian meals in Dubai biryani in Ajman, restaurants in Ajman Dubai, kerala restaurants near me, kerala restaurants in Dubai\"', 4, 'Behind Day to Day Beside bus station - Ajman', '25.4096875', '55.4446875', '', '[\"Wheelchair-Accessible\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"06 am\",\"sat_close\":\"02 am\",\"sun_open\":\"06 am\",\"sun_close\":\"02 am\",\"mon_open\":\"06 am\",\"mon_close\":\"02 am\",\"tue_open\":\"06 am\",\"tue_close\":\"02 am\",\"wed_open\":\"06 am\",\"wed_close\":\"02 am\",\"thu_open\":\"06 am\",\"thu_close\":\"02 am\",\"fri_open\":\"06 am\",\"fri_close\":\"02 am\"}', '18648522201702369056.png', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '067462825', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-12 08:17:36', '2023-12-12 08:17:36'),
(196, 0, 0, 61, 'India Palace Restaurant', 'india-palace-restaurant', NULL, 'From India Palace Restaurant\r\n\"Hosting a variety of distinguished Indian specialties, The India Palace experience was born in 1997 in the UAE. The Menu combines Indian cuisine and a rich heritage of Mughlai hospitality, offering a tempting selection of delicious, wholesome food and beverages served in a warm and sophisticated atmosphere. The strict focus on quality control and the authenticity of the recipes as well as all the ingredients used for preparation, is what sets India Palace apart.\"', 7, 'Level 3, Mushrif Mall - Al Mushrif - Abu Dhabi', '24.4346875', '54.4131875', '', '[\"Wheelchair-Accessible\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"11 am\",\"sat_close\":\"11 pm\",\"sun_open\":\"11 am\",\"sun_close\":\"11 pm\",\"mon_open\":\"11 am\",\"mon_close\":\"11 pm\",\"tue_open\":\"11 am\",\"tue_close\":\"11 pm\",\"wed_open\":\"11 am\",\"wed_close\":\"11 pm\",\"thu_open\":\"11 am\",\"thu_close\":\"11 pm\",\"fri_open\":\"11 am\",\"fri_close\":\"11 pm\"}', '3940774371702369436.jpg', 'restaurants-cafe', 0, 1, NULL, 'https://order.matam.ae/ipr', NULL, '024472420', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-12 08:23:56', '2023-12-12 08:23:56'),
(197, 0, 0, 63, 'Tike Taste Of Istanbul Restaurant', 'tike-taste-of-istanbul-restaurant', NULL, 'Already established in Turkey, Greece, Ukraine and Saudi Arabia, Tike has now opened two restaurants in UAE including JBR where they serve .', 5, '79XF+7W2 - Second Floor, Sahara Center - Al Nahda St - Sharjah ,shahara center', '25.2981375', '55.3747656', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"11 pm\",\"sun_open\":\"09 am\",\"sun_close\":\"11 pm\",\"mon_open\":\"09 am\",\"mon_close\":\"11 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"11 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"11 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"11 pm\",\"fri_open\":\"09 am\",\"fri_close\":\"11 pm\"}', '11870059191702371862.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '065569951', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-12 09:04:22', '2023-12-12 09:04:22'),
(199, 0, 0, 63, 'MADO Restaurant مطعم مادو City Centre Ajman', 'mado-restaurant-mtaam-mado-city-centre-ajman', NULL, 'From MADO Restaurant مطعم مادو City Centre Ajman\r\n\"Mado, specializes in Turkish food, desserts and ice cream. The extensive menu includes authentic Turkish breakfast dishes, freshly baked Simit and desserts, an array of main dishes, and 100% natural milk ice cream\"', 4, 'City Centre - Al Jerf 2 - Ajman', '25.4003125', '55.4785625', '', '[\"Wheelchair-Accessible\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"11 pm\",\"sun_open\":\"09 am\",\"sun_close\":\"11 pm\",\"mon_open\":\"09 am\",\"mon_close\":\"11 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"11 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"11 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"11 pm\",\"fri_open\":\"09 am\",\"fri_close\":\"11 pm\"}', '1023420381702372581.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '067499929', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-12 09:16:21', '2023-12-12 09:16:21'),
(200, 0, 0, 63, 'Bosporus', 'bosporus', NULL, '\"With six marvelous restaurants and more to come in the key destinations of the UAE, we are expanding further to deliver the delicious and authentic Turkish food experience that will transport our guests to the streets of Istanbul, without ever leaving UAE.\"', 7, 'Abu Dhabi Mall, Level 1 - Al Zahiyah - Abu Dhabi', '24.4956875', '54.3839375', '', '[\"Wheelchair-Accessible\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"08 am\",\"sat_close\":\"11 pm\",\"sun_open\":\"08 am\",\"sun_close\":\"11 pm\",\"mon_open\":\"08 am\",\"mon_close\":\"11 pm\",\"tue_open\":\"08 am\",\"tue_close\":\"11 pm\",\"wed_open\":\"08 am\",\"wed_close\":\"11 pm\",\"thu_open\":\"08 am\",\"thu_close\":\"11 pm\",\"fri_open\":\"08 am\",\"fri_close\":\"11 pm\"}', '6727108241702372867.jpg', 'restaurants-cafe', 0, 1, NULL, 'https://thebosporus.com/', NULL, '025755777', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-12 09:21:07', '2023-12-12 09:21:07'),
(201, 0, 0, 62, 'Mongolian Chinese Restaurant', 'mongolian-chinese-restaurant', NULL, 'Mongolian Chinese Restaurant Abu Dhabi, Al Mushrif; View reviews, menu, contact, location, and more for Mongolian Chinese Restaurant Restaurant.', 7, 'Opposite abudhabi mall - Block A,Khalifa residential complex - 10th St - Abu Dhabi', '24.4940625', '54.3831875', '', '[\"Wheelchair-Accessible\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"12 am\",\"sat_close\":\"12 am\",\"sun_open\":\"12 am\",\"sun_close\":\"12 am\",\"mon_open\":\"12 am\",\"mon_close\":\"12 am\",\"tue_open\":\"12 am\",\"tue_close\":\"12 am\",\"wed_open\":\"12 am\",\"wed_close\":\"12 am\",\"thu_open\":\"12 am\",\"thu_close\":\"12 am\",\"fri_open\":\"12 am\",\"fri_close\":\"12 am\"}', '6488466151702373058.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '026451500', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-12 09:24:18', '2023-12-12 09:24:18'),
(202, 0, 0, 62, 'Wardat Beijing Restaurant', 'wardat-beijing-restaurant', NULL, 'Updates from Wardat Beijing Restaurant', 5, 'Al Majarra - Al Nabba - Sharjah', '25.3636875', '55.3906875', '', '[\"Wheelchair-Accessible\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"11 am\",\"sat_close\":\"12 am\",\"sun_open\":\"11 am\",\"sun_close\":\"12 am\",\"mon_open\":\"11 am\",\"mon_close\":\"12 am\",\"tue_open\":\"11 am\",\"tue_close\":\"12 am\",\"wed_open\":\"11 am\",\"wed_close\":\"12 am\",\"thu_open\":\"11 am\",\"thu_close\":\"12 am\",\"fri_open\":\"11 am\",\"fri_close\":\"12 am\"}', '4604899821702379265.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '065647551', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-12 11:07:45', '2023-12-12 11:21:21'),
(203, 0, 0, 62, 'Chin Chin Ajman', 'chin-chin-ajman', NULL, 'From Chin Chin Ajman\r\n\"“A young at heart, quick serve International Chinese cuisine concept, In short, a no frills, no hole in the pocket choice. Call it smart Chinese…. We have created a cult following in UAE. We pride ourselves in producing quality Chinese food under strict hygiene standards with reasonable prices and huge portions, our food speaks for itself!”\"', 4, 'Al Safia - Al Ittihad St - الصفيا - Ajman', '25.4041875', '55.47831249999999', '', '[\"Parking\",\"Breakfast\"]', '[\"fas fa-parking\",\"fas fa-wine-glass-alt\"]', NULL, '{\"sat_open\":\"11 am\",\"sat_close\":\"03 am\",\"sun_open\":\"11 am\",\"sun_close\":\"03 am\",\"mon_open\":\"11 am\",\"mon_close\":\"03 am\",\"tue_open\":\"11 am\",\"tue_close\":\"03 am\",\"wed_open\":\"11 am\",\"wed_close\":\"03 am\",\"thu_open\":\"11 am\",\"thu_close\":\"03 am\",\"fri_open\":\"11 am\",\"fri_close\":\"03 am\"}', '17620539811702380400.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '80024462446', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-12 11:26:40', '2023-12-12 11:26:40'),
(204, 0, 0, 64, 'The Address moroccan', 'the-address-moroccan', NULL, 'From The Address moroccan\r\n\"مطعم وكافيه سياحي. يحبه العائلات ذو جلسات راقيه واطلاله خلابه على خور الزورا. تجد عنده ارخص الأسعار وبمتناول الجميع\"', 4, 'الزورا - Ajman', '25.4279375', '55.4639375', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"02 am\",\"sun_open\":\"09 am\",\"sun_close\":\"02 am\",\"mon_open\":\"09 am\",\"mon_close\":\"02 am\",\"tue_open\":\"09 am\",\"tue_close\":\"02 am\",\"wed_open\":\"09 am\",\"wed_close\":\"02 am\",\"thu_open\":\"09 am\",\"thu_close\":\"03 am\",\"fri_open\":\"09 am\",\"fri_close\":\"02 am\"}', '12291791101702380763.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '0554373004', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-12 11:32:43', '2023-12-12 11:32:43'),
(205, 0, 0, 64, 'Al Tagine Al Magrebi Restaurant', 'al-tagine-al-magrebi-restaurant', NULL, 'Al Tagine Al Magrebi Restaurant ⭐ Al Majaz 1, Sharjah | Restaurants Sharjah | All details in one click. | ⏰hours, ☎️phone number, address and map.', 5, '89PQ+X2P - Al Majaz 1 - Al Majaz - Sharjah', '25.3374625', '55.3875781', '', '[\"Breakfast\",\"Cafe\"]', '[\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"12 am\",\"sun_open\":\"09 am\",\"sun_close\":\"12 am\",\"mon_open\":\"09 am\",\"mon_close\":\"12 am\",\"tue_open\":\"09 am\",\"tue_close\":\"12 am\",\"wed_open\":\"09 am\",\"wed_close\":\"12 am\",\"thu_open\":\"09 am\",\"thu_close\":\"12 am\",\"fri_open\":\"09 am\",\"fri_close\":\"12 am\"}', '16359752351702381116.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '065501234', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-12 11:38:36', '2023-12-12 11:38:36'),
(206, 0, 0, 64, 'Meknes Moroccan Restaurant', 'meknes-moroccan-restaurant', NULL, 'Meknes Restaurant Abu Dhabi, Tourist Club Area (Al Zahiyah); View reviews, menu, contact, location, and more for Meknes Restaurant Restaurant.', 7, 'Shop No.2, Mina Rd - Abu Dhabi', '24.5021875', '54.3738125', '', '[\"Wheelchair-Accessible\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"10 am\",\"sat_close\":\"12 am\",\"sun_open\":\"10 am\",\"sun_close\":\"12 am\",\"mon_open\":\"10 am\",\"mon_close\":\"12 am\",\"tue_open\":\"10 am\",\"tue_close\":\"12 am\",\"wed_open\":\"10 am\",\"wed_close\":\"12 am\",\"thu_open\":\"10 am\",\"thu_close\":\"12 am\",\"fri_open\":\"10 am\",\"fri_close\":\"12 am\"}', '12273487801702381346.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '026778813', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-12 11:42:26', '2023-12-12 11:42:26'),
(207, 0, 0, 65, 'Dai Pai Dong Restaurant', 'dai-pai-dong-restaurant', NULL, 'From Dai Pai Dong Restaurant\r\n\"Immerse yourself in the dynamic world of Dai Pai Dong, a culinary gem nestled where Rosewood Abu Dhabi meet Galleria Mall. Drawing inspiration from the vibrant street food culture, we offer a captivating dining experience that showcases the rich flavors of Cantonese flavors with a contemporary twist. Indulge in an array of mouthwatering dishes that showcase the diverse flavors and textures. From delectable dim sum and flavorful noodles to succulent barbecued meats and fragrant stir-fries, each dish is thoughtfully crafted to tantalize your taste buds. Discover the passion, creativity, and authenticity that define our menu, and allow us to transport you to the bustling streets of Hong Kong through every bite.\"', 7, 'Rosewood Abu Dhabi - Level B3 - Galleria Shopping Mall - Abu Dhabi', '24.4995625', '54.38756249999999', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"12 pm\",\"sat_close\":\"12 am\",\"sun_open\":\"12 pm\",\"sun_close\":\"11 pm\",\"mon_open\":\"12 pm\",\"mon_close\":\"12 am\",\"tue_open\":\"12 pm\",\"tue_close\":\"12 am\",\"wed_open\":\"12 pm\",\"wed_close\":\"12 am\",\"thu_open\":\"12 pm\",\"thu_close\":\"12 am\",\"fri_open\":\"12 pm\",\"fri_close\":\"12 am\"}', '4940824581702382676.jpg', 'restaurants-cafe', 0, 1, NULL, 'http://www.rosewoodhotels.com/en/abu-dhabi/dining/Dai-Pai-Dong', NULL, '028135588', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-12 12:04:36', '2023-12-12 12:04:36'),
(208, 0, 0, 65, 'Sushi Station Sharjah', 'sushi-station-sharjah', NULL, 'Sushi Station Restaurant in University of Sharjah, UAE · Most Selling · Sushi · Indomie And Rice · Salads.', 5, '8F8G+M6Q - Muwaileh Commercial - Sharjah', '25.3167125', '55.4756094', '', '[\"Parking\"]', '[\"fas fa-parking\"]', NULL, '{\"sat_open\":\"12 pm\",\"sat_close\":\"12 am\",\"sun_open\":\"12 pm\",\"sun_close\":\"12 am\",\"mon_open\":\"12 pm\",\"mon_close\":\"12 am\",\"tue_open\":\"12 pm\",\"tue_close\":\"12 am\",\"wed_open\":\"12 pm\",\"wed_close\":\"12 am\",\"thu_open\":\"12 pm\",\"thu_close\":\"12 am\",\"fri_open\":\"12 pm\",\"fri_close\":\"12 am\"}', '4440716671702383426.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '0564109390', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-12 12:17:06', '2023-12-12 12:17:06');
INSERT INTO `listings` (`id`, `user_id`, `admin_id`, `category_id`, `name`, `slug`, `designation`, `description`, `location_id`, `real_address`, `latitude`, `longitude`, `gmap_address`, `amenities`, `amenity_icons`, `distance`, `schedules`, `photo`, `type`, `is_feature`, `status`, `expire_date`, `website`, `email`, `phone_number`, `facebook`, `twitter`, `linkedin`, `listing_video_provider`, `listing_video`, `r_price`, `r_bed`, `r_baths`, `r_square`, `r_property_type`, `car_price`, `car_fuel_type`, `car_manufacture_year`, `car_engine_capacity`, `car_mileage`, `is_verify`, `is_toprated`, `food_type`, `highlight_type`, `views`, `created_at`, `updated_at`) VALUES
(209, 0, 0, 65, 'Mizuki food box restaurant', 'mizuki-food-box-restaurant', NULL, 'yasmeen tower B shop no.8 -ajman\"', 4, 'Yasmeen Tower B - Ajman', '25.3954375', '55.4834375', '', '[\"Parking\",\"Cafe\"]', '[\"fas fa-parking\",0]', NULL, '{\"sat_open\":\"11 am\",\"sat_close\":\"12 am\",\"sun_open\":\"11 am\",\"sun_close\":\"12 am\",\"mon_open\":\"11 am\",\"mon_close\":\"12 am\",\"tue_open\":\"11 am\",\"tue_close\":\"12 am\",\"wed_open\":\"11 am\",\"wed_close\":\"12 am\",\"thu_open\":\"11 am\",\"thu_close\":\"12 am\",\"fri_open\":\"11 am\",\"fri_close\":\"12 am\"}', '19896423931702383683.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '067420513', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-12 12:21:23', '2023-12-12 12:21:23'),
(210, 0, 0, 66, 'Hot Foods MultiCuisine Restaurant', 'hot-foods-multicuisine-restaurant', NULL, 'From Hot Foods MultiCuisine Restaurant\r\n\"HotFoods Multicuisine Restaurent is located near thumbay hospital Ajman breakfast,dosa,masala dosa,idly,vada,biriyani varieties,kerala meals,naadan food,kerala snacks arabian grill,mix grill,Healthy Juices, Fresh Juices, Special Juices, Mix Juices, Crush Milkshake, Mojito Drinks, Special Smoothies, Passion Mix, Falooda, Grill Burger, Fresh Burger, Sandwiches, Club Sandwiches, Wrap Sanwiches, Broasted Chicken, Biryani, Shawarma, Tea & Coffee, Breakfast,thalassery dum biriyani\"\"', 4, 'Nuaimiya St - near Ramez center - Al Nuaimia 1 - Ajman', '25.3785625', '55.45968749999999', '', '[\"Wheelchair-Accessible\",\"Parking\"]', '[\"fas fa-moon\",\"fas fa-parking\"]', NULL, '{\"sat_open\":\"06 am\",\"sat_close\":\"02 am\",\"sun_open\":\"06 am\",\"sun_close\":\"02 am\",\"mon_open\":\"06 am\",\"mon_close\":\"02 am\",\"tue_open\":\"06 am\",\"tue_close\":\"02 am\",\"wed_open\":\"06 am\",\"wed_close\":\"02 am\",\"thu_open\":\"06 am\",\"thu_close\":\"02 am\",\"fri_open\":\"06 am\",\"fri_close\":\"02 am\"}', '17203234521702385950.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '067414949', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-12 12:59:10', '2023-12-12 12:59:10'),
(211, 0, 0, 66, 'Five Star Restaurant', 'five-star-restaurant', NULL, 'Do yourself a favour and visit this lovely Restaurant. The service is unmatched. The food is absolutely amazing. Everything we tasted was mouth melting', 5, 'Buheira Corniche Road - Sharjah', '25.3331875', '55.3754375', '', '[\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"10 am\",\"sat_close\":\"11 pm\",\"sun_open\":\"10 am\",\"sun_close\":\"11 pm\",\"mon_open\":\"10 am\",\"mon_close\":\"11 pm\",\"tue_open\":\"10 am\",\"tue_close\":\"11 pm\",\"wed_open\":\"10 am\",\"wed_close\":\"11 pm\",\"thu_open\":\"10 am\",\"thu_close\":\"11 pm\",\"fri_open\":\"10 am\",\"fri_close\":\"11 pm\"}', '10320892191702387322.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '065308030', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-12 13:22:02', '2023-12-12 13:22:02'),
(212, 0, 0, 66, 'Best Food International', 'best-food-international', NULL, 'International Best Food Abu Dhabi, Tourist Club Area (Al Zahiyah); View reviews, menu, contact, location, and more for International Best Food Restaurant.', 7, '17 شارع - اللَّمَّاظ - Abu Dhabi', '24.4958125', '54.3750625', '', '[\"Parking\"]', '[\"fas fa-parking\"]', NULL, '{\"sat_open\":\"06 am\",\"sat_close\":\"01 am\",\"sun_open\":\"06 am\",\"sun_close\":\"01 am\",\"mon_open\":\"06 am\",\"mon_close\":\"01 am\",\"tue_open\":\"06 am\",\"tue_close\":\"01 am\",\"wed_open\":\"06 am\",\"wed_close\":\"01 am\",\"thu_open\":\"06 am\",\"thu_close\":\"01 am\",\"fri_open\":\"06 am\",\"fri_close\":\"01 am\"}', '4877229661702387508.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '026660316', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-12 13:25:08', '2023-12-12 13:25:08'),
(213, 0, 0, 67, 'Sweet Greens Restaurant (Reem Island, Najmat Area)', 'sweet-greens-restaurant-reem-island-najmat-area', NULL, 'From Sweet Greens Restaurant (Reem Island, Najmat Area)\r\n\"We are serving the most tasteful, freshest and healthiest food!\"', 7, 'Al Reem Bay Towers, Tower A, Reem Island - Abu Dhabi', '24.4835625', '54.4053125', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"06 am\",\"sat_close\":\"11 pm\",\"sun_open\":\"06 am\",\"sun_close\":\"11 pm\",\"mon_open\":\"06 am\",\"mon_close\":\"11 pm\",\"tue_open\":\"06 am\",\"tue_close\":\"11 pm\",\"wed_open\":\"06 am\",\"wed_close\":\"11 pm\",\"thu_open\":\"06 am\",\"thu_close\":\"11 pm\",\"fri_open\":\"06 am\",\"fri_close\":\"11 pm\"}', '5126168561702388321.jpg', 'restaurants-cafe', 0, 1, NULL, 'http://www.sweetgreens.ae/', NULL, '0585978455', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-12 13:38:41', '2023-12-12 13:38:41'),
(214, 0, 0, 67, 'Saarangaa Bhojan Shala', 'saarangaa-bhojan-shala', NULL, 'Saarangaa Bhojan Shala Sharjah, Al Khan; View reviews, menu, contact, location, and more for Saarangaa Bhojan Shala Restaurant.', 5, '1 S108 - Al Majaz 3 - Sharjah', '25.3299375', '55.3709375', '', '[\"Wheelchair-Accessible\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"07 am\",\"sat_close\":\"11 pm\",\"sun_open\":\"07 am\",\"sun_close\":\"11 pm\",\"mon_open\":\"07 am\",\"mon_close\":\"11 pm\",\"tue_open\":\"07 am\",\"tue_close\":\"11 pm\",\"wed_open\":\"07 am\",\"wed_close\":\"11 pm\",\"thu_open\":\"07 am\",\"thu_close\":\"11 pm\",\"fri_open\":\"07 am\",\"fri_close\":\"11 pm\"}', '15512303531702388834.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '065266066', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-12 13:47:14', '2023-12-12 13:47:14'),
(215, 0, 0, 67, 'Bikaner Restaurant pure veg. Ajman', 'bikaner-restaurant-pure-veg-ajman', NULL, 'Bikaner Restaurant Ajman, Ajman Industrial Area; View reviews, menu, contact, location, and more for Bikaner Restaurant Restaurant.', 4, '9FFH+XJ6 https://maps.app.goo.gl - Hassan Bin Haitham St - Ajman Industrial 2 - Ajman', '25.3749125', '55.4790156', '', '[\"Wheelchair-Accessible\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"07 am\",\"sat_close\":\"11 pm\",\"sun_open\":\"07 am\",\"sun_close\":\"11 pm\",\"mon_open\":\"07 am\",\"mon_close\":\"11 pm\",\"tue_open\":\"07 am\",\"tue_close\":\"11 pm\",\"wed_open\":\"07 am\",\"wed_close\":\"11 pm\",\"thu_open\":\"07 am\",\"thu_close\":\"11 pm\",\"fri_open\":\"07 am\",\"fri_close\":\"11 pm\"}', '11970998651702452387.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '0552816161', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-13 07:26:27', '2023-12-13 07:26:27'),
(216, 0, 0, 68, 'Cuts N Gains', 'cuts-n-gains', NULL, 'From Cuts N Gains\r\n\"Cuts n Gains is introduced to you by a professional coach and pro bodybuilder Tony Ghazal who been helping hundreds of people to change their life style and improve their health. He studied nutrition at anatomy and practiced coaching since the age of 18. He changed and helped more than 100+ clients to reach their goals\"', 6, 'Kitchen Park K8, The Residences - Business Bay, Damac - Dubai', '25.1925625', '55.2733125', '', '[\"Wheelchair-Accessible\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"closed\",\"sat_close\":\"closed\",\"sun_open\":\"09 am\",\"sun_close\":\"09 pm\",\"mon_open\":\"09 am\",\"mon_close\":\"09 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"09 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"09 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"09 pm\",\"fri_open\":\"09 am\",\"fri_close\":\"09 pm\"}', '16180824701702452663.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '0505038696', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-13 07:31:03', '2023-12-13 07:31:03'),
(217, 0, 0, 68, 'Healthy Choice Restaurant', 'healthy-choice-restaurant', NULL, 'Updates from Healthy Choice Restaurant مطعم الاختيار الصحي\r\nView previous updates on Google', 5, 'Wasit St - Samnan - Halwan Suburb - Sharjah', '25.3346875', '55.4243125', '', '[\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"08 am\",\"sat_close\":\"12 am\",\"sun_open\":\"08 am\",\"sun_close\":\"12 am\",\"mon_open\":\"08 am\",\"mon_close\":\"12 am\",\"tue_open\":\"08 am\",\"tue_close\":\"12 am\",\"wed_open\":\"08 am\",\"wed_close\":\"12 am\",\"thu_open\":\"08 am\",\"thu_close\":\"12 am\",\"fri_open\":\"08 am\",\"fri_close\":\"12 am\"}', '1455787991702453103.jpg', 'restaurants-cafe', 0, 1, NULL, 'https://healthychoice.ae/', NULL, '0553675551', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-13 07:38:23', '2023-12-13 07:38:23'),
(218, 0, 0, 68, 'Be Fit Healthy Meals', 'be-fit-healthy-meals', NULL, 'From Be Fit Healthy Meals\r\n\"Food is the most important thing in our lives besides water. Moreover, eating healthy means eating a variety of food that gives you the nutrients you need to maintain your health, feel good, and have energy. Be Fit Healthy Restaurant have all it takes when it comes to eating healthy.\"', 7, 'Al Nahyan - E25 - Abu Dhabi', '24.4636875', '54.3859375', '', '[\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"01 am\",\"sun_open\":\"09 am\",\"sun_close\":\"01 am\",\"mon_open\":\"07 am\",\"mon_close\":\"12 am\",\"tue_open\":\"07 am\",\"tue_close\":\"12 am\",\"wed_open\":\"07 am\",\"wed_close\":\"12 am\",\"thu_open\":\"07 am\",\"thu_close\":\"12 am\",\"fri_open\":\"09 am\",\"fri_close\":\"01 am\"}', '9536129201702453338.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '024466722', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-13 07:42:18', '2023-12-13 07:42:18'),
(219, 0, 0, 69, 'Malaga Restaurant', 'malaga-restaurant', NULL, 'From Malaga Restaurant\r\n\"Malaga The Lounge, is named after the Andalusian city because it has the Mediterranean mix of the food flavors and the look and the interior settings. In each and every dish, all our ingredients are freshly prepared with homemade feeling of love. This makes the flavors so unique.\"', 7, 'Al Zahiyah - E13 - Abu Dhabi ,jannah Burj Al Sarab Hotel', '24.5013125', '54.37318750000001', '', '[\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"02 am\",\"sun_open\":\"09 am\",\"sun_close\":\"02 am\",\"mon_open\":\"09 am\",\"mon_close\":\"02 am\",\"tue_open\":\"09 am\",\"tue_close\":\"02 am\",\"wed_open\":\"09 am\",\"wed_close\":\"02 am\",\"thu_open\":\"09 am\",\"thu_close\":\"02 am\",\"fri_open\":\"09 am\",\"fri_close\":\"02 am\"}', '5223659301702455439.jpg', 'restaurants-cafe', 0, 1, NULL, 'https://www.instagram.com/malagathelounge/?hl=en', NULL, '022016219', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-13 08:17:19', '2023-12-13 08:17:19'),
(220, 0, 0, 69, 'The Courtyard', 'the-courtyard', NULL, 'From The Courtyard\r\n\"Combining Arabic tradition with global multicultural tastes, The Courtyard offers a spectacular al fresco setting with a dining experience that masterfully blends colours, designs, tastes and sounds. Known for its delectable menu and flavourful hubbly-bubbly, The Courtyard offers more than just a good dining experience, a place where you can revel in the laid-back, serene ambience and spend an evening over tea or a wholesome meal. Terms & Conditions - Please share the booking confirmation number with all guests within your party. - Reservations are held for 15 minutes from the confirmed time. - Adult beverages are only served to guests above the age of 21 years. - Special offers must be addressed in advanced and confirmed prior to arrival.\"', 6, 'Manzil Downtown Sheikh Mohammed Bin Rashed Boulevard, Downtown Dubai, 114822 - Dubai', '25.1910625', '55.27756249999999', '', '[\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"12 pm\",\"sat_close\":\"03 am\",\"sun_open\":\"12 pm\",\"sun_close\":\"03 am\",\"mon_open\":\"12 pm\",\"mon_close\":\"03 am\",\"tue_open\":\"12 pm\",\"tue_close\":\"03 am\",\"wed_open\":\"12 pm\",\"wed_close\":\"03 am\",\"thu_open\":\"12 pm\",\"thu_close\":\"03 am\",\"fri_open\":\"12 pm\",\"fri_close\":\"03 am\"}', '5924062551702455727.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '044285888', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-13 08:22:07', '2023-12-13 08:22:07'),
(227, 0, 0, 69, 'Friends sheesha cafe/Restaurant & Snooker', 'friends-sheesha-caferestaurant-snooker', NULL, 'From Friends sheesha cafe/Restaurant & Snooker\r\n\"Located at the center of Ajman, Enjoy shisha with delicious food. Gaming zone and Snooker club are available at the premises. We offer outdoor catering for parties and hosts indoor parties as well.\"', 4, 'Sheikh Ammar Bin Humaid St - Al Hamidiya 1 - Ajman', '25.4023125', '55.50593749999999', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"12 am\",\"sat_close\":\"12 am\",\"sun_open\":\"12 am\",\"sun_close\":\"12 am\",\"mon_open\":\"12 am\",\"mon_close\":\"12 am\",\"tue_open\":\"12 am\",\"tue_close\":\"12 am\",\"wed_open\":\"12 am\",\"wed_close\":\"12 am\",\"thu_open\":\"12 am\",\"thu_close\":\"12 am\",\"fri_open\":\"12 am\",\"fri_close\":\"12 am\"}', '2818165161702456920.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '0521219995', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-13 08:42:00', '2023-12-13 08:42:00'),
(230, 0, 0, 70, 'Sammach Spot', 'sammach-spot', NULL, 'From Sammach Spot\r\n\"Discover Sammach Spot, where culinary excellence meets mesmerizing views of the iconic Dubai Fountain. Indulge in a tantalizing selection of fresh seafood and exquisite sushi creations. Call to reserve your table now and experience a truly unforgettable dining experience.\"', 6, 'Souk Al Bahar - Downtown Dubai - Dubai Mall - Dubai', '25.1953125', '55.27668749999999', '', '[\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"12 pm\",\"sat_close\":\"11 pm\",\"sun_open\":\"12 pm\",\"sun_close\":\"11 pm\",\"mon_open\":\"12 pm\",\"mon_close\":\"11 pm\",\"tue_open\":\"12 pm\",\"tue_close\":\"11 pm\",\"wed_open\":\"12 pm\",\"wed_close\":\"11 pm\",\"thu_open\":\"12 pm\",\"thu_close\":\"11 pm\",\"fri_open\":\"12 pm\",\"fri_close\":\"11 pm\"}', '7226887571702458432.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '044107552', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-13 09:07:12', '2023-12-13 09:07:12'),
(231, 0, 0, 70, 'Spice Grill Seafood Restaurant', 'spice-grill-seafood-restaurant', NULL, 'From Spice Grill Seafood Restaurant\r\n\"Asian Fusion Restaurant. Where seafood meets meat. Best Seafood Restaurant in the region.\"', 5, 'A2 Unit, Al Majaz Waterfront - Corniche St - Sharjah', '25.3286875', '55.3894375', '', '[\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"12 pm\",\"sat_close\":\"11 pm\",\"sun_open\":\"12 pm\",\"sun_close\":\"11 pm\",\"mon_open\":\"12 pm\",\"mon_close\":\"11 pm\",\"tue_open\":\"12 pm\",\"tue_close\":\"11 pm\",\"wed_open\":\"12 pm\",\"wed_close\":\"11 pm\",\"thu_open\":\"12 pm\",\"thu_close\":\"11 pm\",\"fri_open\":\"12 pm\",\"fri_close\":\"11 pm\"}', '6766881911702458778.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '067648167', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-13 09:12:58', '2023-12-13 09:12:58'),
(232, 0, 0, 70, 'Dampa Seafood Grill - Abu Dhabi', 'dampa-seafood-grill-abu-dhabi', NULL, 'From Dampa Seafood Grill - Abu Dhabi\r\n\"Dampa Seafood Grill™ Is a contemporary american-asian fusion seafood restaurant that provides a unique dining experience that is first of its kind in the GCC region\"', 7, 'Fatma Bint Mubarak Street - Al Danah - Zone 1 - Abu Dhabi', '24.4945625', '54.36593749999999', '', '[]', '[]', NULL, '{\"sat_open\":\"12 pm\",\"sat_close\":\"11 pm\",\"sun_open\":\"12 pm\",\"sun_close\":\"11 pm\",\"mon_open\":\"12 pm\",\"mon_close\":\"11 pm\",\"tue_open\":\"12 pm\",\"tue_close\":\"11 pm\",\"wed_open\":\"12 pm\",\"wed_close\":\"11 pm\",\"thu_open\":\"12 pm\",\"thu_close\":\"11 pm\",\"fri_open\":\"12 pm\",\"fri_close\":\"11 pm\"}', '1782492361702459660.jpg', 'restaurants-cafe', 0, 1, NULL, 'http://dampaseafoodgrill.com/', NULL, '026220096', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-13 09:27:40', '2023-12-13 09:27:40'),
(233, 0, 0, 71, 'Hookah Lounge', 'hookah-lounge', NULL, 'shisha.abudhabi · Mirage Marine Shisha rating: 10/10 Price: AED 55 @miragemarine is a · Itran Restaurant, Souq Qaryat Al Beri Shisha rating: 9/10 Price: AED.', 7, 'Wave Breaker, Opposite Mall, Marina - Abu Dhabi', '24.4719375', '54.3243125', '', '[\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"12 pm\",\"sat_close\":\"01 am\",\"sun_open\":\"12 pm\",\"sun_close\":\"01 am\",\"mon_open\":\"12 pm\",\"mon_close\":\"01 am\",\"tue_open\":\"closed\",\"tue_close\":\"closed\",\"wed_open\":\"12 pm\",\"wed_close\":\"01 am\",\"thu_open\":\"12 pm\",\"thu_close\":\"01 am\",\"fri_open\":\"12 pm\",\"fri_close\":\"01 am\"}', '2088096531702460198.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '026661179', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-13 09:36:38', '2023-12-13 09:36:38'),
(234, 0, 0, 71, 'Pipes Shisha Lounge and Cafe', 'pipes-shisha-lounge-and-cafe', NULL, 'From Pipes Shisha Lounge and Cafe\r\n\"Laid back Shisha lounge and Cafe, Burgers, Pizzas and an amazing list of drinks!\"', 6, 'Al Wadi Building - Shop no. 8 - Sheikh Zayed Rd - Al Wasl - Dubai', '25.2005625', '55.2669375', '', '[\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"11 am\",\"sat_close\":\"04 am\",\"sun_open\":\"11 am\",\"sun_close\":\"04 am\",\"mon_open\":\"11 am\",\"mon_close\":\"04 am\",\"tue_open\":\"11 am\",\"tue_close\":\"04 am\",\"wed_open\":\"11 am\",\"wed_close\":\"04 am\",\"thu_open\":\"11 am\",\"thu_close\":\"04 am\",\"fri_open\":\"11 am\",\"fri_close\":\"04 am\"}', '18308084131702467198.png', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '0567788387', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-13 11:33:18', '2023-12-13 11:33:18'),
(235, 0, 0, 71, 'Darb Alsultan cafe', 'darb-alsultan-cafe', NULL, 'Darb Alsultan cafe درب السلطان كافيه،‏: الصور والموقع وبيانات الاتصال وساعات العمل و✉ التقييمات من الزوار على Nicelocal.ae. تقييمات المطاعم والمقاهي في ...', 4, 'خلف يونايتد للتخفيضات - Sheikh Khalifa Bin Zayed St - Al Nuaimia 1 - Ajman', '25.3885625', '55.4678125', '', '[\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"12 am\",\"sat_close\":\"12 am\",\"sun_open\":\"12 am\",\"sun_close\":\"12 am\",\"mon_open\":\"12 am\",\"mon_close\":\"12 am\",\"tue_open\":\"12 am\",\"tue_close\":\"12 am\",\"wed_open\":\"12 am\",\"wed_close\":\"12 am\",\"thu_open\":\"12 am\",\"thu_close\":\"12 am\",\"fri_open\":\"12 am\",\"fri_close\":\"12 am\"}', '15287349951702467990.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '0561106783', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-13 11:46:30', '2023-12-13 11:46:30'),
(236, 0, 0, 90, 'The Espresso Lab', 'the-espresso-lab', NULL, 'From The Espresso Lab\r\n\"Exceptional Coffee is our Journey. Perfection is our Destination. P.S: We Don’t Serve Sugar or Espresso ToGo!\"', 6, 'Ground Floor, Unit 8, Building 7 - Dubai Design District - Dubai', '25.1888125', '55.2978125', '', '[\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"07 am\",\"sat_close\":\"11 pm\",\"sun_open\":\"07 am\",\"sun_close\":\"11 pm\",\"mon_open\":\"07 am\",\"mon_close\":\"11 pm\",\"tue_open\":\"07 am\",\"tue_close\":\"11 pm\",\"wed_open\":\"07 am\",\"wed_close\":\"11 pm\",\"thu_open\":\"07 am\",\"thu_close\":\"11 pm\",\"fri_open\":\"07 am\",\"fri_close\":\"11 pm\"}', '17981406251702470515.jpg', 'restaurants-cafe', 0, 1, NULL, 'http://www.theespressolab.com/', NULL, '0504211188', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-13 12:28:35', '2023-12-13 12:28:35'),
(237, 0, 0, 90, 'Tim Hortons - Abu Dhabi Mall', 'tim-hortons-abu-dhabi-mall', NULL, 'Tim Hortons Abu Dhabi, Abu Dhabi Mall, Tourist Club Area; View reviews, menu, contact, location, and more for Tim Hortons Restaurant.', 7, 'Mall Main Entrance - near Abu Dhabi - Al Zahiyah - Abu Dhabi', '24.4958125', '54.3826875', '', '[\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"07 am\",\"sat_close\":\"12 am\",\"sun_open\":\"07 am\",\"sun_close\":\"12 am\",\"mon_open\":\"07 am\",\"mon_close\":\"12 am\",\"tue_open\":\"07 am\",\"tue_close\":\"12 am\",\"wed_open\":\"07 am\",\"wed_close\":\"12 am\",\"thu_open\":\"07 am\",\"thu_close\":\"12 am\",\"fri_open\":\"07 am\",\"fri_close\":\"12 am\"}', '19735972561702470748.jpg', 'restaurants-cafe', 0, 1, NULL, 'http://www.timhortons.com/', NULL, '0526470857', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-13 12:32:28', '2023-12-13 12:32:28'),
(238, 0, 0, 90, 'One Degree Cafe Ajman', 'one-degree-cafe-ajman', NULL, 'Last Exit Al Khawaneej Dubai | Alwarqa Ajman | Musherief Alain | The Syde One Degree Winter 1 Degree Makes a Difference.', 4, 'الصفيا - Ajman', '25.4038125', '55.4781875', '', '[\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"07 am\",\"sat_close\":\"01 am\",\"sun_open\":\"07 am\",\"sun_close\":\"01 am\",\"mon_open\":\"07 am\",\"mon_close\":\"01 am\",\"tue_open\":\"07 am\",\"tue_close\":\"01 am\",\"wed_open\":\"07 am\",\"wed_close\":\"01 am\",\"thu_open\":\"07 am\",\"thu_close\":\"01 am\",\"fri_open\":\"07 am\",\"fri_close\":\"01 am\"}', '21159021311702471401.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '067797999', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-13 12:43:21', '2023-12-13 12:43:21'),
(239, 0, 0, 91, 'Al Reem Bakery LLC., Ajman', 'al-reem-bakery-llc-ajman', NULL, 'From Al Reem Bakery LLC., Ajman\r\n\"Your local Bakery since 1988. Serving You Deliciously Fresh Bread, Cakes & Confectionery All Day — Every day !\"', 4, 'Nuaimiah - Ajman', '25.3858125', '55.4410625', '', '[\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"05 am\",\"sat_close\":\"12 am\",\"sun_open\":\"05 am\",\"sun_close\":\"12 am\",\"mon_open\":\"05 am\",\"mon_close\":\"12 am\",\"tue_open\":\"05 am\",\"tue_close\":\"12 am\",\"wed_open\":\"05 am\",\"wed_close\":\"12 am\",\"thu_open\":\"05 am\",\"thu_close\":\"12 am\",\"fri_open\":\"05 am\",\"fri_close\":\"12 am\"}', '107497381702471939.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '0561589540', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-13 12:52:19', '2023-12-13 12:52:19'),
(240, 0, 0, 91, 'The Hummingbird Bakery', 'the-hummingbird-bakery', NULL, 'Famous in London for Red Velvet cupcakes, but now in Dubai! The Hummingbird Bakery is the home of authentic American cupcakes, cakes and baked goods .', 6, 'LG 106 - Financial Center Rd - Downtown Dubai - Dubai', '25.1959375', '55.2783125', '', '[\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"12 am\",\"sun_open\":\"09 am\",\"sun_close\":\"11 pm\",\"mon_open\":\"09 am\",\"mon_close\":\"11 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"11 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"11 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"12 am\",\"fri_open\":\"09 am\",\"fri_close\":\"12 am\"}', '6833137661702473327.jpg', 'restaurants-cafe', 0, 1, NULL, 'https://hummingbird-bakery-ae.myshopify.com/', NULL, '043882025', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-13 13:15:27', '2023-12-13 13:15:27'),
(241, 0, 0, 91, 'Al Mukhtar Bakery', 'al-mukhtar-bakery', NULL, 'From Al Mukhtar Bakery\r\n\"Al Mukhtar Bakery, a Lebanese bakery that started in Sharjah in 1981, is very famous for its huge variety of high quality freshly baked products. We serve Arabic bread, sandwich bread and rolls, Manakish & Fateer, Arabic sweets, cakes, croissants, pastries,fresh juice and drinks. We have two locations in Sharjah and one in Ajman. Get ready for Dubai branch!\"', 5, 'G Floor,Al Bustan Tower,Block B Al Etihad Road - Sharjah', '25.3085625', '55.37718750000001', '', '[\"Parking\",\"Cafe\"]', '[\"fas fa-parking\",0]', NULL, '{\"sat_open\":\"06 am\",\"sat_close\":\"04 am\",\"sun_open\":\"06 am\",\"sun_close\":\"04 am\",\"mon_open\":\"06 am\",\"mon_close\":\"04 am\",\"tue_open\":\"06 am\",\"tue_close\":\"04 am\",\"wed_open\":\"06 am\",\"wed_close\":\"04 am\",\"thu_open\":\"06 am\",\"thu_close\":\"04 am\",\"fri_open\":\"06 am\",\"fri_close\":\"04 am\"}', '11435378581702473616.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '065540234', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-13 13:20:16', '2023-12-13 13:20:16'),
(242, 0, 0, 92, 'Rock Pool Club', 'rock-pool-club', NULL, 'From Rock Pool Club\r\n\"Rock Pool Club, Dynamic exciting and energetic Nightclub. when you already out on the town and looking for a place to eat, drink & party we will be your place.\"', 7, 'Mohamed Bin Khalifa St - Al Danah - Zone 1 - Abu Dhabi', '24.4956875', '54.3665625', '', '[\"Wi-Fi Internet\",\"Parking\",\"Cafe\"]', '[\"fas fa-wifi\",\"fas fa-parking\",0]', NULL, '{\"sat_open\":\"03 pm\",\"sat_close\":\"03 am\",\"sun_open\":\"03 pm\",\"sun_close\":\"03 am\",\"mon_open\":\"03 pm\",\"mon_close\":\"03 am\",\"tue_open\":\"03 pm\",\"tue_close\":\"03 am\",\"wed_open\":\"03 pm\",\"wed_close\":\"03 am\",\"thu_open\":\"03 pm\",\"thu_close\":\"03 am\",\"fri_open\":\"03 pm\",\"fri_close\":\"03 am\"}', '9506362211702474021.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '022023585', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-13 13:27:01', '2023-12-13 13:27:01'),
(244, 0, 0, 92, 'Baywatch Night Club Ajman', 'baywatch-night-club-ajman', NULL, 'Updates from Baywatch Night Club Ajman', 4, 'Al Rumailah 2 - Ajman', '25.4026875', '55.42781249999999', '', '[\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"09 pm\",\"sat_close\":\"04 am\",\"sun_open\":\"09 pm\",\"sun_close\":\"04 am\",\"mon_open\":\"09 pm\",\"mon_close\":\"04 am\",\"tue_open\":\"09 pm\",\"tue_close\":\"04 am\",\"wed_open\":\"09 pm\",\"wed_close\":\"04 am\",\"thu_open\":\"09 pm\",\"thu_close\":\"04 am\",\"fri_open\":\"09 pm\",\"fri_close\":\"04 am\"}', '15595952031702474399.jpeg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '067424555', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-13 13:33:19', '2023-12-13 13:33:19'),
(245, 0, 0, 92, 'Manila Beats', 'manila-beats', NULL, 'Manila Beats Bar, City Tower Hotel, Fujairah · Reunited ! Welcome to Fujairah Johna with your sweet heart', 1, '48FF+2W6 - Hamad Bin Abdulla Rd - opposite Etisalat/Lulu - Fujairah Town Center - Fujairah', '25.1225375', '56.3247656', '', '[\"Parking\",\"Cafe\"]', '[\"fas fa-parking\",0]', NULL, '{\"sat_open\":null,\"sat_close\":null,\"sun_open\":null,\"sun_close\":null,\"mon_open\":null,\"mon_close\":null,\"tue_open\":null,\"tue_close\":null,\"wed_open\":null,\"wed_close\":null,\"thu_open\":null,\"thu_close\":null,\"fri_open\":null,\"fri_close\":null}', '20225911361702540488.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '092236888', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-14 07:54:48', '2023-12-14 07:54:48'),
(246, 0, 0, 93, 'Five Guys', 'five-guys', NULL, 'From Five Guys\r\n\"Fast-casual chain with made-to-order burgers, fries, hot dogs & shakes, plus free peanuts while you wait.\"', 6, 'The Dubai Mall - Unit TDG - LG-102 - Financial Center Rd - Downtown Dubai - Dubai', '25.1961875', '55.2774375', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\",\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-moon\",\"fas fa-wifi\",\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"10 am\",\"sat_close\":\"01 am\",\"sun_open\":\"10 am\",\"sun_close\":\"01 am\",\"mon_open\":\"10 am\",\"mon_close\":\"12 am\",\"tue_open\":\"10 am\",\"tue_close\":\"12 am\",\"wed_open\":\"10 am\",\"wed_close\":\"12 am\",\"thu_open\":\"10 am\",\"thu_close\":\"12 am\",\"fri_open\":\"10 am\",\"fri_close\":\"01 am\"}', '3832886551702540839.jpg', 'restaurants-cafe', 0, 1, NULL, 'https://www.fiveguys.ae/Menu?y_source=1_MTUzOTg4MjktNzE1LWxvY2F0aW9uLm1lbnVfdXJs', NULL, '043804117', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-14 08:00:39', '2023-12-14 08:00:39'),
(247, 0, 0, 93, 'Burger King - Sharjah Dubai Rd', 'burger-king-sharjah-dubai-rd', NULL, 'From Burger King - Sharjah Dubai Rd\r\n\"Every day, more than 11 million guests visit BURGER KING® restaurants around the world. Founded in 1954, BURGER KING® is the second largest fast food hamburger chain in the world. King\'s Wrap Collection, Grilled Chicken Selection, Chicken Royale Collection, Flame Grilled Burger Meals, Crispy and Tender Chicken Meals, Flame Grilled Burger Sandwiches, Crispy and Tender Chicken Sandwiches, Salads & Veggies, King Jr Meals (Kids), King Snacks, Desserts and Beverages\"', 5, 'Adnoc Petrol Station, Sharjah Dubai Rd - Al Taawun St - Sharjah', '25.3066875', '55.37406250000001', '', '[\"Parking\",\"Breakfast\",\"Cafe\"]', '[\"fas fa-parking\",\"fas fa-wine-glass-alt\",0]', NULL, '{\"sat_open\":\"12 pm\",\"sat_close\":\"04 am\",\"sun_open\":\"12 pm\",\"sun_close\":\"04 am\",\"mon_open\":\"12 pm\",\"mon_close\":\"04 am\",\"tue_open\":\"12 pm\",\"tue_close\":\"04 am\",\"wed_open\":\"12 pm\",\"wed_close\":\"04 am\",\"thu_open\":\"12 pm\",\"thu_close\":\"04 am\",\"fri_open\":\"12 pm\",\"fri_close\":\"04 am\"}', '8353111111702541352.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '600522224', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-14 08:09:12', '2023-12-14 08:09:12'),
(248, 0, 0, 93, 'Wendy\'s', 'wendys', NULL, 'Do you feel like eating from Wendy\'s in Abu Dhabi Hills? Take a look at the menu, order your favorite meal and get it delivered to you.', 7, 'Retail Shop 1, Al Fardan Tower - Hamdan Bin Mohammed St - Abu Dhabi', '24.4945625', '54.3695625', '', '[\"Parking\",\"Cafe\"]', '[\"fas fa-parking\",0]', NULL, '{\"sat_open\":\"07 am\",\"sat_close\":\"03 am\",\"sun_open\":\"07 am\",\"sun_close\":\"03 am\",\"mon_open\":\"07 am\",\"mon_close\":\"03 am\",\"tue_open\":\"07 am\",\"tue_close\":\"03 am\",\"wed_open\":\"07 am\",\"wed_close\":\"03 am\",\"thu_open\":\"07 am\",\"thu_close\":\"03 am\",\"fri_open\":\"07 am\",\"fri_close\":\"03 am\"}', '9133311301702541608.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '0566812798', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-14 08:13:28', '2023-12-14 08:13:28'),
(249, 0, 0, 21, 'Thrifty Car Rental - The Galleria Al Maryah Island', 'thrifty-car-rental-the-galleria-al-maryah-island', NULL, 'From Thrifty Car Rental - The Galleria Al Maryah Island\r\n\"Thrifty Car Rental UAE was established in 1989, as a part of AA Al Moosa Enterprises. Thrifty’s UAE license is owned by Mr. Abdullah Ahmed Al Moosa and under the leadership of Mr. Khalid Al Moosa. Thrifty UAE car rental have been serving clientele and guests, as well as residence of UAE with regards to their short and long term car rental needs for more than 40 years.\"', 7, 'The Galleria, Al Maryah Island, C Floor 105 Hamouda Bin Ali Al Dhaherr - Abu Dhabi', '24.5013125', '54.3886875', '', '[\"Parking\"]', '[\"fas fa-parking\"]', NULL, '{\"sat_open\":\"10 am\",\"sat_close\":\"10 pm\",\"sun_open\":\"10 am\",\"sun_close\":\"10 pm\",\"mon_open\":\"10 am\",\"mon_close\":\"10 pm\",\"tue_open\":\"10 am\",\"tue_close\":\"10 pm\",\"wed_open\":\"10 am\",\"wed_close\":\"10 pm\",\"thu_open\":\"10 am\",\"thu_close\":\"10 pm\",\"fri_open\":\"10 am\",\"fri_close\":\"10 pm\"}', '20655480051702542682.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '023090458', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-14 08:31:22', '2023-12-14 08:31:22'),
(250, 0, 0, 21, 'Drivus Rent a car Sharjah درايفس لتأجير السيارات فرع الشارقة', 'drivus-rent-a-car-sharjah-drayfs-ltagyr-alsyarat-fraa-alshark', NULL, 'From Drivus Rent a car Sharjah درايفس لتأجير السيارات فرع الشارقة\r\n\"If you are looking to Rent a Car on Daily or Monthly basis, or Looking in for On Demand Short Term Monthly Rentals, DRIVUS offers a fleet of 1,670 Cars with door step deliver across Dubai, Sharjah, Ajman, Al Maktoum International Airport, Dubai International Airport (DXB) Terminal 3, Dubai International Airport Terminal 2, Dubai Airport Terminal 1, You can rent a small, medium, SUV, Luxury. It is the fastest way to rent a car. Say goodbye to long lines and paperwork. We deliver the car right to you within 59 minutes. DRIVUS offers an efficient, convenient and elegant way to rent a car for everyone and at any time. We at DRIVUS, value time and like to create new ways of getting around in style. DRIVUS brings convenience to you at its finest.\"', 5, '89 Al Estiqlal St - Bu Danig - Sharjah', '25.3451875', '55.3985625', '', '[]', '[]', NULL, '{\"sat_open\":\"08 am\",\"sat_close\":\"10 pm\",\"sun_open\":\"08 am\",\"sun_close\":\"10 pm\",\"mon_open\":\"08 am\",\"mon_close\":\"10 pm\",\"tue_open\":\"08 am\",\"tue_close\":\"10 pm\",\"wed_open\":\"08 am\",\"wed_close\":\"10 pm\",\"thu_open\":\"08 am\",\"thu_close\":\"10 pm\",\"fri_open\":\"08 am\",\"fri_close\":\"10 pm\"}', '789504031702542947.jpg', 'restaurants-cafe', 0, 1, NULL, 'http://www.drivus.ae/', NULL, '0525800788', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-14 08:35:47', '2023-12-14 08:35:47'),
(251, 0, 0, 21, 'Al Sayara Al Sareea Car Rental', 'al-sayara-al-sareea-car-rental', NULL, 'From Al Sayara Al Sareea Car Rental\r\n\"We offer good range of cars from economy to 4x4 SUV 7-seater at the cheapest rate. Located in Rashidiya 3, Ajman. Open from 9 AM-9:30 PM. No afternoon break. Call us now @ 06 7434300 / 0567867862 / 056 7867863.\"', 4, 'Aramani Building, Street # 138 from - شارع عبد الله ابن عبود - Ajman', '25.3938125', '55.43831249999999', '', '[\"Parking\"]', '[\"fas fa-parking\"]', NULL, '{\"sat_open\":\"10 am\",\"sat_close\":\"09 pm\",\"sun_open\":\"10 am\",\"sun_close\":\"09 pm\",\"mon_open\":\"10 am\",\"mon_close\":\"09 pm\",\"tue_open\":\"10 am\",\"tue_close\":\"09 pm\",\"wed_open\":\"10 am\",\"wed_close\":\"09 pm\",\"thu_open\":\"10 am\",\"thu_close\":\"09 pm\",\"fri_open\":\"10 am\",\"fri_close\":\"09 pm\"}', '3292878051702543178.jpg', 'restaurants-cafe', 0, 1, NULL, NULL, NULL, '067434300', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-14 08:39:38', '2023-12-14 08:39:38'),
(252, 0, 0, 94, 'Princess Lounge Ladies Salon', 'princess-lounge-ladies-salon', NULL, 'From Princess Lounge Ladies Salon\r\n\"Princess Lounge Ladies Salon is a Beauty Spa Salon located in DAMAC, Oceanscape Residence, Al Reem Island, Abu Dhabi. Experience quiet, exclusive, and relaxing salon treatments. Our skilled style team offers you a premium pampering service because you deserve a unique and sophisticated salon experience. We offer a wide range of beauty services including hair, nails, facial treatments, hair removal, and more. Call or WhatsApp us for bookings on 02 677 7785 or 050 273 3482 Like and follow us at @princessloungeladies', 7, 'Damac, Oceanscape - G04 - 1 Al Maqeed St - Al Reem Island - Shams Abu Dhabi - Abu Dhabi', '24.5078125', '54.4054375', '', '[\"Wi-Fi Internet\"]', '[\"fas fa-wifi\"]', NULL, '{\"sat_open\":\"10 am\",\"sat_close\":\"09 pm\",\"sun_open\":\"10 am\",\"sun_close\":\"09 pm\",\"mon_open\":\"10 am\",\"mon_close\":\"09 pm\",\"tue_open\":\"10 am\",\"tue_close\":\"09 pm\",\"wed_open\":\"10 am\",\"wed_close\":\"09 pm\",\"thu_open\":\"10 am\",\"thu_close\":\"09 pm\",\"fri_open\":\"10 am\",\"fri_close\":\"09 pm\"}', '11452734661702553087.jpg', 'beauty-services', 0, 1, NULL, NULL, NULL, '0502733482', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-14 11:24:47', '2023-12-14 11:34:04'),
(253, 0, 0, 94, 'Simply Beauty Ladies Beauty Center - Ajman (Sheikh Ammar Bin Humaid St. Al Hamidiya 1)', 'simply-beauty-ladies-beauty-center-ajman-sheikh-ammar-bin-humaid-st-al-hamidiya-1', NULL, 'Services: Laser hair removal, Body waxing, Pedicure, Hairstyling, Manicure, Massage, Beauty & Spa, Bikini Line, Body Massage, Body.', 4, 'Sheikh Ammar Bin Humaid St - opposite ADNOC - Al Hamidiya 1 - Ajman', '25.4031875', '55.50593749999999', '', '[]', '[]', NULL, '{\"sat_open\":\"10 am\",\"sat_close\":\"11 pm\",\"sun_open\":\"10 am\",\"sun_close\":\"11 pm\",\"mon_open\":\"10 am\",\"mon_close\":\"11 pm\",\"tue_open\":\"10 am\",\"tue_close\":\"11 pm\",\"wed_open\":\"10 am\",\"wed_close\":\"11 pm\",\"thu_open\":\"10 am\",\"thu_close\":\"11 pm\",\"fri_open\":\"10 am\",\"fri_close\":\"11 pm\"}', '5603084721702555210.jpg', 'beauty-services', 0, 1, NULL, NULL, NULL, '065549699', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-14 12:00:10', '2023-12-14 12:00:10'),
(254, 0, 0, 111, 'NMC General Clinic', 'nmc-general-clinic', NULL, 'F9J6+XJQ - Al Danah - Zone 1 - Abu Dhabi', 7, 'F9J6+XJQ - Al Danah - Zone 1 - Abu Dhabi', '24.4824625', '54.3616094', '', '[\"Wheelchair-Accessible\"]', '[\"fas fa-moon\"]', NULL, '{\"sat_open\":null,\"sat_close\":null,\"sun_open\":null,\"sun_close\":null,\"mon_open\":null,\"mon_close\":null,\"tue_open\":null,\"tue_close\":null,\"wed_open\":null,\"wed_close\":null,\"thu_open\":null,\"thu_close\":null,\"fri_open\":null,\"fri_close\":null}', '16226578181702557125.jpg', 'clinics', 0, 1, NULL, NULL, NULL, '026332255', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-14 12:32:05', '2023-12-14 12:32:05'),
(255, 0, 0, 111, 'Globehealth General Clinic', 'globehealth-general-clinic', NULL, 'From Globehealth General Clinic\r\n\"Personalized patient care is what sets GlobeHealth Clinic apart. When you visit our Satwa, Dubai location, you can expect to receive world class care. Expert physician specialists and caring clinical staff provides you with an exceptional health care experience.\"', 6, 'Flat # 111, First Floor, Emirates Islamic Bank Building - 2nd December St - Al Satwa - Dubai', '25.2378125', '55.2755625', '', '[\"Wheelchair-Accessible\",\"Parking\"]', '[\"fas fa-moon\",\"fas fa-parking\"]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"10 pm\",\"sun_open\":\"02 pm\",\"sun_close\":\"10 pm\",\"mon_open\":\"09 am\",\"mon_close\":\"10 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"10 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"10 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"10 pm\",\"fri_open\":\"09 am\",\"fri_close\":\"10 pm\"}', '663110921702557910.jpg', 'clinics', 0, 1, NULL, NULL, NULL, '043464180', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-14 12:45:10', '2023-12-14 12:45:10'),
(256, 0, 0, 111, 'Al Safeer General Clinic', 'al-safeer-general-clinic', NULL, 'Yanbou street Opposite Igloo Icecream Factory Industrial Area No. 2 - Sharjah', 5, 'Yanbou street Opposite Igloo Icecream Factory Industrial Area No. 2 - Sharjah', '25.3163125', '55.40318749999999', '', '[\"Wheelchair-Accessible\"]', '[\"fas fa-moon\"]', NULL, '{\"sat_open\":\"08 am\",\"sat_close\":\"11 pm\",\"sun_open\":\"08 am\",\"sun_close\":\"11 pm\",\"mon_open\":\"08 am\",\"mon_close\":\"11 pm\",\"tue_open\":\"08 am\",\"tue_close\":\"11 pm\",\"wed_open\":\"08 am\",\"wed_close\":\"11 pm\",\"thu_open\":\"08 am\",\"thu_close\":\"11 pm\",\"fri_open\":\"08 am\",\"fri_close\":\"11 pm\"}', '2394997961702558153.jpg', 'clinics', 0, 1, NULL, NULL, NULL, '065432897', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-14 12:49:13', '2023-12-14 12:49:13'),
(257, 0, 0, 96, 'WOW Beauty Salon - Dubai Mall, LG Floor near Cinema Parking', 'wow-beauty-salon-dubai-mall-lg-floor-near-cinema-parking', NULL, 'From WOW Beauty Salon - Dubai Mall, LG Floor near Cinema Parking\r\n\"Experience beauty at its best with WOW Beauty Salon! Explore Nail Therapy, Manicure & Pedicure, Hair Treatment, Sculpture Cut, Shaping & Styling, Hair Coloring, Skin treatments and therapy, and more. With a devoted family of staff, we\'re not just a salon; we\'re a creative haven rooted in education and committed to your utmost satisfaction. Our goal is to make every step of your beauty journey leave you feeling and looking WOW! Your go-to destination for all things beautiful!\"', 6, 'Dubai Mall - Unit LG - 146 - 6 - Financial Center Rd - Downtown Dubai - Dubai', '25.1973125', '55.27968749999999', '', '[\"Wheelchair-Accessible\",\"Wi-Fi Internet\"]', '[\"fas fa-moon\",\"fas fa-wifi\"]', NULL, '{\"sat_open\":\"10 am\",\"sat_close\":\"01 am\",\"sun_open\":\"10 am\",\"sun_close\":\"01 am\",\"mon_open\":\"10 am\",\"mon_close\":\"12 am\",\"tue_open\":\"10 am\",\"tue_close\":\"12 am\",\"wed_open\":\"10 am\",\"wed_close\":\"12 am\",\"thu_open\":\"10 am\",\"thu_close\":\"12 am\",\"fri_open\":\"10 am\",\"fri_close\":\"01 am\"}', '20530263561702626989.jpg', 'clinics', 0, 1, NULL, NULL, NULL, '043398265', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-15 07:56:29', '2023-12-15 07:56:29'),
(258, 0, 0, 96, 'Golden Lotus Beauty Salon', 'golden-lotus-beauty-salon', NULL, 'From Golden Lotus Beauty Salon\r\n\"Perfect Service In Nails Care, Eyelash Extension, Facial & Hair Treatment, Threading, Waxing, Foot Care & More.\"', 5, 'Muwaileh Commercial - Industrial AreaMuwailih Commercial - Sharjah', '25.3073125', '55.4553125', '', '[\"Wi-Fi Internet\"]', '[\"fas fa-wifi\"]', NULL, '{\"sat_open\":\"11 am\",\"sat_close\":\"10 pm\",\"sun_open\":\"11 am\",\"sun_close\":\"10 pm\",\"mon_open\":\"11 am\",\"mon_close\":\"10 pm\",\"tue_open\":\"11 am\",\"tue_close\":\"10 pm\",\"wed_open\":\"11 am\",\"wed_close\":\"10 pm\",\"thu_open\":\"11 am\",\"thu_close\":\"10 pm\",\"fri_open\":\"11 am\",\"fri_close\":\"10 pm\"}', '12411899951702627207.jpg', 'clinics', 0, 1, NULL, NULL, NULL, '065381666', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-15 08:00:07', '2023-12-15 08:00:07'),
(259, 0, 0, 96, 'GLOW Beauty Center', 'glow-beauty-center', NULL, 'From GLOW Beauty Center\r\n\"WELCOME TO GLOW BEAUTY CENTER GLOW BEAUTY CENTER is a professional team mastering with passion Hair Coloring and Styling, Hair extension, Nails Care, Eyelash expertise, Facial and Skin Treatments. At GLOW Beauty Center we deliver our best in order to meet with our clients´ expectation and satisfaction.\"', 7, 'Villagio hotel - Al - Hameem St - Al Nahyan - Abu Dhabi', '24.4753125', '54.38843749999999', '', '[]', '[]', NULL, '{\"sat_open\":\"10 am\",\"sat_close\":\"08 pm\",\"sun_open\":\"10 am\",\"sun_close\":\"08 pm\",\"mon_open\":\"10 am\",\"mon_close\":\"08 pm\",\"tue_open\":\"10 am\",\"tue_close\":\"08 pm\",\"wed_open\":\"10 am\",\"wed_close\":\"08 pm\",\"thu_open\":\"08 am\",\"thu_close\":\"08 pm\",\"fri_open\":\"11 am\",\"fri_close\":\"08 pm\"}', '20320087131702627712.jpg', 'clinics', 0, 1, NULL, NULL, NULL, '027710077', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-15 08:08:32', '2023-12-15 08:08:32'),
(260, 0, 0, 97, 'صالون عروس الخليج - Gulf Bride Saloon', 'salon-aaros-alkhlyg-gulf-bride-saloon', NULL, '\"Very good service. Best bridal salon in this locality\"', 7, 'F97G+JQW - Al Nahyan - Zone 1 - Abu Dhabi', '24.4641125', '54.37695309999999', '', '[\"Wi-Fi Internet\"]', '[\"fas fa-wifi\"]', NULL, '{\"sat_open\":\"10 am\",\"sat_close\":\"08 pm\",\"sun_open\":\"10 am\",\"sun_close\":\"08 pm\",\"mon_open\":\"closed\",\"mon_close\":\"closed\",\"tue_open\":\"10 am\",\"tue_close\":\"08 pm\",\"wed_open\":\"10 am\",\"wed_close\":\"08 pm\",\"thu_open\":\"10 am\",\"thu_close\":\"08 pm\",\"fri_open\":\"01 pm\",\"fri_close\":\"08 pm\"}', '1124132751702627934.jpg', 'clinics', 0, 1, NULL, NULL, NULL, '024434348', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-15 08:12:14', '2023-12-15 08:13:23'),
(261, 0, 0, 97, 'Lebanon Bride Beauty Center', 'lebanon-bride-beauty-center', NULL, 'From Lebanon Bride Beauty Center\r\n\"مركز عروس لينان\"', 5, 'Al Taawun St - Al Khan - Sharjah', '25.3126875', '55.3765625', '', '[]', '[]', NULL, '{\"sat_open\":\"10 am\",\"sat_close\":\"10 pm\",\"sun_open\":\"10 am\",\"sun_close\":\"10 pm\",\"mon_open\":\"10 am\",\"mon_close\":\"10 pm\",\"tue_open\":\"10 am\",\"tue_close\":\"10 pm\",\"wed_open\":\"10 am\",\"wed_close\":\"10 pm\",\"thu_open\":\"10 am\",\"thu_close\":\"10 pm\",\"fri_open\":\"12 pm\",\"fri_close\":\"10 pm\"}', '13882186371702628233.jpeg', 'clinics', 0, 1, NULL, NULL, NULL, '0509776553', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-15 08:17:13', '2023-12-15 08:17:13');
INSERT INTO `listings` (`id`, `user_id`, `admin_id`, `category_id`, `name`, `slug`, `designation`, `description`, `location_id`, `real_address`, `latitude`, `longitude`, `gmap_address`, `amenities`, `amenity_icons`, `distance`, `schedules`, `photo`, `type`, `is_feature`, `status`, `expire_date`, `website`, `email`, `phone_number`, `facebook`, `twitter`, `linkedin`, `listing_video_provider`, `listing_video`, `r_price`, `r_bed`, `r_baths`, `r_square`, `r_property_type`, `car_price`, `car_fuel_type`, `car_manufacture_year`, `car_engine_capacity`, `car_mileage`, `is_verify`, `is_toprated`, `food_type`, `highlight_type`, `views`, `created_at`, `updated_at`) VALUES
(262, 0, 0, 97, 'Urooj Faisal Makeup Artist in Dubai I Bridal Makeup I Party Makeup', 'urooj-faisal-makeup-artist-in-dubai-i-bridal-makeup-i-party-makeup', NULL, 'From Urooj Faisal Makeup Artist in Dubai I Bridal Makeup I Party Makeup\r\n\"I am Urooj Faisal and I am representing UF Makeup, I\'m independent makeup artist in dubai, with five years of expertise in Fashion, Bridal, and Party Makeup’s. I did my inventive makeup course from London school of Makeup. I do such countless development courses in makeup from Dubai. I\'m authorized and licensed makeup artist in Dubai. Working by an appointment only.\"', 6, 'Api horizon pointe Nad Al Sheba 1 Aprt no 905 - Dubai', '25.1821875', '55.3228125', '', '[]', '[]', NULL, '{\"sat_open\":\"08 am\",\"sat_close\":\"07 pm\",\"sun_open\":\"closed\",\"sun_close\":\"closed\",\"mon_open\":\"08 am\",\"mon_close\":\"07 pm\",\"tue_open\":\"08 am\",\"tue_close\":\"07 pm\",\"wed_open\":\"08 am\",\"wed_close\":\"07 pm\",\"thu_open\":\"08 am\",\"thu_close\":\"07 pm\",\"fri_open\":\"08 am\",\"fri_close\":\"07 pm\"}', '19501913281702628683.jpg', 'clinics', 0, 1, NULL, NULL, NULL, '0527856178', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-15 08:24:43', '2023-12-15 08:24:43'),
(263, 0, 0, 98, 'German m.i.s clinic', 'german-mis-clinic', NULL, 'From German m.i.s clinic\r\n\"German MIS CLINIC is the clinic with Endocrinologist, Cosmetologist( which works in Filler injections, Liposuction and all cosmetic surgeries such as nose job and face lift) and General Practitioner.\"', 6, '67J6+3MR - Jumeirah - Jumeirah 1 - Dubai', '25.2302375', '55.2616406', '', '[]', '[]', NULL, '{\"sat_open\":\"11 am\",\"sat_close\":\"08 pm\",\"sun_open\":\"11 am\",\"sun_close\":\"08 pm\",\"mon_open\":\"11 am\",\"mon_close\":\"08 pm\",\"tue_open\":\"11 am\",\"tue_close\":\"08 pm\",\"wed_open\":\"11 am\",\"wed_close\":\"08 pm\",\"thu_open\":\"11 am\",\"thu_close\":\"08 pm\",\"fri_open\":\"11 am\",\"fri_close\":\"08 pm\"}', '7431576441702628972.jpg', 'clinics', 0, 1, NULL, NULL, NULL, '042521002', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-15 08:29:32', '2023-12-15 08:29:32'),
(264, 0, 0, 98, 'CosmeSurge NMC Royal Hospital, Sharjah', 'cosmesurge-nmc-royal-hospital-sharjah', NULL, 'From CosmeSurge NMC Royal Hospital, Sharjah\r\n\"CosmeSurge is the industry leader in quality cosmetic surgery, dermatology and aesthetic medicine Since our inception, we have been enhancing the beauty of our patients in state-of-the-art facilities. We pride ourselves on the highest level of clinical care, provided by our team of experienced and dedicated physicians. We inspire individuals, transform lives and promote confidence through our expertise and medical solutions. At CosmeSurge, our goal is to exceed your expectations and our aim is to provide you with the finest service and quality care at an affordable price. Come, discover our range of surgical and non-surgical services.\"', 5, 'NMC Royal Hospital, Sharjah - Al Zahra\'a St - near Clock Tower - Sharjah', '25.3605625', '55.3941875', '', '[]', '[]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"10 pm\",\"sun_open\":\"09 am\",\"sun_close\":\"10 pm\",\"mon_open\":\"09 am\",\"mon_close\":\"10 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"10 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"10 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"10 pm\",\"fri_open\":\"09 am\",\"fri_close\":\"10 pm\"}', '1611921251702629262.jpg', 'clinics', 0, 1, NULL, NULL, NULL, '0543781171', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-15 08:34:22', '2023-12-15 08:34:22'),
(265, 0, 0, 98, 'VLCC Slimming | Beauty | Fitness, Ajman', 'vlcc-slimming-beauty-fitness-ajman', NULL, 'From VLCC Slimming | Beauty | Fitness, Ajman\r\n\"Slimming / Beauty / Skin / Hair / Treatment / Ayurveda / Fitness / Dermatology / Cosmetology / Weight loss / Fat loss / Laser hair removal\"', 4, 'Emirates NBD tower, al nuaimiya - Sheikh Khalifa Bin Zayed St - Ajman', '25.3895625', '55.4521875', '', '[\"Wheelchair-Accessible\"]', '[\"fas fa-moon\"]', NULL, '{\"sat_open\":\"08 am\",\"sat_close\":\"10 pm\",\"sun_open\":\"08 am\",\"sun_close\":\"10 pm\",\"mon_open\":\"08 am\",\"mon_close\":\"10 pm\",\"tue_open\":\"08 am\",\"tue_close\":\"10 pm\",\"wed_open\":\"08 am\",\"wed_close\":\"10 pm\",\"thu_open\":\"08 am\",\"thu_close\":\"10 pm\",\"fri_open\":\"08 am\",\"fri_close\":\"10 pm\"}', '5815744151702629504.jpg', 'clinics', 0, 1, NULL, 'https://vpminternational.com/index.php', NULL, NULL, NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-15 08:38:24', '2023-12-15 08:38:24'),
(266, 0, 0, 99, 'Jack Massage & Moroccan Bath Dubai', 'jack-massage-moroccan-bath-dubai', NULL, 'From Jack Massage & Moroccan Bath Dubai\r\n\"Situated in Clover Bay Tower Business Bay Dubai, Jack Massage & Moroccan Bath Dubai is providing the best and most reasonable massage services in Dubai. We provide professional massage services having state of the art equipment and well trained massage therapist in Dubai. Been Best Massage Dubai Therapist we provide number of services including B2B Massage, Oil Massage, Thai Massage Dubai, Russian Massage Dubai, Body Massage, Four Hands Massage, Arabic Massage, Indian Massage Dubai and many more. We also provide the best Moroccan Bath Services in Dubai. Visit us today to enjoy exclusive massage deals in Dubai and special discounts,', 6, 'Room 612, Clover Bay Tower - 6th Floor - Business Bay - Dubai', '25.1888125', '55.2696875', '', '[]', '[]', NULL, '{\"sat_open\":null,\"sat_close\":null,\"sun_open\":null,\"sun_close\":null,\"mon_open\":null,\"mon_close\":null,\"tue_open\":null,\"tue_close\":null,\"wed_open\":null,\"wed_close\":null,\"thu_open\":null,\"thu_close\":null,\"fri_open\":null,\"fri_close\":null}', '11149876381702629611.jpeg', 'clinics', 0, 1, NULL, NULL, NULL, '0524951689', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-15 08:40:11', '2023-12-15 08:40:11'),
(267, 0, 0, 99, 'Kerala Spa Sharjah - Massage Centre & Relaxation', 'kerala-spa-sharjah-massage-centre-relaxation', NULL, 'From Kerala Spa Sharjah - Massage Centre & Relaxation\r\n\"Kerala Spa Massage Centre & Relaxation Sharjah is one of the leading spa and massage centres in Sharjah, offering a wide range of therapeutic treatments to its clients. With a focus on traditional Kerala-style massages, the spa has become a go-to destination for people looking to unwind and rejuvenate in the city. The Sharjah Spa Massage & Reoffers a range of services such as Ayurvedic massage, Swedish massage, Thai massage, and hot stone massage, among others. All the therapists at the centre are highly trained and experienced, ensuring that each client receives the best possible treatment. The spa uses only natural and organic products for their treatments, making it a safe and healthy option for those seeking relief from stress and pain.\"', 5, '3 Al Nuaimia - Ajman', '25.3861875', '55.44193749999999', '', '[]', '[]', NULL, '{\"sat_open\":null,\"sat_close\":null,\"sun_open\":null,\"sun_close\":null,\"mon_open\":null,\"mon_close\":null,\"tue_open\":null,\"tue_close\":null,\"wed_open\":null,\"wed_close\":null,\"thu_open\":null,\"thu_close\":null,\"fri_open\":null,\"fri_close\":null}', '4182992341702629754.jpg', 'clinics', 0, 1, NULL, NULL, NULL, '0568027481', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-15 08:42:34', '2023-12-15 08:42:34'),
(268, 0, 0, 99, 'Soul Senses Spa & Wellness Novotel', 'soul-senses-spa-wellness-novotel', NULL, 'From Soul Senses Spa & Wellness Novotel\r\n\"🧘‍♂️Luxury Wellness Spa since 2️⃣0️⃣1️⃣2️⃣🏆 📍14 branches across Dubai & Abu Dhabi located in Premium Hotels 🏆International Award Winning Spa\"', 7, 'Hotel Novotel Abu Dhabi Al Bustan - Shk. Rashid Bin Saeed, St - 29th St - Abu Dhabi', '24.4293125', '54.4290625', '', '[]', '[]', NULL, '{\"sat_open\":\"10 am\",\"sat_close\":\"12 am\",\"sun_open\":\"10 am\",\"sun_close\":\"12 am\",\"mon_open\":\"10 am\",\"mon_close\":\"12 am\",\"tue_open\":\"10 am\",\"tue_close\":\"12 am\",\"wed_open\":\"10 am\",\"wed_close\":\"12 am\",\"thu_open\":\"10 am\",\"thu_close\":\"12 am\",\"fri_open\":\"10 am\",\"fri_close\":\"12 am\"}', '9290849571702630601.jpg', 'clinics', 0, 1, NULL, NULL, NULL, '025016117', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-15 08:56:41', '2023-12-15 08:56:41'),
(269, 0, 0, 112, 'Smile First Dental Center', 'smile-first-dental-center', NULL, 'From Smile First Dental Center\r\n\"Smile First is a dental clinic founded on a passion for dentistry, with the objective of providing patients with an outstanding level of dental care that enables them to achieve the smile they have always desired. Our vision is to become this country’s most trusted name in the field of dentistry.\"', 7, 'Sheikh Zayed Bin Sultan St - Al Zahiyah - E16 - Abu Dhabi', '24.4940625', '54.3763125', '', '[\"Wheelchair-Accessible\"]', '[\"fas fa-moon\"]', NULL, '{\"sat_open\":\"12 pm\",\"sat_close\":\"09 pm\",\"sun_open\":\"closed\",\"sun_close\":\"closed\",\"mon_open\":\"12 pm\",\"mon_close\":\"09 pm\",\"tue_open\":\"12 pm\",\"tue_close\":\"09 pm\",\"wed_open\":\"12 pm\",\"wed_close\":\"09 pm\",\"thu_open\":\"12 pm\",\"thu_close\":\"09 pm\",\"fri_open\":\"02 pm\",\"fri_close\":\"10 pm\"}', '15932960441702640209.jpg', 'clinics', 0, 1, NULL, NULL, NULL, '026226672', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-15 11:36:49', '2023-12-15 11:36:49'),
(270, 0, 0, 112, 'Al Durra Dental Clinic Ajman عيادة الدرة لطب الأسنان عجمان', 'al-durra-dental-clinic-ajman-aayad-aldr-ltb-alasnan-aagman', NULL, 'From Al Durra Dental Clinic Ajman عيادة الدرة لطب الأسنان عجمان\r\n\"عيادة الدرة لطب الأسنان في عجمان توفر خدمات طبية مميزة للعناية بالأسنان، وعلاجات الأسنان العامة والتجميلية للأطفال والكبار. من ضمنها: تبييض أسنان، كريستالات أسنان، لومينير وفينير، حشوات عصب خلفية وأمامية . عنايتك بأسنانك تعزز صحتك وثقتك بنفسك، زورنا الآن.\"', 4, '105 Bldg-A - شارع بدر - Ajman', '25.4053125', '55.4478125', '', '[\"Wheelchair-Accessible\"]', '[\"fas fa-moon\"]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"10 pm\",\"sun_open\":\"09 am\",\"sun_close\":\"10 pm\",\"mon_open\":\"09 am\",\"mon_close\":\"10 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"10 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"10 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"10 pm\",\"fri_open\":\"03 pm\",\"fri_close\":\"08 pm\"}', '5550447151702641387.jpg', 'clinics', 0, 1, NULL, NULL, NULL, '067313544', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-15 11:56:27', '2023-12-15 11:56:27'),
(271, 0, 0, 112, 'MAS Center', 'mas-center', NULL, 'From MAS Center\r\n\"Enhancing the dental experience by offering luxurious and exceptional services that allow our customers to feel the difference in their oral and dental health in a convenient and stress-free environment. الارتقاء بخدمات صحة الفم و الفكين لتقديم تجربة استثنائية وفاخرة تمنح عملاءنا شعوراً فريداً وجديداً لأسلوب حياتهم في أجواء مريحة وخالية من أي توتر.\"', 1, 'Al Faseel Rd(E99) - Al Faseel - Fujairah', '25.1495625', '56.3504375', '', '[\"Wheelchair-Accessible\"]', '[\"fas fa-moon\"]', NULL, '{\"sat_open\":\"10 am\",\"sat_close\":\"06 pm\",\"sun_open\":\"closed\",\"sun_close\":\"closed\",\"mon_open\":\"10 am\",\"mon_close\":\"06 pm\",\"tue_open\":\"10 am\",\"tue_close\":\"06 pm\",\"wed_open\":\"10 am\",\"wed_close\":\"06 pm\",\"thu_open\":\"10 am\",\"thu_close\":\"06 pm\",\"fri_open\":\"10 am\",\"fri_close\":\"06 pm\"}', '15768062701702641903.jpg', 'clinics', 0, 1, NULL, NULL, NULL, '092344324', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-15 12:05:03', '2023-12-15 12:05:03'),
(272, 0, 0, 113, 'Heal Hub Rehabilitation Center', 'heal-hub-rehabilitation-center', NULL, 'From Heal Hub Rehabilitation Center\r\n\"Heal Hub is an innovative concept that provides a new wave of treatments and services, used together like never seen before. Heal Hub is on a mission to empower as many individuals as possible with a holistic philosophy regarding physical, mental, and spiritual well-being. We are a 10,000 square foot facility on Jumeirah road, offering a comprehensive range of treatment and therapies including Osteopathy, Physiotherapy, Sports Massage, Traditional Chinese Medicine, Chiropractic, Red Light Therapy, Cold Plunge, Sauna, Yoga and much more. This is a one stop one-stop destination putting your health and wellness under one roof.\"', 6, '8B - 3 10 A St - Umm Suqeim - Jumeirah 3 - Dubai', '25.1703125', '55.2155625', '', '[\"Wheelchair-Accessible\"]', '[\"fas fa-moon\"]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"06 pm\",\"sun_open\":\"09 am\",\"sun_close\":\"06 pm\",\"mon_open\":\"07 am\",\"mon_close\":\"06 pm\",\"tue_open\":\"07 am\",\"tue_close\":\"06 pm\",\"wed_open\":\"07 am\",\"wed_close\":\"06 pm\",\"thu_open\":\"07 am\",\"thu_close\":\"06 pm\",\"fri_open\":\"07 am\",\"fri_close\":\"06 pm\"}', '2879529441702644075.jpg', 'clinics', 0, 1, NULL, NULL, NULL, '045466152', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-15 12:41:15', '2023-12-15 12:41:15'),
(273, 0, 0, 113, 'Wonderful Minds for Rehabilitation and Training', 'wonderful-minds-for-rehabilitation-and-training', NULL, 'From Wonderful Minds for Rehabilitation and Training\r\n\"Wonderful Minds is a state of the art center that supports children and youth in achieving their goals and participating in their communities. Our speech, language, and occupational therapists work closely with your family to ensure your child reaches their full potential. Our first of a kind experience offers a stimulating, engaging, and safe approach to treating a wide range of conditions. Kindly give us a call or visit our center to learn more.\"', 7, 'Villa 82, Al Mujaljal Street, Karama Area, Abu Dhabi Near Embassy of Nepal - Abu Dhabi', '24.4591875', '54.3748125', '', '[\"Wheelchair-Accessible\"]', '[\"fas fa-moon\"]', NULL, '{\"sat_open\":\"closed\",\"sat_close\":\"closed\",\"sun_open\":\"09 am\",\"sun_close\":\"06 pm\",\"mon_open\":\"09 am\",\"mon_close\":\"06 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"06 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"06 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"06 pm\",\"fri_open\":\"09 am\",\"fri_close\":\"06 pm\"}', '13372899741702644272.jpeg', 'clinics', 0, 1, NULL, NULL, NULL, '024463372', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-15 12:44:32', '2023-12-15 12:44:32'),
(274, 0, 0, 113, 'Ajman Rehabilitation Center For Disabled', 'ajman-rehabilitation-center-for-disabled', NULL, 'Ajman Rehabilitation Center For Disabled', 4, 'CF9W+9W2 - Al Jerf 1 - Ajman', '25.4183875', '55.4972656', '', '[\"Wheelchair-Accessible\"]', '[\"fas fa-moon\"]', NULL, '{\"sat_open\":null,\"sat_close\":null,\"sun_open\":null,\"sun_close\":null,\"mon_open\":null,\"mon_close\":null,\"tue_open\":null,\"tue_close\":null,\"wed_open\":null,\"wed_close\":null,\"thu_open\":null,\"thu_close\":null,\"fri_open\":null,\"fri_close\":null}', '19273952201702644561.jpeg', 'clinics', 0, 1, NULL, NULL, NULL, '7432300', NULL, NULL, NULL, 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-15 12:49:21', '2023-12-15 12:49:21'),
(275, 0, 0, 114, 'Right Health National Clinic LLC (Ajman)', 'right-health-national-clinic-llc-ajman', NULL, 'From Right Health National Clinic LLC (Ajman)\r\n\"Right Health is the largest & fastest growing healthcare chain in the UAE. With over 60+ facilities in Dubai, Ajman, Abu Dhabi, Sharjah & Al Ain. We provide quality and affordable medical services in New Sanaiya Industrial 2 Ajman. All the major insurances are accepted.\"', 4, 'New Sanaiya, Ajman industrial 2 opp. lucky roundabout - Ajman', '25.3754375', '55.47681249999999', '', '[\"Wheelchair-Accessible\"]', '[\"fas fa-moon\"]', NULL, '{\"sat_open\":\"09 am\",\"sat_close\":\"09 pm\",\"sun_open\":\"09 am\",\"sun_close\":\"09 pm\",\"mon_open\":\"09 am\",\"mon_close\":\"09 pm\",\"tue_open\":\"09 am\",\"tue_close\":\"09 pm\",\"wed_open\":\"09 am\",\"wed_close\":\"09 pm\",\"thu_open\":\"09 am\",\"thu_close\":\"09 pm\",\"fri_open\":\"09 am\",\"fri_close\":\"09 pm\"}', '2493357001702644894.jpg', 'clinics', 0, 1, NULL, 'https://askwayin.com/admin/listing/edit/275?type=clinics', 'test@gmail.com', '8007400', 'https://askwayin.com/admin/listing/edit/275?type=clinics', 'https://askwayin.com/admin/listing/edit/275?type=clinics', 'https://askwayin.com/admin/listing/edit/275?type=clinics', 'youtube', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Tranding', 0, '2023-12-15 12:54:54', '2023-12-21 15:04:43');

-- --------------------------------------------------------

--
-- Table structure for table `listing_beauties`
--

CREATE TABLE `listing_beauties` (
  `id` int(11) NOT NULL,
  `listing_id` int(11) DEFAULT NULL,
  `service_name` varchar(100) DEFAULT NULL,
  `service_photo` varchar(255) DEFAULT NULL,
  `service_price` double DEFAULT NULL,
  `service_duration` double DEFAULT NULL,
  `service_from` varchar(100) DEFAULT NULL,
  `service_to` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `listing_beauties`
--

INSERT INTO `listing_beauties` (`id`, `listing_id`, `service_name`, `service_photo`, `service_price`, `service_duration`, `service_from`, `service_to`, `created_at`, `updated_at`) VALUES
(3, 35, 'Aqua Stone Lodging & Boarding', '9737675341688710298.jpg', 100, 45, '11 am', '6 pm', '2023-03-26 08:33:04', '2023-07-07 06:11:38'),
(4, 35, 'Aqua Stone Lodging & Boarding', '11533329511679819584.jpg', 80, 25, '9 am', '4 pm', '2023-03-26 08:33:04', '2023-07-07 06:11:38'),
(6, 65, 'Nail Service', '14921405781697622867.jpg', 10, 30, '10.AM', '12. PM', '2023-10-18 09:54:28', '2023-10-18 09:54:28');

-- --------------------------------------------------------

--
-- Table structure for table `listing_enquiries`
--

CREATE TABLE `listing_enquiries` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `listing_owner_id` int(11) DEFAULT NULL,
  `listing_id` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `listing_faqs`
--

CREATE TABLE `listing_faqs` (
  `id` int(11) NOT NULL,
  `listing_id` int(11) DEFAULT NULL,
  `faq_name` varchar(100) DEFAULT NULL,
  `faq_details` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `listing_faqs`
--

INSERT INTO `listing_faqs` (`id`, `listing_id`, `faq_name`, `faq_details`, `created_at`, `updated_at`) VALUES
(1, 36, 'How Rego work and what is advance features?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-03-28 05:57:24', '2023-03-28 05:57:24'),
(2, 36, 'Can we remove our website when we want?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-03-28 05:57:24', '2023-03-28 05:57:24'),
(3, 36, 'How Rego work and what is advance features?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-03-28 05:57:24', '2023-03-28 05:57:24'),
(4, 37, 'How Rego work and what is advance features?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-03-28 08:01:49', '2023-03-28 08:01:49'),
(5, 37, 'How Rego work and what is advance features?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-03-28 08:01:49', '2023-03-28 08:01:49'),
(6, 38, 'How Rego work and what is advance features?', 'dfgdfg', '2023-03-28 08:07:05', '2023-03-28 08:07:05'),
(10, 29, 'How Rego work and what is advance features?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-04-03 10:13:49', '2023-04-03 10:13:49'),
(11, 29, 'Can we remove our website when we want?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-04-03 10:13:49', '2023-04-03 10:13:49'),
(12, 29, 'How Rego work and what is advance features?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-04-03 10:13:49', '2023-04-03 10:13:49'),
(13, 42, 'Lael Haley', 'Consequuntur nostrum', '2023-04-13 05:23:58', '2023-04-13 05:23:58'),
(31, 58, 'How rego work and What is advance FEATURES', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-07-07 06:03:08', '2023-07-07 06:03:08'),
(32, 58, 'How rego work and What is advance FEATURES', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-07-07 06:03:08', '2023-07-07 06:03:08'),
(33, 59, 'How rego work and What is advance FEATURES', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-07-07 06:19:57', '2023-07-07 06:19:57'),
(34, 32, 'test', 'test', '2023-07-17 10:10:58', '2023-07-17 10:10:58'),
(35, 60, 'Jaffa', 'abcdef', '2023-07-22 08:33:05', '2023-07-22 08:33:05'),
(40, 65, 'fbgsd', 'dsfdfsdf', '2023-08-04 06:03:39', '2023-08-04 06:03:39'),
(43, 68, 'fbgsd', 'dsfsdfsdf', '2023-10-11 10:54:10', '2023-10-11 10:54:10'),
(47, 65, 'What is The services', 'Nail Services', '2023-10-18 09:54:28', '2023-10-18 09:54:28'),
(52, 78, 'Can i take the car to abu dhabi ?', 'Yes', '2023-11-28 10:37:55', '2023-11-28 10:37:55'),
(57, 84, 'esaad card valid?', 'Yes you will get 10 percent discount for Esaad Card', '2023-11-28 18:51:15', '2023-11-28 18:51:15'),
(58, 85, NULL, NULL, '2023-11-29 06:17:43', '2023-11-29 06:17:43'),
(59, 86, NULL, NULL, '2023-11-29 06:27:26', '2023-11-29 06:27:26'),
(60, 87, NULL, 'What a beautiful restaurant! We enjoyed the Saturday brunch and as this is over 14:00 to 18:00 it was a lovely and relaxed afternoon.\r\nThe food really was delicious and beautifully presented. We were able to ask for more of anything we particularly enjoyed, which was basically everything.\r\nHassan was our waiter and he was very helpful and attentive whilst allowing us time between courses.\r\nWe had vegans and non-vegans in our party, both catered for equally and being vegan myself I will most definitely be returning here. I cannot recommend it enough!\r\nI only have a few photos as everything was eaten so quickly.', '2023-11-29 06:48:40', '2023-11-29 06:48:40'),
(61, 88, 'Hello, I am lookin for get-to-gether dinner by next week end is it possible that we can get', 'Check with zomato app. You will get their menu including prices.', '2023-11-29 07:16:10', '2023-11-29 07:16:10'),
(62, 89, NULL, NULL, '2023-11-29 07:44:56', '2023-11-29 07:44:56'),
(63, 90, NULL, 'The best Burger i tasted in Ajman. This one is my best its have double beef with onion (Solid Special Beef Burger) and i can add whatever i want in burger either to add tomato and lettuce. Thanks Solid.', '2023-11-29 07:57:02', '2023-11-29 07:57:02'),
(64, 91, NULL, NULL, '2023-11-29 08:12:10', '2023-11-29 08:12:10'),
(65, 92, NULL, 'Sweet food looking for Asian food\r\nAnd marine', '2023-11-29 08:18:34', '2023-11-29 08:18:34'),
(66, 93, NULL, 'Really cool beach club with an amazing vibe. You feel like you\'re somewhere else, and not in the UAE. It\'s not ideal for swimming though, as the waves are rather high.', '2023-11-29 08:29:18', '2023-11-29 08:29:18'),
(67, 94, NULL, NULL, '2023-11-29 08:40:39', '2023-11-29 08:40:39'),
(68, 95, NULL, NULL, '2023-11-29 08:58:39', '2023-11-29 08:58:39'),
(69, 96, NULL, 'Best Event in Dubai', '2023-11-29 09:04:40', '2023-11-29 09:04:40'),
(70, 97, NULL, 'Outstanding staff ! They welcome you with smile and care !! They tend to every order with charm !!! After handing over the order they even escort you to your car ! Never seen such staff at any fast food chain !!! EXCELLENT !!! whether from Nepal / India / Africa / Philippine, Hardee’s staff is brilliant', '2023-11-29 09:10:00', '2023-11-29 09:10:00'),
(71, 98, NULL, NULL, '2023-11-29 11:25:18', '2023-11-29 11:25:18'),
(72, 99, NULL, 'The best mani and pedi service i’ve ever tried😍 staff are really cute and they have a whole positive vibe😍', '2023-11-29 11:31:44', '2023-11-29 11:31:44'),
(73, 100, NULL, 'I had the best experience with Haneena. She is awesome. She understands immediately what her clients want and has a good eye for make up. She knows which colours will look nice according to my skin complexion. She knows exactly what she is doing. She is great! I felt so beautiful after she has done my make up. I already booked her twice and I will definitely do it again ❤️', '2023-11-29 11:40:05', '2023-11-29 11:40:05'),
(74, 101, 'how much is the consultation fees?', 'The consultation fee is around AED200, however if you sign up via the below link you can enjoy a Free consultation (http://bit.ly/2udPdsd)\r\n\r\nDear Maria Dass, the consultation fee is around AED200, however if you sign up via the below link you can enjoy a Free consultation http://bit.ly/2udPdsd.\r\n\r\nDear Lata Sam, yes. We do laser hair removal on the face. To know more about Kaya Ultima laser hair reducation, and enjoy a free experiential laser session, please visit the below link http://bit.ly/2w9eB4G.\r\n\r\nDear Abdu Khan, all the prices depend on the service which the dermatologist will recommend for you based on your need. We urge you to first visit the clinic and meet the dermatologist for a consultation. You can book online via the below link and enjoy a FREE hair consultation http://bit.ly/2udPdsd.', '2023-11-29 11:52:31', '2023-11-29 11:52:31'),
(75, 102, NULL, 'Hi Kavitha R, Thank you for your review of Royal Crown Spa in Ajman! We\'re glad you enjoyed your experience. We strive to provide our guests with a luxurious and relaxing experience, and we\'re happy to hear that we were able to exceed your expectations.', '2023-11-29 12:03:37', '2023-11-29 12:03:37'),
(76, 103, 'Is pediatrician Available in Aster Rak ?', 'No', '2023-11-29 12:22:10', '2023-11-29 12:22:10'),
(77, 104, 'How much is the consultation fee?', 'For the time being it is free of charge.', '2023-11-29 12:32:07', '2023-11-29 12:32:07'),
(78, 105, NULL, NULL, '2023-11-29 12:41:57', '2023-11-29 12:41:57'),
(79, 106, NULL, NULL, '2023-11-29 12:46:46', '2023-11-29 12:46:46'),
(80, 107, NULL, 'I would like to say a bid thank you to dr Despina. I am still under impression of how nice, friendly she is and how careful she treated my cats. This is just wow\r\nAnd she explained everything in details and I am not worried anymore. I know what to look after in my cats and how to treat it.\r\nClinic is convenient. Receptionist is a very nice person that supports throughout the process\r\nThanks a lot!', '2023-11-29 12:51:26', '2023-11-29 12:51:26'),
(81, 108, NULL, NULL, '2023-11-29 12:56:21', '2023-11-29 12:56:21'),
(82, 110, NULL, NULL, '2023-11-29 13:10:25', '2023-11-29 13:10:25'),
(83, 112, NULL, NULL, '2023-11-29 13:43:10', '2023-11-29 13:43:10'),
(84, 113, NULL, NULL, '2023-11-29 13:46:52', '2023-11-29 13:46:52'),
(85, 114, 'is it clean', 'Professional masseuses, I had a great experience with Tina.\r\nClean and relaxing  place', '2023-11-29 13:51:50', '2023-11-29 13:51:50'),
(86, 115, NULL, NULL, '2023-11-29 13:57:49', '2023-11-29 13:57:49'),
(87, 116, 'Do you have Ct scan', 'You wish to know about machine?', '2023-11-30 07:30:42', '2023-11-30 07:30:42'),
(88, 117, NULL, NULL, '2023-11-30 07:38:18', '2023-11-30 07:38:18'),
(89, 118, 'How often should I schedule regular check-ups and screenings?', 'During pregnancy, it\'s essential to schedule regular check-ups and screenings to ensure the health and well-being of both the mother and the developing fetus. The frequency of these prenatal appointments can vary depending on individual circumstances and healthcare provider recommendations. As a general guideline:', '2023-11-30 07:50:16', '2023-11-30 07:50:16'),
(90, 119, 'Dubai London Clinic and Speciality Hospital (Owner)', 'Dubai London Hospital has its own delivery suite for the delivery of your baby.\r\nPlease check the website.', '2023-11-30 08:55:42', '2023-11-30 08:55:42'),
(91, 120, NULL, NULL, '2023-11-30 09:13:10', '2023-11-30 09:13:10'),
(92, 121, NULL, NULL, '2023-11-30 09:22:43', '2023-11-30 09:22:43'),
(93, 122, NULL, NULL, '2023-11-30 09:33:37', '2023-11-30 09:33:37'),
(94, 123, NULL, NULL, '2023-11-30 09:43:44', '2023-11-30 09:43:44'),
(95, 124, NULL, NULL, '2023-11-30 09:55:14', '2023-11-30 09:55:14'),
(96, 125, NULL, NULL, '2023-11-30 10:05:27', '2023-11-30 10:05:27'),
(97, 128, NULL, NULL, '2023-11-30 11:52:05', '2023-11-30 11:52:05'),
(98, 129, NULL, NULL, '2023-11-30 11:55:38', '2023-11-30 11:55:38'),
(99, 130, NULL, NULL, '2023-11-30 12:23:22', '2023-11-30 12:23:22'),
(100, 131, NULL, NULL, '2023-11-30 12:28:35', '2023-11-30 12:28:35'),
(101, 132, NULL, NULL, '2023-11-30 12:36:22', '2023-11-30 12:36:22'),
(102, 133, NULL, NULL, '2023-11-30 12:40:16', '2023-11-30 12:40:16'),
(103, 137, NULL, NULL, '2023-12-01 07:56:49', '2023-12-01 07:56:49'),
(104, 138, NULL, NULL, '2023-12-01 08:04:56', '2023-12-01 08:04:56'),
(105, 141, NULL, NULL, '2023-12-01 08:37:29', '2023-12-01 08:37:29'),
(106, 142, NULL, NULL, '2023-12-01 08:49:33', '2023-12-01 08:49:33'),
(107, 143, NULL, NULL, '2023-12-01 09:00:04', '2023-12-01 09:00:04'),
(108, 144, 'Is this test approved before vaccination or not?', 'This is a test only to enter the Emirate of Abu Dhabi', '2023-12-01 09:09:24', '2023-12-01 09:09:24'),
(109, 145, NULL, NULL, '2023-12-01 09:13:57', '2023-12-01 09:13:57'),
(110, 146, NULL, NULL, '2023-12-01 10:36:05', '2023-12-01 10:36:05'),
(111, 147, NULL, NULL, '2023-12-01 10:43:34', '2023-12-01 10:43:34'),
(112, 151, NULL, NULL, '2023-12-04 11:02:53', '2023-12-04 11:02:53'),
(113, 152, NULL, NULL, '2023-12-04 11:12:30', '2023-12-04 11:12:30'),
(114, 153, NULL, NULL, '2023-12-04 11:25:12', '2023-12-04 11:25:12'),
(115, 154, NULL, NULL, '2023-12-04 11:35:38', '2023-12-04 11:35:38'),
(116, 157, NULL, NULL, '2023-12-04 12:10:50', '2023-12-04 12:10:50'),
(117, 158, NULL, NULL, '2023-12-08 06:39:12', '2023-12-08 06:39:12'),
(118, 159, NULL, NULL, '2023-12-08 06:55:17', '2023-12-08 06:55:17'),
(119, 161, NULL, NULL, '2023-12-08 07:32:34', '2023-12-08 07:32:34'),
(120, 162, NULL, NULL, '2023-12-08 07:37:04', '2023-12-08 07:37:04'),
(121, 163, NULL, 'Best pest control services in abu dhabi Highly recommend and cheap pest control services for kitchen and hotel', '2023-12-08 07:41:03', '2023-12-08 07:41:03'),
(122, 164, NULL, NULL, '2023-12-08 07:44:07', '2023-12-08 07:44:07'),
(123, 166, NULL, NULL, '2023-12-08 08:06:59', '2023-12-08 08:06:59'),
(124, 167, NULL, NULL, '2023-12-08 08:17:04', '2023-12-08 08:17:04'),
(125, 168, NULL, NULL, '2023-12-08 08:28:19', '2023-12-08 08:28:19'),
(126, 169, NULL, NULL, '2023-12-08 08:52:24', '2023-12-08 08:52:24'),
(127, 170, NULL, NULL, '2023-12-08 09:06:13', '2023-12-08 09:06:13'),
(128, 171, NULL, NULL, '2023-12-08 10:26:16', '2023-12-08 10:26:16'),
(129, 172, NULL, NULL, '2023-12-08 10:32:31', '2023-12-08 10:32:31'),
(130, 173, NULL, NULL, '2023-12-08 11:08:28', '2023-12-08 11:08:28'),
(131, 175, NULL, NULL, '2023-12-08 11:18:21', '2023-12-08 11:18:21'),
(132, 176, NULL, NULL, '2023-12-08 11:29:47', '2023-12-08 11:29:47'),
(133, 177, NULL, NULL, '2023-12-08 11:34:56', '2023-12-08 11:34:56'),
(134, 178, NULL, NULL, '2023-12-08 11:38:20', '2023-12-08 11:38:20'),
(135, 179, NULL, NULL, '2023-12-08 12:14:21', '2023-12-08 12:14:21'),
(136, 180, NULL, NULL, '2023-12-08 12:25:19', '2023-12-08 12:25:19'),
(137, 181, NULL, NULL, '2023-12-08 12:38:58', '2023-12-08 12:38:58'),
(138, 182, NULL, NULL, '2023-12-08 12:46:58', '2023-12-08 12:46:58'),
(139, 183, NULL, NULL, '2023-12-11 12:52:06', '2023-12-11 12:52:06'),
(140, 184, NULL, NULL, '2023-12-11 12:55:41', '2023-12-11 12:55:41'),
(141, 185, NULL, NULL, '2023-12-11 12:59:05', '2023-12-11 12:59:05'),
(142, 186, NULL, NULL, '2023-12-11 13:02:02', '2023-12-11 13:02:02'),
(143, 187, NULL, NULL, '2023-12-11 13:05:13', '2023-12-11 13:05:13'),
(144, 188, NULL, NULL, '2023-12-11 13:08:51', '2023-12-11 13:08:51'),
(145, 189, NULL, NULL, '2023-12-12 07:13:32', '2023-12-12 07:13:32'),
(146, 190, 'Q: Hello, how can I contact the owner of the business?', 'A: Hello, the problem is that my country does not allow me to call that number. I need a Gmail email to contact the owner', '2023-12-12 07:18:51', '2023-12-12 07:18:51'),
(147, 192, NULL, NULL, '2023-12-12 07:32:27', '2023-12-12 07:32:27'),
(148, 193, NULL, NULL, '2023-12-12 08:10:02', '2023-12-12 08:10:02'),
(149, 194, NULL, NULL, '2023-12-12 08:13:59', '2023-12-12 08:13:59'),
(150, 195, NULL, NULL, '2023-12-12 08:17:36', '2023-12-12 08:17:36'),
(151, 196, NULL, NULL, '2023-12-12 08:23:56', '2023-12-12 08:23:56'),
(152, 197, NULL, NULL, '2023-12-12 09:04:22', '2023-12-12 09:04:22'),
(154, 199, NULL, NULL, '2023-12-12 09:16:21', '2023-12-12 09:16:21'),
(155, 200, NULL, NULL, '2023-12-12 09:21:07', '2023-12-12 09:21:07'),
(156, 201, NULL, NULL, '2023-12-12 09:24:18', '2023-12-12 09:24:18'),
(157, 202, NULL, NULL, '2023-12-12 11:07:45', '2023-12-12 11:07:45'),
(158, 203, NULL, NULL, '2023-12-12 11:26:40', '2023-12-12 11:26:40'),
(159, 204, NULL, NULL, '2023-12-12 11:32:43', '2023-12-12 11:32:43'),
(160, 205, NULL, NULL, '2023-12-12 11:38:36', '2023-12-12 11:38:36'),
(161, 206, NULL, NULL, '2023-12-12 11:42:26', '2023-12-12 11:42:26'),
(162, 207, NULL, NULL, '2023-12-12 12:04:36', '2023-12-12 12:04:36'),
(163, 208, NULL, NULL, '2023-12-12 12:17:06', '2023-12-12 12:17:06'),
(164, 209, NULL, NULL, '2023-12-12 12:21:23', '2023-12-12 12:21:23'),
(165, 210, NULL, NULL, '2023-12-12 12:59:10', '2023-12-12 12:59:10'),
(166, 211, NULL, NULL, '2023-12-12 13:22:02', '2023-12-12 13:22:02'),
(167, 212, NULL, NULL, '2023-12-12 13:25:08', '2023-12-12 13:25:08'),
(168, 213, NULL, NULL, '2023-12-12 13:38:41', '2023-12-12 13:38:41'),
(169, 214, NULL, NULL, '2023-12-12 13:47:14', '2023-12-12 13:47:14'),
(170, 215, NULL, NULL, '2023-12-13 07:26:27', '2023-12-13 07:26:27'),
(171, 216, NULL, NULL, '2023-12-13 07:31:03', '2023-12-13 07:31:03'),
(172, 217, 'Does he have a monthly subscription?', 'Oh, they have a monthly subscription and new items in the menu.', '2023-12-13 07:38:23', '2023-12-13 07:38:23'),
(173, 218, NULL, NULL, '2023-12-13 07:42:18', '2023-12-13 07:42:18'),
(174, 219, NULL, NULL, '2023-12-13 08:17:19', '2023-12-13 08:17:19'),
(176, 230, NULL, NULL, '2023-12-13 09:07:12', '2023-12-13 09:07:12'),
(177, 231, NULL, NULL, '2023-12-13 09:12:58', '2023-12-13 09:12:58'),
(178, 232, NULL, NULL, '2023-12-13 09:27:40', '2023-12-13 09:27:40'),
(179, 233, NULL, NULL, '2023-12-13 09:36:38', '2023-12-13 09:36:38'),
(180, 234, NULL, NULL, '2023-12-13 11:33:18', '2023-12-13 11:33:18'),
(181, 235, NULL, NULL, '2023-12-13 11:46:30', '2023-12-13 11:46:30'),
(182, 236, NULL, NULL, '2023-12-13 12:28:35', '2023-12-13 12:28:35'),
(183, 237, NULL, NULL, '2023-12-13 12:32:28', '2023-12-13 12:32:28'),
(184, 238, NULL, NULL, '2023-12-13 12:43:21', '2023-12-13 12:43:21'),
(185, 240, NULL, NULL, '2023-12-13 13:15:27', '2023-12-13 13:15:27'),
(186, 241, NULL, NULL, '2023-12-13 13:20:16', '2023-12-13 13:20:16'),
(188, 244, NULL, NULL, '2023-12-13 13:33:20', '2023-12-13 13:33:20'),
(189, 245, NULL, NULL, '2023-12-14 07:54:48', '2023-12-14 07:54:48'),
(190, 246, 'How can i apply for work in five guys', 'check the website', '2023-12-14 08:00:39', '2023-12-14 08:00:39'),
(191, 247, NULL, NULL, '2023-12-14 08:09:12', '2023-12-14 08:09:12'),
(192, 248, NULL, NULL, '2023-12-14 08:13:28', '2023-12-14 08:13:28'),
(193, 249, NULL, NULL, '2023-12-14 08:31:22', '2023-12-14 08:31:22'),
(194, 250, 'Do you deliver the cars to JBR?', 'we are delivering our cars to anywhere in dubai sharjah and ajman', '2023-12-14 08:35:47', '2023-12-14 08:35:47'),
(195, 251, NULL, NULL, '2023-12-14 08:39:39', '2023-12-14 08:39:39'),
(196, 252, NULL, NULL, '2023-12-14 11:24:47', '2023-12-14 11:24:47'),
(197, 253, NULL, NULL, '2023-12-14 12:00:10', '2023-12-14 12:00:10'),
(198, 254, NULL, NULL, '2023-12-14 12:32:05', '2023-12-14 12:32:05'),
(199, 255, NULL, NULL, '2023-12-14 12:45:10', '2023-12-14 12:45:10'),
(200, 256, NULL, NULL, '2023-12-14 12:49:13', '2023-12-14 12:49:13'),
(201, 257, NULL, NULL, '2023-12-15 07:56:29', '2023-12-15 07:56:29'),
(202, 258, NULL, NULL, '2023-12-15 08:00:07', '2023-12-15 08:00:07'),
(203, 259, NULL, NULL, '2023-12-15 08:08:32', '2023-12-15 08:08:32'),
(204, 260, NULL, NULL, '2023-12-15 08:12:14', '2023-12-15 08:12:14'),
(205, 261, NULL, NULL, '2023-12-15 08:17:13', '2023-12-15 08:17:13'),
(206, 262, NULL, NULL, '2023-12-15 08:24:43', '2023-12-15 08:24:43'),
(207, 263, NULL, NULL, '2023-12-15 08:29:32', '2023-12-15 08:29:32'),
(208, 264, NULL, NULL, '2023-12-15 08:34:22', '2023-12-15 08:34:22'),
(209, 265, NULL, NULL, '2023-12-15 08:38:24', '2023-12-15 08:38:24'),
(210, 266, NULL, NULL, '2023-12-15 08:40:11', '2023-12-15 08:40:11'),
(211, 267, NULL, NULL, '2023-12-15 08:42:34', '2023-12-15 08:42:34'),
(212, 268, NULL, NULL, '2023-12-15 08:56:41', '2023-12-15 08:56:41'),
(213, 270, NULL, NULL, '2023-12-15 11:56:27', '2023-12-15 11:56:27'),
(214, 271, NULL, NULL, '2023-12-15 12:05:03', '2023-12-15 12:05:03'),
(215, 272, NULL, NULL, '2023-12-15 12:41:15', '2023-12-15 12:41:15'),
(216, 273, NULL, NULL, '2023-12-15 12:44:32', '2023-12-15 12:44:32'),
(217, 274, NULL, NULL, '2023-12-15 12:49:21', '2023-12-15 12:49:21'),
(218, 275, NULL, NULL, '2023-12-15 12:54:54', '2023-12-15 12:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `listing_menus`
--

CREATE TABLE `listing_menus` (
  `id` int(11) NOT NULL,
  `listing_id` int(11) DEFAULT NULL,
  `menu_title` varchar(100) DEFAULT NULL,
  `menu_price` double DEFAULT NULL,
  `menu_photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `listing_menus`
--

INSERT INTO `listing_menus` (`id`, `listing_id`, `menu_title`, `menu_price`, `menu_photo`, `created_at`, `updated_at`) VALUES
(11, 29, 'Cheese Mrig Buttor', 129, '14466599081678081231.png', '2023-03-06 04:58:35', '2023-03-06 05:40:31'),
(12, 29, 'Potato Chips Crispy', 79, '4412326201678081231.png', '2023-03-06 04:58:35', '2023-03-06 05:40:31'),
(13, 29, 'Non Vegetarion Burger', 60, '5789010671678081231.png', '2023-03-06 04:58:35', '2023-03-06 05:40:31'),
(14, 29, 'test item', 20, '9534163961678081743.png', '2023-03-06 05:49:03', '2023-03-06 05:49:03'),
(15, 32, 'Brigue Medium Burger', 49, '18857352441679373327.png', '2023-03-21 04:35:27', '2023-03-21 04:35:27'),
(16, 32, 'Cheese Mrig Buttor', 129, '20949070491679373327.png', '2023-03-21 04:35:27', '2023-03-21 04:35:27'),
(18, 32, 'Non Vegetarion Burger', 60, '8296999681679373327.png', '2023-03-21 04:35:27', '2023-03-21 04:35:27'),
(19, 33, 'Pizza', 120, '17247293581679810998.png', '2023-03-26 06:09:58', '2023-03-26 06:09:58'),
(20, 33, 'Brigue Medium Burger', 870, '7155647161679810998.png', '2023-03-26 06:09:58', '2023-03-26 06:09:58'),
(27, 32, NULL, NULL, NULL, '2023-07-17 10:02:40', '2023-07-17 10:02:40'),
(28, 32, NULL, NULL, NULL, '2023-07-17 10:02:47', '2023-07-17 10:02:47'),
(29, 32, NULL, NULL, NULL, '2023-07-17 10:10:58', '2023-07-17 10:10:58'),
(30, 32, NULL, NULL, NULL, '2023-07-17 10:11:07', '2023-07-17 10:11:07');

-- --------------------------------------------------------

--
-- Table structure for table `listing_reviews`
--

CREATE TABLE `listing_reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `listing_owner_id` int(11) DEFAULT NULL,
  `listing_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `view` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `listing_reviews`
--

INSERT INTO `listing_reviews` (`id`, `user_id`, `listing_owner_id`, `listing_id`, `name`, `email`, `message`, `rate`, `view`, `status`, `created_at`, `updated_at`) VALUES
(14, 104, NULL, 34, 'Farhad Hossian', 'farhad@gmail.com', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.', 3, 1, 2, '2023-04-10 06:18:13', '2023-05-02 08:47:25'),
(15, 104, NULL, 33, 'ahammed imtiaze', 'user@gmail.com', 'I am not satisfied with their services.', 3, 1, 2, '2023-04-10 08:06:26', '2023-04-17 09:26:39'),
(34, 149, 0, 65, 'Feroz', 'Feroz.zeenath@gmail.com', 'Nice', 5, 1, 1, '2023-11-28 17:54:09', '2023-11-29 13:04:53'),
(35, 149, 0, 84, 'Feroz', 'Feroz.zeenath@gmail.com', 'Superb Taste😍😍😍', 5, 1, 1, '2023-11-29 01:48:26', '2023-11-29 13:04:53'),
(36, 149, 0, 89, 'فيروذ', 'Feroz.zeenath@gmail.com', 'هلا', 5, 1, 1, '2023-12-04 09:19:21', '2023-12-12 06:07:50');

-- --------------------------------------------------------

--
-- Table structure for table `listing_rooms`
--

CREATE TABLE `listing_rooms` (
  `id` int(11) NOT NULL,
  `listing_id` int(11) DEFAULT NULL,
  `room_name` varchar(100) DEFAULT NULL,
  `room_price` double DEFAULT NULL,
  `room_photo` varchar(255) DEFAULT NULL,
  `room_description` text DEFAULT NULL,
  `room_amenities` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `listing_rooms`
--

INSERT INTO `listing_rooms` (`id`, `listing_id`, `room_name`, `room_price`, `room_photo`, `room_description`, `room_amenities`, `created_at`, `updated_at`) VALUES
(5, 34, 'Executive Room', 1200, '19404017351679819227.jpg', 'They all have big floor-to-ceiling windows to give you an amazing view of either the city of Copenhagen, Combine’s Garden or Islands Brygge.', 'Restaurant,air condition', '2023-03-26 08:27:07', '2023-03-26 08:27:07'),
(6, 34, 'Standard room', 1000, '20731132631679819227.jpg', 'Our Standard rooms are all of comfortable and functional décor to meet the basic needs for you during your stay.', 'Bar,Parking', '2023-03-26 08:27:07', '2023-03-27 06:15:16'),
(10, 59, 'Hotel Honest', 5000, '14339255271688710797.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Hotel Honest', '2023-07-07 06:19:57', '2023-07-07 06:19:57');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `slug`, `parent_id`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Fujeirah', 'fujeirah', 7, 'Hl16acyS1684397759.jpg', 1, '2022-11-22 04:44:40', '2023-07-08 07:50:04'),
(3, 'Ras Al Khaimah', 'ras-al-khaimah', NULL, 'Bt43FMIG1684397724.jpg', 1, '2022-11-22 05:17:53', '2023-07-08 07:49:32'),
(4, 'Ajman', 'ajman', NULL, 'kvA7BbqR1684397708.jpg', 1, '2022-11-22 05:38:18', '2023-07-08 07:49:11'),
(5, 'Sharjah', 'sharjah', NULL, '9s5ETSDc1684397641.jpg', 1, '2022-11-22 05:38:35', '2023-07-08 07:48:52'),
(6, 'Dubai', 'dubai', NULL, 'bZPC80Fw1684397622.jpg', 1, '2022-11-22 05:39:09', '2023-07-08 07:48:38'),
(7, 'Abu Dhabi', 'abu-dhabi', NULL, 'KkmKqhuy1684397603.jpg', 1, '2022-12-19 09:47:40', '2023-07-08 07:48:24'),
(12, 'Um-Al-Quwain', 'um-al-quwain', NULL, 'tijtXJBt1688802685.jpg', 1, '2023-07-08 07:51:25', '2023-07-08 07:51:25'),
(13, 'Khor Fakkan', 'khor-fakkan', NULL, 'Wo2tXVDK1696759357.jpeg', 1, '2023-10-08 10:02:37', '2023-10-08 10:02:37');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(191) NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `title`, `subtitle`, `photo`, `facebook`, `twitter`, `linkedin`) VALUES
(2, 'Ervin Kim', 'CEO of Apple', '1561539258comment2.png', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.linkedin.com'),
(3, 'Ervin Kim', 'CEO of Apple', '1561539242comment2.png', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.linkedin.com'),
(4, 'Ervin Kim', 'CEO of Apple', '1561539231comment2.png', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.linkedin.com'),
(5, 'Ervin Kim', 'CEO of Apple', '1561539222comment2.png', NULL, 'https://www.twitter.com', 'https://www.linkedin.com'),
(6, 'Ervin Kim', 'CEO of Apple', '1561539213comment2.png', NULL, 'https://www.twitter.com', 'https://www.linkedin.com'),
(7, 'Ervin Kim', 'CEO of Apple', '1561539184comment2.png', 'https://www.facebook.com', NULL, 'https://www.linkedin.com'),
(8, 'Ervin Kim', 'CEO of Apple', '1561539197comment2.png', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.linkedin.com'),
(9, 'Ervin Kim', 'CEO of Apple', '1561539345comment2.png', 'https://www.facebook.com', 'https://www.twitter.com', NULL);

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
(1, '2019_01_26_221915_create_coinpayment_transactions_table', 1),
(2, '2020_11_30_030150_create_coinpayment_transaction_items_table', 1),
(3, '2022_02_06_050222_create_wire_transfer_banks_table', 1),
(4, '2022_02_13_094244_create_bank_plans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(191) NOT NULL,
  `order_id` int(191) UNSIGNED DEFAULT NULL,
  `user_id` int(191) DEFAULT NULL,
  `vendor_id` int(191) DEFAULT NULL,
  `product_id` int(191) DEFAULT NULL,
  `conversation_id` int(191) DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `order_id`, `user_id`, `vendor_id`, `product_id`, `conversation_id`, `is_read`, `created_at`, `updated_at`) VALUES
(187, NULL, 99, NULL, NULL, NULL, 0, '2022-09-25 08:05:28', '2022-09-25 08:05:28'),
(188, NULL, 102, NULL, NULL, NULL, 0, '2022-12-22 09:02:53', '2022-12-22 09:02:53'),
(189, NULL, 105, NULL, NULL, NULL, 0, '2023-01-02 04:46:43', '2023-01-02 04:46:43'),
(190, NULL, 106, NULL, NULL, NULL, 0, '2023-02-01 11:21:15', '2023-02-01 11:21:15'),
(191, NULL, 107, NULL, NULL, NULL, 0, '2023-04-13 09:05:27', '2023-04-13 09:05:27'),
(192, NULL, 108, NULL, NULL, NULL, 0, '2023-07-07 05:10:17', '2023-07-07 05:10:17'),
(193, NULL, 109, NULL, NULL, NULL, 0, '2023-07-10 05:09:18', '2023-07-10 05:09:18'),
(194, NULL, 110, NULL, NULL, NULL, 0, '2023-07-19 11:43:00', '2023-07-19 11:43:00'),
(195, NULL, 111, NULL, NULL, NULL, 0, '2023-07-25 10:49:13', '2023-07-25 10:49:13'),
(196, NULL, 120, NULL, NULL, NULL, 0, '2023-09-07 07:15:49', '2023-09-07 07:15:49'),
(197, NULL, 120, NULL, NULL, NULL, 0, '2023-09-07 07:16:01', '2023-09-07 07:16:01'),
(198, NULL, 138, NULL, NULL, NULL, 0, '2023-10-30 11:12:47', '2023-10-30 11:12:47'),
(199, NULL, 140, NULL, NULL, NULL, 0, '2023-11-04 03:22:59', '2023-11-04 03:22:59'),
(200, NULL, 140, NULL, NULL, NULL, 0, '2023-11-04 06:51:37', '2023-11-04 06:51:37'),
(201, NULL, 178, NULL, NULL, NULL, 0, '2023-12-19 09:11:28', '2023-12-19 09:11:28');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(191) NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_tag` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header` tinyint(1) NOT NULL DEFAULT 0,
  `footer` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `details`, `meta_tag`, `meta_description`, `header`, `footer`, `status`) VALUES
(1, 'About Us', 'about', '<p style=\"text-align:justify;\">Welcome to Wayin, the ultimate multi-listing local searching app designed to help you find exactly what you\'re looking for quickly and easily. We understand how important it is to have access to a comprehensive platform that offers a diverse range of listings, and that\'s why we\'ve created this app to make your search process seamless and efficient.</p><p style=\"text-align:justify;\"><b>Who We Are:</b><br></p><p style=\"text-align:justify;\"><b>We are in Virtual World Company</b>, with  a team of dedicated and passion for technology we are committed to simplifying your search experience. Our mission is to connect buyers and sellers, renters and landlords, and service providers and customers through a user-friendly and powerful search platform.</p><p style=\"text-align:justify;\"><b>Our Mission:</b></p><p style=\"text-align:justify;\">Our mission is to empower users by providing them with the tools they need to discover, compare, and connect with the perfect listings for their needs. We strive to create an inclusive marketplace where individuals and businesses can easily showcase their offerings and where users can find exactly what they are looking for.</p><p style=\"text-align:justify;\"><b>What We Offer:</b></p><p style=\"text-align:justify;\">Virtual world company through wayin  app offers Comprehensive Listings: Whether you\'re searching for real estate properties, automobiles, electronics, jobs, services, or any other products, our app offers a wide array of listings to cater to your specific requirements.</p><p style=\"text-align:justify;\">Smart Search Filters: Finding the right listing is a breeze with our smart search filters. Refine your search based on location, price, category, and other customizable criteria to get accurate results in no time.</p><p style=\"text-align:justify;\">Real-Time Updates: Our app is constantly updated with the latest listings, ensuring that you have access to the most recent options available in the market.</p><p style=\"text-align:justify;\">Map Integration: View listings on an interactive map to get a better sense of their locations and surrounding amenities.</p><p style=\"text-align:justify;\">Save Favorites: Create your own personalized collection by saving your favorite listings for future reference.</p><p style=\"text-align:justify;\">User Reviews and Ratings: Make informed decisions by checking out reviews and ratings left by other users about their experiences with listings and service providers.</p><p style=\"text-align:justify;\">Secure Communication: Our messaging system ensures secure and direct communication between buyers and sellers, making it convenient to inquire about listings and arrange transactions.</p><p style=\"text-align:justify;\">User-Friendly Interface: We\'ve designed our app to be intuitive and easy to use, so you can focus on finding what you need without any hassle.</p><p style=\"text-align:justify;\">Whether you\'re a buyer or a seller, wayin is the go-to destination for all your multi-listing searching needs. Join our community today and unlock the full potential of your search process.</p><p style=\"text-align:justify;\"><br></p><p style=\"text-align:justify;\">Wayin - Your Local Search, Simplified.</p><div><br><div><br></div></div>', 'wayin,in,way,ask,were', NULL, 1, 0, 1),
(2, 'Privacy & Policy', 'privacy', '<p>At Wayin, we are committed to protecting the privacy and security of our users\' personal information. This User Privacy Policy outlines how we collect, use, disclose, and safeguard the information you provide when using our website as a user. By accessing or using our website, you consent to the practices described in this policy.</p><p><br><b>a. Personal Information:</b></p><p> When you create an account or use certain features of our website, we may collect personal information, including but not limited to your name, email address, contact details, and other information you voluntarily provide.<br>b. Location Information: To provide accurate local search results, we may collect your device\'s location information with your explicit consent.<br>c. Search Queries and Interaction Data: We may collect data related to your search queries, interactions with search results, and actions taken on our website to improve user experience and enhance our services.<br>d. Usage Data: We collect non-personal information about your interaction with our website, such as IP addresses, device information, browser type, and pages visited, through cookies and similar technologies.<br></p><p><br><b>How We Use Your Information:</b></p><p>a. To Provide Local Search Services: We use the information you provide, including your location, to deliver relevant local search results, such as nearby businesses, services, events, and points of interest.<br>b. Communication: We may use your contact information to send you transactional emails, updates, and notifications related to your account, search results, and website features.<br>c. Personalization: We may use your search history and preferences to personalize your experience on our website, providing tailored search results and recommendations.<br>d. Website Improvement: We use usage data to analyze user behavior, track website performance, and make necessary improvements to enhance the functionality and usability of our website.<br>e. Compliance and Legal Obligations: We may use your information to comply with legal obligations, enforce our Terms of Service, and protect the rights, property, or safety of our users or others.<br></p><p><br></p><p><b>Information Sharing:</b></p><p>a. Local Businesses and Service Providers: Your search queries and location information may be shared with local businesses and service providers to facilitate communication and transactions related to your search results.<br>b. Third-Party Service Providers: We may share your information with trusted third-party service providers who assist us in operating our website, conducting business operations, or providing services on our behalf. These providers are contractually bound to keep your information confidential and secure.<br>c. Business Transactions: In the event of a merger, acquisition, or sale of our business or assets, user information may be transferred as part of the transaction. We will notify you of any such change and ensure the protection of your information.<br>d. Legal Requirements: We may disclose your information when required by law, court order, or governmental authority.<br>Cookies and Similar Technologies:<br>We use cookies and similar technologies to collect usage data and enhance user experience. Cookies are small text files stored on your device when you visit our website. You can manage your cookie preferences through your browser settings.<br></p><p><br><b>Data Security:</b><br></p><p>We employ industry-standard security measures to protect your information from unauthorized access, misuse, or disclosure. However, no method of data transmission over the internet or electronic storage is entirely secure, and we cannot guarantee absolute security.<br></p><p><b>Children\'s Privacy:</b></p><p>Our website is not intended for use by individuals under the age of 18. We do not knowingly collect personal information from minors. If you believe we have inadvertently collected such information, please contact us, and we will take appropriate measures to remove it.</p><p><br><b>Changes to the Privacy Policy:</b></p><p>We may update this User Privacy Policy from time to time to reflect changes in our practices or legal requirements. The updated policy will be posted on our website, and the effective date will be revised accordingly.<br></p><p><b>Contact Us:</b><br></p><p>If you have any questions or concerns about our User Privacy Policy or your personal information, please contact us at info@thevrw.com<br>By using our local search service website as a user, you acknowledge that you have read and understood this User Privacy Policy and consent to the collection, use, and disclosure of your information as described herein.</p><p><br></p>', NULL, NULL, 0, 1, 1),
(4, 'Support', 'support', '<h3>Title number 1</h3>\r\n<br>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n<br>\r\n<h3>Title number 2</h3>\r\n<br>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<br>\r\n<h3>Title number 3</h3>\r\n<br>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<br>\r\n<h3>Title number 4</h3>\r\n<br>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', NULL, NULL, 0, 0, 1),
(6, 'We are Hiring', 'we-are-hiring', '<p>We are Hiring<br></p>', 'We are Hiring', '<p>We are Hiring<br></p>', 0, 0, 1),
(7, 'Investors Relations', 'investors-relations', '<p>Investors Relations<br></p>', 'Investors Relations', '<p>Investors Relations<br></p>', 0, 0, 1),
(8, 'Advertise', 'advertise', '<p>Advertise<br></p>', 'Advertise', '<p>Advertise<br></p>', 0, 0, 1),
(10, 'Terms & Conditions', 'terms-conditions', '<p style=\"text-align:justify;\">Welcome to wayin! These Terms &amp; Conditions (\"Terms\") govern your use of our website and mobile app as a user. By accessing or using our services, you agree to be bound by these Terms. If you do not agree with any part of these Terms, please refrain from using our website and app.</p><p style=\"text-align:justify;\"><b>User Accounts:</b></p><p style=\"text-align:justify;\">a. Account Creation: To access certain features of our website and app, you may need to create an account. You are responsible for providing accurate and up-to-date information during the account creation process.</p><p style=\"text-align:justify;\">b. Account Security: You are responsible for maintaining the confidentiality of your account credentials (username and password). You agree not to share your account information with others and to notify us immediately if you suspect unauthorized access to your account.</p><p style=\"text-align:justify;\"><b>Use of Services:</b></p><p style=\"text-align:justify;\">a. Personal Use: Our website and app are intended for personal, non-commercial use. You may not use our services for any commercial purposes without our express written consent.</p><p style=\"text-align:justify;\">b. Prohibited Activities: You agree not to engage in any of the following activities while using our services:</p><p style=\"text-align:justify;\">Violating any applicable laws, regulations, or third-party rights.</p><p style=\"text-align:justify;\">Providing false or misleading information.</p><p style=\"text-align:justify;\">Creating multiple accounts for fraudulent or abusive purposes.</p><p style=\"text-align:justify;\">Using automated scripts or bots to access or interact with our website and app.</p><p style=\"text-align:justify;\">Uploading or transmitting viruses, malware, or any other harmful code.</p><p style=\"text-align:justify;\">Attempting to gain unauthorized access to our systems or user accounts.</p><p style=\"text-align:justify;\">c. User Content: You may have the opportunity to submit reviews, ratings, and other content related to businesses and services on our platform. By submitting such content, you grant us a non-exclusive, royalty-free, perpetual, and worldwide license to use, reproduce, modify, and display your content for the purposes of providing and promoting our services.</p><p style=\"text-align:justify;\"><b>Business Listings and User Reviews:</b></p><p style=\"text-align:justify;\">a. Business Information: We strive to provide accurate and up-to-date business information on our platform. However, we do not endorse, warrant, or guarantee the accuracy, reliability, or completeness of the information provided by businesses.</p><p style=\"text-align:justify;\">b. User Reviews and Ratings: User-generated reviews and ratings reflect the opinions and experiences of individual users. We do not endorse, warrant, or guarantee the accuracy or authenticity of user reviews and ratings. Users are encouraged to exercise their judgment when relying on such content.</p><p style=\"text-align:justify;\"><span style=\"font-size:1rem;\">c. Content Moderation: We reserve the right to moderate, edit, or remove user-generated content that violates these Terms, contains inappropriate material, or is otherwise objectionable.</span></p><p style=\"text-align:justify;\"><b>Intellectual Property:</b></p><p style=\"text-align:justify;\">a. Website and App Content: All content on our website and app, including text, graphics, logos, images, and software, is the property of wayin or its licensors and is protected by intellectual property laws.</p><p style=\"text-align:justify;\">b. Limited License: We grant you a limited, non-exclusive, non-transferable license to access and use our services for personal, non-commercial purposes. You may not modify, copy, distribute, transmit, display, perform, reproduce, publish, license, create derivative works from, transfer, or sell any information or content obtained from our website and app.</p><p style=\"text-align:justify;\"><b>Disclaimer of Warranties:</b></p><p style=\"text-align:justify;\">a. Our services are provided on an \"as is\" and \"as available\" basis. We do not warrant that our website and app will be error-free, uninterrupted, or free from harmful components.</p><p style=\"text-align:justify;\">b. We make no warranties, express or implied, regarding the accuracy, reliability, or completeness of business information, user reviews, or any other content provided through our services.</p><p style=\"text-align:justify;\"><b>Limitation of Liability:</b></p><p style=\"text-align:justify;\">a. In no event shall wayin, its affiliates, or their respective officers, directors, employees, or agents be liable for any indirect, incidental, special, consequential, or punitive damages arising out of or in connection with your use of our services.</p><p style=\"text-align:justify;\">b. Our total liability to you for any claims, damages, losses, or liabilities shall not exceed the amount you paid (if any) to use our services.</p><p style=\"text-align:justify;\"><b>Indemnification</b>:</p><p style=\"text-align:justify;\">You agree to indemnify and hold harmless wayin, its affiliates, and their respective officers, directors, employees, or agents from any claims, losses, damages, liabilities, and expenses, including attorney\'s fees, arising out of or in connection with your use of our services, violation of these Terms, or infringement of any third-party rights.</p><p style=\"text-align:justify;\"><b>Modifications to Terms:</b></p><p style=\"text-align:justify;\">We may update these Terms from time to time to reflect changes in our services or legal requirements. The updated Terms will be posted on our website and app, and the effective date will be revised accordingly. Your continued use of our services after the posting of the updated Terms constitutes your acceptance of the changes.</p><p style=\"text-align:justify;\"><b>Termination:</b></p><p style=\"text-align:justify;\">We reserve the right to suspend or terminate your access to our services at any time, for any reason, without notice or liability.</p><p style=\"text-align:justify;\">Governing Law and Jurisdiction:</p><p style=\"text-align:justify;\">These Terms shall be governed by and construed in accordance with the laws of UAE. Any disputes arising out of or relating to these Terms shall be subject to the exclusive jurisdiction of the courts in UAE.</p><p style=\"text-align:justify;\"><b>Contact Us:</b></p><p style=\"text-align:justify;\">If you have any questions or concerns about these Terms or our services, please contact us at <a href=\"info@thevrw.com\">info@thevrw.com</a>.</p><p style=\"text-align:justify;\">By using our website and app as a user, you acknowledge that you have read, understood, and agreed to these <u>Terms &amp; Conditions.</u></p>', NULL, NULL, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pagesettings`
--

CREATE TABLE `pagesettings` (
  `id` int(10) UNSIGNED NOT NULL,
  `contact_success` varchar(191) NOT NULL,
  `contact_email` varchar(191) NOT NULL,
  `contact_title` text DEFAULT NULL,
  `contact_text` text DEFAULT NULL,
  `side_title` text DEFAULT NULL,
  `street` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `site` text DEFAULT NULL,
  `hero_title` varchar(255) DEFAULT NULL,
  `hero_subtitle` varchar(255) DEFAULT NULL,
  `hero_photo` varchar(255) DEFAULT NULL,
  `review_blog` tinyint(1) NOT NULL DEFAULT 1,
  `pricing_plan` tinyint(1) NOT NULL DEFAULT 0,
  `plan_title` varchar(255) DEFAULT NULL,
  `plan_subtitle` text DEFAULT NULL,
  `directory_title` varchar(255) DEFAULT NULL,
  `directory_subtitle` varchar(255) DEFAULT NULL,
  `location_title` varchar(255) DEFAULT NULL,
  `location_subtitle` text DEFAULT NULL,
  `category_title` varchar(255) DEFAULT NULL,
  `category_subtitle` varchar(255) DEFAULT NULL,
  `blog_title` varchar(100) DEFAULT NULL,
  `blog_subtitle` varchar(100) DEFAULT NULL,
  `mission_title` varchar(100) DEFAULT NULL,
  `mission_text` text DEFAULT NULL,
  `mission_photo` varchar(255) DEFAULT NULL,
  `process_title` varchar(255) DEFAULT NULL,
  `process_text` text DEFAULT NULL,
  `process_photo` varchar(255) DEFAULT NULL,
  `partner_title` varchar(100) DEFAULT NULL,
  `partner_subtitle` varchar(255) DEFAULT NULL,
  `download_title` varchar(255) DEFAULT NULL,
  `download_subtitle` varchar(100) DEFAULT NULL,
  `download_text` text DEFAULT NULL,
  `download_photo` varchar(255) DEFAULT NULL,
  `google_play_link` varchar(255) DEFAULT NULL,
  `app_store_link` varchar(255) DEFAULT NULL,
  `footer_top_photo` varchar(255) DEFAULT NULL,
  `footer_top_title` varchar(255) DEFAULT NULL,
  `footer_top_text` varchar(255) DEFAULT NULL,
  `app_banner` varchar(255) DEFAULT NULL,
  `listing_title` varchar(255) DEFAULT NULL,
  `listing_subtitle` varchar(255) DEFAULT NULL,
  `listing_details` text DEFAULT NULL,
  `listing_photo` varchar(255) DEFAULT NULL,
  `call_title` varchar(255) DEFAULT NULL,
  `call_subtitle` varchar(255) DEFAULT NULL,
  `call_bg` varchar(255) DEFAULT NULL,
  `home_module` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pagesettings`
--

INSERT INTO `pagesettings` (`id`, `contact_success`, `contact_email`, `contact_title`, `contact_text`, `side_title`, `street`, `phone`, `site`, `hero_title`, `hero_subtitle`, `hero_photo`, `review_blog`, `pricing_plan`, `plan_title`, `plan_subtitle`, `directory_title`, `directory_subtitle`, `location_title`, `location_subtitle`, `category_title`, `category_subtitle`, `blog_title`, `blog_subtitle`, `mission_title`, `mission_text`, `mission_photo`, `process_title`, `process_text`, `process_photo`, `partner_title`, `partner_subtitle`, `download_title`, `download_subtitle`, `download_text`, `download_photo`, `google_play_link`, `app_store_link`, `footer_top_photo`, `footer_top_title`, `footer_top_text`, `app_banner`, `listing_title`, `listing_subtitle`, `listing_details`, `listing_photo`, `call_title`, `call_subtitle`, `call_bg`, `home_module`) VALUES
(1, 'Success! Thanks for contacting us, we will get back to you shortly.', 'info@thevrw.com', '<h4 class=\"subtitle\" style=\"margin-bottom: 6px; font-weight: 600; line-height: 28px; font-size: 28px; text-transform: uppercase;\">WE\'D LOVE TO</h4><h2 class=\"title\" style=\"margin-bottom: 13px;font-weight: 600;line-height: 50px;font-size: 40px;color: #1f71d4;text-transform: uppercase;\">HEAR FROM YOU</h2>', '<span style=\"color: rgb(119, 119, 119);\">Send us a message and we\' ll respond as soon as possible</span><br>', 'Get in Touch with US', '<p>Virtual World for Computer Systems &amp; Communication Equipment Software Trading&nbsp;<span style=\"font-size: 1rem;\"><br></span></p><p><span style=\"font-size: 1rem;\">Mushrif Village, Villa 45, Mirdif, Dubai - United Arab Emirates</span><br></p>', '+971 54 562 0202', 'https://thevrw.com', 'Explore Your Perfect Town', 'Explore greate place to stay, salon, shoping, massage or visit local areas.', 'ZE3hI56R1692707312.jpg', 1, 1, 'Our Pricing', 'Choose Your Package', 'Featured Listings', 'Rego in Los Angeles', 'Find By Locations', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores<br>', 'Popular Categories', 'Browse Top Categories', 'Latest News', 'Pickup New Updates', 'Claim Your Business & Get Started Today!', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.\r\n\r\nAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', 'wYcVv6ru1684396740.png', 'How it works & features Around The Globe', 'Wayin it', '73U6Zlk31684319968.png', 'Our Partners', 'We Have Worked with 10,000+ Trusted Companies', 'Download apps', 'Download the Rego App For Easy Use', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.<br>', 'TwM9W66z1697295722.webp', 'https://play.google.com/store/games?hl=en&gl=US&pli=1', 'https://play.google.com/store/games?hl=en&gl=US&pli=1', '1639561929call-to-action-bg.jpg', 'GET STARTED TODAY WITH BITCOIN', 'Open account for free and start trading Bitcoins!', 'gFNRbRDL1645425298.png', 'Best In UAE', 'Visit The Best Spa & Hotels in Dubai', '<p>Visit The Best Spa &amp; Hotels in Dubai<br></p>', 'vZEbEe7P1684663539.jpg', 'Subscribe Now', '<p><span style=\"font-family: Roboto;\">﻿</span>Get All News &amp; Work Notification</p>', '#4c3357', '[\"Banner\",\"Mission\",\"Process\",\"Location\",\"Submit listing\",\"Review\",\"Author\",\"Space\",\"Faq\",\"Category\",\"Feature Directory\",\"Blogs\",\"Packages\",\"Partners\",\"Apps\",\"CTAs\"]');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_url` varchar(255) NOT NULL,
  `brand_img` varchar(255) NOT NULL,
  `photo` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `brand_name`, `brand_url`, `brand_img`, `photo`, `created_at`, `updated_at`) VALUES
(6, 'Burger King', 'https://askwayin.com/', 'NdJFtwd11698594146.png', '00MIeB9e1691483844.png', '2023-04-14 18:00:00', '2023-10-29 15:42:26'),
(14, 'Aramex', 'https://askwayin.com/', 'QS5ZU4JG1698593870.png', 'aT9pclKU1691482215.png', '2023-07-27 10:24:11', '2023-10-29 15:37:50'),
(21, 'Carrefour', 'https://askwayin.com/', 'j274QTRz1698592806.png', 'FJXrZFKp1697985278.png', '2023-08-24 07:22:53', '2023-10-29 15:20:06'),
(22, 'Ikea', 'https://askwayin.com/', 'CpN7eCal1698166450.png', '16XUI4hJ1692864163.png', '2023-08-24 08:02:43', '2023-10-24 16:54:10'),
(23, 'StarBucks', 'https://askwayin.com/', 'fTkoU9Yv1698592521.png', 'NZ3QdH8y1692864502.png', '2023-08-24 08:08:22', '2023-10-29 15:15:21'),
(26, 'Emirates', 'https://askwayin.com/', 'Ro4l4vbA1698593635.png', 'vs6GWrFo1692864986.png', '2023-08-24 08:16:26', '2023-10-29 15:33:55'),
(27, 'Enoc', 'https://askwayin.com/', 'EapjBhAP1698594635.png', 'tVLVLXNe1692865231.png', '2023-08-24 08:20:31', '2023-10-29 15:50:35'),
(28, 'KFC', 'https://askwayin.com/', 'HV4RMBx71698592238.png', 'y706HIOl1692865625.png', '2023-08-24 08:27:05', '2023-10-29 15:10:38');

-- --------------------------------------------------------

--
-- Table structure for table `payment_gateways`
--

CREATE TABLE `payment_gateways` (
  `id` int(191) NOT NULL,
  `subtitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('manual','automatic') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'manual',
  `information` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` varchar(191) DEFAULT NULL,
  `currency_id` varchar(191) NOT NULL DEFAULT '0',
  `status` int(191) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment_gateways`
--

INSERT INTO `payment_gateways` (`id`, `subtitle`, `title`, `details`, `name`, `type`, `information`, `keyword`, `currency_id`, `status`) VALUES
(6, NULL, NULL, NULL, 'Flutter Wave', 'automatic', '{\"public_key\":\"FLWPUBK_TEST-299dc2c8bf4c7f14f7d7f48c32433393-X\",\"secret_key\":\"FLWSECK_TEST-afb1f2a4789002d7c0f2185b830450b7-X\",\"text\":\"Pay via your Flutter Wave account.\"}', 'flutterwave', '[\"1\"]', 0),
(8, NULL, NULL, NULL, 'Authorize.Net', 'automatic', '{\"login_id\":\"76zu9VgUSxrJ\",\"txn_key\":\"2Vj62a6skSrP5U3X\",\"sandbox_check\":1,\"text\":\"Pay Via Authorize.Net\"}', 'authorize.net', '[\"1\"]', 0),
(9, NULL, NULL, NULL, 'Razorpay', 'automatic', '{\"key\":\"rzp_test_xDH74d48cwl8DF\",\"secret\":\"cr0H1BiQ20hVzhpHfHuNbGri\",\"text\":\"Pay via your Razorpay account.\"}', 'razorpay', '[\"8\"]', 0),
(10, NULL, NULL, NULL, 'Mollie Payment', 'automatic', '{\"key\":\"test_jePgBjaRV5rUdzWc44rb2fUxgM2dM9\",\"text\":\"Pay with Mollie Payment.\"}', 'mollie', '[\"1\",\"6\"]', 0),
(11, NULL, NULL, NULL, 'Paytm', 'automatic', '{\"merchant\":\"PzFzaa7088660\",\"secret\":\"S7OPp7cs5@gU\",\"website\":\"WEBSTAGING\",\"industry\":\"Retail\",\"sandbox_check\":1,\"text\":\"Pay via your Paytm account.\"}', 'paytm', '[\"8\"]', 0),
(12, NULL, NULL, NULL, 'Paystack', 'automatic', '{\"key\":\"pk_test_162a56d42131cbb01932ed0d2c48f9cb99d8e8e2\",\"email\":\"junnuns@gmail.com\",\"text\":\"Pay via your Paystack account.\"}', 'paystack', '[\"9\"]', 0),
(13, NULL, NULL, NULL, 'Instamojo', 'automatic', '{\"key\":\"test_172371aa837ae5cad6047dc3052\",\"token\":\"test_4ac5a785e25fc596b67dbc5c267\",\"sandbox_check\":1,\"text\":\"Pay via your Instamojo account.\"}', 'instamojo', '[\"8\"]', 0),
(14, NULL, NULL, NULL, 'Stripe', 'automatic', '{\"key\":\"pk_test_UnU1Coi1p5qFGwtpjZMRMgJM\",\"secret\":\"sk_test_QQcg3vGsKRPlW6T3dXcNJsor\",\"text\":\"Pay via your Credit Card.\"}', 'stripe', '[\"1\"]', 0),
(15, NULL, NULL, NULL, 'Paypal', 'automatic', '{\"client_id\":\"AcWYnysKa_elsQIAnlfsJXokR64Z31CeCbpis9G3msDC-BvgcbAwbacfDfEGSP-9Dp9fZaGgD05pX5Qi\",\"client_secret\":\"EGZXTq6d6vBPq8kysVx8WQA5NpavMpDzOLVOb9u75UfsJ-cFzn6aeBXIMyJW2lN1UZtJg5iDPNL9ocYE\",\"sandbox_check\":1,\"text\":\"Pay via your PayPal account.\"}', 'paypal', '[\"1\"]', 1),
(37, NULL, NULL, NULL, 'Telr', 'automatic', '{\"client_id\":\"g\",\"client_secret\":\"EGZ\",\"sandbox_check\":1,\"text\":\"Pay via your Telr account.\"}', 'telr', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment_test`
--

CREATE TABLE `payment_test` (
  `id` int(11) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `payment_url` varchar(255) NOT NULL,
  `payment_ref` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_test`
--

INSERT INTO `payment_test` (`id`, `order_id`, `payment_url`, `payment_ref`, `payment_status`) VALUES
(1, '', 'https://secure.telr.com/gateway/process.html?o=E262CF37FFE0175060E2E57962D1547E8D9FE5F40D82C0E10B2B68D72E85B1D2', 'E262CF37FFE0175060E2E57962D1547E8D9FE5F40D82C0E10B2B68D72E85B1D2', 'Pending'),
(2, '5065', 'https://secure.telr.com/gateway/process.html?o=0B34A11AE638F0A79E29D2FC90EC29C96BC32B759FF9638F7ED82A3B2D650C84', '0B34A11AE638F0A79E29D2FC90EC29C96BC32B759FF9638F7ED82A3B2D650C84', 'Pending'),
(3, '4311', 'https://secure.telr.com/gateway/process.html?o=BDC6EEF3122DDF62220112E428347A19E0A90D9B212F6CA4D3119647F21CC2BE', 'BDC6EEF3122DDF62220112E428347A19E0A90D9B212F6CA4D3119647F21CC2BE', 'Pending'),
(4, '8815', 'https://secure.telr.com/gateway/process.html?o=AD7B568EEBDF12286CCD98F7DA9629D6FFB4131DE43B199079E75D0017E69FA3', 'AD7B568EEBDF12286CCD98F7DA9629D6FFB4131DE43B199079E75D0017E69FA3', 'Pending'),
(5, '6249', 'https://secure.telr.com/gateway/process.html?o=B5B7F53A482729B863AC9625F3C7730B5E21F5BAE1C1421709ACB67F51E486D1', 'B5B7F53A482729B863AC9625F3C7730B5E21F5BAE1C1421709ACB67F51E486D1', 'Pending'),
(6, '8417', 'https://secure.telr.com/gateway/process.html?o=35A5D12DC0101EFF2001BC76D4718E516710BD0C029F63B204EA6F62DD546387', '35A5D12DC0101EFF2001BC76D4718E516710BD0C029F63B204EA6F62DD546387', 'Pending'),
(7, '5946', 'https://secure.telr.com/gateway/process.html?o=7B7F3CFA92B8170FA72E0EDA7BD0AA236AEBF3355F01A5ACB86CD936DC2581A0', '7B7F3CFA92B8170FA72E0EDA7BD0AA236AEBF3355F01A5ACB86CD936DC2581A0', 'Pending'),
(8, '9123', 'https://secure.telr.com/gateway/process.html?o=704E97C6F9D219CB1D81A10DA1C941A94F86195AA0E85CB35F11C749D8E6DE2F', '704E97C6F9D219CB1D81A10DA1C941A94F86195AA0E85CB35F11C749D8E6DE2F', 'Pending'),
(9, '7936', 'https://secure.telr.com/gateway/process.html?o=0EC1B5EED7FF49EB15AD4756877D4F468CB5F753C1A6120D6C29A8FFE69A6386', '0EC1B5EED7FF49EB15AD4756877D4F468CB5F753C1A6120D6C29A8FFE69A6386', 'Pending'),
(10, '9325', 'https://secure.telr.com/gateway/process.html?o=E84C3071DEC214BC848D9FC0896C8912FD806D8AD9B7A62FE39FEDAAA95AEE90', 'E84C3071DEC214BC848D9FC0896C8912FD806D8AD9B7A62FE39FEDAAA95AEE90', 'Pending'),
(11, '5586', 'https://secure.telr.com/gateway/process.html?o=51C17D7810A489E0C66640FA6472C588B8A74997A721B85CD6528D618C344A19', '51C17D7810A489E0C66640FA6472C588B8A74997A721B85CD6528D618C344A19', 'Pending'),
(12, '4983', 'https://secure.telr.com/gateway/process.html?o=CD170464159A96F8044F7925FB17C0ABF8CE5A7DF3E03A541F79A56FFD875404', 'CD170464159A96F8044F7925FB17C0ABF8CE5A7DF3E03A541F79A56FFD875404', 'Pending'),
(13, '8981', 'https://secure.telr.com/gateway/process.html?o=F330CAC92822209EEC9F5EBF15A95963C1F48D35E66924A68C6B5A7F018853E6', 'F330CAC92822209EEC9F5EBF15A95963C1F48D35E66924A68C6B5A7F018853E6', 'Pending'),
(14, '5749', 'https://secure.telr.com/gateway/process.html?o=08A21A4F7E10A1176C084641ED69BD74F0C376993C24AC25B8504230F7AC8403', '08A21A4F7E10A1176C084641ED69BD74F0C376993C24AC25B8504230F7AC8403', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `plan_type` text DEFAULT NULL,
  `price` double DEFAULT NULL,
  `prev_price` double DEFAULT NULL,
  `price_color` varchar(255) DEFAULT NULL,
  `post_limit` int(11) DEFAULT NULL,
  `post_duration` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `attribute` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `title`, `subtitle`, `plan_type`, `price`, `prev_price`, `price_color`, `post_limit`, `post_duration`, `status`, `attribute`, `created_at`, `updated_at`) VALUES
(1, 'Enterprise Plan 12 Months', 'Recommended', 'life_time', 271.46739130435, 543.47826086957, '#ff0000', 5, 365, 1, '[\"5 Listings\",\"Up to 20 Images\",\"1 Year Support\",\"Contact With Agent\",\"7x24 Fully Support\",\"Contact Details\",\"Location and Directions\",\"Website\",\"Email\",\"Videos\",\"Social Media Links\",\"FAQs\"]', '2022-03-24 08:35:02', '2023-08-08 07:42:46'),
(2, 'Ultimate Plan 6 Months', 'Ultimate Choice', 'monthly', 189.94565217391, 326.08695652174, '#ff0000', 3, 180, 1, '[\"3 Listings\",\"Up to 10 Images\",\"6 Months Support\",\"Contact With Agent\",\"7x24 Fully Support\",\"Contact Details\",\"Location\",\"Website\",\"Email\",\"Social Media Links\"]', '2022-03-24 08:46:00', '2023-08-08 07:43:32'),
(4, 'Early Access Plan 3 Months', 'Best Choice for Individuals', 'monthly', 81.25, 163.04347826087, '#ff0000', 1, 90, 1, '[\"1 listing\",\"3 Months Support\",\"Up to 5 Images\",\"Location\",\"Website\",\"Contact Details\"]', '2022-03-30 06:14:11', '2023-08-08 07:44:24'),
(20, 'Deals 1 Month', 'Promtions', NULL, 54.076086956522, 0, '#f50000', 1, 30, 1, '[\"Clickable ads\",\"*Leads via Social Media or WhatsApp\",\"Post Up to 1 Deal\",\"Location\",\"Website\",\"1 Month Support\"]', '2023-08-08 07:51:55', '2023-08-08 07:55:50');

-- --------------------------------------------------------

--
-- Table structure for table `recent_views_listings`
--

CREATE TABLE `recent_views_listings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `listing_owner_id` int(11) DEFAULT NULL,
  `listing_id` int(11) DEFAULT NULL,
  `device` varchar(100) DEFAULT NULL,
  `browser` varchar(100) DEFAULT NULL,
  `operating_system` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recent_views_listings`
--

INSERT INTO `recent_views_listings` (`id`, `user_id`, `listing_owner_id`, `listing_id`, `device`, `browser`, `operating_system`, `created_at`, `updated_at`) VALUES
(12, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-11 09:10:22', '2023-04-11 09:10:22'),
(13, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-11 09:10:24', '2023-04-11 09:10:24'),
(14, 86, 86, 35, 'WebKit', 'Chrome', 'Windows', '2023-04-11 09:28:18', '2023-04-11 09:28:18'),
(15, 86, NULL, 36, 'WebKit', 'Chrome', 'Windows', '2023-04-11 10:41:40', '2023-04-11 10:41:40'),
(16, 86, 86, 35, 'WebKit', 'Chrome', 'Windows', '2023-04-11 11:05:26', '2023-04-11 11:05:26'),
(19, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-13 09:43:38', '2023-04-13 09:43:38'),
(20, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-13 09:43:59', '2023-04-13 09:43:59'),
(21, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-13 10:41:50', '2023-04-13 10:41:50'),
(22, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-13 10:44:10', '2023-04-13 10:44:10'),
(23, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-13 10:46:23', '2023-04-13 10:46:23'),
(24, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-13 10:47:03', '2023-04-13 10:47:03'),
(25, 104, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-13 10:49:53', '2023-04-13 10:49:53'),
(26, 104, 86, 35, 'WebKit', 'Chrome', 'Windows', '2023-04-16 03:59:01', '2023-04-16 03:59:01'),
(27, 104, 86, 35, 'WebKit', 'Chrome', 'Windows', '2023-04-16 04:01:44', '2023-04-16 04:01:44'),
(29, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-16 08:54:43', '2023-04-16 08:54:43'),
(30, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-16 08:55:16', '2023-04-16 08:55:16'),
(31, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-16 08:58:10', '2023-04-16 08:58:10'),
(32, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-16 08:58:50', '2023-04-16 08:58:50'),
(33, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-16 08:59:38', '2023-04-16 08:59:38'),
(34, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-16 09:02:45', '2023-04-16 09:02:45'),
(41, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-16 09:34:58', '2023-04-16 09:34:58'),
(43, 86, 86, 33, 'WebKit', 'Chrome', 'Windows', '2023-04-17 03:56:17', '2023-04-17 03:56:17'),
(44, 86, 86, 35, 'WebKit', 'Chrome', 'Windows', '2023-04-17 04:14:23', '2023-04-17 04:14:23'),
(45, 86, 86, 35, 'WebKit', 'Chrome', 'Windows', '2023-04-17 04:15:17', '2023-04-17 04:15:17'),
(54, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-18 05:00:49', '2023-04-18 05:00:49'),
(57, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-18 05:15:30', '2023-04-18 05:15:30'),
(58, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-18 05:17:17', '2023-04-18 05:17:17'),
(59, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-18 05:21:27', '2023-04-18 05:21:27'),
(60, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-18 05:21:55', '2023-04-18 05:21:55'),
(61, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-18 05:22:28', '2023-04-18 05:22:28'),
(62, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-18 05:24:27', '2023-04-18 05:24:27'),
(63, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-18 05:40:25', '2023-04-18 05:40:25'),
(64, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-18 05:40:39', '2023-04-18 05:40:39'),
(65, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-18 05:41:21', '2023-04-18 05:41:21'),
(66, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-18 05:42:01', '2023-04-18 05:42:01'),
(67, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-18 05:42:21', '2023-04-18 05:42:21'),
(68, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-18 05:43:38', '2023-04-18 05:43:38'),
(69, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-18 05:43:54', '2023-04-18 05:43:54'),
(78, 86, NULL, 32, 'WebKit', 'Chrome', 'Windows', '2023-04-18 05:53:42', '2023-04-18 05:53:42'),
(79, 86, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-04-18 06:20:18', '2023-04-18 06:20:18'),
(81, 86, NULL, 37, 'WebKit', 'Chrome', 'Windows', '2023-04-18 07:15:57', '2023-04-18 07:15:57'),
(88, 108, NULL, 58, 'Macintosh', 'Chrome', 'OS X', '2023-07-08 16:21:26', '2023-07-08 16:21:26'),
(89, 108, NULL, 58, 'Macintosh', 'Chrome', 'OS X', '2023-07-08 16:22:12', '2023-07-08 16:22:12'),
(90, 108, 86, 34, 'Macintosh', 'Chrome', 'OS X', '2023-07-08 16:26:21', '2023-07-08 16:26:21'),
(91, 108, 86, 34, 'Macintosh', 'Chrome', 'OS X', '2023-07-08 16:31:24', '2023-07-08 16:31:24'),
(92, 108, 86, 34, 'Macintosh', 'Chrome', 'OS X', '2023-07-08 16:32:04', '2023-07-08 16:32:04'),
(93, 108, 86, 34, 'Macintosh', 'Chrome', 'OS X', '2023-07-08 16:33:01', '2023-07-08 16:33:01'),
(94, 108, 86, 34, 'Macintosh', 'Chrome', 'OS X', '2023-07-08 16:33:16', '2023-07-08 16:33:16'),
(95, 108, 86, 34, 'Macintosh', 'Chrome', 'OS X', '2023-07-08 16:37:46', '2023-07-08 16:37:46'),
(96, 108, 86, 34, 'Macintosh', 'Chrome', 'OS X', '2023-07-08 16:41:59', '2023-07-08 16:41:59'),
(97, 108, 86, 34, 'Macintosh', 'Chrome', 'OS X', '2023-07-08 16:46:51', '2023-07-08 16:46:51'),
(98, 108, 86, 34, 'Macintosh', 'Chrome', 'OS X', '2023-07-08 16:46:54', '2023-07-08 16:46:54'),
(99, 108, 86, 34, 'Macintosh', 'Chrome', 'OS X', '2023-07-08 16:46:57', '2023-07-08 16:46:57'),
(100, 108, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-07-12 05:20:20', '2023-07-12 05:20:20'),
(101, 108, NULL, 36, 'WebKit', 'Chrome', 'Windows', '2023-07-12 05:37:28', '2023-07-12 05:37:28'),
(102, 108, 86, 35, 'WebKit', 'Chrome', 'Windows', '2023-07-12 05:39:51', '2023-07-12 05:39:51'),
(103, 108, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-07-12 05:40:20', '2023-07-12 05:40:20'),
(104, 108, NULL, 59, 'WebKit', 'Chrome', 'Windows', '2023-07-17 07:22:52', '2023-07-17 07:22:52'),
(105, 108, 86, 34, 'WebKit', 'Chrome', 'Windows', '2023-07-17 07:34:13', '2023-07-17 07:34:13'),
(106, 109, NULL, 59, 'WebKit', 'Chrome', 'Windows', '2023-07-17 12:39:33', '2023-07-17 12:39:33'),
(107, 109, NULL, 59, 'WebKit', 'Chrome', 'Windows', '2023-07-17 12:39:40', '2023-07-17 12:39:40'),
(108, 110, NULL, 60, 'WebKit', 'Chrome', 'Windows', '2023-07-28 06:05:41', '2023-07-28 06:05:41'),
(109, 110, NULL, 58, 'WebKit', 'Chrome', 'Windows', '2023-07-28 06:28:29', '2023-07-28 06:28:29'),
(204, 110, NULL, 65, 'WebKit', 'Chrome', 'Windows', '2023-08-04 06:16:20', '2023-08-04 06:16:20'),
(205, 110, NULL, 65, 'WebKit', 'Chrome', 'Windows', '2023-08-04 06:16:46', '2023-08-04 06:16:46'),
(206, 110, NULL, 65, 'WebKit', 'Chrome', 'Windows', '2023-08-04 06:18:03', '2023-08-04 06:18:03'),
(207, 110, NULL, 65, 'WebKit', 'Chrome', 'Windows', '2023-08-04 06:39:15', '2023-08-04 06:39:15'),
(210, 110, NULL, 65, 'WebKit', 'Chrome', 'Windows', '2023-08-04 07:00:33', '2023-08-04 07:00:33'),
(212, 110, NULL, 65, 'WebKit', 'Chrome', 'Windows', '2023-08-04 10:23:57', '2023-08-04 10:23:57'),
(213, 110, NULL, 65, 'WebKit', 'Chrome', 'Windows', '2023-08-04 12:37:44', '2023-08-04 12:37:44'),
(350, 138, 0, 65, 'Macintosh', 'Chrome', 'OS X', '2023-11-03 17:19:20', '2023-11-03 17:19:20'),
(375, 149, 0, 65, 'iPhone', 'Safari', 'iOS', '2023-11-26 12:53:57', '2023-11-26 12:53:57'),
(376, 149, 0, 78, 'WebKit', 'Chrome', 'Windows', '2023-11-28 11:33:20', '2023-11-28 11:33:20'),
(380, 143, 0, 99, 'WebKit', 'Chrome', 'Windows', '2023-12-08 17:34:52', '2023-12-08 17:34:52'),
(384, 138, 0, 65, 'Macintosh', 'Chrome', 'OS X', '2023-12-09 15:09:20', '2023-12-09 15:09:20'),
(385, 138, 0, 98, 'Macintosh', 'Chrome', 'OS X', '2023-12-09 15:27:33', '2023-12-09 15:27:33'),
(386, 149, 0, 104, 'Macintosh', 'Chrome', 'OS X', '2023-12-09 15:40:23', '2023-12-09 15:40:23'),
(389, 138, 0, 86, 'Macintosh', 'Chrome', 'OS X', '2023-12-09 15:57:40', '2023-12-09 15:57:40'),
(390, 138, 0, 78, 'Macintosh', 'Chrome', 'OS X', '2023-12-09 16:15:33', '2023-12-09 16:15:33'),
(391, 138, 0, 85, 'Macintosh', 'Chrome', 'OS X', '2023-12-09 16:22:33', '2023-12-09 16:22:33'),
(392, 138, 0, 100, 'Macintosh', 'Chrome', 'OS X', '2023-12-09 16:32:16', '2023-12-09 16:32:16'),
(395, 138, 0, 65, 'Macintosh', 'Chrome', 'OS X', '2023-12-10 17:30:43', '2023-12-10 17:30:43'),
(396, 138, 0, 201, 'Macintosh', 'Chrome', 'OS X', '2023-12-16 06:36:23', '2023-12-16 06:36:23'),
(397, 138, 0, 274, 'Macintosh', 'Chrome', 'OS X', '2023-12-16 07:20:38', '2023-12-16 07:20:38'),
(398, 138, 0, 259, 'Macintosh', 'Chrome', 'OS X', '2023-12-18 17:43:38', '2023-12-18 17:43:38'),
(399, 138, 0, 257, 'Macintosh', 'Chrome', 'OS X', '2023-12-18 17:43:46', '2023-12-18 17:43:46'),
(400, 138, 0, 258, 'Macintosh', 'Chrome', 'OS X', '2023-12-18 17:43:54', '2023-12-18 17:43:54'),
(401, 138, 0, 99, 'Macintosh', 'Chrome', 'OS X', '2023-12-25 15:34:07', '2023-12-25 15:34:07'),
(402, 138, 0, 65, 'Macintosh', 'Chrome', 'OS X', '2023-12-25 15:34:22', '2023-12-25 15:34:22');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(191) DEFAULT NULL,
  `title` varchar(191) DEFAULT NULL,
  `subtitle` text DEFAULT NULL,
  `details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `photo`, `title`, `subtitle`, `details`) VALUES
(5, '9LVcoZcD1684644726.png', 'Henna Bajaj', 'Aqua Founder', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua veniam esse cillum.'),
(6, 'Wf3qVmRK1684644789.png', 'Mark Jevenue', 'CEO of Addle', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua veniam esse cillum.'),
(9, 'bNTOPhEh1684644578.png', 'Madhu Sharma', 'Developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua veniam esse cillum.');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `section` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `section`, `created_at`, `updated_at`) VALUES
(13, 'Data Entry', 'Categories , Directory Listing , Language Manage', NULL, NULL),
(14, 'Amina', 'Language Manage', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sartners`
--

CREATE TABLE `sartners` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `photo` varchar(191) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sartners`
--

INSERT INTO `sartners` (`id`, `title`, `subtitle`, `photo`, `url`, `created_at`, `updated_at`) VALUES
(1, 'B2B', 'Instant Quotes', 'jiMIJH1e1701011995.png', 'https://askwayin.com/', '2023-07-28 07:57:33', '2023-11-26 15:19:55'),
(2, 'Doctors', 'Consult Now', 'kRuPVBdm1701012769.jpg', 'https://askwayin.com/subcat/hospitals', '2023-07-28 08:01:00', '2023-11-28 12:25:26'),
(3, 'Home Services', 'Experts', 'Bau5ZtQv1701013419.jpg', 'https://askwayin.com/', '2023-07-28 08:24:52', '2023-11-26 15:43:39'),
(4, 'Real Estate', 'Agents', 'Wjl4MExA1701014858.jpg', 'https://askwayin.com/', '2023-07-28 08:29:40', '2023-11-26 16:07:38'),
(5, 'Food', 'Delivery', 'nqJnc1ol1701015572.jpg', 'https://askwayin.com/', '2023-10-18 07:07:30', '2023-11-26 16:19:32');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `times` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `user_id`, `times`, `created_at`, `updated_at`) VALUES
(4, 86, '8am,9am,10am,11am,12am,2pm,3pm,4pm,5pm', '2023-01-29 06:03:15', '2023-01-29 06:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `seotools`
--

CREATE TABLE `seotools` (
  `id` int(10) UNSIGNED NOT NULL,
  `google_analytics` text DEFAULT NULL,
  `meta_keys` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seotools`
--

INSERT INTO `seotools` (`id`, `google_analytics`, `meta_keys`) VALUES
(1, 'UA-137437974-1', 'Genius,Ocean,Sea,Etc,Genius,Ocean,SeaGenius,Ocean,Sea,Etc,Genius,Ocean,SeaGenius,Ocean,Sea,Etc,Genius,Ocean,Sea');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(191) NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text DEFAULT NULL,
  `photo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `details`, `photo`) VALUES
(15, 'HIGH LIQUIDITY', 'Fast access to high liquidity orderbook</br>\r\nfor top currency pairs', '1639476836high-liquidity.png'),
(16, 'COST EFFICIENCY', 'Reasonable trading fees for takers</br>\r\nand all market makers', '1639476885cost-efficiency.png'),
(17, 'MOBILE APP', 'Trading via our Mobile App, Available</br>\r\nin Play Store & App Store', '1639476911mobile-app.png'),
(18, 'PAYMENT OPTIONS', 'Popular methods: Visa, MasterCard,</br>\r\nbank transfer, cryptocurrency', '1639476937payment-options.png'),
(19, 'WORLD COVERAGE', 'Providing services in 99% countries</br>\r\naround all the globe', '1639476969world-coverage.png'),
(20, 'STRONG SECURITY', 'Protection against DDoS attacks,</br>\r\nfull data encryption', '1639476998strong-security.png');

-- --------------------------------------------------------

--
-- Table structure for table `sitemaps`
--

CREATE TABLE `sitemaps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sitemap_url` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `socialsettings`
--

CREATE TABLE `socialsettings` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook` varchar(191) DEFAULT NULL,
  `gplus` varchar(191) DEFAULT NULL,
  `twitter` varchar(191) DEFAULT NULL,
  `linkedin` varchar(191) DEFAULT NULL,
  `dribble` varchar(191) DEFAULT NULL,
  `f_status` tinyint(4) NOT NULL DEFAULT 1,
  `g_status` tinyint(4) NOT NULL DEFAULT 1,
  `t_status` tinyint(4) NOT NULL DEFAULT 1,
  `l_status` tinyint(4) NOT NULL DEFAULT 1,
  `d_status` tinyint(4) NOT NULL DEFAULT 1,
  `f_check` tinyint(10) DEFAULT NULL,
  `g_check` tinyint(10) DEFAULT NULL,
  `fclient_id` text DEFAULT NULL,
  `fclient_secret` text DEFAULT NULL,
  `fredirect` text DEFAULT NULL,
  `gclient_id` text DEFAULT NULL,
  `gclient_secret` text DEFAULT NULL,
  `gredirect` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socialsettings`
--

INSERT INTO `socialsettings` (`id`, `facebook`, `gplus`, `twitter`, `linkedin`, `dribble`, `f_status`, `g_status`, `t_status`, `l_status`, `d_status`, `f_check`, `g_check`, `fclient_id`, `fclient_secret`, `fredirect`, `gclient_id`, `gclient_secret`, `gredirect`) VALUES
(1, 'https://www.facebook.com/', 'https://plus.google.com/', 'https://twitter.com/', 'https://www.linkedin.com/', 'https://dribbble.com/', 1, 0, 1, 1, 0, 1, 1, '503140663460329', 'f66cd670ec43d14209a2728af26dcc43', 'https://localhost/crypto/auth/facebook/callback', '904681031719-sh1aolu42k7l93ik0bkiddcboghbpcfi.apps.googleusercontent.com', 'yGBWmUpPtn5yWhDAsXnswEX3', 'http://localhost/marketplace/auth/google/callback');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `icon` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `name`, `status`, `icon`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', 1, 'fab fa-facebook-f', 'https://www.facebook.com/', '2022-04-24 09:53:35', '2022-04-24 09:53:35'),
(2, 'Twitter', 1, 'fab fa-twitter', 'https://twitter.com/', '2022-04-24 09:54:37', '2022-04-24 09:54:37'),
(3, 'Linkedin', 1, 'fab fa-linkedin-in', 'https://www.linkedin.com/', '2022-04-24 09:55:23', '2023-08-01 12:11:18');

-- --------------------------------------------------------

--
-- Table structure for table `social_providers`
--

CREATE TABLE `social_providers` (
  `id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `provider_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `social_providers`
--

INSERT INTO `social_providers` (`id`, `user_id`, `provider_id`, `provider`, `created_at`, `updated_at`) VALUES
(3, 17, '102485372716947456487', 'google', '2019-06-19 17:06:00', '2019-06-19 17:06:00'),
(4, 18, '109955884428371086401', 'google', '2019-06-19 17:17:04', '2019-06-19 17:17:04');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(191) NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`) VALUES
(3, 'ahmmedafzal4@gmail.com'),
(4, 'user@gmail.com'),
(5, 'feroz.zeenath@gmail.com'),
(6, 'mohdraies144gmail.com'),
(7, 'JEqezj.hjjqjwt@zetetic.sbs'),
(8, 'NxyneK.dhchjdm@usufruct.bar'),
(9, 'tBtfxw.bjdjtwm@borasca.xyz'),
(10, 'BzStrt.dpdjwqc@virilia.life'),
(11, 'Kymdvq.bttjtjm@spectrail.world'),
(12, 'aATizi.bcdwhmd@spinapp.bar');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL DEFAULT 0,
  `receiver_id` int(11) DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `profit` enum('plus','minus') DEFAULT NULL,
  `txnid` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `plan_id` int(11) DEFAULT NULL,
  `name` varchar(191) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `photo` varchar(191) DEFAULT NULL,
  `breadcumb` varchar(255) DEFAULT NULL,
  `zip` varchar(191) DEFAULT NULL,
  `city` varchar(191) DEFAULT NULL,
  `address` varchar(191) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `fax` varchar(191) DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `is_provider` tinyint(10) NOT NULL DEFAULT 0,
  `status` tinyint(10) NOT NULL DEFAULT 0 COMMENT '1 === user\r\n2 == agent',
  `verification_link` text DEFAULT NULL,
  `email_verified` enum('Yes','No') NOT NULL DEFAULT 'No',
  `balance` double NOT NULL DEFAULT 0,
  `interest_balance` double NOT NULL DEFAULT 0,
  `affilate_code` text DEFAULT NULL,
  `referral_id` tinyint(1) NOT NULL DEFAULT 0,
  `twofa` tinyint(4) NOT NULL DEFAULT 0,
  `go` varchar(255) DEFAULT NULL,
  `verified` tinyint(4) NOT NULL DEFAULT 0,
  `details` text DEFAULT NULL,
  `kyc_status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 == ''pending''\r\n1 == ''approve''\r\n2 == ''rejected''\r\n3 == ''submitted''',
  `kyc_info` longtext DEFAULT NULL,
  `kyc_reject_reason` text DEFAULT NULL,
  `is_banned` varchar(4) NOT NULL DEFAULT '0' COMMENT '1 === banned\r\n0 === active',
  `ad_limit` int(11) DEFAULT 0,
  `is_agent` tinyint(4) NOT NULL DEFAULT 0,
  `direction` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `plan_end_date` timestamp NULL DEFAULT NULL,
  `fb_link` varchar(100) DEFAULT NULL,
  `twitter_link` varchar(100) DEFAULT NULL,
  `instagram_link` varchar(100) DEFAULT NULL,
  `linkedin_link` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `plan_id`, `name`, `username`, `photo`, `breadcumb`, `zip`, `city`, `address`, `about`, `phone`, `fax`, `email`, `password`, `remember_token`, `is_provider`, `status`, `verification_link`, `email_verified`, `balance`, `interest_balance`, `affilate_code`, `referral_id`, `twofa`, `go`, `verified`, `details`, `kyc_status`, `kyc_info`, `kyc_reject_reason`, `is_banned`, `ad_limit`, `is_agent`, `direction`, `website`, `plan_end_date`, `fb_link`, `twitter_link`, `instagram_link`, `linkedin_link`, `created_at`, `updated_at`) VALUES
(111, 45, 'mohd raies', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, 'admin', NULL, 'mohdraies.websutility@gmail1122.com', '$2y$10$y9IBXjjrd5nThwwl2v6t9etFpU8NlhJBzfBqczXIrKeyDkxArdEaa', NULL, 0, 1, '31cc7a6e5d1cdef5134d01664bf75a86', 'Yes', 0, 0, '7f9d70bcb050f7ecff741f7b02facf2f', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-25 10:49:11', '2023-07-25 10:49:11'),
(112, NULL, 'Harry', 'rewre', NULL, NULL, NULL, NULL, NULL, NULL, '7887877', NULL, 'yakeco5031@locawin.com', '$2y$10$87WefbBtkxubTQD2ZljcKONpgkFJGF.EK.hoH2PCOdIUj3mSE/4j.', NULL, 0, 1, '88aad3dcc42ea4258187fd64ed6cc019', 'No', 0, 0, '2a7d113400705f662359a6d95cd771da', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-14 05:57:15', '2023-10-14 05:57:15'),
(117, NULL, 'Naddaaf latest upddd', 'test', NULL, NULL, NULL, NULL, 'New Delhi updddddd', NULL, '9988776655', NULL, 'test@gmail.com', '$2y$10$OTGvXNrsCEXrqNzGtDsonuEgGtte8e2tcRfsT2qZIb90iOfq32b/C', 'Iy4uKvnBKANUI0aNRL4abnFLXHRJQHslfJ8PVV1pg6UA78K03dYMV9gSUK9h', 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-16 12:29:25', '2023-12-10 17:02:18'),
(118, NULL, 'no', 'bks', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bks@gmail.com', '$2y$10$RH2TDP8aWENUKkdNmuVmXOE5C4FegOqpGQzTajOulfOZgEiZCMIfe', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-16 16:43:13', '2023-10-16 16:43:13'),
(119, NULL, 'jk', 'his', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jks@gmail.com', '$2y$10$jmSD6pQ7FPsWClFJ57q8rekAi3u8YrHUYdHoc58TngdqlIWk5kSoW', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-16 16:49:20', '2023-10-16 16:49:20'),
(120, NULL, 'gks', 'gks', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gk@g.com', '$2y$10$K0gLDQkAd/s20uiinW33jO9PjIg/5lXZP9eRafGe77MGgevAlkiWe', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-16 16:54:49', '2023-10-16 16:54:49'),
(121, NULL, 'gppp', 'goo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gh@h.com', '$2y$10$./.auJGDeItG/eJTAydP5u0kK9OPtz6Pa5T1GVxQD/yDeb9F81kNm', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-16 16:56:53', '2023-10-16 16:56:53'),
(122, NULL, 'ran', 'to', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rk@g.com', '$2y$10$9sbBn9ERP/w4mhwibICmu.3d15dXrSiRSsDkImw2zpQT9YvhbArj6', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-17 06:15:26', '2023-10-17 06:15:26'),
(123, NULL, 'ek', 'eks', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'eks@g.com', '$2y$10$zDnKISzGkqQTjfsbjjics.appHaJmCC0oi88g3881./LBmzI/2x/u', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-17 06:19:03', '2023-10-17 06:19:03'),
(124, NULL, 'rjj', 'rkkk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rkkk', '$2y$10$6pyQsjpUVQH0CQJY584w7.p0NEk1lIecLyqJwu8oD8hIYmG0HQF92', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-17 06:26:59', '2023-10-17 06:26:59'),
(125, NULL, 'ssss', 'ssss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ssss', '$2y$10$sbrm/3xvDxTBl8a/QHqwU.0mPw/NLtS4YoMw.dKryB6.1yT0MR2Ni', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-17 06:59:49', '2023-10-17 06:59:49'),
(126, NULL, 'wwww', 'www', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'www', '$2y$10$9vNVjs1rw3mFNCNBty1/qef7gexUjbOQm0.bDJrnZYLKKdbvDnVn.', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-17 07:03:29', '2023-10-17 07:03:29'),
(127, NULL, 'ssss', 'sss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sss@d.com', '$2y$10$cH1CG4WS2plJ4thv1mShiei22ppw6fLTmACQLJzBkLo/MwvN7ipUO', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-17 07:11:18', '2023-10-17 07:11:18'),
(128, NULL, 'dddd', 'ddddd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dddd@d.com', '$2y$10$xgeCQ6Rtfoqaub7hCTXeEORsbTa4uSV6ZW5XsONcuXf7jFom86Juu', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-17 07:23:46', '2023-10-17 07:23:46'),
(129, NULL, 'ddddd', 'ddddd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ssss@d.com', '$2y$10$2BqJo4MpfAGPeEvyZ4IQVOyAkaGFq383aL9bZrnjVQwKnTQjpPdQO', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-17 07:24:57', '2023-10-17 07:24:57'),
(130, NULL, 'Ak', 'aks', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aks@g.com', '$2y$10$TdjcxOutLbH6couQsEE6L.DB6OApuDSsTzyIM9vg5DQk00Zew2nQy', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-17 08:33:07', '2023-10-17 08:33:07'),
(131, NULL, 'pk', 'pk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pk@g.com', '$2y$10$de2e1WLSIzygDp1W.Hn.8.Z1CMLN.BRSSMaSTiMtbiERu7mRS97da', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-17 11:19:17', '2023-10-17 11:19:17'),
(132, NULL, 'feroz', 'feroz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kshaikh151989@gmail.com', '$2y$10$r5EflvaVBDtPyvetUNep6eCDR/OD3b6/ZsY8NbDTo.YfRpsjt4wXy', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-17 18:23:34', '2023-10-17 18:23:34'),
(133, NULL, 'feeoz', 'pasha', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'abcdjaffa@gmail.com', '$2y$10$kdoINkhZFzrr3mB.udyyGOUOuCebgpVA7lXTpsH9AHN2QiqguMi7W', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-18 18:38:14', '2023-10-18 18:38:14'),
(134, NULL, 'Naddaaf', 'test', NULL, NULL, NULL, NULL, NULL, NULL, '9988776655', NULL, 'test@gmail.com', '$2y$10$4fjaW0mSUlaDvVgoUxkM9.PAvK.RuvMbOVQpf1/aQyyPPvrXbq0Zu', NULL, 0, 0, NULL, 'Yes', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-19 10:56:55', '2023-10-19 10:56:55'),
(135, NULL, 'Mr Naddaaf', 'test', NULL, NULL, NULL, NULL, NULL, NULL, '9988776655', NULL, 'testing@gmail.com', '$2y$10$FlIdy8b8xjkTHS.fWL9DROGNaBf75nSes2wo4R3kfM9SuwqaU0V.C', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-19 10:57:48', '2023-10-19 10:57:48'),
(137, NULL, 'Test', 'Test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'testing@hotmail.com', '$2y$10$3jGIx04xhOqvNh/xJUCE3eWfZ6A03IFT4LxWOnFWEex1OGG2fETHe', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-28 11:27:40', '2023-10-28 11:27:40'),
(138, NULL, 'Testtt', 'Testuser', NULL, NULL, NULL, NULL, NULL, NULL, '9540422843', NULL, 'kaushaldubey71@gmail.com', '$2y$10$UEHRqU31dy5oZp/xo4sDae9ov5wfDGHGGOwsfaSuWVED8vgQHsUVO', 'fGO09RsWFQf6BJ46znwPBMgpSxwCAGc5cS0UGOBvGCuDi9bf8oS2nbLhBfJh', 0, 1, '3e6daa98480e95ee256d9cb2a26b3e1f', 'Yes', 0, 0, 'f30d1df4b0259355e6ee66f8e9fe3152', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-30 11:12:00', '2023-10-30 11:12:47'),
(139, NULL, 'Akhtar Edroos', 'akhtar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'akhtar.edroos@gmail.com', '$2y$10$XdA/rMpst.0uWIlW6LfBsO.keBHdyDxpY3UTANhrFl76JO741a8Xm', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-02 06:20:54', '2023-11-02 06:20:54'),
(140, NULL, 'Tannu', 'tannu', NULL, NULL, NULL, NULL, NULL, NULL, '5261527276', NULL, 'tannu.websutility@gmail.com', '$2y$10$f0RX566hMIdiatzX3j5IweI0irnYNegiRwYwt5x30vHFQ.CIQS6b6', 'e8ORyPmoWlHq2wRU0wIg6oz9FioV3ugFLFDQ6lmMpk80OjE4KwidpNd4Q7qJ', 0, 1, 'e2702e975b5240c58815170aec36e301', 'Yes', 0, 0, 'c17b6c8545a0a114f189261c6514728a', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-04 03:22:02', '2023-11-04 03:22:59'),
(141, NULL, 'SHAHNAWAJ USMANI', 'SHAH0726', NULL, NULL, NULL, NULL, NULL, NULL, '+91 6306 210 918', NULL, 'shahnawaj.websutility@gmail.com', '$2y$10$xiX/ZjoNZw4ngVrqNyhO5e/QC/O2Zoax78Je2XRG5AwUxYkM6Qiti', NULL, 0, 1, '8cb3f8f54a2635cdd9466804f16996b6', 'No', 0, 0, '28b94539b6689dbb835baf8873300805', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-04 04:31:06', '2023-11-04 04:35:50'),
(142, NULL, 'Apple', 'AppleJohn123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nathannorth2005@gmail.com', '$2y$10$L8TLzH6Nw57Y/K1J0.uvzumNs1lPkYS3PGmUNP369Ts02GKMtJ3na', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-06 02:19:50', '2023-11-06 02:19:50'),
(143, NULL, 'Mohd Raies', 'Raies', '1701174000download.jpg', NULL, NULL, NULL, NULL, NULL, '9917695289', NULL, 'mohdraies144@gmail.com', '$2y$10$Wpe6nU8CEoS7Kg9309V7e.E4oi4bGK.sYl1cFqZez/9SN2t41kgv6', 'O47aWUX1XtG4wAVZe6kheADvdbTWgcc4HlXLjQ6jn9hHy2gxfbRmEG9jhwad', 0, 1, '166ee4f576f9f1e4abdb376094dee6dc', 'Yes', 0, 0, 'fc28ee65b67fe74734adea13c3620d1d', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-07 18:11:46', '2023-11-28 12:20:00'),
(144, NULL, 'Naddaaf', 'test', NULL, NULL, NULL, NULL, NULL, NULL, '9988776655', NULL, 'test@gmail.com.', '$2y$10$UjwbUS.5gW5QkUWZTllgTul7/o4H6s7SNrqTX5W2YoHz7GBg2KZrK', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-11 07:21:50', '2023-11-11 07:21:50'),
(145, NULL, 'mohamed', 'feroz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'xyz@gmail.com', '$2y$10$ympfehBleMTR4BNhB6EQ5.NiY61E3A69BJWMrwNL8LLc.esdc1mWi', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-11 09:55:07', '2023-11-11 09:55:07'),
(146, NULL, 'alam', 'alam', NULL, NULL, NULL, NULL, NULL, NULL, '7061339916', NULL, 'nooralamm1998@gmail.com', '$2y$10$r3BK90bz5wrGA8TgFXsBUu7waLvqepuhnYp6j5mcU/wKqV0JEIiW2', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-11 10:13:49', '2023-11-11 10:13:49'),
(147, NULL, 'testtt', 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test2@gmail.com', '$2y$10$8vgjT1HoP9RFq64el./Icuhe5qSllYGQs2gj5ZRzfnZNoBmldGK6m', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-11 17:21:07', '2023-11-11 17:21:07'),
(149, NULL, 'Mohamed Feroz', 'MohamedFeroz', '1701173997body build.png', NULL, NULL, NULL, 'Al Barsha 1', NULL, '+971545073099', NULL, 'feroz.zeenath@gmail.com', '$2y$10$HtLw/UOOoSMofrjJqhyncOmr5p09rmToRCS./NTxKWu3C3Ynlzbyy', 'NFZKJ9r1AWmb14xXLTbcaXzHNRyewYDgZUIGERh48TUgBKg3ffb9KIV9xCY2', 0, 1, 'c3d39581de5facdc51e5539bef8faa7d', 'Yes', 0, 0, '96807d450b137f7f2552271e72a3f565', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-22 05:22:15', '2023-11-28 12:19:57'),
(150, NULL, 'pep', 'so', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pepsifizzy998@gmail.com', '$2y$10$UZwe.19QVvatXX9K/k5/6urK00wrq.tk54obYCxGAu5GUBgNFgZRy', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-22 06:22:42', '2023-11-22 06:22:42'),
(151, NULL, 'KDDDD', 'Test', NULL, NULL, NULL, NULL, 'Test address', NULL, '9898989898', NULL, 'test22@gmail.com', '$2y$10$51f6B0iPBRFNjylSbf/k/emCrnQM9sx32Q32NSu12CwA./pfW0tnm', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-23 15:52:06', '2023-11-23 15:56:06'),
(152, NULL, 'Testtt', 'testtt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test4333@gmail.com', '$2y$10$KL3oV3vjyUINxrlTBWPJmeov5KxheKsoLMk2GvSVKQaSzs7UvY5B2', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-23 17:14:16', '2023-11-23 17:14:16'),
(153, NULL, 'testtt', 'testtt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'testtt@gmail.com', '$2y$10$LZb1q31j3bGeiZXpe3PPkutHGAmD3zBlXMCvBXUk23uppPUe.TjCC', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-23 17:23:44', '2023-11-23 17:23:44'),
(154, NULL, 'testtt', 'testtt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'testneww@gmail.com', '$2y$10$fRvSpIFS0TaYgLYWC9AG6.UO2lwD3.3yhsL12JIR7XF3ivqWir7Ee', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-23 17:39:22', '2023-11-23 17:39:22'),
(155, NULL, 'LWmSisuuRoJkXH', 'LWmSisuuRoJkXH', NULL, NULL, NULL, NULL, NULL, NULL, '967-745-91-99', NULL, 'ceLeCQ.hjjqjmt@zetetic.sbs', '$2y$10$pee909kTf64SUrnMnkDduuY0TIHhllQPsJh43Oco0Q4jCXzTQbHS2', NULL, 0, 1, '3f38759acf85447cbe4c4a837024d2f1', 'No', 0, 0, '7a548bafc53154e54cb4e23cdaabf830', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-23 23:25:13', '2023-11-23 23:25:13'),
(156, NULL, 'wdDYTrLXtiWDNHQB', 'wdDYTrLXtiWDNHQB', NULL, NULL, NULL, NULL, NULL, NULL, '786-689-56-34', NULL, 'dawoodamir413@gmail.com', '$2y$10$GsxVRoZlXccy23TcqxFFluVgf9BINMcm7QbQir/L.9rocICc.J.b2', NULL, 0, 1, 'e78bbbaf3d5a420a60a9ac3b8f942882', 'No', 0, 0, '35bfc8fbf72f05ccc034e7332a5ef454', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-23 23:28:45', '2023-11-23 23:28:45'),
(157, NULL, 'test', 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nathannorth@gmail.com', '$2y$10$b3CRkWYo5ZwKXgL9sqQbHeRzGrme5Hyh48iDH8NS2ssggUmN3di3y', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-24 02:36:21', '2023-11-24 02:36:21'),
(158, NULL, 'VxjnavMNtYiH', 'VxjnavMNtYiH', NULL, NULL, NULL, NULL, NULL, NULL, '299-715-11-02', NULL, 'royalcristina8@gmail.com', '$2y$10$OUXl.3SoIW75jGf1QodVrOgOCy2uUDRAJpD57ZdOTHcb32SLYKONy', NULL, 0, 1, '8ea927b6d4c5a251637298f161abbb7f', 'No', 0, 0, 'a6cf9aaaa3e28b4cef9b8a397bf0372e', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-24 22:54:31', '2023-11-24 22:54:31'),
(159, NULL, 'USkXJTAEsvU', 'USkXJTAEsvU', NULL, NULL, NULL, NULL, NULL, NULL, '994-877-63-53', NULL, 'zion032008@gmail.com', '$2y$10$18bBBQB88BB143OBrcAgcuKTNDxwBcx4wLOCmNQ6tM0HGL.l6xptS', NULL, 0, 1, '8aec3cb175b85d630f1e4f042634a04c', 'No', 0, 0, 'da01cf7de7a68b54c7fe61d75cfcd2e5', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-25 19:46:01', '2023-11-25 19:46:01'),
(160, NULL, 'TxYLcEdbCxRVcNP', 'TxYLcEdbCxRVcNP', NULL, NULL, NULL, NULL, NULL, NULL, '612-047-16-47', NULL, 'fevMTh.dhchjch@usufruct.bar', '$2y$10$wPi5zmH5sBCVNj6ZJo6U/.1pbf8mbMCkJoqRl/shs3m.t0htAwJHe', NULL, 0, 1, '89169d5d6827cfb529a9d372da0cab6d', 'No', 0, 0, '80d7549ed90f76136694503a268ae8aa', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-29 07:17:54', '2023-11-29 07:17:54'),
(161, NULL, 'taYNtcefdduXc', 'taYNtcefdduXc', NULL, NULL, NULL, NULL, NULL, NULL, '571-593-43-48', NULL, 'LVUXnd.bjdjdjj@borasca.xyz', '$2y$10$gQ/Ul.vz1vzNnBnBWtgdU.bX21TmCkx9zI4.dmaXwnvZbOD7lEM9a', NULL, 0, 1, '1ef5f5fad8dd2eb4b2cd6194f7d1273d', 'No', 0, 0, 'df12b7e651a23c002b350a306bbbb3b5', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-02 06:26:37', '2023-12-02 06:26:37'),
(162, NULL, 'TETTEyKCJsUNRDW', 'TETTEyKCJsUNRDW', NULL, NULL, NULL, NULL, NULL, NULL, '542-998-10-21', NULL, 'rmaples@home-nursing.net', '$2y$10$WVlRqlDIYGineF2/vK/adueWiGO5WXHoiQxYWS/0IqG2u9oIsfLpu', NULL, 0, 1, 'd077e834995dd0d05692f5e45af4b4f9', 'No', 0, 0, 'ff3d5f40cf607c57747992689935eca4', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-02 13:44:49', '2023-12-02 13:44:49'),
(163, NULL, 'wiQxYUzpHqYP', 'wiQxYUzpHqYP', NULL, NULL, NULL, NULL, NULL, NULL, '341-335-07-08', NULL, 'balikosurugu@outlook.com', '$2y$10$TQEc/6FHHVkhzlE9CeA0KulR5uPEeEtKhutxnxeFfnbqQhQjxAKfG', NULL, 0, 1, '8f4ae010dcb89048bb3a752a344fb901', 'No', 0, 0, 'dd757b0f09f132c497f5004e43b3bf0f', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-03 21:11:46', '2023-12-03 21:11:46'),
(164, NULL, 'sCxdDVonEOL', 'sCxdDVonEOL', NULL, NULL, NULL, NULL, NULL, NULL, '480-246-18-39', NULL, 'andrewparkinhome@gmail.com', '$2y$10$Pj4M.CdLEUZbW.cRQoodHecRnSTxaW9oN4YCpD6.X9MgQGc3eoVqe', NULL, 0, 1, '4fcec3f478d3a51ce9c3e8b77510045e', 'No', 0, 0, 'bc553bda0ebf9f74a4b010ca8e07bc22', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-04 19:53:31', '2023-12-04 19:53:31'),
(165, NULL, 'SJrrbTjMuoAlIx', 'SJrrbTjMuoAlIx', NULL, NULL, NULL, NULL, NULL, NULL, '103-830-71-83', NULL, 'it@schiffs.com', '$2y$10$l/673hTpG2S4LIlnqmC.uuMQBJQYcHXddBJLjyWDpC.bfevwcBbdO', NULL, 0, 1, '89f27ce6dd71d31ab2a79a543f0b981d', 'No', 0, 0, '134b639a4cb8704b77a19525a92d7611', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-04 23:48:16', '2023-12-04 23:48:16'),
(166, NULL, 'WenilsKHaWkhm', 'WenilsKHaWkhm', NULL, NULL, NULL, NULL, NULL, NULL, '000-789-12-92', NULL, 'alejandra@vvc.org', '$2y$10$x.44LjVcBMaWPFXuWVNEFO615E/dcVJeUi2JGzPm3/5cP1MPAYUb.', NULL, 0, 1, 'c7dcb336fd26c729fd122fcaf5103e8e', 'No', 0, 0, 'a1d1df265a32e1589e7b550e00ff32b1', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-05 02:57:31', '2023-12-05 02:57:31'),
(167, NULL, 'jVJfijdmzirhl', 'jVJfijdmzirhl', NULL, NULL, NULL, NULL, NULL, NULL, '065-203-26-98', NULL, 'pdilley@stonestreetquarries.com', '$2y$10$mDaVON40a3J7IVK9CXr3CuqVB0c.woZ9.ZGq/QTdFbAkcngp4qKq.', NULL, 0, 1, '019f4d8dc7b298b40ae3039e1349c8e5', 'No', 0, 0, '2374e588cc005819a373dee7618a6a07', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-05 06:40:57', '2023-12-05 06:40:57'),
(168, NULL, 'JoydUJMEahFWjwa', 'JoydUJMEahFWjwa', NULL, NULL, NULL, NULL, NULL, NULL, '837-429-21-60', NULL, 'wilsons@nyptrust.com', '$2y$10$xbGkigrIp9VypRSreUhhTOpFYrM6T9Uhug1hR67PPiq7CQ66p8KuS', NULL, 0, 1, 'db338bbfb516221930d9108b76090903', 'No', 0, 0, '03de65aa3952d0ad1534cd027e502238', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-05 16:06:22', '2023-12-05 16:06:22'),
(169, NULL, 'HDpFTMQkRdlmJeUP', 'HDpFTMQkRdlmJeUP', NULL, NULL, NULL, NULL, NULL, NULL, '744-087-47-86', NULL, 'spiausainc@gmail.com', '$2y$10$ooHt5nHHeeNVx/kF5DFxQ.Vn8r7lji.WfgJoNF4Eae06jNznolNUC', NULL, 0, 1, '522bd876061d4236361291cd2ac2581b', 'No', 0, 0, 'f3fa035f52beac10ce1639e822b02efd', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-05 21:27:03', '2023-12-05 21:27:03'),
(170, NULL, 'wsmJqJJvOmzd', 'wsmJqJJvOmzd', NULL, NULL, NULL, NULL, NULL, NULL, '582-592-59-96', NULL, 'sylviasnyder01@gmail.com', '$2y$10$SjliCW1hDRKm.DGAMuXmNuCn3VckCJQL3w8pXpTc.LOmCcjaH5Ktq', NULL, 0, 1, 'af17e0d3364c82733e68ad2bf2c55f62', 'No', 0, 0, 'e12cd863b9b259e23ba74e0cb621efac', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-06 02:00:16', '2023-12-06 02:00:16'),
(171, NULL, 'VKlIIyCxMPLYryJL', 'VKlIIyCxMPLYryJL', NULL, NULL, NULL, NULL, NULL, NULL, '259-166-15-21', NULL, 'frankzoetelief@quicknet.nl', '$2y$10$dDBISvSaEv/JMruI5bNWX.Co354wg7AJELG7YX/jKxUgolNwDXWiS', NULL, 0, 1, 'f329348799fd49f522c75eb845be8a58', 'No', 0, 0, 'a7fcd6ccd387fa1e68277dde58573630', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-06 18:16:35', '2023-12-06 18:16:35'),
(172, NULL, 'lEKWdpNdYeHo', 'lEKWdpNdYeHo', NULL, NULL, NULL, NULL, NULL, NULL, '615-259-86-63', NULL, 'shreeta@hotmail.co.uk', '$2y$10$s.sYUHkJl/Dl.Q7Kcc.1DuIdcRrOnPCqInlWks4w4ch6Dfp4OOFge', NULL, 0, 1, '8c4cd782b1c7eda488419cd463653253', 'No', 0, 0, 'f29644f1d684cf5058591ca63c996eca', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-07 01:28:45', '2023-12-07 01:28:45'),
(173, NULL, 'rCjkCKuRrhLuOltQ', 'rCjkCKuRrhLuOltQ', NULL, NULL, NULL, NULL, NULL, NULL, '759-076-37-69', NULL, 'ariel@arielgordonjewelry.com', '$2y$10$tGIs.wA1rpwqvUSHVrTn2egXjLDTIL9Fu2hQJ9grem8en.KmLca5e', NULL, 0, 1, '99a4927644ce4be4887667934dc3608c', 'No', 0, 0, 'e1f89931baf087c8b6009f19aebb30d8', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-07 06:13:46', '2023-12-07 06:13:46'),
(174, NULL, 'FuYAyhDSaXTMLA', 'FuYAyhDSaXTMLA', NULL, NULL, NULL, NULL, NULL, NULL, '233-495-00-74', NULL, 'michelle@hultine.com', '$2y$10$Ahg2qjRVtZ0KQRaQZJrz9.mKKMMGZQmkCB1bYcuAE18TZ83E100hi', NULL, 0, 1, 'eec8dd1af21640bd3f1edf774785e1a1', 'No', 0, 0, '10aa78b13e329cdede0068c0f6e6c1e2', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-07 17:30:27', '2023-12-07 17:30:27'),
(175, NULL, 'eAEiJBdLM', 'eAEiJBdLM', NULL, NULL, NULL, NULL, NULL, NULL, '649-667-71-81', NULL, 'mmcculley@tapestry.com', '$2y$10$ID3GjH0AAqfv9o.7kRGnK.nocNa5jBqvG4EWCRXE12Q76UKrkRO5e', NULL, 0, 1, 'c2aa4b73d417f17a18195eeebbb33db4', 'No', 0, 0, 'dc10fee9f1a4557da4ddea4baacf4ead', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-07 23:10:46', '2023-12-07 23:10:46'),
(176, NULL, 'nPKduQtjT', 'nPKduQtjT', NULL, NULL, NULL, NULL, NULL, NULL, '711-999-54-55', NULL, 'esaweros@ruppertcompanies.com', '$2y$10$jxiLv7EAlySlfwQSzpsJuuDeePVOxUvJ9gFHoZJJiQ99I/4sv0IY.', NULL, 0, 1, '1b69b74198936b1621623d3d62dbee30', 'No', 0, 0, '0b7c9c1d8eb0450625e4df684cad2d1b', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-08 05:34:29', '2023-12-08 05:34:29'),
(177, NULL, 'OMoWoHSNN', 'OMoWoHSNN', NULL, NULL, NULL, NULL, NULL, NULL, '945-166-19-92', NULL, 'vincentapierri@yahoo.com', '$2y$10$ewWFP17LjBBDV6Fw8bKV3eLx0ElXqVrG5Pa0Wnnj0pK4Nn/y0I.rK', NULL, 0, 1, 'dbfc289f185ecca5e1de252686b312de', 'No', 0, 0, '8c48c57fab46370cdb0f2f9928a93adf', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-08 15:39:20', '2023-12-08 15:39:20'),
(178, NULL, 'Mohammad Kamran', 'kamran884', NULL, NULL, NULL, NULL, NULL, NULL, '+971 56 7990862', NULL, 'kamran@ronakintl.com', '$2y$10$xCSaJB./4fATaeVO8LTxhujgEiWHB8V8tcqpEUIK1y1Hb1MZ.CA8G', NULL, 0, 1, '819bd028b9626ab21a6552341088f9f3', 'Yes', 0, 0, 'a0de89432dac8a5dfd7188209de79c3f', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-19 09:10:53', '2023-12-19 09:11:28'),
(179, NULL, 'ibrahkm', 'alzaabi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ibrahimawad23231@hotmail.com', '$2y$10$SlPzrAMTOxs10KDNQX0i0eEMBnBYaEaIOd9FfjtYM8Qun/B3zupcW', NULL, 0, 0, NULL, 'No', 0, 0, NULL, 0, 0, NULL, 0, NULL, 0, NULL, NULL, '0', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-24 15:09:06', '2023-12-24 15:09:06');

-- --------------------------------------------------------

--
-- Table structure for table `user_notifications`
--

CREATE TABLE `user_notifications` (
  `id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `order_id` int(191) NOT NULL DEFAULT 0,
  `withdraw_id` int(191) NOT NULL DEFAULT 0,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` enum('Invest','Payout','Withdraw') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_subscriptions`
--

CREATE TABLE `user_subscriptions` (
  `id` int(11) NOT NULL,
  `subscription_number` varchar(255) DEFAULT NULL,
  `txnid` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `plan_id` int(11) DEFAULT NULL,
  `currency_id` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `method` varchar(255) DEFAULT NULL,
  `days` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_subscriptions`
--

INSERT INTO `user_subscriptions` (`id`, `subscription_number`, `txnid`, `user_id`, `plan_id`, `currency_id`, `price`, `method`, `days`, `status`, `created_at`, `updated_at`) VALUES
(71, 'ofHW1680766935', 'txn_3MtnSXJlIV5dN9n705j4Mgfj', 86, 2, 1, 129, 'stripe', 60, 1, '2023-04-06 07:42:17', '2023-04-06 07:42:17'),
(73, 'rWAL1680767738', '3GC062264V515325X', 86, 4, 1, 149, 'paypal', 90, 1, '2023-04-06 07:55:38', '2023-04-06 07:56:12'),
(74, 'rexK1680768517', '40117854324', 86, 1, 1, 49, 'authorize.net', 90, 1, '2023-04-06 08:08:39', '2023-04-06 08:08:39'),
(75, 'SO4SPrb6tz0p', '4254938', 86, 4, 1, 149, 'flutterwave', 90, 1, '2023-04-06 08:14:56', '2023-04-06 08:15:53'),
(76, 'FLUaQUgWlIPI', '475421492', 86, 1, 8, 0.00029016113865523, 'paystack', 90, 1, '2023-04-06 09:13:21', '2023-04-06 09:13:21'),
(77, 'yYkDQtzX2V2h', 'txn_3MxpEkJlIV5dN9n707yIWX0O', 86, 1, 1, 49, 'stripe', 90, 1, '2023-04-17 10:24:42', '2023-04-17 10:24:42'),
(78, 'G6TN0qTozs8N', NULL, 86, 2, 1, 129, 'Manual', 60, 0, '2023-04-18 07:24:55', '2023-04-18 07:24:55'),
(79, 'KgQdoOpAoEra', NULL, 109, 4, 1, 149, 'paypal', 90, 0, '2023-07-10 05:38:42', '2023-07-10 05:38:42'),
(80, 'eRGu1693986651', NULL, 110, 20, 9, 0.0098751071870931, 'paytm', 30, 0, '2023-09-06 07:50:51', '2023-09-06 07:50:51'),
(81, 'NVoo1693986923', NULL, 110, 20, 9, 0.0098751071870931, 'paytm', 30, 0, '2023-09-06 07:55:23', '2023-09-06 07:55:23'),
(82, 'CBUI1693986951', NULL, 110, 20, 9, 0.0098751071870931, 'paytm', 30, 0, '2023-09-06 07:55:51', '2023-09-06 07:55:51');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `listing_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `listing_id`, `created_at`, `updated_at`) VALUES
(50, 138, 65, '2023-11-18 07:42:52', '2023-11-18 07:42:52'),
(63, NULL, NULL, '2023-11-27 10:24:18', '2023-11-27 10:24:18'),
(67, NULL, 85, '2023-11-29 08:41:16', '2023-11-29 08:41:16'),
(68, NULL, 125, '2023-11-30 16:52:32', '2023-11-30 16:52:32'),
(69, NULL, 113, '2023-12-01 14:50:28', '2023-12-01 14:50:28'),
(70, NULL, 139, '2023-12-03 07:59:14', '2023-12-03 07:59:14'),
(71, NULL, 142, '2023-12-04 10:51:20', '2023-12-04 10:51:20'),
(73, NULL, 90, '2023-12-08 19:06:28', '2023-12-08 19:06:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_processes`
--
ALTER TABLE `account_processes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_languages`
--
ALTER TABLE `admin_languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_user_conversations`
--
ALTER TABLE `admin_user_conversations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_user_messages`
--
ALTER TABLE `admin_user_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertise_with_us`
--
ALTER TABLE `advertise_with_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appadds`
--
ALTER TABLE `appadds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bartners`
--
ALTER TABLE `bartners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_conversations`
--
ALTER TABLE `booking_conversations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `countries_name_unique` (`name`),
  ADD UNIQUE KEY `countries_iso2_unique` (`iso2`),
  ADD UNIQUE KEY `countries_iso3_unique` (`iso3`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dynamic_forms`
--
ALTER TABLE `dynamic_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fonts`
--
ALTER TABLE `fonts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodtypes`
--
ALTER TABLE `foodtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generalsettings`
--
ALTER TABLE `generalsettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_banner_advertisement`
--
ALTER TABLE `home_banner_advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing_beauties`
--
ALTER TABLE `listing_beauties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing_enquiries`
--
ALTER TABLE `listing_enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing_faqs`
--
ALTER TABLE `listing_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing_menus`
--
ALTER TABLE `listing_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing_reviews`
--
ALTER TABLE `listing_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing_rooms`
--
ALTER TABLE `listing_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagesettings`
--
ALTER TABLE `pagesettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_gateways`
--
ALTER TABLE `payment_gateways`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_test`
--
ALTER TABLE `payment_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recent_views_listings`
--
ALTER TABLE `recent_views_listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sartners`
--
ALTER TABLE `sartners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seotools`
--
ALTER TABLE `seotools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitemaps`
--
ALTER TABLE `sitemaps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialsettings`
--
ALTER TABLE `socialsettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_providers`
--
ALTER TABLE `social_providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_notifications`
--
ALTER TABLE `user_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_subscriptions`
--
ALTER TABLE `user_subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_processes`
--
ALTER TABLE `account_processes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `admin_languages`
--
ALTER TABLE `admin_languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `admin_user_conversations`
--
ALTER TABLE `admin_user_conversations`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `admin_user_messages`
--
ALTER TABLE `admin_user_messages`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `advertise_with_us`
--
ALTER TABLE `advertise_with_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `appadds`
--
ALTER TABLE `appadds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bartners`
--
ALTER TABLE `bartners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `booking_conversations`
--
ALTER TABLE `booking_conversations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dynamic_forms`
--
ALTER TABLE `dynamic_forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fonts`
--
ALTER TABLE `fonts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `foodtypes`
--
ALTER TABLE `foodtypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=801;

--
-- AUTO_INCREMENT for table `generalsettings`
--
ALTER TABLE `generalsettings`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_banner_advertisement`
--
ALTER TABLE `home_banner_advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=276;

--
-- AUTO_INCREMENT for table `listing_beauties`
--
ALTER TABLE `listing_beauties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `listing_enquiries`
--
ALTER TABLE `listing_enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `listing_faqs`
--
ALTER TABLE `listing_faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT for table `listing_menus`
--
ALTER TABLE `listing_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `listing_reviews`
--
ALTER TABLE `listing_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `listing_rooms`
--
ALTER TABLE `listing_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pagesettings`
--
ALTER TABLE `pagesettings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `payment_gateways`
--
ALTER TABLE `payment_gateways`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `payment_test`
--
ALTER TABLE `payment_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `recent_views_listings`
--
ALTER TABLE `recent_views_listings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=403;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sartners`
--
ALTER TABLE `sartners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seotools`
--
ALTER TABLE `seotools`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sitemaps`
--
ALTER TABLE `sitemaps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `socialsettings`
--
ALTER TABLE `socialsettings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `social_providers`
--
ALTER TABLE `social_providers`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `user_notifications`
--
ALTER TABLE `user_notifications`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `user_subscriptions`
--
ALTER TABLE `user_subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
