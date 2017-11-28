-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 09, 2015 at 10:56 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `audition`
--

-- --------------------------------------------------------

--
-- Table structure for table `contestant`
--

CREATE TABLE IF NOT EXISTS `contestant` (
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `fathers_name` varchar(40) NOT NULL,
  `mothers_name` varchar(40) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `house1` varchar(10) NOT NULL,
  `street1` varchar(50) NOT NULL,
  `city1` varchar(15) NOT NULL,
  `pin1` varchar(6) NOT NULL,
  `state1` varchar(25) NOT NULL,
  `phone1` varchar(50) NOT NULL,
  `mobile1` varchar(50) NOT NULL,
  `house2` varchar(10) NOT NULL,
  `street2` varchar(50) NOT NULL,
  `city2` varchar(15) NOT NULL,
  `pin2` varchar(6) NOT NULL,
  `state2` varchar(25) NOT NULL,
  `phone2` varchar(50) NOT NULL,
  `mobile2` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Pending',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(11, 'admin', '12345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
