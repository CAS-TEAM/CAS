-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2019 at 08:02 PM
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
(5, 6, 'Approved', 2019, 2018),
(6, 25, 'Approved', 2019, 2018),
(7, 27, 'Approved', 2019, 2018),
(9, 31, 'Approved', 2020, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_table`
--

CREATE TABLE `faculty_table` (
  `id` int(11) NOT NULL,
  `faculty_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `ecode` varchar(200) NOT NULL,
  `date_of_joining` date NOT NULL,
  `department` varchar(50) NOT NULL,
  `mobileno` bigint(11) NOT NULL DEFAULT '0',
  `profilePicLocation` varchar(100) NOT NULL DEFAULT 'defaults/default_userprofile_pic.png',
  `faculty` int(11) NOT NULL DEFAULT '0',
  `hod` int(11) NOT NULL DEFAULT '0',
  `committee` int(11) NOT NULL DEFAULT '0',
  `principal` int(11) NOT NULL DEFAULT '0',
  `admin` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_table`
--

INSERT INTO `faculty_table` (`id`, `faculty_name`, `email`, `password`, `ecode`, `date_of_joining`, `department`, `mobileno`, `profilePicLocation`, `faculty`, `hod`, `committee`, `principal`, `admin`) VALUES
(1, 'Prof. Babaso Aldar', 'babasoaldar@somaiya.edu', '$2y$10$bd4GNgydExAbWXbrf8P1SuVtVBdwxJ2oM66S.j1G/T5utSB1IeSCS', '0', '2018-05-12', 'Computer', 0, 'users/babasoaldar@somaiya.edu/profilepic.jpg', 1, 1, 1, 0, 1),
(2, 'Prof. Manish Potey', 'manish.potey@somaiya.edu', '$2y$10$mRi97USluJQZPZtwSgS3ZOk1yybigUHHRhAJJ/yVPS8rF/DFRTGmK', '0', '2010-08-17', 'Computer', 0, 'users/manish.potey@somaiya.edu/profilepic.jpg', 1, 1, 0, 0, 0),
(3, 'Jyoti Trymbake', 'jyoti.trymbake@somaiya.edu', '$2y$10$f06wIJ29VeGf1oGfh2P95uHgYPXIPuPwC4NxE/xYolwy2tn3H0O1q', '0', '2011-06-14', 'Computer', 0, 'users/jyoti.trymbake@somaiya.edu/profilepic.jpg', 1, 0, 1, 0, 0),
(4, 'Prof. Poonam Bhogale', 'poonambhogale@somaiya.edu', '$2y$10$W6lbNYTxCAgG2GjeJ8xHuuV/BJg6NCMBifF5pvBJ7aDIiV2bIMTzC', '0', '2008-11-11', 'Etrx', 0, 'defaults/default_userprofile_pic.png', 1, 1, 0, 0, 0),
(5, 'Anjali', 'anjali@gmail.com', '$2y$10$2hpkZa7tqA98LAhOiqq1ieaByObfDo..bwzSLbZCKJRVvhQTziwkW', '0', '1999-07-26', 'Computer', 0, 'defaults/default_userprofile_pic.png', 1, 0, 1, 1, 0),
(6, 'Sharvai Patil', 'sharvai.p@somaiya.edu', '$2y$10$lTBgAr587gnLyzoZYR0UB.oS0jywazLATQdJNrRhdw5ltyvWiAlIu', '0', '2001-01-13', 'Computer', 0, 'users/sharvai.p@somaiya.edu/profilepic.jpg', 1, 0, 0, 1, 0),
(11, 'Faculty420', 'email', '$2y$10$LDi9krgwN5CPQAZj31/tdeD/VkvBkkFeHeYWBSgIBUYWSrOHCOK8G', '0', '1970-01-01', 'department', 0, 'defaults/default_userprofile_pic.png', 0, 0, 0, 0, 0),
(12, 'Anjvai', 'anjvai@somaiya.edu', '$2y$10$xwU8.JQXFVdylSGmzRu6sOAI6LwBA6RCSkIfFaN5oH1aOzbAAXJ2.', '0', '1999-12-01', 'Computer', 0, 'defaults/default_userprofile_pic.png', 0, 1, 0, 1, 0),
(13, 'gfg', 'uhiud@gmail.com', '$2y$10$T7J7Zp7kzXwuzW21FHUI0ekl4RrbFPf2tgEjY3vY508W6nIPM.29a', '0', '1999-12-12', 'Computer', 0, 'defaults/default_userprofile_pic.png', 0, 1, 0, 0, 0),
(14, 'gfyeu', 'uidhu@gmail.com', '$2y$10$.NZE8URcEbGMEbXTNEupsuOYUXerLNdcH6ChciZb8rg3XJvdioiA.', '0', '2000-04-04', 'Extc', 0, 'defaults/default_userprofile_pic.png', 0, 0, 0, 0, 0),
(15, 'nsiuhfu', 'hiufwh@gmail.com', '$2y$10$OzibKeM11giBfC7x3BMcXeFWmBSEs9tg8x6CCVYfRkSSBrruK0YPq', '0', '1999-03-03', 'Etrx', 0, 'defaults/default_userprofile_pic.png', 1, 1, 1, 1, 1),
(16, 'jrgjie', 'jjtijo@gmail.com', '$2y$10$hacUv.WPNrPgfcJAi7zxhO2higW9r3Ty/Miq1DFdJ2mf3vAs3/EbK', '0', '2000-04-04', 'Extc', 0, 'defaults/default_userprofile_pic.png', 0, 0, 0, 1, 1),
(17, 'Faculty', 'faculty@gmail.com', '$2y$10$NSFC/6s5VLwAnIsBLFsKuOGlN9CdOQUK0XxHP0rT0JPDEWDyjP7Mu', '0', '2000-02-02', 'Computer', 0, 'users/faculty@gmail.com/profilepic.png', 1, 0, 0, 0, 0),
(18, 'HOD', 'hod@gmail.com', '$2y$10$hLP/NqG2tCMqYQD2u45jD.WSW6lCW2Tj5DYhd6UjBKi7rzPbSa./a', '0', '2000-01-01', 'Computer', 0, 'users/hod@gmail.com/profilepic.jpg', 1, 1, 0, 0, 0),
(19, 'Committee', 'committee@gmail.com', '$2y$10$3Xs1WOGAgilOe0Tzdr8AUeUGLhbIp18FogxmRP3NF5DozwQ0qmfWi', '0', '2000-02-02', 'Computer', 0, 'users/committee@gmail.com/profilepic.jpg', 1, 0, 1, 0, 0),
(20, 'Admin', 'admin@gmail.com', '$2y$10$5Brkhy3gepjGmawgavhXNe.LfVEFNkiN83WLRNr584wiAteiIiGeW', '0', '2005-06-23', 'Computer', 0, 'users/admin@gmail.com/profilepic.jpg', 1, 0, 0, 0, 1),
(21, 'Faculty1', 'faculty1@gmail.com', '$2y$10$.2I6BlmzS2/rHufDtJEB6eyCamzWyf5ywl5iFaEkLDgqrLxM3Pbr.', '0', '2000-03-07', 'Computer', 0, 'users/faculty1@gmail.com/profilepic.jpg', 1, 0, 0, 0, 0),
(22, 'HOD1', 'hod1@gmail.com', '$2y$10$600i/OfFMlcf0/JJXjh/4OM63tLD0xKyqh.DGazG4UzGcakjvCWNW', '0', '2000-02-20', 'Computer', 0, 'users/hod1@gmail.com/profilepic.jpg', 1, 1, 0, 0, 0),
(23, 'Committee1', 'committee1@gmail.com', '$2y$10$0aoxxcL6oKEcGu/JRUMnoeFHoEwfcteAbl4bIFO1Z1vQ1LSq5lqVW', '0', '2000-02-05', 'Computer', 0, 'users/committee1@gmail.com/profilepic.png', 1, 0, 1, 0, 0),
(24, 'faculty 4', 'faculty4@somaiya.edu', '$2y$10$yCjYOlQY43lEU/MECApRjuzJRiaC0es72nAsCzbvDQJYxRnPtCkHi', '0', '2000-02-02', 'Computer', 0, 'defaults/default_userprofile_pic.png', 1, 0, 0, 0, 0),
(25, 'Faculty 2', 'faculty2@gmail.com', '$2y$10$ogTIHOwgIkRt.8wjrU0MWuO6Qg3WjVUXZ8mk.Buky32HRUZjR3MJO', '0', '1998-04-14', 'Computer', 0, 'users/faculty2@gmail.com/profilepic.jpg', 1, 0, 0, 0, 0),
(26, 'Faculty22', 'faculty22@gmail.com', '$2y$10$kwTGeyVdAA20leAuiSXVCO1wrNoz6Mvzubl5AEmLLkU6geYRzy68u', '0', '1996-04-10', 'Computer', 0, 'defaults/default_userprofile_pic.png', 1, 0, 0, 0, 0),
(28, 'faculty99', 'faculty99@gmail.com', '$2y$10$a6wFTQEyxniHoJpUbiQJs.mvZEI7wsDQDpDTJWM1bmI1vAG8kzQ72', '13005', '1999-02-20', 'Computer', 9969512230, 'users/faculty99@gmail.com/profilepic.jpg', 1, 0, 0, 0, 0),
(29, 'Dijon', 'dijon@gmail.com', '$2y$10$6BeD6uJWvTG5appyfCnx2u8hTEEDxiVX7Wy8.xoEF5xSjy.qJucta', '144553', '2004-05-22', 'Computer', 9899657578, 'defaults/default_userprofile_pic.png', 1, 0, 0, 0, 0),
(30, 'SH', 'sh@gmail.com', '$2y$10$gpugUSEG/3XIZrJ3z3GVc.nxA0gzCSHngL2NBfMww9XM4a435hasa', '556600', '2000-02-04', 'Science & Humanities', 9898348483, 'defaults/default_userprofile_pic.png', 1, 0, 0, 0, 0),
(31, 'newuser', 'newuser@gmail.com', '$2y$10$0RQakFG2Er4rCMtQRHkVFuOXdAp/5Wg.IPsBMTsLUHDhC7CFfRYSK', '1400', '1970-01-01', 'Computer', 9892111116, 'users/newuser@gmail.com/profilepic.png', 1, 0, 0, 0, 0),
(32, 'Faculty 66', 'faculty66@gmail.com', '$2y$10$Oqfn4uTquShRsYsYY6ucs..8tBl66oklWS2k.Bs7hPCxrlbvpvf5i', '1223423', '2010-07-02', 'Computer', 9898227722, 'users/faculty66@gmail.com/profilepic.jpg', 1, 0, 0, 0, 0);

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
  `cat1_pi1_self_a` float NOT NULL DEFAULT '0',
  `cat1_pi1_hod_a` float NOT NULL DEFAULT '0',
  `cat1_pi1_committee_a` float DEFAULT '0',
  `cat1_pi2_self_a` float NOT NULL DEFAULT '0',
  `cat1_pi2_hod_a` float NOT NULL DEFAULT '0',
  `cat1_pi2_committee_a` float NOT NULL DEFAULT '0',
  `cat1_pi3_self_a` float NOT NULL DEFAULT '0',
  `cat1_pi3_hod_a` float NOT NULL DEFAULT '0',
  `cat1_pi3_committee_a` float NOT NULL DEFAULT '0',
  `cat1_pi4_self_a` float NOT NULL DEFAULT '0',
  `cat1_pi4_hod_a` float NOT NULL DEFAULT '0',
  `cat1_pi4_committee_a` float NOT NULL DEFAULT '0',
  `cat1_pitotal_self_a` float NOT NULL DEFAULT '0',
  `cat1_pitotal_hod_a` float NOT NULL DEFAULT '0',
  `cat1_pitotal_committee_a` float NOT NULL DEFAULT '0'
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
(15, 2017, 21, 40, 0, 0, 40, 0, 0, 10, 0, 0, 0, 0, 0, 90, 0, 0),
(16, 2019, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 2017, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 2019, 25, 20, 20, 15, 30, 25, 20, 5, 5, 5, 10, 5, 5, 65, 55, 45),
(19, 2018, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 50, 45, 40),
(20, 2017, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 70, 60, 50),
(21, 2017, 27, 20, 15, 10, 0, 0, 0, 0, 0, 0, 10, 5, 10, 50, 20, 20),
(22, 2018, 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 50, 45, 40),
(23, 2019, 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 50, 45, 40),
(24, 2019, 28, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 30, 0, 0),
(25, 2017, 28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 2018, 28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 2019, 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 2017, 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 2019, 29, 15, 0, 0, 40, 0, 0, 10, 0, 0, 10, 0, 0, 75, 0, 0),
(30, 2020, 31, 40, 40, 30, 40, 30, 20, 10, 5, 5, 10, 5, 5, 100, 80, 60),
(31, 2019, 31, 20, 0, 0, 30, 0, 0, 10, 0, 0, 10, 0, 0, 70, 60, 50),
(32, 2018, 31, 20, 0, 0, 20, 0, 0, 10, 0, 0, 10, 0, 0, 60, 50, 40),
(33, 2017, 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 2020, 25, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 0, 0),
(35, 2020, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 2020, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 2019, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 2017, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 2019, 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `partb_cat2_pi`
--

CREATE TABLE `partb_cat2_pi` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `cat2_pii1_self_a` float NOT NULL DEFAULT '0',
  `cat2_pii1_hod_a` float NOT NULL DEFAULT '0',
  `cat2_pii1_committee_a` float NOT NULL DEFAULT '0',
  `cat2_pii2_self_a` float NOT NULL DEFAULT '0',
  `cat2_pii2_hod_a` float NOT NULL DEFAULT '0',
  `cat2_pii2_committee_a` float NOT NULL DEFAULT '0',
  `cat2_pii3_self_a` float NOT NULL DEFAULT '0',
  `cat2_pii3_hod_a` float NOT NULL DEFAULT '0',
  `cat2_pii3_committee_a` float NOT NULL DEFAULT '0',
  `cat2_pii4_self_a` float NOT NULL DEFAULT '0',
  `cat2_pii4_hod_a` float NOT NULL DEFAULT '0',
  `cat2_pii4_committee_a` float NOT NULL DEFAULT '0',
  `cat2_piitotal_self_a` float NOT NULL DEFAULT '0',
  `cat2_piitotal_hod_a` float NOT NULL DEFAULT '0',
  `cat2_piitotal_committee_a` float NOT NULL DEFAULT '0'
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
(13, 2019, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 2017, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 2019, 25, 20, 10, 10, 10, 10, 10, 20, 10, 10, 15, 10, 5, 65, 40, 35),
(16, 2018, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 50, 45, 40),
(17, 2017, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 70, 60, 50),
(18, 2017, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 2017, 27, 20, 15, 10, 20, 15, 10, 20, 15, 10, 20, 15, 10, 80, 60, 40),
(20, 2018, 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 50, 45, 40),
(21, 2019, 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 50, 45, 40),
(22, 2019, 28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 2017, 28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 2018, 28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 2019, 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 2017, 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 2019, 29, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 40, 0, 0),
(28, 2020, 31, 30, 20, 15, 20, 20, 15, 20, 10, 10, 10, 10, 10, 80, 60, 50),
(29, 2019, 31, 20, 0, 0, 20, 0, 0, 20, 0, 0, 20, 0, 0, 80, 50, 40),
(30, 2018, 31, 20, 0, 0, 20, 0, 0, 20, 0, 0, 20, 0, 0, 80, 50, 40),
(31, 2017, 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 2020, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 2020, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 2020, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 2019, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 2017, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 2019, 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `partb_cat3_pi`
--

CREATE TABLE `partb_cat3_pi` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `cat3_piii1_self_a` float DEFAULT '0',
  `cat3_piii1_hod_a` float DEFAULT '0',
  `cat3_piii1_committee_a` float DEFAULT '0',
  `cat3_piii2_self_a` float DEFAULT '0',
  `cat3_piii2_hod_a` float DEFAULT '0',
  `cat3_piii2_committee_a` float DEFAULT '0',
  `cat3_piii3_self_a` float DEFAULT '0',
  `cat3_piii3_hod_a` float DEFAULT '0',
  `cat3_piii3_committee_a` float DEFAULT '0',
  `cat3_piii4_self_a` float DEFAULT '0',
  `cat3_piii4_hod_a` float DEFAULT '0',
  `cat3_piii4_committee_a` float DEFAULT '0',
  `cat3_piii5_self_a` float DEFAULT '0',
  `cat3_piii5_hod_a` float DEFAULT '0',
  `cat3_piii5_committee_a` float DEFAULT '0',
  `cat3_piii6_self_a` float DEFAULT '0',
  `cat3_piii6_hod_a` float DEFAULT '0',
  `cat3_piii6_committee_a` float DEFAULT '0',
  `cat3_piii7_self_a` float DEFAULT '0',
  `cat3_piii7_hod_a` float DEFAULT '0',
  `cat3_piii7_committee_a` float DEFAULT '0',
  `cat3_piiires_self_a` float DEFAULT '0',
  `cat3_piiires_hod_a` float DEFAULT '0',
  `cat3_piiires_committee_a` float DEFAULT '0',
  `cat3_piii8_self_a` float DEFAULT '0',
  `cat3_piii8_hod_a` float DEFAULT '0',
  `cat3_piii8_committee_a` float DEFAULT '0',
  `cat3_piii9_self_a` float DEFAULT '0',
  `cat3_piii9_hod_a` float DEFAULT '0',
  `cat3_piii9_committee_a` float DEFAULT '0',
  `cat3_piii10_self_a` float DEFAULT '0',
  `cat3_piii10_hod_a` float DEFAULT '0',
  `cat3_piii10_committee_a` float DEFAULT '0',
  `cat3_piii11_self_a` float DEFAULT '0',
  `cat3_piii11_hod_a` float DEFAULT '0',
  `cat3_piii11_committee_a` float DEFAULT '0',
  `cat3_piiitotal_self_a` float DEFAULT '0',
  `cat3_piiitotal_hod_a` float DEFAULT '0',
  `cat3_piiitotal_committee_a` float DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partb_cat3_pi`
--

INSERT INTO `partb_cat3_pi` (`id`, `year`, `facultyId`, `cat3_piii1_self_a`, `cat3_piii1_hod_a`, `cat3_piii1_committee_a`, `cat3_piii2_self_a`, `cat3_piii2_hod_a`, `cat3_piii2_committee_a`, `cat3_piii3_self_a`, `cat3_piii3_hod_a`, `cat3_piii3_committee_a`, `cat3_piii4_self_a`, `cat3_piii4_hod_a`, `cat3_piii4_committee_a`, `cat3_piii5_self_a`, `cat3_piii5_hod_a`, `cat3_piii5_committee_a`, `cat3_piii6_self_a`, `cat3_piii6_hod_a`, `cat3_piii6_committee_a`, `cat3_piii7_self_a`, `cat3_piii7_hod_a`, `cat3_piii7_committee_a`, `cat3_piiires_self_a`, `cat3_piiires_hod_a`, `cat3_piiires_committee_a`, `cat3_piii8_self_a`, `cat3_piii8_hod_a`, `cat3_piii8_committee_a`, `cat3_piii9_self_a`, `cat3_piii9_hod_a`, `cat3_piii9_committee_a`, `cat3_piii10_self_a`, `cat3_piii10_hod_a`, `cat3_piii10_committee_a`, `cat3_piii11_self_a`, `cat3_piii11_hod_a`, `cat3_piii11_committee_a`, `cat3_piiitotal_self_a`, `cat3_piiitotal_hod_a`, `cat3_piiitotal_committee_a`) VALUES
(1, 2019, 2, 78, 78, 70, 41, 11, 10, 44, 755, 40, 56, 56, 50, 5588, 213, 100, 89, 78, 50, 77, 88, 50, 0, 0, 0, 333, 44, 20, 878, 7878, 30, 2300, 11, 10, 25, 23, 0, 150, 145, 140),
(2, 2018, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 100, 100),
(3, 2019, 17, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 10, 10, 7, 24, 24, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 39, 34, 27),
(4, 2018, 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 34, 0, 30),
(5, 2019, 21, 70, 0, 0, 10, 0, 0, 9, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 0, 0, 0, 10, 0, 0, 15, 0, 0, 15, 0, 0, 21, 0, 0, 150, 0, 0),
(6, 2018, 21, 50, 0, 0, 11, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 0, 0, 0, 10, 0, 0, 15, 0, 0, 10, 0, 0, 20, 0, 0, 150, 0, 0),
(7, 2017, 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 2019, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 2018, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 2019, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 2018, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 2017, 21, 50, 0, 0, 15, 0, 0, 0, 0, 0, 15, 0, 0, 28, 0, 0, 36, 0, 0, 28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 0, 0, 0, 0, 0, 83, 0, 0),
(13, 2019, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 2017, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 2019, 25, 20, 20, 15, 10, 5, 5, 10, 5, 5, 15, 10, 10, 40, 40, 30, 20, 20, 20, 24, 20, 20, 40, 35, 30, 15, 10, 5, 15, 10, 10, 15, 20, 20, 10, 10, 10, 100, 140, 150),
(16, 2018, 25, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 40, 0, 0, 40, 0, 0, 28, 0, 0, 0, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 175, 100, 90),
(17, 2017, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 155, 150, 100),
(18, 2017, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 50, 0, 0),
(19, 2017, 27, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 40, 0, 0, 40, 0, 0, 34, 0, 0, 0, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 175, 150, 100),
(20, 2018, 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 50, 45, 40),
(21, 2019, 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 150, 125, 100),
(22, 2019, 28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 15, 10, 8, 7, 10, 6, 3, 10, 34, 25, 30, 15, 0, 0, 0, 0, 0, 0, 0, 0, 25, 0, 0, 34, 25, 30),
(23, 2017, 28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 0, 0, 8, 0, 0, 6, 0, 0, 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 34, 0, 0),
(24, 2018, 28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 0, 0, 12, 0, 0, 4, 0, 0, 36, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 36, 0, 0),
(25, 2019, 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12, 0, 0, 10, 0, 0, 46, 0, 0, 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 40, 0, 0),
(26, 2017, 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 2019, 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 50, 0, 0, 0, 0, 0, 0, 0, 0, 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 40, 0, 0),
(28, 2020, 31, 100, 10, 0, 15, 10, 0, 10, 10, 0, 15, 10, 0, 64, 10, 10, 126, 15, 30, 26, 20, 10, 40, 40, 40, 15, 10, 0, 20, 10, 0, 10, 10, 0, 10, 10, 10, 175, 120, 100),
(29, 2019, 31, 20, 0, 0, 15, 0, 0, 10, 0, 0, 15, 0, 0, 36, 0, 0, 0, 0, 0, 6, 0, 0, 40, 0, 0, 15, 0, 0, 20, 0, 0, 20, 0, 0, 20, 0, 0, 175, 100, 50),
(30, 2018, 31, 20, 0, 0, 15, 0, 0, 10, 0, 0, 15, 0, 0, 20, 0, 0, 0, 0, 0, 12, 0, 0, 32, 0, 0, 15, 0, 0, 20, 0, 0, 20, 0, 0, 20, 0, 0, 167, 150, 100),
(31, 2017, 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 2020, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12, 0, 0, 0, 0, 0, 0, 0, 0, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12, 0, 0),
(33, 2020, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 2020, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 2019, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 2017, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 2019, 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `partb_cat4_pi`
--

CREATE TABLE `partb_cat4_pi` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `cat4_piv1_self_a` float NOT NULL DEFAULT '0',
  `cat4_piv1_hod_a` float NOT NULL DEFAULT '0',
  `cat4_piv1_committee_a` float NOT NULL DEFAULT '0',
  `cat4_piv2_self_a` float NOT NULL DEFAULT '0',
  `cat4_piv2_hod_a` float NOT NULL DEFAULT '0',
  `cat4_piv2_committee_a` float NOT NULL DEFAULT '0',
  `cat4_piv3_self_a` float NOT NULL DEFAULT '0',
  `cat4_piv3_hod_a` float NOT NULL DEFAULT '0',
  `cat4_piv3_committee_a` float NOT NULL DEFAULT '0',
  `cat4_pivtotal_self_a` float NOT NULL DEFAULT '0',
  `cat4_pivtotal_hod_a` float NOT NULL DEFAULT '0',
  `cat4_pivtotal_committee_a` float NOT NULL DEFAULT '0'
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
(12, 2017, 21, 30, 0, 0, 25, 0, 0, 10, 0, 0, 65, 0, 0),
(13, 2019, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 2017, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 2019, 25, 30, 25, 20, 10, 10, 10, 15, 15, 15, 55, 50, 45),
(16, 2018, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 60, 50, 40),
(17, 2017, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 65, 60, 50),
(18, 2017, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 2017, 27, 10, 5, 10, 10, 5, 10, 10, 5, 10, 30, 15, 30),
(20, 2018, 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, 50, 45, 40),
(21, 2019, 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, 50, 45, 40),
(22, 2019, 28, 0, 0, 0, 15, 0, 0, 0, 0, 0, 15, 0, 0),
(23, 2017, 28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 2018, 28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 2019, 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 2017, 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 2019, 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 2020, 31, 15, 10, 5, 15, 10, 5, 15, 10, 10, 45, 30, 20),
(29, 2019, 31, 20, 0, 0, 20, 0, 0, 15, 0, 0, 55, 50, 40),
(30, 2018, 31, 20, 0, 0, 20, 0, 0, 15, 0, 0, 55, 50, 40),
(31, 2017, 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 2020, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 2020, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 2020, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 2019, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 2017, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 2019, 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `part_a_doc`
--

CREATE TABLE `part_a_doc` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL DEFAULT '0',
  `srno` int(11) NOT NULL DEFAULT '0',
  `course` varchar(100) NOT NULL,
  `days` int(11) NOT NULL DEFAULT '0',
  `agency` varchar(100) NOT NULL,
  `rolee` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL DEFAULT 'NAN'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_a_doc`
--

INSERT INTO `part_a_doc` (`id`, `formId`, `srno`, `course`, `days`, `agency`, `rolee`, `file`) VALUES
(1, 1, 1, 'KJSCE', 3, 'Kj Agency', '', 'NAN'),
(2, 1, 2, 'Open Ceremony', 5, 'Kj Agency 2', '', 'NAN'),
(87, 2, 3, 'KJSCE 3', 3, 'KJSCOC', '', 'users/manish.potey@somaiya.edu/spedicey.jpg'),
(88, 2, 1, 'KJSCE', 5, 'KJSCE', '', 'users/manish.potey@somaiya.edu/spedicey.jpg'),
(89, 2, 2, 'KJSCE 2', 2, 'SKSCOAC', '', 'users/manish.potey@somaiya.edu/2_1.jpg'),
(90, 2, 4, 'KJOJ', 4, 'KJOJ', '', 'users/manish.potey@somaiya.edu/napoleon death quote.png'),
(91, 2, 5, 'Hola', 4, 'KJOOO', '', 'users/manish.potey@somaiya.edu/2_1.jpg'),
(92, 6, 0, '', 0, '', '', 'NAN'),
(93, 7, 0, '', 0, '', '', 'NAN'),
(94, 7, 0, '', 0, '', '', 'NAN'),
(95, 8, 2, 'PCC2', 4, 'SDC', '', 'users/faculty1@gmail.com/2_3.jpg'),
(96, 8, 1, 'OCC', 5, 'KJSCE', '', 'users/faculty1@gmail.com/1_1.jpg'),
(97, 9, 2, 'OCS2', 4, 'KJSDC', '', 'users//2_1.jpg'),
(98, 9, 1, 'OCS', 5, 'KJSCE', '', 'users//1_1.jpg'),
(122, 10, 1, '', 0, '', '', 'NAN'),
(123, 10, 2, '', 0, '', '', 'NAN'),
(124, 10, 3, '', 0, '', '', 'NAN'),
(125, 10, 4, '', 0, '', '', 'NAN'),
(126, 10, 5, '', 0, '', '', 'NAN'),
(127, 10, 6, 'hey', 0, '', '', 'NAN'),
(128, 11, 0, '', 0, '', '', 'NAN'),
(129, 13, 0, '', 0, '', '', 'NAN'),
(139, 15, 0, '', 0, '', '', 'NAN'),
(140, 14, 0, '', 0, '', '', 'NAN'),
(142, 16, 0, '', 0, '', '', 'NAN'),
(144, 17, 0, '', 0, '', '', 'NAN'),
(146, 19, 0, '', 0, '', '', 'NAN'),
(147, 20, 0, '', 0, '', '', 'NAN'),
(148, 14, 0, '', 0, '', '', 'NAN'),
(149, 15, 0, '', 0, '', '', 'NAN'),
(150, 16, 0, '', 0, '', '', 'NAN'),
(151, 17, 0, '', 0, '', '', 'NAN'),
(153, 18, 0, '', 0, '', '', 'NAN'),
(154, 19, 0, '', 0, '', '', 'NAN'),
(155, 20, 0, '', 0, '', '', 'NAN'),
(156, 21, 0, '', 0, '', '', 'NAN'),
(157, 22, 0, '', 0, '', '', 'NAN'),
(158, 23, 0, '', 0, '', '', 'NAN'),
(174, 0, 0, '', 0, '', '', 'NAN'),
(175, 24, 0, '', 0, '', '', 'NAN'),
(176, 25, 0, '', 0, '', '', 'NAN'),
(181, 26, 0, '', 0, '', '', 'NAN'),
(187, 27, 0, '', 0, '', '', 'NAN'),
(191, 28, 0, '', 0, '', '', 'NAN'),
(195, 29, 0, '', 0, '', '', 'NAN'),
(199, 30, 0, '', 0, '', '', 'NAN'),
(200, 31, 0, '', 0, '', '', 'NAN'),
(201, 32, 0, '', 0, '', '', 'NAN'),
(202, 33, 0, '', 0, '', '', 'NAN'),
(204, 34, 0, '', 0, '', '', 'NAN'),
(206, 36, 0, '', 0, '', '', 'NAN'),
(207, 37, 0, '', 0, '', '', 'NAN'),
(209, 38, 0, '', 0, '', '', 'NAN'),
(210, 39, 0, '', 0, '', '', 'NAN'),
(211, 35, 0, '', 0, '', '', 'NAN'),
(212, 40, 0, '', 0, '', '', 'NAN'),
(213, 41, 0, '', 0, '', '', 'NAN'),
(214, 42, 0, '', 0, '', '', 'NAN'),
(215, 43, 0, '', 0, '', '', 'NAN'),
(216, 44, 0, '', 0, '', '', 'NAN'),
(217, 45, 0, '', 0, '', '', 'NAN'),
(218, 46, 0, '', 0, '', '', 'NAN'),
(219, 47, 0, '', 0, '', '', 'NAN'),
(220, 48, 0, '', 0, '', '', 'NAN'),
(221, 49, 0, '', 0, '', '', 'NAN'),
(222, 50, 0, '', 0, '', '', 'NAN'),
(223, 51, 0, '', 0, '', '', 'NAN'),
(224, 52, 0, '', 0, '', '', 'NAN'),
(225, 53, 0, '', 0, '', '', 'NAN'),
(226, 54, 0, '', 0, '', '', 'NAN'),
(227, 55, 0, '', 0, '', '', 'NAN'),
(228, 56, 0, '', 0, '', '', 'NAN'),
(229, 57, 0, '', 0, '', '', 'NAN'),
(230, 58, 0, '', 0, '', '', 'NAN'),
(231, 59, 0, '', 0, '', '', 'NAN'),
(232, 60, 0, '', 0, '', '', 'NAN'),
(233, 61, 0, '', 0, '', '', 'NAN'),
(234, 62, 0, '', 0, '', '', 'NAN'),
(235, 63, 0, '', 0, '', '', 'NAN'),
(236, 64, 0, '', 0, '', '', 'NAN'),
(237, 65, 0, '', 0, '', '', 'NAN'),
(238, 66, 0, '', 0, '', '', 'NAN'),
(239, 67, 0, '', 0, '', '', 'NAN'),
(240, 68, 0, '', 0, '', '', 'NAN'),
(241, 69, 0, '', 0, '', '', 'NAN'),
(242, 70, 0, '', 0, '', '', 'NAN'),
(243, 71, 0, '', 0, '', '', 'NAN'),
(246, 72, 1, 'hey', 23, 'KJSCE', 'Organiser', 'users//2_1.jpg'),
(247, 72, 2, 'HEy', 2, 'KJSCE', 'Committee', 'users//1_2.jpg'),
(248, 73, 1, 'hey', 23, 'KJSCE', 'Organiser', 'NAN'),
(249, 73, 2, 'HEy', 2, 'KJSCE', 'Committee', 'NAN'),
(250, 74, 1, 'hey', 23, 'KJSCE', 'Organiser', 'NAN'),
(251, 74, 2, 'HEy', 2, 'KJSCE', 'Committee', 'NAN'),
(252, 75, 1, 'hey', 23, 'KJSCE', 'Organiser', 'NAN'),
(253, 75, 2, 'HEy', 2, 'KJSCE', 'Committee', 'NAN'),
(254, 76, 1, 'hey', 23, 'KJSCE', 'Organiser', 'NAN'),
(255, 76, 2, 'HEy', 2, 'KJSCE', 'Committee', 'NAN'),
(256, 77, 1, 'hey', 23, 'KJSCE', 'Organiser', 'NAN'),
(257, 77, 2, 'HEy', 2, 'KJSCE', 'Committee', 'NAN'),
(259, 78, 0, '', 0, '', '', 'NAN'),
(262, 79, 1, 'hey', 23, 'KJSCE', 'Organiser', 'NAN'),
(263, 79, 2, 'HEy', 2, 'KJSCE', 'Committee', 'NAN'),
(266, 80, 1, 'KJSCE', 5, 'KJSCE', 'Organiser', 'users//2_1.jpg'),
(267, 80, 2, 'POJ', 2, 'KJSCE', 'Member', 'users//2_1.jpg'),
(268, 81, 1, 'KJSCE', 5, 'KJSCE', 'Organiser', 'NAN'),
(269, 81, 2, 'POJ', 2, 'KJSCE', 'Member', 'NAN'),
(270, 82, 1, 'KJSCE', 5, 'KJSCE', 'Organiser', 'NAN'),
(271, 82, 2, 'POJ', 2, 'KJSCE', 'Member', 'NAN'),
(276, 83, 1, 'KJSCE', 5, 'KJSCE', 'Organiser', 'NAN'),
(277, 83, 2, 'POJ', 2, 'KJSCE', 'Member', 'users/newuser@gmail.com/1_3.jpg'),
(278, 83, 3, 'LOL', 3, 'KJSCE', 'Organiser', 'users/newuser@gmail.com/1_1.jpg'),
(279, 84, 0, '', 0, '', '', 'NAN'),
(281, 85, 0, '', 0, '', '', 'NAN'),
(282, 84, 0, '', 0, '', '', 'NAN'),
(283, 85, 0, '', 0, '', '', 'NAN'),
(284, 86, 0, '', 0, '', '', 'NAN'),
(286, 87, 0, '', 0, '', '', 'NAN');

-- --------------------------------------------------------

--
-- Table structure for table `part_a_gpi`
--

CREATE TABLE `part_a_gpi` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `parta_ugpggpi_self_a` int(11) NOT NULL DEFAULT '0',
  `parta_ugpggpi_hod_a` int(11) NOT NULL DEFAULT '0',
  `parta_ugpggpi_committee_a` int(11) NOT NULL DEFAULT '0',
  `parta_gpi_self_a` float NOT NULL DEFAULT '0',
  `parta_gpi_hod_a` float NOT NULL DEFAULT '0',
  `parta_gpi_committee_a` float DEFAULT '0',
  `parta_gpi_pi_self_a` float NOT NULL DEFAULT '0',
  `parta_gpi_pi_hod_a` float NOT NULL DEFAULT '0',
  `parta_gpi_pi_committee_a` float NOT NULL DEFAULT '0'
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
(14, 2019, 19, 10, 0, 10, 30, 0, 30, 40, 0, 40),
(15, 2018, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 2019, 6, 10, 10, 10, 30, 25, 20, 40, 35, 30),
(17, 2018, 6, 15, 15, 10, 25, 20, 20, 40, 35, 40),
(18, 2017, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 2017, 21, 20, 0, 0, 30, 0, 0, 50, 0, 0),
(20, 2019, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 0, 21, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 2019, 25, 10, 10, 10, 30, 20, 15, 40, 30, 25),
(23, 2017, 25, 0, 0, 0, 20, 0, 0, 20, 15, 15),
(24, 2018, 25, 20, 0, 0, 30, 0, 0, 50, 40, 35),
(25, 2019, 27, 0, 0, 0, 0, 0, 0, 40, 30, 20),
(26, 2017, 27, 10, 5, 5, 20, 15, 10, 30, 20, 15),
(27, 2018, 27, 0, 0, 0, 0, 0, 0, 40, 30, 20),
(28, 2017, 28, 10, 0, 0, 20, 0, 0, 30, 0, 0),
(29, 2018, 28, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 2019, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 2019, 28, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 2017, 22, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 2018, 22, 5, 0, 0, 0, 0, 0, 5, 0, 0),
(34, 2019, 22, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 2017, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 2017, 26, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 2019, 26, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 2018, 26, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 2017, 29, 20, 0, 0, 20, 0, 0, 40, 0, 0),
(40, 2019, 29, 18, 0, 0, 20, 0, 0, 38, 0, 0),
(41, 2018, 29, 20, 0, 0, 30, 0, 0, 50, 0, 0),
(42, 2017, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 2017, 31, 20, 0, 0, 15, 0, 0, 35, 0, 0),
(44, 2018, 31, 20, 15, 0, 15, 15, 0, 35, 30, 25),
(45, 2019, 31, 20, 20, 0, 15, 10, 0, 35, 30, 20),
(46, 2020, 31, 20, 15, 10, 15, 10, 10, 35, 25, 20),
(47, 2020, 25, 0, 0, 0, 10, 0, 0, 10, 0, 0),
(48, 2020, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 2020, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 2017, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 2020, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 2020, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 2017, 32, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 2019, 32, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `part_a_table`
--

CREATE TABLE `part_a_table` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `praddr` varchar(200) NOT NULL,
  `peaddr` varchar(200) NOT NULL,
  `highq` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `desi` varchar(50) NOT NULL,
  `nameo` varchar(50) NOT NULL,
  `pdesi` varchar(50) NOT NULL,
  `pscale` int(11) NOT NULL DEFAULT '0',
  `pbg` int(11) NOT NULL DEFAULT '0',
  `lastdesisel` varchar(50) NOT NULL,
  `promowef` date NOT NULL,
  `cscales` int(11) NOT NULL DEFAULT '0',
  `cbasics` int(11) NOT NULL DEFAULT '0',
  `lastdesicas` varchar(50) NOT NULL,
  `promowefcas` date NOT NULL,
  `cscalecas` int(11) NOT NULL DEFAULT '0',
  `cbasiccas` int(11) NOT NULL DEFAULT '0',
  `customRadioInline1` varchar(3) NOT NULL,
  `nameofdegree` varchar(100) NOT NULL,
  `institute` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_a_table`
--

INSERT INTO `part_a_table` (`id`, `year`, `faculty_id`, `praddr`, `peaddr`, `highq`, `dob`, `desi`, `nameo`, `pdesi`, `pscale`, `pbg`, `lastdesisel`, `promowef`, `cscales`, `cbasics`, `lastdesicas`, `promowefcas`, `cscalecas`, `cbasiccas`, `customRadioInline1`, `nameofdegree`, `institute`) VALUES
(1, 2017, 2, '', '', '', '2018-12-11', '', '', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(2, 2019, 2, '', '', 'PHD', '2019-03-18', 'HOD', '', 'Head of Department', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 5, 'Yes', 'PHD', ''),
(3, 2019, 3, 'Ghatkopar', 'Ghatkopar', 'PHD', '1982-01-27', 'Professor', 'SPIT', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(4, 2019, 7, '', '', '', '2017-05-03', '', '', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(5, 0, 2, '', '', '', '0000-00-00', '', '', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, '', '', ''),
(6, 2017, 1, '', '', '', '0000-00-00', '', '', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(7, 2019, 17, 'kjsce', 'kjsce', 'M.Tech', '1989-03-18', 'Ap', 'kjsce', 'Ap', 7000, 16930, 'Ap', '2016-10-11', 7000, 16930, 'Ap', '2015-08-04', 7000, 16930, 'No', '', ''),
(8, 2019, 21, 'Addr1', 'Addr2', 'PHD', '2000-02-02', 'Asst. Prof.', 'VJTI', 'Asst. Prof.', 7000, 8000, 'Prof.', '2004-02-04', 7000, 8500, 'Prof Prof', '2007-09-29', 70830, 2000, 'Yes', 'PHD', 'Gorakhpur Institute of Gorkhas'),
(9, 2018, 21, 'Addr1', 'Addr2', '', '0000-00-00', '', '', 'Assistant Professor', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(10, 2017, 19, '', '', '', '0000-00-00', '', '', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(11, 2019, 24, '', '', '', '0000-00-00', '', '', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(12, 0, 21, '', '', '', '0000-00-00', '', '', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, '', '', ''),
(13, 2017, 25, 'ghodbundar', 'road', '', '0000-00-00', '', '', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(29, 2018, 25, 'ghodbundar', 'road', '', '0000-00-00', '', '', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(30, 2019, 25, 'ghodbundar', 'road', '', '0000-00-00', '', '', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(31, 2017, 27, 'Thane', 'thane', '', '0000-00-00', '', '', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(32, 2018, 27, 'Thane', 'thane', '', '0000-00-00', '', '', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(33, 2019, 27, 'Thane', 'thane', '', '0000-00-00', '', '', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(34, 2017, 21, '', '', '', '0000-00-00', '', '', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(35, 2017, 28, 'Thane', '', '', '0000-00-00', '', '', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(38, 2018, 28, '', '', '', '0000-00-00', '', '', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(39, 2019, 28, '', '', '', '0000-00-00', '', '', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(68, 2018, 22, '', '', '', '0000-00-00', '', '', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(69, 2019, 22, '', '', '', '0000-00-00', '', '', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(70, 2018, 26, '', '', '', '0000-00-00', '', '', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(72, 2017, 29, '', '', '', '0000-00-00', '', '', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(78, 2019, 29, '', '', '', '0000-00-00', '', '', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(79, 2018, 29, '', '', '', '0000-00-00', '', '', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(80, 2017, 31, 'New York', 'Thane', 'PHD', '1985-09-22', 'Assistant', 'RIT', 'Professor', 6000, 5000, 'Asst. Prof.', '2019-07-03', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(81, 2018, 31, 'New York', 'Thane', 'PHD', '1985-09-22', 'Assistant', 'RIT', 'Professor', 6000, 5000, 'Asst. Prof.', '2019-07-03', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(82, 2019, 31, 'New York', 'Thane', 'PHD', '1985-09-22', 'Assistant', 'RIT', 'Professor', 6000, 5000, 'Asst. Prof.', '2019-07-03', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(83, 2020, 31, 'New York', 'Thane', 'PHD', '1985-09-22', 'Assistant', 'RIT', 'Professor', 6000, 5000, 'Asst. Prof.', '2019-07-03', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(84, 2020, 18, '', '', '', '0000-00-00', '', '', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(85, 2020, 25, 'ghodbundar', 'road', '', '0000-00-00', '', '', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(86, 2019, 18, '', '', '', '0000-00-00', '', '', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', ''),
(87, 2019, 32, 'New York', 'Thane', 'PHD', '2019-07-24', '', '', '', 0, 0, '', '0000-00-00', 0, 0, '', '0000-00-00', 0, 0, 'Yes', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_1`
--

CREATE TABLE `part_b_cat_1` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `avg_c` float NOT NULL DEFAULT '0',
  `total_c` float NOT NULL DEFAULT '0',
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
  `odesesup` varchar(200) NOT NULL,
  `oeesesup` varchar(200) NOT NULL,
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
  `edesesup` varchar(200) NOT NULL,
  `eeesesup` varchar(200) NOT NULL,
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
  `avg_ap` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_1`
--

INSERT INTO `part_b_cat_1` (`id`, `formId`, `avg_c`, `total_c`, `odpstest1`, `oepstest1`, `o1file`, `odpstest2`, `oepstest2`, `o2file`, `odtest1in`, `oetest1in`, `o3file`, `odtest2in`, `oetest2in`, `o4file`, `odtest1ass`, `oetest1ass`, `o5file`, `odtest2ass`, `oetest2ass`, `o6file`, `odesesup`, `oeesesup`, `odeseps`, `oeeseps`, `o7file`, `odesein`, `oeesein`, `o8file`, `odeseth`, `oeeseth`, `o9file`, `odesepo`, `oeesepo`, `o10file`, `odesere_ass`, `oeesere_ass`, `o11file`, `odproofr`, `oeproofr`, `o12file`, `odopenday`, `oeopenday`, `o13file`, `edpstest1`, `eepstest1`, `e1file`, `edpstest2`, `eepstest2`, `e2file`, `edtest1in`, `eetest1in`, `e3file`, `edtest2in`, `eetest2in`, `e4file`, `edtest1ass`, `eetest1ass`, `e5file`, `edtest2ass`, `eetest2ass`, `e6file`, `edesesup`, `eeesesup`, `edeseps`, `eeeseps`, `e7file`, `edesein`, `eeesein`, `e8file`, `edeseth`, `eeeseth`, `e9file`, `edesepo`, `eeesepo`, `e10file`, `edesere_ass`, `eeesere_ass`, `e11file`, `edproofr`, `eeproofr`, `e12file`, `edopenday`, `eeopenday`, `e13file`, `dpstest1`, `dps1file`, `dpstest2`, `dps2file`, `dtest1in`, `dps3file`, `dtest2in`, `dps4file`, `dtest1ass`, `dps5file`, `dtest2ass`, `dps6file`, `deseps`, `dps7file`, `avg_ap`) VALUES
(1, 1, 0, 0, 'ffj', '89', 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg', 'uhi', '98', 'users/manish.potey@somaiya.edu/C5CXYlHUoAUPGwX.jpg', 'huy', '98', 'users/manish.potey@somaiya.edu/download.jpg', 'hb', '98', 'users/manish.potey@somaiya.edu/e4a0b4a657040c64c017fe07957cf9a1.jpg', 'hb', '98', 'users/manish.potey@somaiya.edu/CM2.jpg', 'uhb', '09', 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg', 'hhi', 'hhey', 'uyb', '98', 'users/manish.potey@somaiya.edu/13259643_1283674768370253_1197858746_n.jpg', 'u98', '8', 'users/manish.potey@somaiya.edu/C5CXYlHUoAUPGwX.jpg', 'as', '5', 'users/manish.potey@somaiya.edu/http-%2F%2Fhypebeast.com%2Fimage%2F2017%2F09%2Fpost-malone-apple-music-single-week-streaming-record-0.jpg', 'ljk', '84', 'users/manish.potey@somaiya.edu/ChxynyJVAAAGmt_.jpg', 'gjgj', '5', 'users/manish.potey@somaiya.edu/cristiano-ronaldo.jpg', 'hjhb', '5454', 'users/manish.potey@somaiya.edu/napoleon death quote.png', 'bvhb', '5454', 'users/manish.potey@somaiya.edu/zDo-gAo0_400x400.jpg', 'bbh', '51', 'users/manish.potey@somaiya.edu/4f12ab4ef9d441cc6a608f4953f0685b--depressed-anime-quotes-depressing-anime-qoutes.jpg', 'vg', '5', 'users/manish.potey@somaiya.edu/C5CXYlHUoAUPGwX.jpg', 'vh', '45', 'users/manish.potey@somaiya.edu/Elon-Musk-Wallpapers-HD.jpg', 'bu', '9', 'users/manish.potey@somaiya.edu/Falcon-9-Rocket-in-the-Hangar.jpg', 'hyv', '48', 'users/manish.potey@somaiya.edu/e4a0b4a657040c64c017fe07957cf9a1.jpg', 'vgy', '8', 'users/manish.potey@somaiya.edu/13259643_1283674768370253_1197858746_n.jpg', 'yy', 'ui', 'hu', '375', 'users/manish.potey@somaiya.edu/http-%2F%2Fhypebeast.com%2Fimage%2F2017%2F09%2Fpost-malone-apple-music-single-week-streaming-record-0.jpg', 'hu', '537', 'users/manish.potey@somaiya.edu/e4a0b4a657040c64c017fe07957cf9a1.jpg', 'jn', '46', 'users/manish.potey@somaiya.edu/cristiano-ronaldo.jpg', 'k', '56', 'users/manish.potey@somaiya.edu/e4a0b4a657040c64c017fe07957cf9a1.jpg', 'ok', '65', 'users/manish.potey@somaiya.edu/e4a0b4a657040c64c017fe07957cf9a1.jpg', 'jh', '26', 'users/manish.potey@somaiya.edu/fUsGyKV.jpg', 'jb', '54', 'users/manish.potey@somaiya.edu/infinito.jpg', 'kjfj', '', 'hj', '', 'hg', '', 'hg', '', 'hg', '', 'hg', '', 'hg', '', 28),
(2, 2, 0, 0, '', '', 'NAN', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(3, 3, 0, 0, 'hjsdj', '6', '', 'jh', '54', '', 'hjb', '54', '', 'bhj', '5', '', 'se', '2', '', 'dsv', '5', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(4, 4, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(5, 5, 0, 0, 'yes', '50', 'users/babasoaldar@somaiya.edu/1_2.jpg', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', 0),
(6, 6, 0, 0, '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', 0),
(7, 7, 100, 770, 'ABC', '50', 'NAN', 'abv', '40', 'NAN', 'rtg', '40', 'NAN', 'gtf', '50', 'NAN', 'ABC', '40', 'NAN', 'REG', '30', 'NAN', '', '', 'HY', '40', 'NAN', 'I', '78', 'NAN', 'UI', '90', 'NAN', 'YU', '40', 'NAN', 'GU', '80', 'NAN', 'HU', '78', 'NAN', 'OPN', '40', 'NAN', 'GY', '55', 'NAN', 'HI', '88', 'NAN', 'HH', '99', 'NAN', 'HU', '80', 'NAN', 'GY', '90', 'NAN', 'TY', '87', 'NAN', '', '', 'GH', '90', 'NAN', 'RT', '67', 'NAN', 'ER', '56', 'NAN', 'GH', '78', 'NAN', 'TY', '89', 'NAN', 'HJ', '09', 'NAN', 'RT', '67', 'NAN', 'wer', 'NAN', 'REWWE', 'NAN', 'WE', 'NAN', 'RE', 'NAN', 'TW', 'NAN', 'FG', 'NAN', 'LO', 'NAN', 90),
(8, 8, 0, 0, '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', 0),
(9, 9, 0, 0, '', '', 'users/faculty4@somaiya.edu/b1s1_1f.jpg', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', 0),
(10, 10, 0, 0, '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', 0),
(11, 11, 0, 0, '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', 'hi', 'hi', '', '', 'users/faculty1@gmail.com/2_3.jpg', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', 'hi', 'hi', '', '', 'users/faculty1@gmail.com/7c54565b19691d55cca97714b77aa2dae44ee264-shutterstock_83672455.jpg', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', 0),
(12, 12, 0, 0, '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', '', '', 'users/committee@gmail.com/AOA_NOTEs-Chapter-No-1.doc', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', 0),
(13, 13, 0, 0, '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '123', '123', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '333', '', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', 0),
(14, 14, 0, 0, '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', 0),
(15, 15, 0, 0, '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', 0),
(16, 16, 0, 0, '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', 0),
(17, 17, 0, 0, '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', 'Paper Checking', '50', 'Unit Test Paper', '60', 'users/newuser@gmail.com/1_1.jpg', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'Paper Checker', '80', 'users/newuser@gmail.com/453266.jpg', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', 0),
(18, 18, 0, 0, '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', 0);

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
  `ctehrsweek` float NOT NULL DEFAULT '0',
  `ctehrsengaged` float NOT NULL DEFAULT '0',
  `ctemaxhrs` float NOT NULL DEFAULT '0',
  `ctec` float NOT NULL DEFAULT '0',
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
(153, 13, '', '', '', '', 0, 5, 100, 5, 'NAN'),
(154, 13, '', '', '', '', 0, 2, 20, 10, 'NAN'),
(157, 11, '', '', '', '', 0, 2, 20, 10, 'NAN'),
(158, 11, '', '', '', '', 0, 4, 5, 80, 'NAN'),
(161, 14, '123', '', '', '', 0, 5, 45, 11.11, 'NAN'),
(162, 14, '434', '', '', '', 0, 33, 44, 75, 'NAN'),
(186, 17, 'AI', 'L', 'UG', 'VII', 5, 15, 75, 20, 'users/newuser@gmail.com/2_2.jpg'),
(187, 17, 'Machine ', 'L', 'UG', 'VIII', 2, 15, 30, 50, 'users/newuser@gmail.com/181096.jpg');

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
  `ctohrsweek` float NOT NULL DEFAULT '0',
  `ctohrsengaged` float NOT NULL DEFAULT '0',
  `ctomaxhrs` float NOT NULL DEFAULT '0',
  `ctoc` float NOT NULL DEFAULT '0',
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
(128, 13, '', '', '', '', 0, 0, 0, 0, 'NAN'),
(131, 11, '', '', '', '', 0, 1, 2, 0, 'NAN'),
(132, 11, '', '', '', '', 0, 4, 6, 0, 'NAN'),
(134, 14, '2233', '', '', '', 0, 0, 0, 0, 'NAN'),
(173, 17, 'IKJ', 'L', 'UG', 'II', 5, 5, 10, 50, 'users/newuser@gmail.com/1_1.jpg'),
(174, 17, 'JK', 'P', 'PG', 'III', 5, 10, 100, 50, 'users/newuser@gmail.com/2_3.jpg'),
(175, 17, 'Computer', 'T', 'PG', 'IV', 2, 15, 30, 50, 'users/newuser@gmail.com/1_2.jpg'),
(176, 18, 'abc', '', '', '', 0, 0, 0, 0, 'users/faculty66@gmail.com/1_1.jpg');

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
(115, 13, '', '', 'NAN'),
(117, 11, '', '', 'NAN'),
(118, 14, '', '', 'NAN'),
(139, 17, 'PPT', 'chapter 1', 'users/newuser@gmail.com/13259643_1283674768370253_1197858746_n.jpg'),
(140, 17, 'PPT 2', 'chapter 7', 'users/newuser@gmail.com/2_1.jpg');

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
(14, 11),
(15, 12),
(16, 13),
(17, 14),
(18, 15),
(19, 16),
(20, 17),
(21, 18);

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
(154, 13, '', '', 'NAN'),
(156, 11, '', '', 'NAN'),
(157, 14, '', '', 'NAN'),
(177, 17, 'Digging', 'dig', 'users/newuser@gmail.com/ChxynyJVAAAGmt_.jpg'),
(178, 17, 'IV', 'Nainital', 'users/newuser@gmail.com/1_1.jpg');

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
(128, 13, '', '', 'NAN'),
(130, 11, '', '', 'NAN'),
(131, 14, '', '', 'NAN'),
(151, 17, 'Supervision', 'supervisor', 'users/newuser@gmail.com/IMG_129357.jpg'),
(152, 17, 'Student Council Leader', 'STUCO', 'users/newuser@gmail.com/C5CXYlHUoAUPGwX.jpg');

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
(170, 13, '', '', 'NAN'),
(172, 11, '', '', 'NAN'),
(173, 14, '', '', 'NAN'),
(193, 17, 'Donation', 'donate', 'users/newuser@gmail.com/Austerlitz-baron-Pascal.jpg'),
(194, 17, 'Well construction', 'well', 'users/newuser@gmail.com/2_1.jpg');

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
(162, 13, '', '', 'NAN'),
(164, 11, '', '', 'NAN'),
(165, 14, '', '', 'NAN'),
(185, 17, 'Admin', 'Administrate', 'users/newuser@gmail.com/a.jpg'),
(186, 17, 'Dean', 'dean', 'users/newuser@gmail.com/5184x2920-2848241-landscape-snowy-peak-mount-cook-national-park-new-zealand-nature___landscape-nature-wallpapers.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_3`
--

CREATE TABLE `part_b_cat_3` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `phdne` int(11) NOT NULL DEFAULT '0',
  `phdts` int(11) NOT NULL DEFAULT '0',
  `phdda` int(11) NOT NULL DEFAULT '0',
  `phdfile` varchar(200) NOT NULL DEFAULT 'NAN',
  `mtechne` int(11) NOT NULL DEFAULT '0',
  `mtechts` int(11) NOT NULL DEFAULT '0',
  `mtechda` int(11) NOT NULL DEFAULT '0',
  `mtechfile` varchar(200) NOT NULL DEFAULT 'NAN',
  `btechne` int(11) NOT NULL DEFAULT '0',
  `btechts` int(11) NOT NULL DEFAULT '0',
  `btechda` int(11) NOT NULL DEFAULT '0',
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
(30, 11, 2, 4, 1, 'NAN', 1, 2, 1, 'NAN', 2, 3, 2, 'NAN'),
(31, 12, 0, 0, 0, 'NAN', 0, 0, 0, 'NAN', 0, 0, 0, 'NAN'),
(32, 13, 0, 0, 0, 'NAN', 0, 0, 0, 'NAN', 0, 0, 0, 'NAN'),
(33, 14, 5, 2, 3, 'NAN', 4, 2, 1, 'NAN', 3, 3, 2, 'NAN'),
(34, 15, 2, 0, 0, 'NAN', 1, 0, 0, 'NAN', 1, 0, 0, 'NAN'),
(35, 16, 2, 1, 0, 'NAN', 1, 0, 1, 'NAN', 2, 0, 0, 'NAN'),
(36, 17, 3, 2, 3, 'users/newuser@gmail.com/1_1.jpg', 5, 7, 8, 'users/newuser@gmail.com/1_1.jpg', 3, 2, 2, 'users/newuser@gmail.com/1_1.jpg'),
(37, 18, 0, 0, 0, 'NAN', 0, 0, 0, 'NAN', 0, 0, 0, 'NAN');

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
(81, 13, '', '', '', '0000-00-00', '', '', '', 'NAN'),
(83, 11, '', '', '', '0000-00-00', '', '', '', 'NAN'),
(84, 14, '', '', '', '0000-00-00', '', '', '', 'NAN'),
(97, 17, '', '', '', '0000-00-00', '', '', '', 'NAN');

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
  `gcd` int(11) NOT NULL DEFAULT '0',
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
(64, 13, '', '', '0000-00-00', 0, 'NAN'),
(66, 11, '', '', '0000-00-00', 0, 'NAN'),
(67, 14, '', '', '0000-00-00', 0, 'NAN'),
(85, 17, '', '', '0000-00-00', 0, 'NAN'),
(86, 17, '', '', '0000-00-00', 0, 'NAN');

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
  `ggd` int(11) NOT NULL DEFAULT '0',
  `research2file` varchar(200) NOT NULL DEFAULT 'NAN'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_3_ores`
--

INSERT INTO `part_b_cat_3_ores` (`id`, `formId`, `tta`, `aab`, `ddc`, `ggd`, `research2file`) VALUES
(32, 1, 'yu', 'nm', '2019-01-02', 89, 'users/manish.potey@somaiya.edu/7160610404_f57bd6db8f_n.jpg'),
(34, 7, '', '', '0000-00-00', 0, 'NAN'),
(35, 10, '', '', '0000-00-00', 0, 'NAN'),
(51, 13, '', '', '0000-00-00', 0, 'NAN'),
(53, 11, '', '', '0000-00-00', 0, 'NAN'),
(54, 14, '', '', '0000-00-00', 0, 'NAN'),
(72, 17, '', '', '0000-00-00', 0, 'NAN'),
(73, 17, '', '', '0000-00-00', 0, 'NAN');

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
(51, 13, '', '0000-00-00', 'NAN'),
(53, 11, '', '0000-00-00', 'NAN'),
(54, 14, '', '0000-00-00', 'NAN'),
(72, 17, 'Patent 1', '2019-07-24', 'users/newuser@gmail.com/2_1.jpg'),
(73, 17, 'Patent 2', '2019-07-06', 'users/newuser@gmail.com/2_2.jpg');

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
(80, 13, '', '', '', '', '', '', 'NAN'),
(82, 11, 'abc', '', '', '', '', '', 'NAN'),
(83, 14, '', '', '', '', '', '', 'NAN'),
(102, 17, 'Title', 'IEEE', '9594453', '1000', '', '0', 'users/newuser@gmail.com/1_1.jpg'),
(103, 17, 'Title 2', 'IEEE', '12392', '90', 'No', '0', 'users/newuser@gmail.com/1_2.jpg');

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
(80, 13, '', '', '', '', '', '', 'NAN'),
(82, 11, 'eee', '', 'rr', '', '', '', 'users/faculty1@gmail.com/1_3.jpg'),
(83, 11, 'erer', '', '', '', 'Yes', '', 'users/faculty1@gmail.com/2_1.jpg'),
(84, 14, '', '', '', '', '', '', 'NAN'),
(97, 17, '', '', '', '', '', '', 'NAN');

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
(109, 13, '', '', '', '', '', '', 'NAN'),
(111, 11, '', '', '', '', '', '', 'NAN'),
(112, 14, '', '', '', '', '', '', 'NAN'),
(125, 17, '', '', '', '', '', '', 'NAN');

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
  `gd` int(11) NOT NULL DEFAULT '0',
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
(80, 13, '', '', '0000-00-00', 0, 'NAN'),
(82, 11, '', '', '0000-00-00', 0, 'NAN'),
(83, 14, '', '', '0000-00-00', 0, 'NAN'),
(101, 17, '', '', '0000-00-00', 0, 'NAN'),
(102, 17, '', '', '0000-00-00', 0, 'NAN');

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
(48, 11),
(49, 11),
(50, 11),
(51, 11),
(52, 11),
(53, 12),
(54, 11),
(55, 11),
(56, 11),
(57, 11),
(58, 13),
(59, 13),
(60, 13),
(61, 13),
(62, 13),
(63, 13),
(64, 11),
(65, 11),
(66, 14),
(67, 14),
(68, 15),
(69, 16),
(70, 17),
(71, 17),
(72, 17),
(73, 17),
(74, 17),
(75, 17),
(76, 17),
(77, 17),
(78, 17),
(79, 17),
(80, 17),
(81, 17),
(82, 17),
(83, 17),
(84, 18);

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
(64, 13, '', '', 'NAN'),
(66, 11, '', '', 'NAN'),
(67, 14, '', '', 'NAN'),
(83, 17, 'Award 1', 'award1', 'users/newuser@gmail.com/1_1.jpg'),
(84, 17, 'Award 2', 'award2', 'users/newuser@gmail.com/1_2.jpg');

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
(51, 13, '', '0000-00-00', '', 'NAN'),
(53, 11, '', '0000-00-00', '', 'NAN'),
(54, 14, '', '0000-00-00', '', 'NAN'),
(67, 17, 'Honor', '0000-00-00', 'KJSCE', 'NAN'),
(68, 17, 'Honour', '2001-04-20', 'KJSCE', 'users/newuser@gmail.com/1_2.jpg');

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
(51, 13, '', '0000-00-00', '', 'NAN'),
(53, 11, '', '0000-00-00', '', 'NAN'),
(54, 14, '', '0000-00-00', '', 'NAN'),
(70, 17, 'Training', '2000-02-16', 'KJSCE', 'users/newuser@gmail.com/1_1.jpg'),
(71, 17, 'Training 2', '2019-05-16', 'KJSCE', 'users/newuser@gmail.com/1_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_table`
--

CREATE TABLE `part_b_table` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL DEFAULT '0'
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
(11, 2017, 21),
(12, 2017, 19),
(13, 2017, 2),
(14, 2017, 27),
(15, 2019, 28),
(16, 2018, 28),
(17, 2020, 31),
(18, 2019, 32);

-- --------------------------------------------------------

--
-- Table structure for table `recommend_for_cas`
--

CREATE TABLE `recommend_for_cas` (
  `id` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `recommend` int(11) NOT NULL DEFAULT '0',
  `currentyear` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recommend_for_cas`
--

INSERT INTO `recommend_for_cas` (`id`, `facultyId`, `recommend`, `currentyear`) VALUES
(2, 17, 1, 2019),
(3, 6, 1, 2019),
(5, 25, 0, 2019),
(6, 27, 0, 2019),
(7, 28, 1, 2019),
(8, 31, 1, 2020);

-- --------------------------------------------------------

--
-- Table structure for table `request_edit_access`
--

CREATE TABLE `request_edit_access` (
  `id` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `form` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(14, 2018, 6, 1, 1),
(15, 2017, 25, 1, 1),
(16, 2018, 25, 1, 1),
(17, 2019, 25, 1, 1),
(18, 2017, 27, 1, 1),
(19, 2019, 27, 1, 1),
(20, 2018, 27, 1, 1),
(21, 2019, 28, 1, 1),
(22, 2018, 28, 1, 1),
(23, 2017, 28, 1, 1),
(24, 2017, 29, 1, 0),
(25, 2019, 29, 1, 0),
(26, 2018, 29, 1, 0),
(27, 2017, 31, 1, 0),
(28, 2018, 31, 1, 1),
(29, 2019, 31, 1, 1),
(30, 2020, 31, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `submitted_for_self_appraisal`
--

CREATE TABLE `submitted_for_self_appraisal` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `partA` int(11) NOT NULL DEFAULT '0',
  `partB` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submitted_for_self_appraisal`
--

INSERT INTO `submitted_for_self_appraisal` (`id`, `year`, `facultyId`, `partA`, `partB`) VALUES
(1, 2019, 32, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `summary_table`
--

CREATE TABLE `summary_table` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `selfPP` float NOT NULL DEFAULT '0',
  `selfA` float NOT NULL DEFAULT '0',
  `selfB` float NOT NULL DEFAULT '0',
  `self_avgpi` float NOT NULL DEFAULT '0',
  `hodPP` float NOT NULL DEFAULT '0',
  `hodA` float NOT NULL DEFAULT '0',
  `hodB` float NOT NULL DEFAULT '0',
  `hod_avgpi` float NOT NULL DEFAULT '0',
  `committeePP` float NOT NULL DEFAULT '0',
  `committeeA` float NOT NULL DEFAULT '0',
  `committeeB` float NOT NULL DEFAULT '0',
  `committee_avgpi` float NOT NULL DEFAULT '0',
  `hodremarkscum` varchar(200) NOT NULL,
  `final_recomm` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `summary_table`
--

INSERT INTO `summary_table` (`id`, `year`, `facultyId`, `selfPP`, `selfA`, `selfB`, `self_avgpi`, `hodPP`, `hodA`, `hodB`, `hod_avgpi`, `committeePP`, `committeeA`, `committeeB`, `committee_avgpi`, `hodremarkscum`, `final_recomm`) VALUES
(1, 2019, 2, 5.71, 64.03, 72.48, 46.93, 0, 68.36, 71.51, 46.16, 0, 0, 0, 0, '', ''),
(2, 2019, 17, 0, 55.89, 56.46, 55.12, 0, 0, 54.55, 18, 0, 32.09, 45.42, 25.58, 'won', 'nice teacher'),
(3, 2019, 21, 0, 44.48, 35.14, 52.64, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(4, 2018, 21, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(5, 2018, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(6, 2019, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(7, 2018, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(8, 2019, 6, 0, 32, 31, 31.25, 0, 14, 26, 23, 0, 16, 22, 20.5, '', ''),
(9, 2018, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(10, 2017, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(11, 2018, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(12, 2019, 25, 71.05, 76, 68.09, 71, 63.14, 58.76, 60.33, 60.14, 50.76, 50.95, 55.14, 51.76, 'This teacher is recommended for CAS', 'This teacher is approved for CAS'),
(13, 2017, 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(14, 2019, 27, 66, 55.05, 66.48, 61.88, 45.14, 47.14, 56.29, 49.03, 37.43, 39.24, 46.09, 40.51, 'I dont recommend this faculty', 'I recommend this faculty for CAS'),
(15, 2018, 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(16, 2019, 28, 15.89, 4.11, 13.89, 11.18, 0, 0, 2.86, 0.94, 0, 0, 0, 0, 'Good teacher', ''),
(17, 2018, 28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(18, 2017, 28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(19, 2019, 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(20, 2018, 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(21, 2017, 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(22, 2017, 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(23, 2019, 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(24, 2018, 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(25, 2017, 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(26, 2018, 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(27, 2019, 31, 14, 75.75, 78.67, 55.58, 0, 62.48, 58.76, 40.01, 0, 0, 0, 0, '', ''),
(28, 2020, 31, 75.75, 78.67, 82, 78.02, 62.48, 58.76, 59.71, 59.71, 48.09, 42.38, 46.76, 45.29, 'Passes all criteria to obtain CAS grant', 'I hereby approve this faculty for CAS');

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
-- Indexes for table `request_edit_access`
--
ALTER TABLE `request_edit_access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submitted_for_review_table`
--
ALTER TABLE `submitted_for_review_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submitted_for_self_appraisal`
--
ALTER TABLE `submitted_for_self_appraisal`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `faculty_table`
--
ALTER TABLE `faculty_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `partb_cat2_pi`
--
ALTER TABLE `partb_cat2_pi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `partb_cat3_pi`
--
ALTER TABLE `partb_cat3_pi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `partb_cat4_pi`
--
ALTER TABLE `partb_cat4_pi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `part_a_doc`
--
ALTER TABLE `part_a_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=287;
--
-- AUTO_INCREMENT for table `part_a_gpi`
--
ALTER TABLE `part_a_gpi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `part_a_table`
--
ALTER TABLE `part_a_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `part_b_cat_1`
--
ALTER TABLE `part_b_cat_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `part_b_cat_1_cte`
--
ALTER TABLE `part_b_cat_1_cte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;
--
-- AUTO_INCREMENT for table `part_b_cat_1_cto`
--
ALTER TABLE `part_b_cat_1_cto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;
--
-- AUTO_INCREMENT for table `part_b_cat_1_dar`
--
ALTER TABLE `part_b_cat_1_dar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
--
-- AUTO_INCREMENT for table `part_b_cat_2`
--
ALTER TABLE `part_b_cat_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `part_b_cat_2_act`
--
ALTER TABLE `part_b_cat_2_act`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;
--
-- AUTO_INCREMENT for table `part_b_cat_2_c`
--
ALTER TABLE `part_b_cat_2_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
--
-- AUTO_INCREMENT for table `part_b_cat_2_exc`
--
ALTER TABLE `part_b_cat_2_exc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;
--
-- AUTO_INCREMENT for table `part_b_cat_2_ha`
--
ALTER TABLE `part_b_cat_2_ha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;
--
-- AUTO_INCREMENT for table `part_b_cat_3`
--
ALTER TABLE `part_b_cat_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `part_b_cat_3_bk`
--
ALTER TABLE `part_b_cat_3_bk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `part_b_cat_3_cres`
--
ALTER TABLE `part_b_cat_3_cres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `part_b_cat_3_ores`
--
ALTER TABLE `part_b_cat_3_ores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `part_b_cat_3_pip`
--
ALTER TABLE `part_b_cat_3_pip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `part_b_cat_3_pp`
--
ALTER TABLE `part_b_cat_3_pp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `part_b_cat_3_ppic`
--
ALTER TABLE `part_b_cat_3_ppic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `part_b_cat_3_ppinc`
--
ALTER TABLE `part_b_cat_3_ppinc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT for table `part_b_cat_3_res`
--
ALTER TABLE `part_b_cat_3_res`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `part_b_cat_4`
--
ALTER TABLE `part_b_cat_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `part_b_cat_4_creds`
--
ALTER TABLE `part_b_cat_4_creds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `part_b_cat_4_inv`
--
ALTER TABLE `part_b_cat_4_inv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `part_b_cat_4_sem`
--
ALTER TABLE `part_b_cat_4_sem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `part_b_table`
--
ALTER TABLE `part_b_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `recommend_for_cas`
--
ALTER TABLE `recommend_for_cas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `request_edit_access`
--
ALTER TABLE `request_edit_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `submitted_for_review_table`
--
ALTER TABLE `submitted_for_review_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `submitted_for_self_appraisal`
--
ALTER TABLE `submitted_for_self_appraisal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `summary_table`
--
ALTER TABLE `summary_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
