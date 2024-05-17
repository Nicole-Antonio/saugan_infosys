-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 02:09 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `file` longblob NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `title`, `file`, `date`) VALUES
(5, 'Math', '', '2022-01-25'),
(6, 'Math', '', '2022-01-26');

-- --------------------------------------------------------

--
-- Table structure for table `overall`
--

CREATE TABLE `overall` (
  `id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `first_qtr` varchar(15) NOT NULL,
  `second_qtr` varchar(15) NOT NULL,
  `third_qtr` varchar(15) NOT NULL,
  `fourth_qtr` varchar(15) NOT NULL,
  `final_grade` varchar(15) NOT NULL,
  `remarks` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `overall`
--

INSERT INTO `overall` (`id`, `subject`, `first_qtr`, `second_qtr`, `third_qtr`, `fourth_qtr`, `final_grade`, `remarks`) VALUES
(1, 'Science', '90', '95', '93', '92', '92.5', 'Promoted'),
(2, 'Math', '90', '95', '93', '92', '92.5', 'Promoted'),
(3, 'Filipino', '90', '95', '93', '92', '92.5', 'Promoted'),
(4, 'English', '90', '95', '93', '92', '92.5', 'Promoted'),
(5, 'Edukasyon sa Pagpapakatao', '90', '95', '93', '92', '92.5', 'Promoted'),
(6, 'Edukasyon Pantahanan at Pangkabuhayan', '90', '95', '93', '92', '92.5', 'Promoted'),
(7, 'Araling Panlipunan', '90', '95', '93', '92', '92.5', 'Promoted'),
(8, 'MAPEH', '90', '95', '93', '92', '92.5', 'Promoted'),
(9, 'Research', '90', '99', '90', '90', '90', 'Promoted');

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` int(200) NOT NULL,
  `stud_id` int(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `score` int(100) NOT NULL,
  `items` varchar(100) NOT NULL,
  `dateposted` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `quiz_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `stud_id`, `subject`, `score`, `items`, `dateposted`, `quiz_no`) VALUES
(1, 1, 'Math', 10, '10', '2022-02-13 05:37:50', '3'),
(2, 2, 'Math', 9, '10', '2022-02-13 05:37:50', '3'),
(3, 3, 'Math', 8, '10', '2022-02-13 05:37:50', '3'),
(4, 1, 'Math', 10, '10', '2022-02-13 05:43:52', '2'),
(5, 2, 'Math', 9, '10', '2022-02-13 05:43:52', '2'),
(6, 3, 'Math', 8, '10', '2022-02-13 05:43:52', '2'),
(7, 1, 'Math', 10, '10', '2022-02-14 07:06:21', '1'),
(8, 2, 'Math', 9, '10', '2022-02-14 07:06:21', '1'),
(9, 3, 'Math', 8, '10', '2022-02-14 07:06:21', '1'),
(10, 1, 'Math', 10, '10', '2022-02-14 07:10:21', '4'),
(11, 2, 'Math', 9, '10', '2022-02-14 07:10:21', '4'),
(12, 3, 'Math', 8, '10', '2022-02-14 07:10:21', '4');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `gradelvl` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `lname`, `fname`, `mname`, `gradelvl`) VALUES
(1, 'Tangara', 'Ruth Ella', 'Dulfo', '1'),
(2, 'Valles', 'Petrus Lex', 'Cinco', '1'),
(3, 'Obingayan', 'Aliason', 'Librando', '1'),
(4, 'Habla', 'Joshua', 'Rivera', '1'),
(5, 'Antonio', 'Nicole', 'Gulpric', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `gradelvl` varchar(10) NOT NULL,
  `teacher` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `title`, `gradelvl`, `teacher`) VALUES
(1, 'Math', 'Grade 1', 'Phillip Alegre'),
(12, 'Research', 'Grade 6', '1'),
(13, 'Science', '2', 'Nicole Antonio');

-- --------------------------------------------------------

--
-- Table structure for table `submitassignments`
--

CREATE TABLE `submitassignments` (
  `id` int(50) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `submittedassignment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submitassignments`
--

INSERT INTO `submitassignments` (`id`, `lname`, `submittedassignment`) VALUES
(9, 'Tangara', 'TANGARA_LESSON1_MATH.png'),
(10, 'Tangara', 'tangara_LESSON2_MATH.pdf'),
(11, 'Antonio', 'ASIA (1).pdf'),
(12, 'Antonio', 'AIAS Midterm Answer Sheets (Antonio, Ma. Nicole).docx'),
(13, 'Valdinar', 'Module 3.pdf'),
(14, 'Villacarillo', 'Final Project.pdf'),
(15, 'Tangara', 'AOS Finals(Tangara, Ruth Ella D. BSIT-3A).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `systemusers`
--

CREATE TABLE `systemusers` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `systemusers`
--

INSERT INTO `systemusers` (`id`, `username`, `email`, `password`, `usertype`) VALUES
(1, 'Nicole', 'student@gmail.com', '1234', 'user'),
(6, 'Admin', 'admin@admin.com', '1234', 'admin'),
(7, 'Teacher', 't1@gmail.com', '1234', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `advisory` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `lname`, `fname`, `mname`, `email`, `advisory`) VALUES
(1, 'Picardo', 'Magdalena', 'G.', 'magdalena@gmail.com', 'Kinder'),
(2, 'Baliquia', 'Sandra', 'P.', 'sandra@gmail.com', 'Grade 1'),
(3, 'Madeja', 'Grace', 'Cada', 'grace@gmail.com', 'Grade 2'),
(4, 'Lobenia', 'Catheryn', 'Montera', 'catheryn@gmail.com', 'Grade 3'),
(5, 'Chua', 'Maria Crisanta', 'Gulpric', 'mariacrisanta@gmail.com', 'Grade 4'),
(6, 'Jaromay', 'Nona', 'M.', 'nona@gmail.com', 'Grd 5 & 6'),
(14, 'Obias', 'Lota', 'Guial', 'lota@gmail.com', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `items` int(11) NOT NULL,
  `dateposted` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `test_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `stud_id`, `subject`, `score`, `items`, `dateposted`, `test_no`) VALUES
(0, 1, 'Math', 85, 100, '2022-02-13 08:15:49', '1'),
(0, 2, 'Math', 86, 100, '2022-02-13 08:15:49', '1'),
(0, 3, 'Math', 90, 100, '2022-02-13 08:15:49', '1'),
(0, 4, 'Math', 89, 100, '2022-02-13 08:15:49', '1'),
(0, 5, 'Math', 91, 100, '2022-02-13 08:15:49', '1');

-- --------------------------------------------------------

--
-- Table structure for table `updatemodule`
--

CREATE TABLE `updatemodule` (
  `id` int(100) NOT NULL,
  `lessons` varchar(500) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `dateposted` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `updatemodule`
--

INSERT INTO `updatemodule` (`id`, `lessons`, `subject`, `filename`, `description`, `dateposted`) VALUES
(4, 'Lesson 1', 'Math', '271658363_450253763255319_1413279251411150196_n.jpg', 'dara naga huhu', '2022-01-27 05:09:58'),
(5, 'Lesson 2', 'Math', 'Acer_Wallpaper_01_5000x2814.jpg', 'Example huhu', '2022-01-27 08:09:00'),
(6, 'Lesson 3', 'Math', 'accounts.php', 'try ulet hehe', '2022-01-27 09:46:23'),
(9, 'Lesson 4', 'Math', 'student.png', 'Lesson 4 assignment', '2022-02-02 08:10:43'),
(10, 'Lesson 5', 'Math', 'ERD-Zeth.pdf', 'To be passes tomorrow', '2022-02-03 09:25:33'),
(13, 'Lesson 6', 'Math', 'Antonio_IT3A_Assessment 5.docx', 'Please submit your assignments on Monday. Thank you.', '2022-02-11 06:38:32'),
(14, 'Lesson 6', 'Math', 'tangara_LESSON2_MATH.pdf', 'The deadline is due on Wednesday. Good luck!', '2022-02-14 07:20:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `overall`
--
ALTER TABLE `overall`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submitassignments`
--
ALTER TABLE `submitassignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `systemusers`
--
ALTER TABLE `systemusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `updatemodule`
--
ALTER TABLE `updatemodule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `overall`
--
ALTER TABLE `overall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `submitassignments`
--
ALTER TABLE `submitassignments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `systemusers`
--
ALTER TABLE `systemusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `updatemodule`
--
ALTER TABLE `updatemodule`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
