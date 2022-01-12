-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10 نوفمبر 2021 الساعة 09:52
-- إصدار الخادم: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- بنية الجدول `forms`
--

CREATE TABLE `forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `forms`
--

INSERT INTO `forms` (`id`, `path`, `created_at`, `updated_at`) VALUES
(1, '5584769-asus-wallpaper.jpg', '2020-06-30 21:40:23', '2020-06-30 21:40:23'),
(2, '٢٠٢٠٠٢٢١_١٣٠٦٥١.jpg', '2020-06-30 22:07:43', '2020-06-30 22:07:43'),
(3, '٢٠٢٠٠٢٢١_١٣٠١٥٠.jpg', '2020-06-30 22:10:01', '2020-06-30 22:10:01'),
(4, '81041002_450057159266017_2817785046264446976_n.jpg', '2020-06-30 22:10:50', '2020-06-30 22:10:50'),
(5, '٢٠٢٠٠٢٢١_١٢٥٦٢٩.jpg', '2020-07-07 13:15:23', '2020-07-07 13:15:23'),
(6, 'hhfhj.PNG', '2020-07-21 05:11:40', '2020-07-21 05:11:40');

-- --------------------------------------------------------

--
-- بنية الجدول `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_06_30_090659_create_files_table', 1),
(2, '2020_06_30_093836_create_forms_table', 2),
(3, '2020_07_07_195205_create_permission_tables', 3),
(4, '2014_10_12_100000_create_password_resets_table', 4),
(5, '2020_07_07_215608_create_products_table', 5);

-- --------------------------------------------------------

--
-- بنية الجدول `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\User', 6),
(2, 'App\\User', 7),
(2, 'App\\User', 8);

-- --------------------------------------------------------

--
-- بنية الجدول `partners`
--

CREATE TABLE `partners` (
  `id` int(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description_en` text DEFAULT 'description',
  `description_ar` text DEFAULT '\'توصيف\'',
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `partners`
--

INSERT INTO `partners` (`id`, `image`, `description_en`, `description_ar`, `url`, `created_at`, `updated_at`) VALUES
(3, '1622630793.jpg', 'tishreen university  sy', 'جامعة تشرين', 'http://www.tishreen.edu.sy/', '2021-06-02 07:46:33', '2021-09-08 06:32:57');

-- --------------------------------------------------------

--
-- بنية الجدول `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(4, 'role-delete', 'web', '2020-07-07 19:14:52', '2020-07-07 19:14:52');

-- --------------------------------------------------------

--
-- بنية الجدول `researchs`
--

CREATE TABLE `researchs` (
  `id` int(11) NOT NULL,
  `name_en` varchar(255) NOT NULL DEFAULT 'anonymous',
  `name_ar` varchar(255) NOT NULL DEFAULT 'مجهول',
  `image` varchar(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `description_en` text NOT NULL,
  `description_ar` text NOT NULL,
  `meta_kw` text NOT NULL,
  `meta_desc` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `researchs`
--

INSERT INTO `researchs` (`id`, `name_en`, `name_ar`, `image`, `file`, `description_en`, `description_ar`, `meta_kw`, `meta_desc`, `created_at`, `updated_at`) VALUES
(9, 'hi', 'تبمتيا', '1619123206.PNG', '1619123206.pdf', 'hhh gfgadhgd', 'nbXBNZB', 'crc, research , tishreen', 'crc cancer crc', '2021-04-22 17:26:46', '2021-09-08 07:11:48'),
(10, 'second', 'تاني', '1621244558.jpg', '1621244558.pdf', 'second second second second', 'تاني تاني   تاني تاني   تاني تاني', '', '', '2021-05-17 06:42:38', '2021-05-17 06:42:38'),
(11, 'ndbfbhb', 'خخهخه', '1621244699.jpg', '1621244699.pdf', 'ndbfbhb', 'لللاش', '', '', '2021-05-17 06:44:59', '2021-05-17 06:44:59'),
(12, 'description_en', 'vdescription_en', '1624435828.JPG', '1624435828.pdf', 'description_en', 'description_en', 'description_en', 'description_en', '2021-06-23 05:10:28', '2021-06-23 05:10:28'),
(13, 'mimes', 'mimes', '1624435858.pdf', '1624435858.pdf', 'description_en', 'description_en', 'description_en', 'description_en', '2021-06-23 05:10:58', '2021-06-23 05:10:58'),
(14, 'تتت', 'تتت', '1624438610.JPG', '1624438610.pdf', 'تتت', 'تتت', 'تتت', 'تتت', '2021-06-23 05:56:50', '2021-06-23 05:56:50'),
(15, 'fff', 'fff', '1624439083.JPG', '1624439083.pdf', 'fff', 'fff', 'fff', 'fff', '2021-06-23 06:04:43', '2021-06-23 06:04:43'),
(16, 'dhjhs', 'dhjhs', '1624442698.JPG', NULL, 'dhjhs', 'dhjhs', 'dhjhs', 'dhjhs', '2021-06-23 07:04:58', '2021-06-23 07:04:58'),
(18, 'bgg', 'bgg', '1631097800.JPG', '1631097800.pdf', 'bgg', 'bgg', 'bgg', 'bgg', '2021-09-08 07:43:20', '2021-09-08 07:43:20');

-- --------------------------------------------------------

--
-- بنية الجدول `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'writer', 'web', '2020-07-22 12:10:18', '2020-07-22 12:10:18'),
(2, 'admin', 'web', '2020-07-22 12:10:46', '2020-07-22 12:10:46');

