-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 09:52 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educational_buero`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `werda_id` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `werda_id`, `zone_id`) VALUES
(1, 2, 2),
(2, 1, 1),
(3, 1, 1),
(4, 1, 1),
(5, 1, 1),
(6, 4, 2),
(7, 2, 2),
(8, 2, 3),
(9, 2, 2),
(10, 2, 2),
(11, 2, 3),
(12, 4, 2),
(13, 3, 3),
(14, 1, 4),
(15, 2, 3),
(16, 3, 2),
(17, 2, 3),
(18, 2, 4),
(19, 1, 1),
(20, 1, 1),
(21, 1, 1),
(22, 3, 5),
(23, 5, 6),
(24, 4, 3),
(25, 3, 2),
(26, 3, 1),
(27, 2, 4),
(28, 1, 1),
(29, 1, 4),
(30, 1, 2),
(31, 1, 2),
(32, 2, 2),
(33, 3, 4),
(34, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(123) COLLATE utf8_bin NOT NULL,
  `phone` varchar(123) COLLATE utf8_bin NOT NULL,
  `message` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `message`) VALUES
(1, 'thanks ', '999', 'g'),
(2, 'thanks ', '+251939888672', 'dfghjkj dfghjk sdrftyui dfghj cghjk '),
(3, 'thanks ', '+251939888672', 'dfghjkj dfghjk sdrftyui dfghj cghjk '),
(4, '', '', ''),
(5, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_from` varchar(11) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `description`, `created_at`, `_from`) VALUES
(1, 'የ ፈተና ውጤት ቀን ', '-The system shall allow the administrator to control the overall activities in the system.\r\n- The system shall allow administrator to change his /her account information.\r\n- The system shall allow the administrator to view reports in different operations in the\r\nsystem.\r\n- The system shall give the administrator to enable and disable users.\r\n- The system shall ensure that the information entered is of the correct format', '2021-08-17 05:08:28', 'School Dire');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `result` varchar(123) COLLATE utf8_bin NOT NULL,
  `code_no` varchar(123) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `subject_id`, `student_id`, `result`, `code_no`) VALUES
(13, 1, 8, '89', '99'),
(14, 2, 8, '99', '03'),
(15, 1, 9, '77', '03'),
(16, 2, 9, '99', '03'),
(17, 1, 10, '97', '03'),
(18, 2, 10, '3', '99'),
(19, 1, 13, '90', '01'),
(20, 2, 13, '90', '09'),
(21, 3, 13, '80', '02'),
(22, 4, 13, '90', '00'),
(23, 5, 13, '90', '00'),
(24, 6, 13, '89', '00'),
(25, 7, 13, '89', '00');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `idsc` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `start_at` datetime NOT NULL,
  `end_at` datetime NOT NULL,
  `place` text COLLATE utf8_bin NOT NULL,
  `shift` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`idsc`, `subject_id`, `start_at`, `end_at`, `place`, `shift`) VALUES
(3, 2, '2021-08-17 07:39:00', '2021-08-16 08:52:00', '', 'Morning'),
(4, 1, '2021-08-18 09:00:00', '2021-08-17 07:20:00', '', 'Afternoon'),
(5, 2, '2021-08-18 06:00:00', '2021-08-18 06:05:00', '', 'Morning'),
(6, 2, '2021-08-21 06:06:00', '2021-08-20 06:09:00', '', 'Night');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `school_code` varchar(123) COLLATE utf8_bin NOT NULL,
  `school_name` varchar(123) COLLATE utf8_bin NOT NULL,
  `school_type` varchar(213) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `school_code`, `school_name`, `school_type`) VALUES
