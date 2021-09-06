-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2021 at 06:46 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Insert_Payments` (IN `total` DOUBLE, IN `userid` INT)  BEGIN
set @datenow = (select NOW());
INSERT INTO `sales`(`user_id`, `total`) VALUES (userid,total);
SET @LastId = (SELECT LAST_INSERT_ID());

insert into sale_details(`date`,`sale_id`,`product_id`,`quantity`,`user_id`) values(@datenow,@LastId,1,1,userid);
    END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'laptops'),
(2, 'smartphones');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` double NOT NULL,
  `store_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `quantity`, `price`, `store_id`, `category_id`, `image`) VALUES
(1, 'HP', 40, 1000, 1, 1, 'HP.jpg'),
(2, 'Toshiba', 30, 1000, 1, 1, 'toshiba.jpg'),
(3, 'Lenovo', 35, 1000, 1, 1, 'lenovo.jpg'),
(4, 'Samsung', 30, 1000, 1, 2, NULL),
(5, 'iphone12Pro', 30, 1100, 1, 2, 'iphone12Pro.jpg'),
(6, 'IphoneProMax', 60, 1100, 1, 2, 'IphoneProMax.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `user_id`, `total`) VALUES
(1, 1, 1000),
(2, 1, 280000),
(3, 1, 280000),
(4, 1, 280000),
(5, 1, 280000),
(6, 1, 28600),
(7, 1, 28600),
(8, 1, 28600),
(9, 1, 28600),
(10, 1, 28600),
(11, 1, 28600),
(12, 1, 28600),
(13, 1, 28600),
(14, 1, 29600),
(15, 1, 29600),
(16, 1, 29600),
(17, 1, 29600),
(18, 1, 29600),
(19, 1, 29600),
(20, 1, 29600),
(21, 1, 29600),
(22, 1, 29600),
(23, 1, 29600),
(24, 1, 7700),
(25, 1, 5500),
(26, 1, 5500),
(27, 1, 10800),
(28, 1, 2000),
(29, 1, 2100),
(30, 1, 2000),
(31, 1, 3200),
(32, 1, 5000),
(33, 1, 4000),
(34, 1, 14000),
(35, 1, 2000),
(36, 1, 2000),
(37, 1, 2000),
(38, 1, 2000),
(39, 1, 4000),
(40, 1, 4000),
(41, 1, 2000),
(42, 1, 3200),
(43, 1, 5000),
(44, 1, 5000),
(45, 1, 7000),
(46, 1, 4000);

-- --------------------------------------------------------

--
-- Table structure for table `sale_details`
--

CREATE TABLE `sale_details` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `sale_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sale_details`
--

INSERT INTO `sale_details` (`id`, `product_id`, `quantity`, `user_id`, `date`, `sale_id`) VALUES
(2, 1, 40, 1, '2021-09-06 00:00:00', 23),
(3, 6, 60, 1, '2021-09-06 00:00:00', 23),
(4, 5, 30, 1, '2021-09-06 00:00:00', 23),
(5, 3, 35, 1, '2021-09-06 00:00:00', 23),
(6, 1, 40, 1, '2021-09-06 00:00:00', 23),
(7, 2, 30, 1, '2021-09-06 00:00:00', 23),
(8, 2, 30, 1, '2021-09-06 00:00:00', 23),
(9, 3, 35, 1, '2021-09-06 00:00:00', 23),
(10, 4, 30, 1, '2021-09-06 00:00:00', 23),
(11, 5, 30, 1, '2021-09-06 00:00:00', 23),
(12, 1, 40, 1, '2021-09-06 00:00:00', 23),
(13, 2, 30, 1, '2021-09-06 00:00:00', 23),
(14, 3, 35, 1, '2021-09-06 00:00:00', 23),
(15, 3, 35, 1, '2021-09-06 00:00:00', 23),
(16, 3, 35, 1, '2021-09-06 00:00:00', 23),
(17, 1, 40, 1, '2021-09-06 00:00:00', 23),
(18, 1, 40, 1, '2021-09-06 00:00:00', 23),
(19, 5, 30, 1, '2021-09-06 00:00:00', 23),
(20, 5, 30, 1, '2021-09-06 00:00:00', 23),
(21, 6, 60, 1, '2021-09-06 00:00:00', 23),
(22, 1, 40, 1, '2021-09-06 00:00:00', 23),
(23, 2, 30, 1, '2021-09-06 00:00:00', 23),
(24, 3, 35, 1, '2021-09-06 00:00:00', 23),
(25, 1, 40, 1, '2021-09-06 00:00:00', 23),
(26, 2, 30, 1, '2021-09-06 00:00:00', 23),
(27, 1, 40, 1, '2021-09-06 00:00:00', 23),
(28, 2, 30, 1, '2021-09-06 00:00:00', 23),
(29, 2, 30, 1, '2021-09-06 00:00:00', 23),
(30, 1, 40, 1, '2021-09-06 00:00:00', 23),
(31, 5, 30, 1, '2021-09-06 00:00:00', 24),
(32, 6, 60, 1, '2021-09-06 00:00:00', 24),
(33, 5, 30, 1, '2021-09-06 00:00:00', 25),
(34, 5, 30, 1, '2021-09-06 00:00:00', 25),
(35, 5, 2, 1, '2021-09-06 00:00:00', 26),
(36, 6, 3, 1, '2021-09-06 00:00:00', 26),
(37, 4, 2, 1, '2021-09-06 00:00:00', 27),
(38, 5, 3, 1, '2021-09-06 00:00:00', 27),
(39, 6, 5, 1, '2021-09-06 00:00:00', 27),
(40, 1, 1, 1, '2021-09-06 00:00:00', 28),
(41, 2, 1, 1, '2021-09-06 00:00:00', 28),
(42, 4, 1, 1, '2021-09-06 00:00:00', 29),
(43, 6, 1, 1, '2021-09-06 00:00:00', 29),
(44, 2, 1, 1, '2021-09-06 00:00:00', 30),
(45, 3, 1, 1, '2021-09-06 00:00:00', 30),
(46, 4, 1, 1, '2021-09-06 00:00:00', 31),
(47, 5, 1, 1, '2021-09-06 00:00:00', 31),
(48, 6, 1, 1, '2021-09-06 00:00:00', 31),
(49, 2, 30, 1, '2021-09-06 00:00:00', 32),
(50, 3, 35, 1, '2021-09-06 00:00:00', 32),
(51, 1, 40, 1, '2021-09-06 00:00:00', 33),
(52, 2, 30, 1, '2021-09-06 00:00:00', 33),
(53, 4, 30, 1, '2021-09-06 00:00:00', 34),
(54, 4, 30, 1, '2021-09-06 00:00:00', 34),
(55, 2, 30, 1, '2021-09-06 00:00:00', 34),
(56, 3, 35, 1, '2021-09-06 00:00:00', 34),
(57, 1, 40, 1, '2021-09-06 00:00:00', 35),
(58, 2, 30, 1, '2021-09-06 00:00:00', 35),
(59, 1, 40, 1, '2021-09-06 00:00:00', 36),
(60, 2, 30, 1, '2021-09-06 00:00:00', 36),
(61, 1, 40, 1, '2021-09-06 00:00:00', 37),
(62, 2, 30, 1, '2021-09-06 00:00:00', 37),
(63, 1, 40, 1, '2021-09-06 00:00:00', 38),
(64, 2, 30, 1, '2021-09-06 00:00:00', 38),
(65, 1, 40, 1, '2021-09-06 00:00:00', 40),
(66, 2, 30, 1, '2021-09-06 00:00:00', 40),
(67, 2, 30, 1, '2021-09-06 00:00:00', 40),
(68, 2, 30, 1, '2021-09-06 00:00:00', 40),
(69, 1, 40, 1, '2021-09-06 00:00:00', 41),
(70, 2, 30, 1, '2021-09-06 00:00:00', 41),
(71, 1, 40, 1, '2021-09-06 00:00:00', 42),
(72, 5, 30, 1, '2021-09-06 00:00:00', 42),
(73, 6, 60, 1, '2021-09-06 00:00:00', 42),
(74, 1, 40, 1, '2021-09-06 00:00:00', 45),
(75, 2, 30, 1, '2021-09-06 00:00:00', 45),
(76, 1, 2, 1, '2021-09-06 00:00:00', 46),
(77, 2, 2, 1, '2021-09-06 00:00:00', 46);

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `name`, `email`, `password`, `phone_number`) VALUES
(1, 'MyLaptopStore', 'laptops@gmail.com', '5eec0dc419aa8337bf725f026fda9c78c1cb1c642eeaff9d6e1112f37783e942', '123456'),
(2, 'MyPhone', 'MyPhone@gmail.com', '45569da57f4b7bf472d7a864ef4781451cae6383fee9fb0ae40c59aa1ce475b7', '123445');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `gender` tinyint(4) DEFAULT NULL,
  `password` text NOT NULL,
  `phone_number` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `gender`, `password`, `phone_number`) VALUES
(1, 'zeinab', 'ba', 'zeinab@gmail.com', 0, '4309f1932657317712759d0660f52fb344c841cda5c3fa0eece642b677be083e', '70709263'),
(2, 'ali', 'ha', 'ali@gmail.com', 0, '94419b99b12c11133a4dfeccc3e17885974beb48f7827c48239aabfbcad238d8', '1233455'),
(3, 'Malak', 'ba', 'malak@gmail.com', 0, 'b3955cf63acbbc2f235241cd261b9759ae4698936987d07e25bc6127b2a1863d', '456799');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_details`
--
ALTER TABLE `sale_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `sale_details`
--
ALTER TABLE `sale_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
