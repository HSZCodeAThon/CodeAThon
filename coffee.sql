-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 20, 2014 at 01:48 AM
-- Server version: 5.5.23
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coffeedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `coffee`
--

CREATE TABLE IF NOT EXISTS `coffee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `family` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `parents` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `review` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `coffee`
--

INSERT INTO `coffee` (`id`, `name`, `family`, `sex`, `parents`, `country`, `image`, `review`) VALUES
(1, 'Lily', 'Lily Family', 'Female', 'Father: Chuan Chuan\r\nMother: Qing Qing', 'Chengdu, China', 'Images/Coffee/lily.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lectus urna, viverra in luctus quis, ullamcorper quis lorem. Vestibulum vulputate pellentesque velit, et placerat dolor pulvinar in. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed sit amet velit at purus elementum dapibus. Nulla dapibus auctor vulputate. Sed cursus nisi at mauris mollis semper. Vestibulum consectetur cursus dui sit amet pretium. '),
(2, 'Bai Yun', 'Baiyun Family', 'Female', 'Father: Pan Pan\r\nMother: Dong Dong', 'San Diego, USA', 'Images/coffee/baiyun.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lectus urna, viverra in luctus quis, ullamcorper quis lorem. Vestibulum vulputate pellentesque velit, et placerat dolor pulvinar in. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed sit amet velit at purus elementum dapibus. Nulla dapibus auctor vulputate. Sed cursus nisi at mauris mollis semper. Vestibulum consectetur cursus dui sit amet pretium. '),
(3, 'Xiao Liwu', 'Baiyun Family', 'Male', 'Father: Gao Gao\r\nMother: Bai Yun', 'San Diego, USA', 'Images/coffee/xiaoliwu.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lectus urna, viverra in luctus quis, ullamcorper quis lorem. Vestibulum vulputate pellentesque velit, et placerat dolor pulvinar in. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed sit amet velit at purus elementum dapibus. Nulla dapibus auctor vulputate. Sed cursus nisi at mauris mollis semper. Vestibulum consectetur cursus dui sit amet pretium. '),
(4, 'Yun Zi', 'Baiyun Family', 'Male', 'Father: Gao Gao\r\nMother: Bai Yun', 'Du Jiangyan, China', 'Images/Coffee/yunzi.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lectus urna, viverra in luctus quis, ullamcorper quis lorem. Vestibulum vulputate pellentesque velit, et placerat dolor pulvinar in. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed sit amet velit at purus elementum dapibus. Nulla dapibus auctor vulputate. Sed cursus nisi at mauris mollis semper. Vestibulum consectetur cursus dui sit amet pretium. '),
(5, 'Oreo', 'Lily Family', 'Male', 'Father: Yong Yong\r\nMother: Lily', 'Chengdu, China', 'Images/Coffee/oreo.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lectus urna, viverra in luctus quis, ullamcorper quis lorem. Vestibulum vulputate pellentesque velit, et placerat dolor pulvinar in. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed sit amet velit at purus elementum dapibus. Nulla dapibus auctor vulputate. Sed cursus nisi at mauris mollis semper. Vestibulum consectetur cursus dui sit amet pretium. '),
(6, 'Wen Li', 'Lily Family', 'Female', 'Father: Ping Ping\r\nMother: Lily', 'Guangzhou, China', 'Images/Coffee/wenli.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lectus urna, viverra in luctus quis, ullamcorper quis lorem. Vestibulum vulputate pellentesque velit, et placerat dolor pulvinar in. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed sit amet velit at purus elementum dapibus. Nulla dapibus auctor vulputate. Sed cursus nisi at mauris mollis semper. Vestibulum consectetur cursus dui sit amet pretium. '),
(7, 'Ya Li', 'Lily Family', 'Female', 'Father: Ping Ping\r\nMother: Lily', 'Guangzhou, China', 'Images/Coffee/yali.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lectus urna, viverra in luctus quis, ullamcorper quis lorem. Vestibulum vulputate pellentesque velit, et placerat dolor pulvinar in. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed sit amet velit at purus elementum dapibus. Nulla dapibus auctor vulputate. Sed cursus nisi at mauris mollis semper. Vestibulum consectetur cursus dui sit amet pretium. '),
(8, 'Ai Li', 'Lily Family', 'Female', 'Father: Qiu Bin\r\nMother: Lily', 'Chengdu, China', 'Images/Coffee/aili.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lectus urna, viverra in luctus quis, ullamcorper quis lorem. Vestibulum vulputate pellentesque velit, et placerat dolor pulvinar in. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed sit amet velit at purus elementum dapibus. Nulla dapibus auctor vulputate. Sed cursus nisi at mauris mollis semper. Vestibulum consectetur cursus dui sit amet pretium. '),
(11, 'Hua Mei', 'Baiyun Family', 'Female', 'Father: Shi Shi Mother: Bai Yun', 'Du Jiangyan, China', 'Images/Coffee/huamei.jpg', 'testtesttesttest');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
