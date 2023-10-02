-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2022 at 11:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `applepals`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `price` float DEFAULT NULL,
  `productImg` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `price`, `productImg`) VALUES
(1, 'iPhone 11 Pro Max', 3800, 'product 1.webp'),
(2, 'iPhone 6s Plus', 2600, 'product 2.webp'),
(3, 'iPhone SE (2nd Gen)', 1500, 'product 3.webp'),
(4, 'iPad Air ', 2500, 'product 4.jpeg'),
(5, 'iPad Mini', 800, 'product 5.webp'),
(6, 'Apple Watch SE', 600, 'product 6.webp'),
(7, 'Macbook Pro', 6890, 'product 7.webp'),
(8, 'AirPods', 1000, 'product 8.webp'),
(10, 'AirPods Pro', 950, 'fe product 1.webp'),
(11, 'Apple Watch Series 5', 2870, 'fe product 2.webp'),
(12, 'Macbook Air', 4950, 'fe product 3.webp'),
(20, 'iPad (9th Gen)', 1299, 'fe product 4.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
