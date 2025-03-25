-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2025 at 03:30 PM
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
-- Database: `mediaxis`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('manikandan523571@gmail.com|::1', 'i:1;', 1741177728),
('manikandan523571@gmail.com|::1:timer', 'i:1741177728;', 1741177728);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `communications1`
--

CREATE TABLE `communications1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `sender_id` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `urls` varchar(255) NOT NULL,
  `previous_hash` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `nonce` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `communications2`
--

CREATE TABLE `communications2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `sender_id` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `urls` varchar(255) NOT NULL,
  `previous_hash` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `nonce` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `p_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '9146', 'manikandan', 'manikandan52357@gmail.com', '2025-03-07 06:58:51', '$2y$12$fS9qHPSYwzj1jvQJcmDJvennZAzCPiPvaCzAvHoEKpAZpLvAefgbK', NULL, '2025-03-07 06:58:51', '2025-03-07 06:58:51'),
(2, '3243', 'Shobika', 'shobikaramalinham@gmail.com', '2025-03-07 08:08:47', '$2y$12$DOjtPAEHyVgY7fGsk1UXUumDc8hSFQ78LFRRHUQs1R.z3GHQ2MtNG', NULL, '2025-03-07 08:08:47', '2025-03-07 08:08:47');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `treatment` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `mobile`, `email`, `treatment`, `date`, `time`) VALUES
(2, 'Mani Kandan s', '09865464427', 'manikandan52357@gmail.com', 'consultation', NULL, '2025-03-07 14:28:40');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrated_patients`
--

CREATE TABLE `migrated_patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `mobile_1` varchar(255) NOT NULL,
  `mobile_2` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `blood` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `marital` varchar(255) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `emergency_contact_name` varchar(255) NOT NULL,
  `emergency_contact_mobile` varchar(255) NOT NULL,
  `emergency_contact_address` varchar(255) NOT NULL,
  `emergency_contact_relationship` varchar(255) NOT NULL,
  `emergency_contact_city` varchar(255) NOT NULL,
  `emergency_contact_state` varchar(255) NOT NULL,
  `emergency_contact_zip` varchar(255) NOT NULL,
  `previous_hash` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `nonce` varchar(255) NOT NULL,
  `approved` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrated_patients`
--

