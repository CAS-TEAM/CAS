-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2019 at 03:26 PM
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
(1, 2, 'Approved', 2019, 2018);

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
(1, 'Prof. Babaso Aldar', 'babasoaldar@somaiya.edu', '$2y$10$bd4GNgydExAbWXbrf8P1SuVtVBdwxJ2oM66S.j1G/T5utSB1IeSCS', '2018-05-12', 'Computer', 'users/babasoaldar@somaiya.edu/profilepic.jpg', 1, 0, 1, 1, 1),
(2, 'Prof. Manish Potey', 'manish.potey@somaiya.edu', '$2y$10$mRi97USluJQZPZtwSgS3ZOk1yybigUHHRhAJJ/yVPS8rF/DFRTGmK', '2010-08-17', 'Computer', 'users/manish.potey@somaiya.edu/profilepic.jpg', 1, 1, 0, 0, 0),
(3, 'Jyoti Trymbake', 'jyoti.trymbake@somaiya.edu', '$2y$10$f06wIJ29VeGf1oGfh2P95uHgYPXIPuPwC4NxE/xYolwy2tn3H0O1q', '2011-06-14', 'Computer', 'users/jyoti.trymbake@somaiya.edu/profilepic.jpg', 1, 0, 1, 0, 0),
(4, 'Prof. Poonam Bhogale', 'poonambhogale@somaiya.edu', '$2y$10$W6lbNYTxCAgG2GjeJ8xHuuV/BJg6NCMBifF5pvBJ7aDIiV2bIMTzC', '2008-11-11', 'Etrx', 'defaults/default_userprofile_pic.png', 1, 1, 0, 0, 0),
(5, 'Anjali', 'anjali@gmail.com', '$2y$10$2hpkZa7tqA98LAhOiqq1ieaByObfDo..bwzSLbZCKJRVvhQTziwkW', '1999-07-26', 'Computer', 'defaults/default_userprofile_pic.png', 1, 0, 1, 1, 0),
(6, 'Sharvai Patil', 'sharvai.p@somaiya.edu', '$2y$10$lTBgAr587gnLyzoZYR0UB.oS0jywazLATQdJNrRhdw5ltyvWiAlIu', '2001-01-13', 'Computer', 'users/sharvai.p@somaiya.edu/profilepic.jpg', 1, 0, 0, 1, 0),
(8, 'Head of Department', 'hod@gmail.com', '$2y$10$NHWvY2CloU7yObO0/Wan/OoneEmpkpG1ohx2tJrmxLu0HACIZLVuG', '2005-02-08', 'Computer', 'defaults/default_userprofile_pic.png', 1, 1, 0, 0, 0),
(9, 'Committee Member', 'committee@gmail.com', '$2y$10$v92ml9eUQRUtc5ENO2zfBe9pCtlmisvJXCQZdLxvtAyI.FpqmBR7u', '2000-02-08', 'Computer', 'defaults/default_userprofile_pic.png', 1, 0, 1, 0, 0),
(10, 'Faculty Man', 'faculty@gmail.com', '$2y$10$jyK2JAE/82Af2Gnw2sxfgehh2ySM/L0lgzFW9rSq.BgcR6N6ZHLAm', '2019-03-20', 'Computer', 'defaults/default_userprofile_pic.png', 1, 0, 1, 0, 0);

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
(3, 2019, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 80, 75, 0);

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
(2, 2018, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 23, 43, 0);

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
(2, 2018, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 100, 100);

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
(2, 2018, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 60, 65, 0);

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
(92, 6, 0, '', 0, '', 'NAN');

-- --------------------------------------------------------

--
-- Table structure for table `part_a_gpi`
--

CREATE TABLE `part_a_gpi` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
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

INSERT INTO `part_a_gpi` (`id`, `year`, `facultyId`, `parta_gpi_self_a`, `parta_gpi_hod_a`, `parta_gpi_committee_a`, `parta_gpi_pi_self_a`, `parta_gpi_pi_hod_a`, `parta_gpi_pi_committee_a`) VALUES
(3, 2019, 2, 22, 51, 20, 45, 45, 40),
(4, 2018, 2, 0, 0, 0, 45, 45, 0),
(5, 2019, 7, 30, 25, 0, 50, 45, 0);

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
  `promowef` varchar(50) NOT NULL,
  `cscales` int(11) NOT NULL,
  `cbasics` int(11) NOT NULL,
  `lastdesicas` varchar(50) NOT NULL,
  `promowefcas` varchar(50) NOT NULL,
  `cscalecas` int(11) NOT NULL,
  `cbasiccas` int(11) NOT NULL,
  `customRadioInline1` varchar(3) NOT NULL,
  `nameofdegree` varchar(100) NOT NULL,
  `institute` varchar(100) NOT NULL,
  `ugpg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_a_table`
