-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2022 at 07:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `display_low_mark` (OUT `lowestmark` INT)   BEGIN  
        SELECT MIN(marks) INTO lowestmark FROM student_info;   
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_marks` (INOUT `var1` INT)   BEGIN  
        SELECT marks INTO var1 FROM student_info WHERE student_id = var1;   
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_max_mark` (OUT `highestmark` INT)   BEGIN  
        SELECT MAX(marks) INTO highestmark FROM student_info;   
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `GetStudents` ()   BEGIN
	SELECT 
		*
	FROM
		students
	ORDER BY student_id;    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Get_merit_student` ()   BEGIN
	SELECT * FROM student_info WHERE marks >70;
	SELECT COUNT(student_code) AS TOTAL_student FROM student_info; 
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Get_student` (IN `var1` INT)   BEGIN
	SELECT * FROM student_info LIMIT var1;
	 
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `distid` int(11) NOT NULL,
  `distname` varchar(30) NOT NULL,
  `dist_divid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`distid`, `distname`, `dist_divid`) VALUES
(1, 'Norshingi', 1),
(2, 'Munshigonj', 1),
(3, 'Thakurgaon', 2),
(4, 'Dinajpur', 2),
(5, 'Jessor', 3),
(6, 'Kushtia', 3),
(7, 'Borguna', 4),
(8, 'Vhola', 4),
(9, 'Naogaon', 5),
(10, 'Natore', 5),
(11, 'Kishorganj', 6),
(12, 'Tangail', 6),
(13, 'Coxs Bazar', 7),
(14, 'Teknaf', 7);

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `divid` int(11) NOT NULL,
  `divname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`divid`, `divname`) VALUES
(1, 'Dhaka'),
(2, 'Rangpur'),
(3, 'Khulna'),
(4, 'Barishal'),
(5, 'Rajshahi'),
(6, 'Mymensing'),
(7, 'Chittagong');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` smallint(6) NOT NULL,
  `sku` char(8) NOT NULL,
  `name` varchar(35) NOT NULL,
  `product_entry` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `price` decimal(6,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products1`
--

CREATE TABLE `products1` (
  `id` smallint(6) NOT NULL,
  `sku` char(8) NOT NULL,
  `name` varchar(35) NOT NULL,
  `price` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `client_id` smallint(5) UNSIGNED NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sub_total` decimal(8,2) NOT NULL,
  `shipping_cost` decimal(8,2) NOT NULL,
  `total_cost` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` smallint(10) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `student_phone` varchar(20) NOT NULL,
  `student_batch` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_name`, `student_email`, `student_phone`, `student_batch`) VALUES
(124, 'Toki Tahmeed', 'toki@gmail.com', '0162521088', 50),
(125, 'Dipu Mahmud', 'dipu@gmail.com', '01716699548', 51),
(1051, 'kashfi', 'kashfi@gmail.com', '01254789', 52),
(1050, 'kamlu', 'kamllo@gmail.com', '012365478', 53),
(1003, 'Alamin', 'alamin@gmail.com', '016985789', 54),
(1004, 'Sazzad', 'Sazzad@gmail.com', '0123698774', 51),
(1005, 'Abul', 'Abul@gmail.com', '0123658745', 50),
(1006, 'Babul', 'Babul@gmail.com', '0187569658', 51),
(1007, 'Rafiq', 'rafiq@gmail.com', '0123659874', 51),
(1008, 'kamal', 'kamal@gmail.com', '0195658746', 52),
(1011, 'kamal', 'abc@gmail.com', '0195658746', 53),
(1010, 'Rafiq', 'def@gmail.com', '0123659874', 54),
(1012, 'Rabbany', 'grt@gmail.com', '01533308717', 50),
(1013, 'tanvir', 'tanvir@gmail.com', '012365478', 53),
(1014, 'Fayzullah', 'fayzullah@gamil.com', '0147896523', 51),
(1015, 'Amjad', 'amjad@gamil.com', '016587956', 52),
(1017, 'tyht', 'ahdjhad@gmail.com', '216554655+', 50);

--
-- Triggers `students`
--
DELIMITER $$
CREATE TRIGGER `after_student_entry` AFTER INSERT ON `students` FOR EACH ROW BEGIN
INSERT INTO student_table_log VALUES(NULL, NEW.student_id, NEW.student_name, NEW.student_email, NEW.student_phone,'INSERT', CURRENT_TIMESTAMP());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_student_update` AFTER UPDATE ON `students` FOR EACH ROW BEGIN
INSERT INTO student_table_log VALUES(NULL, NEW.student_id, NEW.student_name, NEW.student_email, NEW.student_phone,'UPDATE', CURRENT_TIMESTAMP());

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_student_delete` AFTER DELETE ON `students` FOR EACH ROW BEGIN
INSERT INTO student_table_log VALUES(NULL, OLD.student_id, OLD.student_name, OLD.student_email, OLD.student_phone,'DELETE', CURRENT_TIMESTAMP());

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `student_id` int(11) NOT NULL,
  `student_code` varchar(20) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `marks` tinyint(4) NOT NULL,
  `student_phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`student_id`, `student_code`, `student_name`, `subject`, `marks`, `student_phone`) VALUES