(1, '', '', 'Public'),
(2, '', '', 'Public'),
(3, '', '', 'Public'),
(4, '', '', 'Public'),
(5, '', '', 'Public'),
(6, '', '', 'Public'),
(7, '', '', 'Public'),
(8, '', '', 'Private'),
(9, '', '', 'Public'),
(10, '', '', 'Public'),
(11, '', '', 'Public'),
(12, '', '', 'Private'),
(13, '', '', 'Missionary'),
(14, '', '', 'Missionary'),
(15, '', '', 'Public'),
(16, '', '', 'Public'),
(17, '01', 'bnbb', 'Public'),
(18, '123', 'kokebe', 'Public'),
(19, '03', 'Menen', 'Public'),
(20, '03', 'kokebe', 'Public'),
(21, '03', 'Menen', 'Public'),
(22, '09', 'Abay', 'Public'),
(23, '01', 'Menen', 'Public'),
(24, '03', 'Abay', 'Public'),
(25, '009', 'm', 'Missionary'),
(26, '01', 'Abay', 'Public');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sid` int(11) NOT NULL,
  `full_name` varchar(123) COLLATE utf8_bin NOT NULL,
  `gender` varchar(21) COLLATE utf8_bin NOT NULL,
  `age` varchar(123) COLLATE utf8_bin NOT NULL,
  `registration_no` varchar(211) COLLATE utf8_bin NOT NULL,
  `student_type` varchar(123) COLLATE utf8_bin NOT NULL,
  `address_id` int(11) NOT NULL,
  `register_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `school_id` int(11) NOT NULL,
  `photo` blob NOT NULL,
  `birthpalce` text COLLATE utf8_bin NOT NULL,
  `father_job` text COLLATE utf8_bin NOT NULL,
  `mothers_toung` text COLLATE utf8_bin NOT NULL,
  `status` varchar(44) COLLATE utf8_bin NOT NULL DEFAULT 'Active',
  `rstatus` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sid`, `full_name`, `gender`, `age`, `registration_no`, `student_type`, `address_id`, `register_at`, `school_id`, `photo`, `birthpalce`, `father_job`, `mothers_toung`, `status`, `rstatus`) VALUES
(8, 'Abebe Kebde Welde', 'Female', '25', '0999', 'Regular', 18, '2021-08-15 14:49:27', 17, 0x6472697665722e6a7067, 'thanks', 'nnn', 'am', 'Active', 1),
(9, 'Mola Godele Fesses', 'Male', '21', '9074', 'Regular', 19, '2021-08-15 15:19:58', 18, '', '', '', '', 'Active', 1),
(10, 'Aster Kebde Welde', 'Female', '13', '0124', 'Regular', 23, '2021-08-17 06:47:59', 19, '', '', '', '', 'Active', 1),
(11, 'Z Many Welde', 'Male', '20', '0999', 'Private', 24, '2021-08-17 06:54:00', 20, '', '', '', '', 'Active', 0),
(12, 'Yishak testyuuy test', 'Female', '25', '000099', 'Regular', 25, '2021-08-17 06:56:02', 21, '', '', '', '', 'Active', 0),
(13, 'Tmsege gebre selamwit', 'Male', '21', '010203', 'Private', 26, '2021-08-17 06:59:45', 22, '', '', '', '', 'Active', 1),
(14, 'test testyuuy test', 'Female', '25', '000099', 'Extension', 27, '2021-08-17 07:01:33', 23, '', '', '', '', 'Active', 0),
(15, 'Yishak Kebde Welde', 'Male', '25', '0124', 'Private', 28, '2021-08-17 07:03:34', 24, '', '', '', '', 'Active', 0),
(16, 'h h h', 'Male', '16', '77', 'Private', 29, '2021-08-17 07:07:05', 25, '', '', '', '', 'Unactive', 0),
(17, 'Yishak Kebde Welde', 'Male', '20', '0999', 'Regular', 30, '2021-08-17 07:16:07', 26, '', '', '', '', 'Active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(123) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject_name`) VALUES
(1, 'Amharic '),
(2, 'English '),
(3, 'Mathematics '),
(4, 'Physics '),
(5, 'Chemistry '),
(6, 'Biology '),
(7, 'Civics');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `full_name` varchar(123) COLLATE utf8_bin NOT NULL,
  `gender` varchar(21) COLLATE utf8_bin NOT NULL,
  `age` varchar(11) COLLATE utf8_bin NOT NULL,
  `phone` varchar(213) COLLATE utf8_bin NOT NULL,
  `address_id` int(11) NOT NULL,
  `photo` blob NOT NULL,
  `registered_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `full_name`, `gender`, `age`, `phone`, `address_id`, `photo`, `registered_at`) VALUES
(2, 'Yishak Kebde Kalab', 'Male', '25', '98888888888888', 20, '', '2021-08-15 20:43:42'),
(3, 'Abebe Kebde Welde', 'Male', '25', '0939888672', 21, '', '2021-08-15 20:53:45'),
(4, 'Meseret Abebe Afwork', 'Female', '30', '0939888672', 22, '', '2021-08-16 20:28:39'),
(5, 'admin admin admin', 'Male', '45', '123', 31, '', '2021-08-17 07:20:03'),
(6, 'region region region', 'Male', '25', '123', 32, '', '2021-08-17 07:22:14'),
(7, 'zone zone zone', 'Male', '25', '123', 33, '', '2021-08-17 07:23:51'),
(8, 'werda werda werda', 'Male', '22', '123', 34, '', '2021-08-17 07:29:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(123) COLLATE utf8_bin NOT NULL,
  `email` varchar(123) COLLATE utf8_bin NOT NULL,
  `password` varchar(213) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL,
  `role` varchar(11) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `user_id`, `role`) VALUES
(4, 'stu', 'yibeone@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', 8, 'student'),
(5, 'admin', 'yibeone@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', 3, 'admin'),
(15, 'director', '', '47bce5c74f589f4867dbd57e9ca9f808', 5, 'director'),
(16, 'region', '', '47bce5c74f589f4867dbd57e9ca9f808', 6, 'regional'),
(17, 'zone', '', '47bce5c74f589f4867dbd57e9ca9f808', 7, 'zone'),
(18, 'werda', '', '47bce5c74f589f4867dbd57e9ca9f808', 8, 'werda');

-- --------------------------------------------------------

--
-- Table structure for table `werda`
--

CREATE TABLE `werda` (
  `id` int(11) NOT NULL,
  `werda_name` varchar(123) COLLATE utf8_bin NOT NULL,
  `zone_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `werda`
