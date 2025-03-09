-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2025 at 05:25 AM
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
  `location` varchar(255) NOT NULL,
  `guests` int(255) NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL,
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`book_id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`, `id`, `customer_id`) VALUES
(18, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'Ilam', 4, '2025-02-26', '2025-02-28', 0, 0),
(19, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'Chitawan National Park', 3, '2025-03-01', '2025-03-07', 0, 0),
(20, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'Chitawan National Park', 6, '2025-02-28', '2025-02-27', 0, 0),
(21, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'Chitawan National Park', 6, '2025-02-28', '2025-02-27', 0, 0),
(22, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'Ilam', 45, '2025-02-28', '2025-03-05', 0, 0),
(23, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'Ilam', 45, '2025-02-28', '2025-03-05', 0, 0),
(24, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'Ilam', 45, '2025-02-28', '2025-03-05', 0, 0),
(25, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'Ilam', 5, '2025-02-27', '2025-03-07', 0, 0),
(26, 'Balaram Kafle', 'b@gmail.com', '9843238782', 'Lokhanthali', 'Ilam', 6, '2025-02-27', '2025-03-08', 0, 0),
(27, 'Balaram Kafle', 'b@gmail.com', '9843238782', 'Lokhanthali', 'Ilam', 6, '2025-02-27', '2025-03-08', 0, 0),
(28, 'Balaram Kafle', 'b@gmail.com', '9843238782', 'Lokhanthali', 'Ilam', 5, '2025-02-27', '2025-03-08', 0, 0),
(29, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'Ilam', 9, '2025-02-27', '2025-03-01', 0, 0),
(30, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'Ilam', 9, '2025-02-27', '2025-03-01', 0, 0),
(31, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'sindhuli', 33, '2025-02-28', '2025-03-05', 0, 0),
(32, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'sindhuli', 33, '2025-02-28', '2025-03-05', 0, 0),
(33, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'sindhuli', 33, '2025-02-28', '2025-03-05', 0, 0),
(34, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'sindhuli', 33, '2025-02-28', '2025-03-05', 0, 0),
(35, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'sindhuli', 33, '2025-02-28', '2025-03-05', 0, 0),
(36, 'Balaram Kafle', 'b@gmail.com', '9843238782', 'Lokhanthali', 'lalitpur', 5, '2025-02-27', '2025-03-04', 0, 0),
(37, 'Balaram Kafle', 'b@gmail.com', '9843238782', 'Lokhanthali', 'lalitpur', 5, '2025-02-27', '2025-03-04', 0, 0),
(38, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'Ilam', 1, '2025-02-27', '2025-02-28', 0, 0),
(39, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'Ilam', 1, '2025-02-27', '2025-02-28', 0, 0),
(40, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'Ilam', 1, '2025-02-27', '2025-02-28', 0, 0),
(41, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'Ilam', 1, '2025-02-27', '2025-02-28', 0, 0),
(42, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'Ilam', 1, '2025-02-27', '2025-02-28', 0, 0),
(43, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'Chitawan National Park', 6, '2025-02-27', '2025-03-08', 0, 0),
(44, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'Chitawan National Park', 7, '2025-02-28', '2025-03-01', 0, 0),
(45, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'Ilam', 5, '2025-03-06', '2025-03-08', 0, 0),
(46, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'lalitpur', 6, '2025-02-28', '2025-03-07', 0, 0),
(47, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'lalitpur', 6, '2025-02-28', '2025-03-07', 0, 0),
(48, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'lalitpur', 4, '2025-03-01', '2025-03-05', 0, 0),
(49, 'hare ram', 'b@gmail.com', '9843238782', 'Lokhanthali', 'kalinchowk', 4, '2025-03-01', '2025-03-05', 0, 0),
(50, 'jai jai', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'Chitawan National Park', 2, '2025-03-06', '2025-03-15', 0, 0),
(51, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'Chitawan National Park', 5, '2025-03-07', '2025-03-15', 0, 0),
(52, 'shambuuu', 'jackymessi7@gmail.com', '9843238782', 'Lokhanthali', 'lalitpur', 10, '2025-03-07', '2025-03-20', 0, 0);

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
(3, 'Admin', 'Baneshwor', 'kafle@gmail.com', '9843238782', 'admin@gmail.com', 'Password123', 1),
(19, 'ram ram', 'Lokhanthali', 'jackymessi7@gmail.com', '9843238782', 'ram ram', 'ram123', 0),
(20, 'hari ram', 'Lokhanthali', 'jackymessi7@gmail.com', '9843238782', 'hari', 'hari123', 0),
(21, 'sita ram', 'Lokhanthali', 'jackymessi7@gmail.com', '9843238782', 'sita', 'sita123', 0),
(22, 'radhae radhe', 'Lokhanthali', 'jackymessi7@gmail.com', '9843238782', 'radhe', 'radhe123', 0),
(23, 'krishna krishna', 'Lokhanthali', 'jackymessi7@gmail.com', '9843238782', 'krishna', 'krishna123', 0);

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
(20, 'national-parks-banner.jpg', 'Rara', '7Days/6Night', 18000),
(40, 'chitlang-photo.jpg', 'lalitpur', '3Days', 2500),
(42, 'download.jpeg', 'sindhuli', '7Days/6Night', 2500),
(44, 'Swayambhu.jpg', 'Swayambhu', '1Day', 1000),
(45, 'Pashupatinath_Temple.jpg', 'Pashupati Temple', '1Day', 500),
(46, 'pokhara.jpeg', 'Pokhara', '4Days/5Night', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `guests` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `email`, `phone`, `location`, `guests`, `amount`, `payment_method`, `payment_date`) VALUES
(1, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Ilam', 1, 12000.00, 'Cash on Arrival', '2025-02-27 04:25:12'),
(2, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Ilam', 1, 12000.00, 'Cash on Arrival', '2025-02-27 04:28:56'),
(3, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Chitawan National Park', 6, 7000.00, 'Cash on Arrival', '2025-02-27 04:32:19'),
(4, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Chitawan National Park', 7, 7000.00, 'Cash on Arrival', '2025-02-27 04:33:03'),
(5, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Ilam', 5, 12000.00, 'Cash on Arrival', '2025-02-27 04:33:52'),
(6, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'lalitpur', 6, 15000.00, 'Cash on Arrival', '2025-02-27 04:35:23'),
(7, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'lalitpur', 4, 10000.00, 'Cash on Arrival', '2025-02-28 07:29:34'),
(8, 'hare ram', 'b@gmail.com', '9843238782', 'kalinchowk', 4, 14000.00, 'Cash on Arrival', '2025-02-28 14:33:48'),
(9, 'jai jai', 'jackymessi7@gmail.com', '9843238782', 'Chitawan National Park', 2, 14000.00, 'Cash on Arrival', '2025-03-05 08:21:18'),
(10, 'Balaram Kafle', 'jackymessi7@gmail.com', '9843238782', 'Chitawan National Park', 5, 35000.00, 'Cash on Arrival', '2025-03-05 08:25:28'),
(11, 'shambuuu', 'jackymessi7@gmail.com', '9843238782', 'lalitpur', 10, 25000.00, 'Cash on Arrival', '2025-03-05 09:36:59');

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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
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
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
