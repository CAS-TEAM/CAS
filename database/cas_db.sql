-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2019 at 09:12 AM
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
  `hod` int(11) NOT NULL,
  `committee` int(11) NOT NULL,
  `principal` int(11) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_table`
--

INSERT INTO `faculty_table` (`id`, `faculty_name`, `email`, `password`, `date_of_joining`, `department`, `hod`, `committee`, `principal`, `admin`) VALUES
(1, 'Prof. Babaso Aldar', 'babasoaldar@somaiya.edu', '$2y$10$bd4GNgydExAbWXbrf8P1SuVtVBdwxJ2oM66S.j1G/T5utSB1IeSCS', '2018-05-12', 'Computer', 0, 1, 0, 1),
(2, 'Prof. Manish Potey', 'manish.potey@somaiya.edu', '$2y$10$mRi97USluJQZPZtwSgS3ZOk1yybigUHHRhAJJ/yVPS8rF/DFRTGmK', '2010-08-23', 'Computer', 1, 1, 1, 0),
(3, 'Jyoti Trymbake', 'jyoti.trymbake@somaiya.edu', '$2y$10$f06wIJ29VeGf1oGfh2P95uHgYPXIPuPwC4NxE/xYolwy2tn3H0O1q', '2011-06-14', 'Computer', 0, 0, 0, 0),
(4, 'Prof. Poonam Bhogale', 'poonambhogale@somaiya.edu', '$2y$10$W6lbNYTxCAgG2GjeJ8xHuuV/BJg6NCMBifF5pvBJ7aDIiV2bIMTzC', '2008-11-11', 'Etrx', 1, 0, 0, 0),
(5, 'Anjali', 'anjali@gmail.com', '$2y$10$2hpkZa7tqA98LAhOiqq1ieaByObfDo..bwzSLbZCKJRVvhQTziwkW', '1999-07-26', 'Computer', 1, 1, 1, 0);

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
(2, 1, 2, 'Open Ceremony', 5, 'Kj Agency 2');

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
(1, 2017, 2, 'Manish Potey', 120039, '', '', 'manish.potey@somaiya.edu', 0, '', '2018-12-11', '', '', '', '0000-00-00', 0, 0, '', '', 0, 0, '', '', 0, 0, 'Yes', '', '', '');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_table`
--
ALTER TABLE `faculty_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `part_a_doc`
--
ALTER TABLE `part_a_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `part_a_table`
--
ALTER TABLE `part_a_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
