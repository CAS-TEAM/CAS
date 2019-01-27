-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2019 at 12:22 PM
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
  `hod` int(11) NOT NULL,
  `committee` int(11) NOT NULL,
  `principal` int(11) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_table`
--

INSERT INTO `faculty_table` (`id`, `faculty_name`, `email`, `password`, `date_of_joining`, `department`, `profilePicLocation`, `hod`, `committee`, `principal`, `admin`) VALUES
(1, 'Prof. Babaso Aldar', 'babasoaldar@somaiya.edu', '$2y$10$bd4GNgydExAbWXbrf8P1SuVtVBdwxJ2oM66S.j1G/T5utSB1IeSCS', '2018-05-12', 'Computer', 'defaults/default_userprofile_pic.png', 0, 1, 0, 1),
(2, 'Prof. Manish Potey', 'manish.potey@somaiya.edu', '$2y$10$mRi97USluJQZPZtwSgS3ZOk1yybigUHHRhAJJ/yVPS8rF/DFRTGmK', '2010-08-17', 'Computer', 'users/manish.potey@somaiya.edu/profilepic.jpg', 1, 0, 0, 0),
(3, 'Jyoti Trymbake', 'jyoti.trymbake@somaiya.edu', '$2y$10$f06wIJ29VeGf1oGfh2P95uHgYPXIPuPwC4NxE/xYolwy2tn3H0O1q', '2011-06-14', 'Computer', 'defaults/default_userprofile_pic.png', 0, 1, 0, 0),
(4, 'Prof. Poonam Bhogale', 'poonambhogale@somaiya.edu', '$2y$10$W6lbNYTxCAgG2GjeJ8xHuuV/BJg6NCMBifF5pvBJ7aDIiV2bIMTzC', '2008-11-11', 'Etrx', 'defaults/default_userprofile_pic.png', 1, 0, 0, 0),
(5, 'Anjali', 'anjali@gmail.com', '$2y$10$2hpkZa7tqA98LAhOiqq1ieaByObfDo..bwzSLbZCKJRVvhQTziwkW', '1999-07-26', 'Computer', 'defaults/default_userprofile_pic.png', 0, 1, 1, 0),
(6, 'Sharvai Patil', 'sharvai.p@somaiya.edu', '$2y$10$lTBgAr587gnLyzoZYR0UB.oS0jywazLATQdJNrRhdw5ltyvWiAlIu', '2001-01-13', 'Computer', 'users/sharvai.p@somaiya.edu/profilepic.jpg', 0, 0, 1, 0);

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
(1, 2019, 2, 20, 10, 45, 7878, 879, 56, 589, 45, 56, 0, 0, 0, 77458, 456456, 50);

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
(1, 2019, 2, 78, 78, 70, 877, 7777, 100, 23, 45, 40, 23, 32, 23, 23, 43, 20);

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
  `cat3_piiitotal_self_a` float NOT NULL,
  `cat3_piiitotal_hod_a` float NOT NULL,
  `cat3_piiitotal_committee_a` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partb_cat3_pi`
--

