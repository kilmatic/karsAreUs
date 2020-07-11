-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2020 at 06:53 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vrrrparr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` varchar(50) NOT NULL,
  `admin_firstName` varchar(100) NOT NULL,
  `admin_lastName` varchar(100) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `remember_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `ref` varchar(50) NOT NULL,
  `make` varchar(50) NOT NULL,
  `model` varchar(255) NOT NULL,
  `man_year` datetime DEFAULT NULL,
  `mileage` int(11) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `colour` varchar(255) DEFAULT NULL,
  `transmission` varchar(255) DEFAULT NULL,
  `image_thumb` varchar(50) NOT NULL,
  `car_details` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`ref`, `make`, `model`, `man_year`, `mileage`, `location`, `price`, `colour`, `transmission`, `image_thumb`, `car_details`) VALUES
('AU101', 'Audi', 'TT', '0000-00-00 00:00:00', 5000, 'Cape town', 1559000, 'White', 'Automatic', 'TT', NULL),
('AU102', 'Audi', 'RS7', '0000-00-00 00:00:00', 800, 'Cape town', 1200000, 'White', 'Automatic', 'RS7', NULL),
('AU103', 'Audi', 'Q5', '0000-00-00 00:00:00', 19200, 'Gauteng', 180000, 'White', 'Automatic', 'Q5', NULL),
('BMW101', 'BMW', 'X7', '0000-00-00 00:00:00', 100, 'Gauteng', 2250000, 'Charcoal', 'Automatic', 'X7', NULL),
('BMW102', 'BMW', '8', '0000-00-00 00:00:00', 0, 'Cape Town', 4600000, 'Green', 'Automatic', '8', NULL),
('BMW103', 'BMW', '7', '0000-00-00 00:00:00', 100, 'Gauteng', 1500000, 'Silver', 'Automatic', '7', NULL),
('MAZ101', 'Mazda', '6', '0000-00-00 00:00:00', 15000, 'Durban', 450000, 'Charcoal', 'Manual', '6', NULL),
('MAZ102', 'Mazda', 'CX-3', '0000-00-00 00:00:00', 28000, 'Port Elizabeth', 320000, 'Maroon', 'Manual', 'CX-3', NULL),
('MAZ103', 'Mazda', 'CX-5', '0000-00-00 00:00:00', 8900, 'Durban', 400000, 'White', 'Manual', 'CX-5', NULL),
('MERC101', 'BENZ', 'AMG-GT', '0000-00-00 00:00:00', 18000, 'Durban', 1450000, 'Dark Grey', 'Automatic', 'AMG-GT', NULL),
('MERC102', 'BENZ', 'CLS', '0000-00-00 00:00:00', 9500, 'Gauteng', 980000, 'Silver', 'Automatic', 'CLS', NULL),
('MERC103', 'BENZ', 'GLC', '0000-00-00 00:00:00', 8000, 'Cape Town', 1380000, 'White', 'Automatic', 'GLC', NULL),
('TOY101', 'Toyota', 'Aygo', '0000-00-00 00:00:00', 10000, 'Bloemfontein', 140000, 'Silver', 'Manual', 'Aygo', NULL),
('TOY102', 'Toyota', 'C-HR', '0000-00-00 00:00:00', 3500, 'Grahamstown', 320000, 'Silver', 'Manual', 'C-HR', NULL),
('TOY103', 'Toyota', 'Corrolla', '0000-00-00 00:00:00', 100, 'Bloemfontein', 365000, 'White', 'Manual', 'Corrolla', NULL),
('VW101', 'VW', 'Polo', '0000-00-00 00:00:00', 0, 'Uitenhage', 318600, 'Orange', 'Manual', 'polo', NULL),
('VW102', 'VW', 'Arteon', '0000-00-00 00:00:00', 0, 'Port Elizabeth', 530000, 'Gold', 'Automatic', 'arteon', NULL),
('VW103', 'VW', 'Tiguan', '0000-00-00 00:00:00', 50, 'Port Elizabeth', 480500, 'Brown', 'Automatic', 'tiguan', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(50) NOT NULL,
  `user_firstName` varchar(100) NOT NULL,
  `user_lastName` varchar(100) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `remember_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD UNIQUE KEY `admin_id` (`admin_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD UNIQUE KEY `ref` (`ref`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `user_id` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
