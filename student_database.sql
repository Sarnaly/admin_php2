-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2023 at 04:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student database`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `course` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course`) VALUES
(3, 'Full Stack Web Development'),
(11, 'Full Stack Web Development'),
(12, 'Full Stack Web Development'),
(13, 'Full Stack Web Development'),
(14, 'full_course');

-- --------------------------------------------------------

--
-- Table structure for table `student_admission`
--

CREATE TABLE `student_admission` (
  `id` int(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `father name` varchar(250) NOT NULL,
  `mother name` varchar(250) NOT NULL,
  `date of birth` date NOT NULL,
  `religion` varchar(300) NOT NULL,
  `gender` varchar(300) NOT NULL,
  `job title` varchar(300) NOT NULL,
  `blood group` varchar(20) NOT NULL,
  `nid/bc` varchar(250) NOT NULL,
  `coursetype` varchar(350) NOT NULL,
  `phone number` varchar(30) NOT NULL,
  `guardian number` varchar(30) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(350) NOT NULL,
  `session` varchar(100) NOT NULL,
  `course` varchar(350) NOT NULL,
  `register type` varchar(300) NOT NULL,
  `total fee` varchar(100) NOT NULL,
  `register time` varchar(200) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_admission`
--

INSERT INTO `student_admission` (`id`, `name`, `father name`, `mother name`, `date of birth`, `religion`, `gender`, `job title`, `blood group`, `nid/bc`, `coursetype`, `phone number`, `guardian number`, `email`, `address`, `session`, `course`, `register type`, `total fee`, `register time`, `photo`, `status`) VALUES
(2, 'afrin', 'md.sahabuddin ', 'nasrin', '2002-02-07', 'Islam', 'Female', 'Student', 'AB+', 'Offline', '14569986', '12345678901', '5812352369', 'afrin@gmail.com', 'madaripur', 'January - June', 'Full Stack Web Development', 'Government', '50000', '2023-12-02 10:49:15pm', '', 'Active'),
(3, 'sarnaly', 'md.sahabuddin ', 'nasrin', '2002-12-10', 'Islam', 'Female', 'Student', 'AB+', 'Offline', '14569986', '12345678901', '5812352369', 'sarna@gmail.com', 'madaripur', 'June - Septembar', 'Full Stack Web Development', 'Government', '50000', '2023-12-06 07:03:44pm', '', 'Active'),
(5, 'sarnaly', 'md.sahabuddin ', 'nasrin', '2000-10-10', 'Islam', 'Male', 'Student', 'error', 'Offline', '14569986', '12345678901', '5812352369', 'sarnaly466@gmail.com', 'madaripur', 'January - March', 'Computer Office Application', 'Government', '50000', '2023-12-10 12:56:19pm', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `reg_time` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `username`, `email`, `mobile`, `password`, `reg_time`, `status`) VALUES
(1, 'Sarnaly sarna', 'sarnaly466@gmail.com', '01959949024', '123456789', '11-03-2023,10:54:26 am', 'Active'),
(3, 'sarna', 'sarna@gmail.com', '013245678901', '123654789', '11-04-2023,08:42:48 pm', 'active'),
(10, 'meme5', 'meme@gmail.com', '01912345678', '0147852369', '12-19-2023,07:13:36 pm', 'Active'),
(11, 'sumeya', 'sumeya@gmail.com', '0195994902455', '369852147', '12-19-2023,07:55:34 pm', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`email`) VALUES
('sarnaly@gmail.com'),
('sharmin@gmeil.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_admission`
--
ALTER TABLE `student_admission`
  ADD UNIQUE KEY `Password` (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student_admission`
--
ALTER TABLE `student_admission`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
