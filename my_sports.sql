-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2025 at 05:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_sports`
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
(4, '2025_06_30_000000_create_produk_table', 2),
(5, '2025_06_30_100000_add_role_to_users_table', 3);

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
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_produk` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `jenis_produk`, `deskripsi`, `harga`, `gambar`, `created_at`, `updated_at`) VALUES
(7, 'Sepatu Lari Nike ZoomXXX', 'Sepatu lari ultra ringan dengan bantalan responsif, cocok untuk maraton.', 1750000.00, 'produk/IJ3ugNB8zlLcWGlIkTniWW9I0b6GD0rIyuJ6OEOM.jpg', '2025-07-01 03:51:36', '2025-07-01 05:01:00'),
(8, 'Adidas Ultraboost 21', 'Teknologi Boost memberikan kenyamanan maksimal saat lari harian.', 2200000.00, 'produk/fE3H0OZpoc5SFz0m9y4pbL7hWz6BAa5NDTl1QWsC.jpg', '2025-07-01 03:51:36', '2025-07-01 04:06:02'),
(9, 'Puma Deviate Nitro', 'Dirancang untuk kecepatan, ringan dan empuk.', 1550000.00, 'produk/AuD2kkQ578yqvTv1csz0Ngczcda9RtV7SGS5SR3D.jpg', '2025-07-01 03:51:36', '2025-07-01 04:12:26'),
(10, 'New Balance Fresh Foam X', 'Sepatu lari jarak jauh dengan foam lembut dan stabilitas ekstra.', 1800000.00, 'produk/I4765MHMRMAfwkyrRqAgjgOELTWLCEJfKzeo7M1T.jpg', '2025-07-01 03:51:36', '2025-07-01 04:13:20'),
(11, 'ASICS Gel-Kayano 30', 'Support maksimal dan shock absorption terbaik untuk pelari berat.', 2400000.00, 'produk/8Jg6dCbGaKufVgsnCaCeQXN0W1Pay5TGOMzu0ARP.jpg', '2025-07-01 03:51:36', '2025-07-01 04:14:08'),
(12, 'Reebok Nano X3', 'Cocok untuk gym dan lari ringan, grip kuat dan fleksibel.', 1600000.00, 'produk/W9aTesflQ3IylwgfPfi525Cn3rnnfUKec3bkGFcw.jpg', '2025-07-01 03:51:36', '2025-07-01 04:18:17'),
(13, 'Nike Metcon 9', 'Sepatu training dengan stabilitas untuk angkat beban dan HIIT.', 1900000.00, 'produk/GJg4tOGmJvtl9Wjw3Ex9DIi0M5vpYzS3jzG1CILE.jpg', '2025-07-01 03:51:36', '2025-07-01 04:18:57'),
(14, 'Adidas Adizero Adios Pro 3', 'Sepatu racing elite, karbon plate & Lightstrike Pro midsole.', 3100000.00, 'produk/jXiWqsQ5SCwj32YAoBE11lDwbTjSwDs6A1NtBAvy.jpg', '2025-07-01 03:51:36', '2025-07-01 04:20:20'),
(15, 'Mizuno Wave Rider 27', 'Responsif dan nyaman untuk lari harian, desain aerodinamis.', 1700000.00, 'produk/dbrdd4Uua1cbT7BzQ1ygmUQlQ5M6TItZrqiHsKEd.jpg', '2025-07-01 03:51:36', '2025-07-01 04:21:10'),
(16, 'Under Armour HOVR Machina 3', 'Dilengkapi sensor tracking & foam HOVR yang empuk dan responsif.', 2300000.00, 'produk/vtg3PJTBQZrdXH6f5KpgfrIkOpZmPQLnTR0HlQKi.jpg', '2025-07-01 03:51:36', '2025-07-01 04:22:27'),
(17, 'On Cloudswift', 'Teknologi CloudTec untuk transisi halus dan support perkotaan.', 2000000.00, 'produk/giW5kGB2i3g5tFYZPrhACgTe9xkizPkAwdnGvR9B.png', '2025-07-01 03:51:36', '2025-07-01 04:23:46'),
(18, 'Salomon Speedcross 6', 'Sepatu trail dengan grip tajam dan tahan air, cocok untuk medan terjal.', 2100000.00, 'produk/leOU3mbFTg7J1AdolTH2BJxNGnq7MCoRW94dTKQA.png', '2025-07-01 03:51:36', '2025-07-01 04:24:57'),
(19, 'Brooks Ghost 15', 'Cushioning lembut dan responsif untuk daily training.', 1850000.00, 'produk/5dcXAd6wRnWSQMTQcZCBj7QvuPFg6Xvmh01SZdGZ.png', '2025-07-01 03:51:36', '2025-07-01 04:25:34'),
(20, 'Saucony Endorphin Speed 3', 'Midsole plated untuk kecepatan dan efisiensi energi.', 2500000.00, 'produk/2ue2UtnCFL9BBNI9pXmG8f1LHF0jSOzjzcteMXwU.png', '2025-07-01 03:51:36', '2025-07-01 04:26:15'),
(21, 'Nike Pegasus 40', 'All-around runner untuk segala jenis latihan lari.', 1650000.00, 'produk/pH3Skghii5j3skcrFeehnxBUsQGSpmNpz5TBXwRv.png', '2025-07-01 03:51:36', '2025-07-01 04:26:57'),
(22, 'ASICS Novablast 5', 'Bounce tinggi dan ringan, cocok untuk pelari netral.', 1780000.00, 'produk/gJ2PhJEfo4LDD8TSgjB2ULob3xMmvDFroRJOtk1u.png', '2025-07-01 03:51:36', '2025-07-01 07:04:20'),
(26, 'sepatu', 'sptu', 123.00, 'produk/EEbqGQ6mnM6Z3J21Z2ts8VGhYauabCw8PTS8VpGi.png', '2025-07-01 10:03:28', '2025-07-01 10:03:28');

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
('9bXIOIBB1FfhyTBJ83qvoYg55L68qZuQ1g3VEmkJ', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidFhCelNIOGpxazlFQWV6dWFaR2pVamlJVXFJUk5QbEZXVjIyZkhyQyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3RlciI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7fQ==', 1752333271);

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
  `role` varchar(255) NOT NULL DEFAULT 'pembeli',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'admin@admin.com', NULL, '$2y$12$nkWH4XzzPLiAtuQbGn9tteSfwYrPT9X5xMIFL.uidzUmSIv2wLRK2', 'admin', 'btuaGWcMfWjxG7AgvLptrfURch3Tv88rkTFE5ZxH4FkRreGsHOrkvvzAjiyt', '2025-07-01 01:25:33', '2025-07-01 01:25:33'),
(3, 'AL', 'al@gmail.com', NULL, '$2y$12$k3dsFZ//MXxCUyjs4K84b.rbhNgCQCiR91775naZ.IiRE795WKi76', 'pembeli', NULL, '2025-07-01 02:00:03', '2025-07-01 02:00:03'),
(4, 'Test User', 'test@example.com', '2025-07-01 03:51:35', '$2y$12$6Tq3BUITA5NxtGZhf3XDUuf1fxI5guFeIPcqBX8rxmucNBPuPVReG', 'pembeli', 'kAYfnjAF1r', '2025-07-01 03:51:35', '2025-07-01 03:51:35'),
(5, 'Ahmad Andre Alfiansyah', 'aku@admin.com', NULL, '$2y$12$HQnWWSeIopGUBBEM2hvcb.R5kwpaemW1gYPKlFZ4h6PfiNHC02kDy', 'pembeli', NULL, '2025-07-13 01:48:26', '2025-07-13 01:48:26');

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
