-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2018 at 09:10 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skillmatch`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `reg_no` varchar(9) DEFAULT NULL,
  `certificate_field` varchar(100) DEFAULT NULL,
  `issued_by` varchar(100) DEFAULT NULL,
  `certified_year` date DEFAULT NULL,
  `certificate_URL` varchar(100) NOT NULL,
  `certiid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`reg_no`, `certificate_field`, `issued_by`, `certified_year`, `certificate_URL`, `certiid`) VALUES
('17BCE0940', 'fdfddf', 'dddddddddd', '0000-00-00', 'fffffffffffff', 1),
('17BCE0940', 'yfyfyf', 'yfyyf', '0000-00-00', 'yfyfyfy', 2),
('17BCE0940', 'DBMS', 'NPTEL', '2022-01-06', 'UHUIIUIU', 3),
('17BCE0940', 'ML', 'EDX', '0000-00-00', 'UHOUGOGOG', 4),
('15BME1234', 'Theory of computation', 'Stanford University', '0000-00-00', 'lagunita.staanford.edu', 5),
('16BME1234', 'ml', 'courseera', '0000-00-00', 'uiauibauf', 6),
('16BME1234', 'ds', 'edx', '0000-00-00', 'nksdjhbdf', 7),
('16BME1234', 'edx', 'mit', '2015-12-12', 'https://mit.ac.in', 8),
('16BME1234', 'nptel', 'itm', '2018-01-11', 'iit.ac.in', 9),
('17BCE2066', 'DBMS', 'NPTEL', '2018-10-22', 'nptel.noc.in', 10);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `senderID` varchar(9) NOT NULL,
  `receiverID` varchar(9) NOT NULL,
  `message` text NOT NULL,
  `sendtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `seen` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `reg_no` varchar(9) DEFAULT NULL,
  `club_id` int(11) NOT NULL,
  `club_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`reg_no`, `club_id`, `club_name`) VALUES
('17BCE0940', 1, 'ieee'),
('17BCE0940', 2, 'IEEE'),
('17BCE0940', 3, 'Auto'),
('15BME1234', 4, 'IEEE CSE'),
('16BME1234', 5, 'isa'),
('16BME1234', 6, 'ieee cse');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `senderID` varchar(10) NOT NULL,
  `receiverID` varchar(10) NOT NULL,
  `accept` tinyint(1) NOT NULL,
  `reject` tinyint(1) NOT NULL,
  `wait` tinyint(1) NOT NULL,
  `ban` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`senderID`, `receiverID`, `accept`, `reject`, `wait`, `ban`) VALUES
('16BME1234', '17BCE2066', 1, 0, 0, 0),
('17BME0897', '16BME1234', 1, 0, 0, 0),
('17BME0897', '17BCE2066', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `education_id` int(11) NOT NULL,
  `reg_no` varchar(9) DEFAULT NULL,
  `institute_name` varchar(100) DEFAULT NULL,
  `institute_board` varchar(10) DEFAULT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `institute_address` varchar(100) DEFAULT NULL,
  `joined_year` date DEFAULT NULL,
  `end_year` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`education_id`, `reg_no`, `institute_name`, `institute_board`, `branch`, `institute_address`, `joined_year`, `end_year`) VALUES
