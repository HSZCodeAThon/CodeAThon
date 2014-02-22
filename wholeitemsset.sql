-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 22, 2014 at 02:03 AM
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
-- Table structure for table `wholeitemsset`
--

CREATE TABLE IF NOT EXISTS `wholeitemsset` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wholeitemsset`
--

INSERT INTO `wholeitemsset` (`id`, `name`, `image`, `category`) VALUES
(6, 'scallop', 'themes/assets/images/scallop.jpg ', 'seafood'),
(2, 'catfish', 'themes/assets/images/catfish.jpg', 'seafood'),
(9, 'lobster', 'themes/assets/images/lobster.jpg', 'seafood'),
(5, 'mussel', 'themes/assets/images/mussel.jpg', 'seafood'),
(4, 'oyster', 'themes/assets/images/oyster.jpg', 'seafood'),
(1, 'salmon', 'themes/assets/images/salmon.jpg', 'seafood'),
(8, 'shrimp', 'themes/assets/images/shrimp.jpg', 'seafood'),
(7, 'swardfish', 'themes/assets/images/swardfish.jpg', 'seafood'),
(3, 'tuna', 'themes/assets/images/tuna.jpg', 'seafood');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
