-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2023 at 06:56 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hamahd`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_codes`
--

CREATE TABLE `active_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `code` int(10) UNSIGNED NOT NULL,
  `expired_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `commentrates`
--

CREATE TABLE `commentrates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `commentable_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `item1` tinyint(4) NOT NULL,
  `item2` tinyint(4) NOT NULL,
  `item3` tinyint(4) NOT NULL,
  `item4` tinyint(4) NOT NULL,
  `item5` tinyint(4) NOT NULL,
  `item6` tinyint(4) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `commentable_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `rate_id` bigint(20) UNSIGNED NOT NULL,
  `course_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_price` int(11) NOT NULL,
  `course_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mark_users`
--

CREATE TABLE `mark_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submenu` tinyint(1) NOT NULL,
  `keycheck` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_panels`
--

CREATE TABLE `menu_panels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submenu` tinyint(1) DEFAULT 0,
  `keycheck` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namayesh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_panels`
--

INSERT INTO `menu_panels` (`id`, `title`, `slug`, `icon`, `submenu`, `keycheck`, `namayesh`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'پنل مدیریتی', 'admin/dashboard', 'dashboard', 0, NULL, NULL, 4, 1, '2023-01-30 11:19:37', '2023-01-30 11:19:37'),
(2, 'دسته بندی', 'admin/categories', 'local_library', 1, NULL, NULL, 4, 1, '2023-01-30 11:19:37', '2023-01-30 11:19:37'),
(3, 'دسترسی', 'admin/permissions', 'description', 1, NULL, NULL, 4, 1, '2023-01-30 11:19:37', '2023-01-30 11:19:37'),
(4, 'وب سایت', 'admin/site', 'slideshow', 1, NULL, NULL, 4, 1, '2023-01-30 11:19:37', '2023-01-30 11:19:37');

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
(49, '2013_01_21_900900_create_user_types_table', 1),
(50, '2014_10_12_000000_create_users_table', 1),
(51, '2014_10_12_100000_create_password_resets_table', 1),
(52, '2019_08_19_000000_create_failed_jobs_table', 1),
(53, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(54, '2023_01_21_000010_create_visitors_table', 1),
(55, '2023_01_21_051207_menus', 1),
(56, '2023_01_21_051208_create_submenus_table', 1),
(57, '2023_01_21_065958_create_categories_table', 1),
(58, '2023_01_21_070016_create_rates_table', 1),
(59, '2023_01_21_070160_create_courses_table', 1),
(60, '2023_01_21_070653_create_reasult_books_table', 1),
(61, '2023_01_21_073441_create_media_table', 1),
(62, '2023_01_21_084111_create_active_codes_table', 1),
(63, '2023_01_21_093816_create_commentrates_table', 1),
(64, '2023_01_21_093936_create_comments_table', 1),
(65, '2023_01_21_094100_create_mark_users_table', 1),
(66, '2023_01_21_094143_create_menu_panels_table', 1),
(67, '2023_01_21_094201_create_permissions_table', 1),
(68, '2023_01_21_094202_create_roles_table', 1),
(69, '2023_01_21_094211_create_permission_roles_table', 1),
(70, '2023_01_21_094236_create_role_users_table', 1),
(71, '2023_01_21_094317_slide', 1),
(72, '2023_01_21_094342_create_submenu_panels_table', 1);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `slug`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'دسترسی', 'permission', NULL, '2023-01-27 16:48:05', '2023-01-27 16:48:05'),
(2, 'مدیریت سایت', 'site-manage', NULL, '2023-01-27 16:48:05', '2023-01-27 16:48:05'),
(3, 'دسته بندی', 'category', NULL, '2023-01-27 16:48:05', '2023-01-27 16:48:05'),
(4, 'مدیریت دسته بندی', 'category-manage', NULL, '2023-01-27 16:48:05', '2023-01-27 16:48:05'),
(5, 'مدیریت دسترسی قسمت ها', 'permission-manage', NULL, '2023-01-27 16:48:05', '2023-01-27 16:48:05'),
(6, 'مدیریت سطح دسترسی', 'level-manage', NULL, '2023-01-27 16:48:05', '2023-01-27 16:48:05'),
(7, 'مدیریت دسترسی کاربران', 'user-level-manage', NULL, '2023-01-27 16:48:05', '2023-01-27 16:48:05'),
(8, 'مدیریت کاربران', 'user-manage', NULL, '2023-01-27 16:48:05', '2023-01-27 16:48:05'),
(9, 'مدیریت پروفایل', 'profile-manage', NULL, '2023-01-27 16:48:05', '2023-01-27 16:48:05'),
(10, 'مدیریت دسته بندی سایت', 'sitecategory-manage', NULL, '2023-01-27 16:48:05', '2023-01-27 16:48:05'),
(11, 'مدیریت منو داشبورد', 'menudashboards-manage', NULL, '2023-01-27 16:50:37', '2023-01-27 16:50:37'),
(12, 'مدیریت زیرمنو داشبورد', 'submenudashboards-manage', NULL, '2023-01-27 16:50:37', '2023-01-27 16:50:37'),
(13, 'مدیریت کاربران سایت', 'user-site-manage', NULL, '2023-01-27 16:50:37', '2023-01-27 16:50:37'),
(14, 'مدیریت پیام ها', 'comment-manage', NULL, '2023-01-27 16:50:37', '2023-01-27 16:50:37'),
(15, 'مدیریت نظرات', 'commentrate-manage', NULL, '2023-01-27 16:50:37', '2023-01-27 16:50:37'),
(16, 'مدیریت منو سایت', 'sitemenu-manage', NULL, '2023-01-27 16:50:37', '2023-01-27 16:50:37'),
(17, 'مدیریت اسلایدها', 'slide-manage', NULL, '2023-01-27 16:51:53', '2023-01-27 16:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `role_id`, `permission_id`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 1, 1, 1, NULL, NULL),
(5, 1, 2, 1, NULL, NULL),
(6, 1, 3, 1, NULL, NULL),
(7, 1, 4, 1, NULL, NULL),
(8, 1, 5, 1, NULL, NULL),
(9, 1, 6, 1, NULL, NULL),
(10, 1, 7, 1, NULL, NULL),
(11, 1, 8, 1, NULL, NULL),
(12, 1, 9, 1, NULL, NULL),
(13, 1, 10, 1, NULL, NULL),
(14, 1, 11, 1, NULL, NULL),
(15, 1, 12, 1, NULL, NULL),
(16, 1, 13, 1, NULL, NULL),
(17, 1, 14, 1, NULL, NULL),
(18, 1, 15, 1, NULL, NULL),
(19, 1, 16, 1, NULL, NULL),
(20, 1, 17, 1, NULL, NULL);

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reasult_books`
--

