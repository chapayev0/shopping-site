-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 08:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `item_name` text NOT NULL,
  `item_image` text NOT NULL,
  `discription` text NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_name`, `item_image`, `discription`, `price`) VALUES
(1, 'Dell Inspiron 3520 ? i5', 'https://www.laptop.lk/wp-content/uploads/2023/01/Dell-Inspiron-3520.jpg', '? Intel Core i5 ? 1235U Processor\r\n? 8GB DDR4 RAM\r\n? 512GB M.2 SSD\r\n? 15.6&#8243;, FHD, 120Hz Refresh Rate Display\r\n? Intel Iris XE Graphics\r\n? Platinum Silver\r\n? Windows 11 Home\r\n? Office Home and Student 2021', '299,000.00'),
(2, 'Lenovo IdeaPad Gaming 3 ? 15ACH6 (R5)', 'https://www.laptop.lk/wp-content/uploads/2022/11/4444444.jpg', '?  AMD Ryzen 5 ? 5600H Processor\r\n?  1TB HDD + 256GB SSD\r\n?  8GB DDR4-3200 RAM\r\n?  4GB NVIDIA GeForce GTX 1650 Graphics\r\n?  15.6&#8243;, FHD, IPS, 120Hz Refresh Rate Display\r\n?  Windows 11 Home\r\n?  Shadow Grey Color\r\n\r\n*Free Idaepad Gaming Back Pack\r\n*Free M100 Gaming Mouse', '348,000.00'),
(3, 'Dell Inspiron 3511 (i7)', 'https://www.laptop.lk/wp-content/uploads/2022/05/Dell-Inspiron-3511-1.jpg', '*Special Price*</br>\r\nRs367,000/-\r\n</br>\r\n? Intel Core i7 11th Gen Processor</br>\r\n? 512GB NVMe SSD</br>\r\n? 8GB DDR4 RAM</br>\r\n? 2GB MX350 Geforce Nvidia Graphics</br>\r\n? 15.6&#8243; FHD Display</br>\r\n? Windows 11 Home</br>\r\n? Silver Color</br>\r\n? Office Home & Student 2019</br>', '367,000.00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_name` text NOT NULL,
  `user_mail` text NOT NULL,
  `user_phone` text NOT NULL,
  `user_pass` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_name`, `user_mail`, `user_phone`, `user_pass`, `user_id`, `user_type`) VALUES
('shashika', 'sdilhara544@gmail.com', '0784580996', 'shashika', 1, 'Seller Account');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