--

INSERT INTO `part_a_table` (`id`, `year`, `faculty_id`, `faculty_name`, `ecode`, `praddr`, `peaddr`, `email`, `mobileno`, `highq`, `dob`, `desi`, `nameo`, `pdesi`, `dojkjsce`, `pscale`, `pbg`, `lastdesisel`, `promowef`, `cscales`, `cbasics`, `lastdesicas`, `promowefcas`, `cscalecas`, `cbasiccas`, `customRadioInline1`, `nameofdegree`, `institute`, `ugpg`) VALUES
(1, 2017, 2, 'Manish Potey', 120039, '', '', 'manish.potey@somaiya.edu', 0, '', '2018-12-11', '', '', '', '0000-00-00', 0, 0, '', '', 0, 0, '', '', 0, 0, 'Yes', '', '', ''),
(2, 2019, 2, 'Manish Potey', 29163, '', '', 'manish.potey@somaiya.edu', 2147483647, 'PHD', '2019-03-18', 'HOD', '', 'Head of Department', '0000-00-00', 0, 0, '', '', 0, 0, '', '', 0, 5, 'Yes', 'PHD', '', ''),
(3, 2019, 3, 'Jyoti Trymbake', 5476, 'Ghatkopar', 'Ghatkopar', 'jyoti.trymbake@somaiya.edu', 883957483, 'PHD', '1982-01-27', 'Professor', 'SPIT', '', '0000-00-00', 0, 0, '', '', 0, 0, '', '', 0, 0, 'Yes', '', '', ''),
(4, 2019, 7, 'Faculty', 123, '', '', '', 0, '', '0000-00-00', '', '', '', '0000-00-00', 0, 0, '', '', 0, 0, '', '', 0, 0, 'Yes', '', '', ''),
(5, 0, 2, '', 0, '', '', '', 0, '', '0000-00-00', '', '', '', '0000-00-00', 0, 0, '', '', 0, 0, '', '', 0, 0, '', '', '', ''),
(6, 2017, 1, 'Babaso Aldar', 0, '', '', '', 0, '', '0000-00-00', '', '', '', '0000-00-00', 0, 0, '', '', 0, 0, '', '', 0, 0, 'Yes', '', '', '');

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
(5, 5, 0, 0, 'yes', '50', 'users/babasoaldar@somaiya.edu/1_2.jpg', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', '', 'NAN', 0);

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
(130, 1, 'ttt', '', '', '', 0, 0, 0, 0, 'users/manish.potey@somaiya.edu/inspirational-smll-business-quotes5.jpg');

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
(104, 1, 'cto', '', '', '', 0, 0, 0, 0, 'NAN');

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
(95, 1, '', '', 'NAN');

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
(8, 5);

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
(134, 1, 'act3', 'acc', 'NAN');

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
(109, 1, 'nba', 'nb', 'NAN');

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
(151, 1, 'exc2', 'ss', 'NAN');

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
(143, 1, '', '', 'NAN');

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
(24, 5, 0, 0, 0, 'NAN', 0, 0, 0, 'NAN', 0, 0, 0, 'NAN');

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
(62, 1, 'jeoe', 'ihiuh', 'jhg', '2019-01-16', 'kh', 'No', 'oihlijo', 'NAN');

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
(45, 1, 'cres', '', '0000-00-00', 0, 'NAN');

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
(32, 1, 'yu', 'nm', '2019-01-02', 89, 'users/manish.potey@somaiya.edu/7160610404_f57bd6db8f_n.jpg');

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
(32, 1, 'er', '2019-01-09', 'users/manish.potey@somaiya.edu/e4a0b4a657040c64c017fe07957cf9a1.jpg');

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
(61, 1, 'retu', 'wew', 'qwq', 'ree', 'No', '12', 'NAN');

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
(61, 1, 'HI', 'io', 'ojoi', 'jk', 'No', 'kln', 'NAN');

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
(90, 1, 'hola', 'afwe', 'wew23', 'ewwewewe', 'No', '3', 'NAN');

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
(61, 1, 'ge', 'er', '2019-01-09', 5, 'NAN');

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
(36, 5);

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
(45, 1, 'fef', '', 'NAN');

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
(32, 1, '23', '2019-01-09', '234', 'users/manish.potey@somaiya.edu/Falcon-9-Rocket-in-the-Hangar.jpg');

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
(32, 1, '43', '2019-01-10', '45', 'users/manish.potey@somaiya.edu/christ-the-redeemer-rio-de-janeiro-brazil-south-america.jpg');

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
(5, 2017, 1);

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
(5, 2018, 3, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `summary_comm_table`
--

CREATE TABLE `summary_comm_table` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `correct_parta` int(11) NOT NULL,
  `exaggerated_parta` int(11) NOT NULL,
  `remarks_parta` varchar(200) NOT NULL,
  `current_academicA` int(11) NOT NULL,
  `pi_academicA` float NOT NULL,
  `correct_partbi` int(11) NOT NULL,
  `exaggerated_partbi` int(11) NOT NULL,
  `remarks_partbi` int(11) NOT NULL,
  `current_academicBI` varchar(200) NOT NULL,
  `pi_academicBI` float NOT NULL,
  `correct_partbii` int(11) NOT NULL,
  `exaggerated_partbii` int(11) NOT NULL,
  `remarks_partbii` varchar(200) NOT NULL,
  `current_academicBII` int(11) NOT NULL,
  `pi_academicBII` float NOT NULL,
  `correct_partbiii` int(11) NOT NULL,
  `exaggerated_partbiii` int(11) NOT NULL,
  `remarks_partbiii` varchar(200) NOT NULL,
  `current_academicBIII` int(11) NOT NULL,
  `pi_academicBIII` float NOT NULL,
  `correct_partbiv` int(11) NOT NULL,
  `exaggerated_partbiv` int(11) NOT NULL,
  `remarks_partbiv` varchar(200) NOT NULL,
  `current_academicBIV` int(11) NOT NULL,
  `pi_academicBIV` float NOT NULL,
  `last_academicBIV_avg_comm` float NOT NULL,
  `pi_academicBIV_avg_comm` float NOT NULL,
  `last_academicBIV_avgpi_comm` varchar(200) NOT NULL,
  `final_recomm` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `summary_comm_table`
--

INSERT INTO `summary_comm_table` (`id`, `year`, `facultyId`, `correct_parta`, `exaggerated_parta`, `remarks_parta`, `current_academicA`, `pi_academicA`, `correct_partbi`, `exaggerated_partbi`, `remarks_partbi`, `current_academicBI`, `pi_academicBI`, `correct_partbii`, `exaggerated_partbii`, `remarks_partbii`, `current_academicBII`, `pi_academicBII`, `correct_partbiii`, `exaggerated_partbiii`, `remarks_partbiii`, `current_academicBIII`, `pi_academicBIII`, `correct_partbiv`, `exaggerated_partbiv`, `remarks_partbiv`, `current_academicBIV`, `pi_academicBIV`, `last_academicBIV_avg_comm`, `pi_academicBIV_avg_comm`, `last_academicBIV_avgpi_comm`, `final_recomm`) VALUES
(1, 2019, 2, 56, 67, '55', 44, 88, 43, 87, 0, '48', 48, 54, 43, 'none', 45, 45, 65, 54, 'none', 23, 13.14, 23, 23, 'none', 56, 74.67, 345, 23, '0', 'nice teacher'),
(5, 2019, 2, 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, 0, 0, 0, 'A', ''),
(6, 2019, 2, 56, 67, '55', 44, 88, 43, 87, 0, '48', 48, 54, 43, 'none', 45, 45, 65, 54, 'none', 23, 13.14, 23, 23, 'none', 56, 74.67, 345, 23, '0', 'nice teacher');

-- --------------------------------------------------------

--
-- Table structure for table `summary_hasr`
--

CREATE TABLE `summary_hasr` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `ecs` varchar(200) NOT NULL,
  `papers` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `summary_hasr`
--

INSERT INTO `summary_hasr` (`id`, `formId`, `facultyId`, `ecs`, `papers`) VALUES
(1, 1, 2, '1', 'users/manish.potey@somaiya.edu/Lighthouse.jpg'),
(2, 1, 2, '2', 'users/manish.potey@somaiya.edu/Penguins.jpg'),
(3, 1, 2, '3', 'NAN'),
(4, 1, 2, '4', 'users/manish.potey@somaiya.edu/Chrysanthemum.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `summary_table`
--

CREATE TABLE `summary_table` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `last_academicA_last` int(11) NOT NULL,
  `pi_academic_last` int(11) NOT NULL,
  `current_academicA_current` int(11) NOT NULL,
  `pi_academicA_current` int(11) NOT NULL,
  `last_academicBI_last` int(11) NOT NULL,
  `pi_academicBI_last` int(11) NOT NULL,
  `current_academicBI_current` int(11) NOT NULL,
  `pi_academicBI_current` int(11) NOT NULL,
  `last_academicBII_last` int(11) NOT NULL,
  `pi_academicBII_last` int(11) NOT NULL,
  `current_academicBII_current` int(11) NOT NULL,
  `pi_academicBII_current` int(11) NOT NULL,
  `last_academicBIII_last` int(11) NOT NULL,
  `pi_academicBIII_last` int(11) NOT NULL,
  `current_academicBIII_current` int(11) NOT NULL,
  `pi_academicBIII_current` int(11) NOT NULL,
  `last_academicBIV_last` int(11) NOT NULL,
  `pi_academicBIV_last` int(11) NOT NULL,
  `current_academicBIV_current` int(11) NOT NULL,
  `pi_academicBIV_current` int(11) NOT NULL,
  `last_academicBIV_avgA_last` int(11) NOT NULL,
  `pi_academicBIV_avgA_last` int(11) NOT NULL,
  `last_academicBIV_avgB_last` int(11) NOT NULL,
  `pi_academicBIV_avgB_last` int(11) NOT NULL,
  `last_academicBIV_avgpi_last` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `summary_table`
--

INSERT INTO `summary_table` (`id`, `year`, `facultyId`, `last_academicA_last`, `pi_academic_last`, `current_academicA_current`, `pi_academicA_current`, `last_academicBI_last`, `pi_academicBI_last`, `current_academicBI_current`, `pi_academicBI_current`, `last_academicBII_last`, `pi_academicBII_last`, `current_academicBII_current`, `pi_academicBII_current`, `last_academicBIII_last`, `pi_academicBIII_last`, `current_academicBIII_current`, `pi_academicBIII_current`, `last_academicBIV_last`, `pi_academicBIV_last`, `current_academicBIV_current`, `pi_academicBIV_current`, `last_academicBIV_avgA_last`, `pi_academicBIV_avgA_last`, `last_academicBIV_avgB_last`, `pi_academicBIV_avgB_last`, `last_academicBIV_avgpi_last`) VALUES
(1, 2019, 2, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24);

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
-- Indexes for table `submitted_for_review_table`
--
ALTER TABLE `submitted_for_review_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `summary_comm_table`
--
ALTER TABLE `summary_comm_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `summary_hasr`
--
ALTER TABLE `summary_hasr`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `faculty_table`
--
ALTER TABLE `faculty_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `otp_table`
--
ALTER TABLE `otp_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `partb_cat1_pi`
--
ALTER TABLE `partb_cat1_pi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `partb_cat2_pi`
--
ALTER TABLE `partb_cat2_pi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `partb_cat3_pi`
--
ALTER TABLE `partb_cat3_pi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `partb_cat4_pi`
--
ALTER TABLE `partb_cat4_pi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `part_a_doc`
--
ALTER TABLE `part_a_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `part_a_gpi`
--
ALTER TABLE `part_a_gpi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `part_a_table`
--
ALTER TABLE `part_a_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `part_b_cat_1`
--
ALTER TABLE `part_b_cat_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `part_b_cat_1_cte`
--
ALTER TABLE `part_b_cat_1_cte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT for table `part_b_cat_1_cto`
--
ALTER TABLE `part_b_cat_1_cto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `part_b_cat_1_dar`
--
ALTER TABLE `part_b_cat_1_dar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `part_b_cat_2`
--
ALTER TABLE `part_b_cat_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `part_b_cat_2_act`
--
ALTER TABLE `part_b_cat_2_act`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
--
-- AUTO_INCREMENT for table `part_b_cat_2_c`
--
ALTER TABLE `part_b_cat_2_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `part_b_cat_2_exc`
--
ALTER TABLE `part_b_cat_2_exc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;
--
-- AUTO_INCREMENT for table `part_b_cat_2_ha`
--
ALTER TABLE `part_b_cat_2_ha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;
--
-- AUTO_INCREMENT for table `part_b_cat_3`
--
ALTER TABLE `part_b_cat_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `part_b_cat_3_bk`
--
ALTER TABLE `part_b_cat_3_bk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `part_b_cat_3_cres`
--
ALTER TABLE `part_b_cat_3_cres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `part_b_cat_3_ores`
--
ALTER TABLE `part_b_cat_3_ores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `part_b_cat_3_pip`
--
ALTER TABLE `part_b_cat_3_pip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `part_b_cat_3_pp`
--
ALTER TABLE `part_b_cat_3_pp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `part_b_cat_3_ppic`
--
ALTER TABLE `part_b_cat_3_ppic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `part_b_cat_3_ppinc`
--
ALTER TABLE `part_b_cat_3_ppinc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `part_b_cat_3_res`
--
ALTER TABLE `part_b_cat_3_res`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `part_b_cat_4`
--
ALTER TABLE `part_b_cat_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `part_b_cat_4_creds`
--
ALTER TABLE `part_b_cat_4_creds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `part_b_cat_4_inv`
--
ALTER TABLE `part_b_cat_4_inv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `part_b_cat_4_sem`
--
ALTER TABLE `part_b_cat_4_sem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `part_b_table`
--
ALTER TABLE `part_b_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `submitted_for_review_table`
--
ALTER TABLE `submitted_for_review_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `summary_comm_table`
--
ALTER TABLE `summary_comm_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `summary_hasr`
--
ALTER TABLE `summary_hasr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `summary_table`
--
ALTER TABLE `summary_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