-- --------------------------------------------------------

--
-- بنية الجدول `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name_en` varchar(50) NOT NULL DEFAULT 'anonymous',
  `name_ar` varchar(50) NOT NULL DEFAULT 'anonymous',
  `telephone` bigint(25) NOT NULL DEFAULT 0,
  `specialization_en` varchar(70) NOT NULL DEFAULT 'doctor',
  `specialization_ar` varchar(70) NOT NULL DEFAULT 'طبيب',
  `email` varchar(50) DEFAULT 'a@aa.com',
  `image` varchar(255) NOT NULL DEFAULT '	 person.png',
  `meta_desc` text NOT NULL,
  `meta_kw` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `teams`
--

INSERT INTO `teams` (`id`, `name_en`, `name_ar`, `telephone`, `specialization_en`, `specialization_ar`, `email`, `image`, `meta_desc`, `meta_kw`, `created_at`, `updated_at`) VALUES
(3, 'Nader Abdullah', 'anonymous', 993298686, 'Oncology', 'طبيب', 'vxgf@shgh.csjo', '1621671027.jpg', '', '', NULL, '2021-09-08 07:13:20'),
(4, 'Ali Alloush', 'anonymous', 991409499, 'Surgical Oncology', 'طبيب', 'aa@aa.com', '1621669429.jpg', '', '', NULL, '2021-05-22 04:43:49'),
(5, 'Youssef ZREIK', 'anonymous', 992571025, 'Microbiologist/ Virologist', 'طبيب', 'jjj@ww.nn', 'youssef_zreik.jpg', '', '', NULL, '2021-05-22 05:10:55'),
(22, 'anonymous', 'anonymous', 8799, 'doctor', 'طبيب', 'v nnv', '1621667613.jpg', '', '', '2021-05-05 14:55:53', '2021-05-22 04:13:33'),
(24, 'hhhh', 'تتتت', 5555, 'lkkkk', 'لااتات', 'hhhh@ss', '1621667530.jpg', '', '', '2021-05-22 04:12:10', '2021-05-22 04:12:10'),
(25, 'hhhh', 'منمم', 5555, 'hhh', 'لاتلاتال', 'ddd@gg', '1621671141.jpg', '', '', '2021-05-22 05:12:21', '2021-05-22 05:12:21'),
(27, 'gdfgs', 'gdfgs', 44444, 'gdfgs', 'gdfgs', 'gdfgs@aj.a', '1631098464.JPG', 'gdfgs', 'gdfgs', '2021-09-08 07:54:24', '2021-09-08 07:54:24'),
(28, 'gdfgs', 'gdfgs', 44444, 'gdfgs', 'gdfgs', 'gdfgs@aj.a', '1631098464.JPG', 'gdfgs', 'gdfgs', '2021-09-08 07:54:24', '2021-09-08 07:54:24');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'doaa', 'doaa@test.com', NULL, '$2y$10$PZ2OKrvVMp6EnnKYA/4tb.ws1P2xry.b3oh/n/NlhaZFSw4akoQ7O', NULL, '2021-09-07 05:35:32', '2021-09-07 05:35:32'),
(6, 'leen', 'leenfares92@yahoo.com', NULL, '$2y$10$mxV27lgCcoYnVgxLQWDdwu4wrKgC0g8FtIdcnCIO/BsBJ7rtUEepW', NULL, '2020-06-30 21:37:00', '2020-06-30 21:37:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `partners`
--
ALTER TABLE `partners`
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
-- Indexes for table `researchs`
--
ALTER TABLE `researchs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `researchs`
--
ALTER TABLE `researchs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- القيود للجدول `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- القيود للجدول `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
