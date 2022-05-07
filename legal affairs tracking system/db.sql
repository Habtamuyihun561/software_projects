-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 06, 2021 at 12:51 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

DROP TABLE IF EXISTS `about_us`;
CREATE TABLE IF NOT EXISTS `about_us` (
  `mission` text NOT NULL,
  `vission` text NOT NULL,
  `background` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`mission`, `vission`, `background`) VALUES
('our mission is this', 'our vission is this', 'our background is this');

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'user',
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`, `role`) VALUES
('admin123', '1234', 'admin'),
('user123', '12345', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

DROP TABLE IF EXISTS `catagory`;
CREATE TABLE IF NOT EXISTS `catagory` (
  `case_type` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`case_type`) VALUES
('crime_register'),
('consulancy'),
('descipline'),
('human resource'),
('other civil');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` varchar(100) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `order_id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `catagory`, `comment`, `order_id`) VALUES
('case450', 'consulancy', 'fuck out', 9),
('', '', '', 10),
('', '', 'gvshjsjznxhhbjxdbzjk', 11);

-- --------------------------------------------------------

--
-- Table structure for table `consulancy`
--

DROP TABLE IF EXISTS `consulancy`;
CREATE TABLE IF NOT EXISTS `consulancy` (
  `case_id` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `taker_name` varchar(100) NOT NULL,
  `giver_name` varchar(100) NOT NULL,
  `case_status` varchar(200) NOT NULL,
  `body` text NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `username` varchar(100) NOT NULL,
  PRIMARY KEY (`case_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `consulancy`
--

INSERT INTO `consulancy` (`case_id`, `title`, `date`, `taker_name`, `giver_name`, `case_status`, `body`, `status`, `username`) VALUES
('case450', 'rule of law', '2019-05-17', 'habtamu', 'habtish', 'opened', 'i opened this case', 3, 'user123');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `office` varchar(200) NOT NULL,
  `other` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`email`, `phone`, `office`, `other`) VALUES
('habtishesu@gmail.com', '0930476974', 'number 148', 'telegram contact');

-- --------------------------------------------------------

--
-- Table structure for table `crime_register`
--

