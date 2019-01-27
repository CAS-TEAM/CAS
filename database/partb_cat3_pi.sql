-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2019 at 11:35 AM
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
(1, 2019, 2, 78, 78, 0, 41, 11, 0, 44, 755, 0, 55, 56, 0, 5588, 213, 0, 89, 78, 0, 77, 88, 0, 333, 44, 0, 878, 7878, 0, 2300, 11, 0, 777, 78, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `partb_cat3_pi`
--
ALTER TABLE `partb_cat3_pi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `partb_cat3_pi`
--
ALTER TABLE `partb_cat3_pi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
