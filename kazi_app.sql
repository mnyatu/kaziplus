-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 09, 2015 at 06:03 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kazi_app`
--
CREATE DATABASE IF NOT EXISTS `kazi_app` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kazi_app`;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `first_name`, `last_name`, `phone`, `email`, `password`) VALUES
(1, 'edwin', 'weru', '0704819183', 'eduguru.weru@gmail.com', 'a63eff073180a339819f8a12a163adf3bee502e9'),
(2, 'test', 'test', '0704819183', 'test@test.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(70) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`pid`, `project_name`, `start_date`, `end_date`) VALUES
(1, 'test project', '2015-05-20', '2015-06-16'),
(2, 'test project', '2015-05-20', '2015-06-16'),
(3, 'eduguru', '2010-09-01', '2010-01-01'),
(4, 'fjfjf', '2015-06-10', '2015-06-17');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `eid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `date_done` date NOT NULL,
  `task` text NOT NULL,
  `time_taken` int(11) DEFAULT NULL,
  `comments` text NOT NULL,
  PRIMARY KEY (`tid`),
  KEY `eid` (`eid`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`tid`, `eid`, `pid`, `date_done`, `task`, `time_taken`, `comments`) VALUES
(2, 1, 1, '2015-03-04', 'task test 1', NULL, 'lorem ipsum\r\n            '),
(3, 2, 3, '2015-03-04', 'ewin', NULL, '                \r\n       edwin u r awesome     '),
(4, 2, 3, '0000-00-00', 'edu', 3, '                \r\n       jgjgk     ');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `employee` (`eid`),
  ADD CONSTRAINT `tasks_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `projects` (`pid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
