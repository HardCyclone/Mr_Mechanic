-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2021 at 05:32 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bengkel`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `id_register` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `transaction_id`, `product_id`, `name`, `price`, `qty`) VALUES
(1, 1, 1, 'teletivi', 100000, 10),
(2, 2, 1, 'teletivi', 100000, 1),
(3, 2, 2, 'apa saja', 100000, 1),
(4, 3, 1, 'teletivi', 100000, 1),
(5, 3, 3, 'test', 123, 1),
(6, 3, 4, 'apa saja ', 20000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `register_id` int(11) NOT NULL,
  `register_nmlgkp` varchar(100) NOT NULL,
  `register_almtlgkp` varchar(200) NOT NULL,
  `register_nohp` varchar(15) NOT NULL,
  `register_email` varchar(100) NOT NULL,
  `register_password` varchar(100) NOT NULL,
  `register_tmplhr` varchar(100) NOT NULL,
  `register_tgllhr` date NOT NULL,
  `id_session` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`register_id`, `register_nmlgkp`, `register_almtlgkp`, `register_nohp`, `register_email`, `register_password`, `register_tmplhr`, `register_tgllhr`, `id_session`) VALUES
(28, 'Obeth Wardhana', 'jalan nusiba 20', '081249364462', 'obethservice@gmail.com', '$2y$10$ASy9YWHIm8DNjpPN37dbIuWuOUxsIbNhOYJ6JkQCozwDVZ841eIBW', 'jakarta', '2021-12-06', 'yf7n9u6zCcrx8mHF-20211220064449');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `customername` varchar(100) CHARACTER SET latin1 NOT NULL,
  `customerphone` varchar(11) CHARACTER SET latin1 NOT NULL,
  `customeraddress` text CHARACTER SET latin1 NOT NULL,
  `customeremail` varchar(50) CHARACTER SET latin1 NOT NULL,
  `customernotes` text CHARACTER SET latin1 NOT NULL,
  `date` date NOT NULL,
  `total` int(11) NOT NULL,
  `status` enum('Menunggu Pembayaran','Dalam review','Lunas','Gagal') CHARACTER SET latin1 NOT NULL DEFAULT 'Menunggu Pembayaran',
  `paymentdate` date DEFAULT NULL,
  `paymentphoto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customerid`, `customername`, `customerphone`, `customeraddress`, `customeremail`, `customernotes`, `date`, `total`, `status`, `paymentdate`, `paymentphoto`) VALUES
(6, 28, 'Nadya Fathira', '08124936446', 'jalan nusiba 20', 'obethservice@gmail.com', 'dfhfdh', '2021-12-30', 1000000, 'Gagal', '2021-12-22', '5ff2ecf8d59e2b7d8db60f4d7c7dd0ee.PNG'),
(7, 28, 'Nadya Fathira', '08124936446', 'jalan nusiba 20', 'obethservice@gmail.com', 'sdg', '2021-12-30', 160000, 'Dalam review', '2021-12-17', '0ef463cf570e87df97fb19ef36ccd321.PNG'),
(8, 28, 'Obeth Wardhana', '08124936446', 'jalan nusiba 20', 'obethservice@gmail.com', 'tessf', '2021-12-31', 1480000, 'Lunas', '2021-12-07', 'b113edf622e3c51c019503330f9ec379.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `id_order`, `id_product`, `name`, `price`, `subtotal`, `qty`, `photo`) VALUES
(40, 6, 7, 'Ban Battlax', 120000, 600000, 5, 'shop-4.jpg'),
(41, 6, 6, 'Aki Yuasha', 80000, 400000, 5, 'shop-4.jpg'),
(42, 7, 6, 'Aki Yuasha', 80000, 160000, 2, 'shop-4.jpg'),
(43, 8, 6, 'Aki Yuasha', 80000, 880000, 11, 'shop-4.jpg'),
(44, 8, 7, 'Ban Battlax', 120000, 600000, 5, 'shop-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `description`, `photo`) VALUES
(1, 'Isuzu', 'tess', 'partner-4.jpg'),
(5, 'Yuasha', 'tes', 'partner-3.png'),
(6, 'Bridgestone', 'tess', 'partner-2.png'),
(9, 'Honda', 'tess', 'partner-1.png'),
(10, 'Wuling Motors', 'tes', '5ec3e1bc58550c0004427738.png'),
(11, 'Mitsubishi', 'tess', '800px-Mitsubishi_motors_new_logo_svg.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `type` enum('service','sparepart','','') NOT NULL,
  `photo` varchar(100) NOT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `type`, `photo`, `stock`) VALUES
(6, 'Aki Yuasha', 80000, 'sparepart', 'shop-4.jpg', 62),
(7, 'Ban Battlax', 120000, 'sparepart', 'shop-4.jpg', 0),
(18, 'Car Wash', 120000, 'service', 'banner-2.jpg', NULL),
(19, 'Ganti Oli', 200000, 'service', 'shop-4.jpg', NULL),
(20, 'Baru', 90000, 'sparepart', 'banner-2.jpg', 100);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `total` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `date`, `total`, `supplier_id`) VALUES
(1, '2021-11-14 10:40:37', 660000, 1),
(2, '2021-12-17 12:20:32', 200000, 1),
(3, '2021-12-17 12:27:09', 240000, 3),
(4, '2021-12-22 05:55:59', 20000000, 1),
(5, '2021-12-22 05:56:10', 30000000, 2),
(6, '2021-12-30 14:57:57', 400000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE `purchase_details` (
  `id` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `purchase_details`
--

INSERT INTO `purchase_details` (`id`, `purchase_id`, `product_id`, `price`, `qty`) VALUES
(1, 1, 1, 10000, 12),
(2, 1, 1, 30000, 18),
(3, 2, 1, 100000, 2),
(4, 3, 7, 120000, 2),
(5, 4, 20, 200000, 100),
(6, 5, 6, 300000, 100),
(7, 6, 7, 20000, 20);

-- --------------------------------------------------------

--
-- Table structure for table `shop_info`
--

CREATE TABLE `shop_info` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `address` varchar(300) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bank_no` varchar(50) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `bank_account` varchar(100) NOT NULL,
  `whatsapp` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `shop_info`
