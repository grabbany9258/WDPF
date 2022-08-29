-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2022 at 06:13 PM
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
-- Database: `wdpf51`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `stud_id` int(6) NOT NULL,
  `stud_code` int(6) NOT NULL,
  `stud_name` varchar(30) NOT NULL,
  `subject` varchar(15) NOT NULL,
  `marks` tinyint(3) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`stud_id`, `stud_code`, `stud_name`, `subject`, `marks`, `phone`) VALUES
(1, 101, 'Rabbany', 'English', 68, '017469325655'),
(2, 102, 'Dipu', 'Physics', 70, '017469325655'),
(3, 103, 'Hasan', 'Maths', 70, '017469325655'),
(4, 104, 'Aklima', 'Maths', 75, '017469325655'),
(5, 105, 'Tokey', 'English', 60, '017469325655'),
(6, 106, 'Nazmul', 'Science', 50, '017469325655'),
(7, 107, 'Subrata', 'Science', 75, '017469325655'),
(8, 108, 'Naimul', 'Science', 35, '017469325655'),
(9, 109, 'Hossain', 'Maths', 65, '017469325655'),
(10, 110, 'Shanto', 'English', 55, '017469325655'),
(11, 111, 'Tina', 'Science', 55, '017469325655');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`stud_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `stud_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