INSERT INTO `partb_cat3_pi` (`id`, `year`, `facultyId`, `cat3_piii1_self_a`, `cat3_piii1_hod_a`, `cat3_piii1_committee_a`, `cat3_piii2_self_a`, `cat3_piii2_hod_a`, `cat3_piii2_committee_a`, `cat3_piii3_self_a`, `cat3_piii3_hod_a`, `cat3_piii3_committee_a`, `cat3_piii4_self_a`, `cat3_piii4_hod_a`, `cat3_piii4_committee_a`, `cat3_piii5_self_a`, `cat3_piii5_hod_a`, `cat3_piii5_committee_a`, `cat3_piii6_self_a`, `cat3_piii6_hod_a`, `cat3_piii6_committee_a`, `cat3_piii7_self_a`, `cat3_piii7_hod_a`, `cat3_piii7_committee_a`, `cat3_piii8_self_a`, `cat3_piii8_hod_a`, `cat3_piii8_committee_a`, `cat3_piii9_self_a`, `cat3_piii9_hod_a`, `cat3_piii9_committee_a`, `cat3_piii10_self_a`, `cat3_piii10_hod_a`, `cat3_piii10_committee_a`, `cat3_piiitotal_self_a`, `cat3_piiitotal_hod_a`, `cat3_piiitotal_committee_a`) VALUES
(1, 2019, 2, 78, 78, 70, 41, 11, 10, 44, 755, 40, 56, 56, 50, 5588, 213, 100, 89, 78, 50, 77, 88, 50, 333, 44, 20, 878, 7878, 30, 2300, 11, 10, 777, 78, 170);

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
(0, 2019, 2, 45, 44, 20, 23, 23, 20, 56, 56, 30, 89, 98, 40);

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
  `agency` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_a_doc`
--

INSERT INTO `part_a_doc` (`id`, `formId`, `srno`, `course`, `days`, `agency`) VALUES
(1, 1, 1, 'KJSCE', 3, 'Kj Agency'),
(2, 1, 2, 'Open Ceremony', 5, 'Kj Agency 2'),
(3, 2, 0, '', 0, ''),
(4, 2, 2, 'KJSCE 2', 2, 'SKSCOAC'),
(5, 2, 1, 'KJSCE', 5, 'KJSCE'),
(6, 2, 3, 'KJSCE 3', 3, 'KJSCOC'),
(7, 3, 0, '', 0, '');

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
(3, 2019, 2, 22, 22, 20, 45, 45, 40);

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
(2, 2019, 2, 'Manish Potey', 29163, '', '', 'manish.potey@somaiya.edu', 2147483647, 'PHD', '0000-00-00', '', '', 'Head of Department', '0000-00-00', 0, 0, '', '', 0, 0, '', '', 0, 0, 'Yes', '', '', ''),
(3, 2019, 3, 'Jyoti Trymbake', 5476, 'Ghatkopar', 'Ghatkopar', 'jyoti.trymbake@somaiya.edu', 883957483, 'PHD', '1982-01-27', 'Professor', 'SPIT', '', '0000-00-00', 0, 0, '', '', 0, 0, '', '', 0, 0, 'Yes', '', '', '');

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
  `odpstest2` varchar(200) NOT NULL,
  `oepstest2` varchar(200) NOT NULL,
  `odtest1in` varchar(200) NOT NULL,
  `oetest1in` varchar(200) NOT NULL,
  `odtest2in` varchar(200) NOT NULL,
  `oetest2in` varchar(200) NOT NULL,
  `odtest1ass` varchar(200) NOT NULL,
  `oetest1ass` varchar(200) NOT NULL,
  `odtest2ass` varchar(200) NOT NULL,
  `oetest2ass` varchar(200) NOT NULL,
  `odeseps` varchar(200) NOT NULL,
  `oeeseps` varchar(200) NOT NULL,
  `odesein` varchar(200) NOT NULL,
  `oeesein` varchar(200) NOT NULL,
  `odeseth` varchar(200) NOT NULL,
  `oeeseth` varchar(200) NOT NULL,
  `odesepo` varchar(200) NOT NULL,
  `oeesepo` varchar(200) NOT NULL,
  `odesere_ass` varchar(200) NOT NULL,
  `oeesere_ass` varchar(200) NOT NULL,
  `odproofr` varchar(200) NOT NULL,
  `oeproofr` varchar(200) NOT NULL,
  `odopenday` varchar(200) NOT NULL,
  `oeopenday` varchar(200) NOT NULL,
  `edpstest1` varchar(200) NOT NULL,
  `eepstest1` varchar(200) NOT NULL,
  `edpstest2` varchar(200) NOT NULL,
  `eepstest2` varchar(200) NOT NULL,
  `edtest1in` varchar(200) NOT NULL,
  `eetest1in` varchar(200) NOT NULL,
  `edtest2in` varchar(200) NOT NULL,
  `eetest2in` varchar(200) NOT NULL,
  `edtest1ass` varchar(200) NOT NULL,
  `eetest1ass` varchar(200) NOT NULL,
  `edtest2ass` varchar(200) NOT NULL,
  `eetest2ass` varchar(200) NOT NULL,
  `edeseps` varchar(200) NOT NULL,
  `eeeseps` varchar(200) NOT NULL,
  `edesein` varchar(200) NOT NULL,
  `eeesein` varchar(200) NOT NULL,
  `edeseth` varchar(200) NOT NULL,
  `eeeseth` varchar(200) NOT NULL,
  `edesepo` varchar(200) NOT NULL,
  `eeesepo` varchar(200) NOT NULL,
  `edesere_ass` varchar(200) NOT NULL,
  `eeesere_ass` varchar(200) NOT NULL,
  `edproofr` varchar(200) NOT NULL,
  `eeproofr` varchar(200) NOT NULL,
  `edopenday` varchar(200) NOT NULL,
  `eeopenday` varchar(200) NOT NULL,
  `dpstest1` varchar(200) NOT NULL,
  `dpstest2` varchar(200) NOT NULL,
  `dtest1in` varchar(200) NOT NULL,
  `dtest2in` varchar(200) NOT NULL,
  `dtest1ass` varchar(200) NOT NULL,
  `dtest2ass` varchar(200) NOT NULL,
  `deseps` varchar(200) NOT NULL,
  `avg_ap` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_1`
