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
(0, 2019, 2, 45, 44, 0, 23, 23, 0, 56, 56, 0, 89, 98, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
