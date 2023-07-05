-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 12:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default-image-post.svg',
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `description`, `image`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Tes Post', 'Tes bikin pengumuman', 'tes-pengumuman.jpg', 1, '2022-05-25 08:50:46', '2022-05-25 08:50:46'),
(2, 'Tes Post 2', 'Tes bikin pengumuman 2', 'tes-pengumuman.jpg', 1, '2022-05-25 08:50:46', '2022-05-25 08:50:46'),
(3, 'Tes Post 3', 'Tes bikin pengumuman 3', 'tes-pengumuman.jpg', 1, '2022-05-25 08:50:46', '2022-05-25 08:50:46');

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `present_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `st` enum('a','h') COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `guru_id` int(11) NOT NULL,
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
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'login',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `class_id`, `action`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 'login', '2022-05-25 09:52:55', '2022-05-25 09:52:55'),
(2, 5, 2, 'login', '2022-05-25 08:50:46', '2022-05-25 08:50:46'),
(3, 6, 3, 'login', '2022-05-25 08:50:46', '2022-05-25 08:50:46'),
(4, 7, 1, 'login', '2022-05-25 08:50:46', '2022-05-25 08:50:46'),
(5, 8, 7, 'login', '2022-05-25 08:50:46', '2022-05-25 08:50:46'),
(6, 9, 13, 'login', '2022-05-25 08:50:46', '2022-05-25 08:50:46');

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
(1, '2021_07_13_110616_create_akademik_table', 1);

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
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `task_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `raport`
--

