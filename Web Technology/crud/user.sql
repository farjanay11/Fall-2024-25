-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2025 at 07:54 AM
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
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(244) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `password`, `email`, `age`) VALUES
('asdfasdfasdf', '223234', 'asdfwgsadf', 2323),
('David', 'securepass', 'david@example.com', 35),
('Farjana Opi', '100', 'opi@gmail.com', 24),
('Frank', 'abc123', 'frank@example.com', 40),
('Grace', 'grace2023', 'grace@example.com', 33),
('Jack', 'secure123', 'jack@example.com', 31),
('Kate', 'katepass', 'kate@example.com', 26),
('Liam', 'liam2023', 'liam@example.com', 34),
('Mia', 'miapass', 'mia@example.com', 23),
('Noah', 'noahpass', 'noah@example.com', 21),
('Olivia', 'olivia2024', 'olivia@example.com', 32),
('Paul', 'paulpass', 'paul@example.com', 36),
('Quinn', 'quinn123', 'quinn@example.com', 28),
('Rose', 'rose2022', 'rose@example.com', 29),
('Sam', 'sampass', 'sam@example.com', 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
