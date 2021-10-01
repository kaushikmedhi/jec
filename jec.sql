-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 01, 2021 at 06:55 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jec`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `yop` year(4) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `hostel` enum('yes','no') NOT NULL,
  `hostel_no` int(10) DEFAULT NULL,
  `contribution` int(255) NOT NULL,
  `add_contribution` int(255) DEFAULT NULL,
  `total` int(255) NOT NULL,
  `reg_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `phone`, `name`, `address`, `occupation`, `yop`, `branch`, `hostel`, `hostel_no`, `contribution`, `add_contribution`, `total`, `reg_date`) VALUES
(1, '9909876765', 'Kaushik', 'Guwahati', 'Student', 2012, 'MCA', 'yes', 2, 5000, 5000, 0, '2021-10-01'),
(2, '9909876700', 'Kaushik', 'a', 'aa', 0000, 'aa', 'yes', 4, 5000, 500, 0, NULL),
(3, '1234567890', 'jugantar', 'Guwahati', 'Student', 2012, 'CIVIL', 'yes', 4, 5000, 1100, 0, NULL),
(8, '9090909090', 'Test', 'jorhat', 'aa', 2012, 'CIVIL', 'yes', 1, 5000, 500, 5500, '2021-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `hostel` varchar(10) NOT NULL,
  `hostelno` int(10) NOT NULL,
  `degree` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `name`, `phone`, `branch`, `hostel`, `hostelno`, `degree`) VALUES
(1, 'Anku', '9776543211', 'MCA', 'yes', 5, ''),
(2, 'qweqeweqwe', '9999955555', 'MCA', 'yes', 12, ''),
(3, 'QWEqweqweqweqeq', '65435421', 'ELECTRICAL', 'yes', 12, 'UG'),
(9, 'Test', '9090909090', 'COMPUTER SCIENCE', 'no', 0, 'UG'),
(10, 'Test', '9090909090', 'COMPUTER SCIENCE', 'no', 0, 'UG'),
(11, 'Test', '9090909090', 'COMPUTER SCIENCE', 'no', 0, 'UG'),
(12, 'Test', '9090909090', 'ELECTRICAL', 'no', 0, 'PG'),
(13, 'Test', '9090909090', 'ELECTRICAL', 'no', 0, 'PG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