--

INSERT INTO `shop_info` (`id`, `name`, `address`, `logo`, `email`, `bank_no`, `bank_name`, `bank_account`, `whatsapp`, `facebook`, `instagram`, `youtube`) VALUES
(1, 'MR. MEKANIK', 'Jl. Baji Ateka', 'logo-transparent.png', 'info@gmail.com', '21455555555', 'Mandiri', 'AVS Perkasa', '628212345612', 'https://example.com', 'https://example.com', 'https://example.com');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `telephone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `address`, `telephone`) VALUES
(1, 'Honda', 'Sulawesi', '0902121'),
(2, 'Yuasha', '.', '.'),
(3, 'Bridgestone', '.', '.'),
(4, 'Suzuki', '.', '.');

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id_templates` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id_templates`, `judul`, `aktif`) VALUES
(1, 'carserv', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `description`) VALUES
(1, 'Brian Winata', 'Keren pelayanan nya, mobil saya ditreat dengan cepat dan pas. Langsung bisa gas!'),
(5, 'Chandra Kusuma', 'Udah 2 kali kesini dan hasilnya tetep OK. salut deh bisa menjaga kualitas even dua tiga kali order.'),
(6, 'Nadya', 'Saya kan ngga ngerti2 banget mobil ya, untuk bisa ini (mobil) beres aja udah seneng, eh malah sekalian di edukasi tentang perawatan nya jadi makin betah buat sering2 kesini. Thanks AVS!');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `type` enum('sparepart','service') NOT NULL,
  `total` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `customer` varchar(100) DEFAULT NULL,
  `plat` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `type`, `total`, `date`, `customer`, `plat`) VALUES
(1, 'sparepart', 1000000, '2021-11-14 10:41:38', NULL, NULL),
(2, 'service', 200000, '2021-11-15 12:12:44', 'Jason Pratama', 'DD 1023 AS'),
(3, 'service', 120123, '2021-12-14 19:22:32', 'andi wijaya', 'B 7218 AC');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`register_id`),
  ADD UNIQUE KEY `register_email` (`register_email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `shop_info`
--
ALTER TABLE `shop_info`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `purchase_details`
--
ALTER TABLE `purchase_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `shop_info`
--
ALTER TABLE `shop_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
