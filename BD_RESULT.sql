-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 13, 2023 at 09:27 PM
-- Server version: 8.1.0
-- PHP Version: 7.4.3-4ubuntu2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `relaxtea`
--

-- --------------------------------------------------------

--
-- Table structure for table `marksheet`
--

CREATE TABLE `marksheet` (
  `sheet_id` int NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `roll` varchar(100) NOT NULL,
  `group` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `result` varchar(100) NOT NULL,
  `birth` varchar(100) NOT NULL,
  `gpa` varchar(100) NOT NULL,
  `exam_name` varchar(100) NOT NULL,
  `institute` varchar(100) NOT NULL,
  `father` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `board` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `rool` varchar(100) NOT NULL,
  `registration` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `group` varchar(100) NOT NULL,
  `optional_subject` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `marksheet` varchar(10) NOT NULL,
  `ein` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_name`, `rool`, `registration`, `password`, `group`, `optional_subject`, `religion`, `marksheet`, `ein`) VALUES
(10, 'Ghs Julian', '1', '1234', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Science', 'Agriculture ', 'Hinduism ', 'YES', ''),
(16, 'Alice Cooper', '3', '12345', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Commerce', 'Agriculture ', 'Christian ', 'YES', ''),
(24, 'Sweta Sharma', '124', '161647', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Science', 'Computer', 'Christian', '', '8005'),
(25, 'Smita Smith', '114430', '14146098', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Commerce', 'Agriculture', 'Hinduism', 'YES', '8005'),
(31, 'Nisha Yadav', '696923', '161676', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Humanity', 'Bangla', 'Hinduism', 'YES', '8005');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sub_id` int NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `bangla` varchar(50) NOT NULL,
  `english` varchar(50) NOT NULL,
  `math` varchar(50) NOT NULL,
  `ict` varchar(50) NOT NULL,
  `global_study` varchar(50) NOT NULL,
  `biology` varchar(50) NOT NULL,
  `chemistry` varchar(50) NOT NULL,
  `physics` varchar(50) NOT NULL,
  `hindu_edu` varchar(50) NOT NULL,
  `islam_edu` varchar(50) NOT NULL,
  `christian_edu` varchar(50) NOT NULL,
  `history` varchar(50) NOT NULL,
  `agriculture` varchar(50) NOT NULL,
  `economics` varchar(50) NOT NULL,
  `geography` varchar(50) NOT NULL,
  `science` varchar(50) NOT NULL,
  `accounting` varchar(50) NOT NULL,
  `finnance` varchar(50) NOT NULL,
  `geography_world` varchar(50) NOT NULL,
  `business` varchar(50) NOT NULL,
  `carrier_edu` varchar(50) NOT NULL,
  `physical_edu` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_role` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_role`) VALUES
(1, 'Admin_ghs', 'admin@gmail.com', '40f0b63b8e0e64e822c964195908099d0ef09510', 'admin_ghs'),
(2, 'Ghs Julian', 'ghsjulian@gmail.com', '123456', 'admin_ghs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marksheet`
--
ALTER TABLE `marksheet`
  ADD PRIMARY KEY (`sheet_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marksheet`
--
ALTER TABLE `marksheet`
  MODIFY `sheet_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `sub_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
