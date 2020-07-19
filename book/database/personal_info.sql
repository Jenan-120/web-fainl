-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 يوليو 2020 الساعة 22:56
-- إصدار الخادم: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- بنية الجدول `personal_info`
--

CREATE TABLE `personal_info` (
  `user_id` int(12) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(8) NOT NULL,
  `password` varchar(32) NOT NULL,
  `gold_member` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `personal_info`
--

INSERT INTO `personal_info` (`user_id`, `user_name`, `first_name`, `last_name`, `email`, `phone`, `password`, `gold_member`) VALUES
(1, 'alhendi_9', 'جنان', 'الهندي', 'noonaalhindi97@gmail.com', 2147483647, '25d55ad283aa400af464c76d713c07ad', 0),
(2, 'جنان', 'جنان', 'الهندي', 'noon976@gmail.com', 74589632, '25d55ad283aa400af464c76d713c07ad', 0),
(11, 'حسن', 'حسن', 'الشراح', 'hson@gmail.com', 54698213, '25d55ad283aa400af464c76d713c07ad', 0),
(12, 'ymuoomey', 'jenan', 'الهندي', 'noon997@gmail.com', 84562189, '3354045a397621cd92406f1f98cde292', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
