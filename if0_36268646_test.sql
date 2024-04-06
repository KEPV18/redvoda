-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql303.infinityfree.com
-- Generation Time: 06 أبريل 2024 الساعة 04:23
-- إصدار الخادم: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_36268646_test`
--

-- --------------------------------------------------------

--
-- بنية الجدول `Customer`
--

CREATE TABLE `Customer` (
  `Customer_ID` int(11) NOT NULL,
  `Phone_Number` varchar(13) NOT NULL,
  `Subscription_Value` decimal(4,0) NOT NULL,
  `Order_Status` varchar(50) NOT NULL,
  `Next_Payment_Date` date NOT NULL,
  `Payment_Required` tinyint(1) DEFAULT NULL,
  `Additional_Info` text DEFAULT NULL,
  `Created_At` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `Customer`
--

INSERT INTO `Customer` (`Customer_ID`, `Phone_Number`, `Subscription_Value`, `Order_Status`, `Next_Payment_Date`, `Payment_Required`, `Additional_Info`, `Created_At`) VALUES
(3, '01097769413', '160', 'active', '2024-04-11', 1, '', '2024-04-06 03:19:37'),
(4, '01067777864', '160', 'active', '2024-04-11', 1, '', '2024-04-06 03:19:37'),
(5, '01004339081', '160', 'active', '2024-04-11', 1, '', '2024-04-06 03:19:37'),
(6, '01009660208', '250', 'active', '2024-04-11', 1, '', '2024-04-06 03:19:37'),
(7, '01020103475', '160', 'active', '2024-04-11', 1, '', '2024-04-06 03:19:37'),
(8, '01019746825', '160', 'active', '2024-04-11', 1, '', '2024-04-06 03:19:37'),
(9, '01013141817', '160', 'active', '2024-04-11', 1, '', '2024-04-06 03:19:37'),
(10, '01090924799', '160', 'active', '2024-04-25', 1, '', '2024-04-06 03:19:37'),
(11, '01091061635', '160', 'active', '2024-04-11', 1, '', '2024-04-06 03:19:37'),
(12, '01013097282', '160', 'active', '2024-04-11', 1, '', '2024-04-06 03:19:37'),
(13, '01093677745', '160', 'Inactive', '2024-04-11', 1, 'have a problem', '2024-04-06 03:19:37'),
(14, '01007677648', '160', 'Inactive', '2024-04-11', 1, 'have a problem', '2024-04-06 03:19:37'),
(15, '01004088460', '160', 'Inactive', '2024-04-25', 1, 'have a problem', '2024-04-06 03:19:37'),
(16, '01206294697', '220', 'active', '2024-04-11', 1, '', '2024-04-06 03:19:37'),
(17, '01064444637', '150', 'active', '2024-04-11', 1, '', '2024-04-06 03:19:37');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(25) NOT NULL,
  `encrypted_password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `phone`, `password`, `encrypted_password`) VALUES
(55, '01033041060', 'rody1400', '$2y$10$QiF6SIcsd.5VWmaXi8L7Suc7j88b/wbqvUUZompTQpbJCjai16FqW'),
(54, '01064444637', '01064444637', '$2y$10$lboyIOXYOm2njqCOXHPkXO3TfaoSA/a/s1OGs8LzmaC5t0Ei6HjMK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