(1, '17BCE0940', 'vgv', 'gvgvgv', 'gvgvgvg', 'vgvgvg', '0001-01-01', '0005-03-03'),
(2, '17BCE0940', 'yu', 'yu', 'yu', 'yu', '0008-08-08', '0008-08-08'),
(3, '15BME1234', 'VIT', 'VIT', 'CSE', 'Vellore', '2010-04-05', '2015-05-06'),
(4, '15BME1234', 'JHA', 'CBSE', 'Science', 'Surat', '2004-05-04', '2006-06-05'),
(5, '16BME1234', 'vit', 'vit', 'cse', 'chennai', '4201-04-04', '2015-12-11'),
(6, '16BME1234', 'stanford', 'stanford', 'ds', 'us', '2012-12-04', '2018-02-22'),
(7, '17BCE2066', 'Delhi Public School', 'CBSE', 'Science', 'Ahmedabad', '2003-01-01', '2017-01-01'),
(8, '17BCE2066', 'VIT', 'College', 'CSE', 'Vellore', '2017-01-01', '2021-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `internships`
--

CREATE TABLE `internships` (
  `internship_id` int(11) NOT NULL,
  `recuitor` varchar(50) DEFAULT NULL,
  `istart` date DEFAULT NULL,
  `iend` date DEFAULT NULL,
  `reg_no` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internships`
--

INSERT INTO `internships` (`internship_id`, `recuitor`, `istart`, `iend`, `reg_no`) VALUES
(1, 'Microsoft', '2014-04-01', '2015-08-08', '17BCE0940'),
(2, 'pojo', '2001-11-25', '2001-12-11', '17BCE0940'),
(3, 'Google', '2011-05-04', '2015-05-04', '15BME1234'),
(4, 'DRDO', '0004-04-04', '2015-08-06', '15BME1234'),
(5, 'microsoft', '2018-02-02', '2019-02-02', '16BME1234'),
(6, 'google', '2015-01-01', '2016-05-01', '16BME1234');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `languageID` int(11) NOT NULL,
  `reg_no` varchar(9) DEFAULT NULL,
  `language_name` varchar(50) DEFAULT NULL,
  `lang_level` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`languageID`, `reg_no`, `language_name`, `lang_level`) VALUES
(1, '17BCE0940', 'eng', '10'),
(2, '17BCE0940', 'Tamil', '5'),
(3, '17BCE0940', 'Telugu', '4'),
(4, '15BME1234', 'English', '9'),
(5, '15BME1234', 'Hindi', '10'),
(6, '15BME1234', 'Gujarati', '10'),
(7, '15BME1234', 'Marathi', '5'),
(8, '16BME1234', 'english', '10'),
(9, '16BME1234', 'hindi', '8'),
(10, '16BME1234', 'gujarati', '10'),
(11, '16BME1234', 'tamil', '8'),
(12, '16BME1234', 'french', '5'),
(13, '17BCE2066', 'Hindi', '50'),
(14, '17BCE2066', 'Gujarati', '100'),
(15, '17BCE2066', 'English', '90'),
(16, '17BCE2066', 'Sanskrit', '100');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `reg_no` varchar(9) DEFAULT NULL,
  `project_domain` varchar(100) DEFAULT NULL,
  `project_title` varchar(100) DEFAULT NULL,
  `projectid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`reg_no`, `project_domain`, `project_title`, `projectid`) VALUES
('17BCE0940', 'fxddfdf', 'dfdtdtrdtd', 1),
('17BCE0940', 'fcfgcf', 'vvuvghgvgy', 2),
('15BME1234', 'Database Management Syatem', 'SkillMatch', 3),
('15BME1234', 'Image processing', 'Mapping interface', 4),
('16BME1234', 'SkillMatch', 'DBMS', 5),
('16BME1234', 'HCI', 'hci', 6),
('17BCE2066', 'DBMS', 'VITBlog', 7);

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `reg_no` varchar(9) DEFAULT NULL,
  `pub_id` int(11) NOT NULL,
  `publication_domain` varchar(100) DEFAULT NULL,
  `publication_title` varchar(100) NOT NULL,
  `published_in` varchar(100) DEFAULT NULL,
  `pub_year` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`reg_no`, `pub_id`, `publication_domain`, `publication_title`, `published_in`, `pub_year`) VALUES
