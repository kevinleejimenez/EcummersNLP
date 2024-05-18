-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2024 at 11:06 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`) VALUES
(1, 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Aozi', 'Aozi pink for adult cats all breed Pure Natural', 10.99, 'assets/products/CAT DRY FOODS/1.jpg', '2024-05-17 00:00:00'),
(2, 'Cuties Catz', 'Cuties Catz Dry Cat Food Tuna flavored 1-2kg', 15.49, 'assets/products/CAT DRY FOODS/2.jpg', '2024-05-17 00:00:00'),
(3, 'Infinity', 'Infinity Cat all breed adult Salmon Flavor 1-2kg', 7.99, 'assets/products/CAT DRY FOODS/3.jpg', '2024-05-17 00:00:00'),
(4, 'Nutricare', 'Nutricare for cats all breed Tuna Flavor 1-2kg and 1kg Repacked', 10.00, 'assets/products/CAT DRY FOODS/4.jpg', '2024-05-17 00:00:00'),
(5, 'Powercat', 'Powercat adult Halal-Organic fresh cat food Fresh ocean tuna flavor', 15.00, 'assets/products/CAT DRY FOODS/5.jpg', '2024-05-17 00:00:00'),
(6, 'Powercat', 'Powercat kitten Formula Halal-Organic fresh cat food 1-2kg and 1kg Repacked', 12.00, 'assets/products/CAT DRY FOODS/6.jpg', '2024-05-17 00:00:00'),
(7, 'Smartheart', 'Smartheart for adult cat all breeds chicken & tuna Flavor 1-2kg and 1kg Repacked', 2.00, 'assets/products/CAT DRY FOODS/7.jpg', '2024-05-17 00:00:00'),
(8, 'Whiskas', 'Whiskas adult Cat 1+ Tuna flavor 1-2kg and 1kg Repacked', 5.00, 'assets/products/CAT DRY FOODS/8.jpg', '2024-05-17 00:00:00'),
(9, 'Whiskas', 'Whiskas junior 2-12 months Ocean fish flavour 1-2kg and 1kg Repacked', 22.00, 'assets/products/CAT DRY FOODS/9.jpg', '2024-05-17 00:00:00'),
(10, 'Zoi', 'Zoi Cat Dry Food Tuna flavour 1-2kg and 1kg Repacked', 20.00, 'assets/products/CAT DRY FOODS/10.jpg', '2024-05-17 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_verified` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified`, `password`, `date`) VALUES
(3, 'titeko', 'kevinleejimenez@gmail.com', 'kevinleejimenez@gmail.com', 'd13fffb29440b85c0ad80ed4886b63bba0887ded75e12ca3ed10cfb2fcac4de6', '2024-05-18 09:50:44'),
(4, 'kevinborat', 'kevinleecamantigue@gmail.com', 'kevinleecamantigue@gmail.com', 'd13fffb29440b85c0ad80ed4886b63bba0887ded75e12ca3ed10cfb2fcac4de6', '2024-05-18 10:15:02');

-- --------------------------------------------------------

--
-- Table structure for table `verify`
--

CREATE TABLE `verify` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `expires` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `verify`
--

INSERT INTO `verify` (`id`, `code`, `expires`, `email`) VALUES
(1, 69582, 1716019418, 'kevinleejimenez@gmail.com'),
(2, 15804, 1716020727, 'kevinleecamantigue@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `email` (`email`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `verify`
--
ALTER TABLE `verify`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`),
  ADD KEY `expires` (`expires`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `verify`
--
ALTER TABLE `verify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
