-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2016 at 06:14 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `f-id` int(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `email` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `salary` int(10) NOT NULL,
  PRIMARY KEY (`f-id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`f-id`, `name`, `gender`, `email`, `designation`, `contact`, `salary`) VALUES
(1, 'Vineeta .P. Gejji', 'F', 'vineeta@gmail.com', 'H.O.D', '9876543210', 82584),
(2, 'Mr. A.N.Nazare', 'M', 'abhishekn@git.edu', 'Asst. Prof', '9786452312', 48745),
(3, 'Mr. H.S.Mogare', 'M', 'hrishikeshsm@git.edu', 'Asst. Prof', '9086547654', 48745),
(4, 'Mr. P.G.Mithare', 'M', 'pgmithari@git.edu', 'Asst. Prof', '9078563412', 48745),
(5, 'Mr. T.V.Kinkar', 'M', 'tvkinkar@git.edu', 'Asst. Prof', '9806745231', 48745),
(6, 'Mrs. Poonam Jadhav', 'F', 'jrpoonam@gmail.com', 'Lecturer', '9867567890', 30969),
(7, 'Mrs. Neha Dalal', 'F', 'nrdalal@git.edu', 'Lecturer', '9078563421', 30969),
(8, 'Dr. P.R.Hampiholi', 'M', 'prhampiholi@git.edu', 'Professor', '9087123456', 41292),
(9, 'Mr. Pavan Mitrogotri', 'M', 'pavanmitragotri@gmai', 'Lecturer', '9087652345', 30969),
(10, 'Mrs. Sunita Padmannavar', 'F', 'sspadmannavar@git.ed', 'Asst. Prof', '9089098765', 48745);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`username`, `password`) VALUES
('ash', 'root'),
('sonia', 'root1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
