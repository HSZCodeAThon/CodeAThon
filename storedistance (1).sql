-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 21, 2014 at 11:19 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bestcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `storedistance`
--

CREATE TABLE IF NOT EXISTS `storedistance` (
  `storeid` int(30) NOT NULL DEFAULT '0',
  `storename` varchar(50) DEFAULT NULL,
  `distance` int(100) NOT NULL DEFAULT '0',
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`storeid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storedistance`
--

INSERT INTO `storedistance` (`storeid`, `storename`, `distance`, `image`) VALUES
(1, 'Publix', 5, 'Images\\bestcart\\publix.png'),
(2, 'Food Lion', 10, 'Images\\bestcart\\foodlion.jpg'),
(3, 'Bi-Lo', 10, 'Images\\bestcart\\bi-lo.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
