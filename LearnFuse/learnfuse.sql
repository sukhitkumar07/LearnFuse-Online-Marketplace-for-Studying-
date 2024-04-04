-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220609.11e34a6fec
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 07:01 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learnfuse`
--

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`full_name`, `username`, `email`, `password`) VALUES
('Niraj Kumar', 'Niraj@45', 'niraj@gmail.com', '$2y$10$EFlc4rT5EKW.u4wlUtj5Y.EeXJjP8Nv2vN/UVr/M4U60GSIw0T7hu'),
('raja', 'raj', 'raj@gmail.com', '$2y$10$Pu3ygF3sPbLQugSFGY41DehHZadccmaU4ibfeIkx8H4JxxjYhz1Za'),
('Raja Kumar', 'Raja123', 'rajakumar@gmail.com', '$2y$10$ZU/7ir/sTzGhKspz1jkz..8gvx/4zQt/2U7x2JwnRF3nzG4eNONU6'),
('Rishikesh Kumar', 'rishikarn123@', 'rishikarn123@gmail.com', '$2y$10$.LCULyRSCJJkZjnBLJP6seYbbdgDCU6/Q2B2HXeU5OoOsJrArgX8G'),
('Roushan Raj', 'roushan@1819', 'roushan@gmail.com', '$2y$10$0X/l5Q.EyTep6UqNTaaDAuqKnVHnwcwUEThm7p51hsk1KT075nNTK'),
('Sukhit Kumar', 'Sukhit@07', 'sukhit@gmail.com', '$2y$10$O5ys/xqWkuD0lUlOZkoi2OFDvfcqBuasFQGKGqwdg9sg95XtSFaci');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `fldName` varchar(50) NOT NULL,
  `fldEmail` varchar(150) NOT NULL,
  `fldPhone` varchar(15) NOT NULL,
  `fldMessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES
(0, 'Roushan Raj', 'roushan@gmail.com', '7894561230', 'I want to learn JavaScript please can you provide me.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



