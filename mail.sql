-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2015 at 09:15 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gmail`
--

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `ID` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `To` varchar(30) NOT NULL,
  `From` varchar(30) NOT NULL,
  `Subject` varchar(50) DEFAULT NULL,
  `Body` varchar(500) DEFAULT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`ID`, `To`, `From`, `Subject`, `Body`, `Date`, `Time`) VALUES
(82, 'faryal@gmail.com', 'zainab@gmail.com', 'Hello', 'Just checking my mail', '2015-05-25', '17:29:03'),
(83, 'zainab@gmail.com', 'bulletproof5000', 'Hi1', 'Hello... Checkin my mail', '2015-05-25', '17:44:30'),
(84, 'faryal@gmail.com', 'zainab@gmail.com', 'Problem', 'checking the send page\r\n', '2015-05-25', '18:29:58'),
(85, 'faryal@gmail.com', 'zainab@gmail.com', 'Problem', 'checking the send page\r\n', '2015-05-25', '18:30:51'),
(86, 'zainab@gmail.com', 'faryal@gmail.com', ':P', 'This is a test for mail...', '2015-05-25', '20:49:43'),
(87, 'faryal@gmail.com', 'bilal@gmail.com', 'Sorry', 'I am an idiot bro. :P', '2015-05-25', '21:42:41'),
(88, 'faryal@gmail.com', 'aymen@gmail.com', '-_-', 'I am GRU :D', '2015-05-31', '04:21:43'),
(89, 'faryal@gmail.com', 'saad@gmail.com', '-_-', 'I am a very big grasshopper :D', '2015-05-31', '04:25:02'),
(90, 'saad@gmail.com', 'faryal@gmail.com', ':)', 'I knew it from the very beginning! :P :P :P', '2015-05-31', '04:27:20'),
(91, 'bulletproof5000', 'haris@gmail.com', '1111', 'sdsbgghfhfnhgngfnfbfjthgmgmjg', '2015-06-25', '03:03:14');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
