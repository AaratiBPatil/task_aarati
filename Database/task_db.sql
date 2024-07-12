-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2024 at 12:26 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `username`, `address`, `city`, `image`, `message`) VALUES
(6, 'Aarati', 'Chuye', 'kolhapur', '1174108433_apple_3.jpg', 'apple'),
(7, 'Anurag', 'Islampur', 'sangli', '232594780_banana_4.jpeg', 'banana'),
(9, 'Sakshi', 'Karad', 'satara', '1229743854_mountains-55067_640.webp', 'mountains'),
(12, 'Dhruv', 'Vita', 'sangli', '', 'wepoiqrdsjklziurqwemnsd ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_myaccount`
--

CREATE TABLE `tbl_myaccount` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_myaccount`
--

INSERT INTO `tbl_myaccount` (`id`, `name`, `picture`) VALUES
(14, 'nature', '262715498_photo-1494500764479-0c8f2919a3d8.avif'),
(15, 'flowers', '1601439107_pngtree-cosmos-landscape-flowers-wallpaper-pictures-download-picture-image_2663944.jpg'),
(16, 'mountain', '537703865_images122.jpeg'),
(19, 'Greenery', '305923567_images122.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `username`, `password`, `role`) VALUES
(15, 'Aarati', '7c220012ca37f551ed87187bcda006e1', 'user'),
(17, 'Pramod', 'bb16fa6160fa1d8a73eba6217844a08b', 'user'),
(21, 'dyp', '260bd0a2e95b19f4235ad84ed060d9d0', 'admin'),
(22, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(23, 'Divya', '25f9e794323b453885f5181f1b624d0b', 'user'),
(24, 'Sakshi', 'e807f1fcf82d132f9bb018ca6738a19f', 'user'),
(25, 'New', '25d55ad283aa400af464c76d713c07ad', 'user'),
(26, 'User', '645f94dcfe65935ca4b24d3a465ece0a', 'user'),
(27, 'Vipul', '41caabcb81056b43a2536d030ca51a00', 'user'),
(28, 'Dhruv', '25f9e794323b453885f5181f1b624d0b', 'user'),
(29, 'Vishal', '25d55ad283aa400af464c76d713c07ad', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_myaccount`
--
ALTER TABLE `tbl_myaccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_myaccount`
--
ALTER TABLE `tbl_myaccount`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
