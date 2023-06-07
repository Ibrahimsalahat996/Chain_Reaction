-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 08:14 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chain_reaction`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_informations`
--

CREATE TABLE `contact_informations` (
  `id` int(11) NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `second_name` varchar(191) DEFAULT NULL,
  `phone` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_informations`
--

-- INSERT INTO `contact_informations` (`id`, `first_name`, `second_name`, `phone`, `created_at`) VALUES
-- (39, 'ibrahim', 'salahat', '99821293123', '2023-06-07 17:42:44'),
-- (40, 'khaled', NULL, '091893128381', '2023-06-07 17:43:23'),
-- (41, 'asdsadas', NULL, '435345435', '2023-06-07 17:46:44'),
-- (42, 'asdasd', '5464564', '1231231313122', '2023-06-07 17:47:36'),
-- (43, 'asdad', 'sdfsdfsdf', '435345435345', '2023-06-07 17:47:44'),
-- (44, 'a', 'a', '5666666666', '2023-06-07 17:47:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_informations`
--
ALTER TABLE `contact_informations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_informations`
--
ALTER TABLE `contact_informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
