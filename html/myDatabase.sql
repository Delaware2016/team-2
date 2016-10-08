-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 08, 2016 at 10:43 AM
-- Server version: 5.5.52-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `Attendees`
--

CREATE TABLE IF NOT EXISTS `Attendees` (
  `personID` int(11) NOT NULL,
  `eventID` int(11) NOT NULL,
  PRIMARY KEY (`personID`,`eventID`),
  KEY `Attendee-EventID_idx` (`eventID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Attendees`
--

INSERT INTO `Attendees` (`personID`, `eventID`) VALUES
(1, 3001);

-- --------------------------------------------------------

--
-- Table structure for table `Event`
--

CREATE TABLE IF NOT EXISTS `Event` (
  `orgID` int(11) NOT NULL,
  `eventID` int(11) NOT NULL,
  `eventName` varchar(255) NOT NULL,
  `eventTime` varchar(255) NOT NULL,
  `eventLocation` varchar(255) NOT NULL,
  `eventType` varchar(255) NOT NULL,
  PRIMARY KEY (`orgID`,`eventID`),
  UNIQUE KEY `eventID_UNIQUE` (`eventID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Event`
--

INSERT INTO `Event` (`orgID`, `eventID`, `eventName`, `eventTime`, `eventLocation`, `eventType`) VALUES
(3, 3001, 'TestEvent1', '5:30 P.M', 'Newark, DE', 'Networking');

-- --------------------------------------------------------

--
-- Table structure for table `Organization`
--

CREATE TABLE IF NOT EXISTS `Organization` (
  `orgID` int(11) NOT NULL,
  `orgName` varchar(255) NOT NULL,
  `orgAddress` varchar(255) NOT NULL,
  `orgZip` varchar(255) NOT NULL,
  `orgType` varchar(255) NOT NULL,
  PRIMARY KEY (`orgID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Organization`
--

INSERT INTO `Organization` (`orgID`, `orgName`, `orgAddress`, `orgZip`, `orgType`) VALUES
(3, 'TestOrg', '123  E. Main St. Newark, DE', '19711', 'Restaurant');

-- --------------------------------------------------------

--
-- Table structure for table `Person`
--

CREATE TABLE IF NOT EXISTS `Person` (
  `userID` int(11) NOT NULL,
  `locationZip` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Person`
--

INSERT INTO `Person` (`userID`, `locationZip`, `age`, `name`) VALUES
(1, '111111', 25, 'Jordan'),
(2, '222222', 35, 'John');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `userID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Numberical Account #',
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `userType` int(11) NOT NULL COMMENT '0 = Regular User\n1 = Business Owner',
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`userID`, `password`, `email`, `userType`) VALUES
(1, 'password1', 'test@test.com', 0),
(2, 'password2', 'test2@test.com', 0),
(3, 'password3', 'test3@test.com', 1),
(6, 'fasd', 'david@david.com', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Attendees`
--
ALTER TABLE `Attendees`
  ADD CONSTRAINT `Attendee-PersonID` FOREIGN KEY (`personID`) REFERENCES `Person` (`userID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Attendee-EventID` FOREIGN KEY (`eventID`) REFERENCES `Event` (`eventID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Event`
--
ALTER TABLE `Event`
  ADD CONSTRAINT `Event-OrgID` FOREIGN KEY (`orgID`) REFERENCES `Organization` (`orgID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Organization`
--
ALTER TABLE `Organization`
  ADD CONSTRAINT `Org-UserID` FOREIGN KEY (`orgID`) REFERENCES `User` (`userID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Person`
--
ALTER TABLE `Person`
  ADD CONSTRAINT `Person-UserID` FOREIGN KEY (`userID`) REFERENCES `User` (`userID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
