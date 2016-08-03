
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 02, 2016 at 11:19 AM
-- Server version: 5.1.73
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u957103950_usrdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `TeacherCourse`
--

CREATE TABLE IF NOT EXISTS `TeacherCourse` (
  `Teacher_ID` int(11) NOT NULL,
  `Course_ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `TeacherCourse`
--

INSERT INTO `TeacherCourse` (`Teacher_ID`, `Course_ID`) VALUES
(1, 39),
(1, 7),
(1, 1),
(2, 9),
(2, 20),
(2, 31),
(3, 21),
(3, 32),
(4, 22),
(4, 41),
(5, 23),
(5, 30),
(6, 33),
(6, 40),
(8, 8),
(9, 10),
(10, 11),
(11, 12),
(11, 19),
(9, 24),
(12, 38),
(1, 13),
(2, 34),
(2, 4),
(3, 14),
(3, 25),
(4, 16),
(4, 37),
(5, 26),
(5, 28),
(6, 29),
(7, 36),
(13, 2),
(10, 3),
(14, 5),
(11, 6),
(10, 15),
(9, 17),
(11, 18),
(11, 27),
(13, 35),
(10, 44),
(-1, 28),
(10, 17),
(10, 17),
(1, 11),
(1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
