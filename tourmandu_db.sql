-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2024 at 03:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourmandu_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

CREATE TABLE `book_form` (
  `book_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `guests` int(255) NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL,
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`book_id`, `name`, `email`, `phone`, `address`, `guests`, `arrivals`, `leaving`, `id`, `customer_id`) VALUES
(1, 'Amir Shrestha', 'stharajesh662@gmail.com', '2147483647', 'Ramechhap', 2, '2024-06-24', '2024-06-26', 0, 0),
(2, 'Amir Shrestha', 'stharajesh662@gmail.com', '9849426293', 'Ramechhap', 1, '2024-06-25', '2024-06-27', 0, 0),
(3, 'Dipak Kumar Raut', 'dipakkumarraut1119@gmail.com', '9745576786', 'bhaktpur', 1, '2024-07-12', '2024-07-13', 0, 0),
(4, 'Amir Shrestha', 'stharajesh662@gmail.com', '9849426293', 'Ramechhap', 2, '2024-07-18', '2024-07-20', 0, 0),
(5, 'Nayan dheke', 'nayan12@gmai.com', '9786432116', 'Balkumari', 1, '2024-07-18', '2024-07-22', 0, 0),
(12, 'Amir Shrestha', 'stharajesh662@gmail.com', '9849426293', 'Ramechhap', 3, '2024-07-19', '0000-00-00', 6, 8),
(13, 'Amir Shrestha', 'stharajesh662@gmail.com', '9849426293', 'Ramechhap', 2, '2024-07-19', '0000-00-00', 6, 8),
(14, 'Amir Shrestha', 'stharajesh662@gmail.com', '9849426293', 'Ramechhap', 2, '2024-07-18', '0000-00-00', 6, 8),
(15, 'Amir Shrestha', 'stharajesh662@gmail.com', '9849426293', 'Ramechhap', 2, '2024-07-26', '0000-00-00', 6, 8);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `phoneNumber` varchar(10) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `is_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `Name`, `Address`, `Email`, `phoneNumber`, `userName`, `Password`, `is_admin`) VALUES
(3, 'Admin', 'Baneshwor', 'amir.shrestha@vsic.com.np', '9849426293', 'admin@gmail.com', 'Password123', 1),
(4, 'sudip karki', 'bhaktpur', 'sudip@gmail.com', '994342354', 'karki@gmail.com', 'karki000', 0),
(5, 'Amir Shrestha', 'Ramechhap', 'stharajesh662@gmail.com', '9849426293', 'aasispaudel662', 'dtdtfyug', 0),
(8, 'Nayan Dheke', 'bode, Bhaktpur', 'nayandeke@gmail.com', '9876544326', 'dekenayan662', 'deke123', 0),
(9, 'Amir Shrestha', 'Ramechhap', '662@gmail.com', '9849426293', 'nayandekh', 'frgrg', 0),
(10, 'Amir Shrestha', 'Ramechhap', 'stharajesh662@gmail.com', '9849426293', 'dekenayan662', 'dsdghgh', 0),
(11, 'Sabin Shrestha', 'Kathmandu', '1111@gmail.com', '9863545635', 'sabinshrestha882', '', 0),
(12, 'Amir Shrestha', 'Ramechhap', 'stharajesh662@gmail.com', '9849426276', 'nabaraj876', '', 0),
(14, 'rakesh Shrestha', 'Teku-7', 'rakesh@gmail.com', '9876665544', 'rakesh111', 'R@kesh12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `price` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `image`, `location`, `duration`, `price`) VALUES
(2, 'ilam.jpg', 'Ilam', '6Days/5Night', 12000),
(6, 'sddefault.jpg', 'Chitawan National Park', '3Days/2Night', 7000),
(18, 'kalinchowk.jpg', 'kalinchowk', '2Days/1Night', 3500),
(19, 'download.jpeg', 'Phewa Lake', '4day/3Night', 8000),
(20, 'national-parks-banner.jpg', 'Rara', '7Days/6Night', 18000),
(39, 'uploads/BRP_Lumbini_Mayadevi_temple.jpg', 'illam', '7Days/6Night', 12000),
(40, 'chitlang-photo.jpg', 'lalitpur', '3Days', 2500),
(41, 'pathivara-tour-package-945x474.jpg', 'phewa lakhe', '2Days/1Night', 1223214),
(42, 'download.jpeg', 'sindhuli', '7Days/6Night', 2500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_form`
--
ALTER TABLE `book_form`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `fk_package` (`id`),
  ADD KEY `fk_customers` (`customer_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_form`
--
ALTER TABLE `book_form`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_form`
--
ALTER TABLE `book_form`
  ADD CONSTRAINT `fk_customers` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`),
  ADD CONSTRAINT `fk_package` FOREIGN KEY (`id`) REFERENCES `package` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
