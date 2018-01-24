-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2018 at 08:19 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `announceID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `announceTitle` varchar(50) NOT NULL,
  `announceFile` varchar(150) NOT NULL,
  `announceDetail` varchar(150) NOT NULL,
  `announceDate` varchar(50) NOT NULL,
  `dateUploaded` datetime NOT NULL,
  `dateModified` datetime NOT NULL,
  `dateExpiry` datetime NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`announceID`, `userID`, `announceTitle`, `announceFile`, `announceDetail`, `announceDate`, `dateUploaded`, `dateModified`, `dateExpiry`, `status`) VALUES
(1, 1, 'shgjs', '', 'shfgk', '10-11-17', '2017-10-11 19:13:33', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Active'),
(2, 1, 'sdufyi', 'abc', 'shdgfkj', '10-11-17', '2017-10-11 19:17:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Active'),
(3, 1, 'DFHKJ', 'abc', 'AKJDF', '10-11-17', '2017-10-11 19:18:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Active'),
(4, 1, 'q', 'Doraemon3.jpg', 'q', 'q', '2017-10-11 19:42:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `apid` int(11) NOT NULL,
  `apfn` varchar(50) NOT NULL,
  `apln` varchar(50) NOT NULL,
  `apmn` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `birthdate` date NOT NULL,
  `age` tinyint(4) NOT NULL,
  `birthplace` varchar(150) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `civstat` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `addcity` varchar(150) NOT NULL,
  `addprov` varchar(150) DEFAULT NULL,
  `elemschool` varchar(50) NOT NULL,
  `secschool` varchar(50) NOT NULL,
  `tertschool` varchar(50) NOT NULL,
  `reasonleave` varchar(150) NOT NULL,
  `guardianame` varchar(50) DEFAULT NULL,
  `relationship` varchar(20) DEFAULT NULL,
  `fathername` varchar(50) NOT NULL,
  `fatherocc` varchar(50) NOT NULL,
  `mothername` varchar(50) NOT NULL,
  `motherocc` varchar(50) NOT NULL,
  `datesubmitted` datetime NOT NULL,
  `datemodified` datetime DEFAULT NULL,
  `studentstat` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`apid`, `apfn`, `apln`, `apmn`, `course`, `email`, `mobile`, `birthdate`, `age`, `birthplace`, `gender`, `civstat`, `nationality`, `religion`, `addcity`, `addprov`, `elemschool`, `secschool`, `tertschool`, `reasonleave`, `guardianame`, `relationship`, `fathername`, `fatherocc`, `mothername`, `motherocc`, `datesubmitted`, `datemodified`, `studentstat`, `status`) VALUES
(11, 'First', 'Last', 'Middle', 'Bachelor of Elementary Education', 'beper.ong@benilde.edu.ph', '(0926)047-2440', '2016-12-30', 22, 'Mamburao Occidental Mindoro', 'Transginger', 'Single', 'Filipino', 'Catholic', 'asdzxcasda', 'zxc', 'asdzxca', 'dzxcasdas', 'zvcads', 'asdzxcasd', '', '', 'xcvzafd', 'adsfsdfz', 'fdsafdsf', 'aadfsasdf', '2017-10-24 08:20:40', '2017-11-07 09:59:01', 'Approved', 'Closed'),
(12, 'Beper', 'Ong', 'Middle', 'BEE', 'beper.ong@benilde.edu.ph', '09260472440', '1995-11-06', 22, 'Mamburao Occidental Mindoro', 'Transginger', 'Single', 'Filipino', 'Catholic', 'asdzxcasda', 'zxc', 'MCS', 'OMNHS', 'Huh?', 'I hate the school bow\r\n', 'Cardo Dalisay', 'Waifu', 'Darth Vader', 'My father', 'Never met her', 'Single wut?!', '2017-10-24 08:48:04', '0000-00-00 00:00:00', 'Approved', 'Closed'),
(13, 'Beper', 'Ong', 'Test 3', 'BSE', 'beper.ong@benilde.edu.ph', '09260472440', '2012-09-28', 22, 'Mamburao Occidental Mindoro', 'She-male', 'Single', 'Filipino', 'Catholic', 'asdzxcasda', 'zxc', 'MCS', 'OMNHS', 'Huh?', 'I dont layk', '', '', 'Bernabe', 'Worker', 'Perla', 'Bahay', '2017-10-24 09:12:45', '2017-10-24 09:13:01', 'Pending', 'Archived'),
(14, 'Beper', 'Ong', 'Clenista', 'BSE - Major in Mathematics', 'beper.ong@benilde.edu.ph', '09260472440', '1995-02-27', 22, 'Occidental Mindoro', 'Male', 'Single', 'Filipino', 'Catholic', 'Sto. Cristo Street Binondo Manila', 'Mamburao Occidental Mindoro', 'MCS', 'OMNHS', 'OMNHS', 'Too much units dropped', '', '', 'Bernabe Ong', 'Businessman', 'Perla Ong', 'Housewife', '2017-10-31 11:13:13', '2017-11-03 09:21:15', 'Pending', 'Closed'),
(15, 'Beper', 'Ong', 'Test', 'BSE - Major in Filipino', 'beper.ong@benilde.edu.ph', '09260472440', '2000-01-30', 17, 'Occidental Mindoro', 'Male', 'Single', 'Chinese', 'Catholic', 'Sto. Cristo Street Binondo Manila', 'Mamburao Occidental Mindoro', 'MCS', 'OMNHS', 'OMNHS', 'nothing', 'qq', '', 'aDASCXC', 'mviadnav', 'mksdnadi', 'nmsfaiosdxzc', '2017-11-03 09:03:14', NULL, 'Approved', 'Closed'),
(16, 'Beper', 'Ong', 'Login test', 'Bachelor of Science in Computer Science', 'beper.ong@benilde.edu.ph', '(0926)047-2440', '1999-05-27', 18, 'Occidental Mindoro', 'Male', 'Single', 'Chinese', 'Catholic', 'Sto. Cristo Street Binondo Manila', 'Mamburao Occidental Mindoro', 'MCS', 'OMNHS', 'OMNHS', 'asdkjocjas', '', '', 'Bernabe Ong', 'Businessman', 'Perla Ong', 'Housewife', '2017-11-08 08:12:56', NULL, 'Pending', 'Active'),
(17, 'Beper Test', 'Ong', 'Test', 'BSE- Major in English', 'beper.ong@benilde.edu.ph', '09260472440', '1992-06-18', 25, 'Occidental Mindoro', 'Male', 'Single', 'Filipino', 'Catholic', 'Sto. Cristo Street Binondo Manila', '', 'MCS', 'OMNHS', 'OMNHS', 'Reasoon', '', '', 'Bernabe Ong', 'Businessman', 'Perla Ong', 'Housewife', '2017-11-08 10:30:08', NULL, 'Approved', 'Closed'),
(18, 'Shaun Xavier', 'Pascual', 'Beper Test', 'BSE - Major in Mathematics', 'bep@yahoo.com', '09260472440', '1996-04-24', 21, 'Occidental Mindoro', 'Male', 'Single', 'Filipino', 'Catholic', 'Sto. Cristo Street Binondo Manila', '', 'MCS', 'OMNHS', 'OMNHS', 'Test', '', '', 'Bernabe Ong', 'Businessman', 'Perla Ong', 'Housewife', '2017-11-08 12:17:48', '2017-11-08 12:18:42', 'Approved', 'Closed'),
(19, '1sjaiu', 'Pasudasucj', 'ASDJashdah', 'BSE- Major in English', 'shaunmxm@gmail.com', '(0977)750-1264', '0496-02-10', 127, 'Manilaj', 'Make', 'sdjsdjas', 'Chinese', 'Mahsdjasd', 'Pasjdajsd', 'AKSDasdjasj', 'KASDsdfsjd', 'JASdahsdhashd', 'KDASJDA', 'FIAled', 'AJSDJASJDAsd', 'ASJdjasjd', 'ASDASJDFSD', 'ASDKASDKA', 'AKJSDJASDJA', 'AKSDJASDJASd', '2017-11-09 12:59:33', NULL, 'Approved', 'Closed');

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `assignID` int(11) NOT NULL,
  `classID` int(11) NOT NULL,
  `assignFile` varchar(150) NOT NULL,
  `assignDesc` varchar(150) NOT NULL,
  `assignTitle` varchar(50) NOT NULL,
  `dateUploaded` datetime NOT NULL,
  `dateModified` datetime NOT NULL,
  `dateExpiry` datetime NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`assignID`, `classID`, `assignFile`, `assignDesc`, `assignTitle`, `dateUploaded`, `dateModified`, `dateExpiry`, `status`) VALUES
(1, 2, 'download.txt', 'try', 'test', '2017-11-08 15:19:17', '0000-00-00 00:00:00', '2018-05-08 15:19:17', 'Active'),
(2, 2, 'things_to_do_friday.txt', 'Test', 'Test', '2017-11-08 17:15:25', '0000-00-00 00:00:00', '2018-05-08 17:15:25', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `auditlogs`
--

CREATE TABLE `auditlogs` (
  `auditID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `auditDesc` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auditlogs`
--

INSERT INTO `auditlogs` (`auditID`, `userID`, `auditDesc`, `timestamp`, `status`) VALUES
(1, 11410020, '$2y$10$Paaa31jLytojwEun8CYSt.5G9GAChZwerlRrbXgqRvb', '2017-11-08 09:31:01', ''),
(2, 11210032, '$2y$10$97Z2wvhDh86npDvOqdhZ4OYgHju74U.dXx2egvD5vE1', '2017-11-08 11:15:11', ''),
(3, 11210032, '$2y$10$97Z2wvhDh86npDvOqdhZ4OYgHju74U.dXx2egvD5vE1', '2017-11-09 12:13:25', '');

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `blockID` int(255) NOT NULL,
  `blockCode` varchar(255) DEFAULT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`blockID`, `blockCode`, `status`) VALUES
(1, 'TI101', 'Active'),
(2, 'TI102', 'Active'),
(3, 'Semento', 'Archive'),
(4, 'TE003', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `classID` int(11) NOT NULL,
  `subjectID` int(11) NOT NULL,
  `facultyID` int(11) NOT NULL,
  `timeSlotID` int(11) NOT NULL,
  `academicYear` varchar(4) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`classID`, `subjectID`, `facultyID`, `timeSlotID`, `academicYear`, `semester`, `remarks`, `status`) VALUES
(1, 1, 1, 1, '2017', '1st', '', 'Active'),
(2, 1, 1, 1, '2018', '1st', '', 'Active'),
(3, 1, 9, 1, '2018', '1ST', '', 'Active'),
(4, 1, 33, 2, '2018', '2nd', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `classlist`
--

CREATE TABLE `classlist` (
  `classListID` int(11) NOT NULL,
  `classID` int(11) NOT NULL,
  `studentID` int(11) NOT NULL,
  `remarks` int(11) NOT NULL,
  `dateAdded` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classlist`
