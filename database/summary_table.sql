-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2019 at 11:38 AM
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
-- Indexes for table `summary_table`
--
ALTER TABLE `summary_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `summary_table`
--
ALTER TABLE `summary_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