INSERT INTO `migrated_patients` (`id`, `patient_id`, `image`, `first_name`, `last_name`, `dob`, `mobile_1`, `mobile_2`, `email`, `blood`, `gender`, `marital`, `address_1`, `city`, `state`, `zip`, `emergency_contact_name`, `emergency_contact_mobile`, `emergency_contact_address`, `emergency_contact_relationship`, `emergency_contact_city`, `emergency_contact_state`, `emergency_contact_zip`, `previous_hash`, `hash`, `nonce`, `approved`, `created_at`, `updated_at`) VALUES
(1, '9146', 'me.jpg', 'manikandan', 'subramani', '2005-02-25', '9865464427', '09361313204', 'manikandan52357@gmail.com', 'A1+ve', 'Male', 'Single', 'mariyamman kovil street,vediyarasam palayam,pallipalayam', 'namakkal', 'Tamilnadu', '638008', 'Subramani', '09361313204', 'mariyamman kovil street,vediyarasam palayam,pallipalayam', 'Father', 'namakkal', 'Tamilnadu', '638008', '00000abc123456789manikandan', '0008a939ad5ca71efb849066060b15fe16e16505b7fb5cfa8ef43e0900667529', '4343', 0, '2025-03-07 07:02:19', '2025-03-07 07:02:19'),
(3, '3243', 'shobika.jpg', 'Shobika', 'Ramalinham', '2004-07-12', '09843495588', '09843495588', 'shobikaramalinham@gmail.com', 'A1+ve', 'Male', 'Single', 'LIG-II ,568 Manickam Palayam ,Housing Unit', 'erode', 'Tamilnadu', '638001', 'Ramalinham', '09843495588', 'LIG-II ,568 Manickam Palayam ,Housing Unit', 'Father', 'erode', 'Tamilnadu', '638001', '0008a939ad5ca71efb849066060b15fe16e16505b7fb5cfa8ef43e0900667529', '000f74794f957bbea9d90fea3856d345a314837ea15e034bec92b22e9382aee6', '2653', 0, '2025-03-07 08:10:52', '2025-03-07 08:10:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrated_records`
--

CREATE TABLE `migrated_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `date` timestamp NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'migrated',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrated_records`
--

INSERT INTO `migrated_records` (`id`, `patient_id`, `name`, `mobile`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, '9146', 'manikandan subramani', '9865464427', '2025-03-07 12:32:19', 'migrated', '2025-03-07 07:02:19', '2025-03-07 07:02:19'),
(2, '3243', 'Shobika Ramalinham', '09843495588', '2025-03-07 13:40:52', 'migrated', '2025-03-07 08:10:52', '2025-03-07 08:10:52');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_02_17_060252_create_personal_access_tokens_table', 1),
(5, '2025_02_19_100515_create_permission_tables', 1),
(6, '2025_02_19_111308_create_customers_table', 1),
(7, '2025_02_20_045333_add_email_verification_to_customers_table', 1),
(8, '2025_02_22_114742_create_work_order_table', 1),
(9, '2025_02_24_105251_create_order_table', 1),
(10, '2025_02_24_112204_create_communications_table', 1),
(11, '2025_02_27_094100_create_patient_details_table', 1),
(12, '2025_03_02_065336_create_treatment_history_table', 1),
(13, '2025_03_02_153929_create_payments_table', 1),
(14, '2025_03_04_145305_create_migreq_table', 1),
(15, '2025_03_05_115233_create_table1_table', 1),
(16, '2025_03_05_115234_create_table2_table', 1),
(17, '2025_03_05_115235_create_migrated_data_table', 1),
(18, '2025_03_06_144812_create_migrated_patients_table', 2),
(19, '2025_03_06_174705_create_migrated_records_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `migreq`
--

CREATE TABLE `migreq` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `y_hospital` varchar(255) NOT NULL,
  `y_reason` varchar(255) NOT NULL,
  `m_hospital` varchar(255) NOT NULL,
  `m_id` varchar(255) NOT NULL,
  `previous_hash` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `nonce` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migreq`
--

INSERT INTO `migreq` (`id`, `patient_id`, `name`, `y_hospital`, `y_reason`, `m_hospital`, `m_id`, `previous_hash`, `hash`, `nonce`, `created_at`, `updated_at`) VALUES
(2, '9146', 'manikandan subramani', 'Mediaxis', 'other', 'ganga Hospital', '36039E', '00000abc123456789manikandan', '0002b721b689295f5f8d5630a0b1e0a7879c246a6af9182cfed81a65a9b319f4', '8826', '2025-03-07 08:54:04', '2025-03-07 08:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `buyer` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `season` varchar(255) NOT NULL,
  `style_number` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `internal_number` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `size1` varchar(255) NOT NULL,
  `size2` varchar(255) NOT NULL,
  `size3` varchar(255) NOT NULL,
  `size4` varchar(255) NOT NULL,
  `assigned` varchar(255) NOT NULL,
  `ass_date` varchar(255) NOT NULL,
  `deli_date` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `previous_hash` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `nonce` varchar(255) NOT NULL,
  `printing` varchar(255) NOT NULL,
  `embroiding` varchar(255) NOT NULL,
  `stiching` varchar(255) NOT NULL,
  `ironing` varchar(255) NOT NULL,
  `packaging` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `mobile_1` varchar(255) NOT NULL,
  `mobile_2` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `blood` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `marital` varchar(255) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `emergency_contact_name` varchar(255) NOT NULL,
  `emergency_contact_mobile` varchar(255) NOT NULL,
  `emergency_contact_address` varchar(255) NOT NULL,
  `emergency_contact_relationship` varchar(255) NOT NULL,
  `emergency_contact_city` varchar(255) NOT NULL,
  `emergency_contact_state` varchar(255) NOT NULL,
  `emergency_contact_zip` varchar(255) NOT NULL,
  `previous_hash` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `nonce` varchar(255) NOT NULL,
  `sent` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`id`, `patient_id`, `image`, `first_name`, `last_name`, `dob`, `mobile_1`, `mobile_2`, `email`, `blood`, `gender`, `marital`, `address_1`, `city`, `state`, `zip`, `emergency_contact_name`, `emergency_contact_mobile`, `emergency_contact_address`, `emergency_contact_relationship`, `emergency_contact_city`, `emergency_contact_state`, `emergency_contact_zip`, `previous_hash`, `hash`, `nonce`, `sent`, `created_at`, `updated_at`) VALUES
(1, '9146', 'me.jpg', 'manikandan', 'subramani', '2005-02-25', '9865464427', '09361313204', 'manikandan52357@gmail.com', 'A1+ve', 'Male', 'Single', 'mariyamman kovil street,vediyarasam palayam,pallipalayam', 'namakkal', 'Tamilnadu', '638008', 'Subramani', '09361313204', 'mariyamman kovil street,vediyarasam palayam,pallipalayam', 'Father', 'namakkal', 'Tamilnadu', '638008', '00000abc123456789manikandan', '0008a939ad5ca71efb849066060b15fe16e16505b7fb5cfa8ef43e0900667529', '4343', 0, '2025-03-07 06:58:51', '2025-03-07 06:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` varchar(255) NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `previous_hash` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `nonce` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `patient_id`, `invoice`, `name`, `address`, `date`, `time`, `payment`, `amount`, `previous_hash`, `hash`, `nonce`, `created_at`, `updated_at`) VALUES
(1, '9146', '147A13', 'manikandan subramani', 'mariyamman kovil street,vediyarasam palayam,pallipalayam, namakkal,Tamilnadu, 638008', '2025-03-08', NULL, 'Paid', '200', '00000abc123456789manikandan', '0004300b6c0466c3b7de1befba332c7b04348a05c1d4b38b127345d139e1d0d1', '6439', '2025-03-07 07:01:27', '2025-03-07 07:01:27'),
(2, '3243', '243192', 'Shobika Ramalinham', 'LIG-II ,568 Manickam Palayam ,Housing Unit, erode,Tamilnadu, 638001', '2025-03-06', NULL, 'Paid', '200', '0004300b6c0466c3b7de1befba332c7b04348a05c1d4b38b127345d139e1d0d1', '000073be386fbc81f8075637300ebc191b852eb1012a2b6bfd47ce5be9ed6ee1', '2422', '2025-03-07 08:09:52', '2025-03-07 08:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2025-02-19 05:13:11', '2025-02-19 05:13:11'),
(2, 'role-create', 'web', '2025-02-19 05:13:11', '2025-02-19 05:13:11'),
(3, 'role-edit', 'web', '2025-02-19 05:13:11', '2025-02-19 05:13:11'),
(4, 'role-delete', 'web', '2025-02-19 05:13:11', '2025-02-19 05:13:11');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2025-02-19 05:14:13', '2025-02-19 05:14:13');

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
(2, 1),
(3, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('crCPzzGK2faZqypN24Wl5ZC8UJEzqmzojJI6R1XK', 3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiQTVzVEU5eGhXRHNlVVdjSU9OZ3hqbkxqNXQyT0VPT1BTdk80d29TdyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3QvbWVkaWF4aXMvcHVibGljL2hvbWUiO31zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MztzOjQ6ImF1dGgiO2E6MTp7czoyMToicGFzc3dvcmRfY29uZmlybWVkX2F0IjtpOjE3NDEzNTA2MDc7fXM6NTU6ImxvZ2luX2N1c3RvbWVyXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1741357824),
('mryrNjykS1jXKzRyaMcjUs8nIYNY86YMrJxflGCA', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36 Edg/134.0.0.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoieHFqWEw3MmlqOXd4UlBVVzF5bnd6Z1R1cjBUNTczUmdqMVR5S2NBRyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQwOiJodHRwOi8vbG9jYWxob3N0L21lZGlheGlzL3B1YmxpYy9taWctcmVjIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjQ6ImF1dGgiO2E6MTp7czoyMToicGFzc3dvcmRfY29uZmlybWVkX2F0IjtpOjE3NDEzNTA3NzU7fX0=', 1741357819);

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `html_template` text NOT NULL,
  `css_template` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `name`, `slug`, `thumbnail`, `html_template`, `css_template`, `created_at`, `updated_at`) VALUES
(1, 'Theme1', 'theme1', '', 'Welcome', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `treatment_history`
--

CREATE TABLE `treatment_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time DEFAULT current_timestamp(),
  `treatment` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `previous_hash` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `nonce` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `treatment_history`
--

INSERT INTO `treatment_history` (`id`, `patient_id`, `name`, `mobile`, `date`, `time`, `treatment`, `msg`, `doctor`, `amount`, `previous_hash`, `hash`, `nonce`, `created_at`, `updated_at`) VALUES
(1, '9146', 'manikandan subramani', '9865464427', '2025-03-07', '23:11:00', 'Cardialogy', 'very good', 'Dr. P', '200', '00000abc123456789manikandan', '0000b7cfcc284fa4a1b96324dc621ad773d74477bdb440317d7fcea6a912b741', '85', '2025-03-07 07:01:03', '2025-03-07 07:01:03');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_history(1)`
--

CREATE TABLE `treatment_history(1)` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `treatment` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `previous_hash` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `nonce` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `treatment_history(2)`
--

CREATE TABLE `treatment_history(2)` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `treatment` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `previous_hash` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `nonce` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Censocare Healthcare', 'admin@censocare.com', NULL, '$2y$12$ebuhrRzmeuQF52BcTSn5IO5/quy.uXV0S/gaz1OaLJ/PlsMzSzccG', NULL, '2025-03-06 01:12:00', '2025-03-06 01:12:00'),
(3, 'Mediaxis Healthcare', 'admin@mediaxis.com', NULL, '$2y$12$fNjooo7lszNUr0uAa732FeMpoxXe4j0Zqn4w.G4dM4yIxsiJQZmG2', NULL, '2025-03-06 01:17:16', '2025-03-06 01:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `work1_order`
--

CREATE TABLE `work1_order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `assigned_person` varchar(255) NOT NULL,
  `assigned_task` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `previous_hash` varchar(255) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `nonce` bigint(20) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work1_order`
--

INSERT INTO `work1_order` (`id`, `job_id`, `title`, `number`, `department`, `quantity`, `assigned_person`, `assigned_task`, `end_date`, `message`, `previous_hash`, `hash`, `nonce`, `created_by`, `created_at`, `updated_at`) VALUES
(1, '882386', 'test1', '1001', 'Knit', '100', 'Push', '2025-02-22', '2025-02-23', 'new', '00000abc123456789pushparaj', '00086091872edcd83f603439a810694f2f5a8f25d70334874961485811bab7d6', 11494, 'pushparajrs1006@gmail.com', '2025-02-22 12:08:03', NULL),
(2, '977305', 'nnnn', '1002', 'Knit', '100', 'push', '2025-02-22', '2025-02-24', 'test', '00086091872edcd83f603439a810694f2f5a8f25d70334874961485811bab7d6', '000011df793c483214e9cb6e9e6e3281dbb091ac418ec5ded342ad710b519ba5', 1946, 'pushparajrs1006@gmail.com', '2025-02-22 12:09:23', NULL),
(3, '965967', 'Task new', '1045', 'Fabrication', '10', 'Davanesh', '2025-02-24', '2025-02-28', 'High priority order schedule based on that', '000011df793c483214e9cb6e9e6e3281dbb091ac418ec5ded342ad710b519ba5', '00013a21fd42d848fc61a55bf2d8f73831a3bfc2bfffbb24b43b2cfec6b0cab9', 13759, 'pushparajrs1006@gmail.com', '2025-02-24 01:56:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `work2_order`
--

CREATE TABLE `work2_order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `assigned_person` varchar(255) NOT NULL,
  `assigned_task` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `previous_hash` varchar(255) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `nonce` bigint(20) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work2_order`
--

INSERT INTO `work2_order` (`id`, `job_id`, `title`, `number`, `department`, `quantity`, `assigned_person`, `assigned_task`, `end_date`, `message`, `previous_hash`, `hash`, `nonce`, `created_by`, `created_at`, `updated_at`) VALUES
(1, '882386', 'test1', '1001', 'Knit', '100', 'Push', '2025-02-22', '2025-02-23', 'new', '00000abc123456789pushparaj', '00086091872edcd83f603439a810694f2f5a8f25d70334874961485811bab7d6', 11494, 'pushparajrs1006@gmail.com', '2025-02-22 12:08:03', NULL),
(2, '977305', 'nnnn', '1002', 'Knit', '100', 'push', '2025-02-22', '2025-02-24', 'test', '00086091872edcd83f603439a810694f2f5a8f25d70334874961485811bab7d6', '000011df793c483214e9cb6e9e6e3281dbb091ac418ec5ded342ad710b519ba5', 1946, 'pushparajrs1006@gmail.com', '2025-02-22 12:09:23', NULL),
(3, '965967', 'Task new', '1045', 'Fabrication', '10', 'Davanesh', '2025-02-24', '2025-02-28', 'High priority order schedule based on that', '000011df793c483214e9cb6e9e6e3281dbb091ac418ec5ded342ad710b519ba5', '00013a21fd42d848fc61a55bf2d8f73831a3bfc2bfffbb24b43b2cfec6b0cab9', 13759, 'pushparajrs1006@gmail.com', '2025-02-24 01:56:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `work_order`
--

CREATE TABLE `work_order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `assigned_person` varchar(255) NOT NULL,
  `assigned_task` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `communications1`
--
ALTER TABLE `communications1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `communications1_job_id_unique` (`job_id`);

--
-- Indexes for table `communications2`
--
ALTER TABLE `communications2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `communications2_job_id_unique` (`job_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrated_patients`
--
ALTER TABLE `migrated_patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `migrated_patients_patient_id_unique` (`patient_id`),
  ADD UNIQUE KEY `migrated_patients_email_unique` (`email`);
ALTER TABLE `migrated_patients` ADD FULLTEXT KEY `email` (`email`);

--
-- Indexes for table `migrated_records`
--
ALTER TABLE `migrated_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migreq`
--
ALTER TABLE `migreq`
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
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `treatment_history`
--
ALTER TABLE `treatment_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment_history(1)`
--
ALTER TABLE `treatment_history(1)`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment_history(2)`
--
ALTER TABLE `treatment_history(2)`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `work_order`
--
ALTER TABLE `work_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `communications1`
--
ALTER TABLE `communications1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `communications2`
--
ALTER TABLE `communications2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrated_patients`
--
ALTER TABLE `migrated_patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrated_records`
--
ALTER TABLE `migrated_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migreq`
--
ALTER TABLE `migreq`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_details`
--
ALTER TABLE `patient_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `treatment_history`
--
ALTER TABLE `treatment_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `treatment_history(1)`
--
ALTER TABLE `treatment_history(1)`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `treatment_history(2)`
--
ALTER TABLE `treatment_history(2)`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `work_order`
--
ALTER TABLE `work_order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