CREATE TABLE `reasult_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `count_episode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_episode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reasult` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `slug`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'مدیر ارشد', 'supperadmin', NULL, '2023-01-27 16:30:03', '2023-01-27 16:30:03'),
(2, 'مدیر', 'manager', NULL, '2023-01-27 16:30:42', '2023-01-27 16:30:42'),
(3, 'کارشناس ارشد', 'superexpert', NULL, '2023-01-27 16:30:42', '2023-01-27 16:30:42'),
(4, 'کارشناس', 'expert', NULL, '2023-01-27 16:30:42', '2023-01-27 16:30:42'),
(5, 'استاد', 'tech', NULL, '2023-01-27 16:30:42', '2023-01-27 16:30:42'),
(6, 'موقت', 'temp', NULL, '2023-01-27 16:30:42', '2023-01-27 16:30:42');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`role_id`, `user_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `submenus`
--

CREATE TABLE `submenus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keycheck` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `submenu_panels`
--

CREATE TABLE `submenu_panels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keycheck` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namayesh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submenu_panels`
--

INSERT INTO `submenu_panels` (`id`, `title`, `slug`, `keycheck`, `namayesh`, `status`, `description`, `menu_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'مدیریت دسته بندی', 'categories', NULL, NULL, 4, NULL, 2, 1, '2023-01-30 11:43:43', '2023-01-30 11:43:43'),
(2, 'دسترسی', 'permissions', NULL, NULL, 4, NULL, 3, 1, '2023-01-30 11:43:43', '2023-01-30 11:43:43'),
(3, 'سطح بندی', 'roles', NULL, NULL, 4, NULL, 3, 1, '2023-01-30 11:43:43', '2023-01-30 11:43:43'),
(4, 'سطح بندی کاربران', 'levelAdmins', NULL, NULL, 4, NULL, 3, 1, '2023-01-30 11:43:43', '2023-01-30 11:43:43'),
(5, 'مدیریت کاربر', 'users', NULL, NULL, 4, NULL, 3, 1, '2023-01-30 11:43:43', '2023-01-30 11:43:43'),
(6, 'نمایش پروفایل', 'profile', NULL, NULL, 4, NULL, 3, 1, '2023-01-30 11:43:43', '2023-01-30 11:43:43'),
(7, 'قفل صفحه', 'logout', NULL, NULL, 4, NULL, 3, 1, '2023-01-30 11:43:43', '2023-01-30 11:43:43'),
(8, 'مدیریت منو', 'menus', NULL, NULL, 4, NULL, 4, 1, '2023-01-30 11:43:43', '2023-01-30 11:43:43'),
(9, 'مدیریت زیر منو', 'submenus', NULL, NULL, 4, NULL, 4, 1, '2023-01-30 11:43:43', '2023-01-30 11:43:43'),
(10, 'مدیریت منو داشبورد', 'menudashboards', NULL, NULL, 4, NULL, 2, 1, '2023-01-30 11:43:43', '2023-01-30 11:43:43'),
(11, 'مدیریت زیر منو داشبورد', 'submenudashboards', NULL, NULL, 4, NULL, 2, 1, '2023-01-30 11:43:43', '2023-01-30 11:43:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_verify` tinyint(1) DEFAULT NULL,
  `telphone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `academic_id` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `api_token`, `level`, `email`, `email_verified_at`, `password`, `image`, `phone`, `phone_verify`, `telphone`, `type_id`, `state_id`, `city_id`, `birthday`, `address`, `status`, `bio`, `academic_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'محمد حسین دیوان بیگی', 'hosseindbk', 'sFn72M45SwplaBxNUuZwCZmMdBVdT37XJvWgOtOBdH5a0H4db1fe9e1ldWO8QHRT643rfDGheA9z5dhU5qbi6HUaITqWs9yxdHmU', 'admin', 'hosseindbk@yahoo.com', NULL, '$2y$10$aht8hinWz1ixIdvZ4oL5xedEcxkNkTjKaO8ecGCbN1oCMwdkvgLQW', 'image/user/fc69a90a4c1d93f47897551c2c09ddc4mahdialiakbarzade.jpg', '09128119938', 1, '02177247752', 1, NULL, NULL, '1371/04/16', 'نارمک خیابان دردشت بین کوچه 50 و 52 پلاک 53 طبقه اول', 1, 'نارمک خیابان دردشت بین کوچه 50 و 52 پلاک 53 طبقه اول', NULL, NULL, '2023-01-27 08:05:03', '2023-01-27 08:05:03');

