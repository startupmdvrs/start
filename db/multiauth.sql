-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2018 at 01:57 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multiauth`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `active`, `created_at`, `updated_at`) VALUES
(3, 'test', 1, '2017-12-19 01:44:55', '2018-03-16 04:57:45'),
(5, 'test2', 0, '2017-12-19 02:36:05', '2018-02-15 07:47:53'),
(6, 'test3', 0, '2017-12-19 02:43:05', '2018-02-15 07:47:53'),
(7, 'test4', 0, '2017-12-19 02:58:05', '2018-02-15 07:47:53'),
(8, 'test5', 1, '2017-12-19 03:03:05', '2017-12-19 03:03:05'),
(9, 'test6', 1, '2017-12-19 03:08:05', '2017-12-19 03:08:05'),
(10, 'test7', 1, '2017-12-19 03:14:05', '2017-12-19 03:14:05'),
(11, 'test8', 1, '2017-12-19 03:21:05', '2017-12-19 03:21:05'),
(12, 'test9', 1, '2017-12-19 03:28:05', '2017-12-19 03:28:05');

-- --------------------------------------------------------

--
-- Table structure for table `cmspages`
--

CREATE TABLE `cmspages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `status` enum('active','inactive','deleted') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `status` enum('active','inactive','deleted') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`id`, `name`, `status`) VALUES
(1, 'Servicing', 'active'),
(2, 'Repairing', 'active'),
(3, 'Car Care', 'active'),
(4, 'Subscription', 'active'),
(5, 'Emergency', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_sub`
--

CREATE TABLE `maintenance_sub` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `maintenance` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintenance_sub`
--

INSERT INTO `maintenance_sub` (`id`, `name`, `maintenance`, `description`) VALUES
(1, 'Standard Service', 1, ''),
(2, 'Comprehensive Check-Up', 1, ''),
(3, 'Brake Pad/Disc Pad Replacement', 2, ''),
(4, 'AC Check', 2, ''),
(5, 'Clutch Check', 2, ''),
(6, 'Battery Charging/Replacement', 2, ''),
(7, 'Wheel Alignment And Balancing', 2, ''),
(8, 'Other Diagnosis', 2, ''),
(9, 'Scanning', 2, ''),
(10, 'Tyre Replacement', 2, '');

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
(2, '2014_10_12_100000_create_password_resets_table', 2),
(3, '2017_12_19_054654_create_brand', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('test@gmail.com', '$2y$10$a.TvfEGnhTwLbBKkf2N62.0b5IPFRmGyvARC91m07gfcuF/QKUYMG', '2018-05-29 11:37:30');

-- --------------------------------------------------------

--
-- Table structure for table `service_order`
--

CREATE TABLE `service_order` (
  `id` int(11) NOT NULL,
  `v_type` int(11) NOT NULL,
  `v_company` int(11) NOT NULL,
  `v_model` int(11) NOT NULL,
  `v_maintenance` int(11) NOT NULL,
  `v_maintenance_sub` int(11) NOT NULL,
  `v_description` varchar(5000) NOT NULL,
  `v_status` enum('active','inactive','deleted') NOT NULL,
  `v_price` varchar(200) NOT NULL,
  `v_paytype` int(11) NOT NULL,
  `v_paystatus` int(11) NOT NULL,
  `v_pickup_address` varchar(500) NOT NULL,
  `v_drop_address` varchar(500) NOT NULL,
  `v_email` int(200) NOT NULL,
  `v_mobile` int(15) NOT NULL,
  `v_mobile_two` int(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` int(15) NOT NULL,
  `home_address` varchar(700) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` enum('0','1','2','3','4') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive','deleted') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile_no`, `home_address`, `photo`, `is_admin`, `remember_token`, `user_type`, `status`, `created_at`, `updated_at`) VALUES
(11, 'kaushik', 'kothiyakaushik@yahoo.com', '$2y$10$x0NZOxkdqanEOcEb5SeCUuPTONylO3aolaRTxglLvXRDmSsysFKvu', 0, '', '', 0, 'eIldELHq3ZJYdrkJTfywJMZiqvZH7hDIHxCvma2U5m0tuwUKY3X6TLTWTKZR', '0', 'active', '2017-12-15 07:23:57', '2017-12-15 07:23:57'),
(12, 'admin', 'admin@admin.com', '$2y$10$x0NZOxkdqanEOcEb5SeCUuPTONylO3aolaRTxglLvXRDmSsysFKvu', 0, '', '', 1, 'TvTEQKEzh4lYdJtDMsxSN7eC7HButj4nTKu90syUqlmKAg35gAb89os3PXHf', '0', 'active', '2017-12-15 07:24:57', '2017-12-15 07:24:57'),
(14, 'vimal', 'vimalc@yahoo.com', '$2y$10$wQU5W5u9uODzKR6X9OUkReSBqLB6pieHib.bcWJO4dUPO2cIeF5WO', 0, '', '', 0, '3DcEKTa3nRNxbilSlnTj6UAqs6MEpkTzj2zO7L14VUaxZv4morH0yxLlQinT', '0', 'active', '2017-12-16 00:08:41', '2017-12-16 00:08:41'),
(15, 'admin111', 'admin111@yahoo.com', '$2y$10$ep.u8TWKTvxHtK8OiB710O3ordlkyKzuJ70mBgj9BoajenzuiLw3S', 0, '', '', 1, 'aMI0qFQpFe2QbMkPFIIUbMVLYTZPM3gFOHarYZAuR8rgBe8W3U0Woc5sFuU8', '0', 'active', '2017-12-16 06:24:37', '2017-12-16 06:24:37'),
(16, 'admin12', 'admin12@yahoo.com', '$2y$10$QLwI9n1MX9FLcaLmCTkpwO6T/SKy66oYCcoHJzh8WLnQXDag/NziO', 0, '', '', 1, NULL, '0', 'active', '2017-12-18 01:07:15', '2017-12-18 01:07:15'),
(18, 'admin', 'admin14@yahoo.com', '$2y$10$fXNLRVa0R27e/Va9Nipuwuj0ey.1tREYB8FL74KICgX04zBLwv6Ii', 0, '', '', 1, 'If2yV4Hr1qIDTRaQszfapxnp6bEuNAXUNtJaRupaWPOTHpiiYpY0U6g31Tek', '0', 'active', '2017-12-18 05:20:21', '2017-12-18 05:20:21'),
(19, 'Hardik', 'hardik@yahoo.com', '$2y$10$jGoZr/cOpwY0CiLmH8y2/OVVONmO.8ZnN./i8y8gVhMXBZEYq3SSK', 0, '', '', 0, '8bxi29Yb4t1mzRoBnyPt3o2bYC1N02U7Hfa0smMswjj54YJ2rD1bCsDKJQvn', '0', 'active', '2017-12-18 05:22:33', '2017-12-18 05:22:33'),
(21, 'aa', 'vimalc111@yahoo.com', '$2y$10$M6UDoAPw5JBSX4YWk.4rVO3D6Q2ZnF0iTk1BFv3Qk.S41m.xXsJjC', 0, '', '', 1, NULL, '0', 'active', '2018-01-04 05:32:40', '2018-01-04 05:32:40'),
(22, 'test', 'test@gmail.com', '$2y$10$8E0gIKxYqpszaiTwPPJKsejA.WqVGXk5GdSSTkF2KrgyB37hcAYlm', 0, '', '', 0, 'cOcYDPd78EyS6i2upiVEMRIpI5zqCcRFgNC7is21h2DMAxdJJYyP2bmIGGZD', '0', 'active', '2018-05-27 09:02:38', '2018-05-27 09:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_company`
--

CREATE TABLE `vehicle_company` (
  `id` int(11) NOT NULL,
  `vehicle_type` int(11) NOT NULL,
  `company_name` varchar(300) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` enum('active','inactive','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_company`
--

INSERT INTO `vehicle_company` (`id`, `vehicle_type`, `company_name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'BMW', '', 'active', '2018-06-13 17:26:55', '0000-00-00 00:00:00'),
(2, 1, 'Honda', '', 'active', '2018-06-13 17:26:55', '0000-00-00 00:00:00'),
(3, 1, 'Bajaj', '', 'active', '2018-06-13 17:26:55', '0000-00-00 00:00:00'),
(4, 1, 'Activa', '', 'active', '2018-06-13 17:26:55', '0000-00-00 00:00:00'),
(5, 1, 'Suzuki', '', 'active', '2018-06-13 17:26:55', '0000-00-00 00:00:00'),
(6, 2, 'Hundai', '', 'active', '2018-06-13 17:26:55', '0000-00-00 00:00:00'),
(7, 2, 'Audi', '', 'active', '2018-06-13 17:26:55', '0000-00-00 00:00:00'),
(8, 2, 'Porsche', '', 'active', '2018-06-13 17:26:55', '0000-00-00 00:00:00'),
(9, 2, 'Mercedes', '', 'active', '2018-06-13 17:26:55', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_model`
--

CREATE TABLE `vehicle_model` (
  `id` int(11) NOT NULL,
  `company_name` int(11) NOT NULL,
  `vehicle_type` int(11) NOT NULL,
  `model_name` varchar(200) NOT NULL,
  `service_price` float(10,2) NOT NULL DEFAULT '0.00',
  `image` varchar(50) NOT NULL,
  `status` enum('active','inactive','deleted') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_model`
--

INSERT INTO `vehicle_model` (`id`, `company_name`, `vehicle_type`, `model_name`, `service_price`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'S 1000', 0.00, '', 'active', '2018-06-13 17:25:58', '2018-07-08 05:31:04'),
(2, 1, 1, 'F 850 GS', 0.00, '', 'active', '2018-06-13 17:25:58', '2018-07-08 05:31:04'),
(3, 1, 1, 'S 1000', 0.00, '', 'active', '2018-06-13 17:25:58', '2018-07-08 05:31:04'),
(4, 2, 1, 'Activa 5G', 0.00, '', 'active', '2018-06-13 17:25:58', '2018-07-08 05:31:04'),
(5, 2, 1, 'CB Shine', 0.00, '', 'active', '2018-06-13 17:25:58', '2018-07-08 05:31:04'),
(6, 2, 1, 'CB Hornet', 0.00, '', 'active', '2018-06-13 17:25:58', '2018-07-08 05:31:04'),
(8, 3, 1, 'Pulsar 150', 0.00, '', 'active', '2018-06-13 17:25:58', '2018-07-08 05:31:04'),
(9, 3, 1, 'Pulsar 180', 0.00, '', 'active', '2018-06-13 17:25:58', '2018-07-08 05:31:04'),
(10, 3, 1, 'Bajaj CT 100', 0.00, '', 'active', '2018-06-13 17:25:58', '2018-07-08 05:31:04'),
(11, 5, 1, 'Suzuki Intruder 150', 0.00, '', 'active', '2018-06-13 17:25:58', '2018-07-08 05:31:04'),
(12, 5, 1, 'Suzuki Hayabusa', 0.00, '', 'active', '2018-06-13 17:25:58', '2018-07-08 05:31:04'),
(13, 5, 1, 'Suzuki Gixxer 2018', 0.00, '', 'active', '2018-06-13 17:25:58', '2018-07-08 05:31:04'),
(14, 6, 2, 'Verna', 0.00, '', 'active', '2018-06-13 17:25:58', '2018-07-08 05:31:04'),
(15, 6, 2, 'Eon', 0.00, '', 'active', '2018-06-13 17:25:58', '2018-07-08 05:31:04'),
(16, 6, 2, 'i10/Grand i10', 0.00, '', 'active', '2018-06-13 17:25:58', '2018-07-08 05:31:04'),
(17, 7, 2, 'RS2', 0.00, '', 'active', '2018-06-13 17:25:58', '2018-07-08 05:31:04'),
(18, 7, 2, 'R8 Le Mans Prototype', 0.00, '', 'active', '2018-06-13 17:25:58', '2018-07-08 05:31:04'),
(19, 7, 2, 'RS6/RS6 Avant ', 0.00, '', 'active', '2018-06-13 17:25:58', '2018-07-08 05:31:04'),
(20, 9, 2, 'Mercedes-Benz 300SL', 0.00, '', 'active', '2018-06-13 17:25:58', '2018-07-08 05:31:04'),
(21, 9, 2, 'Mercedes-Benz C-Class', 0.00, '', 'active', '2018-06-13 17:25:58', '2018-07-08 05:31:04'),
(22, 9, 2, 'Mercedes-Benz SLS AMG', 0.00, '', 'active', '2018-06-13 17:25:58', '2018-07-08 05:31:04'),
(23, 8, 2, 'Porsche Cayenne\r\n', 0.00, '', 'active', '2018-06-13 17:25:58', '2018-07-08 05:31:04'),
(24, 8, 2, 'Porsche 718', 0.00, '', 'active', '2018-06-13 17:25:58', '2018-07-08 05:31:04'),
(25, 8, 2, 'Porsche Macan', 0.00, '', 'active', '2018-06-13 17:25:58', '2018-07-08 05:31:04');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_type`
--

CREATE TABLE `vehicle_type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` enum('active','inactive','deleted') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_type`
--

INSERT INTO `vehicle_type` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, '2wheelers', 'active', '2018-06-13 17:25:26', '2018-06-13 17:56:31'),
(2, '4wheelers', 'active', '2018-06-13 17:25:26', '2018-06-13 17:56:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmspages`
--
ALTER TABLE `cmspages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintenance_sub`
--
ALTER TABLE `maintenance_sub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_order`
--
ALTER TABLE `service_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_company`
--
ALTER TABLE `vehicle_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_model`
--
ALTER TABLE `vehicle_model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cmspages`
--
ALTER TABLE `cmspages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `maintenance_sub`
--
ALTER TABLE `maintenance_sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_order`
--
ALTER TABLE `service_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `vehicle_company`
--
ALTER TABLE `vehicle_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vehicle_model`
--
ALTER TABLE `vehicle_model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
