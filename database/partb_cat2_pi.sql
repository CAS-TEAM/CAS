-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2019 at 11:34 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(1, 2019, 2, 78, 78, 0, 877, 7777, 0, 23, 45, 0, 23, 32, 0, 23, 43, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `partb_cat2_pi`
--
ALTER TABLE `partb_cat2_pi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `partb_cat2_pi`
--
ALTER TABLE `partb_cat2_pi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
