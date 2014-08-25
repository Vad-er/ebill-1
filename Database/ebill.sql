-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2014 at 05:13 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ebill`
--
DROP DATABASE `ebill`;
CREATE DATABASE IF NOT EXISTS `ebill` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ebill`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--
-- Creation: Aug 12, 2014 at 11:27 AM
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(14) NOT NULL PRIMARY KEY,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--
-- Creation: Aug 12, 2014 at 11:27 AM
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `id` int(14) NOT NULL PRIMARY KEY,
  `aid` int(14) NOT NULL,
  `uid` int(14) NOT NULL,
  `units` decimal(10,2) NOT NULL,
  `amount` int(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `bdate` date NOT NULL;
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--
-- Creation: Aug 12, 2014 at 11:27 AM
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(14) NOT NULL PRIMARY KEY,
  `bid` int(14) NOT NULL ,
  `payable` int(10) NOT NULL,
  `date` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--
-- Creation: Aug 12, 2014 at 11:26 AM
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(14) NOT NULL PRIMARY KEY,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` int(14) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--
-- Creation: Aug 12, 2014 at 11:27 AM
--

DROP TABLE IF EXISTS `complaint`;
CREATE TABLE IF NOT EXISTS `complaint` (
  `id` int(14) NOT NULL PRIMARY KEY,
  `uid` int(14) NOT NULL,
  `aid` int(14) NOT NULL,
  `message` varchar(140) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--
-- Creation: Aug 12, 2014 at 11:27 AM
--

DROP TABLE IF EXISTS `discussion`;
CREATE TABLE IF NOT EXISTS `discussion` (
  `id` int(11) NOT NULL PRIMARY KEY,  
  `uid` int(11) NOT NULL,
  `aid` int (11) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD  FOREIGN KEY (`aid`) REFERENCES `admin` (`aid`),
  ADD  FOREIGN KEY (`uid`) REFERENCES `user` (`id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD  FOREIGN KEY (`bid`) REFERENCES `bill` (`id`);

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD  FOREIGN KEY (`uid`) REFERENCES `user` (`uid`),
  ADD  FOREIGN KEY (`aid`) REFERENCES `admin` (`aid`);

--
-- Constraints for table `discussion`
--
ALTER TABLE `discussion`
  ADD  FOREIGN KEY (`uid`) REFERENCES `user` (`uid`),
  ADD  FOREIGN KEY (`aid`) REFERENCES `admin` (`aid`);
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
