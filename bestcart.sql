-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 27, 2014 at 04:24 AM
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
CREATE DATABASE IF NOT EXISTS `bestcart` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bestcart`;

-- --------------------------------------------------------

--
-- Table structure for table `biloinventory`
--

CREATE TABLE IF NOT EXISTS `biloinventory` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biloinventory`
--

INSERT INTO `biloinventory` (`id`, `name`, `price`) VALUES
(10, 'apple', 2.29),
(2, 'catfish', 4.99),
(13, 'celery', 15.8),
(11, 'chicken', 1.59),
(12, 'lettuce', 1.29),
(9, 'lobster', 13.99),
(5, 'mussel', 6.29),
(4, 'oyster', 7.29),
(1, 'salmon', 6.99),
(6, 'scallop', 8.99),
(8, 'shrimp', 10.99),
(7, 'swardfish', 5.99),
(3, 'tuna', 12.99);

-- --------------------------------------------------------

--
-- Table structure for table `foodlioninventory`
--

CREATE TABLE IF NOT EXISTS `foodlioninventory` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodlioninventory`
--

INSERT INTO `foodlioninventory` (`id`, `name`, `price`) VALUES
(1, 'apple', 3.38),
(2, 'catfish', 5.59),
(13, 'celery', 12.89),
(11, 'chicken', 2.58),
(12, 'lettuce', 1.49),
(9, 'lobster', 13.29),
(5, 'mussel', 7.19),
(4, 'oyster', 7.29),
(1, 'salmon', 6.49),
(6, 'scallop', 8.29),
(8, 'shrimp', 10.29),
(7, 'swardfish', 6.29),
(3, 'tuna', 12.99);

-- --------------------------------------------------------

--
-- Table structure for table `publixinventory`
--

CREATE TABLE IF NOT EXISTS `publixinventory` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publixinventory`
--

INSERT INTO `publixinventory` (`id`, `name`, `price`) VALUES
(10, 'apple', 2.69),
(2, 'catfish', 4.79),
(13, 'celery', 11.89),
(11, 'chicken', 3.89),
(12, 'lettuce', 1.89),
(9, 'lobster', 13.49),
(5, 'mussel', 6.79),
(4, 'oyster', 7.29),
(1, 'salmon', 6.29),
(6, 'scallop', 8.49),
(8, 'shrimp', 9.99),
(7, 'swardfish', 6.29),
(3, 'tuna', 13.29);

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
(2, 'catfish', 'themes/assets/images/catfish.jpg', 'seafood'),
(15, 'celery', 'themes/assets/images/celery.jpg', 'fruit'),
(11, 'chicken', 'themes/assets/images/chicken.jpg', 'meat'),
(14, 'lettuce', 'themes/assets/images/lettuce.jpg', 'fruit'),
(9, 'lobster', 'themes/assets/images/lobster.jpg', 'seafood'),
(5, 'mussel', 'themes/assets/images/mussel.jpg', 'seafood'),
(4, 'oyster', 'themes/assets/images/oyster.jpg', 'seafood'),
(1, 'salmon', 'themes/assets/images/salmon.jpg', 'seafood'),
(6, 'scallop', 'themes/assets/images/scallop.jpg ', 'seafood'),
(8, 'shrimp', 'themes/assets/images/shrimp.jpg', 'seafood'),
(7, 'swardfish', 'themes/assets/images/swardfish.jpg', 'seafood'),
(3, 'tuna', 'themes/assets/images/tuna.jpg', 'seafood');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `biloinventory`
--
ALTER TABLE `biloinventory`
  ADD CONSTRAINT `biloinventory_ibfk_1` FOREIGN KEY (`name`) REFERENCES `wholeitemsset` (`name`);

--
-- Constraints for table `foodlioninventory`
--
ALTER TABLE `foodlioninventory`
  ADD CONSTRAINT `foodlioninventory_ibfk_1` FOREIGN KEY (`name`) REFERENCES `wholeitemsset` (`name`);

--
-- Constraints for table `publixinventory`
--
ALTER TABLE `publixinventory`
  ADD CONSTRAINT `publixinventory_ibfk_1` FOREIGN KEY (`name`) REFERENCES `wholeitemsset` (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
