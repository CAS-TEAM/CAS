-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2019 at 09:59 AM
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
(2, 'Prof. Manish Potey', 'manish.potey@somaiya.edu', '$2y$10$mRi97USluJQZPZtwSgS3ZOk1yybigUHHRhAJJ/yVPS8rF/DFRTGmK', '2010-08-17', 'Computer', 'users/manish.potey@somaiya.edu/profilepic.jpg', 1, 1, 1, 0),
(3, 'Jyoti Trymbake', 'jyoti.trymbake@somaiya.edu', '$2y$10$f06wIJ29VeGf1oGfh2P95uHgYPXIPuPwC4NxE/xYolwy2tn3H0O1q', '2011-06-14', 'Computer', 'defaults/default_userprofile_pic.png', 0, 0, 0, 0),
(4, 'Prof. Poonam Bhogale', 'poonambhogale@somaiya.edu', '$2y$10$W6lbNYTxCAgG2GjeJ8xHuuV/BJg6NCMBifF5pvBJ7aDIiV2bIMTzC', '2008-11-11', 'Etrx', 'defaults/default_userprofile_pic.png', 1, 0, 0, 0),
(5, 'Anjali', 'anjali@gmail.com', '$2y$10$2hpkZa7tqA98LAhOiqq1ieaByObfDo..bwzSLbZCKJRVvhQTziwkW', '1999-07-26', 'Computer', 'defaults/default_userprofile_pic.png', 0, 1, 1, 0),
(6, 'Sharvai Patil', 'sharvai.p@somaiya.edu', '$2y$10$lTBgAr587gnLyzoZYR0UB.oS0jywazLATQdJNrRhdw5ltyvWiAlIu', '2001-01-13', 'Computer', 'users/sharvai.p@somaiya.edu/profilepic.jpg', 0, 0, 1, 0);

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
(6, 2, 3, 'KJSCE 3', 3, 'KJSCOC');

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
(2, 2019, 2, 'Manish Potey', 29163, '', '', 'manish.potey@somaiya.edu', 2147483647, 'PHD', '0000-00-00', '', '', 'Head of Department', '0000-00-00', 0, 0, '', '', 0, 0, '', '', 0, 0, 'Yes', '', '', '');

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
(2, 2, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0);

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
(1, 1, 'jvjh', 'hg', 'hg', 'gh', 145, 58, 548, 5),
(2, 1, 'jh', 'jn', 'jn', 'jn', 48, 48, 5, 5);

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
(1, 1, 'asdasd', 'das', 'dasd', 'dasde', 87887, 7, 1, 87),
(2, 1, 'sd', 'ub', 'uhb', 'uhb', 8, 7, 76, 76),
(3, 2, 'asd', 'sd', 'wd', 'wd', 12, 3, 2, 3),
(4, 2, 'asd', 'a', 'dw', 'w', 12, 21, 1, 2);

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
(1, 1, 'asdasd', 'asdasd'),
(2, 1, 'asdef', 'rb');

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
(2, 2);

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
(1, 1, 'jn', 'ijn'),
(2, 1, 'ijn', 'ijn');

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
(1, 1, 'kjn', 'jkn'),
(2, 1, 'kjn', 'kjn');

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
(1, 1, 'jn', 'ijn'),
(2, 1, 'jb', 'hjb'),
(3, 1, 'jhb', 'hjb');

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
(1, 1, 'jnf', 'in'),
(2, 1, 'ijn', 'ijn');

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
(1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
  `ppdatebk` varchar(200) NOT NULL,
  `ppifbk` varchar(200) NOT NULL,
  `customRadioInline1bk` varchar(200) NOT NULL,
  `ppncabk` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 2);

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
(1, 2019, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_table`
--
ALTER TABLE `faculty_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_a_doc`
--
ALTER TABLE `part_a_doc`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_table`
--
ALTER TABLE `faculty_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `part_a_doc`
--
ALTER TABLE `part_a_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `part_a_table`
--
ALTER TABLE `part_a_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `part_b_cat_1`
--
ALTER TABLE `part_b_cat_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `part_b_cat_1_cte`
--
ALTER TABLE `part_b_cat_1_cte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `part_b_cat_1_cto`
--
ALTER TABLE `part_b_cat_1_cto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `part_b_cat_1_dar`
--
ALTER TABLE `part_b_cat_1_dar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `part_b_cat_2`
--
ALTER TABLE `part_b_cat_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `part_b_cat_2_act`
--
ALTER TABLE `part_b_cat_2_act`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `part_b_cat_2_c`
--
ALTER TABLE `part_b_cat_2_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `part_b_cat_2_exc`
--
ALTER TABLE `part_b_cat_2_exc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `part_b_cat_2_ha`
--
ALTER TABLE `part_b_cat_2_ha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `part_b_cat_3`
--
ALTER TABLE `part_b_cat_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part_b_cat_3_bk`
--
ALTER TABLE `part_b_cat_3_bk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `part_b_cat_3_cres`
--
ALTER TABLE `part_b_cat_3_cres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `part_b_cat_3_ores`
--
ALTER TABLE `part_b_cat_3_ores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `part_b_cat_3_pip`
--
ALTER TABLE `part_b_cat_3_pip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `part_b_cat_3_pp`
--
ALTER TABLE `part_b_cat_3_pp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `part_b_cat_3_ppic`
--
ALTER TABLE `part_b_cat_3_ppic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `part_b_cat_3_ppinc`
--
ALTER TABLE `part_b_cat_3_ppinc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `part_b_cat_3_res`
--
ALTER TABLE `part_b_cat_3_res`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `part_b_cat_4`
--
ALTER TABLE `part_b_cat_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part_b_cat_4_creds`
--
ALTER TABLE `part_b_cat_4_creds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `part_b_cat_4_inv`
--
ALTER TABLE `part_b_cat_4_inv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `part_b_cat_4_sem`
--
ALTER TABLE `part_b_cat_4_sem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `part_b_table`
--
ALTER TABLE `part_b_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
