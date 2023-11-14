-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2023 at 06:28 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wfp_fashionstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pria', '2023-07-07 10:01:43', '2023-07-07 10:01:43', NULL),
(2, 'Wanita', '2023-07-07 10:01:43', '2023-07-07 10:01:43', NULL),
(3, 'Anak', '2023-07-07 10:01:43', '2023-07-07 10:01:43', NULL);

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
(1, '2023_07_07_103603_add_softdelete_category', 1),
(2, '2023_07_07_103659_add_softdelete_product', 1),
(3, '2023_07_07_103732_add_softdelete_transaction', 1),
(4, '2023_07_07_103825_add_softdelete_type', 1),
(5, '2023_07_07_103901_add_softdelete_user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `types_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `dimension` varchar(45) NOT NULL,
  `description` text NOT NULL,
  `img_url` text DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categories_id`, `types_id`, `name`, `brand`, `price`, `dimension`, `description`, `img_url`, `updated_at`, `created_at`, `deleted_at`) VALUES
(1, 2, 6, 'Kacamata Lensa Merah', 'Culprit Apparel', 75000, 'l', 'Kacamata yang bergaya dipadukan dengan lensa berwarna merah', 'product (1).jpg', '2023-07-08 18:25:07', '2023-07-07 10:11:03', NULL),
(2, 1, 6, 'Kacamata Lensa Kuning', 'Naiki', 125000, 'Xl', 'Kacamata yang bergaya dipadukan dengan lensa berwarna merah', 'product (4).jpg', '2023-07-08 18:25:20', '2023-07-07 10:16:49', NULL),
(3, 1, 1, 'Baju Biru Typography Sederhana', 'CA', 89000, 'm', 'Kaos dengan bahan yang tipis dan tahan sinar UV', 'product (5).jpg', '2023-07-07 21:33:09', '2023-07-07 10:19:33', NULL),
(4, 1, 1, 'Baju Airism UTF', 'Uniqlo', 199000, 'l', 'Kaos yang tahan dari sinar UV matahari', 'product (6).jpg', '2023-07-07 21:33:57', '2023-07-07 10:31:10', NULL),
(5, 1, 1, 'Kemeja Kantor Formal', 'Litton', 296000, 'm', 'Kemeja formal putih untuk kantor yang cocok dipadukan dengan bawahan hitam', 'product (9).jpg', '2023-07-07 21:34:48', '2023-07-07 10:32:56', NULL),
(6, 1, 1, 'Kemeja Katun Model Kerah Terbuka', 'Uniqlo', 399000, 'l', 'Kemeja Pria yang terbuat dari bahan yang nyaman dan drape yang halus. Padankan dengan koleksi Pria T-shirt dan kenakan sebagai luaran', 'product (10).jpg', '2023-07-08 03:50:33', '2023-07-07 18:35:42', NULL),
(7, 1, 1, 'Kemeja Motif Katun Model Kerah Terbuka', 'Uniqlo', 299000, 'xl', 'Kemeja dari bahan nyaman dengan aksen drape yang halus. Potongan lebar yang cocok dikenakan sebagai outer layer.', 'product (13).jpg', '2023-07-08 03:54:39', '2023-07-07 18:42:11', NULL),
(8, 1, 1, 'Kemeja Oxford Slim Fit Lengan Pendek', 'Uniqlo', 289000, 'm', 'Kemeja Pria klasik Oxford. Diperbarui dengan bahan yang lebih tahan lama', 'product (11).jpg', '2023-07-08 03:50:55', '2023-07-07 18:46:54', NULL),
(9, 1, 1, 'AIRism Katun T-Shirt Oversize Garis Uniqlo U', 'Uniqlo', 249000, 's', 'T-shirt oversized Pria berbahan katun \'AIRism\' yang lembut. Menampilkan desain motif bergaris. Terbuat dari polyester daur ulang.', 'product (13).jpg', '2023-07-08 03:51:12', '2023-07-07 19:02:26', NULL),
(10, 1, 1, 'T-Shirt DRY-EX Kerah Bulat Lengan Pendek', 'Uniqlo', 249000, 'm', 'T-shirt Pria berperforma tinggi dengan fitur \'DRY-EX\' yang cepat kering. Kini terasa lebih ringan untuk kenyamanan yang lebih baik.', 'product (18).jpg', '2023-07-08 03:51:35', '2023-07-07 19:03:59', NULL),
(11, 1, 1, 'T-Shirt Grafis Lengan Pendek Roger Federer', 'Uniqlo', 245000, 'xl', 'Koleksi kolaborasi dengan Roger Federer. Bahan katun premium dengan logo RF.', 'product (19).jpg', '2023-07-08 03:52:05', '2023-07-07 19:53:52', NULL),
(12, 2, 1, 'AIRism T-Shirt Panjang Seamless Kerah Lebar Lengan Pendek', 'Uniqlo', 199000, 'l', 'T-shirt Wanita dari bahan \'AIRism\' yang lembut. Tekstur alami yang cocok untuk berbagai pilihan gaya.', 'product (2).jpg', '2023-07-08 03:59:11', '2023-07-07 19:56:28', NULL),
(13, 2, 1, 'AIRism T-Shirt Crop Ekstra Lembut', 'Uniqlo', 125000, 's', 'T-shirt Wanita dari bahan \'AIRism\' yang halus seperti katun sehingga menjaga Anda tetap sejuk. Potongan pas dengan bahan lentur untuk kemudahan bergerak. Padankan dengan AIRism Legging Lembut Saku UV Protection untuk tampilan one set.', 'product (3).jpg', '2023-07-08 03:59:41', '2023-07-07 19:58:01', NULL),
(14, 1, 1, 'Cotton T-shirt', 'H&m', 99000, 'l', 'Straight-cut T-shirt in soft cotton jersey with a round, rib-trimmed neckline and gently dropped shoulders.', 'product (23).jpg', '2023-07-08 03:53:12', '2023-07-07 20:00:03', NULL),
(15, 2, 1, 'Oxford Shirt', 'H&m', 459000, 's', 'Shirt in washed Oxford cotton with a collar, buttons down the front and a yoke with a hanger at the back. Relaxed fit with dropped shoulders, long sleeves with buttoned cuffs, and a rounded hem. Slightly longer at the back.', 'product (7).jpg', '2023-07-08 04:00:02', '2023-07-07 20:25:50', NULL),
(16, 2, 2, 'Denim Shirt', 'H&m', 459000, 'l', 'CONSCIOUS CHOICE Shirt in sturdy cotton denim with a collar, buttons down the front and a yoke at the back. Long sleeves with buttoned cuffs, open patch pockets on the chest and a rounded hem.', 'product (8).jpg', '2023-07-08 04:00:18', '2023-07-07 20:27:39', NULL),
(17, 2, 2, 'Oversized Blouse', 'H&m', 479900, 'm', 'Oversized blouse in softly draping satin with a pointed collar and buttons down the front. Dropped shoulders, slightly forward-facing shoulder seams, long sleeves and buttoned cuffs with a slit. Rounded hem. Slightly longer at the back.', 'product (12).jpg', '2023-07-08 04:02:29', '2023-07-07 20:29:43', NULL),
(18, 2, 2, 'Knitted Sweater Vest', 'H&m', 145000, 'm', 'Sweater vest knitted in a wool blend with a round neckline and slits in the sides. Ribbing around the neckline, armholes and hem. Slightly longer at the back.', 'product (14).jpg', '2023-07-08 04:02:48', '2023-07-07 20:36:23', NULL),
(19, 3, 1, '2-potong Setelan Bermotif', 'H&m', 249000, 'm', 'Setelan nyaman dengan gaun oversize dari kain sweat bermotif dengan bagian dalam lembut dan legging dari katun jersey bermotif yang lembut. Gaun dengan tudung menyilang berfuring jersey, bahu menurun, lengan panjang, serta rib pada manset dan kelim. Legging dengan karet tertutup di bagian pinggang.', 'product (15).jpg', '2023-07-08 04:03:43', '2023-07-07 20:39:27', NULL),
(20, 3, 2, 'Kaos Minion', 'Min', 99000, 'm', 'Kartun lucu minion dipadukan dengan warna kaos yang hitam', 'product (20).jpg', '2023-07-08 04:06:29', '2023-07-08 04:06:29', NULL),
(21, 3, 1, 'ADLV Beruang', 'ADLV', 555000, 'l', 'Kaos branded berlapis emas', 'product (21).jpg', '2023-07-08 04:34:00', '2023-07-08 04:34:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_transaction`
--

CREATE TABLE `product_transaction` (
  `product_id` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `total_price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_transaction`
--

INSERT INTO `product_transaction` (`product_id`, `transaction_id`, `quantity`, `total_price`) VALUES
(1, 1, 3, 225000),
(12, 1, 1, 199000),
(16, 1, 1, 459000);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `received_point` int(11) DEFAULT NULL,
  `pajak` double NOT NULL,
  `total` double NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `users_id`, `created_at`, `updated_at`, `received_point`, `pajak`, `total`, `deleted_at`) VALUES
(1, 1, '2023-07-08 04:35:43', '2023-07-08 04:35:43', 8, 97130, 980130, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `updated_at`, `created_at`, `deleted_at`) VALUES
(1, 'Kaos', '2023-07-07 10:01:43', '2023-07-07 10:01:43', NULL),
(2, 'Kemeja', '2023-07-07 10:01:43', '2023-07-07 10:01:43', NULL),
(3, 'Jeans', '2023-07-07 10:01:43', '2023-07-07 10:01:43', NULL),
(4, 'Celana pendek', '2023-07-07 10:01:43', '2023-07-07 10:01:43', NULL),
(5, 'Jaket', '2023-07-07 10:15:37', '2023-07-07 10:15:37', NULL),
(6, 'Kacamata', '2023-07-08 18:22:52', '2023-07-08 18:22:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `role` enum('pembeli','owner','staff') NOT NULL,
  `point_member` int(11) NOT NULL DEFAULT 0,
  `phone_number` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `fname`, `lname`, `role`, `point_member`, `phone_number`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'livia', '$2y$10$Ky7skUmDwWnMX/xLhKKaYugumaaMz2XPiAG4V/Nyg9xwGTYGw16ki', 'livia@gmail.com', 'Livia', 'Arcelia', 'staff', 8, '081234567890', '2023-07-07 10:04:11', '2023-07-08 04:35:43', NULL),
(2, 'owner', '$2y$10$NTh9gQs5Mgikz2P6.Hkrge5ex8i2dh7OMePAgHeWO5tj4G3QTDR5i', 'owner@gmail.com', 'Super', 'Admin', 'owner', 0, '081234567890', '2023-07-08 21:26:48', '2023-07-08 21:26:48', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_products_categories_idx` (`categories_id`),
  ADD KEY `fk_products_types1_idx` (`types_id`);

--
-- Indexes for table `product_transaction`
--
ALTER TABLE `product_transaction`
  ADD PRIMARY KEY (`product_id`,`transaction_id`),
  ADD KEY `fk_products_transactions_transactions1_idx` (`transaction_id`),
  ADD KEY `fk_products_transactions_products1_idx` (`product_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_transactions_users1_idx` (`users_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_categories` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_products_types1` FOREIGN KEY (`types_id`) REFERENCES `types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product_transaction`
--
ALTER TABLE `product_transaction`
  ADD CONSTRAINT `fk_products_transactions_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_products_transactions_transactions1` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `fk_transactions_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
