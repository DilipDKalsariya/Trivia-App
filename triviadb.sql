-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 16, 2020 at 03:26 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `triviadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `que_Id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_on` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`que_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`que_Id`, `question`, `created_on`, `updated_on`) VALUES
(1, 'What is your name ?', '2020-05-05 14:48:51', NULL),
(2, 'Who is the best cricketer in the world?', '2020-05-05 14:49:11', NULL),
(3, 'What are the colors in the Indian national flag?', '2020-05-05 14:49:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `answer_Id` int(11) NOT NULL AUTO_INCREMENT,
  `que_Id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_on` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`answer_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`answer_Id`, `que_Id`, `answer`, `created_on`, `updated_on`) VALUES
(30, 3, 'White,Orange,Green', '2020-09-15 21:44:46', NULL),
(29, 2, 'Sachin Tendulkar', '2020-09-15 21:44:46', NULL),
(28, 1, 'kaju', '2020-09-15 21:44:46', NULL),
(27, 3, 'White,Orange,Green', '2020-09-15 21:24:28', NULL),
(26, 2, 'Sachin Tendulkar', '2020-09-15 21:24:28', NULL),
(25, 1, 'raju', '2020-09-15 21:24:28', NULL),
(33, 3, 'White,Orange,Green', '2020-09-15 23:21:39', NULL),
(21, 3, 'White,Orange,Green', '2020-09-15 21:07:18', NULL),
(20, 2, 'Sachin Tendulkar', '2020-09-15 21:07:18', NULL),
(19, 1, 'Dilip', '2020-09-15 21:07:18', NULL),
(32, 2, 'Sachin Tendulkar', '2020-09-15 23:21:39', NULL),
(31, 1, 'Chigu', '2020-09-15 23:21:39', '2020-09-15 23:23:23'),
(34, 1, 'Ramesh', '2020-09-15 23:25:17', NULL),
(35, 2, 'Adam Gilchirst', '2020-09-15 23:25:17', NULL),
(36, 3, 'Yellow,Orange', '2020-09-15 23:25:17', NULL),
(37, 1, 'ramu', '2020-09-15 23:33:26', NULL),
(38, 2, 'Adam Gilchirst', '2020-09-15 23:33:26', NULL),
(39, 3, 'White,Orange', '2020-09-15 23:33:26', NULL),
(40, 1, 'test', '2020-09-15 23:38:43', NULL),
(41, 2, 'Sachin Tendulkar', '2020-09-15 23:38:43', NULL),
(42, 3, 'White,Yellow,Orange,Green', '2020-09-15 23:38:43', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
