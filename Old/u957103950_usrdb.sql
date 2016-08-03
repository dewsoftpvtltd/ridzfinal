
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 02, 2016 at 11:26 AM
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
-- Table structure for table `Courses`
--

CREATE TABLE IF NOT EXISTS `Courses` (
  `Subject` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `Semester` varchar(11) COLLATE latin1_general_ci NOT NULL,
  `Fall_ID` int(11) NOT NULL,
  `timing` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `day` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `courseID` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`courseID`),
  KEY `courseID` (`courseID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=47 ;

--
-- Dumping data for table `Courses`
--

INSERT INTO `Courses` (`Subject`, `Semester`, `Fall_ID`, `timing`, `day`, `status`, `courseID`) VALUES
('Digital Image Processing', '7th', 1, '0', '', 'invalid', 34),
('Foriegen Languages', '7th', 1, '0', '', 'invalid', 35),
('Psychology', '7th', 1, '0', '', 'invalid', 36),
('Networking', '5th', 2, '0', '', 'invalid', 29),
('Visual Programming', '5th', 2, '0', '', 'invalid', 28),
('Assembly Language', '3rd', 3, '0', '', 'invalid', 14),
('Data Structure', '3rd', 3, '0', '', 'invalid', 13),
('Information Technology', '1st', 4, '0', '', 'invalid', 4),
('English Compulsory', '1st', 4, '0', '', 'invalid', 3),
('Object Oriented Programming', '2nd', 4, '9:00 to 9:45', 'Monday to Thursday', 'valid', 9),
('Islamic Studies', '1st', 4, '0', '', 'invalid', 2),
('Discrete Structure', '1st', 4, '0', '', 'invalid', 6),
('Programming Fundamental', '1st', 4, '0', '', 'invalid', 1),
('Basic Electronics', '1st', 4, '0', '', 'invalid', 5),
('Digital Logic Design', '2nd', 4, '8:15 to 9:00', 'Monday to Thursday', 'valid', 7),
('Database Systems', '3rd', 3, '0', '', 'invalid', 16),
('Probability and Statistics', '2nd', 4, '9:45 to 10:30', 'Tuesday and Wednesdy', 'valid', 8),
('Financial Accounting', '2nd', 4, '11:00 to 11:45', 'Monday & Wednesday', 'valid', 10),
('English compulsory', '2nd', 4, '11:45 to 12:30', 'Wednesday & Thursday', 'valid', 11),
('Calculus and Analytical Geometry', '2nd', 4, '12:30 to 1:15', 'Tuesday to Wednesday', 'valid', 12),
('English compulsory', '3rd', 3, '0', '', 'invalid', 15),
('Linear Algebra', '3rd', 3, '0', '', 'invalid', 18),
('Human Resource Mangment', '3rd', 3, '0', '', 'invalid', 17),
('Computer Architecture', '4th', 3, '8:15 to 9:00', 'Monday to Thursday', 'valid', 21),
('Web Engineering', '4th', 3, '9:45 to 10:30', 'Monday to Thursday', 'valid', 20),
('Algorithms', '4th', 3, '11:00 to 11:45', 'Monday to Thursday', 'valid', 23),
('Distributed Database Systems', '4th', 3, '9:00 to 9:45', 'Monday to Thursday', 'valid', 22),
('Multivariable Calculus ', '4th', 3, '1:15 to 2:00', 'tuesday and wednesdy', 'valid', 19),
('Marketing', '4th', 3, '11:45 to 12:30', 'Wednesday & Thursday', 'valid', 24),
('Operating System', '5th', 2, '0', '', 'invalid', 26),
('Diffrental Equation', '5th', 2, '0', '', 'invalid', 27),
('Theory of Automata', '6th', 2, '11:45 to 12:30', 'Monday to Thursday', 'valid', 33),
('Software Engineering  ', '5th', 2, '0', '', 'invalid', 25),
('Artificial Intelligence', '8th', 1, '11:00 to 11:45', 'Monday to Thursday', 'valid', 40),
('Numarical Computing ', '6th', 2, '8:15 to 9:00', 'Monday to Thursday', 'valid', 31),
('Professional Practices ', '8th', 1, '9:00 to 9:45', 'Monday to Thursday', 'valid', 39),
('International Relations', '8th', 1, '8:15 to 9:00', 'Tuesday & Thursday', 'valid', 38),
('Telecommunication Systems', '6th', 2, '9:00 to 9:45', 'Monday to Thursday', 'valid', 32),
('Human Computer Interaction', '8th', 1, '11:45 to 12:30', 'Monday to Thursday', 'valid', 41),
('abd', '1st', 2, '5-6', 'sunday', '2', 42),
('OS', '5th', 2, '3-4', 'sunday', 'invalid', 44);

-- --------------------------------------------------------

--
-- Table structure for table `Fall`
--

CREATE TABLE IF NOT EXISTS `Fall` (
  `FallName` int(10) NOT NULL,
  `Fall_ID` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Fall_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `Fall`
--

INSERT INTO `Fall` (`FallName`, `Fall_ID`) VALUES
(2012, 1),
(2013, 2),
(2014, 3),
(2015, 4),
(2016, 5),
(2017, 6);

-- --------------------------------------------------------

--
-- Table structure for table `Login`
--

CREATE TABLE IF NOT EXISTS `Login` (
  `Uname` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `Password` varchar(40) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `Role` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=33 ;

--
-- Dumping data for table `Login`
--

INSERT INTO `Login` (`Uname`, `Password`, `Role`, `ID`) VALUES
('Taimia', 'tam123', 'Teacher', 1),
('Hira', 'hira123', 'Teacher', 2),
('Rabia', 'rabia123', 'Student', 3),
('Rida', 'rida123', 'Student', 4),
('Laiba', 'laiba123', 'Student', 5),
('Ayesha', 'ayesha123', 'Student', 6),
('Arooj', 'arooj123', 'Student', 7),
('Gull', 'gull123', 'Student', 8),
('Mehak', 'mehak123', 'Student', 9),
('sajal', 'sajal123', 'student', 10),
('Fatima', 'fatima123', 'Teacher', 11),
('Sadia', 'sadia123', 'Teacher', 12),
('Maria', 'maria123', 'Teacher', 13),
('Fiza', 'fiza123', 'Teacher', 14),
('Farzana', 'farzana123', 'student', 15),
('Memoona', 'maria123', 'Teacher', 16),
('leela', 'fiza123', 'Teacher', 17),
('Tehreem', 'teh123', 'student', 18),
('sumbal', 'sum123', 'Teacher', 20),
('Mam Sumaira', 'sumaira123', 'Teacher', 22),
('Mam Amina', 'amina123', 'Teacher', 23),
('Mam Aqsa', 'aqsa123', 'Teacher', 24),
('Mam Fizzah', 'fizzah123', 'Teacher', 25),
('Mam Shumaila', 'shumaila123', 'Teacher', 26),
('Mam Nimrah', 'nimrah123', 'Teacher', 27),
('Miss Momina ', 'momina123', 'Teacher', 28),
('mam samrah', '12345', 'teacher', 29),
('Arzoo', 'arzoo123', 'Student', 30),
('Miss Ayza', 'ayza123', 'Teacher', 31),
('Manal', 'manal123', 'Student', 32);

-- --------------------------------------------------------

--
-- Table structure for table `result_grade`
--

CREATE TABLE IF NOT EXISTS `result_grade` (
  `ID` int(7) NOT NULL AUTO_INCREMENT,
  `Student_id` int(7) NOT NULL,
  `Subject` varchar(7) COLLATE latin1_general_ci NOT NULL,
  `Obtained_marks` int(7) NOT NULL,
  `Grade` varchar(7) COLLATE latin1_general_ci NOT NULL,
  `GPA` float NOT NULL,
  `fall_id` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT 'valid',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `result_grade`
--

INSERT INTO `result_grade` (`ID`, `Student_id`, `Subject`, `Obtained_marks`, `Grade`, `GPA`, `fall_id`, `status`) VALUES
(1, 4, '38', 500, 'A', 4, '1', 'valid'),
(2, 4, '39', 400, 'B', 3.5, '1', 'valid'),
(3, 5, '38', 458, 'A', 4, '1', 'valid'),
(4, 4, '40', 200, 'B', 2.9, '1', 'valid'),
(5, 4, '41', 250, 'B+', 3, '1', 'valid'),
(6, 1, '19', 108, 'A+', 3.8, '3', 'valid'),
(7, 1, '20', 200, 'B+', 3.5, '3', 'valid'),
(8, 1, '21', 250, 'B', 3.49, '3', 'valid'),
(9, 1, '22', 198, 'C', 2.9, '3', 'valid'),
(10, 1, '23', 210, 'A-', 3.2, '3', 'valid'),
(11, 1, '24', 180, 'B', 3, '3', 'valid');

-- --------------------------------------------------------

--
-- Table structure for table `Stud`
--

CREATE TABLE IF NOT EXISTS `Stud` (
  `Name` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `Roll_no` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `Address` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `Phone_no` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `std_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Email_Id` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `loginID` int(11) NOT NULL,
  `fall_ID` int(9) NOT NULL,
  PRIMARY KEY (`std_Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `Stud`
--

INSERT INTO `Stud` (`Name`, `Roll_no`, `Address`, `Phone_no`, `std_Id`, `Email_Id`, `loginID`, `fall_ID`) VALUES
('Rida', '6632', '548 E-block Multan , Sambazar Multan Roa', '0321763829', 1, 'rida_saghir@gmail.com', 4, 3),
('Gull mehak', '6610', 'H#123 Block ABC Multan Road Lahore', '0333-1234567', 2, 'gull_mehak11@gmail.com', 8, 4),
('Sajal mirza', '6635', 'H # 176 Block 345', '1234567', 3, 'sajal_mira@gmail.com', 10, 3),
('Rabia', '6630', 'Ichra, samnabad', '12345678', 4, 'rabia_nasir@gmail,com', 3, 1),
('Laiba Ajmal', '6785', 'moon maeket lahore', '5467899', 5, 'laiba_2@gmail.com', 5, 1),
('Manal', '66666', 'H # 176 Block 345', '0333-1234567', 15, 'manal.00@INS.com', 32, 6);

-- --------------------------------------------------------

--
-- Table structure for table `Teacher`
--

CREATE TABLE IF NOT EXISTS `Teacher` (
  `Name` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `Address` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `Phone_no` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `Email_Id` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `Qualification` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `loginID` int(11) NOT NULL,
  `department` varchar(15) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `Teacher`
--

INSERT INTO `Teacher` (`Name`, `Address`, `Phone_no`, `Email_Id`, `userID`, `Qualification`, `loginID`, `department`) VALUES
('Taimia Zia', 'Gulshan-e-Ravi', '03224977946', 'aeni.sweeti@gmail.com', 1, 'PHD', 1, 'CS'),
('Hira Akhtar Ali   ', 'SabzaZar  ', '0321764839', 'hira.akhtar11@gmail.com', 2, 'B.S.C.S', 2, 'CS'),
('Fatima', 'H#123 Block ABC Multan Road Lahore', '23223445', 'fatima_a123@gmail.com', 3, 'MSC', 11, 'CS'),
('Sadia', 'Gulshan Iqbal Town Lahore', '65783922', 'Sadia123@gmail.com', 4, 'M.Phill', 12, 'CS'),
('leela', 'nsjkhdk', '78326291', 'ghju@gmail;.com', 9, 'ghi', 17, 'Accounts'),
('Sumbal', 'Lahore ', '1234567', 'sumbal@gmailcom', 7, 'Bscs', 20, 'Psychology'),
('Memoona', 'hajoii storee', '78326382', ' bnjsbchjsdhk@gmail.com', 8, 'phd', 16, 'Statistics'),
('Fiza ', 'Lahore ', '1456782', 'Fiza_nasir', 6, 'Mcs', 14, 'CS'),
('Maria ', 'Samnabad ', '1235678', 'Maria_mahmood', 5, 'PHD', 13, 'CS'),
('Mam Sumaira', 'H#123 Block ABC Multan Road Lahore', '0333-1234567', 'sumaira_akbar@gmail.com', 10, 'P.H.D in Computer Science', 22, 'English'),
('Mam Amina', 'H#123 Block ABC Multan Road Lahore', '0123456789', 'amina_dilawar@gamil.com', 11, 'B.S.C.S', 23, 'Maths'),
('Mam Fizzah', 'H#123 Block ABC Multan Road Lahore', '0123456789', 'Fizzah_jahingir@gmail.com', 12, 'B.S.C.S', 25, 'Pak-Studies '),
('Mam Aqsa ', 'Samanabad', '34568', 'aqsa_23@gmai.com', 13, '', 24, 'Islamic Studies'),
('Mam Shumaila', 'gulashan rabi', '3456789', 'gnhi@g,ail.com', 14, 'phd', 26, 'Physics'),
('Miss Ayza ', 'abcd ', '000000000', 'ayza.000@INS.com', 16, 'B.S.C.S', 0, '');

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
(1, 1),
(5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `TeacherFall`
--

CREATE TABLE IF NOT EXISTS `TeacherFall` (
  `Teacher_ID` int(11) NOT NULL,
  `Fall_Id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `TeacherFall`
--

INSERT INTO `TeacherFall` (`Teacher_ID`, `Fall_Id`) VALUES
(2, 2),
(8, 4),
(3, 3),
(1, 4),
(2, 4),
(2, 3),
(3, 2),
(4, 3),
(4, 1),
(5, 3),
(1, 1),
(5, 2),
(6, 2),
(6, 1),
(2, 1),
(9, 4),
(10, 4),
(11, 4),
(11, 3),
(9, 3),
(12, 1),
(13, 4),
(14, 4),
(10, 3),
(11, 2),
(13, 1),
(7, 1),
(12, 5),
(16, 6),
(1, 6);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