(5, '101', 'Mark', 'English', 68, 213654789),
(6, '102', 'joseph', 'physics', 70, 213654789),
(7, '103', 'john', 'Maths', 70, 123456789),
(8, '104', 'barak', 'Maths', 90, 123456789),
(9, '105', 'Rinky', 'Maths', 85, 213654789),
(10, '106', 'Adam', 'science', 92, 213654789),
(11, '107', 'Andrew', 'science', 83, 213654789),
(12, '108', 'brayan', 'science', 85, 213654789),
(13, '110', 'Alexander', 'Biology', 67, 213654789),
(14, '112', 'BELAYET', 'Maths', 60, 17596869);

-- --------------------------------------------------------

--
-- Table structure for table `student_table_log`
--

CREATE TABLE `student_table_log` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `student_email` varchar(30) NOT NULL,
  `student_phone` varchar(20) NOT NULL,
  `action` varchar(10) NOT NULL,
  `action_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_table_log`
--

INSERT INTO `student_table_log` (`id`, `student_id`, `student_name`, `student_email`, `student_phone`, `action`, `action_time`) VALUES
(1, 1050, 'kamlu', 'kamllo@gmail.com', '012365478', 'INSERT', '0000-00-00 00:00:00'),
(2, 1051, 'kashfi', 'kashfi@gmail.com', '01254789', 'INSERT', '2022-08-27 12:20:36'),
(3, 1018, 'kamla', 'kamla@gmail.com', '012365489', 'UPDATE', '2022-08-27 12:33:43'),
(4, 1018, 'kamini', 'kamini@gmail.com', '012365484', 'UPDATE', '2022-08-27 12:36:28'),
(5, 1018, 'kamini', 'kamini@gmail.com', '012365484', 'DELETE', '2022-08-27 12:52:34'),
(6, 124, 'Toki Tahmeed', 'toki@gmail.com', '0162521088', 'UPDATE', '2022-09-13 12:03:44'),
(7, 125, 'Dipu Mahmud', 'dipu@gmail.com', '01716699548', 'UPDATE', '2022-09-13 12:03:45'),
(8, 1051, 'kashfi', 'kashfi@gmail.com', '01254789', 'UPDATE', '2022-09-13 12:03:45'),
(9, 1050, 'kamlu', 'kamllo@gmail.com', '012365478', 'UPDATE', '2022-09-13 12:03:45'),
(10, 1003, 'Alamin', 'alamin@gmail.com', '016985789', 'UPDATE', '2022-09-13 12:04:42'),
(11, 1005, 'Abul', 'Abul@gmail.com', '0123658745', 'UPDATE', '2022-09-13 12:04:42'),
(12, 1006, 'Babul', 'Babul@gmail.com', '0187569658', 'UPDATE', '2022-09-13 12:04:42'),
(13, 1007, 'Rafiq', 'rafiq@gmail.com', '0123659874', 'UPDATE', '2022-09-13 12:04:42'),
(14, 1008, 'kamal', 'kamal@gmail.com', '0195658746', 'UPDATE', '2022-09-13 12:04:42'),
(15, 1011, 'kamal', 'abc@gmail.com', '0195658746', 'UPDATE', '2022-09-13 12:04:42'),
(16, 1010, 'Rafiq', 'def@gmail.com', '0123659874', 'UPDATE', '2022-09-13 12:04:43'),
(17, 1012, 'Rabbany', 'grt@gmail.com', '01533308717', 'UPDATE', '2022-09-13 12:04:43'),
(18, 1013, 'tanvir', 'tanvir@gmail.com', '012365478', 'UPDATE', '2022-09-13 12:04:43'),
(19, 1014, 'Fayzullah', 'fayzullah@gamil.com', '0147896523', 'UPDATE', '2022-09-13 12:04:43'),
(20, 1015, 'Amjad', 'amjad@gamil.com', '016587956', 'UPDATE', '2022-09-13 12:04:43'),
(21, 1017, 'tyht', 'ahdjhad@gmail.com', '216554655+', 'UPDATE', '2022-09-13 12:04:43'),
(22, 1004, 'Sazzad', 'Sazzad@gmail.com', '0123698774', 'UPDATE', '2022-09-13 12:04:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` smallint(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` char(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'dipu', 'dipu@gmail.com', '7c3607b8e61bcf1944e9e8503a660f21f4b6f3f1'),
(4, 'naimur', 'naimur@gmail.com', '7c3607b8e61bcf1944e9e8503a660f21f4b6f3f1'),
(5, 'Amzad', 'amzad@gmail.com', '7c3607b8e61bcf1944e9e8503a660f21f4b6f3f1'),
(6, 'Rabbany', 'grb@gmail.com', '79cfeb94595de33b3326c06ab1c7dbda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`distid`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`divid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products1`
--
ALTER TABLE `products1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `student_email` (`student_email`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`student_code`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `student_table_log`
--
ALTER TABLE `student_table_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `distid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `divid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products1`
--
ALTER TABLE `products1`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student_table_log`
--
ALTER TABLE `student_table_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` smallint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
