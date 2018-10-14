-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2018 at 01:44 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oddpredic`
--
CREATE DATABASE IF NOT EXISTS `oddpredic` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `oddpredic`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `id` (`id`,`password`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, '', '', 'donprince4life44@gmail.com', '65bef44f9e7e5ba6f11519dfbbfe4a52');

-- --------------------------------------------------------

--
-- Table structure for table `category_tb`
--

CREATE TABLE IF NOT EXISTS `category_tb` (
  `Id_category` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `dataposted` date NOT NULL,
  PRIMARY KEY (`Id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_tb`
--

INSERT INTO `category_tb` (`Id_category`, `category`, `dataposted`) VALUES
(13, 'Home', '2018-09-06'),
(14, 'Away', '2018-09-06'),
(15, 'BTS', '2018-09-06'),
(16, 'Over 2.5', '2018-09-06'),
(17, 'Over1.5', '2018-09-06'),
(18, 'Over3.5', '2018-09-06'),
(19, '1X', '2018-09-06'),
(20, '2X', '2018-09-06'),
(21, 'Under1.5', '2018-09-06'),
(22, 'Under2.5', '2018-09-06'),
(23, 'Under3.5', '2018-09-06');

-- --------------------------------------------------------

--
-- Table structure for table `country_tb`
--

CREATE TABLE IF NOT EXISTS `country_tb` (
  `Id_country` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(50) NOT NULL,
  `dateposted` date NOT NULL,
  PRIMARY KEY (`Id_country`,`country`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `country_tb`
--

INSERT INTO `country_tb` (`Id_country`, `country`, `dateposted`) VALUES
(1, 'England', '2018-09-26'),
(5, 'Portugal', '2018-09-28'),
(6, 'Spain', '2018-09-28'),
(7, 'Italy', '2018-09-28'),
(8, 'Germany', '2018-09-28'),
(9, 'France', '2018-09-28'),
(10, 'Netherlands', '2018-09-28'),
(11, 'Scotland', '2018-09-28'),
(12, 'Belgium', '2018-09-28'),
(13, 'International Clubs', '2018-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `freetips_tb`
--

CREATE TABLE IF NOT EXISTS `freetips_tb` (
  `freetip_id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(50) NOT NULL,
  `dataposted` date NOT NULL,
  `club_names` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`club_names`),
  UNIQUE KEY `freetip_id` (`freetip_id`,`country`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `freetips_tb`
--

INSERT INTO `freetips_tb` (`freetip_id`, `country`, `dataposted`, `club_names`, `category`) VALUES
(9, 'Portugal', '2018-09-28', 'FC Porto Vs CD Tondela', 'Home'),
(2, 'England', '2018-09-17', 'Fulhum Vs West Hum', 'Ov 1.5'),
(1, 'England', '2018-09-17', 'Hall City Vs Man United', 'Away'),
(10, 'Germany', '2018-09-28', 'Hertha BSC Vs Bayern Munich', 'Away'),
(12, 'Spain', '2018-09-28', 'Rayo Vallecano Vs Espanyol', '2X'),
(11, 'France', '2018-09-28', 'Saint Etienne vs Monaco', '1X'),
(8, 'England', '2018-09-28', 'Sheffield Weds Vs Leeds Utd', '1X'),
(4, 'England', '2018-09-27', 'Watford Vs Man United', 'Away');

-- --------------------------------------------------------

--
-- Table structure for table `mostpredict_tb`
--

CREATE TABLE IF NOT EXISTS `mostpredict_tb` (
  `id_mostpredict` int(11) NOT NULL AUTO_INCREMENT,
  `dateposted` date NOT NULL,
  `country` varchar(50) NOT NULL,
  `league` varchar(50) NOT NULL,
  `club_names` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`id_mostpredict`,`dateposted`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mostpredict_tb`
--

INSERT INTO `mostpredict_tb` (`id_mostpredict`, `dateposted`, `country`, `league`, `club_names`, `category`) VALUES
(1, '2018-10-08', 'England', 'EPL', 'Chelsea Vs Man Utd', 'Under2.5');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
