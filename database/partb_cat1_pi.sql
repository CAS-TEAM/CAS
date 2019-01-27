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
(1, 2019, 2, 0, 0, 0, 7878, 879, 0, 589, 45, 0, 45, 45, 0, 77458, 456456, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `partb_cat1_pi`
--
ALTER TABLE `partb_cat1_pi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `partb_cat1_pi`
--
ALTER TABLE `partb_cat1_pi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