DROP TABLE IF EXISTS `crime_register`;
CREATE TABLE IF NOT EXISTS `crime_register` (
  `status` int NOT NULL DEFAULT '1',
  `case_id` varchar(100) NOT NULL,
  `case_name` varchar(100) NOT NULL,
  `case_date` varchar(20) NOT NULL,
  `acuser` varchar(100) NOT NULL,
  `clientent` varchar(100) NOT NULL,
  `place` varchar(200) NOT NULL,
  `case_status` varchar(100) NOT NULL,
  `case_description` longtext NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `crime_register`
--

INSERT INTO `crime_register` (`status`, `case_id`, `case_name`, `case_date`, `acuser`, `clientent`, `place`, `case_status`, `case_description`, `username`) VALUES
(2, 'case700', 'he shouted', '12/09/2013', 'root', 'selam', 'bit', 'closed', 'yes i didi it', 'user123');

-- --------------------------------------------------------

--
-- Table structure for table `descipline`
--

DROP TABLE IF EXISTS `descipline`;
CREATE TABLE IF NOT EXISTS `descipline` (
  `case_id` varchar(100) NOT NULL,
  `case_name` varchar(100) NOT NULL,
  `case_date` date NOT NULL,
  `name` varchar(100) NOT NULL,
  `case_status` varchar(200) NOT NULL,
  `body` text NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `username` varchar(100) NOT NULL,
  PRIMARY KEY (`case_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `descipline`
--

INSERT INTO `descipline` (`case_id`, `case_name`, `case_date`, `name`, `case_status`, `body`, `status`, `username`) VALUES
('cae120', 'resource', '0000-00-00', 'abebaw', 'tracked', 'what is going on', 2, 'user123');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `id` int NOT NULL AUTO_INCREMENT,
  `file_name` varchar(200) NOT NULL,
  `size` varchar(100) NOT NULL,
  `download` int NOT NULL,
  `status` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `file_name`, `size`, `download`, `status`) VALUES
(1, 'Capture1.PNG', '469169', 3, 0),
(2, 'Capture1.PNG.', '469169', 1, 0),
(3, 'h.jpg.', '105686', 1, 0),
(4, 'System Programmingnote.docx.', '251083', 2, 0),
(5, 'System Programmingnote.docx.', '251083', 1, 0),
(6, 'System Programmingnote.docx.', '251083', 0, 0),
(7, 'System Programmingnote.docx.', '251083', 1, 0),
(8, 'System Programmingnote.docx.', '251083', 0, 0),
(9, 'System Programmingnote.docx.', '251083', 0, 0),
(10, 'System Programmingnote.docx.', '251083', 4, 0),
(11, 'System Programmingnote.docx.', '251083', 1, 1),
(12, 'System Programmingnote.docx.', '251083', 1, 3),
(13, 'System Programmingnote.docx.', '251083', 0, 1),
(14, 'System Programmingnote.docx.', '251083', 0, 18),
(15, 'System Programmingnote.docx.', '251083', 0, 16),
(16, 'System Programmingnote.docx.', '251083', 0, 17),
(17, 'System Programmingnote.docx.', '251083', 0, 11),
(18, 'System Programmingnote.docx.', '251083', 1, 12),
(19, 'System Programmingnote.docx.', '251083', 0, 12);

-- --------------------------------------------------------

--
-- Table structure for table `human_resource`
--

DROP TABLE IF EXISTS `human_resource`;
CREATE TABLE IF NOT EXISTS `human_resource` (
  `case_id` varchar(100) NOT NULL,
  `case_name` varchar(200) NOT NULL,
  `case_date` varchar(100) NOT NULL,
  `acuser` varchar(100) NOT NULL,
  `clientent` varchar(200) NOT NULL,
  `place` varchar(200) NOT NULL,
  `case_status` varchar(200) NOT NULL,
  `case_description` text NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `username` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `human_resource`
--

INSERT INTO `human_resource` (`case_id`, `case_name`, `case_date`, `acuser`, `clientent`, `place`, `case_status`, `case_description`, `status`, `username`) VALUES
('case30', 'track', '12/09/2017', 'yooooo', 'thvxghv', 'bv mv ', 'closed', 'fxfbnv n bvn  v vv v bvv v vvv', 1, 'user123');

-- --------------------------------------------------------

--
-- Table structure for table `other_civil`
--

DROP TABLE IF EXISTS `other_civil`;
CREATE TABLE IF NOT EXISTS `other_civil` (
  `case_id` varchar(100) NOT NULL,
  `case_name` varchar(200) NOT NULL,
  `case_date` varchar(100) NOT NULL,
  `acuser` varchar(100) NOT NULL,
  `clientent` varchar(200) NOT NULL,
  `place` varchar(200) NOT NULL,
  `case_status` varchar(200) NOT NULL,
  `case_description` text NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `username` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `other_civil`
--

INSERT INTO `other_civil` (`case_id`, `case_name`, `case_date`, `acuser`, `clientent`, `place`, `case_status`, `case_description`, `status`, `username`) VALUES
('case30', 'track', '12/09/2017', 'yooooo', 'thvxghv', 'bv mv ', 'closed', 'fxfbnv n bvn  v vv v bvv v vvv', 1, 'user123');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

DROP TABLE IF EXISTS `training`;
CREATE TABLE IF NOT EXISTS `training` (
  `id` varchar(100) NOT NULL,
  `title` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `strat_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `orderer` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`orderer`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id`, `title`, `strat_date`, `end_date`, `body`, `orderer`) VALUES
('vshxzjb', 'wbdsd', 'wdhb', 'xbqb', 'xjbsjnkjnlms', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