--

INSERT INTO `part_b_cat_1` (`id`, `formId`, `avg_c`, `total_c`, `odpstest1`, `oepstest1`, `odpstest2`, `oepstest2`, `odtest1in`, `oetest1in`, `odtest2in`, `oetest2in`, `odtest1ass`, `oetest1ass`, `odtest2ass`, `oetest2ass`, `odeseps`, `oeeseps`, `odesein`, `oeesein`, `odeseth`, `oeeseth`, `odesepo`, `oeesepo`, `odesere_ass`, `oeesere_ass`, `odproofr`, `oeproofr`, `odopenday`, `oeopenday`, `edpstest1`, `eepstest1`, `edpstest2`, `eepstest2`, `edtest1in`, `eetest1in`, `edtest2in`, `eetest2in`, `edtest1ass`, `eetest1ass`, `edtest2ass`, `eetest2ass`, `edeseps`, `eeeseps`, `edesein`, `eeesein`, `edeseth`, `eeeseth`, `edesepo`, `eeesepo`, `edesere_ass`, `eeesere_ass`, `edproofr`, `eeproofr`, `edopenday`, `eeopenday`, `dpstest1`, `dpstest2`, `dtest1in`, `dtest2in`, `dtest1ass`, `dtest2ass`, `deseps`, `avg_ap`) VALUES
(1, 1, 0, 0, 'ffj', '89', 'uhi', '98', 'huy', '98', 'hb', '98', 'hb', '98', 'uhb', '09', 'uyb', '98', 'u98', '8', 'as', '5', 'ljk', '84', 'gjgj', '5', 'hjhb', '5454', 'bvhb', '5454', 'bbh', '51', 'vg', '5', 'vh', '45', 'bu', '9', 'hyv', '48', 'vgy', '8', 'hu', '375', 'hu', '537', 'jn', '46', 'k', '56', 'ok', '65', 'jh', '26', 'jb', '54', 'kjfj', 'hj', 'hg', 'hg', 'hg', 'hg', 'hg', 28),
(2, 2, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(3, 3, 0, 0, 'hjsdj', '6', 'jh', '54', 'hjb', '54', 'bhj', '5', 'se', '2', 'dsv', '5', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0);

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
  `ctec` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_1_cte`
--

INSERT INTO `part_b_cat_1_cte` (`id`, `formId`, `ctecourse`, `ctetyprlpt`, `cteugpg`, `cteclasssemester`, `ctehrsweek`, `ctehrsengaged`, `ctemaxhrs`, `ctec`) VALUES
(23, 1, 'jvjh', 'hg', 'hg', 'gh', 145, 58, 548, 5),
(24, 1, 'jh', 'jn', 'jn', 'jn', 48, 48, 5, 5),
(25, 1, 'jvjh', 'hg', 'hg', 'ghey', 145, 58, 548, 5);

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
  `ctoc` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_1_cto`
--

INSERT INTO `part_b_cat_1_cto` (`id`, `formId`, `ctocourse`, `ctotyprlpt`, `ctougpg`, `ctoclasssemester`, `ctohrsweek`, `ctohrsengaged`, `ctomaxhrs`, `ctoc`) VALUES
(3, 2, 'asd', 'sd', 'wd', 'wd', 12, 3, 2, 3),
(4, 2, 'asd', 'a', 'dw', 'w', 12, 21, 1, 2),
(23, 1, 'asdasd', 'das', 'dasd', 'dasdeqw', 87887, 7, 1, 87),
(24, 1, 'sd', 'ub', 'uhb', 'uhb', 8, 7, 76, 76),
(25, 3, 'iuhf', 'iuh', 'iuh', 'iuh', 1, 3, 23, 43),
(26, 3, 'sdvsd', 'dw', 'weew', 'wewe', 3, 2, 42, 1);

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_1_dar`
--

CREATE TABLE `part_b_cat_1_dar` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `dara` varchar(200) NOT NULL,
  `darb` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_1_dar`
--

INSERT INTO `part_b_cat_1_dar` (`id`, `formId`, `dara`, `darb`) VALUES
(23, 1, 'asdasd', 'asdasd'),
(24, 1, 'asdef', 'rb'),
(25, 1, 'asdasd424', 'asdasd42'),
(26, 1, 'yo', 'ou');

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
(6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_2_act`
--

CREATE TABLE `part_b_cat_2_act` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `ea` varchar(200) NOT NULL,
  `eb` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_2_act`
--

INSERT INTO `part_b_cat_2_act` (`id`, `formId`, `ea`, `eb`) VALUES
(21, 1, 'jn', 'ijn'),
(22, 1, 'ijn', 'ijn');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_2_c`
--

CREATE TABLE `part_b_cat_2_c` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `ca` varchar(200) NOT NULL,
  `cb` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_2_c`
--

INSERT INTO `part_b_cat_2_c` (`id`, `formId`, `ca`, `cb`) VALUES
(23, 1, 'kjn', 'jkn'),
(24, 1, 'kjn', 'kjn'),
(25, 1, '5323vsd', 'sfe2');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_2_exc`
--

CREATE TABLE `part_b_cat_2_exc` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `eca` varchar(200) NOT NULL,
  `ecb` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_2_exc`
--

INSERT INTO `part_b_cat_2_exc` (`id`, `formId`, `eca`, `ecb`) VALUES
(31, 1, 'jn', 'ijn'),
(32, 1, 'jb', 'hjb'),
(33, 1, '53', '1daf');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_2_ha`
--

CREATE TABLE `part_b_cat_2_ha` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `ha` varchar(200) NOT NULL,
  `hb` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_2_ha`
--

INSERT INTO `part_b_cat_2_ha` (`id`, `formId`, `ha`, `hb`) VALUES
(23, 1, 'jnf', 'in'),
(24, 1, 'ijn', 'ijn'),
(25, 1, 'ter', 'qwe');

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
  `mtechne` int(11) NOT NULL,
  `mtechts` int(11) NOT NULL,
  `mtechda` int(11) NOT NULL,
  `btechne` int(11) NOT NULL,
  `btechts` int(11) NOT NULL,
  `btechda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_3`
--

INSERT INTO `part_b_cat_3` (`id`, `formId`, `phdne`, `phdts`, `phdda`, `mtechne`, `mtechts`, `mtechda`, `btechne`, `btechts`, `btechda`) VALUES
(1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
  `ppncabk` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_3_bk`
--

INSERT INTO `part_b_cat_3_bk` (`id`, `formId`, `pptitlebk`, `ppnprbk`, `ppisbnbk`, `ppdatebk`, `ppifbk`, `customRadioInline1bk`, `ppncabk`) VALUES
(9, 1, 'yeet', 'egr', 'erge', '2019-01-16', 'qwe', '', 'dqdw'),
(10, 1, 'jeoe', 'ihiuh', 'jhg', '2019-01-16', 'kh', 'No', 'oihlijo');

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
  `gcd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_3_cres`
--

INSERT INTO `part_b_cat_3_cres` (`id`, `formId`, `tca`, `acb`, `dcc`, `gcd`) VALUES
(6, 1, 'er', 'ty', '2019-01-09', 56);

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
  `ggd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_3_ores`
--

INSERT INTO `part_b_cat_3_ores` (`id`, `formId`, `tta`, `aab`, `ddc`, `ggd`) VALUES
(6, 1, 'yu', 'nm', '2019-01-02', 89);

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_3_pip`
--

CREATE TABLE `part_b_cat_3_pip` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `dpi` varchar(200) NOT NULL,
  `drf` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_3_pip`
--

INSERT INTO `part_b_cat_3_pip` (`id`, `formId`, `dpi`, `drf`) VALUES
(6, 1, 'er', '2019-01-09');

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
  `ppnca` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_3_pp`
--

INSERT INTO `part_b_cat_3_pp` (`id`, `formId`, `pptitle`, `ppnpr`, `ppisbn`, `ppif`, `customRadioInline1`, `ppnca`) VALUES
(8, 1, 'hey', '34', '123', 'sd', '', '12'),
(9, 1, 'retu', 'wew', 'qwq', 'ree', 'No', '12');

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
  `ppncaic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_3_ppic`
--

INSERT INTO `part_b_cat_3_ppic` (`id`, `formId`, `pptitleic`, `ppnpric`, `ppisbnic`, `ppific`, `customRadioInline1ic`, `ppncaic`) VALUES
(8, 1, 'ghi', '12', 'as', '34', '', '12'),
(9, 1, 'HI', 'io', 'ojoi', 'jk', 'No', 'kln');

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
  `ppncainc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_3_ppinc`
--

INSERT INTO `part_b_cat_3_ppinc` (`id`, `formId`, `pptitleinc`, `ppnprinc`, `ppisbnpinc`, `ppifinc`, `customRadioInline1inc`, `ppncainc`) VALUES
(10, 1, 'He3', 'NS2', '57021', 'byt', '', '23'),
(11, 1, 'asd', 'asd', 'fe', 'we', 'No', '123'),
(12, 1, 'hola', 'afwe', 'wew23', 'ewwewewe', 'No', '3');

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
  `gd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_3_res`
--

INSERT INTO `part_b_cat_3_res` (`id`, `formId`, `ta`, `ab`, `dc`, `gd`) VALUES
(8, 1, 'ewr', 're', '2019-01-10', 34),
(9, 1, 'ge', 'er', '2019-01-09', 5);

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
(8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_4_creds`
--

CREATE TABLE `part_b_cat_4_creds` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `cativ2_dp` varchar(200) NOT NULL,
  `cativ2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_4_creds`
--

INSERT INTO `part_b_cat_4_creds` (`id`, `formId`, `cativ2_dp`, `cativ2`) VALUES
(6, 1, '23', '34');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_4_inv`
--

CREATE TABLE `part_b_cat_4_inv` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `cativ1_dp` varchar(200) NOT NULL,
  `cativ1_datee` date NOT NULL,
  `cativ1_o` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_4_inv`
--

INSERT INTO `part_b_cat_4_inv` (`id`, `formId`, `cativ1_dp`, `cativ1_datee`, `cativ1_o`) VALUES
(6, 1, '23', '2019-01-09', '234');

-- --------------------------------------------------------

--
-- Table structure for table `part_b_cat_4_sem`
--

CREATE TABLE `part_b_cat_4_sem` (
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `cativ_dp` varchar(200) NOT NULL,
  `cativ_datee` date NOT NULL,
  `cativ_o` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_b_cat_4_sem`
--

INSERT INTO `part_b_cat_4_sem` (`id`, `formId`, `cativ_dp`, `cativ_datee`, `cativ_o`) VALUES
(6, 1, '43', '2019-01-10', '45');

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
(3, 2019, 3);

-- --------------------------------------------------------

--
-- Table structure for table `summary_table`
--

CREATE TABLE `summary_table` (
  `id` int(11) NOT NULL,
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

INSERT INTO `summary_table` (`id`, `last_academicA_last`, `pi_academic_last`, `current_academicA_current`, `pi_academicA_current`, `last_academicBI_last`, `pi_academicBI_last`, `current_academicBI_current`, `pi_academicBI_current`, `last_academicBII_last`, `pi_academicBII_last`, `current_academicBII_current`, `pi_academicBII_current`, `last_academicBIII_last`, `pi_academicBIII_last`, `current_academicBIII_current`, `pi_academicBIII_current`, `last_academicBIV_last`, `pi_academicBIV_last`, `current_academicBIV_current`, `pi_academicBIV_current`, `last_academicBIV_avgA_last`, `pi_academicBIV_avgA_last`, `last_academicBIV_avgB_last`, `pi_academicBIV_avgB_last`, `last_academicBIV_avgpi_last`) VALUES
(1, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 584, 454, 5456, 565, 4565, 545, 455665, 45656, 212, 131, 2121, 23123, 2123, 1212, 121, 212121, 2, 22, 212, 12, 121, 2122, 122, 121, 2212);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_table`
--
ALTER TABLE `faculty_table`
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
-- Indexes for table `summary_table`
--
ALTER TABLE `summary_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_table`
--
ALTER TABLE `faculty_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `partb_cat1_pi`
--
ALTER TABLE `partb_cat1_pi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `partb_cat2_pi`
--
ALTER TABLE `partb_cat2_pi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `partb_cat3_pi`
--
ALTER TABLE `partb_cat3_pi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part_a_doc`
--
ALTER TABLE `part_a_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `part_a_gpi`
--
ALTER TABLE `part_a_gpi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `part_a_table`
--
ALTER TABLE `part_a_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `part_b_cat_1`
--
ALTER TABLE `part_b_cat_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `part_b_cat_1_cte`
--
ALTER TABLE `part_b_cat_1_cte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `part_b_cat_1_cto`
--
ALTER TABLE `part_b_cat_1_cto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `part_b_cat_1_dar`
--
ALTER TABLE `part_b_cat_1_dar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `part_b_cat_2`
--
ALTER TABLE `part_b_cat_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `part_b_cat_2_act`
--
ALTER TABLE `part_b_cat_2_act`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `part_b_cat_2_c`
--
ALTER TABLE `part_b_cat_2_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `part_b_cat_2_exc`
--
ALTER TABLE `part_b_cat_2_exc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `part_b_cat_2_ha`
--
ALTER TABLE `part_b_cat_2_ha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `part_b_cat_3`
--
ALTER TABLE `part_b_cat_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `part_b_cat_3_bk`
--
ALTER TABLE `part_b_cat_3_bk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `part_b_cat_3_cres`
--
ALTER TABLE `part_b_cat_3_cres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `part_b_cat_3_ores`
--
ALTER TABLE `part_b_cat_3_ores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `part_b_cat_3_pip`
--
ALTER TABLE `part_b_cat_3_pip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `part_b_cat_3_pp`
--
ALTER TABLE `part_b_cat_3_pp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `part_b_cat_3_ppic`
--
ALTER TABLE `part_b_cat_3_ppic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `part_b_cat_3_ppinc`
--
ALTER TABLE `part_b_cat_3_ppinc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `part_b_cat_3_res`
--
ALTER TABLE `part_b_cat_3_res`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `part_b_cat_4`
--
ALTER TABLE `part_b_cat_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `part_b_cat_4_creds`
--
ALTER TABLE `part_b_cat_4_creds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `part_b_cat_4_inv`
--
ALTER TABLE `part_b_cat_4_inv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `part_b_cat_4_sem`
--
ALTER TABLE `part_b_cat_4_sem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `part_b_table`
--
ALTER TABLE `part_b_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `summary_table`
--
ALTER TABLE `summary_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
