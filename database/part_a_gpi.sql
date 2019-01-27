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
(3, 2019, 2, 144, 45, 0, 474, 748, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `part_a_gpi`
--
ALTER TABLE `part_a_gpi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `part_a_gpi`
--
ALTER TABLE `part_a_gpi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
