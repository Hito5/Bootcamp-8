-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2026 at 06:03 AM
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
-- Database: `ecommerce_sesi17`
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
('laravel-cache-alipong123@gmail.com|127.0.0.1', 'i:1;', 1782273002),
('laravel-cache-alipong123@gmail.com|127.0.0.1:timer', 'i:1782273002;', 1782273002);

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
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Fashion and Sport.', '2026-06-09 19:49:59', '2026-06-20 18:40:59'),
(4, 'Electronic.', '2026-06-09 19:50:06', '2026-06-20 18:41:03'),
(5, 'Lifestyle & Hobbies.', '2026-06-17 23:04:08', '2026-06-20 18:41:05');

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
(4, '2026_05_27_114412_create_categories_table', 1),
(5, '2026_05_27_114535_create_products_table', 1),
(6, '2026_05_27_114546_create_orders_table', 1),
(7, '2026_06_15_030926_add_role_to_users_table', 2),
(8, '2026_06_18_065157_add_category_id_to_products_table', 3),
(9, '2026_06_21_020611_add_views_to_products_table', 4),
(10, '2026_06_24_020054_create_carts_table', 5),
(11, '2026_06_24_025813_create_orders_table', 6),
(12, '2026_06_24_025819_create_order_items_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `total_price` int(11) NOT NULL,
  `shipping_address` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status`, `total_price`, `shipping_address`, `created_at`, `updated_at`) VALUES
(1, 3, 'pending', 10350000, 'Alamat Default', '2026-06-23 20:08:11', '2026-06-23 20:43:07'),
(2, 2, 'pending', 3775000, 'Alamat Default', '2026-06-23 20:46:23', '2026-06-23 20:46:23'),
(3, 4, 'pending', 3350000, 'Alamat Default', '2026-06-23 20:50:07', '2026-06-23 20:50:07');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 4, 2400000, '2026-06-23 20:08:11', '2026-06-23 20:08:11'),
(2, 1, 3, 1, 750000, '2026-06-23 20:08:11', '2026-06-23 20:08:11'),
(3, 2, 3, 1, 750000, '2026-06-23 20:46:23', '2026-06-23 20:46:23'),
(4, 2, 12, 1, 625000, '2026-06-23 20:46:23', '2026-06-23 20:46:23'),
(5, 2, 11, 1, 2400000, '2026-06-23 20:46:23', '2026-06-23 20:46:23'),
(6, 3, 6, 1, 2000000, '2026-06-23 20:50:07', '2026-06-23 20:50:07'),
(7, 3, 10, 1, 1350000, '2026-06-23 20:50:07', '2026-06-23 20:50:07');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `stock`, `image`, `created_at`, `updated_at`, `category_id`, `views`) VALUES
(2, 'Asics Superblast 4', 'Sepatu nyaman untuk lari dan outdoor activity', 2400000.00, 20, 'products/KC0IWIVquVAB4DbYfAWQAuTVqx7vO90RaNNQSEfD.jpg', '2026-06-08 00:49:29', '2026-06-23 20:45:45', 3, 33),
(3, 'Keyboard Mechanical', 'Keyboard yang sangat nyaman untuk scriptwriting maupun gaming', 750000.00, 99, 'products/CzXajK0UfBxodoVKMxsUBE1EwLU0GyfqxAq16wDz.jpg', '2026-06-09 19:47:10', '2026-06-23 20:46:09', 4, 6),
(4, 'RTX 5060', 'Tidak usah di deskripsi lagi soal ini ya idaman semua manusia di muka bumi', 10500000.00, 10, 'products/IchDW3ZdC6kP7ufcoIsdSXzbEdGs66uxZE0Rzo75.jpg', '2026-06-09 19:48:39', '2026-06-23 19:35:51', 4, 5),
(5, 'Xiaomi G24i 24\" I G24i 2026 24\" Inch', '240hz namun murah meriah', 1750000.00, 20, 'products/5LnYkXklKo3fOffS3SOz7tHo3HWz6hOUVy1mEdo2.jpg', '2026-06-09 19:49:46', '2026-06-23 20:48:40', 4, 1),
(6, 'Infinix Zero 50 Nina', 'Terbaik untuk gaming di harga yang sangat terjangkau', 2000000.00, 16, 'products/EZCLoaJIUEqVlkeVSgX1JQddVIG5tUN24aPWleFz.jpg', '2026-06-09 19:54:05', '2026-06-23 20:49:48', 4, 2),
(7, 'Adidas Adizero', 'Good for Daily', 2000000.00, 20, 'products/leIzkMHLnBTQm3QqEyfzRKgfKAb7j2Dgyy53wCsY.jpg', '2026-06-17 22:52:35', '2026-06-20 19:23:32', 3, 1),
(8, 'Satisfy Cap', 'Running apparel developed to unlock the High.', 1200000.00, 36, 'products/OYFMete2jRVf1m1MkhU9XHUT1tUDsmkAHVIc3IqR.jpg', '2026-06-17 22:53:56', '2026-06-23 20:32:16', 3, 3),
(9, 'Naruto Action Figure', 'Rare hanya ada 100 di Indonesia', 1000000.00, 100, 'products/wy24NBLoX8oqd6m4iJlavszbX54p8JCnEL04vVYa.jpg', '2026-06-20 18:44:29', '2026-06-20 19:23:25', 5, 1),
(10, 'Frame', 'Aesthectic Frame made from Trees', 1350000.00, 15, 'products/t6crx363oSBfTgCpCsy5OlraM8HpqkkHDoguk6kq.jpg', '2026-06-20 18:46:33', '2026-06-23 20:49:56', 5, 3),
(11, 'Bonsai Tree', 'Eye catching and brings us luck', 2400000.00, 5, 'products/7AuL9zN3FWmAnaqDb3BTBCnFBR0IOacHEkb7EG5k.jpg', '2026-06-20 18:47:53', '2026-06-23 20:46:20', 5, 2),
(12, 'Kaonashi (No-Face)', 'Clay art', 625000.00, 85, 'products/PcA5in0lMSicjQf0dYi9dIkAOUZPIYYHOYzBWVpQ.jpg', '2026-06-20 18:49:27', '2026-06-23 20:46:15', 5, 2);

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
('mF8LAL425Yw1Ra6kAuZqjaK1S9kg7qxjQbd79UUt', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibEFRYnRXdE4yWWtrQklUTmh5Wnc3YVNUWWd6Vk9KazM0YTUzaFhHZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9vcmRlcnMiO3M6NToicm91dGUiO3M6MTI6ImFkbWluLm9yZGVycyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1782273206);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hito', 'hitosanjaya@gmail.com', 'admin', NULL, '$2y$12$0NVqGG0fL8N93FTTErYHMeORTkwTiyDqr.DiSH3I0tl6TlVGnvGau', NULL, '2026-06-08 00:31:16', '2026-06-08 00:31:16'),
(2, 'Toing', 'ardhitosanjaya123@gmail.com', 'user', NULL, '$2y$12$iQWUSEVU5uCYy1tDdKKYGu.VFJMiK8Vy0/n2ZHZmDLyN.HyULSAwS', NULL, '2026-06-14 20:19:44', '2026-06-14 20:19:44'),
(3, 'Omar', 'omar123@gmail.com', 'user', NULL, '$2y$12$yBkeeL/27K25BEsL5ftbouaVT1Clq4e8yeHYnbJHswiPpZGm/h0NS', NULL, '2026-06-23 19:09:16', '2026-06-23 19:09:16'),
(4, 'Alipong', 'alipong123@gmail.com', 'user', NULL, '$2y$12$3W3peij772jbTOMeShZQVeCSNPNVPfDEhs4thRqjLYQXy80t9s6wy', NULL, '2026-06-23 20:49:42', '2026-06-23 20:49:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