--

INSERT INTO `classlist` (`classListID`, `classID`, `studentID`, `remarks`, `dateAdded`) VALUES
(1, 0, 0, 0, 0),
(2, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `dlID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `lessonID` int(11) NOT NULL,
  `assignID` int(11) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `facultyID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `sujectID` int(11) NOT NULL,
  `remarks` varchar(100) DEFAULT NULL,
  `dateAdded` datetime NOT NULL,
  `dateModified` datetime NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `lessonID` int(11) NOT NULL,
  `classID` int(11) NOT NULL,
  `lessonFile` varchar(150) NOT NULL,
  `lessonDesc` varchar(150) NOT NULL,
  `lessonTitle` varchar(50) NOT NULL,
  `dateUploaded` datetime NOT NULL,
  `dateModified` datetime NOT NULL,
  `dateExpiry` datetime NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `studentID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `blockID` int(11) NOT NULL,
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentID`, `userID`, `blockID`, `dateAdded`, `dateModified`, `status`) VALUES
(1, 1, 1, '2017-09-30 05:54:54', '2017-09-30 05:56:23', 'Active'),
(2, 32, 1, '2017-11-08 03:34:20', '2017-11-08 10:34:20', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sujectID` int(11) NOT NULL,
  `subjectCode` varchar(7) NOT NULL,
  `subjectName` varchar(100) NOT NULL,
  `subjectType` varchar(50) NOT NULL,
  `units` int(11) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sujectID`, `subjectCode`, `subjectName`, `subjectType`, `units`, `status`) VALUES
