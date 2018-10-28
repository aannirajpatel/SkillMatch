-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2018 at 12:43 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `senderID` varchar(9) NOT NULL,
  `receiverID` varchar(9) NOT NULL,
  `message` text NOT NULL,
  `sendtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `seen` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`senderID`, `receiverID`, `message`, `sendtime`, `seen`) VALUES
('17BCE0979', '17BCE0940', 'hi Vishva, \r\nI need a guy with good machine learning knowledge\r\nCan we collaborate?', '2018-10-28 11:38:50', 1),
('17BCE0940', '17BCE0979', 'Yeah  sure', '2018-10-28 11:40:19', 0);

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
('17BCE0979', 1, 'IEEE');

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
('17BCE0979', '17BCE0940', 1, 0, 0, 0);

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
(6, '17BCE0979', 'VIT', 'VIT', 'B.Tech, CSE', 'Vellore', '2017-02-07', '2018-01-08'),
(7, '17BCE0979', 'J H Ambani', 'GSEB', 'Science', 'Surat', '2004-05-05', '2016-04-04');

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
(2, 'Google', '2017-02-01', '2017-02-04', '17BCE0979'),
(3, 'Dell', '2015-01-12', '2016-08-08', '17BCE0979');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `languageID` int(11) NOT NULL,
  `reg_no` varchar(9) DEFAULT NULL,
  `language_name` varchar(50) DEFAULT NULL,
  `lang_level` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`languageID`, `reg_no`, `language_name`, `lang_level`) VALUES
(4, '17BCE0979', 'English', 8),
(5, '17BCE0979', 'Hindi', 7),
(6, '17BCE0979', 'Tamil', 5);

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
('17BCE0979', 'DBMS', 'SkillMatch', 1),
('17BCE0979', 'HCI', 'Arduino Hand Gesture', 2);

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

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skillid` int(11) NOT NULL,
  `reg_no` varchar(9) NOT NULL,
  `skillname` varchar(100) DEFAULT NULL,
  `skilllevel` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skillid`, `reg_no`, `skillname`, `skilllevel`) VALUES
(3, '17BCE0979', 'Machine Learning', 8),
(4, '17BCE0979', 'Data Science', 8),
(5, '17BCE0979', 'Web development', 9),
(6, '17BCE0940', 'Data Science', 9),
(7, '17BCE0940', 'Machine Learning', 7),
(8, '17BCE0940', 'Front end web development', 8);

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
('17BCE0940', 'vishva.pravinkumar2017@vitstudent.ac.in', '5f4dcc3b5aa765d61d8327deb882cf99', 'Vishva', 'Patel', '0000-00-00', NULL, NULL, NULL),
('17BCE0979', 'deval.modi2017@vitstudent.ac.in', '5f4dcc3b5aa765d61d8327deb882cf99', 'Deval', 'Modi', '2000-06-05', 2147483647, 'Surat', 'I am a computer science student.');

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
  MODIFY `certiid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `club_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `internships`
--
ALTER TABLE `internships`
  MODIFY `internship_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `languageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `projectid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `pub_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skillid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
