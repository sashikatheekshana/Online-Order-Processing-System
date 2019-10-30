-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2018 at 06:42 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biscuitslanka`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `vendorID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `productName` int(100) NOT NULL,
  `unitPrice` int(11) NOT NULL,
  `units` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `customerID`, `vendorID`, `productID`, `productName`, `unitPrice`, `units`, `total`) VALUES
(1, 0, 52, 2, 0, 35, 12, 420),
(2, 0, 51, 1, 0, 55, 1, 55),
(3, 4, 3, 3, 0, 30, 3, 90);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `vendorID` int(11) NOT NULL,
  `name` text NOT NULL,
  `weight` varchar(30) NOT NULL,
  `imageName` text NOT NULL,
  `price` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `vendorID`, `name`, `weight`, `imageName`, `price`) VALUES
(1, 2, 'Real Choclate', '80g', '1.png', 'Rs.55'),
(2, 3, 'Chocolate Marie', '50g', '2.png', 'Rs.35'),
(3, 3, 'Tikiri Marie', '80g', '3.png', 'Rs.30'),
(4, 3, 'Lemon Puff', '100g', '4.png', 'Rs.85'),
(5, 2, 'Light Marie', '80g', '5.png', 'Rs.35'),
(6, 3, 'Milk biscuits', '100g', '6.png', 'Rs.70');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `contact` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `name`, `email`, `password`, `usertype`, `contact`) VALUES
(1, 'ucsc', 'ucsc', 'c0d0cb34565fe05ca2a14e8b13285bf6dbdf6dfc', 'a', 717755666),
(2, 'maliban', 'maliban@maliban.com', '4f5c6d514a90be8432f849b47f594ac038efa62d', 'v', 771231234),
(3, 'munchee', 'munchee@munchee.com', 'bd9d181034818dd69ec1d3ca621aeb4169856032', 'v', 771234567),
(4, 'customer', 'customer@abc.com', 'b39f008e318efd2bb988d724a161b61c6909677f', 'c', 712345678),
(5, 'dumi', 'duminduchamal@gmail.com', '03b5e9730eab0e69c1f891ae824b83894ec5ffee', 'v', 717680450);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
