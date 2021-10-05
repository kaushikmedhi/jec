-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 05, 2021 at 07:59 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `yop` varchar(100) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `chapter` varchar(255) NOT NULL,
  `contribution` int(255) NOT NULL,
  `add_contribution` int(255) DEFAULT NULL,
  `total` int(255) NOT NULL,
  `reg_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `email`, `phone`, `name`, `address`, `yop`, `branch`, `chapter`, `contribution`, `add_contribution`, `total`, `reg_date`) VALUES
(21, 'test@email.com', '9909878765', 'Test Person', 'Somewhere in USA', '2011', 'CIVIL', 'USA', 75000, 0, 75000, '2021-10-05'),
(23, 'test2@a.a', '', 'kaushik', '', '', '', 'Bengaluru', 7000, 2000, 9000, '2021-10-05'),
(24, 'a@b.c', '', 'Rajkumar Da', '', '', '', 'USA', 10000, 0, 10000, '2021-10-05'),
(25, 'some.test.user.12345@gmail.com', '7876765678', 'Someone With A Very Long Name OK Thank You', 'Somewhere on Earth, a very long address, this is a test, do not take this seriously', '', '', 'Jorhat', 7000, 0, 7000, '2021-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `prev_alumni`
--

CREATE TABLE `prev_alumni` (
  `id` int(255) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `batch` year(4) DEFAULT NULL,
  `membership_no` varchar(255) DEFAULT NULL,
  `amount` int(255) NOT NULL,
  `mop` varchar(255) NOT NULL,
  `book_no` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prev_alumni`
--

INSERT INTO `prev_alumni` (`id`, `date`, `name`, `branch`, `batch`, `membership_no`, `amount`, `mop`, `book_no`, `phone`) VALUES
(1, '2021-10-04', 'Test', 'civil', 2012, 'JECAA-123', 10000, 'Online', 'WEB/TEST/123', '99098987665'),
(2, '2021-10-05', 'ABC', 'civil', 2011, 'test-99', 5000, 'Online', 'web/889988', '9988776655');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `prev_alumni`
--
ALTER TABLE `prev_alumni`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `prev_alumni`
--
ALTER TABLE `prev_alumni`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
