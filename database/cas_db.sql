-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2019 at 10:57 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cas_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cas_approval_table`
--

CREATE TABLE `cas_approval_table` (
  `id` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `cas_approved` varchar(200) NOT NULL,
  `currentyear` int(11) NOT NULL,
  `previousyear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cas_approval_table`
--

INSERT INTO `cas_approval_table` (`id`, `facultyId`, `cas_approved`, `currentyear`, `previousyear`) VALUES
(1, 2, 'Approved', 2019, 2018),
(4, 17, 'Approved', 2019, 2018),
(5, 6, 'Approved', 2019, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_table`
--

CREATE TABLE `faculty_table` (
  `id` int(11) NOT NULL,
  `faculty_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `date_of_joining` date NOT NULL,
  `department` varchar(50) NOT NULL,
  `profilePicLocation` varchar(100) NOT NULL DEFAULT 'defaults/default_userprofile_pic.png',
  `faculty` int(11) NOT NULL,
  `hod` int(11) NOT NULL,
  `committee` int(11) NOT NULL,
  `principal` int(11) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_table`
--

INSERT INTO `faculty_table` (`id`, `faculty_name`, `email`, `password`, `date_of_joining`, `department`, `profilePicLocation`, `faculty`, `hod`, `committee`, `principal`, `admin`) VALUES
(1, 'Prof. Babaso Aldar', 'babasoaldar@somaiya.edu', '$2y$10$bd4GNgydExAbWXbrf8P1SuVtVBdwxJ2oM66S.j1G/T5utSB1IeSCS', '2018-05-12', 'Computer', 'users/babasoaldar@somaiya.edu/profilepic.jpg', 1, 0, 1, 0, 1),
(2, 'Prof. Manish Potey', 'manish.potey@somaiya.edu', '$2y$10$mRi97USluJQZPZtwSgS3ZOk1yybigUHHRhAJJ/yVPS8rF/DFRTGmK', '2010-08-17', 'Computer', 'users/manish.potey@somaiya.edu/profilepic.jpg', 1, 1, 0, 0, 0),
(3, 'Jyoti Trymbake', 'jyoti.trymbake@somaiya.edu', '$2y$10$f06wIJ29VeGf1oGfh2P95uHgYPXIPuPwC4NxE/xYolwy2tn3H0O1q', '2011-06-14', 'Computer', 'users/jyoti.trymbake@somaiya.edu/profilepic.jpg', 1, 0, 1, 0, 0),
(4, 'Prof. Poonam Bhogale', 'poonambhogale@somaiya.edu', '$2y$10$W6lbNYTxCAgG2GjeJ8xHuuV/BJg6NCMBifF5pvBJ7aDIiV2bIMTzC', '2008-11-11', 'Etrx', 'defaults/default_userprofile_pic.png', 1, 1, 0, 0, 0),
(5, 'Anjali', 'anjali@gmail.com', '$2y$10$2hpkZa7tqA98LAhOiqq1ieaByObfDo..bwzSLbZCKJRVvhQTziwkW', '1999-07-26', 'Computer', 'defaults/default_userprofile_pic.png', 1, 0, 1, 1, 0),
(6, 'Sharvai Patil', 'sharvai.p@somaiya.edu', '$2y$10$lTBgAr587gnLyzoZYR0UB.oS0jywazLATQdJNrRhdw5ltyvWiAlIu', '2001-01-13', 'Computer', 'users/sharvai.p@somaiya.edu/profilepic.jpg', 1, 0, 0, 1, 0),
(11, 'ï»¿faculty_name', 'email', '$2y$10$LDi9krgwN5CPQAZj31/tdeD/VkvBkkFeHeYWBSgIBUYWSrOHCOK8G', '1970-01-01', 'department', 'defaults/default_userprofile_pic.png', 0, 0, 0, 0, 0),
(12, 'Anjvai', 'anjvai@somaiya.edu', '$2y$10$xwU8.JQXFVdylSGmzRu6sOAI6LwBA6RCSkIfFaN5oH1aOzbAAXJ2.', '1999-12-01', 'Computer', 'defaults/default_userprofile_pic.png', 0, 1, 0, 1, 0),
(13, 'gfg', 'uhiud@gmail.com', '$2y$10$T7J7Zp7kzXwuzW21FHUI0ekl4RrbFPf2tgEjY3vY508W6nIPM.29a', '1999-12-12', 'Computer', 'defaults/default_userprofile_pic.png', 0, 1, 0, 0, 0),
(14, 'gfyeu', 'uidhu@gmail.com', '$2y$10$.NZE8URcEbGMEbXTNEupsuOYUXerLNdcH6ChciZb8rg3XJvdioiA.', '2000-04-04', 'Extc', 'defaults/default_userprofile_pic.png', 0, 0, 0, 0, 0),
(15, 'nsiuhfu', 'hiufwh@gmail.com', '$2y$10$OzibKeM11giBfC7x3BMcXeFWmBSEs9tg8x6CCVYfRkSSBrruK0YPq', '1999-03-03', 'Etrx', 'defaults/default_userprofile_pic.png', 1, 1, 1, 1, 1),
(16, 'jrgjie', 'jjtijo@gmail.com', '$2y$10$hacUv.WPNrPgfcJAi7zxhO2higW9r3Ty/Miq1DFdJ2mf3vAs3/EbK', '2000-04-04', 'Extc', 'defaults/default_userprofile_pic.png', 0, 0, 0, 1, 1),
(17, 'Faculty', 'faculty@gmail.com', '$2y$10$NSFC/6s5VLwAnIsBLFsKuOGlN9CdOQUK0XxHP0rT0JPDEWDyjP7Mu', '2000-02-02', 'Computer', 'users/faculty@gmail.com/profilepic.png', 1, 0, 0, 0, 0),
(18, 'HOD', 'hod@gmail.com', '$2y$10$hLP/NqG2tCMqYQD2u45jD.WSW6lCW2Tj5DYhd6UjBKi7rzPbSa./a', '2000-01-01', 'Computer', 'users/hod@gmail.com/profilepic.jpg', 1, 1, 0, 0, 0),
(19, 'Committee', 'committee@gmail.com', '$2y$10$3Xs1WOGAgilOe0Tzdr8AUeUGLhbIp18FogxmRP3NF5DozwQ0qmfWi', '2000-02-02', 'Computer', 'users/committee@gmail.com/profilepic.jpg', 1, 0, 1, 0, 0),
(20, 'Admin', 'admin@gmail.com', '$2y$10$5Brkhy3gepjGmawgavhXNe.LfVEFNkiN83WLRNr584wiAteiIiGeW', '2005-06-23', 'Computer', 'users/admin@gmail.com/profilepic.jpg', 1, 0, 0, 0, 1),
(21, 'Faculty1', 'faculty1@gmail.com', '$2y$10$.2I6BlmzS2/rHufDtJEB6eyCamzWyf5ywl5iFaEkLDgqrLxM3Pbr.', '2000-03-07', 'Computer', 'users/faculty1@gmail.com/profilepic.jpg', 1, 0, 0, 0, 0),
(22, 'HOD1', 'hod1@gmail.com', '$2y$10$600i/OfFMlcf0/JJXjh/4OM63tLD0xKyqh.DGazG4UzGcakjvCWNW', '2000-02-20', 'Computer', 'users/hod1@gmail.com/profilepic.jpg', 1, 1, 0, 0, 0),
(23, 'Committee1', 'committee1@gmail.com', '$2y$10$0aoxxcL6oKEcGu/JRUMnoeFHoEwfcteAbl4bIFO1Z1vQ1LSq5lqVW', '2000-02-05', 'Computer', 'users/committee1@gmail.com/profilepic.png', 1, 0, 1, 0, 0),
(24, 'faculty 4', 'faculty4@somaiya.edu', '$2y$10$yCjYOlQY43lEU/MECApRjuzJRiaC0es72nAsCzbvDQJYxRnPtCkHi', '2000-02-02', 'Computer', 'defaults/default_userprofile_pic.png', 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fields_table`
--

CREATE TABLE `fields_table` (
  `id` int(11) NOT NULL,
  `fieldtitle` varchar(200) NOT NULL,
  `maxpi` int(11) NOT NULL,
  `inputtype` varchar(200) NOT NULL,
  `fieldname` varchar(200) NOT NULL,
  `fieldid` varchar(200) NOT NULL,
  `fieldplaceholder` varchar(400) NOT NULL,
  `fieldform` varchar(10) NOT NULL,
  `fielddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fields_table`
--

INSERT INTO `fields_table` (`id`, `fieldtitle`, `maxpi`, `inputtype`, `fieldname`, `fieldid`, `fieldplaceholder`, `fieldform`, `fielddate`) VALUES
(2, 'Marks Awarded', 100, 'number', 'marksawarded', 'marksawarded', 'Enter the marks awarded by you to students', 'A', '2019-03-15'),
(3, '', 0, 'number', '', '', '', 'A', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `multiplication_factor_table`
--

CREATE TABLE `multiplication_factor_table` (
  `id` int(11) NOT NULL,
  `currentyear` float NOT NULL,
  `previousyear` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `multiplication_factor_table`
--

INSERT INTO `multiplication_factor_table` (`id`, `currentyear`, `previousyear`) VALUES
(1, 0.75, 0.25);

-- --------------------------------------------------------

--
-- Table structure for table `otp_table`
--

CREATE TABLE `otp_table` (
  `id` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `facultyEmail` varchar(200) NOT NULL,
  `otp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partb_cat1_pi`
--

CREATE TABLE `partb_cat1_pi` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `cat1_pi1_self_a` float NOT NULL,
  `cat1_pi1_hod_a` float NOT NULL,
  `cat1_pi1_committee_a` float NOT NULL,
  `cat1_pi2_self_a` float NOT NULL,
  `cat1_pi2_hod_a` float NOT NULL,
  `cat1_pi2_committee_a` float NOT NULL,
  `cat1_pi3_self_a` float NOT NULL,
  `cat1_pi3_hod_a` float NOT NULL,
  `cat1_pi3_committee_a` float NOT NULL,
  `cat1_pi4_self_a` float NOT NULL,
  `cat1_pi4_hod_a` float NOT NULL,
  `cat1_pi4_committee_a` float NOT NULL,
  `cat1_pitotal_self_a` float NOT NULL,
  `cat1_pitotal_hod_a` float NOT NULL,
  `cat1_pitotal_committee_a` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partb_cat1_pi`
--

INSERT INTO `partb_cat1_pi` (`id`, `year`, `facultyId`, `cat1_pi1_self_a`, `cat1_pi1_hod_a`, `cat1_pi1_committee_a`, `cat1_pi2_self_a`, `cat1_pi2_hod_a`, `cat1_pi2_committee_a`, `cat1_pi3_self_a`, `cat1_pi3_hod_a`, `cat1_pi3_committee_a`, `cat1_pi4_self_a`, `cat1_pi4_hod_a`, `cat1_pi4_committee_a`, `cat1_pitotal_self_a`, `cat1_pitotal_hod_a`, `cat1_pitotal_committee_a`) VALUES
(1, 2019, 2, 20, 10, 45, 7878, 879, 56, 589, 45, 56, 11, 11, 0, 77, 75, 50),
(2, 2018, 2, 20, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 70, 65, 60),
(3, 2019, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 80, 75, 0),
(4, 2017, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 2019, 17, 40, 40, 40, 40, 40, 35, 10, 10, 5, 10, 10, 10, 100, 100, 90),
(6, 2018, 17, 40, 0, 0, 40, 0, 0, 10, 0, 0, 10, 0, 0, 100, 0, 0),
(7, 2019, 1, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 40, 0, 0),
(8, 2019, 21, 35, 0, 0, 40, 0, 0, 5, 0, 0, 5, 0, 0, 0, 0, 0),
(9, 2018, 21, 20, 0, 0, 30, 0, 0, 5, 0, 0, 5, 0, 0, 10, 0, 0),
(10, 2017, 17, 20, 0, 0, 20, 0, 0, 5, 0, 0, 5, 0, 0, 50, 0, 0),
(11, 2019, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 2018, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 2019, 6, 30, 25, 20, 30, 25, 20, 5, 5, 5, 10, 5, 5, 75, 60, 50),
(14, 2018, 6, 30, 0, 0, 30, 0, 0, 10, 0, 0, 10, 0, 0, 80, 0, 0),
(15, 2017, 21, 40, 0, 0, 40, 0, 0, 10, 0, 0, 10, 0, 0, 100, 0, 0),
(16, 2019, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `partb_cat2_pi`
--

CREATE TABLE `partb_cat2_pi` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `cat2_pii1_self_a` float NOT NULL,
  `cat2_pii1_hod_a` float NOT NULL,
  `cat2_pii1_committee_a` float NOT NULL,
  `cat2_pii2_self_a` float NOT NULL,
  `cat2_pii2_hod_a` float NOT NULL,
  `cat2_pii2_committee_a` float NOT NULL,
  `cat2_pii3_self_a` float NOT NULL,
  `cat2_pii3_hod_a` float NOT NULL,
  `cat2_pii3_committee_a` float NOT NULL,
  `cat2_pii4_self_a` float NOT NULL,
  `cat2_pii4_hod_a` float NOT NULL,
  `cat2_pii4_committee_a` float NOT NULL,
  `cat2_piitotal_self_a` float NOT NULL,
  `cat2_piitotal_hod_a` float NOT NULL,
  `cat2_piitotal_committee_a` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partb_cat2_pi`
--

INSERT INTO `partb_cat2_pi` (`id`, `year`, `facultyId`, `cat2_pii1_self_a`, `cat2_pii1_hod_a`, `cat2_pii1_committee_a`, `cat2_pii2_self_a`, `cat2_pii2_hod_a`, `cat2_pii2_committee_a`, `cat2_pii3_self_a`, `cat2_pii3_hod_a`, `cat2_pii3_committee_a`, `cat2_pii4_self_a`, `cat2_pii4_hod_a`, `cat2_pii4_committee_a`, `cat2_piitotal_self_a`, `cat2_piitotal_hod_a`, `cat2_piitotal_committee_a`) VALUES
(1, 2019, 2, 78, 78, 70, 877, 7777, 100, 23, 45, 40, 23, 32, 23, 23, 43, 20),
(2, 2018, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 23, 43, 0),
(3, 2019, 17, 0, 0, 0, 20, 20, 15, 20, 20, 15, 20, 20, 15, 60, 60, 45),
(4, 2018, 17, 20, 0, 0, 20, 0, 0, 20, 0, 0, 0, 0, 0, 60, 0, 50),
(5, 2019, 21, 35, 0, 0, 15, 0, 0, 20, 0, 0, 17, 0, 0, 0, 0, 0),
(6, 2018, 21, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 20, 0, 0),
(7, 2017, 17, 30, 0, 0, 20, 0, 0, 10, 0, 0, 20, 0, 0, 80, 0, 0),
(8, 2019, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 2018, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 2019, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 2018, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 2017, 21, 20, 0, 0, 20, 0, 0, 10, 0, 0, 20, 0, 0, 70, 0, 0),
(13, 2019, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `partb_cat3_pi`
--

CREATE TABLE `partb_cat3_pi` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `cat3_piii1_self_a` float NOT NULL,
  `cat3_piii1_hod_a` float NOT NULL,
  `cat3_piii1_committee_a` float NOT NULL,
  `cat3_piii2_self_a` float NOT NULL,
  `cat3_piii2_hod_a` float NOT NULL,
  `cat3_piii2_committee_a` float NOT NULL,
  `cat3_piii3_self_a` float NOT NULL,
  `cat3_piii3_hod_a` float NOT NULL,
  `cat3_piii3_committee_a` float NOT NULL,
  `cat3_piii4_self_a` float NOT NULL,
  `cat3_piii4_hod_a` float NOT NULL,
  `cat3_piii4_committee_a` float NOT NULL,
  `cat3_piii5_self_a` float NOT NULL,
  `cat3_piii5_hod_a` float NOT NULL,
  `cat3_piii5_committee_a` float NOT NULL,
  `cat3_piii6_self_a` float NOT NULL,
  `cat3_piii6_hod_a` float NOT NULL,
  `cat3_piii6_committee_a` float NOT NULL,
  `cat3_piii7_self_a` float NOT NULL,
  `cat3_piii7_hod_a` float NOT NULL,
  `cat3_piii7_committee_a` float NOT NULL,
  `cat3_piii8_self_a` float NOT NULL,
  `cat3_piii8_hod_a` float NOT NULL,
  `cat3_piii8_committee_a` float NOT NULL,
  `cat3_piii9_self_a` float NOT NULL,
  `cat3_piii9_hod_a` float NOT NULL,
  `cat3_piii9_committee_a` float NOT NULL,
  `cat3_piii10_self_a` float NOT NULL,
  `cat3_piii10_hod_a` float NOT NULL,
  `cat3_piii10_committee_a` float NOT NULL,
  `cat3_piii11_self_a` float NOT NULL,
  `cat3_piii11_hod_a` float NOT NULL,
  `cat3_piii11_committee_a` float NOT NULL,
  `cat3_piiitotal_self_a` float NOT NULL,
  `cat3_piiitotal_hod_a` float NOT NULL,
  `cat3_piiitotal_committee_a` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partb_cat3_pi`
--

INSERT INTO `partb_cat3_pi` (`id`, `year`, `facultyId`, `cat3_piii1_self_a`, `cat3_piii1_hod_a`, `cat3_piii1_committee_a`, `cat3_piii2_self_a`, `cat3_piii2_hod_a`, `cat3_piii2_committee_a`, `cat3_piii3_self_a`, `cat3_piii3_hod_a`, `cat3_piii3_committee_a`, `cat3_piii4_self_a`, `cat3_piii4_hod_a`, `cat3_piii4_committee_a`, `cat3_piii5_self_a`, `cat3_piii5_hod_a`, `cat3_piii5_committee_a`, `cat3_piii6_self_a`, `cat3_piii6_hod_a`, `cat3_piii6_committee_a`, `cat3_piii7_self_a`, `cat3_piii7_hod_a`, `cat3_piii7_committee_a`, `cat3_piii8_self_a`, `cat3_piii8_hod_a`, `cat3_piii8_committee_a`, `cat3_piii9_self_a`, `cat3_piii9_hod_a`, `cat3_piii9_committee_a`, `cat3_piii10_self_a`, `cat3_piii10_hod_a`, `cat3_piii10_committee_a`, `cat3_piii11_self_a`, `cat3_piii11_hod_a`, `cat3_piii11_committee_a`, `cat3_piiitotal_self_a`, `cat3_piiitotal_hod_a`, `cat3_piiitotal_committee_a`) VALUES
(1, 2019, 2, 78, 78, 70, 41, 11, 10, 44, 755, 40, 56, 56, 50, 5588, 213, 100, 89, 78, 50, 77, 88, 50, 333, 44, 20, 878, 7878, 30, 2300, 11, 10, 25, 23, 0, 150, 145, 140),
(2, 2018, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 100, 100),
(3, 2019, 17, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 10, 10, 7, 24, 24, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 39, 34, 27),
(4, 2018, 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 34, 0, 30),
(5, 2019, 21, 70, 0, 0, 10, 0, 0, 9, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 15, 0, 0, 15, 0, 0, 21, 0, 0, 150, 0, 0),
(6, 2018, 21, 50, 0, 0, 11, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 15, 0, 0, 10, 0, 0, 20, 0, 0, 150, 0, 0),
(7, 2017, 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 2019, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 2018, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 2019, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 2018, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 2017, 21, 50, 0, 0, 15, 0, 0, 0, 0, 0, 10, 0, 0, 8, 0, 0, 28, 0, 0, 28, 0, 0, 0, 0, 0, 0, 0, 0, 20, 0, 0, 0, 0, 0, 50, 0, 0),
(13, 2019, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `partb_cat4_pi`
--

CREATE TABLE `partb_cat4_pi` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `cat4_piv1_self_a` float NOT NULL,
  `cat4_piv1_hod_a` float NOT NULL,
  `cat4_piv1_committee_a` float NOT NULL,
  `cat4_piv2_self_a` float NOT NULL,
  `cat4_piv2_hod_a` float NOT NULL,
  `cat4_piv2_committee_a` float NOT NULL,
  `cat4_piv3_self_a` float NOT NULL,
  `cat4_piv3_hod_a` float NOT NULL,
  `cat4_piv3_committee_a` float NOT NULL,
  `cat4_pivtotal_self_a` float NOT NULL,
  `cat4_pivtotal_hod_a` float NOT NULL,
  `cat4_pivtotal_committee_a` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partb_cat4_pi`
--

INSERT INTO `partb_cat4_pi` (`id`, `year`, `facultyId`, `cat4_piv1_self_a`, `cat4_piv1_hod_a`, `cat4_piv1_committee_a`, `cat4_piv2_self_a`, `cat4_piv2_hod_a`, `cat4_piv2_committee_a`, `cat4_piv3_self_a`, `cat4_piv3_hod_a`, `cat4_piv3_committee_a`, `cat4_pivtotal_self_a`, `cat4_pivtotal_hod_a`, `cat4_pivtotal_committee_a`) VALUES
(1, 2019, 2, 45, 44, 20, 23, 23, 20, 56, 56, 30, 65, 50, 60),
(2, 2018, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 60, 65, 0),
(3, 2019, 17, 5, 0, 0, 10, 10, 0, 15, 15, 0, 30, 25, 20),
(4, 2018, 17, 10, 0, 0, 10, 0, 0, 10, 0, 0, 30, 0, 25),
(5, 2019, 21, 20, 0, 0, 25, 0, 0, 10, 0, 0, 0, 0, 0),
(6, 2018, 21, 5, 0, 0, 20, 0, 0, 10, 0, 0, 20, 0, 0),
(7, 2017, 17, 0, 0, 0, 30, 0, 0, 10, 0, 0, 40, 0, 0),
(8, 2019, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 2018, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 2019, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 2018, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 2017, 21, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 2019, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `part_a_doc`
--

CREATE TABLE `part_a_doc` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `srno` int(11) NOT NULL,
  `course` varchar(100) NOT NULL,
  `days` int(11) NOT NULL,
  `agency` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL DEFAULT 'NAN'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_a_doc`
--

INSERT INTO `part_a_doc` (`id`, `formId`, `srno`, `course`, `days`, `agency`, `file`) VALUES
(1, 1, 1, 'KJSCE', 3, 'Kj Agency', 'NAN'),
(2, 1, 2, 'Open Ceremony', 5, 'Kj Agency 2', 'NAN'),
(87, 2, 3, 'KJSCE 3', 3, 'KJSCOC', 'users/manish.potey@somaiya.edu/spedicey.jpg'),
(88, 2, 1, 'KJSCE', 5, 'KJSCE', 'users/manish.potey@somaiya.edu/spedicey.jpg'),
(89, 2, 2, 'KJSCE 2', 2, 'SKSCOAC', 'users/manish.potey@somaiya.edu/2_1.jpg'),
(90, 2, 4, 'KJOJ', 4, 'KJOJ', 'users/manish.potey@somaiya.edu/napoleon death quote.png'),
(91, 2, 5, 'Hola', 4, 'KJOOO', 'users/manish.potey@somaiya.edu/2_1.jpg'),
(92, 6, 0, '', 0, '', 'NAN'),
(93, 7, 0, '', 0, '', 'NAN'),
(94, 7, 0, '', 0, '', 'NAN'),
(95, 8, 2, 'PCC2', 4, 'SDC', 'users/faculty1@gmail.com/2_3.jpg'),
(96, 8, 1, 'OCC', 5, 'KJSCE', 'users/faculty1@gmail.com/1_1.jpg'),
(97, 9, 2, 'OCS2', 4, 'KJSDC', 'users//2_1.jpg'),
(98, 9, 1, 'OCS', 5, 'KJSCE', 'users//1_1.jpg'),
(99, 0, 1, '', 0, '', 'NAN'),
(100, 0, 4, '', 0, '', 'NAN'),
(101, 0, 5, '', 0, '', 'NAN'),
(102, 0, 1, '', 0, '', 'NAN'),
(103, 0, 2, '', 0, '', 'NAN'),
(104, 0, 3, '', 0, '', 'NAN'),
(105, 0, 2, '', 0, '', 'NAN'),
(106, 0, 3, '', 0, '', 'NAN'),
(107, 0, 1, '', 0, '', 'NAN'),
(108, 0, 0, '', 0, '', 'NAN'),
(109, 0, 0, '', 0, '', 'NAN'),
(122, 10, 1, '', 0, '', 'NAN'),
(123, 10, 2, '', 0, '', 'NAN'),
(124, 10, 3, '', 0, '', 'NAN'),
(125, 10, 4, '', 0, '', 'NAN'),
(126, 10, 5, '', 0, '', 'NAN'),
(127, 10, 6, 'hey', 0, '', 'NAN'),
(128, 11, 0, '', 0, '', 'NAN');

-- --------------------------------------------------------

--
-- Table structure for table `part_a_gpi`
--

CREATE TABLE `part_a_gpi` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `parta_ugpggpi_self_a` int(11) NOT NULL,
  `parta_ugpggpi_hod_a` int(11) NOT NULL,
  `parta_ugpggpi_committee_a` int(11) NOT NULL,
  `parta_gpi_self_a` float NOT NULL,
  `parta_gpi_hod_a` float NOT NULL,
  `parta_gpi_committee_a` float NOT NULL,
  `parta_gpi_pi_self_a` float NOT NULL,
  `parta_gpi_pi_hod_a` float NOT NULL,
  `parta_gpi_pi_committee_a` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_a_gpi`
--

INSERT INTO `part_a_gpi` (`id`, `year`, `facultyId`, `parta_ugpggpi_self_a`, `parta_ugpggpi_hod_a`, `parta_ugpggpi_committee_a`, `parta_gpi_self_a`, `parta_gpi_hod_a`, `parta_gpi_committee_a`, `parta_gpi_pi_self_a`, `parta_gpi_pi_hod_a`, `parta_gpi_pi_committee_a`) VALUES
(3, 2019, 2, 0, 0, 0, 47, 67, 20, 45, 45, 40),
(4, 2018, 2, 0, 0, 0, 0, 0, 0, 45, 45, 0),
(5, 2019, 7, 0, 0, 0, 30, 25, 0, 50, 45, 0),
(6, 2017, 2, 0, 0, 0, 44, 54, 0, 0, 0, 0),
(7, 2019, 17, 0, 0, 0, 30, 30, 25, 30, 30, 25),
(8, 2018, 17, 0, 0, 0, 30, 0, 30, 30, 0, 30),
(9, 2019, 1, 0, 0, 0, 20, 0, 0, 20, 0, 0),
(10, 2019, 21, 0, 0, 0, 25, 0, 0, 45, 0, 0),
(11, 2018, 21, 0, 0, 0, 30, 0, 0, 40, 0, 0),
(12, 2017, 17, 15, 0, 0, 30, 0, 0, 45, 0, 0),
(13, 2018, 18, 20, 20, 0, 15, 20, 0, 70, 40, 0),
(14, 2019, 19, 10, 0, 0, 30, 0, 0, 40, 0, 0),
(15, 2018, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 2019, 6, 10, 10, 10, 30, 25, 20, 40, 35, 30),
(17, 2018, 6, 15, 15, 10, 25, 20, 20, 40, 35, 40),
(18, 2017, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 2017, 21, 20, 0, 0, 30, 0, 0, 50, 0, 0),
(20, 2019, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 0, 21, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `part_a_table`
--

CREATE TABLE `part_a_table` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `faculty_name` varchar(100) NOT NULL,
  `ecode` int(11) NOT NULL,
  `praddr` varchar(200) NOT NULL,
  `peaddr` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileno` int(15) NOT NULL,
  `highq` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `desi` varchar(50) NOT NULL,
  `nameo` varchar(50) NOT NULL,
  `pdesi` varchar(50) NOT NULL,
  `dojkjsce` date NOT NULL,
  `pscale` int(11) NOT NULL,
  `pbg` int(11) NOT NULL,
  `lastdesisel` varchar(50) NOT NULL,
  `promowef` date NOT NULL,
  `cscales` int(11) NOT NULL,
  `cbasics` int(11) NOT NULL,
  `lastdesicas` varchar(50) NOT NULL,
  `promowefcas` date NOT NULL,
  `cscalecas` int(11) NOT NULL,
  `cbasiccas` int(11) NOT NULL,
  `customRadioInline1` varchar(3) NOT NULL,
  `nameofdegree` varchar(100) NOT NULL,
  `institute` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_a_table`
--

INSERT INTO `part_a_table` (`id`, `year`, `faculty_id`, `faculty_name`, `ecode`, `praddr`, `peaddr`, `email`, `mobileno`, `highq`, `dob`, `desi`, `nameo`, `pdesi`, `dojkjsce`, `pscale`, `pbg`, `lastdesisel`, `promowef`, `cscales`, `cbasics`, `lastdesicas`, `promowefcas`, `cscalecas`, `cbasiccas`, `customRadioInline1`, `nameofdegree`, `institute`) VALUES
(1, 2017, 2, 'Manish Potey', 120039, '', '', 'manish.potey@somaiya.edu', 0, '', '2018-12-11', '', '', '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(2, 2019, 2, 'Manish Potey', 29163, '', '', 'manish.potey@somaiya.edu', 2147483647, 'PHD', '2019-03-18', 'HOD', '', 'Head of Department', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 5, 'Yes', 'PHD', ''),
(3, 2019, 3, 'Jyoti Trymbake', 5476, 'Ghatkopar', 'Ghatkopar', 'jyoti.trymbake@somaiya.edu', 883957483, 'PHD', '1982-01-27', 'Professor', 'SPIT', '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(4, 2019, 7, 'Faculty', 123, '', '', '', 0, '', '2017-05-03', '', '', '', '2018-07-09', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(5, 0, 2, '', 0, '', '', '', 0, '', '0000-00-00', '', '', '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, '', '', ''),
(6, 2017, 1, 'Babaso Aldar', 0, '', '', '', 0, '', '0000-00-00', '', '', '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(7, 2019, 17, 'abc', 3487, 'kjsce', 'kjsce', 'faculty@gmail.com', 2147483647, 'M.Tech', '1989-03-18', 'Ap', 'kjsce', 'Ap', '2000-03-07', 7000, 16930, 'Ap', '2016-10-11', 7000, 16930, 'Ap', '2015-08-04', 7000, 16930, 'No', '', ''),
(8, 2019, 21, 'Faculty1', 90223, 'Addr1', 'Addr2', 'faculty1@gmail.com', 2147483647, 'PHD', '2000-02-02', 'Asst. Prof.', 'VJTI', 'Asst. Prof.', '2003-07-02', 7000, 8000, 'Prof.', '2004-02-04', 7000, 8500, 'Prof Prof', '2007-09-29', 70830, 2000, 'Yes', 'PHD', 'Gorakhpur Institute of Gorkhas'),
(9, 2018, 21, 'Faculty1', 90332, 'Addr1', 'Addr2', '', 0, '', '0000-00-00', '', '', '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(10, 2017, 19, 'Committee', 0, '', '', '', 0, '', '0000-00-00', '', '', '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(11, 2019, 24, 'faculty 4', 1234, '', '', '', 0, '', '0000-00-00', '', '', '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(12, 0, 21, '', 0, '', '', '', 0, '', '0000-00-00', '', '', '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_1`
--

CREATE TABLE `part_b_cat_1` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `avg_c` float NOT NULL,
  `total_c` float NOT NULL,
  `odpstest1` varchar(200) NOT NULL,
  `oepstest1` varchar(200) NOT NULL,
  `o1file` varchar(200) NOT NULL DEFAULT 'NAN',
  `odpstest2` varchar(200) NOT NULL,
  `oepstest2` varchar(200) NOT NULL,
  `o2file` varchar(200) NOT NULL DEFAULT 'NAN',
  `odtest1in` varchar(200) NOT NULL,
  `oetest1in` varchar(200) NOT NULL,
  `o3file` varchar(200) NOT NULL DEFAULT 'NAN',
  `odtest2in` varchar(200) NOT NULL,
  `oetest2in` varchar(200) NOT NULL,
  `o4file` varchar(200) NOT NULL DEFAULT 'NAN',
  `odtest1ass` varchar(200) NOT NULL,
  `oetest1ass` varchar(200) NOT NULL,
  `o5file` varchar(200) NOT NULL DEFAULT 'NAN',
  `odtest2ass` varchar(200) NOT NULL,
  `oetest2ass` varchar(200) NOT NULL,
  `o6file` varchar(200) NOT NULL DEFAULT 'NAN',
  `odeseps` varchar(200) NOT NULL,
  `oeeseps` varchar(200) NOT NULL,
  `o7file` varchar(200) NOT NULL DEFAULT 'NAN',
  `odesein` varchar(200) NOT NULL,
  `oeesein` varchar(200) NOT NULL,
  `o8file` varchar(200) NOT NULL DEFAULT 'NAN',
  `odeseth` varchar(200) NOT NULL,
  `oeeseth` varchar(200) NOT NULL,
  `o9file` varchar(200) NOT NULL DEFAULT 'NAN',
  `odesepo` varchar(200) NOT NULL,
  `oeesepo` varchar(200) NOT NULL,
  `o10file` varchar(200) NOT NULL DEFAULT 'NAN',
  `odesere_ass` varchar(200) NOT NULL,
  `oeesere_ass` varchar(200) NOT NULL,
  `o11file` varchar(200) NOT NULL DEFAULT 'NAN',
  `odproofr` varchar(200) NOT NULL,
  `oeproofr` varchar(200) NOT NULL,
  `o12file` varchar(200) NOT NULL DEFAULT 'NAN',
  `odopenday` varchar(200) NOT NULL,
  `oeopenday` varchar(200) NOT NULL,
  `o13file` varchar(200) NOT NULL DEFAULT 'NAN',
  `edpstest1` varchar(200) NOT NULL,
  `eepstest1` varchar(200) NOT NULL,
  `e1file` varchar(200) NOT NULL DEFAULT 'NAN',
  `edpstest2` varchar(200) NOT NULL,
  `eepstest2` varchar(200) NOT NULL,
  `e2file` varchar(200) NOT NULL DEFAULT 'NAN',
  `edtest1in` varchar(200) NOT NULL,
  `eetest1in` varchar(200) NOT NULL,
  `e3file` varchar(200) NOT NULL DEFAULT 'NAN',
  `edtest2in` varchar(200) NOT NULL,
  `eetest2in` varchar(200) NOT NULL,
  `e4file` varchar(200) NOT NULL DEFAULT 'NAN',
  `edtest1ass` varchar(200) NOT NULL,
  `eetest1ass` varchar(200) NOT NULL,
  `e5file` varchar(200) NOT NULL DEFAULT 'NAN',
  `edtest2ass` varchar(200) NOT NULL,
  `eetest2ass` varchar(200) NOT NULL,
  `e6file` varchar(200) NOT NULL DEFAULT 'NAN',
  `edeseps` varchar(200) NOT NULL,
  `eeeseps` varchar(200) NOT NULL,
  `e7file` varchar(200) NOT NULL DEFAULT 'NAN',
  `edesein` varchar(200) NOT NULL,
  `eeesein` varchar(200) NOT NULL,
  `e8file` varchar(200) NOT NULL DEFAULT 'NAN',
  `edeseth` varchar(200) NOT NULL,
  `eeeseth` varchar(200) NOT NULL,
  `e9file` varchar(200) NOT NULL DEFAULT 'NAN',
  `edesepo` varchar(200) NOT NULL,
  `eeesepo` varchar(200) NOT NULL,
  `e10file` varchar(200) NOT NULL DEFAULT 'NAN',
  `edesere_ass` varchar(200) NOT NULL,
  `eeesere_ass` varchar(200) NOT NULL,
  `e11file` varchar(200) NOT NULL DEFAULT 'NAN',
  `edproofr` varchar(200) NOT NULL,
  `eeproofr` varchar(200) NOT NULL,
  `e12file` varchar(200) NOT NULL DEFAULT 'NAN',
  `edopenday` varchar(200) NOT NULL,
  `eeopenday` varchar(200) NOT NULL,
  `e13file` varchar(200) NOT NULL DEFAULT 'NAN',
  `dpstest1` varchar(200) NOT NULL,
  `dps1file` varchar(200) NOT NULL DEFAULT 'NAN',
  `dpstest2` varchar(200) NOT NULL,
  `dps2file` varchar(200) NOT NULL DEFAULT 'NAN',
  `dtest1in` varchar(200) NOT NULL,
  `dps3file` varchar(200) NOT NULL DEFAULT 'NAN',
  `dtest2in` varchar(200) NOT NULL,
  `dps4file` varchar(200) NOT NULL DEFAULT 'NAN',
  `dtest1ass` varchar(200) NOT NULL,
  `dps5file` varchar(200) NOT NULL DEFAULT 'NAN',
  `dtest2ass` varchar(200) NOT NULL,
  `dps6file` varchar(200) NOT NULL DEFAULT 'NAN',
  `deseps` varchar(200) NOT NULL,
  `dps7file` varchar(200) NOT NULL DEFAULT 'NAN',
  `avg_ap` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_1`
--

INSERT INTO `part_b_cat_1` (`id`, `formId`, `avg_c`, `total_c`, `odpstest1`, `oepstest1`, `o1file`, `odpstest2`, `oepstest2`, `o2file`, `odtest1in`, `oetest1in`, `o3file`, `odtest2in`, `oetest2in`, `o4file`, `odtest1ass`, `oetest1ass`, `o5file`, `odtest2ass`, `oetest2ass`, `o6file`, `odeseps`, `oeeseps`, `o7file`, `odesein`, `oeesein`, `o8file`, `odeseth`, `oeeseth`, `o9file`, `odesepo`, `oeesepo`, `o10file`, `odesere_ass`, `oeesere_ass`, `o11file`, `odproofr`, `oeproofr`, `o12file`, `odopenday`, `oeopenday`, `o13file`, `edpstest1`, `eepstest1`, `e1file`, `edpstest2`, `eepstest2`, `e2file`, `edtest1in`, `eetest1in`, `e3file`, `edtest2in`, `eetest2in`, `e4file`, `edtest1ass`, `eetest1ass`, `e5file`, `edtest2ass`, `eetest2ass`, `e6file`, `edeseps`, `eeeseps`, `e7file`, `edesein`, `eeesein`, `e8file`, `edeseth`, `eeeseth`, `e9file`, `edesepo`, `eeesepo`, `e10file`, `edesere_ass`, `eeesere_ass`, `e11file`, `edproofr`, `eeproofr`, `e12file`, `edopenday`, `eeopenday`, `e13file`, `dpstest1`, `dps1file`, `dpstest2`, `dps2file`, `dtest1in`, `dps3file`, `dtest2in`, `dps4file`, `dtest1ass`, `dps5file`, `dtest2ass`, `dps6file`, `deseps`, `dps7file`, `avg_ap`) VALUES
(1, 1, 0, 0, 'ffj', '89', 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg', 'uhi', '98', 'users/manish.potey@somaiya.edu/C5CXYlHUoAUPGwX.jpg', 'huy', '98', 'users/manish.potey@somaiya.edu/download.jpg', 'hb', '98', 'users/manish.potey@somaiya.edu/e4a0b4a657040c64c017fe07957cf9a1.jpg', 'hb', '98', 'users/manish.potey@somaiya.edu/CM2.jpg', 'uhb', '09', 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg', 'uyb', '98', 'users/manish.potey@somaiya.edu/13259643_1283674768370253_1197858746_n.jpg', 'u98', '8', 'users/manish.potey@somaiya.edu/C5CXYlHUoAUPGwX.jpg', 'as', '5', 'users/manish.potey@somaiya.edu/http-%2F%2Fhypebeast.com%2Fimage%2F2017%2F09%2Fpost-malone-apple-music-single-week-streaming-record-0.jpg', 'ljk', '84', 'users/manish.potey@somaiya.edu/ChxynyJVAAAGmt_.jpg', 'gjgj', '5', 'users/manish.potey@somaiya.edu/cristiano-ronaldo.jpg', 'hjhb', '5454', 'users/manish.potey@somaiya.edu/napoleon death quote.png', 'bvhb', '5454', 'users/manish.potey@somaiya.edu/zDo-gAo0_400x400.jpg', 'bbh', '51', 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg', 'vg', '5', 'users/manish.potey@somaiya.edu/C5CXYlHUoAUPGwX.jpg', 'vh', '45', 'users/manish.potey@somaiya.edu/Elon-Musk-Wallpapers-HD.jpg', 'bu', '9', 'users/manish.potey@somaiya.edu/Falcon-9-Rocket-in-the-Hangar.jpg', 'hyv', '48', 'users/manish.potey@somaiya.edu/e4a0b4a657040c64c017fe07957cf9a1.jpg', 'vgy', '8', 'users/manish.potey@somaiya.edu/13259643_1283674768370253_1197858746_n.jpg', 'hu', '375', 'users/manish.potey@somaiya.edu/http-%2F%2Fhypebeast.com%2Fimage%2F2017%2F09%2Fpost-malone-apple-music-single-week-streaming-record-0.jpg', 'hu', '537', 'users/manish.potey@somaiya.edu/e4a0b4a657040c64c017fe07957cf9a1.jpg', 'jn', '46', 'users/manish.potey@somaiya.edu/cristiano-ronaldo.jpg', 'k', '56', 'users/manish.potey@somaiya.edu/e4a0b4a657040c64c017fe07957cf9a1.jpg', 'ok', '65', 'users/manish.potey@somaiya.edu/e4a0b4a657040c64c017fe07957cf9a1.jpg', 'jh', '26', 'users/manish.potey@somaiya.edu/fUsGyKV.jpg', 'jb', '54', 'users/manish.potey@somaiya.edu/infinito.jpg', 'kjfj', '', 'hj', '', 'hg', '', 'hg', '', 'hg', '', 'hg', '', 'hg', '', 28),
(2, 2, 0, 0, '', '', 'NAN', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(3, 3, 0, 0, 'hjsdj', '6', '', 'jh', '54', '', 'hjb', '54', '', 'bhj', '5', '', 'se', '2', '', 'dsv', '5', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(4, 4, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(5, 5, 0, 0, 'yes', '50', 'users/babasoaldar@somaiya.edu/1_2.jpg', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', 0),
(6, 6, 0, 0, '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', 0),
(7, 7, 100, 770, 'ABC', '50', 'NAN', 'abv', '40', 'NAN', 'rtg', '40', 'NAN', 'gtf', '50', 'NAN', 'ABC', '40', 'NAN', 'REG', '30', 'NAN', 'HY', '40', 'NAN', 'I', '78', 'NAN', 'UI', '90', 'NAN', 'YU', '40', 'NAN', 'GU', '80', 'NAN', 'HU', '78', 'NAN', 'OPN', '40', 'NAN', 'GY', '55', 'NAN', 'HI', '88', 'NAN', 'HH', '99', 'NAN', 'HU', '80', 'NAN', 'GY', '90', 'NAN', 'TY', '87', 'NAN', 'GH', '90', 'NAN', 'RT', '67', 'NAN', 'ER', '56', 'NAN', 'GH', '78', 'NAN', 'TY', '89', 'NAN', 'HJ', '09', 'NAN', 'RT', '67', 'NAN', 'wer', 'NAN', 'REWWE', 'NAN', 'WE', 'NAN', 'RE', 'NAN', 'TW', 'NAN', 'FG', 'NAN', 'LO', 'NAN', 90),
(8, 8, 0, 0, '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', 0),
(9, 9, 0, 0, '', '', 'users/faculty4@somaiya.edu/b1s1_1f.jpg', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', 0),
(10, 10, 0, 0, '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', 0),
(11, 11, 0, 0, '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', 0);

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_1_cte`
--

CREATE TABLE `part_b_cat_1_cte` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `ctecourse` varchar(200) NOT NULL,
  `ctetyprlpt` varchar(200) NOT NULL,
  `cteugpg` varchar(200) NOT NULL,
  `cteclasssemester` varchar(200) NOT NULL,
  `ctehrsweek` float NOT NULL,
  `ctehrsengaged` float NOT NULL,
  `ctemaxhrs` float NOT NULL,
  `ctec` float NOT NULL,
  `ctefile` varchar(200) NOT NULL DEFAULT 'NAN'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_1_cte`
--

INSERT INTO `part_b_cat_1_cte` (`id`, `formId`, `ctecourse`, `ctetyprlpt`, `cteugpg`, `cteclasssemester`, `ctehrsweek`, `ctehrsengaged`, `ctemaxhrs`, `ctec`, `ctefile`) VALUES
(127, 1, 'hey yo', '', '', '', 0, 0, 0, 0, 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg'),
(128, 1, 'yy', '', '', 'asd', 0, 0, 0, 0, 'users/manish.potey@somaiya.edu/ant.jpg'),
(129, 1, 'er', '', '', '', 0, 0, 0, 0, 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg'),
(130, 1, 'ttt', '', '', '', 0, 0, 0, 0, 'users/manish.potey@somaiya.edu/inspirational-smll-business-quotes5.jpg'),
(132, 7, 'CRS', 'L', 'UG', '6', 5, 5, 1, 500, 'NAN'),
(133, 10, '', '', '', '', 0, 0, 0, 0, 'NAN'),
(136, 11, '', '', '', '', 0, 0, 0, 0, 'NAN');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_1_cto`
--

CREATE TABLE `part_b_cat_1_cto` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `ctocourse` varchar(200) NOT NULL,
  `ctotyprlpt` varchar(200) NOT NULL,
  `ctougpg` varchar(200) NOT NULL,
  `ctoclasssemester` varchar(200) NOT NULL,
  `ctohrsweek` float NOT NULL,
  `ctohrsengaged` float NOT NULL,
  `ctomaxhrs` float NOT NULL,
  `ctoc` float NOT NULL,
  `ctofile` varchar(200) NOT NULL DEFAULT 'NAN'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_1_cto`
--

INSERT INTO `part_b_cat_1_cto` (`id`, `formId`, `ctocourse`, `ctotyprlpt`, `ctougpg`, `ctoclasssemester`, `ctohrsweek`, `ctohrsengaged`, `ctomaxhrs`, `ctoc`, `ctofile`) VALUES
(3, 2, 'asd', 'sd', 'wd', 'wd', 12, 3, 2, 3, ''),
(4, 2, 'asd', 'a', 'dw', 'w', 12, 21, 1, 2, ''),
(25, 3, 'iuhf', 'iuh', 'iuh', 'iuh', 1, 3, 23, 43, ''),
(26, 3, 'sdvsd', 'dw', 'weew', 'wewe', 3, 2, 42, 1, ''),
(29, 4, 'qw', 'eqw', 'w', 'qwe', 1, 12, -1, 2, ''),
(102, 1, 'asdasd', 'das', 'dasd', 'dasdeqw', 87887, 7, 1, 87, 'NAN'),
(103, 1, 'sd', 'ub', 'uhb', 'uhb', 8, 7, 76, 76, 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg'),
(104, 1, 'cto', '', '', '', 0, 0, 0, 0, 'NAN'),
(106, 7, 'CRS', 'L', 'UG', '6', 4, 4, 2, 200, 'users/faculty1@gmail.com/1_1.jpg'),
(107, 7, 'CRS2', 'rt', 'PG', '4', 5, 1, 1, 90, 'NAN'),
(108, 10, '', '', '', '', 0, 0, 0, 0, 'NAN'),
(111, 11, '', '', '', '', 0, 0, 0, 0, 'NAN');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_1_dar`
--

CREATE TABLE `part_b_cat_1_dar` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `dara` varchar(200) NOT NULL,
  `darb` varchar(200) NOT NULL,
  `darfile` varchar(200) NOT NULL DEFAULT 'NAN'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_1_dar`
--

INSERT INTO `part_b_cat_1_dar` (`id`, `formId`, `dara`, `darb`, `darfile`) VALUES
(95, 1, '', '', 'NAN'),
(97, 7, 'GHI', 'JI', 'NAN'),
(98, 7, 'HJI', 'RT', 'NAN'),
(99, 10, '', '', 'NAN'),
(102, 11, '', '', 'NAN');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_2`
--

CREATE TABLE `part_b_cat_2` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_2`
--

INSERT INTO `part_b_cat_2` (`id`, `formId`) VALUES
(1, 1),
(2, 2),
(3, 1),
(4, 1),
(5, 1),
(6, 3),
(7, 4),
(8, 5),
(9, 6),
(10, 7),
(11, 8),
(12, 9),
(13, 10),
(14, 11);

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_2_act`
--

CREATE TABLE `part_b_cat_2_act` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `ea` varchar(200) NOT NULL,
  `eb` varchar(200) NOT NULL,
  `efile` varchar(200) NOT NULL DEFAULT 'NAN'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_2_act`
--

INSERT INTO `part_b_cat_2_act` (`id`, `formId`, `ea`, `eb`, `efile`) VALUES
(130, 1, 'jn', 'ijn', 'NAN'),
(131, 1, 'ijn', 'ijn', 'NAN'),
(132, 1, 'act', 'ac', 'NAN'),
(133, 1, 'act2', 'ac', 'NAN'),
(134, 1, 'act3', 'acc', 'NAN'),
(136, 7, 'hi', 'ki', 'NAN'),
(137, 7, 'pi', 'jo', 'NAN'),
(138, 10, '', '', 'NAN'),
(141, 11, '', '', 'NAN');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_2_c`
--

CREATE TABLE `part_b_cat_2_c` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `ca` varchar(200) NOT NULL,
  `cb` varchar(200) NOT NULL,
  `cfile` varchar(200) NOT NULL DEFAULT 'NAN'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_2_c`
--

INSERT INTO `part_b_cat_2_c` (`id`, `formId`, `ca`, `cb`, `cfile`) VALUES
(107, 1, 'kjn', 'jkn', 'NAN'),
(108, 1, 'kjn', 'kjn', 'NAN'),
(109, 1, 'nba', 'nb', 'NAN'),
(111, 7, '', '', 'NAN'),
(112, 10, '', '', 'NAN'),
(115, 11, '', '', 'NAN');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_2_exc`
--

CREATE TABLE `part_b_cat_2_exc` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `eca` varchar(200) NOT NULL,
  `ecb` varchar(200) NOT NULL,
  `ecfile` varchar(200) NOT NULL DEFAULT 'NAN'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_2_exc`
--

INSERT INTO `part_b_cat_2_exc` (`id`, `formId`, `eca`, `ecb`, `ecfile`) VALUES
(147, 1, 'jn', 'ijn', 'NAN'),
(148, 1, 'jb', 'hjb', 'NAN'),
(149, 1, '53', '1daf', 'NAN'),
(150, 1, 'exc', 'ac', 'NAN'),
(151, 1, 'exc2', 'ss', 'NAN'),
(153, 7, '', '', 'NAN'),
(154, 10, '', '', 'NAN'),
(157, 11, '', '', 'NAN');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_2_ha`
--

CREATE TABLE `part_b_cat_2_ha` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `ha` varchar(200) NOT NULL,
  `hb` varchar(200) NOT NULL,
  `hfile` varchar(200) NOT NULL DEFAULT 'NAN'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_2_ha`
--

INSERT INTO `part_b_cat_2_ha` (`id`, `formId`, `ha`, `hb`, `hfile`) VALUES
(139, 1, 'jnf', 'in', 'NAN'),
(140, 1, 'ijn', 'ijn', 'NAN'),
(141, 1, 'ter', 'qwe', 'NAN'),
(142, 1, 'admins', 'ams', 'NAN'),
(143, 1, '', '', 'NAN'),
(145, 7, 'ma', 'ji', 'NAN'),
(146, 10, '', '', 'NAN'),
(149, 11, '', '', 'NAN');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_3`
--

CREATE TABLE `part_b_cat_3` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `phdne` int(11) NOT NULL,
  `phdts` int(11) NOT NULL,
  `phdda` int(11) NOT NULL,
  `phdfile` varchar(200) NOT NULL DEFAULT 'NAN',
  `mtechne` int(11) NOT NULL,
  `mtechts` int(11) NOT NULL,
  `mtechda` int(11) NOT NULL,
  `mtechfile` varchar(200) NOT NULL DEFAULT 'NAN',
  `btechne` int(11) NOT NULL,
  `btechts` int(11) NOT NULL,
  `btechda` int(11) NOT NULL,
  `btechfile` varchar(200) NOT NULL DEFAULT 'NAN'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_3`
--

INSERT INTO `part_b_cat_3` (`id`, `formId`, `phdne`, `phdts`, `phdda`, `phdfile`, `mtechne`, `mtechts`, `mtechda`, `mtechfile`, `btechne`, `btechts`, `btechda`, `btechfile`) VALUES
(1, 2, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, ''),
(2, 1, 0, 0, 0, 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/Falcon-9-Rocket-in-the-Hangar.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/nice back.png'),
(3, 1, 0, 0, 0, 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/Falcon-9-Rocket-in-the-Hangar.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/nice back.png'),
(4, 1, 0, 0, 0, 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/Falcon-9-Rocket-in-the-Hangar.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/nice back.png'),
(5, 1, 0, 0, 0, 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/Falcon-9-Rocket-in-the-Hangar.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/nice back.png'),
(6, 1, 0, 0, 0, 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/Falcon-9-Rocket-in-the-Hangar.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/nice back.png'),
(7, 1, 0, 0, 0, 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/Falcon-9-Rocket-in-the-Hangar.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/nice back.png'),
(8, 3, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, ''),
(9, 1, 0, 0, 0, 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/Falcon-9-Rocket-in-the-Hangar.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/nice back.png'),
(10, 4, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, ''),
(11, 1, 0, 0, 0, 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/Falcon-9-Rocket-in-the-Hangar.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/nice back.png'),
(12, 1, 0, 0, 0, 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/Falcon-9-Rocket-in-the-Hangar.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/nice back.png'),
(13, 1, 0, 0, 0, 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/Falcon-9-Rocket-in-the-Hangar.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/nice back.png'),
(14, 1, 0, 0, 0, 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/Falcon-9-Rocket-in-the-Hangar.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/nice back.png'),
(15, 1, 0, 0, 0, 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/Falcon-9-Rocket-in-the-Hangar.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/nice back.png'),
(16, 1, 0, 0, 0, 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/Falcon-9-Rocket-in-the-Hangar.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/nice back.png'),
(17, 1, 0, 0, 0, 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/Falcon-9-Rocket-in-the-Hangar.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/nice back.png'),
(18, 1, 0, 0, 0, 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/Falcon-9-Rocket-in-the-Hangar.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/nice back.png'),
(19, 1, 0, 0, 0, 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/Falcon-9-Rocket-in-the-Hangar.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/nice back.png'),
(20, 1, 0, 0, 0, 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/Falcon-9-Rocket-in-the-Hangar.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/nice back.png'),
(21, 1, 0, 0, 0, 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/Falcon-9-Rocket-in-the-Hangar.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/nice back.png'),
(22, 1, 0, 0, 0, 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/Falcon-9-Rocket-in-the-Hangar.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/nice back.png'),
(23, 1, 0, 0, 0, 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/Falcon-9-Rocket-in-the-Hangar.jpg', 0, 0, 0, 'users/manish.potey@somaiya.edu/nice back.png'),
(24, 5, 0, 0, 0, 'NAN', 0, 0, 0, 'NAN', 0, 0, 0, 'NAN'),
(25, 6, 0, 0, 0, 'NAN', 0, 0, 0, 'NAN', 0, 0, 0, 'NAN'),
(26, 7, 0, 0, 9, 'NAN', 0, 0, 0, 'NAN', 0, 0, 0, 'NAN'),
(27, 8, 0, 0, 0, 'NAN', 0, 0, 0, 'NAN', 0, 0, 0, 'NAN'),
(28, 9, 0, 0, 0, 'NAN', 0, 0, 0, 'NAN', 0, 0, 0, 'NAN'),
(29, 10, 0, 0, 0, 'users/faculty@gmail.com/Exp09.docx', 0, 0, 0, 'users/faculty@gmail.com/TY COMP KJSCE Syllabus.pdf', 0, 0, 0, 'NAN'),
(30, 11, 2, 4, 1, 'NAN', 1, 2, 1, 'NAN', 2, 3, 2, 'NAN');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_3_bk`
--

CREATE TABLE `part_b_cat_3_bk` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `pptitlebk` varchar(200) NOT NULL,
  `ppnprbk` varchar(200) NOT NULL,
  `ppisbnbk` varchar(200) NOT NULL,
  `ppdatebk` date NOT NULL,
  `ppifbk` varchar(200) NOT NULL,
  `customRadioInline1bk` varchar(200) NOT NULL,
  `ppncabk` varchar(200) NOT NULL,
  `pp3file` varchar(200) NOT NULL DEFAULT 'NAN'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_3_bk`
--

INSERT INTO `part_b_cat_3_bk` (`id`, `formId`, `pptitlebk`, `ppnprbk`, `ppisbnbk`, `ppdatebk`, `ppifbk`, `customRadioInline1bk`, `ppncabk`, `pp3file`) VALUES
(61, 1, 'yeet', 'egr', 'erge', '2019-01-16', 'qwe', '', 'dqdw', 'users/manish.potey@somaiya.edu/13259643_1283674768370253_1197858746_n.jpg'),
(62, 1, 'jeoe', 'ihiuh', 'jhg', '2019-01-16', 'kh', 'No', 'oihlijo', 'NAN'),
(64, 7, '', '', '', '0000-00-00', '', '', '', 'NAN'),
(65, 10, '', '', '', '0000-00-00', '', '', '', 'NAN'),
(68, 11, '', '', '', '0000-00-00', '', '', '', 'NAN');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_3_cres`
--

CREATE TABLE `part_b_cat_3_cres` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `tca` varchar(200) NOT NULL,
  `acb` varchar(200) NOT NULL,
  `dcc` date NOT NULL,
  `gcd` int(11) NOT NULL,
  `research3file` varchar(200) NOT NULL DEFAULT 'NAN'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_3_cres`
--

INSERT INTO `part_b_cat_3_cres` (`id`, `formId`, `tca`, `acb`, `dcc`, `gcd`, `research3file`) VALUES
(44, 1, 'er', 'ty', '2019-01-09', 56, 'users/manish.potey@somaiya.edu/MEAGL.png'),
(45, 1, 'cres', '', '0000-00-00', 0, 'NAN'),
(47, 7, '', '', '0000-00-00', 0, 'NAN'),
(48, 10, '', '', '0000-00-00', 0, 'NAN'),
(51, 11, '', '', '0000-00-00', 0, 'NAN');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_3_ores`
--

CREATE TABLE `part_b_cat_3_ores` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `tta` varchar(200) NOT NULL,
  `aab` varchar(200) NOT NULL,
  `ddc` date NOT NULL,
  `ggd` int(11) NOT NULL,
  `research2file` varchar(200) NOT NULL DEFAULT 'NAN'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_3_ores`
--

INSERT INTO `part_b_cat_3_ores` (`id`, `formId`, `tta`, `aab`, `ddc`, `ggd`, `research2file`) VALUES
(32, 1, 'yu', 'nm', '2019-01-02', 89, 'users/manish.potey@somaiya.edu/7160610404_f57bd6db8f_n.jpg'),
(34, 7, '', '', '0000-00-00', 0, 'NAN'),
(35, 10, '', '', '0000-00-00', 0, 'NAN'),
(38, 11, '', '', '0000-00-00', 0, 'NAN');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_3_pip`
--

CREATE TABLE `part_b_cat_3_pip` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `dpi` varchar(200) NOT NULL,
  `drf` date NOT NULL,
  `dfile` varchar(200) NOT NULL DEFAULT 'NAN'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_3_pip`
--

INSERT INTO `part_b_cat_3_pip` (`id`, `formId`, `dpi`, `drf`, `dfile`) VALUES
(32, 1, 'er', '2019-01-09', 'users/manish.potey@somaiya.edu/e4a0b4a657040c64c017fe07957cf9a1.jpg'),
(34, 7, '', '0000-00-00', 'NAN'),
(35, 10, '', '0000-00-00', 'NAN'),
(38, 11, '', '0000-00-00', 'NAN');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_3_pp`
--

CREATE TABLE `part_b_cat_3_pp` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `pptitle` varchar(200) NOT NULL,
  `ppnpr` varchar(200) NOT NULL,
  `ppisbn` varchar(200) NOT NULL,
  `ppif` varchar(200) NOT NULL,
  `customRadioInline1` varchar(200) NOT NULL,
  `ppnca` varchar(200) NOT NULL,
  `ppfile` varchar(200) NOT NULL DEFAULT 'NAN'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_3_pp`
--

INSERT INTO `part_b_cat_3_pp` (`id`, `formId`, `pptitle`, `ppnpr`, `ppisbn`, `ppif`, `customRadioInline1`, `ppnca`, `ppfile`) VALUES
(60, 1, 'hey', '34', '123', 'sd', '', '12', 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg'),
(61, 1, 'retu', 'wew', 'qwq', 'ree', 'No', '12', 'NAN'),
(63, 7, '', '', '', '', '', '', 'NAN'),
(64, 10, '', '', '', '', '', '', 'NAN'),
(67, 11, '', '', '', '', '', '', 'NAN');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_3_ppic`
--

CREATE TABLE `part_b_cat_3_ppic` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `pptitleic` varchar(200) NOT NULL,
  `ppnpric` varchar(200) NOT NULL,
  `ppisbnic` varchar(200) NOT NULL,
  `ppific` varchar(200) NOT NULL,
  `customRadioInline1ic` varchar(200) NOT NULL,
  `ppncaic` varchar(200) NOT NULL,
  `pp1file` varchar(200) NOT NULL DEFAULT 'NAN'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_3_ppic`
--

INSERT INTO `part_b_cat_3_ppic` (`id`, `formId`, `pptitleic`, `ppnpric`, `ppisbnic`, `ppific`, `customRadioInline1ic`, `ppncaic`, `pp1file`) VALUES
(60, 1, 'ghi', '12', 'as', '34', '', '12', 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg'),
(61, 1, 'HI', 'io', 'ojoi', 'jk', 'No', 'kln', 'NAN'),
(63, 7, '', '', '', '', '', '', 'NAN'),
(64, 10, '', '', '', '', '', '', 'NAN'),
(67, 11, '', '', '', '', '', '', 'NAN');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_3_ppinc`
--

CREATE TABLE `part_b_cat_3_ppinc` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `pptitleinc` varchar(200) NOT NULL,
  `ppnprinc` varchar(200) NOT NULL,
  `ppisbnpinc` varchar(200) NOT NULL,
  `ppifinc` varchar(200) NOT NULL,
  `customRadioInline1inc` varchar(200) NOT NULL,
  `ppncainc` varchar(200) NOT NULL,
  `pp2file` varchar(200) NOT NULL DEFAULT 'NAN'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_3_ppinc`
--

INSERT INTO `part_b_cat_3_ppinc` (`id`, `formId`, `pptitleinc`, `ppnprinc`, `ppisbnpinc`, `ppifinc`, `customRadioInline1inc`, `ppncainc`, `pp2file`) VALUES
(88, 1, 'He3', 'NS2', '57021', 'byt', '', '23', 'users/manish.potey@somaiya.edu/C5CXYlHUoAUPGwX.jpg'),
(89, 1, 'asd', 'asd', 'fe', 'we', 'No', '123', 'NAN'),
(90, 1, 'hola', 'afwe', 'wew23', 'ewwewewe', 'No', '3', 'NAN'),
(92, 7, '', '', '', '', '', '', 'NAN'),
(93, 10, '', '', '', '', '', '', 'NAN'),
(96, 11, '', '', '', '', '', '', 'NAN');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_3_res`
--

CREATE TABLE `part_b_cat_3_res` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `ta` varchar(200) NOT NULL,
  `ab` varchar(200) NOT NULL,
  `dc` date NOT NULL,
  `gd` int(11) NOT NULL,
  `research1file` varchar(200) NOT NULL DEFAULT 'NAN'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_3_res`
--

INSERT INTO `part_b_cat_3_res` (`id`, `formId`, `ta`, `ab`, `dc`, `gd`, `research1file`) VALUES
(60, 1, 'ewr', 're', '2019-01-10', 34, 'users/manish.potey@somaiya.edu/591235.jpg'),
(61, 1, 'ge', 'er', '2019-01-09', 5, 'NAN'),
(63, 7, '', '', '0000-00-00', 0, 'NAN'),
(64, 10, '', '', '0000-00-00', 0, 'NAN'),
(67, 11, '', '', '0000-00-00', 0, 'NAN');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_4`
--

CREATE TABLE `part_b_cat_4` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_4`
--

INSERT INTO `part_b_cat_4` (`id`, `formId`) VALUES
(1, 2),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 3),
(9, 1),
(10, 4),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 5),
(37, 6),
(38, 7),
(39, 7),
(40, 7),
(41, 8),
(42, 9),
(43, 10),
(44, 10),
(45, 11),
(46, 11),
(47, 11),
(48, 11);

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_4_creds`
--

CREATE TABLE `part_b_cat_4_creds` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `cativ2_dp` varchar(200) NOT NULL,
  `cativ2` varchar(200) NOT NULL,
  `cativ3file` varchar(200) NOT NULL DEFAULT 'NAN'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_4_creds`
--

INSERT INTO `part_b_cat_4_creds` (`id`, `formId`, `cativ2_dp`, `cativ2`, `cativ3file`) VALUES
(44, 1, '23', '34', 'users/manish.potey@somaiya.edu/1_2.jpg'),
(45, 1, 'fef', '', 'NAN'),
(47, 7, '', '', 'NAN'),
(48, 10, '', '', 'NAN'),
(51, 11, '', '', 'NAN');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_4_inv`
--

CREATE TABLE `part_b_cat_4_inv` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `cativ1_dp` varchar(200) NOT NULL,
  `cativ1_datee` date NOT NULL,
  `cativ1_o` varchar(200) NOT NULL,
  `cativ2file` varchar(200) NOT NULL DEFAULT 'NAN'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_4_inv`
--

INSERT INTO `part_b_cat_4_inv` (`id`, `formId`, `cativ1_dp`, `cativ1_datee`, `cativ1_o`, `cativ2file`) VALUES
(32, 1, '23', '2019-01-09', '234', 'users/manish.potey@somaiya.edu/Falcon-9-Rocket-in-the-Hangar.jpg'),
(34, 7, '', '0000-00-00', '', 'NAN'),
(35, 10, '', '0000-00-00', '', 'NAN'),
(38, 11, '', '0000-00-00', '', 'NAN');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_4_sem`
--

CREATE TABLE `part_b_cat_4_sem` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `cativ_dp` varchar(200) NOT NULL,
  `cativ_datee` date NOT NULL,
  `cativ_o` varchar(200) NOT NULL,
  `cativ1file` varchar(200) NOT NULL DEFAULT 'NAN'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_4_sem`
--

INSERT INTO `part_b_cat_4_sem` (`id`, `formId`, `cativ_dp`, `cativ_datee`, `cativ_o`, `cativ1file`) VALUES
(32, 1, '43', '2019-01-10', '45', 'users/manish.potey@somaiya.edu/christ-the-redeemer-rio-de-janeiro-brazil-south-america.jpg'),
(34, 7, '', '0000-00-00', '', 'NAN'),
(35, 10, '', '0000-00-00', '', 'NAN'),
(38, 11, '', '0000-00-00', '', 'NAN');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_table`
--

CREATE TABLE `part_b_table` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_table`
--

INSERT INTO `part_b_table` (`id`, `year`, `facultyId`) VALUES
(1, 2019, 2),
(3, 2019, 3),
(4, 2019, 7),
(5, 2017, 1),
(6, 2019, 22),
(7, 2019, 21),
(8, 2018, 21),
(9, 2019, 24),
(10, 2017, 17),
(11, 2017, 21);

-- --------------------------------------------------------

--
-- Table structure for table `recommend_for_cas`
--

CREATE TABLE `recommend_for_cas` (
  `id` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `recommend` int(11) NOT NULL,
  `currentyear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recommend_for_cas`
--

INSERT INTO `recommend_for_cas` (`id`, `facultyId`, `recommend`, `currentyear`) VALUES
(2, 17, 1, 2019),
(3, 6, 1, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `submitted_for_review_table`
--

CREATE TABLE `submitted_for_review_table` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `partA` int(11) NOT NULL DEFAULT '0',
  `partB` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submitted_for_review_table`
--

INSERT INTO `submitted_for_review_table` (`id`, `year`, `facultyId`, `partA`, `partB`) VALUES
(1, 2019, 2, 1, 1),
(2, 2018, 2, 1, 1),
(3, 2019, 7, 1, 1),
(4, 2018, 7, 1, 1),
(5, 2018, 3, 0, 1),
(6, 2019, 17, 1, 1),
(7, 2018, 17, 1, 1),
(8, 2019, 21, 1, 0),
(9, 2018, 21, 1, 0),
(10, 2018, 18, 1, 0),
(11, 2019, 19, 1, 1),
(12, 2018, 19, 1, 1),
(13, 2019, 6, 1, 1),
(14, 2018, 6, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `summary_table`
--

CREATE TABLE `summary_table` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `selfA` float NOT NULL,
  `selfB` float NOT NULL,
  `self_avgpi` float NOT NULL,
  `hodA` float NOT NULL,
  `hodB` float NOT NULL,
  `hod_avgpi` float NOT NULL,
  `committeeA` float NOT NULL,
  `committeeB` float NOT NULL,
  `committee_avgpi` float NOT NULL,
  `hodremarksA` varchar(200) NOT NULL,
  `hodremarksBcat1` varchar(200) NOT NULL,
  `hodremarksBcat2` varchar(200) NOT NULL,
  `hodremarksBcat3` varchar(200) NOT NULL,
  `hodremarksBcat4` varchar(200) NOT NULL,
  `hodremarksavgpi` varchar(200) NOT NULL,
  `hodremarkscum` varchar(200) NOT NULL,
  `committeeremarksA` varchar(200) NOT NULL,
  `committeeremarksBcat1` varchar(200) NOT NULL,
  `committeeremarksBcat2` varchar(200) NOT NULL,
  `committeeremarksBcat3` varchar(200) NOT NULL,
  `committeeremarksBcat4` varchar(200) NOT NULL,
  `committeeremarksavgpi` varchar(200) NOT NULL,
  `committeeremarkscum` varchar(200) NOT NULL,
  `final_recomm` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `summary_table`
--

INSERT INTO `summary_table` (`id`, `year`, `facultyId`, `selfA`, `selfB`, `self_avgpi`, `hodA`, `hodB`, `hod_avgpi`, `committeeA`, `committeeB`, `committee_avgpi`, `hodremarksA`, `hodremarksBcat1`, `hodremarksBcat2`, `hodremarksBcat3`, `hodremarksBcat4`, `hodremarksavgpi`, `hodremarkscum`, `committeeremarksA`, `committeeremarksBcat1`, `committeeremarksBcat2`, `committeeremarksBcat3`, `committeeremarksBcat4`, `committeeremarksavgpi`, `committeeremarkscum`, `final_recomm`) VALUES
(1, 2019, 2, 64.03, 72.48, 70.37, 68.36, 71.51, 70.72, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 2019, 17, 55.89, 56.46, 56.32, 0, 54.55, 40.91, 32.09, 45.42, 42.09, 'well', 'done', 'lads', 'today', 'we', 'have', 'won', 'well', 'done', 'lads', 'today', 'we', 'have', 'won', 'nice teacher'),
(3, 2019, 21, 44.48, 35.14, 37.48, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 2018, 21, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 2018, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 2019, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 2018, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 2019, 6, 32, 31, 31.25, 14, 26, 23, 16, 22, 20.5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 2018, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cas_approval_table`
--
ALTER TABLE `cas_approval_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_table`
--
ALTER TABLE `faculty_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fields_table`
--
ALTER TABLE `fields_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multiplication_factor_table`
--
ALTER TABLE `multiplication_factor_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp_table`
--
ALTER TABLE `otp_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partb_cat1_pi`
--
ALTER TABLE `partb_cat1_pi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partb_cat2_pi`
--
ALTER TABLE `partb_cat2_pi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partb_cat3_pi`
--
ALTER TABLE `partb_cat3_pi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partb_cat4_pi`
--
ALTER TABLE `partb_cat4_pi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_a_doc`
--
ALTER TABLE `part_a_doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_a_gpi`
--
ALTER TABLE `part_a_gpi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_a_table`
--
ALTER TABLE `part_a_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_b_cat_1`
--
ALTER TABLE `part_b_cat_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_b_cat_1_cte`
--
ALTER TABLE `part_b_cat_1_cte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_b_cat_1_cto`
--
ALTER TABLE `part_b_cat_1_cto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_b_cat_1_dar`
--
ALTER TABLE `part_b_cat_1_dar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_b_cat_2`
--
ALTER TABLE `part_b_cat_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_b_cat_2_act`
--
ALTER TABLE `part_b_cat_2_act`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_b_cat_2_c`
--
ALTER TABLE `part_b_cat_2_c`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_b_cat_2_exc`
--
ALTER TABLE `part_b_cat_2_exc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_b_cat_2_ha`
--
ALTER TABLE `part_b_cat_2_ha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_b_cat_3`
--
ALTER TABLE `part_b_cat_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_b_cat_3_bk`
--
ALTER TABLE `part_b_cat_3_bk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_b_cat_3_cres`
--
ALTER TABLE `part_b_cat_3_cres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_b_cat_3_ores`
--
ALTER TABLE `part_b_cat_3_ores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_b_cat_3_pip`
--
ALTER TABLE `part_b_cat_3_pip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_b_cat_3_pp`
--
ALTER TABLE `part_b_cat_3_pp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_b_cat_3_ppic`
--
ALTER TABLE `part_b_cat_3_ppic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_b_cat_3_ppinc`
--
ALTER TABLE `part_b_cat_3_ppinc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_b_cat_3_res`
--
ALTER TABLE `part_b_cat_3_res`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_b_cat_4`
--
ALTER TABLE `part_b_cat_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_b_cat_4_creds`
--
ALTER TABLE `part_b_cat_4_creds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_b_cat_4_inv`
--
ALTER TABLE `part_b_cat_4_inv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_b_cat_4_sem`
--
ALTER TABLE `part_b_cat_4_sem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_b_table`
--
ALTER TABLE `part_b_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recommend_for_cas`
--
ALTER TABLE `recommend_for_cas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submitted_for_review_table`
--
ALTER TABLE `submitted_for_review_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `summary_table`
--
ALTER TABLE `summary_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cas_approval_table`
--
ALTER TABLE `cas_approval_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `faculty_table`
--
ALTER TABLE `faculty_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `fields_table`
--
ALTER TABLE `fields_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `multiplication_factor_table`
--
ALTER TABLE `multiplication_factor_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `otp_table`
--
ALTER TABLE `otp_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `partb_cat1_pi`
--
ALTER TABLE `partb_cat1_pi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `partb_cat2_pi`
--
ALTER TABLE `partb_cat2_pi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `partb_cat3_pi`
--
ALTER TABLE `partb_cat3_pi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `partb_cat4_pi`
--
ALTER TABLE `partb_cat4_pi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `part_a_doc`
--
ALTER TABLE `part_a_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT for table `part_a_gpi`
--
ALTER TABLE `part_a_gpi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `part_a_table`
--
ALTER TABLE `part_a_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `part_b_cat_1`
--
ALTER TABLE `part_b_cat_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `part_b_cat_1_cte`
--
ALTER TABLE `part_b_cat_1_cte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
--
-- AUTO_INCREMENT for table `part_b_cat_1_cto`
--
ALTER TABLE `part_b_cat_1_cto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `part_b_cat_1_dar`
--
ALTER TABLE `part_b_cat_1_dar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `part_b_cat_2`
--
ALTER TABLE `part_b_cat_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `part_b_cat_2_act`
--
ALTER TABLE `part_b_cat_2_act`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
--
-- AUTO_INCREMENT for table `part_b_cat_2_c`
--
ALTER TABLE `part_b_cat_2_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `part_b_cat_2_exc`
--
ALTER TABLE `part_b_cat_2_exc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;
--
-- AUTO_INCREMENT for table `part_b_cat_2_ha`
--
ALTER TABLE `part_b_cat_2_ha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;
--
-- AUTO_INCREMENT for table `part_b_cat_3`
--
ALTER TABLE `part_b_cat_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `part_b_cat_3_bk`
--
ALTER TABLE `part_b_cat_3_bk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `part_b_cat_3_cres`
--
ALTER TABLE `part_b_cat_3_cres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `part_b_cat_3_ores`
--
ALTER TABLE `part_b_cat_3_ores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `part_b_cat_3_pip`
--
ALTER TABLE `part_b_cat_3_pip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `part_b_cat_3_pp`
--
ALTER TABLE `part_b_cat_3_pp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `part_b_cat_3_ppic`
--
ALTER TABLE `part_b_cat_3_ppic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `part_b_cat_3_ppinc`
--
ALTER TABLE `part_b_cat_3_ppinc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `part_b_cat_3_res`
--
ALTER TABLE `part_b_cat_3_res`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `part_b_cat_4`
--
ALTER TABLE `part_b_cat_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `part_b_cat_4_creds`
--
ALTER TABLE `part_b_cat_4_creds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `part_b_cat_4_inv`
--
ALTER TABLE `part_b_cat_4_inv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `part_b_cat_4_sem`
--
ALTER TABLE `part_b_cat_4_sem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `part_b_table`
--
ALTER TABLE `part_b_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `recommend_for_cas`
--
ALTER TABLE `recommend_for_cas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `submitted_for_review_table`
--
ALTER TABLE `submitted_for_review_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `summary_table`
--
ALTER TABLE `summary_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