(1, 'Eng1', 'English Communication 1', 'Lecture', 3, 'Active'),
(2, 'Fil1', 'Sining ng Komunikasyon', 'Lecture', 3, 'Active'),
(3, 'SocSci1', 'Philippine History', 'Lecture', 3, 'Active'),
(4, 'Math1', 'College Algebra', 'Lecture', 3, 'Active'),
(5, 'Psycho1', 'General Psychology', 'Lecture', 3, 'Active'),
(6, 'ComSciA', 'Orientation in Information Technology', 'Lecture', 3, 'Active'),
(7, 'ComSci1', 'Computer Fundamentals', 'Lecture', 3, 'Active'),
(8, 'PE1', 'Self Testing Activities', 'P.E.', 2, 'Active'),
(9, 'Eng2', 'English Communication 2', 'Lecture', 3, 'Active'),
(10, 'Fil2', 'Pagbasa at Pagsulat sa ibat-ibang Disciplina', 'Lecture', 3, 'Active'),
(11, 'ComSciB', 'Code of Ethics for Filipino IT Professionals', 'Lecture', 3, 'Active'),
(12, 'ComSci2', 'Fund. of Prob Solving & Quality Process', 'Lecture', 3, 'Active'),
(13, 'SocSci2', 'Basic Economics w/ TAR', 'Lecture', 3, 'Active'),
(14, 'SocSci5', 'Life, Works & Writings of Rizal', 'Lecture', 3, 'Active'),
(15, 'Math3', 'Trigonometry/Analytical Geometry', 'Lecture', 3, 'Active'),
(16, 'PE2', 'Fundamentals of Rhythmic Activities', 'P.E.', 2, 'Active'),
(17, 'Eng4', 'Modern Communication 2', 'Lecture', 3, 'Active'),
(18, 'Philo1', 'Philosophy of Man', 'Lecture', 3, 'Active'),
(19, 'Math5', 'Discrete Math', 'Lecture', 3, 'Active'),
(20, 'SocSci4', 'Politics & Governance w/ Phil. Const.', 'Lecture', 3, 'Active'),
(21, 'ComSci3', 'Fundamentals of Programming', 'Lecture', 3, 'Active'),
(22, 'ComSci4', 'Quality Consciousness Habit & Processes', 'Lecture', 3, 'Active'),
(23, 'PE3', 'Group Names', 'P.E.', 2, 'Active'),
(24, 'Eng5', 'Modern Communication 3', 'Lecture', 3, 'Active'),
(25, 'Educ4', 'Values Education/Professional Ethics', 'Lecture', 3, 'Active'),
(26, 'ComSci5', 'Logic, Designs & Digital Computer Circuits', 'Lecture', 3, 'Active'),
(27, 'ComSci6', 'Data Structure', 'Lecture', 3, 'Active'),
(28, 'PE4', 'Social Recreation', 'P.E.', 3, 'Active'),
(29, 'CWTS101', 'Civic Welfare 1', 'Lecture', 3, 'Active'),
(30, 'CWTS102', 'Civic Welfare 2', 'Lecture', 3, 'Active'),
(31, 'NatSci4', 'Physics 1', 'Lecture', 3, 'Active'),
(32, 'SocSci6', 'Society & Culture w/ Family Planning', 'Lecture', 3, 'Active'),
(33, 'Math2', 'Statistics/Probability', 'Lecture', 3, 'Active'),
(34, 'PDPR', 'Personality Development & Public Relation', 'Lecture', 3, 'Active'),
(35, 'Lit1', 'Literatures of the Philippines', 'Lecture', 3, 'Active'),
(36, 'Math6', 'Analysis 1 (Problem Solving w/ Quantity Process)', 'Lecture', 3, 'Active'),
(37, 'NatSci5', 'Physics 2', 'Lecture', 3, 'Active'),
(38, 'ComSci7', 'Principles of Programming Language', 'Lecture', 3, 'Active'),
(39, 'ComSci8', 'Principles of File Organization', 'Lecture', 3, 'Active'),
(40, 'ComSci9', 'Intro to Computer System Organization', 'Lecture', 3, 'Active'),
(41, 'Mgt1', 'Principles of Management', 'Lecture', 3, 'Active'),
(42, 'Lit2', 'Literature of the World', 'Lecture', 3, 'Active'),
(43, 'Math7', 'Abstract Algebra', 'Lecture', 3, 'Active'),
(44, 'Fil3', 'Retorika', 'Lecture', 3, 'Active'),
(45, 'SocSci7', 'Introduction to Sociology', 'Lecture', 3, 'Active'),
(46, 'Math8', 'Discrete Math 2', 'Lecture', 3, 'Active'),
(47, 'Educ1', 'Principles and Methods of Teaching', 'Lecture', 3, 'Active'),
(48, 'ComSciC', 'Computer Graphics', 'Lecture', 3, 'Active'),
(49, 'ComSciD', 'Object Oriented Programming', 'Lecture', 3, 'Active'),
(50, 'ComSciE', 'Introduction to Software Engineering', 'Lecture', 3, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `timeslots`
--

CREATE TABLE `timeslots` (
  `timeSlotID` int(11) NOT NULL,
  `dayOfWeek` varchar(10) NOT NULL,
  `startTime` varchar(50) NOT NULL,
  `endTime` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeslots`
--

INSERT INTO `timeslots` (`timeSlotID`, `dayOfWeek`, `startTime`, `endTime`, `status`) VALUES
(1, 'mwf', '08:00', '09:30', 'Active'),
(2, 'MWF', '9:00', '10:30', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userIDNo` int(11) NOT NULL,
  `userTypeID` int(11) NOT NULL,
  `userLN` varchar(50) NOT NULL,
  `userFN` varchar(50) NOT NULL,
  `userMN` varchar(50) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPassword` varchar(300) NOT NULL,
  `userMobile` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `course` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `age` tinyint(4) NOT NULL,
  `birthplace` varchar(150) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `civstat` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `addcity` varchar(150) NOT NULL,
  `addprov` varchar(150) DEFAULT NULL,
  `elemschool` varchar(50) NOT NULL,
  `secschool` varchar(50) NOT NULL,
  `tertschool` varchar(50) NOT NULL,
  `guardian` varchar(100) DEFAULT NULL,
  `relation` varchar(30) DEFAULT NULL,
  `fathername` varchar(100) NOT NULL,
  `fatherocc` varchar(50) NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `motherocc` varchar(50) NOT NULL,
  `dateadded` datetime NOT NULL,
  `datemodified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userIDNo`, `userTypeID`, `userLN`, `userFN`, `userMN`, `userEmail`, `userPassword`, `userMobile`, `status`, `course`, `birthdate`, `age`, `birthplace`, `gender`, `civstat`, `nationality`, `religion`, `addcity`, `addprov`, `elemschool`, `secschool`, `tertschool`, `guardian`, `relation`, `fathername`, `fatherocc`, `mothername`, `motherocc`, `dateadded`, `datemodified`) VALUES
(1, 1, 1, 'Kho', 'Hidden', 'Que', 'hiddenkho@outlook.com', '$2y$10$1/4ENc8h6Ske/jBSk9sqiedU2SSMEvr94ptBT5GnaoQ2yToQP30Ye', '(0917)000-0001', 'Active', '', '1980-02-07', 37, 'Metro Manila', 'Male', 'Married', 'Filipino', 'Catholic', 'Pasay City', 'N/A\r\n', 'sample', 'sample', 'sample', 'mike', 'cousin', 'Lyold', 'sample', 'Elizabeth', 'sample', '2018-01-18 09:52:14', NULL),
(2, 2, 1, 'Dallas', 'Israel', 'Quinones', 'mangkaknorr@outlook.com', '$2y$10$RE3xMvuTunnyVS1OraGVKeLEcm9ePtkhmphnvhh1J9J.tkusjVxx6', '(0917)000-0002', 'Active', '', '1978-07-13', 39, 'Masbate', 'Female', 'Married', 'Filipino', 'Catholic', 'Metro Manila', 'Masbate', 'sample', 'sample', 'sample', 'anton', 'uncle', 'john', 'farmer', 'lyza', 'store owner', '2018-01-18 09:58:07', NULL),
(3, 3, 1, 'Hernandez', 'Shea', 'Acebedo', 'cheatermirienda@outlook.com', '$2y$10$dIEA7hfykoclxuC4gyoKW.AH8kRF3DRlfFyYe613lVX80LsDov9ba', '(0017)000-0003', 'Active', '', '1982-11-12', 35, 'Metro Manila', 'Female', 'Married', 'Filipino', 'Catholic', 'Paranaque', 'N/A', 'sample', 'sample', 'sample', 'Anna', 'Nanny', 'Lucas', 'mechanics', 'ryza', 'call center', '2018-01-18 10:02:33', NULL),
(4, 4, 4, 'Luciano', 'Catherine', 'Aquino', 'catherinejalili@outlook.com', '$2y$10$GJQDSPkLXqqGXsDZXpCF/uUth.i.iwQNutweTU7zanajknQpDt3EC', '(0917)000-0004', 'Active', '', '1986-08-12', 31, 'Metro Manila', 'Female', 'Single', 'Filipino', 'Catholic', 'Las Pinas', 'N/A', 'sample', 'sample', 'sample', 'Juan', 'Cousin', 'Noel', 'Store Owner', 'Jen', 'store owner', '2018-01-18 10:07:50', NULL),
(5, 5, 4, 'Legazpi', 'Franco', 'Dacudag', 'zsazsagrain@outlook.com', '$2y$10$.UJs18GxNyyKShh5a2cszu16NOKBdk.Nbwxvb7u0qGyMzP3g91UMS', '(0917)000-0005', 'Active', '', '1983-07-13', 34, 'metro manila', 'Male', 'Married', 'Filipino', 'Catholic', 'malabon', 'n/a', 'sample', 'sample', 'sample', 'Analiza', 'Grand Mother', 'henry', 'officer', 'jean', 'teacher', '2018-01-18 10:15:08', NULL),
(6, 6, 4, 'Dimaunahan', 'stanley', 'Gordon', 'hugejackedman@outlook', '$2y$10$aKde.eH4jYxBGGUctCF3zeh2lP1P87jX8/ojflNzWrf5F3qb5lwu6', '(0917)000-0006', 'Active', '', '1984-04-18', 33, 'metro manila', 'Male', 'Single', 'Filipino', 'Catholic', 'quezon', 'n/a', 'sample', 'sample', 'sample', 'none', 'none', 'sean', 'Computer analysts', 'nadine', 'Shoe maker', '2018-01-18 10:19:59', NULL),
(7, 20181001, 2, 'Razon', 'Perry', 'Espana', 'williebayolie@outlook.com', '$2y$10$/VSDt/CspN.tDUYeo50EQ.D00yT09SGi7F//iYpbiaF8He3B369r2', '(0917)000-0007', 'Active', '', '1974-07-12', 43, 'Iloilo', 'Female', 'Married', 'Filipino', 'Catholic', 'manila', 'iloilo', 'sample', 'sample', 'sample', 'Tony', 'Brother', 'Kaden', 'farmer', 'Sally', 'housewife', '2018-01-18 12:29:43', NULL),
(8, 20181002, 2, 'Arabejo', 'Natalio', 'Dumlao', 'broadpete@outlook.com', '$2y$10$DlFH2SJeoG2qs5SoNk1WTOnWtE.l7mAdV0YCKXu9guolQvlgk0Lhu', '(0917)000-0008', 'Active', '', '1990-09-05', 27, 'Metro Manila', 'Male', 'Single', 'Filipino', 'Catholic', 'Pasig City', 'n/a', 'sample', 'sample', 'sample', 'Theo', 'Father', 'Theo', 'Teacher', 'Elvita', 'Nurse', '2018-01-18 12:33:59', NULL),
(9, 20181003, 2, 'Peterson', 'Abby', 'Alejo', 'roadtheedothirteen@outlook.com', '$2y$10$7u05rv82tq1RIrnnPlZrv.tkCXrFJvE6bYI5vs2d0WLWEanuDRSWe', '(0917)000-0009', 'Active', '', '1987-02-11', 30, 'Metro Manila', 'Female', 'Married', 'Filipino', 'Catholic', 'Manila', 'n/a', 'sample', 'sample', 'sample', 'Harry', 'Cousin', 'Stephen', 'Broadcaster', 'Gail', 'Librarian', '2018-01-18 12:38:14', NULL),
(10, 20181004, 2, 'Roxas', 'Leah', 'Quiason', 'antoniusthrillianus@outlook.com', '$2y$10$3ptLlMqF23MdqNtIVjy.6OIt30Un.kxSq1s.XgeDZ3RbJexH1zjIC', '(0917)000-0010', 'Active', '', '1966-08-07', 51, 'Metro Manila', 'Female', 'Married', 'Filipino', 'Evangelical', 'Manila', 'n/a', 'sample', 'sample', 'sample', 'Jerry', 'Cousin', 'Sam', 'Architect', 'Martha', 'Designer', '2018-01-18 12:50:14', NULL),
(11, 20181005, 2, 'Salvador', 'Ronaldo', 'Omar', 'robbingpaddillus@gmail.com', '$2y$10$AzJGYLx3ixb9u2joc1KsMOCZ/dYkv3iz7q9jQAElMqsypVNzm3HuS', '(0917)000-0011', 'Active', '', '1980-12-29', 37, 'Metro Manila', 'Male', 'Married', 'Filipino', 'Catholic', 'Quezon City', 'n/a', 'sample', 'sample', 'sample', 'Jake', 'Brother', 'Marcel', 'Journalist', 'Elsa', 'Store Owner', '2018-01-18 13:28:09', NULL),
(12, 20181006, 2, 'Ortega', 'Elisa', 'Fajardo', 'dannietargaryano@gmail.com', '$2y$10$LAOqD4UEARfHJaqzCFOO5.vmp3HcsENWMkfweQyBDySTF1rdmUZZe', '(0917)000-0012', 'Active', '', '1988-04-27', 29, 'Leyte', 'Female', 'Married', 'Filipino', 'Catholic', 'Manila', 'Leyte', 'sample', 'sample', 'sample', 'Rey', 'Brother', 'Zion', 'Artist', 'Catalina', 'Artist', '2018-01-18 13:39:51', NULL),
(13, 20181007, 2, 'Moreno', 'Simon', 'Davis', 'itimnabalo@gmail.com', '$2y$10$ptQE.9enO/NS9Q75XNBJh.OwS3ir1FfmetxAwSsCVAROFcglwVHS.', '(0917)000-0013', 'Active', '', '1990-03-31', 27, 'Metro Manila', 'Male', 'Single', 'Filipino', 'Evangelical', 'Manila', 'n/a', 'sample', 'sample', 'sample', 'Analiza', 'Mother', 'Hernando', 'Teacher', 'Analiza', 'Teacher', '2018-01-18 13:43:50', NULL),
(14, 20181008, 2, 'Arcega', 'Emesta', 'Camat', 'iskarlatangbruha@gmail.com', '$2y$10$WcHGEiOUvVDgsjE2g0ELC.RxCTRhX5DbLzkBOoff.XS7vrKnZdHEi', '(0917)000-0014', 'Active', '', '1990-08-30', 27, 'Metro Manila', 'Female', 'Single', 'Filipino', 'Evangelical', 'Manila', 'n/a', 'sample', 'sample', 'sample', 'Belicia', 'Mother', 'Marcos', 'mechanics', 'Maria', 'Analyst', '2018-01-18 14:33:08', NULL),
(15, 20181009, 2, 'Fernandez', 'Ryan', 'Lacson', 'vicksuetoe321@gmail.com', '$2y$10$OQpGMBnyvgRI2zKUxoN9aOIMa8IbUTBW/NT1Oaa4llGmAmLjA.rfm', '(0917)000-0015', 'Active', '', '1981-11-28', 36, 'Metro Manila', 'Male', 'Married', 'Filipino', 'Catholic', 'Manila', 'n/a', 'sample', 'sample', 'sample', 'Henry', 'Father', 'Henry', 'Optalmologist', 'Jane', 'Nurse', '2018-01-18 14:38:07', NULL),
(16, 20181010, 2, 'Pavia', 'Marilyn', 'Daplas', 'ianmanoy24@yahoo.com', '$2y$10$aNIcpgKMpnfRorG6luaQW.PxLlqVGM79eaMs7WF3Jr.zHO8hbCUhq', '(0917)000-0016', 'Active', '', '1988-08-01', 29, 'Cebu', 'Female', 'Married', 'Filipino', 'Catholic', 'Manila', 'Cebu', 'sample', 'sample', 'sample', 'Athena', 'Sister', 'Alfredo', 'Farmer', 'Sandra', 'store owner', '2018-01-18 14:50:55', NULL),
(17, 11810001, 3, 'Blake', 'Ian', 'Veneracion', 'ianmanoy24@yahoo.com', '$2y$10$A96ICsumikc8O8DOO/3.cO3Fp8G.hAckH3V/kXgZdNJ.t6UWl30.K', '(0926)010-1010', 'Active', '', '1998-07-12', 19, 'St Luke\'s Hospital', 'Male', 'Single', 'Filipino', 'Catholic', 'Binondo Manila', '', 'Mamburao Central School', 'Sample', 'Sample', '', '', 'Kiko Magalona', 'Rapper', 'Michaela Baldos', 'Housewife', '2018-01-19 09:37:59', NULL),
(18, 11810002, 3, 'Sanchez', 'Victoria', 'Lopez', 'victorsanchz416@yahoo.com', '$2y$10$LW78zDXeaJsqenPtmUa4xuW6hfR2ckCWO5bPbEMA7PtkOhrWnh7gW', '(0995)012-5354', 'Active', '', '1995-06-13', 22, 'UST Hospital', 'Female', 'Single', 'Filipino', 'Christian', 'Sta. Cruz Manila', '', 'Sample', 'Sample', 'Sample', '', '', 'Mike Enriquez', 'Reporter', 'Jessica Soho', 'Reporter', '2018-01-19 09:42:18', NULL),
(19, 11810003, 3, 'Go', 'Troy', 'Tan', 'troymanoi69@yahoo.com', '$2y$10$oDwYkLlVlgzxnc9/RFbIq.9vvykDr7JBsXXroq2TotmfpJiJh4MW2', '(0995)613-5421', 'Active', '', '0197-05-28', 127, 'Philippine General Hospital', 'Male', 'Single', 'Chinese', 'Buddhism', 'Bonifacio Global City Taguig, Manila', '', 'Sample Data', 'Sample Data', 'Sample Data', '', '', 'Henry Sy', 'Chinese Mogul', 'Korina Sanchez', 'Reporter', '2018-01-19 09:44:58', NULL),
(20, 11810004, 3, 'Ong', 'Beper', 'Clenista', 'beper.ong@benilde.edu.ph', '$2y$10$AOebJRgvwb/e5MqJLrxvr.3oSrsANpSesDw2lMnABMR3flmHRgeCe', '(0926)047-2440', 'Active', '', '1995-02-27', 22, 'Mamburao Occidental Mindoro provincial hospital', 'Male', 'Single', 'Filipino', 'Catholic', 'Sto. Cristo Street Binondo Manila\r\n', '', 'Mamburao Central School', 'Occidental Mindoro National Highschool', 'Occidental Mindoro National Highschool', '', '', 'Bernabe Ong', 'Businessman', 'Perla Ong', 'Businesswoman', '2018-01-19 09:46:50', NULL),
(21, 11810005, 3, 'Zaguirre', 'Sheila Mae', 'Polhen', 'sheila.zaguirre@benilde.edu.ph', '$2y$10$3q1rzgxiZsGM.Dlb./VS0uTF/gW9Y34zcZ1QOHZUEuLvLP1pOColS', '(0915)905-0303', 'Active', '', '1997-11-13', 20, 'San Juan de Dios general Hospital', 'Female', 'Single', 'Chinese', 'Catholic', 'Pasay City', '', 'Gideon Academy', 'Gideon Academy', 'DLS-CSB', '', '', 'James Zaguirre', 'Businessman', 'Lilibeth Zaguirre', 'Store owner', '2018-01-19 09:49:43', NULL),
(22, 11810006, 3, 'Pascual', 'Shaun Xavier', 'Gideon', 'shaunxavierpascual@gmail.com', '$2y$10$v3R8.ftBWyl1GZlaQHUpCONYBjQ8yh0xWWlGHJNJFkaW8v.H/ySQO', '(0915)151-5151', 'Active', '', '1996-10-13', 21, 'Chinese General Hospital', 'Male', 'Single', 'Filipino', 'Catholic', 'Navotas City', '', 'GAPC', 'GAPC', 'Sample', '', '', 'Michael Jordan', 'Basketball Legend', 'Oprah Winfrey', 'Smile giver', '2018-01-19 09:52:18', NULL),
(23, 11810007, 3, 'Villanueva', 'Miko', 'Ganda', 'mikovillanueva96@gmail.com', '$2y$10$ERrEDdJev7Q2OLmsDqTkVuLRyMz8q6dXFJpY0Y8IbYXCxDbBNQbJK', '(0915)161-1300', 'Active', '', '1996-02-15', 21, 'Sample', 'Male', 'Single', 'Filipino', 'Catholic', 'Sample\r\n', '', 'Gideon Academy', 'Sample', 'DLS-CSB', '', '', 'Manny Pacquiao', 'Boxer', 'Kris Aquino', 'Host', '2018-01-19 09:54:31', NULL),
(24, 11810008, 3, 'Ozawa', 'Maria', 'Sample', 'marialim675@yahoo.com', '$2y$10$UnySz/41TYogJPXsG05sQuZC.8/VkLLveaaHItuzy4nPuariKoqZm', '(0915)222-2151', 'Active', '', '1997-05-14', 20, 'Sample', 'Female', 'Single', 'Filipino', 'Catholic', 'Sample\r\n', '', 'Sample', 'Sample', 'Sample', '', '', 'Ralph Comia', 'None', 'Julienna Santos', 'Developer', '2018-01-19 09:56:24', NULL),
(25, 11810009, 3, 'James', 'Lebron', 'Brown', 'jameslebron41@outlook.com', '$2y$10$OlTdbbG40dmFhe5hMOoTveAiN.WRHOy9argdgOeAQs78LxVT9U.Xi', '(0999)158-7563', 'Active', '', '1997-02-15', 20, 'Sample', 'Male', 'Single', 'Filipino', 'Catholic', 'Sample', '', 'Sample', 'Sample', 'Sample', '', '', 'James Senior', 'Basketball player', 'Lilybeth Comia', 'Store owner', '2018-01-19 09:59:21', NULL),
(26, 11810010, 3, 'Santos', 'Julienne', 'Limpin', 'johnmor556@yahoo.com', '$2y$10$a4Xqre5v6nmF07vzPcOGpe.nq9KuU.BwoDY14.ssfPsV0NrgfSFpC', '(0915)678-4954', 'Active', '', '1995-01-26', 22, 'Sample', 'Female', 'Single', 'Filipino', 'Catholic', 'Sample', '', 'Sample', 'Sample', 'Sample', '', '', 'Julio Santos', 'Seaman', 'Jane Santos', 'Housewife', '2018-01-19 10:02:52', NULL),
(27, 11810011, 3, 'Comia', 'Ralph', 'Gavan', 'mikejordan64@outlook.com', '$2y$10$4HnNMw2U6048sWfWQrvLMu1Fn95uKk582eHmQSf51Y775e8j/dLkO', '(0915)624-8103', 'Active', '', '1996-01-08', 22, 'Sample', 'Male', 'Single', 'Filipino', 'Catholic', 'Sample', '', 'Sample', 'Sample', 'Sample', '', '', 'Manny Comia', 'OFW', 'Mandy Comia', 'OFW', '2018-01-19 10:05:53', NULL),
(28, 11810012, 3, 'Valmeo', 'Bianca', 'Teng', 'irvingkyrie32@outlook.com', '$2y$10$HPZ.rRspRa/PDzQ80Xz/C.TPefPlvdJFdIZMa8ksI1.fl/FhEWAU6', '(0916)842-6849', 'Active', '', '1995-02-15', 22, 'Sample', 'Female', 'Single', 'Filipino', 'Catholic', 'Sample', '', 'Sample', 'Sample', 'Sample', '', '', 'Blake Valmeo', 'Cashier', 'Joan Valmeo', 'Architech', '2018-01-19 10:07:44', NULL),
(29, 11810013, 3, 'Talimban', 'Bea', 'Supot', 'stephcarry1@outlook.com', '$2y$10$PbFFtPqAtk0X1j/BgyXz3u2MnJo7BDHNntUzc7qba26ClyEThp1Le', '(0915)846-9555', 'Active', '', '1996-03-16', 21, 'Sample', 'Female', 'Single', 'Filipino', 'Catholic', 'Sample', '', 'Sample', 'Sample', 'Sample', '', '', 'John Talimban', 'Engineer', 'Joan Talimban', 'Teacher', '2018-01-19 10:11:11', NULL),
(30, 11810014, 3, 'Estera', 'Gian', 'Baldoza', 'junanaksjanah@yahoo.com', '$2y$10$3cJLyEdCXZDOnwOJuHGUD.tBdZFxUTzHfv2B830YGIep9jZKLmjHK', '(0915)984-6222', 'Active', '', '1996-12-15', 21, 'Sample', 'Female', 'Single', 'Filipino', 'Catholic', 'Sample', 'Sample', 'Sample', 'Sample', 'Sample', '', '', 'Jonathan Estera', 'Oil producer', 'Caroline Estera', 'Cashier', '2018-01-19 10:13:48', NULL),
(31, 11810015, 3, 'Tuazon', 'Paul', 'Mercedez', 'angelovillanueva1@outlook.com', '$2y$10$UmB2LYfWMuY9.qnB2wg.oevaA8.yyzYc99CpXFeObWDyaacL.iZ7W', '(0915)684-9994', 'Active', '', '1997-02-28', 20, 'Sample', 'Male', 'Single', 'Filipino', 'Catholic', 'Sample', 'Sample', 'Sample', 'Sample', 'Sample', '', '', 'Michael Tuazon', 'Construction worker', 'Maja Tuazon', 'Social media ambassador', '2018-01-19 10:17:04', NULL),
(32, 11810016, 3, 'Hernando', 'Alexa', 'Sy', 'mangkaknorr@gmail.com', '$2y$10$gzNvN9OQr7DzZNotwoZxOO32hnr/BDyNe/NX5kX9L6ZXLZ3EEFAGi', '(0915)874-8933', 'Active', '', '1999-09-25', 18, 'Sample', 'Male', 'Single', 'Filipino', 'Catholic', 'Sample', '', 'Sample', 'Sample', 'Sample', '', '', 'Felix Hernando', 'Engineer', 'Theresa Hernando', 'Housewife', '2018-01-19 10:31:00', NULL),
(33, 11810017, 3, 'Remulla', 'Jionna', 'Ong', 'mangka.knorr@yahoo.com', '$2y$10$eceIAyosl9vcQ5s7iBrhD.47bobNy/.2hikPaPi5I1OizprO8v8z6', '(0916)849-6288', 'Active', '', '1996-02-16', 21, 'Sample', 'Male', 'Single', 'Filipino', 'Christian', 'Sample', '', 'Sample', 'Sample', 'Sample', '', '', 'Nikko Remulla', 'Policeman', 'Tintin Remulla', 'Nurse', '2018-01-19 10:49:41', NULL),
(34, 11810018, 3, 'Su', 'Samantha', 'Supsop', 'cheatermirienda@gmail.com', '$2y$10$t9Va92BKP24mBbDr18kTQuSd0c24tRifPSBKAu4CU3BCuoAogc0ge', '(0956)842-9233', 'Active', '', '1997-05-15', 20, 'Sample', 'Female', 'Single', 'Filipino', 'Catholic', 'Sample', '', 'Sample', 'Sample', 'Sample', '', '', 'Ramon Su', 'Store Owner', 'Sheila Su', 'Petshop Owner', '2018-01-19 10:52:16', NULL),
(35, 11810019, 3, 'Magsaysay', 'Joseph', 'Sy', 'cheatermirienda@yahoo.com', '$2y$10$LdrNY8mysOPwxTm1f9b7m.lKUtDPplkcMgxI87HkMRCmvNoJHsYDa', '(0915)974-6222', 'Active', '', '1996-02-29', 21, 'Sample', 'Male', 'Single', 'Chinese', 'Christian', 'Sample', '', 'Sample', 'Sample', 'Sample', '', '', 'Ralph Magsaysay', 'Gardener', 'Felicia Magsaysay', 'Dentist', '2018-01-19 10:54:33', NULL),
(36, 11810020, 3, 'Filipinas', 'Luzviminda', 'Asia', 'hiddenkho3039@gmail.com', '$2y$10$.2SgrXOAfNEU7uCwxBWpaO37O.64pTdmbv.pDlrJ101Lc6l8hNF3S', '(0916)849-9211', 'Active', '', '1997-10-17', 20, 'Sample', 'Female', 'Single', 'Filipino', 'Christian', 'Sample', '', 'Sample', 'Sample', 'Sample', '', '', 'Henrico Filipinas', 'Governor', 'Lucia Filipinas', 'Assistant Brand Manager', '2018-01-19 10:58:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `userTypeID` int(11) NOT NULL,
  `userType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`userTypeID`, `userType`) VALUES
(1, 'Admin'),
(2, 'Faculty'),
(3, 'Student'),
(4, 'Registrar');

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `venueID` int(11) NOT NULL,
  `venueCode` varchar(10) NOT NULL,
  `venueName` varchar(100) NOT NULL,
  `venueType` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`venueID`, `venueCode`, `venueName`, `venueType`, `status`) VALUES
(1, 'D405', 'Duerr 405', 'classroom', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`announceID`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`apid`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`assignID`);

--
-- Indexes for table `auditlogs`
--
ALTER TABLE `auditlogs`
  ADD PRIMARY KEY (`auditID`);

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`blockID`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`classID`);

--
-- Indexes for table `classlist`
--
ALTER TABLE `classlist`
  ADD PRIMARY KEY (`classListID`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`dlID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`facultyID`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`lessonID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentID`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`sujectID`);

--
-- Indexes for table `timeslots`
--
ALTER TABLE `timeslots`
  ADD PRIMARY KEY (`timeSlotID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`userTypeID`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`venueID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `announceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `apid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `assignID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `auditlogs`
--
ALTER TABLE `auditlogs`
  MODIFY `auditID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `blockID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `classID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `classlist`
--
ALTER TABLE `classlist`
  MODIFY `classListID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `dlID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `facultyID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `lessonID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `studentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `sujectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `timeslots`
--
ALTER TABLE `timeslots`
  MODIFY `timeSlotID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `userTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `venueID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
