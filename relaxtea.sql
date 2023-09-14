-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 14, 2023 at 06:32 PM
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

--
-- Dumping data for table `marksheet`
--

INSERT INTO `marksheet` (`sheet_id`, `student_name`, `roll`, `group`, `year`, `result`, `birth`, `gpa`, `exam_name`, `institute`, `father`, `mother`, `board`) VALUES
(41, 'Bangladesh', '2020', 'Science', '5', 'F', '6', '5', 'HSC/Alim', '%%', '//', '/', 'dh'),
(42, 'HPAH', '177618', 'Science', '55', 'C', 'GG', '5', 'HSC/Alim', 'FT', 'T', 'FF', 'GG'),
(37, 'hh', '55', 'Science', '', '', '', '', 'SSC/Dakhil/Equivalent', '', '', '', ''),
(31, 'TANISHA', '136098', 'Science', '2023', 'PASSED', '12-10-2006', '5', 'SSC/Dakhil/Equivalent', 'MOHARPARA HIGH SCHOOL', 'MD. BADAL MIR', 'SHILPI BEGUM', 'DHAKA'),
(39, 'Jennifer', '10102', 'Science', '2019', 'Passed ', '4577', '4.25', 'SSC(Vocational)', 'Washington state ', 'Ghs Julian ', 'Alina Lopez ', 'Sylhet '),
(22, 'Alice Cooper', '313121', 'Humanity', '2019', 'Passed ', '23-02-2001', '4.90', 'SSC/Dakhil/Equivalent', 'National University ', 'Ghs Julian ', 'Alina Lopez ', 'Sylhet '),
(21, 'Jennifer', '303090', 'Humanity', '2019', 'Passed ', '03-02-2001', '3.95', 'SSC/Dakhil/Equivalent', 'National University ', 'Ghs Julian ', 'Elite ', 'Sylhet '),
(17, 'Ghs Julian', '112233', 'Science', '2019', 'Passed', '04/05/2002', '4.90', 'SSC/Dakhil/Equivalent', 'National University ', 'Devid Smith', 'Ellie Goulding', 'Sylhet'),
(44, 'Lkkk', '177618', 'Science', '2', '5', '5', '5', 'HSC/Alim', '5', '5', '4', '='),
(45, 'Mkk', '8080', 'Science', '88', 'F', 'D', '5', 'HSC/Alim', 'Rf', 'F', 'F', 'ygf'),
(46, 'Mjgdss', '58', 'Humanity', '2', 'F', 'F', '22', 'HSC/Alim', 'Rr', 'T', 'Ttt', 'yy');

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
(53, 'Alice Cooper', '313121', '131323', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Humanity', 'Agriculture', 'Islam', 'YES', '8005'),
(52, 'Jennifer', '303090', '909080', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Humanity', 'Agriculture', 'Christian', 'YES', '8005'),
(48, 'Ghs Julian', '112233', '131322', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Science', 'Agriculture', 'Hinduism', 'YES', '8005'),
(70, 'TANISHA', '136098', '2010709887', '010077843348e66a5749101fff3223056d3681ed', 'Science', 'Higher Mathematics', 'Islam', 'YES', '112826'),
(77, 'hh', '55', '55', '010077843348e66a5749101fff3223056d3681ed', 'Science', 'Higher Mathematics', 'Ff', 'YES', '55'),
(82, 'Jennifer', '10102', '123456', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Science', 'Higher Mathematics', 'Hinduism', 'YES', '8005'),
(86, 'Bangladesh', '2020', '2020', '54ceb91256e8190e474aa752a6e0650a2df5ba37', 'Science', 'Higher Mathematics', 'Islam', 'YES', '2020'),
(87, 'HPAH', '177618', '2010516997', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Science', 'Higher Mathematics', 'Islam', 'YES', '5656'),
(89, 'Lkkk', '177618', '177619', '010077843348e66a5749101fff3223056d3681ed', 'Science', 'Higher Mathematics', 'Islam', 'YES', '5656'),
(90, 'Mkk', '8080', '8080', '143ad82c245be0610f3b3dc3b0bc94b2db721a3b', 'Science', 'Higher Mathematics', 'Islam', 'YES', '8080'),
(91, 'Mjgdss', '58', '58', '5a5b0f9b7d3f8fc84c3cef8fd8efaaa6c70d75ab', 'Humanity', 'Agriculture', 'Islam', 'YES', '58');

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
  `physical_edu` varchar(50) NOT NULL,
  `hire_math` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sub_id`, `student_id`, `student_name`, `bangla`, `english`, `math`, `ict`, `global_study`, `biology`, `chemistry`, `physics`, `hindu_edu`, `islam_edu`, `christian_edu`, `history`, `agriculture`, `economics`, `geography`, `science`, `accounting`, `finnance`, `geography_world`, `business`, `carrier_edu`, `physical_edu`, `hire_math`) VALUES
(1, '112233', 'Maria Smith', 'A+', 'A+', 'A+', 'A+', 'A-', 'A', 'A+', 'A', 'A+', 'A+', 'A+', 'A+', 'A+', 'A+', 'A+', 'A-', 'A+', 'A+', '', 'A', 'A-', 'A+', ''),
(2, '124', 'Sweta Sharma', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '177618', 'Alahi Sheikh', 'A+', 'A+', 'A+', 'A+', 'A+', 'A+', 'A+', 'A+', '', 'A+', '', '', 'A+', '', '', '', '', '', '', '', 'A+', 'A+', ''),
(6, '1919', 'Siya Rai', 'Gddy', 'Ufyfhf', 'Ufyfhffufuf', 'Urf', 'Ydydyd', 'Urr', 'Ufuf', 'Yfyfdy', 'Ufuf', 'Urr', 'Fu', 'Ug', 'Igfu', '7rur', '', '', 'It', 'Tutu', '', '', '', 'Igfuyurut', 'A+'),
(7, '1212', 'Siya Smith', 'A', 'A', 'A', 'A-', 'A', 'A+', 'A', 'A+', 'A', 'A', 'A', 'A', 'A', '', '', '', '', '', '', '', '', '', 'A+'),
(8, '128799', 'MD MAHMUDUN NABI SWEET', 'A', 'A+', '', 'A+', '', 'A+', 'A+', 'A+', '', '', '', '', '', '', '', '', '', '', '', '', 'A+', 'A+', 'A+'),
(9, '128799', 'MD MAHMUDUN NABI SWEET', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, '738831', 'JOY PROSAD BAIN', 'A+', 'A+', '', 'A+', '', '', '', '', '', '', '', 'A+', 'A+', 'A+', '', '', '', '', '', '', 'A+', 'A+', ''),
(11, '738831', 'JOY PROSAD BAIN', 'A+', 'A+', 'A+', 'A+', '', '', '', '', '', '', '', 'A+', 'A+', 'A+', 'A+', 'A+', '', '', '', '', 'A+', 'A+', ''),
(12, '738831', 'JOY PROSAD BAIN', 'A+', 'A+', 'A+', 'A+', '', '', '', '', '', '', '', '', 'A+', 'A+', 'A+', 'A+', '', '', '', '', 'A+', 'A+', ''),
(13, '128799', 'MD MAHMUDUN NABI SWEET', 'A+', 'A+', 'A+', 'A+', '', 'A+', 'A+', 'A+', '', '', '', '', 'A+', '', '', '', '', '', '', '', 'A+', 'A+', 'A+'),
(14, '128799', 'MD MAHMUDUN NABI SWEET', 'A+', 'A+', 'A+', 'A+', '', 'A+', 'A+', 'A+', '', '', '', '', 'A+', 'A+', '', '', '', '', '', '', 'A+', '', 'A+'),
(15, '128799', 'MD MAHMUDUN NABI SWEET', 'A+', 'A+', 'A+', 'A+', '', 'A+', 'A+', 'A+', '', '', '', '', 'A+', 'A+', '', '', '', '', '', '', 'A+', '', 'A+'),
(17, '112233', 'Ghs Julian', 'A', 'B', 'A', 'A', 'A+', 'A+', 'A', 'A+', 'A+', '', '', 'A+', '', '', '', '', '', '', '', '', 'A', 'A+', ''),
(21, '303090', 'Jennifer', 'A', 'B', 'C', 'D', 'bd_history', '', '', '', '', 'islam', 'christian', 'E', 'J', 'F', 'G', 'H', '', '', 'geography_world', '', 'I', '', 'hire_math'),
(22, '313121', 'Alice Cooper', 'A', 'B', 'C', 'D', 'bd_history', '', '', '', 'K', 'islam', 'christian', 'E', 'J', 'F', 'G', 'H', '', '', 'geography_world', '', 'I', '', 'hire_math'),
(39, '10102', 'Jennifer', 'A', 'B', 'ghs', 'D', 'bd_history', 'A', 'A', 'A', 'religion', 'islam', 'christian', '', 'A', '', '', '', '', '', 'geography_world', '', '', '', 'hire_math'),
(31, '136098', 'TANISHA', 'A+', 'A+', 'ghs', 'A+', 'bd_history', 'A+', 'A+', 'A+', 'religion', 'islam', 'christian', '', 'A+', '', '', '', '', '', 'geography_world', '', '', '', 'hire_math'),
(37, '55', 'hh', '', '', 'ghs', '', 'bd_history', '', '', '', 'religion', 'islam', 'christian', '', '', '', '', '', '', '', 'geography_world', '', '', '', 'hire_math'),
(41, '2020', 'Bangladesh', 'A', 'A', 'ghs', 'A', 'bd_history', 'A', 'A', 'D', 'religion', 'islam', 'christian', '', 'C', '', '', '', '', '', 'geography_world', '', '', '', 'hire_math'),
(42, '177618', 'HPAH', 'A', 'A', 'ghs', 'A', 'bd_history', 'A', 'A', 'A', 'religion', 'islam', 'christian', '', 'A', '', '', '', '', '', 'geography_world', '', '', '', 'hire_math'),
(44, '177618', 'Lkkk', 'A', 'A', 'ghs', 'A', 'bd_history', 'A', 'A', 'D', 'religion', 'islam', 'christian', '', 'Y', '', '', '', '', '', 'geography_world', '', '', '', 'hire_math'),
(45, '8080', 'Mkk', 'A', 'A', 'ghs', 'A', 'bd_history', 'A', 'A', 'A', 'religion', 'islam', 'christian', '', 'A', '', '', '', '', '', 'geography_world', '', '', '', 'hire_math'),
(46, '58', 'Mjgdss', 'A', 'A', 'ghs', 'A', 'bd_history', '', '', '', '', 'islam', 'christian', 'A', 'A', 'A', 'A', '', '', '', 'geography_world', '', '', '', 'hire_math');

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
  MODIFY `sheet_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `sub_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
