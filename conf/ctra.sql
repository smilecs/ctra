-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 15, 2016 at 10:19 AM
-- Server version: 5.6.27-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ctra`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
`id` int(11) NOT NULL,
  `uname` varchar(124) NOT NULL DEFAULT 'admin',
  `pwd` varchar(124) NOT NULL DEFAULT '12345',
  `priv` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `uname`, `pwd`, `priv`) VALUES
(1, 'admin', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `ownercode` varchar(25) DEFAULT NULL,
  `manufactured` date DEFAULT NULL,
  `license_no` varchar(25) DEFAULT NULL,
  `ctra_number` varchar(25) DEFAULT NULL,
  `capacity` varchar(15) DEFAULT NULL,
  `registration_no` varchar(15) DEFAULT NULL,
  `engine_no` varchar(20) DEFAULT NULL,
  `chassis_no` varchar(20) DEFAULT NULL,
  `car_model` varchar(30) DEFAULT NULL,
  `car_make` varchar(30) DEFAULT NULL,
  `color` varchar(124) NOT NULL,
  `insurance` varchar(124) NOT NULL,
  `image` varchar(124) NOT NULL,
  `date` date NOT NULL,
  `category` int(11) NOT NULL DEFAULT '0',
  `us` varchar(124) NOT NULL,
  `idm` varchar(124) NOT NULL,
  `created_by` varchar(124) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(11) NOT NULL,
  `category` varchar(124) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Colored'),
(4, 'Off-color'),
(5, 'Tri-cycle');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE IF NOT EXISTS `driver` (
  `religion` varchar(124) NOT NULL,
  `first_name` varchar(124) NOT NULL,
  `middle_name` varchar(124) NOT NULL,
  `surname` varchar(124) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(124) NOT NULL,
  `sex` varchar(24) NOT NULL,
  `marital` varchar(24) NOT NULL,
  `office` varchar(124) DEFAULT NULL,
  `fone` varchar(24) DEFAULT NULL,
  `email` varchar(124) DEFAULT NULL,
  `state` varchar(124) DEFAULT NULL,
  `village` varchar(124) DEFAULT NULL,
  `lga` varchar(124) DEFAULT NULL,
  `nation` varchar(124) DEFAULT NULL,
  `nok` varchar(124) DEFAULT NULL,
  `relay` varchar(124) DEFAULT NULL,
  `contact` varchar(124) DEFAULT NULL,
  `occupation` text,
  `vehicle` int(11) NOT NULL,
  `img` varchar(124) DEFAULT '0',
  `date` date NOT NULL,
  `idd` varchar(124) DEFAULT NULL,
  `id` varchar(124) NOT NULL,
  `created_by` varchar(124) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guard`
--

CREATE TABLE IF NOT EXISTS `guard` (
  `religion` varchar(124) NOT NULL,
  `driver` varchar(124) NOT NULL,
  `first_name` varchar(124) NOT NULL,
  `middle_name` varchar(124) NOT NULL,
  `surname` varchar(124) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(124) NOT NULL,
  `sex` varchar(24) NOT NULL,
  `marital` varchar(24) NOT NULL,
  `office` varchar(124) DEFAULT NULL,
  `fone` varchar(24) DEFAULT NULL,
  `email` varchar(124) DEFAULT NULL,
  `state` varchar(124) DEFAULT NULL,
  `village` varchar(124) DEFAULT NULL,
  `lga` varchar(124) DEFAULT NULL,
  `nation` varchar(124) DEFAULT NULL,
  `nok` varchar(124) DEFAULT NULL,
  `relay` varchar(124) DEFAULT NULL,
  `contact` varchar(124) DEFAULT NULL,
  `occupation` text,
  `image` varchar(124) DEFAULT NULL,
  `id` varchar(124) NOT NULL,
  `created_by` varchar(124) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE IF NOT EXISTS `owner` (
  `religion` varchar(124) DEFAULT NULL,
  `first_name` varchar(124) NOT NULL,
  `middle_name` varchar(124) NOT NULL,
  `surname` varchar(124) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(124) NOT NULL,
  `sex` varchar(24) NOT NULL,
  `marital` varchar(24) DEFAULT NULL,
  `office` varchar(124) DEFAULT NULL,
  `fone` varchar(24) DEFAULT NULL,
  `email` varchar(124) DEFAULT NULL,
  `state` varchar(124) DEFAULT NULL,
  `village` varchar(124) DEFAULT NULL,
  `lga` varchar(124) DEFAULT NULL,
  `nation` varchar(124) DEFAULT NULL,
  `nok` varchar(124) DEFAULT NULL,
  `relay` varchar(124) DEFAULT NULL,
  `contact` varchar(124) DEFAULT NULL,
  `occupation` text,
  `us` varchar(124) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `image` varchar(124) DEFAULT 'no',
  `id` varchar(124) NOT NULL,
  `created_by` varchar(124) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
 ADD UNIQUE KEY `registration_no` (`registration_no`), ADD UNIQUE KEY `registration_no_2` (`registration_no`), ADD UNIQUE KEY `registration_no_3` (`registration_no`), ADD UNIQUE KEY `registration_no_4` (`registration_no`), ADD UNIQUE KEY `registration_no_5` (`registration_no`), ADD UNIQUE KEY `registration_no_6` (`registration_no`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