-- --------------------------------------------------------

--
-- Table structure for table `usertypes`
--

CREATE TABLE `usertypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usertypes`
--

INSERT INTO `usertypes` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2023-01-27 08:04:57', '2023-01-27 08:04:57'),
(2, 'teacher', '2023-01-27 08:04:57', '2023-01-27 08:04:57'),
(3, 'student', '2023-01-27 08:04:57', '2023-01-27 08:04:57'),
(4, 'special guest', '2023-01-27 08:04:57', '2023-01-27 08:04:57'),
(5, 'normal guest', '2023-01-27 08:04:57', '2023-01-27 08:04:57');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `browser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_codes`
--
ALTER TABLE `active_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `active_codes_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_user_id_foreign` (`user_id`);

--
-- Indexes for table `commentrates`
--
ALTER TABLE `commentrates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_user_id_foreign` (`user_id`),
  ADD KEY `courses_category_id_foreign` (`category_id`),
  ADD KEY `courses_rate_id_foreign` (`rate_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `mark_users`
--
ALTER TABLE `mark_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mark_users_user_id_foreign` (`user_id`),
  ADD KEY `mark_users_course_id_foreign` (`course_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_user_id_foreign` (`user_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_user_id_foreign` (`user_id`);

--
-- Indexes for table `menu_panels`
--
ALTER TABLE `menu_panels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_panels_user_id_foreign` (`user_id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_roles_role_id_foreign` (`role_id`),
  ADD KEY `permission_roles_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rates_user_id_foreign` (`user_id`);

--
-- Indexes for table `reasult_books`
--
ALTER TABLE `reasult_books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reasult_books_user_id_foreign` (`user_id`),
  ADD KEY `reasult_books_course_id_foreign` (`course_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD KEY `role_users_role_id_foreign` (`role_id`),
  ADD KEY `role_users_user_id_foreign` (`user_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slides_user_id_foreign` (`user_id`);

--
-- Indexes for table `submenus`
--
ALTER TABLE `submenus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submenus_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `submenu_panels`
--
ALTER TABLE `submenu_panels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_type_id_foreign` (`type_id`);

--
-- Indexes for table `usertypes`
--
ALTER TABLE `usertypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active_codes`
--
ALTER TABLE `active_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commentrates`
--
ALTER TABLE `commentrates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mark_users`
--
ALTER TABLE `mark_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_panels`
--
ALTER TABLE `menu_panels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reasult_books`
--
ALTER TABLE `reasult_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submenus`
--
ALTER TABLE `submenus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submenu_panels`
--
ALTER TABLE `submenu_panels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usertypes`
--
ALTER TABLE `usertypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `active_codes`
--
ALTER TABLE `active_codes`
  ADD CONSTRAINT `active_codes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_rate_id_foreign` FOREIGN KEY (`rate_id`) REFERENCES `rates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mark_users`
--
ALTER TABLE `mark_users`
  ADD CONSTRAINT `mark_users_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mark_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `menu_panels`
--
ALTER TABLE `menu_panels`
  ADD CONSTRAINT `menu_panels_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_roles_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rates`
--
ALTER TABLE `rates`
  ADD CONSTRAINT `rates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reasult_books`
--
ALTER TABLE `reasult_books`
  ADD CONSTRAINT `reasult_books_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reasult_books_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `slides`
--
ALTER TABLE `slides`
  ADD CONSTRAINT `slides_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `submenus`
--
ALTER TABLE `submenus`
  ADD CONSTRAINT `submenus_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `usertypes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
