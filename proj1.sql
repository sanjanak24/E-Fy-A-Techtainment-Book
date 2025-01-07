-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 04, 2024 at 06:29 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--
CREATE DATABASE `test` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE IF NOT EXISTS `coordinator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `usn` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`id`, `name`, `usn`, `email`, `contact`, `password`) VALUES
(1, 'nagaraj', '125N233', 'nag@123456', '12345', '1234'),
(2, 'nagaraj', '125N234', 'nag@12', '45678', 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `epost`
--

CREATE TABLE IF NOT EXISTS `epost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ename` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `desc1` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `sid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `epost`
--

INSERT INTO `epost` (`id`, `ename`, `cname`, `desc1`, `time`, `date`, `venue`, `sid`) VALUES
(7, 'singing', 'bbbb', 'Music binds our soul, heart and emotions. Music is the best method of relaxation. It cheers the spir', '09:30', '2024-03-15', 'hubli  bb', 1),
(8, 'poster', 'sanjana', 'ffuyiui', '19:38', '2024-03-25', 'lh2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `eregisteration`
--

CREATE TABLE IF NOT EXISTS `eregisteration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `eregisteration`
--

INSERT INTO `eregisteration` (`id`, `name`, `email`, `contact`, `password`) VALUES
(1, 'nagaraj', 'b@123', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fkid` int(11) NOT NULL,
  `ename` varchar(100) NOT NULL,
  `eid` tinyint(4) NOT NULL,
  `evt` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `fkid`, `ename`, `eid`, `evt`) VALUES
(1, 1, '150.00', 0, 1),
(2, 1, '150.01', 0, 1),
(3, 1, '150.02', 0, 1),
(4, 1, '150.03', 0, 1),
(5, 1, '150.04', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `eid` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `email`, `contact`, `password`, `eid`) VALUES
(1, 'nagaraj', 'nagraj123@gmail.com', '8899776655', 'nag@123', '');

-- --------------------------------------------------------

--
-- Table structure for table `tudent_register`
--

CREATE TABLE IF NOT EXISTS `tudent_register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(100) NOT NULL,
  `usn` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_number` int(10) NOT NULL,
  `s_password` varchar(100) NOT NULL,
  `s_event` varchar(100) NOT NULL,
  `t_id` varchar(100) NOT NULL,
  `chk` varchar(100) NOT NULL,
  `accomendation` varchar(100) NOT NULL,
  `erd` tinyint(4) NOT NULL,
  `fkid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tudent_register`
--

INSERT INTO `tudent_register` (`id`, `s_name`, `usn`, `email`, `c_name`, `c_number`, `s_password`, `s_event`, `t_id`, `chk`, `accomendation`, `erd`, `fkid`) VALUES
(1, 'nagaraj', '123abc', 'b@123', 'abc', '123', 'in', '750', 'abc11234', '', 'yes', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Id` bigint(100) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `StudentID` varchar(100) NOT NULL,
  `Contact` int(10) NOT NULL,
  `CollegeName` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Eventname` varchar(200) NOT NULL,
  `EventAmt` bigint(200) NOT NULL,
  `TransactionId` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Name`, `Email`, `StudentID`, `Contact`, `CollegeName`, `Password`, `Eventname`, `EventAmt`, `TransactionId`) VALUES
(1, 'Rohan', 'rohansp2100@gmail.com', '1NH18EC097', 1234567890, 'New Horizon College', '123', 'Sports', 200, '1SB90NK');