--

INSERT INTO `werda` (`id`, `werda_name`, `zone_id`) VALUES
(1, 'Guagusa Shikudad', 1),
(2, 'Gozamen', 2),
(3, 'Welkayit', 4),
(4, 'Damot', 3),
(5, 'Lalibela', 6);

-- --------------------------------------------------------

--
-- Table structure for table `zone`
--

CREATE TABLE `zone` (
  `id` int(11) NOT NULL,
  `zone_name` varchar(123) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `zone`
--

INSERT INTO `zone` (`id`, `zone_name`) VALUES
(1, 'Awi'),
(2, 'East Gojjam'),
(3, 'west Gojjam'),
(4, 'North Gonder '),
(5, 'South Gonder'),
(6, 'North Welo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `werda_id` (`werda_id`),
  ADD KEY `zone_id` (`zone_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`idsc`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `school_id` (`school_id`),
  ADD KEY `address_id` (`address_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `address_id` (`address_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `werda`
--
ALTER TABLE `werda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zone_id` (`zone_id`);

--
-- Indexes for table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `idsc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `werda`
--
ALTER TABLE `werda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `zone`
--
ALTER TABLE `zone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`werda_id`) REFERENCES `werda` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `address_ibfk_2` FOREIGN KEY (`zone_id`) REFERENCES `zone` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`school_id`) REFERENCES `school` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `werda`
--
ALTER TABLE `werda`
  ADD CONSTRAINT `werda_ibfk_1` FOREIGN KEY (`zone_id`) REFERENCES `zone` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