CREATE TABLE `raport` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `courses_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `kehadiran` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tugas` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uts` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uas` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `title`, `year`, `created_at`, `updated_at`) VALUES
(1, 'X IPA 1', '2022', '2022-05-25 08:50:45', '2022-05-25 08:50:45'),
(2, 'X IPA 2', '2022', '2022-05-25 08:50:45', '2022-05-25 08:50:45'),
(3, 'X IPA 3', '2022', '2022-05-25 08:50:45', '2022-05-25 08:50:45'),
(4, 'X IPS 1', '2022', '2022-05-25 08:50:45', '2022-05-25 08:50:45'),
(5, 'X IPS 2', '2022', '2022-05-25 08:50:45', '2022-05-25 08:50:45'),
(6, 'X IPS 3', '2022', '2022-05-25 08:50:45', '2022-05-25 08:50:45'),
(7, 'XI IPA 1', '2022', '2022-05-25 08:50:45', '2022-05-25 08:50:45'),
(8, 'XI IPA 2', '2022', '2022-05-25 08:50:45', '2022-05-25 08:50:45'),
(9, 'XI IPA 3', '2022', '2022-05-25 08:50:45', '2022-05-25 08:50:45'),
(10, 'XI IPS 1', '2022', '2022-05-25 08:50:45', '2022-05-25 08:50:45'),
(11, 'XI IPS 2', '2022', '2022-05-25 08:50:45', '2022-05-25 08:50:45'),
(12, 'XI IPS 3', '2022', '2022-05-25 08:50:45', '2022-05-25 08:50:45'),
(13, 'XII IPA 1', '2022', '2022-05-25 08:50:45', '2022-05-25 08:50:45'),
(14, 'XII IPA 2', '2022', '2022-05-25 08:50:45', '2022-05-25 08:50:45'),
(15, 'XII IPA 3', '2022', '2022-05-25 08:50:45', '2022-05-25 08:50:45'),
(16, 'XII IPS 1', '2022', '2022-05-25 08:50:45', '2022-05-25 08:50:45'),
(17, 'XII IPS 2', '2022', '2022-05-25 08:50:45', '2022-05-25 08:50:45'),
(18, 'XII IPS 3', '2022', '2022-05-25 08:50:45', '2022-05-25 08:50:45');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `start_at` timestamp NULL DEFAULT NULL,
  `end_at` timestamp NULL DEFAULT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nisn` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_birth` date DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `gender` enum('l','p') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('a','g','s') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nisn`, `nip`, `phone`, `email`, `name`, `place_birth`, `date_birth`, `religion`, `email_verified_at`, `password`, `address`, `photo`, `class_id`, `gender`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, '0', 'admin@example.com', 'Administrator', NULL, NULL, NULL, '2022-05-25 08:50:45', '$2y$10$EgSG9HWJ7thOrKOfzTTrdOLYBae32jxZFSQ2QUXAVS18o7eqcMEYe', NULL, NULL, NULL, NULL, 'a', NULL, '2022-05-25 08:50:46', '2022-05-25 08:50:46'),
(2, NULL, NULL, '089512345678', 'admin2@example.com', 'Administrator 2', NULL, NULL, NULL, '2022-05-25 08:50:45', '$2y$10$.55yAxqY2bY9GmgAA/xLweXpHfXAw.Chrpk5sUhVpWQ5.BFWFxk92', NULL, NULL, NULL, NULL, 'a', NULL, '2022-05-25 08:50:46', '2022-05-25 08:50:46'),
(3, NULL, NULL, '081234567890', 'guru@example.com', 'Guru', NULL, NULL, NULL, '2022-05-25 08:50:46', '$2y$10$wiJQ8aruytMKTda/uvCGIuVTzci563MyXbZm/NeLOobaBi3AfoWDy', NULL, NULL, NULL, NULL, 'g', NULL, '2022-05-25 08:50:46', '2022-05-25 08:50:46'),
(4, NULL, NULL, '089876543210', 'juwita@example.com', 'Juwita D Sitorus', NULL, NULL, NULL, '2022-05-25 08:50:46', '$2y$10$CqXlcvLEzqknqnEr9MnSxOsndWfHHmORlqs/fAUAzs5NssZg17sH2', NULL, NULL, 1, NULL, 's', NULL, '2022-05-25 08:50:46', '2022-05-25 08:50:46'),
(5, NULL, NULL, '089876543211', 'samto@example.com', 'samto', NULL, NULL, NULL, '2022-05-25 08:50:46', '$2y$10$Ol6fRf3WxC6cHA1SN2dQeel/viDiWvxW4jYyfRBBafvHwADd9ihqK', NULL, NULL, 2, NULL, 's', NULL, '2022-05-25 08:50:46', '2022-05-25 08:50:46'),
(6, NULL, NULL, '089876543212', 'dwi@example.com', 'dwi', NULL, NULL, NULL, '2022-05-25 08:50:46', '$2y$10$InICwoGpoF0rTVcb6Dcqdu/ZLJC1kRByueRaQcTeZZb4n1C7u6sUK', NULL, NULL, 3, NULL, 's', NULL, '2022-05-25 08:50:46', '2022-05-25 08:50:46'),
(7, NULL, NULL, '089876543213', 'sofia@example.com', 'sofia', NULL, NULL, NULL, '2022-05-25 08:50:46', '$2y$10$dPBhD7gJ6oM.xOoPWUx.Nu5xcz/IB1Wfvhn9M.lES/W/.BUGI9Ta6', NULL, NULL, 1, NULL, 's', NULL, '2022-05-25 08:50:46', '2022-05-25 08:50:46'),
(8, NULL, NULL, '089876543214', 'taufik@example.com', 'taufik', NULL, NULL, NULL, '2022-05-25 08:50:46', '$2y$10$pwKzqXoAGCwCT3uiA3G7s.Z0XpKV2szoKdktNSOioPcjq/C/RSQni', NULL, NULL, 7, NULL, 's', NULL, '2022-05-25 08:50:46', '2022-05-25 08:50:46'),
(9, NULL, NULL, '089876543215', 'iqbal@example.com', 'iqbal', NULL, NULL, NULL, '2022-05-25 08:50:46', '$2y$10$5dPBdRNDPkWMhQwGTyCt/uXbb146us4aSq7LdQFI8lu2J430wmWge', NULL, NULL, 13, NULL, 's', NULL, '2022-05-25 08:50:46', '2022-05-25 08:50:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_title_unique` (`title`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logs_user_id_foreign` (`user_id`);

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
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `raport`
--
ALTER TABLE `raport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_nisn_unique` (`nisn`),
  ADD UNIQUE KEY `users_nip_unique` (`nip`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
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
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `raport`
--
ALTER TABLE `raport`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
