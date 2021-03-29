-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 10:12 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base`
--

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `summery` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active' COMMENT 'Active or Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `icon`, `summery`, `status`) VALUES
(1, 'Creative Design', 'fab fa-react', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 'active'),
(2, 'Unlimited Features', 'fab fa-free-code-camp', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT 'default.png',
  `copyright` varchar(255) DEFAULT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `office_address` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(13) DEFAULT NULL,
  `about` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT 'active' COMMENT 'Active = 1 Inactive = 2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `name`, `icon`, `link`, `status`) VALUES
(1, 'Facebook', 'fab fa-facebook-f', 'https://fb.com/tarequlislamtuhin', 'active'),
(2, 'Twitter', 'fab fa-twitter', 'https://twitter.com/tituhin_', 'active'),
(3, 'GitHub', 'fab fa-github', 'https://github.com/tariqulislamtuhin', 'active'),
(4, 'Instagram', 'fab fa-instagram', 'https://instagram.com/tituhin/', 'active'),
(5, 'GitHub', 'fab fa-github', 'https://github.com/tituhin', 'active'),
(12, 'Linkedin', 'fab fa-linkedin', 'https://www.linkedin.com/in/tariqulisamtuhin/', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '1 = Active, 2 = Inactive',
  `role` int(1) NOT NULL DEFAULT 1 COMMENT '1 = User, 2 = Admin, 3= Employee',
  `profileImage` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `role`, `profileImage`) VALUES
(1, 'Tuhin Islam', 'tarequlislam105150@gmail.com', '$2y$10$ntGSyhbojqkiPvqsrVipDuKOnfglVl8Pw2y24kXZpeNnPgIT7CpJi', 1, 1, '1.jpg'),
(2, 'Tuhin', 'tituhin1@gmail.com', '$2y$10$RFQZ0AAIzkGR.RP.9mJeo.cyljOjQIwZcaQ7qPj.wYKkH3ls38NMO', 1, 1, '2.jpg'),
(3, 'Tuhin', 'tarequlislam103286@gmail.com', '$2y$10$wIVGldTTs/Yps53.Qzave.Z8nAp8rhMk5Lww7qkfVUmJIl7Co6NgS', 1, 2, '3.jpg'),
(35, 'Tariqul Islam', 'tarequlislam5150@gmail.com', '$2y$10$M.RZlTwFNVc9zOt7FzmffuVLYUMGd7wSr/vyMLMc6a6IhYbmdCRL6', 1, 3, '35.jpg'),
(36, 'Tariqul Islam', 'tarequlislam1050@gmail.com', '$2y$10$.kM5YQ/uxlzrgYnleorwMeGGXKPpfEX7ThCbsam4AZFv2LI0teDKK', 1, 1, '36.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `link` (`link`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
