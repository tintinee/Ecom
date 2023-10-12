-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 06:00 PM
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
-- Database: `registerform`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`) VALUES
(13, 'Jordan 2', 10000, 'j2.jpg'),
(14, 'Jordan 3', 20000, 'j3,1.PNG'),
(15, 'asd', 333, 'j1.1.PNG'),
(16, '111', 1, 'j1.2.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `email`, `usertype`) VALUES
(58, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin@gmail.com', 'admin'),
(62, 'juswa_123', '202cb962ac59075b964b07152d234b70', 'juswa@gmail.com', 'user'),
(63, 'chloed_', '202cb962ac59075b964b07152d234b70', 'chloed_@gmail.com', 'user'),
(64, 'kristina_', '202cb962ac59075b964b07152d234b70', 'kristina_@yahoo.com', 'user'),
(65, 'richiee', '202cb962ac59075b964b07152d234b70', 'richie@gmail.com', 'user'),
(66, 'tccutie', '202cb962ac59075b964b07152d234b70', 'tccutie@gmail.com', 'user'),
(67, 'elsalvador', '202cb962ac59075b964b07152d234b70', 'elsalvador@gmail.com', 'user'),
(68, 'alliah_', '202cb962ac59075b964b07152d234b70', 'alliah_@gmail.com', 'user'),
(69, 'chloeperry', '202cb962ac59075b964b07152d234b70', 'chloeperry@gmail.com', 'user'),
(70, 'adiegarcia_', '202cb962ac59075b964b07152d234b70', 'adie@gmail.com', 'user'),
(71, 'ayas1', '202cb962ac59075b964b07152d234b70', 'ayasanchez@gmail.com', 'user'),
(72, 'aahmed', '202cb962ac59075b964b07152d234b70', 'ahmed@gmail.com', 'user'),
(73, 'nikka123', '202cb962ac59075b964b07152d234b70', 'nikka@gmail.com', 'user'),
(74, 'carlo_', '202cb962ac59075b964b07152d234b70', 'carlo@gmail.com', 'user'),
(75, 'tofer123', '202cb962ac59075b964b07152d234b70', 'tofer@gmail.com', 'user'),
(76, 'alfred_', '202cb962ac59075b964b07152d234b70', 'alfred@gmail.com', 'user'),
(77, 'daniel_', '202cb962ac59075b964b07152d234b70', 'daniel@gmail.com', 'user'),
(78, 'pablo', '202cb962ac59075b964b07152d234b70', 'pabs@gmail.com', 'user'),
(79, 'ems_', '202cb962ac59075b964b07152d234b70', 'ems123@gmail.com', 'user'),
(80, 'pd123', '202cb962ac59075b964b07152d234b70', 'pd@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
