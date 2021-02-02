-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 18, 2021 at 04:08 PM
-- Server version: 5.7.31
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `allview`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `allview` ()  NO SQL
select P.project_id,P.project_name,P.project_cost,P.project_materials,M.cm_id,M.cm_name,E.ce_id,E.ce_name,A.ae_id,A.ae_name,C.c_id,C.c_name
from customer C,project P,construction_manager M,civil_engineer E,architectural_engineer A
where P.project_id=C.project_id and P.project_id=M.project_id and P.project_id and P.project_id=E.project_id and P.project_id=A.project_id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `architectural_engineer`
--

DROP TABLE IF EXISTS `architectural_engineer`;
CREATE TABLE IF NOT EXISTS `architectural_engineer` (
  `ae_id` varchar(50) NOT NULL,
  `ae_name` varchar(50) DEFAULT NULL,
  `project_id` varchar(50) DEFAULT NULL,
  `ae_experience` varchar(50) DEFAULT NULL,
  `ae_salary` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ae_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `architectural_engineer`
--

INSERT INTO `architectural_engineer` (`ae_id`, `ae_name`, `project_id`, `ae_experience`, `ae_salary`) VALUES
('1001', 'sddd', '1', '5', '78555'),
('1002', 'shivaranjan dodavad', '2', '4', '450000'),
('1003', 'shivaranjan dodavad', '3', '5', '450000454'),
('1004', 'shiv', '4', '5', '4555505'),
('1005', 'shivaranjan dodavad', '5', '4', '4555555');

-- --------------------------------------------------------

--
-- Table structure for table `civil_engineer`
--

DROP TABLE IF EXISTS `civil_engineer`;
CREATE TABLE IF NOT EXISTS `civil_engineer` (
  `ce_id` varchar(50) NOT NULL,
  `ce_name` varchar(50) DEFAULT NULL,
  `project_id` varchar(50) DEFAULT NULL,
  `ce_experience` varchar(50) DEFAULT NULL,
  `ce_salary` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ce_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `civil_engineer`
--

INSERT INTO `civil_engineer` (`ce_id`, `ce_name`, `project_id`, `ce_experience`, `ce_salary`) VALUES
('10000003s', 'shivaranjan dodavad', '4', '5', '450000'),
('CE100', 'Sam', '2', '5', '450000'),
('89898798897987', 'lnkjubiob', '534564', '5', '450000'),
('100000084878745wsed', 'shivaranjan dodavad', '5', '5', '450000'),
('10000003sd', 'shivaranjan dodavad', '3', '5', '450000'),
('10000003swa', 'shivaranjan dodavad', '1', '5', '450000');

-- --------------------------------------------------------

--
-- Table structure for table `construction_manager`
--

DROP TABLE IF EXISTS `construction_manager`;
CREATE TABLE IF NOT EXISTS `construction_manager` (
  `cm_id` varchar(50) NOT NULL,
  `cm_name` varchar(50) DEFAULT NULL,
  `project_id` varchar(50) DEFAULT NULL,
  `cm_experience` varchar(50) DEFAULT NULL,
  `cm_salary` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cm_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `construction_manager`
--

INSERT INTO `construction_manager` (`cm_id`, `cm_name`, `project_id`, `cm_experience`, `cm_salary`) VALUES
('123', 'sg', 'p13', '3', '34500'),
('10003', 'shoaib', '2', '5', '548548545'),
('10002', 'ram', '5', '5', '548548545'),
('CM001', 'shiv', '1', '5', '450000454'),
('CM002', 'shiv', '5', '5', '450000454'),
('654654', 'dgjn', '534564', '5', '665');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `c_id` varchar(50) NOT NULL,
  `c_name` varchar(50) DEFAULT NULL,
  `project_id` varchar(50) DEFAULT NULL,
  `c_salary` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_name`, `project_id`, `c_salary`) VALUES
('10000065', 'shib', '5', '4500000'),
('1000005', 'shib', '1', '4500000'),
('1000001', 'shib', '4', '4500000'),
('1000', 'shib', '2', '4500000'),
('1000000', 'shib', '3', '4500000');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `uname` varchar(30) NOT NULL,
  `pass` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `pass`) VALUES
('shiv', 1234),
('shiv', 1234),
('shiv', 1234),
('sss', 87987);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `project_id` varchar(50) NOT NULL,
  `project_name` varchar(50) DEFAULT NULL,
  `project_cost` varchar(50) DEFAULT NULL,
  `project_materials` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `project_cost`, `project_materials`) VALUES
('4', 'Build Belagvai', '4500000', 'mud,steel,stone,cement'),
('3', 'Build Belagvai', '4500000', 'mud,steel,stone,cement'),
('2', 'Build Bangalore', '4500000', 'mud,steel,stone,cement'),
('1', 'Road Construction', '450000', 'mud,steel,stone,cement');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
