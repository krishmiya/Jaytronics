-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Aug 13, 2016 at 05:12 AM
-- Server version: 10.0.26-MariaDB
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jaytronicsco_jaytronics`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `iId` int(11) NOT NULL AUTO_INCREMENT,
  `tId` int(11) NOT NULL DEFAULT '0',
  `itemCode` varchar(20) NOT NULL,
  `itemName` varchar(20) NOT NULL,
  `itemDescription` varchar(50) NOT NULL,
  `itemQnt` int(10) NOT NULL DEFAULT '0',
  `costPrice` decimal(2,0) NOT NULL DEFAULT '0',
  `sellingPrice` decimal(2,0) NOT NULL DEFAULT '0',
  `itemImage` varchar(200) NOT NULL DEFAULT 'NA',
  `currentDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`iId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `itemtype`
--

CREATE TABLE IF NOT EXISTS `itemtype` (
  `tId` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`tId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `itemtype`
--

INSERT INTO `itemtype` (`tId`, `description`) VALUES
(1, 'USB and Memory'),
(2, 'Lighting / LED'),
(3, 'Test and Measuring Equipment'),
(4, 'Passive Components'),
(5, 'Power supply'),
(6, 'Passive components / Resistors / Metal Film / 0.25 W'),
(7, 'Passive components / Resistors / Metal Film / 1 Ohm 0.5W'),
(8, 'Passive components / Resistors / Metal Film / 1 W'),
(9, 'Passive components / Resistors / Metal Film / 2 W'),
(10, 'Passive components / Resistors / Metal Film / 3 W'),
(11, 'Passive components / Resistors / Carbon Film / 0.25 W'),
(12, 'Passive components / Resistors / Carbon Film / 0.5 W'),
(13, 'Passive components / Resistors / Carbon Film / 1 W'),
(14, 'Passive components / Resistors / Carbon Film / 2 W'),
(15, 'Passive components / Resistors / Carbon Film / 3 W'),
(16, 'Passive components / Resistors / Carbon Film / 5 W'),
(17, 'Passive components / Resistors / wire wound / '),
(18, 'Passive components / Thermistors / NTC'),
(19, 'Passive components / Thermistors / PTC'),
(20, 'Passive components / Inductors / 0.25 W'),
(21, 'Passive components / Inductors / 0.5 W'),
(22, 'Passive components / Inductors / 1 W'),
(23, 'Passive components / Variable Resistors'),
(24, 'Tools'),
(25, 'Passive components / Capacitors'),
(26, 'Passive components / Capacitors/ 1nF ( 0.001 uF ) 100VDC Polyester Capacitor'),
(27, 'Passive Components / Capacitors / 1.2nF 100VDC Polyester Capacitor'),
(28, 'Passive Components / Capacitors / 1.5nF 100VDC Polyester Capacitor');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `sId` int(11) NOT NULL AUTO_INCREMENT,
  `customerName` varchar(100) NOT NULL DEFAULT 'NA',
  `currentDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `summary`
--

CREATE TABLE IF NOT EXISTS `summary` (
  `sumId` int(11) NOT NULL AUTO_INCREMENT,
  `sId` int(11) NOT NULL,
  `iId` int(11) NOT NULL,
  `qnt` int(11) NOT NULL,
  `currentDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sumId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uId` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(35) NOT NULL,
  `lastName` varchar(35) NOT NULL,
  `email` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `userType` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`uId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uId`, `firstName`, `lastName`, `email`, `username`, `password`, `userType`, `status`) VALUES
(1, 'Krishan', 'Dawatagolla', 'nimesh.dawatagolla@gmail.com', 'admin', '202cb962ac59075b964b07152d234b70', 0, 1),
(2, 'Jay', 'Tronics', 'ashoka@jaytronics.co.nz', 'ashoka', '202cb962ac59075b964b07152d234b70', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
