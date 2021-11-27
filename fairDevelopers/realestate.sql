-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 04:14 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--
CREATE DATABASE IF NOT EXISTS `realestate` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `realestate`;

-- --------------------------------------------------------

--
-- Table structure for table `realestate_credentials`
--

DROP TABLE IF EXISTS `realestate_credentials`;
CREATE TABLE IF NOT EXISTS `realestate_credentials` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `realestate_credentials`
--

INSERT INTO `realestate_credentials` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'rusk', 'rusk ', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `realestate_plots`
--

DROP TABLE IF EXISTS `realestate_plots`;
CREATE TABLE IF NOT EXISTS `realestate_plots` (
  `id` bigint(100) NOT NULL AUTO_INCREMENT,
  `plot_name` varchar(1000) NOT NULL,
  `area` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `locality` varchar(1000) NOT NULL,
  `map` varchar(1000) NOT NULL,
  `configuration` varchar(1000) NOT NULL,
  `facing` varchar(1000) NOT NULL,
  `transaction` varchar(1000) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `realestate_plots`
--

INSERT INTO `realestate_plots` (`id`, `plot_name`, `area`, `price`, `status`, `locality`, `map`, `configuration`, `facing`, `transaction`, `is_deleted`) VALUES
(11, 'Cottage', 'Secunderabad', '16000000', 'Available', 'Gachibowli', 'something', 'NO', 'North', '0', 1),
(13, 'Cottage', 'Hyd', '16000000', 'Available', 'Gachibowli', 'something', 'hyd', 'East', '1', 1),
(14, 'aler', 'aler', '392390', 'Available', 'aler', 'something', 'NA', 'west', '0', 1),
(15, 'aler', 'aler', '392390', 'Available', 'aler', 'something', 'NA', 'west', '0', 1),
(16, 'Abc', 'cde', '453543', 'na', 'na', 'na', 'na', 'east', 'na', 1),
(17, 'alet', 'sdsa', 'asdaa', 'adsa', 'asd', 'ad', 'asd', 'ad', 'ad', 1),
(18, 'asd', 'dsa', 'dsfds', 'asd', 'asdf', 'asd', 'asdsa', 'asdas', 'asdsa', 1),
(19, 'sdfaf', 'asdf', 'asdf', 'sdfad', 'asdfs', 'dsfa', 'asdfsad', 'asdfsad', 'asdfa', 1),
(20, 'sdfasdg', 'asdfsad', 'asdf', 'asdf', 'asdf', 'asdf', 'asdfasd', 'asdf', 'asdfa', 1),
(21, 'sadfa', 'asdfa', 'asdf', 'asdf', 'asdf', 'asdf', 'asfdasdf', 'asdf', 'asdf', 1),
(22, 'asda', 'asdas', 'adsa', 'asda', 'asdas', 'asda', 'asda', 'asdsa', 'asdsa', 1),
(23, 'asda', 'asdsa', 'asdas', 'asdsa', 'asdas', 'asda', 'asdas', 'asdsa', 'asdasd', 1),
(24, 'asdas', 'asdas', 'asdas', 'asdas', 'asdsaa', 'asd', 'asdsa', 'asd', 'asd', 1),
(25, 'dfs', 'sfd', 'sfdsd', 'sdfs', 'sfds', 'sdf', 'sdf', 'sfdsd', 'sfd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `realestate_plots_images`
--

DROP TABLE IF EXISTS `realestate_plots_images`;
CREATE TABLE IF NOT EXISTS `realestate_plots_images` (
  `id` bigint(100) NOT NULL AUTO_INCREMENT,
  `plot_name` varchar(1000) NOT NULL,
  `area` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `locality` varchar(1000) NOT NULL,
  `map` varchar(1000) NOT NULL,
  `configuration` varchar(1000) NOT NULL,
  `facing` varchar(1000) NOT NULL,
  `transaction` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `realestate_plots_images`
--

INSERT INTO `realestate_plots_images` (`id`, `plot_name`, `area`, `price`, `status`, `locality`, `map`, `configuration`, `facing`, `transaction`, `image`, `is_deleted`) VALUES
(12, 'Limitless', 'Secunderabad', '16000000', 'Not Available', 'Secunderabd', 'something', 'NO', 'North', '0', 'p3.jpg', 1),
(11, 'Cottage', 'Secunderabad', '16000000', 'Available', 'Gachibowli', 'something', 'NO', 'North', '0', 'p1.jpg', 1),
(13, 'Sky High', 'Hyd', '16000000', 'Available', 'Gachibowli', 'something', 'dsf', 'North', 'No', 'p7.jpg', 1),
(14, 'CNU', 'CNU', 'CNU', 'CNU', 'CNU', 'CNU', 'CNU', 'CNU', 'CNU', 'p4.jpg', 1),
(15, 'L.B Nagar', 'Hythnagar', '34324', 'Available', 'Hythnager', 'something', 'NO', 'North', '987', 'p2.jpg', 1),
(16, 'Aepoor', 'Chityala', '3999332', 'Available', 'Nalgonda', 'something', 'NO', 'East', '0', 'p6.jpg', 1),
(17, 'aler', 'aler', '907999', 'NA', 'railways station', 'something', 'nan', 'east', 'np', 'team2.jpg', 1),
(18, 'aler', 'aler', '907999', 'NA', 'railways station', 'something', 'nan', 'east', 'np', 'single.jpg', 1),
(19, 'aler', 'aler', '907999', 'NA', 'railways station', 'something', 'nan', 'east', 'np', 'stats.jpg', 1),
(20, 'aler', 'aler', '907999', 'NA', 'railways station', 'something', 'nan', 'east', 'np', 'banner.jpg', 1),
(21, 'aler', 'aler', '907999', 'NA', 'railways station', 'something', 'nan', 'east', 'np', 'single.jpg', 1),
(22, 'gachibowli', 'secunderabad', '4959839', 'NA', 'railways station', 'something', 'nan', 'east', 'np', 'l5.jpg', 1),
(23, 'aler', 'secunderabad', '4959839', 'NA', 'railways station', 'something', 'nan', 'east', 'np', 'l2.jpg', 1),
(24, 'aler', 'secunderabad', '4959839', 'NA', 'railways station', 'something', 'nan', 'east', 'np', 'l4.jpg', 1),
(25, 'aepoor', 'chityala', '65988008', 'NA', 'railways station', 'something', 'nan', 'east', 'np', 'banner.jpg', 1),
(26, 'Noman', 'noman', '67767689', 'NA', 'railways station', 'something', 'nan', 'east', 'np', 'l1.jpg', 1),
(27, 'caleb', 'caleb', '983724', 'NA', 'railways station', 'something', 'nan', 'east', 'np', 'l3.jpg', 1),
(28, 'Rated', 'Rated', '7326846', 'NA', 'railways station', 'something', 'nan', 'east', 'np', 'stats.jpg', 1),
(29, 'choosen', 'choosen', '907999', 'NA', 'railways station', 'something', 'nan', 'east', 'np', 'p8.jpg', 1),
(30, 'Gachibowli', 'HYD', '2181279', 'NA', 'HYD', 'NA', 'no', 'West', 'NA', 'a1.jpg', 1),
(31, 'Gachibowli', 'HYD', '2181279', 'NA', 'HYD', 'NA', 'no', 'West', 'NA', 'p1.jpg', 1),
(32, 'Gachibowli', 'HYD', '2181279', 'NA', 'HYD', 'NA', 'no', 'West', 'NA', 'p2.jpg', 1),
(33, 'Gachibowli', 'HYD', '2181279', 'NA', 'HYD', 'NA', 'no', 'West', 'NA', 'p3.jpg', 1),
(34, 'Gachibowli', 'HYD', '2181279', 'NA', 'HYD', 'NA', 'no', 'West', 'NA', 'p5.jpg', 1),
(35, 'Gachibowli', 'HYD', '2181279', 'NA', 'HYD', 'NA', 'no', 'West', 'NA', 'p4.jpg', 1),
(36, 'ad', 'asd', 'adsa', 'asd', 'asds', 'sad', 'ads', 'asd', 'asd', 'a7.jpg', 0),
(37, 'ad', 'asd', 'asd', 'asd', 'sad', 'sad', 'asdsd', 'asd', 'asdsa', 'a8.jpg', 0),
(38, 'Gachibowli', 'HYD', '2181279', 'NA', 'HYD', 'NA', 'no', 'West', 'asd', 'ab.jpg', 1),
(39, 'aepoor', 'sec', '4355435', 'NA', 'HYD', 'NA', 'no', 'West', 'NA', 'a6.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `type` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
