-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2017 at 04:13 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `pid` int(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `DOB` date NOT NULL,
  `email` varchar(40) NOT NULL,
  `country` varchar(40) NOT NULL,
  `language` varchar(40) NOT NULL,
  `cell_phone` varchar(40) NOT NULL,
  `home_phone` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `zipcode` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`pid`, `gender`, `DOB`, `email`, `country`, `language`, `cell_phone`, `home_phone`, `address`, `state`, `city`, `zipcode`) VALUES
(18, 'Male', '1990-01-01', 'sambhareshivprasad@gmail.com', 'India', 'English', '9561387271', '0233', 'Ashta ', 'Maharashtra', 'Pune', '416301');

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE `medical` (
  `pid` int(10) NOT NULL,
  `history` varchar(200) NOT NULL,
  `family_history` varchar(200) NOT NULL,
  `surgical_history` varchar(100) NOT NULL,
  `allergies` varchar(50) NOT NULL,
  `smoking` varchar(10) NOT NULL,
  `eating` varchar(40) NOT NULL,
  `sleeping` varchar(20) NOT NULL,
  `other` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical`
--

INSERT INTO `medical` (`pid`, `history`, `family_history`, `surgical_history`, `allergies`, `smoking`, `eating`, `sleeping`, `other`) VALUES
(18, ' / Anxiety / Allergies / Depression / Obesity', ' / Allergies / Diabetis / Heart Attack / Ulcers', 'Bypass', 'Milk', 'No', '4 lt. Water/Day', '7-8 Hours', '');

-- --------------------------------------------------------

--
-- Table structure for table `patientdb`
--

CREATE TABLE `patientdb` (
  `id` int(10) NOT NULL,
  `Name` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientdb`
--

INSERT INTO `patientdb` (`id`, `Name`, `username`, `password`) VALUES
(1, 'Shivprasad Sambhare', 'shiv1234', 'shiv1234'),
(18, 'Testing', 'test', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patientdb`
--
ALTER TABLE `patientdb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patientdb`
--
ALTER TABLE `patientdb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