('17BCE0940', 1, 'image', 'paper', 'ieee', '0000-00-00'),
('17BCE0940', 2, 'gigig', 'uguuiguig', 'ugiugiugu', '0000-00-00'),
('17BCE0940', 3, 'knknln', 'kblkbklb', 'blkbklb', '0000-00-00'),
('17BCE0940', 4, 'bjbkbkj', 'jkbkjbkjb', 'jbkjbkjb', '0000-00-00'),
('17BCE0940', 5, 'hbhkbkhb', 'kbkjbkjb', 'jkbkjbjk', '2011-11-11'),
('17BCE0940', 6, 'bbub', 'ubiubui', 'ubiubuib', '2005-05-05'),
('15BME1234', 7, 'Discrete Mathematics', 'Group theory in real life', 'Applied Mathematics Society', '2017-04-04'),
('16BME1234', 8, 'dbms', 'use of normalizationi', 'ieee', '2014-05-04'),
('16BME1234', 9, 'os', 'deadlock avoidance', 'aso', '2015-04-04');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skillid` int(11) NOT NULL,
  `reg_no` varchar(9) NOT NULL,
  `skillname` varchar(100) DEFAULT NULL,
  `skilllevel` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skillid`, `reg_no`, `skillname`, `skilllevel`) VALUES
(1, '17BCE0097', 'tdydy', 8),
(2, '17BCE0897', 'cgxgxhg', 100),
(3, '17BCE0940', 'py', 10),
(4, '17BCE0940', 'js', 100),
(5, '17BCE0940', 'ML', 2),
(6, '17BCE0940', 'AOD', 4),
(7, '17BCE0940', 'PATEL', 11),
(8, '17BCE0940', 'HRL', 12),
(9, '15BME1234', 'ML', 5),
(10, '15BME1234', 'SQL', 10),
(11, '15BME1234', 'Python', 8),
(12, '15BME1234', 'UX design', 50),
(13, '16BME1234', 'python', 10),
(14, '16BME1234', 'ml', 9),
(15, '16BME1234', 'cpp', 10),
(16, '16BME1234', 'android', 8),
(17, '17BCE2066', 'HTML', 100),
(18, '17BCE2066', 'CSS', 100),
(19, '17BCE2066', 'JavaScript', 90),
(20, '17BCE2066', 'PHP', 80),
(21, '17BCE2066', 'SQL', 80),
(22, '17BCE2066', 'C Programming', 90);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `reg_no` varchar(9) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `phone` int(9) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `bio` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`reg_no`, `email`, `password`, `first_name`, `last_name`, `DOB`, `phone`, `city`, `bio`) VALUES
('15BME1234', 'patelpatel@gmail.com', 'bc02d4ffbeeab9f57c5e03de1098ff31', 'Vishva', 'Patel', '2011-05-04', 2147483647, 'Surat', ''),
('16BME1234', 'patel652@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Vishva', 'Patel', '2015-05-04', 2147483647, 'chennai', ''),
('17BCE0897', 'patelaan13@gmail.com', 'password', 'Aan', 'Patel', '2018-10-09', 123456789, 'Vadodara', ''),
('17BCE0940', 'vishvapatel652@gmail.com', 'vp', 'Vishva', 'Patel', '0000-00-00', NULL, NULL, ''),
('17BCE0979', 'devalmodi1712@gmail.com', 'password', 'Deval', 'Modi', '0000-00-00', NULL, NULL, ''),
('17BCE2066', '99ansh@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Ansh', 'Mehta', '1999-12-06', 2147483647, 'Ahmedabad', 'I\'m a computer engineer keen to learn new things. My primary interests are Databases and Machine Learning.'),
('17BME0897', 'testemail@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Amazing', 'Man', '0000-00-00', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`certiid`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`senderID`,`receiverID`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`education_id`);

--
-- Indexes for table `internships`
--
ALTER TABLE `internships`
  ADD PRIMARY KEY (`internship_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`languageID`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`projectid`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`pub_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skillid`) USING BTREE;

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`reg_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `certiid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `club_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `internships`
--
ALTER TABLE `internships`
  MODIFY `internship_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `languageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `projectid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `pub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skillid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
