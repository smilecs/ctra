-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2015 at 08:26 AM
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
CREATE DATABASE IF NOT EXISTS `ctra` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ctra`;

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
`id` int(9) unsigned zerofill NOT NULL,
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
  `category` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `ownercode`, `manufactured`, `license_no`, `ctra_number`, `capacity`, `registration_no`, `engine_no`, `chassis_no`, `car_model`, `car_make`, `color`, `insurance`, `image`, `date`, `category`) VALUES
(000000001, '000001', '1999-11-01', 'hut-090', NULL, '6', '0909', '09890', '09890', 'salon', 'audi', '#000000', '098', '000001.jpg', '0000-00-00', 1);

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
`id` int(6) unsigned zerofill NOT NULL,
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
  `img` varchar(124) DEFAULT NULL,
  `date` date NOT NULL,
  `idd` varchar(124) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `religion`, `first_name`, `middle_name`, `surname`, `dob`, `address`, `sex`, `marital`, `office`, `fone`, `email`, `state`, `village`, `lga`, `nation`, `nok`, `relay`, `contact`, `occupation`, `vehicle`, `img`, `date`, `idd`) VALUES
(000004, 'christian', 'mnnn', 'Samuel', 'mmumene', '2015-12-31', '1', 'male', 'married', '66 new airport road', '07033383068', 'mumene@gmail.com', 'nigeria', 'usumutong', 'Akampka', 'nigerian', 'me Myself and I alone', 'nok', '101', NULL, 1, '4.jpg', '0000-00-00', 'oppiwi903');

-- --------------------------------------------------------

--
-- Table structure for table `guard`
--

CREATE TABLE IF NOT EXISTS `guard` (
`id` int(6) unsigned zerofill NOT NULL,
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
  `image` varchar(124) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guard`
--

INSERT INTO `guard` (`id`, `religion`, `driver`, `first_name`, `middle_name`, `surname`, `dob`, `address`, `sex`, `marital`, `office`, `fone`, `email`, `state`, `village`, `lga`, `nation`, `nok`, `relay`, `contact`, `occupation`, `image`) VALUES
(000001, 'christian', 'oppiwi903', 'smile', 'poppl', 'mmumene', '2011-12-31', '1', 'male', 'married', '66 new airport road', '07033383068', 'mumene@gmail.com', 'nigeria', 'village', 'abi', NULL, NULL, NULL, NULL, NULL, '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE IF NOT EXISTS `owner` (
`id` int(6) unsigned zerofill NOT NULL,
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
  `occupation` text
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `religion`, `first_name`, `middle_name`, `surname`, `dob`, `address`, `sex`, `marital`, `office`, `fone`, `email`, `state`, `village`, `lga`, `nation`, `nok`, `relay`, `contact`, `occupation`) VALUES
(000001, 'jj', 'mm', 'm', 'm', '2015-11-04', 'kk', 'k', 'k', 'k', 'k', 'k', 'k', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(000002, 'christian', 'mnnn', 'jjjj', 'mmumene', '2015-11-19', '66', 'male', 'married', '66 new airport road', '07033383068', 'mumene@gmail.com', 'nigeria', 'usumutong', 'abi', 'nigerian', 'nok', 'nok', '07033383068', 'mechanic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `registration_no` (`registration_no`), ADD UNIQUE KEY `registration_no_2` (`registration_no`), ADD UNIQUE KEY `registration_no_3` (`registration_no`), ADD UNIQUE KEY `registration_no_4` (`registration_no`), ADD UNIQUE KEY `registration_no_5` (`registration_no`), ADD UNIQUE KEY `registration_no_6` (`registration_no`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guard`
--
ALTER TABLE `guard`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
MODIFY `id` int(9) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
MODIFY `id` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `guard`
--
ALTER TABLE `guard`
MODIFY `id` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
MODIFY `id` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
