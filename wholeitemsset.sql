-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 22, 2014 at 08:20 AM
-- Server version: 5.5.35
-- PHP Version: 5.3.10-1ubuntu3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
(10, 'apple', 'themes/assets/images/apple.jpg', 'fruit'),
(19, 'beef', 'themes/assets/images/beef.jpg', 'meat'),
(2, 'catfish', 'themes/assets/images/catfish.jpg', 'seafood'),
(15, 'celery', 'themes/assets/images/celery.jpg', 'fruit'),
(20, 'chicken', 'themes/assets/images/chicken.jpg', 'meat'),
(13, 'coriander', 'themes/assets/images/courinder.jpg', 'fruit'),
(11, 'grape', 'themes/assets/images/grape.jpg', 'fruit'),
(14, 'lettuce', 'themes/assets/images/lettuce.jpg', 'fruit'),
(9, 'lobster', 'themes/assets/images/lobster.jpg', 'seafood'),
(5, 'mussel', 'themes/assets/images/mussel.jpg', 'seafood'),
(16, 'onion', 'themes/assets/images/onion.jpg', 'fruit'),
(17, 'orange', 'themes/assets/images/orange.jpg', 'fruit'),
(4, 'oyster', 'themes/assets/images/oyster.jpg', 'seafood'),
(18, 'pomegranate', 'themes/assets/images/pomegranate.jpg', 'fruit'),
(21, 'pork', 'themes/assets/images/pork.jpg', 'meat'),
(1, 'salmon', 'themes/assets/images/salmon.jpg', 'seafood'),
(6, 'scallop', 'themes/assets/images/scallop.jpg ', 'seafood'),
(8, 'shrimp', 'themes/assets/images/shrimp.jpg', 'seafood'),
(7, 'swardfish', 'themes/assets/images/swardfish.jpg', 'seafood'),
(12, 'tomato', 'themes/assets/images/tomato.jpg', 'fruit'),
(3, 'tuna', 'themes/assets/images/tuna.jpg', 'seafood');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
