-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2021 at 04:20 PM
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
-- Database: `signindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `gender` enum('Male','Female') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`) VALUES
(1, 'zeinab', 'zeinabbaalbaky@gmail.com', '8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414', 'Female'),
(2, 'ali', 'ali@gmail.com', 'fc1f09ab08ebdd072ea6da53a5691abcc18c9163b1be1f0921a5adb50e3f5077', 'Male'),
(3, 'DS', 'ds@gmail.com', '39ec8e2100c7d6d5b05b429fce0920aa10fbe2141b85bd78457352ffd0009ea8', 'Male'),
(4, 'malak', 'malak@gmail.com', '4309f1932657317712759d0660f52fb344c841cda5c3fa0eece642b677be083e', 'Female'),
(5, 'malak', 'malak@gmail.com', 'b3955cf63acbbc2f235241cd261b9759ae4698936987d07e25bc6127b2a1863d', 'Female'),
(6, 'malak', 'malak@gmail.com', 'b3955cf63acbbc2f235241cd261b9759ae4698936987d07e25bc6127b2a1863d', 'Female'),
(7, 'zeinab', 'zeinab@gmail.com', '4309f1932657317712759d0660f52fb344c841cda5c3fa0eece642b677be083e', 'Female'),
(8, 'mhmd', 'mhmd@gmail.com', 'bf1c245b335cbcaba6386f2bffbe06d7ebc2c11ec5e6a8a08bd199e0c1254f0a', 'Male'),
(9, 'ray', 'ray@gmail.com', 'c04bc270f965db4d7ab365b3b865b743e35e13e295c7b15fb795e2a01d24a639', 'Male'),
(10, 'hadi', 'hadi@gmail.com', '7e7b5941351bfe1e23e37ffb0665a1041a682ecd2c8189054ccc94b16d3a21cd', 'Male'),
(11, 'lilian', 'lilian@gmail.com', '6bc6a8553bbe7c8d3f48eddeffc6c128f2e57b1404bc68371d2622ac003035b1', 'Female'),
(12, 'lyn', 'lyn@gmail.com', 'b9b03c81e0ddb84388d9d02d5c7ba483383f9c4f58d0ab84f9a286b484df2f4e', 'Female'),
(13, 'test', 'test@gmail.com', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 'Male'),
(14, 'joe', 'joe@gmail.com', '78675cc176081372c43abab3ea9fb70c74381eb02dc6e93fb6d44d161da6eeb3', 'Male'),
(15, 'sam', 'sam@gmail.com', 'e96e02d8e47f2a7c03be5117b3ed175c52aa30fb22028cf9c96f261563577605', 'Male'),
(16, 'fatima ', 'fatima@gmail.com', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'Female'),
(17, 'farah', 'farah@gmail.com', '7f1282974437f511dacee4013a0814bf7cbab38dd07040a4b4a82cebd50d134e', 'Female'),
(18, 'Adam', 'adam@gmail.com', 'f7f376a1fcd0d0e11a10ed1b6577c99784d3a6bbe669b1d13fae43eb64634f6e', 'Male'),
(19, 'hala', 'hala@gmail.com', '05cb18b8f9090923f952da3cbb8b51cab87044abb8f5b854270ff8efd24d1fff', 'Female'),
(20, 'yara', 'yara@gmail.com', 'a38933a27dad50fd2ed7cf588ca553d2b4d1fc704e103dc99b22cb13a32bba56', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
