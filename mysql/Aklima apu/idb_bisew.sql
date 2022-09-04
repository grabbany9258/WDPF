-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2022 at 08:45 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idb_bisew`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_delete` (IN `st_name` VARCHAR(30), IN `st_address` VARCHAR(30), IN `st_mobile` VARCHAR(20))  INSERT INTO students VALUES(NULL, st_name, st_address, st_mobile)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `r_id` int(11) NOT NULL,
  `rmodule_name` varchar(20) NOT NULL,
  `rtotal_marks` int(5) NOT NULL,
  `rstudent_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`r_id`, `rmodule_name`, `rtotal_marks`, `rstudent_id`) VALUES
(1, 'java', 50, 1),
(6, 'java', 80, 5),
(12, 'C+', 70, 15),
(13, 'Graphics', 85, 14);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(50) NOT NULL,
  `st_name` varchar(50) NOT NULL,
  `st_address` varchar(100) NOT NULL,
  `st_mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `st_name`, `st_address`, `st_mobile`) VALUES
(12, 'Amina', 'Narayanganj', '2345657'),
(14, 'Kamna', 'Narayanganj', '12345'),
(15, 'Asa', 'Narayanganj', '342546'),
(16, 'rabbany', 'adabor', '012547896'),
(17, 'Abdullah', 'Monsurabd', '012654789');

--
-- Triggers `students`
--
DELIMITER $$
CREATE TRIGGER `delete_student` AFTER DELETE ON `students` FOR EACH ROW DELETE FROM result WHERE rstudent_id = old.student_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `student_info_view`
-- (See below for the actual view)
--
CREATE TABLE `student_info_view` (
`student_id` int(50)
,`st_name` varchar(50)
,`rmodule_name` varchar(20)
,`rtotal_marks` int(5)
,`st_mobile` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'jannat@gmail.com', '81fe8bfe87576c3ecb22426f8e5784'),
(2, 'sultana@gmail.com', 'abcd'),
(3, 'aklima@gmail.com', '81fe8bfe87576c3ecb22426f8e5784');

-- --------------------------------------------------------

--
-- Structure for view `student_info_view`
--
DROP TABLE IF EXISTS `student_info_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `student_info_view`  AS SELECT `students`.`student_id` AS `student_id`, `students`.`st_name` AS `st_name`, `result`.`rmodule_name` AS `rmodule_name`, `result`.`rtotal_marks` AS `rtotal_marks`, `students`.`st_mobile` AS `st_mobile` FROM (`students` join `result`) WHERE `result`.`rstudent_id` = `students`.`student_id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
