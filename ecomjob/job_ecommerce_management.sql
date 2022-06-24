-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2022 at 01:18 PM
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
-- Database: `job_ecommerce_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `type` tinyint(1) NOT NULL COMMENT '0 = "admin"\r\n1 = "general user"\r\n2 = "employer"\r\n3 = "seller"',
  `password` varchar(50) NOT NULL,
  `profile_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `contact`, `email`, `business_name`, `company_name`, `address`, `type`, `password`, `profile_picture`) VALUES
(1, 'administrator', 0, 'admin@gmail.com', '', '', 'Tabaco', 0, 'admin', ''),
(2, 'user', 0, 'user@gmail.com', '', '', 'Tabaco', 1, 'user', ''),
(3, 'employer', 123123, 'employer@gmail.com', '', '', 'Tabaco', 2, 'employer', ''),
(4, 'seller', 123123, 'seller@gmail.com', '', '', 'Tabaco', 3, 'seller', ''),
(5, 'seller1', 321123, 'seller1@gmail.com', '', '', 'legazpi', 3, 'seller1', ''),
(6, 'Seller2', 12432, 'seller2@gmail.com', 'Seller Mart', '', 'Leg', 3, 'seller2', ''),
(7, 'employer1', 35543, 'employer1@gmail.com', '', '', 'Naga', 3, 'employer1', ''),
(8, 'employer2', 3554321, 'employer2@gmail.com', '', 'Employer Company', 'Naga', 3, 'employer2', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
